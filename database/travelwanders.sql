-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 05:44 PM
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
-- Database: `travelwanders`
--

-- --------------------------------------------------------

--
-- Table structure for table `carehire`
--

CREATE TABLE `carehire` (
  `username` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `carname` varchar(50) NOT NULL,
  `cmodel` int(30) NOT NULL,
  `costperday` int(30) NOT NULL,
  `numofdays` int(20) NOT NULL,
  `totalcost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carehire`
--

INSERT INTO `carehire` (`username`, `category`, `carname`, `cmodel`, `costperday`, `numofdays`, `totalcost`) VALUES
('Uzair Rafiq', 'Sedan', 'Honda City', 2023, 8000, 2, 16000),
('Uzair Rafiq', 'SUV', 'Toyota Fortuner', 2020, 16000, 2, 32000),
('Khurram Ali', 'SUV', 'Toyota Fortuner', 2020, 16000, 5, 80000),
('Rahat Bashir', 'Hatchback', 'Kia Picanto', 2024, 5000, 8, 40000),
('Uzair Rafiq', 'SUV', 'Toyota Fortuner', 2020, 16000, 2, 32000);

-- --------------------------------------------------------

--
-- Table structure for table `domestictours`
--

CREATE TABLE `domestictours` (
  `username` varchar(50) NOT NULL,
  `tourtype` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `days` int(50) NOT NULL,
  `cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `domestictours`
--

INSERT INTO `domestictours` (`username`, `tourtype`, `location`, `days`, `cost`) VALUES
('Uzair Rafiq   ', 'Family Tour', 'Dawarian Kashmir', 9, 80000),
('Uzair Rafiq   ', 'Individual Tour', 'Gilgit', 7, 320000),
('Khurram Ali   ', 'Individual Tour', 'Gilgit', 7, 320000),
('Rahat Bashir   ', 'Individual Tour', 'Gilgit', 7, 320000);

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `username` varchar(50) NOT NULL,
  `hname` text NOT NULL,
  `htype` text NOT NULL,
  `hcity` text NOT NULL,
  `costperday` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelbooking`
--

INSERT INTO `hotelbooking` (`username`, `hname`, `htype`, `hcity`, `costperday`, `checkin`, `checkout`) VALUES
('Uzair Rafiq', 'Ramada Hotel', 'Luxury', 'Multan', '20000', '2024-05-28', '2024-05-30'),
('Uzair Rafiq', 'Sawat Continental', 'Economy', 'Sawat', '10000', '2024-06-06', '2024-06-08'),
('Uzair Rafiq', 'Serena Hotel', 'Luxury', 'Islamabad', '30000', '2024-05-28', '2024-05-31'),
('Khurram Ali', 'Serena Hotel', 'Luxury', 'Islamabad', '30000', '2024-05-28', '2024-05-29'),
('Rahat Bashir', 'Sawat Continental', 'Economy', 'Sawat', '10000', '2024-05-31', '2024-06-01'),
('Uzair Rafiq', 'Ramada Hotel', 'Luxury', 'Multan', '20000', '2024-05-23', '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `internationaltours`
--

CREATE TABLE `internationaltours` (
  `username` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `days` int(50) NOT NULL,
  `cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internationaltours`
--

INSERT INTO `internationaltours` (`username`, `country`, `days`, `cost`) VALUES
('Uzair Rafiq', 'UK', 5, 640000),
('Uzair Rafiq', 'Switzerland', 3, 920000),
('Uzair Rafiq', 'USA', 10, 2000000),
('Uzair Rafiq', 'Saudi Arabia', 15, 400000),
('Khurram Ali', 'Saudi Arabia', 15, 400000),
('Rahat Bashir', 'Germany', 10, 900000),
('Uzair Rafiq', 'Germany', 10, 900000),
('Uzair Rafiq', 'Germany', 10, 900000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `dob`, `gender`, `city`) VALUES
(4, 'Umair12', '123', '2004-09-15', 'Male', 'sahiwal'),
(7, 'Uzair Rafiq5', '1234d', '2024-05-30', 'NA', 'NA'),
(9, 'muzair', '1234', '2024-05-29', 'Male', 'islamabad'),
(10, 'Uzair Rafiq', '123', '2024-04-30', 'Male', 'sahiwal'),
(11, 'Khurram Ali', 'khurramali', '2024-05-30', 'Male', 'sahiwal'),
(12, 'Rahat Bashir', '12345', '2024-05-16', 'Male', 'sahiwal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
