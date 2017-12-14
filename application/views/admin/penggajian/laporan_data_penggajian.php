
<center><div class="form-title">Laporan Penggajian</div></center>

<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">
  
<div class="container">
 
  <br>
<table id="example" class="example1 " cellspacing="0" width="100%">
      <thead>
        <tr>      
          <th>No</th>
          <th>status</th>
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
     <tfoot>
        <tr>      
          <th>No</th>
          <th>status</th>
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
     </tfoot>
      <tbody>
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
          <td><?php echo $i?></td>
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