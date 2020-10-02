<?php
class ControllerAccountMomdayCustomerseller extends Controller {

    private $error = array();

    public function index() {
        $this->load->language('account/momday/customerseller');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('account/momday');

//        if(! $this->model_account_customerpartner->chkSellerProductAccess($this->request->get['product_id']))
//            $data['access_error'] = true;
//        else{
//            $product_info = $this->model_account_customerpartner->getProduct($this->request->get['product_id']);
//            if(!$product_info)
//                $data['access_error'] = true;
//        }

        $product_info = $this->model_account_momday->getProduct($this->request->get['product_id']);


        if (isset($this->request->post['model'])) {
            $data['model'] = $this->request->post['model'];
        } elseif (!empty($product_info)) {
            $data['model'] = $product_info['model'];
        } else {
            $data['model'] = '';
        }

//        $this->getList();
    }

    public function add() {
        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/momday/customerseller_productlist', '', true);
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/momday/customerseller');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/product');
        $this->load->model('account/customerpartner');
        $this->load->model('account/momday');
        $this->load->model('momday/customerseller_productlist');

        $this->document->addScript('catalog/view/javascript/wk_summernote/summernote.js');
        $this->document->addStyle('catalog/view/javascript/wk_summernote/summernote.css');
        $this->document->addStyle('catalog/view/theme/default/stylesheet/MP/sell.css');

        //check if customer has right to edit this product
        if (isset($this->request->get['product_id'])) {
            $this->load->model('momday/customerseller_productlist');
            if (!$this->model_momday_customerseller_productlist->checkCustomersellerProductAccess($this->request->get['product_id'])) {
                $this->session->data['warning'] = $this->language->get('text_access');
                $this->response->redirect($this->url->link('account/momday/customerseller_productlist', '', true));
            }
        }


        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->request->post['status'] = 0;
            $this->request->post['quantity'] = 1;
            if (!isset($this->request->post['product_store'])) {
                $this->request->post['product_store'] = array(0);
            }

            //make product's image same as the first uploaded image
            //handled in database function

//            $this->request->post['image'] = "";
//            if (isset($this->request->post['product_image'])){
//                if (count($this->request->post['product_image']) >0){
//                    $this->request->post['image'] = explode(",", $this->request->post['product_image'])[0];
//                }
//            }

            $customerseller_productlist = array();
            $customerseller_productlist['customer_id'] = $this->customer->getId();
            $customerseller_productlist['status'] = 'pending';
            $customerseller_productlist['date_added'] = time();
            $customerseller_productlist['date_modified'] = time();
            $customerseller_productlist['address'] = $this->request->post['address'];

            $this->request->post['momday_attributes'] = $this->get_momday_attribute_name_to_id();
            $this->request->post['product_description'] = $this->fix_product_description($this->request->post['product_description']);

            if(!isset($this->request->get['product_id'])){
                $customerseller_productlist['product_id'] = $this->model_account_momday->addPrelovedProduct($this->request->post);
                if(isset($this->request->post['video'])) {
                    $data_to_fix['video'] = $this->request->post['video'];
                    $customerseller_productlist['video'] = $this->model_account_momday->fix_product_video($data_to_fix, $customerseller_productlist['product_id']);
                }else{
                    $customerseller_productlist['video'] = '';
                }
                $this->model_momday_customerseller_productlist->addCustomersellerProduct($customerseller_productlist);
//            $this->model_catalog_product->addProduct($this->request->post);
                $this->session->data['success'] = $this->language->get('text_success');
                $this->response->redirect($this->url->link('account/momday/customerseller_productlist', '', true));
            }else{
                //check customer has the right to edit this product
                $this->load->model('momday/customerseller_productlist');
                if(!$this->model_momday_customerseller_productlist->checkCustomersellerProductAccess($this->request->get['product_id'])){
                    $this->session->data['warning'] = $this->language->get('text_access');
                    $this->response->redirect($this->url->link('account/momday/customerseller_productlist', '', true));
                }
                $customerseller_productlist['product_id'] = $this->request->get['product_id'];
                if(isset($this->request->post['video'])) {
                    $data_to_fix['video'] = $this->request->post['video'];
                    $customerseller_productlist['video'] = $this->model_account_momday->fix_product_video($data_to_fix, $customerseller_productlist['product_id']);
                }else{
                    $customerseller_productlist['video'] = '';
                }
                $this->model_account_momday->editPrelovedProduct($this->request->get['product_id'], $this->request->post);
                $this->model_momday_customerseller_productlist->editCustomersellerProduct($customerseller_productlist);
                $this->session->data['success'] = $this->language->get('text_success_update');
                $this->response->redirect($this->url->link('account/momday/customerseller_productlist', '', true));
            }

//            $url = '';
//
//            if (isset($this->request->get['filter_name'])) {
//                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
//            }
//
//            if (isset($this->request->get['filter_model'])) {
//                $url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
//            }
//
//            if (isset($this->request->get['filter_price'])) {
//                $url .= '&filter_price=' . $this->request->get['filter_price'];
//            }
//
//            if (isset($this->request->get['filter_quantity'])) {
//                $url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
//            }
//
//            if (isset($this->request->get['filter_status'])) {
//                $url .= '&filter_status=' . $this->request->get['filter_status'];
//            }
//
//            if (isset($this->request->get['sort'])) {
//                $url .= '&sort=' . $this->request->get['sort'];
//            }
//
//            if (isset($this->request->get['order'])) {
//                $url .= '&order=' . $this->request->get['order'];
//            }
//
//            if (isset($this->request->get['page'])) {
//                $url .= '&page=' . $this->request->get['page'];
//            }
//
//            $this->response->redirect($this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }


    protected function getForm() {
        $data['column_right'] = $this->load->controller('common/column_right');

        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $data['images_directory'] = $base_url. '/' . $momday_directory . 'image/';
        $data['momday_attributes'] = $this->get_momday_attribute_name_to_id();
        $data['condition_id'] = '';
        if(MOMDAY_ATTRIBUTES){
            $data['condition_id'] = MOMDAY_ATTRIBUTES['CONDITION_ATTR'];
        }



        $data['text_form'] = !isset($this->request->get['product_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = "";
//            $data['error_name'] = array();
        }

        if (isset($this->error['price'])) {
            $data['error_price'] = $this->error['price'];
        } else {
            $data['error_price'] = "";
        }

        if (isset($this->error['image'])) {
            $data['error_image'] = $this->error['image'];
        } else {
            $data['error_image'] = "";
        }

        if (isset($this->error['meta_title'])) {
            $data['error_meta_title'] = $this->error['meta_title'];
        } else {
            $data['error_meta_title'] = array();
        }

        if (isset($this->error['model'])) {
            $data['error_model'] = $this->error['model'];
        } else {
            $data['error_model'] = '';
        }

        if (isset($this->error['keyword'])) {
            $data['error_keyword'] = $this->error['keyword'];
        } else {
            $data['error_keyword'] = '';
        }

        //TODO: clean, maybe no need for check
        if (isset($this->error['category'])) {
            $data['error_category'] = $this->error['category'];
        } else {
            $data['error_category'] = '';
        }

        $url = '';

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_model'])) {
            $url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
        }

        if (isset($this->request->get['filter_quantity'])) {
            $url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
//            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title_add_product'),
//            'href' => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['product_id'])) {
            $data['product_id'] = '';
            $data['action'] = $this->url->link('account/momday/customerseller/add', true);
//            $data['action'] = $this->url->link('account/momday/customerseller/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
            $data['image_submit_url'] = $this->url->link('account/momday/customerseller/upload', '', true);
            $data['delete_image_url'] = $this->url->link('account/momday/customerseller/delete_temp_image', '', true);
            $data['delete_vide_url'] = $this->url->link('account/momday/customerseller/delete_temp_video', '', true);
        } else {
            $data['product_id'] = $this->request->get['product_id'];
//            $data['action'] = $this->url->link('catalog/product/edit', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $this->request->get['product_id'] . $url, true);
            $data['action'] = $this->url->link('account/momday/customerseller/add', 'product_id=' . $this->request->get['product_id'] . $url, true);
            $data['image_submit_url'] = $this->url->link('account/momday/customerseller/upload&product_id=' . $this->request->get['product_id'], '', true);
            $data['delete_image_url'] = $this->url->link('account/momday/customerseller/delete_temp_image&product_id=' . $this->request->get['product_id'], '', true);
            $data['delete_video_url'] = $this->url->link('account/momday/customerseller/delete_temp_video&product_id=' . $this->request->get['product_id'], '', true);
        }

        $data['cancel'] = $this->url->link('account/momday/customerseller_productlist', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $product_info = array();

        if (isset($this->request->get['product_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $product_info = $this->model_account_momday->getProduct($this->request->get['product_id']);
        }
        if (isset($this->request->get['product_id'])) {
            $product_info = $this->model_account_momday->getProduct($this->request->get['product_id']);
        }

//        $data['user_token'] = $this->session->data['user_token'];

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $language_id = (int)$this->config->get('config_language_id');
        $none_charity = array('charity_id' => -1);
        $data['charities'] = $this->model_account_momday->getCharities($language_id);
        array_unshift($data['charities'], $none_charity);


        if (isset($this->request->post['charity_id'])) {
            $data['charity_id'] = $this->request->post['charity_id'];
        } elseif (isset($this->request->get['product_id'])) {
            $selected_charity = $this->model_account_momday->getProductCharity($this->request->get['product_id']);
            if(sizeof($selected_charity)>0){
                $data['charity_id'] = $selected_charity[0]['charity_id'];
            }else{
                $data['charity_id'] = "";
            }
        } else {
            $data['charity_id'] = "";
        }

        // get values of individual attributes
        $attribute_values = array();
        if (isset($this->request->get['product_id'])) {
            $attributes_info = $this->model_account_momday->getMomdayProductAttributes($this->request->get['product_id'], array_values($data['momday_attributes']), $language_id);;
            foreach ($attributes_info as $attribute_info_entry){
                $attributes_name_to_text[$attribute_info_entry['name']] = $attribute_info_entry['text'];
            }
        }else{
            $attributes_name_to_text = array();
        }

        foreach(array_keys($data['momday_attributes']) as $momday_attribute) {
            if (isset($this->request->post[$momday_attribute])) {
                $attribute_values[$momday_attribute] = $this->request->post[$momday_attribute];
            } elseif (isset($this->request->get['product_id'])) {
                if(sizeof($attributes_info) >0) {
                    $attribute_values[$momday_attribute] = $attributes_name_to_text[$momday_attribute];
                }
            }
        }
        $data['attribute_values'] = $attribute_values;

        if (isset($this->request->post['product_description'])) {
            $data['product_description'] = $this->request->post['product_description'];
        } elseif (isset($this->request->get['product_id'])) {
            $language_id = (int)$this->config->get('config_language_id');
            $data['product_description'] = $this->model_account_momday->getProductDescriptionsForLanguage($this->request->get['product_id'], $language_id);
        } else {
            $data['product_description'] = array();
        }

        if (isset($this->request->post['model'])) {
            $data['model'] = $this->request->post['model'];
        } elseif (!empty($product_info)) {
            $data['model'] = $product_info['model'];
        } else {
            $data['model'] = '';
        }

        if (isset($this->request->post['sku'])) {
            $data['sku'] = $this->request->post['sku'];
        } elseif (!empty($product_info)) {
            $data['sku'] = $product_info['sku'];
        } else {
            $data['sku'] = '';
        }

        if (isset($this->request->post['upc'])) {
            $data['upc'] = $this->request->post['upc'];
        } elseif (!empty($product_info)) {
            $data['upc'] = $product_info['upc'];
        } else {
            $data['upc'] = '';
        }

        if (isset($this->request->post['ean'])) {
            $data['ean'] = $this->request->post['ean'];
        } elseif (!empty($product_info)) {
            $data['ean'] = $product_info['ean'];
        } else {
            $data['ean'] = '';
        }

        if (isset($this->request->post['jan'])) {
            $data['jan'] = $this->request->post['jan'];
        } elseif (!empty($product_info)) {
            $data['jan'] = $product_info['jan'];
        } else {
            $data['jan'] = '';
        }

        if (isset($this->request->post['isbn'])) {
            $data['isbn'] = $this->request->post['isbn'];
        } elseif (!empty($product_info)) {
            $data['isbn'] = $product_info['isbn'];
        } else {
            $data['isbn'] = '';
        }

        if (isset($this->request->post['mpn'])) {
            $data['mpn'] = $this->request->post['mpn'];
        } elseif (!empty($product_info)) {
            $data['mpn'] = $product_info['mpn'];
        } else {
            $data['mpn'] = '';
        }

        if (isset($this->request->post['location'])) {
            $data['location'] = $this->request->post['location'];
        } elseif (!empty($product_info)) {
            $data['location'] = $product_info['location'];
        } else {
            $data['location'] = '';
        }

        $this->load->model('setting/store');

        $data['stores'] = array();

        $data['stores'][] = array(
            'store_id' => 0,
            'name'     => $this->language->get('text_default')
        );

        $stores = $this->model_setting_store->getStores();

        foreach ($stores as $store) {
            $data['stores'][] = array(
                'store_id' => $store['store_id'],
                'name'     => $store['name']
            );
        }

        if (isset($this->request->post['product_store'])) {
            $data['product_store'] = $this->request->post['product_store'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_store'] = $this->model_account_momday->getProductStores($this->request->get['product_id']);
        } else {
            $data['product_store'] = array(0);
        }


        //TODO: check why we needed to add and isset($product_info['shipping'])
        if (isset($this->request->post['shipping'])) {
            $data['shipping'] = $this->request->post['shipping'];
        } elseif (!empty($product_info) && isset($product_info['shipping'])) {
            $data['shipping'] = $product_info['shipping'];
        } else {
            $data['shipping'] = 1;
        }

        if (isset($this->request->post['price'])) {
            $data['price'] = $this->request->post['price'];
        } elseif (!empty($product_info)) {
            $data['price'] = $product_info['price'];
        } else {
            $data['price'] = '';
        }

//        $this->load->model('catalog/recurring');
//
//        $data['recurrings'] = $this->model_catalog_recurring->getRecurrings();
//
//        if (isset($this->request->post['product_recurrings'])) {
//            $data['product_recurrings'] = $this->request->post['product_recurrings'];
//        } elseif (!empty($product_info)) {
//            $data['product_recurrings'] = $this->model_catalog_product->getRecurrings($product_info['product_id']);
//        } else {
//            $data['product_recurrings'] = array();
//        }

//        $this->load->model('localisation/tax_class');
//
//        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();
//
//        if (isset($this->request->post['tax_class_id'])) {
//            $data['tax_class_id'] = $this->request->post['tax_class_id'];
//        } elseif (!empty($product_info)) {
//            $data['tax_class_id'] = $product_info['tax_class_id'];
//        } else {
//            $data['tax_class_id'] = 0;
//        }

        if (isset($this->request->post['date_available'])) {
            $data['date_available'] = $this->request->post['date_available'];
        } elseif (!empty($product_info)) {
            $data['date_available'] = ($product_info['date_available'] != '0000-00-00') ? $product_info['date_available'] : '';
        } else {
            $data['date_available'] = date('Y-m-d');
        }

        if (isset($this->request->post['quantity'])) {
            $data['quantity'] = $this->request->post['quantity'];
        } elseif (!empty($product_info)) {
            $data['quantity'] = $product_info['quantity'];
        } else {
            $data['quantity'] = 1;
        }

        if (isset($this->request->post['minimum'])) {
            $data['minimum'] = $this->request->post['minimum'];
        } elseif (!empty($product_info)) {
            $data['minimum'] = $product_info['minimum'];
        } else {
            $data['minimum'] = 1;
        }

        if (isset($this->request->post['subtract'])) {
            $data['subtract'] = $this->request->post['subtract'];
        } elseif (!empty($product_info)) {
            $data['subtract'] = $product_info['subtract'];
        } else {
            $data['subtract'] = 1;
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($product_info)) {
            $data['sort_order'] = $product_info['sort_order'];
        } else {
            $data['sort_order'] = 1;
        }

//        $this->load->model('localisation/stock_status');
//
//        $data['stock_statuses'] = $this->model_localisation_stock_status->getStockStatuses();
//
//        if (isset($this->request->post['stock_status_id'])) {
//            $data['stock_status_id'] = $this->request->post['stock_status_id'];
//        } elseif (!empty($product_info)) {
//            $data['stock_status_id'] = $product_info['stock_status_id'];
//        } else {
//            $data['stock_status_id'] = 0;
//        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($product_info)) {
            $data['status'] = $product_info['status'];
        } else {
            $data['status'] = true;
        }

        if (isset($this->request->post['weight'])) {
            $data['weight'] = $this->request->post['weight'];
        } elseif (!empty($product_info)) {
            $data['weight'] = $product_info['weight'];
        } else {
            $data['weight'] = '';
        }

        $this->load->model('mp_localisation/weight_class');

        $data['weight_classes'] = $this->model_mp_localisation_weight_class->getWeightClasses();

        if (isset($this->request->post['weight_class_id'])) {
            $data['weight_class_id'] = $this->request->post['weight_class_id'];
        } elseif (!empty($product_info)) {
            $data['weight_class_id'] = $product_info['weight_class_id'];
        } else {
            $data['weight_class_id'] = $this->config->get('config_weight_class_id');
        }

        if (isset($this->request->post['length'])) {
            $data['length'] = $this->request->post['length'];
        } elseif (!empty($product_info)) {
            $data['length'] = $product_info['length'];
        } else {
            $data['length'] = '';
        }

        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($product_info)) {
            $data['width'] = $product_info['width'];
        } else {
            $data['width'] = '';
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($product_info)) {
            $data['height'] = $product_info['height'];
        } else {
            $data['height'] = '';
        }

        $this->load->model('mp_localisation/length_class');

        $data['length_classes'] = $this->model_mp_localisation_length_class->getLengthClasses();

        if (isset($this->request->post['length_class_id'])) {
            $data['length_class_id'] = $this->request->post['length_class_id'];
        } elseif (!empty($product_info)) {
            $data['length_class_id'] = $product_info['length_class_id'];
        } else {
            $data['length_class_id'] = $this->config->get('config_length_class_id');
        }

        if (isset($this->request->post['address'])) {
            $data['address'] = $this->request->post['address'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['address'] = $this->get_product_address($this->request->get['product_id']);
        } else {
            $data['address'] = "";
        }

        $this->load->model('catalog/manufacturer');


        if (isset($this->request->post['manufacturer_id'])) {
            $data['manufacturer_id'] = $this->request->post['manufacturer_id'];
        } elseif (!empty($product_info)) {
            $data['manufacturer_id'] = $product_info['manufacturer_id'];
        } else {
            $data['manufacturer_id'] = 0;
        }

        if (isset($this->request->post['manufacturer'])) {
            $data['manufacturer'] = $this->request->post['manufacturer'];
        } elseif (!empty($product_info)) {
            $manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($product_info['manufacturer_id']);

            if ($manufacturer_info) {
                $data['manufacturer'] = $manufacturer_info['name'];
            } else {
                $data['manufacturer'] = '';
            }
        } else {
            $data['manufacturer'] = '';
        }

        // Categories

        $this->load->model('setting/store');
        $data['stores'] = $this->model_setting_store->getStores();

        $data['marketplace_seller_product_store'] = $this->config->get('marketplace_seller_product_store');

        if (isset($this->request->post['product_store'])) {
            $data['product_store'] = $this->request->post['product_store'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_store'] = $this->model_account_customerpartner->getProductStores($this->request->get['product_id']);
        } else {
            $data['product_store'] = array(0);
        }

//        $this->load->model('catalog/category');
//
//        if (isset($this->request->post['product_category'])) {
//            $categories = $this->request->post['product_category'];
//        } elseif (isset($this->request->get['product_id'])) {
//            $categories = $this->model_catalog_product->getProductCategories($this->request->get['product_id']);
//        } else {
//            $categories = array();
//        }

        if (isset($this->request->post['product_category'])) {
            $categories = $this->request->post['product_category'];
        } elseif (isset($this->request->get['product_id'])) {
            $categories = $this->model_account_customerpartner->getProductCategories($this->request->get['product_id']);
        } else {
            $categories = array();
        }

        $data['product_categories'] = array();

        foreach ($categories as $category_id) {
            $category_info = $this->model_account_customerpartner->getCategory($category_id);

            if ($category_info) {
                $data['product_categories'][] = array(
                    'category_id' => $category_info['category_id'],
                    'name'        => ($category_info['path'] ? $category_info['path'] . ' &gt; ' : '') . $category_info['name']
                );
            }
        }

        // Filters
//        $this->load->model('catalog/filter');
//
//        if (isset($this->request->post['product_filter'])) {
//            $filters = $this->request->post['product_filter'];
//        } elseif (isset($this->request->get['product_id'])) {
//            $filters = $this->model_catalog_product->getProductFilters($this->request->get['product_id']);
//        } else {
//            $filters = array();
//        }
//
//        $data['product_filters'] = array();
//
//        foreach ($filters as $filter_id) {
//            $filter_info = $this->model_catalog_filter->getFilter($filter_id);
//
//            if ($filter_info) {
//                $data['product_filters'][] = array(
//                    'filter_id' => $filter_info['filter_id'],
//                    'name'      => $filter_info['group'] . ' &gt; ' . $filter_info['name']
//                );
//            }
//        }

        if (isset($this->request->post['product_filter'])) {
            $filters = $this->request->post['product_filter'];
        } elseif (isset($this->request->get['product_id'])) {
            $filters = $this->model_account_customerpartner->getProductFilters($this->request->get['product_id']);
        } else {
            $filters = array();
        }

        $data['product_filters'] = array();

        foreach ($filters as $filter_id) {
            $filter_info = $this->model_account_customerpartner->getFilter($filter_id);

            if ($filter_info) {
                $data['product_filters'][] = array(
                    'filter_id' => $filter_info['filter_id'],
                    'name'      => $filter_info['group'] . ' &gt; ' . $filter_info['name']
                );
            }
        }

        // Attributes
//        $this->load->model('catalog/attribute');
//
//        if (isset($this->request->post['product_attribute'])) {
//            $product_attributes = $this->request->post['product_attribute'];
//        } elseif (isset($this->request->get['product_id'])) {
//            $product_attributes = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);
//        } else {
//            $product_attributes = array();
//        }
//
//        $data['product_attributes'] = array();
//
//        foreach ($product_attributes as $product_attribute) {
//            $attribute_info = $this->model_catalog_attribute->getAttribute($product_attribute['attribute_id']);
//
//            if ($attribute_info) {
//                $data['product_attributes'][] = array(
//                    'attribute_id'                  => $product_attribute['attribute_id'],
//                    'name'                          => $attribute_info['name'],
//                    'product_attribute_description' => $product_attribute['product_attribute_description']
//                );
//            }
//        }

        if (isset($this->request->post['product_attribute'])) {
            $product_attributes = $this->request->post['product_attribute'];
        } elseif (isset($this->request->get['product_id'])) {
            $product_attributes = $this->model_account_customerpartner->getProductAttributes($this->request->get['product_id']);
        } else {
            $product_attributes = array();
        }

        $data['product_attributes'] = array();

        foreach ($product_attributes as $product_attribute) {

            if ($product_attribute) {
                $data['product_attributes'][] = array(
                    'attribute_id'                  => $product_attribute['attribute_id'],
                    'name'                          => $product_attribute['name'],
                    'product_attribute_description' => $product_attribute['product_attribute_description']
                );
            }
        }

        // Options
        if (isset($this->request->post['product_option'])) {
            $product_options = $this->request->post['product_option'];
        } elseif (isset($this->request->get['product_id'])) {
            $product_options = $this->model_account_customerpartner->getProductOptions($this->request->get['product_id']);
        } else {
            $product_options = array();
        }

        $data['product_options'] = array();

        foreach ($product_options as $product_option) {
            if ($product_option['type'] == 'select' || $product_option['type'] == 'radio' || $product_option['type'] == 'checkbox' || $product_option['type'] == 'image') {
                $product_option_value_data = array();

                foreach ($product_option['product_option_value'] as $product_option_value) {
                    $product_option_value_data[] = array(
                        'product_option_value_id' => $product_option_value['product_option_value_id'],
                        'option_value_id'         => $product_option_value['option_value_id'],
                        'quantity'                => $product_option_value['quantity'],
                        'subtract'                => $product_option_value['subtract'],
                        'price'                   => number_format($this->currency->convert($product_option_value['price'],$this->config->get('config_currency'),$this->session->data['currency']),2, '.', ''),
                        'price_prefix'            => $product_option_value['price_prefix'],
                        'points'                  => $product_option_value['points'],
                        'points_prefix'           => $product_option_value['points_prefix'],
                        'weight'                  => $product_option_value['weight'],
                        'weight_prefix'           => $product_option_value['weight_prefix']
                    );
                }

                $data['product_options'][] = array(
                    'product_option_id'    => $product_option['product_option_id'],
                    'product_option_value' => $product_option_value_data,
                    'option_id'            => $product_option['option_id'],
                    'name'                 => $product_option['name'],
                    'type'                 => $product_option['type'],
                    'required'             => $product_option['required']
                );
            } else {
                $data['product_options'][] = array(
                    'product_option_id' => $product_option['product_option_id'],
                    'option_id'         => $product_option['option_id'],
                    'name'              => $product_option['name'],
                    'type'              => $product_option['type'],
                    'option_value'      => $product_option['option_value'],
                    'required'          => $product_option['required']
                );
            }
        }

        $data['option_values'] = array();

        foreach ($data['product_options'] as $product_option) {
            if ($product_option['type'] == 'select' || $product_option['type'] == 'radio' || $product_option['type'] == 'checkbox' || $product_option['type'] == 'image') {
                if (!isset($data['option_values'][$product_option['option_id']])) {
                    $data['option_values'][$product_option['option_id']] = $this->model_account_customerpartner->getOptionValues($product_option['option_id']);
                }
            }
        }

        $tabletype = '';
        $data['customer_groups'] = $this->model_account_customerpartner->getCustomerGroups();

        if (isset($this->request->post['product_discount'])) {
            $data['product_discounts'] = $this->request->post['product_discount'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_discounts'] = $this->model_account_customerpartner->getProductDiscounts($this->request->get['product_id'],$tabletype);
        } else {
            $data['product_discounts'] = array();
        }

        foreach ($data['product_discounts'] as $key => $value) {

            $data['product_discounts'][$key]['price'] = number_format($this->currency->convert($value['price'],$this->config->get('config_currency'),$this->session->data['currency']),2, '.', '');
        }


        if (isset($this->request->post['product_special'])) {
            $data['product_specials'] = $this->request->post['product_special'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_specials'] = $this->model_account_customerpartner->getProductSpecials($this->request->get['product_id'],$tabletype);
        } else {
            $data['product_specials'] = array();
        }

        foreach ($data['product_specials'] as $key => $value) {

            $data['product_specials'][$key]['price'] = number_format($this->currency->convert($value['price'],$this->config->get('config_currency'),$this->session->data['currency']),2, '.', '');
        }

        // Image
        if (isset($this->request->post['image'])) {
            $data['image'] = $this->request->post['image'];
        } elseif (!empty($product_info)) {
            $data['image'] = $product_info['image'];
        } else {
            $data['image'] = '';
        }

        $this->load->model('tool/image');

        if (isset($this->request->post['image']) && $this->request->post['image'] && file_exists(DIR_IMAGE . $this->request->post['image'])) {
            $data['thumb_img'] = $this->request->post['image'];
            $data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
        } elseif (!empty($product_info) && $product_info['image'] && file_exists(DIR_IMAGE . $product_info['image'])) {
            $data['thumb_img'] = $product_info['image'];
            $data['thumb'] = $this->model_tool_image->resize($product_info['image'], 100, 100);
        } else {
            $data['thumb_img'] = '';
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
        } elseif (!empty($product_info) && is_file(DIR_IMAGE . $product_info['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($product_info['image'], 100, 100);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        // Images
        $product_images = array();
        if (isset($this->request->post['product_image'])) {
            if($this->request->post['product_image']){
                foreach (explode(",", $this->request->post['product_image']) as $product_image) {
                    $image_info = array('image' => $product_image);
                    if (isset($this->request->get['product_id'])) {
                        $image_info['product_id'] = $this->request->get['product_id'];
                    }
                    array_push($product_images, $image_info);
                }
            }
        } elseif (isset($this->request->get['product_id'])) {
//            $product_images = $this->model_catalog_product->getProductImages($this->request->get['product_id']);
            $image = $this->model_account_momday->getProductImageWithId($this->request->get['product_id']);
            $product_images = $this->model_account_momday->getProductImages($this->request->get['product_id']);
            if(sizeof($image)>0){
                if(basename($image[0]['image'])!='no_image.jpeg'){
                    $product_images = array_merge($image, $product_images);
                }
            }
        } else {
            $product_images = array();
        }

        // Video

        if (isset($this->request->post['video'])) {
            if($this->request->post['video']){
                $product_video = array('video' => $this->request->post['video']);
                if (isset($this->request->get['product_id'])) {
                    $product_video['product_id'] = $this->request->get['product_id'];
                }
            }
        } elseif (isset($this->request->get['product_id'])) {
//            $product_images = $this->model_catalog_product->getProductImages($this->request->get['product_id']);
            $product_video = $this->model_account_momday->getProductVideoWithId($this->request->get['product_id']);
            if(sizeof($product_video)>0){
                if($product_video[0]['video'] =='' || !$product_video[0]['video']){
                    $product_video=array();
                }
            }
        } else {
            $product_video = array();
        }

        $data['product_images'] = $product_images;
        $data['product_video'] = $product_video;
        $this->print_to_file($data['product_video']);

        $data['no_image'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        // Downloads
//        $this->load->model('catalog/download');
//
//        if (isset($this->request->post['product_download'])) {
//            $product_downloads = $this->request->post['product_download'];
//        } elseif (isset($this->request->get['product_id'])) {
//            $product_downloads = $this->model_catalog_product->getProductDownloads($this->request->get['product_id']);
//        } else {
//            $product_downloads = array();
//        }
//
//        $data['product_downloads'] = array();
//
//        foreach ($product_downloads as $download_id) {
//            $download_info = $this->model_catalog_download->getDownload($download_id);
//
//            if ($download_info) {
//                $data['product_downloads'][] = array(
//                    'download_id' => $download_info['download_id'],
//                    'name'        => $download_info['name']
//                );
//            }
//        }
//
//        if (isset($this->request->post['product_related'])) {
//            $products = $this->request->post['product_related'];
//        } elseif (isset($this->request->get['product_id'])) {
//            $products = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);
//        } else {
//            $products = array();
//        }
//
//        $data['product_relateds'] = array();
//
//        foreach ($products as $product_id) {
//            $related_info = $this->model_catalog_product->getProduct($product_id);
//
//            if ($related_info) {
//                $data['product_relateds'][] = array(
//                    'product_id' => $related_info['product_id'],
//                    'name'       => $related_info['name']
//                );
//            }
//        }

        if (isset($this->request->post['product_download'])) {
            $product_downloads = $this->request->post['product_download'];
        } elseif (isset($this->request->get['product_id'])) {
            $product_downloads = $this->model_account_customerpartner->getProductDownloads($this->request->get['product_id'],$tabletype);
        } else {
            $product_downloads = array();
        }

        $data['product_downloads'] = array();

        foreach ($product_downloads as $download_id) {
            $download_info = $this->model_account_customerpartner->getDownloadProduct($download_id,$tabletype);

            if ($download_info) {
                $data['product_downloads'][] = array(
                    'download_id' => $download_info['download_id'],
                    'name'        => $download_info['name']
                );
            }
        }


        if (isset($this->request->post['product_related'])) {
            $products = $this->request->post['product_related'];
        } elseif (isset($this->request->get['product_id'])) {
            $products = $this->model_account_customerpartner->getProductRelated($this->request->get['product_id']);
        } else {
            $products = array();
        }

        $data['product_relateds'] = array();
        foreach ($products as $product_id) {
            $related_info = $this->model_account_customerpartner->getProductRelatedInfo($product_id,$tabletype);

            if ($related_info) {
                $data['product_relateds'][] = array(
                    'product_id' => $related_info['product_id'],
                    'name'       => $related_info['name']
                );
            }
        }

        if (isset($this->request->post['points'])) {
            $data['points'] = $this->request->post['points'];
        } elseif (!empty($product_info)) {
            $data['points'] = $product_info['points'];
        } else {
            $data['points'] = '';
        }

        if (isset($this->request->post['product_reward'])) {
            $data['product_reward'] = $this->request->post['product_reward'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_reward'] = $this->model_account_momday->getProductRewards($this->request->get['product_id']);
        } else {
            $data['product_reward'] = array();
        }

        if (isset($this->request->post['product_seo_url'])) {
            $data['product_seo_url'] = $this->request->post['product_seo_url'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_seo_url'] = $this->model_account_momday->getProductSeoUrls($this->request->get['product_id']);
        } else {
            $data['product_seo_url'] = array();
        }

        if (isset($this->request->post['product_layout'])) {
            $data['product_layout'] = $this->request->post['product_layout'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_layout'] = $this->model_account_momday->getProductLayouts($this->request->get['product_id']);
        } else {
            $data['product_layout'] = array();
        }

        $this->load->model('design/layout');

//        $data['layouts'] = $this->model_design_layout->getLayouts();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('account/momday/addproduct', $data));
    }
    public function validateForm(){
        if ((utf8_strlen($this->request->post['model']) < 3) || (utf8_strlen($this->request->post['model']) > 64)) {
            $this->error['model'] = $this->language->get('error_model');
        }

        if ((utf8_strlen($this->request->post['product_description']['name']) < 3) || (utf8_strlen($this->request->post['product_description']['name']) > 255)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if ($this->request->post['price'] == '' || !is_numeric($this->request->post['price']) || $this->request->post['price'] < 0) {
            $this->error['price'] = $this->language->get('error_price');
        }

        if(!($this->request->post['product_image'])){
            $this->error['image'] = $this->language->get('error_image');
        }


        if (!$this->error) {
            return true;
        } else {
            $this->error['warning'] = $this->language->get('error_warning');
            return false;
        }
    }


    public function upload() {
        $this->load->language('momday/sale_order');

        $json = array();
//
//        // Check user has permission
//        if (!$this->user->hasPermission('modify', 'tool/upload')) {
//            $json['error'] = $this->language->get('error_permission');
//        }

        if (!$json) {
            if (!empty($this->request->files['file']['name']) && is_file($this->request->files['file']['tmp_name'])) {
                // Sanitize the filename
                $filename = html_entity_decode($this->request->files['file']['name'], ENT_QUOTES, 'UTF-8');

                if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 128)) {
                    $json['error'] = $this->language->get('error_filename');
                }

                // Allowed file extension types
                $allowed = array();

                $extension_allowed = preg_replace('~\r?\n~', "\n", $this->config->get('config_file_ext_allowed'));

                $filetypes = explode("\n", $extension_allowed);

                foreach ($filetypes as $filetype) {
                    $allowed[] = trim($filetype);
                }

                if (!in_array(strtolower(substr(strrchr($filename, '.'), 1)), $allowed)) {
                    $json['error'] = $this->language->get('error_filetype');
                }

                // Allowed file mime types
                $allowed = array();

                $mime_allowed = preg_replace('~\r?\n~', "\n", $this->config->get('config_file_mime_allowed'));

                $filetypes = explode("\n", $mime_allowed);

                foreach ($filetypes as $filetype) {
                    $allowed[] = trim($filetype);
                }

                if (!in_array($this->request->files['file']['type'], $allowed)) {
                    $json['error'] = $this->language->get('error_filetype');
                }

                // Check to see if any PHP files are trying to be uploaded
                $content = file_get_contents($this->request->files['file']['tmp_name']);

                if (preg_match('/\<\?php/i', $content)) {
                    $json['error'] = $this->language->get('error_filetype');
                }

                // Return any upload error
                if ($this->request->files['file']['error'] != UPLOAD_ERR_OK) {
                    $json['error'] = $this->language->get('error_upload_' . $this->request->files['file']['error']);
                }
            } else {
                $json['error'] = $this->language->get('error_upload');
            }
        }

        if (!$json) {
            $file = token(32);
            $ext = pathinfo($this->request->files['file']['name'], PATHINFO_EXTENSION);

            $uploadDirectory = DIR_IMAGE . 'momday/products/temp/';
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            move_uploaded_file($this->request->files['file']['tmp_name'], $uploadDirectory . $file . '.' . $ext);

            // Hide the uploaded file name so people can not link to it directly.
            $this->load->model('tool/upload');

            $json['code'] = $this->model_tool_upload->addUpload($filename, $file . '.' . $ext);

            $json['success'] = $this->language->get('text_upload');
            $json['filename'] = $file. '.' . $ext;
            $json['filepath'] = 'momday/products/temp/';

            // 2 formats needed for path to image
            // http://path_to_image/image.jpeg for client side display on admin page -> send this in json
            // path of image in the images directory for catalog display -> store this in db
            $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
            $momday_directory = '';
            if(defined('MOMDAY_DIRECTORY')) {
                $momday_directory = MOMDAY_DIRECTORY;
            }
            $image_upload_directory = $base_url. '/' . $momday_directory . 'image/temp/';
            $json['image_directory'] = $image_upload_directory;
            $image_size = filesize( $uploadDirectory. $file . '.' . $ext);

            $this->load->model('account/momday');
            $this->model_account_momday->addMomdayCustomersellerTempImages($json['filepath'] . $json['filename'], $image_size, time());
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete_temp_image(){
        $filenameToRemove = $_POST['filenameToRemove'];
        $empty_image = DIR_IMAGE . 'no_image.jpeg';
        $product_id = $_POST['product_id'];
        $this->load->model('account/momday');
        $uploadDirectory = DIR_IMAGE ;
        if (is_file($uploadDirectory . $filenameToRemove)) {
            unlink($uploadDirectory . $filenameToRemove);
        }
        $this->model_account_momday->removeCustomersellerTempImage($filenameToRemove);
        $this->model_account_momday->removeProductImage($filenameToRemove);
        if($product_id) {
            $this->model_account_momday->removeProductFeaturedImage($filenameToRemove, $empty_image,  $product_id);
            $this->model_account_momday->deactivateProduct($product_id);
            $this->model_account_momday->setProductPending($product_id);
        }
    }

    public function delete_temp_video(){
        $filenameToRemove = $_POST['filenameToRemove'];
        $empty_image = DIR_IMAGE . 'no_image.jpeg';
        $product_id = $_POST['product_id'];
        $this->load->model('account/momday');
        $uploadDirectory = DIR_IMAGE ;
        if (is_file($uploadDirectory . $filenameToRemove)) {
            unlink($uploadDirectory . $filenameToRemove);
        }
        $this->model_account_momday->removeCustomersellerTempImage($filenameToRemove);
        if($product_id) {
            $this->model_account_momday->removeProductVideo($filenameToRemove,  $product_id);
            $this->model_account_momday->deactivateProduct($product_id);
            $this->model_account_momday->setProductPending($product_id);
        }
    }

    public function remove_inactive($expiry_max_duration){
        $this->load->model('account/momday');
        $inactive_images = $this->model_account_momday->getInactiveCustomersellerTempImages(time(), $expiry_max_duration);
        $uploadDirectory = DIR_IMAGE . 'momday/products/temp/';
        foreach ($inactive_images as $inactive_image) {
            $filenameToRemove = $inactive_image['image_name'];

            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }
            $this->model_account_momday->removeCustomersellerTempImage($inactive_image['image_name']);
        }
    }

    private function get_momday_attribute_name_to_id(){
        $language_id = (int)$this->config->get('config_language_id');
        $momday_attributes = $this->model_account_momday->getMomdayAttributes(array_values(MOMDAY_ATTRIBUTES), $language_id);
        $attribute_name_to_id = array();
        foreach ($momday_attributes as $attribute_info){
            $attribute_name_to_id[$attribute_info['name']]=$attribute_info['attribute_id'];
        }
        return $attribute_name_to_id;
    }

    private function get_product_address($product_id){
        $this->load->model('account/momday');
        $product_address = $this->model_account_momday->getProductAddress($product_id);
        if(sizeof($product_address) >0 ){
            return $product_address[0]['address'];
        }
        return "";

    }

    private function fix_product_description($old_product_description){
        $old_product_description['meta_title'] = $old_product_description['name'];
        $old_product_description['meta_description'] = $old_product_description['description'];
        $new_product_description = array();
        foreach($this->get_all_language_ids() as $language_id){
            foreach($old_product_description as $key => $value){
                $new_product_description[$language_id][$key] = $value;
            }
        }
        return $new_product_description;
    }

    private function get_all_language_ids(){
        $result = array();
        $all_language_ids = $this->model_account_momday->getAllLanguageIds();
        if(sizeof($all_language_ids)>0) {
            foreach ($all_language_ids as $language_id) {
                array_push($result, $language_id['language_id']);
            }
        }
        return $result;
    }


    private function print_to_file($array_to_print){
        $myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }

}