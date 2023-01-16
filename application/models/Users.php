<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model{
	private $id;
	private $gid;
	private $name;
	private $gender;
	private $dob;
	private $email;
	private $profileImage; 

	private $typeId;

	private $status;

	private function allowedUserType(){
		$allewedUserTypeIds = [
			[
				'user' => 'vendor',
				'table' => 'vendors'
			],
			[
				'user' => 'customer',
				'table' => 'customer'
			]
		];
		return $allewedUserTypeIds;
	}

    function __construct(){
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    // $id, $gid, $name, $gender, $dob, $email, $profileImage, $typeId
    // 'PENDING_ACTIVATION'

    public function sanitizeInputField($input){
    	return filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    }

	public function setUser($data){
		$this->id 			= (array_key_exists('id', $data)) 			? sanitizeInputField($data['id']) 			: null;
		$this->gid 			= (array_key_exists('gid', $data)) 			? sanitizeInputField($data['gid']) 			: null;
		$this->name 		= (array_key_exists('name', $data)) 		? sanitizeInputField($data['name']) 		: null;
		$this->gender 		= (array_key_exists('gender', $data)) 		? sanitizeInputField($data['gender']) 		: null;
		$this->dob 			= (array_key_exists('dob', $data)) 			? sanitizeInputField($data['dob']) 			: null;
		$this->email 		= (array_key_exists('email', $data)) 		? sanitizeInputField($data['email']) 		: null;
		$this->profileImage = (array_key_exists('profileImage', $data)) ? sanitizeInputField($data['profileImage']) : null;
		$this->typeId 		= (array_key_exists('typeId', $data)) 		? sanitizeInputField($data['typeId']) 		: null;
		$this->status 		= (array_key_exists('status', $data)) 		? sanitizeInputField($data['status']) 		: null;
	}

	public function inserInUserTable(){
		$data = [
			'id' 	=> $this->id,
			'gid' 	=> $this->gid,
			'name' 	=> $this->name,
			'gender'=> $this->gender,
			
		];
		$this->db->insert('users', $data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	// public
}

?>