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

	function tampil_penggajian_filter($status,$nip,$bulan,$tahun)
	{
	$this->db->select('*'); 
    $this->db->from('penggajian');
    $this->db->join('staff', 'penggajian.nip = staff.nip');
    $this->db->join('kelas', 'penggajian.id_kelas = kelas.id_kelas');
    $this->db->where('penggajian.status', $status);
    $this->db->where('penggajian.nip', $nip);
    $this->db->where('penggajian.bulan', $bulan);
    $this->db->where('penggajian.tahun', $tahun);
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}



function tampil_admin()
{
	$this->db->select('*'); 
    $this->db->from('admin');
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

function tampil_status_edit($status)
{
	$this->db->select('*'); 
    $this->db->from('status_staff');
    $this->db->where('status', $status);
			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

function tampil_status_staff()
{
	$this->db->select('*'); 
    $this->db->from('status_staff');
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

function tampil_filter_presensi($status,$nip,$kelas,$kodeMK){
	$this->db->select('*'); 
    $this->db->from('presensi');
    $this->db->join('staff', 'presensi.nip = staff.nip');
    $this->db->join('matakuliah', 'presensi.kodeMK = matakuliah.kodeMK');
    $this->db->join('kelas', 'presensi.id_kelas = kelas.id_kelas');
    $this->db->where('presensi.status', $status);
    $this->db->where('presensi.nip', $nip);
    $this->db->where('presensi.id_kelas', $kelas);
    $this->db->where('presensi.kodeMK', $kodeMK);
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

function hapus_admin($id_admin)
{
	$this->db->where('id_admin', $id_admin);
		$this->db->delete('admin');
}

function simpan_admin($data){
	$this->db->insert('admin', $data);
}

	

}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */