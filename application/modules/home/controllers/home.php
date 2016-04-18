<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['content_view'] = "home/home_view";

		$data['title']="Homepage";

		$data = array_merge($data,$this->load_libraries(array('custom','carousel','lightbox','lightboxjs','bootstrap','bootstrapmin')));
		$this->template($data);
	}

}
