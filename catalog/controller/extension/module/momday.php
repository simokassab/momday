<?php
class ControllerExtensionModuleMomday extends Controller {
    public function index($setting) {
        if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
            $data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
            $data['momday'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');

            return $this->load->view('extension/module/momday', $data);
        }
    }
}