<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerFeedMomdayActivities extends RestController
{
    private $error = array();

    public function activities()
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
                $this->load->model('momday/activities');
                $data = array("limit" => $this->request->get['limit'],
                                "start" => $this->request->get['offset']);
                $activities = $this->model_momday_activities->getPostsRest($data);
                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

                $momday_directory = '';
                if(defined('MOMDAY_DIRECTORY')) {
                    $momday_directory = MOMDAY_DIRECTORY;
                }
                foreach ($activities as &$activity) {
                    $activity['image'] = $base_url . '/' . $momday_directory . 'image/' . $activity['image'];
                }

                $this->json["data"] = $activities;
            }
        }

        return $this->sendResponse();
    }

    public function activity()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->load->model('momday/activities');
            if (!isset($this->request->get['activity_id']) || !ctype_digit($this->request->get['activity_id'])){
                $this->json['error'][] = "activity id missing or has wrong format";
            }elseif(!$this->check_post_is_activity($this->request->get['activity_id'])){
                $this->json['error'][] = "id does not refer to activity";
            }else{
                $activity_id = $this->request->get['activity_id'];
                $activity = $this->model_momday_activities->getActivityPostRest($activity_id);
                $host_details = $this->model_momday_activities->getActivityHostDetails($activity_id);

                if(sizeof($host_details)>0){
                    $host_details = $host_details[0];
                }
                $this->json["data"] = array_merge($activity,$host_details);
            }
        }

        return $this->sendResponse();
    }

    private function check_post_is_activity($post_id){
        //check post is activity not momsay
        $blog_type = $this->model_momday_activities->getBlogtypeToBlogpost($post_id);
        if (sizeof($blog_type) >= 1) {
            $blog_type_entry = $blog_type[0];
            if ($blog_type_entry['blog_type'] != 2) {
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }


}