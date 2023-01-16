<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brand_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function display_brand_details()
    {
        $this->db->select(table_categories . '.' . field_name . AS_category_name . ',' . table_brand . '.' . field_name . AS_brand_name);
        $this->db->from(table_categories);
        $this->db->join(table_brand, table_brand . '.' . field_first_level_category_id . '=' . table_categories . '.' . field_uid);
        $query = $this->db->get();
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function fetch_category_name()
    {
        $this->db->select(field_uid.','.field_name);
        $this->db->where(field_parent_id, null);
        $query = $this->db->get(table_categories);
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function add_brand_name($uid,$category_name, $brand_name)
    {
       $data=[
        field_uid=>$uid,
        field_name=>$brand_name,
        field_first_level_category_id=>$category_name,
        field_created_at=>date(field_date),
        field_modified_at=>date(field_date)

       ];
       $this->db->insert(table_brand,$data);
       return ($this->db->affected_rows()==1)?true:false;
    }
}
