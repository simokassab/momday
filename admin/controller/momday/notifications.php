<?php
class ControllerMomdayNotifications extends Controller {
    public function notifyBackInStock($eventRoute, $data){
        $this->load->model('momday/notifications');
        $this->load->language('momday/notifications');

        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }

        $product_id = $data[0];
        $product_url = $base_url. '/' . $momday_directory . '/index.php?route=product/product&product_id=' . $product_id;
        $previous_quantity = $this->model_momday_notifications->getProductQuantity($product_id)['quantity'];
        $new_quantity = $data[1]['quantity'];
        $product_wishlist_users = $this->model_momday_notifications->getProductWishlistUsers($product_id);

        if($previous_quantity == 0 && $new_quantity > 0) {
            if (sizeof($product_wishlist_users) > 0) {
                foreach ($product_wishlist_users as $product_wishlist_user) {
                    $email_array = $this->model_momday_notifications->getCustomerEmail($product_wishlist_user['customer_id']);
                    if (sizeof($email_array) > 0) {
                        $email = $email_array['email'];
                        $this->send_back_in_stock_email($email, $product_url);
                    }
                }
            }
        }
    }

    private function send_back_in_stock_email($email, $product_url) {

        $emailHTML =$this->generate_back_in_stock_email_content($product_url);

        $mail = new Mail($this->config->get('config_mail_engine'));
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
        $mail->smtp_username = $this->config->get('config_mail_smtp_username');
        $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
        $mail->smtp_port = $this->config->get('config_mail_smtp_port');
        $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
        $mail->setTo($email);
        $mail->setFrom($this->config->get('config_email'));
        $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
        $mail->setSubject('Momday Product Back in Stock!');
        $mail->setHtml($emailHTML);
        try {
            $mail->send();
            return true;
        } catch (Exception $e) {
            $this->session->data['error_sending_email'] = $e->getMessage();
            return false;
        }
    }

    private function generate_back_in_stock_email_content($product_url){
        $this->load->language('momday/notifications');
        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $momday_directory = '';
        if(defined('MOMDAY_DIRECTORY')) {
            $momday_directory = MOMDAY_DIRECTORY;
        }
        $data = array('momday_logo_url' => $base_url. '/' . $momday_directory . '/image/momday/momday.png',
            'momday_url' => $base_url. '/' . $momday_directory,
            'product_url' => $product_url);
        $this->load->language('momday/celebrities');
        return $this->load->view('momday/emails/back_in_stock', $data);
    }

}