<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_presensi extends CI_Model {

	function simpan($data)
	{
		$this->db->insert('presensi', $data);
	}

function hitung_presensi($staff,$kodemk,$kelas){
	$this->db->select('sesi');
	$this->db->from('presensi');
	$this->db->where('nip', $staff);
	$this->db->where('id_kelas', $kelas);
	$this->db->where('kodeMK', $kodemk);
	$this->db->order_by('sesi', 'desc');
	$this->db->limit(1);
			$hasil = $this->db->get();
			return $hasil->result();
		
}
	

}

/* End of file model_presensi.php */
/* Location: ./application/models/model_presensi.php */