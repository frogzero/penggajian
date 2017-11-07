<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_staff extends CI_Model {

public function simpan($data)
{
	$this->db->insert('staff', $data);
}
	

}

/* End of file model_staff.php */
/* Location: ./application/models/model_staff.php */