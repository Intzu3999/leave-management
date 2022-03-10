-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 10:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypems`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `LeaveID` int(11) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `LeaveStartDate` date NOT NULL,
  `LeaveEndDate` date NOT NULL,
  `LeaveStatus` text NOT NULL,
  `EmpEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`LeaveID`, `Reason`, `LeaveStartDate`, `LeaveEndDate`, `LeaveStatus`, `EmpEmail`) VALUES
(1, 'Sick leave', '2022-01-02', '2022-01-03', 'approved', 'Admin2@gmail.com'),
(2, 'Sick leave', '2022-02-22', '2022-02-23', 'approved', 'Admin2@gmail.com'),
(3, '', '2022-03-03', '0000-00-00', 'Pending', ''),
(4, 'Annual Leave', '2022-03-03', '0000-00-00', 'Pending', ''),
(5, '', '0000-00-00', '0000-00-00', 'Pending', ''),
(6, 'Annual leave', '2022-03-03', '0000-00-00', 'Pending', ''),
(7, 'Annual Leave', '2022-04-04', '0000-00-00', 'Pending', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`LeaveID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `LeaveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
