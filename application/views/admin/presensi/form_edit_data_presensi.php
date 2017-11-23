<div id="div-regForm">

<center><div class="form-title">Presensi</div></center>

<?php foreach ($presensi_edit as $key => $row) { ?>
<form id="regForm" action="<?php echo site_url('admin/presensi/simpan_update')?>" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
       <input class="input" name="id_presensi" placeholder="MM/DD/YYY" type="text"  value="<?php echo $row->id_presensi ?>" readonly hidden />
   
      <input class="input" name="tanggal" placeholder="MM/DD/YYY" type="text"  value="<?php echo $row->tanggal ?>" readonly />
    </div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
      <input class="input" name="status" placeholder="MM/DD/YYY" type="text"  value="<?php echo $row->status ?>" readonly />
    </td>
  </tr>
  <tr>
    <td><label for="nama">Nama : </label></td>
    <td><div class="input-container">
       <input class="input" name="Nama" type="text"  value="<?php echo $row->nama_staff ?>" readonly />
    </div></td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container">
      
       <input class="input" name="Nama" type="text"  value="<?php echo $row->kodeMK ?>" readonly />
      </div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container">

       <input class="input" name="id_kelas" type="text"  value="<?php echo $row->id_kelas ?>" readonly />
    </div></td>
  </tr>
  <tr>
    <td><label for="sesi">Sesi Ke : </label></td>
    <td><div class="input-container"><input name="sesi" id="sesi" type="text" class="input"  value="<?php echo $row->sesi ?>" readonly /></div></td>
  </tr>
  <tr>
    <td><label for="sesik">Sesi Kehadiran : </label></td>
    <td><div class="input-container">
    <?php if ($row->kehadiran==0) {?>
       <input type="radio" name="kehadiran" id="kehadiran" value="1">Hadir
       <input type="radio" name="kehadiran" id="kehadiran" value="0" checked>Tidak Hadir
       <?php }else{ ?>
       <input type="radio" name="kehadiran" id="kehadiran" value="1" checked>Hadir
       <input type="radio" name="kehadiran" id="kehadiran" value="0">Tidak Hadir
       <?php } ?>
    </div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/presensi')?>"onclick=" return confirm('Yakin  Mau Keluar nih ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>
<?php } ?>
<div id="error">
&nbsp;
</div>

</div>