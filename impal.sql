-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 02:51 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id_bahanbaku` varchar(16) NOT NULL,
  `nama_bahanbaku` varchar(16) NOT NULL,
  `jumlah_bahanbaku` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahanbaku`
--

INSERT INTO `bahanbaku` (`id_bahanbaku`, `nama_bahanbaku`, `jumlah_bahanbaku`) VALUES
('01', 'kertas a4', '100 rim'),
('02', 'tinta', '3 liter');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(16) NOT NULL,
  `nama_buku` varchar(16) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `tanggal_terbit`, `stock`, `price`) VALUES
('A-001', 'Anak indonesia', '2018-11-06', 124, 100000),
('K-001', 'Kita Maju', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(16) NOT NULL,
  `nama_customer` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`) VALUES
('2017001', 'Chairul'),
('2018001', 'Abidin');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id_editor` varchar(16) NOT NULL,
  `nama_editor` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id_editor`, `nama_editor`) VALUES
('BD-001', 'Budi Daryono'),
('SA-001', 'Sujono Agung');

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id_karya` varchar(16) NOT NULL,
  `nama_karya` varchar(16) NOT NULL,
  `isi_karya` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id_karya`, `nama_karya`, `isi_karya`) VALUES
('AI-B-001', 'Anak Indonesia', 'aku adalah anak indonesai selalu riang serta gembira karena aku rajin bekerja tak pernah malas ataupun lelah syalala lala lalal sya lala lalalalalala'),
('CD-DD-001', 'Cicak Di Dinding', 'cicak cicak diding diam-diam merayp datang seekor nyamuk hap hap lalu ditangkap');

-- --------------------------------------------------------

--
-- Table structure for table `koreksi`
--

CREATE TABLE `koreksi` (
  `id_koreksi` varchar(16) NOT NULL,
  `id_editor` varchar(16) NOT NULL,
  `id_karya` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koreksi`
--

INSERT INTO `koreksi` (`id_koreksi`, `id_editor`, `id_karya`) VALUES
('AI-B-001-K', 'SA-001', 'AI-B-001'),
('CD-DD-001-K', 'BD-001', 'CD-DD-001');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(16) NOT NULL,
  `id_customer` varchar(16) NOT NULL,
  `id_buku` varchar(16) NOT NULL,
  `jm_order` int(16) NOT NULL,
  `tgl_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_customer`, `id_buku`, `jm_order`, `tgl_order`) VALUES
('FF-001-P', '2018001', 'K-001', 10, '2018-09-28'),
('YU-001-P', '2018001', 'A-001', 3, '2018-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(16) NOT NULL,
  `nama_supplier` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`) VALUES
('JU-001-SUP', 'Julianto'),
('SB-001-SUP', 'SABAR');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id_supply` varchar(16) NOT NULL,
  `id_supplier` varchar(16) NOT NULL,
  `id_bahanbaku` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id_supply`, `id_supplier`, `id_bahanbaku`) VALUES
('K-001', 'SB-001-SUP', '01'),
('T-001', 'SB-001-SUP', '02');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(16) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_customer` varchar(16) NOT NULL,
  `id_bagkeuangan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `id_customer`, `id_bagkeuangan`) VALUES
('AA-001-080618', '2018-06-08', '2017001', 'SS-001'),
('CC-001-08092017', '2018-09-08', '2018001', 'SS-001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id_editor`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indexes for table `koreksi`
--
ALTER TABLE `koreksi`
  ADD PRIMARY KEY (`id_koreksi`),
  ADD KEY `id_editor` (`id_editor`),
  ADD KEY `id_karya` (`id_karya`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id_supply`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_bahanbaku` (`id_bahanbaku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `koreksi`
--
ALTER TABLE `koreksi`
  ADD CONSTRAINT `koreksi_ibfk_1` FOREIGN KEY (`id_editor`) REFERENCES `editor` (`id_editor`),
  ADD CONSTRAINT `koreksi_ibfk_2` FOREIGN KEY (`id_karya`) REFERENCES `karya` (`id_karya`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `supply_ibfk_2` FOREIGN KEY (`id_bahanbaku`) REFERENCES `bahanbaku` (`id_bahanbaku`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
