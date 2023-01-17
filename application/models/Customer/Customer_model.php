<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function get_user_by_mobile($mobile)
    {
        $this->db->select(field_uid);
        $this->db->where(field_mobile, $mobile);
        $query = $this->db->get(table_users);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_uid] : null;
    }

    public function get_otp_create_time($user_id)
    {
        $this->db->select(field_created_at);
        $this->db->where(field_user_id, $user_id);
        $query = $this->db->get(table_otp_list);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_created_at] : null;
    }

    public function set_otp($user_id, $token, $otp, $otp_created_at)
    {
        $this->db->select(field_value);
        $this->db->where(field_name, const_otp_validate_time);
        $query = $this->db->get(table_system_preferance);
        $query = $query->result();
        $query = $query[0];
        $validation_time = $query->value;

        $past_time = strtotime($otp_created_at);
        $current_time = time();
        $difference = $current_time - $past_time;
        $difference_minute =  $difference / 60;
        if (intval($difference_minute) > $validation_time) {
            $data = [
                field_token => $token,
                field_otp => $otp,
                field_created_at => date(field_date)
            ];
            $this->db->where(field_user_id, $user_id);
            $this->db->update(table_otp_list, $data);
            return ($this->db->affected_rows() == 1) ? true : false;
        } else {
            $this->db->select(field_otp . ',' . field_token);
            $this->db->where(field_user_id, $user_id);
            $query = $this->db->get(table_otp_list);
            $query = $query->result();
            $query = $query[0];
            $fixed_otp = $query->otp;
            $fixed_token = $query->token;
            $data = [
                field_token => $fixed_token,
                field_otp => $fixed_otp,
            ];
            $this->db->where(field_user_id, $user_id);
            $this->db->update(table_otp_list, $data);
            return ($this->db->affected_rows() == 1) ? true : false;
        }
    }

    public function insert_customer_data($uid, $mobile, $type, $customer_id, $otp, $token)
    {
        $user_data = [
            field_uid => $uid,
            field_mobile => $mobile,
            field_user_type_id => $type,
            field_status => const_active,
            field_created_at => date(field_date)
        ];
        $insert_user = $this->db->insert(table_users, $user_data);
        if ($insert_user) {
            $vendor_data = [
                field_uid => $customer_id,
                field_user_id => $uid,
                field_created_at => date(field_date)
            ];
            $insert_customer = $this->db->insert('customer', $vendor_data);
            if ($insert_customer) {
                $otp_data = [
                    field_user_id => $uid,
                    field_otp => $otp,
                    field_token => $token,
                    field_created_at => date(field_date)
                ];
                $this->db->insert(table_otp_list, $otp_data);
                return ($this->db->affected_rows() == 1) ? true : false;
            }
        }
    }

    public function check_otp($user_id)
    {
        $this->db->select(field_otp);
        $this->db->where(field_user_id, $user_id);
        $query = $this->db->get(table_otp_list);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_otp] : null;
    }
    public function get_gid_by_user_id($user_id)
    {
        $this->db->select(field_group_id);
        $this->db->where(field_uid, $user_id);
        $query = $this->db->get(table_users);
        $query = $query->result_array();
        return ($this->db->affected_rows() == 1) ? $query[0][field_group_id] : "";
    }
    public function set_gid_by_user_id($user_id, $new_gid)
    {
        $this->db->where(field_uid, $user_id);
        $this->db->update(table_users, [field_group_id => $new_gid]);
        return ($this->db->affected_rows() == 1) ? true : false;
    }


    /////////////////////////// Shop ////////////////////////////////////////

    public function display_product_for_shop($vendor_id, $pageSize = 10, $pageNo = 0)
    {

        $this->db->select('m.uid as master_id, m.name as product_name, p.uid as product_id,  p.sale_price as product_price, p.vendor_id, p.weight, p.discount, ul.short_name, b.name as brand_name, p.brand_id');
        $this->db->from('products as p');
        $this->db->join('unit_lists as ul', 'ul.uid = p.product_unit_id');
        $this->db->join('products_all_master as m', 'm.uid = p.master_product_id');
        $this->db->join('brand as b', 'b.uid = p.brand_id');
        $this->db->limit($pageSize, (intval($pageNo) * intval($pageSize)));

        if (!empty($vendor_id)) {
            $this->db->where('p.vendor_id', $vendor_id);
        }

        $query = $this->db->get();
        $query = $query->result_array();

        if (!empty($vendor_id)) {
            $total_product = $this->db->from(table_products)->where('vendor_id', $vendor_id)->count_all_results();
        } else {
            $total_product = $this->db->from(table_products)->count_all_results();
        }

        $total_pages = ceil($total_product / intval($pageSize));


        foreach ($query as $i => $val) {
            $query[$i]['sale_price'] = $val['product_price'] - (($val['product_price'] * $val['discount']) / 100);
            $product_id = $val['product_id'];
            $query[$i]['path'] = $this->get_product_image($product_id);
        }

        $pagination_data = [
            'pageSize' => $pageSize,
            'pageNo' => $pageNo,
            "totalElements" => $total_product,
            "totalPages" =>  $total_pages,
        ];

        // $query['pagination_data'] = $pagination_data;

        $array['data'] = $query;
        $array['pagination_data'] = $pagination_data;

        return (!empty($array)) ? $array : null;
    }

    public function get_product_image($product_id)
    {
        $this->db->distinct();
        $this->db->select('path');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get('product_images');
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['path'] : null;
    }

    public function check_product_exist($customer_id, $product_id, $vendor_id, $brand_id, $table)
    {
        $this->db->where(['customer_id' => $customer_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id' => $brand_id]);
        $this->db->get($table);
        return ($this->db->affected_rows() == 1) ? true : false;
    }


    public function get_customer_id_by_user_id($user_id)
    {
        $this->db->select(field_uid);
        $this->db->where(field_user_id, $user_id);
        $query = $this->db->get('customer');
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_uid] : null;
    }

    public function update_cart_item($customer_id, $product_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "product_qty" => $product_qty,
            "modified_at" => date(field_date)
        ];
        $this->db->where(['customer_id' => $customer_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id' => $brand_id]);
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
        $this->db->where(['uid' => $session_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id' => $brand_id]);
        $this->db->get($table);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function update_session_cart_item($session_id, $product_id, $product_qty, $vendor_id, $brand_id)
    {
        $data = [
            "product_qty" => $product_qty,
            "modified_at" => date(field_date)
        ];
        $this->db->where(['uid' => $session_id, 'product_id' => $product_id, 'vendor_id' => $vendor_id, 'brand_id' => $brand_id]);
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
        $this->db->select('p.sale_price, p.weight, p.vendor_id, p.discount, p.uid as pid, m.name, ul.short_name as unit_name, pi.path, p.brand_id');

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

    public function is_user_exist($customer_id)
    {
        $this->db->get_where('customer_address', ['customer_id' => $customer_id]);
        $row = $this->db->affected_rows();
        return ($row > 0) ? true : false;
    }

    public function get_customer_address($customer_id)
    {
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('customer_address');
        $query = $query->result_array();
        return $query[0];
    }

    public function get_user_name($user_id)
    {
        $this->db->select('name, email');
        $this->db->where('uid', $user_id);
        $query = $this->db->get('users');
        $query = $query->result_array();
        return (!empty($query)) ? $query[0] : null;
    }

    public function save_user_name($user_id, $name, $email)
    {
        $data = [
            "name" => $name,
            "email" => $email,
            "modified_at" => date(field_date)
        ];
        $this->db->where('uid', $user_id);
        $this->db->update('users', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function get_user_cart_product_id($customer_id)
    {
        $this->db->select('product_id, product_qty');
        $this->db->where('customer_id', $customer_id);
        $this->db->where('product_qty > ', 0);
        $query = $this->db->get('cart_items');
        $query = $query->result_array();
        return (!empty($query)) ? $query : null;
    }

    public function get_user_session_cart_product_id($session_id)
    {
        $this->db->select('product_id, product_qty');
        $this->db->where('uid', $session_id);
        $this->db->where('product_qty > ', 0);
        $query = $this->db->get('session_cart_item');
        $query = $query->result_array();
        return $query;
    }

    public function get_session_cart_products($session_id)
    {
        $this->db->where('uid', $session_id);
        $query = $this->db->get('session_cart_item');
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function display_product_details($product_id)
    {
        $this->db->select('m.name as product_name, m.uid as master_id, p.uid as product_id, p.vendor_id, p.sale_price as product_price, p.discount, p.description, p.opening_stock, p.min_stock_qty, p.weight, ul.short_name, b.name as brand_name, p.brand_id');
        $this->db->from('products_all_master as m');
        $this->db->join('products as p', 'p.master_product_id=m.uid');
        $this->db->join('unit_lists as ul', 'ul.uid=p.product_unit_id');
        $this->db->join('brand as b', 'b.uid=p.brand_id');
        $this->db->where(['p.uid' => $product_id]);
        $query = $this->db->get();
        $query = $query->result_array();

        foreach ($query as $i => $val) {
            $query[$i]['sale_price'] = round($val['product_price'] - (($val['product_price'] * $val['discount']) / 100));
            $product_id = $val['product_id'];
            $query[$i]['path'] = $this->get_product_image($product_id);
        }

        return (!empty($query)) ? $query : [];
    }

    public function display_product_image($product_id)
    {
        $this->db->select('path');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get('product_images');
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function get_vendor_id_by_product_id($product_id)
    {
        $this->db->select(field_vendor_id);
        $this->db->where(field_uid, $product_id);
        $query = $this->db->get(table_products);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_vendor_id] : null;
    }


    public function display_other_products_of_vendor($vendor_id, $product_id)
    {
        $this->db->distinct('product_name');
        $this->db->select('m.name as product_name, m.uid as master_id, p.uid as product_id, p.vendor_id, p.sale_price as product_price, p.discount, p.weight, ul.short_name, b.name as brand_name');
        $this->db->from('products_all_master as m');
        $this->db->join('products as p', 'p.master_product_id=m.uid');
        $this->db->join('unit_lists as ul', 'ul.uid=p.product_unit_id');
        $this->db->join('product_images as pi', 'pi.product_id = p.uid');
        $this->db->join('brand as b', 'b.uid = p.brand_id');
        $this->db->where(['p.vendor_id' => $vendor_id]);
        $this->db->where_not_in(['p.uid' => $product_id]);
        $query = $this->db->get();
        $query = $query->result_array();

        foreach ($query as $i => $val) {
            $query[$i]['sale_price'] = round($val['product_price'] - (($val['product_price'] * $val['discount']) / 100));
            $product_id = $val['product_id'];
            $query[$i]['path'] = $this->get_product_image($product_id);
        }
        return (!empty($query)) ? $query : [];
    }





    public function save_user_address($address_id, $customer_id, $address, $lat, $lng)
    {
        $exist = $this->is_user_exist($customer_id);
        if ($exist) {
            $data = [
                "uid" => $address_id,
                "address" => $address,
                "lat" => $lat,
                "lng" => $lng,
                "modified_at" => date(field_date)
            ];
            $this->db->where('customer_id', $customer_id);
            $this->db->update('customer_address', $data);
            return ($this->db->affected_rows() == 1) ? true : false;
        } else {
            $data = [
                "uid" => $address_id,
                "customer_id" => $customer_id,
                "address" => $address,
                "lat" => $lat,
                "lng" => $lng,
                "modified_at" => date(field_date)
            ];
            $this->db->insert('customer_address', $data);
            return ($this->db->affected_rows() == 1) ? true : false;
        }
    }


    public function get_vendor_id_by_customer_id($customer_id)
    {
        $this->db->distinct('vendor_id');
        $this->db->select('vendor_id');
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('cart_items');
        $query = $query->result();
        return (!empty($query)) ? $query : [];
    }

    public function get_vendor_id_by_session_id($session_id)
    {
        $this->db->distinct('vendor_id');
        $this->db->select('vendor_id');
        $this->db->where('uid', $session_id);
        $query = $this->db->get('session_cart_item');
        $query = $query->result();
        return (!empty($query)) ? $query : [];
    }



    public function display_delivery_details($vendor_id, $table)
    {
        $this->db->select('SUM(p.sale_price * ci.product_qty) AS totalPrice , s.minimum_order_value, s.delivery_charges');
        $this->db->from('products as p');
        $this->db->join($table . ' as ci', 'ci.product_id=p.uid');
        $this->db->join('store_settings as s', 's.vendor_id=ci.vendor_id');
        $this->db->where('ci.vendor_id', $vendor_id);
        $query = $this->db->get();
        $query = $query->result_array();
        foreach ($query as $i => $val) {
            if ($val['totalPrice'] < $val['minimum_order_value']) {
                $query[$i]['delivery_charges'] =  $val['delivery_charges'];
            } else {
                $query[$i]['delivery_charges'] = 0;
            }
        }
        return (!empty($query)) ? $query[0]['delivery_charges'] : null;
    }

    public function save_detail_deliver_address($customer_id, $pincode, $area, $house_number, $direction, $landmark, $address_type)
    {
        $data = [
            "road" => $area,
            "pincode" => $pincode,
            "house_number" => $house_number,
            "direction" => $direction,
            "extra_detail" => $landmark,
            "address_type" => $address_type,
            "status" => 'SUBMIT',
            "modified_at" => date(field_date)
        ];

        $this->db->where('customer_id', $customer_id);
        $this->db->update('customer_address', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }

    public function get_detail_user_address($customer_id)
    {
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('customer_address');
        $query = $query->result_array();
        return (!empty($query)) ? $query : null;
    }


    public function get_today_deliver_schedule_time($deliver_time)
    {
        $this->db->select('uid, value, time');
        $this->db->where('value >=', $deliver_time);
        $query = $this->db->get('delivery_time_slot');
        $query = $query->result_array();
        return (!empty($query)) ? $query : null;
    }

    public function get_deliver_schedule_time()
    {
        $this->db->select('uid, value, time');
        $query = $this->db->get('delivery_time_slot');
        $query = $query->result_array();
        return (!empty($query)) ? $query : null;
    }


    public function display_location()
    {
        $this->db->select('lat, lng');
        $query = $this->db->get('location');
        $query = $query->result_array();
        return $query;
    }

    public function check_customer_id_exist($customer_id, $table)
    {
        $this->db->select('address')->where('customer_id', $customer_id)->get($table);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function get_master_id_by_product_id($product_id)
    {
        $query = $this->db->select('master_product_id')->where(field_uid, $product_id)->get(table_products);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['master_product_id'] : null;
    }

    public function get_brand_id_by_product_id($product_id)
    {
        $query = $this->db->select('brand_id')->where('uid', $product_id)->get(table_products);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['brand_id'] : 0;
    }

    public function list_all_vendors($master_id, $brand_id)
    {
        $query = $this->db->select('vendor_id')
            ->where('master_product_id', $master_id)
            // ->where('brand_id', $brand_id)
            ->get(table_products);
        $query = $query->result_array();
        foreach ($query as $i => $val) {
            $vendor_id = $val['vendor_id'];
            $query[$i] = $this->get_vendor_details_by_id($vendor_id, $master_id);
        }
        foreach ($query as $key => $row) {
            $rating[$key] = $row['rating'];
        }
        array_multisort($rating, SORT_DESC, $query);

        return (!empty($query)) ? $query : [];
    }

    public function get_vendor_details_by_id($vendor_id, $master_id)
    {
        $query = $this->db->select('AVG(vr.ratings) as rating, u.name, u.mobile, u.email, v.uid as vendor_id, ROUND(p.sale_price - (p.sale_price * p.discount)/100)as price, v.name as store_name, v.mobile as bussiness_mobile')
            ->from(table_users . ' as u')
            ->join(table_vendor . ' as v', 'u.uid=v.user_id')
            ->join('vendor_ratings as vr', 'v.uid=vr.vendor_id')
            ->join(table_products . ' as p', 'vr.vendor_id=p.vendor_id')
            ->where(['p.vendor_id' => $vendor_id, 'p.master_product_id' => $master_id])
            ->where_not_in('u.status', const_deleted)
            ->get();
        $query = $query->result_array();
        return (!empty($query)) ? $query[0] : [];
    }

    public function get_all_vendor_list($category_id)
    {
        $query = $this->db->select('u.uid as user_id, u.name, v.uid as vendor_id, v.name as store_name, v.mobile, v.email, v.address, v.building')
            ->from(table_users . ' as u')
            ->join(table_vendor . ' as v', 'u.uid=v.user_id')
            ->where_not_in('u.status', const_deleted)
            ->like('v.bussiness_category', $category_id)->get();
        $query = $query->result_array();

        foreach ($query as $i => $val) {
            $query[$i]['front_image'] = $this->get_store_image_by_user_id($val['user_id']);
        }
        return (!empty($query)) ? $query : [];
    }

    public function get_store_image_by_user_id($user_id)
    {
        $query = $this->db->select('path')
            ->where([field_user_id => $user_id, field_name => 'front_image'])->get(table_document_new);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0] : [];
    }


    public function get_vendor_product_list($vendor_id)
    {
        $query = $this->db->select('p.uid as product_id, p.master_product_id as master_id, p.brand_id, m.name as product_name')
            ->from(table_products . ' as p')
            ->join(table_products_all_master . ' as m', 'p.master_product_id=m.uid')
            ->where('vendor_id', $vendor_id)->get();
        $query = $query->result_array();
        return (!empty($query)) ? $query : [];
    }

    public function get_product_details_by_vendor_id($vendor_id, $master_id)
    {
        $query = $this->db->select(field_uid . ' as product_id')
            ->where([field_vendor_id => $vendor_id, 'master_product_id' => $master_id])
            ->get(table_products);
        $query = $query->result_array();

        return (!empty($query)) ? $query[0]['product_id'] : [];
    }

    public function getData($select, $condition)
    {
        foreach ($select as $i => $val) {
            $exist[] = $this->check_field_exist($select[$i]);
        }
        if (in_array(0, $exist)) {
            return "Field Not Found";
        } else {
            $query = $this->db->select($select)
            ->where($condition)->get(table_users);
            $query = $query->result_array();
            return $query;
        }
        // return $exist;
    }

    private function check_field_exist($field_name)
    {
        $query = $this->db->select($field_name)->get(table_users);
        $query = $query->result_array();
        return(!empty($query))? true : false;
    }

}
