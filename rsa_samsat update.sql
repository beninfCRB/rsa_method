-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Sep 2022 pada 10.52
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

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
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `produksi` varchar(50) NOT NULL,
  `silinder` varchar(50) NOT NULL,
  `no_rangka` varchar(256) NOT NULL,
  `no_mesin` varchar(256) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `bahan_bakar` varchar(50) NOT NULL,
  `type_of_kendaraan` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `petugas_id`, `merk`, `jenis`, `tipe`, `produksi`, `silinder`, `no_rangka`, `no_mesin`, `warna`, `bahan_bakar`, `type_of_kendaraan`, `created_at`, `updated_at`) VALUES
('631755cbf2e77', '6317558604b54', 'Honda', 'Sepeda Motor', 'A/T', '2015', '149', 'RT3435DFGDFG', '1234RRRRRTYA', 'hitam', 'bensin', 'dec', '2022-09-06 21:14:35', '2022-09-06 21:14:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `id_kepemilikan` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kendaraan_id` varchar(256) NOT NULL,
  `pemilik_id` varchar(256) NOT NULL,
  `kode_kepemilikan` varchar(50) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `kepemilikan_ke` varchar(50) NOT NULL,
  `no_bpkb` varchar(50) NOT NULL,
  `masa_berlaku` varchar(50) NOT NULL,
  `type_of_kepemilikan` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepemilikan`
--

INSERT INTO `kepemilikan` (`id_kepemilikan`, `petugas_id`, `kendaraan_id`, `pemilik_id`, `kode_kepemilikan`, `no_registrasi`, `kepemilikan_ke`, `no_bpkb`, `masa_berlaku`, `type_of_kepemilikan`, `created_at`, `updated_at`) VALUES
('631756fa9b197', '6317558604b54', '631755cbf2e77', '631755a65cf4e', '724b7919', '561976111a8b72', '19', '76231171327108333c323232', '769f76767a9f967a9f84', 'enc', '2022-09-06 21:19:38', '2022-09-06 21:19:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(256) NOT NULL,
  `penetapan_id` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `pemilik_id` varchar(50) NOT NULL,
  `kendaraan_id` varchar(50) NOT NULL,
  `kepemilikan_id` varchar(50) NOT NULL,
  `pendaftaran_id` varchar(50) NOT NULL,
  `pengecekan_id` varchar(50) NOT NULL,
  `kode_pembayaran` varchar(256) NOT NULL,
  `tagihan` varchar(256) NOT NULL,
  `di_tetapkan` varchar(50) NOT NULL,
  `tanggal_pembayaran` varchar(50) NOT NULL,
  `type_of_pembayaran` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `type_of_pemilik` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `petugas_id`, `nik`, `nama_pemilik`, `alamat`, `type_of_pemilik`, `created_at`, `updated_at`) VALUES
('631755a65cf4e', '6317558604b54', '11769f961176767676761976111111', '335c7e60424c795c7f305c425c', '7154155c4289', 'enc', '2022-09-06 21:13:58', '2022-09-06 21:13:58'),
('63175ec0360e1', '6317558604b54', '123123123123', 'asfasf', 'sdfsdf', 'dec', '2022-09-06 21:52:48', '2022-09-06 21:52:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kepemilikan_id` varchar(256) NOT NULL,
  `kode_pendaftaran` varchar(256) NOT NULL,
  `tanggal_pendaftaran` varchar(50) CHARACTER SET latin7 COLLATE latin7_estonian_cs NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `type_of_pendaftaran` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `petugas_id`, `kepemilikan_id`, `kode_pendaftaran`, `tanggal_pendaftaran`, `keterangan`, `type_of_pendaftaran`, `created_at`, `updated_at`) VALUES
('6319c779e0787', '6317558604b54', '631756fa9b197', 'PDT1', '2022-09-09', 'Pajak 5 Tahun', 'dec', '2022-09-08 17:44:09', '2022-09-08 17:44:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penetapan`
--

CREATE TABLE `penetapan` (
  `id_penetapan` varchar(256) NOT NULL,
  `pengecekan_id` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `pemilik_id` varchar(256) NOT NULL,
  `kendaraan_id` varchar(256) NOT NULL,
  `kepemilikan_id` varchar(256) NOT NULL,
  `pendaftaran_id` varchar(256) NOT NULL,
  `kode_penetapan` varchar(256) NOT NULL,
  `bbnkb` varchar(256) NOT NULL,
  `pkb` varchar(256) DEFAULT NULL,
  `swdkllj` varchar(256) NOT NULL,
  `penerbitan_stnk` varchar(256) NOT NULL,
  `penerbitan_ntkb` varchar(256) NOT NULL,
  `d_pkb` varchar(50) NOT NULL,
  `d_swdkllj` varchar(50) NOT NULL,
  `total` varchar(256) NOT NULL,
  `tanggal_penetapan` varchar(50) NOT NULL,
  `type_of_penetapan` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penetapan`
--

INSERT INTO `penetapan` (`id_penetapan`, `pengecekan_id`, `petugas_id`, `pemilik_id`, `kendaraan_id`, `kepemilikan_id`, `pendaftaran_id`, `kode_penetapan`, `bbnkb`, `pkb`, `swdkllj`, `penerbitan_stnk`, `penerbitan_ntkb`, `d_pkb`, `d_swdkllj`, `total`, `tanggal_penetapan`, `type_of_penetapan`, `created_at`, `updated_at`) VALUES
('6319f17519981', '6319ca1562317', '6317558604b54', '631755a65cf4e', '631755cbf2e77', '631756fa9b197', '6319c779e0787', 'PNP1', '50000', '444', '44', '444', '44', '40000000', '40000000', '80050976', '2022-09-08', 'dec', '2022-09-08 20:43:17', '2022-09-08 20:43:17'),
('6319f6f6c1849', '6319ca1562317', '6317558604b54', '631755a65cf4e', '631755cbf2e77', '631756fa9b197', '6319c779e0787', 'PNP2', '4', '4', '4', '4', '4', '40000000', '40000000', '80000020', '2022-09-08', 'dec', '2022-09-08 21:06:46', '2022-09-08 21:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengecekan`
--

CREATE TABLE `pengecekan` (
  `id_pengecekan` varchar(256) NOT NULL,
  `pendaftaran_id` varchar(256) NOT NULL,
  `petugas_id` varchar(256) NOT NULL,
  `kode_pengecekan` varchar(256) NOT NULL,
  `tanggal_pengecekan` varchar(50) NOT NULL,
  `denda_pkb` varchar(256) NOT NULL,
  `denda_swdkllj` varchar(256) NOT NULL,
  `total_denda_pkb` varchar(256) NOT NULL,
  `total_denda_swdkllj` varchar(256) NOT NULL,
  `type_of_pengecekan` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengecekan`
--

INSERT INTO `pengecekan` (`id_pengecekan`, `pendaftaran_id`, `petugas_id`, `kode_pengecekan`, `tanggal_pengecekan`, `denda_pkb`, `denda_swdkllj`, `total_denda_pkb`, `total_denda_swdkllj`, `type_of_pengecekan`, `created_at`, `updated_at`) VALUES
('6319ca1562317', '6319c779e0787', '6317558604b54', '4b437219', '769f76767a9f967a9f76', '199f9f9f9f', '769f9f9f9f', '239f9f9f9f9f9f9f', '239f9f9f9f9f9f9f', 'enc', '2022-09-08 17:55:17', '2022-09-08 17:55:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(256) NOT NULL,
  `kode_petugas` varchar(256) NOT NULL,
  `nama_petugas` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `type_of_petugas` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `kode_petugas`, `nama_petugas`, `jenis_kelamin`, `jabatan`, `type_of_petugas`, `created_at`, `updated_at`) VALUES
('6317558604b54', '197611', '8e95544289', '4b547e5483497f5c42', '8e90836042609d4a7e5c9d60', 'enc', '2022-09-06 21:13:26', '2022-09-06 21:13:26'),
('6318cb16b70e3', '197611', '4a5c4a5c', '4b547e5483497f5c42', '8e90836042', 'enc', '2022-09-07 16:47:18', '2022-09-07 16:47:18'),
('6318cb16b76fd', '197623', '4a604a60', '4b547e5483497f5c42', '8e90836042', 'enc', '2022-09-07 16:47:18', '2022-09-07 16:47:18'),
('6318cb16b7b34', '19761a', '4a7f4a7f', '4b547e5483497f5c42', '8e90836042', 'enc', '2022-09-07 16:47:18', '2022-09-07 16:47:18'),
('6318cb16b7ebd', '1976a4', '4a9b4a9b', '4b547e5483497f5c42', '8e90836042', 'enc', '2022-09-07 16:47:18', '2022-09-07 16:47:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(256) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `level_id` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_user` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `level_id`, `type_of_user`, `created_at`, `updated_at`) VALUES
('6309b947108b0', '5b6070604c2b5cb34d7f9060', '7e607060', '7e607060', '7e6070600489835c603007b09b83', '6309b1aa0580d', 'enc', '2022-08-27 06:27:26', '2022-08-27 06:27:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_level`
--

CREATE TABLE `users_level` (
  `id_level` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_level`
--

INSERT INTO `users_level` (`id_level`, `role`, `created_at`, `updated_at`) VALUES
('6309b1aa0580d', '5c90836042', '2022-08-27 05:56:45', '2022-08-27 05:56:45'),
('6309b248a9045', '7f9d547e', '2022-08-27 05:57:40', '2022-08-27 05:57:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD UNIQUE KEY `no_rangka` (`no_rangka`),
  ADD UNIQUE KEY `produksi` (`produksi`),
  ADD UNIQUE KEY `no_mesin` (`no_mesin`),
  ADD KEY `fk_ptg_kd` (`petugas_id`);

--
-- Indeks untuk tabel `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD PRIMARY KEY (`id_kepemilikan`),
  ADD KEY `fk_ptg_kp` (`petugas_id`),
  ADD KEY `fk_pm_kp` (`pemilik_id`),
  ADD KEY `fk_kd_kp` (`kendaraan_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_ptg_pb` (`petugas_id`),
  ADD KEY `fk_pn_pb` (`penetapan_id`),
  ADD KEY `fk_pmk_pb` (`pemilik_id`),
  ADD KEY `fk_knd_pb` (`kendaraan_id`),
  ADD KEY `fk_kpm_pb` (`kepemilikan_id`),
  ADD KEY `fk_pdf_pb` (`pendaftaran_id`),
  ADD KEY `fk_png_pb` (`pengecekan_id`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `fk_petugas` (`petugas_id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `fk_kp_pd` (`kepemilikan_id`),
  ADD KEY `fk_ptg_pd` (`petugas_id`);

--
-- Indeks untuk tabel `penetapan`
--
ALTER TABLE `penetapan`
  ADD PRIMARY KEY (`id_penetapan`),
  ADD KEY `fk_pn_kp` (`kepemilikan_id`),
  ADD KEY `fk_pn_pd` (`pendaftaran_id`),
  ADD KEY `fk_pn_pg` (`pengecekan_id`),
  ADD KEY `fk_pn_ptg` (`petugas_id`),
  ADD KEY `fk_pn_pm` (`pemilik_id`);

--
-- Indeks untuk tabel `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD PRIMARY KEY (`id_pengecekan`),
  ADD KEY `fk_ptg_pg` (`petugas_id`),
  ADD KEY `fk_pd_pg` (`pendaftaran_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user` (`level_id`);

--
-- Indeks untuk tabel `users_level`
--
ALTER TABLE `users_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_ptg_kd` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD CONSTRAINT `fk_kd_kp` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `fk_pm_kp` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_ptg_kp` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_knd_pb` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `fk_kpm_pb` FOREIGN KEY (`kepemilikan_id`) REFERENCES `kepemilikan` (`id_kepemilikan`),
  ADD CONSTRAINT `fk_pdf_pb` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `fk_pmk_pb` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_pn_pb` FOREIGN KEY (`penetapan_id`) REFERENCES `penetapan` (`id_penetapan`),
  ADD CONSTRAINT `fk_png_pb` FOREIGN KEY (`pengecekan_id`) REFERENCES `pengecekan` (`id_pengecekan`),
  ADD CONSTRAINT `fk_ptg_pb` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_kp_pd` FOREIGN KEY (`kepemilikan_id`) REFERENCES `kepemilikan` (`id_kepemilikan`),
  ADD CONSTRAINT `fk_ptg_pd` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `penetapan`
--
ALTER TABLE `penetapan`
  ADD CONSTRAINT `fk_pn_kp` FOREIGN KEY (`kepemilikan_id`) REFERENCES `kepemilikan` (`id_kepemilikan`),
  ADD CONSTRAINT `fk_pn_pd` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `fk_pn_pg` FOREIGN KEY (`pengecekan_id`) REFERENCES `pengecekan` (`id_pengecekan`),
  ADD CONSTRAINT `fk_pn_pm` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_pn_ptg` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD CONSTRAINT `fk_pd_pg` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `fk_ptg_pg` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`level_id`) REFERENCES `users_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
