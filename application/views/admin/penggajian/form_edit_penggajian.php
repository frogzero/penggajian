 <div id="div-regForm1">

<center><div class="form-title">Penggajian</div></center>
<?php foreach ($penggajian as $key => $value) {
 ?>
<form id="regForm" action="<?php echo site_url('admin/penggajian/simpan')?>" method="post">

<table>
  <tbody>
   <tr>
    <td><label for="sesi">Nama : </label></td>
    <td><div class="input-container"><input type="text" class="input" readonly="" value="<?php echo $value->nip ?>" id="nama" name="nama"></div></td>
  </tr>
    <tr>
    <td><label for="totalg">Total Sesi : </label></td>
    <td><div class="input-container"> <input type="text" name="jumlah_hadir" class="input" value="<?php echo $value->totalSesi ?>" id="sesi" value="" readonly=""></div></td>
  </tr>
  <tr>
    <td><label for="nominal">Nominal : </label></td>
    <td><div class="input-container"><input name="nominal" id="nominal" type="text" class="input" value="<?php echo $value->nominal ?>" readonly="" /></div></td>
  </tr>
  <tr>
    <td><label for="totalg">Total Gaji : </label></td>
    <td><div class="input-container"> <input type="text" name="total_gaji"  value="<?php echo $value->totalGaji ?>" readonly="" class="input" id="total_gaji"></div></td>
  </tr>
  <tr>
    <td><label for="statusk">Status Pengiriman : </label></td>
    <td><div class="input-container"><input type="checkbox" name="statusPengiriman" value="1" style="" id="status_diterima" />
</div></td>
  </tr>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" name="tgl_diterima" placeholder="MM/DD/YYY" type="text" id="datepicker" disabled="" />
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
 