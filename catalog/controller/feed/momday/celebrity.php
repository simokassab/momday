<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerFeedMomdayCelebrity extends RestController
{
    private $error = array();

    public function celebrities()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            //get all celebrity data according to language: id, first name, last name, cropped image
            $this->load->model('momday/celebrities');
            $celebrities = $this->model_momday_celebrities->getCelebrities('');
            foreach ($celebrities as &$celebrity) {
                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

                $momday_directory = '';
                if(defined('MOMDAY_DIRECTORY')) {
                    $momday_directory = MOMDAY_DIRECTORY;
                }

                $celebrity['square_image'] = $base_url . '/' . $momday_directory . 'image/' . $celebrity['square_image'];
                $celebrity['portrait_image'] = $base_url . '/' . $momday_directory . 'image/' . $celebrity['portrait_image'];
            }
            $this->json["data"] = $celebrities;
        }

        return $this->sendResponse();
    }

    public function celebrity_categories()
    {

        $this->checkPlugin();
        $this->load->language('momday/celebrities');

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($this->request->get['id']) && !ctype_digit($this->request->get['id'])){
                $this->json['error'][] = $this->language->get('api_error_id_not_int');
            }
            elseif (isset($this->request->get['id']) && ctype_digit($this->request->get['id'])) {
                //get celebrity data and product categories according to language: id, first name, last name, image, bio, categories
                $this->load->model('momday/celebrities');
                $celebrity = $this->model_momday_celebrities->getCelebrityCategories($this->request->get['id']);

                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

                $momday_directory = '';
                if(defined('MOMDAY_DIRECTORY')) {
                    $momday_directory = MOMDAY_DIRECTORY;
                }

                $celebrity['portrait_image'] = $base_url . '/' . $momday_directory . 'image/' . $celebrity['portrait_image'];

                $this->json["data"] = $celebrity;
            }
            else{
                $this->json['error'][] = $this->language->get('api_error_id_not_found');
            }
        }

        return $this->sendResponse();
    }
}