<?php
class ModelMomdayMomday extends Model{
    public function install(){
        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_product_to_charity` (
			  `product_id` INT(11) NOT NULL,
			  `charity_id` INT(11) NOT NULL,
			  PRIMARY KEY (`product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_customerseller_to_product` (
			  `product_id` INT(11) NOT NULL,
			  `customer_id` INT(11) NOT NULL,
			  `date_added` INT(11) NOT NULL,
			  `date_modified` INT(11),
			  `date_approved` INT(11),
			  `date_expire` INT(11),
			  `tracking` VARCHAR(256),
			  `remarks` VARCHAR(3000),
			  `status` ENUM('active','pending','inactive','sold','deleted', 'rejected') DEFAULT 'pending',
			  `address` VARCHAR(3000),
			  `video` VARCHAR(256),
			  PRIMARY KEY (`product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_celebrity` (
			  `celebrity_id` INT(11) AUTO_INCREMENT,
			  `square_image` varchar(255),
			  `portrait_image` varchar(255),
			  `status` TINYINT(1) DEFAULT 1,
			  PRIMARY KEY (`celebrity_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_celebrity_details` (
			  `celebrity_id` INT(11) NOT NULL,
			  `language_id` INT(11) NOT NULL,
			  `first_name` VARCHAR(32) NOT NULL,
			  `last_name` VARCHAR(32) NOT NULL,
			  `bio` VARCHAR(3000) NOT NULL,
			  PRIMARY KEY (`celebrity_id`, `language_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_celebrity_shop` (
			  `celebrity_id` INT(11) NOT NULL,
			  `product_id` INT(11) NOT NULL,
			  PRIMARY KEY (`celebrity_id`, `product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_blogpost_to_image` (
			  `post_id` INT(11) NOT NULL,
			  `image_name` VARCHAR(256) NOT NULL,
			  `image_size` INT(11) NOT NULL,
			  `image_activated` TINYINT(1) NOT NULL,
			  `timestamp` INT(13) NOT NULL,
			  PRIMARY KEY (`post_id`, `image_name`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        //blog_type = 1 momsay blog_type = 2 activities
        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_blogpost_to_blog_type` (
			  `post_id` INT(11) NOT NULL,
			  `blog_type` INT(11) NOT NULL,
			  PRIMARY KEY (`post_id`, `blog_type`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_momsay_author_details` (
			  `author_id` INT(11) NOT NULL,
			  `full_name` VARCHAR(256),
			  `bio` VARCHAR(3000),
			  `image_name` VARCHAR(256),
			  `author_activated` TINYINT(1) NOT NULL,
			  `timestamp` INT(13) NOT NULL,
			  PRIMARY KEY (`author_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_blogauthor_temp_images` (
			  `image_name` VARCHAR(256) NOT NULL,
			  `image_size` INT(11) NOT NULL,
			  `timestamp` INT(13) NOT NULL
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_blogpost_to_author` (
			  `post_id` INT(11) NOT NULL,
			  `author_id` INT(11) NOT NULL,
			  PRIMARY KEY (`post_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_blogpost_user_like` (
			  `post_id` INT(11) NOT NULL,
			  `user_id` INT(11) NOT NULL,
			  PRIMARY KEY (`post_id`, `user_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_activity_host_details` (
			  `post_id` INT(11) NOT NULL,
			  `location` VARCHAR(256),
			  `phone` VARCHAR(256),
			  `email` VARCHAR(256),
			  `website` VARCHAR(256),
			  PRIMARY KEY (`post_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_celebrity_temp_images` (
			  `image_name` VARCHAR(256) NOT NULL,
			  `image_size` INT(11) NOT NULL,
			  `timestamp` INT(13) NOT NULL
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_charity` (
			  `charity_id` INT(11) AUTO_INCREMENT,
			  `location` VARCHAR(256),
			  `phone` VARCHAR(256),
			  `email` VARCHAR(256),
			  `website` VARCHAR(256),
			  PRIMARY KEY (`charity_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_charity_details` (
			  `charity_id` INT(11) NOT NULL,
			  `language_id` INT(11) NOT NULL,
			  `name` VARCHAR(512),
			  PRIMARY KEY (`charity_id`,`language_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_customerseller_temp_images` (
			  `image_name` VARCHAR(256) NOT NULL,
			  `image_size` INT(11) NOT NULL,
			  `timestamp` INT(13) NOT NULL
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "momday_cart_from_celebrity` (
			  `customer_id` INT(11) NOT NULL,
			  `celebrity_id` INT(11) NOT NULL,
			  `product_id` INT(11) NOT NULL,
			  `quantity` INT(4),
			  `timestamp` INT(13),
			  PRIMARY KEY (`customer_id`,`celebrity_id`,`product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->load->model("setting/event");
        $this->model_setting_event->addEvent("notify_wishlist_back_in_stock", "admin/model/catalog/product/editProduct/before", "momday/notifications/notifyBackInStock");
    }

    public function uninstall() {
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_product_to_charity`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_customerseller_to_product`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_celebrity`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_celebrity_details`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_celebrity_shop`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_blogpost_to_image`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_blogpost_to_blog_type`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_blogpost_user_like`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_blogpost_to_author`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_momsay_author_details`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_blogauthor_temp_images`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_celebrity_temp_images`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_charity`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_charity_details`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_customerseller_temp_images`;");
//        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "momday_cart_from_celebrity`;");

//        $this->model_setting_event->deleteEventByCode("notify_wishlist_back_in_stock");
    }

}