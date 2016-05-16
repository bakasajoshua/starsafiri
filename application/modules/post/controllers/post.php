<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->is_logged_in();
	}

	public function index()
	{
		$data['content_view'] = "post/post_view";
		$data['title']="Posts";
		$data['details'] = $this->get_personal_details();
		$data['records'] = $this->post_model->get_posts();

		$data = array_merge($data,$this->load_libraries(array('jquery','lightbox','lightboxjs','bootstrap-fileinput')));
		echo "<pre>";print_r($data);die();
		$this->posts_template($data);

	}

	function submit()
	{
		$insert = $this->post_model->add_posts();

		if(!$insert)
		{
			print "An error occured as the post was being added. Please try a smaller photot or again later!!";
		} else{
			redirect(base_url().'post');
		}
	}

	function addcomment()
	{
		$submit = $this->post_model->addComment();

		echo TRUE;
	}

	function get_posts_details($id)
	{
		$post = $this->post_model->get_post_details($id);

		echo $post;
	}

	function get_refreshedComments($id){
		$getComments = $this->post_model->refreshedComments($id);

		echo $getComments;
	}

	function update_comment_count($id)
	{
		echo $this->post_model->update_comments_count($id);
	}
	
	function likes($id)
	{
		$update = $this->post_model->add_like($id);

		echo $update;
	}

	function trial_page()
	{
		$data['content_view'] = "post/post_test_view";
		$data['title']="Posts";
		$data['details'] = $this->get_personal_details();
		$data['records'] = $this->post_model->get_posts();

		$data = array_merge($data,$this->load_libraries(array('jquery','lightbox','lightboxjs','bootstrap-fileinput')));
		// echo "<pre>";print_r($data);die();
		$this->posts_template($data);
	}

	function thumbnail()
	{
		$img = 'http://localhost/starsafiri/assets/uploads/IMG2016-04-2019-11-52c4ca4238a0b923820dcc509a6f75849b.jpg';
		$size = getimagesize("http://localhost/starsafiri/assets/uploads/IMG2016-04-2019-11-52c4ca4238a0b923820dcc509a6f75849b.jpg");
		$aspect_ratio = ($size[0]/$size[1]);
		echo "<pre>";print_r($aspect_ratio);
		// $size = $this->post_model->thumbnail_resize($img);
	}



}