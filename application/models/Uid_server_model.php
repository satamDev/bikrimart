<?php

class Uid_server_model extends CI_Model {
	public function __construct(){
		parent::__construct();

	}
	private $prefix_data = [

		KEY_USER => UID_USER_PREFIX,
		KEY_TOKEN => UID_TOKEN_PREFIX,
		KEY_VENDOR => UID_VENDOR_PREFIX,
		KEY_GROUP => UID_GROUP_PREFIX,
		KEY_DOCUMENT => UID_DOCUMENT_PREFIX,
		KEY_IMAGE => UID_IMAGE_PREFIX,
		KEY_CATEGORY => UID_CATEGORY_PREFIX,
		KEY_BRAND => UID_BRAND_PREFIX,
		KEY_PRODUCT => UID_PRODUCT_PREFIX,
		KEY_VARIANT => UID_VARIANT_PREFIX,
		KEY_CUSTOMER => UID_CUSTOMER_PREFIX,
		KEY_CART => UID_CART_PREFIX,
		KEY_SESSION => UID_SESSION_PREFIX,
		KEY_MASTER_PRODUCT => UID_MASTER_PRODUCT_PREFIX,
		KEY_ADDRESS => UID_ADDRESS_PREFIX,

		'KEY_BANKING' => 'BANKING_',
		'KEY_STORE' => 'STORE_',
		

	];


	private function uid(){

        return (bin2hex(openssl_random_pseudo_bytes(16)));

    }

	public function generate_uid($purpose = null){		

  		return (array_key_exists($purpose, $this->prefix_data)) ? $this->prefix_data[$purpose] . $this->uid() ."_". time(): 0;

	}

}