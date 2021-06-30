-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 08:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `pass_admin` text NOT NULL,
  `img_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `email_admin`, `pass_admin`, `img_admin`) VALUES
(3, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'default.gif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `post_berita` text NOT NULL,
  `img_berita` varchar(255) DEFAULT NULL,
  `tgl_berita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `post_berita`, `img_berita`, `tgl_berita`) VALUES
(2, 'Acara 17 Agustus 2020', '<p>17 Agustus adalah hari sakral yang biasanya kita rayakan disaat seperti ini</p><p>Akan tetapi tahun ini pandemi Covid-19 terjadi. Kegiatan masyarakat Indonesia lumpuh sejak Maret 2020 karena adanya pembatasan. Imbauan untuk tidak mengadakan lomba \"17 Agustusan\" pun muncul ke permukaan, Kota Bekasi, Kota Tangerang dan Solo merupakan beberapa di antaranya. Wali Kota Tangerang Arief Wismansyah mengeluarkan surat edaran terkait larangan berkerumun untuk memperingati Hari Kemerdekaan Republik Indonesia.</p><p>Imbauan larangan Surat bernomor 003.1/1793/HUMAS-PROTOKOL/2020 tersebut memuat sejumlah poin salah satunya yakni masyarakat diminta untuk meniadakan acara kegiatan yang sifatnya mengundang kerumunan, termasuk lomba-lomba 17 Agustus yang biasa dibuat oleh masyarakat untuk menyemarakkan peringatan HUT Kemerdekaan Republik Indonesia</p>', 'slide1.jpg', '2021-06-22 16:45:23'),
(3, 'PENGUMUMAN HARI RAYA IDUL ADHA 1441H', '<p>Idul Adha 1441 H</p><p><br></p><p>Nomor : 004/PAN-IdulAdhaRT02/RT04/2020 Tangerang, 11 Juli 2020</p><p>Lampiran : -</p><p>Perihal : Edaran Partisipasi Qurban Idul Adha 1441 H</p><p>Kepada Yth,</p><p>Ibu/Bapak/Saudara/i ______________________</p><p>Warga RT.02 RW.04</p><p>di Tempat</p><p>Assalamu’alaikum wa rahmatullahi wa barakatuh.</p><p>Syukur Alhamdulillah marilah kita panjatkan kehadirat Alloh SWT yang telah memberikan kenikmatan Islam kepada kita semua. Sholawat serta salam semoga tetap tercurah kepada Nabi Muhamad SAW beserta keluarganya, para sahabatnya dan semoga sampai kepada kita sebagai umatnya yang senantiasa istiqomah menjalankan syariatnya.</p><p>Teriring salam dan doa kami sampaikan semoga Bapak/Ibu/Sdr/i Warga RT.02 RW.04 Larangan Utara senantiasa dalam lindungan, rahmat, maghfiroh dan karunia rizki yang barokah dari Allah SWT.</p><p>Menyambut datangnya Hari Raya Idul Adha 1441 H atau yang Insya Alloh jatuh pada Minggu, 31 Juli 2020 dengan ini disampaikan bahwa Pengurus DKM Masjid Asy-Syifa telah membentuk Kepanitiaan Idul Adha 1441 H. yang bersedia dan siap untuk menerima serta menyalurkan hewan qurban dari Bapak/Ibu/Sdr/Sdri.</p><p>Oleh karena itu, dalam rangka ketertiban dan kenyamanan bersama dengan ini kami sampaikan hal – hal sebagai berikut : No. Kegiatan Keterangan</p><p><br></p><p>Batas Waktu Pendaftaran</p><p>Minggu, 31 Juli 2020</p><p><br></p><p>Biaya Pemotongan &amp; Perlengkapan.</p><p>Biaya Biaya Pemotongan &amp; Perlengkapan adalah biaya yang sifatnya WAJIB bagi seluruh Penqurban yang digunakan untuk operasional pemotongan dan distribusi hewan Qurban yaitu sebesar</p><p>A. SAPI sebesar Rp. 1.400.000,00 atau terbilang (#satu juta empat ratus ribu rupiah#) per 1 (satu) hewan Sapi atau sebesar Rp. 200.000,00 atau terbilang (#dua ratus ribu rupiah#) per 1/7 bagian hewan Sapi;</p><p>B. KAMBING sebesar Rp. 200.000,00 atau terbilang (#dua ratus ribu rupiah#) per 1 (satu) hewan Kambing.</p><p>C. Pembayaran biaya pemotongan dan perlengkapan bisa melalui :</p><p>Rekening BNI Syariah : xxxxxxxxx an. Efriza</p><p>Konfirmasi : +62 857-xxxx-xxxx</p><p><br></p><p>Panitia hanya menerima dan menyalurkan hewan qurban yang dibeli sendiri oleh penqurban.</p><p>Panitia tidak menyediakan hewan qurban.</p><p><br></p><p>Panitia tidak menyediakan tempat penitipan hewan qurban, sehingga penyerahan dan pengumpulan hewan qurban hanya dibuka maksimal H-1 yaitu hari Selasa tanggal 30 Juli 2020;</p><p>Lokasi Penyerahan Hewan Qurban Mandiri di area Masjid Asy-Syifa</p><p><br></p><p>Diharapkan kepada warga yang berqurban untuk dapat melaksanaan pemotongan hewan qurban atau dapat menyaksikannya pada hari Rabu, 31 Juli 2020 pukul 08.00 WIB di Masjid Al Asy-Syifa</p><p>Tanggal 31 Juli 2020, di Masjid Asy-Syifa sekitar pukul 08.00 WIB ba’da Shalat Ied.</p><p><br></p><p>Bilamana ada pertanyaan lebih lanjut mengenai hal-hal diatas, dapat menghubungi</p><p>1. Bapak Naryo (+62 815-1126-5002)</p><p>2. Bapak Arif Moh. Akbar (+62 811-1496-920 )</p><p>Demikian pemberitahuan ini disampaikan dari kami dalam bentuk edaran untuk disampaikan atas perhatian dan partisipasinya kami ucapkan terima kasih. Semoga Alloh SWT meridhoi amal ibadah kita sekalian. Amin.</p><p>Wassalamu’alaikum wa rahmatullahi waa barakaatuh.</p>', 'slide2.jpg', '2021-06-22 18:11:14'),
(4, 'PENGUMUMAN HARI RAYA IDUL FITRI 1441H', '<p>Kepada Yth.</p><p>Warga RT.02 RW.04</p><p>di tempat.</p><p><br></p><p>Assalaamu’alaikum warohmatullahi wabarokaatuh,</p><p>Puji syukur selalu kita panjatkan kehadirat Allah Swt atas nikmat &amp; rahmat NYA yang tercurah bagi kita semua, serta solawat berikut salam yang tak pernah kita lupakan bagi junjungan kita Nabiullah Muhammad SAW, semoga kita semua tergolong kepada pengikutnya yang memperoleh syafaat beliau di yaumil akhir kelak. Amin YRA.</p><p>Melaui surat ini, kami panitia kegiatan Ramadhan 1441 H RT.02 RW.04 akan mengadakan sejumlah kegiatan sebagai berikut :</p><p>1. Sholat tarawih (setiap malam selama bulan Ramadhan) dan kultum (pada malam Sabtu, Ahad &amp; tentative)</p><p>2. Tadarus Al Qur’an dan I’tikaf (10 malam terakhir di bulan Ramadhan &amp; akan disediakan hidangan sahur)</p><p>3. Kajian Ba’da Shubuh setiap Sabtu &amp; Ahad (Selama Bulan Ramadhan)</p><p>4. Pesantren Kilat untuk anak (Batas usia 5 – 11 Tahun).</p><p>5. Buka Puasa Bersama di Masjid Al Fattah (Selama bulan Ramadhan)</p><p>6. Penerimaan zakat fitrah hanya dalam bentuk Beras 2,5 kg atau 3,5 liter. Waktu penerimaan sejak hari pertama Ramadhan di Masjid Asy-Syifa</p><p>7. Sholat Idul Fitri</p><p>Sebagai informasi juga bahwa untuk Sholat Idul Fitri akan diadakan di Masjid Asy-Syifa pada pukul 06:30-7:30 WIB</p><p><br></p><p>Demikian surat ini kami sampaikan, kami berharap dengan adanya program ini, bisa menjadi momentum bagi kita untuk senantiasa memperbanyak amal ibadah kita selama Bulan Ramadhan &amp; bulan bulan berikutnya agar kita menjadi orang yang bertaqwa.</p><p><br></p><p>Atas perhatian dan kerjasama Bapak/Ibu/Sdr kami ucapkan terimakasih.</p><p>Wassalamu’alaikum warohmatullahi wabarokaatuh.</p>', 'idul_fitri.JPG', '2021-06-22 18:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_transaksi` int(11) NOT NULL,
  `penerima_transaksi` varchar(50) NOT NULL,
  `flag_transaksi` varchar(1) NOT NULL,
  `value_transaksi` int(11) NOT NULL,
  `keterangan_transaksi` varchar(255) NOT NULL,
  `tgl_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keuangan`
--

INSERT INTO `tb_keuangan` (`id_transaksi`, `penerima_transaksi`, `flag_transaksi`, `value_transaksi`, `keterangan_transaksi`, `tgl_transaksi`) VALUES
(1, 'Desal Isra', 'K', 30000, 'Iuran Kebersihan & Keamanan', '2021-06-20 10:16:41'),
(2, 'Desal Isra', 'D', 30000, 'Pembayaran Petugas Kebersihan & Keamanan', '2021-06-20 10:22:43'),
(3, 'Efriza', 'K', 100000, 'Iuran Kebersihan & Keamanan', '2021-06-20 10:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk_detail`
--

CREATE TABLE `tb_kk_detail` (
  `id_dkk` int(11) NOT NULL,
  `hid_dkk` int(11) NOT NULL,
  `nik_dkk` varchar(20) NOT NULL,
  `nama_dkk` varchar(50) NOT NULL,
  `jk_dkk` varchar(1) NOT NULL,
  `tmpLahir_dkk` varchar(20) NOT NULL,
  `tglLahir_dkk` date NOT NULL,
  `agama_dkk` varchar(10) NOT NULL,
  `pendidikan_dkk` varchar(20) NOT NULL,
  `pekerjaan_dkk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk_header`
--

CREATE TABLE `tb_kk_header` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `kepala_kk` varchar(50) NOT NULL,
  `telp_kk` varchar(15) NOT NULL,
  `alamat_kk` text NOT NULL,
  `domisili_kk` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `srt_id` int(11) NOT NULL,
  `srt_noSurat` varchar(20) NOT NULL,
  `srt_nik` varchar(20) DEFAULT NULL,
  `srt_nama` varchar(50) DEFAULT NULL,
  `srt_tmpLahir` text,
  `srt_tglLahir` date DEFAULT NULL,
  `srt_jk` enum('L','P') DEFAULT NULL,
  `srt_agama` varchar(10) DEFAULT NULL,
  `srt_alamat` text,
  `srt_keperluan` varchar(100) DEFAULT NULL,
  `srt_tglPengajuan` datetime DEFAULT NULL,
  `srt_stsPrint` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`srt_id`, `srt_noSurat`, `srt_nik`, `srt_nama`, `srt_tmpLahir`, `srt_tglLahir`, `srt_jk`, `srt_agama`, `srt_alamat`, `srt_keperluan`, `srt_tglPengajuan`, `srt_stsPrint`) VALUES
(1, '001/SRT/VI/2021', '123456789', 'camat', 'Bekasi', '1997-08-28', 'L', 'Islam', 'jl jalan', 'Pembuatan KTP', '2021-06-22 17:19:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi_visimisi` text NOT NULL,
  `misi_visimisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id_visimisi`, `visi_visimisi`, `misi_visimisi`) VALUES
(1, '<p>Membuat lingkungan tempat tinggal &nbsp;yang&nbsp; aman serta kerukunan antar warga yang nyaman serta adil dan menjadikan pelayanan masyarakat yang cepat dan transparan</p>', '<p>1. Menjalin kerukunan antar warga, umat beragama dan bernegara</p><p>2. Menjalin Kerjasama dalam menjaga dan memelihara kebersihan dan keamanan lingkungan.</p><p>3. Santun dalam menghadapi suatu persoalan yang dihadapi dari Internal maupun Eksternal.</p><p>4. Bersifat Objektif dan Transparan dalam pengelolahan administratif</p><p>5. Memfasilitasi keinginan warga dalam berbagai kegiatan social.</p><p>6. Meningkatkan mutu pelayanan warga dalam hal administrasi kependudukan.</p><p>7. Menggali potensi warga untuk pemberdayaan dan peningkatan ekonomi warga.</p><p>8. Siap melaksanakan program-program yang dilontarkan pemerintah Provinsi Banten melalui Pemerintah Kelurahan Larangan Utara.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_kk_detail`
--
ALTER TABLE `tb_kk_detail`
  ADD PRIMARY KEY (`id_dkk`),
  ADD KEY `hid_dkk` (`hid_dkk`);

--
-- Indexes for table `tb_kk_header`
--
ALTER TABLE `tb_kk_header`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`srt_id`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kk_detail`
--
ALTER TABLE `tb_kk_detail`
  MODIFY `id_dkk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kk_header`
--
ALTER TABLE `tb_kk_header`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `srt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kk_detail`
--
ALTER TABLE `tb_kk_detail`
  ADD CONSTRAINT `tb_kk_detail_ibfk_1` FOREIGN KEY (`hid_dkk`) REFERENCES `tb_kk_header` (`id_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
