-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin-panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(1, 'ali', 'ali@gmail.com', '$2y$10$9HCgMPHKAwHbpgcheWWroeZ3E0MC4j2i0S6u.S61L7fHHJplHKcj.', '03402867478', 1),
(2, 'wajahat', 'wajahataftab07@gmail.com', '$2y$10$q.IZoilPcg861TnPNwPUC.TXUXOalDSS2QBGP49PhYOvkiAxeMFi.', '03332164812', 1),
(3, 'wajahat', 'zz@gmail.com', '$2y$10$m4gK4fCQYoFvEcjLOS.62.GcufujL4Zgt/ooS.UjOwnV1ojVqtIBK', '03402867478', 1),
(5, 'zamin', 'zaminabbas22@gmail.com', '$2y$10$3KBRirDOAkVgNQDWz16Hgu85RjJ2r0pxq4gz8SuxEOI8rCB9YlDIq', '03402867478', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
