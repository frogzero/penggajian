
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Admin</div></center>

  <div class="container">
    <div id="example_filter" class="dataTables_filter"><a href="<?php echo site_url('admin/data_admin/tambah_admin')?>"><input type="button" name="submit" value="Tambah Admin"></a></div><br>
  <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>No</th>
          <th>Email</th>
          <th>Pasword</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=0; 
        foreach ($admin as $row): $no++; ?>
          
      
        <tr>        
          <td><?php echo $no?></td>
          <td><?php echo $row->email_admin?></td>
          <td><?php echo $row->password_admin?></td>
          <td>
             <a href="<?php echo site_url('admin/data_admin/hapus/'.$row->id_admin)?>""><input type="submit" name="" value="Hapus" onclick="return confirm('Yakin Hapus ?')"></a>            
          </td>
        </tr>
          <?php endforeach ?>
      </tbody>
    </table>
 </div>
</div>

