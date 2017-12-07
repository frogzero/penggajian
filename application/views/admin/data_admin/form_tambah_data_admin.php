<div id="div-regForm2">

<center><div class="form-title">Tambah Admin</div></center>

<form id="form_mk" action="<?php echo site_url('admin/data_admin/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td width="100%"><label for="id" class="label" style="color:black;">Email Admin: </label></td>
    <td><div class="input-container"><input name="email" id="kodemk" type="email" class="input required" /></div></td>
  </tr>
  <tr>
    <td><label for="nama" class="label" style="color:black;">Password Admin : </label></td>
    <td><div class="input-container"><input name="Password" id="namamk" type="password" class="input required"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/data_admin')?>"onclick=" return confirm('Yakin  Mau Keluar nih ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>

<div id="error">
&nbsp;
</div>

</div>