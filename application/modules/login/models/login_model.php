<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class login_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('hash');
	}

	function authenticate()
	{
		$login = FALSE;
		// echo "<pre>";print_r($_POST);
		$authentication_data = array(
									'email' => $this->input->post('email_address'),
									'password' => $this->hash->password($this->input->post('password')),
									'status'  => 1
								);
		$auth_str = $this->db->get_where('login', $authentication_data)->result_array();
		
		if ($auth_str) {
			$login = $auth_str[0];
		}
		// echo "<pre>";print_r($login);
		return $login;
	}

}
?>