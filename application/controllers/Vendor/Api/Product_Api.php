<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Vendor/Common.php");

class Product_Api extends Common {

    function __construct()
    {
        parent::__construct();
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

    public function add_product_express()
    {    //--------------- Add multiple products

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

    public function display_product(){    #--------------------- Display product details
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

}