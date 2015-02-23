-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2015 at 04:03 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `technician24services`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
`area_id` int(11) NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'Badda', 1),
(2, 'Cantonment', 1),
(3, 'Demra', 1),
(4, 'Dhamrai', 1),
(5, 'Dhanmondi', 1),
(6, 'Dohar', 1),
(7, 'Gulshan', 1),
(8, 'Hazaribagh', 1),
(9, 'Kafrul', 1),
(10, 'Kamrangir Char', 1),
(11, 'Keraniganj', 1),
(12, 'Khilgaon', 1),
(13, 'Dhaka Kotwali', 1),
(14, 'Lalbagh', 1),
(15, 'Mirpur', 1),
(16, 'Mohammadpur', 1),
(17, 'Motijheel', 1),
(18, 'Nawabganj', 1),
(19, 'Pallabi', 1),
(20, 'Ramna', 1),
(21, 'Sabujbagh', 1),
(22, 'Savar', 1),
(23, 'Shyampur', 1),
(24, 'Sutrapur', 1),
(25, 'Tejgaon', 1),
(26, 'Uttara', 1),
(27, 'Adabor', 1),
(28, 'Chowkbazar', 1),
(29, 'Gendaria', 1),
(30, 'Kadamtali', 1),
(31, 'Lalbagh', 1),
(32, 'Uttar Khan', 1),
(33, 'Wari', 1),
(34, 'New Market', 1),
(35, 'Paltan', 1),
(36, 'Pantapath', 1),
(37, 'Khilkhet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `division_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `division_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Mymenshing', 1),
(3, 'Faridpur', 1),
(4, 'Munshiganj', 1),
(5, 'Narsingdi', 1),
(6, 'Narayanganj', 1),
(7, 'Manikganj', 1),
(8, 'Gazipur', 1),
(9, 'Kishoreganj', 1),
(10, 'Jamalpur', 1),
(11, 'Sherpur', 1),
(12, 'Netrakona', 1),
(13, 'Tangail', 1),
(14, 'Gopalganj', 1),
(15, 'Shariotpur', 1),
(16, 'Madaripur', 1),
(17, 'Rajbari ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
`division_id` int(11) NOT NULL,
  `division_name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`division_id`, `division_name`) VALUES
(1, 'Dhaka'),
(2, 'Khulna'),
(3, 'Rajshahi'),
(4, 'Barisal'),
(5, 'Chittagong'),
(6, 'Rangpur'),
(7, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`service_id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service`) VALUES
(1, 'Electric'),
(2, 'Sanitary'),
(3, 'AC'),
(4, 'TV'),
(5, 'Refrigerator'),
(6, 'Gas'),
(7, 'Motor'),
(8, 'Mason'),
(9, 'House Painter'),
(10, 'PDB/REB'),
(11, 'Broadband Internet'),
(12, 'Cable Tv Operator'),
(13, 'Medical Services');

-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

CREATE TABLE IF NOT EXISTS `technicians` (
`technician_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `category` varchar(50) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `technicians`
--

INSERT INTO `technicians` (`technician_id`, `username`, `password`, `fullname`, `category`, `contactno`, `gender`, `profile_pic`, `address`, `area_id`, `city_id`, `division_id`, `joining_date`) VALUES
(3, 'user1', 'user1', 'User One', 'Electrician', '123456789', 'male', '', 'Khilkhet', 37, 1, 1, '2015-02-21'),
(5, 'user2', 'user2', '', '', '', '', '', '', 1, 1, 1, '0000-00-00'),
(6, 'root', '63a9f0ea7bb98050796b649e85481845', 'aa', 'ACBroadband InternetTV', '11111111111', 'male', 'root_', '', 37, 1, 1, '2015-02-23'),
(7, 'localhost', '5bd8b19b45d96078d5f092967e27594d', 'aa', 'Cable Tv OperatorElectricGasHouse PainterMason', '11111111111', 'male', 'localhost_', 'fgfgfg', 12, 1, 1, '2015-02-23'),
(8, 'root1', '63a9f0ea7bb98050796b649e85481845', 'aa', 'MasonMedical ServicesMotorPDB/REB', '11111111111', 'male', '', 'fgfgfg', 28, 1, 1, '2015-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
 ADD PRIMARY KEY (`area_id`), ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`city_id`), ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
 ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `technicians`
--
ALTER TABLE `technicians`
 ADD PRIMARY KEY (`technician_id`), ADD KEY `area_id` (`area_id`), ADD KEY `city_id` (`city_id`), ADD KEY `division_id` (`division_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `technicians`
--
ALTER TABLE `technicians`
MODIFY `technician_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`division_id`);

--
-- Constraints for table `technicians`
--
ALTER TABLE `technicians`
ADD CONSTRAINT `technicians_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `areas` (`area_id`),
ADD CONSTRAINT `technicians_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`),
ADD CONSTRAINT `technicians_ibfk_3` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`division_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
