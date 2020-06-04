-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 12:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_starbhakno`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alamat` text CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jurusan` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nama_siswa`, `alamat`, `jenis_kelamin`, `tgl_masuk`, `jurusan`) VALUES
(1, 'Starbhak Soft', 'Depok', 'Laki-laki', '2019-01-01', 'Rekayasa Perangkat Lunak\r\n'),
(2, 'Sule', 'Jakarta', 'Laki-laki', '2019-01-01', 'Multimedia'),
(3, 'Maemunah', 'Yogyakarta', 'Perempuan', '2019-01-01', 'Rekayasa Perangkat Lunak'),
(4, 'Siti', 'Semarang', 'Perempuan', '2019-01-01', 'Multimedia'),
(5, 'Andre', 'Purwokerto', 'Laki-laki', '2019-01-22', 'Rekayasa Perangkat Lunak'),
(6, 'Nunung', 'Cilacap', 'Perempuan', '2019-03-20', 'Rekayasa Perangkat Lunak'),
(7, 'Aziz', 'Cilacap', 'Laki-laki', '2019-03-14', 'Rekayasa\r\nPerangkat Lunak'),
(8, 'Lucinta Luma', 'Jakarta', 'Laki-laki', '2019-03-19', 'Rekayasa Perangkat Lunak'),
(9, 'Luna Maya', 'Yogyakarta', 'Perempuan', '2019-03-19', 'Rekayasa Perangkat Lunak'),
(10, 'Syahrini', 'Semarang', 'Perempuan', '2019-03-22', 'Rekayasa Perangkat Lunak'),
(11, 'Tegar', 'Purwokerto', 'Laki-laki', '2019-03-07', 'Rekayasa Perangkat Lunak'),
(12, 'Tukul', 'Cilacap', 'Laki-laki', '2019-03-05', 'Rekayasa Perangkat Lunak'),
(13, 'Nanang', 'Jakarta', 'Laki-laki', '2019-03-19', 'Rekayasa Perangkat Lunak'),
(14, 'Bambang', 'Yogyakarta', 'Laki-laki', '2019-03-19', 'Multimedia'),
(15, 'Arwana', 'Semarang', 'Laki-laki', '2019-03-12', 'Rekayasa Perangkat Lunak'),
(16, 'Alan', 'Yogyakarta', 'Laki-laki', '2019-03-12', 'Multimedia'),
(17, 'John', 'Semarang', 'Laki-laki', '2019-03-12', 'Multimedia'),
(18, 'Gundul', 'Purwokerto', 'Laki-laki', '2019-03-12', 'Rekayasa Perangkat Lunak'),
(19, 'Nella Kharisma', 'Cilacap', 'Perempuan', '2019-03-12', 'Multimedia'),
(20, 'Via Vallen', 'Jakarta', 'Perempuan', '2019-03-12', 'Multimedia'),
(21, 'Baim', 'Yogyakarta', 'Laki-laki', '2019-03-12', 'Multimedia'),
(22, 'Lulu', 'Yogyakarta', 'Perempuan', '2019-03-12', 'Multimedia'),
(23, 'Dery', 'Cilacap', 'Laki-laki', '2019-01-01', 'Rekayasa Perangkat Lunak'),
(24, 'Rafii Ahmad', 'Jakarta', 'Laki-laki', '2019-01-01', 'Multimedia'),
(25, 'Ariel Noah', 'Yogyakarta', 'Laki-laki', '2020-12-31', 'Rekayasa Perangkat Lunak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
