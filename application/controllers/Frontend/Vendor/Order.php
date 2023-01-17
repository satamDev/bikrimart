<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Order extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/orders');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }

    public function new()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/new_order');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }

    public function completed()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/completed_order');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }

    public function cancelled()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/cancelled_order');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }

}