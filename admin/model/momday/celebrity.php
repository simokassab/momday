<?php
class ModelMomdayCelebrity extends Model{
    public function getAllCelebrities($language_id)
    {
        $sql = "SELECT mcd.celebrity_id, mcd.first_name, mcd.last_name, mcd.bio, mc.status from " . DB_PREFIX . "momday_celebrity_details mcd
        LEFT JOIN " . DB_PREFIX ."momday_celebrity mc ON (mcd.celebrity_id = mc.celebrity_id) 
        WHERE mcd.language_id = " . $language_id . " ORDER BY mcd.first_name";

        $query = $this->db->query($sql);
        return $query->rows;
    }


    public function getCelebrityDetails($celebrity_id) {
        $celebrity_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "momday_celebrity_details mcd WHERE celebrity_id = '" . (int)$celebrity_id . "'");

        foreach ($query->rows as $result) {
            $celebrity_data[$result['language_id']] = array(
                'first_name'        => $result['first_name'],
                'last_name' => $result['last_name'],
                'bio' => $result['bio']
            );
        }

        return $celebrity_data;
    }

    public function addCelebrityWithDetails($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "momday_celebrity SET celebrity_id = '" . (int)$data['celebrity_id'] . "', square_image = '" . $this->db->escape($data['square_image']) . "', portrait_image = '" . $this->db->escape($data['portrait_image']) . "', status = '" . (int)$data['status'] . "'");

        foreach ($data['celebrity_details'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "momday_celebrity_details SET celebrity_id = '" . (int)$data['celebrity_id'] . "', language_id = '" . (int)$language_id . "', first_name = '" . $this->db->escape($value['first_name']) . "', last_name = '" . $this->db->escape($value['last_name']) . "', bio = '" . $this->db->escape($value['bio']) . "'");
        }
    }

    public function editCelebrityWithDetails($data) {
        $this->db->query("UPDATE " . DB_PREFIX . "momday_celebrity SET square_image = '" . $this->db->escape($data['square_image']) . "', portrait_image = '" . $this->db->escape($data['portrait_image']) . "', status = '" . (int)$data['status'] . "' WHERE celebrity_id = '" . (int)$data['celebrity_id'] . "'");

        foreach ($data['celebrity_details'] as $language_id => $value) {
            $this->db->query("UPDATE " . DB_PREFIX . "momday_celebrity_details SET first_name = '" . $this->db->escape($value['first_name']) . "', last_name = '" . $this->db->escape($value['last_name']) . "', bio = '" . $this->db->escape($value['bio']) . "' WHERE celebrity_id = '" . (int)$data['celebrity_id'] . "' AND language_id = '" . (int)$language_id . "'");
        }
    }


    public function addCelebrityTempImage($image_name, $image_size, $timestamp)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_celebrity_temp_images  (`image_name`, `image_size`, `timestamp`) VALUES('"  . $this->db->escape($image_name) . "','". $this->db->escape($image_size)  . "','". $this->db->escape($timestamp) . "')");

    }
    public function removeCelebrityTempImage($image_name)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_celebrity_temp_images WHERE image_name='" . $this->db->escape($image_name) . "'"
        );
    }


    public function getCelebritySquareImage($celebrity_id)
    {
        $query = $this->db->query(
            "SELECT square_image FROM " . DB_PREFIX . "momday_celebrity WHERE celebrity_id=" . $celebrity_id
        );
        $result = $query->rows;

        if(sizeof($result)>0){
            if(array_key_exists('square_image', $result[0])){
                return $result[0]['square_image'];
            }
        }
        return "";
    }
    public function getCelebrityPortraitImage($celebrity_id)
    {
        $query = $this->db->query(
            "SELECT portrait_image FROM " . DB_PREFIX . "momday_celebrity WHERE celebrity_id=" . $celebrity_id
        );
        $result = $query->rows;

        if(sizeof($result)>0){
            if(array_key_exists('portrait_image', $result[0])){
                return $result[0]['portrait_image'];
            }
        }
        return Null;
    }
    public function getCelebrityImages($celebrity_id)
    {
        $query = $this->db->query(
            "SELECT square_image, portrait_image FROM " . DB_PREFIX . "momday_celebrity WHERE celebrity_id=" . $celebrity_id
        );
        return $query->rows;
    }
    public function getCelebrityInformation($celebrity_id)
    {
        $query = $this->db->query(
            "SELECT celebrity_id, square_image, portrait_image, status FROM " . DB_PREFIX . "momday_celebrity WHERE celebrity_id=" . $celebrity_id
        );
        return $query->rows;
    }

    public function updateCelebrityStatus($post_data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "momday_celebrity  SET status =  " . (int)($post_data['status']) . " WHERE celebrity_id = " . $post_data['celebrity_id']);
    }


    public function removeCelebrityAndDetails($celebrity_id)
    {
        $this->db->query(
            "DELETE mc, mcd FROM " . DB_PREFIX . "momday_celebrity mc JOIN " . DB_PREFIX . "momday_celebrity_details mcd ON mc.celebrity_id = mcd.celebrity_id WHERE mc.celebrity_id= " . (int)($celebrity_id)
        );
    }

    public function checkCelebrityExists($celebrity_id)
    {
        $query = $this->db->query("SELECT celebrity_id FROM " . DB_PREFIX . "momday_celebrity  WHERE `celebrity_id` = " . (int)($celebrity_id));
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }

    //===========================Customer Queries============================================

    public function getCustomerEmail($customer_id)
    {
        $query = $this->db->query("SELECT email FROM " . DB_PREFIX . "customer  WHERE `customer_id` = " . (int)($customer_id));
        return $query->rows;
    }
    public function getCelebrityAccountDetails($customer_id)
    {
        $query = $this->db->query("SELECT customer_id, firstname, lastname, email, telephone FROM " . DB_PREFIX . "customer  WHERE `customer_id` = " . (int)($customer_id));
        return $query->rows;
    }

    public function editCustomer($customer_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', telephone = '" . $this->db->escape($data['telephone']) . "' WHERE customer_id = '" . (int)$customer_id . "'");

        if ($data['password']) {
            $this->db->query("UPDATE " . DB_PREFIX . "customer SET salt = '" . $this->db->escape($salt = token(9)) . "', password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1($data['password'])))) . "' WHERE customer_id = '" . (int)$customer_id . "'");
        }
    }
}