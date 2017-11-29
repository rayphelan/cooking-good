<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();		
		

	}

	
	//	Index
	public function index() {						
		
		print "Hello Cooking Good!";
				
		//	Load View
		#$this->load->view('_header',$data);
		#$this->load->view('home',$data);
		#$this->load->view('_footer',$data);		
	}

	
}
