-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 02:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Description`, `Price`, `created_at`, `updated_on`) VALUES
(2, 'do7a', 'bd2n', 215, '2023-12-19 08:11:16', '2023-12-19 12:34:50'),
(3, 'eldo2sh', 'bndara', 132, '2023-12-19 08:12:33', '2023-12-19 08:12:33'),
(4, 'MICKEY', 'BWDAN', 155, '2023-12-19 08:12:57', '2023-12-19 13:07:38'),
(5, 'mo7y', 'by7b ytdrb', 2, '2023-12-19 08:14:16', '2023-12-19 08:14:16'),
(6, 'sofy', '😦😦', 112, '2023-12-19 10:51:13', '2023-12-19 12:35:19'),
(9, 'habiba', 'mo3tareda', 250, '2023-12-19 11:20:12', '2023-12-19 11:20:12'),
(11, 'seif', 'tarsh eltarsh', 12000000, '2023-12-19 12:23:49', '2023-12-19 12:23:49'),
(12, 'saeed', 'hndeek floos lw eshtaret', -1, '2023-12-19 12:44:59', '2023-12-19 12:44:59'),
(13, 'alaa', '2osayara', 249, '2023-12-19 12:46:23', '2023-12-19 12:51:14'),
(14, '3smn', 'bsksoka', 153, '2023-12-19 12:47:11', '2023-12-19 12:47:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
