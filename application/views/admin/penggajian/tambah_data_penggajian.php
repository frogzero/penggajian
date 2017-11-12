 <div id="div-regForm1">

<center><div class="form-title">Penggajian</div></center>

<form id="regForm" action="<?php echo site_url('admin/penggajian/simpan')?>" method="post">

<table>
  <tbody>
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
    <td><label for="id">ID : </label></td>
    <td>
    <div class="input-container">
   <select class="dropdown" name="nip" id="nip" onchange="lihat_mk()">
           <option value="Dosen" selected="">Pilih Kode/Nama Staff</option>
     </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="kodemk">Kode MK : </label></td>
    <td>
    <div class="input-container">
   <select class="dropdown"  name="matakuliah" id="matakuliah" onchange="lihat_kelas()">
        <option value="Pilih Status" selected="">Pilih MK</option>
    </select>
    </div></td>
  </tr>
  <tr>
    <td><label for="kelas">Kelas : </label></td>
    <td><div class="input-container">
     <select class="dropdown" name="kelas" id="kelas" onchange="lihat_staf2()">
                     <option value="Pilih Status" selected="">Pilih kelas</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><label for="periode">Periode : </label></td>
    <td>
    <div class="input-container">
      <select class="dropdown" name="bulan" id="bulan" onchange="simpan_bulan()">
                    <option value="Bulan" selected="">Bulan</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
    </div>
    </td>
    <td>
    <div class="input-container">
    <select class="dropdown2" name="tahun" id="tahun" onchange="simpan_tahun()">
                     <option value="Pilih Status" selected="">Tahun</option>
                     <?php
                
                     for($i=2010; $i<=2050;$i++) {
                      echo "<option value='".$i."'>$i</option>";
                     }
                     ?>
                  </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="sesi">Total Sesi : </label></td>
    <td><div class="input-container"><input type="text" class="input" readonly="" id="sesi2" name="total_sesi"></div></td>
  </tr>
    <tr>
    <td><label for="totalg">Total Hadir : </label></td>
    <td><div class="input-container"> <input type="text" name="jumlah_hadir" class="input" id="sesi" readonly=""></div></td>
  </tr>
  <tr>
    <td><label for="nominal">Nominal : </label></td>
    <td><div class="input-container"><input name="nominal" id="nominal" type="text" class="input" readonly="" /></div></td>
  </tr>
  <tr>
    <td><label for="totalg">Total Gaji : </label></td>
    <td><div class="input-container"> <input type="text" name="total_gaji" readonly="" class="input" id="total_gaji"></div></td>
  </tr>
  <tr>
    <td><label for="statusk">Status Pengiriman : </label></td>
    <td><div class="input-container"><input type="checkbox" name="statusPengiriman" value="1" style="" id="status_diterima" />
</div></td>
  </tr>
  <tr>
    <td><label for="tgl">Tanggal : </label></td>
    <td><div class="input-container">
      <input class="input" name="tgl_diterima" placeholder="MM/DD/YYY" type="date" id="tgl_diterima" disabled="" />
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
 