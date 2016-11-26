-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 08:32 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `no` int(5) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`no`, `id_anggota`, `nama`, `jk`, `tgl_lahir`, `alamat`, `no_hp`) VALUES
(2, 168208, 'Jaka Permana', 'L', '1994-06-09', 'Tasik', '085861752536'),
(3, 168344, 'Asri Ginawati', 'P', '1994-05-12', 'Garut', '08987763675'),
(4, 168435, 'Syaiful Haq', 'L', '1995-09-02', 'Cengkareng, Jakarta Barat', '089654391561'),
(6, 168513, 'SIGIT WIDIYANTO', 'L', '2001-01-01', 'DEPOK', '081380321331'),
(7, 168710, 'Adit Sarjana', 'L', '1995-07-30', 'Pedongkelan', '082216835886'),
(8, 168832, 'Jaka Permana', 'L', '1994-05-27', 'bdg', '085861752536'),
(9, 168917, 'Abdul Azizi', 'L', '1995-03-04', 'Jakarta', '082299328390'),
(10, 1681026, 'Andhika Putra Abdi Pratam', 'L', '1995-02-13', 'Tangerang', '089609797691'),
(11, 1681137, 'Feggy', 'L', '1994-12-22', 'jl.blabla', '087783873390'),
(12, 1681240, 'santi', 'P', '1997-06-18', 'terserah', '087787098104'),
(13, 1681359, 'indra yuhandhi', 'L', '1994-10-16', 'Jakarta', '089669448149'),
(17, 1681759, 'Faisal ', 'L', '1995-01-11', 'Jakarta', '081220432669'),
(18, 1691828, 'Syaiful Haq', 'L', '1995-09-02', 'cengkareng', '-'),
(19, 1691930, 'cust omer', 'L', '1998-05-24', 'dimana', '089894792'),
(20, 1692024, 'Syaiful Haq Al Furuqi', 'L', '1995-09-02', 'Cirebon', '089654391561');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `stok` int(3) NOT NULL,
  `lokasi` enum('Rak 1','Rak 2','Rak 3','Rak 4','Rak 5','Rak 6','Rak 7','Rak 8','Rak 9') NOT NULL,
  `tgl_input` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `isbn`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `stok`, `lokasi`, `tgl_input`, `gambar`, `deskripsi`) VALUES
(1, '9786020291888', 'Mahasiswa Investor', 'William Hartanto', 'Elex Media Komputindo', '2016', 1, 'Rak 1', '2016-08-19', 'book-title-not-found_270x400.jpg', ''),
(2, '9786026991720', 'Strategi & Kupas Tuntas Skl Un SMA/MA Ips 2017 Sesuai Kisi-Kisi Terbaru', 'Tim Master Eduka', 'Magenta Media', '2016', 3, 'Rak 1', '2016-08-19', 'kupas tuntas.jpg', ''),
(3, '9786026991799', 'Top Prediksi UN SMP/MTS 2017', 'Tim Maestro Eduka', 'MAGENTA MEDIA', '2016', 4, 'Rak 1', '2016-08-09', 'top prediksi.jpg', ''),
(4, '9786026991805', 'Strategi Sukses UN SMA/MA IPA 2017', 'Tim Smart PLC', 'MAGENTA MEDIA', '2016', 5, 'Rak 1', '2016-08-08', 'strategi sukses.jpg', ''),
(5, '9786026772152', 'SPBM Superlengkap & Mudah Dipahami SMA/MA IPA Kelas XII 6 IN 1', 'Tim Master Guru', 'MAGENTA MEDIA', '2016', 4, 'Rak 1', '2016-08-08', 'spbm.jpg', ''),
(6, '9786023755448', 'Superbook Bahasa Inggris Smp/Mts 7, 8, 9', 'Tim Smart Nusantara', 'Grasindo', '2016', 4, 'Rak 1', '2016-08-08', 'superbook.jpg', ''),
(7, '9786023755134', 'Top Bank Soal-soal Sesuai Kisi-kisi UN SMA/MA IPA 2017', 'Tim Grasindo', 'Grasindo', '2016', 4, 'Rak 1', '2016-08-08', 'book-title-not-found_270x400.jpg', ''),
(8, '9789796201273', 'Trending Soal Biologi SMA/MA KELAS X, XI, & XII', 'Berliani Suparno Putri, Utaminingsih', 'CABE RAWIT', '2016', 4, 'Rak 1', '2016-08-08', 'trending soal.jpg', ''),
(9, '9786023755431', 'Superbook IPA SMP/MTS Kelas 7, 8, 9', 'Tim Smart Nusantara', 'Grasindo', '2016', 4, 'Rak 1', '2016-08-08', 'superbook2.jpg', ''),
(10, '9786020823188', 'FrameWork PHP Yii 2', 'Yosef Murya Kusuma Ardhana', 'Jasakom', '2016', 4, 'Rak 2', '2016-08-05', 'yii.jpg', ''),
(11, '9786020290157', 'Ragam Animasi Keren dengan 3D Studio Max', 'Jubilee Enterprise', 'Elex Media Komputindo', '2016', 3, 'Rak 2', '2016-08-05', 'ragam animasi.jpg', ''),
(12, '9786020290706', 'Membangun Aplikasi Bernilai Jutaan Rupiah dengan VB.Net', 'Uus Rusmawan', 'Elex Media Komputindo', '2016', 2, 'Rak 2', '2016-08-05', 'aplikasi berjuta.jpg', ''),
(13, '9786020291697', 'Trik Mudah Membuat CMS Website dari Nol', 'Jubilee Enterprise', 'Elex Media Komputindo', '2016', 3, 'Rak 2', '2016-08-05', 'book-title-not-found_270x400.jpg', ''),
(18, '9786020290768', 'Yakin Cuma Mau Jadi Karyawan Seumur Hidup?', 'RONALD LEONARDO', 'Elex Media Komputindo', '2016', 2, 'Rak 3', '2016-08-23', 'yakin mau.jpg', ''),
(19, '9786020288413', 'The Introvert Advantage - Berkembang dan Berhasil di Dunia Ekstrover ', 'Marti Olsen Laney, Psy. D', 'Elex Media Komputindo', '2016', 1, 'Rak 3', '2016-08-23', 'the introvert.jpg', ''),
(20, '9786024240912', 'Smarter Faster Better', 'Charles Duhigg', 'KPG', '2016', 2, 'Rak 3', '2016-08-23', 'smarter.jpg', ''),
(21, '9786020287980', 'Brave', 'Margie Warrell', 'Elex Media Komputindo', '2016', 2, 'Rak 3', '2016-08-24', 'brave.jpg', ''),
(25, '9786029498844', 'From Zero to Zero', 'Houtman Z. Arifin', 'Noura Books', '2014', 2, 'Rak 3', '2016-08-24', 'ea263b82d3c8e22ee98a3119d275650b.jpg', ''),
(26, '9786021306307', 'Path of Life', 'Komaruddin Hidayat', 'Noura Books', '2014', 2, 'Rak 3', '2016-08-24', '2a652e07deb084aa81b7dcf804d639f6.jpg', ''),
(27, '9786020308807', 'Novel Klasik: The Great Gatsby', 'F. Scott Fitzgerald', 'Gramedia Pustaka Utama', '2014', 1, 'Rak 4', '2016-08-24', '87984d7ea1e873e60da86d9378c57b79.jpg', ''),
(28, '9786027926257', 'Tafsir Wangsit Siliwangi dan Kebangkitan Nusantara', 'Enang Rokajat Asura', 'Imania', '2016', 1, 'Rak 5', '2016-08-24', '329df09399f51c9bd7d0708003799d46.jpg', ''),
(29, '9786022555551', 'Tokoh-Tokoh Dunia Yang Mempengaruhi Pemikiran Bung Karno', 'Sulaiman Effendi', 'FLASHBOOKS', '2014', 2, 'Rak 5', '2016-08-24', 'a3e93b065456859f9beac1b4f9836378.jpg', ''),
(30, '9786020279626', 'Konflik Bersejarah - Clash of Titans', 'Nino Oktorino', 'Elex Media Komputindo', '2016', 1, 'Rak 5', '2016-08-24', '8b824d6eec6392f507a4c98d5f9aacb6.jpg', ''),
(31, '9789799109699', 'Seri Tempo: Douwes Dekker', 'Tempo', 'KPG', '2015', 2, 'Rak 5', '2016-08-24', 'ce3a66c8b63a19b8a1436696e7e01b33.jpg', ''),
(32, '9789799109682', 'Seri Tempo: Agus Salim', 'Tempo', 'KPG', '2015', 2, 'Rak 5', '2016-08-24', '57792499c084fad43a6b4620be5dc1c8.jpg', ''),
(33, '9789799108975', 'Seri Tempo: Hatta', 'Tempo', 'KPG', '2015', 2, 'Rak 5', '2016-08-24', 'aa77d6eea500cc3fd10d474efffb6009.jpg', ''),
(34, '9789799108968', 'Seri Tempo: Sukarno', 'Tempo', 'KPG', '2015', 2, 'Rak 5', '2016-08-24', '02a33342b52a4a38ed5dad6424864b2d.jpg', ''),
(35, '9786020267135', 'Sejarah Dunia Kuno', 'Susan Wise Bauer', 'Elex Media Komputindo', '2015', 1, 'Rak 5', '2016-08-24', '907da3d9f07864207635f48bf3c3e39e.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id` int(5) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_kunjung` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id`, `id_anggota`, `nama`, `tgl_kunjung`) VALUES
(1, 168432, 'Syaiful Haq', '2016-08-19 02:37:14'),
(2, 168432, 'Syaiful Haq', '2016-08-01 02:37:14'),
(3, 168432, 'Syaiful Haq', '2016-08-12 02:37:14'),
(4, 168432, 'Syaiful Haq', '2016-08-13 02:37:14'),
(5, 168435, 'Syaiful', '2016-08-19 07:18:53'),
(6, 168710, 'Adit Sarjana', '2016-08-21 17:12:44'),
(7, 168832, 'Jaka Permana', '2016-08-21 17:34:45'),
(8, 168917, 'Abdul Azizi', '2016-08-22 01:20:19'),
(9, 1681026, 'Andhika Putra Abdi Pratam', '2016-08-22 04:29:37'),
(10, 1681240, 'santi', '2016-08-22 13:43:32'),
(11, 1681359, 'indra yuhandhi', '2016-08-22 14:02:55'),
(12, 1692024, 'Syaiful Haq Al Furuqi', '2016-09-07 15:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(5) NOT NULL,
  `id_anggota` int(7) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('Pinjam','Kembali') NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `id_anggota`, `nama`, `no_hp`, `judul`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(1, 168432, 'Syaiful Haq', '089654391561', 'FrameWork PHP Yii 2', '2016-08-01', '2016-08-08', 'Kembali', ''),
(2, 168432, 'Syaiful Haq', '089654391561', 'Ragam Animasi Keren dengan 3D Studio Max', '2016-08-12', '2016-08-19', 'Kembali', ''),
(3, 168432, 'Syaiful Haq', '089654391561', 'Ragam Animasi Keren dengan 3D Studio Max', '2016-08-13', '2016-08-20', 'Kembali', ''),
(4, 168432, 'Syaiful Haq', '089654391561', 'Top Bank Soal-soal Sesuai Kisi-kisi UN SMA/MA IPA 2017', '2016-08-12', '2016-08-19', 'Kembali', ''),
(5, 168432, 'Syaiful Haq', '089654391561', 'Strategi Sukses UN SMA/MA IPA 2017', '2016-08-19', '2016-09-02', 'Kembali', ''),
(6, 168157, 'Adit Sarjana', '082216835886', 'FrameWork PHP Yii 2', '2016-08-15', '2016-08-22', 'Kembali', ''),
(7, 168157, 'Adit Sarjana', '089654391561', 'Mahasiswa Investor', '2016-08-21', '2016-08-28', 'Kembali', ''),
(8, 168832, 'Jaka Permana', '085861752536', 'Ragam Animasi Keren dengan 3D Studio Max', '2016-08-15', '2016-08-22', 'Kembali', ''),
(9, 168917, 'Abdul Azizi', '082299328390', 'FrameWork PHP Yii 2', '2016-08-15', '2016-08-22', 'Kembali', ''),
(10, 1681359, 'indra yuhandhi', '089669448149', 'Top Prediksi UN SMP/MTS 2017', '2016-08-22', '2016-08-29', 'Kembali', ''),
(11, 168432, 'Syaiful Haq', '089654391561', 'Path of Life', '2016-09-02', '2016-09-09', 'Kembali', ''),
(12, 168432, 'Syaiful Haq', '089654391561', 'Path of Life', '2016-09-01', '2016-09-08', 'Pinjam', ''),
(13, 168432, 'Syaiful Haq', '089654391561', 'Path of Life', '2016-08-31', '2016-09-07', 'Kembali', ''),
(14, 168435, 'Syaiful Haq', '089654391561', 'Brave', '2016-09-08', '2016-09-15', 'Kembali', ''),
(15, 1691828, 'Syaiful Haq', '-', 'FrameWork PHP Yii 2', '2016-09-08', '2016-09-15', 'Kembali', ''),
(16, 1691930, 'cust omer', '089894792', 'Brave', '2016-09-08', '2016-09-15', 'Kembali', ''),
(17, 168917, 'Abdul Azizi', '082299328390', 'Strategi Sukses UN SMA/MA IPA 2017', '2016-09-08', '2016-09-15', 'Kembali', ''),
(18, 1691930, 'cust omer', '089894792', 'From Zero to Zero', '2016-09-03', '2016-09-10', 'Pinjam', ''),
(19, 1681759, 'Faisal ', '081220432669', 'Brave', '2016-09-01', '2016-09-09', 'Pinjam', ''),
(20, 1681759, 'Faisal ', '081220432669', 'Brave', '2016-09-08', '2016-09-13', 'Pinjam', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('Admin','Manajer','Pustakawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `alamat`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Cengkareng, Jakarta Barat', 'Admin'),
(3, 'manajer', 'manajer', '69b731ea8f289cf16a192ce78a37b4f0', 'manajer', 'Manajer'),
(4, 'pustakawan', 'pustakawan', '1fa3f5ae016e4b0691eb5c1b4fd9b951', 'full', 'Pustakawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
