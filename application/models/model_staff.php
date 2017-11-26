<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_staff extends CI_Model {

	public function simpan($data)
	{
		$this->db->insert('staff', $data);
	}
	
	public function update($nip, $data_staff)
	{
		$this->db->where('nip', $nip)
				->update('staff', $data_staff);
	}

	public function find($nip)
	{
		$hasil = $this->db->where('nip', $nip)
						  ->limit(1)
						  ->get('staff');
				if($hasil->num_rows>0){
					return $hasil->row();
				}else{
					return array();
				}
	}

	/*public function user() 
	{
		return $this->db->get('user');
	}*/

	public function  hapus($nip)
	{
		$this->db->where('nip', $nip)
				 ->delete('staff');
	}

}

/* End of file model_staff.php */
/* Location: ./application/models/model_staff.php */