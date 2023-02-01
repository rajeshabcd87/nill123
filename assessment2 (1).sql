-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2023 at 06:26 PM
-- Server version: 5.7.36
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment2`
--

DROP TABLE IF EXISTS `assessment2`;
CREATE TABLE IF NOT EXISTS `assessment2` (
  `agniveer_no` int(100) NOT NULL,
  `field` varchar(20) NOT NULL,
  `weightage` varchar(20) DEFAULT NULL,
  `maxmarks` int(10) DEFAULT NULL,
  `marks` int(10) DEFAULT NULL,
  `remarks` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`agniveer_no`,`field`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment2`
--

INSERT INTO `assessment2` (`agniveer_no`, `field`, `weightage`, `maxmarks`, `marks`, `remarks`) VALUES
(1000, 'BPET', '3%', 100, 10, ''),
(1000, 'PPT', ' 3%', 100, 10, ''),
(1000, 'Common Mil Knowledge', '0', 0, 0, ''),
(1000, 'Basic Tactics', '0', 0, 0, ''),
(1000, 'Trade Proficiency', '0', 0, 0, ''),
(1000, 'Weapon/EqptHandling', '0', 0, 0, ''),
(1001, 'BPET', '3%', 100, 10, ''),
(1001, 'Trade/Op', '12%', 100, 40, ''),
(1001, 'Common Mil Knowledge', '0', 0, 0, ''),
(1001, 'Basic Tactics', '0', 0, 0, ''),
(1001, 'Trade Proficiency', '0', 0, 0, ''),
(1001, 'Weapon/EqptHandling', '0', 0, 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
