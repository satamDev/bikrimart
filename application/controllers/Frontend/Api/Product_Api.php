<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_Api extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
       
    }

    private function init_customer_model()
    {
        $this->load->model('Customer/Customer_model');
    }
    private function init_product_model()
    {
        $this->load->model('Customer/Product_model');
    }

    private function init_uid_server_model()
    {
        $this->load->model('Uid_server_model');
    }

    private function response($data, $status)
    {
        return $this->output->set_content_type("application/json")->set_status_header($status)->set_output(json_encode($data));
    }

    private function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata('customer_id'))) ? true : false;
        return $logged_in;
    }

    private function upload_user_image($path, $image)
    {
        $user_image_path = "";
        $filename_array = explode(".", $image[param_name]);
        $this->init_uid_server_model();
        $file_name = $this->Uid_server_model->generate_Uid(KEY_IMAGE);
        // $file_name = $image[param_name];
        $file_extension = end($filename_array);
        $file_save_path = $path . $file_name . "." . $file_extension;
        // $file_save_path = $path . $file_name;
        $file_upload_path = FCPATH . $file_save_path;
        if (move_uploaded_file($image[param_temp_name], $file_upload_path)) {
            $user_image_path = $file_save_path;
        }
        return $user_image_path;
    }


    public function display_product_for_shop()
    {
        $vendor_id = $this->input->get(query_param_vendor_id);

        $pageSize = ($this->input->get(query_param_page_size) != null) ? $this->input->get(query_param_page_size) : 10;
        $pageNo = ($this->input->get(query_param_page_no) != null) ? $this->input->get(query_param_page_no) : 0;

        $this->init_customer_model();
        $result = $this->Customer_model->display_product_for_shop($vendor_id, $pageSize, $pageNo);

        $data = $result['data'];
        $pagination_data = $result['pagination_data'];

        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data, "pagination" => $pagination_data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_user_cart_product_id()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $data = $this->Customer_model->get_user_cart_product_id($customer_id);
            if(!empty($data)){
                $this->response(["success" => true, "message" => "Details found", "data" => $data], 200);
            }
            else{
                $this->response(["success" => false, "message" => "Details not found"], 200);
            }
        } else {
            $session_id = $this->input->post('session_id');
            $this->init_customer_model();
            $data = $this->Customer_model->get_user_session_cart_product_id($session_id);
            if(!empty($data)){
                $this->response(["success" => true, "message" => "Details found", "data" => $data], 200);
            }
            else{
                $this->response(["success" => false, "message" => "Details not found"], 200);
            }
        }
    }


    public function get_all_vendor_list()   // show store name list
    {
        $category_id = $this->input->post(param_id);

        $this->init_customer_model();
        $data = $this->Customer_model->get_all_vendor_list($category_id);

        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_vendor_product_list()
    {
        $vendor_id = $this->input->post(param_id);
        $this->init_customer_model();
        $data = $this->Customer_model->get_vendor_product_list($vendor_id);
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_product_details_by_vendor_id(){
        $master_id = $this->input->post('master_id');
        $vendor_id = $this->input->post('vendor_id');
        $this->init_customer_model();
        $data = $this->Customer_model->get_product_details_by_vendor_id($vendor_id, $master_id);
        if(!empty($data)){
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        }
        else{
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function getData(){
        $this->init_customer_model();
        $select=["id", "master_id"];
        $condition=["mobile"=>'8017454808'];
        $data = $this->Customer_model->getData($select, $condition);
        echo"<pre>";
        print_r($data);
    }

    public function get_quantity_of_product_in_cart(){
        $this->init_product_model();
        $product_id = $this->input->post(param_id);
        $data = $this->Product_model->get_quantity_of_product_in_cart($product_id);
        if(!empty($data)){
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        }
        else{
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }


}