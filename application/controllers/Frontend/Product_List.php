<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_List extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
        Header(header_allow_origin); //for allow any domain, insecure
        Header(header_allow_headers); //for allow any headers, insecure
        Header(header_allow_methods); //method allowed
    }

    private function init_customer_model()
    {
        $this->load->model('Customer/Customer_model');
    }

    private function init_uid_server_model()
    {
        $this->load->model('Uid_server_model');
    }

    private function init_common_model()
    {
        $this->load->model('Common_model');
    }

    private function response($data, $status)
    {
        return $this->output->set_content_type("application/json")->set_status_header($status)->set_output(json_encode($data));
    }

    public function index()
    {
        $this->view_index();
    }

    public function view_index()
    {
        $header_data["meta_title"] = " Bikrimart ";

        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/inc/header');
        $this->load->view('customer/inc/sidebar');
        $this->load->view('customer/index');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/cart_js');

        $this->load->view('customer/inc/custom_js/header_js');
    }

    public function view_restaurant()
    {
        $header_data["meta_title"] = "Restaurant | Bikrimart ";

        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/inc/header');
        $this->load->view('customer/inc/sidebar');
        $this->load->view('customer/restaurant');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/cart_js');
    }

    public function view_shop()
    {
        $header_data["meta_title"] = "Shop | Bikrimart ";

        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/inc/header');
        $this->load->view('customer/inc/sidebar');
        $this->load->view('customer/shop');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/cart_js');
    }

    public function view_product_details($product_id)
    {
        $header_data['meta_title'] = 'Product Details | Bikrimart';

        $this->init_customer_model();
        $vendor_id = $this->Customer_model->get_vendor_id_by_product_id($product_id);
        $master_id = $this->Customer_model->get_master_id_by_product_id($product_id);
        $brand_id = $this->Customer_model->get_brand_id_by_product_id($product_id);

        $data['vendor_id'] = $vendor_id;
        $data['master_id'] = $master_id;
        $data['product_details'] = $this->Customer_model->display_product_details($product_id);
        $data['product_images'] = $this->Customer_model->display_product_image($product_id);
        $data['other_products'] = $this->Customer_model->display_other_products_of_vendor($vendor_id, $product_id);
        $data['list_vendors'] = $this->Customer_model->list_all_vendors($master_id, $brand_id);

        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/inc/header');
        $this->load->view('customer/inc/sidebar');
        $this->load->view('customer/product_details', $data);
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/cart_js');
        // $this->load->view('customer/inc/custom_js/shop_js');
        $this->load->view('customer/inc/custom_js/product_details_js');
    }

    public function view_store()
    {
        $header_data["meta_title"] = "Store Wise | Bikrimart ";

        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/inc/header');
        $this->load->view('customer/inc/sidebar');
        $this->load->view('customer/store');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/cart_js');
        $this->load->view('customer/inc/custom_js/store_js');
    }

    public function view_store_product($vendor_id)
    {
        $data['vendor_id'] = $vendor_id;

        $header_data["meta_title"] = "Store Wise | Bikrimart ";

        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/inc/header');
        $this->load->view('customer/inc/sidebar');
        $this->load->view('customer/shop', $data);
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/cart_js');
        // $this->load->view('customer/inc/custom_js/shop_js');
    }

    public function display_product_for_shop()
    {
        $vendor_id = $this->input->get(query_param_vendor_id);

        $pageSize = ($this->input->get(query_param_page_size) != null) ? $this->input->get(query_param_page_size) : 10;
        $pageNo = ($this->input->get(query_param_page_no) != null) ? $this->input->get(query_param_page_no) : 0;

        $this->init_customer_model();
        $result = $this->Customer_model->display_product_for_shop($vendor_id, $pageSize, $pageNo);

        $data = $result['data'];
        $pagination_data = $result['pagination_data'];

        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data, "pagination" => $pagination_data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }





}
