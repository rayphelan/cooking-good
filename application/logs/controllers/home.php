<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();		
		

	}

	
	//	Index
	public function index() {						
		
		$data['lg'] = $this->lang->lang();
		
		//	Load View		
		$this->load->view('home',$data);

	}

	
}
