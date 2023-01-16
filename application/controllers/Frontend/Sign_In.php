<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sign_In extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
        Header(header_allow_origin); //for allow any domain, insecure
        Header(header_allow_headers); //for allow any headers, insecure
        Header(header_allow_methods); //method allowed
    }

       
    public function view_send_otp()
    {
        $header_data['meta_title'] = 'Sign In | Bikrimart';
        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/enter_mobile_number');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/register_js');
    }

    public function view_verify_otp()
    {
        $header_data['meta_title'] = 'Sign In  | Bikrimart';
        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/otp');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/register_js');
    }

}
