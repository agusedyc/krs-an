<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template'));
		$this->load->model(array('User'));

	}

	public function index()
	{
		if ($this->session->userdata('login')=='1') {
			if ($this->session->userdata('slug')=='admin') {
				redirect('dashboard/admin','refresh');
			}elseif ($this->session->userdata('slug')=='dosen') {
				redirect('dashboard/dosen','refresh');
			}elseif ($this->session->userdata('slug')=='mhs') {
				redirect('dashboard/mhs','refresh');
			}else{
				$this->User->logout();
			}
		}else{
			$this->User->logout();
		}
	}

	public function admin()
	{
		$this->User->allowUsers('admin');
		$data = array(
			'title' => 'Dashboard Admin', 
			);
		$this->template->admin('admin/dashAdmin',$data);
	}

	public function dosen()
	{
		$this->User->allowUsers('dosen');
		$data = array(
			'title' => 'Dashboard Dosen', 
			);
		$this->template->dosen('dosen/dashDosen',$data);
	}

	public function mhs()
	{
		$this->User->allowUsers('mhs');
		$data = array(
			'title' => 'Dashboard Mahasiswa', 
			);
		$this->template->mhs('mhs/dashMhs',$data);
	}

	public function logout()
	{
		$this->User->logout();
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */