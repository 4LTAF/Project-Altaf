-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 05:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_makanan`
--

CREATE TABLE `detail_makanan` (
  `id` int(11) NOT NULL,
  `id_makanan` int(11) DEFAULT NULL,
  `qty_makanan` int(11) DEFAULT NULL,
  `jml_makanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_makanan`
--

INSERT INTO `detail_makanan` (`id`, `id_makanan`, `qty_makanan`, `jml_makanan`) VALUES
(1, 1, 2, 2),
(2, 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_minuman`
--

CREATE TABLE `detail_minuman` (
  `id` int(11) NOT NULL,
  `id_minuman` int(11) DEFAULT NULL,
  `qty_minuman` int(11) DEFAULT NULL,
  `jml_minuman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_minuman`
--

INSERT INTO `detail_minuman` (`id`, `id_minuman`, `qty_minuman`, `jml_minuman`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(255) NOT NULL,
  `pass_kasir` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `pass_kasir`) VALUES
(1, 'altaf', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `jenis`, `harga`, `status`) VALUES
(1, 'Nasi Goreng', 'Nasi', 13000, 'Tersedia'),
(2, 'Nasi dengan Ayam Goreng', 'Nasi', 15000, 'Tersedia'),
(3, 'Nasi dengan Ayam Bakar', 'Nasi', 17000, 'Tersedia'),
(4, 'Mie Goreng', 'Mie', 10000, 'Tersedia'),
(5, 'Mie Goreng dengan Telor', 'Mie', 12000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `nama_minuman`, `jenis`, `harga`, `status`) VALUES
(1, 'Jus Alpukat', 'Jus', 8000, 'Tersedia'),
(2, 'Jus Jambu', 'Jus', 7000, 'Tersedia'),
(3, 'Jus Mangga', 'Jus', 8000, 'Tersedia'),
(4, 'Jus Stroberi', 'Jus', 8000, 'Tersedia'),
(5, 'Cappucino', 'Kopi', 7000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`) VALUES
(1, 'Aldi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  `id_detailmakanan` int(11) DEFAULT NULL,
  `id_detailminuman` int(11) DEFAULT NULL,
  `total_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_makanan`
--
ALTER TABLE `detail_makanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `detail_minuman`
--
ALTER TABLE `detail_minuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_minuman` (`id_minuman`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_detailmakanan` (`id_detailmakanan`),
  ADD KEY `id_detailminuman` (`id_detailminuman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_makanan`
--
ALTER TABLE `detail_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_minuman`
--
ALTER TABLE `detail_minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_makanan`
--
ALTER TABLE `detail_makanan`
  ADD CONSTRAINT `detail_makanan_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`);

--
-- Constraints for table `detail_minuman`
--
ALTER TABLE `detail_minuman`
  ADD CONSTRAINT `detail_minuman_ibfk_1` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id_minuman`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_detailmakanan`) REFERENCES `detail_makanan` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_detailminuman`) REFERENCES `detail_minuman` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
