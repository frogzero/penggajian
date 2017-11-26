<?php
$nip = $staf->nip;
if($this->input->post('submitupdate')){
$user = set_value('user');
$nama = set_value('nama');
$status = set_value('status');
$alamat = set_value('alamat');
$noHp = set_value('noHp');
$email = set_value('email');
}else{;
$user = $staf->id_user;
$nama = $staf->nama_staff;
$status = $staf->status;
$alamat = $staf->alamat_staff;
$noHp = $staf->nohp_staff;
$email = $staf->email_staff;
}
?>
<div id="div-regForm">

<center><div class="form-title">Edit Staff</div></center>

<?php echo validation_errors();?>
<?php echo form_open('admin/staff/update/'. $nip)?>
  <table>
    <tbody>
    <tr>
      <td><label for="nama">Nama : </label></td>
      <td><div class="input-container"><input name="nama" id="nama" type="text"  class="input required" value="<?php echo $nama?>"/></div></td>
    </tr>

    <tr>
      <td><label for="id">ID : </label></td>
      <td><div class="input-container">
         <select name="user" id="user" class="dropdown">
            <option value="<?php echo $user?>" selected><?php echo $user?></option>
            <option value="1">Admin</option>
            <option value="2">Staff</option>
          </select>
      </div></td>
    </tr>

    <tr>
      <td><label for="status">Status : </label></td>
      <td>
      <div class="input-container">
        <select name="status" id="status" class="dropdown">
          <option value="<?php echo $status?>" selected><?php echo $status?></option>
          <option value="Dosen">Dosen</option>
          <option value="Instruktur">Instruktur</option>
          <option value="Asisten">Asisten</option>
        </select>
      </div>
      </td>
    </tr>

    <tr>
      <td><label for="alamat">Alamat : </label></td>
      <td><div class="input-container"><input name="alamat" id="alamat" type="text"  class="input required" value="<?php echo $alamat?>"/></div></td>
    </tr>

    <tr>
      <td><label for="nohp">No.Hp : </label></td>
      <td><div class="input-container"><input name="noHp" id="nohp" type="text"  class="input required" maxlength="12" value="<?php echo $noHp?>" /></div></td>
    </tr>

    <tr>
      <td><label for="email">Email : </label></td>
      <td><div class="input-container"><input name="email" id="email" type="text" " class="input required" value="<?php echo $email?>"/></div></td>
    </tr>
    </tbody>
  </table>
  &nbsp;<center><input type="hidden" name="submitupdate" value="1"/><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
<?php form_close() ?>

<div id="error">
&nbsp;
</div>

</div>
