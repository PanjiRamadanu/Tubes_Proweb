-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 07:00 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokodistro`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `KdPegawai` char(6) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(90) NOT NULL,
  `KodePos` char(5) NOT NULL,
  `NoTelp` char(13) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`KdPegawai`, `Nama`, `Alamat`, `KodePos`, `NoTelp`, `username`, `password`) VALUES
('PG001', 'Andrew Willyanto', 'JL.  Mulawarman No. 36 RT 10 Sepinggan', '76114', '089512378191', 'AdreW99', '0cc175b9c0f1b6a831c3'),
('PG002', 'Deasy Christianti', 'JL. Letjen Zaini Azhar Maulani No. 9', '76114', '081267889622', 'dessitatnti', '3f1fbf21ff9a6b450ffc'),
('PG003', 'Muhammad Ramadhan', 'JL. Mulawarman No. 36 RT 10 Sepinggan', '76116', '085288812743', 'amad_ram', 'cfb14549abe4c311cc09'),
('PG004', 'Rizjal Agus Nur Halim', 'JL. Abdi Praja Blok F-1 No.119 Sepinggan', '76115', '085627162772', 'rigusN55', '9c3dca5ceeb71ec540af'),
('PG005', 'Okta Toding Layuk', 'JL. Mulawarman Batakan Pasar Sore RT 11 Gang Pasundan', '76115', '085722227802', 'lato12345', '1afcde52c45f76a1e666'),
('PG006', 'Mukhlis Dwi Hariyanto', 'JL. Mulawarman  RT 11 No. 14 Kelurahan Lamaru ', '76116', '081387987891', 'mukhilsdwih', '490131089bc9007df7ed'),
('PG007', 'Tommy Setiawan', 'JL. MT.Haryono RT 12 No.77 ', '76114', '085722227802', 'tommyawan12', '286e048c641a3fc1a769');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `KdPelanggan` char(6) NOT NULL,
  `NamaPertama` varchar(40) NOT NULL,
  `NamaTerakhir` varchar(40) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `NoTelp` char(13) NOT NULL,
  `Alamat` varchar(90) NOT NULL,
  `KodePos` char(5) NOT NULL,
  `Kota` varchar(40) NOT NULL,
  `Username` varchar(90) NOT NULL,
  `Password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`KdPelanggan`, `NamaPertama`, `NamaTerakhir`, `Email`, `NoTelp`, `Alamat`, `KodePos`, `Kota`, `Username`, `Password`) VALUES
('PL001', 'Devy Ayustin', 'Elina', 'Elina@gmail.com', '81220201992', 'Jl Keruang Perum DPRD No.27 RT.015 Kel Gunung Bahagia Kec. Balikpapan Selatan', '76131', 'Balikpapan Timur', 'devyayustin', 'Devy9893'),
('PL002', 'Sahrul', 'Gunawan', 'Sahrul00@gmail.com', '85918181990', 'Jl. Ruhui Rahayu E-1 N0.4', '76113', 'Balikpapan Utara', 'sahruldwipatria_', 'Sahrul39'),
('PL003', 'Aditya', 'Harlan', 'Hr01@gmail.com', '81318818891', 'Jl. Mulawarman teritip Rt.05 No. ra 79', '76124', 'Balikpapan Selatan', 'a_ddtya', 'addty019'),
('PL004', 'Lutpi', 'Darmawan', 'Lutpi@gmail.com', '81910901817', 'Jl.Syarifudin yoes, S pratama Blok SQ1 No.15 Balikpapan', '76146', 'Balikpapan Utara', '_luthfiiii', 'e2ey6774'),
('PL005', 'Dedi', 'Sopandi', 'DSopandi@gmail.com', '89916262030', 'JL Jend Sudirman RT 22 No 38 Damai Balikpapan Balikpapan', '76113', 'Balikpapan Utara', 'dedi_sopandi16', 'ded38733'),
('PL006', 'Aceng', 'Muslim', 'AcengMSLM@gmail.com', '87716125077', 'Jl Letjen Haryono MT 185-E Balikpapan', '76134', 'Balikpapan Timur', 'acengmuslim_bags', 'cenga020'),
('PL007', 'Afifah', 'Darmayanti', 'Afifah@gmail.com', '85683488847', 'Jl Mayjen DI Panjaitan RT V/33 Balikpapan', '76131', 'Balikpapan Selatan', 'afifah_legeg', 'afi90902'),
('PL008', 'Irfan', 'Fadila', 'Fadila99@gmail.com', '81348587343', 'Kompl Balikpapan Baru Bl AA-2/2 Balikpapan', '76121', 'Balikpapan Selatan', 'irfanclothing18', 'irfanC10'),
('PL009', 'Rahmat', 'Hidayat', 'HidayatR@gmail.com', '87828782288', 'Jl Mulawarman Kompl KBC II/IV Balikpapan', '76142', 'Balikpapan Selatan', 'r.hidayat8', 'hidat094'),
('PL010', 'Dessy', 'Annugrah', 'DessyAn0@gmail.com', '82188191111', 'Jl Jend Sudirman 67 RT 021 Balikpapan', '76131', 'Balikpapan Selatan', 'ergananugrah', 'erga1943'),
('PL011', 'Septian', 'David', 'David1900@gmail.com', '89711889716', 'Jl Jend Sudirman Kompl Balikpapan Permai Bl H-2/8 Balikpapan', '76142', 'Balikpapan Timur', 'septiansafari_', 'septi221'),
('PL012', 'Menma Nur', 'Azkia', 'Menmanur@gmail.com', '85390119273', 'Jl Letjen Haryono MT 115 RT 084 Balikpapan', '76146', 'Balikpapan Timur', 'shop.mutiara', 'shop2222'),
('PL013', 'Eiren', 'Putri Alam', 'EirenALM@gmail.com', '85678887910', 'Jl Mayjen DI Panjaitan 16 RT 077 Balikpapan', '76149', 'Balikpapan Utara', 'naycml', 'nayd2972'),
('PL014', 'Aira', 'Pradoyo', 'Aira1999@gmail.com', '87813883663', 'Jl Jend Sudirman 279 Balikpapan', '76113', 'Balikpapan Utara', 'elitenldn', 'Eir27292'),
('PL015', 'Rezky', 'Muhammad', 'Muhammadrezky@gmail.', '87286326282', 'Jl Jend Sudirman Kompl Pantai Mas Permai Bl A/22 Balikpapan', '76131', 'Balikpapan Selatan', 'Rezky001', 'rzzqy001'),
('PL016', 'Reza', 'Putra', 'Putrakimcil@gmail.co', '87882632963', 'Kompl PU 22 Balikpapan', '76149', 'Balikpapan Utara', 'Rputra_Nc', 'Rput2610'),
('PL017', 'Anita', 'Meiho', 'Anitabach@gmail.com', '87848587883', 'Jl Jend A Yani 211 Balikpapan', '76122', 'Balikpapan Utara', 'anitacarla0', 'aniat277'),
('PL018', 'Ramdani', 'Wahyudi', 'RWahyu@gmail.com', '81867156346', 'Jl Banjar 65 RT 027 Balikpapan', '76122', 'Balikpapan Timur', 'ramdhani01', 'Danie011'),
('PL019', 'Prayogi', 'Prastiawan', 'Praspray@gmail.com', '81723752622', 'Jl Jend Sudirman 287 Balikpapan', '76131', 'Balikpapan Timur', 'prayogi_IO', 'prayo121'),
('PL020', 'Akhmad', 'Dahlan', 'Adahlan@gmail.com', '85323826322', 'Jl Jend Sudirman 67 RT 021 Balikpapan', '76124', 'Balikpapan Selatan', 'dahlanpujut', 'd4hl4N14');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `KdPemesanan` char(6) NOT NULL,
  `KdPelanggan` char(6) NOT NULL,
  `KdPegawai` char(6) NOT NULL,
  `KdPrdk` char(6) NOT NULL,
  `KdPengiriman` char(6) NOT NULL,
  `Kuantitas` int(11) NOT NULL,
  `NFpemesanan` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `TglPemesanan` date NOT NULL,
  `Biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`KdPemesanan`, `KdPelanggan`, `KdPegawai`, `KdPrdk`, `KdPengiriman`, `Kuantitas`, `NFpemesanan`, `Status`, `TglPemesanan`, `Biaya`) VALUES
('PM001', 'PL001', 'PG002', 'P0001', 'PRM001', 5, 1309176351, 'LUNAS', '2017-02-02', 1125000),
('PM002', 'PL002', 'PG002', 'P0002', 'PRM002', 7, 1302751372, 'LUNAS', '2017-02-03', 1610000),
('PM003', 'PL003', 'PG003', 'P0003', 'PRM003', 19, 1296326393, 'BELUM LUNAS', '2017-02-04', 5035000),
('PM004', 'PL004', 'PG001', 'P0004', 'PRM004', 7, 1289901414, 'LUNAS', '2017-02-04', 1855000),
('PM005', 'PL005', 'PG002', 'P0005', 'PRM005', 6, 1283476435, 'LUNAS', '2017-02-09', 780000),
('PM006', 'PL006', 'PG003', 'P0006', 'PRM006', 20, 1277051456, 'LUNAS', '2017-02-09', 3000000),
('PM007', 'PL007', 'PG001', 'P0007', 'PRM007', 15, 1270626477, 'LUNAS', '2017-02-10', 1650000),
('PM008', 'PL008', 'PG002', 'P0008', 'PRM008', 10, 1264201498, 'BELUM LUNAS', '2017-03-20', 1100000),
('PM009', 'PL009', 'PG003', 'P0009', 'PRM009', 9, 1257776519, 'LUNAS', '2017-04-30', 1350000),
('PM010', 'PL010', 'PG001', 'P0010', 'PRM010', 6, 1251351540, 'BELUM LUNAS', '2017-04-09', 780000),
('PM011', 'PL011', 'PG002', 'P0011', 'PRM011', 10, 1244926561, 'LUNAS', '2017-11-06', 1300000),
('PM012', 'PL012', 'PG003', 'P0012', 'PRM012', 25, 1238501582, 'BELUM LUNAS', '2017-11-09', 3000000),
('PM013', 'PL013', 'PG002', 'P0013', 'PRM013', 10, 1232076603, 'BELUM LUNAS', '2017-11-18', 1600000),
('PM014', 'PL014', 'PG002', 'P0014', 'PRM014', 13, 1225651624, 'LUNAS', '2017-11-19', 2080000),
('PM015', 'PL015', 'PG002', 'P0015', 'PRM015', 21, 1219226645, 'LUNAS', '2017-11-21', 3360000),
('PM016', 'PL016', 'PG001', 'P0016', 'PRM016', 6, 1212801666, 'LUNAS', '2017-11-13', 1620000),
('PM017', 'PL017', 'PG002', 'P0017', 'PRM017', 9, 1206376687, 'BELUM LUNAS', '2017-11-20', 2430000),
('PM018', 'PL018', 'PG003', 'P0018', 'PRM018', 8, 1199951708, 'BELUM LUNAS', '2017-11-20', 1760000),
('PM019', 'PL019', 'PG003', 'P0019', 'PRM019', 5, 1193526729, 'LUNAS', '2017-11-20', 1125000),
('PM020', 'PL020', 'PG002', 'P0020', 'PRM020', 17, 1187101750, 'LUNAS', '2017-11-25', 3740000);

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE IF NOT EXISTS `pengadaan` (
  `KdPengadaan` char(6) NOT NULL,
  `KdPrdk` char(6) NOT NULL,
  `Kuantitas` int(11) NOT NULL,
  `TglPemesanan` date NOT NULL,
  `TglTiba` date NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`KdPengadaan`, `KdPrdk`, `Kuantitas`, `TglPemesanan`, `TglTiba`, `Keterangan`) VALUES
('PDN001', 'P0001', 25, '2017-02-02', '2017-02-05', 'Barang diterima'),
('PDN002', 'P0002', 25, '2017-02-03', '2017-02-05', 'Barang belum diterima'),
('PDN003', 'P0003', 40, '2017-02-04', '2017-02-07', 'Barang belum diterima'),
('PDN004', 'P0004', 20, '2017-02-04', '2017-02-08', 'Barang diterima'),
('PDN005', 'P0005', 15, '2017-02-09', '2017-02-12', 'Barang diterima'),
('PDN006', 'P0006', 35, '2017-02-09', '2017-02-15', 'Barang diterima'),
('PDN007', 'P0007', 45, '2017-02-10', '2017-02-15', 'Barang diterima'),
('PDN008', 'P0008', 30, '2017-03-20', '2017-03-25', 'Barang diterima'),
('PDN009', 'P0009', 25, '2017-04-30', '2017-05-06', 'Barang belum diterima'),
('PDN010', 'P0010', 25, '2017-04-09', '2017-04-15', 'Barang diterima'),
('PDN011', 'P0011', 35, '2017-11-06', '2017-11-14', 'Barang belum diterima'),
('PDN012', 'P0012', 45, '2017-11-09', '2017-11-14', 'Barang diterima'),
('PDN013', 'P0013', 35, '2017-11-18', '2017-11-23', 'Barang diterima'),
('PDN014', 'P0014', 30, '2017-11-19', '2017-11-23', 'Barang belum diterima'),
('PDN015', 'P0015', 35, '2017-11-21', '2017-11-27', 'Barang diterima'),
('PDN016', 'P0016', 20, '2017-11-13', '2017-11-21', 'Barang diterima'),
('PDN017', 'P0017', 25, '2017-11-20', '2017-11-29', 'Barang diterima'),
('PDN018', 'P0018', 20, '2017-11-20', '2017-11-27', 'Barang diterima'),
('PDN019', 'P0019', 20, '2017-11-20', '2017-11-26', 'Barang belum diterima'),
('PDN020', 'P0020', 40, '2017-11-25', '2017-11-28', 'Barang diterima');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `KdPengiriman` char(6) NOT NULL,
  `KdPelanggan` char(6) NOT NULL,
  `KdPegawai` char(6) NOT NULL,
  `KdPemesanan` char(6) NOT NULL,
  `JnsJasa` varchar(20) NOT NULL,
  `Biaya` int(11) NOT NULL,
  `NFpengiriman` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `TglPengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`KdPengiriman`, `KdPelanggan`, `KdPegawai`, `KdPemesanan`, `JnsJasa`, `Biaya`, `NFpengiriman`, `Status`, `TglPengiriman`) VALUES
('PRM001', 'PL001', 'PG001', 'PM001', 'JNE', 40000, 1309176351, 'SUDAH DIKIRIM', '2017-02-04'),
('PRM002', 'PL002', 'PG002', 'PM002', 'JNE', 40000, 1302751372, 'SUDAH DIKIRIM', '2017-02-05'),
('PRM003', 'PL003', 'PG002', 'PM003', 'TQ', 80000, 1296326393, 'BELUM DIKIRIM', '0000-00-00'),
('PRM004', 'PL004', 'PG001', 'PM004', 'JNT', 40000, 1289901414, 'SUDAH DIKIRIM', '2017-02-06'),
('PRM005', 'PL005', 'PG001', 'PM005', 'JNE', 40000, 1283476435, 'SUDAH DIKIRIM', '2017-02-11'),
('PRM006', 'PL006', 'PG003', 'PM006', 'JNE', 80000, 1277051456, 'SUDAH DIKIRIM', '2017-02-14'),
('PRM007', 'PL007', 'PG001', 'PM007', 'TQ', 80000, 1270626477, 'SUDAH DIKIRIM', '2017-02-13'),
('PRM008', 'PL008', 'PG002', 'PM008', 'TQ', 40000, 1264201498, 'BELUM DIKIRIM', '0000-00-00'),
('PRM009', 'PL009', 'PG003', 'PM009', 'JNT', 40000, 1257776519, 'SUDAH DIKIRIM', '2017-05-02'),
('PRM010', 'PL010', 'PG003', 'PM010', 'JNE', 40000, 1251351540, 'BELUM DIKIRIM', '0000-00-00'),
('PRM011', 'PL011', 'PG003', 'PM011', 'JNT', 40000, 1244926561, 'SUDAH DIKIRIM', '2017-11-08'),
('PRM012', 'PL012', 'PG003', 'PM012', 'JNE', 80000, 1238501582, 'BELUM DIKIRIM', '0000-00-00'),
('PRM013', 'PL013', 'PG001', 'PM013', 'JNE', 40000, 1232076603, 'BELUM DIKIRIM', '0000-00-00'),
('PRM014', 'PL014', 'PG002', 'PM014', 'TQ', 40000, 1225651624, 'SUDAH DIKIRIM', '2017-11-22'),
('PRM015', 'PL015', 'PG002', 'PM015', 'JNT', 80000, 1219226645, 'SUDAH DIKIRIM', '2017-11-26'),
('PRM016', 'PL016', 'PG003', 'PM016', 'TQ', 40000, 1212801666, 'SUDAH DIKIRIM', '2017-11-15'),
('PRM017', 'PL017', 'PG002', 'PM017', 'JNE', 40000, 1206376687, 'BELUM DIKIRIM', '0000-00-00'),
('PRM018', 'PL018', 'PG003', 'PM018', 'JNT', 40000, 1199951708, 'BELUM DIKIRIM', '0000-00-00'),
('PRM019', 'PL019', 'PG002', 'PM019', 'TQ', 40000, 1193526729, 'SUDAH DIKIRIM', '2017-11-22'),
('PRM020', 'PL020', 'PG002', 'PM020', 'JNE', 80000, 1187101750, 'SUDAH DIKIRIM', '2017-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `KdPrdk` char(6) NOT NULL,
  `Merek` char(6) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Warna` varchar(10) NOT NULL,
  `Ukuran` char(20) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Baik` int(11) NOT NULL,
  `Rusak` int(11) NOT NULL,
  `Hilang` int(11) NOT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`KdPrdk`, `Merek`, `Nama`, `Warna`, `Ukuran`, `Harga`, `Jumlah`, `Baik`, `Rusak`, `Hilang`, `Detail`) VALUES
('P0001', 'ROCKSD', 'Celana Panjang', 'Biru', '27 - 32, 33 - 38', 225000, 20, 18, 2, 0, ''),
('P0002', 'KRGR', 'Celana Panjang', 'Hitam', '27 - 32, 33 - 38', 230000, 18, 18, 0, 0, ''),
('P0003', 'DOBUJA', 'Jaket Kaos', 'Abu-Abu', 'S,M,L,XL & XXL', 265000, 21, 20, 0, 1, ''),
('P0004', 'DOBUJA', 'Jaket Kaos', 'Biru Navy', 'S,M,L,XL & XXL', 265000, 13, 11, 1, 1, ''),
('P0005', 'SNIFF', 'Kaos', 'Biru Navy', 'S,M,L & XL', 130000, 9, 9, 0, 0, ''),
('P0006', 'SNIFF', 'Kaos', 'Hitam', 'S,M,L & XL', 150000, 15, 14, 1, 0, ''),
('P0007', 'CLUB27', 'Topi', 'Hitam', 'All Size', 110000, 30, 30, 0, 0, ''),
('P0008', 'CLUB27', 'Topi', 'Hijau', 'All Size', 110000, 20, 19, 0, 1, ''),
('P0009', 'NAMORY', 'Kaos Tangan Panjang', 'Abu-abu', 'S,M,L & XL', 150000, 16, 15, 1, 0, ''),
('P0010', 'REMORS', 'Kaos', 'Putih Hita', 'S,M,L & XL', 130000, 19, 19, 0, 0, ''),
('P0011', 'REMORS', 'Kaos', 'Putih Mera', 'S,M,L & XL', 130000, 25, 25, 0, 0, ''),
('P0012', 'REMORS', 'Kaos', 'Hitam', 'S,M,L & XL', 120000, 20, 17, 2, 1, ''),
('P0013', 'BRIT P', 'Jaket Kaos', 'Merah', 'S,M,L,XL & XXL', 160000, 25, 24, 0, 1, ''),
('P0014', 'BRIT P', 'Jaket Kaos', 'Hitam', 'S,M,L,XL & XXL', 160000, 17, 17, 0, 0, ''),
('P0015', 'BRIT P', 'Jaket Kaos', 'Hitam Abu-', 'S,M,L,XL & XXL', 160000, 14, 14, 0, 0, ''),
('P0016', 'KRGR', 'Jaket Levis', 'Abu-Abu', 'S,M,L & XL', 270000, 14, 14, 0, 0, ''),
('P0017', 'KRGR', 'Jaket Levis', 'Biru', 'S,M,L & XL', 270000, 16, 16, 0, 0, ''),
('P0018', 'GREAT.', 'Kemeja ', 'Abu-Abu', 'S,M,L & XL', 220000, 12, 11, 1, 0, ''),
('P0019', 'GREAT.', 'Kemeja ', 'Hitam', 'S,M,L & XL', 225000, 15, 14, 1, 0, ''),
('P0020', 'SNIFF', 'Kemeja ', 'Biru Malam', 'S,M,L & XL', 220000, 23, 21, 2, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`KdPegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`KdPelanggan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`KdPemesanan`), ADD UNIQUE KEY `KdPelanggan` (`KdPelanggan`), ADD UNIQUE KEY `KdPrdk` (`KdPrdk`), ADD UNIQUE KEY `KdPengiriman` (`KdPengiriman`), ADD KEY `KdPegawai` (`KdPegawai`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`KdPengadaan`), ADD UNIQUE KEY `KdPrdk` (`KdPrdk`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`KdPengiriman`), ADD UNIQUE KEY `KdPelanggan` (`KdPelanggan`), ADD UNIQUE KEY `KdPemesanan` (`KdPemesanan`), ADD KEY `KdPegawai` (`KdPegawai`), ADD KEY `KdPegawai_2` (`KdPegawai`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`KdPrdk`), ADD KEY `KdMerek` (`Merek`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`KdPelanggan`) REFERENCES `pelanggan` (`KdPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`KdPrdk`) REFERENCES `produk` (`KdPrdk`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`KdPengiriman`) REFERENCES `pengiriman` (`KdPengiriman`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`KdPegawai`) REFERENCES `pegawai` (`KdPegawai`);

--
-- Constraints for table `pengadaan`
--
ALTER TABLE `pengadaan`
ADD CONSTRAINT `pengadaan_ibfk_1` FOREIGN KEY (`KdPrdk`) REFERENCES `produk` (`KdPrdk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`KdPegawai`) REFERENCES `pegawai` (`KdPegawai`),
ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`KdPelanggan`) REFERENCES `pelanggan` (`KdPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengiriman_ibfk_3` FOREIGN KEY (`KdPemesanan`) REFERENCES `pemesanan` (`KdPemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
