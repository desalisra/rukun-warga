-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 12:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
(1, 'Administrator', 'admin@telkom.com', '21232f297a57a5a743894a0e4a801fc3', 'default.gif'),
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '100_5_fd533725.jpg');

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
(4, 'GULAT PPDB DI SMK PARIWISATA TELKOM BOGOR', '<p>Kepsek SMK Par Bandung Mengajak Orang Tua menjadi Generasi Connected</p><p>Pagi ini bukan hari Sabtu yang biasa karena halaman sekolah sudah ramai sejak pagi. Kendaraan orang tua calon siswa dan siswa-siswa yang bertugas sebagai penerima tamu telah sibuk hilir mudik mengantarkan orang tua calon siswa &nbsp;ke aula.</p><p>Di hadapan para orang tua Kepala Sekolah Bapak Sunarya, SE mengaku bahwa semasa sekolah beliau bukanlah murid yang pandai dan patuh bahkan beberapa kali tidak naik kelas. Kepada para calon siswa Kepala Sekolah yang juga pegawai Telkom ini menegaskan bahwa untuk berhasil tidak perlu benilai bagus cukup punya semangat dan kemampuan untuk menerima segala tantangan.</p><p>Saat ini pilihan SMA atau SMK akan menjadi dilemma bagi orang tua. Sekolah mengarahkan siswa-siswa pandai yang selalu dalam rangking dibawah sebelas tak akan cemas lanjut ke SMA kemudian kuliah. Namun orang tua yang memiliki putra-putri rangking di atas 11 perlu memiliki strategi agar anaknya berhasil. Pilihan SMK akan menjadi alternatif. SMK mengatur belajar dalam kelas 30% sedangkan 70% lebih banyak ketrampilan. SMK lebih mengarahkan siswa untuk otak kanannya yaitu intuisi dan kreativitas.</p><p>Orang Tua &amp; Bonus Denografi</p><p>Orang tua juga diajak oleh kepala sekolah untuk mendalami karakter generasi Z yang memiliki 7 karakter yaitu Memiliki ambisi untuk sukses, Berperilaku instan, Cinta kebebasan, Percaya Diri, Menyukai hal detail, Keinginan selalu dapat pengakuan dan Mindset Digital &amp; Teknologi Informasi. &nbsp;Kesenjangan komunikasi sering &nbsp;terjadi antara orang tua (generasi x) dan siswa (generasi Z). Dengan bekal memahami 7 karakter tersebut diharapkan orang tua akan mampu menjembatani kesenjangan tersebut. Berperan sebagai Generasi Connected akan menjadi solusi orang tua mengantarkan anak-anak memenangkan Bonus Demografi.</p><p>Bonus Demografi akan terjadi di Indonesia pada rentang waktu tahun 2020 s/d 2030. Pada tahun tersebut rasio kelompok usis produktif dengan yang tidak produktif mencapai lebih dari dua kali (100/44). Singkatnya selama terjadi bonus demografi tersebut komposisi penduduk Indonesia didominasi oleh kelompok usia produktif yang bakal menjadi medsi pendorong pertumbuhan ekonomi. Untuk bisa memanfaatkan peluang bonus demografi, anak-anak yang saat ini usia belasan tahun harus menempa dirinya menjadi sosok generasi masa depan yang disebut Generasi Pencipta dan merekalah yang nanti akan menjadi penentu nasib bangsa. Diharapkan generasi penentu itu harus memiliki 4 C : Curiosity, critical thinking, collaboration dan creating. (Yuswohady -Managing Pathner Inventure dari Ekonomy.okezone.com)</p><p>Ada 30 siswa yang ikut tes pada gelombang 2 &nbsp;Tahap 1 ini . Dari &nbsp;sebelumnya (Gelombang I) telah tercatat 52 positif telah diterima dan siap ikut pembelajaran &nbsp;di tahun Ajaran 2019/2020 di SMK Pariwisata Telkom. Pengaturan pentahapan dalam PPDB dilakukan sekolah agar bias lebih selektif dan ada komunikasi antara orang tua dengan sekolah sebelumnya untuk menghindari salah pilih minat siswa. (BR)</p>', 'no-image.svg', '2019-04-18 17:58:49'),
(5, 'Berbagi Kepsek SMK Pariwisata Bandungtentang Agility Guru', '<p>Selasa siang di SMK PARTEL &nbsp;Bandung Jl. Palasari &nbsp;No. 1 Bandung, guru-guru TK Telkom Buah Batu mendapat banyak sharing dari Kepala Sekolah SMK PRTEL Bandung – Bapak Sunarya. Dalam sharingnya Kepsek ini menyarankan agar para guru lebih &nbsp;memberikan kesempatan berimajinasi kepada Gen Alpha. &nbsp;Gen Alpha adalah generasi yang saat ini &nbsp;usianya di bawah 7 (tujuh) tahun generasi ini &nbsp;termasuk di dalamnya adalah siswa-siswa TK .</p><p>Berikan Anak Peluang Berimajinasi</p><p>Dengan memberikan peluang untuk berimajinasi akan menekan karakteristik negatif yang ditemukan pada Gen Alpha. &nbsp;Karakteristik negatif gen ini adalah tak suka berbagi,komunikasi kurang dan dimanja &nbsp;orangtua. Sedangkan karakteristik positif adalah dominan, &nbsp;teknologi, tak suka belanja di toko dan berjiwa enterpreneur. &nbsp;Kemampuan anak berimajinasi akan mengantarkan anak menjadi pemikir kreatif yang amat bermanfaat bagi tumbuh kembang anak dimasa depan sehingga anak akan mampu menghadapi dan mencari solusi atas setiap permasalahan yang dihadapi kelak.</p><p>Berbekal pengetahuan tersebut para guru TK dapat mengemas pembelajaran yang bisa menunbuhkan imajinasi anak. Imajinasi ini akan membuat anak terampil bersosialisasi dan berkomunikasi, membuat anak mampu berpikir kreatif dan menganalisa, memperkaya pengetahuan anak, membuat anak lebih percaya diri, mandiri dan mampu bersaing serta memunculkan bakat anak.</p><p>&nbsp;</p><p><strong>Penguatan Agility</strong></p><p>Pada kesempatan yang sama Kepala SMK Pariwisata Telkom Bandung ini selain mensosialisasikan program-program YPT seperti CCP juga memberikan motivasi kepada para guru yaitu tentang &nbsp;Agility atau kelincahan yaitu kemampuan seseorang untuk mengubah arah dan posisi sesuai situasi yang dikehendaki atau dihadapi &nbsp;dengan cara &nbsp;secepat mungkin. Dalam praktek di sekolah adalah &nbsp;kemampuan guru dalam menjawab semua tantangan pekerjaan atau penugasan yang tidak pilih-pilih &nbsp;dan selalu siap dalam segala kondisi. Kemampuan ini akan &nbsp;mendorong seorang guru untuk kreatif dan bekerja tidak hanya sesuai yang yang&nbsp;<strong>Dibutuhkan, Dinginkan</strong> namun lebih tinggi tingkatnya menjadi&nbsp;<strong>Diharapkan&nbsp;</strong>sehingga bisa memberikan Service yang Excellence.Terima kasih Pak Narya (BR)</p>', 'no-image.svg', '2019-04-17 00:02:02'),
(6, 'Berbagi Kepsek SMK Pariwisata Bandungtentang Agility Guru', '<p>Selasa siang di SMK PARTEL &nbsp;Bandung Jl. Palasari &nbsp;No. 1 Bandung, guru-guru TK Telkom Buah Batu mendapat banyak sharing dari Kepala Sekolah SMK PRTEL Bandung – Bapak Sunarya. Dalam sharingnya Kepsek ini menyarankan agar para guru lebih &nbsp;memberikan kesempatan berimajinasi kepada Gen Alpha. &nbsp;Gen Alpha adalah generasi yang saat ini &nbsp;usianya di bawah 7 (tujuh) tahun generasi ini &nbsp;termasuk di dalamnya adalah siswa-siswa TK .</p><p><strong>Berikan Anak Peluang Berimajinasi</strong></p><p>Dengan memberikan peluang untuk berimajinasi akan menekan karakteristik negatif yang ditemukan pada Gen Alpha. &nbsp;Karakteristik negatif gen ini adalah tak suka berbagi,komunikasi kurang dan dimanja &nbsp;orangtua. Sedangkan karakteristik positif adalah dominan, &nbsp;teknologi, tak suka belanja di toko dan berjiwa enterpreneur. &nbsp;Kemampuan anak berimajinasi akan mengantarkan anak menjadi pemikir kreatif yang amat bermanfaat bagi tumbuh kembang anak dimasa depan sehingga anak akan mampu menghadapi dan mencari solusi atas setiap permasalahan yang dihadapi kelak.</p><p>Berbekal pengetahuan tersebut para guru TK dapat mengemas pembelajaran yang bisa menunbuhkan imajinasi anak. Imajinasi ini akan membuat anak terampil bersosialisasi dan berkomunikasi, membuat anak mampu berpikir kreatif dan menganalisa, memperkaya pengetahuan anak, membuat anak lebih percaya diri, mandiri dan mampu bersaing serta memunculkan bakat anak.</p><p>&nbsp;</p><p><strong>Penguatan Agility</strong></p><p>Pada kesempatan yang sama Kepala SMK Pariwisata Telkom Bandung ini selain mensosialisasikan program-program YPT seperti CCP juga memberikan motivasi kepada para guru yaitu tentang &nbsp;Agility atau kelincahan yaitu kemampuan seseorang untuk mengubah arah dan posisi sesuai situasi yang dikehendaki atau dihadapi &nbsp;dengan cara &nbsp;secepat mungkin. Dalam praktek di sekolah adalah &nbsp;kemampuan guru dalam menjawab semua tantangan pekerjaan atau penugasan yang tidak pilih-pilih &nbsp;dan selalu siap dalam segala kondisi. Kemampuan ini akan &nbsp;mendorong seorang guru untuk kreatif dan bekerja tidak hanya sesuai yang yang&nbsp;<strong>Dibutuhkan, Dinginkan</strong> namun lebih tinggi tingkatnya menjadi&nbsp;<strong>Diharapkan&nbsp;</strong>sehingga bisa memberikan Service yang Excellence.Terima kasih Pak Narya (BR)</p>', 'no-image.svg', '2019-04-17 14:49:01'),
(7, 'Berbagi Kepsek SMK Pariwisata Bandungtentang Agility Guru', '<p>Selasa siang di SMK PARTEL &nbsp;Bandung Jl. Palasari &nbsp;No. 1 Bandung, guru-guru TK Telkom Buah Batu mendapat banyak sharing dari Kepala Sekolah SMK PRTEL Bandung – Bapak Sunarya. Dalam sharingnya Kepsek ini menyarankan agar para guru lebih &nbsp;memberikan kesempatan berimajinasi kepada Gen Alpha. &nbsp;Gen Alpha adalah generasi yang saat ini &nbsp;usianya di bawah 7 (tujuh) tahun generasi ini &nbsp;termasuk di dalamnya adalah siswa-siswa TK .</p><p><strong>Berikan Anak Peluang Berimajinasi di malam hari</strong></p><p>Dengan memberikan peluang untuk berimajinasi akan menekan karakteristik negatif yang ditemukan pada Gen Alpha. &nbsp;Karakteristik negatif gen ini adalah tak suka berbagi,komunikasi kurang dan dimanja &nbsp;orangtua. Sedangkan karakteristik positif adalah dominan, &nbsp;teknologi, tak suka belanja di toko dan berjiwa enterpreneur. &nbsp;Kemampuan anak berimajinasi akan mengantarkan anak menjadi pemikir kreatif yang amat bermanfaat bagi tumbuh kembang anak dimasa depan sehingga anak akan mampu menghadapi dan mencari solusi atas setiap permasalahan yang dihadapi kelak.</p><p>Berbekal pengetahuan tersebut para guru TK dapat mengemas pembelajaran yang bisa menunbuhkan imajinasi anak. Imajinasi ini akan membuat anak terampil bersosialisasi dan berkomunikasi, membuat anak mampu berpikir kreatif dan menganalisa, memperkaya pengetahuan anak, membuat anak lebih percaya diri, mandiri dan mampu bersaing serta memunculkan bakat anak.</p><p>&nbsp;</p><p><strong>Penguatan Agility</strong></p><p>Pada kesempatan yang sama Kepala SMK Pariwisata Telkom Bandung ini selain mensosialisasikan program-program YPT seperti CCP juga memberikan motivasi kepada para guru yaitu tentang &nbsp;Agility atau kelincahan yaitu kemampuan seseorang untuk mengubah arah dan posisi sesuai situasi yang dikehendaki atau dihadapi &nbsp;dengan cara &nbsp;secepat mungkin. Dalam praktek di sekolah adalah &nbsp;kemampuan guru dalam menjawab semua tantangan pekerjaan atau penugasan yang tidak pilih-pilih &nbsp;dan selalu siap dalam segala kondisi. Kemampuan ini akan &nbsp;mendorong seorang guru untuk kreatif dan bekerja tidak hanya sesuai yang yang&nbsp;<strong>Dibutuhkan, Dinginkan</strong> namun lebih tinggi tingkatnya menjadi&nbsp;<strong>Diharapkan&nbsp;</strong>sehingga bisa memberikan Service yang Excellence.Terima kasih Pak Narya (BR)</p>', 'no-image.svg', '2019-04-18 17:48:41'),
(8, 'Berbagi Kepsek SMK Pariwisata Bandungtentang Agility Guru', '<p>Selasa siang di SMK PARTEL &nbsp;Bandung Jl. Palasari &nbsp;No. 1 Bandung, guru-guru TK Telkom Buah Batu mendapat banyak sharing dari Kepala Sekolah SMK PRTEL Bandung – Bapak Sunarya. Dalam sharingnya Kepsek ini menyarankan agar para guru lebih &nbsp;memberikan kesempatan berimajinasi kepada Gen Alpha. &nbsp;Gen Alpha adalah generasi yang saat ini &nbsp;usianya di bawah 7 (tujuh) tahun generasi ini &nbsp;termasuk di dalamnya adalah siswa-siswa TK .</p><p><strong>Berikan Anak Peluang Berimajinasi di siang hari</strong></p><p>Dengan memberikan peluang untuk berimajinasi akan menekan karakteristik negatif yang ditemukan pada Gen Alpha. &nbsp;Karakteristik negatif gen ini adalah tak suka berbagi,komunikasi kurang dan dimanja &nbsp;orangtua. Sedangkan karakteristik positif adalah dominan, &nbsp;teknologi, tak suka belanja di toko dan berjiwa enterpreneur. &nbsp;Kemampuan anak berimajinasi akan mengantarkan anak menjadi pemikir kreatif yang amat bermanfaat bagi tumbuh kembang anak dimasa depan sehingga anak akan mampu menghadapi dan mencari solusi atas setiap permasalahan yang dihadapi kelak.</p><p>Berbekal pengetahuan tersebut para guru TK dapat mengemas pembelajaran yang bisa menunbuhkan imajinasi anak. Imajinasi ini akan membuat anak terampil bersosialisasi dan berkomunikasi, membuat anak mampu berpikir kreatif dan menganalisa, memperkaya pengetahuan anak, membuat anak lebih percaya diri, mandiri dan mampu bersaing serta memunculkan bakat anak.</p><p>&nbsp;</p><p><strong>Penguatan Agility</strong></p><p>Pada kesempatan yang sama Kepala SMK Pariwisata Telkom Bandung ini selain mensosialisasikan program-program YPT seperti CCP juga memberikan motivasi kepada para guru yaitu tentang &nbsp;Agility atau kelincahan yaitu kemampuan seseorang untuk mengubah arah dan posisi sesuai situasi yang dikehendaki atau dihadapi &nbsp;dengan cara &nbsp;secepat mungkin. Dalam praktek di sekolah adalah &nbsp;kemampuan guru dalam menjawab semua tantangan pekerjaan atau penugasan yang tidak pilih-pilih &nbsp;dan selalu siap dalam segala kondisi. Kemampuan ini akan &nbsp;mendorong seorang guru untuk kreatif dan bekerja tidak hanya sesuai yang yang <strong>Dibutuhkan, Dinginkan</strong> namun lebih tinggi tingkatnya menjadi <strong>Diharapkan&nbsp;</strong>sehingga bisa memberikan Service yang Excellence.Terima kasih Pak Narya (BR)</p>', 'no-image.svg', '2019-04-18 17:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_jurusan`
--

CREATE TABLE `tb_detail_jurusan` (
  `id_detailJurusan` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `deskripsi_jurusan` text NOT NULL,
  `kompetensi_jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_jurusan`
--

INSERT INTO `tb_detail_jurusan` (`id_detailJurusan`, `jurusan_id`, `deskripsi_jurusan`, `kompetensi_jurusan`) VALUES
(1, 1, '<p><strong>Definisi</strong> Teknik Transmisi Telekomunikasi adalah : “ Suatu disiplin ilmu yang membahas semua aspek teknologi dan implementasi penyampaian informasi dan pengendali dengan menggunakan media fiber optik, gelombang elektromagnetik, radio microwave, dan satelit. Kompetensi Keahlian Teknik Transmisi Telekomunikasi (TRA) didirikan sejak tahun 2000. Teknik Transmisi Telekomunikasi merupakan salah satu kompetensi keahlian dalam program keahlian Teknik Telekomunikasi, yang merupakan bagian dari bidang keahlian Teknologi Informasi dan Komunikasi yang secara khusus mempelajari tentang teknologi dan implementasi Transmisi Telekomunikasi.</p>', '<p>Memiliki kemampuan dasar perakitan, pemrograman dan jaringan komputer.\r\nMemiliki kemampuan dasar teknologi sistem jaringan Fiber Optik, meliputi perencanaan jaringan, instalasi, operasi dan pemeliharaan\r\nMemiliki kemampuan dasar teknologi sistem jaringan Radio Microwave, meliputi instalasi, operasi dan pemeliharaan.\r\nemiliki kemampuan dasar sistem teknologi Satellite, meliputi instalasi, operasi dan pemeliharaan.\r\nMemiliki kemampuan dasar sistem Jaringan Seluler dan Wireless Broadband meliputi instalasi operasi dan pemeliharaan.\r\nMemiliki pengetahuan pengelolaan projek tentang jaringan transmisi telekomunikasi.\r\nMemiliki pengetahuan tentang Teknologi Broadcasting beserta Media Informasinya.</p>'),
(2, 2, 'Pengertian Teknik Jaringan Akses adalah : “ Suatu disiplin ilmu yang membahas semua aspek teknologi dan implementasi penyampaian informasi dan data sampai dengan ke terminal pengguna dengan menggunakan media logam, fiber optik, gelombang elektromagnetik, radio microwave dan satelite.\r\n\r\nKompetensi Keahlian Teknik Jaringan Akses (TJA) didirikan sejak tahun 2000. Teknik Jaringan Akses merupakan salah satu kompetensi keahlian dalam teknologi, yang mempelajari proses penyampaian informasi dan data sampai dengan terminal pengguna baik dengan menggunakan kabel maupun gelombang radio.', 'Memiliki kemampuan dasar perakitan, pemrograman dan jaringan komputer.\r\nMemiliki kemampuan dasar teknologi sistem jaringan Fiber to The Home, meliputi perencanaan jaringan, instalasi, operasi dan pemeliharaan\r\nMemiliki kemampuan dasar teknologi sistem jaringan Wireless Access /Radio Akses , meliputi instalasi, operasi dan pemeliharaan.\r\nMemiliki kemampuan dasar sistem teknologi VSAT, meliputi instalasi, operasi dan pemeliharaan.\r\nMemiliki kemampuan dasar sistem Jaringan Seluler dan Wireless Broadband dan terminalnya meliputi instalasi operasi dan pemeliharaan.\r\nMemiliki pengetahuan pengelolaan projek tentang jaringan akses telekomunikasi.\r\nMemiliki pengetahuan tentang Teknologi Broadcasting beserta Media Informasinya.'),
(3, 3, 'Pengertian Teknik Komputer Jaringan (Computer NetworkEngineering) adalah : “Suatu disiplin ilmu yang membahas semua aspek teknologi dan implementasi jaringan komputer, pengendalian layanan pada jaringan komputer local dan internet, pengaturan perangkat jaringan wireline dan wireless.”\r\n\r\nKompetensi Keahlian Teknik Komputer Jaringan (TKJ) didirikan sejak tahun 2002. Teknik Jaringan Komputer merupakan salah satu kompetensi keahlian dalam program keahlian Teknologi Komputer dan Informatika, yang merupakan bagian dari bidang keahlian Teknologi Informasi dan Komunikasi yang secara khusus mempelajari tentang teknologi dan implementasi jaringan komputer.', 'Perakitan, Instalasi dan Trubleshoting Personal Komputer\r\nAlgoritma dan Pemrograman\r\nPemrograman berorientasi objek berbasis web dan android\r\nInstalasi perangkat dan sistem operasi jaringan computer\r\nKonfigurasi administrasi server berbasis Text dan GUI\r\nMengelola domain dan webserver'),
(4, 4, 'Pengertian Rekayasa Perangkat Lunak (SoftwareEngineering) adalah : “ Suatu disiplin ilmu yang membahas semua aspek produksi perangkat lunak, mulai dari tahap awal yaitu analisa kebutuhan pengguna, menentukan spesifikasi dari kebutuhan pengguna, design, pengkodean, pengujian sampai pemeliharaan sistem setelah digunakan.”\r\n\r\nKompetensi Keahlian Rekayasa Perangkat Lunak (RPL) didirikan sejak tahun 2014. Rekayasa Perangkat Lunak merupakan salah satu kompetensi keahlian dalam program keahlian Teknologi Komputer dan Informatika, yang merupakan bagian dari bidang keahlian Teknologi Informasi dan Komunikasi yang secara khusus mempelajari tentang pemrograman komputer.', 'Merakit Perangkat Komputer Personal, Menginstal Sistem Operasi dan Aplikasi\r\nMenerapkan Konsep Algoritma Pemrograman dan Konsep Perangkat Lunak\r\nMerancang Sistem Informasi / Business Process untuk membangun suatuSoftware / Aplikasi\r\nMembangun Software Aplikasi Berbasis Desktop, Web dan Mobile\r\nMembangun Software Aplikasi Basis Data'),
(5, 5, '<p>Belajar Design</p>', '<p>Belajar Belajar</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalur_ppdb`
--

CREATE TABLE `tb_jalur_ppdb` (
  `id_jalurPpdb` int(11) NOT NULL,
  `nama_jalurPpdb` varchar(50) NOT NULL,
  `des_jalurPpdb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jalur_ppdb`
--

INSERT INTO `tb_jalur_ppdb` (`id_jalurPpdb`, `nama_jalurPpdb`, `des_jalurPpdb`) VALUES
(1, 'Jalur PMDK', 'Syarat : – Lingkungan TELKOM Group , – Ada MoU / Kemitraan dengan SMP / SLTP yg sederajat , MoU menyatakan bahwa siswa tersebut minimal pernah sekali peringkat 10 besar (semester 1-4) dikelas yang dibuktikan dengan surat keterangan dari SMP asal. – Keluarga MOU / Kemitraan Dunia Industri Dunia Pendidikan -perusahaan kemitraan SMK Telkom ( Pendidikan (kemitraan perguruan tinggi , sltp) — Keluarga AKSATA (Keluarga Alumni)'),
(2, 'Jalur Prestasi', 'Syarat :Dibuktikan dengan prestasi siswa baik dibidang seni, sains, olahraga baik ditingkat kelas, sekolah, kelurahan, kecamatan, nasional yang dibuktikan dengan surat keterangan dari SMP asal atau pihak yang berwenang.'),
(3, 'Jalur Mandiri', 'jalur ini dengan tes akademis online + wawancara + psikotes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Transmisi'),
(2, 'Teknik Jaringan Akses'),
(3, 'Teknik Komputer Jaringan'),
(4, 'Rekayasa Prangkat Lunak'),
(5, 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ppdb`
--

CREATE TABLE `tb_ppdb` (
  `id_ppdb` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `namsiswa_ppdb` varchar(50) NOT NULL,
  `tmplahir_ppdb` varchar(50) NOT NULL,
  `tgllahir_ppdb` date NOT NULL,
  `jk_ppdb` enum('L','P') NOT NULL,
  `agaman_ppdb` varchar(50) NOT NULL,
  `namwali_ppdb` varchar(50) NOT NULL,
  `almtwali_ppdb` text NOT NULL,
  `tlp_ppdb` varchar(50) NOT NULL,
  `sekolah_ppdb` varchar(50) NOT NULL,
  `almtskolah_ppdb` text NOT NULL,
  `nsindo_ppdb` int(11) NOT NULL,
  `nuindo_ppdb` int(11) NOT NULL,
  `nsing_ppdb` int(11) NOT NULL,
  `nuing_ppdb` int(11) NOT NULL,
  `nsmtk_ppdb` int(11) NOT NULL,
  `numtk_ppdb` int(11) NOT NULL,
  `nsipa_ppdb` int(11) NOT NULL,
  `nuipa_ppdb` int(11) NOT NULL,
  `flag_ppdb` char(1) NOT NULL,
  `tgl_ppdb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ppdb`
--

INSERT INTO `tb_ppdb` (`id_ppdb`, `jurusan_id`, `namsiswa_ppdb`, `tmplahir_ppdb`, `tgllahir_ppdb`, `jk_ppdb`, `agaman_ppdb`, `namwali_ppdb`, `almtwali_ppdb`, `tlp_ppdb`, `sekolah_ppdb`, `almtskolah_ppdb`, `nsindo_ppdb`, `nuindo_ppdb`, `nsing_ppdb`, `nuing_ppdb`, `nsmtk_ppdb`, `numtk_ppdb`, `nsipa_ppdb`, `nuipa_ppdb`, `flag_ppdb`, `tgl_ppdb`) VALUES
(1, 3, 'Desal Isra', 'Bekasi', '2019-04-01', 'L', 'Islam', 'Surodi', 'Jl jalan', '0899664569298', '', 'Jl Joglo raya', 80, 75, 75, 70, 70, 65, 90, 80, 'N', '2019-04-21'),
(2, 4, 'Desal Isra', 'Bekasi', '2019-04-04', 'L', 'Islam', 'Surodi', 'Jl Jalan', '0899664569298', '', 'JL Joglo', 80, 75, 75, 70, 70, 65, 90, 80, 'N', '2019-04-21'),
(3, 1, 'Desal Isra', 'Bekasi', '2019-04-28', 'L', 'Islam', 'Surodi', 'Jl Jlan', '0899664569298', '', 'Jl Sendiri', 80, 75, 75, 70, 70, 65, 90, 0, 'N', '2019-04-21'),
(5, 3, 'Syifa Afifah', 'Bogor', '2019-04-04', 'P', 'Islam', 'mamat', 'Jl sendiri', '0899664569298', 'SMPN 11', 'Jalan jalan', 80, 85, 75, 80, 70, 65, 90, 80, 'N', '2019-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `srt_id` int(11) NOT NULL,
  `srt_noSurat` varchar(20) NOT NULL,
  `srt_nik` varchar(20) DEFAULT NULL,
  `srt_nama` varchar(50) DEFAULT NULL,
  `srt_tmpLahir` text DEFAULT NULL,
  `srt_tglLahir` date DEFAULT NULL,
  `srt_jk` enum('L','P') DEFAULT NULL,
  `srt_agama` varchar(10) DEFAULT NULL,
  `srt_alamat` text DEFAULT NULL,
  `srt_keperluan` varchar(100) DEFAULT NULL,
  `srt_tglPengajuan` datetime DEFAULT NULL,
  `srt_stsPrint` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`srt_id`, `srt_noSurat`, `srt_nik`, `srt_nama`, `srt_tmpLahir`, `srt_tglLahir`, `srt_jk`, `srt_agama`, `srt_alamat`, `srt_keperluan`, `srt_tglPengajuan`, `srt_stsPrint`) VALUES
(2, '001/SRT/V/2021', '9876543210002', 'Desta', 'bekasi', '2021-05-18', 'L', 'Islam', 'Jalan Jalan', 'Pembuatan KTP', '2021-05-18 11:05:53', 0);

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
(1, '<p>Mewujudkan SMK Telkom Jakarta sebagai Sekolah Menengah Kejuruan Unggulan yang menghasilkan tamatan yang memiliki kompetensi sesuai kebutuhan Industri Telekomunikasi dan Teknologi Informatika, professional, berakhlak mulia dan mampu melanjutkan ke jenjang pendidikan yang lebih tinggi</p>', '<p>1. Menyelenggarakan pendidikan dan pelatihan di Bidang Keahlian Teknologi Telekomunikasi dan Teknologi&nbsp;</p><p>2 . Komunikasi Informasi yang dinamis dan disiplin dengan menjunjung tinggi norma norma yang berlaku&nbsp;</p><p>3. &nbsp;Menerapkan Sistem Manajemen Mutu ISO 9001:2008 guna tercapainya peningkatan mutu penyelenggaraan dan</p><p>4. &nbsp;layanan pendidikan yang berkesinambungan\r\nMemberikan pelayanan terbaik kepada para siswa/I, orang tua/wali dan stake holder lainnya</p><p>5.&nbsp; Memberikan kesejahteraan dan kesempatan untuk meningkatkan kompetensi kepada Guru dan Karyawan/ti\r\nMeningkatkan peran serta masyarakat dalam penyelenggaraan pendidikan dan pengembangan sekolah</p>');

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
-- Indexes for table `tb_detail_jurusan`
--
ALTER TABLE `tb_detail_jurusan`
  ADD PRIMARY KEY (`id_detailJurusan`),
  ADD UNIQUE KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `tb_jalur_ppdb`
--
ALTER TABLE `tb_jalur_ppdb`
  ADD PRIMARY KEY (`id_jalurPpdb`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_ppdb`
--
ALTER TABLE `tb_ppdb`
  ADD PRIMARY KEY (`id_ppdb`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_detail_jurusan`
--
ALTER TABLE `tb_detail_jurusan`
  MODIFY `id_detailJurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jalur_ppdb`
--
ALTER TABLE `tb_jalur_ppdb`
  MODIFY `id_jalurPpdb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ppdb`
--
ALTER TABLE `tb_ppdb`
  MODIFY `id_ppdb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `srt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
