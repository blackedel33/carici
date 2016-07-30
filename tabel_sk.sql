-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 07:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perijinan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_sk`
--

CREATE TABLE IF NOT EXISTS `tabel_sk` (
  `noregister` int(4) NOT NULL AUTO_INCREMENT,
  `namapemohon` varchar(50) NOT NULL,
  `jenisizin` varchar(50) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `diambiloleh` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  PRIMARY KEY (`noregister`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tabel_sk`
--

INSERT INTO `tabel_sk` (`noregister`, `namapemohon`, `jenisizin`, `lokasi`, `kategori`, `diambiloleh`, `alamat`, `keterangan`) VALUES
(5, 'Dia', 'Izin Baliho', 'Ngawi', 'verifikasi', 'Mana', 'Batu', 'lunas'),
(6, 'Marley', 'IMB', 'Ngawi', 'verifikasi', 'Pak Sunaryo', 'Ngawi', 'lunas'),
(7, 'diandra', 'IMB', 'Lamongan', 'verifikasi', 'oleh', 'malang', 'coba'),
(8, 'Cak Mari', 'IMB', 'Manado', 'verifikasi', 'Cak Maroo', 'Malang', 'Lunas'),
(9, 'mohammad', 'IMB', 'Bojonegoro', 'verifikasi', 'Orang', 'Malang', 'Lunas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
