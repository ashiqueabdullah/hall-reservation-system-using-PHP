-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 07:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `depertment`
--

CREATE TABLE `depertment` (
  `depert_Id` int(11) NOT NULL,
  `depert_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`depert_Id`, `depert_name`) VALUES
(1, 'asd'),
(2, 'asd'),
(3, 'fgh'),
(4, 'gtyh');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `Dept_ID` int(15) NOT NULL,
  `Dept_Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`Dept_ID`, `Dept_Name`) VALUES
(0, 'jjjj');

-- --------------------------------------------------------

--
-- Table structure for table `office_notice`
--

CREATE TABLE `office_notice` (
  `Notice_ID` int(11) NOT NULL,
  `Prov_ID` int(11) DEFAULT NULL,
  `Notice_Date` date DEFAULT NULL,
  `Notice` text DEFAULT NULL
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
  `Mobile` varchar(20) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provost`
--

INSERT INTO `provost` (`Prov_ID`, `Prov_Name`, `Designation`, `Academic_Designation`, `Department`, `Email`, `Mobile`, `dept`) VALUES
(3, 'ashique13', 'asd', NULL, 0, 'mdashiqueabdullah@gmail.com', '01745610312', NULL),
(4, 'ashique13', NULL, 'hhh', 0, 'mdashiqueabdullah@gmail.com', '01745610312', 0),
(5, 'ashique13', NULL, 'hhh', 0, 'mdashiqueabdullah@gmail.com', '01745610312', 0),
(6, 'ashique13', NULL, 'fgfg', 0, 'mdashiqueabdullah@gmail.com', '01745610312', 1),
(7, 'ashique13', NULL, 'hhh', 0, 'mdashiqueabdullah@gmail.com', '01745610312', 4);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_number`) VALUES
(1, 11),
(2, 12),
(3, 122),
(4, 122),
(5, 321),
(6, 11345);

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
  `Complain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD PRIMARY KEY (`depert_Id`);

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
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

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
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `depert_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `office_notice`
--
ALTER TABLE `office_notice`
  MODIFY `Notice_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provost`
--
ALTER TABLE `provost`
  MODIFY `Prov_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
