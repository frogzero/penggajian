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

<center><div class="form-title">Data Mata Kuliah</div></center>

<input type="submit" class="greenButton" value="Tambah Mata Kuliah" />
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr">
  <div id="example_filter" class="dataTables_filter"><label style="float: right">Cari:<input type="search" class="" placeholder="" aria-controls="example" style="float: right">
  </label></div>
  <label>Tampilkan <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entri</label>
  </div>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th></th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td>TI-101</td>
                <td>Agama Islam</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
            <tr>
                <td>TI-102</td>
                <td>Object Oriented Programming</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
            <tr>
                <td>TI-102P</td>
                <td>Object Oriented Programming (Praktik)</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
        </tbody>
    </table>
 

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
  <script src="jquery.slimmenu.min.js"></script>

</body>

</html>