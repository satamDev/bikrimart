<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Controller
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
    private function is_user_logged_in()
    {
        $logged_in = (!empty($this->session->userdata('customer_id'))) ? true : false;
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

    public function view_send_otp()
    {
        $header_data['meta_title'] = 'Sign In | Bikrimart';
        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/enter_mobile_number');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/register_js');
    }

    public function view_verify_otp()
    {
        $header_data['meta_title'] = 'Sign In  | Bikrimart';
        $this->load->view('customer/inc/header_link', $header_data);
        $this->load->view('customer/otp');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
        $this->load->view('customer/inc/custom_js/register_js');
    }

    public function view_dashboard()
    {
        $this->load->view('customer/inc/header_link');
        $this->load->view('customer/customer_dashboard');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
    }

    public function view_welcome()
    {
        $this->load->view('customer/inc/header_link');
        $this->load->view('customer/welcome');
        $this->load->view('customer/inc/footer');
        $this->load->view('customer/inc/footer_link');
    }

    public function view_add_name_address()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Give Details | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/name_address');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
            $this->load->view('customer/inc/custom_js/name_address_js');
        } else {
            redirect(base_url('customer/send_otp'));
        }
    }

    public function view_add_deliver_address()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Address | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/add_deliver_address');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
            $this->load->view('customer/inc/custom_js/delivery_address_js');
        } else {
            redirect(base_url('customer/send_otp'));
        }
    }

    public function view_map()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Address | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/map');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
        } else {
            redirect(base_url('customer/send_otp'));
        }
    }

    public function view_detail_deliver_address()
    {
        if ($this->is_user_logged_in()) {
            $header_data["meta_title"] = "Detail Address | Bikrimart ";
            $this->load->view('customer/inc/header_link', $header_data);
            $this->load->view('customer/change_deliver_address');
            $this->load->view('customer/inc/footer');
            $this->load->view('customer/inc/footer_link');
            $this->load->view('customer/inc/custom_js/delivery_address_js');
        } else {
            redirect(base_url('customer/send_otp'));
        }
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


    ////////////////////// Functions /////////////////////////////////


    public function send_otp()
    {
        $mobile = $this->input->post(param_mobile);
        $this->init_common_model();
        if (!empty($mobile) || $mobile != null) {
            $user = $this->Common_model->check_user_exist($mobile, field_mobile, table_users);
            $otp = rand(1000, 9999);
            $this->init_uid_server_model();
            $customer_id = $this->Uid_server_model->generate_uid(KEY_CUSTOMER);
            $token = $this->Uid_server_model->generate_uid(KEY_TOKEN);
            $this->init_customer_model();
            if (!empty($user) || $user != null) {
                // when user already exist 
                $user_id  = $this->Customer_model->get_user_by_mobile($mobile);
                // $user_id = $user->uid;
                $otp_created_at = $this->Customer_model->get_otp_create_time($user_id);
                // $otp_created_at = $otp_first_created_at->created_at;
                if ($this->Customer_model->set_otp($user_id, $token, $otp, $otp_created_at)) {
                    $this->response(["success" => true, "message" => "Otp sent successfully !", "redirect" => base_url('customer/verify')], 200);
                } else {
                    $this->response(["success" => true, "message" => "Otp sent successfully !", "redirect" => base_url('customer/verify')], 200);
                }
                $this->session->set_userdata('customer_mobile', $mobile);
            } else {
                // when user not exist
                // register user first then save otp in user table
                $uid = $this->Uid_server_model->generate_uid(KEY_USER);
                $add_new_customer = $this->Customer_model->insert_customer_data($uid, $mobile, 'user_customer', $customer_id, $otp, $token);
                if ($add_new_customer) {
                    $this->session->set_userdata('customer_mobile', $mobile);
                    $this->response(["success" => true, "message" => "Otp sent successfully !", "redirect" => base_url('customer/verify')], 200);
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
        $mobile = $this->session->userdata('customer_mobile');
        $otp = $this->input->post(param_otp);
        $session_id = $this->input->post('session_id');

        if (!empty($mobile) || $mobile != null) {
            $this->init_customer_model();
            $user_id = $this->Customer_model->get_user_by_mobile($mobile);
            // $user_id = $user->uid;
            if (!empty($user_id) || $user_id != null) {
                $original_otp  = $this->Customer_model->check_otp($user_id);
                if ($original_otp != $otp) {
                    $this->response(["success" => false, "message" => "Otp not matched !"], 200);
                } else {
                    $gid = $this->Customer_model->get_gid_by_user_id($user_id);
                    if ($gid == "") {
                        $this->session->set_userdata('customer_id', $user_id);  // user_id
                        //uesr newly registered

                        $this->response(["success" => true, "message" => "Otp matched !"], 200);
                        $this->init_uid_server_model();
                        $new_gid =  $this->Uid_server_model->generate_uid(KEY_GROUP);
                        $this->Customer_model->set_gid_by_user_id($user_id, $new_gid);  //users table -> uid
                    } else {
                        $this->session->set_userdata('customer_id', $user_id);  // user_id
                        $this->add_session_cart_items_in_database($session_id);
                        $this->response(["success" => true, "message" => "User already exist !", "redirect" => base_url()], 200);
                    }
                }
            } else {
                $this->response(["success" => false, "message" => "User not exist !"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Enter Your Mobile Number"], 200);
        }
    }

    public function logout()
    {
        // $this->session->unset_userdata(field_name);
        $this->session->unset_userdata('customer_mobile');
        $this->session->unset_userdata('customer_id');
        redirect(base_url());
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

    public function add_session_cart_items_in_database($session_id)
    {
        $user_id = $this->session->userdata('customer_id');
        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

        if (!empty($user_id)) {
            $data = $this->Customer_model->get_session_cart_products($session_id);

            if (!empty($data)) {
                foreach ($data as $product) {
                    $cart_id = $product->cart_id;
                    $master_id = $product->master_id;
                    $product_id = $product->product_id;
                    $product_qty = $product->product_qty;
                    $vendor_id = $product->vendor_id;
                    $brand_id = $product->brand_id;

                    $exist = $this->Customer_model->check_product_exist($customer_id, $product_id, $vendor_id, $brand_id, 'cart_items');
                    if ($exist) {
                        $this->Customer_model->update_cart_item_from_session($cart_id, $customer_id, $product_id, $product_qty, $vendor_id, $brand_id);
                    } else {
                        $this->Customer_model->insert_cart_item_from_session($cart_id, $customer_id,  $master_id, $product_id, $product_qty, $vendor_id, $brand_id);
                    }
                }
                // unset($_SESSION['cart']);
            }
        }
    }

    public function add_product_to_cart()
    {
        if ($this->is_user_logged_in()) {

            $user_id = $this->session->userdata('customer_id');   //  customer user_id
            $product_qty = $this->input->post('qty');
            $product_id = $this->input->post('product_id');
            $master_id = $this->input->post('master_id');
            $vendor_id = $this->input->post('vendor_id');
            $brand_id = $this->input->post('brand_id');

            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

            if (!empty($user_id)) {
                $exist = $this->Customer_model->check_product_exist($customer_id, $product_id, $vendor_id, $brand_id, 'cart_items');
                if ($exist) {
                    $update = $this->Customer_model->update_cart_item($customer_id, $product_id, $product_qty, $vendor_id, $brand_id);
                    if ($update) {
                        $this->response(["success" => true, "message" => "Product quantity updated"], 200);
                    } else {
                        $this->response(["success" => false, "message" => "Something went wrong"], 200);
                    }
                } else {
                    $this->init_uid_server_model();
                    $cart_id = $this->Uid_server_model->generate_uid(KEY_CART);
                    $insert = $this->Customer_model->insert_cart_item($cart_id, $customer_id, $product_id, $master_id, $product_qty, $vendor_id, $brand_id);
                    if ($insert) {
                        $this->response(["success" => true, "message" => "Product add to bag successfully"], 200);
                    } else {
                        $this->response(["success" => false, "message" => "Failed to add product to bag"], 200);
                    }
                }
            }
        } else {

            $this->init_uid_server_model();
            $product_qty = $this->input->post('qty');
            $product_id = $this->input->post('product_id');
            $master_id = $this->input->post('master_id');
            $vendor_id = $this->input->post('vendor_id');
            $brand_id = $this->input->post('brand_id');

            $session = $this->input->post('session_id');

            if (empty($session) || $session == '') {
                $session_id = $this->Uid_server_model->generate_uid(KEY_SESSION);
            } else {
                $session_id = $session;
            }

            $this->init_customer_model();

            $exist = $this->Customer_model->check_session_product_exist($session_id, $product_id, $vendor_id, $brand_id, 'session_cart_item');
            if ($exist) {
                $update = $this->Customer_model->update_session_cart_item($session_id, $product_id, $product_qty, $vendor_id, $brand_id);
                if ($update) {
                    $this->response(["success" => true, "message" => "Product quantity updated", "data" => $session_id], 200);
                } else {
                    $this->response(["success" => false, "message" => "Something went wrong"], 200);
                }
            } else {
                $cart_id = $this->Uid_server_model->generate_uid(KEY_CART);
                $insert = $this->Customer_model->insert_session_cart_item($session_id, $cart_id, $product_id, $master_id, $product_qty, $vendor_id, $brand_id);
                if ($insert) {
                    $this->response(["success" => true, "message" => "Product add to bag successfully", "data" => $session_id], 200);
                } else {
                    $this->response(["success" => false, "message" => "Failed to add product to bag"], 200);
                }
            }


        }
    }

    public function cart_session()
    {
        echo "<pre>";
        print_r($this->session->userdata('cart'));
    }

    public function get_price_and_product_default()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');   //  customer user_id
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $product = $this->Customer_model->get_product_default($customer_id);

            $data = $this->Customer_model->get_master_id_vendor_id_product_qty_by_customer_id($customer_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $vendor_id = $d->vendor_id;
                    $product_qty[$i] = $d->product_qty;
                    $price[$i] = $this->Customer_model->get_product_price($product_id, $vendor_id);
                }
                if (!empty($product)) {
                    $this->response(["success" => true, "message" => "found", "product" => $product, "price" => $price, "qty" => $product_qty], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {

            $this->init_customer_model();
            $session_id = $this->input->post('session_id');

            $product = $this->Customer_model->get_session_product_default($session_id);

            $data = $this->Customer_model->get_session_master_vendor_id_by_customer_id($session_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $vendor_id = $d->vendor_id;
                    $product_qty[$i] = $d->product_qty;
                    $price[$i] = $this->Customer_model->get_product_price($product_id, $vendor_id);
                }
                if (!empty($product)) {
                    $this->response(["success" => true, "message" => "found", "product" => $product, "price" => $price, "qty" => $product_qty], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        }
    }

    public function display_cart_items()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');   //  customer user_id
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $data = $this->Customer_model->get_cart_details_of_customer($customer_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $product[$i] = $this->Customer_model->get_cart_product_detail($product_id);
                }

                if (!empty($data)) {
                    $this->response(["success" => true, "message" => "found", "data" => $data, "details" => $product], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {
            $this->init_customer_model();
            $session_id = $this->input->post('session_id');
            $data = $this->Customer_model->get_session_cart_details_of_customer($session_id);

            if (!empty($data)) {
                foreach ($data as $i => $d) {
                    $product_id = $d->product_id;
                    $product[$i] = $this->Customer_model->get_cart_product_detail($product_id);
                }

                if (!empty($data)) {
                    $this->response(["success" => true, "message" => "found", "data" => $data, "details" => $product], 200);
                } else {
                    $this->response(["success" => false, "message" => "not found"], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        }
    }

    public function delete_cart_item()
    {
        if ($this->is_user_logged_in()) {
            $cart_id = $this->input->post('id');
            $this->init_customer_model();
            $delete = $this->Customer_model->delete_cart_item($cart_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        } else {
            $cart_id = $this->input->post('id');
            $this->init_customer_model();
            $delete = $this->Customer_model->delete_session_cart_item($cart_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        }
    }

    public function get_customer_address()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $exist = $this->Customer_model->is_user_exist($customer_id);

            if ($exist) {
                $data = $this->Customer_model->get_customer_address($customer_id);
                if (empty($data) || $data == null || $data == "") {
                    $this->response(["success" => false, "message" => "Address not found ! Give Your address details"], 200);
                } else {
                    $this->response(["success" => true, "message" => "found", "data" => $data], 200);
                }
            } else {
                $this->response(["success" => false, "message" => "Address not found ! Give Your address details"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Address not found ! Give Your address details"], 200);
        }
    }

    public function get_user_name()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id'); // customer user_id
            if (!empty($user_id)) {
                $this->init_customer_model();
                $data = $this->Customer_model->get_user_name($user_id); // fetch name & email
                $this->response(["success" => true, "message" => "Details found", "data" => $data], 200);
            }
        } else {
        }
    }

    public function save_user_details()
    {
        $user_id = $this->session->userdata('customer_id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        if (empty($name)) {
            $this->response(["success" => false, "message" => "Enter Your Personal Details"], 200);
        } else {
            $this->init_customer_model();
            $added = $this->Customer_model->save_user_name($user_id, $name, $email);
            if ($added) {
                $this->response(["success" => true, "message" => "Details Save Successfully !", "redirect" => base_url('customer/address/details')], 200);
                // $this->session->set_userdata('openChekModal', 'checked');
            } else {
                $this->response(["success" => false, "message" => "Give Your address details"], 200);
            }
        }
    }

    public function get_user_cart_product_id()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $data = $this->Customer_model->get_user_cart_product_id($customer_id);
            if(!empty($data)){
                $this->response(["success" => true, "message" => "Details found", "data" => $data], 200);
            }
            else{
                $this->response(["success" => false, "message" => "Details not found"], 200);
            }
        } else {
            $session_id = $this->input->post('session_id');
            $this->init_customer_model();
            $data = $this->Customer_model->get_user_session_cart_product_id($session_id);
            if(!empty($data)){
                $this->response(["success" => true, "message" => "Details found", "data" => $data], 200);
            }
            else{
                $this->response(["success" => false, "message" => "Details not found"], 200);
            }
        }
    }

    public function delete_product_from_cart()
    {

        if ($this->is_user_logged_in()) {
            $product_id = $this->input->post('product_id');
            $vendor_id = $this->input->post('vendor_id');
            $user_id = $this->session->userdata('customer_id');

            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

            $delete = $this->Customer_model->delete_product_from_cart($product_id, $vendor_id, $customer_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Successfully Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        } else {
            $product_id = $this->input->post('product_id');
            $vendor_id = $this->input->post('vendor_id');
            $session_id = $this->input->post('session_id');
            $this->init_customer_model();

            $delete = $this->Customer_model->delete_product_from_session_cart($product_id, $vendor_id, $session_id);
            if ($delete) {
                $this->response(["success" => true, "message" => "Deleted"], 200);
            } else {
                $this->response(["success" => false, "message" => "Failed to delete"], 200);
            }
        }
    }

    public function add_deliver_address()
    {
        $user_id = $this->session->userdata('customer_id');
        $address = $this->input->post('address');

        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');

        if (!empty($address)) {
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $this->init_uid_server_model();
            $address_id = $this->Uid_server_model->generate_uid(KEY_ADDRESS);
            $added = $this->Customer_model->save_user_address($address_id, $customer_id, $address, $lat, $lng);
            if ($added) {
                $this->response(["success" => true, "message" => "Your address is save successfully !", "redirect" => base_url('customer/details')], 200);
            } else {
                $this->response(["success" => false, "message" => "Something went wrong"], 200);
            }
        } else {
            $this->response(["success" => false, "message" => "Add Delivery Address"], 200);
        }
    }

    public function get_delivery_price()
    {
        $vendor_id = $this->input->post('vendor_id');
        $this->init_customer_model();
        $data = $this->Customer_model->get_delivery_price_of_vendor($vendor_id);
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function display_delivery_details()
    {
        if ($this->is_user_logged_in()) {
            $user_id = $this->session->userdata('customer_id');
            $this->init_customer_model();
            $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
            $vendor = $this->Customer_model->get_vendor_id_by_customer_id($customer_id);
            foreach ($vendor as $i => $vendor) {
                $vendor_id = $vendor->vendor_id;
                $data[$i] = $this->Customer_model->display_delivery_details($vendor_id, 'cart_items');
            }
            if (!empty($data)) {
                $this->response(["success" => true, "message" => "found", "data" => $data], 200);
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        } else {
            $session_id = $this->input->post('session_id');
            $this->init_customer_model();
            $vendor = $this->Customer_model->get_vendor_id_by_session_id($session_id);
            foreach ($vendor as $i => $vendor) {
                $vendor_id = $vendor->vendor_id;
                $data[$i] = $this->Customer_model->display_delivery_details($vendor_id, 'session_cart_item');
            }
            if (!empty($data)) {
                $this->response(["success" => true, "message" => "found", "data" => $data], 200);
            } else {
                $this->response(["success" => false, "message" => "not found"], 200);
            }
        }
    }

    public function save_detail_deliver_address()
    {
        $user_id = $this->session->userdata('customer_id');

        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
        $house_number = $this->input->post('house_number');
        $direction = $this->input->post('direction');
        $landmark = $this->input->post('landmark');
        $address_type = $this->input->post('address_type');


        if (empty($area)) {
            $this->response(["success" => false, "message" => "Enter Apartment/Road/Area"], 200);
            return;
        }

        if (empty($pincode) && strlen($pincode) != 6) {
            $this->response(["success" => false, "message" => "Enter Valid Pincode"], 200);
            return;
        }
        if (empty($address_type)) {
            $this->response(["success" => false, "message" => "Select Your Address Type"], 200);
            return;
        }

        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);

        $data = $this->Customer_model->save_detail_deliver_address($customer_id, $pincode, $area, $house_number, $direction, $landmark, $address_type);
        if ($data) {
            $this->response(["success" => true, "message" => "success", "redirect" => base_url('shop')], 200);
        } else {
            $this->response(["success" => false, "message" => "Something went wrong"], 200);
        }
    }

    public function get_detail_user_address()
    {
        $user_id = $this->session->userdata('customer_id');
        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
        $data = $this->Customer_model->get_detail_user_address($customer_id);
        if ($data) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_deliver_schedule_time()
    {
        $this->init_customer_model();
        $current_date = date('Y-m-d');
        $max_date = date('Y-m-d', strtotime('+7 days'));
        $current_time = date('H');
        $deliver_time = $current_time + 2;

        $data = $this->Customer_model->get_today_deliver_schedule_time($deliver_time);

        if ($data) {
            $this->response(["success" => true, "message" => "found", "date" => $current_date, "max_date" => $max_date, "data" => $data, "time" => $current_time], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_deliver_time_accroding_date()
    {
        $this->init_customer_model();
        $current_date = date('Y-m-d');
        $max_date = date('Y-m-d', strtotime('+7 days'));
        $current_time = date('H');
        $deliver_time = $current_time + 2;

        $delivery_date = $this->input->post('delivery_date');

        if ($delivery_date == $current_date) {
            $data = $this->Customer_model->get_today_deliver_schedule_time($deliver_time);
        } else {
            $data = $this->Customer_model->get_deliver_schedule_time();
        }

        if ($data) {
            $this->response(["success" => true, "message" => "found", "date" => $current_date, "max_date" => $max_date, "data" => $data, "time" => $deliver_time], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function display_location()
    {
        $this->init_customer_model();
        $data = $this->Customer_model->display_location();
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function check_customer_id_exist()
    {
        $user_id = $this->session->userdata('customer_id');
        $this->init_customer_model();
        $customer_id = $this->Customer_model->get_customer_id_by_user_id($user_id);
        $status = $this->Customer_model->check_customer_id_exist($customer_id, 'customer_address');
        if ($status) {
            $this->response(["success" => true, "message" => "found"], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_all_vendor_list()
    {
        $category_id = $this->input->post(param_id);

        $this->init_customer_model();
        $data = $this->Customer_model->get_all_vendor_list($category_id);

        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_vendor_product_list()
    {
        $vendor_id = $this->input->post(param_id);
        $this->init_customer_model();
        $data = $this->Customer_model->get_vendor_product_list($vendor_id);
        if (!empty($data)) {
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        } else {
            $this->response(["success" => false, "message" => "not found"], 200);
        }
    }

    public function get_product_details_by_vendor_id(){
        $master_id = $this->input->post('master_id');
        $vendor_id = $this->input->post('vendor_id');
        $this->init_customer_model();
        $data = $this->Customer_model->get_product_details_by_vendor_id($vendor_id, $master_id);
        if(!empty($data)){
            $this->response(["success" => true, "message" => "found", "data" => $data], 200);
        }
        else{
            $this->response(["success" => false, "message" => "not found"], 200);
        }

    }
}
