-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 11:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `breed` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(1, 'Max', 'Labrador Retriever', 3, 'Quezon City', 'Golden', 58.00, 30.00),
(2, 'Bella', 'Beagle', 2, 'Manila', 'Tri-color', 38.00, 12.00),
(3, 'Charlie', 'German Shepherd', 4, 'Makati', 'Black/Tan', 65.00, 35.00),
(4, 'Lucy', 'Poodle', 1, 'Pasig', 'White', 28.00, 7.00),
(5, 'Rocky', 'Siberian Husky', 5, 'Taguig', 'Gray/White', 60.00, 28.00),
(6, 'Daisy', 'Golden Retriever', 3, 'Marikina', 'Golden', 56.00, 29.00),
(7, 'Cooper', 'Bulldog', 4, 'Antipolo', 'Brown', 40.00, 24.00),
(8, 'Luna', 'Shih Tzu', 2, 'Caloocan', 'White/Brown', 25.00, 6.00),
(9, 'Milo', 'Dachshund', 3, 'Parañaque', 'Brown', 22.00, 8.00),
(10, 'Coco', 'Chihuahua', 1, 'Pasay', 'Cream', 18.00, 3.00),
(11, 'Kappacluegi', 'Mastiff', 2, 'Sampaloc ', 'Brown', 64.00, 100.00),
(12, 'Kappacluegi II', 'Mastiff', 4, 'Sampaloc ', 'Brown', 65.00, 124.00);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
