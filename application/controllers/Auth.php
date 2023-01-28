<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template'));
		$this->load->model(array('Data','User'));
	}
	public function index()
	{
		redirect('dashboard','refresh');
		// print_r($this->session->userdata());
		// print_r($this->User->hasName('3'));

	}

	public function login()
	{
		$data = array(
			'title' => 'Login' 
			);
		$this->template->login('home/login',$data);
	}

	public function verify()
	{
		$data = $this->input->post();
		$userData = $this->User->isLogin($data['username'],$data['password']);
		
		if ($userData) {
			$userData['login'] = '1';
			// print_r($userData);
			$this->session->set_userdata($userData);
			redirect('auth','refresh');
		}else{
			redirect('auth/login','refresh');
		}

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */