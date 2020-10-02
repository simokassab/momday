<?php
class ControllerMomdayCelebrities extends Controller
{
    private $error = array();
    public function index(){
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        if (isset($this->session->data['warning'])) {
            $data['error_warning'] = $this->session->data['warning'];
            unset($this->session->data['warning']);
        }

        $this->load->language('momday/celebrities');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['return_all_url'] = $this->url->link('momday/celebrities/return_all&user_token=' . $this->session->data['user_token'], '', true);
        $data['activate_deactivate_celebrity'] = $this->url->link('momday/celebrities/activate_deactivate&user_token=' . $this->session->data['user_token'], '', true);
        $data['url_delete'] = $this->url->link('momday/celebrities/delete&user_token=' . $this->session->data['user_token'], '', true);

        $href= array(
            'href_add' => $this->url->link('momday/celebrities/add&user_token=' . $this->session->data['user_token'], '', true),
            'href_edit' => $this->url->link('momday/celebrities/edit&user_token=' . $this->session->data['user_token'], '', true),
            'href_delete' => $this->url->link('momday/celebrities/delete&user_token=' . $this->session->data['user_token'], '', true),
            'href_activate_deactivate' => $this->url->link('momday/celebrities/activate_deactivate&user_token=' . $this->session->data['user_token'], '', true),
        );

        $data['href'] = $href;

        $this->response->setOutput($this->load->view('momday/all_celebrities', $data));
    }

    // return all celebrities, used for ajax call
    public function return_all()
    {
        $language_id = $_POST['language_id'];
        $this->load->model('momday/celebrity');
        $posts = $this->model_momday_celebrity->getAllCelebrities($language_id);
        $json['data'] = $posts;
        $posts_json = json_encode($json);
        print($posts_json);
    }

    public function activate_deactivate()
    {
        $this->load->model('momday/celebrity');

        $json = array();
        $json['old_status'] = $_POST['celebrity_status'];
        if (!isset($_POST['celebrity_id']) or is_null($_POST['celebrity_id'])) {
            $json['error'] = 1;
            print(json_encode($json));
        } elseif (!isset($_POST['celebrity_status']) or is_null($_POST['celebrity_status'])) {
            $json['error'] = 2;
            print(json_encode($json));
        } elseif (!$_POST['celebrity_status'] == 0 and !$_POST['celebrity_status'] == 1) {
            $json['error'] = 3;
            print(json_encode($json));
            return;
        } else {
            $status_update_data = array();
            $status_update_data['celebrity_id'] = $_POST['celebrity_id'];
            $status_update_data['status'] = 1 - $_POST['celebrity_status'];
            $this->model_momday_celebrity->updateCelebrityStatus($status_update_data);
            $json['success'] = 1;
            $json['celebrity_id'] = $_POST['celebrity_id'];
            $json['new_status'] = $status_update_data['status'];

            print(json_encode($json));
        }
        return;
    }

    private function get_customer_group(){
        $this->load->model('customer/customer_group');
        $customer_groups = $this->model_customer_customer_group->getCustomerGroups();
        if(sizeof($customer_groups)>0){
            if(array_key_exists('customer_group_id', $customer_groups[0])){
                return $customer_groups[0]['customer_group_id'];
            }
        }
        return 1;
    }

    private function IsNullOrEmptyString($str){
        return (!isset($str) || trim($str) === '');
    }

    private function send_password_email($email, $password) {

        $emailHTML =$this->generate_password_email_content($password);

        $mail = new Mail($this->config->get('config_mail_engine'));
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
        $mail->smtp_username = $this->config->get('config_mail_smtp_username');
        $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
        $mail->smtp_port = $this->config->get('config_mail_smtp_port');
        $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
        $mail->setTo($email);
        $mail->setFrom($this->config->get('config_email'));
        $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
        $mail->setSubject('Momday Celebrity Account Details');
        $mail->setHtml($emailHTML);
        try {
            $mail->send();
            return true;
        } catch (Exception $e) {
            $this->session->data['error_sending_email'] = $e->getMessage();
            return false;
        }
    }


    public function test(){
//        $this->send_password_email('abcdef@gmail.com','hgAtjOmkFrjIFjh');
//        $this->response->setOutput($this->generate_password_email_content('ajuhsduosd'));
    }
    private function generate_password_email_content($password){
        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $data = array('momday_logo_url' => $base_url. '/' . $momday_directory . '/image/momday/momday.png',
            'momday_url' => $base_url. '/' . $momday_directory,
                        'celebrity_password' => $password);
        $this->load->language('momday/celebrities');
        return $this->load->view('momday/emails/celebrity_password', $data);
    }

    public function add() {
        $this->load->language('momday/celebrities');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('momday/celebrity');
        $this->load->model('customer/customer');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $password = token(15);
            $email = $this->request->post['email'];
            $account_details = array(
                'customer_group_id' => $this->get_customer_group(),
                'firstname' => $this->request->post['account_first_name'],
                'lastname' => $this->request->post['account_last_name'],
                'email' => $this->request->post['email'],
                'telephone' => $this->request->post['telephone'],
                'newsletter' => 0,
                'password' => $password,
                'status' => 1,
                'safe' => 0
            );
            $celebrity_id = $this->model_customer_customer->addCustomer($account_details);

            // move images from temp folder to folder with name = celebrity_id
            $temp_square_image_url = $this->request->post['square_image'];
            $square_image_file_name = basename($temp_square_image_url);
            $temp_portrait_image_url = $this->request->post['portrait_image'];
            $portrait_image_file_name = basename($temp_portrait_image_url);

            $square_image_path = $this->move_celebrity_images($celebrity_id, $square_image_file_name, 'momday/celebrity/temp/');
            $portrait_image_path = $this->move_celebrity_images($celebrity_id, $portrait_image_file_name, 'momday/celebrity/temp/');
            $this->model_momday_celebrity->removeCelebrityTempImage('momday/celebrity/temp/' . $square_image_file_name);
            $this->model_momday_celebrity->removeCelebrityTempImage('momday/celebrity/temp/' . $portrait_image_file_name);


            $celebrity_details = array(
                'celebrity_id' => $celebrity_id,
                'square_image' => $square_image_path,
                'portrait_image' => $portrait_image_path,
                'status' => $this->request->post['status'],
                'celebrity_details' => $this->request->post['celebrity_details']
            );
            $this->model_momday_celebrity->addCelebrityWithDetails($celebrity_details);

            $this->send_password_email($email, $password);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $this->response->redirect($this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('momday/celebrities');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('momday/celebrity');
        $this->load->model('customer/customer');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $celebrity_id = $this->request->get['celebrity_id'];
            $account_details = array(
                'firstname' => $this->request->post['account_first_name'],
                'lastname' => $this->request->post['account_last_name'],
                'telephone' => $this->request->post['telephone']
            );
            $this->model_momday_celebrity->editCustomer($celebrity_id, $account_details);

            // move images from temp folder to folder with name = celebrity_id
            // remove old celebrity images in case they were replaced
            $square_image_path = '';
            $portrait_image_path = '';
            $old_square_image_path = '';
            $old_portrait_image_path = '';
            $celebrity_images = $this->model_momday_celebrity->getCelebrityImages($celebrity_id);
            if(sizeof($celebrity_images)>0){
                $celebrity_images = $celebrity_images[0];
                if(array_key_exists('square_image', $celebrity_images)){
                    $square_image_path = $celebrity_images['square_image'];
                    $old_square_image_path = $square_image_path;
                }
                if(array_key_exists('portrait_image', $celebrity_images)){
                    $portrait_image_path = $celebrity_images['portrait_image'];
                    $old_portrait_image_path = $portrait_image_path;
                }
            }
            $temp_square_image_url = $this->request->post['square_image'];
            $new_square_image_file_name = basename($temp_square_image_url);
            $temp_portrait_image_url = $this->request->post['portrait_image'];
            $new_portrait_image_file_name = basename($temp_portrait_image_url);

            // image was updated: delete old image
            if(basename($square_image_path) != $new_square_image_file_name) {
                $square_image_path = $this->move_celebrity_images($celebrity_id, $new_square_image_file_name, 'momday/celebrity/temp/');
                $this->model_momday_celebrity->removeCelebrityTempImage('momday/celebrity/temp/' . $new_square_image_file_name);
                if($old_square_image_path!='no_image.png' && $old_square_image_path!='no_image.jpeg' && basename($old_square_image_path)!='no_image.png' && basename($old_square_image_path)!='no_image.jpeg') {
                    if (is_file(DIR_IMAGE . $old_square_image_path)) {
                        unlink(DIR_IMAGE . $old_square_image_path);
                    }
                }
            }
            if(basename($portrait_image_path) != $new_portrait_image_file_name) {
                $portrait_image_path = $this->move_celebrity_images($celebrity_id, $new_portrait_image_file_name, 'momday/celebrity/temp/');
                $this->model_momday_celebrity->removeCelebrityTempImage('momday/celebrity/temp/' . $new_portrait_image_file_name);
                if($old_portrait_image_path!='no_image.png' && $old_portrait_image_path!='no_image.jpeg' && basename($old_portrait_image_path)!='no_image.png' && basename($old_portrait_image_path)!='no_image.jpeg') {
                    if (is_file(DIR_IMAGE . $old_portrait_image_path)) {
                        unlink(DIR_IMAGE . $old_portrait_image_path);
                    }
                }
            }


            $celebrity_details = array(
                'celebrity_id' => $celebrity_id,
                'square_image' => $square_image_path,
                'portrait_image' => $portrait_image_path,
                'status' => $this->request->post['status'],
                'celebrity_details' => $this->request->post['celebrity_details']
            );
            $this->model_momday_celebrity->editCelebrityWithDetails($celebrity_details);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $this->response->redirect($this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete(){

        $this->load->model('momday/celebrity');

        if (array_key_exists('celebrity_id', $this->request->post)){
            if (!$this->model_momday_celebrity->checkCelebrityExists($this->request->post['celebrity_id'])){
                $this->response->redirect($this->url->link('momday/activities/pagenotfound&user_token=' . $this->session->data['user_token'], '', true));
            }
        }

        $celebrity_id = $this->request->post['celebrity_id'];

        $celebrity_images = $this->model_momday_celebrity->getCelebrityImages($celebrity_id);
        if(sizeof($celebrity_images)>0){
            $celebrity_images = $celebrity_images[0];
            if(array_key_exists('square_image', $celebrity_images)){
                $square_image_path = $celebrity_images['square_image'];
                if($square_image_path!='no_image.png' && $square_image_path!='no_image.jpeg' && basename($square_image_path)!='no_image.png' && basename($square_image_path)!='no_image.jpeg') {
                    if (is_file(DIR_IMAGE . $square_image_path)) {
                        unlink(DIR_IMAGE . $square_image_path);
                    }
                }
            }
            if(array_key_exists('portrait_image', $celebrity_images)){
                $portrait_image_path = $celebrity_images['portrait_image'];
                if($portrait_image_path!='no_image.png' && $portrait_image_path!='no_image.jpeg' && basename($portrait_image_path)!='no_image.png' && basename($portrait_image_path)!='no_image.jpeg') {
                    if (is_file(DIR_IMAGE . $portrait_image_path)) {
                        unlink(DIR_IMAGE . $portrait_image_path);
                    }
                }
            }
        }

        $celebrity_dir = DIR_IMAGE . 'momday/celebrity/' . $celebrity_id;
        if(is_dir($celebrity_dir)){
            rmdir($celebrity_dir);
        }
        $this->model_momday_celebrity->removeCelebrityAndDetails($celebrity_id);
        $this->response->redirect($this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'] , true));
    }

    private function move_celebrity_images($celebrity_id, $filenameToRemove, $old_image_path){
        // old image path is 'momday/celebrity/temp/' if moving temp images (add)
        // old image path is same as $new_image_path if updating celebrity image (edit)
        $removeDirectory = DIR_IMAGE . $old_image_path;
        $new_image_path = 'momday/celebrity/'. $celebrity_id .'/';
        $newDirectory = DIR_IMAGE . $new_image_path;

        if (!file_exists($newDirectory)) {
            mkdir($newDirectory, 0777, true);
        }

        copy($removeDirectory . $filenameToRemove, $newDirectory . $filenameToRemove);

        if($filenameToRemove!='no_image.png' && $filenameToRemove!='no_image.jpeg' && basename($filenameToRemove)!='no_image.png' && basename($filenameToRemove)!='no_image.jpeg') {
            if (is_file($removeDirectory . $filenameToRemove)) {
                unlink($removeDirectory . $filenameToRemove);
            }
        }
        return $new_image_path . $filenameToRemove;
    }

    protected function getForm() {
        $data['text_form'] = !isset($this->request->get['celebrity_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['email'])) {
            $data['error_email'] = $this->error['email'];
        } else {
            $data['error_email'] = '';
        }

        if (isset($this->error['telephone'])) {
            $data['error_telephone'] = $this->error['telephone'];
        } else {
            $data['error_telephone'] = '';
        }

        if (isset($this->error['account_first_name'])) {
            $data['error_account_first_name'] = $this->error['account_first_name'];
        } else {
            $data['error_account_first_name'] = array();
        }

        if (isset($this->error['account_last_name'])) {
            $data['error_account_last_name'] = $this->error['account_last_name'];
        } else {
            $data['error_account_last_name'] = array();
        }

        if (isset($this->error['celebrity_first_name'])) {
            $data['error_celebrity_first_name'] = $this->error['celebrity_first_name'];
        } else {
            $data['error_celebrity_first_name'] = array();
        }
        $url = '';

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['celebrity_id'])) {
            $data['action'] = $this->url->link('momday/celebrities/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('momday/celebrities/edit', 'user_token=' . $this->session->data['user_token'] . '&celebrity_id=' . $this->request->get['celebrity_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('momday/celebrities', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['edit_mode'] = 0;
        if (isset($this->request->get['celebrity_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $celebrity_information = $this->model_momday_celebrity->getCelebrityInformation($this->request->get['celebrity_id']);
            $celebrity_details = $this->model_momday_celebrity->getCelebrityDetails($this->request->get['celebrity_id']);
            $celebrity_account_details = $this->model_momday_celebrity->getCelebrityAccountDetails($this->request->get['celebrity_id']);
            $data['edit_mode'] = 1;
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['celebrity_details'])) {
            $data['celebrity_details'] = $this->request->post['celebrity_details'];
        } elseif (isset($this->request->get['celebrity_id'])) {
            $data['celebrity_details'] = $celebrity_details;
        } else {
            $data['celebrity_details'] = array();
        }

        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $blank_image = $base_url. '/' . $momday_directory . '/image/no_image.png';
        $data['blank_image'] = $blank_image;
        $data['loading_image'] = $base_url. '/' . $momday_directory . '/image/loading.gif';
        $data['upload_file_url'] = $this->url->link('momday/celebrities/upload&user_token=' . $this->session->data['user_token'], '', true);

        $data['remove_temp_image_url'] = $this->url->link('momday/celebrities/remove_post_temp_image&user_token=' . $this->session->data['user_token'], '', true);

        if (isset($this->request->post['square_image'])) {
            $data['square_image'] = $this->request->post['square_image'];
        } elseif (isset($this->request->get['celebrity_id'])) {
            if(!empty($celebrity_information)) {
                $square_image = $celebrity_information[0]['square_image'];
                $data['square_image'] = $base_url. '/' . $momday_directory . '/image/' . $square_image;
            }else {
                $data['square_image'] = $blank_image;
            }
        } else {
            $data['square_image'] = $blank_image;
        }

        if (isset($this->request->post['portrait_image'])) {
            $data['portrait_image'] = $this->request->post['portrait_image'];
        } elseif (isset($this->request->get['celebrity_id'])) {
            if(!empty($celebrity_information)) {
                $portrait_image = $celebrity_information[0]['portrait_image'];
                $data['portrait_image'] = $base_url. '/' . $momday_directory . '/image/' . $portrait_image;
            }else{
                $data['portrait_image'] = $blank_image;
            }
        } else {
            $data['portrait_image'] = $blank_image;
        }

        if (isset($this->request->post['account_last_name'])) {
            $data['account_last_name'] = $this->request->post['account_last_name'];
        } elseif (!empty($celebrity_account_details)) {
            $data['account_last_name'] = $celebrity_account_details[0]['lastname'];
        } else {
            $data['account_last_name'] = '';
        }

        if (isset($this->request->post['account_first_name'])) {
            $data['account_first_name'] = $this->request->post['account_first_name'];
        } elseif (!empty($celebrity_account_details)) {
            $data['account_first_name'] = $celebrity_account_details[0]['firstname'];
        } else {
            $data['account_first_name'] = '';
        }

        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } elseif (!empty($celebrity_account_details)) {
            $data['email'] = $celebrity_account_details[0]['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->request->post['telephone'])) {
            $data['telephone'] = $this->request->post['telephone'];
        } elseif (!empty($celebrity_account_details)) {
            $data['telephone'] = $celebrity_account_details[0]['telephone'];
        } else {
            $data['telephone'] = '';
        }


        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($celebrity_information)) {
            $data['status'] = $celebrity_information[0]['status'];
        } else {
            $data['status'] = true;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('momday/celebrity', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'momday/celebrities')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['account_first_name']) < 1) || (utf8_strlen($this->request->post['account_first_name']) > 32)) {
            $this->error['account_first_name'] = $this->language->get('error_account_first_name');
        }

        if ((utf8_strlen($this->request->post['account_last_name']) < 1) || (utf8_strlen($this->request->post['account_last_name']) > 32)) {
            $this->error['account_last_name'] = $this->language->get('error_account_last_name');
        }

        foreach ($this->request->post['celebrity_details'] as $language_id => $value) {
            if ((utf8_strlen($value['first_name']) < 1) || (utf8_strlen($value['first_name']) > 32)) {
                $this->error['celebrity_first_name'][$language_id] = $this->language->get('error_celebrity_first_name');
            }
        }

        if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error['email'] = $this->language->get('error_email');
        }

        $customer_info = $this->model_customer_customer->getCustomerByEmail($this->request->post['email']);

        if (!isset($this->request->get['celebrity_id'])) {
            if ($customer_info) {
                $this->error['warning'] = $this->language->get('error_exists');
            }
        } else {
            if ($customer_info && ($this->request->get['celebrity_id'] != $customer_info['customer_id'])) {
                $this->error['warning'] = $this->language->get('error_exists');
            }
        }

        if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
            $this->error['telephone'] = $this->language->get('error_telephone');
        }

        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning_text');
        }

        return !$this->error;
    }

    public function upload() {
        $this->load->language('sale/order');

        $json = array();

        // Check user has permission
        if (!$this->user->hasPermission('modify', 'tool/upload')) {
            $json['error'] = $this->language->get('error_permission');
        }

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

            $uploadDirectory = DIR_IMAGE . 'momday/celebrity/temp/';
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            move_uploaded_file($this->request->files['file']['tmp_name'], $uploadDirectory . $file . '.' . $ext);

            // Hide the uploaded file name so people can not link to it directly.
            $this->load->model('tool/upload');

            $json['code'] = $this->model_tool_upload->addUpload($filename, $file . '.' . $ext);

            $json['success'] = $this->language->get('text_upload');
            $json['filename'] = $file. '.' . $ext;
            $json['filepath'] = 'momday/celebrity/temp/';

            // 2 formats needed for path to image
            // http://path_to_image/image.jpeg for client side display on admin page -> send this in json
            // path of image in the images directory for catalog display -> store this in db
            $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
            $momday_directory = '';
            if(defined('MOMDAY_DIRECTORY')) {
                $momday_directory = MOMDAY_DIRECTORY;
            }
            $image_upload_url = $base_url. '/' . $momday_directory . '/image/';
            $json['image_url'] = $image_upload_url;

            $this->load->model('momday/celebrity');

            $image_size = filesize( $uploadDirectory. $file . '.' . $ext);

            $this->model_momday_celebrity->addCelebrityTempImage($json['filepath'] . $json['filename'], $image_size, time());
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function remove_post_temp_image(){
        $filenameToRemove = $_POST['filenameToRemove'];
        $uploadDirectory = DIR_IMAGE . 'momday/celebrity/temp/';

        if($filenameToRemove!='no_image.png' && $filenameToRemove!='no_image.jpeg' && basename($filenameToRemove)!='no_image.png' && basename($filenameToRemove)!='no_image.jpeg') {
            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }
        }
        $this->load->model('momday/celebrity');
        $this->model_momday_celebrity->removeCelebrityTempImage('momday/celebrity/temp/' . $filenameToRemove);
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }

}