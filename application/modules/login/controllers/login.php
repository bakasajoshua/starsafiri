<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	function index()
	{
		$data['content_view'] = "login/login_view2";

		$data['title']="Sign In";

		$data = array_merge($data,$this->load_libraries(array('materialize')));
		// echo "<pre>";print_r($data);die();
		$this->auth($data);
		// $this->load->view('login_view2');
	}

	function authentication()
	{
		$authenticate = $this->login_model->authenticate();

		if ($authenticate) {
			$data = array(
						'user_id' => $authenticate['login_id'],
						'is_logged_in' => TRUE
					);
			$this->session->set_userdata($data);
			$redirect = base_url() . 'post';
		} else {
			$this->session->set_flashdata('Warning', 'Wrong username or password!');
			$redirect = base_url() . 'login';
		}
		// echo $redirect;die();
		redirect($redirect);
	}
}
?>