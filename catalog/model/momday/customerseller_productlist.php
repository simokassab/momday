<?php
class ModelMomdayCustomersellerProductlist extends Model
{
    public function addCustomersellerProduct($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "momday_customerseller_to_product SET product_id = '" . $this->db->escape($data['product_id']) . "', customer_id = '" . $this->db->escape($data['customer_id']) . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = '" . $this->db->escape($data['date_modified']) . "', status = '" . $this->db->escape($data['status']) . "', address = '" . $this->db->escape($data['address']) . "', video = '" . $this->db->escape($data['video']) . "'");
    }

    public function editCustomersellerProduct($data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "momday_customerseller_to_product SET date_modified = '" . $this->db->escape($data['date_modified']) . "', status = '" . $this->db->escape($data['status']) . "', address = '" . $this->db->escape($data['address']) . "', video = '" . $this->db->escape($data['video']) . "' WHERE product_id = '" . $this->db->escape($data['product_id']) . "'");
    }
//
//    public function deactivateCustomersellerProduct($data)
//    {
//        $this->db->query("UPDATE " . DB_PREFIX . "momday_customerseller_to_product SET ', date_modified = '" . $this->db->escape($data['date_modified']) . "', status = '" . $this->db->escape($data['status']) . "' WHERE product_id = '" . $this->db->escape($data['product_id']) . "'");
//    }
//
//    public function deleteCustomersellerProduct($data)
//    {
//        $this->db->query("DELETE FROM " . DB_PREFIX . "momday_customerseller_to_product  WHERE product_id = '" . $this->db->escape($data['product_id']) . "'");
//    }

    public function getProductsCustomerseller($data = array(), $customer_id)
    {
        $language_id = (int)$this->config->get('config_language_id');

        if (in_array($data['product_status'], ['pending','inactive','rejected','sold'])){
            $status = $data['product_status'];
        }else{
            $status = 'active';
        }

        $sql = "SELECT pd.name, mctp.*,p.image, p.price, p.status from " . DB_PREFIX . "momday_customerseller_to_product mctp 
        LEFT JOIN " . DB_PREFIX ."product p ON (p.product_id = mctp.product_id) 
        LEFT JOIN " . DB_PREFIX ."product_description pd ON (pd.product_id = mctp.product_id) 
        WHERE mctp.customer_id = " . $customer_id ."  AND pd.language_id = " . $language_id . " AND mctp.status = '" . $status . "'";

        if (isset($data['filter_name']) AND !empty($data['filter_name'])) {
            $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (isset($data['filter_modified']) AND !empty($data['filter_modified'])) {
            $sql .= " AND FROM_UNIXTIME(mctp.date_modified,\"%Y-%m-%d\") LIKE '" . $this->db->escape($data['filter_modified']) . "%'";
        }

        if (isset($data['filter_expire']) AND !empty($data['filter_expire'])) {
            $sql .= " AND FROM_UNIXTIME(mctp.date_expire,\"%Y-%m-%d\") LIKE '" . $this->db->escape($data['filter_expire']) . "%'";
        }

        if (isset($data['filter_price']) AND $data['filter_price_set']) {
            $sql .= " AND p.price = '" . $this->db->escape($data['filter_price']) . "'";
        }

        $sort_data = array(
            'name' => 'pd.name',
            'modified' => 'mctp.date_modified',
            'expire'=> 'mctp.date_expire',
            'price' => 'p.price'
        );

        if (isset($data['sort']) && array_key_exists($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $sort_data[$data['sort']];
        } else {
            $sql .= " ORDER BY pd.name";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getProductTotalCustomerseller($data, $customer_id)
    {
        $language_id = (int)$this->config->get('config_language_id');

        if (in_array($data['product_status'], ['pending','inactive','rejected','sold'])){
            $status = $data['product_status'];
        }else{
            $status = 'active';
        }

        $sql = "SELECT COUNT(*) FROM " . DB_PREFIX . "momday_customerseller_to_product mctp 
        LEFT JOIN " . DB_PREFIX ."product p ON (p.product_id = mctp.product_id) 
        LEFT JOIN " . DB_PREFIX ."product_description pd ON (pd.product_id = mctp.product_id) 
        WHERE mctp.customer_id = " . $customer_id ."  AND pd.language_id = " . $language_id . " AND mctp.status = '" . $status . "'";


        if (isset($data['filter_name']) AND !empty($data['filter_name'])) {
            $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (isset($data['filter_modified']) AND !empty($data['filter_modified'])) {
            $sql .= " AND FROM_UNIXTIME(mctp.date_modified,\"%Y-%m-%d\") LIKE '" . $this->db->escape($data['filter_modified']) . "%'";
        }

        if (isset($data['filter_expire']) AND !empty($data['filter_expire'])) {
            $sql .= " AND FROM_UNIXTIME(mctp.date_expire,\"%Y-%m-%d\") LIKE '" . $this->db->escape($data['filter_expire']) . "%'";
        }

        if (isset($data['filter_price']) AND !empty($data['filter_price'])) {
            $sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
        }

        $query = $this->db->query($sql);

        return $query->rows[0]['COUNT(*)'];
    }

    public function checkCustomersellerProductAccess($product_id) {
        $sql = $this->db->query("SELECT mctp.customer_id FROM ".DB_PREFIX ."momday_customerseller_to_product mctp LEFT JOIN ".DB_PREFIX ."product p ON (mctp.product_id = p.product_id) WHERE p.product_id = '".(int)$product_id."'");

        if($sql->row){
            if($sql->row['customer_id'] == (int)$this->customer->getId())
                return true;
            else
                return false;
        }else{
            return false;
        }
    }

    public function getCustomersellerProductVideo($product_id) {
        $query = $this->db->query("SELECT video FROM ".DB_PREFIX ."momday_customerseller_to_product mctp WHERE product_id = '".(int)$product_id."'");
        return $query->row;
    }

    public function deleteCustomersellerProduct($product_id) {

        if($this->checkCustomersellerProductAccess($product_id)){

            $this->db->query("DELETE FROM " . DB_PREFIX . "momday_customerseller_to_product WHERE product_id = '" . (int)$product_id . "'");

            $this->db->query("DELETE FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_filter WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_option WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_option_value WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE related_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_download WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "review WHERE product_id = '" . (int)$product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . (int)$product_id. "'");
        }

    }

    public function deactivateCustomersellerProduct($product_id) {

        if($this->checkCustomersellerProductAccess($product_id)){
            $this->db->query("UPDATE " . DB_PREFIX . "momday_customerseller_to_product SET status = 'inactive' WHERE product_id = '" . (int)$product_id . "'");
        }

    }

    public function getCustomersellerProductlistApi($customer_id, $language_id, $data){

        $where_status = '';
        if(isset($data['status'])){
            $where_status = " AND mctp.status = '" . $this->db->escape($data['status']) . "'";
        }

        $sql = "SELECT mctp.product_id, mctp.status as preloved_status, mctp.date_expire, pd.name, p.manufacturer_id, p.price, p.image, mptc.charity_id 
        FROM " . DB_PREFIX . "momday_customerseller_to_product mctp
        LEFT JOIN ".DB_PREFIX ."product_description pd ON (mctp.product_id = pd.product_id)
        LEFT JOIN ".DB_PREFIX ."product p ON (mctp.product_id = p.product_id)
        LEFT JOIN ".DB_PREFIX ."momday_product_to_charity mptc ON (mctp.product_id = mptc.product_id)
        WHERE mctp.customer_id = " . (int)$customer_id . " AND pd.language_id=" . (int)$language_id . $where_status;

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function populateCustomerseller(){
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (82, 2," . time() . ", " . time() .", NULL, NULL, NULL, 'This product has many remarks that need to be discussed. We will talk about them later.', 'pending')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (83, 2," . (time()+1) . ", " . time() .", NULL, NULL, NULL, NULL, 'pending')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (84, 2," . (time()+2) . ", " . time() .", NULL, NULL, NULL, NULL, 'pending')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (85, 2," . (time()+3) . ", " . time() .", NULL, NULL, NULL, NULL, 'pending')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (86, 2," . (time()+4) . ", " . time() .", NULL, NULL, NULL, NULL, 'pending')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (87, 2," . (time()+5) . ", " . time() .", NULL, NULL, NULL, NULL, 'pending')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (88, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'pending')");
    }
    public function populateCustomerseller2(){
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (89, 2," . time() . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (90, 2," . (time()+1) . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (91, 2," . (time()+2) . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (92, 2," . (time()+3) . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (93, 2," . (time()+4) . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (94, 2," . (time()+5) . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (57, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'active')");
    }
    public function populateCustomerseller3(){
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (34, 2," . time() . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (35, 2," . (time()+1) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (36, 2," . (time()+2) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (37, 2," . (time()+3) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (38, 2," . (time()+4) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (39, 2," . (time()+5) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (40, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (41, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (42, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (43, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (44, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (45, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (46, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (47, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_customerseller_to_product` VALUES (48, 2," . (time()+6) . ", " . time() .", NULL, NULL, NULL, NULL, 'inactive')");
    }
}