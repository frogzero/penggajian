
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Presensi</div></center>

  <div class="container">
  <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>No</th>
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
          <td><?php echo $i?></td>
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