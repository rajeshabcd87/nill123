-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2023 at 05:53 PM
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
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `mobile`) VALUES
('admin', '$2y$10$F.zcDevhxNTF3SYytvLPjuck8rp2bRAFi7FijHUISgAlnBPDVo5ry', 'admin', '8085859804'),
('ravi', '$2y$10$4fpaBBDFrX/Ajzk8AK1dROFWQnRyDjzPqMDsTBMZRDRhV6DaJoJm2', 'user', '9998877654'),
('shyam', '$2y$10$Y0sE8tVMwZvhZWmfk2qRDeY6xKQFyPnZdxf.CHiUASh5Ij4X185i6', 'user', '98798798786756453'),
('som', '$2y$10$7c.2FEyGgO/4aMdzqtq4L.D8V09TF5CDee2jz8vNjj9dwYqfweDt2', 'user', '7482346238746237464782'),
('suresh', '$2y$10$WTFf7M8iit8b0ZeneBNWYeMpkfpo9F8PhTTQRVtg0ESxEMCqY4Toy', 'user', '4823748927423'),
('311bsc', '$2y$10$.tbI/q1RGREEVKd4KVkIoO1g9p6zJGbrwzuCDpASgUrnBoU3N13iq', 'user', '987654321'),
('351BSC', '$2y$10$Uet8ndhAw83xsDFhg0Phl.P9Qj7jMZV4uepmNXTye9sV6QJiKlzoe', 'coy_cdr', '8085859806'),
('190BSC', '$2y$10$QWDoziOSUwpqJAqyqUQ9iOt5hh.CwFllLazm.ARPhkK/ERlAxycx2', 'coy_cdr', '87655424677'),
('5ABSC', '$2y$10$kBHtJDUbEqX2uSKrdMmd5evlj9.lmvQvodcEnge5Y4GwiYmOWq1K6', 'coy_cdr', '9876543657'),
('CO', '$2y$10$km3FbQ8ehQlZuayYUe/3juorZ.PibPkTqgd8HxYPklnoajfhS0ZDC', 'co', '9876543256'),
('basavraj', '$2y$10$E3F0.e3eX0GLmMzTtBM3l.k6rWVpoQtTE2ozTE1ekaSxickUKzBAO', 'adjt', '9412297441'),
('user', '$2y$10$1WJIJvDDTRmeVOqmNKfofexWy8SbDO1NNaPB9Q1j3GXlcgKPSYFpm', 'user', '9879876765'),
('member1', '$2y$10$OopVmsFfg7qA7PaAjQQCX.tkd/1vQ1INrAv/4bb7mc0mI0eZUZRGe', 'member1', '999999999'),
('member2', '$2y$10$mMu4FQsWODKR46Uenm8IG./mRPFrjvcuAcuSoHy6DS1VVOvsptKpG', 'member2', '8765543249'),
('rakeshqw', '$2y$10$ZsOTCgBcCxosaGSGO2DYzunNdaTkQK21NOdXt.2Dn3Bo5H5vDOMAq', 'user', '56788686786'),
('agniveer123', '$2y$10$goImsMxe4U7tdDUEfVE7geJsqjCMgq6PZESc3ET.x.SvZXE4xcYOS', 'user', '9421177545');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
