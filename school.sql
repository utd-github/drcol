-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2019 at 07:28 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` varchar(250) NOT NULL,
  `sub_id` varchar(250) NOT NULL,
  `teacher_id` varchar(250) NOT NULL,
  `assign_title` varchar(250) NOT NULL,
  `assign_file` varchar(250) NOT NULL,
  `assign_description` varchar(250) NOT NULL,
  `assign_deadline` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

DROP TABLE IF EXISTS `class_schedule`;
CREATE TABLE IF NOT EXISTS `class_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` varchar(50) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `dayOfweek` varchar(50) NOT NULL,
  `star_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(50) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `event_place` varchar(50) NOT NULL,
  `event_date` varchar(250) NOT NULL,
  `even_description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(50) NOT NULL,
  `exam_type` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`, `exam_type`, `description`, `date`) VALUES
(1, 'Math', 'Mid Term', 'Hala diyaar Garoobo inshallh', '1/4/2019'),
(2, 'Math', '', 'isku diyaariya examka ', '1/4/2019');

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks`
--

DROP TABLE IF EXISTS `exam_marks`;
CREATE TABLE IF NOT EXISTS `exam_marks` (
  `em_id` int(11) NOT NULL AUTO_INCREMENT,
  `em_name` varchar(50) NOT NULL,
  `em_type` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `em_std` varchar(50) NOT NULL,
  `em_date` varchar(50) NOT NULL,
  PRIMARY KEY (`em_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mclass`
--

DROP TABLE IF EXISTS `mclass`;
CREATE TABLE IF NOT EXISTS `mclass` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `subid` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mclass`
--

INSERT INTO `mclass` (`class_id`, `cname`, `tid`, `tname`, `subid`, `subname`, `room`, `description`) VALUES
(1, 'L1', '001a', 'Mohamed Abdikadir', '1100', 'Abdulkadir Salad', 'One', 'L1 class is good'),
(3, 'L2', '9m', 'abdulkadir', '89', 'math', 'two', 'L2 class is good class ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `std_rollno` varchar(50) NOT NULL,
  `std_phone` varchar(50) NOT NULL,
  `std_age` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `pob` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `sub_date` varchar(50) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `f_name`, `std_rollno`, `std_phone`, `std_age`, `std_email`, `pob`, `dob`, `gender`, `semester`, `year`, `p_name`, `p_id`, `sub_date`) VALUES
(1, 'Abdulkadir Salad', '121', '7767', '122', 'aaa@gmail.com', '11/11/2019', 'ddfdf', 'dfdfd', 'fsgsf', 'dfdfdf', 'dfsfsgf', 'fdfd', 'fdfdf'),
(2, 'abdifatah', '1221', '999', '', '', '', '', '', '', 'l1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
CREATE TABLE IF NOT EXISTS `student_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) NOT NULL,
  `sub_description` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `sub_description`) VALUES
(5, 'vb', 'it hus'),
(6, 'C#', 'It\'s programming language'),
(7, 'Math', 'It\'s logical subject'),
(8, 'Biology', 'it\'s science subject');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `joined_year` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `hire_date` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `qualification`, `email`, `phone`, `joined_year`, `sub_name`, `hire_date`, `description`) VALUES
(3, 'mohamed', 'php', 'asad@gmail.com', '8888', '1/1/2019', 'programming', '1/2/2019', 'wa macalin fiican'),
(4, 'abdulakdir', 'BD', 'abdi@gmail.com', '9999', '1/1/1999', 'C#', '22/4/2019', 'he is good teacheer');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

DROP TABLE IF EXISTS `teacher_login`;
CREATE TABLE IF NOT EXISTS `teacher_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
