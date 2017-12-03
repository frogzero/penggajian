<div id="div-regForm2">

<center><div class="form-title">Edit Mata Kuliah</div></center>

<?php foreach ($status_staff as $row) {?>

<form id="form_mk" action="<?php echo site_url('admin/status_staff/ubah_simpan/'.$row->status)?>" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="nama" class="label" style="color:black;">Nominal : </label></td>
    <td><div class="input-container"><input name="nominal"  type="text" value="<?php echo $row->nominal ?>" class="input required"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
<a href="<?php echo site_url('admin/status_staff')?>"onclick=" return confirm('Yakin  Mau Keluar nih ?')"><input type="button" class="greenButton" value="Batal" /></a></center>
</form>
<?php } ?>

<div id="error">
&nbsp;
</div>

</div>