<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_penggajian','model_admin'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['penggajian'] = $this->model_admin->tampil_penggajian();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/penggajian/data_penggajian', $data);
		$this->load->view('footer');
	}

	public function tambah_data_penggajian()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/penggajian/tambah_data_penggajian');
		$this->load->view('footer');
	}


	function get_staf($staf){	
	$this->session->set_userdata('status_staff', $staf);	
		$sql="SELECT * from staff
			WHERE status='$staf'";
			$query = $this->db->query($sql);	
			var_dump($query->result());
	
		  //echo $response;
			$data = $query->result();
			 echo "<option>Pilih Kode/Nama Staff</option>";

			foreach ($data as $row) {
				    echo "<option value='".$row->nip."'>".$row->nip.'-'.$row->nama_staff."</option>";
				# code...
			}
	}

	function get_mk($presensi){	
	$this->session->set_userdata('nip', $presensi);	
		$sql="SELECT * from presensi WHERE nip='$presensi' group by kodeMK";
			$query = $this->db->query($sql);	
			var_dump($query->result());
			$data = $query->result();
			echo "<option>Pilih Kode MK</option>";
			foreach ($data as $row) {
				    echo "<option value='".$row->kodeMK."'>".$row->kodeMK."</option>";

			}	
	}

	function get_kelas($matakuliah){	

		$this->session->set_userdata('kode_mk', $matakuliah);
		$nip =$this->session->userdata('nip');
		$kodemk =$this->session->userdata('kode_mk');
		$sql="SELECT kelas from presensi
		 WHERE nip='$nip' and kodeMK='$matakuliah' group by kelas";
			$query = $this->db->query($sql);	
			// var_dump($query->result());
			$data = $query->result();
			echo "<option>Pilih kelas</option>";
			foreach ($data as $row) {
				    echo "<option value='".$row->kelas."'>".$row->kelas."</option>";
			}	
	}

	function simpan_bulan($bulan){	
	$this->session->set_userdata('bulan', $bulan);
	$jmla_sesi_hadir = $this->model_penggajian->hitung_sesi_hadir();
	$jmla_sesi = $this->model_penggajian->hitung_jumlah_sesi();
	$nominal_staff = $this->model_penggajian->nominal_status();

	$total_gaji = $jmla_sesi_hadir *$nominal_staff;
	
				$asdf = array(
					'sesi' => $jmla_sesi_hadir ,
					'jumlah' => $jmla_sesi ,
					'nominal' => $nominal_staff,
					'total_gaji'=> $total_gaji );
	
		// var_dump($asdf);
		echo json_encode($asdf);
	}

	function simpan_tahun($tahun){	
		$this->session->set_userdata('tahun', $tahun);
	$this->session->userdata('kelas');
	$nip =$this->session->userdata('nip');
	$nominal =$this->session->userdata('nominal');
	$kodemk =$this->session->userdata('kode_mk');

	$jmla_sesi_hadir = $this->model_penggajian->hitung_sesi_hadir();
	$jmla_sesi = $this->model_penggajian->hitung_jumlah_sesi();
	$nominal_staff = $this->model_penggajian->nominal_status();

	$total_gaji = $jmla_sesi_hadir *$nominal_staff;
	
				$asdf = array(
					'sesi' => $jmla_sesi_hadir ,
					'jumlah' => $jmla_sesi ,
					'nominal' => $nominal_staff,
					'total_gaji'=> $total_gaji );
	
		// var_dump($asdf);
		echo json_encode($asdf);
	}

	function get_presensi($kelas){	

	$this->session->set_userdata('kelas', $kelas);
	$nip =$this->session->userdata('nip');
	$nominal =$this->session->userdata('nominal');
	$kodemk =$this->session->userdata('kode_mk');

	$jmla_sesi_hadir = $this->model_penggajian->hitung_sesi_hadir();
	$jmla_sesi = $this->model_penggajian->hitung_jumlah_sesi();
	$nominal_staff = $this->model_penggajian->nominal_status();

	$total_gaji = $jmla_sesi_hadir *$nominal_staff;
				$asdf = array(
					'sesi' => $jmla_sesi_hadir ,
					'jumlah' => $jmla_sesi ,
					'nominal' => $nominal_staff,
					'total_gaji'=> $total_gaji );
	
		// var_dump($asdf);
		echo json_encode($asdf);
		// minimal PHP 5.2s
		
	}

	public function simpan(){
		$status = $this->input->post('status');
		$nip = $this->input->post('nip');
		$kodeMK = $this->input->post('matakuliah');
		$total_sesi = $this->input->post('total_sesi');
		$nominal = $this->input->post('nominal');
		$kelas = $this->input->post('kelas');
		$total_gaji = $this->input->post('total_gaji');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$tanggal = $this->input->post('tgl_diterima');
		$statusPengiriman = $this->input->post('statusPengiriman');
		$statusP='';
		$cek_penggajian = $this->model_penggajian->cek_penggajian();
		$db_nipa='';
		foreach ($cek_penggajian as $data) {
			$db_nipa = $data->nip;
			$db_bulan = $data->bulan;
			$db_tahun = $data->tahun;
			$db_kelas = $data->kelas;
		}
		if ($db_nipa==$nip && $db_bulan == $bulan && $db_tahun==$tahun && $db_kelas==$kelas) {

			$this->session->set_userdata('status_staff', '');
				$this->session->set_userdata('nip','');	
				$this->session->set_userdata('kode_mk', '');
				$this->session->set_userdata('bulan', '');
				$this->session->set_userdata('tahun', '');
				$this->session->set_userdata('kelas', '');
				echo '<script language="javascript">';
				echo 'alert("Mohon Maaf Data Sudah Ada Untuk Periode ini ")';
				echo '</script>';
				echo '<script type="text/javascript">';    
			    echo 'window.location.assign("'.site_url('admin/penggajian/tambah_data_penggajian').'")'; 
			    echo '</script>';
		}
	else{
		if ($statusPengiriman==1) {
				$statusP = '1';
			}else{
				
				$statusP = '0';
		}
	
		if ($total_gaji==0) {
				$this->session->set_userdata('status_staff', '');
				$this->session->set_userdata('nip','');	
				$this->session->set_userdata('kode_mk', '');
				$this->session->set_userdata('bulan', '');
				$this->session->set_userdata('tahun', '');
				$this->session->set_userdata('kelas', '');
				echo '<script language="javascript">';
				echo 'alert("Mohon Maaf Data Tidak Ada")';
				echo '</script>';
				echo '<script type="text/javascript">';    
			    echo 'window.location.assign("'.site_url('admin/penggajian/tambah_data_penggajian').'")'; 
			    echo '</script>';
		}else{

		$data_penggajian = array(
									
									'status' => $status ,
									'nip' => $nip  ,
									'kodeMK' =>$kodeMK ,
									'totalSesi' => $total_sesi,
									'nominal' => $nominal,
									'kelas' => $kelas,
									'bulan' => $this->input->post('bulan'),
									'tahun' => $this->input->post('tahun'),
									'totalGaji' => $total_gaji ,
									'tanggalditerima' => $tanggal,
									'statusPengiriman' =>$statusP );
		$this->model_penggajian->simpan($data_penggajian);
		$this->session->set_userdata('status_staff', '');
		$this->session->set_userdata('nip','');	
		$this->session->set_userdata('kode_mk', '');
		$this->session->set_userdata('bulan', '');
		$this->session->set_userdata('tahun', '');
		$this->session->set_userdata('kelas', '');
				echo '<script language="javascript">';
				echo 'alert("Penggajian Berhasil Di input !!!")';
				echo '</script>';
				echo '<script type="text/javascript">';    
			    echo 'window.location.assign("'.site_url('/admin/penggajian').'")'; 
			    echo '</script>';
			}

		}
	}
	


}

/* End of file penggajian.php  coba push 2*/
/* Location: ./application/controllers/admin/penggajian.php */