
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Presensi</div></center>

  <div class="container">
    <form align="right" action="<?php echo site_url('admin/presensi/tampil_filter') ?>" method="post">
       <select class="dropdown" name="status" id="status" onchange="presensi_status()" required="">
                     <option value="" disabled="" selected="">Pilih Status</option>
                    <option value="Asisten">Asisten</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Instruktur">Instruktur</option>
                  </select>
      <br><br>
      <select class="dropdown" name="nip" id="nip" onchange="presensi_staff()" required="">
           <option value="" disabled="" selected="">Pilih Nip/Nama Staff</option>
      </select><br>

       <select class="dropdown"  name="kodemk" id="matakuliah" onchange="presensi_mk()" required="">
        <option value="" disabled="" selected="">Pilih MK</option>
              <?php foreach ($mk as $row) {?>
           <option value="<?php echo $row->kodeMK?>"><?php echo $row->kodeMK?>-<?php echo $row->namaMK?></option>
      <?php }     ?>
    </select><br>
    
      <select class="dropdown" name="kelas" id="kelas" onchange="hitung_presensi()" required="">
                     <option value="" disabled="" selected="">Pilih Kelas</option>
      <?php foreach ($kelas as $row) {?>
           <option value="<?php echo $row->id_kelas?>"><?php echo $row->nama_kelas?></option>
      <?php }     ?>
        </select><br>

<input type="submit" value="Filter" />
<a href="<?php echo site_url('admin/presensi/laporan_data_presensi')?>"><input type="button" value="Reset" /></a>
    </form>
  <table id="presensi_tabel" class="presensi_tabel" cellspacing="0" width="100%" >
      <thead>
        <tr>      
          <th>Tanggal</th>
          <th>Status</th>
          <th>nip</th>
          <th>Kode Mk</th>
          <th>Kelas</th>
          <th>sesi</th>
          <th>kehadiran</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i=0;

        foreach ($presensi as $row): $i++; ?>
          
        <tr>        
          <td><?php echo $row->tanggal?></td>
          <td><?php echo $row->status?></td>
          <td><?php echo $row->nip?>-<?php echo $row->nama_staff?></td>
          <td><?php echo $row->kodeMK?></td>
          <td><?php echo $row->nama_kelas?></td>
          <td><?php echo $row->sesi?></td>
          <td><?php echo $row->kehadiran?></td>
        </tr>
        
        <?php endforeach ?>
      </tbody>

    </table>
 </div>
</div>