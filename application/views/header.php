<div id='cssmenu'>
  <ul>
      <li><a href='<?=site_url('staff/')?>'><span>Staff</span></a></li>
      <li><a href='<?=site_url('matakuliah')?>'><span>Mata Kuliah</span></a></li>
      <li><a href='#'><span>Presensi</span></a>
         <ul>
            <li class='has-sub'><a href='<?=site_url('presensi/tambah_presensi')?>'><span>Tambah Presensi</span></a>
            </li>
            <li class='has-sub'><a href='<?=site_url('presensi')?>'><span>Lihat Data Presensi</span></a>
            </li>
         </ul>
      </li>
      <li><a href='#'><span>Penggajian</span></a>
         <ul>
            <li class='has-sub'><a href='<?=site_url('penggajian/hitung_gaji')?>'><span>Hitung Gaji</span></a>
            </li>
            <li class='has-sub'><a href='<?=site_url('penggajian/tambah_gaji')?>'><span>Lihat Data Gaji</span></a>
            </li>
         </ul>
   </li>
   <li style="float: right"><a href='#'><span>Logout</span></a></li>
</ul>
</div>
