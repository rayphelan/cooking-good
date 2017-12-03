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


	//	View Recipe
	public function view($recipe_id) {

		$recipe = $this->recipes_model->getRecipes($recipe_id);

		$data['lg'] = $this->lang->lang();
		$data['recipe'] = $recipe;

		$this->load->view('recipes-view',$data);
	}



}
