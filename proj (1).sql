-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 12:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `cellNum` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `fName`, `lName`, `cellNum`, `email`) VALUES
('Admin1', 'joshua', 'madurai', '0768460896', 'josh.madurai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `username` varchar(255) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `idNum` varchar(13) NOT NULL,
  `cellNum` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `licType` enum('Code 10','Code 8','','') NOT NULL,
  `vRegNum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`username`, `fName`, `lName`, `idNum`, `cellNum`, `email`, `address`, `licType`, `vRegNum`) VALUES
('Driver', 'Sumeshan', 'Munsamy', '9501228476535', '0742563748', 'sumeshanMunsamy@gmail.com', '66 somerset drive', 'Code 10', 'ND 451-768'),
('Driver1', 'yusuf', 'kara', '8709171623784', '846374581', 'yusufk@gmail.com', '10 slumo road', 'Code 8', 'ND 768-876'),
('Driver3', 'Darian', 'Kugesan', '9906226347281', '0827465738', 'dariank@gmail.com', '92 chatsworth drive', 'Code 8', 'ND 333-555'),
('Driver4', 'Zane', 'Omar', '9805127345628', '0745378451', 'zomar@gmail.com', '17 Bluff road', 'Code 10', 'ND 904-746');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` enum('Admin','Driver','Passenger') NOT NULL DEFAULT 'Passenger'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `usertype`) VALUES
('Admin1', 'jfm', 'Admin'),
('Driver', 'sumeshan', 'Driver'),
('Driver1', 'drive', 'Driver'),
('Driver3', 'darian', 'Driver'),
('Driver4', 'zane', 'Driver'),
('lorry', 'lorry', 'Passenger');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vRegNum` varchar(10) NOT NULL,
  `vehicleType` enum('hatch','sedan','minibus','Other') NOT NULL DEFAULT 'Other',
  `seatsAvail` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vmaintenance`
--

CREATE TABLE `vmaintenance` (
  `maintenanceId` varchar(25) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vRegNum` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `maindescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vRegNum`);

--
-- Indexes for table `vmaintenance`
--
ALTER TABLE `vmaintenance`
  ADD PRIMARY KEY (`maintenanceId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
