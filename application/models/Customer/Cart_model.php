<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function update_cart_item($customer_id, $product_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "product_qty" => $product_qty,
            "modified_at" => date(field_date)
        ];
        $this->db->where(['customer_id' => $customer_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id'=>$brand_id]);
        $this->db->update('cart_items', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function update_cart_item_from_session($cart_id, $customer_id, $product_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "product_qty" => $product_qty,
            "modified_at" => date(field_date)
        ];
        $this->db->where(['customer_id' => $customer_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id' => $brand_id]);
        $update = $this->db->update('cart_items', $data);
        if ($update) {
            $this->db->where(['cart_id' => $cart_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id' => $vendor_id]);
            $this->db->delete('session_cart_item');
            return ($this->db->affected_rows() == 1) ? true : false;
        }
    }


    public function insert_cart_item($cart_id, $customer_id, $product_id, $master_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "uid" => $cart_id,
            "customer_id" => $customer_id,
            "product_id" => $product_id,
            "master_id" => $master_id,
            "brand_id" => $brand_id,
            "product_qty" => $product_qty,
            "vendor_id" => $vendor_id,
            "created_at" => date(field_date),
            "modified_at" => date(field_date)
        ];
        $this->db->insert('cart_items', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function insert_cart_item_from_session($cart_id, $customer_id,  $master_id, $product_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "uid"         => $cart_id,
            "customer_id" => $customer_id,
            "product_id"  => $product_id,
            "master_id"   => $master_id,
            "brand_id"   => $brand_id,
            "product_qty" => $product_qty,
            "vendor_id"   => $vendor_id,
            "created_at"  => date(field_date),
            "modified_at" => date(field_date)
        ];
        $insert = $this->db->insert('cart_items', $data);
        if ($insert) {
            $this->db->where(['cart_id' => $cart_id]);
            $this->db->delete('session_cart_item');
            return ($this->db->affected_rows() == 1) ? true : false;
        }
    }

    public function check_session_product_exist($session_id, $product_id, $vendor_id, $brand_id, $table)
    {
        $this->db->where(['uid' => $session_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id'=>$brand_id]);
        $this->db->get($table);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function update_session_cart_item($session_id, $product_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "product_qty" => $product_qty,
            "modified_at" => date(field_date)
        ];
        $this->db->where(['uid' => $session_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id'=>$brand_id]);
        $this->db->update('session_cart_item', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function insert_session_cart_item($session_id, $cart_id, $product_id, $master_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "uid" => $session_id,
            "cart_id" => $cart_id,
            "product_id" => $product_id,
            "master_id" => $master_id,
            "brand_id" => $brand_id,
            "product_qty" => $product_qty,
            "vendor_id" => $vendor_id,
            "created_at" => date(field_date),
            "modified_at" => date(field_date)
        ];
        $this->db->insert('session_cart_item', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function get_product_default($customer_id)
    {
        $this->db->where('customer_id', $customer_id);
        $this->db->get('cart_items');
        return $this->db->affected_rows();
    }

    public function get_session_product_default($session_id)
    {
        $this->db->where('uid', $session_id);
        $this->db->get('session_cart_item');
        return $this->db->affected_rows();
    }

    public function get_price_default($customer_id)
    {
        $this->db->select('p.sale_price, ci.product_qty');
        $this->db->from('products as p');
        $this->db->join('cart_items as ci', 'ci.product_id = p.master_product_id');
        $this->db->where('ci.customer_id', $customer_id);
        $query = $this->db->get();
        $query = $query->result_array();
        return (!empty($query)) ? $query : null;
    }

    public function get_master_id_vendor_id_product_qty_by_customer_id($customer_id)
    {
        $this->db->select('product_id, vendor_id, product_qty');
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('cart_items');
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function get_session_master_vendor_id_by_customer_id($session_id)
    {
        $this->db->select('product_id, vendor_id, product_qty');
        $this->db->where('uid', $session_id);
        $query = $this->db->get('session_cart_item');
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function get_product_price($product_id, $vendor_id)
    {
        $this->db->select('sale_price, discount');
        $this->db->where(['uid' => $product_id, 'vendor_id' => $vendor_id]);
        $query = $this->db->get('products');
        $query = $query->result_array();
        foreach ($query as $i => $val) {
            $query[$i]['sale_price'] = $val['sale_price'] - (($val['sale_price'] * $val['discount']) / 100);
        }
        return (!empty($query)) ? $query[0]['sale_price'] : null;
    }

    public function get_cart_details_of_customer($customer_id)
    {
        $this->db->select('uid as cart_id, product_id, master_id, product_qty, vendor_id');
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('cart_items');
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function get_session_cart_details_of_customer($session_id)
    {
        $this->db->select('uid, cart_id, product_id, master_id, product_qty, vendor_id');
        $this->db->where('uid', $session_id);
        $query = $this->db->get('session_cart_item');
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function get_cart_product_detail($product_id)
    {
        $this->db->select('p.sale_price, p.weight, p.vendor_id, p.discount, p.uid as pid, m.name, ul.short_name as unit_name, pi.path');
        $this->db->from('products as p');
        $this->db->join('products_all_master as m', 'm.uid = p.master_product_id');
        $this->db->join('unit_lists as ul', 'ul.uid = p.product_unit_id');
        $this->db->join('product_images as pi', 'p.uid = pi.product_id');
        $this->db->where('p.uid', $product_id);
        $query = $this->db->get();
        $query = $query->result_array();

        foreach ($query as $i => $val) {
            $query[$i]['sale_price'] = $val['sale_price'] - (($val['sale_price'] * $val['discount']) / 100);
        }

        return (!empty($query)) ? $query[0] : null;
    }

    public function delete_cart_item($cart_id)
    {
        $this->db->where('uid', $cart_id);
        $this->db->delete('cart_items');
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function delete_session_cart_item($cart_id)
    {
        $this->db->where('cart_id', $cart_id);
        $this->db->delete('session_cart_item');
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function delete_product_from_cart($product_id, $vendor_id, $customer_id)
    {
        $this->db->where(['product_id' => $product_id, 'vendor_id' => $vendor_id, 'customer_id' => $customer_id]);
        $this->db->delete('cart_items');
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function delete_product_from_session_cart($product_id, $vendor_id, $session_id)
    {
        $this->db->where(['product_id' => $product_id, 'vendor_id' => $vendor_id, 'uid' => $session_id]);
        $this->db->delete('session_cart_item');
        return ($this->db->affected_rows() == 1) ? true : false;
    }


}
