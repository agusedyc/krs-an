<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	function setRole($idUser,$role)
	{
		// $role = 'admin';
		$array = array('slug' => $role, 'role_name' => $role);
		$this->db->or_like($array);
		$getRole = $this->db->get('roles');
		
		$roleUser = array(
		'fk_user' => $idUser, 
		'fk_role' => $getRole->row()->id_role,
		);
		$this->db->insert('role_user',$roleUser);
	}	

	function isLogin($username,$password)
	{
		$user = $this->db->get_where('users', array('username' => $username));
		if ($user->num_rows()=='1') {
			if (password_verify($password,$user->row()->password)) {
				$data = array(
					'role' => $this->User->hasRole($user->row()->id_user)->role_name,
					'slug' => $this->User->hasRole($user->row()->id_user)->slug,
					'username' => $user->row()->username,
					'name' => $this->User->hasName($user->row()->id_user),
					'nameId' => $this->User->hasNameId($user->row()->id_user),
					);
				return $data;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	function hasRole($idUser)
	{
		// $user = $this->db->get_where('users', array('username' => $username));
		$this->db->select('*');
		$this->db->from('role_user');
		$this->db->join('roles', 'roles.id_role = role_user.fk_role', 'left');
		$this->db->where(array('fk_user' => $idUser));
		$getRole = $this->db->get();
		return $getRole->row();
	}

	function hasName($idUser)
	{
		$role = $this->User->hasRole($idUser)->slug;
		switch ($role) {
		   case 'admin':
		         return $this->db->get_where('pegawai', array('fk_user' => $idUser))->row()->nama_pegawai;
		         break;
		   case 'dosen':
		         return $this->db->get_where('dosen', array('fk_user' => $idUser))->row()->nama_dosen;
		         break;
		   case 'mhs':
		         return $this->db->get_where('mahasiswa', array('fk_user' => $idUser))->row()->nama_mhs;
		         break;
		}
	}

	function hasNameId($idUser)
	{
		$role = $this->User->hasRole($idUser)->slug;
		switch ($role) {
		   case 'admin':
		         return $this->db->get_where('pegawai', array('fk_user' => $idUser))->row()->id_pegawai;
		         break;
		   case 'dosen':
		         return $this->db->get_where('dosen', array('fk_user' => $idUser))->row()->id_dosen;
		         break;
		   case 'mhs':
		         return $this->db->get_where('mahasiswa', array('fk_user' => $idUser))->row()->id_mhs;
		         break;
		}
	}

	function allowUsers($role)
	{
		if ($this->session->userdata('login')=='1') {
			if ($this->session->userdata('slug')==$role) {
				return true;
			}else{
				redirect('dashboard','refresh');
			}
		}else{
			$this->User->logout();
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */