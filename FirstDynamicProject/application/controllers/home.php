<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	
		$this->home();
	}
	public function home()

	{	$query = $this->db->get('demo');
    
    	
   		$data = array('result'=>$query->result());		
		
		$data['v']= 'body';
		
	$this->load->view('template', $data);
		
	}
	
}

