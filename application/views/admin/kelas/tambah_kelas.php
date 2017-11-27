<div id="div-regForm2">

<center><div class="form-title">Tambah Kelas</div></center>

<form id="form_kelas" action="<?php echo site_url('admin/kelas/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td style="color:black;"><label for="nama">Nama Kelas : </label> <input name="nama_kelas" id="nama_kelas" class="required" type="text" style="color: black;" /></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/kelas')?>"onclick=" return confirm('Yakin  Mau Keluar nih ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>

<div id="error">
&nbsp;
</div>

</div>