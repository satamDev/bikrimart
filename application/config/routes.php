<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/userguide3/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

// $route['default_controller'] = 'welcome';



$route['default_controller'] = 'home';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;



///////////////////// Customer route start ///////////////////////////



$route['home'] = 'Frontend/Product_List';

$route['shop'] = 'Frontend/Product_List/view_shop';
$route['store'] = 'Frontend/Product_List/view_store';
$route['restaurant'] = 'Frontend/Product_List/view_restaurant';

$route['customer/send_otp'] = 'Frontend/Sign_In/view_send_otp';
$route['customer/verify'] = 'Frontend/Sign_In/view_verify_otp';

$route['products/(:any)'] = 'Frontend/Product_List/view_product_details/$1';
$route['vendor/products/(:any)'] = 'Frontend/Product_List/view_product_details/$1';
$route['store/products/(:any)'] = 'Frontend/Product_List/view_store_product/$1';


$route['customer/details'] = 'Frontend/Address/view_add_name_address';
$route['customer/address'] = 'Frontend/Address/view_add_deliver_address';
$route['customer/address/details'] = 'Frontend/Address/view_detail_deliver_address';



////////////////////// Vendor Routes start ///////////////////////////////

$route['vendor'] = 'Frontend/Vendor/Common';

$route['vendor/login'] = 'Frontend/Vendor/Login';

$route['vendor/signup'] = 'Frontend/Vendor/Signup';

$route['vendor/dashboard'] = 'Frontend/Vendor/Dashboard';

$route['vendor/inventory'] = 'Frontend/Vendor/Inventory';

$route['vendor/store'] = 'Frontend/Vendor/Store/setting';

$route['vendor/product/express'] = 'Frontend/Vendor/Product/express';

$route['vendor/product/add'] = 'Frontend/Vendor/Product/add';

$route['vendor/product/list'] = 'Frontend/Vendor/Product/list';

$route['vendor/order'] = 'Frontend/Vendor/Order';

$route['vendor/order/new'] = 'Frontend/Vendor/Order/new';

$route['vendor/order/completed'] = 'Frontend/Vendor/Order/completed';

$route['vendor/order/cancelled'] = 'Frontend/Vendor/Order/cancelled';



// Vendor Dashboard Data Getting API Routes

// ========================================

$route["vendor/dashboard/orders_list"] = "Vendor/get_dashboard_orders_list";







// Add Product Express 



$route['get_brand_by_category'] = 'Vendor/get_brand_name_by_category_id';

$route['get_selected_express_product'] = 'Vendor/get_selected_express_add_product';

$route['get_master_product_by_category'] = 'Vendor/get_product_by_category_from_master_table';

$route['add_product_express'] = 'Vendor/add_product_express';



// Add Products



$route['add_product_already_exist'] = 'Vendor/add_product_when_already_exist';

$route['get_product_name_exist'] = 'Vendor/get_product_name_if_exist';

$route['get_brand_according_category'] = 'Vendor/get_brand_according_category_id';



// Product List



$route['display_product'] = 'Vendor/display_product';

$route['display_product_for_mobile'] = 'Vendor/search_product_for_mobile';



// Inventory 



$route['display_inventory_items'] = 'Frontend/Vendor/Api/Inventory_Api/get_products_list';

$route['edit_inventory_product'] = 'Frontend/Vendor/Api/Inventory_Api/get_product_details';

$route['update_inventory_product'] = 'Frontend/Vendor/Api/Inventory_Api/update_product_details';

$route['delete_inventory_product'] = 'Frontend/Vendor/Api/Inventory_Api/delete_product';



// Store settings



$route['active_free_delivery'] = 'Frontend/Vendor/Api/Store_Api/activate_free_delivery';

$route['deactive_free_delivery'] = 'Frontend/Vendor/Api/Store_Api/deactivate_free_delivery';

$route['active_home_delivery'] = 'Frontend/Vendor/Api/Store_Api/activate_home_delivery';

$route['deactive_home_delivery'] = 'Frontend/Vendor/Api/Store_Api/deactivate_home_delivery';

$route['active_pickup_from_store'] = 'Frontend/Vendor/Api/Store_Api/activate_pickup_from_store';

$route['deactive_pickup_from_store'] = 'Frontend/Vendor/Api/Store_Api/deactivate_pickup_from_store';

$route['active_stock_management'] = 'Frontend/Vendor/Api/Store_Api/activate_stock_management';

$route['deactive_stock_management'] = 'Frontend/Vendor/Api/Store_Api/deactivate_stock_management';

$route['active_cash_on_delivery'] = 'Frontend/Vendor/Api/Store_Api/activate_cod';

$route['deactive_cash_on_delivery'] = 'Frontend/Vendor/Api/Store_Api/deactivate_cod';

$route['active_online_payment'] = 'Frontend/Vendor/Api/Store_Api/activate_online_payment';

$route['deactive_online_payment'] = 'Frontend/Vendor/Api/Store_Api/deactivate_online_payment';

$route['update_delivery_charges'] = 'Frontend/Vendor/Api/Store_Api/update_delivery_charges';

$route['update_bank_details'] = 'Frontend/Vendor/Apiupdate_bank_details';




