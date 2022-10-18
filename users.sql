-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 07:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr`, `username`, `password`, `dt`) VALUES
(1, 'demouser', 'demopass', '2022-08-16 19:32:58'),
(2, 'admin1', 'admin1', '2022-08-16 19:57:37'),
(3, 'Sarang', 'im123', '2022-08-16 20:00:40'),
(4, 'si', 'si', '2022-08-17 16:24:21'),
(8, 'Cad', 'sa', '2022-08-18 06:41:13'),
(9, 'asf', 'asf', '2022-08-18 06:44:33'),
(10, 'si-secured', '$2y$10$lF9hMpJZUFpjJLwBl7MzYeahspPjMx8XfgiwN54TP4q2egyJEi69G', '2022-08-25 20:05:48'),
(11, 'username', 'password', '0000-00-00 00:00:00'),
(22, 'wewe', 'asdg', '2022-09-18 19:32:34'),
(23, 'dad', 'asdg', '2022-09-19 19:32:34'),
(24, 'asdadsd', 'asdg', '2022-09-20 19:32:34'),
(25, 'afadfa', 'asdg', '2022-09-21 19:32:34'),
(26, 'qweg', 'asdg', '2022-09-22 19:32:34'),
(27, 'erg', 'asdg', '2022-09-23 19:32:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
