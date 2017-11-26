
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Staff</div></center>

  <div class="container">
    <div id="example_filter" class="dataTables_filter"><a href="<?php echo site_url('admin/staff/tambah_staff')?>" style="color:black;"><input type="button" name="submit" value="Tambah Staff"></a></div><br>
  <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>No</th>
          <th>Nip</th>
          <th>Status User</th>
          <th>Nama</th>
          <th>Status</th>
          <th>Alamat Staff</th>
          <th>No Hp Staff</th>
          <th>Email Staff</th>
          <th>Password Staff</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i=0;
        foreach ($staff as $row) { 
          $i++;
        ?>
        <tr>        
          <td><?php echo $i?></td>
          <td><?php echo $row->nip?></td>
          <td><?php echo $row->role?></td>
          <td><?php echo $row->nama_staff?></td>
          <td><?php echo $row->status?></td>
          <td><?php echo $row->alamat_staff?></td>
          <td><?php echo $row->nohp_staff?></td>
          <td><?php echo $row->email_staff?></td>
          <td><?php echo $row->password_staff?></td>
          <td>
             <a href="<?php echo site_url('admin/staff/update/'.$row->nip)?>"><input type="Submit" name="" value="Edit"></a>
             <a href="<?php echo site_url('admin/staff/hapus/'.$row->nip)?>""><input type="submit" name="" value="Hapus" onclick="return confirm('Yakin Hapus ?')"></a>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 </div>
</div>