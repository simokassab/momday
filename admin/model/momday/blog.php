<?php
class ModelMomdayBlog extends Model
{

    // ======================= START ADD/ REMOVE IMAGE TO BLOGPOST ============================
    public function addImageToBlogpost($post_id, $image_name, $image_size, $image_activated, $timestamp)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_blogpost_to_image  (`post_id`, `image_name`, `image_size`, `image_activated`, `timestamp`) VALUES(" . (int)$post_id . ",'". $this->db->escape($image_name) . "'," . (int)$image_size . "," . (int)$image_activated . "," . (int)$timestamp . ")");

//        // insert if entry not already present
//        $this->db->query(
//            "INSERT INTO " . DB_PREFIX . "momday_blogpost_to_image  (`post_id`, `image_name`)
//             SELECT * FROM (SELECT " . (int)($post_id) .", '" .  $this->db->escape($image_name) . "') AS tmp
//             WHERE NOT EXISTS (
//                SELECT `post_id`, `image_name` FROM `" . DB_PREFIX . "momday_blogpost_to_image` WHERE `post_id` = " . (int)($post_id) . " AND `image_name` = '" .  $this->db->escape($image_name) . "') LIMIT 1;");
    }
    public function removeImageToBlogpost($post_id, $image_name)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id) ." AND image_name='" .  $this->db->escape($image_name) . "'"
        );
    }
    public function removeAllImageToBlogpost($post_id)
    {   // not needed any more. using instead getAllImageToBlogpost and deleting each image individually
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id));
    }
    public function getInactiveImageToBlogpost($current_timestamp, $max_post_duration)
    {
        $query = $this->db->query(
            "SELECT post_id, image_name FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE image_activated= 0 AND ((" . $current_timestamp . "-`timestamp`" . ")>" . $max_post_duration . ")"
        );
        return $query->rows;
    }
    public function removeInactiveImageToBlogpost($current_timestamp, $max_post_duration)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE image_activated= 0 AND ((" . $current_timestamp . "-`timestamp`" . ")>" . $max_post_duration . ")"
        );
    }
    public function updateImageToBlogpostActivated($post_id, $image_name, $image_activated)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "momday_blogpost_to_image SET image_activated = " . (int)$image_activated . " WHERE post_id= " . (int)($post_id) ." AND image_name='" .  $this->db->escape($image_name) . "'"
        );
    }
    public function checkImageToBlogpost($post_id, $image_name)
    {
        $query = $this->db->query(
            "SELECT post_id, image_name FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id) ." AND image_name='" .  $this->db->escape($image_name) . "'"
        );
        $result= $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    public function getAllImageToBlogpost($post_id)
    {
        $query = $this->db->query("SELECT post_id, image_name, image_size, image_activated FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id));
        return $query->rows;
    }
    public function getAllActiveImageToBlogpost($post_id)
    {
        $query = $this->db->query("SELECT post_id, image_name, image_size, image_activated FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id) ." AND image_activated= 1");
        return $query->rows;
    }
    public function getFeaturedImageToBlogpost($post_id, $featured_image_name)
    { // this function is no longer needed. Featured image will be inserted in db but will never get activated (we will be using the cropped version which is inserted in the table journal2_blog_post)
        $query = $this->db->query("SELECT post_id, image_name, image_size, image_activated FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id) ." AND image_name = '" . $this->db->escape($featured_image_name) . "' AND image_activated= 1");
        return $query->rows;
    }
    public function getNonFeaturedImageToBlogpost($post_id, $featured_image_name)
    { // this function no longer needs to take featured image as param since featured image will be inserted in db but will never get activated (we will be using the cropped version which is inserted in the table journal2_blog_post)
        $query = $this->db->query("SELECT post_id, image_name, image_size, image_activated FROM " . DB_PREFIX . "momday_blogpost_to_image WHERE post_id= " . (int)($post_id) ." AND image_name != '" . $this->db->escape($featured_image_name) . "' AND image_activated= 1");
        return $query->rows;
    }

    // ======================= END ADD/ REMOVE IMAGE TO BLOGPOST ============================

    //get posts where status = 0 or 1. status = 2 means it is a draft post.
    public function getAllBlogPosts($blog_type, $language_id)
    {   //$blog_type: momsay =1, activities = 2

        $sql = "SELECT posts.post_id, posts.views, posts.status, posts.date_created, posts.date_updated, post_desc.name, COALESCE(x.cnt,0) AS comments from " . DB_PREFIX . "journal2_blog_post posts
        LEFT JOIN " . DB_PREFIX ."journal2_blog_post_description post_desc ON (posts.post_id = post_desc.post_id) 
        LEFT JOIN " . DB_PREFIX ."momday_blogpost_to_blog_type post_to_type ON (posts.post_id = post_to_type.post_id) 
        LEFT OUTER JOIN (SELECT post_id, count(*) cnt FROM oc_journal2_blog_comments GROUP BY post_id) x ON posts.post_id = x.post_id
        WHERE post_to_type.blog_type=" . (int)$blog_type . " AND posts.status<2 AND post_desc.language_id=" . (int)$language_id ;

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getMaxBlogId()
    {
        $sql = "SELECT max(post_id) as post_id from " . DB_PREFIX . "journal2_blog_post";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    // ======================= START ADD/ REMOVE/ UPDATE/ GET BLOGPOST DATA IN journal2_blog_post ============================

    public function addBlogpost($post_data)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "journal2_blog_post  (`post_id`,`author_id`, `image`, `comments`, `status` , `sort_order`, `date_created`, `date_updated`, `views`)
             VALUES (" . (int)($post_data['post_id']) . "," . (int)($post_data['author_id']). ",'" . $this->db->escape($post_data['image']) . "'," . (int)($post_data['comments']) . "," . (int)($post_data['status'])
            . "," . (int)($post_data['sort_order']) . ",'" . $this->db->escape($post_data['date_created']) . "','" . $this->db->escape($post_data['date_updated']) . "'," . (int)($post_data['views']) .")" );
    }
    public function addPlaceholderBlogpost($post_data)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "journal2_blog_post  (`post_id`,`author_id`, `comments`, `status` , `sort_order`, `date_created`, `views`)
             VALUES (" . (int)($post_data['post_id']) . "," . (int)($post_data['author_id']). "," . (int)($post_data['comments']) . "," . (int)($post_data['status'])
            . "," . (int)($post_data['sort_order']) . ",'" . $this->db->escape($post_data['date_created']) . "'," . (int)($post_data['views']) .")" );
    }
    public function getBlogpost($post_id)
    {
        $query = $this->db->query("SELECT post_id, image, comments, status, views FROM " . DB_PREFIX . "journal2_blog_post  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }
//    public function addBlogpostImage($post_id,$image_name)
//    {
//        $this->db->query(
//            "INSERT INTO " . DB_PREFIX . "journal2_blog_post  (`post_id`,`image`)
//             VALUES (" . (int)($post_id) . ",'" . $this->db->escape($image_name) . "')" );
//    }
    public function getBlogpostImage($post_id)
    {
        $query = $this->db->query("SELECT image FROM " . DB_PREFIX . "journal2_blog_post  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }
    public function updateBlogpostImage($post_id,$image_name)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "journal2_blog_post  SET image = '" . $this->db->escape($image_name) .
            "' WHERE post_id = " . $post_id);
    }
    public function checkBlogpostExists($post_id)
    {
        $query = $this->db->query("SELECT post_id FROM " . DB_PREFIX . "journal2_blog_post  WHERE `post_id` = " . (int)($post_id));
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    public function updateBlogpost($post_data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "journal2_blog_post  SET comments = " . (int)($post_data['comments']) . ", status =  " . (int)($post_data['status']) .
            ", date_updated ='"  . $this->db->escape($post_data['date_updated']) . "' WHERE post_id = " . $post_data['post_id']);
    }
    public function updateBlogpostStatus($post_data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "journal2_blog_post  SET status =  " . (int)($post_data['status']) . " WHERE post_id = " . $post_data['post_id']);
    }
    public function removeBlogpost($post_id)
    {

        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "journal2_blog_post WHERE post_id= " . (int)($post_id)
        );
    }
    public function getInactiveBlogposts($current_date, $max_post_duration)
    {
        $query = $this->db->query(
            "SELECT post_id FROM " . DB_PREFIX . "journal2_blog_post WHERE status=2 AND TIMESTAMPDIFF(SECOND,date_created, '" . $current_date . "')>" . $max_post_duration
        );
        return $query->rows;
    }

    // ======================= END ADD/ REMOVE/ UPDATE/ GET  BLOGPOST DATA IN journal2_blog_post ============================

    // ======================= START ADD/ REMOVE/ UPDATE/ GET POST DETAILS IN journal2_blog_post ============================

    public function addPostDetails($post_data)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "journal2_blog_post_description  (`post_id`,`language_id`,`name`, `description`, `meta_title`, `meta_keywords` , `meta_description`, `keyword`, `tags`)
             VALUES (" . (int)($post_data['post_id']) . "," . (int)($post_data['language_id']). ",'" . $this->db->escape($post_data['name']) . "','" . $this->db->escape($post_data['description']) . "','" . $this->db->escape($post_data['meta_title']) . "','" . $this->db->escape($post_data['meta_keywords'])
            . "','" . $this->db->escape($post_data['meta_description']) . "','" . $this->db->escape($post_data['keyword']) . "','" . $this->db->escape($post_data['tags']) . "')" );
    }
    public function getPostDetails($post_id, $language_id)
    {
        $query = $this->db->query("SELECT post_id, name, description, keyword FROM " . DB_PREFIX . "journal2_blog_post_description  WHERE `post_id` = " . (int)($post_id) . " AND `language_id` = " . (int)($language_id));
        return $query->rows;
    }
    public function getAllPostDetails($post_id)
    {
        $query = $this->db->query("SELECT post_id, name, description, keyword FROM " . DB_PREFIX . "journal2_blog_post_description  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }
    public function checkPostDetailsExist($post_id, $language_id)
    {
        $query = $this->db->query("SELECT post_id FROM " . DB_PREFIX . "journal2_blog_post_description  WHERE `post_id` = " . (int)($post_id) . " AND `language_id` = " . (int)($language_id));
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    public function updatePostDetails($post_data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "journal2_blog_post_description  SET name = '" . $this->db->escape($post_data['name']) . "', description = '" . $this->db->escape($post_data['description']) . "', meta_title = '" . $this->db->escape($post_data['meta_title']) . "', meta_keywords =  '" . $this->db->escape($post_data['meta_keywords']) .
            "', meta_description ='"  . $this->db->escape($post_data['meta_description']) . "', keyword ='"  . $this->db->escape($post_data['keyword']) . "', tags ='"  . $this->db->escape($post_data['tags']) . "' WHERE post_id = " . $post_data['post_id']. " AND language_id = " . $post_data['language_id']);
    }
    public function removePostDetails($post_id)
    {

        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "journal2_blog_post_description WHERE post_id= " . (int)($post_id)
        );
    }

    // ======================= END ADD/ REMOVE/ UPDATE/ GET POST DETAILS IN journal2_blog_post ============================

    // ======================= START ADD/ REMOVE/ GET in momday_blogpost_to_blog_type ============================
    //blog_type = 1 momsay blog_type = 2 activities
    public function addBlogtypeToBlogpost($post_id, $blog_type)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_blogpost_to_blog_type  (`post_id`, `blog_type`) VALUES(" . (int)$post_id . ",". (int)$blog_type . ")");
    }
    public function getBlogtypeToBlogpost($post_id)
    {
        $query = $this->db->query("SELECT post_id, blog_type FROM " . DB_PREFIX . "momday_blogpost_to_blog_type  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }
    public function removeBlogtypeToBlogpost($post_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "momday_blogpost_to_blog_type  WHERE `post_id` = " . (int)($post_id));
    }

    // ======================= END ADD/ REMOVE/ GET in momday_blogpost_to_blog_type ============================


    // ======================= START ADD/ REMOVE/ GET in journal2_blog_post_to_store ============================
    public function addBlogpostToStore($post_id, $store_id)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "journal2_blog_post_to_store  (`post_id`, `store_id`) VALUES(" . (int)$post_id . ",". (int)$store_id . ")");
    }
    public function getBlogpostToStore($post_id)
    {
        $query = $this->db->query("SELECT post_id FROM " . DB_PREFIX . "journal2_blog_post_to_store  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }
    public function removeBlogpostToStore($post_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "journal2_blog_post_to_store  WHERE `post_id` = " . (int)($post_id));
    }
    // ======================= START ADD/ REMOVE/ GET in journal2_blog_post_to_store ============================


    // ======================= START DELETE POST COMMENTS in journal2_blog_comments ============================
    public function removeBlogpostComments($post_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "journal2_blog_comments  WHERE `post_id` = " . (int)($post_id));
    }
    // ======================= END DELETE POST COMMENTS in journal2_blog_comments ============================

    // ======================= START HANDLE DATA IN momday_momsay_author_details ============================
    public function getAllActiveBlogAuthors()
    {
        $query = $this->db->query("SELECT author_id, full_name,	bio, image_name FROM " . DB_PREFIX . "momday_momsay_author_details WHERE author_activated=1");
        return $query->rows;
    }
    public function getBlogAuthor($author_id)
    {
        $query = $this->db->query("SELECT author_id, full_name,	bio, image_name FROM " . DB_PREFIX . "momday_momsay_author_details WHERE author_id=" . $author_id);
        return $query->rows;
    }
    public function getActiveBlogAuthorNameId()
    {
        $query = $this->db->query("SELECT author_id, full_name FROM " . DB_PREFIX . "momday_momsay_author_details WHERE author_activated=1");
        return $query->rows;
    }
    public function getBlogAuthorImage($author_id)
    {
        $query = $this->db->query("SELECT image_name FROM " . DB_PREFIX . "momday_momsay_author_details WHERE author_id=" . $author_id);
        return $query->rows;
    }
    public function updateBlogAuthorImage($author_id,$image_name)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "momday_momsay_author_details  SET image_name = '" . $this->db->escape($image_name) .
            "' WHERE author_id = " . $author_id);
    }
    public function updateBlogAuthorNameBio($author_id, $full_name, $bio, $activated)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "momday_momsay_author_details  SET full_name = '" . $this->db->escape($full_name) . "', bio='"  . $this->db->escape($bio) .
            "', author_activated=" . (int)$activated . " WHERE author_id = " . $author_id);
    }
    public function getMaxAuthorId()
    {
        $sql = "SELECT max(author_id) as author_id from " . DB_PREFIX . "momday_momsay_author_details";

        $query = $this->db->query($sql);
        return $query->rows;
    }
    public function checkAuthorExists($author_id)
    {
        $query = $this->db->query("SELECT author_id FROM " . DB_PREFIX . "momday_momsay_author_details  WHERE `author_id` = " . (int)($author_id));
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    public function checkAuthorExistsActivated($author_id)
    {
        $query = $this->db->query("SELECT author_id FROM " . DB_PREFIX . "momday_momsay_author_details  WHERE author_activated=1 AND `author_id` = " . (int)($author_id));
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    public function addPlaceholderAuthor($author_id, $timestamp)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_momsay_author_details  (`author_id`, `author_activated`, `timestamp`)
             VALUES ('" . $this->db->escape($author_id) . "',0,'" . $this->db->escape($timestamp) . "')" );
    }
    public function addMomdayBlogauthorTempImages($image_name, $image_size, $timestamp)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_blogauthor_temp_images  (`image_name`, `image_size`, `timestamp`) VALUES('"  . $this->db->escape($image_name) . "','". $this->db->escape($image_size)  . "','". $this->db->escape($timestamp) . "')");

    }
    public function getInactiveBlogauthors($current_timestamp, $max_post_duration)
    {
        $query = $this->db->query(
            "SELECT author_id FROM " . DB_PREFIX . "momday_momsay_author_details WHERE ((" . $current_timestamp . "-`timestamp`" . ")>" . $max_post_duration . " AND author_activated=0)"
        );
        return $query->rows;
    }
    public function removeBlogauthor($author_id)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_momsay_author_details WHERE author_id=" . (int)$author_id
        );
    }
    public function removeInactiveBlogauthors($current_timestamp, $max_post_duration)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_momsay_author_details WHERE ((" . $current_timestamp . "-`timestamp`" . ")>" . $max_post_duration . " AND author_activated=0)"
        );
    }
    public function getInactiveBlogauthorTempImages($current_timestamp, $max_post_duration)
    {
        $query = $this->db->query(
            "SELECT image_name FROM " . DB_PREFIX . "momday_blogauthor_temp_images WHERE ((" . $current_timestamp . "-`timestamp`" . ")>" . $max_post_duration . ")"
        );
        return $query->rows;
    }
    public function removeBlogauthorTempImage($image_name)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_blogauthor_temp_images WHERE image_name='" . $this->db->escape($image_name) . "'"
        );
    }
    public function removeInactiveBlogauthorTempImages($current_timestamp, $max_post_duration)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_blogauthor_temp_images WHERE ((" . $current_timestamp . "-`timestamp`" . ")>" . $max_post_duration . ")"
        );
    }
    public function addBlogpostToAuthor($post_id, $author_id)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_blogpost_to_author  (`post_id`, `author_id`)
             VALUES (" . (int)$post_id . ", " . (int)$author_id . ")" );
    }
    public function checkBlogpostToAuthorExists($post_id)
    {
        $query = $this->db->query("SELECT post_id FROM " . DB_PREFIX . "momday_blogpost_to_author  WHERE post_id=" . (int)$post_id);
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    public function getAuthorPosts($author_id)
    {
        $query = $this->db->query("SELECT bpta.post_id, post.status FROM " . DB_PREFIX . "momday_blogpost_to_author bpta 
            LEFT JOIN " . DB_PREFIX ."journal2_blog_post post ON (bpta.post_id = post.post_id) WHERE bpta.author_id=" . (int)$author_id);
        return $query->rows;
    }
    public function updateBlogpostToAuthor($post_id, $author_id)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "momday_blogpost_to_author  SET author_id = '" . $this->db->escape($author_id) .
            "' WHERE post_id = " . $post_id);
    }
    public function getBlogpostToAuthor($post_id)
    {
        $query = $this->db->query(
            "SELECT author_id FROM " . DB_PREFIX . "momday_blogpost_to_author WHERE post_id =" . (int)$post_id
        );
        return $query->rows;
    }
    // ======================= END HANDLE DATA IN momday_momsay_author_details ============================
    // ======================= START HANDLE blog comments ============================
    public function getBlogComments($language_id, $post_id = null)
    {
        $where_extended = '';
        if(!is_null($post_id)) {
            $where_extended = " AND blog_comments.post_id=" . (int)$post_id;
        }
        $query = $this->db->query("SELECT blog_comments.comment_id, blog_comments.name, blog_comments.status, blog_comments.parent_id, post_description.name as post_name FROM " . DB_PREFIX . "journal2_blog_comments blog_comments 
            LEFT JOIN " . DB_PREFIX ."journal2_blog_post_description post_description ON (blog_comments.post_id = post_description.post_id) 
            LEFT JOIN " . DB_PREFIX ."momday_blogpost_to_blog_type post_type ON (blog_comments.post_id = post_type.post_id) WHERE post_type.blog_type=1 AND post_description.language_id=" . (int)$language_id . $where_extended);
        return $query->rows;
    }
    public function getCommentDetails($comment_id)
    {
        $query = $this->db->query("SELECT comment_id, name, website, email, comment, status  FROM " . DB_PREFIX . "journal2_blog_comments  WHERE comment_id=" . (int)$comment_id);
        return $query->rows;
    }
    public function updateCommentStatus($comment_id, $status)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "journal2_blog_comments  SET status = " . (int)$status ." WHERE comment_id = " . $comment_id);
    }
    // ======================= END HANDLE blog comments ============================
    // ======================= START HANDLE activity host details in momday_activity_host_details ============================
    public function addActivityDetails($post_id){
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_activity_host_details  (`post_id`) VALUES("  . (int)$post_id . ")");
    }
    public function removeActivityDetails($post_id){
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_activity_host_details WHERE post_id=" . (int)$post_id
        );
    }
    public function updateActivityDetails($activity_details){
        $this->db->query(
            "UPDATE " . DB_PREFIX . "momday_activity_host_details  SET location = '" . $this->db->escape($activity_details['location']) . "', phone='"  . $this->db->escape($activity_details['phone']) .
            "', email='"  . $this->db->escape($activity_details['email']) .
            "', website='" . $this->db->escape($activity_details['website']) . "' WHERE post_id = " . $activity_details['post_id']);

    }
    public function getActivityDetails($post_id){
        $query = $this->db->query("SELECT post_id, location, phone, email, website FROM " . DB_PREFIX . "momday_activity_host_details  WHERE post_id=" . (int)$post_id);
        return $query->rows;
    }
    public function checkActivityDetailsExist($post_id){
        $query = $this->db->query("SELECT post_id FROM " . DB_PREFIX . "momday_activity_host_details  WHERE post_id=" . (int)$post_id);
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }
    // ======================= END HANDLE activity host details in momday_activity_host_details ============================

}