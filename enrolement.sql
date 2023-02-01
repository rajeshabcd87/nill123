-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2023 at 06:27 PM
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
-- Table structure for table `enrolement`
--

DROP TABLE IF EXISTS `enrolement`;
CREATE TABLE IF NOT EXISTS `enrolement` (
  `enrolement_id` int(10) DEFAULT NULL,
  `agniveer_no` int(10) NOT NULL,
  `city` varchar(10) DEFAULT NULL,
  `date_of_enrolement` date DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  PRIMARY KEY (`agniveer_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolement`
--

INSERT INTO `enrolement` (`enrolement_id`, `agniveer_no`, `city`, `date_of_enrolement`, `age`) VALUES
(231, 1001, 'allahbad', '2023-02-17', 23);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
