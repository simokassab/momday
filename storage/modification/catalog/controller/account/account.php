<?php
class ControllerAccountAccount extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/account');

                        $data = array_merge($this->load->language('extension/module/marketplace'));
                              

		$this->document->setTitle($this->language->get('heading_title'));

                    /**
                    * Marketplace
                    */

                    $this->load->model('account/customerpartner');

                    $data['is_seller'] = 0;

                    $data['module_marketplace_status'] = $this->config->get('module_marketplace_status');

                    $data['marketplace_seller_mode'] = 0;

                    if ($this->config->get('module_marketplace_status') && $this->model_account_customerpartner->chkIsPartner()) {

                        $data['is_seller'] = 1;

                        $data['action'] = $this->url->link('account/account', '', true);

                        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {

                            if (isset($this->request->post['marketplace_seller_mode']) && $this->request->post['marketplace_seller_mode']) {
                                $this->session->data['marketplace_seller_mode'] = $this->request->post['marketplace_seller_mode'];
                            } else {
                                $this->session->data['marketplace_seller_mode'] = 0;
                            }
                        }

                        if(isset($this->session->data['marketplace_seller_mode'])){
                            $data['marketplace_seller_mode'] = $this->session->data['marketplace_seller_mode'];
                        } else {
                            $data['marketplace_seller_mode'] = 1;
                            $this->session->data['marketplace_seller_mode'] = 1;
                        }

                        $this->load->language('extension/module/marketplace');

                        $data['text_mode_seller'] = $this->language->get('text_mode_seller');

                        $data['text_mode_customer'] = $this->language->get('text_mode_customer');

                        $this->document->addScript("https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js");

                        $this->document->addStyle("https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css");
                    }
                    /**
                    * Marketplace
                    */
                

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		} 
		
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		
		$data['credit_cards'] = array();
		
		$files = glob(DIR_APPLICATION . 'controller/extension/credit_card/*.php');
		
		foreach ($files as $file) {
			$code = basename($file, '.php');
			
			if ($this->config->get('payment_' . $code . '_status') && $this->config->get('payment_' . $code . '_card')) {
				$this->load->language('extension/credit_card/' . $code, 'extension');

				$data['credit_cards'][] = array(
					'name' => $this->language->get('extension')->get('heading_title'),
					'href' => $this->url->link('extension/credit_card/' . $code, '', true)
				);
			}
		}
		
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		
		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', '', true);
		} else {
			$data['reward'] = '';
		}		
		
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);
		
		$this->load->model('account/customer');
		
		$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
		
		if (!$affiliate_info) {	
			$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
		} else {
			$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);
		}
		
		if ($affiliate_info) {		
			$data['tracking'] = $this->url->link('account/tracking', '', true);
		} else {
			$data['tracking'] = '';
		}
		

        // Marketplace codes start
        $this->load->model('account/customer');
        $this->load->model('account/customerpartner');
        $this->load->language('extension/module/marketplace');
        $data['chkIsPartner'] = $this->model_account_customerpartner->chkIsPartner();

        $data['text_marketplace'] = $this->language->get('text_marketplace');
        $data['text_becomePartner'] = $this->language->get('text_becomePartner');

        if($this->config->get('marketplace_account_menu_sequence')) {
            foreach ($this->config->get('marketplace_account_menu_sequence') as $key => $lang_value) {
                $mp_language[$key] = $this->language->get('text_'.$key);
            }
            $data['marketplace_account_menu_sequence'] = $mp_language;
        }

        $data['isMember'] = false;
        if($this->config->get('wk_seller_group_status')) {
            $data['wk_seller_group_status'] = true;
            $this->load->model('account/customer_group');
            $isMember = $this->model_account_customer_group->getSellerMembershipGroup($this->customer->getId());
            if($isMember) {
                $allowedAccountMenu = $this->model_account_customer_group->getaccountMenu($isMember['gid']);
                if($allowedAccountMenu['value']) {
                    $accountMenu = explode(',',$allowedAccountMenu['value']);
                    foreach ($accountMenu as $key => $menu) {
                        $aMenu = explode(':', $menu);
                        $data['marketplace_allowed_account_menu'][$aMenu[0]] = $aMenu[1];
                    }
                }
                $data['isMember'] = true;
            } else {
                $data['isMember'] = false;
            }
        }

        if ($this->model_account_customerpartner->chkIsPartner() && !$data['isMember'] && $this->config->get('wk_seller_group_status')) {

            $data['marketplace_allowed_account_menu']['membership'] = 'membership';
        }

        if($this->config->get('marketplace_allowed_account_menu') && !$this->config->get('wk_seller_group_status')) {
            $data['marketplace_allowed_account_menu'] = $this->config->get('marketplace_allowed_account_menu');
        }

        $data['send_mail'] = $this->url->link('account/customerpartner/sendmail','',true);
        $data['mail_for'] = '&contact_admin=true';
        $data['want_partner'] = $this->url->link('account/customerpartner/become_partner','',true);
        $data['account_menu_href'] = array(
            'profile' => $this->url->link('account/customerpartner/profile', '', true),
            'dashboard' => $this->url->link('account/customerpartner/dashboard', '', true),
            'orderhistory' => $this->url->link('account/customerpartner/orderlist', '', true),
            'transaction' => $this->url->link('account/customerpartner/transaction', '', true),
            'productlist' => $this->url->link('account/customerpartner/productlist', '', true),
            'addproduct' => $this->url->link('account/customerpartner/addproduct', '', true),
            'downloads' => $this->url->link('account/customerpartner/download', '', true),
            'manageshipping' => $this->url->link('account/customerpartner/add_shipping_mod', '', true),
            'asktoadmin' => $this->url->link('account/customerpartner/addproduct', '', true),
            'notification' => $this->url->link('account/customerpartner/notification', '', true),
            'information' => $this->url->link('account/customerpartner/information', '', true),
        );

        /*
        Membership code
        add link to existing account menu array
         */
        if($this->config->get('wk_seller_group_status')) {
            $data['wk_seller_group_status'] = true;
            $data['account_menu_href']['membership'] = $this->url->link('account/customerpartner/wk_membership_catalog','',true);
        } else {
            $data['wk_seller_group_status'] = false;
            if(isset($data['account_menu_href']['membership'])) {
                unset($data['account_menu_href']['membership']);
            }
            if(isset($data['marketplace_account_menu_sequence']['membership'])) {
                unset($data['marketplace_account_menu_sequence']['membership']);
            }
        }
        /*
        end here
         */
        // Marketplace codes start

                              
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('account/account', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
