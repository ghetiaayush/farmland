-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 06:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmland`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `orderid` int(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Jalpa', 'abc@gmail.com', '0987654321', 'hii how are you'),
(5, 'Brian Baldwin', 'vebyweviq@mailinator.net', '+1 (204) 629-9146', 'Qui provident eveni');

-- --------------------------------------------------------

--
-- Table structure for table `order_water`
--

CREATE TABLE `order_water` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `quantity` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_water`
--

INSERT INTO `order_water` (`id`, `userid`, `location`, `address`, `date`, `time`, `quantity`, `status`) VALUES
(14, 4, 'Surat', 'Main road, surat, gujarat						', '2019-10-15', '11:00:00', '50 Ltr', 'pending'),
(15, 5, 'Surat', 'Main road, surat, gujarat						', '2019-10-15', '11:00:00', '50 Ltr', 'pending'),
(16, 5, 'Surat', 'Main road, surat, gujarat						', '2019-10-15', '11:00:00', '50 Ltr', 'pending'),
(17, 5, 'Surat', 'Main road, surat, gujarat						', '2019-10-15', '11:00:00', '50 Ltr', 'pending'),
(20, 6, 'Surat', 'Main road, surat, gujarat						', '2019-10-15', '11:00:00', '50 Ltr', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `gender`, `email`, `password`, `mobile`, `photo`, `address`) VALUES
(4, 'Jalpa Mehta', 'Female', 'jalpa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '90876432', 'uploads/1.jpg', 'Naroda,ahmedabad, gujarat, india.'),
(5, 'Ami Jackson', 'Female', 'ami@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0987654321', 'uploads/1.jpg', 'Baroda, Gujarat.'),
(6, 'Avni Shah', 'Female', 'avni@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0987654321', 'uploads/1.jpg', 'Nadiad, gujarat, india.'),
(7, 'Harsiddhi Thakkar', 'Female', 'harsiddhi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '987654321', 'uploads/10.png', 'Sabarmati, Ahmedabad, Gujarat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_water`
--
ALTER TABLE `order_water`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_water`
--
ALTER TABLE `order_water`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `order_water` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
