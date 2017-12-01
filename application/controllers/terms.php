<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','terms');


class Terms extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
						
	}


	//	Terms & Conditions Page
	public function index() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('terms-and-conditions',$data);
	}


}
