<?php

/**
 * @property Journal2 $journal2
 * @property ModelJournal2Blog model_journal2_blog
 */

class ControllerMomdayMomsay extends Controller {

    private $blog_title;
    private $blog_heading_title;
    private $blog_meta_title;
    private $blog_meta_description;
    private $blog_meta_keywords;

    protected $data = array();

    protected function renderView($template) {
        if (version_compare(VERSION, '2.2', '<')) {
            $template = $this->config->get('config_template') . '/template/' . $template;
        }

        $template = str_replace($this->config->get('config_template') . '/template/' . $this->config->get('config_template') . '/template/', $this->config->get('config_template') . '/template/', $template);
        $this->template = $template;

        if (version_compare(VERSION, '3', '>=')) {
            return $this->load->view(str_replace('.tpl', '', $this->template), $this->data);
        }

        return Front::$IS_OC2 ? $this->load->view($this->template, $this->data) : parent::render();
    }

    public function __construct($registry) {
        parent::__construct($registry);
        $this->load->model('journal2/blog');
        $this->load->model('momday/momsay');
        $this->load->model('tool/image');

        $this->language->load('product/product');
        $this->language->load('product/category');
        $this->language->load('momday/momsay');

        if($this->customer->isLogged()){
            $this->data['user_logged_in'] = 1;
        }else{
            $this->data['user_logged_in'] = 0;
        }

        /* check blog status */
//        if (!$this->model_journal2_blog->isEnabled()) {
//            $this->response->redirect('index.php?route=error/not_found');
//            exit();
//        }

        $this->data['date_format_short']     = $this->language->get('date_format_short');
        $this->data['date_format_long']      = $this->language->get('date_format_long');
        $this->data['time_format']           = $this->language->get('time_format');

        /* blog data */
        $this->blog_title               = $this->journal2->settings->get('config_blog_settings.title.value.' . $this->config->get('config_language_id'), 'Journal Blog');
        $this->blog_heading_title       = $this->journal2->settings->get('config_blog_settings.title.value.' . $this->config->get('config_language_id'), 'Journal Blog');
        $this->blog_meta_title          = $this->journal2->settings->get('config_blog_settings.meta_title.value.' . $this->config->get('config_language_id'));
        $this->blog_meta_description    = $this->journal2->settings->get('config_blog_settings.meta_description.value.' . $this->config->get('config_language_id'));
        $this->blog_meta_keywords       = $this->journal2->settings->get('config_blog_settings.meta_keywords.value.' . $this->config->get('config_language_id'));
    }

    public function index() {
        /* filters */
        $sort = $this->journal2->settings->get('config_blog_settings.posts_sort', 'newest');
        $limit = $this->journal2->settings->get('config_blog_settings.posts_limit', 15);

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        /* general breadcrumbs */
        $this->data['breadcrumbs'] = array();

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home'),
            'separator' => false
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_momsay'),
            'href'      => $this->url->link('momday/momsay'),
            'separator' => $this->language->get('text_separator')
        );

        if (isset($this->request->get['journal_blog_category_id'])) {
            $category_id = $this->request->get['journal_blog_category_id'];
        } else {
            $category_id = 0;
        }

        if (isset($this->request->get['journal_blog_search'])) {
            $search = $this->request->get['journal_blog_search'];
        } else {
            $search = '';
        }

        if (isset($this->request->get['journal_blog_tag'])) {
            $tag = $this->request->get['journal_blog_tag'];
        } else {
            $tag = '';
        }

        $category_info = $this->model_journal2_blog->getCategory($category_id);

        if ($category_info) {
            $url = '';

            if (isset($this->request->get['journal_blog_search'])) {
                $url .= '&journal_blog_search=' . $this->request->get['journal_blog_search'];
            }

            $this->data['breadcrumbs'][] = array(
                'text'      => $category_info['name'],
                'href'      => $this->url->link('momday/momsay', 'journal_blog_category_id=' . $category_id . $url),
                'separator' => $this->language->get('text_separator')
            );

            $this->data['category_description'] = $category_info['description'];

            $this->blog_title           = $category_info['name'];
            $this->blog_heading_title   = $category_info['name'];
            $this->blog_meta_title      = $category_info['meta_title'];
            $this->blog_meta_description= $category_info['meta_description'];
            $this->blog_meta_keywords   = $category_info['meta_keywords'];
        } else if ($tag) {
            $this->blog_title .= ' - ' . $tag;
            $this->blog_heading_title = $this->language->get('text_tags') . ' ' . $tag;
        }

        if ($this->journal2->settings->get('config_blog_settings.feed', 1)) {
            $this->journal2->settings->set('blog_blog_feed_url', $this->url->link('momday/momsay/feed', $category_info ? 'journal_blog_feed_category_id=' . $category_id : ''));
        }

        $this->data['heading_title'] = $this->language->get('momsay_heading_title');
        $this->document->setTitle($this->language->get('text_momsay'));
        $this->document->setDescription($this->blog_meta_description);
        $this->document->setKeywords($this->blog_meta_keywords);
        $this->journal2->settings->set('blog_meta_title',       $this->blog_meta_title);

        $this->data['grid_classes'] = Journal2Utils::getProductGridClasses($this->journal2->settings->get('config_blog_settings.posts_per_row.value'), $this->journal2->settings->get('site_width', 1024), $this->journal2->settings->get('config_columns_count', 0));
        $this->data['posts'] = array();

        $data = array(
            'category_id'   => $category_id,
            'tag'           => $tag,
            'sort'          => $sort,
            'search'        => $search,
            'start'         => ($page - 1) * $limit,
            'limit'         => $limit,
            'blog_type'         => 1
        );

        $posts = $this->model_momday_momsay->getPosts($data);
        $posts_total = $this->model_momday_momsay->getPostsTotal($data);
        $post_to_author = $this->model_momday_momsay->getAllPostIdToAuthor();
        $all_authors = $this->model_momday_momsay->getAllAuthors();
        $post_to_author_id = $this->get_post_to_author_id($post_to_author);
        $author_id_to_info = json_encode($this->get_author_id_to_info($all_authors));

        $this->data['post_to_author_id'] = $post_to_author_id;
        $this->data['author_id_to_info'] = $author_id_to_info;
        $this->data['blank_image'] = $this->get_base_url() . 'image/no_image.png';
        $this->data['small_lines_image'] = $this->get_base_url() . 'image/momday/small_lines.png';

        $image_width    = $this->journal2->settings->get('config_blog_settings.posts_image_width', 250);
        $image_height   = $this->journal2->settings->get('config_blog_settings.posts_image_height', 250);
        $image_type     = $this->journal2->settings->get('config_blog_settings.posts_image_type', 'fit');

        foreach ($posts as $post) {
            $description = html_entity_decode($post['description'], ENT_QUOTES, 'UTF-8');
            $description = Minify_HTML::minify($description);
            $description = trim(strip_tags(str_replace('</h2>', ' </h2>', $description)));
            $this->data['posts'][] = array(
                'name'          => $post['name'],
                'author'        => $this->model_journal2_blog->getAuthorName($post),
                'comments'      => $post['comments'],
                'date'          => date($this->language->get('date_format_short'), strtotime($post['date'])),
                'image'         => Journal2Utils::resizeImage($this->model_tool_image, $post, $image_width, $image_height, $image_type, 'crop'),
                'href'          => $this->url->link('momday/momsay/post', ($category_info ? 'journal_blog_category_id=' . $category_id . '&' : '') . 'post_id=' . $post['post_id']),
                'description'   => utf8_substr($description, 0, $this->journal2->settings->get('config_blog_settings.description_char_limit', 150)) . '...',
                'post_id'   => $post['post_id']
            );
        }

        $this->data['button_continue'] = $this->language->get('button_continue');
        $this->data['continue'] = $this->url->link('common/home');

        $url = '';

        if ($category_info) {
            $url .= '&journal_blog_category_id=' . $category_id;
        }

        if ($tag) {
            $url .= '&journal_blog_tag=' . $tag;
        }

        if (isset($this->request->get['journal_blog_search'])) {
            $url .= '&journal_blog_search=' . $this->request->get['journal_blog_search'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['limit'])) {
            $url .= '&limit=' . $this->request->get['limit'];
        }

        $pagination = new Pagination();
        $pagination->total = $posts_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->text = $this->language->get('text_pagination');
        $pagination->url = $this->url->link('momday/momsay', $url . '&page={page}');

        $this->data['pagination'] = $pagination->render();

        $this->data['sort'] = $sort;
        $this->data['limit'] = $limit;

        $this->blog_template = 'momday/momsay_posts.tpl';

        if (version_compare(VERSION, '2', '>=')) {
            $this->data['column_left'] = $this->load->controller('common/column_left');
            $this->data['column_right'] = $this->load->controller('common/column_right');
            $this->data['content_top'] = $this->load->controller('common/content_top');
            $this->data['content_bottom'] = $this->load->controller('common/content_bottom');
            $this->data['footer'] = $this->load->controller('common/footer');
            $this->data['header'] = $this->load->controller('common/header');
        } else {
            $this->children = array(
                'common/column_left',
                'common/column_right',
                'common/content_top',
                'common/content_bottom',
                'common/footer',
                'common/header'
            );
        }

        $this->response->setOutput($this->renderView($this->blog_template));
    }

    public function post() {
        $this->load->model('momday/momsay');

        $this->data['breadcrumbs'] = array();

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home'),
            'separator' => false
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_momsay'),
            'href'      => $this->url->link('momday/momsay'),
            'separator' => $this->language->get('text_separator')
        );

        if (isset($this->request->get['journal_blog_category_id'])) {
            $category_id = $this->request->get['journal_blog_category_id'];
        } else {
            $category_id = 0;
        }

        $category_info = $this->model_journal2_blog->getCategory($category_id);

        if ($category_info) {
            $this->data['breadcrumbs'][] = array(
                'text'      => $category_info['name'],
                'href'      => $this->url->link('momday/momsay', 'journal_blog_category_id=' . $category_id),
                'separator' => $this->language->get('text_separator')
            );
        }

        if (isset($this->request->get['post_id'])) {
            $post_id = $this->request->get['post_id'];
        } else {
            $post_id = 0;
        }

        $this->data['likes_count'] = $this->model_momday_momsay->getPostLikesCount($post_id);
        $this->data['post_is_liked'] = $this->model_momday_momsay->getUserPostLike($post_id, $this->customer->getId());
        $this->data['like_unlike_post'] = $this->url->link('momday/momsay/like_unlike_post', '', true);
        $this->data['user_logged_in'] = $this->customer->isLogged()?1:0;

        if($this->check_post_is_momsay($post_id)) {
            $post_info = $this->model_journal2_blog->getPost($post_id);
        }else{
            $post_info = array();
        }

        if ($post_info) {
            $this->data['breadcrumbs'][] = array(
                'text'      => $post_info['name'],
                'href'      => $this->url->link('momday/momsay/post', ($category_info ? 'journal_blog_category_id=' . $category_id . '&' : '') . 'post_id=' . $post_info['post_id']),
                'separator' => $this->language->get('text_separator')
            );

            $author_name = '';
            $author_info = $this->get_post_author_details($post_id);
            if($author_info){
                $author_name = $author_info['full_name'];
            }
            $author_info_json = json_encode($this->get_post_author_details($post_id));

            $this->data['author_info'] = $author_info_json;
            $this->data['author_name'] = $author_name;
            $this->data['blank_image'] = $this->get_base_url() . 'image/no_image.png';;
            $this->data['small_lines_image'] = $this->get_base_url() . 'image/momday/small_lines.png';;

            $this->data['text_tags'] = $this->language->get('text_tags');
            $this->data['tab_related'] = $this->language->get(version_compare(VERSION, '2', '>=') ? 'text_related' : 'tab_related');
            $this->data['button_cart'] = $this->language->get('button_cart');
            $this->data['button_wishlist'] = $this->language->get('button_wishlist');
            $this->data['button_compare'] = $this->language->get('button_compare');

            $this->blog_title               = $post_info['name'];
            $this->blog_heading_title       = $post_info['name'];
            $this->blog_meta_title          = $post_info['meta_title'];
            $this->blog_meta_description    = $post_info['meta_description'];
            $this->blog_meta_keywords       = $post_info['meta_keywords'];

            $this->data['post_id'] = $post_info['post_id'];
            $this->data['post_author'] = $this->model_journal2_blog->getAuthorName($post_info);
            $this->data['post_date'] = $post_info['date_created'];
            $this->data['post_content'] = $post_info['description'];
            $this->data['default_author_image'] = Journal2Utils::resizeImage($this->model_tool_image, 'data/journal2/misc/avatar.png', 70, 70);

            $this->data['post_tags'] = array();
            foreach (explode(',', $post_info['tags']) as $tag) {
                $tag = trim($tag);
                if (!$tag) continue;
                $this->data['post_tags'][] = array(
                    'href'  => $this->url->link('momday/momsay', 'journal_blog_tag=' . $tag),
                    'name'  => $tag
                );
            }

            $results = $this->model_journal2_blog->getCategoriesByPostId($post_id);
            $this->data['post_categories'] = array();
            foreach ($results as $result) {
                $this->data['post_categories'][] = array(
                    'href'  => $this->url->link('momday/momsay', 'journal_blog_category_id=' . $result['category_id']),
                    'name'  => $result['name']
                );
            }


            $this->data['grid_classes'] = Journal2Utils::getProductGridClasses($this->journal2->settings->get('config_blog_settings.related_products_per_row.value'), $this->journal2->settings->get('site_width', 1024), $this->journal2->settings->get('config_columns_count', 0));
            $this->data['carousel'] = $this->journal2->settings->get('config_blog_settings.related_products_carousel');

            $this->data['related_products'] = array();
            if ($this->journal2->settings->get('config_blog_settings.related_products', '1')) {
                $results = $this->model_journal2_blog->getRelatedProducts($post_id);

                foreach ($results as $result) {
                    $image = Journal2Utils::resizeImage($this->model_tool_image, $result['image'], $this->config->get('config_image_related_width'), $this->config->get('config_image_related_height'), 'fit');

                    if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                        $price = Journal2Utils::currencyFormat($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')));
                    } else {
                        $price = false;
                    }

                    if ((float)$result['special']) {
                        $special = Journal2Utils::currencyFormat($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
                    } else {
                        $special = false;
                    }

                    if ($this->config->get('config_review_status')) {
                        $rating = (int)$result['rating'];
                    } else {
                        $rating = false;
                    }

                    $date_end = false;
                    if (strpos($this->config->get('config_template'), 'journal2') === 0 && $special && $this->journal2->settings->get('show_countdown', 'never') !== 'never') {
                        $this->load->model('journal2/product');
                        $date_end = $this->model_journal2_product->getSpecialCountdown($result['product_id']);
                        if ($date_end === '0000-00-00') {
                            $date_end = false;
                        }
                    }


                    $additional_images = $this->model_catalog_product->getProductImages($result['product_id']);

                    $image2 = false;

                    if (count($additional_images) > 0) {
                        $image2 = $this->model_tool_image->resize($additional_images[0]['image'], $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
                    }

                    $this->data['related_products'][] = array(
                        'product_id' => $result['product_id'],
                        'thumb' => $image,
                        'thumb2' => $image2,
                        'labels' => $this->model_journal2_product->getLabels($result['product_id']),
                        'date_end' => $date_end,
                        'name' => $result['name'],
                        'price' => $price,
                        'special' => $special,
                        'rating' => $rating,
                        'reviews' => sprintf($this->language->get('text_reviews'), (int)$result['reviews']),
                        'href' => $this->url->link('product/product', 'product_id=' . $result['product_id'])
                    );
                }
            }

            $this->data['allow_comments'] = $this->model_journal2_blog->getCommentsStatus($post_id);
            $this->data['comments'] = $this->model_journal2_blog->getComments($post_id);

            /* default comment fields */
            if (version_compare(VERSION, '2.1', '<')) {
                $this->load->library('user');
            }
            if ($this->customer->isLogged()) {
                $this->load->model('account/customer');
                $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
                $this->data['default_name'] = trim($customer_info['firstname'] . ' ' . $customer_info['lastname']);
                $this->data['default_email'] = $customer_info['email'];
            } else if ($this->user->isLogged()) {
                $admin_info = $this->model_journal2_blog->getAdminInfo($this->user->getId());
                $this->data['default_name'] = trim($admin_info['firstname'] . ' ' . $admin_info['lastname']);
                $this->data['default_email'] = $admin_info['email'];
            } else {
                $this->data['default_name'] = '';
                $this->data['default_email'] = '';
            }

            $this->model_journal2_blog->updateViews($post_id);

            $this->data['heading_title'] = $this->blog_heading_title;
            $this->document->setTitle($this->blog_meta_title ? $this->blog_meta_title : $this->blog_title);
            $this->document->setDescription($this->blog_meta_description);
            $this->document->setKeywords($this->blog_meta_keywords);
            $this->document->addLink($this->url->link('momday/momsay/post', 'post_id=' . $post_id), 'canonical');
            $this->journal2->settings->set('blog_meta_title',       $this->blog_meta_title);

            $this->blog_template = 'momday/momsay_post.tpl';
        } else {
            $this->language->load('error/not_found');

            $this->document->setTitle($this->language->get('text_error'));
            $this->data['heading_title'] = $this->language->get('text_error');
            $this->data['text_error'] = $this->language->get('text_error');
            $this->data['button_continue'] = $this->language->get('button_continue');
            $this->data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . '/1.1 404 Not Found');

            $this->blog_template = 'error/not_found.tpl';
        }

        if (version_compare(VERSION, '2', '>=')) {
            $this->data['column_left'] = $this->load->controller('common/column_left');
            $this->data['column_right'] = $this->load->controller('common/column_right');
            $this->data['content_top'] = $this->load->controller('common/content_top');
            $this->data['content_bottom'] = $this->load->controller('common/content_bottom');
            $this->data['footer'] = $this->load->controller('common/footer');
            $this->data['header'] = $this->load->controller('common/header');
        } else {
            $this->children = array(
                'common/column_left',
                'common/column_right',
                'common/content_top',
                'common/content_bottom',
                'common/footer',
                'common/header'
            );
        }

        $this->response->setOutput($this->renderView($this->blog_template));
    }

    public function like_unlike_post()
    {
        $json = array();
        $this->print_to_file($_POST);
        $json['old_status'] = $_POST['post_status'];
        if (!isset($_POST['post_id']) or is_null($_POST['post_id'])) {
            $json['error'] = 1;
            print(json_encode($json));
        } elseif (!isset($_POST['post_status']) or is_null($_POST['post_status'])) {
            $json['error'] = 2;
            print(json_encode($json));
        } elseif (!$_POST['post_status'] == 0 and !$_POST['post_status'] == 1) {
            $json['error'] = 3;
            print(json_encode($json));
            return;
        } else {
            $status_update_data = array();
            $status_update_data['post_id'] = $_POST['post_id'];
            $status_update_data['status'] = 1 - $_POST['post_status'];
            if($_POST['post_status'] == 1){
                $this->model_momday_momsay->removeUserPostLike($_POST['post_id'], $this->customer->getId());
            }else{
                $this->model_momday_momsay->addUserPostLike($_POST['post_id'], $this->customer->getId());
            }
            $json['success'] = 1;
            $json['post_id'] = $_POST['post_id'];
            $json['new_status'] = 1 - $_POST['post_status'];
            $json['likes_count'] = $this->model_momday_momsay->getPostLikesCount($_POST['post_id']);

            print(json_encode($json));
        }
        return;
    }

    public function comment() {
        if (!$this->model_journal2_blog->getCommentsStatus(Journal2Utils::getProperty($this->request->get, 'post_id'))) {
            $this->response->setOutput(json_encode(array(
                'status'    => 'error',
                'message'   => 'Comments are not allowed on this post!'
            )));
            return;
        }

        $errors = array();

        if(!$this->customer->isLogged()){
            $errors[] = 'login';
            $this->response->setOutput(json_encode(array(
                'status'    => 'error',
                'errors'    => $errors
            )));
        }

//        $name = Journal2Utils::getProperty($this->request->post, 'name', '');
//        $email = Journal2Utils::getProperty($this->request->post, 'email', '');
//        $website = Journal2Utils::getProperty($this->request->post, 'website', '');
        $name = $this->customer->getFirstName() . ' ' . $this->customer->getLastName();
        $email = $this->customer->getEmail();
        $website = '';
        $comment = Journal2Utils::getProperty($this->request->post, 'comment', '');

//        if (!$name) {
//            $errors[] = 'name';
//        }
//
//        if ($this->journal2->settings->get('post_form_email_required', '1') === '1' && (!$email || !preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $email))) {
//            $errors[] = 'email';
//        }

        if (!$comment) {
            $errors[] = 'comment';
        }

        if (!$errors) {
            $data = $this->model_momday_momsay->createComment(array(
                'post_id'   => Journal2Utils::getProperty($this->request->get, 'post_id'),
                'parent_id' => Journal2Utils::getProperty($this->request->post, 'parent_id'),
                'name'      => $name,
                'email'     => $email,
                'website'   => $website,
                'comment'   => $comment
            ));

//            if ($this->journal2->settings->get('config_blog_settings.auto_approve_comments', '1') === '1') {
//                $data['time'] = date($this->language->get('time_format'), strtotime($data['date']));
//                $data['date'] = date($this->language->get('date_format_short'), strtotime($data['date']));
//                if ($data['website']) {
//                    $data['website'] = trim($data['website']);
//                    $data['website'] = trim($data['website'], '/');
//                    $data['website'] = parse_url($data['website'], PHP_URL_SCHEME) !== null ? $data['website'] : ('http://' . $data['website']);
//                    $data['href']    = $data['website'];
//                    $data['website'] = preg_replace('#^https?://#', '', $data['website']);
//                }
//                $data['avatar'] = Journal2Utils::gravatar($data['email'], '', 70);
//
//                $this->response->setOutput(json_encode(array(
//                    'status'    => 'success',
//                    'data'      => $data,
//                    'message'   => $this->journal2->settings->get('blog_form_comment_submitted', 'Comment submitted.')
//                )));
//            } else {
                $this->response->setOutput(json_encode(array(
                    'status'    => 'success',
                    'message'   => $this->journal2->settings->get('blog_form_comment_awaiting_approval', 'Comment awaiting approval.')
                )));
//            }
        } else {
            $this->response->setOutput(json_encode(array(
                'status'    => 'error',
                'errors'    => $errors
            )));
        }
    }

    public function feed() {
        if (!$this->journal2->settings->get('config_blog_settings.feed', 1)) {
            $this->response->redirect('index.php?route=error/not_found');
            exit();
        }
        $output  = '<?xml version="1.0" encoding="UTF-8" ?>';
        $output .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
        $output .= '<channel>';
        $output .= '<atom:link href="' . $this->url->link('momday/momsay/feed') . '" rel="self" type="application/rss+xml" />';
        $output .= '<title>' . $this->blog_title . '</title>';
        $output .= '<link>' . $this->url->link('momday/momsay') . '</link>';
        $output .= '<description>' . $this->blog_meta_description . '</description>';

        $data = array(
            'sort'  => 'newest',
            'start' => 0,
            'limit' => PHP_INT_MAX
        );

        if (isset($this->request->get['journal_blog_feed_category_id'])) {
            $data['category_id'] = $this->request->get['journal_blog_feed_category_id'];
        }

        foreach ($this->model_journal2_blog->getPosts($data) as $post) {
            $output .= '<item>';
            $output .= '<title>' . htmlspecialchars($post['name']) . '</title>';
            $output .= '<author>' . $this->model_journal2_blog->getAuthorEmail($post)  . ' (' . $this->model_journal2_blog->getAuthorName($post) . ')</author>';
            $output .= '<pubDate>' . date(DATE_RSS, strtotime($post['date'])) . '</pubDate>';
            $output .= '<link>' . $this->url->link('momday/momsay/post', 'post_id=' . $post['post_id']) . '</link>';
            $output .= '<guid>' . $this->url->link('momday/momsay/post', 'post_id=' . $post['post_id']) . '</guid>';

            foreach ($this->model_journal2_blog->getCategoriesByPostId($post['post_id']) as $category) {
                $output .= '<category>' . htmlspecialchars($category['name']) . '</category>';
            }

            $description = '';
            if ($post['image']) {
                $image = Journal2Utils::resizeImage($this->model_tool_image, $post, $this->journal2->settings->get('feed_image_width', 250), $this->journal2->settings->get('feed_image_height', 250), 'crop');
                $description .= '<p><img src="' . $image . '" /></p>';
            }
            $description .= utf8_substr(strip_tags(html_entity_decode($post['description'], ENT_QUOTES, 'UTF-8')), 0, $this->journal2->settings->get('config_blog_settings.description_char_limit', 150)) . '... ';
            $description .= '<a href="' . $this->url->link('momday/momsay/post', 'post_id=' . $post['post_id']) . '">' . $this->journal2->settings->get('blog_button_read_more', 'Read More') .'</a>';

            $output .= '<description>' . htmlspecialchars($description). '</description>';
            $output .= '</item>';
        }

        $output .= '</channel>';
        $output .= '</rss>';

        $this->response->addHeader('Content-Type: application/rss+xml');
        $this->response->setOutput($output);
    }

    private function get_post_to_author_id($post_to_author_details){
        $post_id_to_author = array();
        foreach ($post_to_author_details as $result) {
                $post_id_to_author[$result['post_id']]=array(
                    'author_id' => $result['author_id'],
                    'full_name' => $result['full_name']
                );
        }
        return $post_id_to_author;
    }

    private function get_author_id_to_info($all_authors){
        $author_id_to_info = array();
        $base_url = $this->get_base_url();
        $images_url = $base_url . 'image/';
        $blank_image = $base_url . 'image/no_image.png';

        foreach ($all_authors as $result) {
            $author_image = $images_url . $result['image_name'];
            $author_image_file = DIR_IMAGE . $result['image_name'];
            if (!is_file($author_image_file)){
                $author_image = $blank_image;
            }
            $author_id_to_info[$result['author_id']]=array(
                    'image_name' => $author_image,
                    'bio' => $result['bio'],
                    'full_name' => $result['full_name']
                );
        }
        return $author_id_to_info ;
    }

    private function get_post_author_details($post_id){
        $base_url = $this->get_base_url();
        $images_url = $base_url . 'image/';
        $blank_image = $base_url . 'image/no_image.png';

        $author_details = $this->model_momday_momsay->getBlogAuthorDetails($post_id);
        $author_info = array();
        if(sizeof($author_details) >= 1) {
            $author_details = $author_details[0];
            $author_image = $images_url . $author_details['image_name'];
            $author_image_file = DIR_IMAGE . $author_details['image_name'];
            if (!is_file($author_image_file)){
                $author_image = $blank_image;
            }
            $author_info =array(
                'author_id' => $author_details['author_id'],
                'image_name' => $author_image,
                'bio' => $author_details['bio'],
                'full_name' => $author_details['full_name']
            );
        }

        return $author_info ;
    }

    public function check_post_is_momsay($post_id){
        //check post is momsay not activity
        $blog_type = $this->model_momday_momsay->getBlogtypeToBlogpost($post_id);
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

    private function get_base_url(){
        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        return $base_url. '/' . $momday_directory;
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile1.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }

    private function test(){
        $this->load->model('momday/momsay');
        $this->load->model('momday/customerseller_productlist');
        $this->load->model('account/momday');
        $this->load->model('catalog/product');


        $likes_count = $this->model_momday_momsay->getPostLikesCount(48);
        print_r($likes_count);
        exit();

        $data=array('start' =>0,
                'limit' => 10);

//        print_r($this->config->get('config_file_mime_allowed'));

        $product_id = 86;
        $filenameToRemove = 'CAv0ciwnrnKnqvwR40j7MjTTsQ3rMiac.jpeg';
//        print_r($this->model_account_momday->checkMediaInProduct($product_id, 'momday/products/' . $product_id . '/' . $filenameToRemove));
//        $this->model_account_momday->updateCustomersellerProductStatus(11111, 'pending');


//        print_r($this->model_catalog_product->getProduct(87));
//        print_r($this->model_catalog_product->getPrelovedFields(85));
        $customer_id = $this->customer->getId();
        $language_id = (int)$this->config->get('config_language_id');
        $data = array(
            'status' => 'inactive',
            'start' => 0,
            'limit' => 20
        );
        print_r($this->model_momday_customerseller_productlist->getCustomersellerProductlistApi($customer_id, $language_id, $data));
//        print_r($this->model_catalog_product->getProduct(57));
//        $preloved = $this->model_catalog_product->getProducts($data['momday_preloved_products']=1);
//        print_r($preloved);
//        $products = $this->model_catalog_product->getProductsAllDataWithCelebritiesFilter(array(), $this->customer);
//        print_r($products);
//        print_r("ok");

//        print_r($this->model_catalog_product->getProducts());
//        $posts = $this->model_momday_momsay->createComment(array());
//        $posts = $this->model_momday_momsay->getMomsayPostsRest($data);
//        $posts = $this->model_momday_momsay->getMomsayPostRest('1', $this->customer->getId());
//        $posts = $this->model_momday_momsay->getPostCommentsRest('1');
//        $this->model_momday_momsay->removeUserPostLike('2', '1');
//        if($this->model_momday_momsay->removeUserPostLike('2', $this->customer->getId())){
//            print_r("OK");
//        }

//        print_r($this->customer);
    }

}
