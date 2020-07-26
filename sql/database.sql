SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `admins` (
  `username` varchar(35) NOT NULL PRIMARY KEY,
  `password` varchar(60) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `blog` (
  `BlogID` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` Date NOT NULL,
  `Status` int NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `messages` (
  `ContactID` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Full Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone No` varchar(12) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `Status` int NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admins` VALUES('admin','$2y$10$/nqSUUZscwB5CNCYWug7Zu24UMKDUgALkYYyDqeQUf1CQW/IGpJGu');







