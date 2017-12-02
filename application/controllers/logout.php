<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct() {
		parent::__construct();				
	}
	
	//	Logout
	public function index() {

		@session_start();
		@session_destroy();
			
		redirect(base_url($this->lang->lang()."/login"),"refresh");
			
	}
	
}
