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
   <li><a href='#'><span>Website Penggajian</span></a></li>
   <li style="float: right"><a href='#'><span>Logout</span></a></li>
</ul>
</div>

<center><div class="form-title">Rekap Penggajian</div></center>

<div id="example_filter" class="dataTables_filter">
  <table style="float: right">
    <tr>
    <td>Filter Per-Bulan : </td><div class="input-container"><td style="float: right"><select name="bulan" id="bulan" class="dropdown1">
      <option value="0">Bulan</option>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
    </select></td>
    </div>
  </tr></table></div>

<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">
  <label>Tampilkan <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entri</label>
  </div>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Kelas</th>
                <th>Total Sesi</th>
                <th>Total Gaji</th>
                <th>Status Pengiriman</th>
                <th>Tanggal Pengiriman</th>
                <th></th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td>TI-101</td>
                <td>A</td>
                <td>8</td>
                <td>1,300,000</td>
                <td>Belum Dikirim</td>
                <td></td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
            <tr>
                <td>TI-102</td>
                <td>B</td>
                <td>8</td>
                <td>800,000</td>
                <td>Belum Dikirim</td>
                <td></td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
            <tr>
                <td>TI-102P</td>
                <td>C</td>
                <td>8</td>
                <td>5,000,000</td>
                <td>Sudah Dikirim</td>
                <td>11/05/2017</td>
                <td style="float: right;">Ubah | Hapus</td>
            </tr>
        </tbody>
    </table>
 

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
  <script src="jquery.slimmenu.min.js"></script>

</body>

</html>