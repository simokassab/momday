<?php
class ControllerMomdayBlogcomments extends Controller
{
    public function all()
    {
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        if (isset($this->session->data['warning'])) {
            $data['error_warning'] = $this->session->data['warning'];
            unset($this->session->data['warning']);
        }

        $this->load->language('momday/comments');

        $this->document->setTitle($this->language->get('heading_title_momsay_comments'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_momsay'),
            'href' => $this->url->link('momday/blog/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_comments'),
            'href' => $this->url->link('momday/blogcomments/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['return_all_url'] = $this->url->link('momday/blogcomments/return_all_comments&user_token=' . $this->session->data['user_token'], '', true);
        $data['get_comment_details'] = $this->url->link('momday/blogcomments/get_comment_details&user_token=' . $this->session->data['user_token'], '', true);
        $data['save_comment_status'] = $this->url->link('momday/blogcomments/save_comment_status&user_token=' . $this->session->data['user_token'], '', true);

        $href= array(
//            'href_add' => $this->url->link('momday/blogauthors/add&user_token=' . $this->session->data['user_token'], '', true),
//            'href_edit' => $this->url->link('momday/blogauthors/add&user_token=' . $this->session->data['user_token'], '', true),
//            'href_delete' => $this->url->link('momday/blogauthors/delete&user_token=' . $this->session->data['user_token'], '', true),
        );

        $data['href'] = $href;

        if (array_key_exists('post_id', $this->request->get)){
            $data['post_id'] = $this->request->get['post_id'];
        }

        $this->response->setOutput($this->load->view('momday/all_comments', $data));
    }

    // return all blog comments, used for ajax call
    public function return_all_comments()
    {
        $this->load->model('localisation/language');
        $languages = $this->model_localisation_language->getLanguages();
        $language_id = array_pop($languages)['language_id'];

        $post_id = null;
        if (array_key_exists('post_id', $this->request->post) && $this->request->post['post_id']){
            $post_id = $this->request->post['post_id'];
        }
        $this->load->model('momday/blog');
        $comments = $this->model_momday_blog->getBlogComments($language_id, $post_id);
        $json['data'] = $comments;
        $posts_json = json_encode($json);
        print($posts_json);
    }

    public function get_comment_details()
    {
        $comment_id = null;
        if (array_key_exists('comment_id', $this->request->post) && $this->request->post['comment_id']){
                $comment_id = $this->request->post['comment_id'];
        }
        $this->load->model('momday/blog');
        $comment_details = $this->model_momday_blog->getCommentDetails($comment_id);

        if (sizeof($comment_details) >=1){
            $comment_details = $comment_details[0];
        }
//        $json['data'] = $comment_details;
//        $json['success'] = 'success';
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($comment_details));
    }

    public function save_comment_status()
    {
        $comment_id = null;
        if (array_key_exists('comment_id', $this->request->post) && $this->request->post['comment_id']){
                $comment_id = $this->request->post['comment_id'];
        }
        $status = null;
        if (array_key_exists('status', $this->request->post)){
                $status = $this->request->post['status'];
        }
        $comment_details['success'] = 0;
        if(!is_null($comment_id) && !is_null($status)) {
            $this->load->model('momday/blog');
            $this->model_momday_blog->updateCommentStatus($comment_id, $status);
            $comment_details['success'] = 1;
        }

        $comment_details['comment_id'] = $comment_id;
        $comment_details['status'] = $status;

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($comment_details));
    }

    private function print_to_file($array_to_print){


        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fwrite($myfile, print_r("\n",true));
        fclose($myfile);
    }

}