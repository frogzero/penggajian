<div id='cssmenu'>
  <ul>
      <li><a href='<?=site_url('admin/staff/')?>'><span>Staff</span></a></li>
      <li><a href='<?=site_url('admin/matakuliah')?>'><span>Mata Kuliah</span></a></li>
       <li><a href='<?=site_url('admin//kelas')?>'><span>Kelas</span></a></li>
      <li><a href='#'><span>Presensi</span></a>
         <ul>
            <li class='has-sub'><a href='<?=site_url('admin/presensi/tambah_presensi')?>'><span>Tambah Presensi</span></a>
            </li>
            <li class='has-sub'><a href='<?=site_url('admin/presensi')?>'><span>Lihat Data Presensi</span></a>
            </li>
         </ul>
      </li>
      <li><a href='#'><span>Penggajian</span></a>
         <ul>
            <li class='has-sub'><a href='<?=site_url('admin/penggajian/tambah_data_penggajian')?>'><span>Hitung Gaji</span></a>
            </li>
            <li class='has-sub'><a href='<?=site_url('admin/penggajian')?>'><span>Lihat Data Gaji</span></a>
            </li>
         </ul>
   </li>
   <li style="float: right"><a href='<?=site_url('home/log_out')?>'><span>Logout</span></a></li>
</ul>
</div>
