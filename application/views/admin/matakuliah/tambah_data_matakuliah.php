<div id="div-regForm2">

<center><div class="form-title">Tambah Mata Kuliah</div></center>

<form id="form_mk" action="<?php echo site_url('admin/matakuliah/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td width="100%"><label for="id" class="label" style="color:black;">Kode Mata Kuliah : </label></td>
    <td><div class="input-container"><input name="kodemk" id="kodemk" type="text" class="input required" /></div></td>
  </tr>
  <tr>
    <td><label for="nama" class="label" style="color:black;">Nama Mata Kuliah : </label></td>
    <td><div class="input-container"><input name="namamk" id="namamk" type="text" class="input required"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>