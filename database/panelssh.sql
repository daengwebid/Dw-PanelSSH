-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 11:06 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `panelssh`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `bukti` text NOT NULL,
  `tgl_invoice` date NOT NULL,
  `status` enum('pending','approve') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `saldo` int(11) NOT NULL,
  `last_login` date NOT NULL,
  `tgl_registrasi` date NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `pengaturan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(50) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_author` text NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `mode_maintenance` enum('0','1') NOT NULL DEFAULT '0',
  `mode_register` enum('0','1') NOT NULL DEFAULT '1',
  `user_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(100) NOT NULL,
  `last_login` date NOT NULL,
  `bank_account` text NOT NULL,
  `mata_uang` enum('Rp','RM') NOT NULL DEFAULT 'Rp',
  PRIMARY KEY (`pengaturan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`pengaturan_id`, `nama_perusahaan`, `meta_title`, `meta_description`, `meta_keyword`, `meta_author`, `alamat`, `email`, `no_hp`, `mode_maintenance`, `mode_register`, `user_admin`, `pass_admin`, `last_login`, `bank_account`, `mata_uang`) VALUES
(1, 'MakassarNetwork', 'Web Panel SSH', 'Provider SSH dengan fasilitas website yang memungkinkan anda untuk membuat account sendiri dengan sistem deposit', 'SSH murah, web panel ssh, koneksi internet aman', 'MakassarNetwork.Info', 'Jl. Sultan Hasanuddin Sungguminasa Kab. Gowa', 'makassarnetwork06@gmail.com', '085343966997', '0', '1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-12-21', 'BRI : 5079 01 02 5652 53 9 a.n Anugrah Sandi', 'Rp');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `server_id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(30) NOT NULL,
  `ip_server` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `link_config` text NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`server_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_account`
--

CREATE TABLE IF NOT EXISTS `t_account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `server_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `username_ssh` varchar(50) NOT NULL,
  `password_ssh` varchar(50) NOT NULL,
  `tgl_buat` date NOT NULL,
  `expired_account` date NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
