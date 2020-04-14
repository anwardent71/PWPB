-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:27 AM
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
-- Database: `crud1`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamartabak`
--

CREATE TABLE `datamartabak` (
  `id_martabak` int(10) NOT NULL,
  `nama_martabak` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `jenis` enum('Martabak Manis','Martabak Telur') NOT NULL,
  `kategori` enum('Kecil','Biasa','Besar','Telur Ayam','Telur Bebek') NOT NULL,
  `satuan` enum('Pcs') NOT NULL,
  `url_gambar` varchar(400) NOT NULL,
  `stok` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamartabak`
--

INSERT INTO `datamartabak` (`id_martabak`, `nama_martabak`, `harga`, `jenis`, `kategori`, `satuan`, `url_gambar`, `stok`) VALUES
(1, 'Martabak', 23000, 'Martabak Manis', '', '', '', 7),
(2, 'Martabak Telur Spesial', 20000, 'Martabak Telur', 'Biasa', 'Pcs', '', 20),
(3, 'Martabak', 20000, '', '', '', 'https://www.genpi.co/timthumb.php?src=http://fs.genpi.co/uploads/news/normal/2019/06/18/46189b8e54bf5835306250da9f4d47cd.jpg&w=820&a=br&zc=1', 2),
(4, '', 0, '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamartabak`
--
ALTER TABLE `datamartabak`
  ADD PRIMARY KEY (`id_martabak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
