<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->registration();

	}
	public function registration()
	{
		$value['v']='registration';
		$this->load->view('template', $value);
	}

}

/* End of file registration.php */
/* Location: ./application/controllers/registration.php */