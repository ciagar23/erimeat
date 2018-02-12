# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-02-13 01:52:48
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
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "application"
#


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
# Structure for table "job"
#

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `type` varchar(20) DEFAULT NULL,
  `owner` varchar(10) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "job"
#


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

INSERT INTO `user` VALUES (1,'','123456','','','employee','','','','','','',NULL),(2,'employer','123456','sample lang ni ya','user','employer','','','','','','',NULL),(3,'dsfdsf','324324','dfdsf','dgfd','fdgfdg',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
