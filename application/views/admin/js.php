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
</script>
