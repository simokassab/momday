<?php

// Used by OpenCart 2.1
class ControllerPaymentBookey extends ControllerExtensionPaymentBookey {}

class ControllerExtensionPaymentBookey extends Controller
{
    protected $code = 'payment_bookey';
    protected $confirmPath = 'extension/payment';
    protected $viewPath = 'extension/payment/bookey';
    protected $languagePath = 'extension/payment/bookey';

    public function __construct($registry)
    {
        parent::__construct($registry);

        if (true === version_compare(VERSION, '3.0.0', '<')) {
            $this->code = 'bookey';
        }
        if (true === version_compare(VERSION, '2.3.0', '<')) {
            $this->viewPath = 'payment/bookey.tpl';
            $this->confirmPath = 'payment';
            $this->languagePath = 'payment/bookey';
        }
        if (true === version_compare(VERSION, '2.2.0', '<')) {
            $this->viewPath = 'default/template/payment/bookey.tpl';
        }

        $this->load->language($this->languagePath);
    }

    public function index()
    {

        

        $data['text_title'] = $this->language->get('text_title');
        $data['url_redirect'] = $this->url->link($this->confirmPath.'/bookey/confirm', $this->config->get('config_secure'));
        $data['button_confirm'] = $this->language->get('button_confirm');

        if (isset($this->session->data['error_bookey'])) {
            $data['error_bookey'] = $this->session->data['error_bookey'];
            unset($this->session->data['error_bookey']);
        }

        if (file_exists(DIR_TEMPLATE.$this->config->get('config_template').'/template/extension/payment/bookey')) {
            return $this->load->view($this->config->get('config_template').'/template/'.$this->viewPath, $data);
        }

        return $this->load->view($this->viewPath, $data);
    }

    // Create payment invoice and redirect to Bookey
    public function confirm()
    {


        $this->load->model('checkout/order');

        if (!isset($this->session->data['order_id'])) {
            $this->response->redirect($this->url->link('checkout/cart'));
            return;
        }
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        if (false === $order_info) {
            $this->response->redirect($this->url->link('checkout/cart'));
            return;
        }

        $orderID = $this->session->data['order_id'];
        $order_total = $order_info['total'];
        $order_total = round($order_total, 2);
        $currency_code = $order_info['currency_code'];
        $redirect_url = $this->config->get($this->code.'_redirect_url');

        $AccountID = $this->config->get($this->code.'_payment_api_accountID');
        $AccountPrivateKey = $this->config->get($this->code.'_payment_api_privateKey');
        if (isset($this->session->data['meth'])) {
            $data['meth'] = $this->session->data['meth'];
        }
        $payinput = "knet";
        if(!empty($data['meth'])){
        	$payinput = $data['meth'];
        }else{
        	$payinput = 'knet';
        }
        

         $this->redirect_post($AccountID,$AccountPrivateKey,$redirect_url,$order_total,$payinput);
    }


public function paymthod()
    {
    	$this->session->data['meth'] = $this->request->post['bpayval'];
    }

    public function redirect_post($AccountID,$AccountPrivateKey,$url,$order_total,$payinput)
{
$random_pwd = mt_rand(1000000000000000, 9999999999999999);
$mid = $AccountID;
$txnRefNo = $random_pwd;
// $su = $this->url->link($this->confirmPath.'/bookey/thankyou', $this->config->get('config_secure'));
$su = $this->url->link($this->confirmPath.'/bookey/thankyou');
$fu = $this->url->link($this->confirmPath.'/bookey/bookeyfailure');
// $fu = $this->url->link('checkout/bookeyfailure');
$amt = $order_total;
$txnTime = date("ymdHis");
$crossCat = "GEN";
$secret_key = $AccountPrivateKey;
$paymentoptions = $payinput;
$data = "$mid|$txnRefNo|$su|$fu|$amt|$txnTime|$crossCat|$secret_key";

$hashed = hash('sha512', $data);


    ?>
    
        <script type="text/javascript">
            function closethisasap() {
                document.forms["redirectpost"].submit();
            }
        </script>
        <style type="text/css">
            #loading {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #fff url('image/tenor.gif') no-repeat center center;
                z-index: 9999;
                }
        </style>
        <script>
            jQuery(document).ready(function() {
                jQuery('#loading').fadeOut(3000);
            });

            </script>
    </head>
    <body onload="closethisasap();">
        <div id="loading"></div>
    <form name="redirectpost" method="post" action="<? echo $url; ?>">
      </div> 
            <div  id="bookeey">
            
            </div>
            
            
            <div id="hidden_params">
                 <input id="mid" name="mid" type="hidden" value="<?php echo $mid; ?>"/>
                 <input id="txnRefNo" name="txnRefNo" type="hidden" value="<?php echo $txnRefNo; ?>"/>
                 <input id="surl" name="surl" type="hidden" value="<?php echo $su; ?>"/>
                 <input id="furl" name="furl" type="hidden" value="<?php echo $fu; ?>"/>
                 <input id="amt" name="amt" type="hidden" value="<?php echo $amt; ?>"/>
                 <input id="crossCat" name="crossCat" type="hidden" value="<?php echo $crossCat; ?>"/>
                 <input id="hashMac" name="hashMac" type="hidden" value="<?php echo $hashed; ?>"/>
                 <input id="status" name="status" type="hidden" value=""/>
                 <input id="code" name="code" type="hidden" value=""/>
                 <input id="msg" name="msg" type="hidden" value=""/>
                 <input id="txnid" name="txnid" type="hidden" value=""/>
                 <input id="txnTime" name="txnTime" type="hidden" value="<?php echo $txnTime; ?>"/>
                 <input id="customerHash" name="customerHash" type="hidden" value=""/>
                 <input id="returnHash" name="returnHash"  type="hidden" value=""/>
                 <input type="hidden" name="paymentoptions" id="paymentoptions" value="<?php echo $paymentoptions;?>">
                <input id="merchantName" name="merchantName" type="hidden" value=""/></div>
    </form>
</body>
    
    <?php
    exit;
}

    // Redirect Handler
    public function thankyou()
    {
    	
// print_r($_POST);
       $this->load->model('checkout/order');
        $order_id = $this->session->data['order_id'];

        if (is_null($order_id)) {
            $this->response->redirect($this->url->link('checkout/thankyou'));
            return;
        }else{
            $this->model_checkout_order->addOrderHistory($order_id, 2,'txnId='.$_GET['txnId'].'  merchantTxnId='.$_GET['merchantTxnId']);
            $order = $this->model_checkout_order->getOrder($order_id);
            unset($this->session->data['meth']);
        }
        $this->response->redirect($this->url->link('checkout/thankyou&txnId='.$_GET['txnId'].'&merchantTxnId='.$_GET['merchantTxnId'].'&fname='.$order['firstname'].'&lname='.$order['lastname'].'&email='.$order['email'].'&telephone='.$order['telephone']));
    }




public function bookeyfailure()
    {
    	
// print_r($_POST);
        $this->response->redirect($this->url->link('checkout/bookeyfailure&txnId='.$_GET['merchantTxnId'].'&errorMessage='.$_GET['errorMessage']));
    }




    // The IPN Handler
    public function callback()
    {
        
    }

    // Logger function for debugging
    public function log($message)
    {
        if ($this->config->get($this->code.'_logging') != true) {
            return;
        }
        $log = new Log('bookey.log');
        $log->write($message);
    }

}
