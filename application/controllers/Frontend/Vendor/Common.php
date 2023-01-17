<?php defined("BASEPATH") or exit("No direct script access allowed");

class Common extends CI_controller {

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
        Header(header_allow_origin); //for allow any domain, insecure
        Header(header_allow_headers); //for allow any headers, insecure
        Header(header_allow_methods); //method allowed
    }

    public function response($data, $status)
    {
        return $this->output->set_content_type("application/json")->set_status_header($status)->set_output(json_encode($data));
    }

    public function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata(field_name))) ? true : false;
        return $logged_in;
    }

    public function upload_user_image($path, $image)
    {
        $user_image_path = "";
        $filename_array = explode(".", $image[param_name]);
        $this->init_uid_server_model();
        $file_name = $this->Uid_server_model->generate_Uid(KEY_IMAGE);
        // $file_name = $image[param_name];
        $file_extension = end($filename_array);
        $file_save_path = $path . $file_name . "." . $file_extension;
        // $file_save_path = $path . $file_name;
        $file_upload_path = FCPATH . $file_save_path;
        if (move_uploaded_file($image[param_temp_name], $file_upload_path)) {
            $user_image_path = $file_save_path;
        }
        return $user_image_path;
    }

    public function upload_image($path, $image_name, $tmp_name)
    {
        $user_image_path = "";
        $filename_array = explode(".", $image_name);
        $this->init_uid_server_model();
        $file_name = $this->Uid_server_model->generate_Uid(KEY_IMAGE);
        // $file_name = $image[param_name];
        $file_extension = end($filename_array);
        $file_save_path = $path . $file_name . "." . $file_extension;
        // $file_save_path = $path . $file_name;
        $file_upload_path = FCPATH . $file_save_path;
        if (move_uploaded_file($tmp_name, $file_upload_path)) {
            $user_image_path = $file_save_path;
        }
        return $user_image_path;
    }

    public function load_headers($data)
    {
        $this->load->view('vendor/inc/header_link', $data['header_link']);
        $this->load->view('vendor/inc/sidebar', $data['sidebar']);
        // $this->load->view('vendor/inc/header', $data['header']);
    }

    public function load_footers($data)
    {
        $this->load->view('vendor/inc/footer', $data['footer']);
        $this->load->view('vendor/inc/footer_link', $data['footer']);
    }

    public function index()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/header');
        $this->load->view('vendor/index');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }

    public function init_vendor_model()
    {
        $this->load->model('Vendor/Vendor_model');
    }

    public function init_uid_server_model()
    {
        $this->load->model('Uid_server_model');
    }

    public function init_sku_generater_model()
    {
        $this->load->model('Sku_generater_model');
    }

    public function init_common_model()
    {
        $this->load->model('Common_model');
    }

    public function init_login_model()
    {
        $this->load->model('Vendor/Login_model');
    }

    public function load_admin()
    {        # for testing purpose
        $data_header = [
            'header_link' => [
                'title' => 'Bikrimart | Admin'
            ],
            'sidebar' => [],
            'header' => []
        ];
        $data_footer = [
            'footer' => []
        ];
        $this->load_headers($data_header);
        $this->load->view('admin/blank');
        $this->load_footers($data_footer);
    }

}