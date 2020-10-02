<?php

require_once(DIR_SYSTEM . 'journal2/classes/journal2_utils.php');

class ModelMomdayMomsay extends Model {

    private static $BLOG_KEYWORD = null;
    private static $BLOG_KEYWORDS = null;
    private static $is_installed = null;
    private static $author_name = null;

    private $db_prefix = '';

    public function __construct($registry) {
        parent::__construct($registry);
        $this->db_prefix = $this->db->escape(DB_PREFIX);
        $this->language_id = (int)$this->config->get('config_language_id');
        $this->store_id = (int)$this->config->get('config_store_id');
    }

    public function getPost($post_id) {
        $post_id = (int)$post_id;

        $query = $this->db->query("
            SELECT
                p.post_id,
                p.image,
                p.comments,
                p.date_created,
                pd.name,
                pd.description,
                pd.meta_title,
                pd.meta_keywords,
                pd.meta_description,
                pd.keyword,
                pd.tags,
                a.username,
                a.firstname,
                a.lastname
            FROM `{$this->db_prefix}journal2_blog_post` p
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            LEFT JOIN `{$this->db_prefix}user` a ON p.author_id = a.user_id
            WHERE p.post_id = {$post_id} AND pd.language_id = {$this->language_id} AND p.status = 1
        ");

        return $query->row;
    }

    public function getPosts($data = array()) {
        $sql = "
            SELECT
                p.post_id,
                p.image,
                p.date_created as date,
                pd.name,
                pd.description,
                a.username,
                a.firstname,
                a.lastname,
                a.email,
                (
                    SELECT count(*)
                    FROM `{$this->db_prefix}journal2_blog_comments` bc
                    WHERE bc.post_id = p.post_id AND bc.status = 1 AND bc.parent_id = 0
                ) as comments
            FROM `{$this->db_prefix}journal2_blog_post` p 
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_blog_type` mbtbt ON p.post_id = mbtbt.post_id
            ";

        if (isset($data['category_id']) && $data['category_id']) {
            $sql .= " LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_category` p2c ON p.post_id = p2c.post_id";
        }

        $sql .= "
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_store` p2s ON p.post_id = p2s.post_id
            LEFT JOIN `{$this->db_prefix}user` a ON p.author_id = a.user_id
            WHERE pd.language_id = {$this->language_id} AND p2s.store_id = {$this->store_id} AND mbtbt.blog_type=
        ".(int)$data['blog_type'];

        if (isset($data['category_id']) && $data['category_id']) {
            $sql .= " AND p2c.category_id = " . (int)$data['category_id'];
        }

        if (isset($data['tag']) && $data['tag']) {
            $sql .= " AND pd.tags LIKE '%" . $this->db->escape($data['tag']) . "%'";
        }

        if (isset($data['search']) && $data['search']) {
            $temp_1 = array();
            $temp_2 = array();

            $words = explode(' ', trim(preg_replace('/\s\s+/', ' ', $data['search'])));

            foreach ($words as $word) {
                $temp_1[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
                $temp_2[] = "pd.description LIKE '%" . $this->db->escape($word) . "%'";
            }

            if ($temp_1) {
                $sql .= ' AND ((' . implode(" AND ", $temp_1) . ') OR (' . implode(" AND ", $temp_2) . '))';
            }
        }

        if (isset($data['post_ids'])) {
            $sql .= ' AND p.post_id IN (' . $data['post_ids'] . ')';
        }

        $sql .= ' AND p.status = 1';

        $sql .= ' GROUP BY p.post_id';

        if (isset($data['sort']) && $data['sort'] === 'newest') {
            $sql .= ' ORDER BY p.date_created DESC';
        }

        if (isset($data['sort']) && $data['sort'] === 'oldest') {
            $sql .= ' ORDER BY p.date_created ASC';
        }

        if (isset($data['sort']) && $data['sort'] === 'comments') {
            $sql .= ' ORDER BY comments DESC';
        }

        if (isset($data['sort']) && $data['sort'] === 'views') {
            $sql .= ' ORDER BY p.views DESC';
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

    public function getPostsTotal($data = array()) {
        $sql = "
            SELECT
                count(*) as num
            FROM `{$this->db_prefix}journal2_blog_post` p
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_blog_type` mbtbt ON p.post_id = mbtbt.post_id
        ";

        if (isset($data['category_id']) && $data['category_id']) {
            $sql .= " LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_category` p2c ON p.post_id = p2c.post_id";
        }

        $sql .= "
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_store` p2s ON p.post_id = p2s.post_id
            WHERE pd.language_id = {$this->language_id} AND p2s.store_id = {$this->store_id} AND mbtbt.blog_type=
        ".(int)$data['blog_type'];

        if (isset($data['category_id']) && $data['category_id']) {
            $sql .= " AND p2c.category_id = " . (int)$data['category_id'];
        }

        if (isset($data['tag']) && $data['tag']) {
            $sql .= " AND pd.tags LIKE '%" . $this->db->escape($data['tag']) . "%'";
        }

        if (isset($data['search']) && $data['search']) {
            $temp_1 = array();
            $temp_2 = array();

            $words = explode(' ', trim(preg_replace('/\s\s+/', ' ', $data['search'])));

            foreach ($words as $word) {
                $temp_1[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
                $temp_2[] = "pd.description LIKE '%" . $this->db->escape($word) . "%'";
            }

            if ($temp_1) {
                $sql .= ' AND ((' . implode(" AND ", $temp_1) . ') OR (' . implode(" AND ", $temp_2) . '))';
            }
        }

        $sql .= ' AND p.status = 1';

        $query = $this->db->query($sql);

        return $query->row['num'];
    }

    public function createComment($data) {
        if(isset($data['parent_id']) && $data['parent_id']){
            $parent_id = (int)$data['parent_id'];
        }else{
            $parent_id = 0;
        }
        if(isset($data['post_id']) && $data['post_id']){
            $post_id = (int)$data['post_id'];
        }else{
            $post_id = 0;
        }
        if(isset($data['name']) && $data['name']){
            $name = $this->db->escape($data['name']);
        }else{
            $name = '';
        }
        if(isset($data['email']) && $data['email']){
            $email = $this->db->escape($data['email']);
        }else{
            $email = '';
        }
        if(isset($data['website']) && $data['website']){
            $website = $this->db->escape($data['website']);
        }else{
            $website = '';
        }
        if(isset($data['comment']) && $data['comment']){
            $comment = $this->db->escape($data['comment']);
        }else{
            $comment = '';
        }
        // Momday status always require admin approval
//                $status = (int)$this->journal2->settings->get('config_blog_settings.auto_approve_comments', '1');
        $status = 0;
        $customer_id = 0;
        $author_id = $this->customer->getId();

        $sql = "
            INSERT INTO `{$this->db_prefix}journal2_blog_comments`
            (parent_id, post_id, customer_id, author_id, name, email, website, comment, status, date)
            VALUES
            ({$parent_id}, {$post_id}, {$customer_id}, {$author_id}, '{$name}', '{$email}', '{$website}', '{$comment}', {$status}, NOW())
        ";

        $this->db->query($sql);

        return $this->getComment($this->db->getLastId());
    }

    public function getComment($comment_id) {
        $comment_id = (int)$comment_id;

        $query = $this->db->query("
            SELECT
                comment_id,
                website,
                name,
                email,
                comment,
                date
            FROM `{$this->db_prefix}journal2_blog_comments` bc
            WHERE bc.comment_id = {$comment_id} AND status = 1
        ");

        return $query->row;
    }

    public function getAllPostIdToAuthor()
    {
        $query = $this->db->query(
            "SELECT mbta.post_id, mmad.author_id, mmad.image_name, mmad.bio, mmad.full_name FROM " . DB_PREFIX . "momday_blogpost_to_author mbta
            LEFT JOIN `{$this->db_prefix}momday_momsay_author_details` mmad ON mbta.author_id = mmad.author_id"
        );
        return $query->rows;
    }
    public function getAllAuthors()
    {
        $query = $this->db->query(
            "SELECT * FROM " . DB_PREFIX . "momday_momsay_author_details WHERE author_activated=1"
        );
        return $query->rows;
    }
    public function getBlogAuthorDetails($post_id)
    {
        $query = $this->db->query("SELECT mmad.author_id, mmad.full_name, mmad.bio, mmad.image_name FROM " . DB_PREFIX . "momday_momsay_author_details mmad 
        LEFT JOIN `{$this->db_prefix}momday_blogpost_to_author` mbta ON mmad.author_id = mbta.author_id
        WHERE mbta.post_id=" . $post_id);
        return $query->rows;
    }

    public function getBlogtypeToBlogpost($post_id)
    {
        $query = $this->db->query("SELECT post_id, blog_type FROM " . DB_PREFIX . "momday_blogpost_to_blog_type  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }

    public function getUserPostLike($post_id, $user_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "momday_blogpost_user_like  WHERE `post_id` = " . (int)($post_id) . " AND `user_id` = " . (int)($user_id));
        $result = $query->rows;
        if(sizeof($result) >0 ){
            return true;
        }else{
            return false;
        }
    }

    public function addUserPostLike($post_id, $user_id)
    {
        if($user_id == 0){
            return;
        }
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "momday_blogpost_user_like  (`post_id`, `user_id`) VALUES(" . (int)$post_id . ",". (int)$user_id . ")");
    }

    public function removeUserPostLike($post_id, $user_id)
    {
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "momday_blogpost_user_like  WHERE post_id=" . (int)$post_id . " AND user_id=". (int)$user_id );
    }

    public function getPostLikesCount($post_id)
    {
        $query = $this->db->query("SELECT count(*) as total FROM `{$this->db_prefix}momday_blogpost_user_like` WHERE post_id=" . $post_id);
        return $query->row['total'];
    }

    // ================== REST API ==================================


    public function getMomsayPostsRest($data = array()) {
        $sql = "
            SELECT
                p.post_id,
                p.image,
                p.date_created as date,
                pd.name,
                pd.description,
                (
                    SELECT count(*)
                    FROM `{$this->db_prefix}momday_blogpost_user_like` mbul
                    WHERE mbul.post_id = p.post_id
                ) as likes,
                mad.full_name as author_name,
                mad.image_name as author_image
            FROM `{$this->db_prefix}journal2_blog_post` p 
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_store` p2s ON p.post_id = p2s.post_id
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_blog_type` mbtbt ON p.post_id = mbtbt.post_id
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_author` mbta ON p.post_id = mbta.post_id
            LEFT JOIN `{$this->db_prefix}momday_momsay_author_details` mad ON mad.author_id = mbta.author_id
            WHERE pd.language_id = {$this->language_id} AND p2s.store_id = {$this->store_id} AND mbtbt.blog_type=1
            ORDER BY date DESC";

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

    public function getMomsayPostRest($post_id, $customer_id) {
        $sql = "
            SELECT
                p.post_id,
                p.image,
                p.date_created as date,
                p.comments as comment_status,
                pd.name,
                pd.description,
                (
                    SELECT count(*)
                    FROM `{$this->db_prefix}momday_blogpost_user_like` mbul
                    WHERE mbul.post_id = p.post_id
                ) as likes,
                (
                    SELECT count(*)
                    FROM `{$this->db_prefix}momday_blogpost_user_like` mbul2
                    WHERE mbul2.post_id = p.post_id and mbul2.user_id = " . (int)$customer_id . "
                ) as customer_like,
                mad.full_name as author_name,
                mad.image_name as author_image,
                mad.bio as author_biography
            FROM `{$this->db_prefix}journal2_blog_post` p 
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_store` p2s ON p.post_id = p2s.post_id
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_blog_type` mbtbt ON p.post_id = mbtbt.post_id
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_author` mbta ON p.post_id = mbta.post_id
            LEFT JOIN `{$this->db_prefix}momday_momsay_author_details` mad ON mad.author_id = mbta.author_id
            WHERE p.post_id=" . (int)$post_id . " AND pd.language_id = {$this->language_id} AND p2s.store_id = {$this->store_id} AND mbtbt.blog_type=1";

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getPostCommentsRest($post_id) {
        $post_id = (int)$post_id;

        $query = $this->db->query("
            SELECT
                comment_id, parent_id as comment_parent_id, name as comment_author, comment as comment_text, date as date_commented
            FROM `{$this->db_prefix}journal2_blog_comments`
            WHERE post_id = {$post_id} AND status = 1
        ");

        return $query->rows;
    }

    public function addPostCommentRest($data) {

        if(isset($data['comment_parent_id']) && $data['comment_parent_id']){
            $parent_id = (int)$data['comment_parent_id'];
        }else{
            $parent_id = 0;
        }
        if(isset($data['post_id']) && $data['post_id']){
            $post_id = (int)$data['post_id'];
        }else{
            $post_id = 0;
        }
        if(isset($data['name']) && $data['name']){
            $name = $this->db->escape($data['name']);
        }else{
            $name = '';
        }
        if(isset($data['email']) && $data['email']){
            $email = $this->db->escape($data['email']);
        }else{
            $email = '';
        }
        if(isset($data['website']) && $data['website']){
            $website = $this->db->escape($data['website']);
        }else{
            $website = '';
        }
        if(isset($data['comment']) && $data['comment']){
            $comment = $this->db->escape($data['comment']);
        }else{
            $comment = '';
        }
        // Momday status always require admin approval
//                $status = (int)$this->journal2->settings->get('config_blog_settings.auto_approve_comments', '1');
        $status = 0;
        $customer_id = 0;
        $author_id = $this->customer->getId();

        $sql = "
            INSERT INTO `{$this->db_prefix}journal2_blog_comments`
            (parent_id, post_id, customer_id, author_id, name, email, website, comment, status, date)
            VALUES
            ({$parent_id}, {$post_id}, {$customer_id}, {$author_id}, '{$name}', '{$email}', '{$website}', '{$comment}', {$status}, NOW())
        ";

        $this->db->query($sql);

        return $this->db->getLastId();
    }

    public function checkPostLiked($post_id)
    {
        $query = $this->db->query("SELECT author_id FROM " . DB_PREFIX . "momday_momsay_author_details  WHERE `author_id` = " . (int)($author_id));
        $result = $query->rows;
        if (sizeof($result) >=1){
            return true;
        } else{
            return false;
        }
    }

    private function print_to_file($array_to_print){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, print_r($array_to_print,true));
        fclose($myfile);
    }
}