-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `img_produk` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama_produk`, `harga`, `gender`, `img_produk`, `date_created`) VALUES
(2, 'Kemeja Pria Mars', 175000, 'p', 'kemeja-pria-2.jpg', '2023-11-19 05:33:44'),
(3, 'Kemeja Pria Alisan [New]', 115000, 'p', 'kemeja-pria-3.jpg', '2023-11-19 05:33:44'),
(4, 'Kemeja Pria Bruno Mars', 85000, 'P', 'kemeja-pria-4.jpg', '2023-11-19 05:33:44'),
(5, 'Kemeja Pria Polos Biasa', 55000, 'P', 'kemeja-pria-5.jpg', '2023-11-19 05:33:44'),
(8, 'Kemeja Wanita Allova', 78500, 'w', 'kemeja-wanita-1.jpg', '2023-11-19 07:19:49'),
(9, 'Kemeja Wanita Almina', 99000, 'w', 'kemeja-wanita-2.jpg', '2023-11-19 07:22:39'),
(10, 'Sepatu Wanita Nike', 230000, 'w', 'sepatu-wanita-1.jpg', '2023-11-19 07:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `id_role` tinyint(1) NOT NULL DEFAULT 1,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_wa` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `id_role`, `nama_user`, `email`, `no_wa`) VALUES
(1, 'admin', 'admin', 2, 'Iin Sholihin', NULL, NULL),
(2, 'pembeli1', 'pembeli1', 1, 'Pembeli 1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_wa` (`no_wa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
