<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makul extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template'));
		$this->load->model(array('Data'));
		
		 // $this->baseUrl = $this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3);
	}

	public function index()
	{
		$page = $this->Data->page($this->db->get('makul')->num_rows());	
		$data = array(
			'title' => "Data Mata Kuliah",
			'form' => "Tambah Data Matakuliah",
			'table' => "Data Semua Matakuliah",
			'rows' => $this->db->get('makul',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($url);
		echo "</pre>";*/
		$this->template->admin('admin/dataMk',$data);
	}

	public function select()
	{
		$id_makul = $this->uri->segment(3);
		$page = $this->Data->page($this->db->get('makul')->num_rows());	
		$data = array(
			'title' => "Data Mata Kuliah",
			'form' => "Update Data Matakuliah",
			'table' => "Data Semua Matakuliah",
			'row' => $this->db->get_where('makul',array('id_makul' => $id_makul))->row(),
			'rows' => $this->db->get('makul',$page['limit'],$page['offset']),
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($data['row']);
		echo "</pre>";*/
		$this->template->admin('admin/dataMk',$data);

	}

	public function add()
	{
		$data = $this->input->post();
		$this->db->insert('makul', $data);
		redirect('makul','refresh');
	}

	public function update()
	{
		$data = $this->input->post();
		unset($data['id_makul']);
		$this->db->update('makul', $data, array('id_makul' => $this->input->post('id_makul')));
		redirect('makul','refresh');
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
	}	

}

/* End of file Makul.php */
/* Location: ./application/controllers/Makul.php */