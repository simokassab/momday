<?php

require_once(DIR_SYSTEM . 'journal2/classes/journal2_utils.php');

class ModelMomdayActivities extends Model {

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

//    public function getPost($post_id) {
//        $post_id = (int)$post_id;
//
//        $query = $this->db->query("
//            SELECT
//                p.post_id,
//                p.image,
//                p.comments,
//                p.date_created,
//                pd.name,
//                pd.description,
//                pd.meta_title,
//                pd.meta_keywords,
//                pd.meta_description,
//                pd.keyword,
//                pd.tags,
//                a.username,
//                a.firstname,
//                a.lastname
//            FROM `{$this->db_prefix}journal2_blog_post` p
//            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
//            LEFT JOIN `{$this->db_prefix}user` a ON p.author_id = a.user_id
//            WHERE p.post_id = {$post_id} AND pd.language_id = {$this->language_id} AND p.status = 1
//        ");
//
//        return $query->row;
//    }

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
        ".$data['blog_type'];

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
        ".$data['blog_type'];

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

    public function getBlogtypeToBlogpost($post_id)
    {
        $query = $this->db->query("SELECT post_id, blog_type FROM " . DB_PREFIX . "momday_blogpost_to_blog_type  WHERE `post_id` = " . (int)($post_id));
        return $query->rows;
    }

    public function getAllActivityHostAddresses()
    {
        $query = $this->db->query(
            "SELECT mahd.post_id, mahd.location FROM " . DB_PREFIX . "momday_activity_host_details mahd
            LEFT JOIN " . DB_PREFIX . "journal2_blog_post jbp ON mahd.post_id = jbp.post_id
            WHERE jbp.status=1"
        );
        return $query->rows;
    }
    public function getActivityHostDetails($post_id)
    {
        $query = $this->db->query(
            "SELECT * FROM " . DB_PREFIX . "momday_activity_host_details WHERE post_id=" . (int)$post_id
        );
        return $query->rows;
    }

    // ============ REST API ====================

    public function getPostsRest($data = array()) {
        $sql = "
            SELECT
                p.post_id,
                p.image,
                pd.name,
                pd.description,
                h.location
            FROM `{$this->db_prefix}journal2_blog_post` p 
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_to_store` p2s ON p.post_id = p2s.post_id
            LEFT JOIN `{$this->db_prefix}momday_blogpost_to_blog_type` mbtbt ON p.post_id = mbtbt.post_id
            LEFT JOIN `{$this->db_prefix}momday_activity_host_details` h ON p.post_id = h.post_id
            WHERE pd.language_id = {$this->language_id} AND p2s.store_id = {$this->store_id} AND mbtbt.blog_type=2";

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

    public function getActivityPostRest($post_id) {
        $post_id = (int)$post_id;

        $query = $this->db->query("
            SELECT
                p.post_id,
                pd.name,
                pd.description
            FROM `{$this->db_prefix}journal2_blog_post` p
            LEFT JOIN `{$this->db_prefix}journal2_blog_post_description` pd ON p.post_id = pd.post_id
            WHERE p.post_id = {$post_id} AND pd.language_id = {$this->language_id} AND p.status = 1
        ");

        return $query->row;
    }

}