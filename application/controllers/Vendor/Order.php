<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Vendor/Common.php");

class Order extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->is_user_logged_in())
        {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/orders');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/orders_js');
        }
        else
        {
            redirect_to(base_url("vendor/login"));
        }
    }

    public function new()
    {
        if ($this->is_user_logged_in())
        {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/new_order');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
        }
        else
        {
            redirect_to(base_url("vendor/login"));
        }
    }

    public function completed()
    {
        if ($this->is_user_logged_in())
        {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/completed_order');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
        }
        else
        {
            redirect_to(base_url("vendor/login"));
        }
    }

    public function cancelled()
    {
        if ($this->is_user_logged_in())
        {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/cancelled_order');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
        }
        else
        {
            redirect_to(base_url("vendor/login"));
        }
    }

}