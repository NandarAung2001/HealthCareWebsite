-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2024 at 06:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jade108`
--

-- --------------------------------------------------------

--
-- Table structure for table `regevent`
--

CREATE TABLE `regevent` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `event` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regevent`
--

INSERT INTO `regevent` (`id`, `uname`, `gender`, `age`, `email`, `address`, `phone`, `event`) VALUES
(1, 'hnin', 'Female', 18, 'saunggg22@gmail.com', 'Yangon', 999324, 'Girls Challenge'),
(2, 'saung', 'Female', 18, 'saunggg22@gmail.com', 'Yangon', 2147483647, 'Girls Challenge'),
(3, 'Tom Holland', 'Male', 18, 'dklunp2@gmail.com', 'Yangon', 2909324, 'Kids Milestone'),
(4, 'saung', 'Female', 18, 'saunggg22@gmail.com', 'Yangon', 2147483647, 'Girls Challenge'),
(5, 'Shary', 'Female', 18, 'saunggg22@gmail.com', 'Yangon', 2909324, 'Young & Old'),
(6, 'saung', 'Female', 18, 'saunggg22@gmail.com', 'Yangon', 999324, 'Kids Milestone'),
(7, 'saung', 'Female', 18, 'saunggg22@gmail.com', 'Yangon', 8289303, 'Young & Old');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('jade', '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regevent`
--
ALTER TABLE `regevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regevent`
--
ALTER TABLE `regevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
