-- Database: `SchoolDB` --
-- Table `clubperson` --
CREATE TABLE `clubperson` (
  `clubPersonCount` int(11) NOT NULL AUTO_INCREMENT,
  `personId` varchar(30) DEFAULT NULL,
  `clubId` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`clubPersonCount`),
  KEY `personId` (`personId`),
  KEY `clubId` (`clubId`),
  KEY `personId_2` (`personId`),
  KEY `clubId_2` (`clubId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table `clubs` --
CREATE TABLE `clubs` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table `course` --
CREATE TABLE `course` (
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `course` (`courseCountId`, `courseCode`, `courseType`, `courseName`, `courseDept`, `courseRoom`, `teacherId`, `courseGrade`) VALUES
(5, 'G3C1', '1', 'english', 'English', 'room2', 'T3', 3),
(4, 'G1C1', '2', 'Maths01', 'Maths', 'room01', 'T1', 1),
(6, 'G1C2', '1', 'Science', 'Science', 'Room10', 'T4', 1),
(7, 'G2C1', '2', 'Maths', 'Maths', 'Room20', 'T5', 2),
(8, 'G3C2', '2', 'Maths2', 'Maths', 'Room21', 'T1', 3),
(9, 'G4C1', '1', 'Physics', 'Science', 'Room30', 'T1', 4),
(10, 'G5C1', '2', 'Biology', 'Science', 'Room25', 'T5', 5),
(11, 'G6C1', '1', 'Literature', 'English', 'Room2', 'T4', 6),
(12, 'G7C1', '2', 'Algebra', 'Maths', 'Room34', 'T3', 7),
(13, 'G8C1', '2', 'Science7', 'Science', 'Room2', 'T4', 8),
(14, 'G9C1', '1', 'physics9', 'Science', 'room200', 'T3', 9);

-- Table `courseproject` --
CREATE TABLE `courseproject` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table `dept` --
CREATE TABLE `dept` (
  `deptCountId` int(11) NOT NULL AUTO_INCREMENT,
  `deptId` varchar(30) DEFAULT NULL,
  `deptName` varchar(30) DEFAULT NULL,
  `deptDescription` varchar(255) DEFAULT NULL,
  `deptHead` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`deptCountId`),
  UNIQUE KEY `deptId` (`deptId`),
  KEY `deptHead` (`deptHead`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `dept` (`deptCountId`, `deptId`, `deptName`, `deptDescription`, `deptHead`) VALUES
(3, 'Dept01', 'Science', 'hello', 'T1'),
(4, 'Dept02', 'Maths', 'dept2', 'T2'),
(5, 'Dept3', 'English', 'english', 'T3');

-- Table `fee` --
CREATE TABLE `fee` (
  `feeCount` int(11) NOT NULL AUTO_INCREMENT,
  `g1PerCourse` bigint(20) DEFAULT NULL,
  `amountIncrease` bigint(20) DEFAULT NULL,
  `clubFee` bigint(20) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`feeCount`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `fee` (`feeCount`, `g1PerCourse`, `amountIncrease`, `clubFee`, `time`) VALUES
(9, , , 300, '2016-12-04 03:22:08'),
(8, 400, 50, , '2016-12-04 03:22:02');

-- Table `person` --
CREATE TABLE `person` (
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

INSERT INTO `person` (`personId`, `role`, `firstName`, `middleName`, `lastName`, `dob`, `gender`, `streetline1`, `streetline2`, `city`, `state`, `zip`, `phno`, `email`, `bloodGroup`, `allergy`) VALUES
('A01', 0, 'Moneka', '', 'Bommasani', '1993-10-20', 'F', 'Lindsay Rd', '#2', 'Clemson', 'SC', 29631, 8647223863, 'mbommas@g.clemson.edu', 'O+', 'None'),
('T5', 1, 'teacher', 'test', 'test', '1980-09-02', 'M', 'add', 'add', 'CLEMSON', 'South Carolina', 29631, 5867898689, 'teacher3@gmail.com', 'B+', ''),
('S3', 2, 'test', 'test', 'test', '1990-09-02', 'F', 'add', 'add', 'CLEMSON', 'South Carolina', 29631, 5867898689, 'email@gmail.com', 'B+', ''),
('T4', 1, 'teacher4', '', 'lname4', '1991-03-06', 'F', '403 Lindsay Road', 'Apt #2', 'Clemson', 'South Carolina', 29631, 1293874345, 'teacher3@gmail.com', 'B-', ''),
('T3', 1, 'teacher3', '', 'lname3', '1991-03-06', 'F', '403 Lindsay Road', 'Apt #2', 'Clemson', 'South Carolina', 29631, 1293874345, 'teacher3@gmail.com', 'B+', ''),
('MS1', 3, 'Anukul', 'Jai', 'Raj', '1980-09-08', 'M', 'River Banks', '#202', 'Clemson', 'SC', 29631, 123456789, 'araj@gmail.com', 'B+', 'Dust'),
('T2', 1, 'teacher2', '', 'lname2', '1991-03-06', 'F', '403 Lindsay Road', 'Apt #2', 'Clemson', 'South Carolina', 29631, 1293874345, 'teacher2@gmail.com', 'O+', ''),
('S2', 2, 'Shreyasee', '', 'Sharma', '1994-05-30', 'F', '403 Lindsay Road', 'Apt #2', 'Clemson', 'South Carolina', 29631, 92749573895, 'schatur@clemson.edu', 'AB+', 'Pineapple'),
('MS3', 3, 'testt', '', 'testlast', '1992-02-09', 'F', 'testadd', '#2', 'Clemson', 'sc', 29631, 5678908799, 'mail2@gmail.com', 'B+', 'None'),
('S1', 2, 'Sreyasi', '   ', 'Sharma', '1992-12-09', 'F', 'Tillman', '#23', 'Hyd', 'SC', 29384, 294749389, 'sharma@clemson.edu', 'B+', 'Pineapple'),
('T1', 1, 'Divya', '', 'Singh', '1991-03-06', 'F', '403 Lindsay Road', 'Apt #2', 'Clemson', 'South Carolina', 29631, 1293874345, 'divyas@g.clemson.edu', 'B+', ''),
('MS2', 3, 'staff', 'test', 'test', '1980-09-02', 'M', 'add', 'add', 'CLEMSON', 'South Carolina', 29631, 5867898689, 'email@gmail.com', 'B+', ''),
('S4', 2, 'student1', '', 'sharmaa', '1992-02-09', 'M', 'testadd', '#2', 'Clemson', 'sc', 29631, 637982902, 'email@gmail.com', 'O+', 'None'),
('T6', 1, 'teacher', '', 'sai', '1984-09-02', 'M', 'testadd', '#2', 'Clemson', 'sc', 29631, 6783932903, 'email@gmail.com', 'O+', 'None');

-- Table `projectmilestone` --
CREATE TABLE `projectmilestone` (
  `projectMilestoneId` int(11) NOT NULL AUTO_INCREMENT,
  `projectId` varchar(30) DEFAULT NULL,
  `milestoneId` varchar(30) DEFAULT NULL,
  `milestoneName` varchar(30) DEFAULT NULL,
  `milestoneDueDate` date DEFAULT NULL,
  PRIMARY KEY (`projectMilestoneId`),
  UNIQUE KEY `milestoneId` (`milestoneId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table `salary` --
CREATE TABLE `salary` (
  `salaryCount` int(11) NOT NULL AUTO_INCREMENT,
  `deptHead` bigint(20) DEFAULT NULL,
  `teacher` bigint(20) DEFAULT NULL,
  `staff` bigint(20) DEFAULT NULL,
  `stafffull` bigint(20) DEFAULT NULL,
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`salaryCount`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `salary` (`salaryCount`, `deptHead`, `teacher`, `staff`, `stafffull`, `stime`) VALUES
(6, 5000, 3000, , , '2016-12-04 03:22:33'),
(7, , , 800, 2000, '2016-12-04 03:22:50');

-- Table `staff` --
CREATE TABLE `staff` (
  `staffCount` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` varchar(30) DEFAULT NULL,
  `jobdesc` varchar(30) DEFAULT NULL,
  `jobType` varchar(30) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`staffCount`),
  KEY `staffId` (`staffId`),
  KEY `staffId_2` (`staffId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `staff` (`staffCount`, `staffId`, `jobdesc`, `jobType`, `notes`) VALUES
(1, 'staff58437b39733ba3.98713905', 'cleaning', '2', ''),
(2, 'staff5843d5897e4bf4.81020304', 'Janitor', '2', '');

-- Table `student` --
CREATE TABLE `student` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `student` (`studentcountId`, `studentId`, `studentClass`, `mother`, `father`, `notes`) VALUES
(4, 'student5843d5c32216d9.54999707', '7', 'maa', 'paa', ''),
(3, 'student58437aeacc6582.62224176', '4', 'mom', 'dad', '');

-- Table `studentcourse` --
CREATE TABLE `studentcourse` (
  `studentCourseCountId` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` varchar(30) DEFAULT NULL,
  `courseId` varchar(30) DEFAULT NULL,
  `finalGrade` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`studentCourseCountId`),
  KEY `studentId` (`studentId`),
  KEY `courseId` (`courseId`),
  KEY `studentId_2` (`studentId`),
  KEY `courseId_2` (`courseId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `studentcourse` (`studentCourseCountId`, `studentId`, `courseId`, `finalGrade`) VALUES
(1, 'S1', 'G1C1', 'A');

-- Table `studentstatus` --
CREATE TABLE `studentstatus` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Table `teacher` --
CREATE TABLE `teacher` (
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO `teacher` (`teachercountId`, `teacherId`, `teacherDept`, `notes`) VALUES
(21, 'T2', 'Dept3', ''),
(20, 'T1', 'Dept01', ''),
(22, 'T3', 'Dept02', ''),
(23, 'T4', 'Dept01', ''),
(24, 'teacher58437b1f1d2c05.32216701', 'Maths', ''),
(25, 'teacher5843d68ca416d7.85707497', 'English', '');

-- Table `userlogin` --
CREATE TABLE `userlogin` (
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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO `userlogin` (`loginId`, `personId`, `userId`, `password`) VALUES
(1, 'A01', 'Admin', 'Adminpass'),
(18, 'S3', 'student58437aeacc6582.62224176', '1f9Pg4UR'),
(17, 'T4', 'testteacher4', 'testteacherpass4'),
(16, 'T3', 'testteacher3', 'testteacherpass3'),
(15, 'T2', 'testteacher2', 'testteacherpass2'),
(14, 'MS1', 'teststaff1', 'teststaffpass1'),
(13, 'T1', 'testteacher1', 'testteacherpass1'),
(12, 'S1', 'teststudent1', 'teststudentpass1'),
(19, 'T5', 'teacher58437b1f1d2c05.32216701', '0zg4Hdj2'),
(20, 'MS2', 'staff58437b39733ba3.98713905', 'oXWPgCvi'),
(21, 'MS3', 'staff5843d5897e4bf4.81020304', 'cMWxgR1u'),
(22, 'S4', 'student5843d5c32216d9.54999707', '4WlU8Sey'),
(23, 'T6', 'teacher5843d68ca416d7.85707497', 'KWNjAUsm');

