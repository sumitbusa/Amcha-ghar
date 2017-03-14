-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2015 at 02:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE IF NOT EXISTS `event_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `from` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `details` varchar(500) COLLATE utf8_bin NOT NULL,
  `address` varchar(150) COLLATE utf8_bin NOT NULL,
  `authority` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  `end_date` time DEFAULT NULL,
  `actual_pic` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `event_pic` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `admin` varchar(5) COLLATE utf8_bin NOT NULL,
  `hod` varchar(5) COLLATE utf8_bin NOT NULL,
  `it_staff` varchar(5) COLLATE utf8_bin NOT NULL,
  `cse_staff` varchar(5) COLLATE utf8_bin NOT NULL,
  `it_student` varchar(5) COLLATE utf8_bin NOT NULL,
  `cse_student` varchar(5) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`id`, `from`, `name`, `subject`, `details`, `address`, `authority`, `date`, `time`, `start_date`, `start_time`, `end_time`, `end_date`, `actual_pic`, `event_pic`, `admin`, `hod`, `it_staff`, `cse_staff`, `it_student`, `cse_student`) VALUES
(1, 1198007, 'Gyan 15 (Paper Presentation)', 'participate, win & make your institute proud', 'There are 3 group like as A,Band C. Stand a chance  tobecome a Gyan Trophy Winner.', 'sbmpolytechnic', 'Chamical Engineering Department', '2015-03-03', '12:09:00', '2015-03-25', '09:00:00', '2015-03-25', '09:00:00', '', '', 'a', 'g', 'g', 'g', 'g', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `hod_info`
--

CREATE TABLE IF NOT EXISTS `hod_info` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `college_id` int(10) NOT NULL,
  `department` varchar(10) COLLATE utf8_bin NOT NULL,
  `address` varchar(500) COLLATE utf8_bin NOT NULL,
  `designation` varchar(50) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(30) COLLATE utf8_bin NOT NULL,
  `skills` varchar(50) COLLATE utf8_bin NOT NULL,
  `actual_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`no`,`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hod_info`
--

INSERT INTO `hod_info` (`no`, `college_id`, `department`, `address`, `designation`, `qualification`, `skills`, `actual_pic`, `profile_pic`) VALUES
(1, 2863743, 'CSE', 'Dahishar(e) Mumbai-400068', 'Teaching', 'ME', 'Networking, ITC', 'kulkarni.jpg', 'kulkarni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `college_id` int(20) NOT NULL,
  `fname` char(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lname` char(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` char(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` char(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dob` date DEFAULT NULL,
  `contact_no` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `signup_date` date NOT NULL,
  `signup_time` time NOT NULL,
  `signin_counter` int(15) DEFAULT NULL,
  `notification_counter` int(5) DEFAULT NULL,
  `last_signin_date` date DEFAULT NULL,
  `last_signin_time` time DEFAULT NULL,
  PRIMARY KEY (`no`,`email_id`,`college_id`,`contact_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`no`, `email_id`, `password`, `college_id`, `fname`, `lname`, `gender`, `category`, `dob`, `contact_no`, `signup_date`, `signup_time`, `signin_counter`, `notification_counter`, `last_signin_date`, `last_signin_time`) VALUES
(1, 'santoshdangodra@gmail.com', 'Ab123', 1198007, 'Santosh', 'Rajpoot', 'Male', 'Admin', '1995-11-30', '+917666605343', '2015-02-10', '00:00:00', 7, NULL, '2015-03-30', '06:08:24'),
(3, 'helishah3695@gmail.com', 'Ab123', 1298033, 'Heli', 'Shah', 'Female', 'Student', '2015-02-09', '+919029241266', '2015-03-03', '00:00:00', 3, NULL, '2015-03-30', '06:09:37'),
(5, 'kajaltrivedi296@gmail.com', 'kajal123', 1298038, 'Kajal', 'Trivedi', 'Female', 'Student', '1992-10-28', '+919167476466', '2015-03-03', '00:00:00', NULL, NULL, NULL, NULL),
(7, 'neetakadukar@gmail.com', 'Ab123', 1376457, 'Neeta', 'Kadukar', 'Female', 'HOD', '1972-05-12', '+918934574576', '2015-03-25', '01:24:52', 3, NULL, '2015-03-29', '19:30:25'),
(8, 'pankajrathod@gmail.com', 'Ab123', 1237624, 'Pankaj', 'Rathod', 'Male', 'Teacher', '1985-05-09', '+914579673867', '2015-03-25', '01:56:29', 1, NULL, '2015-03-30', '05:43:02'),
(9, 'sumitbusa@gmail.com', 'Ab123', 1298006, 'Sumit', 'Busa', 'Male', 'Student', '1996-03-02', '+918879266829', '2015-03-25', '12:08:44', NULL, NULL, NULL, NULL),
(10, 'yagnesh@gmail.com', 'Ab123', 1298010, 'Yagnesh', 'Devashryee', 'Male', 'Student', '1996-03-20', '+917709760057', '2015-03-25', '12:12:28', NULL, NULL, NULL, NULL),
(11, 'janardankulkarni@gmail.com', 'Ab123', 2863743, 'Janardan', 'Kulkarni', 'Male', 'HOD', '1974-05-10', '+919684274839', '2015-03-29', '18:09:11', 7, NULL, '2015-03-30', '01:46:20'),
(12, 'pratikshah@gmail.com', 'Ab123', 5423452, 'Pratik', 'Shah', 'Male', 'Teacher', '1982-07-11', '+917845354342', '2015-03-29', '19:01:05', 1, NULL, '2015-03-29', '19:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `signup_code`
--

CREATE TABLE IF NOT EXISTS `signup_code` (
  `Student_code` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Teacher_code` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `HOD_code` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_code`
--

INSERT INTO `signup_code` (`Student_code`, `Teacher_code`, `HOD_code`) VALUES
('pass123', 'marks123', 'sbmp123');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `college_id` int(10) NOT NULL,
  `sap_no` varchar(15) COLLATE utf8_bin NOT NULL,
  `course` varchar(15) COLLATE utf8_bin NOT NULL,
  `semester` varchar(10) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `actual_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`no`,`college_id`,`sap_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`no`, `college_id`, `sap_no`, `course`, `semester`, `address`, `profile_pic`, `actual_pic`) VALUES
(1, 1198007, '57398110007', '', '', '', 'santosh.jpg', 'santosh.jpg'),
(2, 1298006, '57398120006', '', '', '', '', ''),
(3, 1298010, '57398120010', '', '', '', '', ''),
(4, 1298033, '57398120033', 'IT', 'VI', 'Marin Lines(e)', 'heli.jpg', 'heli.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `college_id` int(10) NOT NULL,
  `department` varchar(10) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `designation` varchar(50) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(30) COLLATE utf8_bin NOT NULL,
  `skills` varchar(50) COLLATE utf8_bin NOT NULL,
  `actual_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`no`,`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`no`, `college_id`, `department`, `address`, `designation`, `qualification`, `skills`, `actual_pic`, `profile_pic`) VALUES
(1, 1237624, 'IT', 'Jogeshwari (e)', 'Teaching', 'BE', 'JAVA, FOS, ECOM,DE', 'pankaj.jpg', 'pankaj.jpg'),
(2, 5423452, '', '', '', '', '', 'pratik.jpg', 'pratik.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
