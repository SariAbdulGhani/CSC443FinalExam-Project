-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2024 at 05:08 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chef_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `FULLNAME` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CREATION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MODIFICATION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `USERNAME`, `PASSWORD`, `FULLNAME`, `CREATION_DATE`, `MODIFICATION_DATE`) VALUES
(1, 'GilbertTekli', 'Strongpass123', 'GT@gmail.com', '2024-05-07 21:21:57', '2024-05-07 21:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `surname`, `email`, `subject`, `message`) VALUES
(1, 'Sari', 'Abdul Ghani', 'SAG@gmail.com', 'Inquery', 'Hello, I would like to know if you are going to add any ice cream?');

-- --------------------------------------------------------

--
-- Table structure for table `table_platters`
--

DROP TABLE IF EXISTS `table_platters`;
CREATE TABLE IF NOT EXISTS `table_platters` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PLATTER` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DESCRIPTION` text,
  `IMAGE` varchar(255) DEFAULT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_platters`
--

INSERT INTO `table_platters` (`ID`, `PLATTER`, `DESCRIPTION`, `IMAGE`, `IS_ACTIVE`, `category`, `price`, `discount`) VALUES
(1, 'Chicken Rice', 'Delicious chicken & rice', 'chicken.jpg', 1, 'Main Course', 40.00, 0.50),
(2, 'Veggie Wrap', 'Healthy veggie wrap', 'veggie-wrap.jpg', 1, 'Vegetarian', 20.00, 0.25),
(3, 'BBQ Burger', 'Tasty BBQ burger', 'bbq-burger.jpg', 1, 'Fast Food', 9.99, 0.00),
(4, 'Seafood Pasta', 'Scrumptious seafood dish', 'seafood-pasta.jpg', 1, 'Main Course', 30.00, 0.50),
(5, 'Fruit Salad', 'Fresh fruit salad', 'fruit-salad.jpg', 1, 'Appetizer', 30.00, 0.20),
(6, 'Steak Frites', 'Classic steak with fries', 'steak-frites.jpg', 1, 'Main Course', 40.00, 0.50),
(7, 'Mushroom Risotto', 'Creamy mushroom risotto', 'mushroom-risotto.jpg', 1, 'Vegetarian', 12.00, 0.00),
(8, 'Spicy Tuna Roll', 'Fresh and spicy tuna sushi', 'spicy-tuna-roll.jpg', 1, 'Sushi', 9.99, 0.50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
