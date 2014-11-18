-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 11, 2014 at 09:53 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slaudbcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_details_tbl`
--

CREATE TABLE `std_details_tbl` (
  `fname` varchar(100) NOT NULL,
  `secname` varchar(100) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `std_details_tbl`
--

INSERT INTO `std_details_tbl` (`fname`, `secname`, `id`) VALUES
(' kevin', 'Chinabalire', 7),
('babajide', 'samson', 8),
('John', 'Lubega', 10),
(' kevin', ' janvier', 11),
('ALICE', 'SSebagala', 12),
('ALICE', 'SSebagala', 13),
('ALICE', 'SSebagala', 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
