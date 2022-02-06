-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 03:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030069`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agt`
--

CREATE TABLE `tbl_agt` (
  `id_agt` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agt`
--

INSERT INTO `tbl_agt` (`id_agt`, `nama`, `jenis_kelamin`, `alamat_rumah`, `agama`, `foto`) VALUES
(11201, 'Boy William', 'Laki-laki', 'Kirana', 'islam', 'foto1.png'),
(11202, 'Surti Munaroh', 'Perempuan', 'Bintaro', 'kristen', 'foto2.png'),
(11203, 'Asep Sunandar', 'Laki-laki', 'Bsd', 'islam', 'foto5.png'),
(11204, 'Kurniawan', 'Laki-laki', 'Pondok Benda', 'Kristen', 'foto4.png'),
(11205, 'Rebecca', 'Perempuan', 'Depok', 'Kristen', 'foto3.png'),
(11206, 'Eman', 'Laki-laki', 'Kedongdong', 'Islam', 'foto2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun`, `gambar`) VALUES
(11503, 'Logika Pemograman Python', 'Abdul Kadir', 'Komputindo', '2019', '1.jpg'),
(11504, 'Petunjuk Memulai UX dari NOL', 'Sam Brodi', 'Desainyuk', '2020', '2.png'),
(11505, 'Logika Pemograman Menggunakan C++', 'Abdul Kadir', 'Komputindo', '2020', '3.jpg'),
(11506, 'Belajar Pemograman ANDROID untuk semua Kebutuhan', 'Ir Yuniar Supardi', 'Komputindo', '2019', '4.jpg'),
(11507, 'Belajar Pemograman Fortran', 'Budi Raharjo', 'Informatika', '2020', '5.jpg'),
(11508, '7 IN 1 Pemograman WEB untuk Pemula', 'Rohi Abdulloh', 'Komputindo', '2020', '6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agt`
--
ALTER TABLE `tbl_agt`
  ADD PRIMARY KEY (`id_agt`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
