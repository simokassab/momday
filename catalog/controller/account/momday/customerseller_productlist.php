<?php
class ControllerAccountMomdayCustomersellerProductlist extends Controller {

    private $error = array();
    private $data = array();
    private $membershipData = array();

    public function index() {

        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/momday/customerseller_productlist', '', true);
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->model('momday/customerseller_productlist');

        $this->document->addStyle('catalog/view/theme/default/stylesheet/MP/sell.css');

        $this->load->language('momday/customerseller_productlist');

        $this->document->setTitle($this->language->get('heading_title_productlist'));

        $this->data['breadcrumbs'] = array();

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home', '', true),
            'separator' => false
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_account'),
            'href'      => $this->url->link('account/account', '', true),
            'separator' => $this->language->get('text_separator')
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title_productlist'),
            'href'      => $this->url->link('account/customerpartner/productlist', '', true),
            'separator' => $this->language->get('text_separator')
        );

        //initial data to get on page loadup
        if (isset($this->request->get['product_status'])) {
            if (in_array($this->request->get['product_status'], ['active','pending','inactive','rejected','sold'])){
                $product_status = $this->request->get['product_status'];
            }else{
                $product_status = null;
            }
        } else {
            $product_status = null;
        }

        if (isset($this->request->get['filter_name'])) {
            $filter_name = $this->request->get['filter_name'];
        } else {
            $filter_name = null;
        }

        if (isset($this->request->get['filter_modified'])) {
            $filter_modified = $this->request->get['filter_modified'];
        } else {
            $filter_modified = null;
        }


        if (isset($this->request->get['filter_expire'])) {
            $filter_expire = $this->request->get['filter_expire'];
        } else {
            $filter_expire = null;
        }

        if (isset($this->request->get['filter_price'])) {
            $filter_price = $this->request->get['filter_price'];
        } else {
            $filter_price = null;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'name';
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

        $url = '';

        if (isset($this->request->get['product_status']) and !is_null($product_status)) {
            $url .= '&product_status=' . $this->request->get['product_status'];
        }

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_modified'])) {
            $url .= '&filter_modified=' . $this->request->get['filter_modified'];
        }

        if (isset($this->request->get['filter_expire'])) {
            $url .= '&filter_expire=' . $this->request->get['filter_expire'];
        }

        $filter_price_set = False;
        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
            $filter_price_set = True;
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

        $this->data['insert'] = $this->url->link('account/momday/customerseller/add', '' , true);
        $this->data['delete'] = $this->url->link('account/momday/customerseller_productlist/delete', '' . $url, true);
        $this->data['deactivate'] = $this->url->link('account/momday/customerseller_productlist/deactivate', '' . $url, true);
        $this->data['product_status'] = $product_status;

        $data = array(
            'product_status'    => $product_status,
            'filter_name'	  => $filter_name,
            'filter_modified' => $filter_modified,
            'filter_expire'	  => $filter_expire,
            'filter_price'	  => round($this->currency->convert($filter_price,$this->session->data['currency'], $this->config->get('config_currency')), 2),
            'filter_price_set'=> $filter_price_set,
            'sort'            => $sort,
            'order'           => $order,
            'start'           => ($page - 1) * 10,
            'limit'           => 10
        );

        $this->load->model('tool/image');

        $customerseller_products = $this->model_momday_customerseller_productlist->getProductsCustomerseller($data, $this->session->data['customer_id']);
//    print_r($filter_modified);
//    exit();
//    print_r($customerseller_products);
//    exit();

//        $customerseller_products = $this->model_momday_customerseller_productlist->populateCustomerseller();
//        $customerseller_products = $this->model_momday_customerseller_productlist->populateCustomerseller2();
//        print_r("populated");
//        exit();

//        print_r($this->model_momday_customerseller_productlist->getProductTotalCustomerseller($this->session->data['customer_id']));
//        exit();

//        if($this->model_momday_customerseller_productlist->chkCustomersellerProductAccess(88)){
//            print_r("yes");
//        }else{
//            print_r("no");
//        }
//        exit();

        $product_total = $this->model_momday_customerseller_productlist->getProductTotalCustomerseller($data, $this->session->data['customer_id']);

//        $results = $this->model_account_customerpartner->getProductsSeller($data);
        $results = array();
        $this->session->data['product_token'] = token(32);

        $action= array(
            'text_edit' => $this->language->get('text_edit'),
            'text_delete' => $this->language->get('text_delete'),
            'text_deactivate' => $this->language->get('text_deactivate'),
            'text_activate' => $this->language->get('text_activate'),
        );

        $this->data['action'] = $action;

        foreach ($customerseller_products as $result) {

            $key = $result['product_id'];
            $results[$key]['product_id'] = $result['product_id'];

            $action_href= array(
                'href_edit' => $this->url->link('account/momday/customerseller/add', '' . '&edit&product_id=' . $result['product_id'] , true),
                'href_delete' => $this->url->link('account/momday/customerseller/add', '' . '&delete&product_id=' . $result['product_id'] , true),
                'href_deactivate' => $this->url->link('account/momday/customerseller_productlist', '' . '&deactive&product_id=' . $result['product_id'] , true),
                'href_activate' => $this->url->link('account/momday/customerseller/add', '' . '&activate&product_id=' . $result['product_id'] , true)
            );

            if ($result['image'] && file_exists(DIR_IMAGE . $result['image'])) {
                $thumb = $this->model_tool_image->resize($result['image'], 40, 40);
            } else {
                $thumb = $this->model_tool_image->resize('no_image.jpg', 40, 40);
            }

            $results[$key]['name'] = $result['name'];
            $results[$key]['price'] = $this->currency->format($result['price'],$this->session->data['currency']);
            $results[$key]['thumb'] = $thumb;
            $results[$key]['selected'] =  isset($this->request->post['selected']) && in_array($result['product_id'], $this->request->post['selected']);
            $results[$key]['productLink'] = $this->url->link('product/product' , 'product_id='.$key, true);
            $results[$key]['date_modified'] = date("Y-m-d",$result['date_modified']);
            $results[$key]['date_expire'] = date("Y-m-d",$result['date_expire']);
            $results[$key]['product_status'] = $result['status'];
            $results[$key]['tracking'] = $result['tracking'];
            $results[$key]['remarks'] = $result['remarks'];
            $results[$key]['action_href'] = $action_href;
        }

        $this->data['products'] = $results;

        if (isset($this->error['warning'])) {
            $this->data['error_warning'] = $this->error['warning'];
        } else {
            $this->data['error_warning'] = '';
        }

        if (isset($this->session->data['warning'])) {
            $this->data['error_warning'] = $this->session->data['warning'];
            unset($this->session->data['warning']);
        }

        if (isset($this->session->data['success'])) {
            $this->data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $this->data['success'] = '';
        }

        // save info for sorting
        $url = '';

        if (isset($this->request->get['product_status']) and !is_null($product_status)) {
            $url .= '&product_status=' . $this->request->get['product_status'];
        }

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_modified'])) {
            $url .= '&filter_modified=' . $this->request->get['filter_modified'];
        }

        if (isset($this->request->get['filter_expire'])) {
            $url .= '&filter_expire=' . $this->request->get['filter_expire'];
        }

        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
        }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $this->data['sort_name'] = $this->url->link('account/momday/customerseller_productlist', '' . '&sort=name' . $url, true);
        $this->data['sort_modified'] = $this->url->link('account/momday/customerseller_productlist', '' . '&sort=modified' . $url, true);
        $this->data['sort_expire'] = $this->url->link('account/momday/customerseller_productlist', '' . '&sort=expire' . $url, true);
        $this->data['sort_price'] = $this->url->link('account/momday/customerseller_productlist', '' . '&sort=price' . $url, true);
        $url = '';

        if (isset($this->request->get['product_status']) and !is_null($product_status)) {
            $url .= '&product_status=' . $this->request->get['product_status'];
        }

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_modified'])) {
            $url .= '&filter_modified=' . $this->request->get['filter_modified'];
        }

        if (isset($this->request->get['filter_expire'])) {
            $url .= '&filter_expire=' . $this->request->get['filter_expire'];
        }

        if (isset($this->request->get['filter_price'])) {
            $url .= '&filter_price=' . $this->request->get['filter_price'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $product_total;
        $pagination->page = $page;
        $pagination->limit = 10;
        $pagination->url = $this->url->link('account/momday/customerseller_productlist', '' . $url . '&page={page}', true);

        $this->data['pagination'] = $pagination->render();

        $this->data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($product_total - 10)) ? $product_total : ((($page - 1) * 10) + 10), $product_total, ceil($product_total / 10));

        $this->data['filter_name'] = $filter_name;
        $this->data['filter_modified'] = $filter_modified;
        $this->data['filter_expire'] = $filter_expire;
        $this->data['filter_price'] = $filter_price;

        $this->data['sort'] = $sort;
        $this->data['order'] = $order;

        $this->data['back'] = $this->url->link('account/account', '', true);

        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['column_right'] = $this->load->controller('common/column_right');
        $this->data['content_top'] = $this->load->controller('common/content_top');
        $this->data['content_bottom'] = $this->load->controller('common/content_bottom');
        $this->data['footer'] = $this->load->controller('common/footer');
        $this->data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('momday/customerseller_productlist' , $this->data));

    }

    public function delete() {

        $this->load->language('momday/customerseller_productlist');

        $this->document->setTitle($this->language->get('heading_title_productlist'));

        $this->load->model('momday/customerseller_productlist');

        if (isset($this->request->post['selected']) && $this->validate()) {

            foreach ($this->request->post['selected'] as $product_id) {
                $this->model_customerseller_productlist->deleteCustomersellerProduct($product_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['product_status'])) {
                $url .= '&product_status='  . $this->request->get['product_status'];
            }

            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_modified'])) {
                $url .= '&filter_modified=' . $this->request->get['filter_modified'];
            }

            if (isset($this->request->get['filter_expire'])) {
                $url .= '&filter_expire=' . $this->request->get['filter_expire'];
            }

            if (isset($this->request->get['filter_price'])) {
                $url .= '&filter_price=' . $this->request->get['filter_price'];
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

            $this->session->data['success'] = $this->language->get('text_success_delete');

            $this->response->redirect($this->url->link('account/momday/customerseller_productlist', '' . $url, true));
        }

        $this->index();
    }

    public function deactivate() {

        $this->load->language('momday/customerseller_productlist');

        $this->document->setTitle($this->language->get('heading_title_productlist'));

        $this->load->model('momday/customerseller_productlist');

        if (isset($this->request->post['selected']) && $this->validate()) {

            foreach ($this->request->post['selected'] as $product_id) {
                $this->model_momday_customerseller_productlist->deactivateCustomersellerProduct($product_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['product_status'])) {
                $url .= '&product_status='  . $this->request->get['product_status'];
            }

            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_modified'])) {
                $url .= '&filter_modified=' . $this->request->get['filter_modified'];
            }

            if (isset($this->request->get['filter_expire'])) {
                $url .= '&filter_expire=' . $this->request->get['filter_expire'];
            }

            if (isset($this->request->get['filter_price'])) {
                $url .= '&filter_price=' . $this->request->get['filter_price'];
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

            $this->session->data['success'] = $this->language->get('text_success_deactivate');

            $this->response->redirect($this->url->link('account/momday/customerseller_productlist', '' . $url, true));
        }

        $this->index();
    }

    private function validate() {

        $this->load->language('account/customerpartner/addproduct');

        if (!$this->customer->getId()) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

}
