<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_data extends CI_Model {

	public function index($value)
	{
		$this->db->insert('demo',$value);
		
		
	}
	

}

/* End of file add.php */
/* Location: ./application/models/add.php */