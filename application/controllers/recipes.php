<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','recipes');


class Recipes extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
		$this->load->model('recipes_model');

	}


	//	Recipes Page
	public function index() {
		

		$recipes = $this->recipes_model->getRecipes();


		$data['recipes'] = $recipes;
		$data['lg'] = $this->lang->lang();
		$this->load->view('recipes',$data);

	}




}
