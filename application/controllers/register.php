<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('PAGE','register');


class Register extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
		$this->load->model('register_model');
						
	}


	//	Register Page
	public function index() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('register',$data);
	}


	//	Register Invaid Page
	public function invalid() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('register-invalid',$data);
	}


	//	Register Vaid Page
	public function valid() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('register-valid',$data);
	}	


	//	Submit Registration Form
	public function submit() {
		
		$params = (array)json_decode(trim(file_get_contents('php://input')));
		$this->vars = count($params)>0? $params: $_POST;
		$this->setEmail();

		$lg = $this->lang->lang();
		$this->data['lg'] = $lg;

		//	 Accepted Vars
		$vars = ['first_name','last_name','password','mail','activation_code'];
		foreach($vars as $v) {
			$this->$v = $this->security->xss_clean(trim($this->vars[$v]));
			$this->data[$v] = $this->$v;
		}		
		$this->activation_code = md5(rand(0,99999).$first_name.$last_name.$mail.time());
		$this->activation_link = base_url($lg.'/register/verify/'.$this->activation_code)."/".base64_encode($this->mail);
		$this->subject_message = 'Cooking Good - Account Activation';
		$this->name = $this->first_name." ".$this->last_name;

		$this->data['activation_code'] = $this->activation_code;
		$this->data['activation_link'] = $this->activation_link;
		$this->data['subject_message'] = $this->subject_message;
		$this->data['name'] = $this->name;


		//	Recaptcha
		$captcha = $_POST['g-recaptcha-response'];
		$array = array("secret" => "6Le2mCkTAAAAABdyTU5i3VCBmpCjNt41NoZtq6s0", "response" => $captcha, "remoteip" => $_SERVER['REMOTE_ADDR']);
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$response = json_decode($this->httpPost($url,$array));


		//	Unauthorized Recaptcha
		if (!$captcha || $response->success == false) { #die('recaptcha failed');
			
			// Server response
			echo 'recaptcha_error';
			return false;
		}


		//	Check if email address is already registered
		if($this->register_model->duplicateEmail($this->mail)) {
			echo 'duplicate_email';
			return false;
		}


		//	Save User to Database and get User ID
		$user_id = $this->register_model->save($vars);
		

		//	Get Email HTML from view		
		$this->html = $this->load->view('email.register.php',$this->data,TRUE);


		//	Send email
		$result = $this->send();
		

		//	Server Response
		echo ($result && $user_id)? 'success': 'error';

	}



	//	Verify Email Account
	public function verify($activation_code,$email) {

		if(!$activation_code || !$email) return false;

		//	Decode Email
		$email = base64_decode($email);

		//	Check Database to verify email address
		$user_id = $this->register_model->verify($activation_code, $email);

		//	Invalid?
		if(!$user_id) {
			redirect(base_url($lg."/register/invalid"),"refresh");
			return false;
		}

		//	Valid User - Log in user
		$this->load->model('login_model');
		$this->login_model->loginUser($user_id);


		//	Redirect to valid register
		redirect(base_url($lg."/register/valid"),"refresh");

	}



	//	Private -----------------------------------------------------------
	//	Send email
	private function send() {		
		$this->email->from('cooking-good@ray-phelan.com','Cooking Good');
		$this->email->bcc('rayphelan@gmail.com','Cooking Good Registration Activation');
		$this->email->to($this->mail, $this->name);										
		#$this->email->reply_to($this->mail,$this->name);
		$this->email->subject($this->subject_message);
		$this->email->message($this->html);
		$result = $this->email->send();
		return $result;
	}


	//	Email settings
	private function setEmail() {
		$this->load->library('email');
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['smtp_host'] = 'mail.rayphelan.com';
		$config['smtp_user'] = 'cooking-good@ray-phelan.com';
		$config['smtp_pass'] = 'c}ZZS&ez9&9H';
		$config['mailtype'] = 'html';
		$this->email->initialize($config);		
	}


	//	HTTP Post
	private function httpPost($url, $data)	{
	    $curl = curl_init($url);
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    $response = curl_exec($curl);
	    curl_close($curl);
	    return $response;
	}
}
