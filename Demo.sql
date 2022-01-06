-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: schoolzone.cxzjvmajuh6w.ap-south-1.rds.amazonaws.com:3306
-- Generation Time: Dec 31, 2021 at 12:50 PM
-- Server version: 8.0.23
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_exam_header`
--

DROP TABLE IF EXISTS `result_exam_header`;
CREATE TABLE IF NOT EXISTS `result_exam_header` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Header_Name` varchar(30) NOT NULL,
  `Header_Type` varchar(10) DEFAULT NULL COMMENT 'External/Internal',
  `sectionmaster_Id` int DEFAULT NULL,
  `abbr` varchar(255) DEFAULT NULL,
  `sequence` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result_exam_header`
--

INSERT INTO `result_exam_header` (`Id`, `Header_Name`, `Header_Type`, `sectionmaster_Id`, `abbr`, `sequence`) VALUES
(18, 'A', 'A2', 1, 'A1', '1'),
(19, 'B', 'B2', 1, 'B1', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
