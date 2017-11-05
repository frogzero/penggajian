<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Coba-coba</title>
  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/TambahStaff/slimmenu.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/TambahStaff/reg.css" type="text/css">

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
         <li class='has-sub'><a href='#'><span>Lihat Data Gai</span></a>
         </li>
      </ul>
   </li>
   <li style="float: right"><a href='#'><span>Logout</span></a></li>
</ul>
</div>
 <div id="div-regForm">

<center><div class="form-title">Presensi</div></center>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
    </div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
    <select name="status" id="status" class="dropdown">
    <option value="1">Dosen</option>
    <option value="2">Instruktur</option>
    <option value="3">Asisten</option>
    </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="nama">Nama : </label></td>
    <td><div class="input-container"><input name="nama" id="nama" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container"><input name="kodemk" id="kodemk" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container"><input name="kelas" id="kelas" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="sesi">Sesi Ke : </label></td>
    <td><div class="input-container"><input name="sesi" id="sesi" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="sesik">Sesi Kehadiran : </label></td>
    <td><div class="input-container"><input name="sesik" id="sesik" type="text" class="input"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>
 

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
  <script src="jquery.slimmenu.min.js"></script>

</body>

</html>