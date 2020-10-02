<?php
class ControllerMomdayCelebrity extends Controller {
    public function index() {
        $this->load->language('momday/celebrity');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        $data['logo_image_src'] = 'image/momday/momday.png';

        // Momday code to check if the user is a celebrity
        $data['text_add_to_celebrity_store'] = $this->language->get('text_add_to_celebrity_store');
        $data['text_in_celebrity_store'] = $this->language->get('text_in_celebrity_store');
        $this->load->model('momday/celebrities');
        if (isset($this->session->data['customer_id'])) {
            $customer_id = $this->session->data['customer_id'];
            $is_celebrity = $this->model_momday_celebrities->checkIsCelebrity($customer_id);
            if($is_celebrity) {
                $celebrity_products = $this->model_momday_celebrities->getCelebrityProductIds($customer_id);
            }else{
                $celebrity_products = array();
            }
        }else{
            $customer_id = null;
            $is_celebrity = 0;
            $celebrity_products = array();
        }
        //linearise multidimensional array
        foreach ($celebrity_products as $key => $val)
        {
            if (is_array($val)) $celebrity_products[$key] = implode('', $val);
        }
        $data['is_celebrity'] = $is_celebrity;
        $data['celebrity_products'] = $celebrity_products;
        // end Momday code to check if the user is a celebrity

        $celebrity_view_allowed = false;
        if (isset($this->request->get['celebrity_id'])) {
            $celebrity_id = (int)$this->request->get['celebrity_id'];
            $data['celebrity_id'] = $celebrity_id;
            $celebrity_view_allowed = $this->model_momday_celebrities->checkIsCelebrity($celebrity_id);
        } else {
            $celebrity_id = 0;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'p.sort_order';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = (int)$this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_celebrities'),
            'href' => $this->url->link('momday/celebrities')
        );

        $celebrity_details = $this->model_momday_celebrities->getCelebrityDetails($celebrity_id);
        if(!isset($celebrity_details[0])){
            $celebrity_id = False;
        }else {
            $celebrity_details = $celebrity_details[0];
            $celebrity_full_name = $celebrity_details['first_name'] . " " . $celebrity_details['last_name'];
            $data['celebrity_bio'] = $celebrity_details['bio'];
            $data['celebrity_full_name'] = $celebrity_full_name;
            $data['celebrity_square_image'] = $this->model_momday_celebrities->getCelebritySquareImage($celebrity_id);
        }

        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $data['celebrity_images_url'] = $base_url . '/' . $momday_directory . '/image/';

        if ($celebrity_id && $celebrity_view_allowed) {
            $this->document->setTitle($celebrity_full_name);

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = array(
                'text' => $celebrity_full_name,
                'href' => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . $url)
            );

            $data['heading_title'] = $celebrity_full_name;

            $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

            $data['compare'] = $this->url->link('product/compare');

            $data['products'] = array();

            $filter_data = array(
                'momday_celebrity_id'    => $celebrity_id,
                'sort'                   => $sort,
                'order'                  => $order,
                'start'                  => ($page - 1) * $limit,
                'limit'                  => $limit
            );

//            $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

            $results = $this->model_catalog_product->getProducts($filter_data);

            $product_total = count($results);

            foreach ($results as $result) {
                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float)$result['special']) {
                    $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }

                if ($this->config->get('config_tax')) {
                    $tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
                } else {
                    $tax = false;
                }

                if ($this->config->get('config_review_status')) {
                    $rating = (int)$result['rating'];
                } else {
                    $rating = false;
                }

                $data['products'][] = array(
                    'product_id'  => $result['product_id'],
                    'thumb'       => $image,
                    'name'        => $result['name'],
                    'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price'       => $price,
                    'special'     => $special,
                    'tax'         => $tax,
                    'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
                    'rating'      => $result['rating'],
                    'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
                );
            }

            $url = '';

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['sorts'] = array();

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_default'),
                'value' => 'p.sort_order-ASC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=p.sort_order&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_name_asc'),
                'value' => 'pd.name-ASC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=pd.name&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_name_desc'),
                'value' => 'pd.name-DESC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=pd.name&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=p.price&order=DESC' . $url)
            );

            if ($this->config->get('config_review_status')) {
                $data['sorts'][] = array(
                    'text'  => $this->language->get('text_rating_desc'),
                    'value' => 'rating-DESC',
                    'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=rating&order=DESC' . $url)
                );

                $data['sorts'][] = array(
                    'text'  => $this->language->get('text_rating_asc'),
                    'value' => 'rating-ASC',
                    'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=rating&order=ASC' . $url)
                );
            }

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_model_asc'),
                'value' => 'p.model-ASC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=p.model&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_model_desc'),
                'value' => 'p.model-DESC',
                'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . '&sort=p.model&order=DESC' . $url)
            );

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            $data['limits'] = array();

            $limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

            sort($limits);

            foreach($limits as $value) {
                $data['limits'][] = array(
                    'text'  => $value,
                    'value' => $value,
                    'href'  => $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . $url . '&limit=' . $value)
                );
            }

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $pagination = new Pagination();
            $pagination->total = $product_total;
            $pagination->page = $page;
            $pagination->limit = $limit;
            $pagination->url = $this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] .  $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1) {
                $this->document->addLink($this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'], true), 'canonical');
            } else {
                $this->document->addLink($this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . $url . '&page='. $page, true), 'canonical');
            }

            if ($page > 1) {
                $this->document->addLink($this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . $url . '&page='. (($page - 2) ? '&page='. ($page - 1) : ''), true), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('momday/celebrity', 'celebrity_id=' . $this->request->get['celebrity_id'] . $url . '&page='. ($page + 1), true), 'next');
            }

            $data['sort'] = $sort;
            $data['order'] = $order;
            $data['limit'] = $limit;

            $data['continue'] = $this->url->link('common/home');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('momday/celebrity', $data));
        } else {
            $url = '';

            if (isset($this->request->get['celebrity_id'])) {
                $url .= '&celebrity_id=' . $this->request->get['celebrity_id'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('momday/celebrity', $url)
            );

            $this->document->setTitle($this->language->get('text_error'));

            $data['heading_title'] = $this->language->get('text_error');

            $data['text_error'] = $this->language->get('text_error');

            $data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }
}
