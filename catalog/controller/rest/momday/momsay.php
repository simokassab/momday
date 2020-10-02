<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestMomdayMomsay extends RestController
{
    public function post()
    {
        $this->load->model('momday/momsay');
        $this->checkPlugin();

        // getMomsayPostRest automatically handles missing customer_id (not logged in)
        $customer_id = $this->customer->getId();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->load->model('momday/momsay');
            $this->load->model('momday/activities');
            if (!isset($this->request->get['post_id']) || !ctype_digit($this->request->get['post_id'])){
                $this->json['error'][] = "post id missing or has wrong format";
            }elseif(!$this->check_post_is_momsay($this->request->get['post_id'])){
                $this->json['error'][] = "id does not refer to momsay post";
            }else{
                $post_id = $this->request->get['post_id'];
                $post = $this->model_momday_momsay->getMomsayPostRest($post_id, $customer_id);
                $comments = $this->model_momday_momsay->getPostCommentsRest($post_id);

                $momday_directory = '';
                if(defined('MOMDAY_DIRECTORY')) {
                    $momday_directory = MOMDAY_DIRECTORY;
                }

                $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

                foreach ($post as &$post) {
                    $post['image'] = $base_url . '/' . $momday_directory . 'image/' . $post['image'];
                    $post['author_image'] = $base_url . '/' . $momday_directory . 'image/' . $post['author_image'];
                }

                $this->json["data"] = array_merge($post,array('comments' => $comments));
            }
        }

        return $this->sendResponse();
    }

    public function like_post()
    {
        $this->load->model('momday/momsay');
        $this->checkPlugin();

        $customer_id = $this->customer->getId();
        $this->load->model('momday/momsay');
        $this->load->model('momday/activities');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = $this->getPost();

            if (!$this->customer->isLogged()){
                $this->json['error'][] = "customer not logged in";
//            elseif (!isset($post['post_id']) || !ctype_digit((int)$post['post_id'])){
            }elseif (!isset($post['post_id'])){
                $this->json['error'][] = "post id missing or has wrong format";
            }elseif(!$this->check_post_is_momsay($post['post_id'])){
                $this->json['error'][] = "id does not refer to momsay post";
            }else{
                $post_id = $post['post_id'];
                if(!$this->model_momday_momsay->getUserPostLike($post_id, $customer_id)){
                    $this->model_momday_momsay->addUserPostLike($post_id, $customer_id);
                }

                $this->json["success"] = 1;
            }
        }elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $customer_id = $this->customer->getId();

            if (!$this->customer->isLogged()){
                $this->json['error'][] = "customer not logged in";
            }elseif (!isset($this->request->get['post_id']) || !ctype_digit($this->request->get['post_id'])){
                $this->json['error'][] = "post id missing or has wrong format";
            }elseif(!$this->check_post_is_momsay($this->request->get['post_id'])){
                $this->json['error'][] = "id does not refer to momsay post";
            }else{
                $post_id = $this->request->get['post_id'];
                $this->model_momday_momsay->removeUserPostLike($post_id, $customer_id);
            }
        }

        return $this->sendResponse();
    }

    public function add_comment()
    {
        $this->load->model('momday/momsay');
        $this->checkPlugin();

        $customer_id = $this->customer->getId();
        $this->load->model('momday/momsay');
        $this->load->model('momday/activities');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = $this->getPost();
            if (!$this->customer->isLogged()){
                $this->json['error'][] = "customer not logged in";
//            elseif (!isset($post['post_id']) || !ctype_digit((int)$post['post_id'])){
            }elseif (!isset($post['post_id'])){
                $this->json['error'][] = "post id missing or has wrong format";
            }elseif(!$this->check_post_is_momsay($post['post_id'])){
                $this->json['error'][] = "id does not refer to momsay post";
            }elseif(!isset($post['comment'])){
                $this->json['error'][] = "comment is missing";
//            }elseif(!isset($post['comment_parent_id']) || !ctype_digit((int)$post['comment_parent_id'])){
            }elseif(!isset($post['comment_parent_id'])){
                $this->json['error'][] = "parent id missing or has wrong format";
            }else{
                $post_id = $post['post_id'];
                $comment = $post['comment'];
                $comment_parent_id = $post['comment_parent_id'];
                $name = $this->customer->getFirstName() . ' ' . $this->customer->getLastName();
                $email = $this->customer->getEmail();

                $data = array('post_id' => $post_id,
                            'comment' => $comment,
                            'comment_parent_id' => $comment_parent_id,
                            'name' => $name,
                            'email' => $email);

                $comment_id = $this->model_momday_momsay->addPostCommentRest($data);
                $this->json["data"] = array('comment_id' => $comment_id);

                $this->json["success"] = 1;
            }
        }

        return $this->sendResponse();
    }

    public function check_post_is_momsay($post_id){
        //check post is momsay not activity
        $blog_type = $this->model_momday_activities->getBlogtypeToBlogpost($post_id);
        if (sizeof($blog_type) >= 1) {
            $blog_type_entry = $blog_type[0];
            if ($blog_type_entry['blog_type'] != 1) {
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