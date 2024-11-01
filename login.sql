-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2019 at 07:44 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectcyb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `mcode` bigint(100) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `address1` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `cast` varchar(50) DEFAULT NULL,
  `catogary` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `ward` varchar(50) DEFAULT NULL,
  `contactno` varchar(50) DEFAULT NULL,
  `mob` varchar(50) DEFAULT NULL,
  `officeno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `idno` varchar(50) DEFAULT NULL,
  `pasno` varchar(50) DEFAULT NULL,
  `liceno` varchar(50) DEFAULT NULL,
  `rasno` varchar(50) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `mdate` date DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `landmark` varchar(500) DEFAULT NULL,
  `po` varchar(500) DEFAULT NULL,
  `pin` varchar(50) DEFAULT NULL,
  `sig` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`mcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
