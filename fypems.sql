-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 10:56 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `AdminEmail` varchar(50) NOT NULL,
  `AdminPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `AdminEmail`, `AdminPassword`) VALUES
(1, 'Admin1', 'Admin1@gmail.com', '14e1b600b1fd579f47433b88e8d85291'),
(2, 'Admin2', 'Admin2@gmail.com', 'Admin2');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `EduID` int(11) NOT NULL,
  `EduLevel` text NOT NULL,
  `EduGrade` text NOT NULL,
  `EduSchool` varchar(150) NOT NULL,
  `GradYear` int(5) NOT NULL,
  `EmpEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(11) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `EmpGender` text NOT NULL,
  `EmpDOB` text NOT NULL,
  `EmpNumerology` int(15) NOT NULL,
  `EmpHp` text NOT NULL,
  `EmpEmail` varchar(50) NOT NULL,
  `EmpAddress` varchar(150) NOT NULL,
  `EmpNRIC` text NOT NULL,
  `StartWorkDate` date NOT NULL,
  `EmpPassword` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `EmpName`, `EmpGender`, `EmpDOB`, `EmpNumerology`, `EmpHp`, `EmpEmail`, `EmpAddress`, `EmpNRIC`, `StartWorkDate`, `EmpPassword`) VALUES
(1, 'Jessly Jing', 'Female', '02.02.1898', 4, '016-12395832', 'jessly@gmail.com', 'No 14-2-16, Taman Pertama, Jalan Segar 2/4, 53100, Cheras, Kuala Lumpur, Malaysia', '180202-34-1295', '2018-12-05', 'Jessly'),
(3, 'Keoy In Tzu', 'Female', '04.09.2000', 2, '017-39583728', 'k.intzu@gmail.com', 'N014-0-3, Jalan 3/4, Pandan Lake Club, Cheras, 55100, Kuala Lumpur', '000409-14-0122', '2022-01-01', 'k.intzu');

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
(7, 'Annual Leave', '2022-04-04', '0000-00-00', 'Pending', ''),
(8, 'Holiday', '2022-04-04', '0000-00-00', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjID` int(11) NOT NULL,
  `ProjName` varchar(50) NOT NULL,
  `ProjStartDate` date NOT NULL,
  `ProjEndDate` date NOT NULL,
  `Comment` varchar(150) NOT NULL,
  `Status` text NOT NULL,
  `EmpEmail` varchar(50) NOT NULL,
  `AdminEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjID`, `ProjName`, `ProjStartDate`, `ProjEndDate`, `Comment`, `Status`, `EmpEmail`, `AdminEmail`) VALUES
(1, 'Video Editing', '2022-02-02', '2022-03-03', 'Helicopter video footage', 'Ongoing', 'jessly@gmailcom', 'Admin2@gmail.com'),
(2, 'testing 4', '2022-03-03', '2022-03-30', 'testing comment', 'ongoing', 'jessly@gmail.com', ''),
(3, 'testing5', '2022-03-03', '2022-03-30', 'testing comment', 'ongoing', 'k.intzu@gmail.com', ''),
(4, '', '0000-00-00', '0000-00-00', '', 'ongoing', '', ''),
(5, 'testing5', '2022-03-03', '2022-03-30', 'testing comment', 'ongoing', 'jessly@gmail.com', ''),
(6, 'videoediting', '2022-03-03', '2022-03-30', 'commne', 'ongoing', 'k.intzu@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `SkillID` int(11) NOT NULL,
  `SkillSN` int(15) NOT NULL,
  `SkillName` varchar(50) NOT NULL,
  `EmpEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workexp`
--

CREATE TABLE `workexp` (
  `WorkExpID` int(11) NOT NULL,
  `WorkTitle` varchar(50) NOT NULL,
  `WorkCompany` varchar(50) NOT NULL,
  `WorkCity` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Duration` int(50) NOT NULL,
  `EmpEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`EduID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`LeaveID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`SkillID`);

--
-- Indexes for table `workexp`
--
ALTER TABLE `workexp`
  ADD PRIMARY KEY (`WorkExpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `EduID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `LeaveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `SkillID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workexp`
--
ALTER TABLE `workexp`
  MODIFY `WorkExpID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
