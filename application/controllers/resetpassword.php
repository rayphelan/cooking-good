<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Resetpassword extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
		$this->load->model('resetpassword_model');	

	}


	//	Password Recovery page
	public function index() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('password-recovery',$data);
	}


	//	Submit Password Recovery Email
	public function submit() {
		
		$params = (array)json_decode(trim(file_get_contents('php://input')));
		$this->vars = count($params)>0? $params: $_POST;
		$this->setEmail();
		$lg = $this->lang->lang();
		$this->data['lg'] = $lg;

		//	 Accepted Vars
		$vars = ['mail'];
		foreach($vars as $v) {
			$this->$v = $this->security->xss_clean(trim($this->vars[$v]));
			$this->data[$v] = $this->$v;			
		}

		//	Check if email is registered
		$user = $this->resetpassword_model->registered($this->mail);

		//	Valid?
		if($user) {

			$user_id = $user[0]->id;
			$first_name = $user[0]->first_name;
			$last_name = $user[0]->last_name;
				
			//	Reset Password Code
			$this->reset_password_code = md5(base64_encode($user_id.uniqid().time()));
			$this->resetpassword_model->updateResetPW($user_id, $this->reset_password_code);


			// 	Email vars
			$this->reset_password_link = base_url($lg.'/resetpassword/resetpage/'.$this->reset_password_code)."/".base64_encode($this->mail);
			$this->subject_message = 'Cooking Good - Reset Password';
			$this->name = $first_name." ".$last_name;
			$this->data['reset_password_link'] = $this->reset_password_link;
			$this->data['subject_message'] = $this->subject_message;
			$this->data['name'] = $this->name;


			//	Get Email HTML from view		
			$this->html = $this->load->view('email.resetpw.php',$this->data,TRUE);

			
			//	Send email
			$result = $this->send();


			//	Response
			echo $result? 'success': 'error';
			return true;

		}
		//	Invalid
		else {
			echo 'invalid';
			return false;
		}

		return false;
	}


	//	Reset Page
	public function resetpage($reset_password_code=NULL,$email_code=NULL) {

		if(!$reset_password_code || !$email_code) {
			redirect(base_url($this->lang->lang()."/resetpassword"),"refresh");
			return false;
		}
		$this->mail = base64_decode($email_code);
		$this->reset_password_code = $reset_password_code;
		$data['reset_password_code'] = $reset_password_code;
		$data['email_code'] = $email_code;
		$data['lg'] = $this->lang->lang();


		//	Check if valid codes
		$valid = $this->resetpassword_model->valid($this->reset_password_code, $this->mail);


		//	Valid - Render reset password form
		if($valid) {
			$this->load->view('password-recovery-new',$data);
			return true;
		}
		//	Invalid
		else {
			redirect(base_url($this->lang->lang()."/login"),"refresh");			
		}

		return false;
	}


	//	Update new password
	public function reset() {

		$params = (array)json_decode(trim(file_get_contents('php://input')));
		$this->vars = count($params)>0? $params: $_POST;
		$this->setEmail();
		$lg = $this->lang->lang();
		$this->data['lg'] = $lg;


		//	 Accepted Vars
		$vars = ['password','reset_password_code','email_code'];
		foreach($vars as $v) {
			$this->$v = $this->security->xss_clean(trim($this->vars[$v]));
			$this->data[$v] = $this->$v;			
		}
		

		//	Check if valid codes
		$valid = $this->resetpassword_model->valid($this->reset_password_code, base64_decode($this->email_code));


		//	Valid
		if($valid) {
			//	Update password
			$this->resetpassword_model->updatePassword($this->password, $valid[0]->id);
			echo 'success';
			return true;
		}


		//	Invalid
		echo 'invalid';

	}


	//	Private -----------------------------------------------------------
	//	Send email
	private function send() {		
		$this->email->from('cooking-good@ray-phelan.com','Cooking Good');
		$this->email->bcc('rayphelan@gmail.com','Cooking Good');
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
