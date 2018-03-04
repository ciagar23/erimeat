# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-03-04 18:38:59
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (15,'admin','admin','admin','admin','admin'),(16,'hr','hr','hr','hr','hr'),(17,'newHR','12345','new','hr','hr'),(18,NULL,NULL,'khkjh',NULL,NULL),(19,NULL,NULL,'khkjh',NULL,NULL);

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

INSERT INTO `company` VALUES (2,'','Ceres Inc','51 824 753 556','Ceres Transport, Incorporated is a bus company under the umbrella of Sonyan Group.','angela.bucks@ceres.com','Angela Bucks','(02) 5551 5678','(02) 7010 1111','Bacolod City','Domestic Transport','1','1'),(3,'','Villacar Transit','61 223 111 999','Ceres Transport, Incorporated is a bus company under the umbrella of Sonyan Group.','angela.bucks@ceres.com','Jack Daniel','(02) 5551 5678','(02) 7010 1111','Bacolod City','Cargo Transport','6','1'),(4,'','Publiq','12 244 123 888','Ceres Transport, Incorporated is a bus company under the umbrella of Sonyan Group.','angela.bucks@ceres.com','Coffee Beer','(02) 5551 5678','(02) 7010 1111','Bacolod City','Coffee Shop','2','1'),(5,'','Sleeptnot','12 778 128 091','Ceres Transport, Incorporated is a bus company under the umbrella of Sonyan Group.','angela.bucks@ceres.com','John Doe','(02) 5551 5678','(02) 7010 1111','Bacolod City','Coffee and Beer','3','1'),(6,'C123213123','esutek','34324324233','sample description at least 20 characters','fredowinz23@gmail.com','fred garcia','2345678901','2345678909','bredco, bredco','Sales','3','1'),(7,'C88888888888','Villacar Transit','88888888888','We are a domestic transport company','torredale1014@gmail.com','Dale Tore','7082245','0908224617','Bacolod City','Domestic Transport','1','1'),(8,'C99999999999','Tekinbox','99999999999','We are a web development company','torredale1014@gmail.com','Dale Torre','2345678909','09809090909','Bacolod City','Web Development','4','1');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "dtr"
#

INSERT INTO `dtr` VALUES (5,'torredale','19:56:09','20:13:34','19:56:12','19:56:13','19:56:15','19:56:14','2018-03-02','3'),(6,'torredale1014@gmail.com ','20:20:22',NULL,NULL,NULL,NULL,NULL,'2018-03-02','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "employee"
#

INSERT INTO `employee` VALUES (4,21,'8','2018-03-03 10:17:09'),(5,31,'13','2018-03-04 17:54:05'),(6,31,'1520159133','2018-03-04 18:25:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "interview_date"
#

INSERT INTO `interview_date` VALUES (1,'7','2018-03-03','13:00:00'),(2,'8','2018-03-03','13:00:00'),(3,'13','2018-03-05','01:59:00'),(4,'14','2018-03-06','13:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

#
# Data for table "job"
#

INSERT INTO `job` VALUES (21,'1520040011',1,2,'Truck Driver','hehehe','34324324233','torredale1014@gmail.com','Manager','1234554231','6100','bacolod city','5 years','we are looking for a truck driver to drive the truck.','2018-03-03 10:15:51','1','Dale Torre'),(22,'1520043334',1,1,'Driver','heheheh','34324324233','torredale1014@gmail.com','Manager','123456','6100','Bacolod City','5 years','We are hiring. Driver to drive a truck. Apply Now!','2018-03-03 10:15:34','1','Dale Torre'),(23,'1520135313',2,2,'aaaaa','adsfdf','12321321321','e@e.com','dfasdfsfd','12321312321','1234','sdflsadflkjaslfd','5 years','asfdsflkasdjflasfdsflkasdjflasfdsflkasdjfl','2018-03-04 11:48:32','0','hhehe'),(24,'1520150083',3,2,'Supervisor','esutek','32489324322','fredowinz23@gmail.com','Project Manager','2345678901','6100','bredco, bredco','1-2 years','We would like to have a supervisor','2018-03-04 15:59:33','1','fred garcia'),(25,'1520150108',3,2,'Supervisor','esutek','32489324322','fredowinz23@gmail.com','Project Manager','2345678901','6100','bredco, bredco','1-2 years','We would like to have a supervisor','2018-03-04 15:59:52','-','fred garcia'),(26,'1520151500',5,3,'sadfdsfsdf','sdfdsfsdfdsf','12312321321','a@a.com','sadfsfddsf','adsfsdfdsf','1231','asdfdsafsdf','1231','asdfdsafsdfasdfdsafsdfasdfdsafsdfasdfdsafsdf','2018-03-04 16:18:19','0','sadfsdfdsf'),(27,'1520151522',5,3,'sadfdsfsdf','sdfdsfsdfdsf','12312321321','a@a.com','sadfsfddsf','adsfsdfdsf','1231','asdfdsafsdf','1231','asdfdsafsdfasdfdsafsdfasdfdsafsdfasdfdsafsdf','2018-03-04 16:18:41','0','sadfsdfdsf'),(28,'1520155522',6,4,'Planner','torre','34324324233','torre@gmail.com','plaanner','12321312321','6122','hehehe','5-1','hehehehehehehehehehehehehehehe','2018-03-04 17:25:21','0','Dale Torre'),(29,'1520156238',8,2,'Manufacturer','Warey','34324324233','torre@gmail.com','Mansge','123213213213','6100','asdfdsfdsfdsfdsfds','5-6','asdfdsfdsfdsfdsfdsasdfdsfdsfdsfdsfdsasdfdsfdsfdsfdsfdsasdfdsfdsfdsfdsfds','2018-03-04 17:37:18','0','Dale Tore'),(30,'1520156394',1,4,'Truck Driver','Villacar Transit','88888888888','torredale1014@gmail.com','Manager','7082245','6100','Bacolod City','3-5 years','We are looking for a truck driver.','2018-03-04 17:39:53','0','Dale Torre'),(31,'1520156812',4,2,'Manager','Tekinbox','99999999999','torredale1014@gmail.com','Operations Manager','2345678909','6100','Bacolod City','3-5 years','We are lokking for a manager. Apply Now','2018-03-04 17:48:43','1','Dale Torre');

#
# Structure for table "job_function"
#

DROP TABLE IF EXISTS `job_function`;
CREATE TABLE `job_function` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "job_function"
#

INSERT INTO `job_function` VALUES (1,'Transportation'),(2,'Procurement'),(3,'Supply Planning'),(4,'Logistics'),(5,'Training Certification'),(6,'Demand Planning'),(7,'Order Fulfilment'),(8,'Manufacturing'),(9,'Warehousing');

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
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zipCode` varchar(20) DEFAULT NULL,
  `uploadedResume` varchar(100) DEFAULT NULL,
  `speedtest` varchar(100) DEFAULT NULL,
  `uploadedSpecs` varchar(100) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `isApproved` varchar(2) DEFAULT '0',
  `isHired` varchar(2) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "resume"
#

INSERT INTO `resume` VALUES (8,21,1,'Dale','Torre','torredale1014@gmail.com','2345678909','Billboard','Billboard','Bacolod','Negros Occidental','6100','1520043390.pdf',NULL,NULL,'2018-03-03 10:16:56','1','0'),(9,0,1,'sdfsdfdsf','asdfsdfdsf','a@a.com','123213123213','ahehehehe','adhehehe','heheheh','heheheh','1111','1520092668.txt','http://www.speedtest.net/result/7107573632',NULL,'2018-03-03 23:57:48','0','0'),(10,0,1,'sdfsdfdsafdsaf','asdfsdfds','a@a.com','123123213','sadfsdfdsfds','asdfsdfdsfsdf','asdf','asdf','1211','1520093253.txt','www.speedtest.com',NULL,'2018-03-04 00:07:33','0','0'),(11,0,2,'sadfsdfdsf','asdfdsfdsf','a@a.com','sdfsdf','asdfsdf','sdafsdf','sadfsdf','asdfdsf','2323','1520093339.txt','http://www.speedtest.net/result/7107573632','1520093339.txt','2018-03-04 00:08:59','0','0'),(12,0,3,'sadfsdfdsf','asdfdsf','a@a.com','sadfdsf','sadf','asdf','adsf','asdf','2323','1520093388.txt','http://www.speedtest.net/result/7107573632','1520093388.txt','2018-03-04 00:09:48','0','0'),(13,31,4,'Fred','Garcia','torredale1014@gmail.com','2345678909','Billboard','Billboard','Bacolod','Negros Occidental','6100','1520157008.txt','','','2018-03-04 17:52:16','1','0'),(14,31,1,'Sam','Sedayon','torredale1014@gmail.com','2345678909','Billboard','Billboard','Bacolod','Negros Occidental','6100','1520158768.txt','','','2018-03-04 18:25:37','1','1');

#
# Structure for table "thisinquiry"
#

DROP TABLE IF EXISTS `thisinquiry`;
CREATE TABLE `thisinquiry` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `workEmail` varchar(100) DEFAULT NULL,
  `jobFunctionId` varchar(11) DEFAULT NULL,
  `zipCode` varchar(4) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "thisinquiry"
#

INSERT INTO `thisinquiry` VALUES (1,'sdfsdf','asdfdsf','sdf','asdf','asdf','asdf','asdf'),(2,'khkjh',NULL,NULL,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (7,'C88888888888','12345','Dale Tore','Villacar Transit','company'),(8,'C99999999999','12345','Dale Torre','Tekinbox','company'),(9,'torredale101','temppassword','Fred','Garcia','employee'),(10,'1520158820','temppassword','Sam','Sedayon','employee'),(11,'1520158931','temppassword','Sam','Sedayon','employee'),(12,'1520159020','temppassword','Sam','Sedayon','employee'),(13,'1520159133','temppassword','Sam','Sedayon','employee');
