<?php
class ControllerMomdayBlogauthors extends Controller
{

    public function save()
    {
        $this->load->language('momday/authors');
        $this->load->model('momday/blog');
        $this->load->model('localisation/language');

        $current_date = date("Y-m-d H:i:s");
        if(isset($this->request->post['author_id']) and !is_null($this->request->post['author_id'])){
            $author_id = $this->request->post['author_id'];
        }
        if(isset($this->request->post['authorfullname'])) {
            $author_full_name = $this->request->post['authorfullname'];
        }else{
            $author_full_name = '';
        }
        if(isset($this->request->post['authorbio'])) {
            $author_bio = str_replace(array("\r\n", "\n", "\r"), ' ',$this->request->post['authorbio']);
        }else{
            $author_bio = '';
        }
        $this->model_momday_blog->updateBlogAuthorNameBio($author_id, $author_full_name, $author_bio,1);

        //inactive images will be deleted after 90 days
        $this->remove_inactive(90*24*3600);

        $this->session->data['success'] = $this->language->get('author_save_success');
        $this->response->redirect($this->url->link('momday/blogauthors/all&user_token=' . $this->session->data['user_token'], '', true));
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

        $this->load->language('momday/authors');

        $this->document->setTitle($this->language->get('heading_title_momsay_authors'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_momsay'),
            'href' => $this->url->link('momday/blog/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_authors'),
            'href' => $this->url->link('momday/blogauthors/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['return_all_url'] = $this->url->link('momday/blogauthors/return_all_authors&user_token=' . $this->session->data['user_token'], '', true);

        $href= array(
            'href_add' => $this->url->link('momday/blogauthors/add&user_token=' . $this->session->data['user_token'], '', true),
            'href_edit' => $this->url->link('momday/blogauthors/add&user_token=' . $this->session->data['user_token'], '', true),
            'href_delete' => $this->url->link('momday/blogauthors/delete&user_token=' . $this->session->data['user_token'], '', true),
        );

        $data['href'] = $href;

        $this->load->model('momday/blog');
        $authors = $this->model_momday_blog->getAllActiveBlogAuthors();
        $data['authors'] = $authors;

        $data['authors_json'] = json_encode($authors);

        $this->response->setOutput($this->load->view('momday/all_authors', $data));
    }

    // return all blog authors, used for ajax call
    public function return_all_authors()
    {
        $this->load->model('momday/blog');
        $authors = $this->model_momday_blog->getAllActiveBlogAuthors();
        $json['data'] = $authors;
        $posts_json = json_encode($json);
        print($posts_json);
    }


    public function add()
    {
        $this->load->model('momday/blog');


        if (array_key_exists('author_id', $this->request->get)){
            $data['author_id'] = $this->request->get['author_id'];

            $author_details = $this->model_momday_blog->getBlogAuthor($data['author_id']);

            if(sizeof($author_details) >= 1){
                $author_details_entries = $author_details[0];
                $data['author_bio'] = str_replace(array("\r\n", "\n", "\r"), ' ', $author_details_entries['bio']);
                $data['author_full_name'] = $author_details_entries['full_name'];
                $data['author_image_name'] = $author_details_entries['image_name'];
            }
        }else{
            $max_id = $this->model_momday_blog->getMaxAuthorId();
            if(sizeof($max_id)>=1){
                $max_id = $max_id[0];
            }
            $data['author_id'] = $max_id['author_id'] +1;

            $this->model_momday_blog->addPlaceholderAuthor($data['author_id'], time());

            $this->response->redirect($this->url->link('momday/blogauthors/add&author_id=' . $data['author_id'] . '&user_token=' . $this->session->data['user_token'], '', true));
        }

        $this->load->language('momday/authors');

        $this->document->setTitle($this->language->get('heading_title_momsay_authors'));

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_momsay'),
            'href' => $this->url->link('momday/blog/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_authors'),
            'href' => $this->url->link('momday/blogauthors/all', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_add'),
            'href' => $this->url->link('momday/blogauthors/add', 'author_id='. $data['author_id'] . '&user_token=' . $this->session->data['user_token'], true)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        $data['upload_file_url'] = $this->url->link('momday/blogauthors/upload&user_token=' . $this->session->data['user_token'], '', true);
//        $data['save_post_url'] = $this->url->link('momday/blog/save&user_token=' . $this->session->data['user_token'], '', true);
//
//        $data['add_image_to_db_url'] = $this->url->link('momday/blog/add_image_to_db&user_token=' . $this->session->data['user_token'], '', true);
//        $data['remove_image_from_db_url'] = $this->url->link('momday/blog/remove_image_from_db_url&user_token=' . $this->session->data['user_token'], '', true);
//        $data['delete_image_url'] = $this->url->link('momday/blog/delete_image&user_token=' . $this->session->data['user_token'], '', true);
        $data['remove_author_image_url'] = $this->url->link('momday/blogauthors/remove_author_image&user_token=' . $this->session->data['user_token'], '', true);
//
//        $data['save_post_url'] = $this->url->link('momday/blog/save&user_token=' . $this->session->data['user_token'], '', true);
        $data['action'] = $this->url->link('momday/blogauthors/save&user_token=' . $this->session->data['user_token'], '', true);
        $data['delete_post_url'] = $this->url->link('momday/blogauthors/delete&user_token=' . $this->session->data['user_token'], '', true);
        $data['cancel_author_url'] = $this->url->link('momday/blogauthors/all&user_token=' . $this->session->data['user_token'], '', true);
//        $data['save_cropped_featured_url'] = $this->url->link('momday/blog/save_cropped_featured&user_token=' . $this->session->data['user_token'], '', true);

        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
//        $data['author_images_directory'] = $base_url. '/' . $momday_directory . '/image/momday/blog/author/';
        $data['images_directory'] = $base_url. '/' . $momday_directory . '/image/';
//        $data['blog_author_image_path'] = 'momday/blog/author/';
        $data['temp_image_upload_directory'] = $base_url. '/' . $momday_directory . '/image/momday/blog/author/temp/';
//        $data['images_directory'] = $base_url. '/' . $momday_directory . '/image/';
        $data['blank_image'] = $base_url. '/' . $momday_directory . '/image/no_image.png';


        $this->response->setOutput($this->load->view('momday/blog_author', $data));
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
            $author_id = $_POST['author_id'];

            $file = token(32);
            $ext = pathinfo($this->request->files['file']['name'], PATHINFO_EXTENSION);

            // put non-cropped images in temp folder and put cropped images outside temp folder
            if(array_key_exists('post_type',$_POST) && ($_POST['post_type']) == 'cropped') {
                $uploadDirectory = DIR_IMAGE . 'momday/blog/author/' . $author_id .'/';
                if (!file_exists($uploadDirectory)) {
                    mkdir($uploadDirectory, 0777, true);
                }
            }else{
                $uploadDirectory = DIR_IMAGE . 'momday/blog/author/temp/';
            }
            move_uploaded_file($this->request->files['file']['tmp_name'], $uploadDirectory . $file . '.' . $ext);

            // Hide the uploaded file name so people can not link to it directly.
            $this->load->model('tool/upload');

            $json['code'] = $this->model_tool_upload->addUpload($filename, $file . '.' . $ext);

            $json['success'] = $this->language->get('text_upload');
            $json['filename'] = $file. '.' . $ext;
            $json['filepath'] = 'momday/blog/author/' . $author_id . '/';

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

            if(array_key_exists('post_type',$_POST) && ($_POST['post_type']) == 'cropped') {
                $this->update_author_image($_POST['author_id'],$json['filepath'] . $file . '.' . $ext);
            }else{
                $this->model_momday_blog->addMomdayBlogauthorTempImages($file . '.' . $ext, $image_size, time());
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete()
    {
        $this->load->language('momday/authors');
        $this->load->model('momday/blog');

        $author_id = $this->request->post['author_id'];

        $author_has_active_posts = false;
        $author_posts = $this->model_momday_blog->getAuthorPosts($author_id);
        if (sizeof($author_posts) >=1){
            foreach($author_posts as $author_post){
                if($author_post['status']==1){
                    $author_has_active_posts = true;
                    break;
                }
            }
        }
        if($author_has_active_posts){
            $this->session->data['warning'] = $this->language->get('author_delete_error');

        }else {
            $this->update_author_image($author_id, "");

            $this->model_momday_blog->removeBlogauthor($author_id);

            $this->remove_inactive(90 * 24 * 3600);

            $this->session->data['success'] = $this->language->get('author_delete_success');
        }
        $this->response->redirect($this->url->link('momday/blogauthors/all&user_token=' . $this->session->data['user_token'], '', true));
    }
//
//    public function delete_image() {
//        $this->load->language('tool/upload');
//
//        $author_id = $_POST['author_id'];
//        $filenameToRemove = $_POST['filenameToRemove'];
//        $uploadDirectory = DIR_IMAGE . 'momday/blog/author/';
//
//        if (is_file($uploadDirectory . $filenameToRemove)) {
//            unlink($uploadDirectory . $filenameToRemove);
//        }
//    }

    function remove_author_image(){
        $this->delete_image();
        $author_id = $_POST['author_id'];
        $this->update_author_image($author_id, "");
        $this->response->addHeader('Content-Type: application/json');
        $json['success'] = "Success";
        $this->response->setOutput(json_encode($json));
    }

    function update_author_image($author_id, $new_file_name){
        $this->load->model('momday/blog');
        if($this->model_momday_blog->checkAuthorExists($author_id)){
            $old_author_image = $this->model_momday_blog->getBlogAuthorImage($author_id);
            if(sizeof($old_author_image)>=1){
                if(array_key_exists('image_name',$old_author_image[0])){
                    if($old_author_image[0]['image_name'] != $new_file_name){
                        if (is_file(DIR_IMAGE . $old_author_image[0]['image_name'])) {
                            unlink(DIR_IMAGE . $old_author_image[0]['image_name']);
                        }
                        if($new_file_name == "") {
                            $author_dir = DIR_IMAGE . 'momday/blog/author/' . $author_id . '/';
                            if (is_dir($author_dir)) {
                                rmdir($author_dir);
                            }
                        }
                        $this->model_momday_blog->updateBlogAuthorImage($author_id,$new_file_name);
                    }
                }
            }else{
                $this->model_momday_blog->updateBlogAuthorImage($author_id,$new_file_name);
            }
        }
    }

    public function remove_inactive($expiry_max_duration){
        $this->load->model('momday/blog');
        $inactive_authors = $this->model_momday_blog->getInactiveBlogauthors(time(), $expiry_max_duration);
        $uploadDirectory = DIR_IMAGE . 'momday/blog/author/';
        foreach ($inactive_authors as $inactive_author) {
            $filenameToRemove = $inactive_author['image_name'];
            $author_id = $inactive_author['author_id'];

            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }
            $author_dir = DIR_IMAGE . 'momday/blog/author/' . $author_id . '/';
            if (is_dir($author_dir)) {
                rmdir($author_dir);
            }
            $this->model_momday_blog->removeBlogauthor($author_id);
        }
        $inactive_images = $this->model_momday_blog->getInactiveBlogauthorTempImages(time(), $expiry_max_duration);
        $uploadDirectory = DIR_IMAGE . 'momday/blog/author/temp/';
        foreach ($inactive_images as $inactive_image) {
            $filenameToRemove = $inactive_image['image_name'];

            if (is_file($uploadDirectory . $filenameToRemove)) {
                unlink($uploadDirectory . $filenameToRemove);
            }
            $this->model_momday_blog->removeBlogauthorTempImage($inactive_image['image_name']);
        }
    }

    private function print_to_file($array_to_print){


        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fwrite($myfile, print_r("\n",true));
        fclose($myfile);
    }


}