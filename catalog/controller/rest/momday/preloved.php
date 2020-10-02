<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestMomdayPreloved extends RestController
{


    public function upload_file()
    {
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!$this->customer->isLogged()){
                $this->json['error'][] = "customer not logged in";
            }else {
                $this->json["data"] = $this->upload();
            }
        }
        return $this->sendResponse();
    }

//    private function remove_non_blank_image($removeDirectory, $filenameToRemove){
//        if($filenameToRemove!='no_image.png' && $filenameToRemove!='no_image.jpeg' && basename($filenameToRemove)!='no_image.png' && basename($filenameToRemove)!='no_image.jpeg') {
//            if (is_file($removeDirectory . $filenameToRemove)) {
//                unlink($removeDirectory . $filenameToRemove);
//            }
//        }
//    }

public function post_preloved_item(){


    $this->checkPlugin();
    $post = $this->getPost();

    $this->load->language('account/momday/customerseller');
    $this->load->model('account/momday');
    $this->load->model('momday/customerseller_productlist');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($post['product_id']) && !$this->model_momday_customerseller_productlist->checkCustomersellerProductAccess($post['product_id'])) {
            $this->json['error'][] = "customer has no permission to access this product";
        }elseif ((utf8_strlen($post['name']) < 3) || (utf8_strlen($post['name']) > 255)) {
            $this->json['error'][] = $this->language->get('error_name');
        }elseif (!is_numeric($post['price']) || $post['price'] < 0) {
            $this->json['error'][] = $this->language->get('error_price');
        }elseif(!($post['product_image'])){
            $this->json['error'][] = $this->language->get('error_image');
        }elseif(!($post['manufacturer'])){
            $this->json['error'][] = 'Manufacturer name missing';
        }else {
            $post['model'] = $post['manufacturer'];
            $post['tag'] = '';
            $post['status'] = 0;
            $post['quantity'] = 1;
            if (!isset($post['product_store'])) {
                $post['product_store'] = array(0);
            }

            $customerseller_productlist = array();
            $customerseller_productlist['customer_id'] = $this->customer->getId();
            $customerseller_productlist['status'] = 'pending';
            $customerseller_productlist['date_added'] = time();
            $customerseller_productlist['date_modified'] = time();
            $customerseller_productlist['address'] = $post['address'];

            $post['momday_attributes'] = $this->get_momday_attribute_name_to_id();
            $old_product_description = array('name' => $post['name'],
                                            'description'=> $post['description']);
            $post['product_description'] = $this->fix_product_description($old_product_description);

            if (!isset($post['product_id'])) {
                $customerseller_productlist['product_id'] = $this->model_account_momday->addPrelovedProduct($post);
                if(isset($post['video'])) {
                    $data_to_fix['video'] = $post['video'];
                    $customerseller_productlist['video'] = $this->model_account_momday->fix_product_video($data_to_fix, $customerseller_productlist['product_id']);
                }else{
                    $customerseller_productlist['video'] = '';
                }
                $this->model_momday_customerseller_productlist->addCustomersellerProduct($customerseller_productlist);
            } else {
                $customerseller_productlist['product_id'] = $post['product_id'];
                if(isset($post['video'])) {
                    $data_to_fix['video'] = $post['video'];
                    $customerseller_productlist['video'] = $this->model_account_momday->fix_product_video($data_to_fix, $customerseller_productlist['product_id']);
                }else{
                    $customerseller_productlist['video'] = '';
                }
                $this->model_account_momday->editPrelovedProduct($post['product_id'], $post);
                $this->model_momday_customerseller_productlist->editCustomersellerProduct($customerseller_productlist);
            }
            $this->json["success"] = 1;
        }
    }
    return $this->sendResponse();
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

    private function fix_product_description($old_product_description){
        $old_product_description['meta_title'] = $old_product_description['name'];
        $old_product_description['meta_description'] = $old_product_description['description'];
        $old_product_description['tag'] = '';
        $old_product_description['meta_keyword'] = $old_product_description['name'];
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


    public function deactivate_product()
    {
        $this->checkPlugin();
        $post = $this->getPost();
        $product_id = $post['product_id'];
        $this->load->model('account/momday');
        $this->load->model('momday/customerseller_productlist');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!$this->model_momday_customerseller_productlist->checkCustomersellerProductAccess($product_id)) {
                $this->json['error'][] = "customer has no permission to delete this file";
            }else{
                $this->model_account_momday->updateCustomersellerProductStatus($product_id, 'inactive');
            }
        }
        return $this->sendResponse();
    }

    public function delete_product()
    {
        $this->checkPlugin();
        $post = $this->getPost();
        $product_id = $post['product_id'];
        $this->load->model('momday/customerseller_productlist');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!$this->model_momday_customerseller_productlist->checkCustomersellerProductAccess($product_id)) {
                $this->json['error'][] = "customer has no permission to delete this file";
            }else{
                $this->model_momday_customerseller_productlist->deleteCustomersellerProduct($product_id);
            }
        }
        return $this->sendResponse();
    }

    public function get_customerseller_preloved_products()
    {
        $this->checkPlugin();
        $this->load->model('momday/customerseller_productlist');

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $customer_id = $this->customer->getId();
            $language_id = (int)$this->config->get('config_language_id');
            if (!isset($this->request->get['offset']) || !ctype_digit($this->request->get['offset'])) {
                $offset = 0;
            }else{
                $offset = $this->request->get['offset'];
            }
            if (!isset($this->request->get['limit']) || !ctype_digit($this->request->get['limit'])) {
                $limit = 20;
            }else{
                $limit = $this->request->get['limit'];
            }
            $data = array(
                'start' => $offset,
                'limit' => $limit
            );
            if(isset($this->request->get['status'])){
                $data['status'] = $this->request->get['status'];
            }
            $products = $this->model_momday_customerseller_productlist->getCustomersellerProductlistApi($customer_id, $language_id, $data);

            $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
            $momday_directory = '';
            if(defined('MOMDAY_DIRECTORY')) {
                $momday_directory = MOMDAY_DIRECTORY;
            }
            $image_base_url = $base_url. '/' . $momday_directory . '/image/';

            foreach($products as &$product){
                if($product['image'] == '') {
                    $product['image'] = $image_base_url . 'no_image.jpeg';
                }else{
                    $product['image'] = $image_base_url . $product['image'];
                }
            }
            $this->json["data"] = $products;
        }
        return $this->sendResponse();
    }

    public function remove_image()
    {
        $this->checkPlugin();
        $is_video = (isset($this->request->get['is_video']) && $this->request->get['is_video']);

        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            if (!$this->customer->isLogged()) {
                $this->json['error'][] = "customer not logged in";
            } elseif (!isset($this->request->get['filename'])) {
                $this->json['error'][] = "file name missing";
            } elseif (!isset($this->request->get['product_id'])) {
                $filenameToRemove = basename($this->request->get['filename']);
                $tempDirectory = DIR_IMAGE . 'momday/products/temp/';
                if ($filenameToRemove != 'no_image.png' && $filenameToRemove != 'no_image.jpeg' && basename($filenameToRemove) != 'no_image.png' && basename($filenameToRemove) != 'no_image.jpeg') {
                    if (is_file($tempDirectory . $filenameToRemove)) {
                        unlink($tempDirectory . $filenameToRemove);
                        $this->load->model('account/momday');
                        $this->model_account_momday->removeCustomersellerTempImage('momday/products/temp/' . $filenameToRemove);
                    }
                }
                $this->json["success"] = 1;
            } else {
                $empty_image = 'no_image.jpeg';
                $product_id = $this->request->get['product_id'];
                $this->load->model('account/momday');
                $this->load->model('momday/customerseller_productlist');
                if (!$this->model_momday_customerseller_productlist->checkCustomersellerProductAccess($product_id)) {
                    $this->json['error'][] = "customer has no permission to delete this file";
                } else {
                    $filenameToRemove = basename($this->request->get['filename']);
                    $tempDirectory = DIR_IMAGE . 'momday/products/temp/';
                    $productDirectory = DIR_IMAGE . 'momday/products/' . $product_id . '/';
                    if($this->model_account_momday->checkMediaInProduct($product_id, 'momday/products/' . $product_id . '/' . $filenameToRemove)>0) {
                        $this->model_account_momday->deactivateProduct($product_id);
                        $this->model_account_momday->updateCustomersellerProductStatus($product_id, 'inactive');
                    }
                    if($is_video){
                        $this->model_account_momday->removeCustomersellerVideo($product_id);
                    }else {
                        $this->model_account_momday->removeCustomersellerTempImage('momday/products/temp/' . $filenameToRemove);
                        $this->model_account_momday->removeProductImage('momday/products/' . $product_id . '/' . $filenameToRemove);
                        $this->model_account_momday->removeProductFeaturedImage('momday/products/' . $product_id . '/' . $filenameToRemove, $empty_image, $product_id);
                    }
                    if ($filenameToRemove != 'no_image.png' && $filenameToRemove != 'no_image.jpeg' && basename($filenameToRemove) != 'no_image.png' && basename($filenameToRemove) != 'no_image.jpeg') {
                        if (is_file($tempDirectory . $filenameToRemove)) {
                            unlink($tempDirectory . $filenameToRemove);
                        } elseif (is_file($productDirectory . $filenameToRemove)) {
                            unlink($productDirectory . $filenameToRemove);
                        }
                    }
                }
                $this->json["success"] = 1;
            }
        }
        return $this->sendResponse();
    }

    private function upload() {
        $this->load->language('momday/sale_order');

        $json = array();

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

//        $this->response->addHeader('Content-Type: application/json');
//        $this->response->setOutput(json_encode($json));

        return $json;
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }

}