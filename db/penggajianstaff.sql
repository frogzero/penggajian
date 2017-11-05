-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 04:38 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajianstaff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `password_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `email_admin`, `password_admin`) VALUES
(4545, 1, 'adminnie@gmail.com', 'minnieminniemo');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodeMK` char(6) NOT NULL,
  `namaMK` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kodeMK`, `namaMK`) VALUES
('TI-101', 'Agama Islam 1'),
('TI-102', 'Bahasa Inggris 1'),
('TI-103', 'Fisika dan Elektronika'),
('TI-104', 'Dasar Teknologi Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` int(11) NOT NULL,
  `id_presensi` int(11) DEFAULT NULL,
  `status` char(10) NOT NULL,
  `nip` char(5) NOT NULL,
  `kodeMK` char(6) NOT NULL,
  `totalSesi` int(11) NOT NULL,
  `nominal` enum('100000','60000','30000') NOT NULL,
  `totalGaji` float NOT NULL,
  `tanggalditerima` date NOT NULL,
  `statusPengiriman` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `id_presensi`, `status`, `nip`, `kodeMK`, `totalSesi`, `nominal`, `totalGaji`, `tanggalditerima`, `statusPengiriman`) VALUES
(1, NULL, 'Dosen', 'D01', 'TI-101', 4, '100000', 400000, '2017-10-30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` char(10) NOT NULL,
  `nip` char(5) NOT NULL,
  `kodeMK` char(6) NOT NULL,
  `kelas` char(1) NOT NULL,
  `sesi` int(11) NOT NULL,
  `kehadiran` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `tanggal`, `status`, `nip`, `kodeMK`, `kelas`, `sesi`, `kehadiran`) VALUES
(1, '2017-10-02', 'Dosen', 'D01', 'TI-101', 'A', 1, '1'),
(3, '2017-10-09', 'Dosen', 'D01', 'TI-101', 'A', 2, '1'),
(4, '2017-10-16', 'Dosen', 'D01', 'TI-101', 'A', 3, '1'),
(5, '2017-10-23', 'Dosen', 'D01', 'TI-101', 'A', 4, '1'),
(16, '2017-10-03', 'Instruktur', 'I01', 'TI-102', 'B', 1, '1'),
(17, '2017-10-04', 'Instruktur', 'I01', 'TI-102', 'C', 1, '1'),
(18, '2017-10-10', 'Instruktur', 'I01', 'TI-102', 'B', 2, '1'),
(19, '2017-10-11', 'Instruktur', 'I01', 'TI-102', 'C', 2, '0'),
(20, '2017-10-17', 'Instruktur', 'I01', 'TI-102', 'B', 3, '1'),
(21, '2017-10-18', 'Instruktur', 'I01', 'TI-102', 'C', 3, '1'),
(22, '2017-10-24', 'Instruktur', 'I01', 'TI-102', 'B', 4, '1'),
(23, '2017-10-25', 'Instruktur', 'I01', 'TI-102', 'C', 4, '1'),
(24, '2017-10-31', 'Instruktur', 'I01', 'TI-102', 'B', 5, '0');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
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
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nip`, `id_user`, `nama_staff`, `status`, `alamat_staff`, `nohp_staff`, `email_staff`, `password_staff`) VALUES
('A01', 2, 'Ohno Satoshi', 'Asisten', 'Tokyo', '934567891', 'satoshiohno@yahoo.jp', 'satoshiiohno'),
('D01', 2, 'Nisrina Akbar Rizky Putri, S.T.', 'Dosen', 'Jalan Godean, perumahan nogotirto', '085726541777', 'nisrinaarp@gmail.com', 'nisrinaarp9876'),
('I01', 2, 'Sakurai Sho', 'Instruktur', 'Tokyo, Japan', '975367112', 'sakuraisho@yahoo.jp', 'shosakuraii');

-- --------------------------------------------------------

--
-- Table structure for table `status_staff`
--

CREATE TABLE `status_staff` (
  `status` char(10) NOT NULL,
  `nominal` enum('100000','60000','30000') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_staff`
--

INSERT INTO `status_staff` (`status`, `nominal`) VALUES
('Asisten', '30000'),
('Dosen', '100000'),
('Instruktur', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`) VALUES
(1, 'Admin'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpenggajian`
--
CREATE TABLE `vpenggajian` (
`id_penggajian` int(11)
,`id_presensi` int(11)
,`status` char(10)
,`nip` char(5)
,`kodeMK` char(6)
,`totalSesi` int(11)
,`nominal` enum('100000','60000','30000')
,`totalGaji` float
,`tanggalditerima` date
,`statusPengiriman` enum('1','0')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpresensi`
--
CREATE TABLE `vpresensi` (
`id_presensi` int(11)
,`tanggal` date
,`status` char(10)
,`nip` char(5)
,`kodeMK` char(6)
,`kelas` char(1)
,`sesi` int(11)
,`kehadiran` enum('1','0')
);

-- --------------------------------------------------------

--
-- Structure for view `vpenggajian`
--
DROP TABLE IF EXISTS `vpenggajian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpenggajian`  AS  select `penggajian`.`id_penggajian` AS `id_penggajian`,`penggajian`.`id_presensi` AS `id_presensi`,`penggajian`.`status` AS `status`,`penggajian`.`nip` AS `nip`,`penggajian`.`kodeMK` AS `kodeMK`,`penggajian`.`totalSesi` AS `totalSesi`,`penggajian`.`nominal` AS `nominal`,`penggajian`.`totalGaji` AS `totalGaji`,`penggajian`.`tanggalditerima` AS `tanggalditerima`,`penggajian`.`statusPengiriman` AS `statusPengiriman` from `penggajian` where (`penggajian`.`statusPengiriman` in ('1','0')) WITH CASCADED CHECK OPTION ;

-- --------------------------------------------------------

--
-- Structure for view `vpresensi`
--
DROP TABLE IF EXISTS `vpresensi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpresensi`  AS  select `presensi`.`id_presensi` AS `id_presensi`,`presensi`.`tanggal` AS `tanggal`,`presensi`.`status` AS `status`,`presensi`.`nip` AS `nip`,`presensi`.`kodeMK` AS `kodeMK`,`presensi`.`kelas` AS `kelas`,`presensi`.`sesi` AS `sesi`,`presensi`.`kehadiran` AS `kehadiran` from `presensi` where (`presensi`.`kehadiran` in ('1','0')) WITH CASCADED CHECK OPTION ;

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
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodeMK`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `id_presensi` (`id_presensi`),
  ADD KEY `status` (`status`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kodeMK` (`kodeMK`) USING BTREE;

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `status` (`status`),
  ADD KEY `kodeMK` (`kodeMK`),
  ADD KEY `nip` (`nip`) USING BTREE;

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
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_1` FOREIGN KEY (`id_presensi`) REFERENCES `presensi` (`id_presensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_staff` (`status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `staff` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_ibfk_4` FOREIGN KEY (`kodeMK`) REFERENCES `matakuliah` (`kodeMK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_staff` (`status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `staff` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`kodeMK`) REFERENCES `matakuliah` (`kodeMK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_staff` (`status`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
