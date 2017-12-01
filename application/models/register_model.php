<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		#$this->output->enable_profiler(TRUE);
	}
	

	//	Save Registration User
	public function save($vars) {
		foreach($vars as $v) {
			$array[$v] = $this->$v;
		}
		$this->db->insert("user",$array);
		return $this->db->insert_id();
	}


	//	Duplicate Email
	public function duplicateEmail($mail) {
		return $this->db->query("SELECT id FROM user WHERE mail = '".$mail."'")->result();
	}
	
}