<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_web extends CI_Model {

function simpan_siswa_baru($data_siswa)
{
	$this->db->insert('siswa', $data_siswa);
}

function siswa_baru_konfirmasi($data_siswa,$id_siswa)
{	
	$this->db->where('id_siswa', $id_siswa);
	$this->db->update('siswa', $data_siswa);

}


	

}

/* End of file model_web.php */
/* Location: ./application/models/model_web.php */