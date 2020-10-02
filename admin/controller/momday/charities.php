<?php
class ControllerMomdayCharities extends Controller
{
    private $error = array();

    public function index()
    {
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        if (isset($this->session->data['warning'])) {
            $data['error_warning'] = $this->session->data['warning'];
            unset($this->session->data['warning']);
        }

        $this->load->language('momday/charities');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['return_all_url'] = $this->url->link('momday/charities/return_all&user_token=' . $this->session->data['user_token'], '', true);
        $data['url_delete'] = $this->url->link('momday/charities/delete&user_token=' . $this->session->data['user_token'], '', true);

        $href = array(
            'href_add' => $this->url->link('momday/charities/add&user_token=' . $this->session->data['user_token'], '', true),
            'href_edit' => $this->url->link('momday/charities/edit&user_token=' . $this->session->data['user_token'], '', true),
            'href_delete' => $this->url->link('momday/charities/delete&user_token=' . $this->session->data['user_token'], '', true),
        );

        $data['href'] = $href;

        $this->response->setOutput($this->load->view('momday/all_charities', $data));
    }

    public function return_all()
    {
        $language_id = $_POST['language_id'];
        $this->load->model('momday/charity');
        $posts = $this->model_momday_charity->getAllCharities($language_id);
        $json['data'] = $posts;
        $posts_json = json_encode($json);
        print($posts_json);
    }

    public function add() {
        $this->load->language('momday/charities');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('momday/charity');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $charity_details = array(
                'location' => $this->request->post['location'],
                'phone' => $this->request->post['phone'],
                'email' => $this->request->post['email'],
                'website' => $this->request->post['website'],
                'charity_details' => $this->request->post['charity_details']
            );

            $this->model_momday_charity->addCharityWithDetails($charity_details);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $this->response->redirect($this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('momday/charities');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('momday/charity');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $charity_id = $this->request->get['charity_id'];
            $charity_details = array(
                'charity_id' => $charity_id,
                'location' => $this->request->post['location'],
                'phone' => $this->request->post['phone'],
                'email' => $this->request->post['email'],
                'website' => $this->request->post['website'],
                'charity_details' => $this->request->post['charity_details']
            );

            $this->model_momday_charity->editCharityWithDetails($charity_details);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $this->response->redirect($this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete(){

        $this->load->model('momday/charity');

        if (!array_key_exists('charity_id', $this->request->post)){
            $this->response->redirect($this->url->link('momday/charities/pagenotfound&user_token=' . $this->session->data['user_token'], '', true));
        }

        $charity_id = $this->request->post['charity_id'];

        $charity_products = $this->getCharityProducts($charity_id);

        //check no active preloved items link to this charity before deleting it
        if(!$this->IsNullOrEmptyString($charity_products)){
            $this->session->data['warning'] = "Cannot delete charity. It is assigned to active products with the following Ids: " . $charity_products;
        }else{
            $this->model_momday_charity->removeCharityAndDetails($charity_id);
            $this->session->data['success'] = $this->language->get('text_success');
        }
        $this->response->redirect($this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'] , true));
    }

    public function getCharityProducts($charity_id){
        $charity_products = $this->model_momday_charity->getCharityProducts($charity_id);
        if($charity_products) {
            $charity_products_array = array();
            foreach ($charity_products as $charity_product){
                array_push($charity_products_array,$charity_product['product_id']);
            }
            return(implode(", ",$charity_products_array));
        }else{
            return false;
        }
    }

    protected function getForm() {
        $data['text_form'] = !isset($this->request->get['charity_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['location'])) {
            $data['error_location'] = $this->error['location'];
        } else {
            $data['error_location'] = '';
        }

        if (isset($this->error['website'])) {
            $data['error_website'] = $this->error['website'];
        } else {
            $data['error_website'] = '';
        }

        if (isset($this->error['email'])) {
            $data['error_email'] = $this->error['email'];
        } else {
            $data['error_email'] = '';
        }

        if (isset($this->error['phone'])) {
            $data['error_phone'] = $this->error['phone'];
        } else {
            $data['error_phone'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = array();
        }

        $url = '';

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['charity_id'])) {
            $data['action'] = $this->url->link('momday/charities/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('momday/charities/edit', 'user_token=' . $this->session->data['user_token'] . '&charity_id=' . $this->request->get['charity_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('momday/charities', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['charity_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $charity_information = $this->model_momday_charity->getCharityInformation($this->request->get['charity_id']);
            $charity_details = $this->model_momday_charity->getCharityDetails($this->request->get['charity_id']);
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['charity_details'])) {
            $data['charity_details'] = $this->request->post['charity_details'];
        } elseif (isset($this->request->get['charity_id'])) {
            $data['charity_details'] = $charity_details;
        } else {
            $data['charity_details'] = array();
        }

        if (isset($this->request->post['location'])) {
            $data['location'] = $this->request->post['location'];
        } elseif (!empty($charity_information)) {
            $data['location'] = $charity_information[0]['location'];
        } else {
            $data['location'] = '';
        }

        if (isset($this->request->post['phone'])) {
            $data['phone'] = $this->request->post['phone'];
        } elseif (!empty($charity_information)) {
            $data['phone'] = $charity_information[0]['phone'];
        } else {
            $data['phone'] = '';
        }

        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } elseif (!empty($charity_information)) {
            $data['email'] = $charity_information[0]['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->request->post['website'])) {
            $data['website'] = $this->request->post['website'];
        } elseif (!empty($charity_information)) {
            $data['website'] = $charity_information[0]['website'];
        } else {
            $data['website'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('momday/charity', $data));
    }

    private function IsNullOrEmptyString($str){
        return (!isset($str) || trim($str) === '');
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'momday/charities')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        foreach ($this->request->post['charity_details'] as $language_id => $value) {
            if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 512)) {
                $this->error['name'][$language_id] = $this->language->get('error_charity_name');
            }
        }

        if(!$this->IsNullOrEmptyString($this->request->post['location'])) {
            if ((utf8_strlen($this->request->post['location']) < 3) || (utf8_strlen($this->request->post['location']) > 256)) {
                $this->error['location'] = $this->language->get('error_location');
            }
        }

        if(!$this->IsNullOrEmptyString($this->request->post['website'])){
            if ((utf8_strlen($this->request->post['website']) < 3) || (utf8_strlen($this->request->post['website']) > 256)) {
                $this->error['website'] = $this->language->get('error_website');
            }
        }

        if(!$this->IsNullOrEmptyString($this->request->post['email'])) {
            if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
                $this->error['email'] = $this->language->get('error_email');
            }
        }

        if(!$this->IsNullOrEmptyString($this->request->post['phone'])) {
            if ((utf8_strlen($this->request->post['phone']) < 3) || (utf8_strlen($this->request->post['phone']) > 32)) {
                $this->error['phone'] = $this->language->get('error_phone');
            }
        }


        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning_text');
        }


        return !$this->error;
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }



}