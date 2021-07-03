-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 01:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `anestikoli`
--

CREATE TABLE `anestikoli` (
  `id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `game` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anestikoli`
--

INSERT INTO `anestikoli` (`id`, `userId`, `comment`, `username`, `game`) VALUES
(1, 2, 'This is a test comment', 'anestikoli', 'tiktak'),
(2, 2, 'This is another test comment', 'anestikoli', 'tiktak'),
(3, 2, 'This is another test comment 3 i wouldnt say', 'anestikoli', 'mario'),
(4, 2, 'Pretty cool game', 'anestikoli', 'tiktak');

-- --------------------------------------------------------

--
-- Table structure for table `pfp`
--

CREATE TABLE `pfp` (
  `id` int(10) NOT NULL,
  `usersId` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pfp`
--

INSERT INTO `pfp` (`id`, `usersId`, `status`) VALUES
(6, 2, 0),
(7, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `game` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`id`, `userId`, `comment`, `username`, `game`) VALUES
(1, 3, 'This is a comment from another user', 'tester', 'tiktak'),
(2, 3, 'Wow awesome game', 'tester', 'tiktak'),
(3, 3, 'back to childhood', 'tester', 'mario'),
(4, 3, 'Pretty hard', 'tester', 'quiz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `upassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `username`, `upassword`) VALUES
(2, 'anestikoli', '123123'),
(3, 'tester', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anestikoli`
--
ALTER TABLE `anestikoli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pfp`
--
ALTER TABLE `pfp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anestikoli`
--
ALTER TABLE `anestikoli`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pfp`
--
ALTER TABLE `pfp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
