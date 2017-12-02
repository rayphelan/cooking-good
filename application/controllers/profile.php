<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','profile');


class Profile extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
		$this->load->model('profile_model');

	}


	//	Profile Page
	public function index() {
		
		//	Default
		$this->me();

	}


	//	Me
	public function me() {

		//	Check if logged in
		if(!$_SESSION['CG_user_id']) {
			redirect(base_url($this->lang->lang()."/login"),"refresh");
			return false;
		}

		//	Set current user
		$this->profile_model->setProfile($_SESSION['CG_user_id']);


		//	Data
		$data['lg'] = $this->lang->lang();
		$data['profile'] = $this->profile;
		$data['profile_name'] = $this->profile_model->name();

		//	Display page
		$this->load->view('profile-me', $data);
	}




}
