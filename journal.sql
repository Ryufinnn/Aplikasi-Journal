-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2016 at 11:05 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id_download` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `nidn`, `nama`, `judul`, `isi`, `status`, `catatan`) VALUES
(122, '151321089', 'Ferri Achmad Effindri', 'Aplikasi Sistem Pakar Diagnosa Penyakit Kanker Serviks Berbasis Web Mobile ', 'jurnal.pdf', 'Disetujui', 'Lengkapi datanya  ');

-- --------------------------------------------------------

--
-- Table structure for table `rb_halaman`
--

CREATE TABLE IF NOT EXISTS `rb_halaman` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`halaman`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rb_halaman`
--

INSERT INTO `rb_halaman` (`judul`, `halaman`, `detail`) VALUES
('Selamat Datang Di Halaman Utama Aplikasi E-Journal', 'home', '');

-- --------------------------------------------------------

--
-- Table structure for table `rb_login`
--

CREATE TABLE IF NOT EXISTS `rb_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'members',
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_login`
--

INSERT INTO `rb_login` (`username`, `password`, `nidn`, `nama_lengkap`, `level`, `email`, `nohp`, `alamat`) VALUES
('admin', 'admin', '', 'Joko Susilo', 'admin', 'admin@gmail.com', '082170214499', 'Jl.Sudirman 21 '),
('Indah', 'indah', '151321090', 'Indah Wahyuni', 'kepala', 'indah@gmail.com', '081993448877', 'Jl. Batang Hari no 21 A'),
('ferri', '12345', '151321089', 'Ferri Achmad Effindri', 'dosen', 'vendry7@gmail.com', '082170214495', 'Padang');
