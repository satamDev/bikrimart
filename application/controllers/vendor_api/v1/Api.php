<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->database();

        $this->load->helper(array(helper_form, helper_url));        
    }

    private function pre($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    private function init_api_v1_model(){
        $this->load->model('Api/V1_model');
    }

    private function trim_array($sub_category){ //recursive function
        foreach($sub_category as $key => $value){            
            if(empty($value['children'])){
                unset($sub_category[$key]['children']);
            }else{
                $sub_category[$key]['id'] = $sub_category[$key]['id'];
                $sub_category[$key]['text'] = $sub_category[$key]['text'];
                $sub_category[$key]['children'] = $this->trim_array($sub_category[$key]['children']);
            }
        }
        return $sub_category;
    }

    public function fetchCategorys(){
        $this->init_api_v1_model();
        $categories = $this->V1_model->get_categories();

        foreach($categories as $key => $value){            
            if(empty($value['children'])){
                unset($categories[$key]['children']);
            }else{
                $categories[$key]['id'] = $categories[$key]['id'];
                $categories[$key]['text'] = $categories[$key]['text'];
                $categories[$key]['children'] = $this->trim_array($categories[$key]['children']);
            }
        }        
        // $this->pre($categories);

        echo json_encode($categories);
    }
    

    public function printCategoryTree() {
        $this->init_api_v1_model();
        $categories = $this->V1_model->getCategoryTree();
        $categories = "<option value='0'></option>". $categories;
        echo $categories;
    }

    public function view_test(){
        $this->load->view('vendor/test');
    }

    public function getBrand(){
        $categories = $this->input->get('categories'); //array given

        $selected_distinct_parent_category_ids = [];

        $this->init_api_v1_model();
        if(!empty($categories)){
            foreach($categories as $key => $value){
                $parent_category_id = $this->V1_model->getParentCategoryId($value);
                if( !in_array($parent_category_id,$selected_distinct_parent_category_ids)) array_push($selected_distinct_parent_category_ids,$parent_category_id);
            }
        }

        // $selected_distinct_parent_category_ids_string = implode(",",$selected_distinct_parent_category_ids);
        if(!empty($selected_distinct_parent_category_ids)){
            $brands = $this->V1_model->getBrandsByCategoryId($selected_distinct_parent_category_ids);
            // print_r($brands);        
            // print_r($selected_distinct_parent_category_ids);
            echo json_encode($brands);
        }
    }
    
    public function getVariants(){        
        $this->init_api_v1_model();        
        
        $brands = $this->V1_model->getVariantLists();
        
        echo json_encode($brands);
    }

    public function getUnits(){
        $this->init_api_v1_model();        
        $unites = $this->V1_model->getunits();        
        echo json_encode($unites);
    }

    public function getTaxRates(){
        $this->init_api_v1_model();        
        $unites = $this->V1_model->getTaxRates();        
        echo json_encode($unites);
    }

}