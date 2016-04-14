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
		$data['records'] = $this->post_model->get_posts();

		$data = array_merge($data,$this->load_libraries(array('template','menu','footer','fonts','quickview')));
		// echo "<pre>";print_r($data);die();
		$this->template($data);
	}

	function submit()
	{
		$insert = $this->post_model->add_posts();

		if(!$insert){print "An error occured as the product was being inserted please try again or if the problem persist contact the administrator.!!";}
    	else{redirect(base_url().'post');}
	}

}
