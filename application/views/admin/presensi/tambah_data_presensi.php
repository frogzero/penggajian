<div id="div-regForm">

<center><div class="form-title">Presensi</div></center>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
    </div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
    <select name="status" id="status" class="dropdown">
    <option value="1">Dosen</option>
    <option value="2">Instruktur</option>
    <option value="3">Asisten</option>
    </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="nama">Nama : </label></td>
    <td><div class="input-container"><input name="nama" id="nama" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container"><input name="kodemk" id="kodemk" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container"><input name="kelas" id="kelas" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="sesi">Sesi Ke : </label></td>
    <td><div class="input-container"><input name="sesi" id="sesi" type="text" class="input"/></div></td>
  </tr>
  <tr>
    <td><label for="sesik">Sesi Kehadiran : </label></td>
    <td><div class="input-container"><input name="sesik" id="sesik" type="text" class="input"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>