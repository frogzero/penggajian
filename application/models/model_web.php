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
		$this->db->where('email_staff',$email);		
		$this->db->where('password_staff',$password);
		$query = $this->db->get('staff');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

}
/* End of file model_web.php */
/* Location: ./application/models/model_web.php */