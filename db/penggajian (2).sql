-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2017 pada 03.56
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `password_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `email_admin`, `password_admin`) VALUES
(4545, 1, 'adminnie@gmail.com', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodeMK` char(7) NOT NULL,
  `namaMK` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kodeMK`, `namaMK`) VALUES
('TI-101', 'Agama Islam 1'),
('TI-102', 'Bahasa Inggris 1'),
('TI-103', 'Fisika dan Elektronika'),
('TI-104', 'Dasar Teknologi Informasi'),
('TI-105', 'Applikasi Produktifitas Kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` int(11) NOT NULL,
  `status` char(10) NOT NULL,
  `nip` char(5) NOT NULL,
  `kodeMK` char(7) NOT NULL,
  `id_kelas` int(1) NOT NULL,
  `totalSesi` int(11) NOT NULL,
  `nominal` enum('100000','60000','30000') NOT NULL,
  `totalGaji` float NOT NULL,
  `bulan` char(2) NOT NULL,
  `tahun` char(4) NOT NULL,
  `tanggalditerima` date NOT NULL,
  `statusPengiriman` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `status`, `nip`, `kodeMK`, `id_kelas`, `totalSesi`, `nominal`, `totalGaji`, `bulan`, `tahun`, `tanggalditerima`, `statusPengiriman`) VALUES
(5, 'Asisten', 'A01', 'TI-101', 2, 4, '30000', 60000, '10', '2017', '0000-00-00', '0'),
(6, 'Asisten', 'A01', 'TI-101', 1, 1, '30000', 30000, '10', '2017', '0000-00-00', '0'),
(7, 'Asisten', 'A01', 'TI-101', 2, 4, '30000', 60000, '10', '2017', '0000-00-00', '1'),
(8, 'Asisten', 'A01', 'TI-101', 1, 1, '30000', 30000, '10', '2017', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` char(10) NOT NULL,
  `nip` char(5) NOT NULL,
  `kodeMK` char(7) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `sesi` int(11) NOT NULL,
  `kehadiran` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `tanggal`, `status`, `nip`, `kodeMK`, `id_kelas`, `sesi`, `kehadiran`) VALUES
(25, '2017-10-06', 'Dosen', 'D01', 'TI-101', 1, 1, '0'),
(26, '2017-10-06', 'Dosen', 'D01', 'TI-101', 1, 2, '0'),
(27, '2017-10-13', 'Dosen', 'D01', 'TI-101', 1, 3, '0'),
(28, '2017-10-13', 'Dosen', 'D01', 'TI-101', 1, 4, '0'),
(29, '2017-10-06', 'Asisten', 'A01', 'TI-101', 2, 1, '1'),
(30, '2017-10-06', 'Asisten', 'A01', 'TI-101', 2, 2, '1'),
(31, '2017-10-13', 'Asisten', 'A01', 'TI-101', 2, 3, '0'),
(32, '2017-10-13', 'Asisten', 'A01', 'TI-101', 2, 4, '0'),
(33, '2017-10-23', 'Instruktur', 'I01', 'TI-102', 3, 1, '0'),
(34, '2017-10-30', 'Instruktur', 'I01', 'TI-102', 3, 2, '0'),
(38, '2017-11-10', 'Asisten', 'A01', 'TI-101', 2, 5, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `nip` char(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_staff` varchar(50) NOT NULL,
  `status` char(10) NOT NULL,
  `alamat_staff` text NOT NULL,
  `nohp_staff` char(12) NOT NULL,
  `email_staff` varchar(50) NOT NULL,
  `password_staff` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`nip`, `id_user`, `nama_staff`, `status`, `alamat_staff`, `nohp_staff`, `email_staff`, `password_staff`) VALUES
('A01', 2, 'Ohno Satoshi', 'Asisten', 'Tokyo', '934567891', 'satoshiohno@yahoo.jp', 'satoshiiohno'),
('A02', 2, 'Ninomiya Kazunari', 'Asisten', 'Tokyo', '86523456890', 'ninomiyakazunari@yahoo.jp', 'kazunarininomiya'),
('D01', 2, 'Nisrina Akbar Rizky Putri, S.T.', 'Dosen', 'Jalan Godean, perumahan nogotirto', '085726541777', 'nisrinaarp@gmail.com', 'nisrinaarp9876'),
('E01', 2, 'EKo Rismaryanto', 'Instruktur', 'admin', '0293', 'eko.rme@gmail.com', '707c1ee5c3aea98e23f3c0801f0a0c61'),
('I01', 2, 'Sakurai Sho', 'Instruktur', 'Tokyo, Japan', '975367112', 'sakuraisho@yahoo.jp', 'shosakuraii');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_staff`
--

CREATE TABLE `status_staff` (
  `status` char(10) NOT NULL,
  `nominal` enum('100000','60000','30000') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_staff`
--

INSERT INTO `status_staff` (`status`, `nominal`) VALUES
('Asisten', '30000'),
('Dosen', '100000'),
('Instruktur', '60000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `role`) VALUES
(1, 'Admin'),
(2, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin` (`id_user`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodeMK`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `status` (`status`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kodeMK` (`kodeMK`) USING BTREE,
  ADD KEY `penggajian_ibfk_5` (`id_kelas`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `status` (`status`),
  ADD KEY `kodeMK` (`kodeMK`),
  ADD KEY `nip` (`nip`) USING BTREE,
  ADD KEY `presensi_ibfk_4` (`id_kelas`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `fk_pengajar` (`id_user`),
  ADD KEY `fk_statuspengajar` (`status`);

--
-- Indexes for table `status_staff`
--
ALTER TABLE `status_staff`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4546;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_staff` (`status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `staff` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_ibfk_4` FOREIGN KEY (`kodeMK`) REFERENCES `matakuliah` (`kodeMK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_ibfk_5` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_staff` (`status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `staff` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`kodeMK`) REFERENCES `matakuliah` (`kodeMK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_staff` (`status`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
