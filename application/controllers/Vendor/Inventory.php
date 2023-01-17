<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Vendor/Common.php");

class Inventory extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->is_user_logged_in()) {
            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/inventory');
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/inventory_js');
            $this->load->view('vendor/inc/custom_js/global_js');
        } else {
            redirect(base_url('vendor/view_login'));
        }
    }

}