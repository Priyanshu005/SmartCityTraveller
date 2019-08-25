/*
SQLyog Community v12.4.1 (32 bit)
MySQL - 5.6.17 : Database - smart_city_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smart_city_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `smart_city_db`;

/*Table structure for table `app_user_master` */

DROP TABLE IF EXISTS `app_user_master`;

CREATE TABLE `app_user_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` longtext NOT NULL,
  `otp` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `app_user_master` */

insert  into `app_user_master`(`id`,`first_name`,`last_name`,`mobile`,`email`,`password`,`gender`,`photo`,`otp`,`active`) values 
(1,'Nitin','Sachan','9839266656','nitin.deep2008@gmail.com','e10adc3949ba59abbe56e057f20f883e','male','','279626',1);

/*Table structure for table `categories_master` */

DROP TABLE IF EXISTS `categories_master`;

CREATE TABLE `categories_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `categories_master` */

insert  into `categories_master`(`id`,`category`) values 
(1,'Restaurants'),
(2,'Shoping Complex'),
(3,'Temple'),
(4,'Movie House'),
(5,'Mall'),
(6,'Park'),
(7,'science centre');

/*Table structure for table `city_master` */

DROP TABLE IF EXISTS `city_master`;

CREATE TABLE `city_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `city_master` */

insert  into `city_master`(`id`,`city_name`,`state_id`,`longitude`,`latitude`) values 
(1,'Kanpur',1,'80.351195','26.453855'),
(2,'Lucknow',1,'80.921929','26.831894'),
(3,'Bangalore',3,'77.550852','13.023823');

/*Table structure for table `location_master` */

DROP TABLE IF EXISTS `location_master`;

CREATE TABLE `location_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `location_master` */

insert  into `location_master`(`id`,`name`,`latitude`,`longitude`,`description`,`cat_id`) values 
(1,'J.K Temple','26.473579','80.305173','test',3),
(2,'Z Square','26.473262','80.352673','test 123',5),
(3,'Science City ,Lucknow','26.889482','80.940196','',7),
(4,'Ambedkar park, Lucknow','26.848572','80.975229','4321',6);

/*Table structure for table `photo_master` */

DROP TABLE IF EXISTS `photo_master`;

CREATE TABLE `photo_master` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `location_id` int(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `active` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `photo_master` */

/*Table structure for table `place_location_master` */

DROP TABLE IF EXISTS `place_location_master`;

CREATE TABLE `place_location_master` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `category_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `logitude` varchar(50) NOT NULL,
  `details` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `place_location_master` */

/*Table structure for table `state_master` */

DROP TABLE IF EXISTS `state_master`;

CREATE TABLE `state_master` (
  `id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `state_master` */

insert  into `state_master`(`id`,`state_name`) values 
(1,'Uttar Pradesh ( India )'),
(3,'Karnataka( India )');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
