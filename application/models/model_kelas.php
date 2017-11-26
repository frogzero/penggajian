<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelas extends CI_Model {

function tampil_kelas_update($id_kelas)
{
	$this->db->select('*'); 
    $this->db->from('kelas');
    $this->db->where('id_kelas', $id_kelas);
			$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

function simpan($data){
	$this->db->insert('kelas', $data);
}

function simpan_update($nama_kelas,$id_kelas)
{
$this->db->query("update kelas set nama_kelas='$nama_kelas' where id_kelas='$id_kelas'");
}

function hapus_kelas($id_kelas){
$this->db->where('id_kelas', $id_kelas);
$this->db->delete('kelas');
}
	

}

/* End of file model_kelas.php */
/* Location: ./application/models/model_kelas.php */