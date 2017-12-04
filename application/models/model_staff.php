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


	public function ubah_simpan($status,$data)
	{
		$this->db->where('status', $status);
		$this->db->update('status_staff', $data);
	}

	public function  hapus($nip)
	{
		$this->db->where('nip', $nip)
				 ->delete('staff');
	}


public function cek_ketersediaan_nip($nip)
	{

	$this->db->select('*'); 
    $this->db->from('staff');
	$this->db->where('nip', $nip);	
	$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}
	

}

/* End of file model_staff.php */
/* Location: ./application/models/model_staff.php */