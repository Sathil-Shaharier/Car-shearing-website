-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 07:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_share_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL,
  `Full_Name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Full_Name`, `username`, `password`, `email`) VALUES
(1, 'Tasbiul Hasan', 'tasbiul', '12345', 'tasbiul.hasan@northsouth.edu'),
(2, 'Pranab Roy', 'pranab', '12345', 'pranabroy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver_car_info`
--

CREATE TABLE `driver_car_info` (
  `id` int(50) NOT NULL,
  `car_name` varchar(150) NOT NULL,
  `color` varchar(20) NOT NULL,
  `model` int(50) NOT NULL,
  `car_number_plate` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_car_info`
--

INSERT INTO `driver_car_info` (`id`, `car_name`, `color`, `model`, `car_number_plate`, `description`) VALUES
(1, 'Corolla', 'White', 2014, 'K-014586', 'It is good condition car'),
(2, 'Primio', 'Black', 2010, 'Kha-014789', 'This is in well condition'),
(3, 'Primio', 'Black', 2010, 'Kha-014789', 'This is in well condition'),
(4, 'Primio', 'Black', 2014, 'Kha-014588', 'This is good'),
(5, 'Primio', 'black', 2014, 'kha-014556', 'this is good'),
(6, 'Primio', 'blue', 2016, 'B-0125545', 'This is good');

-- --------------------------------------------------------

--
-- Table structure for table `driver_signup_info`
--

CREATE TABLE `driver_signup_info` (
  `id` int(50) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile_Number` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_signup_info`
--

INSERT INTO `driver_signup_info` (`id`, `FirstName`, `LastName`, `Email`, `Mobile_Number`, `password`) VALUES
(1, 'Tasbiul ', 'Hasan', 'dfgdwastb@gmail.com', '01748541038', '12345'),
(2, 'Tasbiul ', 'olive', 'anikahmed01@gmail.com', '01748541038', '12345'),
(3, 'Tasbiul ', 'olive', 'anikahmed01@gmail.com', '01748541038', '12345'),
(4, 'Anik', 'Majumdar', 'anikmajumdar01@gmail.com', '017485125', '12345'),
(5, 'Miraj', 'Hasan', 'miraj@gmail.com', '01485412333', 'miraj');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_request`
--

CREATE TABLE `reservation_request` (
  `id` int(50) NOT NULL,
  `origin` varchar(150) NOT NULL,
  `destination` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `number` int(150) NOT NULL,
  `price` int(150) NOT NULL,
  `cancel` int(50) NOT NULL,
  `cancel_reason` varchar(500) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `accept` int(50) NOT NULL,
  `reservation_accept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_request`
--

INSERT INTO `reservation_request` (`id`, `origin`, `destination`, `username`, `number`, `price`, `cancel`, `cancel_reason`, `total_seat`, `accept`, `reservation_accept`) VALUES
(0, 'Uttara', 'NSU', 'Olive', 12544, 120, 0, '', 2, 1, ''),
(1, 'Dhanmondi', 'Uttara', 'Olive', 1748541038, 0, 0, '', 2, 1, 'Yes'),
(2, 'NSU', 'Uttara', 'sathil', 215, 0, 1, 'Price problem', 3, 0, ''),
(4, 'Dhanmondi', 'NSU', 'pranab', 1748541038, 300, 0, '', 3, 1, ''),
(5, 'Uttara', 'Dhanmondi', 'Pranab', 148541038, 120, 0, '', 1, 1, ''),
(6, 'Uttara', 'Dhanmondi', 'Pranab', 148541038, 120, 0, '', 1, 1, ''),
(7, 'Dhanmondi', 'NSU', 'Anik', 147854566, 200, 1, 'I don&#039;t wanna go', 2, 0, ''),
(8, 'Uttara', 'NSU', 'ANik', 1254886, 60, 0, '', 1, 1, ''),
(12, 'Dhanmondi', 'NSU', 'Mohammad Asaduzzaman', 147854566, 200, 0, '', 2, 0, ''),
(23, 'Dhanmondi', 'NSU', 'Bsc in CSE', 525525252, 200, 0, '', 2, 0, ''),
(24, 'Uttara', 'NSU', 'Olive', 1245668, 180, 1, 'I change my mind', 3, 0, ''),
(26, 'NSU', 'Uttara', 'Olive', 1245, 120, 0, '', 2, 0, ''),
(27, 'Dhanmondi', 'Uttara', 'Olive', 1245, 240, 0, '', 2, 0, ''),
(28, 'Dhanmondi', 'Uttara', 'Olive', 124556, 240, 0, '', 2, 1, ''),
(29, 'Dhanmondi', 'Uttara', 'Olive', 12455656, 240, 0, '', 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup_info`
--

CREATE TABLE `user_signup_info` (
  `id` int(50) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile_Number` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_signup_info`
--

INSERT INTO `user_signup_info` (`id`, `FirstName`, `LastName`, `Email`, `Mobile_Number`, `password`) VALUES
(2, 'Anik', 'Majumdar', 'anikmajumdar01@gmail.com', '0174854155', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_car_info`
--
ALTER TABLE `driver_car_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_signup_info`
--
ALTER TABLE `driver_signup_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_request`
--
ALTER TABLE `reservation_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup_info`
--
ALTER TABLE `user_signup_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `driver_car_info`
--
ALTER TABLE `driver_car_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `driver_signup_info`
--
ALTER TABLE `driver_signup_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_signup_info`
--
ALTER TABLE `user_signup_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
