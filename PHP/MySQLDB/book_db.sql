-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 09, 2025 at 05:49 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbauthors`
--

DROP TABLE IF EXISTS `tbauthors`;
CREATE TABLE IF NOT EXISTS `tbauthors` (
  `author_id` int NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbauthors`
--

INSERT INTO `tbauthors` (`author_id`, `author_name`) VALUES
(1, 'Jane Austen'),
(2, 'George Orwell'),
(3, 'J.R.R. Tolkien'),
(4, 'Agatha Christie');

-- --------------------------------------------------------

--
-- Table structure for table `tbbooks`
--

DROP TABLE IF EXISTS `tbbooks`;
CREATE TABLE IF NOT EXISTS `tbbooks` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author_id` int NOT NULL,
  `publication_date` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `number_of_pages` int DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbbooks`
--

INSERT INTO `tbbooks` (`book_id`, `title`, `author_id`, `publication_date`, `price`, `number_of_pages`) VALUES
(2, '1984', 2, '1949-06-08', 9.50, 328),
(3, 'Animal Farm', 2, '1945-08-17', 7.25, 112),
(4, 'The Hobbit', 3, '1937-09-21', 14.00, 310),
(5, 'The Lord of the Rings', 3, '1954-07-29', 25.99, 1178),
(6, 'And Then There Were None', 4, '1939-11-06', 8.99, 256),
(7, 'The Murder of Roger Ackroyd', 4, '1926-06-01', 10.50, 288),
(8, 'No Money', 1, '2025-08-28', 25.00, 168),
(9, 'Learn code', 1, '2025-08-28', 25.00, 168),
(10, 'How to talk to anyone', 2, '2025-08-28', 33.80, 200),
(11, 'No Money', 1, '2025-08-28', 25.00, 168);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
