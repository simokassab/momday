<?php
class ControllerMomdayProducts extends Controller {
    public function index() {
//        $this->load->language('product/manufacturer');
//
//        $this->load->model('catalog/manufacturer');
//
//        $this->load->model('tool/image');
//
//        $this->document->setTitle($this->language->get('heading_title'));
//
//        $data['breadcrumbs'] = array();
//
//        $data['breadcrumbs'][] = array(
//            'text' => $this->language->get('text_home'),
//            'href' => $this->url->link('common/home')
//        );
//
//        $data['breadcrumbs'][] = array(
//            'text' => $this->language->get('text_brand'),
//            'href' => $this->url->link('product/manufacturer')
//        );
//
//        $data['categories'] = array();
//
//        $results = $this->model_catalog_manufacturer->getManufacturers();
//
//        foreach ($results as $result) {
//            if (is_numeric(utf8_substr($result['name'], 0, 1))) {
//                $key = '0 - 9';
//            } else {
//                $key = utf8_substr(utf8_strtoupper($result['name']), 0, 1);
//            }
//
//            if (!isset($data['categories'][$key])) {
//                $data['categories'][$key]['name'] = $key;
//            }
//
//            $data['categories'][$key]['manufacturer'][] = array(
//                'name' => $result['name'],
//                'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
//            );
//        }
//
//        $data['continue'] = $this->url->link('common/home');
//
//        $data['column_left'] = $this->load->controller('common/column_left');
//        $data['column_right'] = $this->load->controller('common/column_right');
//        $data['content_top'] = $this->load->controller('common/content_top');
//        $data['content_bottom'] = $this->load->controller('common/content_bottom');
//        $data['footer'] = $this->load->controller('common/footer');
//        $data['header'] = $this->load->controller('common/header');
//
//        $this->response->setOutput($this->load->view('product/manufacturer_list', $data));
//    }
//
//    public function info() {
        $this->load->language('product/manufacturer');

        $this->load->model('catalog/manufacturer');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        // Momday code
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
        // end Momday code

        if (isset($this->request->get['manufacturer_id'])) {
            $manufacturer_id = (int)$this->request->get['manufacturer_id'];
        } else {
            $manufacturer_id = 0;
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

//        $data['breadcrumbs'][] = array(
//            'text' => $this->language->get('text_brand'),
//            'href' => $this->url->link('product/manufacturer')
//        );

//        $manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);
        $manufacturer_info = 1;

        if ($manufacturer_info) {
            $this->document->setTitle($manufacturer_info['name']);

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

            $get_params = '';
            $get_params_filter_data = array();
            $text_breadcrumb = '';
            $text_heading_title = '';
            if(isset($this->request->get['momday_preloved_products'])){
                $get_params .= 'momday_preloved_products=1';
                $get_params_filter_data['momday_preloved_products'] = 1;
                $text_breadcrumb = $this->language->get('text_preloved_products');
                $text_heading_title = $this->language->get('text_preloved_products');
            }
            elseif(isset($this->request->get['momday_new_products'])){
                $get_params .= 'momday_new_products=1';
                $get_params_filter_data['momday_new_products'] = 1;
                $text_breadcrumb = $this->language->get('text_new_products');
                $text_heading_title = $this->language->get('text_new_products');
            }else{
                $text_heading_title = $this->language->get('text_products');
            }

            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_products'),
                'href' => $this->url->link('momday/products', $url)
            );

            if($text_breadcrumb != '') {
                $data['breadcrumbs'][] = array(
                    'text' => $text_breadcrumb,
                    'href' => $this->url->link('momday/products', $get_params . $url)
                );
            }

//            $data['heading_title'] = $manufacturer_info['name'];
            $data['heading_title'] = $text_heading_title;

            $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

            $data['compare'] = $this->url->link('product/compare');

            $data['products'] = array();

            $filter_data = array(
                'sort'                   => $sort,
                'order'                  => $order,
                'start'                  => ($page - 1) * $limit,
                'limit'                  => $limit
            );
            $filter_data = array_merge($filter_data, $get_params_filter_data);

            $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

            $results = $this->model_catalog_product->getProducts($filter_data);

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
                    'href'        => $this->url->link('product/product', $get_params . '&product_id=' . $result['product_id'] . $url)
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
                'href'  => $this->url->link('momday/products', $get_params . '&sort=p.sort_order&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_name_asc'),
                'value' => 'pd.name-ASC',
                'href'  => $this->url->link('momday/products', $get_params . '&sort=pd.name&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_name_desc'),
                'value' => 'pd.name-DESC',
                'href'  => $this->url->link('momday/products', $get_params . '&sort=pd.name&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href'  => $this->url->link('momday/products', $get_params . '&sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href'  => $this->url->link('momday/products', $get_params . '&sort=p.price&order=DESC' . $url)
            );

            if ($this->config->get('config_review_status')) {
                $data['sorts'][] = array(
                    'text'  => $this->language->get('text_rating_desc'),
                    'value' => 'rating-DESC',
                    'href'  => $this->url->link('momday/products', $get_params . '&sort=rating&order=DESC' . $url)
                );

                $data['sorts'][] = array(
                    'text'  => $this->language->get('text_rating_asc'),
                    'value' => 'rating-ASC',
                    'href'  => $this->url->link('momday/products', $get_params . '&sort=rating&order=ASC' . $url)
                );
            }

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_model_asc'),
                'value' => 'p.model-ASC',
                'href'  => $this->url->link('momday/products', $get_params . '&sort=p.model&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text'  => $this->language->get('text_model_desc'),
                'value' => 'p.model-DESC',
                'href'  => $this->url->link('momday/products', $get_params . '&sort=p.model&order=DESC' . $url)
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
                    'href'  => $this->url->link('momday/products', $get_params . $url . '&limit=' . $value)
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
            $pagination->url = $this->url->link('momday/products', $get_params .  $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1) {
                $this->document->addLink($this->url->link('momday/products', $get_params, true), 'canonical');
            } else {
                $this->document->addLink($this->url->link('momday/products', $get_params . $url . '&page='. $page, true), 'canonical');
            }

            if ($page > 1) {
                $this->document->addLink($this->url->link('momday/products', $get_params . $url . '&page='. (($page - 2) ? '&page='. ($page - 1) : ''), true), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('momday/products', $get_params . $url . '&page='. ($page + 1), true), 'next');
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

            $this->response->setOutput($this->load->view('product/manufacturer_info', $data));
        } else {
            $url = '';

            if (isset($this->request->get['manufacturer_id'])) {
                $url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
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
                'href' => $this->url->link('product/manufacturer/info', $url)
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
    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }
}
