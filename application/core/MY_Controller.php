<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

class  MY_Controller  extends  MX_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Africa/Nairobi');
	}

	//loading the user template
	protected function template($data){

		$this->load->module('template');
		$this->template->load_view($data);

	}
	//loading admin template
	protected function admin_template($info){

		$this->load->module('template');
		$this->template->admin_view($info);

	}

	protected function posts_template($data)
	{
		$this->load->module('template');
		$this->template->post_view($data);
	}

	protected function auth($data){
		$this->load->module('template');
		$this->template->auth_view($data);
	}

	protected function get_personal_details()
	{	
		$details = array( 0 => array());

		if ($this->session->userdata('is_logged_in')) {
			$this->db->where('user_id', $this->session->userdata('user_id'));
			$details = $this->db->get('users')->result_array();
		}

		return $details[0];
	}

	public function is_logged_in()
	{
		if(!$this->session->userdata('is_logged_in')){
			redirect(base_url().'home');
		}
	}

	public function load_libraries($arr=NULL){

		array_unshift($arr, "jquery","bootstrap");
				
		$libs['css_plugin_files']		=	array();
		$libs['css_files']				=	array();			
		$libs['js_files']				=	array();		
		$libs['js_plugin_files']		=	array();
		

		$asset_path		=	$this->config->item('asset_path');

		$css_path		=	$this->config->item('asset_path');
		$js_path		=	$this->config->item('js_path');
		$plugin_path	=	$this->config->item('plugin_path');

		$all_css		=	$this->config->item('css_files');
		$all_js			=	$this->config->item('js_files');
		$all_plugin_css	=	$this->config->item('plugin_css_files');
		$all_plugin_js	=	$this->config->item('plugin_js_files');

		
		//load plugin css from the css folder
		foreach ($arr as $css) {
			foreach($all_plugin_css as $all){
				if($css==$all['title']){
					$libs['css_plugin_files']	=	array_merge($libs['css_plugin_files'],array($all['file']));
				}
			}
		}
		
		//load custom made css
		foreach ($arr as $css) {
			foreach($all_css as $all){
				if($css==$all['title']){
					$libs['css_files']			=	array_merge($libs['css_files'],array($all['file']));
				}
			}
		}

		
		//load custom made js
		foreach ($arr as $js) {
			foreach($all_js as $all){
				if($js==$all['title']){
					$libs['js_files']			=	array_merge($libs['js_files'],array($all['file']));
				}
			}
		}

		//load plugin js from the plugin js folder
		foreach ($arr as $js) {
			foreach($all_plugin_js as $all){
				if($js==$all['title']){
					$libs['js_plugin_files']	=	array_merge($libs['js_plugin_files'],array($all['file']));

				}
			}
		}
		
		return 	$libs;
	}

	function send_email()
	{
		$this->email->from('starsafiri@starsafiri.com', 'mydomain.com');
		$this->email->to('baksajoshua09@gmail.com');
		// $this->email->bcc('support@mydomain.com');
		$this->email->subject('mydomain- Request a new password');
		$this->email->message('This is a test email.');            
		// $this->email->send();
		// $this->load->library('email');
		// $config['protocol'] = "smtp";
		// $config['smtp_host'] = "ssl://smtp.gmail.com";
		// $config['smtp_port'] = "465";
		// $config['smtp_user'] = "chrisrichrads@gmail.com";
		// $config['smtp_pass'] = "joshuaSUN";
		// $config['charset'] = "utf-8";
		// $config['mailtype'] = "html";
		// $config['newline'] = "\r\n";

		// $this->email->initialize($config);

		// $this->email->from('chrisrichrads@gmail.com', 'Admin');
		// $this->email->to('baksajoshua09@gmail.com');
		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');
		if($this->email->send()){
			echo 'Email enviado';
		}
		else{
			show_error($this->email->print_debugger());
		}

		// $time=date('Y-m-d');
			
		// $config = array(
		// 	'protocol' 	=> "smtp",
		// 	'smtp_host' => "ssl://smtp.googlemail.com",
		// 	'smtp_port' => 465,
		// 	'smtp_user' => "chrisrichrads@gmail.com",
		// 	'smtp_pass' => "joshuaSUN",
		// 	'newline' 	=> "\r\n"
		// 	);
		// // echo $email."<pre>";print_r($config);die();
		// $this->load->library('email', $config);
		
		// $this->email->from('chrisrichrads@gmail.com', 'STRATHMORE UNIVERSITY NOTIFICATION');
		// $this->email->to('baksajoshua09@gmail.com');
		// $this->email->subject('WELCOME TO STRATHMORE UNIVERSITY');
		// $this->email->message('This is a test Message from Star safaris to see if it actually works.');
		
		
		// if($this->email->send())
		// 	{	
		// 		// $this->admin_model->store_sent_email($recipient, $subject, $message, $time);
		// 		// $this->load->view('students_view');
		// 		print "Email sent";
				
		// 	} else 
		// 	{
		// 		show_error($this->email->print_debugger());
		// 	}
	}


	function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url().'home');
	}

}


