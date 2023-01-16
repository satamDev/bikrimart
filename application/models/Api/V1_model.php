<?php
class V1_model extends CI_Model {	
	
	public function __construct(){
		parent::__construct();
	}

	// public function get_node_data($parent_id){ //with experiment no 3

	//     $sql = "SELECT * FROM categories WHERE parent_id = '".$parent_id."'";	    
	    
	//     $query = $this->db->query($sql);
	//     $query = $query->result_array();
	//     $output = array();

	//     foreach($query as $row){
	//         $sub_array = array();
	//         $sub_array['nodes'] = $row['uid'];
	//         $sub_array['text'] = $row['name'];
	//         $sub_array['childrens'] = array_values($this->get_node_data($row['uid']));
	//         $output[] = $sub_array;
	//     }
	//     return $output;
	// }


	public function get_all_categories(){
		#--------------------Experiment 2----start
		$sql_count = 'select max(categorie_level) AS category_count from categories';

		$category_level = $this->db->query($sql_count);
		$category_level = $category_level->result_array();

		$category_level_count = $category_level[0]['category_count'];


		$sql_main = 'select root.uid, root.name as root_name';

		for($i = 0; $i < $category_level_count; $i++){
			$sql_main .= ', down'.$i.'.name as down'.$i.'_name';
		}
		$sql_main .= ' from categories as root';

		
		$sql_main .= ' left outer
			join categories as down0
			on down0.parent_id = root.uid';
		

		for($i = 1; $i < $category_level_count; $i++){
			$sql_main .= ' left outer
				join categories as down'.$i.'
				on down'.$i.'.parent_id = down'.($i - 1).'.uid';
		}

		$sql_main .= ' where root.parent_id is null
			order 
			by root_name ';

		for($i = 0; $i < $category_level_count; $i++){
			$sql_main .= ', down'.$i.'_name';
		}

		// echo $sql_main;

		$categorys = $this->db->query($sql_main);
		echo $categorys->num_rows();
		echo $this->db->last_query();
		$categorys = $categorys->result_array();



		// $category_final_array = [];

		// foreach ($categorys as $key => $value) {
		// 	if(array_key_exists($value['root_name'], $category_final_array)){
		// 		$array = [
		// 			'node' => $value['uid'],
		// 			'value' => $value['root_name'],
		// 			'children' => []
		// 		]
		// 		array_push($category_final_array['']['children'], $array);
		// 	}else{
		// 		$category_final_array[] = [
		// 			'node' => $value['uid'],
		// 			'value' => $value['root_name'],
		// 			'children' => []
		// 		]

		// 	}
		// }
		return $categorys;
		// echo json_encode($categorys);
		#--------------------Experiment 2----end


		// return $categorys;

		// 	 , down1.name as down1_name
		// 	 , down2.name as down2_name
		// 	 , down3.name as down3_name
		//   from categories as root
		// left outer
		//   join categories as down1
		// 	on down1.parent_id = root.uid
		// left outer
		//   join categories as down2
		// 	on down2.parent_id = down1.uid
		// left outer
		//   join categories as down3
		// 	on down3.parent_id = down2.uid
		//  where root.parent_id is null
		// order 
		// 	by root_name 
		// 	 , down1_name 
		// 	 , down2_name 
		// 	 , down3_name';

		// return $category_level_count;

		// $this->db->where()
		// $query = $this->db->get(table_categories);
		// $query = $query->result_array();
		// return $query;

		#--------------------Experiment 3----start
		// $parent_category_id = null;

		// $sql = "SELECT * FROM categories";
		// $query = $this->db->query($sql);
		// $query = $query->result_array();

		// foreach($query as $row){
		//     $data = $this->get_node_data($parent_category_id);
		// }

		// echo json_encode(array_values($data));

		#--------------------Experiment 3----end

	}


	# -----------------------Experiment 4 ------start --working in our project
	public function get_categories(){

        $this->db->select('uid AS `id`, name AS `text`');
        $this->db->from('categories');
        $this->db->where('parent_id', null);

        $parent = $this->db->get();
        
        $categories = $parent->result_array();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]['children'] = $this->sub_categories($p_cat['id']);

            $i++;
        }
        return $categories;
    }

    public function sub_categories($id){

        $this->db->select('uid AS `id`, name AS `text`');
        $this->db->from('categories');
        $this->db->where('parent_id', $id);

        $child = $this->db->get();
        $categories = $child->result_array();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]['children'] = $this->sub_categories($p_cat['id']);

            $i++;
        }
        return $categories;       
    }

    # -----------------------Experiment 4 ------end



    # -----------------------Experiment 5 ------start 
    public function getCategoryTree($level = null, $prefix = '') {
        $rows = $this->db
            ->select('uid,parent_id,name')
            ->where('parent_id', $level)
            ->order_by('uid','asc')
            ->get('categories')
            ->result();

        $category = '';
        if (count($rows) > 0) {        	
            foreach ($rows as $row) {
                $category .= "<option value='".$row->uid."'>".$prefix . $row->name . "</option>";
                // Append subcategories
                $category .= $this->getCategoryTree($row->uid, $prefix . '-');
            }
        }
        return $category;
    }

    # -----------------------Experiment 5 ------end



    public function getParentCategoryId($category_id){
    	$this->db->select('url_ids');
    	$this->db->where('uid', $category_id);
    	$query = $this->db->get('categories');
    	$query = $query->result_array();

    	$parent_category_id = '';

    	if(!empty($query)){
    		$query = $query[0];
    		$array = explode('/', $query['url_ids']);
    		// print_r($array);
    		$parent_category_id = $array[0];    		
    	}
    	return $parent_category_id;
    }

    public function getBrandsByCategoryId($selected_distinct_parent_category_ids){    	
		$this->db->select('uid, name');
		$this->db->where_in('first_level_category_id', $selected_distinct_parent_category_ids);
		$query = $this->db->get('brand');
		$query = $query->result_array();
		return $query;
    }

    public function getVariantLists(){    	
		$this->db->select('uid, name');
		$this->db->where('status', 'active');
		$query = $this->db->get('vendor_variant');
		$query = $query->result_array();
		return $query;
    }

    public function getunits(){    	
		$this->db->select('uid, name');
		$this->db->where('status', 'active');
		$query = $this->db->get('unit_lists');
		$query = $query->result_array();
		return $query;
    }

    public function getTaxRates(){    	
		$this->db->select('r.uid, t.name, r.rate');
		$this->db->where('r.status', 'active');
		$this->db->where('t.status', 'active');
		$this->db->from('list_tax_type t');
		$this->db->join('list_tax_rates r', 't.uid = r.tax_type_id');
		$query = $this->db->get();
		$query = $query->result_array();
		// echo $this->db->last_query();
		$final_arr = [];

		foreach ($query as $key => $value) {
			$final_arr[$key]['id'] = $value['uid'];
			$final_arr[$key]['name'] = strtoupper($value['name'] . '@' . $value['rate']);
		}
		// print_r($query);
		return $final_arr;
    }
}
?>