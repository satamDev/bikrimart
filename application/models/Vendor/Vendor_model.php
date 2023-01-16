<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }
    // send otp 
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
        // $this->db->select(field_value);
        // $this->db->where(field_name, otp_validate_time);
        // $query = $this->db->get(table_system_preferance);
        // $query = $query->result();
        // $query = $query[0];
        // $validation_time = $query->value;

        $past_time = strtotime($otp_created_at);
        $current_time = time();
        $difference = $current_time - $past_time;
        $difference_minute =  $difference / 60;
        if (intval($difference_minute) > 5) {
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
    
    public function get_user_id_by_mobile($mobile){
        $this->db->select('uid');
        $this->db->where('mobile', $mobile);
        $query=$this->db->get('users');
        $query=$query->result_array();
        return(!empty($query))?$query[0]['uid']:null;

    }

    public function insert_vendor_data($user_id, $mobile, $type, $vendor_id, $otp, $token)
    {
        $user_data = [
            field_uid => $user_id,
            field_mobile => $mobile,
            field_user_type_id => $type,
            field_status => const_deactive,
            field_created_at => date(field_date)
        ];
        $insert_user = $this->db->insert(table_users, $user_data);
        if ($insert_user) {
            $vendor_data = [
                field_uid => $vendor_id,
                field_user_id => $user_id,
                field_created_at => date(field_date)
            ];
            $insert_vendor = $this->db->insert(table_vendor, $vendor_data);
            if ($insert_vendor) {
                $otp_data = [
                    field_user_id => $user_id,
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
    public function save_user_basic_details($user_id, $name, $email, $mobile)
    {
        $data = [
            field_name => $name,
            field_email => $email,
            field_modified_at => date(field_date)
        ];
        $this->db->where([field_uid => $user_id, field_mobile => $mobile]);
        $this->db->update(table_users, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_bussiness_details($user_id, $bussiness_name, $bussiness_mobile, $bussiness_email, $building, $address, $gst, $document_data)
    {
        $vendor_data = [
            "name" => $bussiness_name,
            "mobile" => $bussiness_mobile,
            "email" => $bussiness_email,
            "building" => $building,
            "address" => $address,
            "gst" => $gst,
            "modified_at" => date(field_date),
        ];

        $this->db->where('user_id', $user_id);
        $update = $this->db->update('vendors', $vendor_data);
        if ($update) {
            $this->db->insert_batch('document', $document_data);
            return ($this->db->affected_rows() > 0 ? true : false);
            
        }
    }
    public function save_bank_details($uid, $user_id, $profile_image, $account_name, $account_number, $ifsc, $upi)
    {
        $bank_data = [
            "uid" => $uid,
            "user_id" => $user_id,
            "account_name" => $account_name,
            "account_number" => $account_number,
            "ifsc" => $ifsc,
            "upi_id" => $upi,
            "modified_at" => date(field_date)
        ];
        $user_data = [
            "profile_image" => $profile_image,
            "modified_at" => date(field_date)
        ];
        $this->db->where('uid', $user_id);
        $update = $this->db->update('users', $user_data);
        if ($update) {
            $this->db->where('user_id', $user_id);
            $this->db->get('banking');
            $exist = $this->db->affected_rows();
            if ($exist == 0) {
                $this->db->insert('banking', $bank_data);
                return ($this->db->affected_rows() == 1 ? true : false);
            } else {
                $this->db->where('user_id', $user_id);
                $this->db->update('banking', $bank_data);
                return ($this->db->affected_rows() == 1 ? true : false);
            }
        }
    }
    public function fetch_user_details($user_id, $mobile)
    {
        $this->db->where(['uid' => $user_id, 'mobile' => $mobile]);
        $query = $this->db->get('users');
        $query = $query->result();
        return (!empty($query)) ? $query[0] : null;
    }
    public function save_profile_image($user_id, $image)
    {
        $data = [
            field_profile_image => $image,
            field_modified_at => date(field_date)
        ];
        $this->db->where(field_uid, $user_id);
        $this->db->update(table_users, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_bussiness_name($user_id, $bussiness_name)
    {
        $data = [
            field_name => $bussiness_name,
            field_modified_at => date(field_date)
        ];
        $this->db->where(field_user_id, $user_id);
        $this->db->update(table_vendor, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_bussiness_address($user_id, $building, $address)
    {
        $data = [
            'building' => $building,
            'address' => $address,
            field_modified_at => date(field_date)
        ];
        $this->db->where(field_user_id, $user_id);
        $this->db->update(table_vendor, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_bussiness_category($user_id, $bussiness_category)
    {
        $data = [
            'bussiness_category' => $bussiness_category,
            field_modified_at => date(field_date)
        ];
        $this->db->where(field_user_id, $user_id);
        $this->db->update(table_vendor, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_bussiness_type($user_id, $bussiness_type)
    {
        $data = [
            'bussiness_type' => $bussiness_type,
            field_modified_at => date(field_date)
        ];
        $this->db->where(field_user_id, $user_id);
        $this->db->update(table_vendor, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_store_image($document_id, $user_id, $front_image, $inside_image){  #---------------- save store images
        $data = [
            field_uid => $document_id,
            field_user_id => $user_id,
            field_store_front_image => $front_image,
            field_store_inside_image => $inside_image,
            field_created_at => date(field_date),
            field_modified_at => date(field_date)
        ];
        $this->db->insert(table_documents, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function save_gst_details($user_id, $gst_number){    #---------------- save GST details
        $data = [
            'gst' => $gst_number
        ];
        $this->db->where(field_user_id, $user_id);
        $this->db->update(table_vendor, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function save_upi_details($user_id, $upi_number){     #---------------- save UPI details
        $data = [
            'upi_id' => $upi_number,
            field_modified_at => date(field_date)
        ];

        $this->db->where('user_id', $user_id);
        $this->db->get('banking');
        $row = $this->db->affected_rows();

        if ($row == 0) {
            $this->db->insert('banking', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        } else {
            $this->db->where('user_id', $user_id);
            $this->db->update('banking', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        }
    }

    public function insert_product($product_data, $master_data, $image_data)
    {
        $insert = $this->db->insert('products_all_master', $master_data);
        if ($insert) {
            $product=$this->db->insert('products', $product_data);
            if($product){
                $this->db->insert_batch('product_images', $image_data);
                return ($this->db->affected_rows() > 0) ? true : false;
            }
        }
    }

    public function insert_product_by_master_table($product_data, $image_data)
    {
        $img=$this->db->insert_batch('product_images', $image_data);
        if($img){
            $this->db->insert(table_products, $product_data);
        }
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function insert_product_have_variants($product_data, $master_data)
    {
        $insert = $this->db->insert('products_all_master', $master_data);
        if ($insert) {
            $this->db->insert_batch('products', $product_data);
            return ($this->db->affected_rows() > 0) ? true : false;
        }
    }

    public function insert_product_by_master_have_variants($product_data)
    {
        $this->db->insert_batch('products', $product_data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function get_product_image($master_id)
    {
        $this->db->distinct();
        $this->db->select('path');
        $this->db->where('master_product_id', $master_id);
        $this->db->order_by("path", "desc");
        $query = $this->db->get('product_images');
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]: "";
    }

    public function display_product($vendor_id)   {    #------------------- Product Listing of vendor
        $this->db->distinct();
        $this->db->select('master.name as product_name');

        $this->db->select('p.uid as product_id, master.uid as master_id, c.name as category_name, b.name as brand_name, p.min_stock_qty, p.sale_price, p.purchase_price');
        $this->db->from('products_all_master as master');
        $this->db->join('products as p', 'p.master_product_id = master.uid');
        $this->db->join('categories as c', 'master.category_id = c.uid');
        $this->db->join('brand as b', 'p.brand_id = b.uid');
        $this->db->where('p.vendor_id',$vendor_id);
        $query = $this->db->get();
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function fetch_details_of_master_id($master_id)   {    #------------------- Product Listing of vendor
     
        $this->db->select('master.name as product_name, master.uid as master_id, p.uid as product_id, master.uid as master_id, c.name as category_name, b.name as brand_name, p.min_stock_qty, p.sale_price, p.purchase_price, p.has_variant, p.discount');
        $this->db->from('products_all_master as master');
        $this->db->join('products as p', 'p.master_product_id = master.uid');
        $this->db->join('categories as c', 'master.category_id = c.uid');
        $this->db->join('brand as b', 'p.brand_id = b.uid');
        $this->db->where('master.uid',$master_id);
        $query = $this->db->get();
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    // public function display_product($vendor_id)   {    #------------------- Product Listing of vendor
    //     $this->db->distinct();
    //     $this->db->select('master.uid as master_id');
    //     $this->db->from('products_all_master as master');
    //     $this->db->join('products as p', 'p.master_product_id = master.uid');
    //     $this->db->join('vendors as v', 'v.uid = p.vendor_id');
    //     $this->db->where('v.uid',$vendor_id);
    //     $this->db->where_not_in('p.status',"DELETED");
    //     $query = $this->db->get();
    //     $query = $query->result();
    //     return (!empty($query)) ? $query : null;
    // }

    public function count_variants_of_product($master_id, $vendor_id)
    {
        $this->db->distinct();
        $this->db->select('variant_id');
        $this->db->where('master_product_id', $master_id);
        $this->db->where('vendor_id', $vendor_id);
        $query = $this->db->get('products');
        return $query->num_rows();
    }


    public function search_product_for_mobile($master_id, $name){
        
        $this->db->select('master.name as product_name, master.uid as master_id, p.uid as product_id, master.uid as master_id, c.name as category_name, b.name as brand_name, p.min_stock_qty, p.sale_price, p.purchase_price, p.has_variant');
        $this->db->from('products_all_master as master');
        $this->db->join('products as p', 'p.master_product_id = master.uid');
        $this->db->join('categories as c', 'master.category_id = c.uid');
        $this->db->join('brand as b', 'p.brand_id = b.uid');
        $this->db->where('master.uid', $master_id);
        $this->db->like('master.name', $name);
        $query = $this->db->get();
        $query = $query->result();
        return (!empty($query)) ? $query : null;
    }

    public function fetch_product_details($uid) {   #------------------- fetch product details by product_id
        // fetch images
        $this->db->select('uid, path, variant_id');
        $this->db->where('product_id', $uid);
        $images = $this->db->get('product_images');
        $images = $images->result_array();
        // fetch variants;
        $this->db->select('variant_id, colour, size, sale_price, purchase_price, wholesale_price, wholesale_minimum_quantity, opening_stock, min_stock_qty, price_per_unit, discount, discount_type ');
        $this->db->where('uid', $uid);
        $variant = $this->db->get('products');
        $variant = $variant->result_array();

        $this->db->select(
            'p.uid as product_id, p.sale_price, p.has_variant, p.description, p.discount, p.discount_type, 
            p.purchase_price, u.name as product_unit_id, c.name as category_name, b.name as brand_name,
            p.price_per_unit, p.opening_stock, p.min_stock_qty, p.wholesale_price, p.wholesale_minimum_quantity,
            p.size, p.colour, master.name'
        );
        $this->db->from('products as p');
        $this->db->join('brand as b', 'b.uid = p.brand_id');
        $this->db->join('unit_lists as u', 'u.uid = p.product_unit_id');
        $this->db->join('products_all_master as master', 'master.uid = p.master_product_id');
        $this->db->join('categories as c', 'c.uid = master.category_id');
        $this->db->where('p.uid', $uid);
        $query = $this->db->get();

        $product_details = $query->row();
        $product_details->product_images = $images;
        $product_details->variant_details = $variant;
        return $product_details;
        return (!empty($product_details)) ? $product_details : null;
    }

    public function get_master_id_by_product_id($product_id){
        $this->db->select('master_product_id');
        $this->db->where('uid', $product_id);
        $query=$this->db->get('products');
        $query=$query->result_array();
        return (!empty($query))? $query[0]['master_product_id']:null;
    }

    public function save_product_image($uid, $image, $product_id, $variant_id, $master_id)
    {
        $data = [
            field_uid => $uid,
            'product_id' => $product_id,
            'variant_id' => $variant_id,
            'master_product_id' => $master_id,
            'path' => $image,
            'main_image' => '1',
            field_modified_at => date(field_date)
        ];
        $this->db->insert(table_product_images, $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function delete_product_image($image_id)
    {
        $this->db->where('uid', $image_id);
        $this->db->delete(table_product_images);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    
    public function get_product_name_if_exist($product_name)    {   #--------Get product from master table
        $this->db->select('uid, name, category_id');
        $this->db->like('name', $product_name, 'after');
        $query = $this->db->get('products_all_master');
        $query = $query->result_array();
        // $final_array = [];
        foreach ($query as $key => $value) {
            $query[$key]['productId'] = $value['uid'];
            unset($query[$key]['uid']);
            //get category --start
            $category_id = "";
            $category_name = "";
            if (array_key_exists('category_id', $value)) {
                $category_id = $value['category_id'];
                $category_name = $this->get_category_name_by_category_id($category_id);
            }
            $arr = [
                'id' => $category_id,
                'name' => ucfirst($category_name)
            ];
            $query[$key]['category'] = $arr;
            unset($query[$key]['category_id']);
            //get category --end
            //get brand --start
            $brand_id = "";
            $brand_name = "";
            if (array_key_exists('brand_id', $value)) {
                $brand_id = $value['brand_id'];
                $brand_name = $this->get_brand_name_by_brand_id($brand_id);
            }
            $arr = [
                'id' => $brand_id,
                'name' => $brand_name
            ];
            $query[$key]['brand'] = $arr;
            unset($query[$key]['brand_id']);
            //get brand --end
        }
        return (!empty($query)) ? $query : [];
    }

    public function get_category_name_by_category_id($category_id)
    {
        $this->db->select(field_name);
        $this->db->where(field_uid, $category_id);
        $query = $this->db->get(table_categories);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['name'] : "";
    }

    public function get_brand_name_by_brand_id($brand_id)
    {
        $this->db->select(field_name);
        $this->db->where(field_uid, $brand_id);
        $query = $this->db->get(table_brand);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['name'] : "";
    }

    public function get_brand_according_category_id($category_id)
    {
        $this->db->select('uid, name');
        $this->db->where('first_level_category_id', $category_id);
        $query = $this->db->get(table_brand);
        $query = $query->result_array();
        return (!empty($query)) ? $query : "";
    }
    //=========================Fruits & Vegetables===============================================
    public function save_fruits_bussiness_details($document_id, $user_id, $owner_name, $bussiness_mobile, $building, $address, $kyc_document, $kyc_image)
    {
        $vendor_data = [
            "name" => $owner_name,
            "mobile" => $bussiness_mobile,
            "building" => $building,
            "address" => $address,
            "modified_at" => date(field_date),
        ];
        $document_data = [
            "uid" => $document_id,
            "user_id" => $user_id,
            "name" => $kyc_document,
            "path" => $kyc_image,
            "created_at" => date(field_date),
        ];
        $this->db->where('user_id', $user_id);
        $update = $this->db->update('vendors', $vendor_data);
        if ($update) {
            $this->db->insert('document', $document_data);
            return ($this->db->affected_rows() == 1 ? true : false);
           
        }
    }
    //===============================================================
    public function get_bussiness_type($user_id)
    {
        $this->db->select('bussiness_type');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('vendors');
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['bussiness_type'] : null;
    }

    // check user exist in documents table
    public function check_user_id_exist($user_id)
    {
        $this->db->select('uid');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('documents');
        $query = $query->result_array();
        return (!empty($query)) ? $query[0]['uid'] : null;
    }

    public function save_kyc_details($document_id, $user_id, $kyc_document, $kyc_image)
    {
        $data = [
            field_uid => $document_id,
            field_user_id => $user_id,
            'kyc_document' => $kyc_document,
            'kyc_image' => $kyc_image,
            'modified_at' => date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->get('documents');
        $row = $this->db->affected_rows();

        if ($row == 0) {
            $this->db->insert('documents', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        } else {
            $this->db->where('user_id', $user_id);
            $this->db->update('documents', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        }
    }

    public function save_bank_details_mobile($uid, $user_id, $account_name, $account_number, $account_ifsc)
    {
        $data = [
            field_uid => $uid,
            field_user_id => $user_id,
            'account_name' => $account_name,
            'account_number' => $account_number,
            'ifsc' => $account_ifsc,
            field_modified_at => date(field_date)
        ];

        $this->db->where('user_id', $user_id);
        $this->db->get('banking');
        $row = $this->db->affected_rows();

        if ($row == 0) {
            $this->db->insert('banking', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        } else {
            $this->db->where('user_id', $user_id);
            $this->db->update('banking', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        }
    }

    public function save_image_details($user_id, $name, $email, $profile_image, $document_data){
        $user_data = [
            field_name=>$name,
            field_email=>$email,
            field_profile_image => $profile_image,
            field_modified_at => date(field_date)
        ];
       
        $this->db->where(field_uid, $user_id);
        $update = $this->db->update(table_users, $user_data);
        if ($update) {
            $this->db->insert('document', $document_data);
            return ($this->db->affected_rows() > 0 ? true : false);
        
        }
    }

    public function save_fruit_Service_basic($user_id, $email, $name, $profile_image){
        $data=[
            field_name=>$name,
            field_email=>$email,
            field_profile_image=>$profile_image,
            field_modified_at=>date(field_date)
        ];
        $this->db->where(field_uid, $user_id);
        $this->db->update(table_users,$data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function save_bussiness_licence_details($licence_image, $date_of_expire, $user_id){
        $data=[
            'licence_image'=>$licence_image,
            'expire_date'=>$date_of_expire,
            'modified_at'=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('documents', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }


    public function display_inventory_items($vendor_id){
        $this->db->select('m.name as master_name, p.sale_price, p.purchase_price, p.min_stock_qty, p.colour, p.size, b.name as brand_name, p.uid as product_id, p.variant_id');
        $this->db->from('products_all_master as m');
        $this->db->join('products as p', 'p.master_product_id = m.uid');
        $this->db->join('brand as b', 'b.uid = p.brand_id');
        $this->db->where('p.vendor_id', $vendor_id);
        $this->db->where_not_in('p.status', 'DELETED');
        $query=$this->db->get();
        $query=$query->result();
        return(!empty($query))? $query:"";
    }

    public function get_image_product($product_id){
        $this->db->select('path');
        $this->db->where('product_id', $product_id);
        $query=$this->db->get('product_images');
        $query=$query->result_array();
        return (!empty($query))?$query[0]:null;
    }

    public function fetch_product_details_for_edit($product_id){
        $this->db->select(
            'm.name as master_name, p.sale_price, p.purchase_price, p.min_stock_qty, p.colour, p.size, b.name as brand_name, p.uid as product_id, p.variant_id, c.name as category, p.product_unit_id, p.sku, p.vendor_id, p.description, p.sale_price_tax_type, p.discount, p.discount_type, p.tax_rate_id,
            p.wholesale_price, p.wholesale_price_tax_type, p.wholesale_minimum_quantity, p.purchase_price, p.purchase_price_tax_type, 
            p.price_per_unit, p.date_as_of_stock, p.location, p.opening_stock'
        );
        $this->db->from('products_all_master as m');
        $this->db->join('products as p', 'p.master_product_id=m.uid');
        $this->db->join('brand as b', 'b.uid=p.brand_id');
        $this->db->join('categories as c', 'c.uid=m.category_id');
        $this->db->where('p.uid', $product_id);
        $query=$this->db->get();
        $query=$query->result_array();
        return(!empty($query))? $query[0]:"";
    }

    public function update_inventory_product_details($product_id, $vendor_id, $data){
        $this->db->where(['uid'=>$product_id, 'vendor_id'=>$vendor_id]);
        $this->db->update('products', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }
    public function delete_inventory_product($product_id){
        $data=[
            'status'=>'DELETED'
        ];

        $this->db->where('uid',$product_id);
        $this->db->update('products', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function get_user_id_by_vendor_id($vendor_id){
        $this->db->select('user_id');
        $this->db->where('uid', $vendor_id);
        $query=$this->db->get('vendors');
        $query=$query->result_array();
        return (!empty($query))? $query[0]['user_id']:"";
    }

    public function set_store_settings_details_by_default($store_id, $user_id, $vendor_id){
        $this->db->where('user_id', $user_id);
        $this->db->get('store_settings');
        $row=$this->db->affected_rows();
        if($row==0){
            $data=[
                'uid'=>$store_id,
                'user_id'=>$user_id,
                'vendor_id'=>123,
                'minimum_order_value'=>0,
                'delivery_charges'=>0,
                'free_delivery'=>'DEACTIVE',
                'home_delivery'=>'DEACTIVE',
                'pickup_from_store'=>'DEACTIVE',
                'stock_management'=>'DEACTIVE',
                'cod'=>'DEACTIVE',
                'online_payment'=>'DEACTIVE',
                'status'=>'ACTIVE',
                'created_at'=>date(field_date),
                'modified_at'=>date(field_date)
            ];
            $this->db->insert('store_settings', $data);
            return ($this->db->affected_rows() == 1 ? true : false);
        }
    }

    public function get_store_settings_details($user_id){
        $this->db->select('s.user_id, b.account_name, b.account_number, b.ifsc, b.upi_id, s.minimum_order_value, s.delivery_charges, s.home_delivery, s.pickup_from_store, s.cod, s.online_payment, s.free_delivery, s.stock_management');
        $this->db->from('banking as b');
        $this->db->join('store_settings as s', 'b.user_id = s.user_id');
        $this->db->where('s.user_id', $user_id);
        $this->db->where('s.status', const_active);
        $query=$this->db->get();
        $query=$query->result();
        return (!empty($query))? $query:[];

    }

    public function  active_free_delivery($user_id){
        $data=[
            'free_delivery'=>const_active,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function  deactive_free_delivery($user_id){
        $data=[
            'free_delivery'=>const_deactive,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function  active_home_delivery($user_id){
        $data=[
            'home_delivery'=>const_active,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function  deactive_home_delivery($user_id){
        $data=[
            'home_delivery'=>const_deactive,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function active_pickup_from_store($user_id){
        $data=[
            'pickup_from_store'=>const_active,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function deactive_pickup_from_store($user_id){
        $data=[
            'pickup_from_store'=>const_deactive,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function active_stock_management($user_id){
        $data=[
            'stock_management'=>const_active,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function deactive_stock_management($user_id){
        $data=[
            'stock_management'=>const_deactive,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function active_cod($user_id){
        $data=[
            'cod'=>const_active,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function deactive_cod($user_id){
        $data=[
            'cod'=>const_deactive,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function active_online_payment($user_id){
        $data=[
            'online_payment'=>const_active,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function deactive_online_payment($user_id){
        $data=[
            'online_payment'=>const_deactive,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function update_bank_details($user_id, $account_name, $account_number, $ifsc){
        $data=[
            "account_name"=>$account_name,
            "account_number"=>$account_number,
            "ifsc"=>$ifsc,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('banking', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }

    public function update_delivery_charges($user_id, $minimum_order_value, $delivery_charges){
        $data=[
            "minimum_order_value"=>$minimum_order_value,
            "delivery_charges"=>$delivery_charges,
            field_modified_at=>date(field_date)
        ];
        $this->db->where('user_id', $user_id);
        $this->db->update('store_settings', $data);
        return ($this->db->affected_rows() == 1 ? true : false);
    }


    public function get_all_product_from_master_table(){
        $this->db->select('uid as master_id, name');
        $query=$this->db->get('products_all_master');
        $query=$query->result_array();
        return (!empty($query))?$query:'';
    }

    public function get_products_from_master_table(){
        $this->db->select('uid as master_id, name');
        $query=$this->db->get('products_all_master');
        $query=$query->result();
        return (!empty($query))?$query:'';

    }

    public function get_product_by_category_from_master_table($category_id){
        $this->db->select('uid as master_id, name');
        $this->db->where('category_id', $category_id);
        $query=$this->db->get('products_all_master');
        $query=$query->result();
        return (!empty($query))?$query:'';
    }

    public function get_selected_express_add_product($id){
        $this->db->select('m.uid as master_id, m.name, m.category_id, c.name as category_name');
        $this->db->from('products_all_master as m');
        $this->db->join('categories as c', 'c.uid=m.category_id');
        $this->db->where('m.uid', $id);
        $query=$this->db->get();
        $query=$query->result_array();
        return (!empty($query))?$query:null;
    }
    

    public function save_express_image($image_data, $product_data){
        $insert=$this->db->insert_batch('product_images', $image_data);
        if($insert){
            $this->db->insert('products', $product_data);
            return ($this->db->affected_rows() == 1 ? true : false);
        }
    }

    public function add_product_express($data){
        $this->db->insert_batch('products', $data);
        return ($this->db->affected_rows() > 1 ? true : false);
    }
    
    public function get_brand_name_by_category_id($category_id){
        $this->db->select('uid, name');
        $this->db->where('first_level_category_id', $category_id);
        $query=$this->db->get('brand');
        $query=$query->result_array();
        return(!empty($query))?$query:null;
    }


    public function save_express_product($product_data, $image_data){
        $product=$this->db->insert('products', $product_data);
        if($product){
            $this->db->insert_batch('product_images', $image_data);
            return ($this->db->affected_rows() > 0 ? true : false);
        }

    }





}
