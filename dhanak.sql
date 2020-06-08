-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 08:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhanak`
--

-- --------------------------------------------------------

--
-- Table structure for table `dhanak_product`
--

CREATE TABLE `dhanak_product` (
  `file` varchar(10000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhanak_product`
--

INSERT INTO `dhanak_product` (`file`, `title`, `description`) VALUES
('../images/WhatsApp Image 2019-04-21 at 09.41.13 (11).jpeg', '0', 0),
('../images/WhatsApp Image 2019-04-21 at 09.41.13 (9).jpeg', '0', 0),
('../images/', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_sign_up`
--

CREATE TABLE `user_sign_up` (
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_cpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sign_up`
--

INSERT INTO `user_sign_up` (`user_name`, `user_email`, `user_pass`, `user_cpass`) VALUES
('Aziz', 'azizullah0103@gmail.com', '123', '123'),
('aziz', 'azizullah0103@gmail.com', '12', '12'),
('hatif', 'hatif1@gamfgh.fgh', '12', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
