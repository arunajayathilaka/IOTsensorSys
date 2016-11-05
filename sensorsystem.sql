-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 07:23 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensorsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `Loc_ID` int(11) NOT NULL,
  `Val_Temp` float NOT NULL,
  `Val_Humidity` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Loc_ID` int(11) NOT NULL,
  `Loc_Latidute` float NOT NULL,
  `Loc_longitude` float NOT NULL,
  `Loc_Temp_ID` int(11) NOT NULL,
  `Loc_Mgr_ID` int(11) NOT NULL,
  `Loc_Alarm_status` tinyint(1) NOT NULL,
  `Loc_Humidity_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `Sensor_ID` int(11) NOT NULL,
  `Loc_ID` int(11) NOT NULL,
  `Sensor_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USR_ID` int(11) NOT NULL,
  `USR_Name` varchar(30) NOT NULL,
  `USR_LName` varchar(30) NOT NULL,
  `USR_Email` varchar(30) NOT NULL,
  `USR_PWD` varchar(30) NOT NULL,
  `USR_Type` varchar(30) NOT NULL,
  `USR_Contact` varchar(30) NOT NULL,
  `USR_Key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USR_ID`, `USR_Name`, `USR_LName`, `USR_Email`, `USR_PWD`, `USR_Type`, `USR_Contact`, `USR_Key`) VALUES
(1, 'aruna', 'jaya', 'arunadilshanjayathilake@yahoo.', 'cc03e747a6afbbcbf8be7668acfebe', '0713132431', 'user', 'f2e2d3189e1fd7d7234567f111b4b0dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Data_fk0` (`Loc_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Loc_ID`),
  ADD KEY `Location_fk0` (`Loc_Temp_ID`),
  ADD KEY `Location_fk1` (`Loc_Mgr_ID`),
  ADD KEY `Location_fk2` (`Loc_Humidity_ID`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`Sensor_ID`),
  ADD KEY `Sensor_fk0` (`Loc_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Loc_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `Sensor_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `Data_fk0` FOREIGN KEY (`Loc_ID`) REFERENCES `location` (`Loc_ID`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `Location_fk0` FOREIGN KEY (`Loc_Temp_ID`) REFERENCES `sensor` (`Sensor_ID`),
  ADD CONSTRAINT `Location_fk1` FOREIGN KEY (`Loc_Mgr_ID`) REFERENCES `user` (`USR_ID`),
  ADD CONSTRAINT `Location_fk2` FOREIGN KEY (`Loc_Humidity_ID`) REFERENCES `sensor` (`Sensor_ID`);

--
-- Constraints for table `sensor`
--
ALTER TABLE `sensor`
  ADD CONSTRAINT `Sensor_fk0` FOREIGN KEY (`Loc_ID`) REFERENCES `location` (`Loc_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
