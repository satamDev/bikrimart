<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Vendor/Common.php");

class Order_Api extends Common {

    function __construct()
    {
        parent::__construct();
        $this->load->model("Vendor/Order_model");
    }

    public function get_pending_orders_list()
    {
        if (!empty($this->session->userdata("vendor_id")))
        {
            $vendor_id = $this->session->userdata("vendor_id");
            $list_of_orders = $this->Order_model->get_list_of_orders("PENDING", 100, $vendor_id);
            if (!empty($list_of_orders))
            {
                $response = ["success" => true, "message" => "List of pending orders get successfully.", "data" => $list_of_orders];
            }
            else
            {
                $response = ["success" => false, "message" => "No pending orders remaining."];
            }
        }
        else
        {
            $response = ["success" => false, "message" => "Login session expired!", "redirect_to" => base_url("vendor/login")];
        }

        $this->response($response, 200);
    }

}