
 <div id="div-regForm">

<center><div class="form-title">Tambah Staff</div></center>

<form id="form_staff" name="staff" action="<?php echo site_url('admin/staff/simpan')?>" method="post" onSubmit="return validasi()">

<table>
  <tbody>
    <tr>
    <td><label for="id">Nip : </label></td>
    <td><div class="input-container"><input name="nip" id="nip" type="text" class="input required" /></div></td>
  </tr>
  <tr>
    <td><label for="id">ID : </label></td>
    <td><div class="input-container">
        <select name="user" id="user" class="dropdown">
    <option value="1">Admin</option>
    <option value="2">Staff</option>
    </select>
    </div></td>
  </tr>
  <tr>
    <td><label for="nama">Nama : </label></td>
    <td><div class="input-container"><input name="nama" id="nama" type="text" class="input required"/></div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
    <select name="status" id="status" class="dropdown">
    <option value="Dosen">Dosen</option>
    <option value="Instruktur">Instruktur</option>
    <option value="Asisten">Asisten</option>
    </select>
    </div>
    
    </td>
  </tr>
  <tr>
    <td><label for="alamat">Alamat : </label></td>
    <td><div class="input-container"><input name="alamat" id="alamat" type="text" class="input required"/></div></td>
  </tr>
  <tr>
    <td><label for="nohp">No.Hp : </label></td>
    <td><div class="input-container"><input name="noHp" id="nohp" type="text" class="input required" maxlength="12" /></div></td>
  </tr>
  <tr>
    <td><label for="email">Email : </label></td>
    <td><div class="input-container"><input name="email" id="email" type="text" class="input required"/></div></td>
  </tr>
  <tr>
    <td><label for="pass">Password : </label></td>
    <td><div class="input-container"><input name="pass" id="pass" type="password" patern="(?=^.{5,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="sadasd" class="input required"/></div></td>
  </tr>
    <tr>
    <td><label for="pass">Ulangi Password : </label></td>
    <td><div class="input-container"><input name="pass1" id="pass1" type="password" class="input required"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
   <a href="<?php echo site_url('admin/staff')?>"onclick=" return confirm('Yakin  Mau Keluar nih ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>

<div id="error">
&nbsp;
</div>

</div>
