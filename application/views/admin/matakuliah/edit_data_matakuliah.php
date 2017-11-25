<?php
if($this->input->post('submitupdate')){
$nama = set_value('namamk');
}else{
$kodemk = $makul->kodeMK;
$nama = $makul->namaMK;
}
?>
<div id="div-regForm2">

<center><div class="form-title">Edit Mata Kuliah</div></center>

<?php echo form_open('admin/kategori/update/'. $kodemk)?>

<table>
  <tbody>
  <tr>
    <td><label for="nama" class="label" style="color:black;">Nama Mata Kuliah : </label></td>
    <td><div class="input-container"><input name="namamk" id="namamk" type="text" class="input" value="<?php echo $nama?>"/></div></td>
  </tr>
  </tbody>
</table>
&nbsp;<center><input type="hidden" name="submitupdate" value="1"/><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
<?php form_close() ?>

<div id="error">
&nbsp;
</div>

</div>