<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('PAGE','contact');

class Contact extends CI_Controller {
  
    public function __construct() {

		parent::__construct();		
						
	}


	//	Index Page
	public function index() {
		$data['lg'] = $this->lang->lang();
		$this->load->view('contact',$data);
	}


	//	Submit Contact Form
	public function submit() {
		
		$params = (array)json_decode(trim(file_get_contents('php://input')));
		$this->vars = count($params)>0? $params: $_POST;
		$this->setEmail();


		//	 Accepted Vars
		$vars = ['mood','first_name','last_name','mail','message','reply','eaten','love','phone'];
		foreach($vars as $v) {
			$this->$v = $this->security->xss_clean(trim($this->vars[$v]));
			$this->data[$v] = $this->$v;
		}		
		$this->subject_message = 'Contact from website: '.(date("Y-m-d H:i:s",time())." | ".$this->name." | ".$this->mail);	
		$lg = $this->lang->lang();


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


		//	Get HTML from view		
		$this->html = $this->load->view('email.contact.php',$this->data,TRUE);


		//	Send email
		$result = $this->send();


		//	Server Response
		echo $result? 'success': 'error';

	}


	//	Send email
	private function send() {		
		$this->email->from('cooking-good@ray-phelan.com','Cooking Good');
		$this->email->to('rayphelan@gmail.com','Cooking Good');
		$this->email->cc($this->mail, $this->name);										
		$this->email->reply_to($this->mail,$this->name);
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
