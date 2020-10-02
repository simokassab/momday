<?php
class ControllerMomdayBlog extends Controller
{
    /**
     * Momday Blog
     *
     * Special cases in database:
     * blog status = 2 means blog is still being drafted. status 1 means active and status 0 means inactive
     * blog type 1 = momsay, 2 = activities
     *
     */

    private $error = array();
    private $data = array();

//    public function index()
//    {
//        $this->load->language('momday/blog');
//
//        $this->document->setTitle($this->language->get('heading_title_momsay'));
//
//        $data['header'] = $this->load->controller('common/header');
//        $data['footer'] = $this->load->controller('common/footer');
//        $data['column_left'] = $this->load->controller('common/column_left');
//
//        $data['upload_file_url'] = $this->url->link('momday/blog/upload&user_token=' . $this->session->data['user_token'], '', true);
//
//        $this->response->setOutput($this->load->view('momday/blog', $data));
//    }

    public function check_post_is_momday($post_id){
        //check post is momsay not activity
        $blog_type = $this->model_momday_blog->getBlogtypeToBlogpost($post_id);
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

    public function delete()
    {

        $this->load->language('momday/blog');
        $this->load->model('momday/blog');

        // check post is momsay not activities
        if (array_key_exists('post_id', $this->request->post)){
            if (!$this->check_post_is_momday($this->request->post['post_id'])){
                $this->response->redirect($this->url->link('momday/blog/pagenotfound&user_token=' . $this->session->data['user_token'], '', true));
            }
        }


        $post_id = $this->request->post['post_id'];


        $all_post_images = $this->model_momday_blog->getAllImageToBlogpost($post_id);

        $uploadDirectory = DIR_IMAGE . 'momday/blog/';
        foreach($all_post_images as $post_image_entry){
            if (is_file($uploadDirectory . $post_image_entry['image_name'])) {
                unlink($uploadDirectory . $post_image_entry['image_name']);
            }
        }


        $this->remove_post($post_id);
        $this->remove_inactive(90*24*3600);

        $this->session->data['success'] = $this->language->get('post_delete_success');
        $this->response->redirect($this->url->link('momday/blog/all&user_token=' . $this->session->data['user_token'], '', true));
    }

    public function remove_post($post_id){
        $this->load->model('momday/blog');
        $this->update_featured_image($post_id,"");
        $this->remove_all_blog_images($post_id);
        $this->model_momday_blog->removeBlogpost($post_id);
        $this->model_momday_blog->removePostDetails($post_id);
        $this->model_momday_blog->removeBlogtypeToBlogpost($post_id);
        $this->model_momday_blog->removeBlogpostToStore($post_id);
        $this->model_momday_blog->removeBlogpostComments($post_id);
    }

    function remove_all_blog_images($post_id){
        $this->load->model('momday/blog');
        $post_images = $this->model_momday_blog->getAllImageToBlogpost($post_id);
        $uploadDirectory = DIR_IMAGE;
        foreach ($post_images as $post_image) {
            $filenameToRemove = $post_image['image_name'];

            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }

            $this->model_momday_blog->removeImageToBlogpost($post_id, $filenameToRemove);
        }

        $post_dir = $uploadDirectory . 'momday/blog/' . $post_id;
        if(is_dir($post_dir)){
            rmdir($post_dir);
        }
    }


    public function check_author_exists()
    {
        $json = array();
        $this->load->model('momday/blog');

        if (array_key_exists('author_id', $this->request->post)) {
            if ($this->model_momday_blog->checkAuthorExistsActivated($this->request->post['author_id'])) {
                $json['result'] = 1;
            }else{
                $json['result'] = 0;
            }
        }else{
            $json['result'] = 0;
        }
        print(json_encode($json));
        return;
    }

    public function activate_deactivate()
    {
        $this->load->model('momday/blog');

        // check post is momsay not activities
        if (array_key_exists('post_id', $this->request->post)){
            if (!$this->check_post_is_momday($this->request->post['post_id'])){
                $this->response->redirect($this->url->link('momday/blog/pagenotfound&user_token=' . $this->session->data['user_token'], '', true));
            }
        }

        $json = array();
        $json['old_status'] = $_POST['post_status'];
        if(!isset($_POST['post_id']) or is_null($_POST['post_id'])) {
            $json['error'] = 1;
            print(json_encode($json));
        }elseif(!isset($_POST['post_status']) or is_null($_POST['post_status'])){
            $json['error'] = 2;
            print(json_encode($json));
        }elseif(!$_POST['post_status']==0 and !$_POST['post_status']==1){
            $json['error'] = 3;
            print(json_encode($json));
            return;
        }else{
            if($this->model_momday_blog->checkBlogpostToAuthorExists($_POST['post_id'])){
                $author_id = $this->model_momday_blog->getBlogpostToAuthor($_POST['post_id'])[0]['author_id'];
                $author_exists = $this->model_momday_blog->checkAuthorExistsActivated($author_id);
            }else{
                $author_exists = false;
            }
            // if author does not exist and we are trying to activate the post
            if(!$author_exists && $_POST['post_status']==0){
                $json['author_exists'] = 0;
                $json['success'] = 1;
                $json['post_id'] = $_POST['post_id'];
            }else {
                $json['author_exists'] = 1;
                $status_update_data = array();
                $status_update_data['post_id'] = $_POST['post_id'];
                $status_update_data['status'] = 1 - $_POST['post_status'];
                $this->model_momday_blog->updateBlogpostStatus($status_update_data);
                $json['success'] = 1;
                $json['post_id'] = $_POST['post_id'];
                $json['new_status'] = $status_update_data['status'];
            }
            print(json_encode($json));
            return;
        }

//        $this->load->language('tool/upload');
//
//        $this->load->model('tool/upload');
//        $post_id = $_POST['post_id'];
//        $filenameToRemove = $_POST['filenameToRemove'];
//        $uploadDirectory = DIR_IMAGE . 'momday/blog/';
//
//        if (is_file($uploadDirectory . $filenameToRemove)) {
//            unlink($uploadDirectory . $filenameToRemove);
//        }
//
//        $this->load->model('momday/blog');
//        $this->model_momday_blog->removeImageToBlogpost($post_id, $filenameToRemove);




//        $json['success'] = $this->language->get('text_upload');
//        $json['filename'] = $file;
//
//        $this->load->model('momday/blog');
//        $post_id = $_POST['post_id'];
//
//        $image_size = filesize( $uploadDirectory. $file);
//
//        $this->model_momday_blog->addImageToBlogpost($post_id, $file, $image_size, 0, time());
//    }
//
//$this->response->addHeader('Content-Type: application/json');
//$this->response->setOutput(json_encode($json));
//




    }


    public function add()
    {
        $this->load->model('momday/blog');

        //redirect if invalid post_id
        if (array_key_exists('post_id', $this->request->get) && !$this->model_momday_blog->checkBlogpostExists($this->request->get['post_id'])){
            $this->response->redirect($this->url->link('momday/blog/pagenotfound&user_token=' . $this->session->data['user_token'], '', true));
        }

        //check post is momsay not activity
        if (array_key_exists('post_id', $this->request->get)){
            if (!$this->check_post_is_momday($this->request->get['post_id'])){
                $this->response->redirect($this->url->link('momday/blog/pagenotfound&user_token=' . $this->session->data['user_token'], '', true));
            }
        }

        if (array_key_exists('post_id', $this->request->get)){
            $data['post_id'] = $this->request->get['post_id'];

            $post_content = $this->model_momday_blog->getBlogpost($data['post_id']);
            $post_details = $this->model_momday_blog->getAllPostDetails($data['post_id']);

            if(sizeof($post_content) >= 1){
                $post_content_entries = $post_content[0];
//                $post_featured_image = $this->model_momday_blog->getFeaturedImageToBlogpost($data['post_id'], $post_content_entries['image']);
                $post_images = $this->model_momday_blog->getNonFeaturedImageToBlogpost($data['post_id'], $post_content_entries['image']);
//                if(sizeof($post_featured_image) >=1 ) {
//                    if($post_featured_image[0]) {
//                        $data['post_content_image'] = $post_featured_image[0];
//                    }
//                }
                $data['post_content_image'] = $post_content_entries['image'];



                if(sizeof($post_images) >= 1){
                    $data['post_images_data'] = $post_images;
                }
                $data['post_content_status'] = $post_content_entries['status'];
                $data['post_content_comments'] = $post_content_entries['comments'];

            }
            if(sizeof($post_details) >= 1){
                $post_details_entries = $post_details[0];
                $data['post_details_title'] = $post_details_entries['name'];
                $data['post_details_description'] = $post_details_entries['description'];
                $data['post_details_keyword'] = $post_details_entries['keyword'];
            }
        }else{
            $max_id = $this->model_momday_blog->getMaxBlogId();
            if(sizeof($max_id)>=1){
                $max_id = $max_id[0];
            }
            $data['post_id'] = $max_id['post_id'] +1;

            $current_date = date("Y-m-d H:i:s");
            $post_data = array("post_id" => $data['post_id'],
                "author_id" => 0,
                "comments" => 1,
                "status" => 2,
                "sort_order" => 0,
                "date_created" => $current_date,
                "views" => 0);
            $this->model_momday_blog->addPlaceholderBlogpost($post_data);
            $this->model_momday_blog->addBlogtypeToBlogpost($data['post_id'], 1);
            $this->model_momday_blog->addBlogpostToStore($data['post_id'], 0);

            $this->response->redirect($this->url->link('momday/blog/add&post_id=' . $data['post_id'] . '&user_token=' . $this->session->data['user_token'], '', true));

        }

        $data['author_names_id'] = $this->model_momday_blog->getActiveBlogAuthorNameId();
        if($this->model_momday_blog->checkBlogpostToAuthorExists($data['post_id'])){
            $data['selected_author_id'] = $this->model_momday_blog->getBlogpostToAuthor($data['post_id'])[0]['author_id'];
        }

        $this->load->language('momday/blog');

        $this->document->setTitle($this->language->get('heading_title_momsay'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title_momsay'),
            'href' => $this->url->link('momday/blog/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_add'),
            'href' => $this->url->link('momday/blog/add', 'post_id='. $data['post_id'] . '&user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['upload_file_url'] = $this->url->link('momday/blog/upload&user_token=' . $this->session->data['user_token'], '', true);
        $data['save_post_url'] = $this->url->link('momday/blog/save&user_token=' . $this->session->data['user_token'], '', true);
        $data['cancel_post_url'] = $this->url->link('momday/blog/all&user_token=' . $this->session->data['user_token'], '', true);

        $data['add_image_to_db_url'] = $this->url->link('momday/blog/add_image_to_db&user_token=' . $this->session->data['user_token'], '', true);
        $data['remove_image_from_db_url'] = $this->url->link('momday/blog/remove_image_from_db_url&user_token=' . $this->session->data['user_token'], '', true);
        $data['delete_image_url'] = $this->url->link('momday/blog/delete_image&user_token=' . $this->session->data['user_token'], '', true);
        $data['remove_featured_image_url'] = $this->url->link('momday/blog/remove_featured_image&user_token=' . $this->session->data['user_token'], '', true);
        $data['validate_author_url'] = $this->url->link('momday/blog/check_author_exists&user_token=' . $this->session->data['user_token'], '', true);

        $data['save_post_url'] = $this->url->link('momday/blog/save&user_token=' . $this->session->data['user_token'], '', true);
        $data['action'] = $this->url->link('momday/blog/save&user_token=' . $this->session->data['user_token'], '', true);
        $data['delete_post_url'] = $this->url->link('momday/blog/delete&user_token=' . $this->session->data['user_token'], '', true);
        $data['save_cropped_featured_url'] = $this->url->link('momday/blog/save_cropped_featured&user_token=' . $this->session->data['user_token'], '', true);

        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $data['featured_image_directory'] = $base_url. '/' . $momday_directory . '/image/';
//        $data['image_upload_directory'] = $base_url. '/' . $momday_directory . '/image/momday/blog/';
        $data['images_directory'] = $base_url. '/' . $momday_directory . '/image/';
        $data['blank_image'] = $base_url. '/' . $momday_directory . '/image/no_image.png';


        $this->response->setOutput($this->load->view('momday/blog', $data));
    }

    public function test(){
        exit();


//        $this->load->model('momday/blog');
//        $author_names_id = $this->model_momday_blog->getBlogAuthorNameId();
//        print_r($author_names_id[0]);
//        exit();
//
//        $post_id = 2;
//        $uploadDirectory = DIR_IMAGE . 'momday/blog/';
//        $new_name = $uploadDirectory . 'abc';
//
//        $this->load->model('momday/blog');
////        $blog_image = $this->model_momday_blog->updateBlogpostImage(2,NULL);
//            if($this->model_momday_blog->checkBlogpostExists($post_id)){
//                $old_blog_image = $this->model_momday_blog->getBlogpostImage($post_id);
//                if(sizeof($old_blog_image)>=1){
//                    if(array_key_exists('image',$old_blog_image[0])){
//                        if($old_blog_image[0]['image'] != $old_blog_image){
//                            if (is_file($uploadDirectory . basename($old_blog_image[0]['image']))) {
//                                unlink($uploadDirectory . basename($old_blog_image[0]['image']));
//                            }
//                            $this->model_momday_blog->updateBlogpostImage($post_id,$new_name);
//                        }
//                    }
//                }
//            }
//        exit();

//        $inipath = php_ini_loaded_file();
//        if ($inipath) {
//            echo 'Loaded php.ini: ' . $inipath;
//        } else {
//            echo 'A php.ini file is not loaded';
//        }
//        exit();
//
//
//        if(defined('MOMDAY_DIRECTORY')) {
////            print_r(MOMDAY_DIRE1CTORY);
//            print_r("yes");
//        }
//        exit();
//        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
//        print_r( $base_url);
//        exit();
//        $this->load->model('localisation/language');

//        foreach($this->model_localisation_language->getLanguages() as $lang){
//            print_r($lang['language_id']);
//        }
//        exit();
//
//
//
//        print_r(date("Y-m-d H:i:s"));
//        exit();
//        $this->load->model('momday/blog');
//        $post_id = 1;
//        $image_name = 'abc';
//        $blog_type = 1;
//        $store_id = 0;
//
//        print_r("test");
////        $this->model_momday_blog->addImageToBlogpost(1, 'asd', 0);
////        $this->model_momday_blog->removeImageToBlogpost(1, 'asd');
//
//        //inactive imagees will be deleted after 90 days
//        $this->model_momday_blog->removeInactiveImageToBlogpost(time(), 90*24*3600);
//        $this->model_momday_blog->updateImageToBlogpost(1, 'asd', 3);


//        $result = $this->model_momday_blog->getBlogpostToStore($post_id, $store_id);
//        print_r($result);
//        if (sizeof($result) <1){
//            $this->model_momday_blog->addBlogpostToStore($post_id, $store_id);
//        }
//        $this->model_momday_blog->removeBlogpostToStore($post_id, $store_id);

//        $result = $this->model_momday_blog->getBlogtypeToBlogpost($post_id, $blog_type);
//        print_r($result);
//        if (sizeof($result) <1){
//            $this->model_momday_blog->addBlogtypeToBlogpost($post_id, $blog_type);
//        }
//        $this->model_momday_blog->removeBlogtypeToBlogpost($post_id, $blog_type);

//        $result = $this->model_momday_blog->getImageToBlogpost($post_id, $image_name);
//        print_r($result);
//        if (sizeof($result) <1){
//            $this->model_momday_blog->addImageToBlogpost($post_id, $image_name);
//        }
//        $this->model_momday_blog->removeImageToBlogpost($post_id, $image_name);

//        $max_id = $this->model_momday_blog->getMaxBlogId();
//        if(sizeof($max_id)>=1){
//            $max_id = $max_id[0];
//        }
//
//        $title = 'Blog Name4';
//        $description = 'Blog Description4';
//        $keywords = ' Blog keywords4';
//
//        $post_details = array("post_id" => 7,
//            "language_id" => 2,
//            "name" => $title,
//            "description" => $description,
//            "meta_title" => $title,
//            "meta_keywords" => $keywords,
//            "meta_description" =>$description,
//            "keyword" => $keywords,
//            "tags" => $keywords);
//
//        $post_details2 = array("post_id" => 7,
//            "language_id" => 2,
//            "name" => $title,
//            "description" => $description,
//            "keyword" => $keywords);


//        $this->model_momday_blog->addPostDetails($post_details);
//        $post_exists = $this->model_momday_blog->checkPostDetailsExist(5,1);
//        $post_exists = $this->model_momday_blog->checkBlogpostExists(5);
//        $post_details = $this->model_momday_blog->getPostDetails(3,1);
//        $post_details = $this->model_momday_blog->updatePostDetails($post_details2);

//        exit();

//        $post_data = array("post_id" => 7,
//                            "author_id" => 0,
//                            "image" => 'test.png',
//                            "comments" => 2,
//                            "status" => 1,
//                            "sort_order" => 0,
//                            "date_created" =>'2018-12-06 11:02:11',
//                            "date_updated" => '2018-12-06 11:02:11',
//                            "views" => 9);
//        $this->model_momday_blog->addBlogpost($post_data);


//        $post_details = $this->model_momday_blog->getBlogpost(9);
//        if(sizeof($post_details)>=1){
//            print_r(sizeof($post_details[0]));
//        };

//        $post_data = array("post_id" => 7,
//                            "image" => 'test1.png',
//                            "comments" => 1,
//                            "status" => 0,
//                            "date_updated" => '2017-12-06 11:02:11');
//        $this->model_momday_blog->updateBlogpost($post_data);
//        print_r($new_id);
//        exit();

    }


    public function save()
    {
        $this->load->language('momday/blog');
        $this->load->model('momday/blog');
        $this->load->model('localisation/language');
//        print_r($this->request->post);
//        exit();
        $blogpost_exists = false;
        $current_date = date("Y-m-d H:i:s");
        if(isset($this->request->post['post_id']) and !is_null($this->request->post['post_id'])){
            $post_id = $this->request->post['post_id'];
            $blogpost_exists = $this->model_momday_blog->checkBlogpostExists($post_id);
        }else{
            $max_id = $this->model_momday_blog->getMaxBlogId();
            if(sizeof($max_id)>=1){
                $max_id = $max_id[0];
            }
            $post_id = $max_id['post_id'] +1;
        }
//        if(isset($this->request->post['featured_image'])) {
//            $featured_image = $this->request->post['featured_image'];
//        }else{
//            $featured_image = '';
//        }
        if(isset($this->request->post['author'])) {
            $author_id = $this->request->post['author'];
        }else{
            $author_id = '';
        }
        if(isset($this->request->post['blogtitle'])) {
            $blog_title = $this->request->post['blogtitle'];
        }else{
            $blog_title = '';
        }
        if(isset($this->request->post['blogkeywords'])) {
            $blog_keywords = $this->request->post['blogkeywords'];
        }else{
            $blog_keywords = '';
        }
        if(isset($this->request->post['post_images'])) {
            $post_images = $this->request->post['post_images'];
        }else{
            $post_images = '';
        }
        if(isset($this->request->post['blogcontent'])) {
            $blog_content= html_entity_decode($this->request->post['blogcontent']);
        }else{
            $blog_content = '';
        }
        if(isset($this->request->post['blogstatus'])) {
            $blog_status= $this->request->post['blogstatus'];
        }else{
            $blog_status = 0;
        }
        if(isset($this->request->post['blogcommentsstatus'])) {
            $blog_comments_status= $this->request->post['blogcommentsstatus'];
        }else{
            $blog_comments_status = 2;
        }


        if($this->model_momday_blog->checkBlogpostToAuthorExists($post_id)){
            $this->model_momday_blog->updateBlogpostToAuthor($post_id,$author_id);
        }else{
            $this->model_momday_blog->addBlogpostToAuthor($post_id,$author_id);
        }

        if($blogpost_exists){
            $post_data = array("post_id" => $post_id,
//                "image" => $featured_image,
                "comments" => $blog_comments_status,
                "status" => $blog_status,
                "date_updated" => $current_date);
            $this->model_momday_blog->updateBlogpost($post_data);

        }else {
            $post_data = array("post_id" => $post_id,
                "author_id" => 0,
//                "image" => $featured_image,
                "comments" => $blog_comments_status,
                "status" => $blog_status,
                "sort_order" => 0,
                "date_created" => $current_date,
                "date_updated" => $current_date,
                "views" => 0);
            $this->model_momday_blog->addBlogpost($post_data);
        }
        $post_images_array = explode (",", $post_images);
        foreach($post_images_array as $post_images_entry){
            if ($this->model_momday_blog->checkImageToBlogpost($post_id, $post_images_entry)) {
                $this->model_momday_blog->updateImageToBlogpostActivated($post_id, $post_images_entry, 1);
            }
        }
//        if ($this->model_momday_blog->checkImageToBlogpost($post_id, $featured_image)) {
//            $this->model_momday_blog->updateImageToBlogpostActivated($post_id, $featured_image, 1);
//        }else{
////            $this->model_momday_blog->addImageToBlogpost($post_id, $featured_image, 1);
//        }
        $post_images_array = explode (",", $post_images);
        foreach($post_images_array as $post_images_entry){
            if ($this->model_momday_blog->checkImageToBlogpost($post_id, $post_images_entry)) {
                $this->model_momday_blog->updateImageToBlogpostActivated($post_id, $post_images_entry, 1);
            }else{
//                $this->model_momday_blog->addImageToBlogpost($post_id, $post_images_entry, 1);
            }
        }

        foreach($this->model_localisation_language->getLanguages() as $lang) {
            $language_id = $lang['language_id'];
            $blog_details_exist = $this->model_momday_blog->checkPostDetailsExist($post_id, $language_id);
            if ($blog_details_exist) {
                $post_details = array("post_id" => $post_id,
                    "language_id" => $language_id,
                    "name" => $blog_title,
                    "description" => $blog_content,
                    "meta_title" => $blog_title,
                    "meta_keywords" => $blog_keywords,
                    "meta_description" =>'',
                    "keyword" => $blog_keywords,
//                    "tags" => $blog_keywords);
                    "tags" => '');
                $this->model_momday_blog->updatePostDetails($post_details);
            }
            else{
                $post_details = array("post_id" => $post_id,
                    "language_id" => $language_id,
                    "name" => $blog_title,
                    "description" => $blog_content,
                    "meta_title" => $blog_title,
                    "meta_keywords" => $blog_keywords,
//                    "meta_description" =>$blog_content,
                    "meta_description" =>'',
                    "keyword" => $blog_keywords,
//                    "tags" => $blog_keywords);
                    "tags" => '');
                $this->model_momday_blog->addPostDetails($post_details);
            }
        }

        //inactive images will be deleted after 90 days
        $this->remove_inactive(90*24*3600);

        $this->session->data['success'] = $this->language->get('post_save_success');
        $this->response->redirect($this->url->link('momday/blog/all&user_token=' . $this->session->data['user_token'], '', true));
    }

    public function remove_inactive($expiry_max_duration){
        $inactive_images = $this->model_momday_blog->getInactiveImageToBlogpost(time(), $expiry_max_duration);
        $this->load->model('momday/blog');
        foreach ($inactive_images as $inactive_image) {
            $filenameToRemove = $inactive_image['image_name'];
            $post_id = $inactive_image['post_id'];
            $uploadDirectory = DIR_IMAGE . 'momday/blog/';

            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }

            $this->model_momday_blog->removeImageToBlogpost($post_id, $filenameToRemove);
        }
//        $this->model_momday_blog->removeInactiveImageToBlogpost(time(), $expiry_max_duration);
        //TODO: remove draft blogs that were not activated (status = 2) after 90 days
    }

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

        $this->load->language('momday/blog');

        $this->document->setTitle($this->language->get('heading_title_momsay'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('momday/blog/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['return_all_url'] = $this->url->link('momday/blog/return_all&user_token=' . $this->session->data['user_token'], '', true);
        $data['activate_deactivate_post'] = $this->url->link('momday/blog/activate_deactivate&user_token=' . $this->session->data['user_token'], '', true);

        $href= array(
            'href_add' => $this->url->link('momday/blog/add&user_token=' . $this->session->data['user_token'], '', true),
            'href_author' => $this->url->link('momday/blogauthors/all&user_token=' . $this->session->data['user_token'], '', true),
            'href_comments' => $this->url->link('momday/blogcomments/all&user_token=' . $this->session->data['user_token'], '', true),
            'href_edit' => $this->url->link('momday/blog/add&user_token=' . $this->session->data['user_token'], '', true),
            'href_delete' => $this->url->link('momday/blog/delete&user_token=' . $this->session->data['user_token'], '', true),
            'href_activate_deactivate' => $this->url->link('momday/blog/activate_deactivate&user_token=' . $this->session->data['user_token'], '', true),
            'href_activate' => $this->url->link('momday/blog/activate&user_token=' . $this->session->data['user_token'], '', true),
            'href_deactivate' => $this->url->link('momday/blog/deactivate&user_token=' . $this->session->data['user_token'], '', true)
        );

        $data['href'] = $href;

//        $action= array(
//            'text_edit' => $this->language->get('text_edit'),
//            'text_delete' => $this->language->get('text_delete'),
//            'text_deactivate' => $this->language->get('text_deactivate'),
//            'text_activate' => $this->language->get('text_activate')
//        );
//
//        $data['action'] = $action;

        $this->load->model('momday/blog');
        $posts = $this->model_momday_blog->getAllBlogPosts('1', '1');
        $data['posts'] = $posts;

        $post_id_to_status = array();
        foreach($posts as $post_entry){
            $post_id_to_status[$post_entry['post_id']] = $post_entry['status'];
        }
        $data['post_id_to_status'] = json_encode($post_id_to_status);


//        $data['array_values_posts'] = [];
//        foreach($posts as $post_entry){
//            array_push($data['array_values_posts'], array_values($post_entry));
//        }
//        $data['array_values_posts'] = json_encode($data['array_values_posts']);

        $data['posts_json'] = json_encode($posts);
//        print_r($data['posts_json']);
//        exit();

        $this->response->setOutput($this->load->view('momday/all_blog_posts', $data));
    }

    // return all blog posts, used for ajax call
    public function return_all()
    {
        $this->load->language('momday/blog');

//        $this->document->setTitle($this->language->get('heading_title_momsay'));
//
//        $data['header'] = $this->load->controller('common/header');
//        $data['footer'] = $this->load->controller('common/footer');
//        $data['column_left'] = $this->load->controller('common/column_left');

        $this->load->model('momday/blog');
        $posts = $this->model_momday_blog->getAllBlogPosts('1', '1');
        $json['data'] = $posts;
        $posts_json = json_encode($json);
        print($posts_json);
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
            $post_id = $_POST['post_id'];

            $file = token(32);
            $ext = pathinfo($this->request->files['file']['name'], PATHINFO_EXTENSION);

            $uploadDirectory = DIR_IMAGE . 'momday/blog/' . $post_id . '/';
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            move_uploaded_file($this->request->files['file']['tmp_name'], $uploadDirectory . $file . '.' . $ext);

            // Hide the uploaded file name so people can not link to it directly.
            $this->load->model('tool/upload');

            $json['code'] = $this->model_tool_upload->addUpload($filename, $file . '.' . $ext);

            $json['success'] = $this->language->get('text_upload');
            $json['post_id'] = $post_id;
            $json['filename'] = $file. '.' . $ext;
            $json['filepath'] = 'momday/blog/';

            // 2 formats needed for path to image
            // http://path_to_image/image.jpeg for client side display on admin page -> send this in json
            // path of image in the images directory for catalog display -> store this in db
            $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
            $momday_directory = '';
            if(defined('MOMDAY_DIRECTORY')) {
                $momday_directory = MOMDAY_DIRECTORY;
            }
            $image_upload_directory = $base_url. '/' . $momday_directory . '/image/';
            $json['image_directory'] = $image_upload_directory;

            $this->load->model('momday/blog');

            $image_size = filesize( $uploadDirectory. $file . '.' . $ext);

            if(array_key_exists('post_type',$_POST) && ($_POST['post_type']) == 'featured') {
                $this->update_featured_image($_POST['post_id'],$json['filepath'] . $post_id . '/' . $json['filename']);
            }else{
                $this->model_momday_blog->addImageToBlogpost($post_id, $json['filepath'] . $post_id . '/' . $json['filename'], $image_size, 0, time());
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete_image() {
        $this->load->language('tool/upload');

        $post_id = $_POST['post_id'];
        $filenameToRemove = $_POST['filenameToRemove'];
        $uploadDirectory = DIR_IMAGE;

        if($filenameToRemove!='no_image.png' && $filenameToRemove!='no_image.jpeg' && basename($filenameToRemove)!='no_image.png' && basename($filenameToRemove)!='no_image.jpeg') {
            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }
        }

        $this->load->model('momday/blog');
        $this->model_momday_blog->removeImageToBlogpost($post_id, $filenameToRemove);

    }

    function remove_featured_image(){
        $this->delete_image();
        $post_id = $_POST['post_id'];
        $this->update_featured_image($post_id, "");
        $this->response->addHeader('Content-Type: application/json');
        $json['success'] = "Success";
        $this->response->setOutput(json_encode($json));
    }

    function update_featured_image($post_id, $new_file_name){
        if($this->model_momday_blog->checkBlogpostExists($post_id)){
            $old_blog_image = $this->model_momday_blog->getBlogpostImage($post_id);
            if(sizeof($old_blog_image)>=1){
                if(array_key_exists('image',$old_blog_image[0])){
                    if($old_blog_image[0]['image'] != $new_file_name){
                        if(basename($old_blog_image[0]['image'])!='no_image.png' && basename($old_blog_image[0]['image'])!='no_image.jpeg' && $old_blog_image[0]['image']!='no_image.png' && $old_blog_image[0]['image']!='no_image.jpeg') {
                            if (is_file(DIR_IMAGE . $old_blog_image[0]['image'])) {
                                unlink(DIR_IMAGE . $old_blog_image[0]['image']);
                            }
                        }
                        $this->model_momday_blog->updateBlogpostImage($post_id,$new_file_name);
                    }
                }
            }else{
                $this->model_momday_blog->updateBlogpostImage($post_id,$new_file_name);
            }
        }
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }

}