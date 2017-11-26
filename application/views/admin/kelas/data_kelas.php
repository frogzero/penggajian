
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Kelas</div></center>

  <div class="container">
    <div id="example_filter" class="dataTables_filter"><a href="<?php echo site_url('admin/kelas/tambah_kelas')?>"><input type="button" name="submit" value="Tambah Kelas"></a></div><br>
  <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>No</th>
          <th>Nama Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=0; 
        foreach ($kelas as $row): $no++; ?>
          
      
        <tr>        
          <td><?php echo $no?></td>
          <td><?php echo $row->nama_kelas?></td>
          <td>
            <a href="<?php echo site_url('admin/kelas/form_edit/'.$row->id_kelas)?>"><input type="Submit" name="" value="Edit"></a>
             <a href="<?php echo site_url('admin/kelas/hapus/'.$row->id_kelas)?>""><input type="submit" name="" value="Hapus" onclick="return confirm('Yakin Hapus ?')"></a>            
          </td>
        </tr>
          <?php endforeach ?>
      </tbody>
    </table>
 </div>
</div>

