<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cart_Api extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
        Header(header_allow_origin); //for allow any domain, insecure
        Header(header_allow_headers); //for allow any headers, insecure
        Header(header_allow_methods); //method allowed
    }

    private function init_customer_model()
    {
        $this->load->model('Customer/Customer_model');
    }

    private function init_uid_server_model()
    {
        $this->load->model('Uid_server_model');
    }

    private function init_common_model()
    {
        $this->load->model('Common_model');
    }

    private function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata('customer_id'))) ? true : false;
        return $logged_in;
    }

    private function response($data, $status)
    {
        return $this->output->set_content_type("application/json")->set_status_header($status)->set_output(json_encode($data));
    }

    

    public function add_product_to_cart()
    {
        if ($this->is_user_logged_in()) {

            $user_id = $this->session->userdata('customer_id');   //  customer user_id
            $product_qty = $this->input->post('qty');
            $product_id = $this->input->post('product_id');
            $master_id = $this->input->post('master_id');
            $vendor_id = $this->input->post('vendor_id');
            $brand_id = $this->input->post('brand_id');

            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

            if (!empty($user_id)) {
                $exist = $this->Customer_model->check_product_exist($customer_id, $product_id, $vendor_id, $brand_id, 'cart_items');
                if ($exist) {
                    $update = $this->Customer_model->update_cart_item($customer_id, $product_id, $product_qty, $vendor_id, $brand_id);
                    if ($update) {
                        $this->response(["success" => true, "message" => "Product quantity updated"], 200);
                    } else {
                        $this->response(["success" => false, "message" => "Something went wrong"], 200);
                    }
                } else {
                    $this->init_uid_server_model();
                    $cart_id = $this->Uid_server_model->generate_uid(KEY_CART);
                    $insert = $this->Customer_model->insert_cart_item($cart_id, $customer_id, $product_id, $master_id, $product_qty, $vendor_id, $brand_id);
                    if ($insert) {
                        $this->response(["success" => true, "message" => "Product add to bag successfully"], 200);
                    } else {
                        $this->response(["success" => false, "message" => "Failed to add product to bag"], 200);
                    }
                }
            }
        } else {

            $this->init_uid_server_model();
            $product_qty = $this->input->post('qty');
            $product_id = $this->input->post('product_id');
            $master_id = $this->input->post('master_id');
            $vendor_id = $this->input->post('vendor_id');
            $brand_id = $this->input->post('brand_id');

            $session = $this->input->post('session_id');

            if (empty($session) || $session == '') {
                $session_id = $this->Uid_server_model->generate_uid(KEY_SESSION);
            } else {
                $session_id = $session;
            }

            $this->init_customer_model();

            $exist = $this->Customer_model->check_session_product_exist($session_id, $product_id, $vendor_id, $brand_id, 'session_cart_item');
            if ($exist) {
                $update = $this->Customer_model->update_session_cart_item($session_id, $product_id, $product_qty, $vendor_id, $brand_id);
                if ($update) {
                    $this->response(["success" => true, "message" => "Product quantity updated", "data" => $session_id], 200);
                } else {
                    $this->response(["success" => false, "message" => "Something went wrong"], 200);
                }
            } else {
                $cart_id = $this->Uid_server_model->generate_uid(KEY_CART);
                $insert = $this->Customer_model->insert_session_cart_item($session_id, $cart_id, $product_id, $master_id, $product_qty, $vendor_id, $brand_id);
                if ($insert) {
                    $this->response(["success" => true, "message" => "Product add to bag successfully", "data" => $session_id], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to add product to bag"], 200);
                }
            }
        }
    }

    public function get_price_and_product_default()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');   //  customer user_id
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $product = $this->Customer_model->get_product_default($customer_id);

            $data = $this->Customer_model->get_master_id_vendor_id_product_qty_by_customer_id($customer_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $vendor_id = $d->vendor_id;
                    $product_qty[$i] = $d->product_qty;
                    $price[$i] = $this->Customer_model->get_product_price($product_id, $vendor_id);
                }
                if (!empty($product)) {
                    $this->response(["success" => true, "message" => "found", "product" => $product, "price" => $price, "qty" => $product_qty], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {

            $this->init_customer_model();
            $session_id = $this->input->post('session_id');

            $product = $this->Customer_model->get_session_product_default($session_id);

            $data = $this->Customer_model->get_session_master_vendor_id_by_customer_id($session_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $vendor_id = $d->vendor_id;
                    $product_qty[$i] = $d->product_qty;
                    $price[$i] = $this->Customer_model->get_product_price($product_id, $vendor_id);
                }
                if (!empty($product)) {
                    $this->response(["success" => true, "message" => "found", "product" => $product, "price" => $price, "qty" => $product_qty], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        }
    }

    public function display_cart_items()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');   //  customer user_id
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $data = $this->Customer_model->get_cart_details_of_customer($customer_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $product[$i] = $this->Customer_model->get_cart_product_detail($product_id);
                }

                if (!empty($data)) {
                    $this->response(["success" => true, "message" => "found", "data" => $data, "details" => $product], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {
            $this->init_customer_model();
            $session_id = $this->input->post('session_id');
            $data = $this->Customer_model->get_session_cart_details_of_customer($session_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $product[$i] = $this->Customer_model->get_cart_product_detail($product_id);
                }

                if (!empty($data)) {
                    $this->response(["success" => true, "message" => "found", "data" => $data, "details" => $product], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        }
    }

    public function delete_cart_item()
    {
        if ($this->is_user_logged_in()) {
            $cart_id = $this->input->post('id');
            $this->init_customer_model();
            $delete = $this->Customer_model->delete_cart_item($cart_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        } else {
            $cart_id = $this->input->post('id');
            $this->init_customer_model();
            $delete = $this->Customer_model->delete_session_cart_item($cart_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        }
    }

    public function delete_product_from_cart()
    {

        if ($this->is_user_logged_in()) {
            $product_id = $this->input->post('product_id');
            $vendor_id = $this->input->post('vendor_id');
            $user_id = $this->session->userdata('customer_id');

            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

            $delete = $this->Customer_model->delete_product_from_cart($product_id, $vendor_id, $customer_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Successfully Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        } else {
            $product_id = $this->input->post('product_id');
            $vendor_id = $this->input->post('vendor_id');
            $session_id = $this->input->post('session_id');
            $this->init_customer_model();

            $delete = $this->Customer_model->delete_product_from_session_cart($product_id, $vendor_id, $session_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        }
    }

    public function display_delivery_details()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $vendor = $this->Customer_model->get_vendor_id_by_customer_id($customer_id);
            foreach ($vendor as $i => $vendor) {
                $vendor_id = $vendor->vendor_id;
                $data[$i] = $this->Customer_model->display_delivery_details($vendor_id, 'cart_items');
            }
            if (!empty($data)) {
                $this->response(["success" => true, "message" => "found", "data" => $data], 200);
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {
            $session_id = $this->input->post('session_id');
            $this->init_customer_model();
            $vendor = $this->Customer_model->get_vendor_id_by_session_id($session_id);
            foreach ($vendor as $i => $vendor) {
                $vendor_id = $vendor->vendor_id;
                $data[$i] = $this->Customer_model->display_delivery_details($vendor_id, 'session_cart_item');
            }
            if (!empty($data)) {
                $this->response(["success" => true, "message" => "found", "data" => $data], 200);
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        }
    }
























    

    ///////////////////////////////////////////////




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






}