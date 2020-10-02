<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerFeedMomdayPreloved extends RestController
{
    private $error = array();

    public function charities()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $language_id = (int)$this->config->get('config_language_id');
            $this->load->model('account/momday');
            $charities = $this->model_account_momday->getCharities($language_id);

            $this->json["data"] = $charities;
        }

        return $this->sendResponse();
    }

    public function product_condition_values()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->load->language('account/momday/customerseller');
            $this->json["data"] = $this->language->get('text_condition_value');
        }

        return $this->sendResponse();
    }

    public function weight_class()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $language_id = (int)$this->config->get('config_language_id');
            $this->load->model('account/momday');
            $charities = $this->model_account_momday->getWeightClassTitles($language_id);

            $this->json["data"] = $charities;
        }

        return $this->sendResponse();
    }

    public function length_class()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $language_id = (int)$this->config->get('config_language_id');
            $this->load->model('account/momday');
            $charities = $this->model_account_momday->getLengthClassTitles($language_id);

            $this->json["data"] = $charities;
        }

        return $this->sendResponse();
    }





    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }


}