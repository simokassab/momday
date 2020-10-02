<?php
class ModelMomdayCharity extends Model
{
    public function addCharityWithDetails($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "momday_charity SET charity_id = '" . (int)$data['charity_id'] . "', location = '" . $this->db->escape($data['location']) . "', phone = '" . $this->db->escape($data['phone']) . "', email = '" . $this->db->escape($data['email']) . "', website = '" . $this->db->escape($data['website']) . "'");

        $charity_id = $this->db->getLastId();

        foreach ($data['charity_details'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "momday_charity_details SET charity_id = '" . $charity_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "'");
        }

        return $charity_id;
    }


    public function editCharityWithDetails($data) {
        $this->db->query("UPDATE " . DB_PREFIX . "momday_charity SET location = '" . $this->db->escape($data['location']) . "', phone = '" . $this->db->escape($data['phone']) . "', email = '" . $this->db->escape($data['email']) . "', website = '" . $this->db->escape($data['website']) . "' WHERE charity_id = '" . (int)$data['charity_id'] . "'");

        foreach ($data['charity_details'] as $language_id => $value) {
            $this->db->query("UPDATE " . DB_PREFIX . "momday_charity_details SET name = '" . $this->db->escape($value['name']) . "' WHERE charity_id = '" . (int)$data['charity_id'] . "' AND language_id = '" . (int)$language_id . "'");
        }
    }

    public function getAllCharities($language_id)
    {
        $sql = "SELECT mcd.charity_id, mcd.name, mc.location, mc.phone, mc.email, mc.website from " . DB_PREFIX . "momday_charity_details mcd
        LEFT JOIN " . DB_PREFIX ."momday_charity mc ON (mcd.charity_id = mc.charity_id) 
        WHERE mcd.language_id = " . $language_id . " ORDER BY mcd.name";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getCharityInformation($charity_id)
    {
        $query = $this->db->query(
            "SELECT * FROM " . DB_PREFIX . "momday_charity WHERE charity_id=" . $charity_id
        );
        return $query->rows;
    }

    public function getCharityDetails($charity_id) {
        $charity_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "momday_charity_details mcd WHERE charity_id = '" . (int)$charity_id . "'");

        foreach ($query->rows as $result) {
            $charity_data[$result['language_id']] = array(
                'name'        => $result['name']
            );
        }

        return $charity_data;
    }

    public function removeCharityAndDetails($charity_id)
    {
        $this->db->query(
            "DELETE mc, mcd FROM " . DB_PREFIX . "momday_charity mc JOIN " . DB_PREFIX . "momday_charity_details mcd ON mc.charity_id = mcd.charity_id WHERE mc.charity_id= " . (int)($charity_id)
        );
    }

    public function getCharityProducts($charity_id)
    {
        $query = $this->db->query(
            "SELECT product_id FROM " . DB_PREFIX . "momday_product_to_charity WHERE charity_id=" . $charity_id
        );
        return $query->rows;
    }


}