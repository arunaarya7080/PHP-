-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2021 at 09:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u174277683_Codingworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudtb`
--

CREATE TABLE `crudtb` (
  `id` int(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `hobby` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crudtb`
--

INSERT INTO `crudtb` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `hobby`, `address`, `city`, `state`, `zip`, `image`) VALUES
(1, 'arun', 'aarya', 'arunaarya7080@gmail.com', '123456', 'male', 'Coding', 'lucknow', 'lucknow', 'Madhy Pradesh', '226201', 'imagedata/Screenshot (4).png'),
(12, 'dinesh', 'aarya', 'arunaarya7080@gmail.com', '12345', 'male', 'Coding,Gaming', 'lucknow', 'lucknow', 'Uttar Pradesh', '226201', 'imagedata/'),
(13, 'arun', '', '', '147', '', '', '', '', '', '', 'imagedata/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudtb`
--
ALTER TABLE `crudtb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudtb`
--
ALTER TABLE `crudtb`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
