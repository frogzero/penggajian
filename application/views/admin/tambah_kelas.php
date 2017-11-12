<div id="div-regForm2">

<center><div class="form-title">Tambah Kelas</div></center>

<form id="regForm" action="<?php echo site_url('admin/kelas/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="nama" class="label">Nama Kelas: </label></td>
    <td><div class="input-container"><input name="kelas" id="namamk" type="text" class="input"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>