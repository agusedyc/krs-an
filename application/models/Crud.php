<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function insert($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function insertBatch($table,$data)
	{
		$this->db->insert_batch($table, $data);
	}

	function update($tabel,$filed,$id,$data)
	{
		$this->db->update($table, $data, array($filed => $id));
	}
	
	function delete($table,$filed,$id)
	{
		$this->db->delete($table, array($filed => $id));
	}

	function logout(){
        $this->session->sess_destroy();
    }

}

/* End of file Crud.php */
/* Location: ./application/models/Crud.php */
