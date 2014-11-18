-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 18, 2014 at 09:37 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_reg` date NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `gender`, `email`, `password`, `date_reg`) VALUES
(1, 'Babajide', 'Adegbenro', 'male', 'kissavatar@gmail.com', '332532dcfaa1cbf61e2a266bd723612c', '2012-09-23'),
(2, 'didier', 'drogba', 'male', 'didier@yahoo.co.uk', '38d7355701b6f3760ee49852904319c1', '2012-09-23'),
(3, 'Frank', 'Adegbenro', 'male', 'abbyzain30@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '2012-09-23'),
(4, 'great', 'day', 'male', 'g@m.com', '332532dcfaa1cbf61e2a266bd723612c', '2012-09-23'),
(5, 'kevin', 'jam', 'male', 'kevin@yahoo.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '2012-09-30'),
(6, 'kevin', 'jam', 'male', 'kevin123@yahoo.com', '698d51a19d8a121ce581499d7b701668', '2012-10-13'),
(7, 'kkk', 'kkk', '', 'kkk', '698d51a19d8a121ce581499d7b701668', '2012-11-03'),
(8, 'Florance', 'Nalugo', 'male', 'florence@gmail.com', 'f1b604c31c05be13714b7de62802d127', '2014-11-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
