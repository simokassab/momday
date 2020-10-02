<?php
class ControllerExtensionShippingApilocationvalidatorshipping extends Controller {
	public function index() {

            $data = array();
            if(!isset($this->session->data['user_token'])){
                $this->session->data['user_token'] = null;
            }
            $data['aramex_loader'] = "catalog/view/javascript/aramex/jqueryui/aramex_loader.gif";
            $data['url_autosities'] = $this->url->link('extension/shipping/searchautocities','user_token=' . $this->session->data['user_token'], true);
            $data['url_applyvalidation'] = $this->url->link('extension/shipping/applyvalidation','user_token=' . $this->session->data['user_token'], true);
            $data['type'] = "#collapse-shipping-address";
            $data['button'] = "#button-shipping-address";
            $data['aramex_allow'] = $this->config->get('shipping_aramex_api_location_validator');
				// CODE HERE IF LOWER
				return($this->load->view('default/template/extension/shipping/apilocationvalidator', $data));
			}

}
