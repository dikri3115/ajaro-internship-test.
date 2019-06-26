-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 03:09 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` decimal(5,0) NOT NULL,
  `harga` decimal(12,0) NOT NULL,
  `berat` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `kode`, `nama`, `deskripsi`, `stok`, `harga`, `berat`) VALUES
(3, 'Rt18aL', 'Mie Sedap', 'Seleraku,Seleramu, selera kita semua', '15', '2600', '13'),
(5, 'B1aO1', 'Sprite', 'Nyatanya Nyegerin', '20', '3000', '150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
