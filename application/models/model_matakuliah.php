<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_matakuliah extends CI_Model {

public function simpan($data)
	{
		$this->db->insert('matakuliah', $data);
	}

public function update($kodemk, $data)
	{
		$this->db->where('kodeMK', $kodemk)
				 ->update('matakuliah', $data);
	}

public function find($kodemk)
	{
		$hasil = $this->db->where('kodeMK', $kodemk)
						  ->limit(1)
						  ->get('matakuliah');
				if($hasil->num_rows>0){
					return $hasil->row();
				}else{
					return array();
				}
	}
	

}

/* End of file model_matakuliah.php */
/* Location: ./application/models/model_matakuliah.php */