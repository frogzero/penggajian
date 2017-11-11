<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

function tampil_penggajian()
	{
	$this->db->select('*'); 
    $this->db->from('penggajian');
    $this->db->join('staff', 'penggajian.nip = staff.nip');
    $this->db->join('kelas', 'penggajian.id_kelas = kelas.id_kelas');
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}
function tampil_kelas()
{
	$this->db->select('*'); 
    $this->db->from('kelas');
			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}
function tampil_staff()
{
	$this->db->select('*'); 
    $this->db->from('staff');
    $this->db->join('user', 'staff.id_user = user.id_user', 'left');
			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}
function tampil_mk(){
	$this->db->select('*'); 
    $this->db->from('matakuliah');
			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}

}
function tampil_presensi(){
	$this->db->select('*'); 
    $this->db->from('presensi');
    $this->db->join('staff', 'presensi.nip = staff.nip');
    $this->db->join('matakuliah', 'presensi.kodeMK = matakuliah.kodeMK');
    $this->db->join('kelas', 'presensi.id_kelas = kelas.id_kelas');
			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}

}

	

}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */