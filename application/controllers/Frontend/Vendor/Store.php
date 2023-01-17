<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Store extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function setting()
    {
        if ($this->is_user_logged_in()) {

            $mobile = $this->session->userdata(param_mobile);
            $vendor_id = $this->session->userdata('vendor_id');
            $this->init_vendor_model();
            if (!empty($mobile)) {
                $user_id = $this->Vendor_model->get_user_id_by_mobile($mobile);
            } else {
                $user_id = $this->Vendor_model->get_user_id_by_vendor_id($vendor_id);
            }
            $this->init_uid_server_model();
            $store_id = $this->Uid_server_model->generate_uid('KEY_STORE');

            $this->Vendor_model->set_store_settings_details_by_default($store_id, $user_id, $vendor_id);

            $data['store_data'] = $this->Vendor_model->get_store_settings_details($user_id);

            $this->load->view('vendor/inc/header_link');
            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/store_setting', $data);
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/store_settings_js');
        } else {
            redirect(base_url('vendor/view_login'));
        }
    }

}