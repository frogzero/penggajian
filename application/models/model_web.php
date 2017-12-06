<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_web extends CI_Model {


function cek_lupa_password($email){
	$this->db->select('*');
	$this->db->from('staff');
	$this->db->where('email_staff', $email);
	$hasil = $this->db->get();
	$email_hasil = '';
			foreach($hasil ->result() as $q4)
			{
				$email_hasil = $q4->email_staff;
			}
			 return $email_hasil;
}
function update_password_baru($email,$password_baru)
{
	$this->db->where('email_staff', $email);
	$this->db->update('staff', array('password_staff' => $password_baru ));
}

function cek_tbl_admin($email,$password){
		$this->db->where('email_admin',$email);		
		$this->db->where('password_admin',$password);
		$query = $this->db->get('admin');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}	



function cek_tbl_staff($email,$password){
		$this->db->select('*');
		$this->db->from('staff');
		$this->db->join('user', 'staff.id_user = user.id_user');
		$this->db->where('email_staff',$email);		
		$this->db->where('password_staff',$password);
		
		$query = $this->db->get();
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
function cek_tbl_admin_akun($email){
		$this->db->where('email_admin',$email);		
		$query = $this->db->get('admin');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}	

function cek_tbl_staff_akun($email){
		$this->db->select('*');
		$this->db->from('staff');
		$this->db->join('user', 'staff.id_user = user.id_user');
		$this->db->where('email_staff',$email);				
		$query = $this->db->get();
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

function cek_email_admin($email_baru){
		$this->db->where('email_admin',$email_baru);		
		$query = $this->db->get('admin');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}	

function cek_email_staff($email_baru){
		$this->db->select('*');
		$this->db->from('staff');
		$this->db->join('user', 'staff.id_user = user.id_user');
		$this->db->where('email_staff',$email_baru);				
		$query = $this->db->get();
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

function ubah_password_staff($password_baru,$email_baru,$email)
{
	$this->db->query("update staff set password_staff='$password_baru',email_staff='$email_baru' where email_staff='$email'");
}
function ubah_password_admin($password_baru,$email_baru,$email)
{
	$this->db->query("update admin set password_admin='$password_baru',email_admin='$email_baru' where email_admin='$email'");

}
}
/* End of file model_web.php */
/* Location: ./application/models/model_web.php */