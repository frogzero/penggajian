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
         <li class='has-sub'><a href='#'><span>Lihat Data Gaji</span></a>
         </li>
      </ul>
   </li>
   <li style="float: right"><a href='#'><span>Logout</span></a></li>
</ul>
</div>
 <div id="div-regForm1">

<center><div class="form-title">Penggajian</div></center>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
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
    <td><label for="id">ID : </label></td>
    <td>
    <div class="input-container">
    <select name="status" id="status" class="dropdown">
    <option value="1">D01</option>
    <option value="2">I01</option>
    <option value="3">A01</option>
    </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container"><input name="kodemk" id="kodemk" type="text" class="input" /></div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container"><input name="kelas" id="kelas" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="periode">Periode : </label></td>
    <td>
    <div class="input-container">
    <select name="bulan" id="bulan" class="dropdown1">
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
    </select>
    </div>
    </td>
    <td>
    <div class="input-container">
    <select name="tahun" id="tahun" class="dropdown2">
      <option value="0">Tahun</option>
    <option value="1">2010</option>
    <option value="2">2011</option>
    <option value="3">2012</option>
    <option value="4">2013</option>
    <option value="5">2014</option>
    <option value="6">2015</option>
    <option value="7">2016</option>
    <option value="8">2017</option>
    </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="sesi">Total Sesi : </label></td>
    <td><div class="input-container"><input name="sesi" id="sesi" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="nominal">Nominal : </label></td>
    <td><div class="input-container"><input name="nominal" id="nominal" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="totalg">Total Gaji : </label></td>
    <td><div class="input-container"><input name="sesik" id="sesik" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="statusk">Status Pengiriman : </label></td>
    <td><div class="input-container"><input type="checkbox" name="statusk" value="Yes" style="" />
</div></td>
  </tr>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
    </div></td>
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