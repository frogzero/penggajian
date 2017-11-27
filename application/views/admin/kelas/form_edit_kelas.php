<div id="div-regForm2">

<center><div class="form-title">Edit Kelas</div></center>

<?php foreach ($kelas as $key => $row) {?>
<form id="form_kelas" action="<?php echo site_url('admin/kelas/simpan_update')?>" method="post">

<table>
  <tbody>
  <tr>
    <td style="color:black;"><label for="nama">Nama Kelas : </label> <input name="nama_kelas" id="nama_kelas" value="<?php echo $row->nama_kelas?>" class="required" type="text" style="color: black;" />
    	<input name="id_kelas" id="nama_kelas" class="required" type="text" style="color: black;" hidden="" value="<?php echo $row->id_kelas ?>" /></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/kelas')?>"onclick=" return confirm('Yakin  Mau Keluar nih ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>
<?php } ?>

<div id="error">
&nbsp;
</div>

</div>