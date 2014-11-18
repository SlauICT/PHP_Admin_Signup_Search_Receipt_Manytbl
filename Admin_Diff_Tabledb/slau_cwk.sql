-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 11, 2014 at 09:09 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slau_cwk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_n` varchar(30) NOT NULL,
  `course_description` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`reg_id`, `course_n`, `course_description`) VALUES
(1, 'Bachelor of Business Administr', '');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_n` varchar(30) NOT NULL,
  `dep_description` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`reg_id`, `dep_n`, `dep_description`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_n` varchar(20) NOT NULL,
  `fac_description` varchar(20) NOT NULL,
  `mission_fac` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`reg_id`, `fac_n`, `fac_description`, `mission_fac`) VALUES
(1, 'Select your Faculty', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(22) NOT NULL,
  `ln` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `of_n` int(11) NOT NULL,
  `mob_n` varchar(10) NOT NULL,
  `fax` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`reg_id`, `fn`, `ln`, `gender`, `of_n`, `mob_n`, `fax`, `email`, `occupation`, `country`) VALUES
(1, '', '', '', 0, '', 0, '', '', 'Select your Country');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` varchar(11) NOT NULL,
  `mn` varchar(11) NOT NULL,
  `ln` varchar(11) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `date_b` date NOT NULL,
  `tn` varchar(22) NOT NULL,
  `c_o` varchar(22) NOT NULL,
  `district` varchar(22) NOT NULL,
  `country` varchar(22) NOT NULL,
  `parish` varchar(22) NOT NULL,
  `village` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`reg_id`, `sn`, `mn`, `ln`, `gender`, `date_b`, `tn`, `c_o`, `district`, `country`, `parish`, `village`, `email`) VALUES
(1, 'kevin', 'Janvier', 'Cinabalire', 'male', '2014-11-03', '0785077853', 'Uganda', 'Arua', 'Uganda', 'kabusu', 'rubaga', 'kevin@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
