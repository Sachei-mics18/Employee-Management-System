-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(3, 'Bryx', '$2y$10$RXi/zTnPnfBAv6G1eXJsv.Ls2JwqqodG1qg8NYdnk8ktoEd9D0G0W', 'user'),
(4, 'Mosquite', '$2y$10$o8nr1rYzvFwg3j4olhA.aeuyiOfor2Gw0EgMRu5Ui3yWbaFue5Ma.', 'employee'),
(5, 'Sealtiel', '$2y$10$3pF8p7aSZ9rtrw8L.9yoJexjZ.6ujSeDalJDACmPZjDnsczv2Fv6S', 'user'),
(6, 'Nabor', '$2y$10$ndpewUVeyzkayeR/MyUYeOWcJ.3cCME02ppthgXj1nG0KaKbgf00y', 'employee'),
(14, 'Moldon', '$2y$10$26/dzNzixmiM4Zp8ZrAhgOS2KraTE8xvSOuxDr0hq3wE/8wYJiDFO', 'employee'),
(15, 'Michaela', '$2y$10$VMWFImA7ANfJHOALd4S1n.f8Uue9yoMXyYaIN/NsdGHO.Jw8xkj.i', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
