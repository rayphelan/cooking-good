<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','register');


class Register extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
						
	}


	//	Register Page
	public function index() {
		
		$data['lg'] = $this->lang->lang();
		$this->load->view('register',$data);

	}


	//	Submit Registration
	public function submit() {
		return false;
	}

}
