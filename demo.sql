-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 06:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `username` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `dcategory` varchar(50) NOT NULL,
  `idate` date NOT NULL,
  `dedate` date NOT NULL,
  `drdate` date NOT NULL,
  `ddesc` varchar(500) NOT NULL,
  `dcurrent_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`username`, `dname`, `dcategory`, `idate`, `dedate`, `drdate`, `ddesc`, `dcurrent_date`) VALUES
('ankush lakhani', 'Presentation 1', 'Office Documents', '2020-10-19', '2020-10-31', '2020-10-29', 'Presentation 1 will present to group 1', '2020-10-20'),
('ankush lakhani', 'License', 'Personal', '2020-09-16', '2040-08-07', '2038-10-01', 'Renew License in two years', '2020-10-20'),
('ankush lakhani', 'Domail .net ', 'Custom Documents', '2020-10-13', '2020-11-13', '2020-11-10', 'Hosted on host gator', '2020-10-20'),
('bhadresh', 'Presentation 1', 'Office Documents', '2020-10-06', '2020-10-29', '2020-10-20', 'Empty', '2020-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `username` varchar(30) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pcategory` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `pdate` date NOT NULL,
  `pedate` date NOT NULL,
  `prdate` date NOT NULL,
  `pdesc` varchar(500) NOT NULL,
  `Current_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`username`, `pname`, `pcategory`, `Quantity`, `price`, `pdate`, `pedate`, `prdate`, `pdesc`, `Current_Date`) VALUES
('', 'ggfgf', 'fggfgf', 'gfgf', 'gfgfgf', '2020-10-09', '2020-10-21', '2020-10-29', 'gfgfffg', '2020-10-10'),
('pablo', 'toothpaste', 'daily use', '5', '42/-', '2020-10-13', '2020-10-31', '2020-10-30', 'this is stored at cupboard 2', '2020-10-13'),
('ankush lakhani', 'D-FRESH GEL TUBE', 'medical', '20', '98', '2020-10-07', '2020-10-16', '2020-10-14', 'i baught this for sell and stored at column 26/2', '2020-10-14'),
('ankush lakhani', 'Lays chips', 'Foods', '5', '10', '2020-10-13', '2020-10-31', '2020-10-29', 'Stored in fridge', '2020-10-20'),
('ankush lakhani', 'Garnier face wash', 'Groceries', '1', '120', '2020-10-19', '2020-12-30', '2020-12-23', '', '2020-10-20'),
('ankush lakhani', 'Breads', 'Custom Product', '2', '45', '2020-10-20', '2020-10-31', '2020-10-28', 'Stored in double door fridge', '2020-10-20'),
('bhadresh', 'D-fresh Gel', 'Medicines', '4', '89 each', '2020-10-01', '2020-10-31', '2020-10-20', 'Stored in block 3', '2020-10-20'),
('bhadresh', 'Wheat', 'Groceries', '40 kg', '1400 rupees', '2020-10-20', '2020-12-26', '2020-11-13', 'Empty', '2020-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`) VALUES
(5, 'dipenladva@gmail.com', 'dipen1', 'dipen1', '2020-10-07 17:53:29'),
(6, 'pablo@gmail.com', 'pablo', 'escobar', '2020-10-13 09:56:19'),
(8, 'ankushlakhani3@gmail.com', 'ankush lakhani', 'ankush', '2020-10-14 12:29:51'),
(9, '', '', '', '2020-10-17 11:39:28'),
(11, 'bhadreshm3418@gmail.com', 'bhadresh', 'bhadresh', '2020-10-20 13:38:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
