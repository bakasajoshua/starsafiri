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
		$location = $this->input->post('location');

		$sql = "INSERT INTO `posts`
					(`description`,`location`,`image`,`user_id`)
				VALUES
					('$description','$location','$path','$user_id')";

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
			$id = $value['post_id'];

			$data = $this->db->query("SELECT 
										COUNT(`like_ID`) AS `likes`
									FROM `post_likes`
									WHERE `post_ID` = '$id'")->result_array();
			$likes = $data[0]['likes'];
			
			$li .= '<div class="col-sm-6 col-md-4">
      				<div class="thumbnail">
				    <img src="'.$value['image'].'" alt="Item Preview" style="width: 280px; height: 200px;">
				    <div class="caption">
          			<p>'.$value['first_name'].' '.$value['last_name'].'</p>
          			<p><a href="#"><i class="glyphicon glyphicon-map-marker"></i>'.$value['location'].'</a></p>
          			<p><a href="#" id="like_button'.$value['post_id'].'" onclick="like_button_clicked('.$value['post_id'].')" class="btn btn-success" style="border-radius: 20px;"><i class="glyphicon glyphicon-thumbs-up" style="margin-right: 0.2em;"></i><span class="badge">'.$likes.'</span></a> <button class="btn btn-default pull-right" style="border-radius: 20px;">Comment<span class="badge" style="margin-left: 0.2em;">2</span></button></p>
				    </div>
				    </div>
				    </div>';
		}
		
		return $li;
	}

	function add_like($id)
	{
		$confirmation_data = array(
								'post_ID' => $id,
								'user_ID' => $this->session->userdata('user_id')
								);
		$this->db->where($confirmation_data);
		$result = $this->db->get('post_likes')->result_array();

		if (!$result) {
			$insert = array(
						'post_ID' => $id,
						'user_ID' => $this->session->userdata('user_id')
						);
			$insert = $this->db->insert('post_likes', $insert);
		}

		$data = $this->db->query("SELECT 
										COUNT(`like_ID`) AS `likes`
									FROM `post_likes`
									WHERE `post_ID` = '$id'")->result_array();

		$likes = $data[0]['likes'];

		return $likes;
	}

}
