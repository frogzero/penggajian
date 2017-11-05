<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Coba-coba</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/TambahStaff/slimmenu.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/TambahStaff/datatable.css" type="text/css">

</head>

<body>
  <div id='cssmenu'>
<ul>
   <li><a href='#'><span>Staff</span></a></li>
    <li><a href='#'><span>Mata Kuliah</span></a></li>
   <li><a href='#'><span>Presensi</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Tambah Presensi</span></a>
         </li>
         <li class='has-sub'><a href='#'><span>Lihat Data Presensi</span></a>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Penggajian</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Hitung Gaji</span></a>
         </li>
         <li class='has-sub'><a href='#'><span>Lihat Data Gaji</span></a>
         </li>
      </ul>
   </li>
   <li style="float: right"><a href='#'><span>Logout</span></a></li>
</ul>
</div>

<center><div class="form-title">Data Presensi</div></center>

<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">
  <div id="example_filter" class="dataTables_filter"><label style="float: right">Cari:<input type="search" class="" placeholder="" aria-controls="example" style="float: right">
  </label></div>
  <label>Tampilkan <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entri</label>
  </div>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Nama staff</th>
                <th>Kode Mata Kuliah</th>
                <th>Kelas</th>
                <th>Sesi Ke</th>
                <th>Sesi Kehadiran</th>
                <th></th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td>01/03/2017</td>
                <td>Dosen</td>
                <td>Nisrina Akbar R.P</td>
                <td>TI-101</td>
                <td>A</td>
                <td>2</td>
                <td>1</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
            <tr>
                <td>01/04/2017</td>
                <td>Instruktur</td>
                <td>Hartika Rahayu</td>
                <td>TI-102</td>
                <td>B</td>
                <td>2</td>
                <td>1</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
            <tr>
                <td>11/04/2017</td>
                <td>Asisten</td>
                <td>Wahyu Kurniawan</td>
                <td>TI-102P</td>
                <td>C</td>
                <td>2</td>
                <td>1</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
        </tbody>
    </table>
 

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
  <script src="jquery.slimmenu.min.js"></script>

</body>

</html>