-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 09:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rukun_warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `Berita_Id` tinyint(4) NOT NULL,
  `Berita_Judul` varchar(100) NOT NULL,
  `Berita_Konten` text NOT NULL,
  `Berita_Img` varchar(100) NOT NULL,
  `Berita_UpdateId` tinyint(4) NOT NULL,
  `Berita_UpdateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`Berita_Id`, `Berita_Judul`, `Berita_Konten`, `Berita_Img`, `Berita_UpdateId`, `Berita_UpdateTime`) VALUES
(1, 'Penyemprotan Desifektan di lingkungan rt 02', '<p>Coba Test</p>', 'hijau.jpg', 2, '2021-08-21 11:29:35'),
(2, 'PENGUMUMAN HARI RAYA IDUL FITRI 1441H', '<p>Sholat Ied Di lapangan di tiadakan</p>', 'no-image.svg', 2, '2021-08-21 11:30:39'),
(3, 'Acara 17 Agustus 2020', '<p>Upacara 17 Agustus di adakan di lapangan sekolah&nbsp;</p>', 'no-image.svg', 2, '2021-08-21 11:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `Transaksi_ID` tinyint(11) NOT NULL,
  `Transaksi_Penerima` varchar(50) NOT NULL,
  `Transaksi_Flag` enum('D','K') NOT NULL,
  `Transaksi_Value` int(11) NOT NULL,
  `Transaksi_Keterangan` varchar(100) NOT NULL,
  `Transaksi_Tanggal` datetime NOT NULL,
  `Transaksi_UpdateId` tinyint(4) NOT NULL,
  `Transaksi_UpdateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keuangan`
--

INSERT INTO `tb_keuangan` (`Transaksi_ID`, `Transaksi_Penerima`, `Transaksi_Flag`, `Transaksi_Value`, `Transaksi_Keterangan`, `Transaksi_Tanggal`, `Transaksi_UpdateId`, `Transaksi_UpdateTime`) VALUES
(1, 'Desal Isra', 'K', 30000, 'Iuran Kebersihan & Keamanan', '2021-08-26 13:23:17', 2, '2021-08-26 13:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk_detail`
--

CREATE TABLE `tb_kk_detail` (
  `KKD_ID` tinyint(4) NOT NULL,
  `KKD_IdHeader` tinyint(4) NOT NULL,
  `KKD_Nama` varchar(50) NOT NULL,
  `KKD_NIK` varchar(20) NOT NULL,
  `KKD_Jk` enum('L','P') NOT NULL,
  `KKD_TmpLahir` varchar(50) NOT NULL,
  `KKD_TglLahir` date NOT NULL,
  `KKD_Agama` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDHA') NOT NULL,
  `KKD_Pendidikan` varchar(10) NOT NULL,
  `KKD_Pekerjaan` varchar(20) NOT NULL,
  `KKD_UpdateID` tinyint(4) NOT NULL,
  `KKD_UpdateTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kk_detail`
--

INSERT INTO `tb_kk_detail` (`KKD_ID`, `KKD_IdHeader`, `KKD_Nama`, `KKD_NIK`, `KKD_Jk`, `KKD_TmpLahir`, `KKD_TglLahir`, `KKD_Agama`, `KKD_Pendidikan`, `KKD_Pekerjaan`, `KKD_UpdateID`, `KKD_UpdateTime`) VALUES
(2, 1, 'Desal Isra', '3173082808971001', 'L', 'Bekasi', '1997-08-28', 'ISLAM', 'SMK', 'Karyawan Swasta', 1, '2021-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk_header`
--

CREATE TABLE `tb_kk_header` (
  `KKH_ID` tinyint(4) NOT NULL,
  `KKH_NoKK` varchar(20) NOT NULL,
  `KKH_KepalaKK` varchar(50) NOT NULL,
  `KKH_Tlp` varchar(15) NOT NULL,
  `KKH_Alamat` text NOT NULL,
  `KKH_DomisiliYN` enum('Y','N') NOT NULL,
  `KKH_Status` char(1) DEFAULT NULL,
  `KKH_UpdateID` tinyint(4) NOT NULL,
  `KKH_UpdateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kk_header`
--

INSERT INTO `tb_kk_header` (`KKH_ID`, `KKH_NoKK`, `KKH_KepalaKK`, `KKH_Tlp`, `KKH_Alamat`, `KKH_DomisiliYN`, `KKH_Status`, `KKH_UpdateID`, `KKH_UpdateTime`) VALUES
(1, '3173082808971001', 'Desal Israa', '085216534729', 'Jl. Kavling No 41 A', 'Y', 'C', 1, '2021-08-09 16:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `Surat_ID` tinyint(4) NOT NULL,
  `Surat_Numb` varchar(20) NOT NULL,
  `Surat_IdKKD` tinyint(4) NOT NULL,
  `Surat_Keperluan` varchar(100) NOT NULL,
  `Surat_Pengajuan` tinyint(4) NOT NULL,
  `Surat_TglPengajuan` datetime NOT NULL,
  `Surat_PrintYN` enum('Y','N') NOT NULL,
  `Surat_UpdateID` tinyint(4) NOT NULL,
  `Surat_UpdateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`Surat_ID`, `Surat_Numb`, `Surat_IdKKD`, `Surat_Keperluan`, `Surat_Pengajuan`, `Surat_TglPengajuan`, `Surat_PrintYN`, `Surat_UpdateID`, `Surat_UpdateTime`) VALUES
(1, '001/SRT/VIII/2021', 2, 'Pembuatan KTP', 1, '2021-08-21 10:05:26', 'Y', 1, '2021-08-24 19:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `User_Id` tinyint(4) NOT NULL,
  `User_Email` varchar(50) DEFAULT NULL,
  `User_Username` varchar(50) NOT NULL,
  `User_Password` text NOT NULL,
  `User_Akses` enum('ADMIN','OPRATION','USER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`User_Id`, `User_Email`, `User_Username`, `User_Password`, `User_Akses`) VALUES
(1, 'desalisra48@gmail.com', 'DESAL ISRA', '59e07474a9058e1b169bde5363e291ea', 'USER'),
(2, 'admin@mail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN'),
(3, 'oprator@mail.com', 'opration', 'e10adc3949ba59abbe56e057f20f883e', 'OPRATION'),
(6, 'efriza@mail.com', 'EFRIZA', 'e10adc3949ba59abbe56e057f20f883e', 'USER'),
(7, 'efriza@mail.com', 'Efriza', 'e10adc3949ba59abbe56e057f20f883e', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `Visimisi_ID` tinyint(4) NOT NULL,
  `Visimisi_Visi` text NOT NULL,
  `Visimisi_Misi` text NOT NULL,
  `Visimisi_UpdateId` tinyint(4) NOT NULL,
  `Visimisi_UpdateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`Visimisi_ID`, `Visimisi_Visi`, `Visimisi_Misi`, `Visimisi_UpdateId`, `Visimisi_UpdateTime`) VALUES
(1, 'Membuat lingkungan tempat tinggal  yang  aman serta kerukunan antar warga yang nyaman serta adil dan menjadikan pelayanan masyarakat yang cepat dan transparan', '1. Menjalin kerukunan antar warga, umat beragama dan bernegara\r\n\r\n2. Menjalin Kerjasama dalam menjaga dan memelihara kebersihan dan keamanan lingkungan.\r\n\r\n3. Santun dalam menghadapi suatu persoalan yang dihadapi dari Internal maupun Eksternal.\r\n\r\n4. Bersifat Objektif dan Transparan dalam pengelolahan administratif\r\n\r\n5. Memfasilitasi keinginan warga dalam berbagai kegiatan social.\r\n\r\n6. Meningkatkan mutu pelayanan warga dalam hal administrasi kependudukan.\r\n\r\n7. Menggali potensi warga untuk pemberdayaan dan peningkatan ekonomi warga.\r\n\r\n8. Siap melaksanakan program-program yang dilontarkan pemerintah Provinsi Banten melalui Pemerintah Kelurahan Larangan Utara.', 2, '2021-08-26 13:08:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`Berita_Id`),
  ADD KEY `Berita_UpdateId` (`Berita_UpdateId`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`Transaksi_ID`),
  ADD KEY `Transaksi_UpdateId` (`Transaksi_UpdateId`);

--
-- Indexes for table `tb_kk_detail`
--
ALTER TABLE `tb_kk_detail`
  ADD PRIMARY KEY (`KKD_ID`),
  ADD KEY `KKD_IdHeader` (`KKD_IdHeader`),
  ADD KEY `KKD_UpdateID` (`KKD_UpdateID`);

--
-- Indexes for table `tb_kk_header`
--
ALTER TABLE `tb_kk_header`
  ADD PRIMARY KEY (`KKH_ID`),
  ADD KEY `KKH_UpdateID` (`KKH_UpdateID`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`Surat_ID`),
  ADD UNIQUE KEY `Surat_Pengajuan` (`Surat_Pengajuan`),
  ADD KEY `Surat_UpdateID` (`Surat_UpdateID`),
  ADD KEY `Surat_IdKKD` (`Surat_IdKKD`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`Visimisi_ID`),
  ADD KEY `Visimisi_UpdateId` (`Visimisi_UpdateId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `Berita_Id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `Transaksi_ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kk_detail`
--
ALTER TABLE `tb_kk_detail`
  MODIFY `KKD_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kk_header`
--
ALTER TABLE `tb_kk_header`
  MODIFY `KKH_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `Surat_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `User_Id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `Visimisi_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`Berita_UpdateId`) REFERENCES `tb_users` (`User_Id`);

--
-- Constraints for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD CONSTRAINT `tb_keuangan_ibfk_1` FOREIGN KEY (`Transaksi_UpdateId`) REFERENCES `tb_users` (`User_Id`);

--
-- Constraints for table `tb_kk_detail`
--
ALTER TABLE `tb_kk_detail`
  ADD CONSTRAINT `tb_kk_detail_ibfk_1` FOREIGN KEY (`KKD_IdHeader`) REFERENCES `tb_kk_header` (`KKH_ID`);

--
-- Constraints for table `tb_kk_header`
--
ALTER TABLE `tb_kk_header`
  ADD CONSTRAINT `tb_kk_header_ibfk_1` FOREIGN KEY (`KKH_UpdateID`) REFERENCES `tb_users` (`User_Id`);

--
-- Constraints for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD CONSTRAINT `tb_surat_ibfk_1` FOREIGN KEY (`Surat_UpdateID`) REFERENCES `tb_users` (`User_Id`),
  ADD CONSTRAINT `tb_surat_ibfk_2` FOREIGN KEY (`Surat_IdKKD`) REFERENCES `tb_kk_detail` (`KKD_ID`);

--
-- Constraints for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD CONSTRAINT `tb_visimisi_ibfk_1` FOREIGN KEY (`Visimisi_UpdateId`) REFERENCES `tb_users` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
