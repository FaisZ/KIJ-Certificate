-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2015 at 05:45 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE IF NOT EXISTS `csr` (
  `id_csr` int(11) NOT NULL AUTO_INCREMENT,
  `file_csr` text NOT NULL,
  `file_certificate` text NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id_csr`),
  UNIQUE KEY `fk` (`username`) COMMENT 'fk'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`username`, `nama`, `password`) VALUES
('admin', 'admin', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `csr`
--
ALTER TABLE `csr`
  ADD CONSTRAINT `csr_ibfk_1` FOREIGN KEY (`username`) REFERENCES `developer` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
