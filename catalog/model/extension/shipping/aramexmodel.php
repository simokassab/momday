<?php

class ModelExtensionShippingAramexmodel extends Model {

    public function getWeightClassId($unit) {
        return $this->db->query("SELECT wcd.unit,wcd.weight_class_id FROM " . DB_PREFIX . "weight_class wc LEFT JOIN " . DB_PREFIX . "weight_class_description wcd ON (wc.weight_class_id = wcd.weight_class_id) WHERE wcd.language_id = '" . (int) $this->config->get('config_language_id') . "' and unit LIKE '%$unit%' ");
    }

    public function getClientInfo()
    {
        if($this->config->get('shipping_aramex_allowed_cod') == 1){
            $account = ($this->config->get('shipping_aramex_cod_account_number')) ? $this->config->get('shipping_aramex_cod_account_number') : '';
            $pin = ($this->config->get('shipping_aramex_cod_account_pin')) ? $this->config->get('shipping_aramex_cod_account_pin') : '';
            $entity = ($this->config->get('shipping_aramex_cod_account_entity')) ? $this->config->get('shipping_aramex_cod_account_entity') : '';
            $country_code = ($this->config->get('shipping_aramex_cod_account_country_code')) ? $this->config->get('shipping_aramex_cod_account_country_code') : '';
        }else{
            $account = ($this->config->get('shipping_aramex_account_number')) ? $this->config->get('shipping_aramex_account_number') : '';
            $pin = ($this->config->get('shipping_aramex_account_pin')) ? $this->config->get('shipping_aramex_account_pin') : '';
            $entity = ($this->config->get('shipping_aramex_account_entity')) ? $this->config->get('shipping_aramex_account_entity') : '';
            $country_code = ($this->config->get('shipping_aramex_account_country_code')) ? $this->config->get('shipping_aramex_account_country_code') : '';
        }
        $username = ($this->config->get('shipping_aramex_email')) ? $this->config->get('shipping_aramex_email') : '';
        $password = ($this->config->get('shipping_aramex_password')) ? $this->config->get('shipping_aramex_password') : '';
        return array(
            'AccountCountryCode' => $country_code,
            'AccountEntity' => $entity,
            'AccountNumber' => $account,
            'AccountPin' => $pin,
            'UserName' => $username,
            'Password' => $password,
            'Version' => 'v1.0',
            'Source' => 31
        );

    }

    public function getWsdlPath() {

        if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
            $base = HTTPS_SERVER;
        } else {
            $base = HTTP_SERVER;
        }
        $base = rtrim($base, "/");
        $wsdlBasePath = $base . '/admin/model/extension/shipping/aramex/wsdl';
        if ($this->config->get('aramex_test') == 1) {
            $wsdlBasePath .='/TestMode';
        }
        return $wsdlBasePath;
    }

    public function create($order_id) {

        $this->load->model('checkout/order');
        $this->load->model('shipping/aramex');

        $order_info = $this->model_checkout_order->getOrder($order_id);

        if ($order_info) {



            ##################### config shipper details ################
            $shipper_name = ($this->config->get('aramex_shipper_name')) ? $this->config->get('aramex_shipper_name') : '';
            $shipper_email = ($this->config->get('aramex_shipper_email')) ? $this->config->get('aramex_shipper_email') : '';
            $shipper_company = ($this->config->get('aramex_shipper_company')) ? $this->config->get('aramex_shipper_company') : '';

            $shipper_street = ($this->config->get('aramex_shipper_address')) ? $this->config->get('aramex_shipper_address') : '';
            $shipper_country = ($this->config->get('aramex_shipper_country_code')) ? $this->config->get('aramex_shipper_country_code') : '';
            $shipper_city = ($this->config->get('aramex_shipper_city')) ? $this->config->get('aramex_shipper_city') : '';
            $shipper_postal = ($this->config->get('aramex_shipper_postal_code')) ? $this->config->get('aramex_shipper_postal_code') : '';
            $shipper_state = ($this->config->get('aramex_shipper_state')) ? $this->config->get('aramex_shipper_state') : '';
            $shipper_phone = ($this->config->get('aramex_shipper_phone')) ? $this->config->get('aramex_shipper_phone') : '';

            ##################### customer shipment details ################

            $shipment_receiver_name = '';
            $shipment_receiver_street = '';
            if (isset($order_info['shipping_firstname']) && !empty($order_info['shipping_firstname'])) {
                $shipment_receiver_name .= $order_info['shipping_firstname'];
            }
            if (isset($order_info['shipping_lastname']) && !empty($order_info['shipping_lastname'])) {
                $shipment_receiver_name .= " " . $order_info['shipping_lastname'];
            }
            if (isset($order_info['shipping_address_1']) && !empty($order_info['shipping_address_1'])) {
                $shipment_receiver_street .= $order_info['shipping_address_1'];
            }
            if (isset($order_info['shipping_address_2']) && !empty($order_info['shipping_address_2'])) {
                $shipment_receiver_street .= " " . $order_info['shipping_address_2'];
            }

            $receiver_name = $shipment_receiver_name;
            $receiver_email = ($order_info['email']) ? $order_info['email'] : '';
            $receiver_company = ($order_info['shipping_company']) ? $order_info['shipping_company'] : '';
            $receiver_street = $shipment_receiver_street;
            $receiver_country = ($order_info['shipping_iso_code_2']) ? $order_info['shipping_iso_code_2'] : '';
            $receiver_city = ($order_info['shipping_city']) ? $order_info['shipping_city'] : '';
            $receiver_postal = ($order_info['shipping_postcode']) ? $order_info['shipping_postcode'] : '';
            $receiver_state = ($order_info['shipping_zone']) ? $order_info['shipping_zone'] : '';
            $receiver_phone = ($order_info['telephone']) ? $order_info['telephone'] : '';

            #################


            $reference = $order_id;
            $shipper_account = ($this->config->get('aramex_account_number')) ? $this->config->get('aramex_account_number') : '';


            $domestic_methods = ($this->config->get('aramex_allowed_domestic_methods')) ? $this->config->get('aramex_allowed_domestic_methods') : '';
            $domestic_additional_services = ($this->config->get('aramex_allowed_domestic_additional_services')) ? $this->config->get('aramex_allowed_domestic_additional_services') : '';
            $international_methods = ($this->config->get('aramex_allowed_international_methods')) ? $this->config->get('aramex_allowed_international_methods') : '';
            $international_additional_services = ($this->config->get('aramex_allowed_international_additional_services')) ? $this->config->get('aramex_allowed_international_additional_services') : '';


            //print_r($this->request->post);
            $config_weight_class_id = $this->config->get('config_weight_class_id');
            $weight_unit = $this->weight->getUnit($this->config->get('config_weight_class_id'));
            $aramex_shipment_info_billing_account = 1;

            if (strtolower($receiver_country) == strtolower($shipper_country)) {
                $product_group = 'DOM';
                $product_type = ($this->config->get('aramex_default_allowed_domestic_methods')) ? $this->config->get('aramex_default_allowed_domestic_methods') : '';
                $aservice_type = ($this->config->get('aramex_default_allowed_domestic_additional_services')) ? $this->config->get('aramex_default_allowed_domestic_additional_services') : '';
            } else {
                $product_group = 'EXP';
                $product_type = ($this->config->get('aramex_default_allowed_international_methods')) ? $this->config->get('aramex_default_allowed_international_methods') : '';
                $aservice_type = ($this->config->get('aramex_default_allowed_international_additional_services')) ? $this->config->get('aramex_default_allowed_international_additional_services') : '';
            }

/// COD
            $services = array();
            $aservice_type_array = array();
            $aservice_type_array[] = $aservice_type;
            if($product_type == "CDA"){
                if( $aservice_type == null ){
                    array_push($services, "CODS");
                }elseif ( !in_array("CODS", $aservice_type_array)){
                    $services = array_merge($services, $aservice_type_array);
                    array_push($services, "CODS");
                }else{
                    $services = array_merge($services, $aservice_type_array);
                }
            }else{
                if($aservice_type == null){
                    $aservice_type = array();
                }
                $services = array_merge($services, $aservice_type_array);
            }
            $services = implode(',', $services);
/// COD
            $payment_type = 'P';
            if (isset($order_info['payment_code']) && $order_info['payment_code'] == 'cod') {
                $payment_option = 'CASH';
                $cod_amount = number_format($order_info['total'], 2);
            }
            $currency_code = $order_info['currency_code'];
            $custom_amount = '';
            $info_comment = '';
            $foreignhawb = '';

            ########### product list ##########
            $order_products = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "'");

            $weighttot = 0;
            $totalWeight = 0;
            $totalItems = 0;
            foreach ($order_products->rows as $order_product) {

                //print_r($order_product);
                $product_weight_query = $this->db->query("SELECT weight, weight_class_id FROM " . DB_PREFIX . "product WHERE product_id = '" . $order_product['product_id'] . "'");
                $weight_class_query = $this->db->query("SELECT wcd.unit FROM " . DB_PREFIX . "weight_class wc LEFT JOIN " . DB_PREFIX . "weight_class_description wcd ON (wc.weight_class_id = wcd.weight_class_id) WHERE wcd.language_id = '" . (int) $this->config->get('config_language_id') . "' AND wc.weight_class_id = '" . $product_weight_query->row['weight_class_id'] . "'");


                $product_arr[] = $order_product['name'];
                $weight = number_format($this->weight->convert($product_weight_query->row['weight'], $product_weight_query->row['weight_class_id'], $config_weight_class_id), 2);
                $weight_class = $weight_class_query->row['unit'];
                $aramex_items[] = array(
                    'PackageType' => 'Box',
                    'Quantity' => $order_product['quantity'],
                    'Weight' => array(
                        'Value' => $weight,
                        'Unit' => $weight_unit
                    ),
                    'Comments' => $order_product['name'], //'',
                    'Reference' => ''
                );
                $totalWeight += ($weight * $order_product['quantity']);
                $totalItems += $order_product['quantity'];
            }
            //echo $totalWeight;
            $total = number_format($order_info['total'], 2);

            if (count($product_arr)) {
                $aramex_shipment_description = implode(", ", $product_arr);
            }

            ################## create shipment ###########

            $baseUrl = $this->getWsdlPath();
            //SOAP object
            $soapClient = new SoapClient($baseUrl . '/shipping.wsdl');
            $aramex_errors = false;


            $flag = true;
            $error = "";
            try {

                $aramex_atachments = array();

                $params = array();

                //shipper parameters
                $params['Shipper'] = array(
                    'Reference1' => $reference, //'ref11111',
                    'Reference2' => '',
                    'AccountNumber' => $shipper_account, //'43871',
                    //Party Address
                    'PartyAddress' => array(
                        'Line1' => $shipper_street, //'13 Mecca St',
                        'Line2' => '',
                        'Line3' => '',
                        'City' => $shipper_city, //'Dubai',
                        'StateOrProvinceCode' => $shipper_state, //'',
                        'PostCode' => $shipper_postal,
                        'CountryCode' => $shipper_country, //'AE'
                    ),
                    //Contact Info
                    'Contact' => array(
                        'Department' => '',
                        'PersonName' => $shipper_name, //'Suheir',
                        'Title' => '',
                        'CompanyName' => $shipper_company, //'Aramex',
                        'PhoneNumber1' => $shipper_phone, //'55555555',
                        'PhoneNumber1Ext' => '',
                        'PhoneNumber2' => '',
                        'PhoneNumber2Ext' => '',
                        'FaxNumber' => '',
                        'CellPhone' => $shipper_phone,
                        'EmailAddress' => $shipper_email, //'',
                        'Type' => ''
                    ),
                );

                //consinee parameters
                $params['Consignee'] = array(
                    'Reference1' => $reference, //'',
                    'Reference2' => '',
                    'AccountNumber' => ($aramex_shipment_info_billing_account == 2) ? $aramex_shipment_info_billing_account : '',
                    //Party Address
                    'PartyAddress' => array(
                        'Line1' => $receiver_street, //'15 ABC St',
                        'Line2' => '',
                        'Line3' => '',
                        'City' => $receiver_city, //'Amman',
                        'StateOrProvinceCode' => '',
                        'PostCode' => $receiver_postal,
                        'CountryCode' => $receiver_country, //'JO'
                    ),
                    //Contact Info
                    'Contact' => array(
                        'Department' => '',
                        'PersonName' => $receiver_name, //'Mazen',
                        'Title' => '',
                        'CompanyName' => $receiver_email, //'Aramex',
                        'PhoneNumber1' => $receiver_phone, //'6666666',
                        'PhoneNumber1Ext' => '',
                        'PhoneNumber2' => '',
                        'PhoneNumber2Ext' => '',
                        'FaxNumber' => '',
                        'CellPhone' => $receiver_phone,
                        'EmailAddress' => $receiver_email, //'mazen@aramex.com',
                        'Type' => ''
                    )
                );

                //new

                if ($aramex_shipment_info_billing_account == 3) {
                    $params['ThirdParty'] = array(
                        'Reference1' => $reference, //'ref11111',
                        'Reference2' => '',
                        'AccountNumber' => $shipper_account, //'43871',
                        //Party Address
                        'PartyAddress' => array(
                            'Line1' => $shipper_street, //'13 Mecca St',
                            'Line2' => '',
                            'Line3' => '',
                            'City' => $shipper_city, //'Dubai',
                            'StateOrProvinceCode' => $shipper_state, //'',
                            'PostCode' => $shipper_postal,
                            'CountryCode' => $shipper_country, //'AE'
                        ),
                        //Contact Info
                        'Contact' => array(
                            'Department' => '',
                            'PersonName' => $shipper_name, //'Suheir',
                            'Title' => '',
                            'CompanyName' => $shipper_company, //'Aramex',
                            'PhoneNumber1' => $shipper_phone, //'55555555',
                            'PhoneNumber1Ext' => '',
                            'PhoneNumber2' => '',
                            'PhoneNumber2Ext' => '',
                            'FaxNumber' => '',
                            'CellPhone' => $shipper_phone,
                            'EmailAddress' => $shipper_email, //'',
                            'Type' => ''
                        ),
                    );
                }

                // Other Main Shipment Parameters
                $params['Reference1'] = $reference; //'Shpt0001';
                $params['Reference2'] = '';
                $params['Reference3'] = '';
                $params['ForeignHAWB'] = $foreignhawb;

                $params['TransportType'] = 0;
                $params['ShippingDateTime'] = time(); //date('m/d/Y g:i:sA');
                $params['DueDate'] = time() + (7 * 24 * 60 * 60); //date('m/d/Y g:i:sA');
                $params['PickupLocation'] = 'Reception';
                $params['PickupGUID'] = '';
                $params['Comments'] = $info_comment;
                $params['AccountingInstrcutions'] = '';
                $params['OperationsInstructions'] = '';
                $params['Details'] = array(
                    'Dimensions' => array(
                        'Length' => '0',
                        'Width' => '0',
                        'Height' => '0',
                        'Unit' => 'cm'
                    ),
                    'ActualWeight' => array(
                        'Value' => $totalWeight,
                        'Unit' => $weight_unit
                    ),
                    'ProductGroup' => $product_group, //'EXP',
                    'ProductType' => $product_type, //,'PDX'
                    'PaymentType' => $payment_type,
                    'PaymentOptions' => $payment_option, //$post['aramex_shipment_info_payment_option']
                    'Services' => $services,
                    'NumberOfPieces' => $totalItems,
                    'DescriptionOfGoods' => $aramex_shipment_description,
                    'GoodsOriginCountry' => $shipper_country, //'JO',
                    'Items' => $aramex_items,
                );
                if (count($aramex_atachments)) {
                    $params['Attachments'] = $aramex_atachments;
                }

                $params['Details']['CashOnDeliveryAmount'] = array(
                    'Value' => $cod_amount,
                    'CurrencyCode' => $currency_code
                );

                $params['Details']['CustomsValueAmount'] = array(
                    'Value' => $custom_amount,
                    'CurrencyCode' => $currency_code
                );

                $major_par['Shipments'][] = $params;
                $clientInfo = $this->getClientInfo();
                $major_par['ClientInfo'] = $clientInfo;


                $report_id = ($this->config->get('aramex_report_id')) ? $this->config->get('aramex_report_id') : '9729';

                $major_par['LabelInfo'] = array(
                    'ReportID' => $report_id, //'9201',
                    'ReportType' => 'URL'
                );

                try {
                    //create shipment call
                    $auth_call = $soapClient->CreateShipments($major_par);
                    //print_r($auth_call);
                    if ($auth_call->HasErrors) {
                        if (empty($auth_call->Shipments)) {
                            if (count($auth_call->Notifications->Notification) > 1) {
                                foreach ($auth_call->Notifications->Notification as $notify_error) {

                                    $textmessage = 'Aramex: ' . $notify_error->Code . ' - ' . $notify_error->Message;
                                    $this->createShipmentFail($order_id, $textmessage);
                                }
                            } else {
                                $textmessage = 'Aramex: ' . $auth_call->Notifications->Notification->Code . ' - ' . $auth_call->Notifications->Notification->Message;
                                $this->createShipmentFail($order_id, $textmessage);
                            }
                        } else {
                            if (count($auth_call->Shipments->ProcessedShipment->Notifications->Notification) > 1) {
                                $notification_string = '';
                                foreach ($auth_call->Shipments->ProcessedShipment->Notifications->Notification as $notification_error) {
                                    $notification_string .= $notification_error->Code . ' - ' . $notification_error->Message . ' <br />';
                                }
                                $textmessage = $notification_string;
                                $this->createShipmentFail($order_id, $textmessage);
                            } else {
                                $textmessage = 'Aramex: ' . $auth_call->Shipments->ProcessedShipment->Notifications->Notification->Code . ' - ' . $auth_call->Shipments->ProcessedShipment->Notifications->Notification->Message;
                                $this->createShipmentFail($order_id, $textmessage);
                            }
                        }
                    } else {
                        $shipmenthistory = "AWB No. " . $auth_call->Shipments->ProcessedShipment->ID . " - Order No. " . $auth_call->Shipments->ProcessedShipment->Reference1;
                        $is_email = 1;
                        $message = array(
                            'notify' => $is_email,
                            'comment' => $shipmenthistory
                        );
                        $this->addOrderHistory($order_id, $message);
                        //change status
                        $order_status = 2; //Processing
                        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int) $order_status . "', date_modified = NOW() WHERE order_id = '" . (int) $order_id . "'");
                    }
                } catch (Exception $e) {
                    $aramex_errors = true;
                    $textmessage = $e->getMessage();
                    $this->createShipmentFail($order_id, $textmessage);
                }
            } catch (Exception $e) {
                $textmessage = $e->getMessage();
                $this->createShipmentFail($order_id, $textmessage);
            }
        }
    }

    /// add to order history

    public function getOrderStatusId($order_id) {
        $query = $this->db->query("SELECT order_status_id FROM " . DB_PREFIX . "order WHERE order_id =" . (int) $order_id);
        return $query->row['order_status_id'];
    }

    public function addOrderHistory($order_id, $data) {

        $this->load->model('checkout/order');
        $order_status_id = $this->getOrderStatusId($order_id);

        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int) $order_status_id . "', date_modified = NOW() WHERE order_id = '" . (int) $order_id . "'");

        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int) $order_id . "', order_status_id = '" . (int) $order_status_id . "', notify = '" . (isset($data['notify']) ? (int) $data['notify'] : 0) . "', comment = '" . $this->db->escape(strip_tags($data['comment'])) . "', date_added = NOW()");

        $order_info = $this->model_checkout_order->getOrder($order_id);



        if ($data['notify']) {

            $subject = sprintf('%s - Order Update %s', $order_info['store_name'], $order_id);

            $message = 'Order ID:' . $order_id . "\n";
            $message .= 'Date Ordered:' . date("Y-m-d", strtotime($order_info['date_added'])) . "\n\n";

            $order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int) $order_status_id . "' AND language_id = '" . (int) $order_info['language_id'] . "'");

            if ($order_status_query->num_rows) {
                $message .= 'Your order has been updated to the following status:' . "\n";
                $message .=  "Processing \n\n";
            }

            if ($order_info['customer_id']) {
                $message .= 'To view your order click on the link below:' . "\n";
                $message .= html_entity_decode($order_info['store_url'] . 'index.php?route=account/order/info&order_id=' . $order_id, ENT_QUOTES, 'UTF-8') . "\n\n";
            }

            if ($data['comment']) {
                $message .= 'The comments for your order are:' . "\n\n";
                $message .= strip_tags(html_entity_decode($data['comment'], ENT_QUOTES, 'UTF-8')) . "\n\n";
            }
            $adminemail = $this->config->get('config_email');
            $message .= 'Please reply to this email if you have any questions.';

            $mail = new Mail();
            $mail->protocol = $this->config->get('config_mail_protocol');
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->hostname = $this->config->get('config_smtp_host');
            $mail->username = $this->config->get('config_smtp_username');
            $mail->password = $this->config->get('config_smtp_password');
            $mail->port = $this->config->get('config_smtp_port');
            $mail->timeout = $this->config->get('config_smtp_timeout');
            $mail->setTo($order_info['email'] . ',' . $adminemail);
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender($order_info['store_name']);
            $mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
            $mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
            $mail->send();
        }
    }

    ///////////////////////// order history end ////////////////////////////

    public function createShipmentFail($order_id, $textmessage) {
        $this->load->model('checkout/order');
        $order_info = $this->model_checkout_order->getOrder($order_id);
        $subject = sprintf('%s - auto create shipment %s', $order_info['store_name'], $order_id);
        $message = 'Order ID:' . $order_id . "\n";
        $message .= 'Date shipment created:' . date("Y-m-d", strtotime($order_info['date_added'])) . "\n\n";
        $message = 'While creating the shipment we have found below issue:' . "\n\n";
        $message .= $textmessage . "\n\n";

        $order_info = $this->model_checkout_order->getOrder($order_id);
        $adminemail = $this->config->get('config_email');
        $mail = new Mail();
        $mail->protocol = $this->config->get('config_mail_protocol');
        $mail->parameter = $this->config->get('config_mail_parameter');
        $mail->hostname = $this->config->get('config_smtp_host');
        $mail->username = $this->config->get('config_smtp_username');
        $mail->password = $this->config->get('config_smtp_password');
        $mail->port = $this->config->get('config_smtp_port');
        $mail->timeout = $this->config->get('config_smtp_timeout');
        $mail->setTo($adminemail);
        $mail->setFrom($this->config->get('config_email'));
        $mail->setSender($order_info['store_name']);
        $mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
        $mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
        $mail->send();
    }

    public function getAWB($order_id) {
        $query = $this->db->query("SELECT oh.date_added, os.name AS status, oh.comment, oh.notify FROM " . DB_PREFIX . "order_history oh LEFT JOIN " . DB_PREFIX . "order_status os ON oh.order_status_id = os.order_status_id WHERE oh.comment LIKE '%Order No%' AND oh.order_id = '" . (int) $order_id . "' AND os.language_id = '" . (int) $this->config->get('config_language_id') . "' ORDER BY oh.date_added ASC");
        $shipments = $query->rows;
        if ($shipments) {
            foreach ($shipments as $key => $comment) {
                $cmnt_txt = ($comment['comment']) ? $comment['comment'] : '';
                if (version_compare(PHP_VERSION, '5.3.0') <= 0) {
                    $awbno = substr($cmnt_txt, 0, strpos($cmnt_txt, "- Order No"));
                } else {
                    $awbno = strstr($cmnt_txt, "- Order No", true);
                }
                $awbno = trim($awbno, "AWB No.");
                break;
            }

            return $awbno;
        } else {
            return 0;
        }
    }

    public function checkAWB($order_id) {
        $query = $this->db->query("SELECT oh.date_added, os.name AS status, oh.comment, oh.notify FROM " . DB_PREFIX . "order_history oh LEFT JOIN " . DB_PREFIX . "order_status os ON oh.order_status_id = os.order_status_id WHERE oh.comment LIKE '%Order No%' AND oh.order_id = '" . (int) $order_id . "' AND os.language_id = '" . (int) $this->config->get('config_language_id') . "' ORDER BY oh.date_added ASC");
        $shipments = $query->rows;
        if ($shipments) {
            return 1;
        } else {
            return 0;
        }
    }

}

?>