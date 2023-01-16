<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Common_model extends CI_Model
{
    function __construct() {

        parent::__construct();

    }
    public function check_user_exist($uid, $field_name, $table_name)

	{

		$this->db->select($field_name);

		$this->db->from($table_name);

		$this->db->where($field_name, $uid);

		$query = $this->db->get();



		if ($query->num_rows() > 0) {

			return true;

		} else {

			return false;

		}

	}



    



}





?>