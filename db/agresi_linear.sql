-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2022 at 05:27 AM
-- Server version: 8.0.23
-- PHP Version: 7.3.29-to-be-removed-in-future-macOS

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agresi_linear`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int NOT NULL,
  `a` float NOT NULL,
  `b` float NOT NULL,
  `result` varchar(300) NOT NULL,
  `pearson` float NOT NULL,
  `koefisien_determinasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `a`, `b`, `result`, `pearson`, `koefisien_determinasi`) VALUES
(3, 177.786, -0.138889, 'Y = 177.78571428571428 + (-0.1388888888888889X)', 6.50769, 42.35),
(4, 261.118, -0.109091, 'Y = 261.11764705882354 + (-0.10909090909090909X)', 8.12162, 65.9608),
(5, 261.118, -0.109091, 'Y = 261.11764705882354 + (-0.10909090909090909X)', 8.12162, 65.9608),
(6, 540.35, -0.179487, 'Y = 540.35 + (-0.1794871794871795X)', 3.15981, 9.98442);

-- --------------------------------------------------------

--
-- Table structure for table `input_data`
--

CREATE TABLE `input_data` (
  `id` int NOT NULL,
  `x` float NOT NULL,
  `y` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `input_data`
--

INSERT INTO `input_data` (`id`, `x`, `y`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 1, 1),
(4, 2, 3),
(5, 3, 2),
(6, 2, 2),
(7, 2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_data`
--
ALTER TABLE `input_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `input_data`
--
ALTER TABLE `input_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
