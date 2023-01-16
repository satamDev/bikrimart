<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Address_Api extends CI_Controller
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

    private function response($data, $status)
    {
        return $this->output->set_content_type("application/json")->set_status_header($status)->set_output(json_encode($data));
    }
    private function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata('customer_id'))) ? true : false;
        return $logged_in;
    }

    public function get_user_name()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id'); // customer user_id
            if (!empty($user_id)) {
                $this->init_customer_model();
                $data = $this->Customer_model->get_user_name($user_id); // fetch name & email
                $this->response(["success" => true, "message" => "Details found", "data" => $data], 200);
            }
        } else {
        }
    }

    public function save_user_details()
    {
        $user_id = $this->session->userdata('customer_id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        if (empty($name)) {
            $this->response(["success" => false, "message" => "Enter Your Personal Details"], 200);
        } else {
            $this->init_customer_model();
            $added = $this->Customer_model->save_user_name($user_id, $name, $email);
            if ($added) {
                $this->response(["success" => true, "message" => "Details Save Successfully !", "redirect" => base_url('customer/address/details')], 200);
                // $this->session->set_userdata('openChekModal', 'checked');
            } else {
                $this->response(["success" => false, "message" => "Give Your address details"], 200);
            }
        }
    }

    public function check_customer_id_exist()
    {
        $user_id = $this->session->userdata('customer_id');
        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
        $status = $this->Customer_model->check_customer_id_exist($customer_id, 'customer_address');
        if ($status) {
            $this->response(["success" => true, "message" => "found"], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }


    public function add_deliver_address()
    {
        $user_id = $this->session->userdata('customer_id');
        $address = $this->input->post('address');

        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');

        if (!empty($address)) {
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $this->init_uid_server_model();
            $address_id = $this->Uid_server_model->generate_uid(KEY_ADDRESS);
            $added = $this->Customer_model->save_user_address($address_id, $customer_id, $address, $lat, $lng);
            if ($added) {
                $this->response(["success" => true, "message" => "Your address is save successfully !", "redirect" => base_url('customer/details')], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Add Delivery Address"], 200);
        }
    }

    public function get_delivery_price()
    {
        $vendor_id = $this->input->post('vendor_id');
        $this->init_customer_model();
        $data = $this->Customer_model->get_delivery_price_of_vendor($vendor_id);
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
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

    public function save_detail_deliver_address()
    {
        $user_id = $this->session->userdata('customer_id');

        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
        $house_number = $this->input->post('house_number');
        $direction = $this->input->post('direction');
        $landmark = $this->input->post('landmark');
        $address_type = $this->input->post('address_type');


        if (empty($area)) {
            $this->response(["success" => false, "message" => "Enter Apartment/Road/Area"], 200);
            return;
        }

        if (empty($pincode) && strlen($pincode) != 6) {
            $this->response(["success" => false, "message" => "Enter Valid Pincode"], 200);
            return;
        }
        if (empty($address_type)) {
            $this->response(["success" => false, "message" => "Select Your Address Type"], 200);
            return;
        }

        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

        $data = $this->Customer_model->save_detail_deliver_address($customer_id, $pincode, $area, $house_number, $direction, $landmark, $address_type);
        if ($data) {
            $this->response(["success" => true, "message" => "success", "redirect" => base_url('shop')], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function get_detail_user_address()
    {
        $user_id = $this->session->userdata('customer_id');
        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
        $data = $this->Customer_model->get_detail_user_address($customer_id);
        if ($data) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_deliver_schedule_time()
    {
        $this->init_customer_model();
        $current_date = date('Y-m-d');
        $max_date = date('Y-m-d', strtotime('+7 days'));
        $current_time = date('H');
        $deliver_time = $current_time + 2;

        $data = $this->Customer_model->get_today_deliver_schedule_time($deliver_time);

        if ($data) {
            $this->response(["success" => true, "message" => "found", "date" => $current_date, "max_date" => $max_date, "data" => $data, "time" => $current_time], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_deliver_time_accroding_date()
    {
        $this->init_customer_model();
        $current_date = date('Y-m-d');
        $max_date = date('Y-m-d', strtotime('+7 days'));
        $current_time = date('H');
        $deliver_time = $current_time + 2;

        $delivery_date = $this->input->post('delivery_date');

        if ($delivery_date == $current_date) {
            $data = $this->Customer_model->get_today_deliver_schedule_time($deliver_time);
        } else {
            $data = $this->Customer_model->get_deliver_schedule_time();
        }

        if ($data) {
            $this->response(["success" => true, "message" => "found", "date" => $current_date, "max_date" => $max_date, "data" => $data, "time" => $deliver_time], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function display_location()
    {
        $this->init_customer_model();
        $data = $this->Customer_model->display_location();
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_customer_address()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $exist = $this->Customer_model->is_user_exist($customer_id);

            if ($exist) {
                $data = $this->Customer_model->get_customer_address($customer_id);
                if (empty($data) || $data == null || $data == "") {
                    $this->response(["success" => false, "message" => "Address not found ! Give Your address details"], 200);
                } else {
                    $this->response(["success" => true, "message" => "found", "data" => $data], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "Address not found ! Give Your address details"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Address not found ! Give Your address details"], 200);
        }
    }



}