<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Categories_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		#$this->output->enable_profiler(TRUE);
	}
	

	//	Get Categories
	public function getCategories() {

		//	Same order as photo dir...
		$c[] = 'Pasta';
		$c[] = 'Grill';
		$c[] = 'Fish';
		$c[] = 'Meat';
		$c[] = 'Snacks';
		$c[] = 'Finger Food';
		$c[] = 'Dessert';
		$c[] = 'BBQ';
		$c[] = 'Roast';
		$c[] = 'Seafood';
		$c[] = 'Fruit';
		$c[] = 'Poulrty';

		$n = 0;
		foreach($c as $name) {
			$n++;
			$categories[] = array(	'title' => 	$name, 
									'image' => 	base_url("assets/images/recipes/$n.jpg"),
									'link' =>	'#'
			);
		};

		return $categories;
	}
		
}