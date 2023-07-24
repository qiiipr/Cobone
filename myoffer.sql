-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2021 at 05:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myoffer`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `creation_date`) VALUES
(1, 'FOOD', '2021-04-02'),
(2, 'AUTO', '2021-04-02'),
(3, 'BEAUTY', '2021-04-02'),
(4, 'WELLNESS', '2021-04-02'),
(5, 'ACTIVITIES', '2021-04-02'),
(6, 'JEWELLERY', '2021-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text,
  `org_price` decimal(10,0) DEFAULT NULL,
  `discount` int(5) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `title`, `image`, `description`, `org_price`, `discount`, `cat_id`, `user_id`, `quantity`, `creation_date`) VALUES
(13, 'sushi', '1618195681.jpg', 'Amazing special offer for sushi lovers', '40', 10, 1, 30, 20, '2021-04-12'),
(17, 'jump', '1618248799.jpg', 'Jump over the Alps, do not miss the opportunity and buy a ticket', '200', 20, 5, 31, 20, '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `zip` int(8) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `city`, `street`, `zip`, `creation_date`) VALUES
(17, 'gaydaa', 'khalid', 'gaydaa@gmail.com', '24tfcd', '12345678760', 'Taif', 'qqq', 5443, '2021-04-11'),
(30, 'rhf', 'asali', 'Rahafasali.1298@gmail.com', '123333', '+96658053550', 'Makkah', '30', 22, '2021-04-12'),
(31, 'rwan', 'Asali', 'los-h-@hotmail.com', '1234321', '0553306890', 'taif', 'bulging 7544', 26523, '2021-04-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
