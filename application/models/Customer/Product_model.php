<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function get_quantity_of_product_in_cart($product_id){
        $query = $this->db->select('product_qty')
        ->where('product_id', $product_id)
        ->get('cart_items');
        $query = $query->result_array();
        return !empty($query)?$query[0]['product_qty']:null;
    }

    
}