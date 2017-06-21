-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2015 at 03:01 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `name` varchar(20) NOT NULL,
  `license_no` varchar(15) NOT NULL,
  `license_date` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `profession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`name`, `license_no`, `license_date`, `address`, `age`, `gender`, `Contact_No`, `profession`) VALUES
('Rajesh Kumar', '1089258', '21/05/2015', 'Agra', '22', 'male', '7879741110', 'Student'),
('Rajesh Kumar', '12345678', '21/05/2015', 'Agra', '22', 'male', '7879741110', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`) VALUES
('Pawan', '71144850f4fb4cc55fc0ee6935badddf');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `License_no` varchar(20) NOT NULL,
  `Company_name` varchar(30) NOT NULL,
  `Model_No` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Registration_No` varchar(30) NOT NULL,
  `Engine_No` varchar(30) NOT NULL,
  `Chassis_No` varchar(30) NOT NULL,
  `Fuel_Type` varchar(30) NOT NULL,
  `Mfg_Date` varchar(30) NOT NULL,
  `Seating_capacity` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`License_no`, `Company_name`, `Model_No`, `Type`, `Registration_No`, `Engine_No`, `Chassis_No`, `Fuel_Type`, `Mfg_Date`, `Seating_capacity`, `Image`) VALUES
('12345678', 'Renault', 'Duster', '4 Wheeler', 'A23456', '123456', '123456', 'Petrol', '2011', '8', '1432975486special_offer_3.jpg'),
('1087546', 'BMW', '320d', '4 Wheeler', 'AA5197', 'QWE114562', '129854216', 'Petrol', '2011', '4', ''),
('1089258', 'Maruti', 'Wagon R', '4 Wheeler', 'AA7825', 'HSD789111', '152469872', 'Diesel', '2002', '4', ''),
('1089258', 'Ford', 'Fiesta', '4 Wheeler', 'AB8055', 'JHK256214', '157852163', 'Diesel', '2006', '5', ''),
('1089384', 'Audi', 'A6', '4 Wheeler', 'AC4455', 'POI256482', '145987521', 'Petrol', '2010', '2', ''),
('1089384', 'Bajaj', 'Discover', '2 Wheeler', 'AC6945', 'JAL488552', '584368157', 'Petrol', '2007', '2', ''),
('1082145', 'TATA', 'Indica', '4 Wheeler', 'AD2588', 'DFA254189', '496214539', 'Diesel', '2009', '5', ''),
('7654321', 'Renault', 'Pawan', '18 Wheeler', 'Pawan123', '159', 'Rawat987', 'Water', '2057', '800', '1432975869service_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
 ADD PRIMARY KEY (`license_no`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
 ADD PRIMARY KEY (`Registration_No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
