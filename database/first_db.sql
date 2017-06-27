-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 12:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abyhn`
--

CREATE TABLE `abyhn` (
  `9` int(11) NOT NULL DEFAULT '0',
  `9.5` int(11) NOT NULL DEFAULT '0',
  `10` int(11) NOT NULL DEFAULT '0',
  `10.5` int(11) NOT NULL DEFAULT '0',
  `11` int(11) NOT NULL DEFAULT '0',
  `11.5` int(11) NOT NULL DEFAULT '0',
  `12` int(11) NOT NULL DEFAULT '0',
  `12.5` int(11) NOT NULL DEFAULT '0',
  `13` int(11) NOT NULL DEFAULT '0',
  `13.5` int(11) NOT NULL DEFAULT '0',
  `14` int(11) NOT NULL DEFAULT '0',
  `14.5` int(11) NOT NULL DEFAULT '0',
  `15` int(11) NOT NULL DEFAULT '0',
  `15.5` int(11) NOT NULL DEFAULT '0',
  `16` int(11) NOT NULL DEFAULT '0',
  `16.5` int(11) NOT NULL DEFAULT '0',
  `17` int(11) NOT NULL DEFAULT '0',
  `17.5` int(11) NOT NULL DEFAULT '0',
  `18` int(11) NOT NULL DEFAULT '0',
  `18.5` int(11) NOT NULL DEFAULT '0',
  `19` int(11) NOT NULL DEFAULT '0',
  `19.5` int(11) NOT NULL DEFAULT '0',
  `20` int(11) NOT NULL DEFAULT '0',
  `20.5` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'passwordi');

-- --------------------------------------------------------

--
-- Table structure for table `bathschedule`
--

CREATE TABLE `bathschedule` (
  `id` int(11) NOT NULL,
  `building` varchar(15) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `pseudo_id` int(11) NOT NULL,
  `scheduleno` int(11) NOT NULL,
  `9` int(11) NOT NULL DEFAULT '0',
  `9.5` int(11) NOT NULL DEFAULT '0',
  `10` int(11) NOT NULL DEFAULT '0',
  `10.5` int(11) NOT NULL DEFAULT '0',
  `11` int(11) NOT NULL DEFAULT '0',
  `11.5` int(11) NOT NULL DEFAULT '0',
  `12` int(11) NOT NULL DEFAULT '0',
  `12.5` int(11) NOT NULL DEFAULT '0',
  `13` int(11) NOT NULL DEFAULT '0',
  `13.5` int(11) NOT NULL DEFAULT '0',
  `14` int(11) NOT NULL DEFAULT '0',
  `14.5` int(11) NOT NULL DEFAULT '0',
  `15` int(11) NOT NULL DEFAULT '0',
  `15.5` int(11) NOT NULL DEFAULT '0',
  `16` int(11) NOT NULL DEFAULT '0',
  `16.5` int(11) NOT NULL DEFAULT '0',
  `17` int(11) NOT NULL DEFAULT '0',
  `17.5` int(11) NOT NULL DEFAULT '0',
  `18` int(11) NOT NULL DEFAULT '0',
  `18.5` int(11) NOT NULL DEFAULT '0',
  `19` int(11) NOT NULL DEFAULT '0',
  `19.5` int(11) NOT NULL DEFAULT '0',
  `20` int(11) NOT NULL DEFAULT '0',
  `20.5` int(11) NOT NULL DEFAULT '0',
  `type` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bathschedule`
--

INSERT INTO `bathschedule` (`id`, `building`, `floor`, `pseudo_id`, `scheduleno`, `9`, `9.5`, `10`, `10.5`, `11`, `11.5`, `12`, `12.5`, `13`, `13.5`, `14`, `14.5`, `15`, `15.5`, `16`, `16.5`, `17`, `17.5`, `18`, `18.5`, `19`, `19.5`, `20`, `20.5`, `type`) VALUES
(2, 'SIT', 0, 176, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(3, 'SIT', 0, 177, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(4, 'SIT', 0, 178, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(106, 'SIT', 1, 179, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(107, 'SIT', 1, 180, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(108, 'SIT', 1, 181, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(206, 'SIT', 2, 182, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(207, 'SIT', 2, 183, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, 0, -1, 0, 0, 0, 0, 'H'),
(208, 'SIT', 2, 184, 1, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, 0, -1, 0, 0, 0, 0, 'M'),
(303, 'SIT', 3, 185, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(304, 'SIT', 3, 186, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(305, 'SIT', 3, 187, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(406, 'SIT', 4, 188, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(407, 'SIT', 4, 189, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(408, 'SIT', 4, 190, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(111, 'Bharti', 0, 191, 2, 13, 0, 13, 0, 0, 0, 13, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(112, 'Bharti', 0, 192, 2, 9, 0, 9, 0, 0, 0, 9, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(118, 'Bharti', 0, 193, 2, 9, 0, 9, 0, 0, 0, 9, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(119, 'Bharti', 0, 194, 2, 13, 0, 13, 0, 0, 0, 13, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(120, 'Bharti', 0, 195, 2, 9, 0, 9, 0, 0, 0, 9, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H'),
(207, 'Bharti', 1, 196, 3, 13, 0, 0, 13, 0, 0, 13, 0, 0, 0, 0, 13, 0, 0, 13, 0, 0, 0, 13, 0, 0, 0, 0, 0, 'F'),
(208, 'Bharti', 1, 197, 3, 9, 0, 0, 9, 0, 0, 9, 0, 0, 0, 0, 9, 0, 0, 9, 0, 0, 0, 9, 0, 0, 0, 0, 0, 'M'),
(214, 'Bharti', 1, 198, 3, 10, 0, 0, 10, 0, 0, 10, 0, 0, 0, 0, 10, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 'M'),
(215, 'Bharti', 1, 199, 3, 13, 0, 0, 13, 0, 0, 13, 0, 0, 0, 0, 13, 0, 0, 13, 0, 0, 0, 13, 0, 0, 0, 0, 0, 'F'),
(216, 'Bharti', 1, 200, 3, 10, 0, 0, 10, 0, 0, 10, 0, 0, 0, 0, 10, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 'H'),
(308, 'Bharti', 2, 201, 4, 14, 0, 14, 0, 14, 0, 0, 14, 0, 14, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(309, 'Bharti', 2, 202, 4, 10, 0, 10, 0, 10, 0, 0, 10, 0, 10, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(315, 'Bharti', 2, 203, 2, 10, 0, 10, 0, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(316, 'Bharti', 2, 204, 2, 14, 0, 14, 0, 0, 0, 14, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(317, 'Bharti', 2, 205, 2, 10, 0, 10, 0, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H'),
(426, 'Bharti', 3, 206, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(427, 'Bharti', 3, 207, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(432, 'Bharti', 3, 208, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(433, 'Bharti', 3, 209, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(434, 'Bharti', 3, 210, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H'),
(512, 'Bharti', 4, 211, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(513, 'Bharti', 4, 212, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(518, 'Bharti', 4, 213, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(519, 'Bharti', 4, 214, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(520, 'Bharti', 4, 215, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H');

-- --------------------------------------------------------

--
-- Table structure for table `bathschedule1`
--

CREATE TABLE `bathschedule1` (
  `id` int(11) NOT NULL,
  `building` varchar(15) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `pseudo_id` int(11) NOT NULL,
  `scheduleno` int(11) NOT NULL,
  `9` int(11) NOT NULL DEFAULT '0',
  `9.5` int(11) NOT NULL DEFAULT '0',
  `10` int(11) NOT NULL DEFAULT '0',
  `10.5` int(11) NOT NULL DEFAULT '0',
  `11` int(11) NOT NULL DEFAULT '0',
  `11.5` int(11) NOT NULL DEFAULT '0',
  `12` int(11) NOT NULL DEFAULT '0',
  `12.5` int(11) NOT NULL DEFAULT '0',
  `13` int(11) NOT NULL DEFAULT '0',
  `13.5` int(11) NOT NULL DEFAULT '0',
  `14` int(11) NOT NULL DEFAULT '0',
  `14.5` int(11) NOT NULL DEFAULT '0',
  `15` int(11) NOT NULL DEFAULT '0',
  `15.5` int(11) NOT NULL DEFAULT '0',
  `16` int(11) NOT NULL DEFAULT '0',
  `16.5` int(11) NOT NULL DEFAULT '0',
  `17` int(11) NOT NULL DEFAULT '0',
  `17.5` int(11) NOT NULL DEFAULT '0',
  `18` int(11) NOT NULL DEFAULT '0',
  `18.5` int(11) NOT NULL DEFAULT '0',
  `19` int(11) NOT NULL DEFAULT '0',
  `19.5` int(11) NOT NULL DEFAULT '0',
  `20` int(11) NOT NULL DEFAULT '0',
  `20.5` int(11) NOT NULL DEFAULT '0',
  `type` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bathschedule1`
--

INSERT INTO `bathschedule1` (`id`, `building`, `floor`, `pseudo_id`, `scheduleno`, `9`, `9.5`, `10`, `10.5`, `11`, `11.5`, `12`, `12.5`, `13`, `13.5`, `14`, `14.5`, `15`, `15.5`, `16`, `16.5`, `17`, `17.5`, `18`, `18.5`, `19`, `19.5`, `20`, `20.5`, `type`) VALUES
(2, 'SIT', 0, 172, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(3, 'SIT', 0, 173, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(4, 'SIT', 0, 174, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(106, 'SIT', 1, 175, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(107, 'SIT', 1, 176, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(108, 'SIT', 1, 177, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(206, 'SIT', 2, 178, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(207, 'SIT', 2, 179, 1, 12, 0, 0, 12, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(208, 'SIT', 2, 180, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(303, 'SIT', 3, 181, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(304, 'SIT', 3, 182, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(305, 'SIT', 3, 183, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(406, 'SIT', 4, 184, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(407, 'SIT', 4, 185, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'H'),
(408, 'SIT', 4, 186, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(111, 'Bharti', 0, 187, 2, 13, 0, 13, 0, 0, 0, 13, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(112, 'Bharti', 0, 188, 2, 10, 0, 10, 0, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(118, 'Bharti', 0, 189, 2, 10, 0, 10, 0, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(119, 'Bharti', 0, 190, 2, 13, 0, 13, 0, 0, 0, 13, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(120, 'Bharti', 0, 191, 2, 10, 0, 10, 0, 0, 0, 10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H'),
(207, 'Bharti', 1, 192, 3, 12, 0, 0, 12, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'F'),
(208, 'Bharti', 1, 193, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'M'),
(214, 'Bharti', 1, 194, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'M'),
(215, 'Bharti', 1, 195, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'F'),
(216, 'Bharti', 1, 196, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'H'),
(308, 'Bharti', 2, 197, 4, -1, 0, -1, 0, -1, 0, 0, -1, 0, -1, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(309, 'Bharti', 2, 198, 4, -1, 0, -1, 0, -1, 0, 0, -1, 0, -1, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(315, 'Bharti', 2, 199, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(316, 'Bharti', 2, 200, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(317, 'Bharti', 2, 201, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H'),
(426, 'Bharti', 3, 202, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(427, 'Bharti', 3, 203, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(432, 'Bharti', 3, 204, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(433, 'Bharti', 3, 205, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(434, 'Bharti', 3, 206, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H'),
(512, 'Bharti', 4, 207, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F'),
(513, 'Bharti', 4, 208, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M'),
(518, 'Bharti', 4, 209, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M'),
(519, 'Bharti', 4, 210, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F'),
(520, 'Bharti', 4, 211, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'H');

-- --------------------------------------------------------

--
-- Table structure for table `cleaners`
--

CREATE TABLE `cleaners` (
  `id` int(11) NOT NULL,
  `name` text,
  `9` int(11) NOT NULL DEFAULT '0',
  `9.5` int(11) NOT NULL DEFAULT '0',
  `10` int(11) NOT NULL DEFAULT '0',
  `10.5` int(11) NOT NULL DEFAULT '0',
  `11` int(11) NOT NULL DEFAULT '0',
  `11.5` int(11) NOT NULL DEFAULT '0',
  `12` int(11) NOT NULL DEFAULT '0',
  `12.5` int(11) NOT NULL DEFAULT '0',
  `13` int(11) NOT NULL DEFAULT '0',
  `13.5` int(11) NOT NULL DEFAULT '0',
  `14` int(11) NOT NULL DEFAULT '0',
  `14.5` int(11) NOT NULL DEFAULT '0',
  `15` int(11) NOT NULL DEFAULT '0',
  `15.5` int(11) NOT NULL DEFAULT '0',
  `16` int(11) NOT NULL DEFAULT '0',
  `16.5` int(11) NOT NULL DEFAULT '0',
  `17` int(11) NOT NULL DEFAULT '0',
  `17.5` int(11) NOT NULL DEFAULT '0',
  `18` int(11) NOT NULL DEFAULT '0',
  `18.5` int(11) NOT NULL DEFAULT '0',
  `19` int(11) NOT NULL DEFAULT '0',
  `19.5` int(11) NOT NULL DEFAULT '0',
  `20` int(11) NOT NULL DEFAULT '0',
  `20.5` int(11) NOT NULL DEFAULT '0',
  `password` text,
  `sex` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaners`
--

INSERT INTO `cleaners` (`id`, `name`, `9`, `9.5`, `10`, `10.5`, `11`, `11.5`, `12`, `12.5`, `13`, `13.5`, `14`, `14.5`, `15`, `15.5`, `16`, `16.5`, `17`, `17.5`, `18`, `18.5`, `19`, `19.5`, `20`, `20.5`, `password`, `sex`) VALUES
(9, 'male1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'male1', 'M'),
(10, 'male2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'male2', 'M'),
(11, 'male3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'male3', 'M'),
(12, 'male4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'male4', 'M'),
(13, 'female1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'female1', 'F'),
(14, 'female2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'female2', 'F'),
(15, 'female3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'female3', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  `time_posted` time NOT NULL,
  `date_edited` varchar(30) NOT NULL,
  `time_edited` time NOT NULL,
  `public` varchar(5) NOT NULL,
  `username` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `details`, `date_posted`, `time_posted`, `date_edited`, `time_edited`, `public`, `username`) VALUES
(6, 'kaboomh', 'May 29, 2017', '22:54:04', 'May 29, 2017', '22:59:42', 'yes', 'Admin'),
(7, 'kaboom', 'May 29, 2017', '22:55:35', '', '00:00:00', 'yes', 'Anuj'),
(8, 'khgb vjlhb', 'May 30, 2017', '16:48:58', '', '00:00:00', 'no', 'shreyas'),
(9, 'jhubsul', 'May 30, 2017', '16:49:21', '', '00:00:00', 'no', 'shreyas'),
(10, 'fhadthath', 'May 30, 2017', '16:50:26', '', '00:00:00', 'no', 'shubham'),
(11, '', 'May 30, 2017', '16:50:57', '', '00:00:00', 'no', 'shubham'),
(12, 'huj', 'May 30, 2017', '17:24:29', '', '00:00:00', 'no', 'Admin'),
(13, 'kjnce', 'June 02, 2017', '12:18:46', '', '00:00:00', 'no', 'Admin'),
(14, 'kjnec', 'June 02, 2017', '12:19:12', '', '00:00:00', 'no', 'Admin'),
(15, 'kmlce', 'June 02, 2017', '12:19:51', '', '00:00:00', 'no', 'Admin'),
(16, 'm ce', 'June 02, 2017', '12:21:13', '', '00:00:00', 'no', 'Admin'),
(17, '', 'June 02, 2017', '15:34:52', '', '00:00:00', 'no', 'Admin'),
(18, '', 'June 02, 2017', '15:34:55', '', '00:00:00', 'no', 'Admin'),
(19, '', 'June 02, 2017', '15:35:00', '', '00:00:00', 'yes', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `occasion_schedule`
--

CREATE TABLE `occasion_schedule` (
  `id` int(11) NOT NULL,
  `building` varchar(15) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `pseudo_id` int(11) NOT NULL,
  `scheduleno` int(11) NOT NULL,
  `9` int(11) NOT NULL DEFAULT '0',
  `9.5` int(11) NOT NULL DEFAULT '0',
  `10` int(11) NOT NULL DEFAULT '0',
  `10.5` int(11) NOT NULL DEFAULT '0',
  `11` int(11) NOT NULL DEFAULT '0',
  `11.5` int(11) NOT NULL DEFAULT '0',
  `12` int(11) NOT NULL DEFAULT '0',
  `12.5` int(11) NOT NULL DEFAULT '0',
  `13` int(11) NOT NULL DEFAULT '0',
  `13.5` int(11) NOT NULL DEFAULT '0',
  `14` int(11) NOT NULL DEFAULT '0',
  `14.5` int(11) NOT NULL DEFAULT '0',
  `15` int(11) NOT NULL DEFAULT '0',
  `15.5` int(11) NOT NULL DEFAULT '0',
  `16` int(11) NOT NULL DEFAULT '0',
  `16.5` int(11) NOT NULL DEFAULT '0',
  `17` int(11) NOT NULL DEFAULT '0',
  `17.5` int(11) NOT NULL DEFAULT '0',
  `18` int(11) NOT NULL DEFAULT '0',
  `18.5` int(11) NOT NULL DEFAULT '0',
  `19` int(11) NOT NULL DEFAULT '0',
  `19.5` int(11) NOT NULL DEFAULT '0',
  `20` int(11) NOT NULL DEFAULT '0',
  `20.5` int(11) NOT NULL DEFAULT '0',
  `type` char(1) DEFAULT NULL,
  `date_of_occ` date DEFAULT NULL,
  `reason` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occasion_schedule`
--

INSERT INTO `occasion_schedule` (`id`, `building`, `floor`, `pseudo_id`, `scheduleno`, `9`, `9.5`, `10`, `10.5`, `11`, `11.5`, `12`, `12.5`, `13`, `13.5`, `14`, `14.5`, `15`, `15.5`, `16`, `16.5`, `17`, `17.5`, `18`, `18.5`, `19`, `19.5`, `20`, `20.5`, `type`, `date_of_occ`, `reason`, `username`) VALUES
(118, 'Bharti', 0, 192, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'M', '2017-06-28', '', ''),
(119, 'Bharti', 0, 193, 2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'F', '2017-06-28', '', ''),
(518, 'Bharti', 4, 196, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'M', '2017-06-29', '', ''),
(519, 'Bharti', 4, 197, 1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, 0, 0, 'F', '2017-06-29', '', ''),
(2, 'SIT', 0, 198, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'F', '2017-06-27', '', ''),
(3, 'SIT', 0, 199, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'H', '2017-06-27', '', ''),
(4, 'SIT', 0, 200, 3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 'M', '2017-06-27', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedulelist`
--

CREATE TABLE `schedulelist` (
  `scheduleno` int(10) NOT NULL COMMENT 'id of the schedule',
  `9` tinyint(1) NOT NULL DEFAULT '0',
  `9.5` tinyint(1) NOT NULL DEFAULT '0',
  `10` tinyint(1) NOT NULL DEFAULT '0',
  `10.5` tinyint(1) NOT NULL DEFAULT '0',
  `11` tinyint(1) NOT NULL DEFAULT '0',
  `11.5` tinyint(1) NOT NULL DEFAULT '0',
  `12` tinyint(1) NOT NULL DEFAULT '0',
  `12.5` tinyint(1) NOT NULL DEFAULT '0',
  `13` tinyint(1) NOT NULL DEFAULT '0',
  `13.5` tinyint(1) NOT NULL DEFAULT '0',
  `14` tinyint(1) NOT NULL DEFAULT '0',
  `14.5` tinyint(1) NOT NULL DEFAULT '0',
  `15` tinyint(1) NOT NULL DEFAULT '0',
  `15.5` tinyint(1) NOT NULL DEFAULT '0',
  `16` tinyint(1) NOT NULL DEFAULT '0',
  `16.5` tinyint(1) NOT NULL DEFAULT '0',
  `17` tinyint(1) NOT NULL DEFAULT '0',
  `17.5` tinyint(1) NOT NULL DEFAULT '0',
  `18` tinyint(1) NOT NULL DEFAULT '0',
  `18.5` tinyint(1) NOT NULL DEFAULT '0',
  `19` tinyint(1) NOT NULL DEFAULT '0',
  `19.5` tinyint(1) NOT NULL DEFAULT '0',
  `20` tinyint(1) NOT NULL DEFAULT '0',
  `20.5` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedulelist`
--

INSERT INTO `schedulelist` (`scheduleno`, `9`, `9.5`, `10`, `10.5`, `11`, `11.5`, `12`, `12.5`, `13`, `13.5`, `14`, `14.5`, `15`, `15.5`, `16`, `16.5`, `17`, `17.5`, `18`, `18.5`, `19`, `19.5`, `20`, `20.5`) VALUES
(1, -1, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, -1, -1, -1, 0, 0, -1, 0),
(2, -1, 0, -1, 0, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, -1, 0, 0, -1, 0, 0, -1, 0, 0, 0, 0, -1, 0, 0, -1, 0, 0, 0, -1, 0, 0, 0, 0, 0),
(4, -1, 0, -1, 0, -1, 0, 0, -1, 0, -1, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `username`, `password`) VALUES
(1, 'super', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jbhfkj', 'hjbkjgn'),
(2, 'kjnfbn', 'kbfkjbn'),
(3, 'Anuj', 'anujanuj'),
(4, 'Admin', 'avengerx'),
(5, 'shreyas', 'asdfgh'),
(6, 'shubham', 'qwerty'),
(7, 'anjd', 'kjnvojn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bathschedule`
--
ALTER TABLE `bathschedule`
  ADD PRIMARY KEY (`pseudo_id`),
  ADD UNIQUE KEY `id` (`pseudo_id`);

--
-- Indexes for table `bathschedule1`
--
ALTER TABLE `bathschedule1`
  ADD PRIMARY KEY (`pseudo_id`),
  ADD UNIQUE KEY `id` (`pseudo_id`);

--
-- Indexes for table `cleaners`
--
ALTER TABLE `cleaners`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasion_schedule`
--
ALTER TABLE `occasion_schedule`
  ADD PRIMARY KEY (`pseudo_id`),
  ADD UNIQUE KEY `id` (`pseudo_id`);

--
-- Indexes for table `schedulelist`
--
ALTER TABLE `schedulelist`
  ADD PRIMARY KEY (`scheduleno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bathschedule`
--
ALTER TABLE `bathschedule`
  MODIFY `pseudo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `bathschedule1`
--
ALTER TABLE `bathschedule1`
  MODIFY `pseudo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `cleaners`
--
ALTER TABLE `cleaners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `occasion_schedule`
--
ALTER TABLE `occasion_schedule`
  MODIFY `pseudo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
