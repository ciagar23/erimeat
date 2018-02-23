# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-02-23 22:59:24
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "application"
#

DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `coverLetter` text,
  `resume` varchar(255) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "application"
#

INSERT INTO `application` VALUES (1,0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1518622056.docx',0,'2018-02-14 23:27:36',NULL),(2,0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1518622064.xlsx',0,'2018-02-14 23:27:44',NULL);

#
# Structure for table "candidate"
#

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE `candidate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contactNumber` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "candidate"
#

INSERT INTO `candidate` VALUES (1,'1','honda@city.com','098765432112'),(2,'0','ba@bi.com','123456789009'),(3,'jackDaniel','jack@daniel.com','12345678909'),(4,'bibi','bi@bi.com','123456778909'),(5,'ehogirl','eho@girl.com','1234676');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "company"
#

INSERT INTO `company` VALUES (1,'0','publiq','publq','publiq@publiq.com','sam sedayon','09876543112','ramos billboard'),(2,'s','samiguel','samgiel','san@miguel.com','miguel','12345678909','bacolod'),(3,'b','bababol','bababol','ba@ba.com','bababe','1234567890','bacolo'),(4,'company','company','company','com@pany.com','123456','123456','bacolod');

#
# Structure for table "dtr"
#

DROP TABLE IF EXISTS `dtr`;
CREATE TABLE `dtr` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(255) DEFAULT NULL,
  `dtr_date` varchar(255) DEFAULT NULL,
  `checkIn` varchar(255) DEFAULT NULL,
  `breakOut` varchar(255) DEFAULT NULL,
  `breakIn` varchar(255) DEFAULT NULL,
  `checkOut` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "dtr"
#

INSERT INTO `dtr` VALUES (1,'dfdsf dgfd','2018-02-24','06:49:49am',NULL,NULL,NULL);

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
# Structure for table "experience"
#

DROP TABLE IF EXISTS `experience`;
CREATE TABLE `experience` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `start` varchar(100) DEFAULT NULL,
  `end` varchar(100) DEFAULT NULL,
  `description` text,
  `owner` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "experience"
#

INSERT INTO `experience` VALUES (1,'Web developer','Tekinbox Corporation','2015','2018','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','employee'),(2,'System Administrator','Ubiquity Global Services','2015','2018','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','employee');

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
  `comment` varchar(255) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(1) DEFAULT '0',
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

#
# Data for table "job"
#

INSERT INTO `job` VALUES (8,NULL,0,0,'yyoooooo','ooooooo','oooo','oooo','oooo','ooooo',NULL,'oooo','yyooo','2018-02-23 20:36:44','0','ooooo','ooooooo'),(9,NULL,0,0,'yyoooooo','ooooooo','oooo','oooo','oooo','ooooo',NULL,'oooo','yyooo','2018-02-23 20:37:43','0','ooooo','ooooooo'),(10,NULL,0,0,'yyoooooo','ooooooo','oooo','oooo','oooo','ooooo',NULL,'oooo','yyooo','2018-02-23 20:38:17','0','ooooo','ooooooo'),(11,NULL,0,0,'yyoooooo','ooooooo','oooo','oooo','oooo','ooooo',NULL,'oooo','yyooo','2018-02-23 20:38:57','0','ooooo','ooooooo'),(12,NULL,5,0,'yyoooooo','ooooooo','oooo','oooo','oooo','ooooo',NULL,'oooo','yyooo','2018-02-23 20:39:26','0','ooooo','ooooooo'),(13,NULL,3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:40:54','0','hkj','hkj'),(14,NULL,3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:42:27','0','hkj','hkj'),(15,NULL,3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:43:01','0','hkj','hkj'),(16,'1519389842',3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:44:02','0','hkj','hkj'),(17,'1519389893',3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:44:52','0','hkj','hkj'),(18,'1519389904',3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:45:03','0','hkj','hkj'),(19,'1519389925',3,1,'kjhkj','hkj','hkj','hkjhkjh','kjhkjh','kjh',NULL,'kjhkj','hkjh','2018-02-23 20:45:24','0','hkj','hkj'),(20,'J1519389960',1,1,'','','','','','',NULL,'','','2018-02-23 20:45:59','0','',''),(21,'J',1,1,'','','','','','',NULL,'','','2018-02-23 20:46:19','0','',''),(22,'J1519389992',1,1,'','','','','','',NULL,'','','2018-02-23 20:46:32','0','',''),(23,'1519390202',1,1,'hgihgiig','iugiugiu','iugiug','iugygyg','ytvfytvty','vytvyt',NULL,'vytvyt','vytvy','2018-02-23 20:50:02','0','giug','iugiug'),(24,'1519390847',1,1,'hgihgiig','iugiugiu','iugiug','iugygyg','ytvfytvty','vytvyt',NULL,'vytvyt','vytvy','2018-02-23 21:00:46','0','giug','iugiug'),(25,'1519390887',1,1,'hgihgiig','iugiugiu','iugiug','iugygyg','ytvfytvty','vytvyt',NULL,'vytvyt','vytvy','2018-02-23 21:01:27','0','giug','iugiug'),(26,'1519390999',1,1,'hgihgiig','iugiugiu','iugiug','iugygyg','ytvfytvty','vytvyt',NULL,'vytvyt','vytvy','2018-02-23 21:03:18','0','giug','iugiug'),(27,'1519391073',1,1,'jjj','yugu','oiuiou','iouoi','rdtrd','ccc',NULL,'deee','trdrtdtrd','2018-02-23 21:04:32','0','yfyufu','yufuf'),(28,'1519391157',1,1,'kjhkjh','kjhkjh','kjhkjh','kjhkjh','kjhjkh','kjhkjh','kjhkjhk','kjhg','yugfuyfu','2018-02-23 21:05:56','0','kjh','kjhkjhkj'),(29,'9391932',1,1,'yyyyyyyyyy','yy','hjih','iiuh','iuhiuh','iuhiuhiu','yyy','iuhiuhiuh','uhi','2018-02-23 21:18:51','0','y','yyy'),(30,'391954',1,1,'yyyyyyyyyy','yy','hjih','iiuh','iuhiuh','iuhiuhiu','yyy','iuhiuhiuh','uhi','2018-02-23 21:19:13','0','y','yyy');

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

INSERT INTO `job_function` VALUES (1,'Administrative and Office Support'),(2,'Finance and Accounting'),(3,'Legal'),(4,'Marketing and Creative'),(5,'technology');

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
  `owner` varchar(255) DEFAULT NULL,
  `uploadedResume` varchar(100) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "resume"
#

INSERT INTO `resume` VALUES (3,0,0,'u','u','u','u','u','u','u','u','u','sleepnot','1519050194.txt','2018-02-19 22:23:13'),(4,0,0,'u','u','u','u','u','u','u','u','u','sleepnot','1519050322.txt','2018-02-19 22:25:22'),(5,0,4,'u','u','u','u','u','u','u','u','u','sleepnot','1519050333.txt','2018-02-19 22:25:33'),(6,0,1,'dale','torre','dale.torre@tekinbox.com','1235','bacolod','baclod','city','state','6100','admin','1519050672.txt','2018-02-19 22:31:11');

#
# Structure for table "timesheet"
#

DROP TABLE IF EXISTS `timesheet`;
CREATE TABLE `timesheet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `owner` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `checkIn` time DEFAULT NULL,
  `breakOut` time DEFAULT NULL,
  `breakIn` time DEFAULT NULL,
  `checkOut` time DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "timesheet"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (15,'employer','12345','publiq','cafe','company'),(16,'empoyee','12345','dale','torre','employee');
