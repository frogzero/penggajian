<script>

function lihat_staf() {
  $("#staf").click(function(){
    $.post("<?php echo site_url(); ?>/admin/penggajian/get_staf/"+$('#staf').val(),function(obj){
      $('#nip').html(obj);
    });
      
  });
};



</script>
<script>
function lihat_mk() {
  $("#nip").click(function(){
    $.post("<?php echo site_url(); ?>/admin/penggajian/get_mk/"+$('#nip').val(),function(obj){
      $('#matakuliah').html(obj);
    });
      
  });
};

function presensi_status() {
  $("#status").click(function(){
    $.post("<?php echo site_url(); ?>/admin/presensi/presensi_status/"+$('#status').val(),function(obj){
      $('#nip').html(obj);
    });
      
  });
};
function presensi_staff() {
  $("#nip").click(function(){
    $.post("<?php echo site_url(); ?>/admin/presensi/presensi_staff/"+$('#nip').val(),function(obj){
      $('#test').html(obj);
    });
      
  });
};

function presensi_mk() {
  $("#matakuliah").click(function(){
    $.post("<?php echo site_url(); ?>/admin/presensi/presensi_matakuliah/"+$('#matakuliah').val(),function(obj){
      $('#test').html(obj);
    });
      
  });
};

function hitung_presensi() {
  $("#kelas").click(function(){
    $.post("<?php echo site_url(); ?>/admin/presensi/hitung_presensi/"+$('#kelas').val(),
    function(obj){
      var obj = JSON.parse(obj);
      $('#sesi').val(obj['sesi']);
            });
        });
};





function lihat_kelas() {
  $("#matakuliah").click(function(){
    $.post("<?php echo site_url(); ?>/admin/penggajian/get_kelas/"+$('#matakuliah').val(),function(obj){
      $('#kelas').html(obj);
    });
      
  });
};

function simpan_bulan() {
  $("#bulan").click(function(){
    $.post("<?php echo site_url(); ?>/admin/penggajian/simpan_bulan/"+$('#bulan').val(),function(obj){
      var obj = JSON.parse(obj);
$('#sesi').val(obj['sesi']);
$('#sesi2').val(obj['jumlah']);
$('#nominal').val(obj['nominal']);
$('#total_gaji').val(obj['total_gaji']);
    });     
  });
};

function simpan_tahun() {
  $("#tahun").click(function(){
    $.post("<?php echo site_url(); ?>/admin/penggajian/simpan_tahun/"+$('#tahun').val(),function(obj){
      var obj = JSON.parse(obj);
$('#sesi').val(obj['sesi']);
$('#sesi2').val(obj['jumlah']);
$('#nominal').val(obj['nominal']);
$('#total_gaji').val(obj['total_gaji']);
    });

      
  });
};

function lihat_staf2() {
  $("#kelas").click(function(){
    $.post("<?php echo site_url(); ?>/admin/penggajian/get_presensi/"+$('#kelas').val(),
   	function(obj){
var obj = JSON.parse(obj);
$('#sesi').val(obj['sesi']);
$('#sesi2').val(obj['jumlah']);
$('#nominal').val(obj['nominal']);
$('#total_gaji').val(obj['total_gaji']);
            });
        });
};


function lihat_sesi_presensi() {


  $("#matakuliah").click(function(){

    $.post("<?php echo site_url(); ?>/admin/presensi/get_presensi/"+$('#matakuliah').val(),
    function(obj){
var obj = JSON.parse(obj);
$('#sesi').val(obj['sesi']);
$('#sesi2').val(obj['jumlah']);
$('#nominal').val(obj['nominal']);
$('#total_gaji').val(obj['total_gaji']);
            });
        });
};

document.getElementById('status_diterima').onchange = function(){
  document.getElementById('tgl_diterima').disabled = !this.checked;
} 

</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      Format: "yyyy-MM-dd"
    });
  } );
  </script>


