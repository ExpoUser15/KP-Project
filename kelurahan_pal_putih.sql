-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 03:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `tb_kotak_saran`
--

CREATE TABLE `tb_kotak_saran` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `rt/rw` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` enum('saran','kritik','lainnya') NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kotak_saran`
--

INSERT INTO `tb_kotak_saran` (`id`, `nama`, `rt/rw`, `no_telp`, `deskripsi`, `kategori`, `tanggal`) VALUES
('k-12141414', 'Gix', '001', '86684885532', 'tes no 2', 'kritik', '12113113'),
('l-13qeqe', 'Gagg', '006', '46364463436', 'aaffaaffaf', 'lainnya', 'affafafafa'),
('s-21002121', 'Gideon', '002', '082199193910', 'tes aja', 'saran', '1qqqdqddqqd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
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
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id`, `nama`, `jenis_surat`, `no_telp`, `tanggal`, `surat_pengantar`, `ktp`, `kk`, `status`) VALUES
('adaddadad', 'ddddaddada', 'daadfaaf', '241414114', 'ddagd', 'fafsgag', 'gagaag', 'gagagag', 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kotak_saran`
--
ALTER TABLE `tb_kotak_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
