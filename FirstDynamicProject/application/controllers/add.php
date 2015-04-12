<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$first_header=$this->input->post('first_header');
		$second_header=$this->input->post('second_header');
		$third_header=$this->input->post('third_header');
		$fourth_header=$this->input->post('fourth_header');
	

		
		$myarr =  array('first_header' => $first_header,
			'second_header'=> $second_header,
			'third_header'=> $third_header,
			'fourth_header'=>$fourth_header);
		//$data['key'] = $myarr;
		$this->load->model('add_data');
		$this->add_data->index($myarr);

		 redirect('home');
	}

}

/* End of file add.php */
/* Location: ./application/controllers/add.php */