<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class signup extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model');
	}

	function index()
	{
		$data['content_view'] = "signup/signup_view";

		$data['title']="Sign Up";

		$data = array_merge($data,$this->load_libraries(array('materialize')));
		// echo "<pre>";print_r($data);die();
		$this->auth($data);
		// $this->load->view('signup_view2');
	}

	function registration()
	{
		$reg = $this->signup_model->register();
		if ($reg) {
			redirect(base_url().'login');
		}
	}
}
?>