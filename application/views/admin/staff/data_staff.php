
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Staff</div></center>

  <div class="container">
    <div id="example_filter" class="dataTables_filter"><a href="<?=site_url('admin/staff/tambah_staff')?>"><input type="button" name="submit" value="Tambah Staff"></a></div><br>
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
          <td><?=$i?></td>
          <td><?=$row->nip?></td>
          <td><?=$row->role?></td>
          <td><?=$row->nama_staff?></td>
          <td><?=$row->status?></td>
          <td><?=$row->alamat_staff?></td>
          <td><?=$row->nohp_staff?></td>
          <td><?=$row->email_staff?></td>
          <td><?=$row->password_staff?></td>
          <td></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 </div>
</div>