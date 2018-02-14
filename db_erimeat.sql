# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-02-14 23:29:09
# Generator: MySQL-Front 6.0  (Build 2.20)


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
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "application"
#

INSERT INTO `application` VALUES (1,0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1518622056.docx',0,'2018-02-14 23:27:36'),(2,0,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1518622064.xlsx',0,'2018-02-14 23:27:44');

#
# Structure for table "employee"
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "experience"
#

INSERT INTO `experience` VALUES (1,'Web developer','Tekinbox Corporation','2015','2018','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','employee'),(2,'System Administrator','Ubiquity Global Services','2015','2018','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','employee');

#
# Structure for table "job"
#

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobFunctionId` int(11) DEFAULT NULL,
  `positionTypeId` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `workEmail` varchar(100) DEFAULT NULL,
  `JobTitle` varchar(255) DEFAULT NULL,
  `businessPhone` varchar(100) DEFAULT NULL,
  `owner` varchar(10) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `address` text,
  `aboutMe` text,
  `linkdin` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'employee','123456','Winifredo','Garcia','employee','fredowinz23@gmail.com','099434597653','Brgy. sincang-airport, Bacolod City','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','fredowinz23','fredowinz23',NULL),(2,'employer','123456','pati ang iban ma islan','username','employer','dsfds@dsfds.com','dsfdsf','','','1212','2323',NULL),(3,'dsfdsf','324324','dfdsf','dgfd','fdgfdg',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
