-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 04:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodrestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ITEM` varchar(100) NOT NULL,
  `RATE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ITEM`, `RATE`) VALUES
('to share', 7),
('best option', 9),
('starter 1 rice', 11),
('starter 2 grill', 16),
('starter 3 mex', 16),
('delicious meat', 14),
('best burguer', 14),
('authentic grill', 12),
('bbq meat', 15),
('best taste', 14),
('brownie', 5),
('best cheesecake', 6),
('carrot cake', 5),
('chocolate', 3),
('apple pie', 6),
('water', 2),
('beer', 3),
('cocktail', 8),
('tonic', 2),
('beer0,0', 3),
('drinks', 3),
('delicious starter', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `NAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `ITM_NAME` varchar(50) NOT NULL,
  `ITM_QUANTITY` int(11) NOT NULL,
  `AMT_PURCHASED` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
