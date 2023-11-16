-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 14.50
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan_pal_putih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_dibuat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `tanggal_dibuat`) VALUES
('admin-1314414', 'admin', 'admin', ''),
('admin-1700101493', 'Gideon', '123', '16 November 2023'),
('admin-1700101524', 'User', '321', '16 November 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kotak_saran`
--

CREATE TABLE `tb_kotak_saran` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `rt/rw` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` enum('saran','kritik','lainnya') NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kotak_saran`
--

INSERT INTO `tb_kotak_saran` (`id`, `nama`, `rt/rw`, `no_telp`, `deskripsi`, `kategori`, `tanggal`) VALUES
('k-12141414', 'Gix', '001', '86684885532', 'tes no 2', 'kritik', '12113113'),
('l-13qeqe', 'Gagg', '006', '46364463436', 'aaffaaffaf', 'lainnya', 'affafafafa'),
('s-21002121', 'Gideon', '002', '082199193910', 'tes aja', 'saran', '1qqqdqddqqd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_surat` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `surat_pengantar` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `status` enum('Selesai','Proses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tugas`
--

INSERT INTO `tb_tugas` (`id`, `nama`, `jenis_surat`, `no_telp`, `tanggal`, `surat_pengantar`, `ktp`, `kk`, `status`) VALUES
('sk-123131', 'Gideon Manobi', 'Surat Keterangan Domisili', '241414114', 'ddagd', 'ddd.png', 'ad.jpg', 'IMG.jpg', 'Proses'),
('sk-3552255', 'Jenno', 'Surat Keterangan ', '90653252', '1313131w', 'IMG.jpg', 'ddd.png', 'ad.jpg', 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kotak_saran`
--
ALTER TABLE `tb_kotak_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
