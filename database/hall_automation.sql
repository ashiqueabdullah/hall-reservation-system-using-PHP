-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 03:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `Dept_ID` int(15) NOT NULL,
  `Dept_Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office_notice`
--

CREATE TABLE `office_notice` (
  `Notice_ID` int(11) NOT NULL,
  `Prov_ID` int(11) DEFAULT NULL,
  `Notice_Date` date DEFAULT NULL,
  `Notice` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provost`
--

CREATE TABLE `provost` (
  `Prov_ID` int(11) NOT NULL,
  `Prov_Name` varchar(50) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Academic_Designation` varchar(50) DEFAULT NULL,
  `Department` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(15) NOT NULL,
  `Staff_Name` int(25) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `St_ID` int(11) NOT NULL,
  `St_Name` varchar(100) DEFAULT NULL,
  `St_Rag` varchar(50) DEFAULT NULL,
  `Dept_ID` int(11) DEFAULT NULL,
  `Room_No` varchar(10) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Home_District` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_complain`
--

CREATE TABLE `st_complain` (
  `Com_ID` int(11) NOT NULL,
  `St_ID` int(11) DEFAULT NULL,
  `Com_Date` date DEFAULT NULL,
  `Complain` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `office_notice`
--
ALTER TABLE `office_notice`
  ADD PRIMARY KEY (`Notice_ID`),
  ADD KEY `Prov_ID` (`Prov_ID`);

--
-- Indexes for table `provost`
--
ALTER TABLE `provost`
  ADD PRIMARY KEY (`Prov_ID`),
  ADD KEY `Department` (`Department`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`St_ID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `st_complain`
--
ALTER TABLE `st_complain`
  ADD PRIMARY KEY (`Com_ID`),
  ADD KEY `St_ID` (`St_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `office_notice`
--
ALTER TABLE `office_notice`
  MODIFY `Notice_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provost`
--
ALTER TABLE `provost`
  MODIFY `Prov_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `St_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_complain`
--
ALTER TABLE `st_complain`
  MODIFY `Com_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `office_notice`
--
ALTER TABLE `office_notice`
  ADD CONSTRAINT `office_notice_ibfk_1` FOREIGN KEY (`Prov_ID`) REFERENCES `provost` (`Prov_ID`);

--
-- Constraints for table `provost`
--
ALTER TABLE `provost`
  ADD CONSTRAINT `provost_ibfk_1` FOREIGN KEY (`Department`) REFERENCES `dept` (`Dept_ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `dept` (`Dept_ID`);

--
-- Constraints for table `st_complain`
--
ALTER TABLE `st_complain`
  ADD CONSTRAINT `st_complain_ibfk_1` FOREIGN KEY (`St_ID`) REFERENCES `student` (`St_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
