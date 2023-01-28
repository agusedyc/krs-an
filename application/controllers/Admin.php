<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template'));
		// $this->load->model(array('crud'));
	}

	public function index()
	{
		$data = array(
			'title' => "Data Mata Kuliah", 
			);
		$this->template->admin('admin/dataMk',$data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */