﻿# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-03-07 18:24:33
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (15,'admin','admin','admin','admin','admin'),(16,'hr','hr','hr','hr','hr'),(20,'payroll','payroll','payroll','payroll','payroll');

#
# Structure for table "company"
#

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `abn` varchar(50) DEFAULT NULL,
  `description` text,
  `email` varchar(100) DEFAULT NULL,
  `contactPerson` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `mobileNumber` varchar(100) DEFAULT NULL,
  `address` text,
  `department` varchar(100) DEFAULT NULL,
  `jobFunctionId` varchar(11) DEFAULT NULL,
  `isApproved` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "company"
#


#
# Structure for table "dtr"
#

DROP TABLE IF EXISTS `dtr`;
CREATE TABLE `dtr` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `timesheetId` int(11) DEFAULT '0',
  `owner` varchar(50) DEFAULT NULL,
  `checkIn` time DEFAULT NULL,
  `checkOut` time DEFAULT NULL,
  `breakOut` time DEFAULT NULL,
  `breakIn` time DEFAULT NULL,
  `breakOut2` time DEFAULT NULL,
  `breakIn2` time DEFAULT NULL,
  `lunchIn` time DEFAULT NULL,
  `lunchOut` time DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

#
# Data for table "dtr"
#

INSERT INTO `dtr` VALUES (7,0,'E1520175205','02:07:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(8,0,'E1520175205','02:07:04',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(9,0,'E1520175205','02:07:04',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(10,0,'E1520175205','02:07:30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(11,0,'E1520175205','02:07:33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(12,0,'E1520175205','02:07:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(13,0,'E1520175205','02:07:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(14,0,'E1520175205','02:07:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(15,0,'E1520175205','02:07:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(16,0,'E1520175205','02:07:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(17,0,'E1520175205','02:07:55',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(18,0,'E1520175205','02:07:55',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(19,0,'E1520175205','02:07:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(20,0,'E1520175205','02:07:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(21,0,'E1520175205','02:07:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(22,0,'E1520175205','02:07:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(23,0,'E1520175205','02:07:57',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(24,0,'E1520175205','02:07:57',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(25,0,'E1520175205','02:07:57',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(26,0,'E1520175205','02:07:58',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(27,0,'E1520175205','02:07:58',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(28,0,'E1520175205','02:07:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(29,0,'E1520175205','02:07:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(30,0,'E1520175205','02:07:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(31,0,'E1520175205','02:08:17',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(32,0,'E1520175205','02:08:19',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(33,0,'E1520175205','02:08:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(34,0,'E1520175205','02:08:24',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(35,0,'E1520175205','02:08:24',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(36,0,'E1520175205','02:08:25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(37,0,'E1520175205','02:08:26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(38,0,'E1520175205','02:08:26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(39,0,'E1520175205','02:08:27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(40,0,'E1520175205','02:08:37',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(41,0,'E1520175205','02:08:59',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(42,0,'E1520175205','02:09:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(43,0,'E1520175205','02:09:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(44,0,'E1520175205','02:09:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(45,0,'E1520175205','02:09:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(46,0,'E1520175205','02:09:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(47,0,'E8529123903','02:09:33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(48,0,'E8529123903','02:09:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(49,0,'E8529123903','02:09:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(50,0,'E8529123903','02:09:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(51,0,'E8529123903','02:09:37',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(52,0,'E8529123903','02:09:37',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(53,0,'E8529123903','02:09:37',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(54,0,'E8529123903','02:09:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(55,0,'E8529123903','02:09:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(56,0,'E8529123903','02:09:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(57,0,'E8529123903','02:09:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(58,0,'E8529123903','02:09:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(59,0,'E8529123903','02:09:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(60,0,'E8529123903','02:09:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(61,0,'E8529123903','02:09:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(62,0,'E8529123903','02:09:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(63,0,'E8529123903','02:09:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(64,0,'E8529123903','02:09:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(65,0,'E8529123903','02:09:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0'),(66,0,'E8529123903','02:09:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-03-05','0');

#
# Structure for table "employee"
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
# Structure for table "inquiries"
#

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE `inquiries` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `workEmail` varchar(100) DEFAULT NULL,
  `jobFunctionId` varchar(11) DEFAULT NULL,
  `zipCode` varchar(4) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "inquiries"
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "interview_date"
#

INSERT INTO `interview_date` VALUES (1,'1','2018-03-06','12:59:00'),(2,'','0000-00-00','00:00:00');

#
# Structure for table "job"
#

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `refNum` varchar(25) DEFAULT NULL,
  `jobFunctionId` int(11) DEFAULT NULL,
  `positionTypeId` int(11) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `abn` varchar(50) DEFAULT NULL,
  `workEmail` varchar(100) DEFAULT NULL,
  `jobTitle` varchar(100) DEFAULT NULL,
  `businessPhone` varchar(100) DEFAULT NULL,
  `zipCode` varchar(4) DEFAULT NULL,
  `address` text,
  `requiredExperience` varchar(100) DEFAULT NULL,
  `comment` text,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(1) DEFAULT '0',
  `contactName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "job"
#


#
# Structure for table "job_function"
#

DROP TABLE IF EXISTS `job_function`;
CREATE TABLE `job_function` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "job_function"
#

INSERT INTO `job_function` VALUES (1,'Transportation','0'),(2,'Procurement','0'),(3,'Supply Planning','0'),(4,'Logistics','0'),(5,'Training Certification','0'),(6,'Demand Planning','0'),(7,'Order Fulfilment','0'),(8,'Manufacturing','0'),(9,'Warehousing','0');

#
# Structure for table "position_type"
#

DROP TABLE IF EXISTS `position_type`;
CREATE TABLE `position_type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "position_type"
#

INSERT INTO `position_type` VALUES (1,'Temporary'),(2,'Full-time'),(3,'Project'),(4,'Part-time');

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
  `abn` varchar(11) DEFAULT NULL,
  `taxNumber` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zipCode` varchar(20) DEFAULT NULL,
  `coverLetter` text,
  `uploadedResume` varchar(100) DEFAULT NULL,
  `speedtest` varchar(100) DEFAULT NULL,
  `uploadedSpecs` varchar(100) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(2) DEFAULT '0',
  `isHired` varchar(2) DEFAULT '0',
  `isDeleted` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "resume"
#


#
# Structure for table "timesheet"
#

DROP TABLE IF EXISTS `timesheet`;
CREATE TABLE `timesheet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `employee` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(2) DEFAULT '0',
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "timesheet"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

