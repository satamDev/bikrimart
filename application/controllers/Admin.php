<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

    public function index(){
    	$this->add_category();
    }

    private function load_headers($data){
    	$this->load->view('admin/inc/header_link', $data['header_link']);
		$this->load->view('admin/inc/sidebar', $data['sidebar']);
		$this->load->view('admin/inc/header', $data['header']);
    }

    private function load_footers($data){
    	$this->load->view('admin/inc/logout_model');
		$this->load->view('admin/inc/footer_link', $data['footer']);
    }

    public function load_admin(){		# for testing purpose
    	$data_header = [
    		'header_link'=> [],
			'sidebar'=> [],
			'header'=> [
				'title' => 'Bikrimart | Admin'
			]
    	];

    	$data_footer = [
    		'footer'=> []
    	];
		$this->load_headers($data_header);
    	$this->load->view('admin/blank');
    	$this->load_footers($data_footer);
    }

	private function init_category_model(){
		$this->load->model('admin/Category_model');
	}

	private function init_brand_model(){
		$this->load->model('admin/Brand_model');
	}
	private function init_uid_server_model(){
		$this->load->model('Uid_server_model');
	}

	private function response($data, $status)
	{
		return $this->output->set_content_type("application/json")
			->set_status_header($status)
			->set_output(json_encode($data));
	}

	public function add_category(){
		$data_header = [
    		'header_link'=> [],
			'sidebar'=> [],
			'header'=> [
				'title' => 'Bikrimart | Admin'
			]
    	];

    	$data_footer = [
    		'footer'=> []
    	];
		$this->load_headers($data_header);

		$this->load->view('admin/add_category');

		$this->load_footers($data_footer);

		$this->load->view('admin/inc/custom_js/category_js');
	}


	public function fetch_category(){
		$id=$this->input->post(param_id);
		$this->init_category_model();
		$categories=$this->Category_model->fetch_category($id);
		
		if(!empty($categories) || $categories!=NULL ){
			$this->response(["success"=>true,"message"=>"Sub Categories Listed", "value"=>$categories],200);	
		}
		else{
			$this->response(["success"=>false,"message"=>"Don't Have Sub-Category"],200);
		}
	}

	public function add_product_category(){
		$this->init_uid_server_model();
		$this->init_category_model();

		$uid=$this->Uid_server_model->generate_uid(KEY_CATEGORY);
		$name=$this->input->post(param_name);
		$parent_id=$this->input->post(param_parent_id);
		$category_level=$this->input->post(param_category_level);

		if($parent_id=='undefined'){
			$this->response(["success"=>false,"message"=>"Please select  a category !"],200);
		}
		else{
			$is_added=$this->Category_model->add_product_category($uid, $name, $parent_id, $category_level);
			if($is_added){
				$this->response(["success"=>true,"message"=>"Product category added"],200);
			}
			else{
				$this->response(["success"=>false,"message"=>"Fail to add product category"],200);
			}
		}
		
	}

	// ================= Add Brands ===========================

	public function brands(){
		$data_header = [
    		'header_link'=> [],
			'sidebar'=> [],
			'header'=> [
				'title' => 'Bikrimart | Admin'
			]
    	];

    	$data_footer = [
    		'footer'=> []
    	];
		$this->load_headers($data_header);
    	$this->load->view('admin/add_brands');
    	$this->load_footers($data_footer);

		$this->load->view('admin/inc/custom_js/brand_js');
	}

	public function display_brand_details(){
		$this->init_brand_model();
		$brand=$this->Brand_model->display_brand_details();
		if(!empty($brand)){
			$this->response(["success"=>true, "message"=>"Brand Names Listed", "value"=>$brand],200);
		}
		else{
			$this->response(["success"=>false, "message"=>"Brand Names Not Found"],200);
		}
	}

	public function fetch_category_name(){
		$this->init_brand_model();
		$category=$this->Brand_model->fetch_category_name();
		if(!empty($category)){
			$this->response(["success"=>true, "message"=>"Category Names Listed", "value"=>$category],200);
		}
		else{
			$this->response(["success"=>false, "message"=>"Category  Not Found"],200);
		}
	}

	public function add_brand_name(){
		$category_id=$this->input->post(param_category_id);
		$brand_name=$this->input->post(param_brand_name);
		$this->init_uid_server_model();
		$uid=$this->Uid_server_model->generate_uid(KEY_BRAND);


		if(!empty($category_id) && !empty($brand_name)){
			$this->init_brand_model();
			$is_added=$this->Brand_model->add_brand_name($uid, $category_id, $brand_name);
			if(($is_added)){
				$this->response(["success"=>true, "message"=>"Brand name added successfully !"],200);
			}
			else{
				$this->response(["success"=>false, "message"=>"Failed to add Brand Name"],200);
			}
		}
		else{
			$this->response(["success"=>false, "message"=>"Enter Category & Brand Name"],200);
		}
		
	}






	

}
