-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:06 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teaapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `bevID` varchar(10) NOT NULL,
  `bevName` varchar(255) NOT NULL,
  `bevImage` varchar(255) NOT NULL,
  `bevType` varchar(20) NOT NULL,
  `price` decimal(3,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`bevID`, `bevName`, `bevImage`, `bevType`, `price`) VALUES
('MT-001', 'Brown Sugar Milk Tea', 'Brown-Sugar-Milk-Tea', 'Milk Tea', '4.50'),
('MT-002', 'Iron Goddess Sea Salt Cream', 'Caramel-Vanilla-Hazelnut-Milk-Tea', 'Milk Tea', '5.50'),
('MT-003', 'Chatime Milk Tea', 'Chatime-Milk-Tea', 'Milk Tea', '3.50'),
('MT-004', 'Coconut Milk Tea', 'Coconut-Milk-Tea', 'Milk Tea', '4.00'),
('MT-005', 'Matcha Red Bean Milk Tea', 'Matcha-Red-Bean-Milk-Tea', 'Milk Tea', '6.00'),
('MT-006', 'Oolong Milk Tea', 'Oolong-Milk-Tea', 'Milk Tea', '3.50'),
('MT-007', 'Red Bean Pearl Milk Tea', 'Red-Bean-Pearl-Milk-Tea', 'Milk Tea', '4.50'),
('MT-008', 'Taro Milk Tea', 'Taro-Milk_Tea', 'Milk Tea', '4.00'),
('MT-009', 'Wintermelon Milk Tea', 'Wintermelon-Milk-Tea', 'Milk Tea', '4.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`bevID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
