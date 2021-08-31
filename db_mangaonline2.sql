-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 11:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mangaonline2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `no_hp` int(12) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Pemilik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `email`, `jk`, `no_hp`, `ttl`, `alamat`, `status`) VALUES
(10116172, 'niko2nii', 'niko', 'adrian', 'niko2nii69@gmail.com', 'L', 838201319, '2018-04-16', 'jl.street ball', 'Pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_beli`
--

CREATE TABLE `tb_daftar_beli` (
  `id_pembelian` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `jumlah_beli` int(40) NOT NULL,
  `total` int(100) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `jenis_genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_genre`
--

INSERT INTO `tb_genre` (`jenis_genre`) VALUES
('ASD'),
('QWE'),
('ZXC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manga`
--

CREATE TABLE `tb_manga` (
  `id_manga` int(11) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `chapter` int(10) NOT NULL,
  `volume` int(10) NOT NULL,
  `deksripsi` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `ilustrator` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `tgl_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_manga`
--

INSERT INTO `tb_manga` (`id_manga`, `id_admin`, `judul`, `gambar`, `chapter`, `volume`, `deksripsi`, `jumlah`, `ilustrator`, `harga`, `tgl_upload`) VALUES
(3, 10116172, 'desuuu', 'acho.gif', 50, 20, 'jfkajsklfjalksjfklajsflkajsfkjaslkfjaklsfjklasjflkajsfkl', 10, 'asdasd', 20, '2018-05-15'),
(4, 10116172, 'naissss', 'hanekawa neko.gif', 100, 200, 'awdawdawdasdsasdwasdasd', 150, 'lijwdilawj', 190, '2018-05-14'),
(6, 10116172, 'Ore No Waifu', 'neko2a.gif', 20, 30, 'dwoakdopawkdopawkdpwa', 20, 'Masasih Kishimoto', 20000, '2018-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_memiliki`
--

CREATE TABLE `tb_memiliki` (
  `id_manga` varchar(20) NOT NULL,
  `jenis_genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_memiliki`
--

INSERT INTO `tb_memiliki` (`id_manga`, `jenis_genre`) VALUES
('3', 'ASD'),
('3', 'ZXC'),
('4', 'QWE'),
('6', 'QWE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pelanggan` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `status` enum('Pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pelanggan`, `username`, `password`, `nama`, `email`, `jk`, `no_hp`, `ttl`, `alamat`, `kode_pos`, `status`) VALUES
(10116159, 'tabah', 'tabah2', 'tabah', 'tabah@gmail.com', 'P', '838128', '2018-04-16', 'asdasdawda', '40291', 'Pengguna'),
(10116160, 'asdas', 'asdasd', 'asdasd', 'asdsa!@email.com', 'P', '123123', '2018-05-16', 'asdasd', '1231', 'Pengguna'),
(10116161, 'kata', 'kata', 'kata nadeshiko', 'adrian@gmail.com', 'L', '083820131925', '2018-05-07', 'jl.kawali. raya', '40291', 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_manga` int(11) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_daftar_beli`
--
ALTER TABLE `tb_daftar_beli`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`jenis_genre`);

--
-- Indexes for table `tb_manga`
--
ALTER TABLE `tb_manga`
  ADD PRIMARY KEY (`id_manga`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_beli`
--
ALTER TABLE `tb_daftar_beli`
  MODIFY `id_pembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_manga`
--
ALTER TABLE `tb_manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10116162;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_manga`
--
ALTER TABLE `tb_manga`
  ADD CONSTRAINT `tb_manga_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
