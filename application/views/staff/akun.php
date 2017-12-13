<div id="div-regForm2">

<center><div class="form-title">Akun</div></center>

<form id="form_mk" action="<?php echo site_url('home/simpan_password_baru')?>" method="post">

<table>
  <tbody>
      <tr>
    <td width="100%"><label for="id" class="label" style="color:black;">Email Anda : </label></td>
    <td><div class="input-container"><input name="email_baru" id="email Baru" type="text" class="input required" /></div></td>
  </tr>
  <tr>
    <td width="100%"><label for="id" class="label" style="color:black;">Password baru : </label></td>
    <td><div class="input-container"><input name="password_baru" id="password_baru" type="text" class="input required" /></div></td>
  </tr>
   <!-- <tr>
    <td><label for="nama" class="label" style="color:black;">Password Baru : </label></td>
    <td><div class="input-container"><input name="password_baru" id="password_baru" type="text" class="input required"/></div></td>
  </tr> -->
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/matakuliah')?>"onclick=" return confirm('apakah anda yakin keluar dari halaman ini ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>

<div id="error">
&nbsp;
</div>

</div>