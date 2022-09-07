-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2022 at 06:42 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsa_samsat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `merk` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produksi` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rangka` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_mesin` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_kendaraan` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `petugas_id`, `merk`, `jenis`, `tipe`, `produksi`, `silinder`, `no_rangka`, `no_mesin`, `warna`, `bahan_bakar`, `type_of_kendaraan`, `created_at`, `updated_at`) VALUES
('62dc1630556a3', '62d2f58f4e64c', 'Honda', 'Sepeda Motor', 'PCX/AT', '2022', '155', 'CX0012022N', 'PCX0012022ZN', 'Merah', 'bensin', 'dec', '2022-07-23 22:39:28', '2022-07-23 22:39:28'),
('62dc167679e77', '62d2f58f4e64c', '166 92 131 92 179 92', '8 84 73 84 144 92 76 121 155 74 155 126', '166 121 30 174 95 91', '118 159 25 164', '25 25 159', '91 121 50 159 118 25 159 50 11', '167 86 121 50 159 118 25 159 118 78 50 11', '30 96 74 92 131', '21 84 66 157 96 66', 'enc', '2022-07-23 22:40:38', '2022-07-23 22:40:38'),
('6300ee7f331d5', '62d2f58f4e64c', '114 92 136 92 157 92 112 96', '8 84 73 84 144 92 76 121 155 74 155 126', '114 43 50 159 25', '118 159 25 26', '118 26 159', '114 43 25 118 17 35 26', '114 43 50 159 25 118 17 35 26', '121 84 126 92 179', '21 84 66 157 96 66', 'enc', '2022-08-20 21:23:08', '2022-08-20 21:23:59'),
('63010dd660774', '62d2f58f4e64c', 'Suzuki', 'Sepeda Motor', 'ART02', '2020', '150', 'HT00245', 'SHT002345', 'merah', 'bensin', 'dec', '2022-08-20 23:37:42', '2022-08-20 23:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `id_kepemilikan` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kendaraan_id` varchar(256) NOT NULL,
  `pemilik_id` varchar(256) NOT NULL,
  `kode_kepemilikan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_registrasi` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan_ke` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bpkb` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_kepemilikan` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepemilikan`
--

INSERT INTO `kepemilikan` (`id_kepemilikan`, `petugas_id`, `kendaraan_id`, `pemilik_id`, `kode_kepemilikan`, `no_registrasi`, `kepemilikan_ke`, `no_bpkb`, `masa_berlaku`, `type_of_kepemilikan`, `created_at`, `updated_at`) VALUES
('62fd384be6fac', '62d2f58f4e64c', '62dc1630556a3', '62fd335f7c6ad', 'KPM1', 'E 5050 MT', '1', '13456', '2022-08-03', 'dec', '2022-08-18 01:49:47', '2022-08-18 01:49:47'),
('62fd38f42c1ee', '62d2f58f4e64c', '62dc167679e77', '62fd38d0006cb', '114 75 121 118', '86 76 35 164 118 35 76 159 103', '118', '25 35 26 35 164', '118 159 118 118 122 159 78 122 118 132', 'enc', '2022-08-18 01:52:36', '2022-08-18 01:52:36'),
('6300eef270f65', '62d2f58f4e64c', '6300ee7f331d5', '62fd38d0006cb', 'KPM3', 'E 4050 VR', '2', '25670', '2022-08-17', 'dec', '2022-08-20 21:25:36', '2022-08-20 21:25:54'),
('63010e22b1552', '62d2f58f4e64c', '63010dd660774', '63010d7b9c663', 'KPM4', 'E 6060 OV', '1', '23456', '2022-08-25', 'dec', '2022-08-20 23:38:58', '2022-08-20 23:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(256) NOT NULL,
  `penetapan_id` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kode_pembayaran` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagihan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_tetapkan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_pembayaran` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `penetapan_id`, `petugas_id`, `kode_pembayaran`, `tagihan`, `di_tetapkan`, `tanggal_pembayaran`, `type_of_pembayaran`, `created_at`, `updated_at`) VALUES
('62fd39fc5f9df', '62fd39a3a91d6', '62d2f58f4e64c', 'PBYN1', '291000', '2022-08-27', '2022-08-23', 'dec', '2022-08-18 01:57:00', '2022-08-18 01:57:00'),
('62fe9a0897f87', '62fd39ce9bb0d', '62d2f58f4e64c', 'PBYN2', '296000', '2022-08-22', '2022-08-31', 'dec', '2022-08-19 02:59:04', '2022-08-19 02:59:04'),
('6300f021d9ad5', '6300efd1c5046', '62d2f58f4e64c', 'PBYN3', '291000', '2022-09-24', '2022-08-18', 'dec', '2022-08-20 21:30:57', '2022-08-20 21:30:57'),
('63010f155d2c4', '63010edec6fe6', '62d2f58f4e64c', '75 110 166 56 35', '118 150 25 159 159 159', '118 159 118 17 122 159 78 122 118 26', '118 159 118 118 122 159 78 122 118 159', 'enc', '2022-08-20 23:43:01', '2022-08-20 23:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `nik` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_pemilik` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `petugas_id`, `nik`, `nama_pemilik`, `alamat`, `type_of_pemilik`, `created_at`, `updated_at`) VALUES
('62fd335f7c6ad', '62d2f58f4e64c', '320902330896010', 'Dika Rahmana', 'Pabuaran', 'dec', '2022-07-23 23:04:51', '2022-08-18 01:28:47'),
('62fd38d0006cb', '62d2f58f4e64c', '17 118 159 150 159 118 25 164 159 25 159 159 159 159 35', '167 142 167 142 56 113', '67 96 48 84 144 127 137 76 32 155 126 76 76', 'enc', '2022-07-23 22:37:45', '2022-08-18 01:52:00'),
('6300ede15655d', '62d2f58f4e64c', '25 118 17 35 26 164 132 78 150 25 159', '51 61 51 61 50', '75 92 21 127 92 126 92 66', 'enc', '2022-08-20 21:20:51', '2022-08-20 21:21:21'),
('63010d7b9c663', '62d2f58f4e64c', '1234567888', 'Sultan', 'Indramayu', 'dec', '2022-08-20 23:36:11', '2022-08-20 23:36:11'),
('630114e794345', '62d2f58f4e64c', '25 118 17 35 26 164 132 78 150 159 159 159 132', '167 142 167 142 56 113', '67 96 48 84 144 127 137', 'enc', '2022-08-21 00:07:51', '2022-08-21 00:07:51'),
('6302a5ba7ee5c', '62d2f58f4e64c', '159 159 159 159 159 150', '142 56 51 61 114 142', '61 66 144 126 92 131 92 77 127', 'enc', '2022-08-22 04:37:39', '2022-08-22 04:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kepemilikan_id` varchar(256) NOT NULL,
  `kode_pendaftaran` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pendaftaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `type_of_pendaftaran` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `petugas_id`, `kepemilikan_id`, `kode_pendaftaran`, `tanggal_pendaftaran`, `keterangan`, `type_of_pendaftaran`, `created_at`, `updated_at`) VALUES
('62fd3912d629a', '62d2f58f4e64c', '62fd384be6fac', 'PDT1', '2022-08-10', 'Pajak 1 Tahun', 'dec', '2022-08-18 01:53:06', '2022-08-18 01:53:06'),
('62fd3929df774', '62d2f58f4e64c', '62fd38f42c1ee', '75 51 50 118', '118 159 118 118 122 159 78 122 118 26', '75 92 149 92 112 76 25 76 50 92 179 127 66', 'enc', '2022-08-18 01:53:29', '2022-08-18 01:53:29'),
('6300ef3d11068', '62d2f58f4e64c', '6300eef270f65', 'PDT3', '2022-08-17', 'Pajak 1 Tahun', 'dec', '2022-08-20 21:27:09', '2022-08-20 21:27:09'),
('63010e52ef6dc', '62d2f58f4e64c', '63010e22b1552', 'PDT4', '2022-08-26', 'Pajak 1 Tahun', 'dec', '2022-08-20 23:39:46', '2022-08-20 23:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `penetapan`
--

CREATE TABLE `penetapan` (
  `id_penetapan` varchar(256) NOT NULL,
  `pengecekan_id` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `pemilik_id` varchar(256) NOT NULL,
  `kendaraan_id` varchar(256) NOT NULL,
  `kepemilikan_id` varchar(256) NOT NULL,
  `pendaftaran_id` varchar(256) NOT NULL,
  `kode_penetapan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bbnkb` varchar(256) NOT NULL,
  `pkb` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swdkllj` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbitan_stnk` varchar(256) NOT NULL,
  `penerbitan_ntkb` varchar(256) NOT NULL,
  `d_pkb` varchar(256) NOT NULL,
  `d_swdkllj` varchar(256) NOT NULL,
  `total` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_penetapan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_penetapan` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penetapan`
--

INSERT INTO `penetapan` (`id_penetapan`, `pengecekan_id`, `petugas_id`, `pemilik_id`, `kendaraan_id`, `kepemilikan_id`, `pendaftaran_id`, `kode_penetapan`, `bbnkb`, `pkb`, `swdkllj`, `penerbitan_stnk`, `penerbitan_ntkb`, `d_pkb`, `d_swdkllj`, `total`, `tanggal_penetapan`, `type_of_penetapan`, `created_at`, `updated_at`) VALUES
('62fd39a3a91d6', '62fd394b85fcc', '62d2f58f4e64c', '62fd335f7c6ad', '62dc1630556a3', '62fd384be6fac', '62fd3912d629a', 'PNP1', '0', '250000', '35000', '0', '0', '4000', '2000', '291000', '2022-08-25', 'dec', '2022-08-18 01:55:31', '2022-08-18 01:55:31'),
('62fd39ce9bb0d', '62fd395cdd031', '62d2f58f4e64c', '62fd38d0006cb', '62dc167679e77', '62fd38f42c1ee', '62fd3929df774', '75 56 75 118', '159', '118 164 25 159 159 159', '17 26 159 159 159', '159', '159', '159', '159', '118 150 164 159 159 159', '118 159 118 118 122 159 150 122 118 132', 'enc', '2022-08-18 01:56:14', '2022-08-18 01:56:14'),
('6300efd1c5046', '6300ef850e5e0', '62d2f58f4e64c', '62fd38d0006cb', '6300ee7f331d5', '6300eef270f65', '6300ef3d11068', 'PNP3', '0', '250000', '35000', '0', '0', '4000', '2000', '291000', '2022-08-17', 'dec', '2022-08-20 21:29:37', '2022-08-20 21:29:37'),
('63010edec6fe6', '63010e8ab1c86', '62d2f58f4e64c', '63010d7b9c663', '63010dd660774', '63010e22b1552', '63010e52ef6dc', 'PNP4', '0', '250000', '35000', '0', '0', '4000', '2000', '291000', '2022-08-26', 'dec', '2022-08-20 23:42:06', '2022-08-20 23:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `pengecekan`
--

CREATE TABLE `pengecekan` (
  `id_pengecekan` varchar(256) NOT NULL,
  `pendaftaran_id` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kode_pengecekan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengecekan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `denda_pkb` varchar(256) NOT NULL,
  `denda_swdkllj` varchar(256) NOT NULL,
  `total_denda_pkb` varchar(256) NOT NULL,
  `total_denda_swdkllj` varchar(256) NOT NULL,
  `type_of_pengecekan` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengecekan`
--

INSERT INTO `pengecekan` (`id_pengecekan`, `pendaftaran_id`, `petugas_id`, `kode_pengecekan`, `tanggal_pengecekan`, `denda_pkb`, `denda_swdkllj`, `total_denda_pkb`, `total_denda_swdkllj`, `type_of_pengecekan`, `created_at`, `updated_at`) VALUES
('62fd394b85fcc', '62fd3912d629a', '62d2f58f4e64c', 'PCK1', '2022-08-12', '1', '1', '4000', '2000', 'dec', '2022-08-18 01:54:03', '2022-08-18 01:54:03'),
('62fd395cdd031', '62fd3929df774', '62d2f58f4e64c', '75 67 114 118', '118 159 118 118 122 159 78 122 118 132', '159', '159', '159', '159', 'enc', '2022-08-18 01:54:20', '2022-08-18 01:54:20'),
('6300ef850e5e0', '6300ef3d11068', '62d2f58f4e64c', 'PCK3', '2022-08-19', '1', '1', '4000', '2000', 'dec', '2022-08-20 21:28:21', '2022-08-20 21:28:21'),
('63010e8ab1c86', '63010e52ef6dc', '62d2f58f4e64c', 'PCK4', '2022-08-26', '1', '1', '4000', '2000', 'dec', '2022-08-20 23:40:42', '2022-08-20 23:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(256) NOT NULL,
  `kode_petugas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_petugas` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `kode_petugas`, `nama_petugas`, `jenis_kelamin`, `jabatan`, `type_of_petugas`, `created_at`, `updated_at`) VALUES
('62d2f58f4e64c', '2351253424', 'Rima Suharyati', 'Perempuan', 'Admin', 'dec', '2022-07-17 00:29:28', '2022-07-17 00:29:51'),
('62d81e2f2a22e', '25 35 26 25 78 25 132 17', '51 92 126 96 66 76 121 127 48 92 66 92', '32 92 112 96 122 32 92 112 96', '75 84 74 127 137 92 157 76 75 84 66 137 84 176 84 112 92 66', 'enc', '2022-07-20 22:24:31', '2022-07-20 22:24:31'),
('62d81e582cf80', '14518172', 'Novi Anggraeni', 'Perempuan', 'Petugas Penetapan', 'dec', '2022-07-20 22:25:12', '2022-07-20 22:25:12'),
('62d81e75664dc', '25 35 26 25 78 159 78 159', '51 96 144 96', '32 92 112 96 122 32 92 112 96', '75 84 74 127 137 92 157 76 75 84 131 21 92 77 92 126 92 66', 'enc', '2022-07-20 22:25:41', '2022-07-20 22:25:41'),
('6302219daa9d1', '25 35 26 25 78 25 132 35', '126 96 112 96 76 136 92 179 77 127 144 96', '32 92 112 96 122 32 92 112 96', '75 84 74 127 137 92 157 76 75 84 66 144 92 119 74 92 126 92 66', 'enc', '2022-07-20 21:50:50', '2022-08-21 19:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(256) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_user` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `level_id`, `type_of_user`, `created_at`, `updated_at`) VALUES
('62d2ca78f25b0', '91 96 112 96 76 43 92 179 77 127 144 96', '126 96 112 96', '126 96 112 96', '126 96 112 96 136 92 179 77 127 144 96 159 25 25 164 118 159 159 159 4 137 131 92 96 48 7 176 155 131', '62b460bd3c224', 'enc', '2022-07-16 14:26:00', '2022-07-16 14:26:00'),
('6302a5ee26621', 'Darin Mulana', 'darin', 'darin', 'Darinmaulana123@gmail.com', '62b460bd3c224', 'dec', '2022-08-22 04:38:54', '2022-08-22 04:38:54'),
('6302a5fdc8071', 'Rahajeng Hanifalova Ariatin', 'rahajeng', '123', 'rahejn0000g@gamil.com', '62b460cdb91db', 'dec', '2022-08-22 04:39:09', '2022-08-22 04:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `users_level`
--

CREATE TABLE `users_level` (
  `id_level` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_level`
--

INSERT INTO `users_level` (`id_level`, `role`, `created_at`, `updated_at`) VALUES
('62b460bd3c224', '92 144 131 96 66', '2022-06-23 12:46:36', '2022-06-23 12:46:36'),
('62b460cdb91db', '127 157 84 126', '2022-06-23 12:47:08', '2022-06-23 12:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD UNIQUE KEY `no_rangka` (`no_rangka`),
  ADD UNIQUE KEY `produksi` (`produksi`),
  ADD UNIQUE KEY `no_mesin` (`no_mesin`),
  ADD KEY `fk_ptg_kd` (`petugas_id`);

--
-- Indexes for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD PRIMARY KEY (`id_kepemilikan`),
  ADD KEY `fk_ptg_kp` (`petugas_id`),
  ADD KEY `fk_pm_kp` (`pemilik_id`),
  ADD KEY `fk_kd_kp` (`kendaraan_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_ptg_pb` (`petugas_id`),
  ADD KEY `fk_pn_pb` (`penetapan_id`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `fk_petugas` (`petugas_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `fk_kp_pd` (`kepemilikan_id`),
  ADD KEY `fk_ptg_pd` (`petugas_id`);

--
-- Indexes for table `penetapan`
--
ALTER TABLE `penetapan`
  ADD PRIMARY KEY (`id_penetapan`),
  ADD KEY `fk_pn_kp` (`kepemilikan_id`),
  ADD KEY `fk_pn_pd` (`pendaftaran_id`),
  ADD KEY `fk_pn_pg` (`pengecekan_id`),
  ADD KEY `fk_pn_ptg` (`petugas_id`),
  ADD KEY `fk_pn_pm` (`pemilik_id`);

--
-- Indexes for table `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD PRIMARY KEY (`id_pengecekan`),
  ADD KEY `fk_ptg_pg` (`petugas_id`),
  ADD KEY `fk_pd_pg` (`pendaftaran_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user` (`level_id`);

--
-- Indexes for table `users_level`
--
ALTER TABLE `users_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_ptg_kd` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD CONSTRAINT `fk_kd_kp` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `fk_pm_kp` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_ptg_kp` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pn_pb` FOREIGN KEY (`penetapan_id`) REFERENCES `penetapan` (`id_penetapan`),
  ADD CONSTRAINT `fk_ptg_pb` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_kp_pd` FOREIGN KEY (`kepemilikan_id`) REFERENCES `kepemilikan` (`id_kepemilikan`),
  ADD CONSTRAINT `fk_ptg_pd` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `penetapan`
--
ALTER TABLE `penetapan`
  ADD CONSTRAINT `fk_pn_kp` FOREIGN KEY (`kepemilikan_id`) REFERENCES `kepemilikan` (`id_kepemilikan`),
  ADD CONSTRAINT `fk_pn_pd` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `fk_pn_pg` FOREIGN KEY (`pengecekan_id`) REFERENCES `pengecekan` (`id_pengecekan`),
  ADD CONSTRAINT `fk_pn_pm` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_pn_ptg` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD CONSTRAINT `fk_pd_pg` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `fk_ptg_pg` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`level_id`) REFERENCES `users_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
