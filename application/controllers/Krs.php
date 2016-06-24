<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('html2pdf','template'));
		$this->load->model(array('Data','User'));
	}

	public function index()
	{
		$this->User->allowUsers('mhs');
		$page = $this->Data->page($this->db->get('jadwal_mk')->num_rows());	

		$this->db->select('*');
		$this->db->from('jadwal_mk');
		$this->db->join('dosen', 'dosen.id_dosen = jadwal_mk.fk_dosen');
		$this->db->join('makul', 'makul.id_makul = jadwal_mk.fk_makul');
		$this->db->limit($page['limit'],$page['offset']);
		$join = $this->db->get();
		
		$data = array(
			'title' => "KRS Mahasiswa",
			'form' => "Update Data Matakuliah",
			'table' => "Daftar Jadwal Mahasiswa",
			'rows' => $join,
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($query->result());
		echo "</pre>";*/
		$this->template->mhs('mhs/krs',$data);
	}

	public function add()
	{
		$this->User->allowUsers('mhs');
		$data = $this->input->post();
		$nRows = count($data['id_jadwal']);
		for ($i=0; $i < $nRows; $i++) { 
			$batch[] = array(
				'fk_jadwal' => $data['id_jadwal'][$i], 
				'fk_mhs' => $this->session->userdata('nameId'),
				);
			// echo $data['id_jadwal'][$i];
			$addPeserta['peserta'] = $this->db->get_where('jadwal_mk', array('id_jadwal' => $data['id_jadwal'][$i]))->row()->peserta + 1;
			$this->db->update('jadwal_mk', $addPeserta, array('id_jadwal' => $data['id_jadwal'][$i]));
		}
		/*echo "<pre>";
		print_r($data);
		echo "<br>";
		print_r($batch);
		echo "</pre>";*/
		$this->db->insert_batch('krs', $batch);
		redirect('krs/mhs','refresh');
	}

	public function mhs()
	{
		$this->User->allowUsers('mhs');
		$page = $this->Data->page($this->db->get('krs')->num_rows());	

		$this->db->select('*');
		$this->db->from('krs');
		$this->db->join('jadwal_mk', 'jadwal_mk.id_jadwal = krs.fk_jadwal');
		$this->db->join('dosen', 'dosen.id_dosen = jadwal_mk.fk_dosen');
		$this->db->join('makul', 'makul.id_makul = jadwal_mk.fk_makul');
		$this->db->where('fk_mhs',$this->session->userdata('nameId'));
		$this->db->limit($page['limit'],$page['offset']);
		$join = $this->db->get();
		
		$data = array(
			'title' => "KRS Mahasiswa",
			'form' => "Update Data Matakuliah",
			'table' => "Kartu Rencana Mahasiswa",
			'rows' => $join,
			'pagination' => $this->pagination->create_links(),
			'no' => $page['rowNumber']
			);
		/*echo "<pre>";
		print_r($join->result());
		echo "</pre>";*/
		$this->template->mhs('mhs/krsMhs',$data);
	}

	public function delete()
	{
		$this->User->allowUsers('mhs');
		$id_krs = $this->uri->segment(3);
		$this->db->delete('krs', array('id_krs' => $id_krs));
		redirect('krs/mhs','refresh');
	}

	public function cetakKrs()
	{
		$this->db->select('*');
		$this->db->from('krs');
		$this->db->join('jadwal_mk', 'jadwal_mk.id_jadwal = krs.fk_jadwal');
		$this->db->join('dosen', 'dosen.id_dosen = jadwal_mk.fk_dosen');
		$this->db->join('makul', 'makul.id_makul = jadwal_mk.fk_makul');
		$this->db->where('fk_mhs',$this->session->userdata('nameId'));
		$json = $this->db->get();
		// $data['rows'] = $this->db->get();
		$data['nama'] = $this->session->userdata('name');
		$data['nim'] = $this->db->get_where('mahasiswa',array('id_mhs' => $this->session->userdata('nameId')))->row()->nim;
		
        foreach ($json->result() as $value) {
        	$data['rows'][] = array(
        		'kode_mk' => $value->kode_mk,
        		'nama_mk' => $value->nama_mk,
        		'semester' => $value->semester,
        		'sks' => $value->sks,
        		'nama_dosen' => $value->nama_dosen,
        		'kelas' => $value->kelas,
        		'ruangan' => $value->ruangan,
        		'hari' => $value->hari,
        		'waktu' => $value->waktu,
        		);
        	$ln = strlen($value->ket); 
            if ($ln <= '40' && substr($value->ket,0,7)=='Praktek') {
            	$day = substr($value->ket,-22,6);
				if (substr($day,-4)=='rabu' or substr($day,-4)=='Rabu') {
					$hari = "Rabu";
				}else{
					$hari = $day;
				}
        	$data['rows'][] = array(
        		'kode_mk' => $value->kode_mk,
        		'nama_mk' => 'Praktikum '.$value->nama_mk,
        		'semester' => null,
        		'sks' => null,
        		'nama_dosen' => null,
        		'kelas' => substr($value->ket,8,5),
        		'ruangan' => substr($value->ket,-5),
        		'hari' => $hari,
        		'waktu' => substr($value->ket,-15,5),
        		);
        	}else{
            	null;
            } 
        }

        $name = 'KRS_'.$this->session->userdata('name').'.pdf';
        ob_start();
        $content = $this->load->view('colorlib/mhs/cetakKrs',$data);
        $content = ob_get_clean();
        try
        {
	        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
	        $html2pdf->pdf->SetDisplayMode('fullpage');
	        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	        $html2pdf->Output($name);
	        // ob_end_flush(); 
        }
        catch(HTML2PDF_exception $e) {
                echo $e;
                exit;
        }

        /*echo "<pre>";
        print_r($data);
        echo "</pre>";
*/	}

}

/* End of file Krs.php */
/* Location: ./application/controllers/Krs.php */