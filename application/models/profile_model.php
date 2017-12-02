<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		#$this->output->enable_profiler(TRUE);
	}
	

	//	Set Profile
	public function setProfile($user_id) {
		$this->profile = $this->db->query("SELECT * FROM user WHERE id = ".$user_id." LIMIT 1")->result();		
	}


	//	Name
	public function name() {
		return $this->first_name()." ".$this->last_name();
	}

	//	First name
	public function first_name() {
		return stripslashes($this->profile[0]->first_name);
	}

	//	Last name
	public function last_name() {
		return stripslashes($this->profile[0]->last_name);
	}

}