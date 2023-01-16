<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
        Header(header_allow_origin); //for allow any domain, insecure
        Header(header_allow_headers); //for allow any headers, insecure
        Header(header_allow_methods); //method allowed
    }

    public function index()
    {
        $this->view_index();
    }

    private function init_vendor_model()
    {
        $this->load->model('Vendor/Vendor_model');
    }

    private function init_uid_server_model()
    {
        $this->load->model('Uid_server_model');
    }
    private function init_sku_generater_model()
    {
        $this->load->model('Sku_generater_model');
    }
    private function init_common_model()
    {
        $this->load->model('Common_model');
    }
    private function init_login_model()
    {
        $this->load->model('Vendor/Login_model');
    }
    private function response($data, $status)
    {
        return $this->output->set_content_type("application/json")->set_status_header($status)->set_output(json_encode($data));
    }
    private function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata(field_name))) ? true : false;
        return $logged_in;
    }
    private function upload_user_image($path, $image)
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
    private function load_headers($data)
    {
        $this->load->view('vendor/inc/header_link', $data['header_link']);
        $this->load->view('vendor/inc/sidebar', $data['sidebar']);
        // $this->load->view('vendor/inc/header', $data['header']);
    }
    private function load_footers($data)
    {
        $this->load->view('vendor/inc/footer', $data['footer']);
        $this->load->view('vendor/inc/footer_link', $data['footer']);
    }
    public function view_index()
    {

        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/header');
        $this->load->view('vendor/index');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }
    public function view_registration()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/register');
        // $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
        $this->load->view('vendor/inc/custom_js/registration_js');
    }


    public function view_dashboard()
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
    public function view_orders()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/orders');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }
    public function view_new_orders()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/new_order');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }
    public function view_completed_orders()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/completed_order');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }
    public function view_cancelled_orders()
    {
        $this->load->view('vendor/inc/header_link');
        $this->load->view('vendor/inc/sidebar');
        $this->load->view('vendor/cancelled_order');
        $this->load->view('vendor/inc/footer');
        $this->load->view('vendor/inc/footer_link');
    }

    public function view_inventory()
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

    public function view_add_product_express()
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

    public function view_store_setting()
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
    public function view_add_products()
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

    public function view_products_list()
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

    public function view_login()
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


    public function fetch_product_details($uid)
    {    #	( product_id ) ----------------fetch details of selected product

        if ($this->is_user_logged_in()) {

            $data['product_id'] = $uid;
            $this->load->view('vendor/inc/header_link');

            $this->load->view('vendor/inc/sidebar');
            $this->load->view('vendor/product_details', $data);
            $this->load->view('vendor/inc/footer');
            $this->load->view('vendor/inc/footer_link');
            $this->load->view('vendor/inc/custom_js/product_details_js');
        } else {
            redirect(base_url('vendor/login_user'));
        }
    }

    public function display_product_details()
    {
        $product_id = $this->input->post('id');
        $this->init_vendor_model();
        $product = $this->Vendor_model->fetch_product_details($product_id);

        if (!empty($product)) {
            $this->response(['success' => true, 'message' => 'product list', 'data' => $product], 200);
        } else {
            $this->response(['success' => false, 'message' => 'List empty'], 200);
        }
    }

    public function search_product_for_mobile()
    {
        $vendor_id = $this->session->userdata('vendor_id');
        $name = $this->input->post('name');

        if (!empty($name)) {
            $this->init_vendor_model();
            $product_details = $this->Vendor_model->display_product($vendor_id);

            foreach ($product_details as $i => $product) {
                $master_id = $product->master_id;
                $details[$i] = $this->Vendor_model->search_product_for_mobile($master_id, $name);
            }
            if (!empty($details)) {
                $this->response(['success' => true, 'message' => 'product list', 'data' => $product_details, 'details' => $details], 200);
            } else {
                $this->response(['success' => false, 'message' => 'List empty'], 200);
            }
        } else {
            $this->init_vendor_model();
            $product_details = $this->Vendor_model->display_product($vendor_id);

            foreach ($product_details as $i => $product) {
                $master_id = $product->master_id;
                $details[$i] = $this->Vendor_model->fetch_details_of_master_id($master_id);
            }
            if (!empty($product_details)) {
                $this->response(['success' => true, 'message' => 'product items listed', 'data' => $product_details, 'details' => $details,], 200);
            } else {
                $this->response(['success' => false, 'message' => 'product not found'], 200);
            }
        }
    }




    public function add_product_data(){    #------------------------- Product not exist in master table

        // print_r(array_merge($_POST, $_FILES));
        // die();

        $has_variant = (isset($_POST['has_variant'])) ? 1 : 0;
        $product_name = $this->input->post('product_name');
        $product_sku = $this->input->post('product_sku');
        $product_weight = $this->input->post('product_weight');
        $product_description = $this->input->post('product_description');
        $product_unit = $this->input->post('product_unit');
        $product_category = $this->input->post('product_category');
        $product_brand = $this->input->post('product_brand');
        $sale_price = $this->input->post('sale_price');
        $sale_price_tax_type = $this->input->post('sale_price_tax_type');
        $discount = $this->input->post('discount');
        $discount_type = $this->input->post('discount_type');
        $wholesale_price = $this->input->post('wholesale_price');
        $wholesale_price_tax_type = $this->input->post('wholesale_price_tax_type');
        $wholesale_qty = $this->input->post('wholesale_qty');
        $purchase_price = $this->input->post('purchase_price');
        $purchase_price_tax_type = $this->input->post('purchase_price_tax_type');
        $tax_rates = $this->input->post('tax_rates');
        $location = $this->input->post('location');
        $min_stock_qty = $this->input->post('min_stock_qty');
        $price_per_unit = $this->input->post('price_per_unit');
        $date = $this->input->post('date');
        $opening_stock = $this->input->post('opening_stock');

        $colour = $this->input->post('colour');
        $size = $this->input->post('size');

        $varientProductPurchasePrice = $this->input->post('v_price');
        $varientProductSalePrice = $this->input->post('v_sale_price');
        $varientProductQty = $this->input->post('v_quantity');


        $this->init_uid_server_model();

        $vendor_id = $this->session->userdata('vendor_id');
        $master_product_id = $this->Uid_server_model->generate_uid(KEY_MASTER_PRODUCT);
        $product_id = $this->Uid_server_model->generate_uid(KEY_PRODUCT);

        $path = 'assets/uploads/product_images/';

        foreach ($_FILES['images']['name'] as $i => $val) {
            $masterId[$i] = $master_product_id;
            $productId[$i] = $product_id;
            $imageId[$i] = $this->Uid_server_model->generate_uid(KEY_IMAGE);

            $productImages[$i] = $this->upload_image($path, $val, $_FILES['images'][param_temp_name][$i]);
        }

        for ($i = 0; $i < count($masterId); $i++) {
            $image_data[$i]['uid']                      = $imageId[$i];
            $image_data[$i]['product_id']               = $productId[$i];
            $image_data[$i]['master_product_id']        = $masterId[$i];
            $image_data[$i]['path']                     = $productImages[$i];
            $image_data[$i]['main_image']               = 1;
            $image_data[$i]['created_at']               = date(field_date);
            $image_data[$i]['modified_at']              = date(field_date);
        }


        // $this->init_sku_generater_model();
        // $sku = $this->Sku_generater_model->generate_sku($product_name, $colour, $size);

        if ($has_variant) {
            if ($colour != null) {
                $variant_create = $colour;
            } else {
                $variant_create = $size;
            }

            if ($size != null) {
                $variant_create = $size;
            } else {
                $variant_create = $colour;
            }

            for ($i = 0; $i < count($variant_create); $i++) {

                if (empty($colour[$i])) {
                    $colour[$i] = 'Null';
                }

                if (empty($size[$i])) {
                    $size[$i] = 'Null';
                }

                $productId[]             = $this->Uid_server_model->generate_uid(KEY_PRODUCT);;
                $productUnit[]            = $product_unit;
                $variantId[]             = $this->Uid_server_model->generate_uid(KEY_VARIANT);
                $masterId[]             = $master_product_id;
                $productSku[]             = $product_name;
                $vendorId[]             = $vendor_id;
                $productBrand[]         = $product_brand;
                $productDescription[]     = $product_description;
                $salePriceTaxType[]     = $sale_price_tax_type;
                $salePriceTaxType[]     = $sale_price_tax_type;
                $discountPerc[]         = $discount;
                $discountType[]         = $discount_type;
                $taxRates[]             = $tax_rates;
                $purchasePriceTaxType[] = $purchase_price_tax_type;
            }

            $master_data = [
                'uid' => $master_product_id,
                'name' => $product_name,
                'category_id' => $product_category,
                'created_at' => date(field_date),
                'modified_at' => date(field_date),
            ];

            for ($i = 0; $i < count($variant_create); $i++) {

                $product_data[$i]['uid']                      = $productId[$i];
                $product_data[$i]['master_product_id']         = $masterId[$i];
                $product_data[$i]['product_unit_id']         = $productUnit[$i];
                $product_data[$i]['sku']                      = $productSku[$i];
                $product_data[$i]['generated_sku']              = $productSku[$i];
                $product_data[$i]['vendor_id']                 = $vendorId[$i];
                $product_data[$i]['has_variant']              = $has_variant;
                $product_data[$i]['brand_id']                  = $productBrand[$i];
                $product_data[$i]['description']              = $productDescription[$i];
                $product_data[$i]['sale_price']              = $varientProductSalePrice[$i];
                $product_data[$i]['sale_price_tax_type']     = $salePriceTaxType[$i];
                $product_data[$i]['discount']                  = $discountPerc[$i];
                $product_data[$i]['discount_type']             = $discountType[$i];
                $product_data[$i]['tax_rate_id']             = $taxRates[$i];
                $product_data[$i]['purchase_price']          = $varientProductPurchasePrice[$i];
                $product_data[$i]['purchase_price_tax_type'] = $purchasePriceTaxType[$i];
                $product_data[$i]['min_stock_qty']              = $varientProductQty[$i];
                $product_data[$i]['created_at']              = date(field_date);
                $product_data[$i]['modified_at']              = date(field_date);
                $product_data[$i]['colour']                   = $colour[$i];
                $product_data[$i]['size']                     = $size[$i];
                $product_data[$i]['variant_id']              = $variantId[$i];
            }

            $this->init_vendor_model();
            if ($this->Vendor_model->insert_product_have_variants($product_data, $master_data)) {
                $this->response(["success" => true, "message" => "Product Added Successfully.. "], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to add product"], 200);
            }
        } else {

            $master_data = [
                'uid' => $master_product_id,
                'name' => $product_name,
                'category_id' => $product_category,
                'created_at' => date(field_date),
                'modified_at' => date(field_date),
            ];

            $product_data = [
                'uid'                            => $product_id,
                'master_product_id'              => $master_product_id,
                'sku'                            => $product_sku,
                'vendor_id'                      => $vendor_id,
                'weight'                         => $product_weight,
                'has_variant'                    => $has_variant,
                'brand_id'                       => $product_brand,
                'description'                    => $product_description,
                'sale_price'                     => $sale_price,
                'sale_price_tax_type'            => $sale_price_tax_type,
                'discount'                       => $discount,
                'discount_type'                  => $discount_type,
                'tax_rate_id'                    => $tax_rates,
                'wholesale_price'                => $wholesale_price,
                'wholesale_price_tax_type'       => $wholesale_price_tax_type,
                'wholesale_minimum_quantity '    => $wholesale_qty,
                'purchase_price'                 => $purchase_price,
                'purchase_price_tax_type'        => $purchase_price_tax_type,
                'location'                       => $location,
                'min_stock_qty'                  => $min_stock_qty,
                'price_per_unit'                 => $price_per_unit,
                'date_as_of_stock'               => $date,
                'opening_stock'                  => $opening_stock,
                'product_unit_id'                => $product_unit,
                'created_at'                     => date(field_date),
                'modified_at'                    => date(field_date),
                'status'                         => 'ACTIVE',

            ];
            $this->init_vendor_model();

            if ($this->Vendor_model->insert_product($product_data, $master_data, $image_data)) {
                $this->response(["success" => true, "message" => "Product Added Successfully.. ", 'data' => $product_data], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to add product", 'data' => $product_data], 200);
            }
        }
    }

    public function add_product_when_already_exist(){    //--------------- Product exist in master table

        // print_r(array_merge($_POST, $_FILES));
        // die();

        $has_variant = (isset($_POST['has_variant'])) ? 1 : 0;
        $master_product_id = $this->input->post('master_product_id');    // already present in master table
        $product_name = $this->input->post('product_name');
        $product_weight = $this->input->post('product_weight');
        $product_sku = $this->input->post('product_sku');
        $product_description = $this->input->post('product_description');
        $product_unit = $this->input->post('product_unit');
        $product_category = $this->input->post('master_category_id');    // already present in master table
        $product_brand = $this->input->post('product_brand');
        $sale_price = $this->input->post('sale_price');
        $sale_price_tax_type = $this->input->post('sale_price_tax_type');
        $discount = $this->input->post('discount');
        $discount_type = $this->input->post('discount_type');
        $wholesale_price = $this->input->post('wholesale_price');
        $wholesale_price_tax_type = $this->input->post('wholesale_price_tax_type');
        $wholesale_qty = $this->input->post('wholesale_qty');
        $purchase_price = $this->input->post('purchase_price');
        $purchase_price_tax_type = $this->input->post('purchase_price_tax_type');
        $tax_rates = $this->input->post('tax_rates');
        $location = $this->input->post('location');
        $min_stock_qty = $this->input->post('min_stock_qty');
        $price_per_unit = $this->input->post('price_per_unit');
        $date = $this->input->post('date');
        $opening_stock = $this->input->post('opening_stock');

        $colour = $this->input->post('colour');
        $size = $this->input->post('size');


        $varientProductPurchasePrice = $this->input->post('v_price');
        $varientProductSalePrice = $this->input->post('v_sale_price');
        $varientProductQty = $this->input->post('v_quantity');
        $this->init_uid_server_model();

        $product_id = $this->Uid_server_model->generate_uid(KEY_PRODUCT);
        $vendor_id = $this->session->userdata('vendor_id');     //vendor ID will come from SESSION 


        $path = 'assets/uploads/product_images/';

        foreach ($_FILES['images']['name'] as $i => $val) {
            $masterId[$i] = $master_product_id;
            $productId[$i] = $product_id;
            $imageId[$i] = $this->Uid_server_model->generate_uid(KEY_IMAGE);

            $productImages[$i] = $this->upload_image($path, $val, $_FILES['images'][param_temp_name][$i]);
        }

        for ($i = 0; $i < count($masterId); $i++) {
            $image_data[$i]['uid']                      = $imageId[$i];
            $image_data[$i]['product_id']               = $productId[$i];
            $image_data[$i]['master_product_id']        = $masterId[$i];
            $image_data[$i]['path']                     = $productImages[$i];
            $image_data[$i]['created_at']               = date(field_date);
            $image_data[$i]['modified_at']              = date(field_date);
        }


        // foreach ($colour as $colours) {
        // 	$varient_id[]=$this->Uid_server_model->generate_uid('KEY_VARIENT');
        // }
        // $this->init_sku_generater_model();
        // $sku = $this->Sku_generater_model->generate_sku($product_name, $colour, $size);

        if ($has_variant) {
            if (!empty($colour)) {
                $variant_create = $colour;
            } else {
                $variant_create = $size;
            }

            if (!empty($size)) {
                $variant_create = $size;
            } else {
                $variant_create = $colour;
            }

            for ($i = 0; $i < count($variant_create); $i++) {

                if (empty($colour[$i])) {
                    $colour[$i] = 'null';
                }

                if (empty($size[$i])) {
                    $size[$i] = 'null';
                }

                $productId[]             = $product_id;
                $productUnit[]            = $product_unit;
                $variantId[]             = $this->Uid_server_model->generate_uid(KEY_VARIANT);
                $masterId[]                = $master_product_id;
                $productSku[]             = $product_name;
                $vendorId[]             = $vendor_id;
                $productBrand[]         = $product_brand;
                $productDescription[]     = $product_description;
                $salePriceTaxType[]     = $sale_price_tax_type;
                $salePriceTaxType[]     = $sale_price_tax_type;
                $discountPerc[]         = $discount;
                $discountType[]         = $discount_type;
                $taxRates[]             = $tax_rates;
                $purchasePriceTaxType[] = $purchase_price_tax_type;
            }

            for ($i = 0; $i < count($variant_create); $i++) {

                $product_data[$i]['uid']                        = $productId[$i];
                $product_data[$i]['master_product_id']          = $masterId[$i];
                $product_data[$i]['product_unit_id']            = $productUnit[$i];
                $product_data[$i]['sku']                        = $productSku[$i];
                $product_data[$i]['generated_sku']              = $productSku[$i];
                $product_data[$i]['vendor_id']                  = $vendorId[$i];
                $product_data[$i]['has_variant']                = $has_variant;
                $product_data[$i]['brand_id']                   = $productBrand[$i];
                $product_data[$i]['description']                = $productDescription[$i];
                $product_data[$i]['sale_price']                 = $varientProductSalePrice[$i];
                $product_data[$i]['sale_price_tax_type']        = $salePriceTaxType[$i];
                $product_data[$i]['discount']                   = $discountPerc[$i];
                $product_data[$i]['discount_type']              = $discountType[$i];
                $product_data[$i]['tax_rate_id']                = $taxRates[$i];
                $product_data[$i]['purchase_price']             = $varientProductPurchasePrice[$i];
                $product_data[$i]['purchase_price_tax_type']    = $purchasePriceTaxType[$i];
                $product_data[$i]['min_stock_qty']              = $varientProductQty[$i];
                $product_data[$i]['created_at']                 = date(field_date);
                $product_data[$i]['modified_at']                = date(field_date);
                $product_data[$i]['colour']                     = $colour[$i];
                $product_data[$i]['size']                       = $size[$i];
                $product_data[$i]['variant_id']                 = $variantId[$i];
            }

            $this->init_vendor_model();
            if ($this->Vendor_model->insert_product_by_master_have_variants($product_data)) {
                $this->response(["success" => true, "message" => "Product  Added Successfully", 'data' => $product_data], 200);
            } else {
                $this->response(["success" => true, "message" => "Failed to add product", 'data' => $product_data], 200);
            }
        } else {
            $product_data = [
                'uid'                              => $product_id,
                'master_product_id'                => $master_product_id,
                'weight'                           => $product_weight,
                'sku'                              => $product_sku,
                'vendor_id'                        => $vendor_id,
                'has_variant'                      => $has_variant,
                'brand_id'                         => $product_brand,
                'description'                      => $product_description,
                'sale_price'                       => $sale_price,
                'sale_price_tax_type'              => $sale_price_tax_type,
                'discount'                         => $discount,
                'discount_type'                    => $discount_type,
                'tax_rate_id'                      => $tax_rates,
                'wholesale_price'                  => $wholesale_price,
                'wholesale_price_tax_type'         => $wholesale_price_tax_type,
                'wholesale_minimum_quantity '      => $wholesale_qty,
                'purchase_price'                   => $purchase_price,
                'purchase_price_tax_type'          => $purchase_price_tax_type,
                'location'                         => $location,
                'min_stock_qty'                    => $min_stock_qty,
                'price_per_unit'                   => $price_per_unit,
                'date_as_of_stock'                 => $date,
                'opening_stock'                    => $opening_stock,
                'product_unit_id'                  => $product_unit,
                'created_at'                       => date(field_date),
                'modified_at'                      => date(field_date),
                'status'                           => 'ACTIVE'
            ];

            $this->init_vendor_model();
            if ($this->Vendor_model->insert_product_by_master_table($product_data, $image_data)) {
                $this->response(["success" => true, "message" => "Product  Added Successfully.."], 200);
            } else {
                $this->response(["success" => true, "message" => "Failed to add product"], 200);
            }
        }
        // $this->init_vendor_model();
        // $add_product=$this->Vendor_model->add_product_data();
    }

    private function upload_image($path, $image_name, $tmp_name)
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



    public function change_vendor_status()
    {
        $vandor_id = "VENDOR_7648734685487658346_63784657"; //vendor ID will come from SESSION 
        $vendor_status = $this->input->get('status');
    }
    // registration functions starts

    public function send_otp()
    {
        $mobile = $this->input->post(param_mobile);
        $this->init_common_model();
        if (!empty($mobile) || $mobile != null) {
            $user = $this->Common_model->check_user_exist($mobile, field_mobile, table_users);
            $otp = rand(1000, 9999);
            $this->init_uid_server_model();
            $vendor_id = $this->Uid_server_model->generate_uid(KEY_VENDOR);
            $token = $this->Uid_server_model->generate_uid(KEY_TOKEN);
            $this->session->set_userdata('mobile', $mobile);
            $this->init_vendor_model();
            if (!empty($user) || $user != null) {
                // when user already exist 
                $user_id  = $this->Vendor_model->get_user_by_mobile($mobile);
                // $user_id = $user->uid;
                $otp_created_at = $this->Vendor_model->get_otp_create_time($user_id);
                // $otp_created_at = $otp_first_created_at->created_at;
                if ($this->Vendor_model->set_otp($user_id, $token, $otp, $otp_created_at)) {
                    $this->response(["success" => true, "message" => "Otp sent successfully !", "redirect_to" => base_url('Vendor/view_registration')], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to sent otp", "redirect_to" => base_url('Vendor/view_registration')], 200);
                }
            } else {
                // when user not exist
                // register user first then save otp in user table
                $uid = $this->Uid_server_model->generate_uid(KEY_USER);
                $add_new_vendor = $this->Vendor_model->insert_vendor_data($uid, $mobile, const_user_type_vendor, $vendor_id, $otp, $token);
                if ($add_new_vendor) {
                    $this->session->set_userdata('vendor_id', $vendor_id);
                    $this->response(["success" => true, "message" => "Otp sent successfully !", "redirect_to" => base_url('Vendor/view_registration')], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to sent otp"], 200);
                }
            }
        } else {
            $this->response(["success" => false, "message" => "Enter Your Mobile Number"], 200);
        }
    }

    public function verify_otp()
    {
        $mobile = $this->session->userdata('mobile');
        $otp = $this->input->post(param_otp);
        if (!empty($mobile) || $mobile != null) {
            $this->init_vendor_model();
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
            // $user_id = $user->uid;
            if (!empty($user_id) || $user_id != null) {
                $original_otp  = $this->Vendor_model->check_otp($user_id);
                if ($original_otp != $otp) {
                    $this->response(["success" => false, "message" => "Otp not matched !"], 200);
                } else {
                    $gid = $this->Vendor_model->get_gid_by_user_id($user_id);
                    if ($gid == "") {
                        //uesr newly registered
                        $this->response(["success" => true, "message" => "Otp matched !"], 200);
                        $this->init_uid_server_model();
                        $new_gid =  $this->Uid_server_model->generate_uid(KEY_GROUP);
                        $this->Vendor_model->set_gid_by_user_id($user_id, $new_gid);  //users table -> uid
                    } else {
                        $this->response(["success" => true, "message" => "User already exist !"], 200);
                    }
                }
            } else {
                $this->response(["success" => false, "message" => "User not exist !"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Enter Your Mobile Number"], 200);
        }
    }

    public function save_user_basic_details()
    {
        $mobile = $this->session->userdata('mobile');
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
        $name = $this->input->post(param_name);
        $email = $this->input->post(param_email);
        $this->init_common_model();
        $email_exist = $this->Common_model->check_user_exist($email, field_email, table_users);
        if ($email_exist == 0) {
            if (!empty($name) && !empty($email)) {
                $is_added = $this->Vendor_model->save_user_basic_details($user_id, $name, $email, $mobile);
                if ($is_added) {
                    $this->response(["success" => true, "message" => "Register successful"], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to register"], 400);
                }
            } else {
                $this->response(["success" => false, "message" => "Input your details"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Email Id Already exist"], 200);
        }
    }
    // for retail shop || restaurant

    public function save_bussiness_details()
    {
        $path = 'assets/uploads/bussiness_images/';
        if (!empty($_FILES['front_image'][param_name])) {
            $front_image = $this->upload_user_image($path, $_FILES['front_image']);
        }
        if (!empty($_FILES['inside_image'][param_name])) {
            $inside_image = $this->upload_user_image($path, $_FILES['inside_image']);
        }
        if (!empty($_FILES['kyc_image'][param_name])) {
            $kyc_image = $this->upload_user_image($path, $_FILES['kyc_image']);
        }

        $this->init_uid_server_model();
        // $document_id = $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
        $this->init_vendor_model();
        $bussiness_name = $this->input->post('bussiness_name');
        $bussiness_mobile = $this->input->post('bussiness_mobile');
        $bussiness_email = $this->input->post('bussiness_email');
        $kyc_document = $this->input->post('kyc_document');
        $gst = $this->input->post('gst');
        $building = $this->input->post('building');
        $address = $this->input->post('address');

        $mobile = $this->session->userdata('mobile');


        if (!empty($bussiness_name) || !empty($bussiness_mobile) || !empty($kyc_document)) {
            if (empty($front_image) || empty($inside_image)) {
                $this->response(["success" => false, "message" => "Upload Front and Inside image of store"], 200);
                return;
            }
            if (empty($kyc_image)) {
                $this->response(["success" => false, "message" => "Upload image of kyc document"], 200);
                return;
            }
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

            $documentNames=[$kyc_document, 'front_image', 'inside_image'];
            $documentPath=[$kyc_image, $front_image, $inside_image];
           
            for($i=0; $i<3; $i++){
                $document_data[$i]['uid']= $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
                $document_data[$i]['user_id']= $user_id;
                $document_data[$i]['name']= $documentNames[$i];
                $document_data[$i]['path']= $documentPath[$i];
                $document_data[$i]['created_at']= date(field_date);
            }
           
           $is_added = $this->Vendor_model->save_bussiness_details($user_id, $bussiness_name, $bussiness_mobile, $bussiness_email, $building, $address, $gst, $document_data);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Bussiness details save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Fill all credentials"], 200);
        }
    }
    public function save_bank_details()
    {
        $path = 'assets/uploads/profile_image/';
        if (!empty($_FILES['profile_image'][param_name])) {
            $profile_image = $this->upload_user_image($path, $_FILES['profile_image']);
        }

        $this->init_uid_server_model();
        $uid = $this->Uid_server_model->generate_uid('KEY_BANKING');
        $this->init_vendor_model();

        $account_name = $this->input->post('account_name');
        $account_number = $this->input->post('account_number');
        $ifsc = $this->input->post('ifsc');
        $upi = $this->input->post('upi');
        $mobile = $this->session->userdata('mobile');
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);


        if (!empty($account_name) || !empty($account_number) || !empty($ifsc)) {
            if (empty($profile_image)) {
                $this->response(["success" => false, "message" => "Upload a profile image"], 200);
                return;
            }
            $is_added = $this->Vendor_model->save_bank_details($uid, $user_id, $profile_image, $account_name, $account_number, $ifsc, $upi);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Banking details save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Fill all credentials"], 200);
        }
    }

    public function fetch_user_details()
    {
        $this->init_vendor_model();
        $mobile = $this->session->userdata('mobile');
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
        $data = $this->Vendor_model->fetch_user_details($user_id, $mobile);
        if (!empty($data)) {
            $this->session->set_userdata('name', $data->name);
            // $this->session->set_userdata('email', $data->email);
            // $this->session->set_userdata('profile_image', $data->profile_image);
            $this->response(["success" => true, "message" => $data->name, "redirect" => base_url('Vendor/view_dashboard')], 200);
        } else {
            $this->response(["success" => false, "message" => "failed"], 200);
        }
    }

    public function save_bussiness_name()
    {
        $mobile = $this->session->userdata(param_mobile);
        $bussiness_name = $this->input->post(param_bussiness_name);
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
        if (!empty($bussiness_name)) {
            $is_added = $this->Vendor_model->save_bussiness_name($user_id, $bussiness_name);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Bussiness name is added successfully !"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to add bussiness name !"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Add your bussiness name !"], 200);
        }
    }

    public function save_bussiness_address()
    {
        $mobile = $this->session->userdata(param_mobile);
        $building = $this->input->post('building');
        $address = $this->input->post('address');
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

        if (!empty($building) && !empty($address)) {
            $is_added = $this->Vendor_model->save_bussiness_address($user_id, $building, $address);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Bussiness Address is added successfully !"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to add bussiness address"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Add your address of bussiness !"], 200);
        }
    }

    public function save_bussiness_category()
    {

        $mobile = $this->session->userdata('mobile');
        $bussiness_category = $this->input->post(param_bussiness_category);
        // $bussiness_category = json_encode($bussiness_category);
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
        // $user_id = $user->uid;
        if (empty($bussiness_category) || $bussiness_category == "null") {
            $this->response(["success" => false, "message" => "Select your bussiness category !"], 200);
        } else {
            $is_added = $this->Vendor_model->save_bussiness_category($user_id, $bussiness_category);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Bussiness category is added successfully !", "value" => $bussiness_category], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to add bussiness category"], 200);
            }
        }
    }

    public function save_bussiness_type()
    {

        $mobile = $this->session->userdata('mobile');
        $bussiness_type = $this->input->post(param_bussiness_type);
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
        // $user_id = $user->uid;
        if (!empty($bussiness_type) || $bussiness_type != null) {
            $is_added = $this->Vendor_model->save_bussiness_type($user_id, $bussiness_type);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Bussiness type is added successfully !"], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Select your bussiness type"], 200);
        }
    }

    public function save_store_image()
    {

        $front_image = '';
        $inside_image = '';
        $path = path_store_image;
        if (!empty($_FILES[param_store_front_image][param_name])) {
            $front_image = $this->upload_user_image($path, $_FILES[param_store_front_image]);
        }
        if (!empty($_FILES[param_store_inside_image][param_name])) {
            $inside_image = $this->upload_user_image($path, $_FILES[param_store_inside_image]);
        }
        if (!empty($front_image) && !empty($inside_image)) {
            $this->init_uid_server_model();
            $document_id = $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
            $this->init_vendor_model();
            $mobile = $this->input->post(param_mobile);
            $user = $this->Vendor_model->get_user_by_mobile($mobile);
            $user_id = $user->uid;
            $is_added = $this->Vendor_model->save_store_image($document_id, $user_id, $front_image, $inside_image);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Upload Store Images Successfully !"], 200);
            } else {
                $this->response(["success" => false, "message" => "Falied to upload store image"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Select Both Store Images !"], 200);
        }
    }

    public function save_gst_details()
    {
        $mobile = $this->session->userdata(param_mobile);
        $gst_number = $this->input->post(param_gst_number);
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

        if (!empty($gst_number)) {
            $is_added = $this->Vendor_model->save_gst_details($user_id, $gst_number);
            if ($is_added) {
                $this->response(["success" => true, "message" => "GST details save succesfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "This value is already registered"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input GST details"], 200);
        }
    }

    public function save_upi_details()
    {

        $mobile = $this->session->userdata(param_mobile);
        $upi_number = $this->input->post(param_upi_number);
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

        if (!empty($upi_number)) {
            $is_added = $this->Vendor_model->save_upi_details($user_id, $upi_number);
            if ($is_added) {
                $this->response(["success" => true, "message" => "UPI details save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "This value is already registered"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input UPI details"], 200);
        }
    }

    public function authenticate_user()
    {    # ------------------------------------ Login check user 
        $mobile = $this->input->post(param_mobile);
        $otp = $this->input->post(param_otp);
        $this->init_vendor_model();
        $this->init_login_model();
        if (!empty($otp)) {
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
            // $user_id = $user->uid;
            $user_details = $this->Login_model->get_user_details_by_otp($user_id, $otp);
            if (!empty($user_details->name)) {
                $this->session->set_userdata('vendor_id', $user_details->uid);
                $this->session->set_userdata(field_name, $user_details->name);
                $this->response(['success' => true, 'message' => 'Login successfull', 'redirect' => base_url('vendor/dashboard')], 200);
            } else {
                $this->response(['success' => false, 'message' => 'Invaild  OTP!'], 200);
            }
        } else {
            $this->response(['success' => false, 'message' => 'OTP is not given!',], 200);
        }
    }

    public function send_otp_for_login()
    {     #-------------------------- Send otp for login

        $mobile = $this->input->post(param_mobile);
        $login_otp = rand(1000, 9999);
        if (empty($mobile)) {
            $this->response(['success' => false, 'message' => "Enter Mobile Number"], 200);
        } else {
            $this->init_login_model();
            $this->init_vendor_model();

            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
            if (!empty($user_id)) {
                $otp_created_at = $this->Vendor_model->get_otp_create_time($user_id);
                $is_sent = $this->Login_model->sent_otp_for_login($user_id, $login_otp, $otp_created_at);
                if ($is_sent) {
                    $this->response(['success' => true, 'message' => 'OTP is sent', 'otp' => $login_otp], 200);
                } else {
                    $this->response(['success' => false, 'message' => 'Something went wrong'], 200);
                }
            } else {
                $this->response(['success' => false, 'message' => 'User Not Exist'], 200);
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(field_name);
        $this->session->unset_userdata(field_mobile);
        $this->session->unset_userdata('bussiness_type');
        $this->session->unset_userdata('vendor_id');
        $this->session->unset_userdata('user_id');
        redirect(base_url('vendor'));
    }

    public function display_product()
    {    #--------------------- Display product details
        $vendor_id = $this->session->userdata('vendor_id');
        $this->init_vendor_model();
        $product_details = $this->Vendor_model->display_product($vendor_id);

        // $variant_num=[];

        if (!empty($product_details)) {
            foreach ($product_details as $i => $product) {
                // $product_id = $product->product_id;
                $master_id = $product->master_id;

                $details[$i] = $this->Vendor_model->fetch_details_of_master_id($master_id);
                $image[$i] = $this->Vendor_model->get_product_image($master_id);
            }
        }

        // $product_details = array_push($image);

        if (!empty($product_details)) {
            $this->response(['success' => true, 'message' => 'product items listed', 'data' => $product_details, 'image' => $image], 200);
        } else {
            $this->response(['success' => false, 'message' => 'product not found'], 200);
        }
    }

    public function add_product_image()   {    #----------------- vendor add images of a product
        $image = '';
        $path = 'assets/uploads/product_images/';
        if (!empty($_FILES['product_image'][param_name])) {
            $image = $this->upload_user_image($path, $_FILES["product_image"]);
        }
        $this->init_vendor_model();
        $product_id = $this->input->post('product_id');
        $master_id = $this->Vendor_model->get_master_id_by_product_id($product_id);

        $variant_id = $this->input->post('variant_id');
        $this->init_uid_server_model();
        $uid = $this->Uid_server_model->generate_uid(KEY_IMAGE);
        if (!empty($image)) {
            $is_added = $this->Vendor_model->save_product_image($uid, $image, $product_id, $variant_id, $master_id);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Product image add successful"], 200);
            } else {
                $this->response(["success" => false, "message" => "Falied to add product image"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Select an image !"], 200);
        }
    }

    public function delete_product_image()
    {

        $image_id = $this->input->post('id');
        if (empty($image_id)) {
            $this->response(['success' => false, 'message' => 'Select an image'], 200);
        } else {
            $this->init_vendor_model();
            $is_delete = $this->Vendor_model->delete_product_image($image_id);
            if ($is_delete) {
                $this->response(['success' => true, 'message' => 'Product Image is deleted'], 200);
            } else {
                $this->response(['success' => false, 'message' => 'Faield to delete image'], 200);
            }
        }
    }
    public function get_product_name_if_exist()
    {

        $product_name = $this->input->post('name');
        $product_name = trim($product_name);
        $this->init_vendor_model();
        if (empty($product_name)) {
            $this->response(['success' => false, 'message' => 'product not found'], 200);
        } else {
            $product_array = $this->Vendor_model->get_product_name_if_exist($product_name);
            if (!empty($product_array)) {
                $this->response(['success' => true, 'message' => 'product names', 'data' => $product_array], 200);
            } else {
                $this->response(['success' => false, 'message' => 'product name not found'], 200);
            }
        }
    }
    public function get_brand_according_category_id()
    {
        $category_id = $this->input->post('id');
        $this->init_vendor_model();
        $brand = $this->Vendor_model->get_brand_according_category_id($category_id);
        if (!empty($brand)) {
            $this->response(['success' => true, 'message' => 'brand found', 'data' => $brand, 'category_id' => $category_id], 200);
        } else {
            $this->response(['success' => false, 'message' => 'brand not found', 'category_id' => $category_id], 200);
        }
    }



    //============================== Fruits & Vegetables=====================================================================

    public function save_fruits_bussiness_details()
    {
        $path = 'assets/uploads/bussiness_images/';
        if (!empty($_FILES['kyc_image'][param_name])) {
            $kyc_image = $this->upload_user_image($path, $_FILES['kyc_image']);
        }
        $this->init_uid_server_model();
        $document_id = $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
        $this->init_vendor_model();
        $owner_name = $this->input->post('name');
        $bussiness_mobile = $this->input->post('mobile');
        $building = $this->input->post('building');
        $address = $this->input->post('address');
        $kyc_document = $this->input->post('kyc_document');

        $mobile = $this->session->userdata('mobile');
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

        if (!empty($owner_name) || !empty($building) || !empty($address) || !empty($kyc_document)) {
            if (empty($kyc_image)) {
                $this->response(["success" => false, "message" => "Upload KYC document"], 200);
                return;
            }
            $is_added = $this->Vendor_model->save_fruits_bussiness_details($document_id, $user_id, $owner_name, $bussiness_mobile, $building, $address, $kyc_document, $kyc_image);
            if ($is_added) {
                $this->response(["success" => true, "message" => "Bussiness details save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Fill all credentials"], 200);
        }
    }

    //=============================== get_bussiness_type ===================================================================

    public function get_bussiness_type()
    {
        $mobile = $this->session->userdata('mobile');
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
        $bussiness_type = $this->Vendor_model->get_bussiness_type($user_id);
        $this->session->set_userdata('bussiness_type', $bussiness_type);
        if (!empty($bussiness_type)) {
            $this->response(["success" => true, "message" => "success", "type" => $bussiness_type], 200);
        } else {
            $this->response(["success" => false, "message" => "failed"], 200);
        }
    }

    public function save_kyc_details()
    {
        $path = 'assets/uploads/bussiness_images/';

        $bussiness_type = $this->session->userdata('bussiness_type');

        if (($bussiness_type == 'BmRetailStore') || ($bussiness_type == 'BmRestaurant')) {

            if (!empty($_FILES['bussiness_kyc_image'][param_name])) {
                $kyc_image = $this->upload_user_image($path, $_FILES['bussiness_kyc_image']);
            }
            $kyc_document = $this->input->post('bussiness_kyc_document');
        } else {

            if (($bussiness_type == 'BmFruitsVegetable') || ($bussiness_type == 'BmService')) {
                if (!empty($_FILES['personal_kyc_image'][param_name])) {
                    $kyc_image = $this->upload_user_image($path, $_FILES['personal_kyc_image']);
                }
                $kyc_document = $this->input->post('personal_kyc_document');
            }
        }
        if (!empty($kyc_image)  && !empty($kyc_document)) {
            $this->init_vendor_model();
            $mobile = $this->session->userdata('mobile');
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

            $document_exist = $this->Vendor_model->check_user_id_exist($user_id);
            if (empty($exist)) {
                $this->init_uid_server_model();
                $document_id = $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
            } else {
                $document_id = $document_exist;
            }

            $added = $this->Vendor_model->save_kyc_details($document_id, $user_id, $kyc_document, $kyc_image);
            if ($added) {
                $this->response(["success" => true, "message" => "KYC details save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "No changes detucted"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input Details"], 200);
        }
    }

    public function save_bank_details_mobile()
    {
        $mobile = $this->session->userdata('mobile');
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

        $account_name = $this->input->post('name');
        $account_number = $this->input->post('number');
        $account_ifsc = $this->input->post('ifsc');

        if (!empty($account_name) && !empty($account_number) && !empty($account_ifsc)) {
            $this->init_uid_server_model();
            $uid = $this->Uid_server_model->generate_uid('KEY_BANKING');

            $added = $this->Vendor_model->save_bank_details_mobile($uid, $user_id, $account_name, $account_number, $account_ifsc);
            if ($added) {
                $this->response(["success" => true, "message" => "Banking details save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "No changes detucted"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input Banking Details"], 200);
        }
    }


    public function save_image_details()
    {
        $bussiness_path = 'assets/uploads/bussiness_images/';
        $profile_path = 'assets/uploads/profile_image/';


        if (!empty($_FILES['front_image'][param_name])) {
            $front_image = $this->upload_user_image($bussiness_path, $_FILES['front_image']);
        }

        if (!empty($_FILES['inside_image'][param_name])) {
            $inside_image = $this->upload_user_image($bussiness_path, $_FILES['inside_image']);
        }

        if (!empty($_FILES['profile_image'][param_name])) {
            $profile_image = $this->upload_user_image($profile_path, $_FILES['profile_image']);
        }

        $name = $this->input->post('name');
        $email = $this->input->post('email');

        if (!empty($front_image) && !empty($inside_image) && !empty($profile_image)) {
            $this->init_vendor_model();

            $mobile = $this->session->userdata('mobile');
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);


            // $document_exist = $this->Vendor_model->check_user_id_exist($user_id);
            // if (empty($exist)) {
            //     $this->init_uid_server_model();
            //     $document_id = $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
            // } else {
            //     $document_id = $document_exist;
            // }

            $documentNames=['front_image', 'inside_image'];
            $documentPath=[$front_image, $inside_image];
           
            for($i=0; $i<2; $i++){
                $document_data[$i]['uid']= $this->Uid_server_model->generate_uid(KEY_DOCUMENT);
                $document_data[$i]['user_id']= $user_id;
                $document_data[$i]['name']= $documentNames[$i];
                $document_data[$i]['path']= $documentPath[$i];
                $document_data[$i]['created_at']= date(field_date);
            }

            $added = $this->Vendor_model->save_image_details($user_id, $name, $email, $profile_image, $document_data);
            if ($added) {
                $this->response(["success" => true, "message" => "Images save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to save images"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Select All Images"], 200);
        }
    }

    public function save_fruit_Service_basic()
    {
        $profile_path = 'assets/uploads/profile_image/';

        if (!empty($_FILES['profile_image'][param_name])) {
            $profile_image = $this->upload_user_image($profile_path, $_FILES['profile_image']);
        }

        $name = $this->input->post('name');
        $email = $this->input->post('email');

        if (empty($name)) {
            $this->response(["success" => false, "message" => "Enter Your Name"], 200);
        }
        if (empty($email)) {
            $this->response(["success" => false, "message" => "Enter Your Email"], 200);
        }

        if (!empty($profile_image)) {
            $this->init_vendor_model();

            $mobile = $this->session->userdata('mobile');
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);

            $added = $this->Vendor_model->save_fruit_Service_basic($user_id, $email, $name, $profile_image);
            if ($added) {
                $this->response(["success" => true, "message" => "Images save successfully"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to save image"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Select Profile Image"], 200);
        }
    }

    public function save_bussiness_licence_details()
    {
        $path = 'assets/uploads/bussiness_images/';

        if (!empty($_FILES['licence_image'][param_name])) {
            $licence_image = $this->upload_user_image($path, $_FILES['licence_image']);
        }
        $date_of_expire = $this->input->post('expire_date');

        if (!empty($licence_image) && !empty($date_of_expire)) {
            $mobile = $this->session->userdata('mobile');
            $this->init_vendor_model();
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
            $added = $this->Vendor_model->save_bussiness_licence_details($licence_image, $date_of_expire, $user_id);
            if ($added) {
                $this->response(["success" => true, "message" => "success"], 200);
            } else {
                $this->response(["success" => false, "message" => "failed"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input Fields"], 200);
        }
    }


    public function display_inventory_items()
    {
        $vendor_id = $this->session->userdata('vendor_id');
        $this->init_vendor_model();
        $products = $this->Vendor_model->display_inventory_items($vendor_id);

        foreach ($products as $i => $product) {
            $product_id = $product->product_id;
            $image[$i] = $this->Vendor_model->get_image_product($product_id);
        }

        if (!empty($products)) {
            $this->response(["success" => true, "message" => "success", "data" => $products, "image" => $image], 200);
        } else {
            $this->response(["success" => true, "message" => "success"], 200);
        }
    }

    public function fetch_product_details_for_edit()
    {
        $product_id = $this->input->post('id');
        $vendor_id = $this->session->userdata('vendor_id');
        $this->init_vendor_model();
        $data = $this->Vendor_model->fetch_product_details_for_edit($product_id);
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "success", "data" => $data], 200);
        } else {
            $this->response(["success" => true, "message" => "success"], 200);
        }
    }

    public function update_inventory_product_details()
    {

        $product_id = $this->input->post('product_id');
        $description = $this->input->post('description');
        $sale_price = $this->input->post('sale_price');
        $sale_price_tax_type = $this->input->post('sale_price_tax_type');
        $discount = $this->input->post('discount');
        $discount_type = $this->input->post('discount_type');
        $wholesale_price = $this->input->post('wholesale_price');
        $wholesale_price_tax = $this->input->post('wholesale_price_tax_type');
        $purchase_price = $this->input->post('purchase_price');
        $purchase_price = $this->input->post('purchase_price');
        $purchase_price_tax_type = $this->input->post('purchase_price_tax_type');
        $opening_stock = $this->input->post('opening_stock');
        $price_per_unit = $this->input->post('price_per_unit');
        $min_stock_qty = $this->input->post('min_stock_qty');
        $location = $this->input->post('location');
        $tax_rates = $this->input->post('tax_rates');
        $date = $this->input->post('date');

        $data = [
            'description' => $description,
            'sale_price' => $sale_price,
            'sale_price_tax_type' => $sale_price_tax_type,
            'discount' => $discount,
            'discount_type' => $discount_type,
            'tax_rate_id' => $tax_rates,
            'wholesale_price' => $wholesale_price,
            'wholesale_price_tax_type' => $wholesale_price_tax,
            'purchase_price' => $purchase_price,
            'purchase_price_tax_type' => $purchase_price_tax_type,
            'min_stock_qty' => $min_stock_qty,
            'price_per_unit' => $price_per_unit,
            'date_as_of_stock' => $date,
            'location' => $location,
            'opening_stock' => $opening_stock,
            // 'weight'=>$weight,
            'modified_at' => date(field_date)
        ];

        $this->init_vendor_model();
        $vendor_id = $this->session->userdata('vendor_id');
        $update = $this->Vendor_model->update_inventory_product_details($product_id, $vendor_id, $data);
        if ($update) {
            $this->response(["success" => true, "message" => "Invetory item update successfully"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function delete_inventory_product()
    {
        $product_id = $this->input->post('id');
        $this->init_vendor_model();
        $delete = $this->Vendor_model->delete_inventory_product($product_id);
        if ($delete) {
            $this->response(["success" => true, "message" => "Invetory Item Delete successfully"], 200);
        } else {
            $this->response(["success" => false, "message" => "Failed to Delete Invetory Item"], 200);
        }
    }

    //////////////// Store settings /////////////////

    public function active_free_delivery()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->active_free_delivery($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Free Delivery is Activated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function deactive_free_delivery()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->deactive_free_delivery($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Free Delivery is Deactivated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function active_home_delivery()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->active_home_delivery($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Home Delivery is Activated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function deactive_home_delivery()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->deactive_home_delivery($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Home Delivery is Deactivated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function active_pickup_from_store()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->active_pickup_from_store($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Pick up from store is Activated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function deactive_pickup_from_store()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->deactive_pickup_from_store($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Pick up from store is Deactivated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function active_stock_management()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->active_stock_management($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Stock Management is Activated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function deactive_stock_management()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->deactive_stock_management($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Stock Management is Deactivated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function active_cod()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->active_cod($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Cash on Delivery is Activated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function deactive_cod()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->deactive_cod($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Cash on Delivery is Deactivated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function active_online_payment()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->active_online_payment($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Online Payment is Activated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function deactive_online_payment()
    {
        $user_id = $this->input->post('id');
        $this->init_vendor_model();
        $update = $this->Vendor_model->deactive_online_payment($user_id);

        if ($update) {
            $this->response(["success" => true, "message" => "Online Payment is Deactivated"], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function update_bank_details()
    {
        $vendor_id = $this->session->userdata('vendor_id');
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_id_by_vendor_id($vendor_id);
        $account_name = $this->input->post('name');
        $account_number = $this->input->post('number');
        $ifsc = $this->input->post('ifsc');

        if (!empty($account_name) && !empty($account_number) && !empty($ifsc)) {
            $update = $this->Vendor_model->update_bank_details($user_id, $account_name, $account_number, $ifsc);
            if ($update) {
                $this->response(["success" => true, "message" => "Banking Details updated"], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input your details"], 200);
        }
    }

    public function update_delivery_charges()
    {
        $vendor_id = $this->session->userdata('vendor_id');
        $this->init_vendor_model();
        $user_id = $this->Vendor_model->get_user_id_by_vendor_id($vendor_id);

        $minimum_order_value = $this->input->post('value');
        $delivery_charges = $this->input->post('charge');

        if (!empty($minimum_order_value) && !empty($delivery_charges)) {
            $update = $this->Vendor_model->update_delivery_charges($user_id, $minimum_order_value, $delivery_charges);
            if ($update) {
                $this->response(["success" => true, "message" => "Delivery Details updated"], 200);
            } else {
                $this->response(["success" => false, "message" => "No changes detected"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Input your details"], 200);
        }
    }

    public function get_all_product_from_master_table()
    {
        $this->init_vendor_model();
        $data = $this->Vendor_model->get_all_product_from_master_table();
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_products_from_master_table()
    {
        $this->init_vendor_model();
        $data = $this->Vendor_model->get_products_from_master_table();

        foreach ($data as $i => $product) {
            $master_id = $product->master_id;
            $image[$i] = $this->Vendor_model->get_product_image($master_id);
        }

        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data, "image" => $image], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_product_by_category_from_master_table()
    {
        $this->init_vendor_model();
        $category = $this->input->post('category');
        if (!empty($category)) {
            $data = $this->Vendor_model->get_product_by_category_from_master_table($category);
            if (!empty($data)) {
                foreach ($data as $i => $product) {
                    $master_id = $product->master_id;
                    $image[$i] = $this->Vendor_model->get_product_image($master_id);
                }

                $this->response(["success" => true, "message" => "found", "data" => $data, "image" => $image], 200);
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_selected_express_add_product()
    {

        $master_id = $this->input->post('id');
        if (!empty($master_id)) {
            $this->init_vendor_model();
            foreach ($master_id as $i => $master) {
                $id = $master;
                $data[$i] = $this->Vendor_model->get_selected_express_add_product($id);
            }

            if (!empty($data)) {
                $this->response(["success" => true, "message" => 'found', "data" => $data], 200);
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Select Product want to add"], 200);
        }
    }



    public function add_product_express(){    //--------------- Add multiple products

        // print_r(array_merge($_POST, $_FILES));
        // die();

        $missing_key = [];
        $input_data = [];

        $this->init_uid_server_model();
        $this->init_vendor_model();


        $vendor_id = $this->session->userdata('vendor_id');
        $master_product_id = $this->input->post('master_product_id');
        $product_weight = $this->input->post('product_weight');
        $product_description = $this->input->post('description');
        $product_unit = $this->input->post('product_unit');
        $product_brand = $this->input->post('product_brand');
        $sale_price = $this->input->post('sale_price');
        $discount = $this->input->post('discount');
        $min_stock_qty = $this->input->post('min_stock_qty');

        for ($i = 0; $i < count($master_product_id); $i++) {
            (!empty($product_weight[$i])) ? $input_data['product_weight'] = $product_weight : $missing_key[$i] = 'Weight';
            (!empty($product_description[$i])) ? $input_data['product_description'] = $product_description : $missing_key[$i] = 'Description';
            (!empty($product_unit[$i])) ? $input_data['product_unit'] = $product_unit : $missing_key[$i] = 'Unit';
            (!empty($product_brand[$i])) ? $input_data['product_brand'] = $product_brand : $missing_key[$i] = 'Brand';
            (!empty($sale_price[$i])) ? $input_data['sale_price'] = $sale_price : $missing_key[$i] = 'Price';
            (!empty($discount[$i])) ? $input_data['discount'] = $discount : $missing_key[$i] = 'Discount';
            (!empty($min_stock_qty[$i])) ? $input_data['min_stock_qty'] = $min_stock_qty : $missing_key[$i] = 'Quantity';
        }
        if (!empty($missing_key)) {
            $missing_string = implode(", ", $missing_key);
            $missing_string = rtrim($missing_string, ", ");
            $this->response(['success' => false, 'message' => "Fill all details"], 200);
        } else {
            $path = 'assets/uploads/product_images/';

            foreach ($master_product_id as $i => $masterId) {

                $product_id = $this->Uid_server_model->generate_uid(KEY_PRODUCT);
                $master_id = $masterId;
                $brand = $product_brand[$i];
                $salePrice = $sale_price[$i];
                $perc = $discount[$i];
                $stock = $min_stock_qty[$i];
                $unit = $product_unit[$i];

                foreach ($_FILES['images_' . $i]['name'] as $j => $val) {
                    $productImages[$j] = $this->upload_express_image($path, $val, $_FILES['images_' . $i][param_temp_name][$j]);
                    $image_id[$j] = $this->Uid_server_model->generate_uid(KEY_IMAGE);

                    for ($k = 0; $k < count($image_id); $k++) {
                        $image_data[$k]['uid']                      = $this->Uid_server_model->generate_uid(KEY_IMAGE);
                        $image_data[$k]['product_id']               = $product_id;
                        $image_data[$k]['master_product_id']        = $master_id;
                        $image_data[$k]['path']                     = $productImages[$k];
                        $image_data[$k]['main_image']               = 1;
                        $image_data[$k]['created_at']               = date(field_date);
                        $image_data[$k]['modified_at']              = date(field_date);
                    }
                }

                $product_data = [
                    'uid' => $product_id,
                    'master_product_id' => $master_id,
                    'vendor_id' => $vendor_id,
                    'brand_id' => $brand,
                    'product_unit_id' => $unit,
                    'sale_price' => $salePrice,
                    'discount' => $perc,
                    'min_stock_qty' => $stock,
                    'created_at' => date(field_date),
                    'modified_at' => date(field_date)
                ];

                $insert = $this->Vendor_model->save_express_product($product_data, $image_data);
                if ($insert) {
                    $this->response(["success" => true, "message" => "All products save successfully", "image" => $image_data], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to add products"], 200);
                }
            }
        }
    }


    private function upload_express_image($path, $image_name, $tmp_name)
    {
        $user_image_path = "";
        $filename_array = explode(".", $image_name);
        $this->init_uid_server_model();
        $file_name = $this->Uid_server_model->generate_Uid(KEY_IMAGE);
        // $file_name = $image_name;
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


    public function get_brand_name_by_category_id()
    {
        $category_id = $this->input->post('id');
        $this->init_vendor_model();
        $data = $this->Vendor_model->get_brand_name_by_category_id($category_id);

        if (!empty($category_id)) {
            $this->response(["success" => true, "message" => "success", 'data' => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "failed"], 200);
        }
    }

    public function language()
    {
        $apiKey = 'AIzaSyDCx7UqFSWYeSjVzcXbgBKB5nnarnHZWoM';
        $text = 'Hello world!';
        $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source=en&target=fr';

        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handle);
        $responseDecoded = json_decode($response, true);
        $responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);      //Here we fetch the HTTP response code
        curl_close($handle);

        if ($responseCode != 200) {
            echo 'Fetching translation failed! Server response code:' . $responseCode . '<br>';
            echo 'Error description: ' . $responseDecoded['error']['errors'][0]['message'];
        } else {
            echo 'Source: ' . $text . '<br>';
            echo 'Translation: ' . $responseDecoded['data']['translations'][0]['translatedText'];
        }
    }
}
