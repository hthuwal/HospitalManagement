-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 09:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `aid` int(11) NOT NULL,
  `userid` varchar(500) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` enum('male','female','transgender') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `address` text,
  `mobile` bigint(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `userid`, `name`, `sex`, `dob`, `doj`, `address`, `mobile`, `salary`) VALUES
(8, 'hthuwal', 'Harish Chandra Thuwal', 'male', '1995-10-01', '2015-10-28', 'JF-31, Ground Floor, Gupta Colony, Khirki Extension,Malviya Nagar,New Delhi - 17', 9891826787, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `apid` int(11) NOT NULL,
  `did` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `request_at` datetime DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `status` enum('pending','confirmed','denied','cancelled') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apid`, `did`, `pid`, `request_at`, `datetime`, `status`) VALUES
(26, 5, 12, '2015-10-28 11:21:38', '2015-10-29 16:30:00', 'cancelled'),
(27, 5, 11, '2015-10-28 11:21:43', '0000-00-00 00:00:00', 'cancelled'),
(28, 5, 9, '2015-10-28 11:21:47', '0000-00-00 00:00:00', 'cancelled'),
(29, 5, 12, '2015-10-28 11:21:53', '2015-10-30 22:15:00', 'cancelled'),
(30, 5, 11, '2015-10-28 22:47:10', '2015-10-30 23:45:00', 'cancelled'),
(31, 5, 11, '2015-10-28 23:03:33', '2015-10-31 05:15:00', 'cancelled'),
(32, 5, 11, '2015-10-29 06:24:13', '0000-00-00 00:00:00', 'cancelled'),
(34, 5, 9, '2015-10-29 06:24:46', '0000-00-00 00:00:00', 'cancelled'),
(35, 5, 9, '2015-10-29 06:27:25', '2015-10-30 08:00:00', 'cancelled'),
(36, 5, 23, '2015-10-29 07:32:04', '2015-10-29 13:30:00', 'confirmed'),
(37, 5, 21, '2015-10-29 07:32:12', '0000-00-00 00:00:00', 'cancelled'),
(38, 5, 15, '2015-10-29 07:32:19', '0000-00-00 00:00:00', 'cancelled'),
(39, 11, 9, '2015-12-19 20:56:33', '0000-00-00 00:00:00', 'cancelled'),
(40, 5, 9, '2015-12-19 20:56:47', '0000-00-00 00:00:00', 'cancelled'),
(41, 12, 25, '2015-12-19 21:13:00', '0000-00-00 00:00:00', 'pending'),
(42, 5, 25, '2015-12-19 21:13:28', '2015-12-23 23:00:00', 'confirmed'),
(43, 6, 9, '2015-12-19 22:06:45', '0000-00-00 00:00:00', 'cancelled'),
(44, 12, 9, '2015-12-19 22:25:54', '0000-00-00 00:00:00', 'cancelled'),
(45, 12, 10, '2015-12-19 23:53:19', '0000-00-00 00:00:00', 'cancelled'),
(46, 12, 9, '2015-12-20 00:37:58', '0000-00-00 00:00:00', 'pending'),
(47, 12, 9, '2015-12-20 00:41:19', '0000-00-00 00:00:00', 'pending'),
(48, 5, 9, '2015-12-20 00:42:01', '2015-12-24 13:00:00', 'confirmed'),
(49, 5, 26, '2015-12-20 01:36:32', '2015-12-25 04:00:00', 'cancelled'),
(50, 20, 30, '2015-12-20 02:23:37', '2015-12-24 04:45:00', 'confirmed'),
(51, 5, 23, '2015-12-20 12:12:47', '2015-12-22 14:00:00', 'cancelled'),
(52, 6, 9, '2015-12-20 12:16:05', '2015-12-30 14:30:00', 'confirmed'),
(53, 19, 9, '2015-12-20 12:20:40', '0000-00-00 00:00:00', 'pending'),
(54, 6, 32, '2015-12-21 13:48:20', '0000-00-00 00:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `assigned`
--

CREATE TABLE IF NOT EXISTS `assigned` (
  `asid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `date_assigned` date DEFAULT NULL,
  `date_released` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE IF NOT EXISTS `attends` (
  `atid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attends`
--

INSERT INTO `attends` (`atid`, `pid`, `did`, `start_date`, `end_date`) VALUES
(11, 9, 5, '2015-12-18 21:45:43', '2015-12-18 21:47:53'),
(12, 14, 5, '2015-12-18 21:46:03', '2015-12-20 12:23:21'),
(13, 11, 5, '2015-12-19 20:23:42', '2015-12-21 13:50:22'),
(14, 25, 6, '2015-12-19 21:26:14', '2015-12-19 21:27:52'),
(15, 25, 5, '2015-12-19 21:28:10', NULL),
(16, 9, 6, '2015-12-20 01:06:25', '2015-12-20 01:08:14'),
(17, 9, 6, '2015-12-20 01:08:01', '2015-12-20 01:08:14'),
(18, 9, 12, '2015-12-20 01:12:52', '2015-12-20 14:39:20'),
(19, 26, 5, '2015-12-20 01:30:23', '2015-12-20 01:38:57'),
(20, 29, 19, '2015-12-20 02:12:03', NULL),
(21, 10, 20, '2015-12-20 02:15:39', NULL),
(22, 30, 20, '2015-12-20 02:26:37', NULL),
(23, 23, 19, '2015-12-20 12:13:16', '2015-12-20 12:14:00'),
(24, 26, 5, '2015-12-20 12:23:16', NULL),
(25, 14, 6, '2015-12-20 12:23:54', NULL),
(26, 12, 5, '2015-12-20 12:41:18', NULL),
(27, 9, 12, '2015-12-20 12:42:38', '2015-12-20 14:39:20'),
(28, 9, 19, '2015-12-20 14:40:03', '2015-12-21 13:53:37'),
(29, 11, 5, '2015-12-21 13:56:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `billid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `datop` datetime NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE IF NOT EXISTS `buys` (
  `bid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `payment` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int(11) NOT NULL,
  `userid` varchar(500) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` enum('male','female','transgender') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text,
  `mobile` bigint(11) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `specialization` enum('dentist','cardiologist','neurosergon') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `userid`, `name`, `sex`, `dob`, `address`, `mobile`, `doj`, `salary`, `specialization`) VALUES
(5, 'doctor1', 'DOC4', 'male', '2015-12-19', '', 0, '2015-12-19', 0, 'neurosergon'),
(6, 'doctor2', 'asdfasdf', 'male', '0000-00-00', '', 0, '0000-00-00', 0, 'dentist'),
(8, 'doctor12', 'asdfasdf', NULL, '0000-00-00', '', 0, '0000-00-00', 0, NULL),
(9, 'harish', 'asdfasdf', NULL, '0000-00-00', '', 0, '0000-00-00', 0, NULL),
(10, 'harishchandra', 'asdfasdf', NULL, '0000-00-00', '', 0, '0000-00-00', 0, NULL),
(11, 'doctor4', 'Asdfasdf', NULL, '2015-12-19', '', 0, '2015-12-19', 0, 'neurosergon'),
(12, 'Doctor7', 'Mydoc', NULL, '0000-00-00', '', 0, '0000-00-00', 0, 'cardiologist'),
(13, '', '', NULL, '0000-00-00', '', 0, NULL, NULL, NULL),
(14, 'newdoc', 'newdocname', 'female', '0000-00-00', 'asdfas', 45645664654, '0000-00-00', 45000, 'dentist'),
(15, 'anothernewdoc', 'anothernewname', 'male', '0000-00-00', 'qwerihaosidhjk', 7894561232, '0000-00-00', 48000, NULL),
(16, 'lastnewdoc', 'lastnewdocname', 'male', '0000-00-00', 'mars', 989164654, '0000-00-00', 1504000, 'neurosergon'),
(17, 'sdfqwre', '', NULL, '0000-00-00', '', 0, '0000-00-00', 0, NULL),
(18, 'qwerqe', '', NULL, '0000-00-00', '', 0, '0000-00-00', 0, NULL),
(19, 'qwerqwe', 'pij', 'male', '2015-12-03', 'qsadfasdf', 456879, '2015-12-19', 450000, 'cardiologist'),
(20, 'testdoctor1', 'testdocname1', 'female', '2015-12-02', 'venus', 45612345, '2015-12-19', 45000, 'dentist'),
(21, 'wertyu', '', NULL, '2015-12-20', '', 0, '2015-12-20', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `governs`
--

CREATE TABLE IF NOT EXISTS `governs` (
  `nid` int(11) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `mid` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `details` text,
  `current_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `nid` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` enum('male','female','transgender') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(11) NOT NULL,
  `userid` varchar(500) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` enum('male','female','transgender') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text,
  `admitted` datetime DEFAULT NULL,
  `discharged` datetime DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `disease` text
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `userid`, `name`, `sex`, `dob`, `address`, `admitted`, `discharged`, `age`, `mobile`, `disease`) VALUES
(9, 'patient1id', 'Mynamenew', 'male', '1996-12-04', '', '2015-10-28 21:33:17', NULL, NULL, 0, NULL),
(10, 'patient2id', 'Patient2', NULL, '1997-10-23', '', '2015-12-02 00:00:00', '2015-12-07 00:00:00', NULL, 0, 'Typhoid'),
(11, 'patient3id', 'patient3', NULL, '2015-10-26', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'patient4id', 'patient4', NULL, '2015-10-27', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'patient5id', 'patinet5', NULL, '2015-10-27', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'patient6id', 'patient6', 'male', '2015-10-27', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'patient7id', 'patient7', 'female', '2015-10-27', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'patient8id', 'patient8', 'male', '2015-10-28', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'patient10id', 'patient10', 'male', '2015-10-08', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'patient11id', 'patient11', 'female', '2015-10-01', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'patient15id', 'patient15', 'transgender', '2015-02-04', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'patient16id', 'patient16', 'female', '2015-10-11', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'patient20id', 'Hfjghjgfj', 'female', '1996-10-03', '', NULL, NULL, NULL, 0, NULL),
(25, 'newpatient', 'Whatsinname', 'female', '1996-12-05', '', NULL, NULL, NULL, 0, NULL),
(26, 'patient1', 'Mynewpatient', 'female', '1977-12-08', 'aasdfasdfas', '2015-01-08 00:00:00', '2015-12-04 00:00:00', NULL, 100009, 'Arthritis, Pneumonia'),
(27, 'anothernewpatient', 'anothernewpatientname', 'transgender', '0000-00-00', 'asdfasdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 7894564, 'not known yet'),
(28, 'patient', 'patient', NULL, '0000-00-00', 'nzxcmnvzmcx', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 45646123, 'not known yet'),
(29, 'patient7', 'asdfasdflk;l', 'male', '1966-12-09', 'qweriuqwireou', '2015-12-09 00:00:00', '2015-12-20 00:00:00', NULL, 98954564, 'not known yet'),
(30, 'testpatient1', 'testpatientname1', 'female', '1997-12-03', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'poiuytr', '', NULL, '2015-12-20', '', '2015-12-20 00:00:00', '2015-12-20 00:00:00', NULL, 0, ''),
(32, 'patient2', 'harish', 'male', '1998-12-30', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `rid` int(11) NOT NULL,
  `rtype` varchar(500) DEFAULT NULL,
  `cost_per_day` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `takestest`
--

CREATE TABLE IF NOT EXISTS `takestest` (
  `ttid` int(11) NOT NULL,
  `tid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `payment` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `tid` int(11) NOT NULL,
  `cost` float DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` enum('doctor','patient','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `type`) VALUES
('', '5049a9f96eb0fd0ae60c878d4f5f5a41', 'doctor'),
('anothernewdoc', '3ae1b981cab7c99f2880670f5fb42f54', 'doctor'),
('anothernewpatient', '1f2d7911f02f041ab90a5c7078a8bab1', 'patient'),
('asdfasdf', 'e72d86afccd7d04eac3ec4ded671635a', 'doctor'),
('doctor1', 'c2d183e027274edac5d01569c3655c7a', 'doctor'),
('Doctor12', 'ca2985ad2832354c0638604fba1aa9aa', 'doctor'),
('doctor2', '12c6ab607f4e0f415048cabcd69e4b35', 'doctor'),
('doctor4', '1e59a679ffb6e24daf4e0aada0b69e8f', 'doctor'),
('Doctor7', '8b22ac88a53e470f2eeba2abbc86e780', 'doctor'),
('harish', 'e93ff8a9218226cb0c44152a2eb9b256', 'doctor'),
('harishchandra', '8ef5840a3a8202d3d345773683fd0036', 'doctor'),
('hthuwal', '41bdf62bc1986c34f81f6f6b9575edbb', 'admin'),
('lastnewdoc', '0838b795e381160b98deb5302ce11563', 'doctor'),
('newdoc', '6733813f9820a3ce1ff24706f3b75965', 'doctor'),
('newpatient', '70a5b47ef1138ed2a979457ec3c888c0', 'patient'),
('patient', 'b52cd64cd7533312c646915a686fc604', 'patient'),
('patient1', '24ba140e8adc8f17de2948fe85e874b5', 'patient'),
('patient10id', 'ab42a23a1072292114db2aaa00e5bb0c', 'patient'),
('patient11id', '86a3a3bd602bafb3f4201c6884c7cb8b', 'patient'),
('patient15id', 'dcf5a14515fbe6be4711825943008283', 'patient'),
('patient16id', 'ab2da7261e89c423d9d288136fcc2b83', 'patient'),
('patient1id', '89af44fd3960150d93abcab1bf8b2740', 'patient'),
('patient2', 'a84f3234f3763737c2edf652876e6e27', 'patient'),
('patient20id', '3bd45909d2e7f1cd23ada5e9db2d2a12', 'patient'),
('patient2id', 'e81cd579cf43f5bc815565700fb01c8a', 'patient'),
('patient3id', '262d28a3155b4ddc7254bef68e4ffddf', 'patient'),
('patient4id', 'c55507063f93d4ca75ef4ce74d02c245', 'patient'),
('patient5id', 'd67602a43231511254cc9c6a57b77bfc', 'patient'),
('patient6id', 'e9a16b971f464bc4853807324e1d7d56', 'patient'),
('patient7', 'fe27a2080cefefd144806bbde2587619', 'patient'),
('patient7id', 'f378998b9e9df921433d5721bf38d501', 'patient'),
('patient8id', 'db5384c4732374f1e03bc3529e0b2b7b', 'patient'),
('poiuytr', 'b1b8ac037a5530871597ce1e2cf5d958', 'patient'),
('qwerqe', '56f8e6756256f35a93f3ed904c75c79a', 'doctor'),
('qwerqwe', 'b5a75a39ad3183ec64acdd67668f3f64', 'doctor'),
('sdfqwre', '5153acaf1f206c556b04829e47f4903f', 'doctor'),
('testdoctor1', 'e6cb1999ac76062d8aaaf6d85bcad325', 'doctor'),
('testpatient1', '33a181111ef6e49d302178df3ebae959', 'patient'),
('wertyu', '8b6ccea496102799053b87f352070648', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`apid`),
  ADD KEY `did` (`did`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `assigned`
--
ALTER TABLE `assigned`
  ADD PRIMARY KEY (`asid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`atid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `mid` (`mid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `userid_2` (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `governs`
--
ALTER TABLE `governs`
  ADD KEY `nid` (`nid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `takestest`
--
ALTER TABLE `takestest`
  ADD PRIMARY KEY (`ttid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `assigned`
--
ALTER TABLE `assigned`
  MODIFY `asid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attends`
--
ALTER TABLE `attends`
  MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `takestest`
--
ALTER TABLE `takestest`
  MODIFY `ttid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`did`) REFERENCES `doctor` (`did`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assigned`
--
ALTER TABLE `assigned`
  ADD CONSTRAINT `assigned_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assigned_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attends`
--
ALTER TABLE `attends`
  ADD CONSTRAINT `attends_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attends_ibfk_2` FOREIGN KEY (`did`) REFERENCES `doctor` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`);

--
-- Constraints for table `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `medicine` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buys_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `governs`
--
ALTER TABLE `governs`
  ADD CONSTRAINT `governs_ibfk_1` FOREIGN KEY (`nid`) REFERENCES `nurse` (`nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `governs_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `takestest`
--
ALTER TABLE `takestest`
  ADD CONSTRAINT `takestest_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `test` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `takestest_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
