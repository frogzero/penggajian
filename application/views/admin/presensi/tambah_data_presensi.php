<div id="div-regForm">

<center><div class="form-title">Presensi</div></center>

<form id="form_presensi" action="<?php echo site_url('admin/presensi/simpan')?>" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" name="tanggal" placeholder="MM/DD/YYY" type="text" id="datepicker" date required=""/>
    </div></td>
  </tr>
  <tr>
    <td><label for="status">Status : </label></td>
    <td>
    <div class="input-container">
     <select class="dropdown" name="status" id="status" onchange="presensi_status()" required="">
                     <option value="" disabled="" selected="">Pilih Status</option>
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
       <select class="dropdown" name="nip" id="nip" onchange="presensi_staff()" required="">
           <option value="" disabled="" selected="">Pilih Nip/Nama Staff</option>
     </select>

    </div></td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td><div class="input-container">
      <select class="dropdown"  name="kodemk" id="matakuliah" onchange="presensi_mk()" required="">
        <option value="" disabled="" selected="">Pilih MK</option>
              <?php foreach ($mk as $row) {?>
           <option value="<?php echo $row->kodeMK?>"><?php echo $row->kodeMK?>-<?php echo $row->namaMK?></option>
      <?php }     ?>
    </select></div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container">
        <select class="dropdown" name="kelas" id="kelas" onchange="hitung_presensi()" required="">
                     <option value="" disabled="" selected="">Pilih Kelas</option>
      <?php foreach ($kelas as $row) {?>
           <option value="<?php echo $row->id_kelas?>"><?php echo $row->nama_kelas?></option>
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
       <input type="radio" name="kehadiran" id="kehadiran" value="1" required="">Hadir
       <input type="radio" name="kehadiran" id="kehadiran" value="0">Tidak Hadir
    </div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/presensi')?>"onclick=" return confirm('apakah anda yakin keluar dari halaman ini ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>

<div id="error">
&nbsp;
</div>

</div>