<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Frontend/Vendor/Common.php");

class Inventory_Api extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function get_products_list()
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

    public function get_product_details()
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

    public function update_product_details()
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

    public function delete_product()
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

}