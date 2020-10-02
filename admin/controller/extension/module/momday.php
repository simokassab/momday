<?php
class ControllerExtensionModuleMomday extends Controller {
    private $error = array();


    public function adminmenu(){

        $momday = array();

        if ($this->config->get('module_marketplace_status')) {
//        if ($this->config->get('module_momday_status')) {

            $this->load->language('extension/module/momday');

            if ($this->user->hasPermission('access', 'momday/blog')) {
                $momday[] = array(
                    'name'     => $this->language->get('text_blog'),
                    'href'     => $this->url->link('momday/blog/all', 'user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                );
            }
            if ($this->user->hasPermission('access', 'momday/activities')) {
                $momday[] = array(
                    'name'     => $this->language->get('text_activities'),
                    'href'     => $this->url->link('momday/activities', 'user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                );
            }
            if ($this->user->hasPermission('access', 'momday/celebrities')) {
                $momday[] = array(
                    'name'     => $this->language->get('text_celebrities'),
                    'href'     => $this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                );
            }
            if ($this->user->hasPermission('access', 'momday/charities')) {
                $momday[] = array(
                    'name'     => $this->language->get('text_charities'),
                    'href'     => $this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                );
            }
            if ($this->user->hasPermission('access', 'momday/preloved')) {
                $momday[] = array(
                    'name'     => $this->language->get('text_preloved'),
                    'href'     => $this->url->link('momday/preloved', 'user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                );
            }
            if ($this->user->hasPermission('access', 'momday/momday_products')) {
                $momday[] = array(
                    'name'     => $this->language->get('text_momday_products'),
                    'href'     => $this->url->link('momday/momday_products', 'user_token=' . $this->session->data['user_token'], true),
                    'children' => array()
                );
            }
            return $momday;
        }
    }

    public function index() {
        $this->load->language('extension/module/momday');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('momday', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/momday', 'user_token=' . $this->session->data['user_token'], true)
            );
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/momday', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            );
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/momday', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/momday', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['module_description'])) {
            $data['module_description'] = $this->request->post['module_description'];
        } elseif (!empty($module_info)) {
            $data['module_description'] = $module_info['module_description'];
        } else {
            $data['module_description'] = array();
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/momday', $data));
    }

    public function install() {
        $this->load->model('momday/momday');
        $this->model_momday_momday->install();
    }

    public function uninstall() {
        $this->load->model('momday/momday');
        $this->model_momday_momday->uninstall();
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/momday')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        return !$this->error;
    }
}