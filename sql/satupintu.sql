-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 03:25 AM
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
-- Database: `satupintu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `namaAnggaran` int(11) NOT NULL,
  `uraianKegiatan` int(11) NOT NULL,
  `divisi` int(11) NOT NULL,
  `mak` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `pagu` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `closedcapa`
--

CREATE TABLE `closedcapa` (
  `noSuratCapa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `idFeedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `noSuratPeringatan` int(11) NOT NULL,
  `tanggal_feedback` int(11) NOT NULL,
  `closed` int(11) DEFAULT NULL,
  `noSuratFeedback` int(11) NOT NULL,
  `jenisFeedback` int(11) DEFAULT NULL,
  `idFeedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `idKendaraan` int(11) NOT NULL,
  `namaKendaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idKota` int(11) NOT NULL,
  `namaKota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lhk`
--

CREATE TABLE `lhk` (
  `noSuratTugas` int(11) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `jlhSaranaDiperiksaOleh` int(11) NOT NULL,
  `sppdDisahkanOleh` int(11) NOT NULL,
  `kwitansiDisahkanOleh` int(11) NOT NULL,
  `form8JamDisahkanOleh` int(11) NOT NULL,
  `urutanSarana` int(11) NOT NULL,
  `namaSarana` int(11) NOT NULL,
  `tglPemeriksaan` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `alasanTidakDiperiksa` int(11) NOT NULL,
  `isMk` int(11) DEFAULT NULL,
  `idSarana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `no_surat` int(11) NOT NULL,
  `sarana` text NOT NULL,
  `tgl_surat` date NOT NULL,
  `tanggal_timeline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`no_surat`, `sarana`, `tgl_surat`, `tanggal_timeline`) VALUES
(1, 'Apotek A', '2021-04-01', '2021-04-27'),
(2, 'Komplek Sarana 3', '2021-04-01', '2021-04-27'),
(3, 'Apotek B', '2021-04-01', '2021-04-30'),
(4, 'Komplek Sarana 4', '2021-04-01', '2021-04-30'),
(5, 'Apotek C', '2021-04-01', '2021-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peringatan`
--

CREATE TABLE `peringatan` (
  `namaSarana` varchar(20) NOT NULL,
  `tglPeringatan` date NOT NULL,
  `noSuratPeringatan` int(11) NOT NULL,
  `perihal` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `noTl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pj`
--

CREATE TABLE `pj` (
  `noSuratTugas` int(11) NOT NULL,
  `noKwitansi` int(11) NOT NULL,
  `namaPetugas` int(11) NOT NULL,
  `terbilang` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasidinkes`
--

CREATE TABLE `rekomendasidinkes` (
  `idRekomendasi` int(11) NOT NULL,
  `perihal` int(11) NOT NULL,
  `noSuratPeringatan` int(11) NOT NULL,
  `idFeedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rincianbiaya`
--

CREATE TABLE `rincianbiaya` (
  `noKwitansi` int(11) NOT NULL,
  `uraianBiaya` int(11) NOT NULL,
  `jenisBiaya` int(11) NOT NULL,
  `nominalBiaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `idSarana` int(11) NOT NULL,
  `namaSarana` int(11) NOT NULL,
  `alamatSarana` int(11) NOT NULL,
  `pemilik` int(11) NOT NULL,
  `noIzinSarana` int(11) NOT NULL,
  `penanggungJawab` int(11) NOT NULL,
  `noIzinPj` int(11) NOT NULL,
  `kategoriSarana` int(11) DEFAULT NULL,
  `jenisSarana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surattl`
--

CREATE TABLE `surattl` (
  `noTl` int(11) NOT NULL,
  `jenisTl` int(11) NOT NULL,
  `noSuratTugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

CREATE TABLE `surattugas` (
  `noSuratTugas` int(11) NOT NULL,
  `tglMulai` int(11) NOT NULL,
  `bebanBiaya` int(11) NOT NULL,
  `kendaraan` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `namaAnggaran` int(11) NOT NULL,
  `tglSelesai` int(11) NOT NULL,
  `maksud` int(11) NOT NULL,
  `namaPenandatangan` int(11) NOT NULL,
  `jabatanPenandatangan` int(11) NOT NULL,
  `idPetugas` int(11) NOT NULL,
  `namaPetugas` varchar(250) NOT NULL,
  `idPegawai` int(11) NOT NULL,
  `idKota` int(11) NOT NULL,
  `idKendaraan` int(11) NOT NULL,
  `mak` int(11) NOT NULL,
  `noKwitansi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_website`, `logo`, `favicon`, `email`, `no_telp`, `alamat`, `facebook`, `instagram`, `keywords`, `metatext`, `about`) VALUES
(1, 'e-SatuPintu', 'bpom.png', 'bpom.png', 'admin@susantokun.com', '081906515912', 'KOMPLEK BTN Munjul No.12A 02/06, Sukaresmi, Cianjur, Jawa Barat, Indonesia (43253)', 'https://facebook.com/susantokundotcom', 'https://instagram.com/susantokun', 'info-susantokun, demo-susantokun, susantokun', 'Situs Edukasi, Tips dan Tutorial', 'Susantokun adalah situs edukasi seperti pelajaran dan ilmu pengetahuan, serta membahas tentang tips, tutorial, teknologi, tugas-tugas hingga berita terkini.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Hak akses Administrator'),
(2, 'Member', 'Hak akses Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_reset_key` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activated`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '$2a$04$ibcmcj/R1dVzFpUIjiOiEeNqTgtk3FRAZxzuAA6a9KRCAkBppXdiG', '', 'Admin', 'E-SaTu', 'admin@mail.com', '081906515912', '1526456245974.png', 1, '2020-03-14 22:34:49', '2020-03-14 21:58:17', NULL),
(2, 2, 'petugas', '$2a$04$HInAaNmE/o40PBjHWIwnQuKCAg2cPYm4dE72SBAiiOxaZSpcSRsMi', '', 'Petugas', 'E-SaTu', 'member@mail.com', '081906515912', '1583991814826.png', 1, '2020-03-14 22:32:04', '2020-03-14 22:00:32', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_notif`
-- (See below for the actual view)
--
CREATE TABLE `view_notif` (
`no_surat` int(11)
,`sarana` text
,`tgl_surat` date
,`tanggal_timeline` date
,`timeline` int(7)
);

-- --------------------------------------------------------

--
-- Structure for view `view_notif`
--
DROP TABLE IF EXISTS `view_notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_notif`  AS SELECT `notif`.`no_surat` AS `no_surat`, `notif`.`sarana` AS `sarana`, `notif`.`tgl_surat` AS `tgl_surat`, `notif`.`tanggal_timeline` AS `tanggal_timeline`, to_days(`notif`.`tanggal_timeline`) - to_days(current_timestamp()) AS `timeline` FROM `notif` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`mak`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `closedcapa`
--
ALTER TABLE `closedcapa`
  ADD KEY `idFeedback` (`idFeedback`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`idFeedback`),
  ADD KEY `noSuratPeringatan` (`noSuratPeringatan`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`idKendaraan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `lhk`
--
ALTER TABLE `lhk`
  ADD PRIMARY KEY (`noSuratTugas`),
  ADD KEY `idSarana` (`idSarana`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `peringatan`
--
ALTER TABLE `peringatan`
  ADD PRIMARY KEY (`noSuratPeringatan`),
  ADD KEY `noTl` (`noTl`);

--
-- Indexes for table `pj`
--
ALTER TABLE `pj`
  ADD PRIMARY KEY (`noKwitansi`);

--
-- Indexes for table `rekomendasidinkes`
--
ALTER TABLE `rekomendasidinkes`
  ADD PRIMARY KEY (`idRekomendasi`),
  ADD KEY `noSuratPeringatan` (`noSuratPeringatan`),
  ADD KEY `idFeedback` (`idFeedback`);

--
-- Indexes for table `rincianbiaya`
--
ALTER TABLE `rincianbiaya`
  ADD PRIMARY KEY (`noKwitansi`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`idSarana`),
  ADD UNIQUE KEY `noIzinSarana` (`noIzinSarana`);

--
-- Indexes for table `surattl`
--
ALTER TABLE `surattl`
  ADD PRIMARY KEY (`noTl`),
  ADD KEY `noSuratTugas` (`noSuratTugas`);

--
-- Indexes for table `surattugas`
--
ALTER TABLE `surattugas`
  ADD PRIMARY KEY (`noSuratTugas`),
  ADD UNIQUE KEY `namaAnggaran` (`namaAnggaran`),
  ADD UNIQUE KEY `idPetugas` (`idPetugas`),
  ADD KEY `idPegawai` (`idPegawai`),
  ADD KEY `idKota` (`idKota`),
  ADD KEY `idKendaraan` (`idKendaraan`),
  ADD KEY `mak` (`mak`),
  ADD KEY `noKwitansi` (`noKwitansi`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
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
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4312558;

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `closedcapa`
--
ALTER TABLE `closedcapa`
  ADD CONSTRAINT `closedcapa_ibfk_1` FOREIGN KEY (`idFeedback`) REFERENCES `feedback` (`idFeedback`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`noSuratPeringatan`) REFERENCES `peringatan` (`noSuratPeringatan`);

--
-- Constraints for table `lhk`
--
ALTER TABLE `lhk`
  ADD CONSTRAINT `lhk_ibfk_1` FOREIGN KEY (`noSuratTugas`) REFERENCES `surattugas` (`noSuratTugas`),
  ADD CONSTRAINT `lhk_ibfk_2` FOREIGN KEY (`idSarana`) REFERENCES `sarana` (`idSarana`);

--
-- Constraints for table `peringatan`
--
ALTER TABLE `peringatan`
  ADD CONSTRAINT `peringatan_ibfk_1` FOREIGN KEY (`noTl`) REFERENCES `surattl` (`noTl`);

--
-- Constraints for table `rekomendasidinkes`
--
ALTER TABLE `rekomendasidinkes`
  ADD CONSTRAINT `rekomendasidinkes_ibfk_1` FOREIGN KEY (`noSuratPeringatan`) REFERENCES `peringatan` (`noSuratPeringatan`),
  ADD CONSTRAINT `rekomendasidinkes_ibfk_2` FOREIGN KEY (`idFeedback`) REFERENCES `feedback` (`idFeedback`);

--
-- Constraints for table `rincianbiaya`
--
ALTER TABLE `rincianbiaya`
  ADD CONSTRAINT `rincianbiaya_ibfk_1` FOREIGN KEY (`noKwitansi`) REFERENCES `pj` (`noKwitansi`);

--
-- Constraints for table `surattl`
--
ALTER TABLE `surattl`
  ADD CONSTRAINT `surattl_ibfk_1` FOREIGN KEY (`noSuratTugas`) REFERENCES `lhk` (`noSuratTugas`);

--
-- Constraints for table `surattugas`
--
ALTER TABLE `surattugas`
  ADD CONSTRAINT `surattugas_ibfk_1` FOREIGN KEY (`idPegawai`) REFERENCES `pegawai` (`idPegawai`),
  ADD CONSTRAINT `surattugas_ibfk_2` FOREIGN KEY (`idKota`) REFERENCES `kota` (`idKota`),
  ADD CONSTRAINT `surattugas_ibfk_3` FOREIGN KEY (`idKendaraan`) REFERENCES `kendaraan` (`idKendaraan`),
  ADD CONSTRAINT `surattugas_ibfk_4` FOREIGN KEY (`mak`) REFERENCES `anggaran` (`mak`),
  ADD CONSTRAINT `surattugas_ibfk_5` FOREIGN KEY (`noKwitansi`) REFERENCES `pj` (`noKwitansi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
