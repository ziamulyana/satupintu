-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satupintu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `level_hukum`
--

CREATE TABLE `level_hukum` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_hukum`
--

INSERT INTO `level_hukum` (`id_level`, `nama_level`) VALUES
(1, 'Undang-Undang'),
(2, 'Peraturan Pemerintah'),
(5, 'Peraturan Badan POM'),
(6, 'Peraturan Menteri Kesehatan'),
(7, 'Keputusan Menteri Kesehatan');

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
(5, 'Apotek C', '2021-04-01', '2021-05-09'),
(112, 'abc', '2021-05-03', '2021-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_pom`
--

CREATE TABLE `peraturan_pom` (
  `id_isbab` int(11) NOT NULL,
  `isBab` tinyint(1) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_pom`
--

INSERT INTO `peraturan_pom` (`id_isbab`, `isBab`, `sumber`, `id_level`) VALUES
(1, 0, 'Peraturan Badan POM No.9 Tahun 2019', 5),
(2, 1, 'Peraturan Badan POM No.6 Tahun 2020', 5);

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_pom_bab`
--

CREATE TABLE `peraturan_pom_bab` (
  `id_bab` int(11) NOT NULL,
  `bab` varchar(100) NOT NULL,
  `id_isbab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_pom_bab`
--

INSERT INTO `peraturan_pom_bab` (`id_bab`, `bab`, `id_isbab`) VALUES
(1, 'Bab II Huruf C', 2),
(2, 'Bab II Huruf B', 2),
(3, 'Bab II Huruf E', 2),
(4, 'BAB III Huruf B', 2),
(5, 'BAB III Huruf C', 2),
(6, 'BAB IV Huruf B', 2),
(7, 'BAB IX Dokumentasi', 2),
(8, 'BAB IV Huruf K', 2),
(9, 'BAB IV Huruf D', 2),
(10, 'BAB IV Huruf E', 2),
(11, 'BAB VI Huruf E', 2),
(12, 'BAB VI Huruf D', 2),
(13, 'BAB VI Huruf C', 2),
(14, 'BAB IV Huruf G', 2),
(15, 'BAB V Inspeksi Diri', 2),
(16, 'BAB I Huruf E', 2),
(17, 'BAB XI Huruf B', 2),
(18, 'Bab XI Huruf C.2.', 2),
(19, 'Bab IV Huruf F', 2),
(20, 'BAB IV Huruf D.3.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tabel`
--

CREATE TABLE `tabel` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggaran`
--

CREATE TABLE `tbl_anggaran` (
  `mak` varchar(255) NOT NULL,
  `namaAnggaran` varchar(255) NOT NULL,
  `uraianKegiatan` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `pagu` decimal(10,0) NOT NULL,
  `realisasi` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggaran`
--

INSERT INTO `tbl_anggaran` (`mak`, `namaAnggaran`, `uraianKegiatan`, `divisi`, `kode`, `pagu`, `realisasi`) VALUES
('', 'NON ANGGARAN', '', '', '', '0', '0'),
('3165.BAH.001.051.A.524111', 'SERTIFIKASI LK', 'Beban Perjalanan Biasa', 'Ser', 'BAH', '0', '1096000'),
('3165.BAH.001.051.A.524113', 'SERTIFIKASI DK', 'Beban Perjalanan Dalam Kota', 'Ser', 'BAH', '0', '2250000'),
('3165.BAH.001.051.B.524111', 'KOORDINASI/KONSULTASI SERTIFIKASI', 'Biaya Perjalanan Dinas Luar Kota', 'Ser', 'BAH', '0', '0'),
('3165.BAH.001.051.C.524111', 'FASILITASI UMKM LK', 'Biaya Perjalanan Dinas Luar Kota', 'Ser', 'BAH', '0', '0'),
('3165.BAH.001.051.C.524113', 'FASILITASI UMKM DK', 'Biaya Perjalanan Dinas Dalam Kota', 'Ser', 'BAH', '7500000', '0'),
('3165.BKB.001.052.B.524111', 'TATA HUBUNGAN KERJA', 'Beban Perjalanan Biasa', 'TU', 'BKB', '0', '0'),
('3165.QIA.001.051.A.524111', 'SAMPEL PANGAN LK', 'Beban Perjalanan Biasa', 'Pem', 'QIA', '0', '12211708'),
('3165.QIA.001.051.A.524113', 'SAMPEL PANGAN DK', 'Beban Perjalanan Dalam kota', 'Pem', 'QIA', '0', '1500000'),
('3165.QIA.005.051.A.524111', 'SAMPLING OBAT/OT-KOS-SK LK', 'Beban Perjalanan Biasa', 'Pem', 'QIA', '0', '12368600'),
('3165.QIA.005.051.A.524113', 'SAMPLING OBAT/OT-KOS-LK DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIA', '0', '1500000'),
('3165.QIA.008.051.A.524111', 'SAMPEL PANGAN FORTIFIKASI LK', 'Beban Perjalanan Luar Kota', 'Pem', 'QIA', '7160000', '0'),
('3165.QIA.008.051.A.524113', 'SAMPEL PANGAN FORTIFIKASI DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIA', '600000', '300000'),
('3165.QIC.001.051.A.524113', 'PEMERIKSAAN SARANA PRODUKSI DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIC', '9000000', '3150000'),
('3165.QIC.001.051.B.522192', 'CEK KESEHATAN PRODUKSI', 'Cek Kesehatan untuk keperluan perjalanan dinas Produksi', 'Pem', 'QIC', '1200000', '0'),
('3165.QIC.001.051.B.524111', 'PEMERIKSAAN SARANA PRODUKSI LK', 'Beban Perjalanan Biasa', 'Pem', 'QIC', '93370000', '16893416'),
('3165.QIC.001.051.B.524113', 'TRANSPORT PENYERTA PRODUKSI', 'Transpot Lokal Penyerta Produksi', 'Pem', 'QIC', '3900000', '0'),
('3165.QIC.004.051.A.524113', 'PEMERIKSAAN SARANA DISTRIBUSI OBAT DAN MAKANAN DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIC', '42000000', '3000000'),
('3165.QIC.004.051.B.524111', 'PEMERIKSAAN SARANA DISTRIBUSI OBAT DAN MAKANAN LK', 'Beban Perjalanan Biasa', 'Pem', 'QIC', '275280000', '21601200'),
('3165.QIC.004.051.B.524113', 'TRANSPORT PENYERTA DISTRIBUSI', 'Transport lokal penyerta distribusi', 'Pem', 'QIC', '5700000', '0'),
('3165.QIC.004.051.C.524113', 'PEMERIKSAAN SARANA DISTRIBUSI SARYANFAR DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIC', '52500000', '9600000'),
('3165.QIC.004.051.D.524111', 'PEMERIKSAAN SARANA DISTRIBUSI SARYANFAR LK', 'Beban Perjalanan Biasa', 'Pem', 'QIC', '231540000', '53447924'),
('3165.QIC.004.051.D.524113', 'TRANSPORT PENYERTA SARYANFAR', 'Tranport Lokal Penyerta Saryanfar', 'Pem', 'QIC', '9900000', '0'),
('3165.QIC.004.051.E.524111', 'PENGAWASAN IKLAN OBAT, MAKANAN, DAN IKLAN ROKOK LK', 'Beban Perjalanan Biasa', 'Pem', 'QIC', '43840000', '6668000'),
('3165.QIC.004.051.E.524113', 'PENGAWASAN IKLAN OBAT, MAKANAN, DAN IKLAN ROKOK DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIC', '1800000', '600000'),
('3165.QIC.004.051.F.521211', 'PENGAWASAN LABEL ROKOK', 'Pembelian Sampel Rokok', 'Pem', 'QIC', '7200000', '0'),
('3165.QIC.004.051.G.521211', 'SAMPEL PANGAN RAMADHAN', 'Sampel Pangan Ramadhan', 'Pem', 'QIC', '4000000', '0'),
('3165.QIC.004.051.G.524111', 'INTENSIFIKASI PANGAN RAMADHAN LK', 'Beban Perjalanan Dinas Luar Kota', 'Pem', 'QIC', '39440000', '0'),
('3165.QIC.004.051.G.524113', 'INTENSIFIKASI PANGAN RAMADHAN DK', 'Beban Perjalanan Dalam Kota', 'Pem', 'QIC', '5100000', '0'),
('3165.QIC.004.051.H.522192', 'CEK KESEHATAN UNTUK PERJALANAN DINAS', 'Cek Kesehatan untuk perjalanan dinas', 'Pem', 'QIC', '16800000', '0'),
('3165.QIC.004.052.B.524119', 'KOORDINASI/KONSULTASI PEMERIKSAAN SARANA', 'Biaya Perjalanan Dinas Luar Kota', 'Pem', 'QIC', '0', '0'),
('3165.QIC.004.052.D.522192', 'PEMERIKSAAN KESEHATANUNTUK PERJALANAN DINAS', 'Cek Kesehatan untuk perjalanan dinas', 'Pem', 'QIC', '1100000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_closedcapa`
--

CREATE TABLE `tbl_closedcapa` (
  `noSuratCapa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `idFeedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `idFeedback` int(11) NOT NULL,
  `noSuratFeedback` varchar(255) NOT NULL,
  `tglFeedback` varchar(255) NOT NULL,
  `isiFeedback` text NOT NULL,
  `closed` char(2) NOT NULL,
  `file_feedback` text NOT NULL,
  `idSuratPeringatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`idFeedback`, `noSuratFeedback`, `tglFeedback`, `isiFeedback`, `closed`, `file_feedback`, `idSuratPeringatan`) VALUES
(1, '111', '2021-05-03', 'testing', '0', '', 4),
(2, '113', '2021-05-07', 'testingggg lah', '0', '', 5),
(3, '114', '2020-05-20', 'tes', '0', '', 6),
(4, '115', '2020-05-30', 'okkkkkkk', '0', '', 7),
(5, '116', '2020-05-21', 'hello', '1', '', 9),
(9, '118', '2020-05-22', 'coba lah ya', '0', '', 19),
(10, '11111', '2021-05-22', 'hello', '0', '', 19),
(11, '123245', '2021-05-30', 'fvc', '1', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `idKendaraan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`idKendaraan`, `nama`) VALUES
(1, 'Roda Empat'),
(2, 'Pesawat'),
(3, 'Kapal Laut'),
(4, 'Roda Dua');

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
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `id_kota` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`id_kota`, `nama`) VALUES
(1, 'Batam'),
(2, 'Kabupaten Bintan'),
(3, 'Kabupaten Lingga'),
(4, 'Kabupaten Natuna'),
(5, 'Kabupaten Anambas'),
(6, 'Kabupaten Karimun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lhk`
--

CREATE TABLE `tbl_lhk` (
  `idLhk` int(255) NOT NULL,
  `anggaran` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `jlhSaranaDiperiksaOleh` varchar(11) NOT NULL,
  `sppdDisahkanOleh` varchar(255) NOT NULL,
  `kwitansiDisahkanOleh` varchar(255) NOT NULL,
  `form8JamDisahkanOleh` varchar(255) NOT NULL,
  `tglPemeriksaan` date NOT NULL,
  `keterangan` text NOT NULL,
  `alasanTidakDiperiksa` varchar(255) NOT NULL,
  `isMk` varchar(1) DEFAULT NULL,
  `idSarana` int(11) NOT NULL,
  `idSuratTugas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lhk`
--

INSERT INTO `tbl_lhk` (`idLhk`, `anggaran`, `kota`, `jlhSaranaDiperiksaOleh`, `sppdDisahkanOleh`, `kwitansiDisahkanOleh`, `form8JamDisahkanOleh`, `tglPemeriksaan`, `keterangan`, `alasanTidakDiperiksa`, `isMk`, `idSarana`, `idSuratTugas`) VALUES
(1, 'DIPA', 'batam', 'nana', 'nana', 'nana', 'nana', '2021-05-24', 'baik', 'gatau', 'n', 1, 1),
(2, 'dipa', 'batam', '3', 'nana', 'nana', 'nana', '2021-05-26', 'baik', 'baik', 'n', 3, 2),
(3, 'dipa', 'batm', 'nana', 'nana', 'nana', 'nana', '2021-05-23', 'nana', 'nana', 'y', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasal_kemasan`
--

CREATE TABLE `tbl_pasal_kemasan` (
  `id` int(11) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `uu` varchar(255) NOT NULL,
  `pasal` text NOT NULL,
  `id_temuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasal_kemasan`
--

INSERT INTO `tbl_pasal_kemasan` (`id`, `tentang`, `uu`, `pasal`, `id_temuan`) VALUES
(1, 'Pangan', 'Undang-Undang No.18 Tahun 2012', 'Pasal 71\r\n    (1) Setiap  Orang  yang  terlibat  dalam  rantai  Pangan  wajib mengendalikan  risiko  bahaya  pada  Pangan,  baik  yang berasal  dari  bahan,  peralatan,  sarana  produksi,  maupun dari perseorangan sehingga Keamanan Pangan  terjamin.\r\n    (2)Setiap   Orang   yang   menyelenggarakankegiatan   atau proses  produksi,penyimpanan,  pengangkutan,  dan/atau peredaran Pangan wajib:a.memenuhi Persyaratan Sanitasi; danb.menjamin  Keamanan  Pangan  dan/atau  keselamatan manusia.\r\n    (3)Ketentuan  mengenai  Persyaratan  Sanitasi  dan  jaminan Keamanan    Pangandan/atau    keselamatan    manusia sebagaimana   dimaksud   pada   ayat   (2)   diatur   dalam Peraturan Pemerintah.\r\nPasal 72\r\n    (1)Setiap  Orang  yang  melanggar  ketentuan  sebagaimana dimaksud  dalam  Pasal  71  ayat  (1)  dan  ayat  (2)  dikenai sanksi administratif.\r\n    (2)Sanksiadministratif sebagaimana dimaksud pada ayat (1) berupa:\r\n        a.denda;\r\n        b.penghentian    sementara    dari    kegiatan,    produksi, dan/atau peredaran;\r\n       c.penarikan Pangan dari peredaran oleh produsen;d.ganti rugi; dan/atau\r\n       e.pencabutan izin\r\nPasal 135\r\nSetiap  Orang  yang  menyelenggarakan  kegiatan  atau  proses produksi,  penyimpanan,  pengangkutan,  dan/atau  peredaran Pangan  yang  tidak  memenuhi  Persyaratan  Sanitasi  Pangan sebagaimana  dimaksud  dalam  Pasal  71  ayat  (2)  dipidana dengan  pidana  penjara  paling  lama  2  (dua)  tahun  atau  denda paling banyak  Rp4.000.000.000,00 (empat miliar rupiah)', 1),
(2, 'Cara Produksi Pangan yang Baik Untuk Industri Rumah Tangga', 'Peraturan Kepala BPOM No. HK.03.1.23.04.12.2206 Th 2012', 'Lampiran E Poin 1\r\nLokasi IRTP seharusnya dijaga tetap bersih, bebas dari sampah, bau, asap, kotoran, dan debu.\r\nLingkungan seharusnya selalu dipertahankan dalam keadaan bersih\r\n', 2),
(3, 'Cara Produksi Pangan yang Baik Untuk Industri Rumah Tangga', 'Peraturan Kepala BPOM No. HK.03.1.23.04.12.2206 Th 2012', 'Lampiran E Poin 2\r\n1. Ruang produksi sebaiknya cukup luas dan mudah dibersihkan.\r\na. Ruang produksi sebaiknya tidak digunakan untuk memproduksi produk lain selain pangan\r\n', 3),
(4, 'Cara Produksi Pangan yang Baik Untuk Industri Rumah Tangga', 'Peraturan Kepala BPOM No. HK.03.1.23.04.12.2206 Th 2012', 'Lampiran E Poin 2\r\n2.b.Lantai seharusnya selalu dalam keadaan bersih dari debu,lendir, dan kotoran lainnya serta mudah dibersihkan\r\n3.b.Dinding atau pemisah ruangan seharusnya selalu dalam keadaan bersih dari debu, lendir, dan kotoran lainnya\r\n4.d.Langit-langit seharusnya selalu dalam keadaan bersih dari debu, sarang labah-labah\r\n', 4),
(5, 'Cara Produksi Pangan yang Baik Untuk Industri Rumah Tangga', 'Peraturan Kepala BPOM No. HK.03.1.23.04.12.2206 Th 2012', 'Lampiran E Poin 2\r\n7.b.Lubang angin atau ventilasi seharusnya selalu dalam keadaan bersih, tidak berdebu, dan tidak dipenuhi sarang labah-labah,\r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasal_kosmetik`
--

CREATE TABLE `tbl_pasal_kosmetik` (
  `id` int(11) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `uu` varchar(255) NOT NULL,
  `pasal` text NOT NULL,
  `id_temuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasal_kosmetik`
--

INSERT INTO `tbl_pasal_kosmetik` (`id`, `tentang`, `uu`, `pasal`, `id_temuan`) VALUES
(12, 'Pedoman Cara Pembuatan Kosmetika yang Baik', 'Peraturan Badan POM No.31 Tahun2020', 'Angka I\r\n1.2\r\n1.2.1.Sistem  mutu  dibuat,  ditetapkan  dan  diterapkan  sehingga kebijakan  yang  ditetapkan  dan  tujuan  yang  diinginkan dapat   dicapai.   Sistem   menetapkan   struktur   organisasi, tugas  dan  fungsi,  tanggung  jawab,  prosedur,  instruksi, proses  dan  sumber  daya  untuk  menerapkan  manajemen mutu.Struktur   organisasi   Industri Kosmetika   dibuat   lengkap dengan nama personil yang menjabat. Penanggung jawab teknis harus mengetahui seluruh proses terkait pengawasan mutu dan produksi.Kewenangan  dan  tanggung  jawab  manajemen  ditetapkan secara jelas dalam uraian jabatan.', 58),
(13, 'Pedoman Cara Pembuatan Kosmetika yang Baik', 'Peraturan Badan POM No.31 Tahun 2020', 'Angka III\r\n3.1\r\n3.1.2.Kepala   Bagian   Produksi   telah   mendapat   pelatihan   yang memadai  dan  berpengalaman  dalam  pembuatan  Kosmetika. Ia   mempunyai   kewenangan   dan   tanggung   jawab   dalam manajemen   produksi   yang   meliputi   semua   pelaksanaan kegiatan,  peralatan,  personil  produksi,  area  produksi  dan pencatatan.Kepala  Bagian  Produksi  dijabat  oleh  seorang  Apoteker  atau Sarjana   Farmasi,   Sarjana   Kimia   atau   tenaga   lain   yang mempunyai  pengalaman  dalam  bidang  produksi  Kosmetika dan kemampuan dalam kepemimpinan sehingga memungkinkan melaksanakan tugas sebagai profesional.Kepala    Bagian    Produksi    harus    independen,    memiliki wewenang  serta  tanggung  jawab  penuh  untuk  mengelola produksi  Kosmetika  mencakup  tugas  operasional  produksi, peralatan, personil, area produksi dan dokumentasi', 59),
(14, 'Pedoman Cara Pembuatan Kosmetika yang Baik', 'Peraturan Badan POM No.31 Tahun 2020', 'Angka III\r\n3.1\r\n3.1.3.Kepala  Bagian  Pengawasan  Mutu  telah  mendapat  pelatihan yang memadai dan berpengalaman dalam bidang pengawasan mutu.  Ia  diberi  kewenangan  penuh  dan  tanggung  jawab dalam semua tugas pengawasan mutu meliputi penyusunan, verifikasi dan penerapan semuaprosedur pengawasan mutu. Ia   mempunyai   kewenangan   mendelegasikan/menetapkan personil apabila diperlukan, untuk memberi persetujuan atas bahan  awal,  produk  antara,  produk  ruahan  dan  produk  jadi yang telah memenuhi spesifikasi, atau menolak apabila tidak memenuhi  spesifikasi  yang  relevan,  atau  yang  dibuat  tidak sesuai prosedur dan kondisi yang telah ditetapkan Kepala   Bagian   Pengawasan   Mutu   dijabat   oleh   seorang Apoteker  atau  Sarjana  Farmasi,  Sarjana  Kimia  atau  tenaga lain  yang  mempunyai  pengalaman  di  bidang  pengawasan mutu Kosmetika.Kepala    Bagian    Pengawasan    Mutu harusmempunyai wewenang  dan  tanggung  jawab  penuh  dalam  semua  aspek pengawasan    mutu    seperti    penyusunan,    verifikasi    dan penerapan   prosedur   pengawasan   mutu   dan   mempunyai wewenang    (bila    diperlukan)    menunjuk    personil    untuk memeriksa,  meluluskan  dan  menolak  bahan  awal,  produk antara,  produk  ruahan,  dan  produk  jadi  yang  dibuat  sesuai dengan prosedur yang telah ditetapkan dan disetujui.', 60),
(15, 'Pedoman Cara Pembuatan Kosmetika yang Baik', 'Peraturan Badan POM No.31 Tahun 2020', 'Angka III\r\n3.1\r\n3.1.4.Tanggung    jawab    dan    kewenangan    dari    personil    inti ditetapkan dengan jelas.Uraian tugas yang mencakup tanggung jawab dan wewenang Penanggung  Jawab  Teknis  dan  setiap  personil  inti  (“Key Personil”)  seperti  Kepala  Bagian  Produksi,  Kepala  Bagian Pengawasan Mutu, dirinci dan didefinisikan secara jelas.', 61),
(16, 'Pedoman Cara Pembuatan Kosmetika yang Baik', 'Peraturan Badan POM No.31 Tahun2020', 'Angka VI\r\n6.1\r\n6.1.2.Semua   personil   menerapkan   pola   bersih   atau   higiene perorangan.Semua   personil yang   terlibat   dalam   pembuatan   produk selama  bekerja  harus  mematuhi  aturan  higiene  perorangan guna    melindungi    produk    dari    kontaminasi.    Higiene perorangan harus dilakukan seperti mencuci tangan sebelum masuk  ke  area  produksi,  setelah  dari  toilet,  setelah  makan, serta  memakai  pakaian  kerja  dan  alat  pelindung  lainnya sesuai   dengan   tempat/area   kerjanya ', 62);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasal_obat`
--

CREATE TABLE `tbl_pasal_obat` (
  `id` int(11) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `uu` varchar(255) NOT NULL,
  `pasal` text NOT NULL,
  `id_temuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasal_obat`
--

INSERT INTO `tbl_pasal_obat` (`id`, `tentang`, `uu`, `pasal`, `id_temuan`) VALUES
(1, 'Rumah Sakit', 'Undang-Undang No.4 Tahun 2009', 'Pasal 25 ayat 1: Setiap penyelenggara Rumah Sakit wajib memiliki izin.', 1),
(2, 'Standar Pelayanan Kefarmasian di Rumah Sakit', 'Peraturan Menteri Kesehatan No.72 Tahun 2016', 'Pasal 6: Instalasi farmasi Rumah Sakit harus dipimpin oleh seorang Apoteker sebagai penanggungjawab.', 2),
(3, 'Pekerjaan Kefarmasian', 'Peraturan Pemerintah No.51 Tahun 2009', 'Pasal 20 : Dalam menjalankan Pekerjaan Kefarmasian pada fasilitas Pelayanan Kefarmasian Apoteker dapat dibantu oleh Apoteker pendamping dan atau Tenaga Teknis Kefarmasian', 3),
(8, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian ', 'Peraturan Badan POM No. 4 Tahun 2018 ', 'Lampiran B \r\n3.2. Narkotika harus disimpan dalam lemari khusus penyimpanan Narkotika.\r\n3.3. Psikotropika harus disimpan dalam lemari khusus penyimpanan Psikotropika\r\n', 4),
(11, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian ', 'Peraturan Badan POM No. 4 Tahun 2018 ', 'Lampiran A\r\n1.1. Pengadaan Obat dan Bahan Obat harus bersumber dari Industri Farmasi atau Pedagang Besar Farmasi\r\n', 5),
(12, 'Apotek', 'Peraturan Menteri Kesehatan No. 9 Tahun 2017 ', 'Pasal 12 ayat 1\r\nSetiap pendirian Apotek wajib memiliki izin dari Menteri. \r\nPasal 12 ayat 2\r\nMenteri melimpahkan kewenangan pemberian izin sebagaimana dimaksud pada ayat (1) kepada Pemerintah Daerah Kabupaten/Kota', 9),
(13, 'Apotek', 'Peraturan Menteri Kesehatan No. 9 Tahun 2017 ', 'Pasal 15 Ayat 1\r\nSetiap   perubahan   alamat   di   lokasi   yang   sama   atau   perubahan    alamat    dan    pindah    lokasi,    perubahan Apoteker   pemegang   SIA,   atau   nama   Apotek harus dilakukan perubahan izin', 10),
(14, 'Apotek', 'Peraturan Menteri Kesehatan No. 9 Tahun 2017 ', 'Pasal 11 ayat 2: Apoteker dan Tenaga Teknis Kefarmasian wajib memiliki surat izin praktik sesuai dengan ketentuan peraturan perundang-undangan', 11),
(15, 'Pekerjaan Kefarmasian', 'Peraturan Pemerintah No. 51 Tahun 2009 ', 'Pasal 20 : Dalam menjalankan Pekerjaan Kefarmasian pada fasilitas Pelayanan Kefarmasian Apoteker dapat dibantu oleh Apoteker pendamping dan atau Tenaga Teknis Kefarmasian', 12),
(16, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian', 'Peraturan Badan POM No. 4 Tahun 2018  ', 'Lampiran B \r\n1.2. Narkotika harus disimpan dalam lemari khusus penyimpanan Narkotika. \r\n1.3. Psikotropika harus disimpan dalam lemari khusus penyimpanan Psikotropika\r\n', 13),
(17, 'Pekerjaaan Kefarmasian', 'Peraturan Pemerintah No. 51 Tahun 2009 ', 'Pasal 20 : Dalam menjalankan Pekerjaan Kefarmasian pada fasilitas Pelaynanan Kefarmasian Apoteker dapat dibantu oleh Apoteker pendamping dan atau Tenaga Teknis Kefarmasian', 12),
(18, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian ', 'Peraturan Badan POM No.4 Tahun 2018', 'Lampiran B \r\n3.2. Narkotika harus disimpan dalam lemari khusus penyimpanan Narkotika.\r\n3.3. Psikotropika harus disimpan dalam lemari khusus penyimpanan Psikotropika', 13),
(19, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian ', 'Peraturan Badan POM No.4 Tahun 2018', 'Lampiran A\r\n1.1. Pengadaan Obat dan Bahan Obat harus bersumber dari Industri Farmasi atau Pedagang Besar Farmasi.\r\n', 16),
(20, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian ', 'Peraturan Badan POM No. 4 Tahun 2018 ', 'Lampiran A\r\n1.8. Pengadaan Obat dan Bahan Obat dari Industri Farmasi atau Pedagang Besar Farmasi harus dilengkapi dengan Surat Pesanan \r\n1.10. Apabila Surat Pesanan dibuat secara manual, maka Surat Pesanan harus \r\na. Asli dan dibuat sekurang-kurangnya rangkap 2 (dua) serta tidak dibenarkan dalam bentuk faksimili dan fotokopi. Satu rangkap surat pesanan diserahkan kepada pemasok dan 1 (satu) rangkap sebagai arsip \r\nb. ditandatangani oleh Apoteker/Tenaga Teknis Kefarmasian Penanggung Jawab, dilengkapi dengan nama jelas, dan nomor Surat Izin Praktik Apoteker (SIPA)/Surat Izin Praktik Tenaga Teknis Kefarmasian (SIPTTK) sesuai ketentuan perundang-undangan\r\nc. mencantumkan nama sarana sesuai izin (disertai nomor izin) dan alamat lengkap (termasuk nomor telepon/faksimili bila ada) dan stempel sarana \r\nd. mencantumkan nama fasilitas pemasok beserta alamat lengkap \r\ne. mencantumkan nama, bentuk dan kekuatan sediaan, jumlah (dalam bentuk angka dan huruf) dan isi kemasan (kemasan penyaluran terkecil atau tidak dalam bentuk eceran) dari Obat/Bahan Obat yang dipesan \r\nf. diberikan nomor urut, nama kota dan tanggal dengan penulisan yang jelas \r\ng. sesuai ketentuan peraturan perundang-undangan\r\n', 17),
(21, 'Pengawasan Pengelolaan Obat, Bahan Obat, Narkotika, Psikotropika, Dan Prekursor Farmasi di Fasilitas Pelayanan Kefarmasian ', 'Peraturan Badan POM No. 4 Tahun 2018 ', 'Lampiran A\r\n1.14. Arsip Surat Pesanan harus disimpan sekurang-kurangnya selama 5 (lima) tahun berdasarkan tanggal dan nomor urut Surat Pesanan \r\n', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasal_pangan`
--

CREATE TABLE `tbl_pasal_pangan` (
  `id` int(11) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `uu` varchar(255) NOT NULL,
  `pasal` text NOT NULL,
  `id_temuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasal_pangan`
--

INSERT INTO `tbl_pasal_pangan` (`id`, `tentang`, `uu`, `pasal`, `id_temuan`) VALUES
(51, 'Pangan', 'Undang-Undang No.18 Tahun 2012', 'Pasal 71\r\n    (1) Setiap  Orang  yang  terlibat  dalam  rantai  Pangan  wajib mengendalikan  risiko  bahaya  pada  Pangan,  baik  yang berasal  dari  bahan,  peralatan,  sarana  produksi,  maupun dari perseorangan sehingga Keamanan Pangan  terjamin.\r\n    (2)Setiap   Orang   yang   menyelenggarakankegiatan   atau proses  produksi,penyimpanan,  pengangkutan,  dan/atau peredaran Pangan wajib:a.memenuhi Persyaratan Sanitasi; danb.menjamin  Keamanan  Pangan  dan/atau  keselamatan manusia.\r\n    (3)Ketentuan  mengenai  Persyaratan  Sanitasi  dan  jaminan Keamanan    Pangandan/atau    keselamatan    manusia sebagaimana   dimaksud   pada   ayat   (2)   diatur   dalam Peraturan Pemerintah.\r\nPasal 72\r\n    (1)Setiap  Orang  yang  melanggar  ketentuan  sebagaimana dimaksud  dalam  Pasal  71  ayat  (1)  dan  ayat  (2)  dikenai sanksi administratif.\r\n    (2)Sanksiadministratif sebagaimana dimaksud pada ayat (1) berupa:\r\n        a.denda;\r\n        b.penghentian    sementara    dari    kegiatan,    produksi, dan/atau peredaran;\r\n       c.penarikan Pangan dari peredaran oleh produsen;d.ganti rugi; dan/atau\r\n       e.pencabutan izin\r\nPasal 135\r\nSetiap  Orang  yang  menyelenggarakan  kegiatan  atau  proses produksi,  penyimpanan,  pengangkutan,  dan/atau  peredaran Pangan  yang  tidak  memenuhi  Persyaratan  Sanitasi  Pangan sebagaimana  dimaksud  dalam  Pasal  71  ayat  (2)  dipidana dengan  pidana  penjara  paling  lama  2  (dua)  tahun  atau  denda paling banyak  Rp4.000.000.000,00 (empat miliar rupiah)', 6),
(52, 'Pangan', 'Undang-Undang No.18 Tahun 2012 ', 'Pasal 89 : Setiap orang dilarang memperdagangkan pangan yang tidak sesuai dengan Keamanan Pangan dan Mutu Pangan yang tercantum dalam label Kemasan Pangan\r\nPasal 90 ayat (1) : Setiap Orang dilarang mengedarkan Pangan tercemar.\r\nPasal 90 ayat (2) huruf f : Pangan tercemar sebagaimana dimaksud pada ayat (1) berupa Pangan yang sudah kadaluarsa.\r\nPasal 141 : Setiap Orang yang dengan sengaja memperdagangkan Pangan yang tidak sesuai dengan Keamanan Pangan dan Mutu Pangan yang tercantum dalam label Kemasan Pangan sebagaimana dimaksud dalam Pasal 89 dipidana dengan pidana penjara paling lama 2 (dua) tahun atau denda paling banyak Rp4.000.000.000,00 (empat miliar rupiah). \r\n', 7),
(53, 'Perlindungan Konsumen', 'Undang-Undang No. 8 Tahun 1999 ', 'Pasal 8 ayat (3) :  Pelaku usaha dilarang memperdagangkan sediaan farmasi dan pangan yang rusak, cacat atau bekas dan tercemar, dengan atau tanpa memberikan informasi secara lengkap dan benar.\r\nPasal 62 ayat (1) : Pelaku usaha yang melanggar ketentuan sebagaimana dimaksud dalam Pasal 8, Pasal 9, Pasal 10, Pasal 13 ayat (2), Pasal 15, Pasal 17 ayat (1) huruf a, huruf b, huruf c, huruf e, ayat (2), dan Pasal 18 dipidana dengan pidana penjara paling lama 5 (lima) tahun atau pidana denda paling banyak Rp 2.000.000.000,00 (dua miliar rupiah).\r\n', 7),
(54, 'Keamanan Mutu dan Gizi Pangan', 'Peraturan Pemerintah Nomor 28 Tahun 2004 ', 'Pasal 23 huruf f : Setiap orang dilarang mengedarkan pangan yang sudah kadaluarsa', 7),
(55, 'Pangan', 'Undang-Undang No.18 Tahun 2012 ', 'Pasal 71 ayat (1) : Setiap Orang yang terlibat dalam rantai Pangan wajib mengendalikan risiko bahaya pada Pangan, baik yang berasal dari bahan, peralatan, sarana produksi, maupun dari perseorangan sehingga Keamanan Pangan terjamin.', 8),
(56, 'Perlindungan Konsumen', 'Undang-Undang No. 8 Tahun 1999 ', 'Pasal 8 ayat (3) :  Pelaku usaha dilarang memperdagangkan sediaan farmasi dan pangan yang rusak, cacat atau bekas dan tercemar, dengan atau tanpa memberikan informasi secara lengkap dan benar.\r\nPasal 62 ayat (1) : Pelaku usaha yang melanggar ketentuan sebagaimana dimaksud dalam Pasal 8, Pasal 9, Pasal 10, Pasal 13 ayat (2), Pasal 15, Pasal 17 ayat (1) huruf a, huruf b, huruf c, huruf e, ayat (2), dan Pasal 18 dipidana dengan pidana penjara paling lama 5 (lima) tahun atau pidana denda paling banyak Rp 2.000.000.000,00 (dua miliar rupiah).\r\n', 8),
(57, 'Kesehatan', 'Undang-Undang No. 36 Tahun 2009', 'pasal 111 ayat (2) : \r\nMakanan dan minuman hanya dapat diedarkan setelah mendapat izin edar sesuai dengan ketentuan peraturan perundang-undangan\r\n', 9),
(58, 'Pangan', 'Undang-Undang No.18 Tahun 2012 ', 'pasal 91 ayat (1) : \r\n1. Pasal 91 ayat (1): Dalam hal pengawasan keamanan, mutu dan gizi, setiap pangan olahan yang dibuat di dalam negeri atau yang diimpor untuk diperdagangkan dalam kemasan eceran, pelaku usaha pangan wajib memiliki izin edar.\r\n2. Pasal 142 : Pelaku Usaha Pangan yang dengan sengaja tidak memiliki izin edar terhadap setiap Pangan Olahan yang dibuat di dalam negeri atau yang diimpor untuk diperdagangkan dalam kemasan eceran sebagaimana dimaksud dalam Pasal 91 ayat (1) dipidana dengan pidana penjara paling lama 2 (dua) tahun atau denda paling banyak Rp4.000.000.000,00 (empat miliar rupiah). \r\n', 9),
(59, 'Keamanan Mutu dan Gizi Pangan', 'Peraturan Pemerintah Nomor 28 Tahun 2004 ', 'Pasal 42 ayat (1) : Dalam rangka pengawasan keamanan mutu dan gizi pangan, setiap pangan olahan baik yang diproduksi di dalam atau yang dimasukkan ke dalam wilayah Indonesia untuk diperdagangkan dalam kemasan eceran sebelum diedarkan wajib memiliki surat persetujuan pendaftaran (MD/ML).', 9),
(60, 'Kesehatan', 'Undang-Undang No. 36 Tahun 2009', 'Pasal 98 ayat (2) : \r\nSetiap orang yang tidak memiliki keahlian dan kewenangan dilarang mengadakan, menyimpan, mengolah, mempromosikan, dan mengedarkan obat dan bahan yang berkhasiat obat\r\npasal 108 ayat (1) : \r\nPraktik kefarmasian meliputi pembuatan termasuk pengendalian mutu sediaan farmasi, pengamanan, pengadaan, penyimpanan, dan pendistribusian obat, pelayanan obat atas resep dokter, pelayanan informasi obat serta pengembangan obat, bahan obat dan obat tradisional harus dilakukan oleh tenaga kesehatan yang mempunyai keahlian dan kewenangan sesuai dengan ketentuan perundang-undangan\r\n', 10),
(61, 'Pengamanan Sediaan Farmasi dan Alat Kesehatan  ', 'Peraturan Pemerintah No. 72 Tahun 1999 ', 'pasal 15 ayat (1) : \r\nsediaan farmasi dan alat kesehatan hanya dapat dilakukan oleh badan usaha yang telah memiliki izin sebagai penyalur dari Menteri sesuai dengan ketentuan peraturan perundang-undangan yang berlaku untuk menyalurkan sediaan farmasi yang berupa bahan obat,obat dan alat kesehatan\r\n', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasal_pbf`
--

CREATE TABLE `tbl_pasal_pbf` (
  `id` int(11) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `uu` varchar(255) NOT NULL,
  `pasal` text NOT NULL,
  `id_temuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasal_pbf`
--

INSERT INTO `tbl_pasal_pbf` (`id`, `tentang`, `uu`, `pasal`, `id_temuan`) VALUES
(1, 'Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.9 Tahun 2019', 'Pasal 3 Ayat 1 :\r\nIndustri dalam melaksanakan  kegiatan  distribusi Bahan Obat  dan/atau  Obat  wajib  menerapkan pedoman teknis CDOB.\r\nPasal 4 Ayat 1 :\r\nUntuk  membuktikan  penerapan  pedoman  teknis  CDOB, PBF,dan PBF Cabang wajib memiliki Sertifikat CDOB\r\n', 1),
(2, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf B\r\n2.1 Harus ada Struktur Organisasi untuk tiap bagian yang dilengkapi dengan bagan organisasi yang jelas. Tanggung Jawab, wewenang dan hubungan antar semua personil harus ditetapkan dengan jelas.', 3),
(3, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf B\r\n2.2.Tugas  dan  tanggung  jawab  harus  didefinisikan  secara  jelas  dan dipahami  oleh  personil  yang  bersangkutan serta  dijabarkan  dalam uraian  tugas.  Kegiatan  tertentu yang memerlukan perhatian  khusus, misalnya pengawasan kinerja, dilakukan sesuai dengan ketentuan dan peraturan.  Personil  yang  terlibat  di  rantai  distribusi harus  diberi penjelasan dan pelatihan yang memadai mengenai tugas dan tanggung jawabnya.', 4),
(4, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf B\r\n2.1 Harus ada Struktur Organisasi untuk tiap bagian yang dilengkapi dengan bagan organisasi yang jelas. Tanggung Jawab, wewenang dan hubungan antar semua personil harus ditetapkan dengan jelas.', 5),
(5, 'Pedagang Besar Farmasi', 'Peraturan Menteri Kesehatan No. 1148/Menkes/Per/VI/2011', 'Pasal 15\r\nAyat (1) PBF dan PBF Cabang harus melaksanakan  pengadaan, penyimpanan dan penyaluran obat dan/atau bahan obat sesuai dengan CDOB yang ditetapkan oleh Menteri.', 1),
(6, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf C\r\n2.10. Penanggung Jawab dalam pelaksanaan tugasnya harus memastikan bahwa fasilitas distribusi telah menerapkan CDOB dan memenuhi pelayanan publik.', 1),
(7, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf C\r\n2.9. Penanggung jawab harus seorang Apoteker yang memenuhi kualifikasi dan  kompetensi  sesuai  peraturan  perundang-undangan.  Di  samping itu,  telah  memiliki  pengetahuan  dan  mengikuti  pelatihan  CDOB  yang memuat  aspek  keamanan,  identifikasi  obat  dan/atau  bahan  obat, deteksi dan pencegahan masuknya obat dan/atau bahan obat palsu ke dalam rantai distribusi.', 8),
(8, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf C\r\n2.7. Manajemen  puncak  di  fasilitas  distribusi  harus  menunjuk  seorang penanggung  jawab.  Penanggung  jawab  harus  memenuhi  tanggung jawabnya,  bertugas  purna  waktu  dan  memenuhi  persyaratan  sesuai dengan   peraturan   perundang-undangan.   Jika   penanggung   jawab fasilitas  distribusi  tidak  dapat  melaksanakan  tugasnya  dalam  waktu yang  ditentukan,  maka  harus  dilakukan  pendelegasian  tugas  kepada tenaga teknis kefarmasian.   Tenaga   kefarmasian   yang   mendapat pendelegasian  wajib  melaporkan  kegiatan  yang  dilakukan  kepada penanggung jawab', 9),
(9, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf E\r\n2.13. Semua personil harus memenuhi kualifikasi yang dipersyaratkan dalam CDOB  dengan  mengikuti  pelatihan  dan  memiliki  kompetensi  sebelum memulai tugas, berdasarkan suatu prosedur tertulis dan sesuai dengan program pelatihan termasuk keselamatan kerja. Penanggung jawab juga harus  menjaga  kompetensinya  dalam  CDOB  melalui  pelatihan  rutin berkala.\r\n2.16. Semua dokumentasi Pelatihan harus disimpan, dan efektivitas pelatihan harus dievaluasi secara berkala dan didokumentasikan. ', 10),
(10, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf E\r\n2.13. Semua personil harus memenuhi kualifikasi yang dipersyaratkan dalam CDOB  dengan  mengikuti  pelatihan  dan  memiliki  kompetensi  sebelum memulai tugas, berdasarkan suatu prosedur tertulis dan sesuai dengan program pelatihan termasuk keselamatan kerja. Penanggung jawab juga harus  menjaga  kompetensinya  dalam  CDOB  melalui  pelatihan  rutin berkala.\r\n2.16. Semua dokumentasi Pelatihan harus disimpan, dan efektivitas pelatihan harus dievaluasi secara berkala dan didokumentasikan. ', 11),
(11, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.12. Bangunan  dan  fasilitas  penyimpanan  harus  bersih  dan  bebas  dari sampah   dan   debu.   Harus   tersedia   prosedur   tertulis,   program pembersihan  dan  dokumentasi  pelaksanaan  pembersihan.  Peralatan pembersih  yang  dipakai  harus  sesuai  agar  tidak  menjadi  sumber kontaminasi terhadap obat dan/atau bahan obat', 12),
(12, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf C\r\n2.9. Penanggung jawab harus seorang Apoteker yang memenuhi kualifikasi dan  kompetensi  sesuai  peraturan  perundang-undangan.  Di  samping itu,  telah  memiliki  pengetahuan  dan  mengikuti  pelatihan  CDOB  yang memuat  aspek  keamanan,  identifikasi  obat  dan/atau  bahan  obat, deteksi dan pencegahan masuknya obat dan/atau bahan obat palsu ke dalam rantai distribusi.', 8),
(13, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf C\r\n2.7. Manajemen  puncak  di  fasilitas  distribusi  harus  menunjuk  seorang penanggung  jawab.  Penanggung  jawab  harus  memenuhi  tanggung jawabnya,  bertugas  purna  waktu  dan  memenuhi  persyaratan  sesuai dengan   peraturan   perundang-undangan.   Jika   penanggung   jawab fasilitas  distribusi  tidak  dapat  melaksanakan  tugasnya  dalam  waktu yang  ditentukan,  maka  harus  dilakukan  pendelegasian  tugas  kepada tenaga teknis kefarmasian.   Tenaga   kefarmasian   yang   mendapat pendelegasian  wajib  melaporkan  kegiatan  yang  dilakukan  kepada penanggung jawab', 9),
(14, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf E\r\n2.13. Semua personil harus memenuhi kualifikasi yang dipersyaratkan dalam CDOB  dengan  mengikuti  pelatihan  dan  memiliki  kompetensi  sebelum memulai tugas, berdasarkan suatu prosedur tertulis dan sesuai dengan program pelatihan termasuk keselamatan kerja. Penanggung jawab juga harus  menjaga  kompetensinya  dalam  CDOB  melalui  pelatihan  rutin berkala.\r\n2.16. Semua dokumentasi Pelatihan harus disimpan, dan efektivitas pelatihan harus dievaluasi secara berkala dan didokumentasikan. ', 10),
(15, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'Bab II Huruf E\r\n2.13. Semua personil harus memenuhi kualifikasi yang dipersyaratkan dalam CDOB  dengan  mengikuti  pelatihan  dan  memiliki  kompetensi  sebelum memulai tugas, berdasarkan suatu prosedur tertulis dan sesuai dengan program pelatihan termasuk keselamatan kerja. Penanggung jawab juga harus  menjaga  kompetensinya  dalam  CDOB  melalui  pelatihan  rutin berkala.\r\n2.16. Semua dokumentasi Pelatihan harus disimpan, dan efektivitas pelatihan harus dievaluasi secara berkala dan didokumentasikan. ', 11),
(16, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.12. Bangunan  dan  fasilitas  penyimpanan  harus  bersih  dan  bebas  dari sampah   dan   debu.   Harus   tersedia   prosedur   tertulis,   program pembersihan  dan  dokumentasi  pelaksanaan  pembersihan.  Peralatan pembersih  yang  dipakai  harus  sesuai  agar  tidak  menjadi  sumber kontaminasi terhadap obat dan/atau bahan obat', 12),
(17, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.2. Bangunan harus dirancang dan disesuaikan untuk memastikan bahwa kondisi  penyimpanan  yang  baik dapat  dipertahankan,  mempunyai keamanan    yang    memadai    dan    kapasitas    yang    cukup    untuk memungkinkan  penyimpanan  dan  penanganan  obat  yang  baik,  dan area  penyimpanan  dilengkapi  dengan  pencahayaan  yang  memadai untuk memungkinkan semua kegiatan dilaksanakan secara akurat dan aman.\r\nBAB III Huruf C\r\n3.15. Harus  tersedia  prosedur  tertulis  dan  peralatan  yang  sesuai  untuk mengendalikan lingkungan selama penyimpanan obat dan/atau bahan obat. Faktor lingkungan yang harus dipertimbangkan, antara lain suhu, kelembaban, dan kebersihan bangunan', 28),
(18, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf C\r\n3.18. Peralatan  yang  digunakan  untuk  mengendalikan  atau  memonitor lingkungan penyimpanan obat dan/atau bahan obat harus dikalibrasi, serta kebenaran dan kesesuaian tujuan penggunaan diverifikasi secara berkala  dengan  metodologi  yang  tepat.  Kalibrasi  peralatan  harus mampu tertelusur', 29),
(19, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.2. Bangunan harus dirancang dan disesuaikan untuk memastikan bahwa kondisi  penyimpanan  yang  baik dapat  dipertahankan,  mempunyai keamanan    yang    memadai    dan    kapasitas    yang    cukup    untuk memungkinkan  penyimpanan  dan  penanganan  obat  yang  baik,  dan area  penyimpanan  dilengkapi  dengan  pencahayaan  yang  memadai untuk memungkinkan semua kegiatan dilaksanakan secara akurat dan aman.\r\nBAB III Huruf C\r\n3.15. Harus  tersedia  prosedur  tertulis  dan  peralatan  yang  sesuai  untuk mengendalikan lingkungan selama penyimpanan obat dan/atau bahan obat. Faktor lingkungan yang harus dipertimbangkan, antara lain suhu, kelembaban, dan kebersihan bangunan', 30),
(20, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.13.Bangunan  dan  fasilitas  harus  dirancang  dan  dilengkapi,  sehingga memberikan   perlindungan   terhadap   masuknya   serangga,   hewan pengerat atau hewan lain. Program pencegahan dan pengendalian hama harus tersedia. ', 31),
(21, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.12.Bangunan  dan  fasilitas  penyimpanan  harus  bersih  dan  bebas  dari sampah   dan   debu.   Harus   tersedia   prosedur   tertulis,   program pembersihan  dan  dokumentasi  pelaksanaan  pembersihan.  Peralatan pembersih  yang  dipakai  harus  sesuai  agar  tidak  menjadi  sumber kontaminasi terhadap obat dan/atau bahan obat. ', 32),
(22, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.2. Bangunan harus dirancang dan disesuaikan untuk memastikan bahwa kondisi  penyimpanan  yang  baik dapat  dipertahankan,  mempunyai keamanan    yang    memadai    dan    kapasitas    yang    cukup    untuk memungkinkan  penyimpanan  dan  penanganan  obat  yang  baik,  dan area  penyimpanan  dilengkapi  dengan  pencahayaan  yang  memadai untuk memungkinkan semua kegiatan dilaksanakan secara akurat dan aman.\r\nBAB III Huruf C\r\n3.15. Harus  tersedia  prosedur  tertulis  dan  peralatan  yang  sesuai  untuk mengendalikan lingkungan selama penyimpanan obat dan/atau bahan obat. Faktor lingkungan yang harus dipertimbangkan, antara lain suhu, kelembaban, dan kebersihan bangunan', 28),
(23, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf C\r\n3.18. Peralatan  yang  digunakan  untuk  mengendalikan  atau  memonitor lingkungan penyimpanan obat dan/atau bahan obat harus dikalibrasi, serta kebenaran dan kesesuaian tujuan penggunaan diverifikasi secara berkala  dengan  metodologi  yang  tepat.  Kalibrasi  peralatan  harus mampu tertelusur', 29),
(24, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.2. Bangunan harus dirancang dan disesuaikan untuk memastikan bahwa kondisi  penyimpanan  yang  baik dapat  dipertahankan,  mempunyai keamanan    yang    memadai    dan    kapasitas    yang    cukup    untuk memungkinkan  penyimpanan  dan  penanganan  obat  yang  baik,  dan area  penyimpanan  dilengkapi  dengan  pencahayaan  yang  memadai untuk memungkinkan semua kegiatan dilaksanakan secara akurat dan aman.\r\nBAB III Huruf C\r\n3.15. Harus  tersedia  prosedur  tertulis  dan  peralatan  yang  sesuai  untuk mengendalikan lingkungan selama penyimpanan obat dan/atau bahan obat. Faktor lingkungan yang harus dipertimbangkan, antara lain suhu, kelembaban, dan kebersihan bangunan', 30),
(25, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.13.Bangunan  dan  fasilitas  harus  dirancang  dan  dilengkapi,  sehingga memberikan   perlindungan   terhadap   masuknya   serangga,   hewan pengerat atau hewan lain. Program pencegahan dan pengendalian hama harus tersedia. ', 31),
(26, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB III Huruf B\r\n3.12.Bangunan  dan  fasilitas  penyimpanan  harus  bersih  dan  bebas  dari sampah   dan   debu.   Harus   tersedia   prosedur   tertulis,   program pembersihan  dan  dokumentasi  pelaksanaan  pembersihan.  Peralatan pembersih  yang  dipakai  harus  sesuai  agar  tidak  menjadi  sumber kontaminasi terhadap obat dan/atau bahan obat. ', 32),
(27, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf B\r\n4.1.Fasilitas  distribusi  harus  memperoleh  pasokan  obat  dan/atau  bahan obat  dari  pemasok yang  mempunyai  izin  sesuai  dengan  peraturan perundang-undangan.\r\n4.2.Jika obatdan/atau  bahan  obat  diperoleh  dari  fasilitas  distribusi  lain, maka  fasilitas  distribusi  wajib  memastikan  bahwa  pemasok  tersebut mempunyai izin serta menerapkan prinsip dan Pedoman CDOB.\r\n4.3.Jika  obat  dan/atau  bahan  obat  diperoleh  dari  industri  farmasi,  maka fasilitas    distribusi    wajib    memastikan    bahwa    pemasok    tersebut mempunyai izin serta menerapkan prinsip dan Pedoman CPOB.\r\n4.4.Jika bahan obat diperoleh dari industri non-farmasi yang memproduksi bahan obat dengan standar mutu farmasi, maka fasilitas distribusi wajib memastikan bahwa pemasok tersebut mempunyai izin serta menerapkan prinsip CPOB.', 38),
(28, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf B\r\n4.5. Pengadaan  obat  dan/atau  bahan  obat  harus  dikendalikan  dengan prosedur   tertulis   dan   rantai   pasokan   harus   diidentifikasi   serta didokumentasikan.\r\n4.16. Nomor bets dan tanggal kedaluwarsa obat dan/atau bahan  obat harus dicatat pada saat penerimaan, untuk mempermudah penelusuran', 39),
(29, 'Pedagang Besar Farmasi', 'Permenkes 1148/Menkes/Per/VI/2011 Tahun 2011', 'Pasal 14\r\nSetiap  PBF dan  PBF  Cabang harus  memiliki apoteker penanggung jawab yang   bertanggung jawab   terhadap   pelaksanaan   ketentuan pengadaan,  penyimpanan  dan  penyaluran  obat  dan/atau  bahan  obat sebagaimana dimaksud dalam Pasal 13', 40),
(30, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No. 6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.14. Surat Elektronik\r\na.sistem elektronik harus bisa menjamin otoritas penggunaan sistem hanya   oleh   Apoteker/Tenaga   Teknis   Kefarmasian Penanggung Jawab\r\n9.14. Surat Pesanan Manual\r\nb. ditandatangani oleh Apoteker/Tenaga Teknis Kefarmasian Penanggung Jawab, dilengkapi dengan nama jelas, dan nomor Surat Izin Praktik Apoteker (SIPA)', 40),
(31, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.13 Sistem elektronik\r\nf. Mencantumkan nomor urut surat pesanan, nama kota dan tanggal dengan penulisan yang jelas\r\ng. Sistem elektronik yang digunakan harus bisa menjamin ketertelusuran produk, sekurang-kurangnya dalam waktu 3 (tiga) tahun terakhir\r\n9.14 Sistem Manual\r\nf. diberikan nomor urut, nama kota, dan tanggal dengan penulisan yang jelas\r\n\r\n', 41),
(32, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.13 Sistem elektronik\r\nf. Mencantumkan nomor urut surat pesanan, nama kota dan tanggal dengan penulisan yang jelas\r\ng. Sistem elektronik yang digunakan harus bisa menjamin ketertelusuran produk, sekurang-kurangnya dalam waktu 3 (tiga) tahun terakhir\r\n9.14 Sistem Manual\r\nf. diberikan nomor urut, nama kota, dan tanggal dengan penulisan yang jelas\r\n\r\n', 42),
(33, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf B\r\n4.1.Fasilitas  distribusi  harus  memperoleh  pasokan  obat  dan/atau  bahan obat  dari  pemasok yang  mempunyai  izin  sesuai  dengan  peraturan perundang-undangan.\r\n4.2.Jika obatdan/atau  bahan  obat  diperoleh  dari  fasilitas  distribusi  lain, maka  fasilitas  distribusi  wajib  memastikan  bahwa  pemasok  tersebut mempunyai izin serta menerapkan prinsip dan Pedoman CDOB.\r\n4.3.Jika  obat  dan/atau  bahan  obat  diperoleh  dari  industri  farmasi,  maka fasilitas    distribusi    wajib    memastikan    bahwa    pemasok    tersebut mempunyai izin serta menerapkan prinsip dan Pedoman CPOB.\r\n4.4.Jika bahan obat diperoleh dari industri non-farmasi yang memproduksi bahan obat dengan standar mutu farmasi, maka fasilitas distribusi wajib memastikan bahwa pemasok tersebut mempunyai izin serta menerapkan prinsip CPOB.', 38),
(34, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf B\r\n4.5. Pengadaan  obat  dan/atau  bahan  obat  harus  dikendalikan  dengan prosedur   tertulis   dan   rantai   pasokan   harus   diidentifikasi   serta didokumentasikan.\r\n4.16. Nomor bets dan tanggal kedaluwarsa obat dan/atau bahan  obat harus dicatat pada saat penerimaan, untuk mempermudah penelusuran', 39),
(35, 'Pedagang Besar Farmasi', 'Permenkes 1148/Menkes/Per/VI/2011 Tahun 2011', 'Pasal 14\r\nSetiap  PBF dan  PBF  Cabang harus  memiliki apoteker penanggung jawab yang   bertanggung jawab   terhadap   pelaksanaan   ketentuan pengadaan,  penyimpanan  dan  penyaluran  obat  dan/atau  bahan  obat sebagaimana dimaksud dalam Pasal 13', 40),
(36, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No. 6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.14. Surat Elektronik\r\na.sistem elektronik harus bisa menjamin otoritas penggunaan sistem hanya   oleh   Apoteker/Tenaga   Teknis   Kefarmasian Penanggung Jawab\r\n9.14. Surat Pesanan Manual\r\nb. ditandatangani oleh Apoteker/Tenaga Teknis Kefarmasian Penanggung Jawab, dilengkapi dengan nama jelas, dan nomor Surat Izin Praktik Apoteker (SIPA)', 40),
(37, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.13 Sistem elektronik\r\nf. Mencantumkan nomor urut surat pesanan, nama kota dan tanggal dengan penulisan yang jelas\r\ng. Sistem elektronik yang digunakan harus bisa menjamin ketertelusuran produk, sekurang-kurangnya dalam waktu 3 (tiga) tahun terakhir\r\n9.14 Sistem Manual\r\nf. diberikan nomor urut, nama kota, dan tanggal dengan penulisan yang jelas\r\n\r\n', 41),
(38, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.13 Sistem elektronik\r\nf. Mencantumkan nomor urut surat pesanan, nama kota dan tanggal dengan penulisan yang jelas\r\ng. Sistem elektronik yang digunakan harus bisa menjamin ketertelusuran produk, sekurang-kurangnya dalam waktu 3 (tiga) tahun terakhir\r\n9.14 Sistem Manual\r\nf. diberikan nomor urut, nama kota, dan tanggal dengan penulisan yang jelas\r\n\r\n', 42),
(39, 'Pedagang Besar Farmasi', 'Permenkes 1148/Menkes/Per/VI/2011 Tahun 2011', 'Pasal 14\r\nSetiap  PBF dan  PBF  Cabang harus  memiliki apoteker penanggung jawab yang   bertanggung jawab   terhadap   pelaksanaan   ketentuan pengadaan,  penyimpanan  dan  penyaluran  obat  dan/atau  bahan  obat sebagaimana dimaksud dalam Pasal 13\r\n', 43),
(40, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf K\r\n4.49. Penerima harus membubuhkan tanda tangan, nama jelas, SIPA/SIPTTK  dan stempel sarana pada dokumen pengiriman', 43),
(41, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf D\r\n4.13.Proses  penerimaan  bertujuan  untuk  memastikan  bahwa  kiriman  obat dan/atau  bahan  obat  yang  diterima  benar,  berasal  dari  pemasok  yang disetujui,   tidak   rusak   atau   tidak   mengalami   perubahan   selama transportasi.\r\n4.14.Obat dan/atau bahan obat tidak boleh diterima jika kedaluwarsa,atau mendekati tanggal kedaluwarsa  sehingga  kemungkinan  besar  obat dan/atau   bahan   obat   telah   kedaluwarsa   sebelum   digunakan   oleh konsumen.\r\n4.15.Obat   dan/atau   bahan   obat   yang   memerlukan   penyimpanan   atau tindakan  pengamanan  khusus,  harus  segera  dipindahkan  ke  tempat penyimpanan yang sesuai setelah dilakukan pemeriksaan.\r\n4.16.Nomor bets dan tanggal kedaluwarsa obat dan/atau bahan  obat harus dicatat pada saat penerimaan, untuk mempermudah penelusuran.\r\n4.17.Jika ditemukan obat dan/atau bahan obat diduga palsu, bets tersebut harus segera dipisahkan dan dilaporkan ke instansi berwenang, dan ke pemegang izin edar.\r\n4.18.Pengiriman  obat  dan/atau  bahan obat  yang  diterima  dari  sarana transportasi   harus   diperiksa   sebagai   bentuk   verifikasi   terhadap keutuhan kontainer / sistem penutup, fisik dan fitur kemasan serta label kemasan', 44),
(42, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.16. Dokumen penyimpanan meliputi kartu stok dan/atau sistem pencatatan mutasi obat/bahan secara elektronik. Pencatatan secara elektronik dapat memanfaatkan 2D Barcode', 45),
(43, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.16. Dokumen penyimpanan meliputi kartu stok dan/atau sistem pencatatan mutasi obat/bahan secara elektronik. Pencatatan secara elektronik dapat memanfaatkan 2D Barcode', 46),
(44, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf E\r\n4.25. Harus diambil langkah-langkah untuk memastikan rotasi stock sesuai dengan tanggal kedaluwarsa obat dan/atau bahan obat mengikuti kaedah First Expired First Out (FEFO)', 47),
(45, 'Pedagang Besar Farmasi', 'Permenkes 1148/Menkes/Per/VI/2011 Tahun 2011', 'Pasal 14\r\nSetiap  PBF dan  PBF  Cabang harus  memiliki apoteker penanggung jawab yang   bertanggung jawab   terhadap   pelaksanaan   ketentuan pengadaan,  penyimpanan  dan  penyaluran  obat  dan/atau  bahan  obat sebagaimana dimaksud dalam Pasal 13\r\n', 43),
(46, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf K\r\n4.49. Penerima harus membubuhkan tanda tangan, nama jelas, SIPA/SIPTTK  dan stempel sarana pada dokumen pengiriman', 43),
(47, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf D\r\n4.13.Proses  penerimaan  bertujuan  untuk  memastikan  bahwa  kiriman  obat dan/atau  bahan  obat  yang  diterima  benar,  berasal  dari  pemasok  yang disetujui,   tidak   rusak   atau   tidak   mengalami   perubahan   selama transportasi.\r\n4.14.Obat dan/atau bahan obat tidak boleh diterima jika kedaluwarsa,atau mendekati tanggal kedaluwarsa  sehingga  kemungkinan  besar  obat dan/atau   bahan   obat   telah   kedaluwarsa   sebelum   digunakan   oleh konsumen.\r\n4.15.Obat   dan/atau   bahan   obat   yang   memerlukan   penyimpanan   atau tindakan  pengamanan  khusus,  harus  segera  dipindahkan  ke  tempat penyimpanan yang sesuai setelah dilakukan pemeriksaan.\r\n4.16.Nomor bets dan tanggal kedaluwarsa obat dan/atau bahan  obat harus dicatat pada saat penerimaan, untuk mempermudah penelusuran.\r\n4.17.Jika ditemukan obat dan/atau bahan obat diduga palsu, bets tersebut harus segera dipisahkan dan dilaporkan ke instansi berwenang, dan ke pemegang izin edar.\r\n4.18.Pengiriman  obat  dan/atau  bahan obat  yang  diterima  dari  sarana transportasi   harus   diperiksa   sebagai   bentuk   verifikasi   terhadap keutuhan kontainer / sistem penutup, fisik dan fitur kemasan serta label kemasan', 44),
(48, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.16. Dokumen penyimpanan meliputi kartu stok dan/atau sistem pencatatan mutasi obat/bahan secara elektronik. Pencatatan secara elektronik dapat memanfaatkan 2D Barcode', 45),
(49, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IX Dokumentasi\r\n9.16. Dokumen penyimpanan meliputi kartu stok dan/atau sistem pencatatan mutasi obat/bahan secara elektronik. Pencatatan secara elektronik dapat memanfaatkan 2D Barcode', 46),
(50, 'Perubahan atas Peraturan Badan POM No. 9 Tahun 2019 tentang Pedoman Teknis Cara Distribusi Obat yang Baik', 'Peraturan Badan POM No.6 Tahun 2020', 'BAB IV Huruf E\r\n4.25. Harus diambil langkah-langkah untuk memastikan rotasi stock sesuai dengan tanggal kedaluwarsa obat dan/atau bahan obat mengikuti kaedah First Expired First Out (FEFO)', 47);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `idPegawai` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`idPegawai`, `nama`, `jabatan`, `nip`, `pangkat`, `golongan`) VALUES
(1, 'Maya, SH', 'Analis Pemeriksa Sarana dan Penyidik Obat dan Makanan', '19750305 199603 2 001', 'Penata', 'III/c'),
(2, 'Irdiansyah, SH', 'PFM Ahli Muda', '19880118 201012 1 002', 'Penata', 'III/c'),
(3, 'Marhamah, S.Farm', 'Staf Seksi Kefarmasian, Alat Kesehatan dan PKRT Dinas Kesehatan Kota Batam', '19820402 200904 2 009', 'Penata Muda Tk. I', 'III/b'),
(4, 'Paniyati, S.Farm., Apt', 'PFM Ahli Muda', '19830820 200712 2 001', 'Penata Tk. I', 'III/d'),
(5, 'Ruth Deseyanti Purba, S.Si., Apt', 'PFM Ahli Muda', '19811229 200912 2 002', 'Penata Tk. I', 'III/d'),
(6, 'Chrisnina Novelina, SKM', 'Tenaga Administrasi', '-', '-', '-'),
(7, 'Feby Setiawan, S.TP', 'PFM Ahli Pertama', '19930923 201801 1 002', 'Penata Muda', 'III/a'),
(8, 'Rai Gunawan, S.Farm., Apt', 'PFM Ahli Muda', '19890311 201212 1 001', 'Penata', 'III/c'),
(9, 'Fitria, S.Sos', 'PFM Ahli Pertama', '19930326 201903 2 008', 'Penata Muda', 'III/a'),
(10, 'Veni Tripuspitawati Hasan, SH', 'Tenaga Administrasi', '-', '-', '-'),
(11, 'David Indra Pratama, SH', 'Analis Pemeriksa Sarana dan Penyidik Obat dan Makanan', '19881111 202012 1 001', 'Penata Muda', 'III/a'),
(12, 'Mahfudziyah Shahifah, S.Farm., Apt', 'PFM Ahli Muda', '19830128 201012 2 002', 'Penata Tk. I', 'III/d'),
(13, 'Shinta Putri Wisuda, S.Farm., Apt', 'PFM Ahli Muda', '19890910 201212 2 001', 'Penata', 'III/c'),
(14, 'Achmad Fatoni, S.Si', 'PFM Ahli Muda', '19851201 200912 1 003', 'Penata', 'III/c'),
(15, 'Annisya Harfan, S.Farm., Apt', 'PFM Ahli Muda', '19900717 201402 2 003', 'Penata', 'III/c'),
(16, 'Rico Eka Putra, SH', 'PFM Ahli Pertama', '19821128 201502 1 001', 'Penata Muda Tk.I', 'III/b'),
(17, 'Septi Eka Putri, A.MF', 'PFM Terampil Pelaksana Lanjutan', '19870908 200912 2 004', 'Penata Muda', 'III/a'),
(18, 'Tri Ratna Aji, S.Farm., Apt', 'PFM Ahli Pertama', '19850321 200712 2 001', 'Penata Muda Tk.I', 'III/b'),
(19, 'Kresensia Desi Monalisa, A.Md', 'PFM Terampil Pelaksana', '19901208 201502 2 005', 'Pengatur', 'II/c'),
(20, 'Riza Fahlevie, A.Md', 'PFM Terampil Pelaksana', '19900704 201402 1 001', 'Pengatur', 'II/c'),
(21, 'Tri Murni Andayani, S.TP', 'PFM Ahli Pertama', '19900115 201502 2 002', 'Penata Muda', 'III/a'),
(22, 'Sofianingtias Frihantining Hidayati, S.Si', 'PFM Ahli Pertama', '19910915 201502 2 002', 'Penata Muda', 'III/a'),
(23, 'Reni Arfiani Yuniar, A.Md', 'PFM Mahir', '19860622 200912 2 004', 'Penata Muda', 'III/a'),
(24, 'Aisyah Nur Hidayati, A.Md.Si', 'Tenaga Teknis Pengujian', '-', '-', '-'),
(25, 'Bagus Heri Purnomo, S.Si., Apt', 'Kepala Balai POM di Batam', '19691222 200012 1 001', 'Pembina', 'IV/a'),
(26, 'Amiruddin', 'Sopir', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peringatan`
--

CREATE TABLE `tbl_peringatan` (
  `idPeringatan` int(11) NOT NULL,
  `tglSuratPeringatan` date NOT NULL,
  `noSuratPeringatan` varchar(255) NOT NULL,
  `jenisPeringatan` varchar(255) NOT NULL,
  `isiPeringatan` text NOT NULL,
  `filePeringatan` varchar(255) NOT NULL,
  `idTl` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peringatan`
--

INSERT INTO `tbl_peringatan` (`idPeringatan`, `tglSuratPeringatan`, `noSuratPeringatan`, `jenisPeringatan`, `isiPeringatan`, `filePeringatan`, `idTl`) VALUES
(4, '2021-05-01', 'T-PW.01.12.9A2.05.21.12', 'PBF', '<b>Hello World</b>', '0', 3),
(5, '2021-05-04', 'T-PW.01.12.9A2.05.21.113', 'PBF\r\n', '<b>Hello World</b>', 'suratPeringatan-5.pdf', 2),
(6, '2021-05-04', 'T-PW.01.12.9A2.05.21.114', 'PBF', '<b>Hello World</b>', 'suratPeringatan-6.pdf', 2),
(7, '2021-05-04', 'T-PW.01.12.9A2.05.21.115', 'PBF', '<b>Hello World</b>', 'suratPeringatan-7.pdf', 2),
(9, '2021-05-04', 'T-PW.01.12.9A2.05.21.117', 'PBF', '<b>Hello World</b>', '0', 2),
(22, '2021-05-17', 'T-PW.01.12.9A2.05.21.129', 'PBF', '<b>Hello World</b>', '0', 1),
(23, '2021-05-17', 'T-PW.01.12.9A2.05.21.130', 'PBF', '<b>Hello World</b>', '0', 2),
(24, '2021-05-17', 'T-PW.01.12.9A2.05.21.131', 'PBF', '<b>Hello World</b>', '0', 2),
(26, '2021-05-17', 'T-PW.01.12.9A2.05.21.133', 'Apotek', '<b>Hello World</b>', '0', 3),
(50, '2021-05-19', 'T-PW.01.12.9A2.05.21.134', 'PBF', '<b>Hello World</b>', '0', 3),
(51, '2021-05-23', 'T-PW.01.12.9A2.05.21.112', 'Apotek', '<p>nana?</p>', '0', 0),
(52, '2021-05-23', 'T-PW.01.12.9A2.05.21.135', 'Apotek', '<p>nana?</p>', '0', 0),
(53, '2021-05-23', 'T-PW.01.12.9A2.05.21.136', 'PBF', '<p>nana?</p>', '0', 1),
(54, '2021-05-23', 'T-PW.01.12.9A2.05.21.137', 'PBF', '<p>nana?</p>', '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasidinkes`
--

CREATE TABLE `tbl_rekomendasidinkes` (
  `idRekomendasi` int(11) NOT NULL,
  `perihal` int(11) NOT NULL,
  `noSuratPeringatan` int(11) NOT NULL,
  `idFeedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rincianbiaya`
--

CREATE TABLE `tbl_rincianbiaya` (
  `noKwitansi` int(11) NOT NULL,
  `uraianBiaya` int(11) NOT NULL,
  `jenisBiaya` int(11) NOT NULL,
  `nominalBiaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_sarana`
--

CREATE TABLE `tbl_sarana` (
  `idSarana` int(11) NOT NULL,
  `namaSarana` text NOT NULL,
  `alamatSarana` varchar(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `noIzinSarana` varchar(255) NOT NULL,
  `penanggungJawab` varchar(255) NOT NULL,
  `noIzinPj` varchar(255) NOT NULL,
  `kategoriSarana` varchar(255) DEFAULT NULL,
  `jenisSarana` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sarana`
--

INSERT INTO `tbl_sarana` (`idSarana`, `namaSarana`, `alamatSarana`, `pemilik`, `noIzinSarana`, `penanggungJawab`, `noIzinPj`, `kategoriSarana`, `jenisSarana`, `kota`) VALUES
(1, 'UPTD Puskesmas Teluk Bintan', 'Jl. Tok Sadek No. 5, Tembeling Tanjung', 'dr. Erlina Desi Purwanti', '', 'Uli Dahlia Sihombing', '19831202/SIKTTK_21.02/2016/2031', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Bintan'),
(2, 'UPTD Puskesmas Kawal', 'Kawal, Kel. Kawal, Kec. Gunung Kijang', 'dr. Feby Wardani Utami', '', 'Alfia Rahmi, S.Farm', '440.442/1853/4/2017', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Bintan'),
(3, 'Apotek Kawal', 'Jl. Wisata Bahari KM 29, No. 1, Kel. Kawal, Kec. Gunung Kijang', 'Rotua Fransiska Aritonang', '006/PI-KES12/485/DPMPTSP/2019', 'Anie Pujo Indriyani, S.Farm., Apt', '19840726/SIPA_21.02/2019/0010', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(4, 'Apotek Bintan Medika', 'Jl. Raya Tanjung Uban KM. 16', 'dr. Didik Suhendro', '05/PI-KES10/314/DPMPTSP/2020', 'Apt, Raega Hakhi, S.Farm', '005/PI-KES17/281/DPMPTSP/2020', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(5, 'PT. Anugerah Sejahtera Perkasa', 'Komp. MCP Blok C2 No.16-19', 'Andreas Tan', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(6, 'CV. Mulia Jaya Makmur', 'Komp. Union Industrial Park Blok H No.7, Kel. Tanjuang Sengkuang, Kec. Batu Ampar', 'Sarman', '0220105631063', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(7, 'IND MART', 'Ruko Shophouse Pasar Segar Sukajadi Blok RC No. 3, Kel. Sukajadi, Kec. Batam Kota, Kota Batam', 'Novia Tri Suhaini', '00352/DPMPTSP-BTM/PK/IX/2014', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(8, 'PT. Sumber Sari Sekawan', 'Komp. Union Industrial Oark Blok H No.2, Kel. Tg. Sengkuang, Kec. Batu Ampar', 'Haryanto Wijaya', '8120108812271', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(9, 'PT. Dwi  Putra Tunggal', 'Komp. MCP Industrial Park Blok C2 No.15, Jl. Kerapu, Kel. Tg. Sengkuang, Kec. Batu Ampar', '-', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(10, 'Indo Bali', 'Jl. Raja Usman, Kel. Baran Timur, Kec. Meral', 'Ina', '91201023036705', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(11, 'CV. Jumi Indo', 'Jl. H. Arab, Kel. Sungai Lakam Timur, Kec. Karimun', 'Susana', '9120015142781', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(12, 'PT. Gan Wan Solo', 'Jl. H. Arab, Kel. Karimun', 'Susana', '0220008561528', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(13, 'Telaga 7 Mart', 'Jl. Ahmad Yani, Sungai Lakam, Karimun', 'Dodi Orlando', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(14, 'Indo Meneer mart', 'Jl. A.Yani, Kel. Sungai Lakam, Kec. Karimun', 'Herianto', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(15, 'PT. Buru karimun Mandiri', 'Jl. Pertambangan No.35, Blok K, Kel. Kapling, Kec. Tebing', 'Budy Hartono', '8120103962009', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(16, 'PBF Mensa Bina Sukses', 'Komp. Executive Industrial Park Blok C1 No. 3A, Kel. Belian, Kec. Batam Kota, Kota Batam', 'Yong Sebastian Hendrawan', '1831/KPTS-18/X/2017', 'Ervin, S.Farm., Apt.', '056/SIPA/SDK-2/III/2019', 'O (Obat)', 'PBF (Pedagang Besar Farmasi)', 'Batam'),
(17, 'Toko Obat Boston Health & Beauty Mega Mall', 'Mega Mall Batam Center Jl. Engku Putri Kel. Teluk Tering, Kec. Batam Kota', 'Ermida', '003/TO/DPMPTSP-BTM/X/2020', 'Ermida', '', 'O (Obat)', 'TO (Toko Obat)', 'Batam'),
(18, 'Toko Obat H & H', 'Komp. Ruko Mitra Raya Blok G No.2', 'Sien Heng', '485/350/443/TO/IX/2012', 'Ratna Sirait', '147/SIPTTK/DINKES/SDK-2/X/2020', 'O (Obat)', 'TO (Toko Obat)', 'Batam'),
(19, 'PT.Sukses Niaga Lestari', 'Komplek Century Park Blok C No.5-6, Kel.Sadai,Kec.Bengkong, Kota Batam, Prov.Kepri', 'Sugianto', 'NIB 9120308292557', 'Sugianto', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(20, 'Apotek Kimia Farma Baran', 'Jl. A. Yani No. 1 D Baran 2, Kel. Baran Barat, Kec. Meral, Kab. Karimun', 'PT. Kimia Farma Apotek', '0220102880145', 'apt. Sahrum Rambe, S. Farm', '0008/DPMPTSP/SIPA-KRM/VII/2020', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(21, 'Toko Obat Guardian Mall Botania 2', 'Jl. Raja M. Saleh Batam Center, Kel. Belian, Kec. Batam Kota', 'Alizha Aisyah', '005/TO/DPMPTSP-BTM/VII/2019', 'Alizha Aisyah', '118/SIPTTK/SDK-2/V/2019', 'O (Obat)', 'TO (Toko Obat)', 'Batam'),
(22, 'Toko Obat Aulia', 'Komp. Pasar Cipta Puri Kios No.13', 'Yandi Kiswanto', '883/468/442/TO/XII/2016', 'Nur Fauziah Isnaini', '215/SIPTTK/Yankesfar-2/X/2016', 'O (Obat)', 'TO (Toko Obat)', 'Batam'),
(23, 'PT Putra Tirta Sukses', 'Kara Industrial Estate Type A No.61-62, Kel.Belian, Kec.Batam Kota, Kota Batam', 'Rendi Tan', 'NIB 9120406791991', 'Diah Kharisma Sari', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(24, 'Apotek Kimia Farma Meral', 'Jl. Ahmad Yani No. 86 RT 002 RW 001, Kel. Sungai Pasir, Kec. Meral, Kota Batam', 'PT. Kimia Farma Apotek', '9120304351613', 'Ayu Haryani Putri Sarlita, S. Farm., Apt.', '0058/SIPA/DPMPTSP/III/2019', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(25, 'PT. Vios Tirta Permata', 'Jl. Bukit Abdullah Gudang No. 6 dan 7 Tanjung Sengkuang, Batu Ampar - Batam', 'Rudiyanto', '9120009211599', 'Wijaya Marlim Effendy', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(26, 'Apotek Selasih', 'Jl. Ahmad Yani No. 39, Kel. Tanjung Balai, Kec. Karimun, Kab. Karimun', 'Mukhni Burhan', '0605/BPPT/SIA-01/2013', 'Dedy Tjahyono, S.Si., Apt.', '18/SIPA/DK/III/2017', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(27, 'Apotek Magga Farma', 'Jl. Trikora No. 13 RT 004 RW 002, Kel. Tanjung Balai Kota, Kec. Karimun, Kab. Karimun', 'dr. Sen Yung', '1588/DPMPTSP/SIA-002/2017', 'Susanti, S. Farm, Apt.', '23/SIPA/DK/IV/2017', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(28, 'Toko Obat Sarinah Jaya', 'Jl. Ahmad Yani, Komplek Karimun Indah Blok E No. 1, Kel. Sungai Lakam Timur, Kec. Karimun, Kab. Karimun', 'Suriomanteri', '0290/DPMPTSP/TO-P/VIII/2019', 'Syamsini', '15/SIP/TTK-DK-II/2017', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Karimun'),
(29, 'Apotek Sella Farma', 'Jl. H. Adam Malik No. 104 Rt 001 Rw 001', '', '', 'Eska Rizki Ary Rahmawati, S.Farm.,Apt', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Natuna'),
(30, 'PBF Millenium Pharmacon Indonesia', 'Komp. Century Park Blok B No. 01, Batam', '', '', 'Dwi Putri Anie, S.Farm., Apt', '130/SIPA/SDK-1/IX/2019', 'O (Obat)', 'PBF (Pedagang Besar Farmasi)', 'Batam'),
(31, 'PT.Citra Utama Distribusindoraya', 'Komplek Citra Buana Industrial Park III, Lot 19', 'Ibu Mina', '8120219032841', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(32, 'Gross Mart Alibaba', 'Ruko Alibaba Trade Square Blok. A, No.1-3', 'Hai Long', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(33, 'Toko Troli', 'Ruko Botania Garden Blok A1, No. 22A & 22B, Kel.Belian', 'Andy Putra', '00815/BPMPTSP-BTM/PK/XI/2014', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(34, 'PT. Mexindo Mitra Perkasa', 'Komp Mega Cipta Sejati Blok A No.6-10, Kel. Baloi, Kec. Batam Kota', 'Jason', '8120007832436', 'Jason', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(35, 'PT. Prima Niaga Indomas', 'Komp/ Puri Industrial Park 2000 Blok D No.5 Kel. Baloi', '', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(36, 'PT. Mexindo Mitra Perkasa', 'Komp Mega Cipta Sejati Blok A No.6-10, Kel. Baloi, Kec. Batam Kota', 'Jason', '8120007832436', 'Jason', '', 'K (Kosmetik)', 'DK (Distribusi Kosmetik)', 'Batam'),
(37, 'Ibra Farma', 'Ruko Marbella Blok A.5 No.016, kel.Belian, kec.Batam Kota, Kota Batam', 'Nursina El Mismar', '015/SIA/DPMPTSP-BTM/IV/2018', 'SRI Hainil,S.Si,M.Farm.,Apt', '231/SIPA/SDK-I/IV/2018', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(38, 'Minimarket Marbella', 'Komplek Ruko Marbella Blok A3 No.1-2, Kel.Belian Kec. Batam Kota, Kota Batam', 'Fredrick Albert Mesakh', '00428/BPM-BTM/PK/IV/2013', 'Fredrick Albert Mesakh', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(39, 'Apotek Mutiara F2Z', 'Ruko Mega legenda Blok B3 No.05, kel.Baloi Permai, Kec.batyam Kota, Kota Batam', 'M.Fadly Al Aziz', '015/SIA/DPMPTSP-BTM/V/2020', 'M.Rizky Vidani,S.Farm.,Apt', '033/SIPA/DINKES/SDK-2/II/2020', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(40, 'Sukses Indah (CV. Sabar Indah)', 'Ruko Mega Legenda Blok A1 No.20-25, Baloi Permai, Kota Batam', 'Lim Hang Sung', '9120106192945', 'Lim Hang Sung', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(41, 'Toko Semangat Baru', 'Ruko Mega Legenda Blok E1 No.18-19, Kel.Baloi Permai, Kec.Batam Kota, Kota Batam', 'Jan Khui', '0278/Perindag-BTM/PK/III/2009', 'Jan Khui', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(42, 'Apotek Resya', 'Jl. Pramuka Rt 01 Rw 03', '', '001/DPMPTSP-SIA/VI/2020', 'Suswanda Surya Aditama S.Si.,Apt.', '002/DPMPTSP_SIPA/V/2020', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Natuna'),
(43, 'Toko Obat Caesar Minimarket', 'Jl. Pramuka RT.007 RW.003, Kel. Ranai, Kec. Bunguran \r\n  Timur', 'Yasman', '001/503/DPMPTSP/XI/2017', 'Dian Ardiaty Siregar', '19840327/STRTTK-21/2002/2180', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Natuna'),
(44, 'UPT.RSUD Palmatak', 'Jl. Datuk Lamin No.3, Desa Payalaman, Kec. Palmatak', 'Drg.Windra Agus Yulianto,Sp.KGA', '36 tahun 2018', 'Dasrizal,AMF', '02/SIPTTTK/PTSP/01.2021', 'O (Obat)', 'RS (Rumah Sakit)', 'Kabupaten Anambas'),
(45, 'UPT.PuskesmasTarempa', 'Jl. Soekarno Hatta dusun Batu Tambun, Kec. Siantan', 'Januardi,A.MK', '-', 'Levi Fitrianti,AM.Farm', '-', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Anambas'),
(46, 'UPT.Puskesmas Palmatak', 'Jl. Panglima Awang No.1, Desa Putik, Kec. Palmatak', 'Ruslan,A.MK', '-', 'Eldarita Sari Dahlia,S.Farm.,Apt', '07/SIPA/PTSP-Naker/05.19', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Anambas'),
(47, 'Apotek Mita Atmaja', 'Jl. Pemuda, RT.002, RW.004', 'Deni Atmaja', '0220102210576', 'apt.Ade Syafarullah,S.Farm', '04/Sipa/PTSP/06.20', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(48, 'PKM Jemaja Timur', 'Jl. Datuk Kaya Maskute, Desa Ulumaras, Kec. Jemaja Timur', 'Zulvadli,AMK', '-', 'Rosmery, S.Farm.,Apt', '06/Sipa/PTSP-Naker/04.19', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Anambas'),
(49, 'UPT. Balai Pengelolaan Farmasi dan Alat Kesehatan Kabupaten Anambas', 'Jl. Raja Hamidah No.01, Tarempa, Kec. Siantan', 'apt.Fajrin Meirsa,S.Farm', '-', 'apt.Fajrin Meirsa,S.Farm', '1167/Dinkes.PPKB.400/05.2020', 'O (Obat)', 'IFK (Instalasi Farmasi)', 'Kabupaten Anambas'),
(50, 'Praktek Dokter Bersama Dr.Rizki Oktavian', 'Desa Tebing, Palmatak', 'Dr.Rizki Oktavian', '-', '-', '-', 'O (Obat)', 'DR (Praktek Dokter Mandiri)', 'Kabupaten Anambas'),
(51, 'Vitka Farma Tiban', 'Jl. Gajah Mada Komp. SPBU Vitka Point, Kel. Tiban Lama, Kec. Sekupang', 'Aprinan', '076/050/SIA/SDK-I/XI/2017', 'Didy Putra Wijaya, S.Farm., Apt', '149/SIPA/SDK-I/XI/2017', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(52, 'UPT Puskesmas Sekupang', 'Jl. Raja Haji No. 06, Kel. Sei Harapan, Kec. Sekupang', 'dr. Desi Atry', '', 'Ameliya Dessimitra, S.Farm., Apt', '223/SIPA/SDK-I/IV/2018', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(53, 'UPT Puskesmas Tiban Baru', 'Komplek Tiban Koperasi Blok K No. 84, Kel. Tiban baru, Kec. Sekupang, Kota Batam', 'drg. Anna Hashina', '-', 'Nuraroswari, S. Farm., Apt.', '066/SIPA/SDK-2/IV/2019 berlaku s.d. 29 September 2022', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(54, 'Apotek Rinoshya', 'Town House Tiban Mc. Dermott 2 Blok A No. 12A, Kel. Tiban Indah, Kec. Sekupang', 'Pelita Sitinjak', '029/SIA/DPMPTSP-BTM/VII/2019 berlaku s.d. 15 April 2023', 'A. Heri Sutrisno Saputra, S. Farm., Apt.', '109/SIPA/SDK-2/VI/2019 berlaku hingga 15 April 2023', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(55, 'Apotek Kimia Farma No.218 Sei Panas', 'Jl. Sungai Panas No.106, Kel. Sungai Panas', 'Fitri Mayenti', '004/SIPA/DPMPTSP-BTM/II/2020', 'Fitri Mayenti', '002/SIPA/SDK-2/I/2020', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(56, 'UPT. Puskesmas Sei Panas', 'Jl. Laksamana Bintan, Kel. Bengkong Indah, Kec. Bengkong, Kota Batam', 'dr. Anggraenie NW', '-', 'Erwin Sutejo', '051/SIPA/SDK-2/III/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(57, 'UPT Puskesmas Baloi Permai', 'Graha Legenda Malaka (Samping SMP 43)', 'Dr. Dewi Murni', '', 'Yunisa Friscia Yusri, Apt, M.Si', '057/SIPA/SDK-2/III/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(58, 'PT.Budi Indo Perkasa', 'Komplek Ruko Bintang Raya Blok D No.10 Pasir Putih, Kota Batam', 'Deddy Agus', '8120105910151', 'Deddy Agus', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(59, 'UD. Budi Indo Perkasa', 'Komplek Ruko Bintang Raya Blok D No.10 Pasir Putih, Kota Batam', 'Neti', '8120015222707', 'Neti', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(60, 'CV. Jaya Raya', 'Bengkong Telaga Indah Blok L1 No.01-04 Kelurahan Sadai Kecamatan Bengkong, Kota Batam', 'Dju Ba', '00197/BPMPTSP-BTM/P1/IV/2015', 'Dju Djang', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(61, 'Apotek Syuhada Pharma', 'Ruko Mas Odessa Blok C3 No.3A Belian, Kota Batam', 'Mahalaura Haderani Syuhada', '034/SIA/DPMPTSP-BTM/VIII/2019', 'Hidayati, M.Farm, Apt', '122/SIPA/SDK-2/VIII/2019', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(62, 'Puskesmas Botania', 'Kompleks Botania Garden Belian Batam Kota', 'drg. Purnama Agustine Siahaan, M. Kes', '-', 'Sry Hendryeny, S. F., Apt.', '228/SIPA/SDK-1/IV/2018', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(63, 'UPT.Puskesmas Tanjung Buntung', 'Komp. Bina Praja No.3, Kel. Tanjung Buntung, Kec. Bengkong', 'dr.Suriyati', '-', 'Noviana Pratiwi Ginting,S.Farm.,Apt', '100/SIPA/SDK-2/V/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(64, 'Apotek Mutiara', 'Ruko Botania Blok B5 No.02 Belian Batam Kota', 'Rita Widya', '9120209103105', 'apt. Yuliastuti Efendi, S. Farm.', '084/SIPA/SDK-2/VIII/2020', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(65, 'Kimia Farma Patung Kuda', 'Komp.Pertokoan Kuda Putih Blok B No.10', 'PT. Kimia Farma', '023/SIA/DPMPTSP-BTM/VI/2020', 'M. Ramadhan Syahputra,S.Farm.Apt', '049/SIPA/Dinkes/SDK-2/IV/2020', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(66, 'Mimi Foods', 'Perumahan Taman Hang Tuah Blok A4 No.3, Kota Batam', 'Siti Masitoh', 'IUMK/041/BK/IV/208', 'Siti Masitoh', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(67, 'PT. Sinar Lentera Gemilang Cabang Batam', 'Komp. Tanah Mas Blok M No. 21, Kel. Sungai Panas, Kec. Batam Kota, Kota Batam', 'John  Delfi Putra', '8120107813019', 'Selvi', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(68, 'PT. Mulia Cleantech Indonesia', 'Komp.Union Industrial Park Blok J No.6, Kel. Tanjung Sengkuang, Kec. Batu Ampar, Batam', '', 'FP.02.02/IV/003/2019', 'Mikhael Marpaung', '', 'K (Kosmetik)', 'PK (Produksi Kosmetik)', 'Batam'),
(69, 'Cocoa Way Botania', 'Komp. Pertokoan Botania Garden Tahap IV Blok B1 No.9', 'Wilto', '9120006372132', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(70, 'PT. Kerabat Setia Botania', 'Komplek Ruko Botania Garden Tahap 3 Blok A No.2', '-', '065/SIUP-MB/DPMPTSP-BTM/X/2018', 'Mawar (Karyawan)', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(71, 'PT. Total Berkat Indonesia', 'Ruko Botania 2 Blok B23 No.2', 'Tjong Kwet Liong Al Ricky', '00005/SIUP-MB/DPMPTSP-BTM/II/2021', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(72, 'Puskesmas Kampung Jabi', 'Jl. Hang Kesturi Kel. Batu Besar Nongsa Batam', 'dr. Ade Safitri Andayani', '-', 'Satria Dewi, S. Farm., Apt', '071/SIPA/SDK-2/IV/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(73, 'Apotek Nongsa Farma', 'Kampung Tua Besar Jln.Muhammad No.A3 RT 03, RW 01, kel.Batu besar, kec.Nongsa', 'Maydalena,S.Farm.,Apt', '027/SIA/DPMPTSP-BTM/VII/2019', 'Maydalena,S.Farm.,Apt', '060/SIPA/SDK-2/IV/2019', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(74, 'Apotek Valeri', 'Komplek Taman Sari Blok C No.35, Tiban', 'Olin Vina', '016/187/442/APT/1/2011', 'Erma Yunita,S.Farm.,Apt', '289/SIPA/Yankesfar-2/VIII/2016', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(75, 'PT. Lautan Bening', 'Tiban III Blok B. No.7 Rt.02, Rw.05 Kel.Patam Lestari, Kec. Sekupang', 'Drs. Ardin Siregar', '9120105881444', 'Heriyanto', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(76, 'Ratu Cake', 'Perumahan Griya Cening Permai Kampung Seranggong No.64 RT.04/RW.03 Kelurahan Daik, Kecamatan Lingga Kabupaten Lingga, Provinsi Kepulauan Riau', 'Sulastri', '0230010161828', 'Sulastri', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(77, 'PT. Pembangunan Selingsing Mandiri', 'Jl. Datok Kaya Montel RT.005 RW.003, Kampung Cenot, Desa Mapar, Daik, Lingga', 'Yusrizal', 'NIB 912 050 382 0483', 'Junaidi', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Lingga'),
(78, 'Garden Bakery', 'Jl. Dewa Ruci RT.008 RW.003, Kel. Dabo, Kec. Singkep, Kab. Lingga', 'Lip Sian', '210207309016, 21020730316, 206207301016', 'Lip Sian', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Lingga'),
(79, 'IBU NANCY', 'Jl. Dewa Ruci No.54, Kel. Dabo, Kec. Singkep', 'Nancy Evianty', '206 2104 01 0002, 22 206 2104', 'Nancy Evianty', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Lingga'),
(80, 'Rempeyek A.B', 'Bukit Abun RT.002 RW.007, Kel. Dabo lama, Kec.Singkep, Kab. Lingga', 'A.Samad', '206 14 13 0103', 'A.Samad', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Lingga'),
(81, 'Keripik Ubi Mak Nab', 'Jl. Bukit Abun, Kel. Dabo Lama, Kec.Singkep', 'Zainab', '2.06.14.13.01.014', 'Zainab', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Lingga'),
(82, 'Puskesmas Sambau', 'Jl.Hang Lekiu KM.1. Kel.Sambau, Kec.Nongsa', 'Eny Yuliawati,S.KM', '-', 'Apt.Finna Yusia Putri, S.Farm', '015/SIPA/DPMPTSP-BTM.04/1/2021', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(83, 'Klinik Tamara', 'Ruko Taman Lakota Blok F No.08-09', 'John Tamara', '009/KP/DPMPTSP-BTM/IV/2019', 'Martina Syilvianti, S.Farm.,Apt', '171/SIPA/SDK-1/1/2018', 'O (Obat)', 'PO (Klinik)', 'Batam'),
(84, 'PT.Indo Star Jaya Supplies', 'Kawasan Bintang Industri II Blok B Lot 602,603,605 Tanjung Uncang Batu Aji Kota Batam', 'Alan Pranata Jaya', '0250010232293', 'Alan Pranata Jaya', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(85, 'PT. Bintan Indo Permai', 'Jl. Lingkar Wacopek KM. 20, Kijang', 'Edi', '-', 'Edi', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Bintan'),
(86, 'Satu Market', 'Botania 2 Blok A 28 No. 1,2,2A,2B,5,6', 'Asun', '', 'Asun', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(87, 'CV. Harapan Indah', 'Ruko Arira Garden Blok A No. 3,3A,5,6,7, Kel. Batu Besar, Kec. Nongsa', 'Sugianto', '', 'Sugianto', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(88, 'Harapan Indah', 'Ruko botania 2 Blok B25 No.1-5', 'Sugianto', '', 'Sugianto', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(89, 'MM 3 Brother', 'Botania 2 Blok B17 No.1', 'Hendri', '', 'Hendri', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(90, 'Otak-otak Kak Ju', 'Kp. Sei Nam Laut RT.004, RW. 001, Kec. Bintan Timur', 'Junainah', '6.02.2102.70.0495-19', 'Junainah', '', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(91, 'Otak-otak Bu Yana', 'Kp. Sungai Enam RT.04/ RW. 01', 'Nuryana', '', 'Nuryana', '', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(92, 'PT. Philty Jaya Bintang', 'Jl. Korindo Km. 20, Kel. Sei Lekop, Kec. Bintan Timur', 'Wati', '209207205021', 'Wati', '', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(93, 'PT. Bintan Indo Permai (Bestari)', 'Jl. Lingkar Wacopek Km. 20', 'Suryati', '9120005122965', 'Heri Gunawan', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Bintan'),
(94, 'Sun Family Mart', 'Jl. Let.Jend.Suprapto No.66, RT.002, RW.001, Kle. Sungai Raya, Kec. Meral', 'Yap Mon Tek', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(95, 'Ace Mart', 'Jl. A.Yani No.7-8, Kel. Sungai Lakam, Kec. Karimun', 'Amri', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(96, 'Christ Mart', 'Jl. Sungai Pasir No.51, Kel. Meral Kota, Kec. Meral', 'Lai Hu', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(97, 'Oriental Swalayan', 'Jl. A.Yani No.03 A, Kel. Sei Lakam, Kec. Karimun', 'Lai Hu', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(98, 'Mini Market Mutiara', 'Jl. Let.Suprapto Taman Mutiara', 'Takim', 'IUMK/0123/Kec.Meral/II/2017', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(99, 'PT. Indo Mitra Ritel', 'Jl. A.Yani, Tg Balai, karimun', 'Jhoni', '8120217152921', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(100, 'King Mart', 'Baran 3, karimun', 'Riko', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(101, 'Mega Mart', 'Baran I, Karimun', 'Edy', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(102, 'PT.Bumindo Nusantara Indonesiaku', 'Komplek Citra Buana Park 1 Blok M No.1, Kel.Baloi                  Indah, Kec.lubuk Baja, Kota Batam, Kepulauan Riau', 'Kelvin', 'NIB 0220101592309', 'Merina', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(103, 'PT. Inaraya Sukses Pratama', 'Tunas Industrial Estate Blok 2F dan 2 G, Kel. Belian Kec. Batam Kota', 'Kelvin Oedianto', '8120115082038', '-', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(104, 'Toko Obat Jolly', 'Jl. Nusantara Kp. Baru No. 19, RT 004 RW 005, Kel. Tanjung Balai Kota, Kec. Karimun, kab. Karimun', 'A Tie', '0375/DPMPTSP/TO-P/2018', 'Iwan Wilmana Sinuraya, S. Farm', '03/SIK/TTK-DK-III/2015', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Karimun'),
(105, 'Toko Obat Mega Glory', 'Jl. Pahlawan, RT 01, RW 10', 'Januar', '01/DINKES-PPKB/IV/2017', 'Irwan Kurniawan', '02/SIKTTK-DINKES.PPKB/IV/2017', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Lingga'),
(106, 'Toko Obat Avicenna Farma', 'Jl. Pahlawan RT 003 RW 009, Kec. Singkep', 'Sastra Figaya', '001/DK/YANKES/2015/445', 'Pardomuan L. Tobing', '19820203/STRTTK_21/2001/1403', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Lingga'),
(107, 'Puskesmas Dabo Lama', 'Jl. Raja Ali Haji, Kel. Dabo Lama, Kec. Singkep', 'dr. Yan Cahyadi Anas', '-', 'Abdul Rasyid Simbolon, S.Farm., Apt', '001/PP-10/0020/DPMPTSPP/2020', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Lingga'),
(108, 'Toko Obat Oe Sing', 'Jl. Dewa Ruci, Kec. Singkep', 'Oe Sing', '04/DINKES-PPKB/Farm/2017/447', 'Eko Prisanti', '03/SIKTTK-DINKES.PPKB/X/2017', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Lingga'),
(109, 'Toko Obat Gembira Baru', 'Jl. Gergas, Kec. Singkep', 'Tjong Liong Hoa', '008/DK/YANKES/2012/445', 'Irwan Kurniawan, A.Md., Farm', '09/SIKTTK-DINKES/V/2012', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Lingga'),
(110, 'Mak Mil Frozen Food', 'Perumahan Taman Hang Tuah Blok A-5 No.14, Kel.Baloi Permai, Kec.Batam Kota', 'Mila Kurwana', '0220105172074', 'Mila Kurwana', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(111, 'PT. Sukanda Djaya', 'Komplek Puri Industrial Estate Blok B No. 6, Kel. Baloi Permai, Kec. Batam Kota, Kota Batam', 'Rihard L. Tobing', 'NIB : 81201107910252', 'Tommy', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(112, 'PT. Yafindo Mitra Permata', 'Komplek Puri Industrial estate Blok D No. 10, Kel. Baloi Permai, Kec. Batam Kota, Kota Batam', 'Hendro', 'NIB : 8120202912746', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(113, 'PT. Putra Sarimas Persada', 'Jl. Pertambangan, RT.001, RW.002, Kel. Lubuk Semut, Kec. Karimun', 'Sugandy', '0494/DPM/PTSP/SITU-0293/2017', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(114, 'CV. Olina Pangestu', 'Jl. Kapling No.12, Kel. Kapling, Kec. Tebing', 'Mawi', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(115, 'PT.Winindo Ekspress Kencana', 'Kom. Bengkong City Center Blok B No.03, Kota Batam, Kepulauan Riau-Indonesia', 'Jeki Susanto', 'NIB.9120206950454', 'Steven', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(116, 'Apotek Sameer Farma', 'Jl. Nusantara KM 17 RT 005 RW 001 Kijang Bintan', '', '', '', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(117, 'Apotek Riau', 'Jl. Hang Jebat RT 002 RW 007', '', '', '', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(118, 'Apotek Afrida Farma', 'Jl. Hang Jebat No. 57 RT 001 RW 007 Kijang Bintan Timur', '', '', '', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(119, 'Apotek Kimia Farma Batu Enam Belas', 'Jl. Raya Tanjung Uban Km 16', '', '', '', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(120, 'Klinik Medika Yakespen Utama', 'Jl. Hang Jebat Rt 001 Rw 008 Kijang Kota Bintan Timur', '', '', '', '', 'O (Obat)', 'PO (Klinik)', 'Kabupaten Bintan'),
(121, 'PT. Anugerah Pharmindo Lestari Cabang Batam', 'Komp. Taman Niaga Sukajadi Blok H1 No. 6 & I.1 No. 1 Sukajadi, Batam Kota Batam Kepulauan Riau', 'Leo Kristian Kurnia Sentosa', '324/1C.1/DPMPTSP/V/2020', 'Apt.Imelda Rosulina Sitorus,S.Farm', '010/SIPA/DPMPTSP-BTM.04/XII/2020', 'O (Obat)', 'PBF (Pedagang Besar Farmasi)', 'Batam'),
(122, 'Toko Pernak Pernik', 'Jl. Olahraga RT 002/RW 001, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Norhayati', '', 'Norhayati', '', 'K (Kosmetik)', 'DK (Distribusi Kosmetik)', 'Kabupaten Anambas'),
(123, 'Siantan Mart', 'Jl. Hangtuah RT 004/RW 005, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Weiliam', '052/IUMK.KCS/2/2017', 'Weiliam', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(124, 'Toko Murni', 'Jl. Tamban No. 39, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Ban Hong', '', 'Ban Hong', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(125, 'Toko Tunas Kasih', 'Jl. Tamban No. 4 RT 5/RW V, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Marcel', '', 'Marcel', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(126, 'Toko Viola Jaya', 'Jl. Tamban No. 41, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Lie Meng', '', 'Lie Meng', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(127, 'Citra Mandiri', 'Jl. Hang Tuah No. 22 & 24, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Tan Hongki', '', 'Tan Hongki', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(128, 'Toko Afrika Sejahtera', 'Jl. Tamban No. 34, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Jejaka Advenadus', '005/SIUP.KCS/VI/2015', 'Jejaka Advenadus', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(129, 'Toko Family', 'Jl. Tamban No. 42, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Hok An', '', 'Hok An', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(130, 'Toko Kita', 'Jl. Pelantar Serkah, Kel. Tarempa, Kec. Siantan, Kab. Anambas', 'Ateaw', '', 'Ateaw', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(131, 'Dan\'s Parfum', 'Jl. Pelantar Serkah, RT 1/RW 14, Kel. Tarempa, Kec. Siantan', 'Rahmadani Putra', '', 'Rahmadani Putra', '', 'K (Kosmetik)', 'DK (Distribusi Kosmetik)', 'Kabupaten Anambas'),
(132, 'Al-Mart Alga Aldo', 'Jl. Muhammad Yusuf No. 23, RT 005/RW 002, Desa Tebang, Kec. Palmatak, Kab. Anambas', 'Gunawan', '', 'Gunawan', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(133, 'Toko Nuraini', 'Jl. Abdurrahman No. 177, RT 4/RW 2, Desa Tebang, Kec. Palmatak', 'Nuraini', '', 'Nuraini', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(134, 'Toko Pak Peri', 'Jl. Usman Haji Pang, RT 03/RW 01, Desa Ladan, Kec. Palmatak', 'Peri', '', 'Peri', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(135, 'Toko Maudy', 'Jl. Usman Haji Pang, RT 004/RW 001, Desa Ladan, Kec. Palmatak', 'Widya', '', 'Widya', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(136, 'Toko Rudi', 'Jl. Usman Haji Pang, Kel. Ladan, Kec. Palmatak, Kab. Anambas', 'Rudi', '', 'Rudi', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(137, 'DDK Mart', 'Desa Ladan, Kec. Palmatak', 'Kristin Yuni', '', 'Kristin Yuni', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(138, 'Kedai Ibu Mariyani', 'Jl. Panglima Awang, Desa Putik, RT 004/RW 002, Kec. Palmatak', 'Mariyani', '', 'Mariyani', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(139, 'Toko Adek Abang', 'Jl. Usman Haji Pang, RT 001/RW 001, Desa Ladan, Kec. Palmatak', 'Darusman', '', 'Darusman', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Anambas'),
(140, 'PT.Dunia Anda Sejahtera', 'Komplek Ruko Mitra Raya Blok H.No.23 Kel. Teluk Tering, Kec. Batam Kota, Kota Batam', 'Irriyanto', '0220000562273', 'M.Rio', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(141, 'Apotek Anambas sehat Mandiri', 'Jl. Ahmad Yani, RT.001, RW.002', 'dr.John Edy', '02/PTSP-Naker.Sia/01.2020', 'Rosmery,S.Farm.,Apt', '02/SIPA/PTSP-Naker/02.19', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Anambas'),
(142, 'UPTD Puskesmas Sei Lekop', 'Sei Lekop, Kec. Bintan Timur, Kab. Bintan', 'dr. Zailendra Permana', '-', 'Norirdawati', '241/KES/2017', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Bintan'),
(143, 'UPTD Puskesmas Kijang', 'Jl. Barek Motor No. 2, Kel. Kijang, Kab. Bintan', 'Medi Farlinda', '', 'Ernofanisnur', '113/KES/2018', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Bintan'),
(144, 'Kimia Farma 454 Kijang', 'Jl. Hang Jebat RT 001/RW 008, Kel. Kijang, Kec. Bintan Timur, Kab. Bintan', 'Hermanta Tarigan', '08/NI-30/708/BPMPD/2016', 'Nurismi Dilan Afrianti, S.Farm., Apt', '329/KES/2018', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Bintan'),
(145, 'PT. Gajah Izumi Mas Perkasa', 'Jl. Karya Mandiri, Komplek Hijrah Karya Mandiri Blok A No. 1, Kel. Baloi Permai, Batam Kota', 'Suwanto', '8120101932601', 'Suardi', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(146, 'CV. Karya Cipta Sukses', 'Jl. Komplek Ruko Mitra Raya II, Blok C No. 5 ? 6, Batam', '', '', '', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(147, 'CV. Delicious Bakery & Cake', 'Kampung Durian Blok B No.57 Kelurahan Sadai, Bengkong\r\nKepulauan    Riau-Indonesia', 'Ceng Huat', 'NIB 9120503142331', 'Ceng Huat', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(148, 'Panacea', 'Ruko Tiban Bukit Asri Blok A No.01-04', 'Nur Muhammad Kurnia, S.Farm., ,Apt', '073/SIA/DPMPTSP-BTM/XI/2018', 'Nur Muhammad Kurnia, S.Farm., ,Apt', '351/SIPA/SDK-I/XI/2018', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(149, 'Olivia Mart', 'Jl. Pertambangan, Kel. Tanjung Balai, Kec. Karimun', 'Sukmawati', 'IUMK/0548/Kec.KRM/VII/208', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(150, 'Indo Mini Market (IMM)', 'Jl. Lubuk Semut, Kampung Tengah, karimun', 'Ina', '9120007692647', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(151, '212 mart Teluk Air', 'Jl. Teluk Air, RT.02, RW.04', 'Satila', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(152, 'Asli Mart Teluk Air', 'Jl. Teluk Air RT.003, RW.001', 'Zulthy', '9120009182755', '-', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(153, 'Hy Mart', 'Jl. Teluk Air, Kel. Teluk Air, Kec. Karimun', 'Thua Tie', 'IUMK/0665Kec.Krm/X/2017', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(154, 'CV. Karimun Niaga Sukses (Harapan Baru)', 'Jl. Teluk Air No.69', 'Hartono', '87/002/TIA/SK-DOM/IX/2019', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(155, 'Asli Mart', 'Jl. Jend. A.Yani No.5-9, RT 1, RW 3, Kel. Sungai Lakam Barat, Kec. Karimun', 'Joiphi', '9120009182755', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(156, 'Vincent', 'Jl. H. Arab, RT.02, RW.02, Kel. Sei Lakam Timur, Kec. Karimun', 'Haguan', '81200017250148', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(157, 'Toko Juni', 'Jl. Ahmad Yani No.40, Kel. Meral, Karimun', 'Aprianto', '1227000121819', '', '', 'M (Pangan)', 'DK (Distribusi Kosmetik)', 'Kabupaten Karimun'),
(158, 'Toko Obat Herbal', 'Jl. Nusantara No. 18 Rt 001 Rw 05 Kecamatan Karimun', '', '', '', '', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Karimun'),
(159, 'Apotek Husada Karimun', 'Jl. A. Yani No. 7-8 Rt 001 Rw 04  Tanjung Balai Karimun', '', '', '', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(160, 'Apotek Naya Farma', 'Jl. Raya Usman Batu Lipai Rt 002 Rw 01', '', '', '', '', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(161, 'Toko Obat Setia', 'Jl. A Yani Rt 001 Rw 005', '', '', '', '', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Karimun'),
(162, 'Toko Obat Sehat Bahagia', 'Jl. A Yani Baran II kelurahan Baran Barat Kecamatan Meral', '', '', '', '', 'O (Obat)', 'TO (Toko Obat)', 'Kabupaten Karimun'),
(163, 'PT. Bionesia Organic Food', 'Jl. Asoka D1, D2, D3 D5 Bintan Industrial Estate Kawasan Industri Lobam Kec. Seri Kuala Loban, Bintan', 'Bambang Sugianto', '9120302771259', 'Setiawan Heru Cahyono (GM Operasional)', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Kabupaten Bintan'),
(164, 'PBF PT. Mensa Bina Sukses Cabang Batam', 'Komplek Century Park Blok A No. 3, Batam', '', '', '', '', 'SERTIF', 'PBF (Pedagang Besar Farmasi)', 'Batam'),
(165, 'UPT.Puskesmas Kabil', 'Jl. Hasanudin No. 1 Kel. Kabil, Kec. Nongsa', 'dr. Sanny Tiurni Ari, MKKK', '-', 'Apt. Leni Agustin, S. Farm', '070/SIPA/DINKES/SDK-2/VI/2020', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(166, 'Apotek Kimia 481 Uniba', 'Komp. Pertokoan Griya Kurnia Blok B No. 34, Batam', 'PHM Kimia Farma 481 Uniba', '040/SIA/DPMPTSP-BTM/X/2019', 'Elinda Elvarina, S.Farm., Apt.', '142/SIPA/SDK-22/IX/2019', 'O (Obat)', 'AP (Apotek)', 'Batam'),
(167, 'Luna Bakery', 'Jl. Permaisuri Depan BPR Tanjung Uban, Kabupaten Bintan Propinsi Kepulauan Riau', 'Ahmad Taufan', '-', 'Ahmad Taufan', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(168, 'Cemilan Nur Fauzah', 'Perumnas Griya Indo Kencana RT.004 RW.003 Kel.Sungai Lekop Kec. Bintan Timur Kabupaten Bintan Propinsi Kepulauan Riau', 'Nilawati', '-', 'Nilawati', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(169, 'Manna Bogasari Cake', 'Jl. Taman Sari Ruko C Tg.Uban Kabupaten Bintan Propinsi Kepulauan Riau', 'Ida Pola', '-', 'Ida Pola', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(170, 'Sung Bakery & Cake', 'Jl. Industri No.88 RT.011 RW.002 Kelurahan Tj.Uban Selatan Kecamatan Bintan Utara Kabupaten Bintan Propinsi Kepulauan Riau', 'Septiany Musuresik', '-', 'Septiany Musuresik', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(171, 'Sania Snack', 'Kp. Kelong Enam RT.002 RW.022 Kel. Kijang Kota Kecamatan Bintan Timur Kabupaten Bintan Propinsi Kepulauan Riau', 'Saniyah', '-', 'Saniyah', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(172, 'Warung Fitri', 'RT 08 RW 08, Perumahan Mediterania, Batam Kota', '-', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(173, 'Okay Mart', 'Komp. Nagoya Point Blok. JJ No.10, Kel.Lubuk Baja Kota', 'Yuri', '00617/BPMPTSP_BTM/TK/X/2014', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(174, 'Puskesmas Lubuk Baja', 'Jl. Duyung kelurahan Tanjung Uma, Kecamatan Lubuk Baja', '', '', 'Asmar Nengsih, S.Farm., Apt.', '', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(175, 'Klinik Pratama Harapan Kita Dian Centre', 'Komplek Ruko Dian Centre Blok F No. 7 Kel. Batu Selicin Lubuk Baja', '', '', 'Rendi Irawan, S.Farm., Apt.', '', 'O (Obat)', 'PO (Klinik)', 'Batam'),
(176, 'Toko Delima Indah', 'Komp. Bumi Indah Blok II No.22, Kel. Lubuk Baja', 'Heriyanto', '1614/Perindag-BTM/PK/X/2002', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(177, 'TOP 100', 'Plaza TOP 100 Jodoh, Marina Centre, Lt.II', 'Sudarno', '8120217211882', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(178, 'Puskesmas Tanjung Buntung', 'Tanjung Buntung, Kel. Tanjung Buntung, Kec. Bengkong, Kota Batam', 'dr. Suriyati', '', 'Noviana Pratiwi, S.Farm., Apt', '100/SIPA/SDK-2/V/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(179, 'PT.Pacific Batam Perkasa', 'Komp. Repindo Industrial Estate Blok DII No.01', 'Dedy', '02200271586', '', '', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(180, '', '', '', '', '', '', '', '', ''),
(181, 'Puskesmas Tanjung Sengkuang', 'Jl. Tenggiri, Kel. Tanjung sengkuang, Kec. Batu Ampar', 'drg. Irma Solvia', '-', 'Al Rashid, Diky', '101/SIPA/SDK-2/V/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(182, 'Klinik Casa Medica Utama', 'Komp. Nagoya Gateway Blok D2 No.2 Lubuk Baja', 'drg. Alphiana Nirmala Dewi', '016/KP/DPMPTSP-BTM/V/2019', 'Nailil Fadilah, S.Farm, Apt', '165/SIPA/sdk-2/XI/2019', 'O (Obat)', 'PO (Klinik)', 'Batam'),
(183, 'UPTD Puskesmas Toapaya', 'Jl. Raya Tanjung Uban KM. 18, Toapaya', 'Burhanuddin, SKM', '', 'Rosmadiah, Amf', '327/KES/2017', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Bintan'),
(184, 'Anggrek Mas Mart', 'Jl. Raja Oesman Blok A No.1-5, Kel. Baran Timur, Kec. Meral', 'Bu Aling', '0218010200797', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(185, 'Ben Mart', 'Kampung Harapan, Kel.Arjosari, Kec. Tebing', 'Anak', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Kabupaten Karimun'),
(186, 'Instalasi Farmasi Kab. Karimun', 'Jl. Yos Sudarso no. 10, Kel. Tanjung Balai Kota, Kec. Karimun, Kab. Karimun', 'Pemerintah Kab. Karimun', '-', 'Lely Aeliya, S.Si., Apt.', '03/SIPA/DK/II/2019 berlaku s.d. 23 Mei 2021', 'O (Obat)', 'IFK (Instalasi Farmasi)', 'Kabupaten Karimun'),
(187, 'Luna Bakery', 'Jl. Permaisuri Depan BPR Tanjung Uban, Kabupaten Bintan Propinsi Kepulauan Riau', 'Ahmad Taufan', '-', 'Ahmad Taufan', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(188, 'Cemilan Nur Fauzah', 'Perumnas Griya Indo Kencana RT.004 RW.003 Kel.Sungai Lekop Kec. Bintan Timur Kabupaten Bintan Propinsi Kepulauan Riau', 'Nilawati', '-', 'Nilawati', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(189, 'Manna Bogasari Cake', 'Jl. Taman Sari Ruko C Tg.Uban Kabupaten Bintan Propinsi Kepulauan Riau', 'Ida Pola', '-', 'Ida Pola', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(190, 'Sung Bakery & Cake', 'Jl. Industri No.88 RT.011 RW.002 Kelurahan Tj.Uban Selatan Kecamatan Bintan Utara Kabupaten Bintan Propinsi Kepulauan Riau', 'Septiany Musuresik', '-', 'Septiany Musuresik', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(191, 'Sania Snack', 'Kp. Kelong Enam RT.002 RW.022 Kel. Kijang Kota Kecamatan Bintan Timur Kabupaten Bintan Propinsi Kepulauan Riau', 'Saniyah', '-', 'Saniyah', '-', 'M (Pangan)', 'PIRT (Produksi Industri Rumah Tangga)', 'Kabupaten Bintan'),
(192, 'PT.Central Prima Sukses', 'Komp. Union Industrial Park A2 No.10', 'Suwandi', '9120104141606', 'Suwandi', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(193, 'PT. Karya Sukses Permata', 'Kara Industrial Park Blok C No.4 Kel. Baloi Permai Kec. Batam Kota Batam', 'Suyanto', '8120002842522', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(194, 'TO. Jasmine', 'Sungai Pancur Blok J No.16, RT.03, RW.II', 'Wiwik Suwarsih', '226/447/442/TO/IV/2016', 'Rio Ariefkani', '204/SIKTTK/Yankesfar-2/VIII/2016', 'O (Obat)', 'TO (Toko Obat)', 'Batam'),
(195, 'Pt. Wahana Tirta Milenia', 'Jl. Hang Kesturi 04, Kabil Industrial Estate Blok A29', 'Zainal Abidin', '-', 'Zainal Abidin', '-', 'M (Pangan)', 'MD (Produksi Pangan)', 'Batam'),
(196, 'UPT Puskesmas Sei Pancur', 'Jl. S.parman Kav.Sei Pancur Blok I No.1, Kel. Tanjung Piayu', '', '', 'apt.Rahmawati,S.Farm', '030/SIPA/DPMPTSP-BTM.04/II/2021', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(197, 'PT. Prima Sari Jaya', 'JL. Duyung Blok A No.3, Kel. Sungai Jodoh, Kec. Batu Ampar, Batam', 'Lianto Herman', '8120119122072', 'Lianto Herman', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(198, 'PT. Sukses Mentari Mulia', 'Komplek Indah Industrial Park Blok E1 No.2', 'Sindy Pertiwi', '9120209230613', 'Sindy Pertiwi', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(199, 'PT. Thong Sing Yuen', 'Jl. Duyung, Komp. Harbour View Blok A No. 06, Kel. Sungai Jodoh, Kec. Batu Ampar', 'Salim', '8120019051206', 'Salim', '', 'M (Pangan)', 'ML (Importir Pangan)', 'Batam'),
(200, 'CV. Veri Utama Sukses', 'Komp. Sentosa Purnama Jaya Blok A1 No. 8, Kel. Sungai Jodoh, Kec. Batu Ampar', 'Suwarto', '258/DOM/12.03/VI/2012', 'Suwarto', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(201, 'UPT. Puskesmas Sei Langkai', 'Jl. Utama Kavling Baru Kel. Sei Langkai, Kec. Sagulung', '-', '-', 'Jeremy S', '-', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(202, 'UPT. Puskesmas Sei Lekop', 'Jl. Kavling Pelopor, Sei Lekop, Sagulung', '-', '-', 'Tiur Oloan', '-', 'O (Obat)', 'PKM (Puskesmas)', 'Batam'),
(203, 'PT Sumber Karya Sejati', 'Komplek Repindo Industrial Estate Blok D2 No. 4 Batam', 'Sudarsono', '', '', '', 'M (Pangan)', 'ML (Importir Pangan)', 'Batam'),
(204, 'PT Tiga Benua', 'Komplek repindo Industrial Estate Blok B2 Tanjung Sengkuang', 'Dicky Tandiono', '', '', '', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(205, 'CV.TK. Usaha Bersama', 'Komp. Repindo Blok D1 No.05, Kel. Tanjung Sengkuang, Kec. Batu Ampar', 'Lie li Tjhing', '9120104390583', 'Lie li Tjhing', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(206, 'PT. Tanindo', 'Komp. Malindo Cipta Perkasa Industri Blok C1 No.08, Kel. Tanjung Sengkuang, Kec. Batu Ampar', 'Justin Tan', '9120501892898', 'Justin Tan', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(207, 'PT. SRIJAYA RAYA PERKASA', 'Tunas Industrial Estate Blok 1A, Kel. Belian, Kec. Batam Kota, Kota Batam', 'Ariyanto', 'NIB : 6120101241795', 'Ariyanto', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(208, 'TANJAYA MART', 'Taman Mediterania Blok K3 No. 17, kel. Belian, Kec. Batam Kota, Kota Batam', 'Alim', '-', '-', '-', 'M (Pangan)', 'DM (Distribusi Pangan)', 'Batam'),
(209, 'PT. Interfood Sukses Jasindo', 'Komp. Tunas Industrial Estate Blok 8F Kel. Belian, Kec. Batam kota', 'Kasan', '8120100732664', '', '', 'M (Pangan)', 'ML (Importir Pangan)', 'Batam'),
(210, 'UPT Puskesmas Tanjung Balai', 'Jl. Kartini No. 41, Kel. Tanjung Balai Kota, Kec. Karimun, Kab. Karimun.', 'Surawan, SKM', '-', 'Rita Rahayu, S.Farm., Apt.', '0522/SIPA/DPMPTSP/X/2019', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Karimun'),
(211, 'UPT Puskesmas Meral', 'Jl. Pelabuhan Parit Rempak, Kel. Sungai Raya, Kec. Meral, Kab. Karimun', 'dr. Bambang Ekajaya', '-', 'Febriana Ramadhani, S.Farm., Apt.', '-', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Karimun'),
(212, 'UPT Puskesmas Tebing', 'Jl. DI Panjaitan, Ranggam, Tebing, Kab. Karimun', 'Muhd. Aristo Wibowo, SKM', '-', 'Apt. Anita Karlina, S. Farm', '-', 'O (Obat)', 'PKM (Puskesmas)', 'Kabupaten Karimun'),
(213, 'Apotek Grand Pharmacy', 'Jl. Letjend. Suprapto, Komplek Karimun Indah Sehat No. 3, Kel. Sungai Raya, Kec. Meral, Kab. Karimun', 'Hayati', '2600/BPMPT/SIA-05/2016', 'Harnita Azhar, S.Farm., Apt.', '12/SIPA/DK/X/2016', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun'),
(214, 'Apotek Clarissa Farma', 'Jl. Raja Oesman Komp. Ruko Garden A2 No. B2, Kel. Kapling, Kec. Tebing, Kab. Karimun', 'dr. SN Bressy Miyantra', '0001/DPMPTSP/IA-KRM/VI/2020', 'Evi Purnamasary, S.Farm., Apt.', '0001/DPMPTSP/SIPA-KRM/II/2020', 'O (Obat)', 'AP (Apotek)', 'Kabupaten Karimun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surattl`
--

CREATE TABLE `tbl_surattl` (
  `idTl` int(11) NOT NULL,
  `jenisTl` varchar(255) NOT NULL,
  `idLhk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surattl`
--

INSERT INTO `tbl_surattl` (`idTl`, `jenisTl`, `idLhk`) VALUES
(1, 'Peringatan', 1),
(2, 'Peringatan', 2),
(3, 'Peringatan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surattugas`
--

CREATE TABLE `tbl_surattugas` (
  `idSurat` int(255) NOT NULL,
  `noSuratTugas` varchar(255) NOT NULL,
  `tglSurat` date NOT NULL,
  `tglMulai` date NOT NULL,
  `bebanBiaya` varchar(11) NOT NULL,
  `kendaraan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `idAnggaran` int(255) NOT NULL,
  `tglSelesai` date NOT NULL,
  `maksud` varchar(255) NOT NULL,
  `namaPenandatangan` varchar(255) NOT NULL,
  `jabatanPenandatangan` varchar(255) NOT NULL,
  `namaPetugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surattugas`
--

INSERT INTO `tbl_surattugas` (`idSurat`, `noSuratTugas`, `tglSurat`, `tglMulai`, `bebanBiaya`, `kendaraan`, `kota`, `idAnggaran`, `tglSelesai`, `maksud`, `namaPenandatangan`, `jabatanPenandatangan`, `namaPetugas`) VALUES
(1, 'RT-02.01.9A2.03.21.1100', '2021-05-22', '2021-05-23', 'DIPA', 'Motor', 'Batam', 2, '2021-05-26', 'Pengen kesana aja', 'Nana', 'Nana', 'Nana'),
(2, 'RT-02.01.9A2.03.21.1101', '2021-05-23', '2021-05-24', 'DIPA', 'mobil', 'batam', 3, '2021-05-26', 'jalan3', 'nana', 'nana', 'nana'),
(3, 'RT-02.01.9A2.03.21.1102', '2021-05-25', '2021-05-26', 'DIPA', 'kapal', 'batam', 4, '2021-05-28', 'JALAN3', 'NANA', 'NANA', 'NANA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temuan_kemasan`
--

CREATE TABLE `tbl_temuan_kemasan` (
  `id` int(11) NOT NULL,
  `temuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temuan_kemasan`
--

INSERT INTO `tbl_temuan_kemasan` (`id`, `temuan`) VALUES
(1, 'Ketentuan Umum'),
(2, 'Lokasi dan Lingkungan IRTP tidak terawat, kotor dan debu'),
(3, 'Ruang produksi sempit, sukar dibersihkan, dan digunakan untuk memproduksi produk selain pangan'),
(4, 'Lantai, dinding, dan langit-langit, tidak terawat, kotor, berdebu dan atau berlendir'),
(5, 'Ventilasi, pintu, dan jendela tidak terawat, kotor, dan berdebu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temuan_kosmetik`
--

CREATE TABLE `tbl_temuan_kosmetik` (
  `id` int(11) NOT NULL,
  `temuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temuan_kosmetik`
--

INSERT INTO `tbl_temuan_kosmetik` (`id`, `temuan`) VALUES
(58, 'Tidak tersedia struktur organisasi'),
(59, 'Pendidikan dan/ atau pengalaman Kepala Bagian Produksi dan Kepala Bagian Pengawasan Mutu, tidak sesuai.'),
(60, 'Fungsi Kepala Bagian Produksi dan Kepala Bagian Pengawasan Mutu tidak independen.'),
(61, 'Tidak tersedia uraian tugas untuk personil inti (PJT, kepala bagian produksi,kepala bagian pengawasan mutu).'),
(62, 'Karyawan di bagian pengolahan tidak menggunakan pakaian/ seragam kerja yang sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temuan_obat`
--

CREATE TABLE `tbl_temuan_obat` (
  `id` int(11) NOT NULL,
  `temuan` varchar(255) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temuan_obat`
--

INSERT INTO `tbl_temuan_obat` (`id`, `temuan`, `jenis`) VALUES
(1, 'Nama dan alamat Rumah Sakit tidak sesuai izin dan sudah tidak berlaku', 'rs'),
(2, 'Kepala instalasi/ Apoteker tidak mempunyai SP/SIK', 'rs'),
(3, 'Selama jam buka IFRS tidak terdapat Apoteker atau tenaga teknis kefarmasian', 'rs'),
(4, 'Tidak mempunyai tempat khusus penyimpanan narkotika & psikotropika', 'rs'),
(5, 'Pengadaan tidak berasal dari sumber resmi', 'rs'),
(9, 'Tidak memiliki izin apotek\r\n', 'ap'),
(10, 'Nama dan alamat apotek tidak sesuai Surat Izin Apotek?', 'ap'),
(11, 'APA/Apoteker pendamping dan/atau PSA tidak sesuai izin?', 'ap'),
(12, 'Selama jam buka Apotek tidak terdapat Tidak terdapat Tenaga Teknis Kefarmasian', 'ap'),
(13, 'Tidak mempunyai tempat khusus penyimpanan narkotika & psikotropika sesuai ketentuan?', 'ap'),
(14, 'Selama jam buka balai pengobatan/klinik tidak terdapat apoteker atau tenaga teknis kefarmasian', 'kl'),
(15, 'Tidak mempunyai tempat khusus penyimpanan narkotika & psikotropika', 'kl'),
(16, 'Pengadaan tidak berasal dari sumber resmi', 'kl'),
(17, 'Surat pesanan tidak  ditandatangani oleh penanggungjawab balai pengobatan, mencantumkan nama jelas dan nomor SIK/ SP dan distempel balai pengobatan', 'kl'),
(18, 'Surat pesanan tidak diarsipkan berdasarkan nomor urut dan tanggal pemesanan', 'kl');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temuan_pangan`
--

CREATE TABLE `tbl_temuan_pangan` (
  `id` int(11) NOT NULL,
  `temuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temuan_pangan`
--

INSERT INTO `tbl_temuan_pangan` (`id`, `temuan`) VALUES
(6, 'Ketentuan Umum'),
(7, 'Pangan Kedaluwarsa '),
(8, 'Pangan Rusak'),
(9, 'Pangan TIE'),
(10, 'Ditemukan Obat Keras');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temuan_pbf`
--

CREATE TABLE `tbl_temuan_pbf` (
  `id` int(11) NOT NULL,
  `temuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temuan_pbf`
--

INSERT INTO `tbl_temuan_pbf` (`id`, `temuan`) VALUES
(57, ' Apakah penanggung jawab membubuhkan tanda tangan atau paraf terhadap pesanan yang dapat dilayani (manual) atau dapat menunjukkan sistem pengontrolan secara elektronik?'),
(46, 'Apakah  pengisian dokumen penerimaan barang/buku pembelian, katru persediaan barang/kartu gudang dan kartu barang sesuai dengan ketentuan CDOB?'),
(39, 'Apakah ada  surat pesanan? (manual maupun elektronik)'),
(5, 'Apakah ada absensi kehadiran setiap pegawai?'),
(8, 'Apakah ada penanggung jawab yang kualifikasinya sesuai dengan ketentuan dan memiliki SIK dan SP (sebutkan di keterangan)?'),
(31, 'Apakah ada program dan peralatan pengendalian hama dan tikus (pest control) serta didokumentasi?'),
(10, 'Apakah ada program pelatihan sesuai tugas dan fungsinya serta dievaluasi efektifitasnya dan didokumentasikan?'),
(42, 'Apakah faktur atau Surat Penyerahan Barang (SPB), diarsipkan berdasarkan tanggal penerimaan oleh penanggung jawab dan atau bagian administrasi?'),
(55, 'Apakah jumlah dalam kartu barang sesuai dengan jumlah fisik di gudang?'),
(12, 'Apakah kebersihan dan kerapian bangunan dijaga serta dipelihara?'),
(30, 'Apakah luas ruang penyimpanan dan penerangan memadai?'),
(1, 'Apakah mempunyai Pedoman CDOB dan Peraturan Perundang-undangan di bidang farmasi (UU Kesehatan, Permenkes terkait PBF, Farmakope Indonesia) terbaru? '),
(47, 'Apakah mempunyai sistem yang menjamin first in and first out / first exp first out?'),
(53, 'Apakah obat disimpan pada kondisi sesuai dengan yang tercantum dalam kemasan obat serta terpisah dari komoditi lainnya?'),
(54, 'Apakah obat yang mendekati kadaluarsa, telah kadaluarsa mengalami kerusakan kemasan, tutup atau yang diduga kemungkinan mengalami kontaminansi dan yang akan dimusnahkan diinventarisir, dipisahkan penyimpanannya dan terkunci?'),
(2, 'Apakah PBF telah menerapkan sistem mutu (tersedia Protap dari semua aspek CDOB)?'),
(9, 'Apakah penanggung jawab bekerja full time di PBF (sebutkan jadwal kehadiran di keterangan)?'),
(43, 'Apakah penanggung jawab menandatangani faktur pembelian pada saat barang diterima?'),
(38, 'Apakah pengadaan dari sumber yang sah?'),
(11, 'Apakah personil (PJ, bagian gudang, administrasi distribusi obat) pernah mengikuti pelatihan sesuai dengan tanggung jawabny?'),
(29, 'Apakah ruangan penyimpanan dilengkapi dengan alat pencatat suhu yang terkalibrasi serta dilakukan monitoring sesuai dengan persyaratan masing-masing produk?'),
(45, 'Apakah setiap penerimaan barang dicatat pada dokumen penerimaan barang/buku pembelian, kartu persediaan barang/kartu gudang dan kartu barang (secara manual atau sistem elektronik)?\r\n'),
(44, 'Apakah setiap penerimaan barang dilakukan pemeriksaan terhadap tersebut meliputi: nomor izin edar, nomor bets, tangghal kadaluarsa, kebenaran kemasan, mutu produk secara fisik?'),
(56, 'Apakah setiap penyaluran berdasarkan Surat Pesanan yang ditandatangani oleh penanggung jawab dan distempel?'),
(4, 'Apakah setiap personil sesuai kualifikasi dan memiliki uraian tugas?'),
(40, 'Apakah surat pesanan ditandatangani oleh penanggung jawab, mencantumkan nama jelas dan nomor SIK dan distempel perusahaan (untuk manual) atau penanggung jawab memiliki otoritas dalam melakukan pesanan melalui elektronik?'),
(41, 'Apakah surat pesanan manual diarsipkan berdasarkan nomor urut dan tanggal pemesanan atau tersimpan dalam database untuk surat pesanan secara elektronik?'),
(32, 'Apakah tersedia palet atau peralatan lain yang menjamin obat tidak bersentuhan langsung dengan lantai?'),
(3, 'Apakah tersedia struktur organisasi?'),
(28, 'Apakah ventilasi di ruangan non AC memadai?');

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
(1, 1, 'admin', '$2y$05$8GdJw3BVbmhN6x2t0MNise7O0xqLMCNAN1cmP6fkhy0DZl4SxB5iO', '', 'Admin', 'E-SaTu', 'admin@mail.com', '081906515912', '1526456245974.png', 1, '2020-03-14 22:34:49', '2020-03-14 21:58:17', NULL),
(2, 2, 'petugas', '$2y$05$8GdJw3BVbmhN6x2t0MNise7O0xqLMCNAN1cmP6fkhy0DZl4SxB5iO', '', 'Petugas', 'E-SaTu', 'member@mail.com', '081906515912', '1583991814826.png', 1, '2020-03-14 22:32:04', '2020-03-14 22:00:32', NULL);

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
-- Indexes for table `level_hukum`
--
ALTER TABLE `level_hukum`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `peraturan_pom`
--
ALTER TABLE `peraturan_pom`
  ADD PRIMARY KEY (`id_isbab`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `peraturan_pom_bab`
--
ALTER TABLE `peraturan_pom_bab`
  ADD PRIMARY KEY (`id_bab`),
  ADD KEY `id_isbab` (`id_isbab`);

--
-- Indexes for table `tabel`
--
ALTER TABLE `tabel`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD PRIMARY KEY (`mak`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`idFeedback`),
  ADD UNIQUE KEY `noSuratFeedback` (`noSuratFeedback`),
  ADD KEY `idSuratPeringatan` (`idSuratPeringatan`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`idKendaraan`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tbl_lhk`
--
ALTER TABLE `tbl_lhk`
  ADD PRIMARY KEY (`idLhk`);

--
-- Indexes for table `tbl_pasal_kemasan`
--
ALTER TABLE `tbl_pasal_kemasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_temuan` (`id_temuan`);

--
-- Indexes for table `tbl_pasal_kosmetik`
--
ALTER TABLE `tbl_pasal_kosmetik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasal_obat`
--
ALTER TABLE `tbl_pasal_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasal_pangan`
--
ALTER TABLE `tbl_pasal_pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasal_pbf`
--
ALTER TABLE `tbl_pasal_pbf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `tbl_peringatan`
--
ALTER TABLE `tbl_peringatan`
  ADD PRIMARY KEY (`idPeringatan`),
  ADD UNIQUE KEY `noSuratPeringatan` (`noSuratPeringatan`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  ADD PRIMARY KEY (`idSarana`);

--
-- Indexes for table `tbl_surattl`
--
ALTER TABLE `tbl_surattl`
  ADD PRIMARY KEY (`idTl`);

--
-- Indexes for table `tbl_surattugas`
--
ALTER TABLE `tbl_surattugas`
  ADD PRIMARY KEY (`idSurat`);

--
-- Indexes for table `tbl_temuan_kemasan`
--
ALTER TABLE `tbl_temuan_kemasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_temuan_kosmetik`
--
ALTER TABLE `tbl_temuan_kosmetik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_temuan_obat`
--
ALTER TABLE `tbl_temuan_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_temuan_pangan`
--
ALTER TABLE `tbl_temuan_pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_temuan_pbf`
--
ALTER TABLE `tbl_temuan_pbf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `temuan` (`temuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level_hukum`
--
ALTER TABLE `level_hukum`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peraturan_pom`
--
ALTER TABLE `peraturan_pom`
  MODIFY `id_isbab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peraturan_pom_bab`
--
ALTER TABLE `peraturan_pom_bab`
  MODIFY `id_bab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabel`
--
ALTER TABLE `tabel`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `idFeedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `idKendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `id_kota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_lhk`
--
ALTER TABLE `tbl_lhk`
  MODIFY `idLhk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pasal_kemasan`
--
ALTER TABLE `tbl_pasal_kemasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pasal_kosmetik`
--
ALTER TABLE `tbl_pasal_kosmetik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pasal_obat`
--
ALTER TABLE `tbl_pasal_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_pasal_pangan`
--
ALTER TABLE `tbl_pasal_pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_pasal_pbf`
--
ALTER TABLE `tbl_pasal_pbf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_peringatan`
--
ALTER TABLE `tbl_peringatan`
  MODIFY `idPeringatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  MODIFY `idSarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `tbl_surattl`
--
ALTER TABLE `tbl_surattl`
  MODIFY `idTl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_surattugas`
--
ALTER TABLE `tbl_surattugas`
  MODIFY `idSurat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_temuan_kemasan`
--
ALTER TABLE `tbl_temuan_kemasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_temuan_kosmetik`
--
ALTER TABLE `tbl_temuan_kosmetik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_temuan_obat`
--
ALTER TABLE `tbl_temuan_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_temuan_pangan`
--
ALTER TABLE `tbl_temuan_pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_temuan_pbf`
--
ALTER TABLE `tbl_temuan_pbf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peraturan_pom`
--
ALTER TABLE `peraturan_pom`
  ADD CONSTRAINT `peraturan_pom_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level_hukum` (`id_level`);

--
-- Constraints for table `peraturan_pom_bab`
--
ALTER TABLE `peraturan_pom_bab`
  ADD CONSTRAINT `peraturan_pom_bab_ibfk_1` FOREIGN KEY (`id_isbab`) REFERENCES `peraturan_pom` (`id_isbab`);

--
-- Constraints for table `tbl_pasal_kemasan`
--
ALTER TABLE `tbl_pasal_kemasan`
  ADD CONSTRAINT `tbl_pasal_kemasan_ibfk_1` FOREIGN KEY (`id_temuan`) REFERENCES `tbl_temuan_kemasan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
