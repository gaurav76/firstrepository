<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->profile();
	}
	public function profile()
	{
		$data['v']='profile';
		$this->load->view('template', $data);
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */