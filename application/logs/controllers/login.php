<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','login');


class Login extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
						
	}


	//	Login Page
	public function index() {
		
		$data['lg'] = $this->lang->lang();
		$this->load->view('login',$data);

	}


}
