<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Address extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
        Header(header_allow_origin); //for allow any domain, insecure
        Header(header_allow_headers); //for allow any headers, insecure
        Header(header_allow_methods); //method allowed
    }

    private function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata('customer_id'))) ? true : false;
        return $logged_in;
    }

    
    public function view_add_name_address()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Give Details | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/name_address');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
            $this->load->view('customer/inc/custom_js/name_address_js');
        } else {
            redirect(base_url('customer/send_otp'));
        }
    }

    public function view_add_deliver_address()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Address | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/add_deliver_address');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
            $this->load->view('customer/inc/custom_js/delivery_address_js');
        } else {
            redirect(base_url('customer/send_otp'));
        }
    }

    public function view_detail_deliver_address()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Detail Address | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/change_deliver_address');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
            $this->load->view('customer/inc/custom_js/delivery_address_js');
        } else {
            redirect(base_url('customer/send_otp'));
        }
    }



}