<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

 

    public function fetch_category($id){
        if($id!='0'){
            $this->db->where(field_parent_id, $id);
            $query=$this->db->get(table_categories);
            $query=$query->result();
            return (!empty($query))? $query: null;
        }
        else{
            $this->db->where(field_parent_id, null);
            $query=$this->db->get(table_categories);
            $query=$query->result();
            return (!empty($query))? $query: null;
        }
        
    }

 
    public function add_product_category($uid, $name, $parent_id, $category_level){
        if($parent_id=='0'|| $parent_id==''){

            $url=$name;
            $url_ids=$uid;

            $data=[
                field_uid=>$uid,
                field_name=>$name,
                field_parent_id=>null,
                field_categorie_level=>0,
                field_url=>$url,
                field_url_ids=>$url_ids,
                field_created_at=>date(field_date),
                field_modified_at=>date(field_date)
           ];
           $this->db->insert(table_categories, $data);
        }
        else{

            $this->db->select(field_url.','. field_url_ids);
            $this->db->where(field_uid,$parent_id);
            $query=$this->db->get(table_categories);
            $query = $query->result();
		    $query = $query[0];


            $url_name=$query->url;
            $url_id=$query->url_ids;


            $url=$url_name.'/'.$name;
            $url_ids=$url_id.'/'.$uid;

            $data=[
                field_uid=>$uid,
                field_name=>$name,
                field_parent_id=>$parent_id,
                field_categorie_level=>$category_level,
                field_url=>$url,
                field_url_ids=>$url_ids,
                field_created_at=>date(field_date),
                field_modified_at=>date(field_date)
           ];
           $this->db->insert(table_categories, $data);
    
        }
       
       return ($this->db->affected_rows()==1)?true:false;

    }

}
