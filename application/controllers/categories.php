<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','categories');


class Categories extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
		$this->load->model('categories_model');

	}


	//	Categories Page
	public function index() {
		

		$categories = $this->categories_model->getCategories();


		$data['categories'] = $categories;
		$data['lg'] = $this->lang->lang();
		$this->load->view('categories',$data);

	}




}
