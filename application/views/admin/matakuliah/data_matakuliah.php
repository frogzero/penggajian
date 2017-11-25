
<div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr" style="margin-top: 40px;">

  <center><div class="form-title">Data Mata Kuliah</div></center>

  <div class="container">
    <div id="example_filter" class="dataTables_filter"><a href="<?php echo site_url('admin/matakuliah/tambah_matakuliah')?>"><input type="button" name="submit" value="Tambah Matakuliah"></a></div><br>
  <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>No</th>
          <th>Kode Mk</th>
          <th>Nama Mk</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=0; 
        foreach ($mk as $row): $no++; ?>
          
      
        <tr>        
          <td><?php echo $no?></td>
          <td><?php echo $row->kodeMK?></td>
          <td><?php echo $row->namaMK?></td>
          <td>
            <a href="<?php echo site_url('admin/matakuliah/update/'.$row->kodeMK)?>"><input type="Submit" name="" value="Edit"></a>
            <a href=""><input type="submit" name="" value="Hapus"></a>
            
          </td>
        </tr>
          <?php endforeach ?>
      </tbody>
    </table>
 </div>
</div>

