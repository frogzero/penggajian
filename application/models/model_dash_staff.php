<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dash_staff extends CI_Model {

function tampil_presensi(){
	$nip=$this->session->userdata('nip');
	$this->db->select('*'); 
    $this->db->from('presensi');
    $this->db->join('staff', 'presensi.nip = staff.nip');
    $this->db->join('matakuliah', 'presensi.kodeMK = matakuliah.kodeMK');
    $this->db->join('kelas', 'presensi.id_kelas = kelas.id_kelas');
     $this->db->where('presensi.nip', $nip );

			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}

}

function tampil_penggajian()
	{
	$nip=$this->session->userdata('nip');
	$this->db->select('*'); 
    $this->db->from('penggajian');
    $this->db->join('staff', 'penggajian.nip = staff.nip');
    $this->db->join('kelas', 'penggajian.id_kelas = kelas.id_kelas');
         $this->db->where('penggajian.nip', $nip );
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}
	

}

/* End of file model_dash_staff.php */
/* Location: ./application/models/model_dash_staff.php */