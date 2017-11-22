<div id="div-regForm2">

<center><div class="form-title">Tambah Kelas</div></center>
<!-- 
<form action="proses.php" method="post" id="frm-mhs">
			<label for="nim" class="labelfrm">NIM: </label>
			<input type="text" name="nim" id="nim" maxlength="10" class="required" size="15"/><br>
			
			<label for="nama" class="labelfrm">NAMA: </label>
			<input type="text" name="nama" id="nama" size="30" class="required"/>
			
			<label for="alamat" class="labelfrm">ALAMAT: </label>
			<textarea name="alamat" id="alamat" cols="40" rows="4" class="required"></textarea>
			
			<label for="tgl" class="labelfrm">TANGGAL LAHIR: </label>
			<input type="text" name="tgl" id="tgl" maxlength="10" size="15" class="required"/>
			
			<label for="umur" class="labelfrm">UMUR: </label>
			<input type="text" name="umur" id="umur" maxlength="3" size="7" class="required"/>
			
			<label for="email" class="labelfrm">ALAMAT EMAIL: </label>
			<input type="text" name="email" id="email" size="50" class="required"/>
			
			<label for="situs" class="labelfrm">ALAMAT SITUS: </label>
			<input type="text" name="situs" id="situs" size="50" class="required"/>
			
			<label for="pass1" class="labelfrm">PASSWORD: </label>
			<input type="password" name="pass1" id="pass1" size="15" class="required"/>
			
			<label for="pass2" class="labelfrm">ULANGI PASSWORD: </label>
			<input type="password" name="pass2" id="pass2" size="15" class="required"/>
			
			<label for="submit" class="labelfrm">&nbsp;</label>
			<input type="submit" name="Submit" value="Submit"/>
		</form>
 -->
<form id="form_kelas" action="<?php echo site_url('admin/kelas/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td style="color:black;"><label for="nama">Nama Kelas : </label> <input name="nama_kelas" id="nama_kelas" class="required" type="text" style="color: black;" /></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>