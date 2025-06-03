-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2025 at 06:49 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campus_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `sregister`
--

CREATE TABLE IF NOT EXISTS `sregister` (
  `nic` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `district` varchar(50) NOT NULL,
  `number` varchar(20) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sregister`
--

INSERT INTO `sregister` (`nic`, `name`, `address`, `district`, `number`, `course`) VALUES
('19876543219', ' Saman Disanayaka', ' Matara', '', ' 0701122555', ' DIPLOMA IN ENGLISH LANGUAGE'),
('19881234568', 'Ruwan Senanayake', 'Kurunegala', '', '0764455667', 'DIPLOMA IN BUSINESS MANAGEMENT'),
('19965432123', 'Lakshan Perera', 'Negombo', '', '0757788990', 'DIPLOMA IN PSYCHOLOGY & COUNSELLING'),
('19981234567', 'Nimal Rathnayake', 'Kandy', '', '0712345678', 'DIPLOMA IN PSYCHOLOGY & COUNSELLING'),
('19990543210', ' Isuru Jayawardena', ' Colombo', '', ' 0715566777', ' DIPLOMA IN HUMAN RESOURCE MANAGEMENT'),
('200019802368', 'Chamodh Bhanuka', 'Anuradhapura', '', '0702661523', 'DIPLOMA IN INFORMATION & COMMUNICATION TECHNOLOGY'),
('20002345678', 'Kasun Wijesinghe', 'Gampaha', '', '0773344556', 'DIPLOMA IN ENGLISH LANGUAGE'),
('20014567890', 'Kavindi Silva', 'Jaffna', '', '0729988776', 'DIPLOMA IN INFORMATION & COMMUNICATION TECHNOLOGY'),
('20021578624', 'Kamal Perera', 'Anuradhapura', '', '0771234567', 'DIPLOMA IN HUMAN RESOURCE MANAGEMENT'),
('22554477883', 'Dinithi Vishaka', 'Kaluthara', '', '0785671890', 'DIPLOMA IN PSYCHOLOGY & COUNSELLING'),
('982535480V', 'IMBS', 'Kurunagala', '', '07026601547', 'DIPLOMA IN HUMAN RESOURCE MANAGEMENT'),
('98574165V', ' Green', ' Kurunagala', ' Gampaha', ' 0724579578', ' DIPLOMA IN INFORMATION & COMMUNICATION TECHNOLOGY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
