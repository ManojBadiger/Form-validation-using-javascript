-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 12:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `inter`
--

CREATE TABLE `inter` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `linked` varchar(255) NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inter`
--

INSERT INTO `inter` (`id`, `name`, `email`, `college`, `linked`, `year`) VALUES
(10, 'Manoj Badiger', 'manojkumarbadiger27@gmail.com', 'adsf', 'https://dfsaf', '2020'),
(11, 'Manoj Badiger', 'manojkuamr@gmail.com', 'bbbiet', 'https://sdff', '2021'),
(12, 'Manoj Badiger', 'manojkuamr@gmail.com', 'bbbiet', 'https://sdff', '2021'),
(13, 'Manoj Badiger', 'manojkuamr@gmail.com', 'bbbiet', 'https://sdff', '2021'),
(14, 'Manoj Badiger', 'manojkumarbadiger452@gmail.com', 'BIET', 'https://www.linkedin.com/in/manoj-badiger-481140185/', '2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inter`
--
ALTER TABLE `inter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inter`
--
ALTER TABLE `inter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
