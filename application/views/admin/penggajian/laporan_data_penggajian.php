

<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">
<br><center><div class="form-title">Laporan Penggajian</div></center>


<div class="container">
  
   <br>
   <form id="form_penggajian" align="right" action="<?php echo site_url('admin/penggajian/laporan_data_penggajian_filter') ?>" method="post">
       <select class="dropdown" name="status" id="status" onchange="presensi_status()" required="">
                     <option value="" disabled="" selected="">Pilih Status</option>
                    <option value="Asisten">Asisten</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Instruktur">Instruktur</option>
                  </select>
      <br><br>
      <select class="dropdown" name="nip" id="nip" onchange="presensi_staff()" required="">
           <option value="" disabled="" selected="">Pilih Nip/Nama Staff</option>
      </select>

      <br></br>

       <select class="dropdown" name="bulan" id="bulan" required="">
                    <option value="" disabled="" selected="">Bulan</option>
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
                   <select class="dropdown2" name="tahun" id="tahun" required="">
                     <option value="" disabled="" selected="">Tahun</option>
                     <?php
                
                     for($i=2010; $i<=2050;$i++) {
                      echo "<option value='".$i."'>$i</option>";
                     }
                     ?>
                  </select>
       <br></br>

<input type="submit" value="Filter" />
<a href="<?php echo site_url('admin/penggajian/laporan_data_penggajian')?>"><input type="button" value="Reset" /></a>
    </form>
   <br>

  <!-- <button onclick="printData()">Print Data</button> -->
<table id="example" class="example1" cellspacing="0" width="100%" >
      <thead>
        <tr>      
          <th>Status</th>
          <th>Nip Nama</th>
          <th>Kode Mk</th>
          <th>Kelas</th>
          <th>Total Sesi</th>
          <th>nominal</th>
          <th>Total Gaji</th>
          <th>Periode</th>
          <th>Tanggal Diterima</th>
          <th>Status Pengiriman</th>
        </tr>
      </thead>
 
     
      <tbody  >
        <?php $i=0; $status='';
         foreach ($penggajian as $row) {
          if ($row->statusPengiriman > 0) {
            $status = "Sudah Diterima";
          }else{
            $status = "Belum Diterima";
          }
          $i++;
          ?>
        <tr>        
          <td><?php echo $row->status?></td>
          <td><?php echo $row->nip?>-<?php echo $row->nama_staff?></td>
          <td><?php echo $row->kodeMK?></td>
          <td><?php echo $row->nama_kelas?></td>
          <td><?php echo $row->totalSesi?></td>
          <td><?php echo $row->nominal?></td>
          <td><?php echo $row->totalGaji?></td>
          <td><?php echo $row->bulan?>-<?php echo $row->tahun?></td>
          <td><?php echo $row->tanggalditerima?></td>
          <td><?php echo $status?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>
</div>