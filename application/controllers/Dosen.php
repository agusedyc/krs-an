<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template'));
		$this->load->model(array('Data','User'));
	}

	public function index()
	{
		$this->User->allowUsers('admin');
		$page = $this->Data->page($this->db->get('dosen')->num_rows());	
		$data = array(
			'title' => "Data Dosen",
			'form' => "Tambah Data Dosen",
			'table' => "Data Semua Dosen",
			'rows' => $this->db->get('dosen',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($data['rows']->result());
		echo "</pre>";*/
		$this->template->admin('admin/dataDosen',$data);
	}

	public function select()
	{
		$this->User->allowUsers('admin');
		$id_dosen = $this->uri->segment(3);
		$page = $this->Data->page($this->db->get('dosen')->num_rows());	
	
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->join('users', 'users.id_user = dosen.fk_user', 'left');
		$this->db->where(array('id_dosen' => $id_dosen));
		$selectDosen = $this->db->get();
		
		$data = array(
			'title' => "Data Dosen",
			'form' => "Tambah Data Dosen",
			'table' => "Data Semua Dosen",
			'row' => $selectDosen->row(),
			'rows' => $this->db->get('dosen',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($selectDosen->row());
		echo "</pre>";*/
		$this->template->admin('admin/dataDosen',$data);

	}

	public function add()
	{
		$this->User->allowUsers('admin');
		$data = $this->input->post();
		$user = array(
			'username' => $data['username'],
			'password' => password_hash($data['password'], PASSWORD_DEFAULT),
			);
		$this->db->insert('users', $user);
		$id_user = $this->db->insert_id();
		$this->User->setRole($id_user,'dosen');

		$dosen = array(
			'fk_user' => $id_user,
			'kode_dosen' => $data['kode_dosen'], 
			'nama_dosen' => $data['nama_dosen'], 
			);
		$this->db->insert('dosen', $dosen);
		
		
		/*echo "<pre>";
		print_r($user);
		echo "<br>";
		print_r($dosen);
		echo "</pre>";*/

		redirect($this->uri->segment(1),'refresh');
	}

	public function update()
	{
		$this->User->allowUsers('admin');
		$data = $this->input->post();
		if (empty($data['password'])) {
			$user = array(
			'username' => $data['username'],
			// 'password' => password_hash($data['password'], PASSWORD_DEFAULT),
			);
			$this->db->update('users', $user, array('id_user' => $data['fk_user']));
		}else{
			$user = array(
			'username' => $data['username'],
			'password' => password_hash($data['password'], PASSWORD_DEFAULT),
			);
			$this->db->update('users', $user, array('id_user' => $data['fk_user']));
		}
		
		$dosen = array(
			'kode_dosen' => $data['kode_dosen'], 
			'nama_dosen' => $data['nama_dosen'], 
			);
		$this->db->update('dosen', $dosen, array('id_dosen' => $data['id_dosen']));
		redirect($this->uri->segment(1),'refresh');
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
	}	

}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */