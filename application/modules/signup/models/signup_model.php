<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class signup_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('hash');
	}

	function register()
	{
		//Decision variales
		$returnedID = NULL;
		$return_str = FALSE;

		//Saving login data
		$login_data = array(
						'email'    => $this->input->post('email_address'),
						'password' => $this->hash->password($this->input->post('password'))
						);
		$login_str = $this->db->insert_string('login', $login_data);
		$login_return = $this->db->query($login_str);
		
		if ($login_return) {
			$returnedID = $this->db->insert_id();
		}
		
		//saving user data
		$user_data = array(
						'first_name' => $this->input->post('first_name'),
						'last_name'  => $this->input->post('last_name'),
						'town' 		 => $this->input->post('location'),
						'login_ID' 	 => $returnedID
					);
		$user_str = $this->db->insert_string('users', $user_data);
		$user_return = $this->db->query($user_str);

		if ($user_return) {
			$return_str = TRUE;
		}
		return $return_str;
	}

	function check_existing_email($email)
	{
		$return = FALSE;

		$this->db->where('email',$email);
		$result = $this->db->get('login')->result_array();

		if ($result) {
			$return = TRUE;
		}

		return $return;
	}


}
?>