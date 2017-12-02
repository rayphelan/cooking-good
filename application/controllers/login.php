<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','login');


class Login extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
		$this->load->model('login_model');

		if($_SESSION['CG_user_id']) {
			redirect(base_url($this->lang->lang()."/me"),"refresh");
			return;
		}

	}


	//	Login Page
	public function index() {
		
		$data['lg'] = $this->lang->lang();
		$this->load->view('login',$data);

	}


	//	Login Valid page
	public function valid() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('login-valid',$data);
	}


	//	Login Submit Form
	public function submit() {

		//	Vars
		$params = (array)json_decode(trim(file_get_contents('php://input')));
		$this->vars = count($params)>0? $params: $_POST;
		$lg = $this->lang->lang();

		//	 Accepted Vars
		$vars = ['mail','password'];
		foreach($vars as $v) {
			$this->$v = $this->security->xss_clean(trim($this->vars[$v]));
			$this->data[$v] = $this->$v;			
		}


		//	Check email and password
		$user_id = $this->login_model->validUser($this->mail,$this->password);


		//	Valid User
		if($user_id) {

			//	Check if email verified
			if(!$this->login_model->emailVerified($user_id)) {
				echo 'email_not_verified';
				return false;
			}

			//	Check if user not allowed
			if(!$this->login_model->userAllowed($user_id)) {
				echo 'not_allowed';
				return false;
			}			

			//	Login User
			$this->login_model->loginUser($user_id);			
			echo 'success';
			return true;
		}
		//	Invalid Login Details
		else {
			echo 'invalid';
			return false;
		}


		//	Unknown error
		echo 'error';
		
		
	}


}
