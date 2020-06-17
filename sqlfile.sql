/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - rtulabportal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rtulabportal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rtulabportal`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admins` */

insert  into `admins`(`admin_id`,`username`) values (2,'2014pietcsshriyansh@poornima.org');

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`),
  KEY `id` (`id`),
  CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cities` */

insert  into `cities`(`id`,`state_id`,`city_name`) values (1,1,'Jaipur'),(2,1,'Udaipur'),(3,2,'Tilak Nagar'),(4,2,'Darya Ganj');

/*Table structure for table `colleges` */

DROP TABLE IF EXISTS `colleges`;

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `colleges` */

insert  into `colleges`(`id`,`college_name`) values (1,'PCE'),(2,'PIET'),(3,'PGI'),(4,'PU');

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `college_id` (`college_id`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `departments` */

insert  into `departments`(`id`,`college_id`,`department_name`) values (1,1,'CSE'),(2,1,'ME'),(3,1,'EC'),(4,1,'EE'),(5,1,'IT'),(6,2,'EC'),(7,2,'EE'),(8,2,'CSE'),(9,3,'EC'),(10,3,'EE');

/*Table structure for table `labs` */

DROP TABLE IF EXISTS `labs`;

CREATE TABLE `labs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `labs` */

insert  into `labs`(`id`,`lab_name`) values (1,'c '),(2,'c++'),(3,'java '),(4,'php'),(5,'cgmt');

/*Table structure for table `newlabcreates` */

DROP TABLE IF EXISTS `newlabcreates`;

CREATE TABLE `newlabcreates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `lab_name` varchar(100) NOT NULL,
  `experiment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `newlabcreates` */

insert  into `newlabcreates`(`id`,`department`,`semester`,`lab_name`,`experiment`) values (1,'ce',1,'c','public\\department\\semesterquestion.xlsx'),(2,'civil',3,'workshop','public\\department\\semesterquestion.xlsx'),(3,'ec',3,'communication lab','public\\department\\semesterquestion.xlsx'),(4,'it',5,'DBMS Lab','public\\department\\semesterquestion.xlsx'),(5,'ee',4,'DLD lab','public\\department\\semesterquestion.xlsx'),(6,'me',4,'workshop Lab','public\\department\\semesterquestion.xlsx'),(7,'me',2,'dfgh','public\\department\\semesterquestion.xlsx');

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `states` */

insert  into `states`(`id`,`state_name`) values (1,'Rajasthan'),(2,'Delhi');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `studentname` varchar(40) NOT NULL,
  `studentemail` varchar(60) NOT NULL,
  `year` int(11) NOT NULL,
  `std_college` int(11) NOT NULL,
  `std_department` int(11) NOT NULL,
  `address` text NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `admin_id` (`admin_id`),
  KEY `studentemail` (`studentemail`),
  KEY `department` (`std_department`),
  KEY `college` (`std_college`),
  KEY `year` (`year`),
  KEY `state` (`state`),
  KEY `city` (`city`),
  CONSTRAINT `students_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_2` FOREIGN KEY (`std_college`) REFERENCES `colleges` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_3` FOREIGN KEY (`std_department`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_4` FOREIGN KEY (`city`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `students_ibfk_5` FOREIGN KEY (`state`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `students` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
