<div id="div-regForm">

<center><div class="form-title">Presensi</div></center>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" id="date" name="date" placeholder="MM/DD/YYY" type="date"/>
    </div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
     <select class="dropdown" name="status" id="staf" onchange="lihat_staf()">
                     <option value="Pilih Status" selected="">Pilih Status</option>
                    <option value="Asisten">Asisten</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Instruktur">Instruktur</option>
                  </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="nama">Nama : </label></td>
    <td><div class="input-container">
       <select class="dropdown" name="nip" id="nip" onchange="lihat_mk()">
           <option value="Dosen" selected="">Pilih Kode/Nama Staff</option>
     </select>

    </div></td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container">
      <select class="dropdown"  name="matakuliah" id="matakuliah" onchange="lihat_sesi_presensi()">
        <option value="Pilih Status" selected="">Pilih MK</option>
    </select></div></td>
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
    <td><div class="input-container">
       <input type="radio" name="kehadiran" id="kehadiran" value="1">Hadir
       <input type="radio" name="kehadiran" id="kehadiran" value="0">Tidak Hadir

    </div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
</form>

<div id="error">
&nbsp;
</div>

</div>