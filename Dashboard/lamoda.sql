-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 09:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamoda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bor`
--

CREATE TABLE `bor` (
  `Bor_ID` int(50) NOT NULL,
  `O_Capacity` int(25) NOT NULL,
  `O_Occupied` int(25) NOT NULL,
  `O_Available` int(25) NOT NULL,
  `O_Rate` int(25) NOT NULL,
  `L_Capacity` int(25) NOT NULL,
  `L_Occupied` int(25) NOT NULL,
  `L_Available` int(25) NOT NULL,
  `L_Rate` int(25) NOT NULL,
  `Bor_Date` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Bor_Time` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bor`
--

INSERT INTO `bor` (`Bor_ID`, `O_Capacity`, `O_Occupied`, `O_Available`, `O_Rate`, `L_Capacity`, `L_Occupied`, `L_Available`, `L_Rate`, `Bor_Date`, `Bor_Time`) VALUES
(7, 115, 65, 50, 57, 123, 65, 58, 53, '26/02/2022', '11:15 pm'),
(8, 1, 2, 3, 4, 5, 6, 7, 8, '28/02/2022', '12:35 pm'),
(9, 11, 12, 13, 14, 15, 16, 17, 18, '28/02/2022', '12:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(100) NOT NULL,
  `Dept_Floor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `Dept_Name`, `Dept_Floor`) VALUES
(19, 'ADMINISTRATOR', '6'),
(20, 'INFORMATION TECHNOLOGY', '6'),
(21, 'FINANCE', '6');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(11) NOT NULL,
  `Doctor_Name` varchar(80) NOT NULL,
  `Doctor_Specialist` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `Doctor_Name`, `Doctor_Specialist`) VALUES
(1, 'Dr Zurina Zainal Abidin', 'Ophthalmology'),
(2, 'Dr Ahmad Fauzi', 'Ophthalmology');

-- --------------------------------------------------------

--
-- Table structure for table `otstat`
--

CREATE TABLE `otstat` (
  `Otstat_ID` int(11) NOT NULL,
  `Otstat_Room` varchar(25) NOT NULL,
  `Otstat_Date` varchar(25) NOT NULL,
  `Otstat_Time` varchar(25) NOT NULL,
  `Otstat_status` varchar(54) NOT NULL,
  `FK_Otstat_Doctor_ID` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otstat`
--

INSERT INTO `otstat` (`Otstat_ID`, `Otstat_Room`, `Otstat_Date`, `Otstat_Time`, `Otstat_status`, `FK_Otstat_Doctor_ID`) VALUES
(2, 'OT2', '28/02/2022', '12:31 pm', 'completed', 1),
(3, 'OT3', '28/02/2022', '12:49 pm', 'completed', 2),
(4, 'OT1', '28/02/2022', '12:49 pm', 'completed', 1),
(5, 'OT1', '28/02/2022', '03:37 pm', 'recovery', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `Phone_ID` int(11) NOT NULL,
  `Phone_Name` varchar(50) NOT NULL,
  `Phone_Designation` varchar(40) NOT NULL,
  `Phone_Ext` varchar(40) NOT NULL,
  `Phone_Dial` varchar(40) NOT NULL,
  `FK_Department` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`Phone_ID`, `Phone_Name`, `Phone_Designation`, `Phone_Ext`, `Phone_Dial`, `FK_Department`) VALUES
(1, 'Ameirul Mustaqim', 'IT Officer', '7954', '1064', 20),
(2, 'En Aidil Ikram', 'CEO', '7889', '2000', 19),
(3, 'Tengku Syakir', 'Finance Executive', '7950', 'N/A', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bor`
--
ALTER TABLE `bor`
  ADD PRIMARY KEY (`Bor_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `otstat`
--
ALTER TABLE `otstat`
  ADD PRIMARY KEY (`Otstat_ID`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`Phone_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bor`
--
ALTER TABLE `bor`
  MODIFY `Bor_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otstat`
--
ALTER TABLE `otstat`
  MODIFY `Otstat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `Phone_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
