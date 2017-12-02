<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		#$this->output->enable_profiler(TRUE);
	}
	

	//	Check email and password
	public function validUser($mail, $password) {		
		$qry = $this->db->query("SELECT id FROM user WHERE mail = '".$mail."' AND password='".$password."'");
		if(!$qry) return false;
		$user = $qry->result();
		return $user[0]->id;
	}	


	//	Check if email verified
	public function emailVerified($user_id) {		
		return $this->db->query("SELECT id FROM user WHERE id = $user_id AND email_confirmed = 1")->result();		
	}


	//	Check if User allowed
	public function userAllowed($user_id) {
		return $this->db->query("SELECT id FROM user WHERE allowed = 1 AND id = ".$user_id)->result();
	}	


	//	Log in User - Creates SESSION variables and stores login information
	public function loginUser($user_id) {

		$_SESSION['CG_user_id'] = $user_id;

		//	Add to login table
		$a['user_id'] = $user_id;
		$a['login_ts'] = date("Y-m-d H:i:s",time());
		$a['logout_ts'] = date("Y-m-d H:i:s",time());
		$a['IP'] = $_SERVER['REMOTE_ADDR'];
		$this->db->insert("login",$a);

		$_SESSION['CG_login_id'] = $this->db->insert_id();

	}
}