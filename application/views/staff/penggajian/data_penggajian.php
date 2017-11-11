
<center><div class="form-title">Rekap Penggajian</div></center>

<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">
  
<div class="container">
  <table class="table table-striped table-bordered data">
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
          <td><?=$i?></td>
          <td><?=$row->status?></td>
          <td><?=$row->nip?>-<?=$row->nama_staff?></td>
          <td><?=$row->kodeMK?></td>
          <td><?=$row->nama_kelas?></td>
          <td><?=$row->totalSesi?></td>
          <td><?=$row->nominal?></td>
          <td><?=$row->totalGaji?></td>
          <td><?=$row->bulan?>-<?=$row->tahun?></td>
          <td><?=$row->tanggalditerima?></td>
          <td><?=$status?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 </div>
</div>