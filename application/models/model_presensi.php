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

function tampil_presensi_edit($id_presensi,$id_kelas)
{
	$this->db->select('*');
	$this->db->from('presensi');
	$this->db->join('staff', 'presensi.nip = staff.nip');
	$this->db->where('presensi.id_presensi', $id_presensi);
	$this->db->where('presensi.id_kelas', $id_kelas);
			$hasil = $this->db->get();
			return $hasil->result();

}
function simpan_update($kehadiran,$id_presensi,$id_kelas)
{
$this->db->query("update presensi set kehadiran='$kehadiran' where id_presensi=$id_presensi and id_kelas=$id_kelas");
}
	

}

/* End of file model_presensi.php */
/* Location: ./application/models/model_presensi.php */