# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-03-16 18:25:08
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
  `isDeleted` varchar(1) DEFAULT '0' COMMENT '0: unDeleted, 1: Deleted',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (25,'admin','admin','admin','admin','admin','0'),(26,'hr','hr','hr','hr','hr','0');

#
# Structure for table "city_option"
#

DROP TABLE IF EXISTS `city_option`;
CREATE TABLE `city_option` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "city_option"
#

INSERT INTO `city_option` VALUES (1,'Bacolod'),(2,'Bago'),(3,'Sipalay'),(4,'Talisay'),(5,'Silay'),(6,'Manapla'),(7,'Victorias');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "company"
#

INSERT INTO `company` VALUES (8,'C1521194620','Villacar Transit','12300917481','We are a domestic transport company that existed for 10 decades already','torredale1014@gmail.com','Dale Torre','(+61) 234-567-890','(+61) 123-213-121','Billboard, Billboard','Domestic Transport','1','1');

#
# Structure for table "downloads"
#

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE `downloads` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(255) DEFAULT NULL,
  `uploadedFile` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "downloads"
#

INSERT INTO `downloads` VALUES (1,'Employee Contract123','1521185381.txt','0'),(2,'Client Contract','1520552679.pdf','0');

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
  `status` varchar(1) DEFAULT '0' COMMENT '0:login, 1:break, 2:break2, 3:lunch, 4:logout',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

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
  `username` varchar(12) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "employee"
#


#
# Structure for table "faq"
#

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer` text,
  `level` varchar(50) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "faq"
#


#
# Structure for table "hr"
#

DROP TABLE IF EXISTS `hr`;
CREATE TABLE `hr` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `jobFunctionId` char(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT '0' COMMENT '0: unDeleted, 1: Deleted',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "hr"
#

INSERT INTO `hr` VALUES (4,'hr','1','torredale1014@gmail.com','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
  `isApproved` varchar(2) DEFAULT '0' COMMENT '0:pending, 1:approved, -1:denied',
  `contactName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "job"
#

INSERT INTO `job` VALUES (7,'1521194437',1,2,'Bus Driver','Villacar Transit','12300917481','torredale1014@gmail.com','Manager','(+61) 234-567-890','6100','Talisay City Negros occidental','1-3 Years','We are looking for an experienced bus driver to drive our buses',NULL,'1','Dale TOrre');

#
# Structure for table "job_function"
#

DROP TABLE IF EXISTS `job_function`;
CREATE TABLE `job_function` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `title` text,
  `header` text,
  `description` text,
  `isDeleted` varchar(1) DEFAULT '0' COMMENT '0:no, 1:yes',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "job_function"
#

INSERT INTO `job_function` VALUES (1,'tran','Transportation','','Simplify your search for top transportation talent','Enter description here...\r\n123','0'),(2,'pro','Procurement',NULL,'Simplify your search for top procurement talent','Involves the process of selecting vendors, establishing payment terms, strategic vetting, selection, the negotiation of contracts and actual purchasing of goods. We are concerned with acquiring (procuring) all of the goods, services, and work that is vital to an organization. Procurement is, essentially, the overarching or umbrella term within which purchasing can be found\r\n','0'),(3,'sup','Supply Planning',NULL,'Simplify your search for top supply planning talent','Involve with determining how best to fulfill the requirements created from the Demand Plan. Our objective is to balance supply and demand in a manner that we achieve the financial and service objectives of the enterprise.\r\n','0'),(4,'log','Logistics',NULL,'Simplify your search for top logistics talent','We cover work performed in mechanical, physical, or components into new products. Assembling of component parts for manufactured products also falls under this umbrella unless the activity is appropriately classified in Construction.','0'),(5,'tra','Training Certification',NULL,'Simplify your search for top training certification talent','Gain a practical, how-to overview of the entire training function. Through modeling of the best practices and latest techniques in training delivery, discover the 4Ps of training: Purpose & Assessment, Planning & Preparation, Presentation & Facilitation, and Performance & Evaluation.\n','0'),(6,'dem','Demand Planning',NULL,'Simplify your search for top demand planning talent','A multi-step operational supply chain management (SCM) process used to create reliable\n      forecasts. We can quickly guide users to improve the accuracy of revenue forecasts, align\n      inventory levels with peaks and troughs in demands, and help enhance profitability for a\n      given channel or product.','0'),(7,'ord','Order Fulfilment','Transportation','Simplify your search for top order fulfillment talent','We facilitate customer orders through the order fulfillment cycle. In internal advocacy and voice for sales and customer needs\n','0'),(8,'man','Manufacturing','hello world','Simplify your search for top manufacturing talent','Enter description here...','0'),(9,'war','Warehousing','hello world','Simplify your search for top warehousing talent','Enter description here...\n','0');

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
# Structure for table "projects"
#

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `uploadedImage` varchar(50) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "projects"
#


#
# Structure for table "resume"
#

DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `jobFunctionId` int(11) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `refNum` varchar(25) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `birthdate` varchar(10) DEFAULT NULL,
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
  `uploadedCerts` varchar(255) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(2) DEFAULT '0' COMMENT '0:pending, 1:approved, -1:denied',
  `isHired` varchar(2) DEFAULT '0' COMMENT '0:no, 1:yes',
  `isDeleted` varchar(1) DEFAULT '0' COMMENT '0:no, 1:yes',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "resume"
#

INSERT INTO `resume` VALUES (18,7,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0','0');

#
# Structure for table "timesheet"
#

DROP TABLE IF EXISTS `timesheet`;
CREATE TABLE `timesheet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) DEFAULT NULL,
  `employee` varchar(15) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(2) DEFAULT '0' COMMENT '0:pending, 1:verified, 2:dispute, 3:approved',
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "timesheet"
#


#
# Structure for table "timesheet_dispute"
#

DROP TABLE IF EXISTS `timesheet_dispute`;
CREATE TABLE `timesheet_dispute` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `timesheetId` int(11) DEFAULT NULL,
  `reason` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "timesheet_dispute"
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (12,'C1521194620','temppassword','Dale Torre','Villacar Transit','company');
