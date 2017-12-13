 <div id="div-regForm1">

<center><div class="form-title">Penggajian</div></center>
<?php foreach ($penggajian as $key => $value) {
 ?>
<form id="regForm" action="<?php echo site_url('admin/penggajian/simpan_update')?>" method="post">

<table>
  <tbody>
   <tr>
    <td><label for="sesi">Nama : </label></td>
    <td><div class="input-container"><input type="text" class="input" readonly="" value="<?php echo $value->nip ?>" id="nama" name="nama">
      <input type="text" class="input" readonly="" value="<?php echo $value->id_penggajian ?>" id="nama" name="id_penggajian" hidden></div></td>
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

<?php if($value->statusPengiriman==1){ ?>
  <tr>
    <td><label for="statusk">Status Pengiriman : </label></td>
    <td><div class="input-container"><input type="checkbox" name="statusPengiriman" value="1" style="" id="status_diterima" checked />
</div>
</td>
  </tr>
  <?php }else{ ?>
<tr>
    <td><label for="statusk">Status Pengiriman : </label></td>
    <td><div class="input-container"><input type="checkbox" name="statusPengiriman" value="1" style="" id="status_diterima" />
</div>
</td>
  </tr>
  
  <?php } ?>

<?php if($value->statusPengiriman==1){ ?>

  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" name="tgl_diterima" placeholder="MM/DD/YYY" type="text" value="<?php echo $value->tanggalditerima ?>" id="datepicker"/>
    </div></td>

  <?php }else{ ?>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" name="tgl_diterima" placeholder="MM/DD/YYY" type="text" value="<?php echo $value->tanggalditerima ?>" id="datepicker" disabled/>
    </div></td>
  
  <?php } ?>


  </tr>  
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/presensi')?>"onclick=" return confirm('apakah anda yakin keluar dari halaman ini ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>
<?php } ?>
<div id="error">
&nbsp;
</div>

</div>
 