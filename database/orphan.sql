-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2023 at 04:54 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphan`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `cdob` date NOT NULL,
  `cyoe` int NOT NULL,
  `cclass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cschool` varchar(255) NOT NULL,
  `cgender` varchar(100) NOT NULL,
  `cmedication` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ccondition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cvaccination` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cincidents` varchar(255) NOT NULL,
  `cnutrition` int NOT NULL,
  `cbehavior` int NOT NULL,
  `cfamily` varchar(20) NOT NULL,
  `cstory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sponsored` int NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`cid`, `cname`, `cdob`, `cyoe`, `cclass`, `cschool`, `cgender`, `cmedication`, `ccondition`, `cvaccination`, `cincidents`, `cnutrition`, `cbehavior`, `cfamily`, `cstory`, `sponsored`) VALUES
(1, 'John Majani', '2022-06-08', 2023, 'Class One', 'Mary', 'Male', 'NO', 'cancer', 'NO', 'Injury', 3, 4, '07543234346', 'majani ni mengi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `program` varchar(20) NOT NULL,
  `amount` int NOT NULL,
  `checkno` varchar(30) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `d_address` text NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`d_id`, `program`, `amount`, `checkno`, `bank_name`, `place`, `d_name`, `email`, `phone`, `d_address`) VALUES
(1, 'Lakshya', 10000, '42f213', 'sbi', 'bengaluru', 'Ramesh', 'mukesh@gmail.com', 55555444, '309 E. Westport Dr. \r\nManchester Township, NJ 08759'),
(2, 'Parivartan', 7870, '98da93', 'canara', 'hydrabad', 'hitesh', 'dinesh@test.com', 55555444, '7 Beech Road \r\nNew City, NY 10956'),
(3, 'Parivartan', 4000, '98da93', 'fedaral', 'chennai', 'Mahesh', 'mahesh@gmail.com', 22222222, '764 Hill Court \r\nGlendora, CA 91740');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) NOT NULL,
  `full_address` text NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `full_name`, `full_address`, `phone`, `email`, `comment`) VALUES
(1, 'Vyshak', '764 Hill Court \r\nGlendora, CA 91740', 55555444, 'Vyshak@gmail.com', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'edwin', '587 Riverside Ave. \r\nHephzibah, GA 30815', 55555444, 'edwin@test.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
CREATE TABLE IF NOT EXISTS `gift` (
  `gift_id` int NOT NULL AUTO_INCREMENT,
  `cid` int NOT NULL,
  `gift_type` varchar(20) NOT NULL,
  `sending_date` date NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int NOT NULL,
  `sender_address` text NOT NULL,
  PRIMARY KEY (`gift_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`gift_id`, `cid`, `gift_type`, `sending_date`, `sender_name`, `email`, `phone`, `sender_address`) VALUES
(1, 8, 'dress', '2018-11-30', 'test', 'mukesh@gmail.com', 687698675, '587 Riverside Ave. \r\nHephzibah, GA 30815'),
(2, 9, 'helicopter', '2018-11-30', 'fazal', 'karthikareddy@gmail.com', 659586785, '10 Strawberry Drive \r\nLorain, OH 44052');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `join_date` datetime DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `picture` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `password`, `join_date`, `first_name`, `last_name`, `gender`, `birthdate`, `city`, `state`, `picture`) VALUES
(1, 'testname', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-11-17 06:01:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2018-11-23 21:45:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Jonas', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2023-05-03 19:12:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `n_id` int NOT NULL AUTO_INCREMENT,
  `n_issue` varchar(40) NOT NULL,
  `n_story` text NOT NULL,
  `n_month` varchar(20) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`n_id`, `n_issue`, `n_story`, `n_month`) VALUES
(1, 'News for Poonam', ' Poonam, 7 years old child living with her parents who are involved in working as feiwale, having no fixed income source and spending whole day moving from one corner to another to earn their livelihood. Poonam also used to work with her parents to sell different items which was in actuallu spoting her education career and childhood. With the step ahead and support of OFD, now Poonam is a part of students who are getting education in the learning centres aparted by OFD. She is now also taking part in co-curricular activities. A major change, this girl poonam and her friend had given a presentation aar Le-Meridian on December 20, 2007 in a conference arranged by Govt India with the support of Mr.Ajay Bakaya (Executive Director, Sarover Group of Hotels.', 'June'),
(2, 'Newly born children', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'August');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `program_id` int NOT NULL AUTO_INCREMENT,
  `program_title` varchar(30) NOT NULL,
  `program_desc` text NOT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_title`, `program_desc`) VALUES
(9, 'Quality Education', 'The quality of education in Africa faces many challenges, including inadequate resources, low enrollment rates, and high drop-out rates. Children living in poverty or in rural areas often have limited access to quality education, which can limit their opportunities in life. Child Care & Development System aims to address these challenges by providing innovative software solutions to help organizations manage educational programs more effectively. By streamlining administrative tasks and providing tools to track student progress, our software can help improve the quality of education and increase access to education for children in Africa. Additionally, our educational programs provide academic support, tutoring, and mentoring to help children develop the skills and knowledge they need to succeed in school and in life. Through our dedication to improving education in Africa, we hope to create a brighter future for children who may have otherwise been left behind.'),
(10, 'Ufundi Community Development', 'This is program is meant to familiarize children and teens in the society and their families with the importance of education through counselling by our staff and later they are enrolled in our organization where, with the help of our non-formal way of teaching through workshops by trained teachers, they are developed a love for learning. They are later admitted to public schools for formal education. A regular monitoring is done through frequent home visits by staff members. They are also helped in their studies at our learning centers opened at different locations for the convenience of chidren in order to help them in their smooth journey in school and prevent them from dropping out.'),
(11, 'Health Care', 'This project concept came, after assessing the need for medical help in the village where most of the people cannot afford to pay for medical treatment. After interviewing local community members and assessing the existing facilities within the immediate area, it became apparent that there was a great need for medical facilities that can be more easily accessible. It was found that many individuals within this area do not attend to their medical needs, despite some people being seriously ill. The main challenge is distance and medical treatment costs.  This is particularly an issue for those who may have ongoing medical conditions that require frequent medical attention, such as weekly visits.\r\nOur main services are Health care seminars, Doctor consultations, Preliminary measurements such as blood pressure (BP) and weight, Laboratory tests (STDs, Malaria, Diabetes, Gastrointestinal diseases, etc.), Medical services (Pharmacy), Medical injection, Cleaning wounds and minor surgery. The project focuses on healthcare treatment and prevention.');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorer`
--

DROP TABLE IF EXISTS `sponsorer`;
CREATE TABLE IF NOT EXISTS `sponsorer` (
  `spn_id` int NOT NULL AUTO_INCREMENT,
  `spn_firstname` varchar(30) NOT NULL,
  `spn_lastname` varchar(30) DEFAULT NULL,
  `spnd_date` date NOT NULL,
  `spn_noofyears` int NOT NULL,
  `spn_email` varchar(30) NOT NULL,
  `spn_phone` int NOT NULL,
  `spn_bill_address` text NOT NULL,
  `spn_amount` int NOT NULL,
  `spn_checkno` varchar(20) NOT NULL,
  `cid` int NOT NULL,
  PRIMARY KEY (`spn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sponsorer`
--

INSERT INTO `sponsorer` (`spn_id`, `spn_firstname`, `spn_lastname`, `spnd_date`, `spn_noofyears`, `spn_email`, `spn_phone`, `spn_bill_address`, `spn_amount`, `spn_checkno`, `cid`) VALUES
(18, 'Ravi', 'chander', '2018-11-23', 2, 'ravichander@gmail.com', 22222222, '618 Greenrose Dr. \r\nSchererville, IN 46375\r\n', 40000, '2w3e4r5t', 7),
(22, 'Maria', 'Mgunda', '2023-05-05', 2, 'magundamaria@gmail.com', 624846365, 'MOSHI TANZANIA', 8000, '', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
