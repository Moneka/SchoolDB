-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: mysql1.cs.clemson.edu
-- Generation Time: Dec 03, 2016 at 07:57 PM
-- Server version: 5.5.52-0ubuntu0.12.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SchoolDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubperson`
--

CREATE TABLE IF NOT EXISTS `clubperson` (
  `clubPersonCount` int(11) NOT NULL AUTO_INCREMENT,
  `personId` varchar(30) DEFAULT NULL,
  `clubId` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`clubPersonCount`),
  KEY `personId` (`personId`),
  KEY `clubId` (`clubId`),
  KEY `personId_2` (`personId`),
  KEY `clubId_2` (`clubId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `clubCount` int(11) NOT NULL AUTO_INCREMENT,
  `clubId` varchar(30) DEFAULT NULL,
  `clubName` varchar(30) DEFAULT NULL,
  `clubType` varchar(30) DEFAULT NULL,
  `clubLocation` varchar(30) DEFAULT NULL,
  `clubFee` varchar(30) DEFAULT NULL,
  `clubContact` varchar(30) DEFAULT NULL,
  `clubDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clubCount`),
  UNIQUE KEY `clubId` (`clubId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseCountId` int(11) NOT NULL AUTO_INCREMENT,
  `courseCode` varchar(30) DEFAULT NULL,
  `courseType` varchar(30) DEFAULT NULL,
  `courseName` varchar(30) DEFAULT NULL,
  `courseDept` varchar(30) DEFAULT NULL,
  `courseRoom` varchar(30) DEFAULT NULL,
  `teacherId` varchar(30) DEFAULT NULL,
  `courseGrade` int(11) DEFAULT NULL,
  PRIMARY KEY (`courseCountId`),
  UNIQUE KEY `courseCode` (`courseCode`),
  UNIQUE KEY `courseName` (`courseName`),
  KEY `teacherId` (`teacherId`),
  KEY `courseDept` (`courseDept`),
  KEY `teacherId_2` (`teacherId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `courseproject`
--

CREATE TABLE IF NOT EXISTS `courseproject` (
  `courseprojectId` int(11) NOT NULL AUTO_INCREMENT,
  `courseId` varchar(30) DEFAULT NULL,
  `projectId` varchar(30) DEFAULT NULL,
  `projectName` varchar(30) DEFAULT NULL,
  `projectDueDate` date DEFAULT NULL,
  PRIMARY KEY (`courseprojectId`),
  UNIQUE KEY `projectId_2` (`projectId`),
  KEY `courseId` (`courseId`),
  KEY `courseId_2` (`courseId`),
  KEY `projectId` (`projectId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `deptCountId` int(11) NOT NULL AUTO_INCREMENT,
  `deptId` varchar(30) DEFAULT NULL,
  `deptName` varchar(30) DEFAULT NULL,
  `deptDescription` varchar(255) DEFAULT NULL,
  `deptHead` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`deptCountId`),
  UNIQUE KEY `deptId` (`deptId`),
  KEY `deptHead` (`deptHead`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `feeCount` int(11) NOT NULL AUTO_INCREMENT,
  `g1PerCourse` bigint(20) DEFAULT NULL,
  `amountIncrease` bigint(20) DEFAULT NULL,
  `clubFee` bigint(20) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`feeCount`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `personId` varchar(30) NOT NULL,
  `role` int(11) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `middleName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `streetline1` varchar(30) DEFAULT NULL,
  `streetline2` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `phno` bigint(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `bloodGroup` varchar(30) DEFAULT NULL,
  `allergy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`personId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personId`, `role`, `firstName`, `middleName`, `lastName`, `dob`, `gender`, `streetline1`, `streetline2`, `city`, `state`, `zip`, `phno`, `email`, `bloodGroup`, `allergy`) VALUES
('A01', 0, 'Moneka', '', 'Bommasani', '1993-10-20', 'F', 'Lindsay Rd', '#2', 'Clemson', 'SC', 29631, 8647223863, 'mbommas@g.clemson.edu', 'O+', 'None'),
('S1', 2, 'Divya', NULL, 'Singh', '1991-03-06', 'F', '403 Lindsay Road', 'Apt #2', 'Clemson', 'South Carolina', 29631, 1293874345, 'divyas@g.clemson.edu', 'B+', NULL),
('T2', 1, 'dfghj', 'dfghj', 'fghj', '0886-06-05', 'F', 'fgh', 'fgh', 'fghj', 'fghj', 4567, 5678, 'fghj@cfgvhbjn', 'cfgvhb', 'gvbhnj'),
('T1', 1, 'teacher1', '', 'teacherlast', '1993-10-20', 'F', 'streettest1', '', 'clemson', 'sc', 29631, 1243688658, 'test@email', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectmilestone`
--

CREATE TABLE IF NOT EXISTS `projectmilestone` (
  `projectMilestoneId` int(11) NOT NULL AUTO_INCREMENT,
  `projectId` varchar(30) DEFAULT NULL,
  `milestoneId` varchar(30) DEFAULT NULL,
  `milestoneName` varchar(30) DEFAULT NULL,
  `milestoneDueDate` date DEFAULT NULL,
  PRIMARY KEY (`projectMilestoneId`),
  UNIQUE KEY `milestoneId` (`milestoneId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `salaryCount` int(11) NOT NULL AUTO_INCREMENT,
  `deptHead` bigint(20) DEFAULT NULL,
  `teacher` bigint(20) DEFAULT NULL,
  `staff` bigint(20) DEFAULT NULL,
  `stafffull` bigint(20) DEFAULT NULL,
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`salaryCount`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffCount` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` varchar(30) DEFAULT NULL,
  `jobdesc` varchar(30) DEFAULT NULL,
  `jobType` varchar(30) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`staffCount`),
  KEY `staffId` (`staffId`),
  KEY `staffId_2` (`staffId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentcountId` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` varchar(30) DEFAULT NULL,
  `studentClass` varchar(30) DEFAULT NULL,
  `mother` varchar(30) DEFAULT NULL,
  `father` varchar(30) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`studentcountId`),
  UNIQUE KEY `studentId_4` (`studentId`),
  KEY `studentId` (`studentId`),
  KEY `studentId_2` (`studentId`),
  KEY `studentId_3` (`studentId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE IF NOT EXISTS `studentcourse` (
  `studentCourseCountId` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` varchar(30) DEFAULT NULL,
  `courseId` varchar(30) DEFAULT NULL,
  `finalGrade` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`studentCourseCountId`),
  KEY `studentId` (`studentId`),
  KEY `courseId` (`courseId`),
  KEY `studentId_2` (`studentId`),
  KEY `courseId_2` (`courseId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentstatus`
--

CREATE TABLE IF NOT EXISTS `studentstatus` (
  `studentStatusId` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` varchar(30) DEFAULT NULL,
  `teacherId` varchar(30) DEFAULT NULL,
  `milestoneId` varchar(30) DEFAULT NULL,
  `milestoneStatus` char(1) DEFAULT NULL,
  PRIMARY KEY (`studentStatusId`),
  KEY `studentId` (`studentId`),
  KEY `teacherId` (`teacherId`),
  KEY `milestoneId` (`milestoneId`),
  KEY `studentId_2` (`studentId`),
  KEY `teacherId_2` (`teacherId`),
  KEY `milestoneId_2` (`milestoneId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teachercountId` int(11) NOT NULL AUTO_INCREMENT,
  `teacherId` varchar(30) DEFAULT NULL,
  `teacherDept` varchar(30) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teachercountId`),
  UNIQUE KEY `teacherId_4` (`teacherId`),
  KEY `teacherId` (`teacherId`),
  KEY `teacherDept` (`teacherDept`),
  KEY `teacherId_2` (`teacherId`),
  KEY `teacherDept_2` (`teacherDept`),
  KEY `teacherId_3` (`teacherId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teachercountId`, `teacherId`, `teacherDept`, `notes`) VALUES
(18, 'teacher58423e3018b218.32381113', 'Maths', ''),
(19, 'teacher58423f6ab56bc0.39009698', 'fghj', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `loginId` int(11) NOT NULL AUTO_INCREMENT,
  `personId` varchar(30) DEFAULT NULL,
  `userId` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`loginId`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `password_2` (`password`),
  UNIQUE KEY `userId` (`userId`),
  KEY `personId` (`personId`),
  KEY `personId_2` (`personId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`loginId`, `personId`, `userId`, `password`) VALUES
(1, 'A01', 'Admin', 'Adminpass');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
