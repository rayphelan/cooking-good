<?php defined('BASEPATH') or exit('No direct script access allowed');

abstract class RPCurl extends CI_Controller

{
	
	function __construct() {
		parent::__construct();
	}
	
	function curl_get($url,$headers = NULL)	{
		
		$ch = curl_init();  		
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		
		//  curl_setopt($ch,CURLOPT_HEADER, false); 		
		//curl_setopt($ch,CURLOPT_HTTPHEADER,array('HeaderName: HeaderValue','HeaderName2: HeaderValue2'));
		
		if($headers) curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
		
		$output=curl_exec($ch);		
		curl_close($ch);
		return $output;
	}
	
	
	//	Send POST request
	function curl_post($url,$params,$headers = null) {
	   
	   	$postData = '';
	   
	   	//create name value pairs seperated by &
	   	foreach($params as $k => $v) { 
			$postData .= $k . '='.$v.'&'; 
	   	}
	   	rtrim($postData, '&');
	 
		$ch = curl_init();  
	 
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		#curl_setopt($ch,CURLOPT_HEADER, false); 
		if($headers) curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
		
		curl_setopt($ch, CURLOPT_POST, count($postData));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
	 
		$output=curl_exec($ch);
	 
		curl_close($ch);
		return $output;
	 
	}

}

?>