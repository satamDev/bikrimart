<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Vendor/Common.php");

class Dashboard extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->is_user_logged_in()) {
            $data_header = [
                'header_link' => [
                    'title' => 'Bikrimart | Vendor'
                ],
                'sidebar' => [],
                'header' => []
            ];
            $data_footer = [
                'footer' => []
            ];

            $vendor_id = $this->session->userdata('vendor_id');
            $this->init_vendor_model();
            $user_id = $this->Vendor_model->get_user_id_by_vendor_id($vendor_id);
            $this->init_uid_server_model();
            $store_id = $this->Uid_server_model->generate_uid('KEY_STORE');
            $this->Vendor_model->set_store_settings_details_by_default($store_id, $user_id, $vendor_id);
            $data['store_data'] = $this->Vendor_model->get_store_settings_details($user_id);

            $this->load_headers($data_header);
            $this->load->view('vendor/dashboard', $data);
            $this->load_footers($data_footer);
            $this->load->view('vendor/inc/custom_js/products_js');
            $this->load->view('vendor/inc/custom_js/global_js');
            $this->load->view('vendor/inc/custom_js/product_list_js');
            $this->load->view('vendor/inc/custom_js/dashboard_js');
        } else {
            redirect(base_url('vendor/view_login'));
        }
    }

}