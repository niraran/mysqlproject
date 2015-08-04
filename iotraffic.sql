-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2015 at 05:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iotraffic`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `id_camera` int(11) NOT NULL,
  `id_CrossRoad` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `in_CrossRoad` tinyint(1) NOT NULL,
  `ip` int(11) NOT NULL,
  `url` varchar(2083) NOT NULL,
  `count_connct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crossroad`
--

CREATE TABLE IF NOT EXISTS `crossroad` (
  `id_CrossRoad` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `numOfWays` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL,
  `eventName` varchar(100) NOT NULL,
  `eventDescription` varchar(200) NOT NULL,
  `eventOpenBy` varchar(30) NOT NULL,
  `eventType` enum('sport event','accident','traffic jam','heavy traffic','security Event') NOT NULL,
  `eventStatus` enum('open','close','pending','') NOT NULL,
  `stratTime` datetime NOT NULL,
  `endTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id_location` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `traffic_light`
--

CREATE TABLE IF NOT EXISTS `traffic_light` (
  `id_trafficLight` int(16) NOT NULL,
  `id_crossRoad` int(16) DEFAULT NULL,
  `id_location` int(16) NOT NULL,
  `inCrossroad` tinyint(1) NOT NULL,
  `mangeable` tinyint(1) NOT NULL,
  `count_edit` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `permision` enum('admin','operator','dispatcher','manager') NOT NULL,
  `password` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `active`, `user_name`, `first_name`, `last_name`, `permision`, `password`) VALUES
(2, 1, 'dolevsh', 'dolev', 'shore', 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(6, 0, 'niraran', 'nir', 'aran', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id_camera`);

--
-- Indexes for table `crossroad`
--
ALTER TABLE `crossroad`
  ADD PRIMARY KEY (`id_CrossRoad`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Indexes for table `traffic_light`
--
ALTER TABLE `traffic_light`
  ADD PRIMARY KEY (`id_trafficLight`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id_camera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `crossroad`
--
ALTER TABLE `crossroad`
  MODIFY `id_CrossRoad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `traffic_light`
--
ALTER TABLE `traffic_light`
  MODIFY `id_trafficLight` int(16) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
