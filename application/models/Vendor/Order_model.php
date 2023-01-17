<?php defined("BASEPATH") or exit("No direct script access allowed");

class Order_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function get_list_of_orders($status, $limit, $vendor_id)
    {
        return $this->db->from("orders")->where(["status" => $status, "vendor_id" => $vendor_id])->order_by("id", "DESC")->limit($limit)->get()->result();
    }

}