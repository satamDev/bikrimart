<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Product extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        if ($this->is_user_logged_in()) {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/add_products');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/products_js');
            $this->load->view('vendor/inc/custom_js/global_js');
        } else {
            redirect(base_url('vendor/view_login'));
        }
    }

    public function express()
    {
        if ($this->is_user_logged_in()) {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/add_product_express');
            // $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/add_product_express_js');
            // $this->load->view('vendor/inc/custom_js/regular_js');
            $this->load->view('vendor/inc/custom_js/image_uploader_js');
        } else {
            redirect(base_url('vendor/view_login'));
        }
    }

    public function list()
    {
        if ($this->is_user_logged_in()) {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/product_list');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/product_list_js');
        } else {
            redirect(base_url('vendor/view_login'));
        }
    }
}