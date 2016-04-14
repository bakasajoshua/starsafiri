<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
/*
*
*
*
*/

class post_model extends MY_Model{

	function __construct()
	{
		parent:: __construct();
	}

	function add_posts(){
		$upload_path = '././assets/uploads/';
		$files = $_FILES['cover'];

		$file_ext = explode(".", $files['name']);
        $file_ext = end($file_ext);

		$allowed = array('gif','jpg','png','jpeg');

		if(in_array($file_ext, $allowed)){
			$image_name = $files['name'];
    		$temp_path = $files['tmp_name'];
    		move_uploaded_file($temp_path, $upload_path.$image_name);
    		$path = base_url().'assets/uploads/'.$image_name;
    		
		}else{
			print "Image format not supported";
		}
		$user_id = $this->session->userdata('user_id');
		$description = $this->input->post('post');

		$sql = "INSERT INTO `posts`
					(`description`,`image`,`user_id`)
				VALUES
					('$description','$path','$user_id')";

		$insert = $this->db->query($sql);

		return $insert;
	}

	function get_posts()
	{
		$li = '';
		$posts = $this->db->query("SELECT 
										*
									FROM `posts` `ps`
									JOIN `users` `us` ON `ps`.`user_id` = `us`.`user_id`")->result_array();

		foreach ($posts as $key => $value) {
			$li .= '<li class="cd-item">
				      <img src="'.$value['image'].'" alt="Item Preview">
				      <a href="#0" class="cd-trigger">'.$value['first_name'].' '.$value['last_name'].'</a>
				    </li>';
		}
		
		return $li;
	}

}
