<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerFeedMomdayMomsay extends RestController
{
    private $error = array();

    public function posts()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (!isset($this->request->get['limit']) || !ctype_digit($this->request->get['limit'])){
                $this->json['error'][] = "error in limit param";
            }
            elseif (!isset($this->request->get['offset']) || !ctype_digit($this->request->get['offset'])){
                $this->json['error'][] = "error in offset param";
            }
            else{
                $this->load->model('momday/momsay');
                $data = array("limit" => $this->request->get['limit'],
                    "start" => $this->request->get['offset']);
                $posts = $this->model_momday_momsay->getMomsayPostsRest($data);
                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

                $momday_directory = '';
                if(defined('MOMDAY_DIRECTORY')) {
                    $momday_directory = MOMDAY_DIRECTORY;
                }
                foreach ($posts as &$post) {
                    $post['image'] = $base_url . '/' . $momday_directory . 'image/' . $post['image'];
                    $post['author_image'] = $base_url . '/' . $momday_directory . 'image/' . $post['author_image'];
                }

                $this->json["data"] = $posts;
            }
        }

        return $this->sendResponse();
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }


}