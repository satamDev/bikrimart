<?php define("BASEPATH") or exit("No direct script access allowed");
inlcude_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Store_Api extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function activate_free_delivery()
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

    public function deactivate_free_delivery()
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

    public function activate_home_delivery()
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

    public function deactivate_home_delivery()
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

    public function activate_pickup_from_store()
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

    public function deactivate_pickup_from_store()
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

    public function activate_stock_management()
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

    public function deactivate_stock_management()
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

    public function activate_cod()
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

    public function deactivate_cod()
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

    public function activate_online_payment()
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

    public function deactivate_online_payment()
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

}