<div id="div-regForm">

<center><div class="form-title">Presensi</div></center>

<form id="regForm" action="<?=site_url('admin/presensi/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" id="date" name="tanggal" placeholder="MM/DD/YYY" type="date"/>
    </div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
     <select class="dropdown" name="status" id="status" onchange="presensi_status()">
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
       <select class="dropdown" name="nip" id="nip" onchange="presensi_staff()">
           <option value="Dosen" selected="">Pilih Nip/Nama Staff</option>
     </select>

    </div></td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container">
      <select class="dropdown"  name="kodemk" id="matakuliah" onchange="presensi_mk()">
        <option value="Pilih Status" selected="">Pilih MK</option>
              <?php foreach ($mk as $row) {?>
           <option value="<?=$row->kodeMK?>"><?=$row->kodeMK?>-<?=$row->namaMK?></option>
      <?php }     ?>
    </select></div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container">
        <select class="dropdown" name="kelas" id="kelas" onchange="hitung_presensi()">
                     <option value="Pilih Status" selected="">Pilih Kelas</option>
      <?php foreach ($kelas as $row) {?>
           <option value="<?=$row->id_kelas?>"><?=$row->nama_kelas?></option>
      <?php }     ?>
        </select>
    </div></td>
  </tr>
  <tr>
    <td><label for="sesi">Sesi Ke : </label></td>
    <td><div class="input-container"><input name="sesi" id="sesi" type="text" class="input" readonly="" /></div></td>
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