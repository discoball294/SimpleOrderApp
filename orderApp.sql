-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2015 at 10:24 
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_menu` varchar(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_pesanan`, `id_menu`, `jumlah`, `status`) VALUES
('PSN00001', 'mkn001', 1, 'Siap'),
('PSN00001', 'mkn002', 1, 'Siap'),
('PSN00001', 'mnm001', 1, 'Siap'),
('PSN00002', 'mkn001', 1, 'Siap'),
('PSN00002', 'mnm001', 1, 'Siap'),
('PSN00003', 'mkn001', 1, 'Siap'),
('PSN00003', 'mkn002', 1, 'Siap'),
('PSN00003', 'mnm001', 1, 'Siap'),
('PSN00003', 'mnm002', 1, 'Siap'),
('PSN00004', 'mkn001', 1, 'Siap'),
('PSN00004', 'mnm001', 1, 'Siap'),
('PSN00005', 'mkn001', 1, 'Siap'),
('PSN00005', 'mkn002', 1, 'Siap'),
('PSN00005', 'mnm001', 1, 'Siap'),
('PSN00005', 'mnm002', 2, 'Siap'),
('PSN00006', 'mkn001', 1, 'Siap'),
('PSN00006', 'mkn002', 1, 'Siap'),
('PSN00006', 'mnm001', 1, 'Siap'),
('PSN00006', 'mnm002', 1, 'Siap'),
('PSN00007', 'mkn001', 1, 'Proses'),
('PSN00008', 'mnm001', 2, 'Proses'),
('PSN00010', 'mkn002', 1, 'Proses'),
('PSN00011', 'mkn002', 1, 'Proses'),
('PSN00012', 'mkn002', 1, 'Proses'),
('PSN00013', 'mkn002', 1, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `master_pesanan`
--

CREATE TABLE `master_pesanan` (
  `id_pesanan` varchar(15) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `total_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pesanan`
--

INSERT INTO `master_pesanan` (`id_pesanan`, `nim`, `tgl_pesan`, `total_harga`) VALUES
('PSN00001', '311210007', '0000-00-00', 18000),
('PSN00002', '311210007', '2015-12-08', 13000),
('PSN00003', '311210007', '2015-12-08', 21000),
('PSN00004', '311210007', '2015-12-08', 13000),
('PSN00005', '311210007', '2015-12-08', 24000),
('PSN00006', '311210007', '2015-12-09', 21000),
('PSN00007', '311210007', '2015-12-09', 10000),
('PSN00008', '311210007', '2015-12-09', 6000),
('PSN00009', '311210007', '2015-12-09', 0),
('PSN00010', '311210007', '2015-12-09', 5000),
('PSN00011', '311210007', '2015-12-09', 5000),
('PSN00012', '311210007', '2015-12-09', 5000),
('PSN00013', '311210007', '2015-12-09', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(10) NOT NULL,
  `nama_menu` varchar(25) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `stok`) VALUES
('mkn001', 'Nasi Goreng', 10000, 50),
('mkn002', 'Soto Ayam', 5000, 50),
('mnm001', 'Es Teh', 3000, 50),
('mnm002', 'Es Jeruk', 3000, 50);

-- --------------------------------------------------------

--
-- Stand-in structure for view `status`
--
CREATE TABLE `status` (
`id_pesanan` varchar(15)
,`nama` varchar(25)
,`nama_menu` varchar(25)
,`harga` int(12)
,`status` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `status_fix`
--
CREATE TABLE `status_fix` (
`id_pesanan` varchar(15)
,`nama` varchar(25)
,`nama_menu` varchar(25)
,`harga` int(12)
,`jumlah` int(3)
,`status` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `user_mhs`
--

CREATE TABLE `user_mhs` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `deposit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mhs`
--

INSERT INTO `user_mhs` (`nim`, `nama`, `password`, `deposit`) VALUES
('311210007', 'Bryan Asa', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_slr`
--

CREATE TABLE `user_slr` (
  `id_penjual` varchar(10) NOT NULL,
  `nama_penjual` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `deposit` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_slr`
--

INSERT INTO `user_slr` (`id_penjual`, `nama_penjual`, `pass`, `deposit`) VALUES
('slr001', 'Ade Sumarmo', '123456', 0),
('slr002', 'Samsul', '123456', 0);

-- --------------------------------------------------------

--
-- Structure for view `status`
--
DROP TABLE IF EXISTS `status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `status`  AS  select `master_pesanan`.`id_pesanan` AS `id_pesanan`,`user_mhs`.`nama` AS `nama`,`menu`.`nama_menu` AS `nama_menu`,`menu`.`harga` AS `harga`,`detail_pesanan`.`status` AS `status` from (((`master_pesanan` join `detail_pesanan`) join `user_mhs`) join `menu` on(((`master_pesanan`.`id_pesanan` = `detail_pesanan`.`id_pesanan`) and (`detail_pesanan`.`id_menu` = `menu`.`id_menu`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `status_fix`
--
DROP TABLE IF EXISTS `status_fix`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `status_fix`  AS  select `master_pesanan`.`id_pesanan` AS `id_pesanan`,`user_mhs`.`nama` AS `nama`,`menu`.`nama_menu` AS `nama_menu`,`menu`.`harga` AS `harga`,`detail_pesanan`.`jumlah` AS `jumlah`,`detail_pesanan`.`status` AS `status` from (((`master_pesanan` join `detail_pesanan`) join `user_mhs`) join `menu` on(((`master_pesanan`.`id_pesanan` = `detail_pesanan`.`id_pesanan`) and (`detail_pesanan`.`id_menu` = `menu`.`id_menu`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD KEY `fk_PerOrders` (`id_pesanan`),
  ADD KEY `fk_Menu` (`id_menu`);

--
-- Indexes for table `master_pesanan`
--
ALTER TABLE `master_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_nim` (`nim`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user_mhs`
--
ALTER TABLE `user_mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user_slr`
--
ALTER TABLE `user_slr`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `fk_Menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `fk_PerOrders` FOREIGN KEY (`id_pesanan`) REFERENCES `master_pesanan` (`id_pesanan`);

--
-- Constraints for table `master_pesanan`
--
ALTER TABLE `master_pesanan`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `user_mhs` (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
