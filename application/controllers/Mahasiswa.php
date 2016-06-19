<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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
		$page = $this->Data->page($this->db->get('mahasiswa')->num_rows());	
		$data = array(
			'title' => "Data Mahasiswa",
			'form' => "Tambah Data Mahasiswa",
			'table' => "Data Semua Mahasiswa",
			'rows' => $this->db->get('mahasiswa',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($data['rows']->result());
		echo "</pre>";*/
		$this->template->admin('admin/dataMhs',$data);
	}

	public function select()
	{
		$this->User->allowUsers('admin');
		$id_mhs = $this->uri->segment(3);
		$page = $this->Data->page($this->db->get('mahasiswa')->num_rows());	
	
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('users', 'users.id_user = mahasiswa.fk_user', 'left');
		$this->db->where(array('id_mhs' => $id_mhs));
		$selectMhs = $this->db->get();
		
		$data = array(
			'title' => "Data Mahasiswa",
			'form' => "Tambah Data Mahasiswa",
			'table' => "Data Semua Mahasiswa",
			'row' => $selectMhs->row(),
			'rows' => $this->db->get('mahasiswa',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($selectDosen->row());
		echo "</pre>";*/
		$this->template->admin('admin/dataMhs',$data);

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
		$this->User->setRole($id_user,'mhs');

		$mhs = array(
			'fk_user' => $id_user,
			'nim' => $data['nim'], 
			'nama_mhs' => $data['nama_mhs'], 
			);
		$this->db->insert('mahasiswa', $mhs);
		
		
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
		
		$mhs = array(
			'nim' => $data['nim'], 
			'nama_mhs' => $data['nama_mhs'], 
			);
		$this->db->update('mahasiswa', $mhs, array('id_mhs' => $data['id_mhs']));
		redirect($this->uri->segment(1),'refresh');
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
	}	

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */