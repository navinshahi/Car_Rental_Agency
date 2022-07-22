-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 02:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car rental agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency_database`
--

CREATE TABLE `agency_database` (
  `c_id` int(255) NOT NULL,
  `C_Name` varchar(255) NOT NULL,
  `C_Email` varchar(255) NOT NULL,
  `C_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_database`
--

INSERT INTO `agency_database` (`c_id`, `C_Name`, `C_Email`, `C_Password`) VALUES
(1, 'Tata', 'Tata@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(2, 'Mahindra', 'mahindra@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `available_cars`
--

CREATE TABLE `available_cars` (
  `id` int(11) NOT NULL,
  `C_Email` varchar(255) NOT NULL,
  `V_Model` varchar(255) NOT NULL,
  `V_Number` varchar(255) NOT NULL,
  `Capacity` varchar(255) NOT NULL,
  `PerDay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_cars`
--

INSERT INTO `available_cars` (`id`, `C_Email`, `V_Model`, `V_Number`, `Capacity`, `PerDay`) VALUES
(5, 'mahindra@gmail.com', 'Mahindra Thar', 'UP-23547', '4', '700'),
(6, 'mahindra@gmail.com', 'Mahindra Scorpio', 'UP-38979', '5', '1000'),
(7, 'Tata@gmail.com', 'TATA Harrier', 'UP-12344', '6', '900'),
(8, 'Tata@gmail.com', 'TATA Punch', 'UP-27373', '2', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `booked_cars`
--

CREATE TABLE `booked_cars` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `C_Email` varchar(255) NOT NULL,
  `V_Model` varchar(255) NOT NULL,
  `V_Number` varchar(255) NOT NULL,
  `dayCount` int(255) NOT NULL,
  `startdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_cars`
--

INSERT INTO `booked_cars` (`id`, `Name`, `Email`, `C_Email`, `V_Model`, `V_Number`, `dayCount`, `startdate`) VALUES
(5, 'NAVIN KUMAR SHAHI', 'navinkumarshahi0@gmail.com', 'Tata@gmail.com', 'TATA Nexon', 'UP-35780', 5, '2022-07-13'),
(6, 'NAVIN KUMAR SHAHI', 'navinkumarshahi0@gmail.com', 'Tata@gmail.com', 'TATA Punch', 'UP-55455', 10, '2022-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE `user_database` (
  `user_id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`user_id`, `Name`, `Email`, `Password`) VALUES
(1, 'NAVIN KUMAR SHAHI', 'navinkumarshahi0@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency_database`
--
ALTER TABLE `agency_database`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `available_cars`
--
ALTER TABLE `available_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_cars`
--
ALTER TABLE `booked_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency_database`
--
ALTER TABLE `agency_database`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `available_cars`
--
ALTER TABLE `available_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booked_cars`
--
ALTER TABLE `booked_cars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_database`
--
ALTER TABLE `user_database`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
