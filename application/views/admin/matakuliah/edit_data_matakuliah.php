<div id="div-regForm2">

<center><div class="form-title">Edit Mata Kuliah</div></center>

<?php foreach ($matakuliah as $row) {?>

<form id="form_mk" action="<?php echo site_url('admin/matakuliah/ubah/'.$row->kodeMK)?>" method="post">

<table>
  <tbody>
  <tr>
    <td width="100%"><label for="id" class="label" style="color:black;">Kode Mata Kuliah : </label></td>
    <td><div class="input-container"><input name="kodemk" id="kodemk" type="text" value="<?php echo $row->kodeMK ?>" class="input required" /></div></td>
  </tr>
  <tr>
    <td><label for="nama" class="label" style="color:black;">Nama Mata Kuliah : </label></td>
    <td><div class="input-container"><input name="namamk" id="namamk" type="text" value="<?php echo $row->namaMK ?>" class="input required"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/matakuliah')?>"onclick=" return confirm('apakah anda yakin keluar dari halaman ini ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>
<?php } ?>

<div id="error">
&nbsp;
</div>

</div>