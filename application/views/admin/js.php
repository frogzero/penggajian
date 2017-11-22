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
  document.getElementById('datepicker').disabled = !this.checked;
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


  <script type="text/javascript">
    $(document).ready(function() {
      $('#form_kelas').validate({
        rules: {
          nama_kelas : {
            minlength:1,
            maxlength:5
          }
        },
        messages: {
         nama_kelas: {
            required: "Kolom Nama Harus Di isi",
            minlength: "Minimum Kolom 1 D",
            maxlength: "Maximum kolom 5 digit"
          }
        }
      });
    });
    
    $.validator.addMethod(
      "indonesianDate",
      function(value, element) {
        // put your own logic here, this is just a (crappy) example
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
      },
      "Please enter a date in the format DD/MM/YYYY"
    );
    </script>