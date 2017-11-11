<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelas extends CI_Model {

function simpan($data){
	$this->db->insert('kelas', $data);
}
	

}

/* End of file model_kelas.php */
/* Location: ./application/models/model_kelas.php */