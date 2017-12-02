<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_matakuliah extends CI_Model {

public function simpan($data)
	{
		$this->db->insert('matakuliah', $data);
	}

	public function ubah($kodemk_baru,$namaMK_baru,$kodeMK)
	{

		$this->db->query("update matakuliah set kodeMK='$kodemk_baru', namaMK='$namaMK_baru' where kodeMK='$kodeMK'");
	}

public function find($kodemk)
	{

		$this->db->select('*'); 
    $this->db->from('matakuliah');
	$this->db->where('kodeMK', $kodemk);	
	$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}
	

public function hapus($kodemk)
	{
		$this->db->where('kodeMK', $kodemk)
				->delete('matakuliah');
	}

}

/* End of file model_matakuliah.php */
/* Location: ./application/models/model_matakuliah.php */