<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

///////////////////////////////////////////////////////////////////////////////

define('helper_form', 'form');
define('helper_url', 'url');
//////////////////////////////////////////////////////////
define('lang_app_message', 'app_messages');
//////////////////////////////////////////////////////////
define('table_categories', 'categories');
//////////////////////////////////////////////////////////

/////////////////////// moloy start ////////////////////////
define('PANEL_CUSTOMER', 'customer');


define('KEY_USER', 'USER');
define('KEY_TOKEN', 'TOKEN');
define('KEY_VENDOR', 'VENDOR');
define('KEY_GROUP', 'GROUP');
define('KEY_DOCUMENT', 'DOCUMENT');
define('KEY_IMAGE', 'IMAGE');
define('KEY_CUSTOMER', 'CUSTOMER');
define('KEY_CART', 'CART');
define('KEY_SESSION', 'SESSION');
define('KEY_MASTER_PRODUCT', 'MASTER_PRODUCT');
define('KEY_ADDRESS', 'ADDRESS');

////////////////////////////////////

define('UID_USER_PREFIX', 'USERS_');
define('UID_TOKEN_PREFIX', 'TOKEN_');
define('UID_VENDOR_PREFIX', 'VENDOR_');
define('UID_GROUP_PREFIX', 'GROUP_');
define('UID_DOCUMENT_PREFIX', 'DOCUMENT_');
define('UID_IMAGE_PREFIX', 'IMAGE_');
define('UID_CUSTOMER_PREFIX', 'CUSTOMER_');
define('UID_CART_PREFIX', 'CART_');
define('UID_SESSION_PREFIX', 'SESSION_');
define('UID_MASTER_PRODUCT_PREFIX', 'MASTER_PRODUCT_');
define('UID_ADDRESS_PREFIX', 'ADDRESS_');

//////////////////////////////////////////////////////////
define('field_location','Asia/Kolkata');
define('field_mobile','mobile');
define('field_created_at','created_at');
define('field_modified_at','modified_at');
define('field_user_id','user_id');
define('field_token','token');
define('field_otp','otp');
define('field_date', 'Y-m-d H:i:s');
define('field_uid', 'uid');
define('field_user_type_id', 'user_type_id');
define('field_group_id', 'gid');
define('field_status', 'status');
define('field_name', 'name');
define('field_email', 'email');
define('field_building_no', 'building_no');
define('field_city', 'city');
define('field_bussiness_category', 'category');
define('field_bussiness_type', 'type');
define('field_profile_image', 'profile_image');
define('field_store_front_image', 'front_image');
define('field_store_inside_image', 'inside_image');
define('field_gst_number', 'gst_number');
define('field_upi_number', 'upi_number');
define('field_password', 'password');
define('field_parent_id', 'parent_id');
define('field_categorie_level', 'categorie_level');
define('field_url', 'url');
define('field_url_ids', 'url_ids');
define('field_first_level_category_id','first_level_category_id');
define('field_vendor_id','vendor_id');
define('field_value','value');
/////////////////////////////////////
define('table_users','users');
define('table_otp_list','otp_list');
define('table_vendor','vendors');
define('table_documents','documents');
define('table_document_new','document');
define('table_brand','brand');
define('table_products', 'products');
define('table_product_images', 'product_images');
define('table_system_preferance', 'system_preferance');
define('table_products_all_master', 'products_all_master');
////////////////////////////////////////
define('param_id','id');
define('param_mobile','mobile');
define('param_otp','otp');
define('param_name','name');
define('param_email','email');
define('param_bussiness_name','bussiness_name');
define('param_building_no','building_no');
define('param_city','city');
define('param_bussiness_category','bussiness_category');
define('param_bussiness_type','bussiness_type');
define('param_profile_image','profile_image');
define('param_store_front_image','front_image');
define('param_store_inside_image','inside_image');
define('param_temp_name','tmp_name');
define('param_gst_number','gst_number');
define('param_upi_number','upi_number');
define('param_password','password');
define('param_username','username');
define('param_category_id','category_id');
define('param_brand_name','brand_name');
define('param_parent_id', 'parent_id');
define('param_category_level', 'category_level');

////////////////////////////////////////
define('const_user_type_vendor','user_vendor');
define('const_deactive','DEACTIVE');
define('const_active','ACTIVE');
define('const_deleted','DELETED');
define('const_otp_validate_time','otp_validate_time');

define('const_google_api_key','AIzaSyDCx7UqFSWYeSjVzcXbgBKB5nnarnHZWoM');


////////////////////////////////////////
define('type_allowed','jpg|jpeg|png');
define('key_allowed_types', 'allowed_types');
define('key_upload_path', 'upload_path');
define('library_upload', 'upload');

//////////////////////////////////////////////////
define('path_profie_image','assets/uploads/profile_image/');
define('path_store_image','assets/uploads/store_image/');
define('path_product_image','assets/uploads/product_image/');
//////////////////////////////////////////////////
define('KEY_CATEGORY', 'CATEGORY');
define('KEY_BRAND','BRAND');
define('KEY_PRODUCT','PRODUCT');
define('KEY_VARIANT','VARIANT');
//////////////////////////////////////////////////
define('UID_CATEGORY_PREFIX', 'CATEGORY_');
define('UID_BRAND_PREFIX', 'BRAND_');
define('UID_PRODUCT_PREFIX', 'PRODUCT_');
define('UID_VARIANT_PREFIX', 'VARIANT_');
//////////////////////////////////////////////////
define('AS_category_name', ' as category_name');
define('AS_brand_name', ' as brand_name');
//////////////////////////////////////////////////
define('header_allow_origin', 'Access-Control-Allow-Origin: *');
define('header_allow_headers', 'Access-Control-Allow-Headers: *');
define('header_allow_methods', "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE, PATCH");
/////////////////////////////////////////////////////////////////////////////////

define('query_param_page_size', 'pageSize');
define('query_param_page_no', 'pageNo');
define('query_param_sort_by', 'sortBy');
define('query_param_sort_dir', 'sortDir');
define('query_param_vendor_id', 'vendorId');

define('const_rupee_symbol', '₹');
define('const_page_size', '10');
define('const_page_no', '0');
define('const_opening_stock_max_limit', '15');
define('const_opening_stock_min_limit', '0');

define('WEB_PANEL_CUSTOMER', 'Frontend/Api/');
