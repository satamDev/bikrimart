<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Signup extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/register');
        // $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
        $this->load->view('vendor/inc/custom_js/registration_js');
    }

}