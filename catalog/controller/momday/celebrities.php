<?php
class ControllerMomdayCelebrities extends Controller {

    private $error = array();
    private $data = array();

    public function index() {

        $this->load->model('momday/celebrities');

//        $this->model_momday_celebrities->populateCelebrity();
//        $this->model_momday_celebrities->populateCelebrity2();
//        print_r("celebrities populated!");
//        exit();

        if(isset($this->request->post['search_celeb'])) {
            $search = ($this->request->post['search_celeb']);
            $search_names = explode(" ", $search);
            $celebrities = $this->model_momday_celebrities->getCelebritiesByNames($search_names);
            $this->data['search_celeb'] = $search;
        }else {
            if (isset($this->request->get['char'])) {
                $celebrity_first_char = $this->request->get['char'];
            } else {
                $celebrity_first_char = "";
            }
            $celebrities = $this->model_momday_celebrities->getCelebrities($celebrity_first_char);
        }
        $this->data['celebrities'] = $celebrities;


        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $this->data['celebrity_images_url'] = $base_url . '/' . $momday_directory . '/image/';


//        print_r($this->model_momday_celebrities->getCelebrities(''));
//        exit();
//
//        print_r($this->model_momday_celebrities->getCelebritiesByNames(Array('nancy','karam')));
//        exit();

        $this->load->language('momday/celebrities');
        $this->data['language_chars'] = $this->language->get('language_chars');

        $this->document->setTitle($this->language->get('heading_title_celebrities'));

        $this->data['breadcrumbs'] = array();

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home', '', true),
            'separator' => false
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_celebrities_title'),
            'href'      => $this->url->link('momday/celebrities', '', true),
            'separator' => $this->language->get('text_separator')
        );






        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['column_right'] = $this->load->controller('common/column_right');
        $this->data['content_top'] = $this->load->controller('common/content_top');
        $this->data['content_bottom'] = $this->load->controller('common/content_bottom');
        $this->data['footer'] = $this->load->controller('common/footer');
        $this->data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('momday/celebrities' , $this->data));

    }


    private function validate() {

    }

    public function addRemoveStoreProduct()
    {
        $error = "";
        $result = array();
        $result['response'] = "";
        $this->load->model('momday/celebrities');
        if (isset($this->session->data['customer_id'])) {
            $customer_id = $this->customer->getId();
            $is_celebrity = $this->model_momday_celebrities->checkIsCelebrity($customer_id);
            if($is_celebrity) {
                if (!isset($this->request->post['product_id'])) {
                    $error .= "missing product_id ";
                }elseif(!isset($this->request->post['action'])) {
                    $error .= "missing action ";
                }else{
                    $action = $this->request->post['action'];
                    $product_id = $this->request->post['product_id'];
                    if($action == "add") {
                        $this->model_momday_celebrities->addProductToCelebrityStore($customer_id, $product_id);
                        $result['response'] = 'added';
                    }elseif($action == "remove"){
                        $this->model_momday_celebrities->removeProductFromCelebrityStore($customer_id, $product_id);
                        $result['response'] = 'removed';
                    }else {
                        $error .= " incorrect action " . $action;
                    }
                }
            }else{
                $error .= "customer " . $customer_id . " is not a celebrity ";
            }
        }else{
            $error .= "customer is not logged in ";
        }
        $result['error'] = $error;

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

}
