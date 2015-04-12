<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->about();

	}
	public function about()
	{	
		$data['v']='about';
		$this->load->view('template', $data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */