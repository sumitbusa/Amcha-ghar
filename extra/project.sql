-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2015 at 12:42 AM
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
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `details` varchar(500) COLLATE utf8_bin NOT NULL,
  `authority` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `actual_pic` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `event_pic` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`id`, `name`, `subject`, `details`, `authority`, `date`, `time`, `actual_pic`, `event_pic`) VALUES
(1, 'Gyan 15 (Paper Presentation)', 'participate, win & make your institute proud', 'There are 3 group like as A,Band C. Stand a chance  tobecome a Gyan Trophy Winner.', 'Chamical Engineering Department', '2015-03-03', '00:00:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hod_info`
--

CREATE TABLE IF NOT EXISTS `hod_info` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(10) NOT NULL,
  `fname` text COLLATE utf8_bin NOT NULL,
  `lname` text COLLATE utf8_bin NOT NULL,
  `email_id` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` int(20) NOT NULL,
  `contact` varchar(15) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `designation` varchar(50) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(30) COLLATE utf8_bin NOT NULL,
  `skills` varchar(50) COLLATE utf8_bin NOT NULL,
  `actual_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `join_date` date NOT NULL,
  `gender` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`no`,`faculty_id`,`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `member_id` int(20) NOT NULL,
  `fname` char(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lname` char(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` char(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` char(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`no`,`email_id`,`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`no`, `email_id`, `password`, `member_id`, `fname`, `lname`, `gender`, `category`, `dob`) VALUES
(1, 'santoshdangodra@gmail.com', '1234', 1198007, 'Santosh', 'Rajpoot', 'Male', 'Student', '1995-11-30'),
(3, 'helishah3695@gmail.com', '1234', 1298033, 'heli', 'shah', 'Female', 'Student', '2015-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `roll_no` int(10) NOT NULL,
  `sap_no` int(15) NOT NULL,
  `fname` text COLLATE utf8_bin NOT NULL,
  `lname` text COLLATE utf8_bin NOT NULL,
  `email_id` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `gender` text COLLATE utf8_bin NOT NULL,
  `contact_no` varchar(15) COLLATE utf8_bin NOT NULL,
  `course` text COLLATE utf8_bin NOT NULL,
  `semester` varchar(10) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `actual_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `join_date` date NOT NULL,
  PRIMARY KEY (`no`,`roll_no`,`sap_no`,`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(10) NOT NULL,
  `fname` text COLLATE utf8_bin NOT NULL,
  `lname` text COLLATE utf8_bin NOT NULL,
  `email_id` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` int(20) NOT NULL,
  `contact` varchar(15) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `designation` varchar(50) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(30) COLLATE utf8_bin NOT NULL,
  `skills` varchar(50) COLLATE utf8_bin NOT NULL,
  `actual_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8_bin NOT NULL,
  `join_date` date NOT NULL,
  `gender` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`no`,`faculty_id`,`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
