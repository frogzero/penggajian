
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Staff</div></center>

  <div class="container">
      <div id="example_filter" class="dataTables_filter"><a href="<?php echo site_url('admin/kelas')?>"><input type="button" name="submit" value="Tambah Kelas"></a></div><br>
  <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>NO</th>
          <th>Status Staff</th>
          <th>Nominal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $i=0;
        foreach ($status_staff as $row) { 
          $i++;
        ?>
        <tr>        
          <td><?php echo $i?></td>
          <td><?php echo $row->status?></td>
          <td><?php echo $row->nominal?></td>
          <td>
            <a href=""><input type="submit" name="" value="Edit"></a>
          </td>
         </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 </div>
</div>