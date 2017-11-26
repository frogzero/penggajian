<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penggajian extends CI_Model {

function simpan_program($data_biaya)
{
	$this->db->insert('program', $data_biaya);
}

function tampil_program()
{

	$this->db->select('*'); 
    $this->db->from('paket');
    $this->db->join('program', 'paket.id_paket = program.id_paket'); 
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

function simpan_update($statusPengiriman,$tanggalditerima,$id_penggajian)
{
$this->db->query("update penggajian set statusPengiriman='$statusPengiriman', tanggalditerima='$tanggalditerima' where id_penggajian=$id_penggajian");
}

function tampil_edit($id_penggajian)
{

	$this->db->select('*'); 
    $this->db->from('penggajian');
    $this->db->where('id_penggajian', $id_penggajian);
    $hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

function simpan($data_penggajian)
{
	$this->db->insert('penggajian',$data_penggajian);
}


function hitung_sesi_hadir(){
	$tanggal_awal=$this->session->userdata('tahun')."-".$this->session->userdata('bulan')."-01";
	$tanggal_akhir=$this->session->userdata('tahun')."-".$this->session->userdata('bulan')."-31";
	$this->db->select('count(kehadiran) as total_sesi_hadir');
	$this->db->from('presensi');
	$this->db->where('nip', $this->session->userdata('nip'));
	$this->db->where('kodeMK', $this->session->userdata('kode_mk'));
	$this->db->where('tanggal BETWEEN "'. date('Y-m-d', strtotime($tanggal_awal)). '" and "'. date('Y-m-d', strtotime($tanggal_akhir)).'"');
	$this->db->where('kehadiran', '1');
	$this->db->where('id_kelas', $this->session->userdata('kelas'));
	
	$hasil = $this->db->get();
			foreach($hasil ->result() as $q2)
			{
				$jumlah_sesi_hadir = $q2->total_sesi_hadir;
			}
			 return $jumlah_sesi_hadir; 
}

function hitung_jumlah_sesi(){
	$tanggal_awal=$this->session->userdata('tahun')."-".$this->session->userdata('bulan')."-01";
	$tanggal_akhir=$this->session->userdata('tahun')."-".$this->session->userdata('bulan')."-31";
	$this->db->select('count(sesi) as jumlah_sesi');
	$this->db->from('presensi');
	$this->db->where('nip', $this->session->userdata('nip'));
	$this->db->where('kodeMK', $this->session->userdata('kode_mk'));
	$this->db->where('id_kelas', $this->session->userdata('kelas'));
	$this->db->where('tanggal BETWEEN "'. date('Y-m-d', strtotime($tanggal_awal)). '" and "'. date('Y-m-d', strtotime($tanggal_akhir)).'"');
	$hasil = $this->db->get();
			foreach($hasil ->result() as $q3)
			{
				$jumlah_sesi = $q3->jumlah_sesi;
			}
			 return $jumlah_sesi; 
}

function nominal_status(){
	$this->db->select('*');
	$this->db->from('status_staff');
	$this->db->where('status', $this->session->userdata('status_staff'));;
	$hasil = $this->db->get();
			foreach($hasil ->result() as $q4)
			{
				$nominal_staff = $q4->nominal;
			}
			 return $nominal_staff; 
}

function cek_penggajian($nip,$kodeMK,$bulan,$tahun,$id_kelas){
	$this->db->select('*');
	$this->db->from('penggajian');
	$this->db->where('nip', $nip);
	$this->db->where('kodeMK', $kodeMK);
	$this->db->where('bulan', $bulan);
	$this->db->where('tahun', $tahun);
	$this->db->where('id_kelas', $id_kelas);
	$hasil = $this->db->get();
	return $hasil->result();
}



	

}

/* End of file model_program.php */
/* Location: ./application/models/model_program.php */