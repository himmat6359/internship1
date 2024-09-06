-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2023 at 07:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE IF NOT EXISTS `adminregister` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`id`, `name`, `username`, `password`) VALUES
(1, 'harshad makvana', 'harshad', 'Harshad123'),
(2, 'makwana mittal', 'mittal', 'Mittal123'),
(3, 'leuva hardik', 'hardik', 'Hardik123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` int(10) NOT NULL,
  `useropinion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `pid`, `useropinion`) VALUES
('harshad', 1, 'this product are osm.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`username`, `id`, `qty`, `type`, `add`, `contactno`) VALUES
('', 0, 0, 'Cash of Delivery', '', 0),
('', 0, 0, 'Cash of Delivery', '', 0),
('', 0, 0, 'Cash of Delivery', '', 0),
('', 0, 0, 'Cash of Delivery', '', 0),
('', 0, 0, 'Cash of Delivery', '', 0),
('', 0, 0, 'Cash of Delivery', '', 0),
('harshad', 1, 1, 'Cash of Delivery', 'AT-VARNAVADA, VANKAR VAS , TA-VADGAM , DISK-BANASHKANTHA', 2147483647),
('hardik', 2, 4, 'Online Payment', 'Ahmedabad', 2147483647),
('', 0, 0, 'Cash of Delivery', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL,
  `img_src` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `desc1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `img_src`, `name`, `price`, `desc1`) VALUES
(1, 'img/8.jpg', 'campu', 786, 'good quality'),
(2, 'img/2.jpg', 'nike', 1999, 'good quality'),
(3, 'img/10.jpg', 'nike', 7637, 'good quality'),
(4, 'img/26.jpg', 'adidas', 9998, 'osm product'),
(5, 'img/22.jpg', 'canvas', 5525, 'nice quality ');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE IF NOT EXISTS `userregister` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `username`, `password`) VALUES
(1, 'harshad makvana', 'harshad', 'harshad'),
(2, 'leuva hardik', 'hardik', 'hardik'),
(3, 'makwana mittal', 'mittal', 'mittal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
