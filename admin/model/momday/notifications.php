<?php
class ModelMomdayNotifications extends Model
{
    public function getProductQuantity($product_id) {
        $query = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id='" . (int)$product_id ."'");
        return $query->row;
    }

    public function getProductWishlistUsers($product_id) {
        $query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer_wishlist WHERE product_id='" . (int)$product_id ."'");
        return $query->rows;
    }

    public function getCustomerEmail($customer_id) {
        $query = $this->db->query("SELECT email FROM " . DB_PREFIX . "customer WHERE customer_id='" . (int)$customer_id ."'");
        return $query->row;
    }
}