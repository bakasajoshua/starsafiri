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
		echo Date('Y-m-dH-i-s');
		$upload_path = '././assets/uploads/';
		$files = $_FILES['cover'];

		$file_ext = explode(".", $files['name']);
        $file_ext = end($file_ext);

		$allowed = array('gif','jpg','png','jpeg');

		if(in_array($file_ext, $allowed)){
			$image_name = $files['name'];
    		$temp_path = $files['tmp_name'];

    		$prefix = 'IMG'.Date('Y-m-dH-i-s').md5($this->session->userdata('user_id'));
    		$absolute_path = '././assets/uploads/'.$prefix.'.'.$file_ext;
    		move_uploaded_file($temp_path, $upload_path.$image_name);
    		rename($upload_path.$image_name, $absolute_path);

    		$new_path = $this->thumbnail_creator($absolute_path,300,290);

    		$path = base_url().'assets/uploads/'.$prefix.'.'.$file_ext;
    		
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
									JOIN `users` `us` ON `ps`.`user_id` = `us`.`user_id` ORDER BY `ps`.`date` DESC")->result_array();
		// echo "<pre>";print_r($posts);die();
		if (!$posts) {
			$li .= '<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default" style="min-height:5em;">
			                <div class="panel-body">
			                	<p><center>No Posts found!!!:-(</center></p>
			                </div>
			            </div>
			        </div>';
		}else {
			foreach ($posts as $key => $value) {
				$id = $value['post_id'];

				$likes = $this->db->query("SELECT 
											COUNT(`like_ID`) AS `likes`
										FROM `post_likes`
										WHERE `post_ID` = '$id'")->result_array();
				$comments = $this->db->query("SELECT
												COUNT(`comment_id`) AS `comments`
										FROM `comments`
										WHERE `post_ID` = '$id'")->result_array();
				$likes = $likes[0]['likes'];
				$comments = $comments[0]['comments'];
				
				$li .= '<article class="col-xs-12 col-sm-6 col-md-3">
			            <div class="panel panel-default">
			                <div class="panel-body">
			                    <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
			                        <img src="'.$value['image'].'" alt="Nature Portfolio" style="height:150px;" />
			                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
			                    </a>
			                </div>
			                <div class="panel-footer">
			                    <h4><a href="#" title="">'.$value['first_name'].' '.$value['last_name'].'</a></h4>
			                    <div class="row">
			                    <span class="">
			                    	<a href="javascript:void(0);" id="like_button'.$value['post_id'].'" onclick="like_button_clicked('.$value['post_id'].')" class="btn btn-default">
			                        	<i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3" >'.$likes.'</div>
			                        </a>
			                        <a href="javascript:void(0);" id="comment_button'.$value['post_id'].'" onclick="comment_button_clicked('.$value['post_id'].')" data-remote="false" data-toggle="modal" data-target="#myModal" class="btn btn-default">
									    <i id="dislike1" class="glyphicon glyphicon-comment" style="color:blue;"></i> <div id="dislike1-bs3">'.$comments.'</div>
									</a>
			                        
			                    </span>
			                    </div>
			                </div>
			            </div>
			        </article>';
			}
		}
		return $li;
	}

	function get_post_details($id)
	{
		$modal_data = '';
		$post = $this->db->query("SELECT 
										*
									FROM `posts` `ps`
									JOIN `users` `us` ON `ps`.`user_id` = `us`.`user_id`
									WHERE `ps`.`post_id` = '$id'")->result_array();

		if($post){
			$comments = $this->db->query("SELECT 
											*
									FROM `comments` `cm`
									JOIN `users` `us` ON `cm`.`user_id` = `us`.`user_id`
									WHERE `cm`.`post_id` = '$id'")->result_array();
			$post = $post[0];

			$modal_data .= '<div class="col-md-4">
			        			<img src="'.$post['image'].'" style="width:275;height:183;margin-bottom: 0.5em;">
			        			<br>
			        			<a class="media-left" href="#">
			                      <img src="'.base_url().'assets/profiles/profile-placeholder.png">
			                    </a>
			                    <div class="media-body">
			                        
			                      <h4 class="media-heading user_name">'.$post['first_name'].' '.$post['last_name'].'</h4>
			                      '.$post['description'].'
			                    </div>
			                    <br>
			                    <!--<form class="form" role="form" method="post" action="'.base_url().'post/addcomment" accept-charset="UTF-8" id="comment_form">-->
			                    <input type="hidden" name="post_id" value="'.$id.'">
				        		<div class="form-group">
						            <label for="comment" class="control-label">Comment:</label>
						            <input type="text" class="form-control" name="comment" id="comment" placeholder="Write a comment...">
						         </div>
						         <div class="form-group">
						         	<button id="submit" class="btn btn-primary btn-block" onclick="post_comment()">Comment</button>
						         </div>
						         <!--</form>-->
			        		</div>
			        		<div class="col-md-6">
			        		<div class="page-header">
			                	<h1><small class="pull-right"></small> Comments </h1>
			                </div> 
		                   	<div class="comments-list" id="comments_list'.$id.'">';
			if ($comments) {
				// echo "<pre>";print_r($comments);die();
				foreach ($comments as $key => $value) {
					$modal_data .= '<div class="media">
				                       	<p class="pull-right"><small></small></p>
				                        <a class="media-left" href="#">
				                          <img src="'.base_url().'assets/profiles/profile-placeholder.png">
				                        </a>
				                        <div class="media-body">
				                          <h4 class="media-heading user_name">'.$value['first_name'].' '.$value['last_name'].'</h4>
				                          '.$value['description'].'
				                          
				                        </div>
				                     </div>';
				}
			}else {
				$modal_data .= '<p>NO comments related to this post.</p>';
			}
		
		$modal_data .= '
		                   	</div>
		        		</div>';
		}else {
			$modal_data = '<p>Post Does not exist</p>';
		}

		return $modal_data;
		
	}

	function addComment()
	{
		$data = array(
					'description' => $this->input->post('comment'),
					'user_id' => $this->session->userdata('user_id'),
					'post_id' => $this->input->post('post_id')
					 );
		$insert = $this->db->insert('comments', $data);

		return $insert;
	}

	function refreshedComments($id)
	{
		$refresh_data = '';
		$comments = $this->db->query("SELECT 
											*
									FROM `comments` `cm`
									JOIN `users` `us` ON `cm`.`user_id` = `us`.`user_id`
									WHERE `cm`.`post_id` = '$id'")->result_array();

		foreach ($comments as $key => $value) {
			$refresh_data .= '<div class="media">
		                       	<p class="pull-right"><small></small></p>
		                        <a class="media-left" href="#">
		                          <img src="'.base_url().'assets/profiles/profile-placeholder.png">
		                        </a>
		                        <div class="media-body">
		                          <h4 class="media-heading user_name">'.$value['first_name'].' '.$value['last_name'].'</h4>
		                          '.$value['description'].'
		                          
		                        </div>
		                     </div>';
		}

		return $refresh_data;
	}

	function update_comments_count($id)
	{
		$comments = $this->db->query("SELECT
												COUNT(`comment_id`) AS `comments`
										FROM `comments`
										WHERE `post_ID` = '$id'")->result_array();

		$comments = $comments[0]['comments'];

		$string = '<i id="dislike1" class="glyphicon glyphicon-comment" style="color:blue;"></i> <div id="dislike1-bs3">'.$comments.'</div>';

		return $string;
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
