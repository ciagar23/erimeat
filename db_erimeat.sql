# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-02-27 15:52:25
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (15,'admin','admin','admin','admin','admin'),(16,'hr','hr','hr','hr','hr');

#
# Structure for table "company"
#

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `email` varchar(100) DEFAULT NULL,
  `contactPerson` varchar(100) DEFAULT NULL,
  `contactNumber` varchar(100) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "company"
#


#
# Structure for table "dtr"
#

DROP TABLE IF EXISTS `dtr`;
CREATE TABLE `dtr` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` varchar(50) DEFAULT NULL,
  `checkIn` time DEFAULT NULL,
  `checkOut` time DEFAULT NULL,
  `breakOut` time DEFAULT NULL,
  `breakIn` time DEFAULT NULL,
  `lunchIn` time DEFAULT NULL,
  `lunchOut` time DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "dtr"
#


#
# Structure for table "employee"
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `userId` varchar(100) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "employee"
#


#
# Structure for table "hr"
#

DROP TABLE IF EXISTS `hr`;
CREATE TABLE `hr` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `jobFunction` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hr"
#


#
# Structure for table "interview_date"
#

DROP TABLE IF EXISTS `interview_date`;
CREATE TABLE `interview_date` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `resumeId` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "interview_date"
#


#
# Structure for table "job"
#

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `refNum` varchar(25) DEFAULT NULL,
  `jobFunctionId` int(11) DEFAULT NULL,
  `positionTypeId` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `workEmail` varchar(100) DEFAULT NULL,
  `JobTitle` varchar(255) DEFAULT NULL,
  `businessPhone` varchar(100) DEFAULT NULL,
  `zipCode` varchar(20) DEFAULT NULL,
  `address` text,
  `requiredExperience` varchar(100) DEFAULT NULL,
  `comment` text,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(1) DEFAULT '0',
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "job"
#

INSERT INTO `job` VALUES (1,'1519715053',5,3,'Web Developer','Hyndrance','torredale1014@gmail.com','','7082245','6100','Bacolod City','5 years','We are looking for web developer. Apply now!','2018-02-27 15:06:13','1','Dale','Torre'),(2,'1519715129',1,3,'Team Leader','Hyndrance','torredale1014@gmail.com','','7082245','6100','Bacolod City','3 years','We are looking for a team leader. Apply now!','2018-02-27 15:06:58','1','Dale','Torre'),(3,'1519715365',4,2,'Marketing Assistant','Honda','torredale1014@gmail.com','Manager','4452321','6100','Bacolod City','5 years','We are looking for a marketing assistant. Apply now!','2018-02-27 15:09:24','0','Kevin','Sumalde');

#
# Structure for table "job_function"
#

DROP TABLE IF EXISTS `job_function`;
CREATE TABLE `job_function` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "job_function"
#

INSERT INTO `job_function` VALUES (1,'Administrative and Office Support'),(2,'Finance and Accounting'),(3,'Legal'),(4,'Marketing and Creative'),(5,'Technology');

#
# Structure for table "position_type"
#

DROP TABLE IF EXISTS `position_type`;
CREATE TABLE `position_type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "position_type"
#

INSERT INTO `position_type` VALUES (1,'Temporary'),(2,'Full-time'),(3,'Project');

#
# Structure for table "resume"
#

DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `jobFunctionId` int(11) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zipCode` varchar(20) DEFAULT NULL,
  `uploadedResume` varchar(100) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(2) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "resume"
#

INSERT INTO `resume` VALUES (1,0,5,'Mark','Mendoza','rgmak12@gmail.com','7084572','Mandalagan','Mandalagan','Bacolod','Negros Occidental','6100','1519715577.pdf','2018-02-27 15:12:56','0'),(2,1,5,'Dale','Torre','torredale1014@gmail.com','7084512','Billboard','Billboard','Bacolod','Negros Occidental','6100','1519715646.pdf','2018-02-27 15:14:05','0');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'C1519715053','temppassword','Dale','Torre','company'),(2,'C1519715129','temppassword','Dale','Torre','company');
