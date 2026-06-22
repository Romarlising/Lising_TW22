-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 05:18 AM
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
-- Database: `dog_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(6) UNSIGNED NOT NULL,
  `dog_name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `dog_name`, `breed`, `age`, `address`, `color`, `height`, `weight`, `date_registered`) VALUES
(1, 'Browny', 'Pug', '2 years old', 'Quezon City', 'White', '2 ft', '2.5 kilos', '2026-06-22 02:21:36'),
(2, 'Whitey', 'Siberian Husky', '3 years old', 'Malabon City', 'Brown', '3 ft', '5.5 kilos', '2026-06-22 02:21:36'),
(3, 'Prince', 'Chow Chow', '4 years old', 'Bulacan', 'Brown', '2 ft', '4 kilos', '2026-06-22 02:21:36'),
(4, 'Max', 'Golden Retriever', '5 years old', 'Manila', 'Golden', '3 ft', '8 kilos', '2026-06-22 02:21:36'),
(5, 'Bella', 'Shih Tzu', '1 year old', 'Caloocan', 'White', '1 ft', '2 kilos', '2026-06-22 02:21:36'),
(6, 'Rocky', 'Bulldog', '3 years old', 'Makati', 'Gray', '2 ft', '6 kilos', '2026-06-22 02:21:36'),
(7, 'Luna', 'Beagle', '2 years old', 'Pasig', 'Black and Brown', '2 ft', '4 kilos', '2026-06-22 02:21:36'),
(8, 'Charlie', 'Labrador', '4 years old', 'Taguig', 'Black', '3 ft', '10 kilos', '2026-06-22 02:21:36'),
(9, 'Milo', 'Aspin', '2 years old', 'Marikina', 'Brown', '2 ft', '5 kilos', '2026-06-22 02:21:36'),
(10, 'Coco', 'Poodle', '1 year old', 'Pasay', 'White', '1.5 ft', '3 kilos', '2026-06-22 02:21:36'),
(12, 'Sadie', 'Pomeranian', '1 year old', 'Cainta', 'Light Brown', '2 ft', '4 kilos', '2026-06-22 03:12:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
