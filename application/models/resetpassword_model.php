<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Resetpassword_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		#$this->output->enable_profiler(TRUE);
	}
	
	//	Check if email is registered
	public function registered($mail) {		
		return $this->db->query("SELECT id, first_name, last_name FROM user WHERE mail = '".$mail."'")->result();
	}


	//	Update reset password code and time
	public function updateResetPW($user_id, $reset_password_code) {
		$tomorrow = date("Y-m-d H:i:s",time()+86400);
		$this->db->query("UPDATE user SET reset_password_code = '".$reset_password_code."', reset_password_ts = '".$tomorrow."' WHERE id = ".$user_id." LIMIT 1");
	}


	//	Check if valid reset codes
	public function valid($reset_password_code, $mail) {		
		return $this->db->query("SELECT id FROM user WHERE mail = '".$mail."' AND reset_password_code = '".$reset_password_code."' AND reset_password_ts >= '".date("Y-m-d H:i:s",time())."'")->result();
	}


	//	Update new password
	public function updatePassword($password, $user_id) {
		$this->db->query("UPDATE user SET password = '".$password."' WHERE id = ".$user_id." LIMIT 1");
	}
}