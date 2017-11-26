<?php
$kodemk = $makul->kodeMK;
if($this->input->post('submitupdate')){
$namamk = set_value('namamk');
}else{
$namamk = $makul->namaMK;
}
?>
<div id="div-regForm2">

<center><div class="form-title">Edit Mata Kuliah</div></center>
<?php echo validation_errors();?>
<?php echo form_open('admin/matakuliah/update/'. $kodemk)?>
  <table>
    <tbody>
    <tr>
     <td width="100%"><label for="id" class="label" style="color:black;">Kode Mata Kuliah : </label></td>
      <td><div class="input-container"><input name="namamk" id="namamk" type="text" class="input" value="<?php echo $namamk?>"/></div></td>
    </tr>
    </tbody>
  </table>
&nbsp;<center><input type="hidden" name="submitupdate" value="1"/><input type="submit" class="greenButton" value="Simpan" /><img id="loading" src="img/ajax-loader.gif" alt="working.." /></center>
<?php form_close() ?>

<div id="error">
&nbsp;
</div>

</div>