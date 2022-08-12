-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2019 at 04:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerije`
--

DROP TABLE IF EXISTS `galerije`;
CREATE TABLE IF NOT EXISTS `galerije` (
  `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nazivGalerije` varchar(100) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerije`
--

INSERT INTO `galerije` (`id`, `nazivGalerije`, `vreme`, `komentar`) VALUES
(1, 'Predjela', '2019-08-19 15:12:13', NULL),
(2, 'Glavna jela', '2019-08-19 15:13:35', NULL),
(3, 'Desert', '2019-08-19 15:13:35', NULL),
(4, 'Morski plodovi', '2019-08-19 15:13:35', NULL),
(5, 'Salate', '2019-08-19 15:13:35', NULL),
(6, 'Jela sa rostilja', '2019-08-19 15:13:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galerijeslike`
--

DROP TABLE IF EXISTS `galerijeslike`;
CREATE TABLE IF NOT EXISTS `galerijeslike` (
  `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idGalerije` int(3) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `komentar` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerijeslike`
--

INSERT INTO `galerijeslike` (`id`, `idGalerije`, `slika`, `komentar`) VALUES
(1, 1, '1.jpg', NULL),
(2, 1, '2.jpg', NULL),
(3, 1, '3.jpg', NULL),
(4, 1, '4.jpg', NULL),
(5, 1, '5.jpg', NULL),
(6, 5, '5.jpg', NULL),
(7, 5, '6.jpg', NULL),
(8, 5, '7.jpg', NULL),
(9, 5, '8.jpg', NULL),
(10, 5, '9.jpg', NULL),
(11, 2, '11.jpg', NULL),
(12, 2, '12.jpg', NULL),
(13, 2, '13.jpg', NULL),
(14, 2, '14.jpg', NULL),
(15, 2, '15.jpg', NULL),
(16, 6, '16.jpg', NULL),
(17, 6, '17.jpg', NULL),
(18, 6, '18.jpg', NULL),
(19, 6, '19.jpg', NULL),
(20, 6, '20.jpg', NULL),
(21, 3, '21.jpg', NULL),
(22, 3, '22.jpg', NULL),
(23, 3, '23.jpg', NULL),
(24, 3, '24.jpg', NULL),
(25, 3, '25.jpg', NULL),
(26, 4, '26.jpg', NULL),
(27, 4, '27.jpg', NULL),
(28, 4, '28.jpg', NULL),
(29, 4, '29.jpg', NULL),
(30, 4, '30.jpg', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
