<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Recipes_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		#$this->output->enable_profiler(TRUE);
	}
	

	//	Get Recipes
	public function getRecipes() {

		$r = array(	'1' => 'Seafood Pasta',
					'2' => 'BBQ Chicken',
					'3' => 'Grilled Salmon',
					'4' => 'Braised Pork',
					'5' => 'Salmon Crunchies',
					'6' => 'Mixed Chourizzo',
					'7' => 'Dessert Time',
					'8' => 'BBQ Beef',
					'9' => 'Slow Roast',
					'10' => 'Grilled Prawns',
					'11' => 'Fruit Salad',
					'12' => 'Gourmet Eggs'
		);
		$n = array(	'1' => 'Tamiya June',
					'2' => 'Lucas Perico',
					'3' => 'Tawana Akinlolu',
					'4' => 'Diana Chiunda',
					'5' => 'Ray Phelan',
					'6' => 'Kevin',
					'7' => 'Jackie',
					'8' => 'Matthew',
					'9' => 'Rachel',
					'10' => 'Ciara',
					'11' => 'June',
					'12' => 'Raymond'

		);

		foreach($r as $k=>$v) {
			$recipes[] = array(	'image'=>base_url('assets/images/recipes/'.$k.'.jpg'), 
								'title'=>$v,
								'owner'=>$n[$k]
			);
		}

		#print "<pre>"; print_r($recipes); die();

		return $recipes;
	}
		
}