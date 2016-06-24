<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template'));
		$this->load->model(array('Data','User'));
	}

	public function index()
	{
		$this->User->allowUsers('dosen');
		$page = $this->Data->page($this->db->get('makul')->num_rows());	
		$data = array(
			'title' => "Data Mata Kuliah",
			'form' => "Tambah Data Matakuliah",
			'table' => "Data Semua Matakuliah",
			'rows' => $this->db->get('makul',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		$this->template->dosen('dosen/createJadwalMk',$data);
	}

	public function createJadwalMk()
	{
		$this->User->allowUsers('dosen');
		$id_makul = $this->uri->segment(3);
		$page = $this->Data->page($this->db->get('makul')->num_rows());	
		$data = array(
			'title' => "Data Mata Kuliah",
			'form' => "Buat Jadwal Matakuliah",
			'table' => "Data Matakuliah",
			'row' => $this->db->get_where('makul',array('id_makul' => $id_makul))->row(),
			'rowA' => NULL/*$this->db->get_where('makul',array('id_makul' => $id_makul))->row()*/,
			'rows' => $this->db->get('makul',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($data['row']);
		echo "</pre>";*/
		$this->template->dosen('dosen/createJadwalMk',$data);
	}

	public function ajar()
	{
		$this->User->allowUsers('dosen');
		$page = $this->Data->page($this->db->get('jadwal_mk')->num_rows());	

		$this->db->select('*');
		$this->db->from('jadwal_mk');
		$this->db->join('dosen', 'dosen.id_dosen = jadwal_mk.fk_dosen');
		$this->db->join('makul', 'makul.id_makul = jadwal_mk.fk_makul');
		$this->db->where('fk_dosen',$this->session->userdata('nameId'));
		$this->db->limit($page['limit'],$page['offset']);
		$join = $this->db->get();
		
		$data = array(
			'title' => "Data Mata Kuliah",
			'form' => "Update Data Matakuliah",
			'table' => "Data Semua Matakuliah",
			'rows' => $join,
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($query->result());
		echo "</pre>";*/
		$this->template->dosen('dosen/jadwalAjar',$data);
	}

	public function select()
	{
		$this->User->allowUsers('dosen');
		$id_jadwal = $this->uri->segment(3);
		$page = $this->Data->page($this->db->get('jadwal_mk')->num_rows());	

		$this->db->select('*');
		$this->db->from('jadwal_mk');
		$this->db->join('dosen', 'dosen.id_dosen = jadwal_mk.fk_dosen');
		$this->db->join('makul', 'makul.id_makul = jadwal_mk.fk_makul');
		$this->db->limit($page['limit'],$page['offset']);
		$join = $this->db->get();

		$data = array(
			'title' => "Data Mata Kuliah",
			'form' => "Update Data Matakuliah",
			'table' => "Data Semua Matakuliah",
			'row' => $this->db->get_where('makul',array('id_makul' => $this->db->get_where('jadwal_mk',array('id_jadwal' => $id_jadwal))->row()->fk_makul))->row(),
			'rowA' => $this->db->get_where('jadwal_mk',array('id_jadwal' => $id_jadwal))->row(),
			'rows' => $join,
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($data['rowA']);
		echo "</pre>";*/
		$this->template->dosen('dosen/jadwalAjar',$data);

	}

	public function add()
	{
		$this->User->allowUsers('dosen');
		$data = $this->input->post();
		$data['fk_makul'] = $data['id_makul'];
		$data['fk_dosen'] = $this->session->userdata('nameId');
		unset($data['id_makul']);
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$this->db->insert('jadwal_mk', $data);
		redirect('jadwal/ajar','refresh');
	}

	public function update()
	{
		$this->User->allowUsers('dosen');
		$data = $this->input->post();
		unset($data['id_jadwal']);
		$this->db->update('jadwal_mk', $data, array('id_jadwal' => $this->input->post('id_jadwal')));
		redirect('jadwal/ajar','refresh');
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
	}	

	public function delete()
	{
		$this->User->allowUsers('dosen');
		$id_jadwal = $this->uri->segment(3);
		$this->db->delete('jadwal_mk', array('id_jadwal' => $id_jadwal));
		redirect('jadwal/ajar','refresh');
	}
}

/* End of file JadwalMk.php */
/* Location: ./application/controllers/JadwalMk.php */