<?php
class ModelMomdayCelebrities extends Model
{
    public function addProductToCelebrityStore($celebrity_id, $product_id){
        // insert if entry not already present
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_celebrity_shop  (`celebrity_id`, `product_id`)
        SELECT * FROM (SELECT " . (int)($celebrity_id) .", " .  (int)($product_id) . ") AS tmp
        WHERE NOT EXISTS (
            SELECT `celebrity_id`, `product_id` FROM `" . DB_PREFIX . "momday_celebrity_shop` WHERE `celebrity_id` = " . (int)($celebrity_id) . " AND `product_id` = " .  (int)($product_id) . ") LIMIT 1;");
    }

    public function removeProductFromCelebrityStore($celebrity_id, $product_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "momday_celebrity_shop  WHERE product_id = '" . (int)($product_id) . "' AND celebrity_id = '" . (int)($celebrity_id) . "'");
    }

    public function getCelebrities($first_char = NULL)
    {
        $language_id = (int)$this->config->get('config_language_id');

        $sql_where = "";

        if(!is_null($first_char) or $first_char == ""){
            $sql_where .= "mcd.first_name LIKE '" . $this->db->escape($first_char) . "%' AND ";
        }

        $sql = "SELECT mcd.celebrity_id, mcd.first_name, mcd.last_name, mc.square_image, mc.portrait_image from " . DB_PREFIX . "momday_celebrity_details mcd
        LEFT JOIN " . DB_PREFIX ."momday_celebrity mc ON (mcd.celebrity_id = mc.celebrity_id) 
        WHERE " . $sql_where . "mcd.language_id = " . $language_id . " AND mc.status=1 ORDER BY mcd.first_name";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getCelebritiesByNames($names = Array())
    {
        $language_id = (int)$this->config->get('config_language_id');

        $sql_in = "";

        $len = count($names);
        $i = 0;
        foreach ($names as $name){
            if($i == $len-1){
                //last element
                $sql_in .= "'" . $this->db->escape($name) . "'";
            }else{
                $sql_in .= "'" . $this->db->escape($name) . "',";
            }
            $i++;
        }

        if($sql_in == ""){
            $sql_in = "''";
        };

        $sql = "SELECT mcd.celebrity_id, mcd.first_name, mcd.last_name, mc.square_image from " . DB_PREFIX . "momday_celebrity_details mcd
        LEFT JOIN " . DB_PREFIX ."momday_celebrity mc ON (mcd.celebrity_id = mc.celebrity_id) 
        WHERE (mcd.first_name in (" . $sql_in . ") or mcd.last_name in (" . $sql_in . ")) and mcd.language_id = " . $language_id . " AND mc.status=1 ORDER BY mcd.first_name";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function checkIsCelebrity($celebrity_id)
    {
        $sql = "SELECT COUNT(*) as total FROM " . DB_PREFIX . "momday_celebrity  
            WHERE celebrity_id = " . (int)$celebrity_id . " AND status='1'";

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function check_product_exists($product_id)
    {
        $sql = "SELECT COUNT(*) as total FROM " . DB_PREFIX . "product  
            WHERE product_id = " . (int)$product_id;

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function getCelebrityProductIds($celebrity_id)
    {
        $sql = "SELECT product_id FROM " . DB_PREFIX . "momday_celebrity_shop  
            WHERE celebrity_id = " . (int)$celebrity_id;

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getCelebrityDetails($celebrity_id)
    {
        $language_id = (int)$this->config->get('config_language_id');

        $sql = "SELECT first_name, last_name, bio from " . DB_PREFIX . "momday_celebrity_details  
            WHERE celebrity_id = " . (int)$celebrity_id . " AND language_id = " . $language_id;

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getCelebrityCategories($celebrity_id)
    {
        $language_id = (int)$this->config->get('config_language_id');

        $sql = "SELECT mcd.celebrity_id, mcd.first_name, mcd.last_name, mcd.bio, mc.portrait_image from " . DB_PREFIX . "momday_celebrity_details mcd
        LEFT JOIN " . DB_PREFIX ."momday_celebrity mc ON (mcd.celebrity_id = mc.celebrity_id) 
        WHERE mcd.language_id = " . $language_id . " AND mcd.celebrity_id = " . (int)$celebrity_id;

        $query = $this->db->query($sql);
        $result = $query->row;

        $sql = "SELECT ptc.category_id from " . DB_PREFIX . "momday_celebrity_shop mcs
        LEFT JOIN " . DB_PREFIX ."product_to_category ptc ON (mcs.product_id = ptc.product_id) 
        WHERE mcs.celebrity_id = " . (int)$celebrity_id;

        $query = $this->db->query($sql);
        $result_categories = array();
        foreach ($query->rows as $category){
            $result_categories[$category['category_id']] = 1;
        }
        $result['categories'] = $result_categories;

        return $result;
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

    public function populateCelebrity(){
        // check for available customer ids and images
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity` VALUES (2, 'image/momday/2.jpg', 'image/momday/2_cropped.jpg',1)");
        // language id 1 eng 2 ar
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (2, 1, 'Nancy' , 'Ajram' , 'Nancy Ajram started singing children songs when her children were born.')");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (2, 2, 'نانسي' , 'عجرم' , 'نانسي عجرم تغني أغاني أطفال ')");
//        // assign product id 28 35 40 48 to celebrity
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (2, 28)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (2, 35)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (2, 40)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (2, 48)");

        // check for available customer ids and images
        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity` VALUES (3, 'image/momday/3.jpg', 'image/momday/3_cropped.jpg',1)");
        // language id 1 eng 2 ar
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (3, 1, 'Najwa' , 'Karam' , 'I am not sure if Najwa Karam has kids.')");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (3, 2, 'نجوى' , 'كرم' , 'لست متأكدا إن كان لنجوى كرم أي أولاد  ')");
//        // assign product id 28 35 40 48 to celebrity
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (3, 29)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (3, 30)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (3, 31)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_shop` VALUES (3, 49)");

    }

    public function populateCelebrity2(){

        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity` VALUES (4, 'image/momday/4.jpg', 'image/momday/4_cropped.jpg',1)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (4, 1, 'Nawal' , 'Zoghbi' , 'I am not sure if Nawal Zoghbi has kids.')");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (4, 2, 'نوال' , 'زغبي' , 'لست متأكدا إن كان لنوال زغبي أي أولاد  ')");

        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity` VALUES (5, 'image/momday/5.jpg', 'image/momday/5_cropped.jpg',1)");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (5, 1, 'Myriam' , 'Fares' , 'I am not sure if Myriam Fares has kids.')");
//        $this->db->query("INSERT INTO `" . DB_PREFIX . "momday_celebrity_details` VALUES (5, 2, 'ميريام' , 'فارس' , 'لست متأكدا إن كان لميريام فارس أي أولاد  ')");
    }
}