-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2015 at 04:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
  `camera_IP` text CHARACTER SET utf8 NOT NULL,
  `camera_URL` text CHARACTER SET utf8 NOT NULL,
  `count_connect` int(11) NOT NULL,
  `camera_LocationName` text CHARACTER SET utf8 NOT NULL,
  `camera_Direction` enum('צפון','דרום','מזרח','מערב') CHARACTER SET utf8 NOT NULL,
  `inCrossRoad` enum('כן','לא') CHARACTER SET utf8 NOT NULL,
  `camera_Admin` enum('חיפה','ירושלים','תל אביב') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id_camera`, `id_CrossRoad`, `id_location`, `camera_IP`, `camera_URL`, `count_connect`, `camera_LocationName`, `camera_Direction`, `inCrossRoad`, `camera_Admin`) VALUES
(12, 67, 99, '192.168.1.1', 'http://www.walla.co.il/', 0, 'איילון צפון', 'צפון', 'כן', 'חיפה'),
(14, 67, 989, '', 'http://www.ynet.co.il', 0, 'איילון דרום', 'דרום', 'כן', 'ירושלים'),
(16, 0, 89, '196.2.4.5', '', 0, 'ארלוזורוב', 'צפון', 'לא', 'תל אביב');

-- --------------------------------------------------------

--
-- Table structure for table `crossroad`
--

CREATE TABLE IF NOT EXISTS `crossroad` (
`id_CrossRoad` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `numOfWays` tinyint(4) NOT NULL,
  `crossroadName` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crossroad`
--

INSERT INTO `crossroad` (`id_CrossRoad`, `id_location`, `numOfWays`, `crossroadName`) VALUES
(67, 55503, 3, 'צומת רעננה'),
(78, 87, 4, 'צומת רופין');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id_event` int(11) NOT NULL,
  `eventName` varchar(100) NOT NULL,
  `eventDescription` varchar(200) NOT NULL,
  `eventOpenBy` varchar(30) NOT NULL,
  `eventType` enum('אירוע ספורט','תאונה','עומס תנועה','חסימת רחוב','אירוע בטחוני','אחר') NOT NULL,
  `eventStatus` enum('open','close','pending') NOT NULL,
  `startTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `endTime` datetime DEFAULT NULL,
  `eventCategory` enum('POLICE','MDA','FIRE','MUNICIPALITY','OTHER') NOT NULL,
  `id_location` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `eventName`, `eventDescription`, `eventOpenBy`, `eventType`, `eventStatus`, `startTime`, `endTime`, `eventCategory`, `id_location`) VALUES
(1, 'תאונה בכביש 70', 'תאונה קשה בכביש 70, נשמח לפינוי התנועה בציר לשעה הקרובה לשם פינוי המכוניות.', 'מתנ"א צפון', 'תאונה', 'open', '2015-06-27 21:42:20', NULL, 'POLICE', 0),
(7, 'לילה לבן בתל אביב', 'אירוע לילה לבן המסורתי יתקיים בתל אביב. צירי תנועה ראשיים יסגרו.', 'משטרת ישראל - מחוז מרכז', 'חסימת רחוב', 'pending', '2015-07-01 17:21:06', NULL, 'POLICE', 0),
(8, 'תאונה בכביש 66', 'תאונת שרשרת קשה', 'משטרת עפולה', 'תאונה', 'close', '2015-06-28 15:46:58', '2015-06-30 09:00:00', 'POLICE', 99),
(9, 'תאונה בכביש 2', 'תאונה קלה במחלף הסירה', 'משטרת הרצליה', 'תאונה', 'open', '2015-06-24 09:18:04', NULL, 'POLICE', 94),
(10, 'חסימת רחוב מרום גולן', 'חסינת הרחוב לצורך שיפוצים', 'עיריית ראשל"צ', 'חסימת רחוב', 'open', '2015-06-24 10:15:21', NULL, 'MUNICIPALITY', 12),
(11, 'שריפת קוצים', 'שריפת קוצים בהר הכרמל', 'כיבוי אש חיפה', 'אחר', 'open', '2015-06-24 10:16:28', NULL, 'FIRE', 187),
(12, 'שריפה שמורת תנינים', 'פרצה שריפה בעקבות הדלקת אש מטיילים', 'כיבוי אש זבולון', 'אחר', 'open', '2015-06-24 10:17:40', NULL, 'FIRE', 998),
(13, 'פינוי פצועים', 'פיגוע בכיכר בלה בלה', 'מד"א ת"א', 'אירוע בטחוני', 'close', '2015-06-28 15:43:59', '2015-06-29 05:10:30', 'MDA', 8878);

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
  `inCrossroad` enum('כן','לא') CHARACTER SET utf8 NOT NULL,
  `count_edit` int(16) NOT NULL,
  `trafficLight_Direction` enum('ישר','ישר או ימינה','ישר או שמאלה','ימינה לפני התמרור','ימינה אחרי התמרור','שמאלה לפני התמרור','שמאלה אחרי התמרור','ימינה או שמאלה','ישר או פרסה שמאלה','ישר או פרסה ימינה','פרסה ימינה','פרסה שמאלה','כל הכיוונים') CHARACTER SET utf8 NOT NULL,
  `trafficLight_Admin` enum('חיפה','ירושלים','תל אביב') CHARACTER SET utf8 NOT NULL,
  `u_turn` enum('כן','לא') CHARACTER SET utf8 NOT NULL,
  `trafficLight_Pedestrians` enum('כן','לא') CHARACTER SET utf8 NOT NULL,
  `trafficLight_Status` enum('RED','RED-YELLOW','YELLOW','FLASHING-YELLOW','GREEN') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=527 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traffic_light`
--

INSERT INTO `traffic_light` (`id_trafficLight`, `id_crossRoad`, `id_location`, `inCrossroad`, `count_edit`, `trafficLight_Direction`, `trafficLight_Admin`, `u_turn`, `trafficLight_Pedestrians`, `trafficLight_Status`) VALUES
(1, 67, 99, 'כן', 0, 'ימינה או שמאלה', 'תל אביב', 'לא', 'כן', 'RED'),
(2, 67, 18, 'כן', 0, 'ישר או ימינה', 'ירושלים', 'כן', 'לא', 'GREEN');

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
  `permision` varchar(40) NOT NULL,
  `password` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
MODIFY `id_camera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `crossroad`
--
ALTER TABLE `crossroad`
MODIFY `id_CrossRoad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `traffic_light`
--
ALTER TABLE `traffic_light`
MODIFY `id_trafficLight` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=527;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
