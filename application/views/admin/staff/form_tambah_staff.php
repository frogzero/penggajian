
 <div id="div-regForm">

<center><div class="form-title">Tambah Staff</div></center>

<form id="regForm" name="staff" action="<?php echo site_url('admin/staff/simpan')?>" method="post" onSubmit="return validasi()">

<table>
  <tbody>
    <tr>
    <td><label for="id">Nip : </label></td>
    <td><div class="input-container"><input name="nip" id="id" type="text" class="input" /></div></td>
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
    <td><div class="input-container"><input name="nama" id="nama" type="text" class="input"/></div></td>
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
    <td><div class="input-container"><input name="alamat" id="alamat" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="nohp">No.Hp : </label></td>
    <td><div class="input-container"><input name="noHp" id="nohp" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="email">Email : </label></td>
    <td><div class="input-container"><input name="email" id="email" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="pass">Password : </label></td>
    <td><div class="input-container"><input name="pass" id="pass" type="password" class="input"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>
 

 <script>
    function validasi(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var emailValid   = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var nama         = staff.nip.value;
        var jeniskelamin = formulir.jenis_kelamin.value;
        var email        = formulir.email.value;
        var pesan = '';
         
        if (nama == '') {
            pesan = '-Nama tidak boleh kosong\n';
        }
         
        if (nama != '' && !nama.match(namaValid)) {
            pesan += '-nama tidak valid\n';
        }
         
        if (jeniskelamin == '') {
            pesan += '-jenis kelamin harus dipilih\n';
        }
         
        if (email == '') {
            pesan += '-email tidak boleh kosong\n';
        }
         
        if (email !=''  && !email.match(emailValid)) {
            pesan += '-alamat email tidak valid\n';
        }
         
        if (pesan != '') {
            alert('Maaf, ada kesalahan pengisian Formulir : \n'+pesan);
            return false;
        }
    return true
    }
