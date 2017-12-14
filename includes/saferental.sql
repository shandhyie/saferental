-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 04:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saferental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'sandi', 'sandi'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
`id_bayar` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `panjar` int(11) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE IF NOT EXISTS `fitur` (
`id_fitur` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `nama`) VALUES
(1, 'AC'),
(2, 'BBM'),
(3, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_admin`, `username`, `password`, `user_id`, `role`) VALUES
(1, 'andi', '1234', 1, 'owner'),
(2, 'budi', '1234', 2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE IF NOT EXISTS `memesan` (
`id_pemesanan` int(11) NOT NULL,
  `jmlh_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merek_mobil`
--

CREATE TABLE IF NOT EXISTS `merek_mobil` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jml_kursi` int(11) NOT NULL,
  `manufaktur` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek_mobil`
--

INSERT INTO `merek_mobil` (`id`, `nama`, `jml_kursi`, `manufaktur`) VALUES
(1, 'Avanza', 8, 'Toyota'),
(2, 'Innova', 10, 'Toyota'),
(3, 'Jazz', 5, 'Honda'),
(4, 'Alphard', 10, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id_mobil` int(11) NOT NULL,
  `no_bpkb` varchar(40) NOT NULL,
  `no_stnk` varchar(40) NOT NULL,
  `merek_mobil_id` int(11) NOT NULL,
  `harga` decimal(8,0) NOT NULL,
  `file_gambar_mobil` varchar(200) NOT NULL,
  `fitur_id` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `no_bpkb`, `no_stnk`, `merek_mobil_id`, `harga`, `file_gambar_mobil`, `fitur_id`) VALUES
(1, 'Bk1919', 'D333', 1, '300000', 'mobil/avanza1.png', '1,3'),
(2, 'IN3939', 'DD39390', 2, '400000', 'mobil/innova1.png', '3'),
(3, 'BJ398339', 'DD339339li', 3, '500000', 'mobil/jazz1.png', '2,3'),
(4, 'BK343434', 'DD6169RN', 4, '1000000', 'mobil/alphard1.png', '1,2,3'),
(5, 'wrew', '4234344', 3, '300000', 'mobil/jazz1.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
`id_rental` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `nama_lgkp` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level_user` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lgkp`, `username`, `password`, `level_user`) VALUES
(1, 'Ahmad Sandi', 'sandi', 'sandi', 'user'),
(2, 'Budi Kusum', '', '', ''),
(3, 'Ahmad', 'sandi', 'ac9b4e0b6a21758534db2a6324d34a', ''),
(4, 'sandi', 'sandi', 'sandi', 'member'),
(5, 'sandi', 'sandi', 'sandi', 'user'),
(6, 'Ahmad', 'sandi', 'sandi', 'user'),
(7, 'sandi', '', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
 ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
 ADD PRIMARY KEY (`id_fitur`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
 ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `merek_mobil`
--
ALTER TABLE `merek_mobil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
 ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `merek_mobil`
--
ALTER TABLE `merek_mobil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
