-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 08:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'faithfuledema15', 'faithfuledema15@gmail.com', '$2y$10$UWqrjxpQHEwLbCTXzVIqL.x.2rkvei1zDA0RdYuRfZf'),
(2, 'edemafaithful699', 'edemafaithful699@email.com', '$2y$10$qNOiXwO9CR0JC2OptauBne846ANNcNsefZPURw2QxC9'),
(3, 'Godwinreubendavid21', 'godwinreubendavid@gmail.com', '$2y$10$9plePuZF3pWueHEUltr1JuvkHrvcm3jL48kRnrOSqd9'),
(4, 'Edemafaithfu7', 'edemafaithful@gmail.com', '$2y$10$af5qbzhBAj.J2Z.KS8QAEuHjh31oF1IwvqcGtVlZ.JZ'),
(5, 'EdemaOrighoye9', 'htei@gmail.com', '$2y$10$U0BnC5e0MW2HeG.Gh5cm3./WzgKXBMBdLIMPfj8bhCc'),
(6, 'Serbermz3', 'Serbermz3@gmail.com', '$2y$10$0CB5KgW97.kbbHE/7bFij.ehZgWQU9fnNRt5dH9MwEU'),
(7, 'Jestinbab3', 'Jestinbab3@gmail.com', '$2y$10$pzU8S5.aN012VtAxWqUEL.CdLZcJ5cdPdHn1MOz22m1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
