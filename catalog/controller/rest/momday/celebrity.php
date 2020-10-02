<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestMomdayCelebrity extends RestController
{
    public function productToCelebrityStore()
    {

        $this->load->model('momday/celebrities');
        $this->load->language('momday/celebrities');
        $this->checkPlugin();

        $customer_id = $this->customer->getId();

        if (!$this->customer->isLogged()) {
            $this->json['error'][] = $this->language->get('api_error_user_not_logged_in');
            $this->statusCode = 400;
        } elseif (!($this->model_momday_celebrities->checkIsCelebrity($customer_id))) {
            $this->json['error'][] = $this->language->get('api_error_user_not_celebrity');
            $this->statusCode = 400;
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = $this->getPost();
            if (isset($post['product_id']) && ctype_digit($post['product_id'])) {
                if(!$this->model_momday_celebrities->check_product_exists($post['product_id'])){
                    $this->json['error'][] = $this->language->get('api_error_product_not_found') . $post['product_id'];
                    $this->statusCode = 400;
                }else{
                    $this->model_momday_celebrities->addProductToCelebrityStore($customer_id, $post['product_id']);
                }
            } else {
                $this->json['error'][] = $this->language->get('api_error_missing_product_id');
                $this->statusCode = 400;
            }

        } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            if (isset($this->request->get['product_id']) && ctype_digit($this->request->get['product_id'])) {
                $this->model_momday_celebrities->removeProductFromCelebrityStore($customer_id, $this->request->get['product_id']);
            } else {
                $this->json['error'][] = $this->language->get('api_error_missing_product_id');
                $this->statusCode = 400;
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST","DELETE");
        }
        return $this->sendResponse();
    }
}