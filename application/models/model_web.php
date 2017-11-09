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
	

}

/* End of file model_web.php */
/* Location: ./application/models/model_web.php */