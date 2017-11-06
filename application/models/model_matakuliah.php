<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_matakuliah extends CI_Model {

public function simpan($data)
{
	$this->db->insert('matakuliah', $data);
}
	

}

/* End of file model_matakuliah.php */
/* Location: ./application/models/model_matakuliah.php */