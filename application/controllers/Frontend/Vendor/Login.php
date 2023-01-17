<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Login extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->is_user_logged_in()) {
            redirect('Vendor/view_dashboard');
        } else {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/login');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/login_js');
        }
    }

}