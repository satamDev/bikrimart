<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Signin_Api extends CI_Controller
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

    public function send_otp()
    {
        $mobile = $this->input->post(param_mobile);
        $this->init_common_model();
        if (!empty($mobile) || $mobile != null) {
            $user = $this->Common_model->check_user_exist($mobile, field_mobile, table_users);
            $otp = rand(1000, 9999);
            $this->init_uid_server_model();
            $customer_id = $this->Uid_server_model->generate_uid(KEY_CUSTOMER);
            $token = $this->Uid_server_model->generate_uid(KEY_TOKEN);
            $this->init_customer_model();
            if (!empty($user) || $user != null) {
                // when user already exist 
                $user_id  = $this->Customer_model->get_user_by_mobile($mobile);
                // $user_id = $user->uid;
                $otp_created_at = $this->Customer_model->get_otp_create_time($user_id);
                // $otp_created_at = $otp_first_created_at->created_at;
                if ($this->Customer_model->set_otp($user_id, $token, $otp, $otp_created_at)) {
                    $this->response(["success" => true, "message" => "Otp sent successfully !".' '.$otp, "redirect" => base_url('customer/verify')], 200);
                } else {
                    $this->response(["success" => true, "message" => "Otp sent successfully !".' '.$otp, "redirect" => base_url('customer/verify')], 200);
                }
                $this->session->set_userdata('customer_mobile', $mobile);
            } else {
                // when user not exist
                // register user first then save otp in user table
                $uid = $this->Uid_server_model->generate_uid(KEY_USER);
                $add_new_customer = $this->Customer_model->insert_customer_data($uid, $mobile, 'user_customer', $customer_id, $otp, $token);
                if ($add_new_customer) {
                    $this->session->set_userdata('customer_mobile', $mobile);
                    $this->response(["success" => true, "message" => "Otp sent successfully !".' '.$otp, "redirect" => base_url('customer/verify')], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to sent otp"], 200);
                }
            }
        } else {
            $this->response(["success" => false, "message" => "Enter Your Mobile Number"], 200);
        }
    }

    public function verify_otp()
    {
        $mobile = $this->session->userdata('customer_mobile');
        $otp = $this->input->post(param_otp);
        $session_id = $this->input->post('session_id');

        if (!empty($mobile) || $mobile != null) {
            $this->init_customer_model();
            $user_id = $this->Customer_model->get_user_by_mobile($mobile);
            // $user_id = $user->uid;
            if (!empty($user_id) || $user_id != null) {
                $original_otp  = $this->Customer_model->check_otp($user_id);
                if ($original_otp != $otp) {
                    $this->response(["success" => false, "message" => "Otp not matched !"], 200);
                } else {
                    $gid = $this->Customer_model->get_gid_by_user_id($user_id);
                    if ($gid == "") {
                        $this->session->set_userdata('customer_id', $user_id);  // user_id
                        //uesr newly registered

                        $this->response(["success" => true, "message" => "Otp matched !"], 200);
                        $this->init_uid_server_model();
                        $new_gid =  $this->Uid_server_model->generate_uid(KEY_GROUP);
                        $this->Customer_model->set_gid_by_user_id($user_id, $new_gid);  //users table -> uid
                    } else {
                        $this->session->set_userdata('customer_id', $user_id);  // user_id
                        $this->add_session_cart_items_in_database($session_id);
                        $this->response(["success" => true, "message" => "User already exist !", "redirect" => base_url()], 200);
                    }
                }
            } else {
                $this->response(["success" => false, "message" => "User not exist !"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Enter Your Mobile Number"], 200);
        }
    }

    public function add_session_cart_items_in_database($session_id)
    {
        $user_id = $this->session->userdata('customer_id');
        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

        if (!empty($user_id)) {
            $data = $this->Customer_model->get_session_cart_products($session_id);

            if (!empty($data)) {
                foreach ($data as $product) {
                    $cart_id = $product->cart_id;
                    $master_id = $product->master_id;
                    $product_id = $product->product_id;
                    $product_qty = $product->product_qty;
                    $vendor_id = $product->vendor_id;
                    $brand_id = $product->brand_id;

                    $exist = $this->Customer_model->check_product_exist($customer_id, $product_id, $vendor_id, $brand_id, 'cart_items');
                    if ($exist) {
                        $this->Customer_model->update_cart_item_from_session($cart_id, $customer_id, $product_id, $product_qty, $vendor_id, $brand_id);
                    } else {
                        $this->Customer_model->insert_cart_item_from_session($cart_id, $customer_id,  $master_id, $product_id, $product_qty, $vendor_id, $brand_id);
                    }
                }
                // unset($_SESSION['cart']);
            }
        }
    }
    
    public function logout()
    {
        // $this->session->unset_userdata(field_name);
        $this->session->unset_userdata('customer_mobile');
        $this->session->unset_userdata('customer_id');
        redirect(base_url());
    }

}