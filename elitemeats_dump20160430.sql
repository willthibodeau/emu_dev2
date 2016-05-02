-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg75.eigbox.net
-- Generation Time: Apr 30, 2016 at 07:17 PM
-- Server version: 5.5.43
-- PHP Version: 4.4.9
-- 
-- Database: `elitemeats_dev1`
-- 
CREATE DATABASE `elitemeats_dev1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elitemeats_dev1`;

-- --------------------------------------------------------

-- 
-- Table structure for table `categories`
-- 

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_categoryName` varchar(60) NOT NULL,
  `cat_price` decimal(10,2) NOT NULL,
  `cat_discount` float NOT NULL,
  PRIMARY KEY (`cat_categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

-- 
-- Dumping data for table `categories`
-- 

INSERT INTO `categories` VALUES (60, 'Jr. Steak Pack', 389.00, 10);
INSERT INTO `categories` VALUES (61, 'chicken', 299.00, 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `com_commentID` int(11) NOT NULL AUTO_INCREMENT,
  `com_userID` int(11) NOT NULL,
  `com_commentText` text NOT NULL,
  PRIMARY KEY (`com_commentID`),
  KEY `fk_comments` (`com_userID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- 
-- Dumping data for table `comments`
-- 

INSERT INTO `comments` VALUES (14, 4, 'new recipe');
INSERT INTO `comments` VALUES (15, 4, 'another recipe');
INSERT INTO `comments` VALUES (18, 3, 'asdfsdfa');
INSERT INTO `comments` VALUES (19, 3, 'sdfsg');
INSERT INTO `comments` VALUES (20, 4, 'zxcvzxcv');
INSERT INTO `comments` VALUES (21, 3, 'zcvv');
INSERT INTO `comments` VALUES (23, 1, ' ');
INSERT INTO `comments` VALUES (24, 1, 'some comments    ');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `orders_orderID` int(11) NOT NULL AUTO_INCREMENT,
  `orders_userID` int(11) NOT NULL,
  `orders_categoryID` int(11) NOT NULL,
  `orders_quantity` int(3) NOT NULL,
  PRIMARY KEY (`orders_orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` VALUES (43, 3, 52, 1);
INSERT INTO `orders` VALUES (44, 3, 53, 1);
INSERT INTO `orders` VALUES (45, 2, 52, 1);
INSERT INTO `orders` VALUES (46, 2, 53, 1);
INSERT INTO `orders` VALUES (47, 2, 54, 2);
INSERT INTO `orders` VALUES (48, 4, 52, 1);
INSERT INTO `orders` VALUES (49, 5, 52, 1);
INSERT INTO `orders` VALUES (50, 5, 52, 2);
INSERT INTO `orders` VALUES (51, 5, 53, 2);
INSERT INTO `orders` VALUES (52, 4, 52, 1);
INSERT INTO `orders` VALUES (53, 4, 52, 1);
INSERT INTO `orders` VALUES (54, 4, 52, 1);
INSERT INTO `orders` VALUES (55, 4, 52, 1);
INSERT INTO `orders` VALUES (56, 4, 52, 2);
INSERT INTO `orders` VALUES (57, 4, 53, 2);
INSERT INTO `orders` VALUES (58, 4, 55, 1);
INSERT INTO `orders` VALUES (59, 4, 54, 2);
INSERT INTO `orders` VALUES (60, 6, 52, 1);
INSERT INTO `orders` VALUES (61, 4, 54, 2);
INSERT INTO `orders` VALUES (64, 1, 52, 1);
INSERT INTO `orders` VALUES (65, 1, 55, 2);
INSERT INTO `orders` VALUES (66, 4, 54, 2);
INSERT INTO `orders` VALUES (67, 4, 56, 2);
INSERT INTO `orders` VALUES (68, 1, 53, 2);
INSERT INTO `orders` VALUES (69, 1, 57, 1);
INSERT INTO `orders` VALUES (70, 4, 57, 1);
INSERT INTO `orders` VALUES (71, 4, 59, 6);
INSERT INTO `orders` VALUES (72, 4, 60, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `prod_productID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_categoryID` int(11) NOT NULL,
  `prod_prodCode` varchar(60) NOT NULL,
  `prod_productQuantity` varchar(60) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `imagepath` text NOT NULL,
  `imagealt` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_productID`),
  KEY `prod_categoryID` (`prod_categoryID`),
  KEY `prod_productName` (`prod_productQuantity`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` VALUES (5, 60, '200', '4', 'T-Bone', 69.00, '../imageProcess/images/tbone_100.jpg', 'T-Bone Steak');
INSERT INTO `products` VALUES (7, 60, '200', '8', 'Fillet of Beef', 59.00, '../imageProcess/images/fillet_100.jpg', 'Fillet of Beef');
INSERT INTO `products` VALUES (8, 60, '200', '4', 'New York Steaks', 64.00, '../imageProcess/images/nystrip_100.jpg', 'New York Steaks');
INSERT INTO `products` VALUES (9, 60, '200', '6', 'Breakfast Steaks', 89.00, '../imageProcess/images/breakfast_100.jpg', 'Breakfast Steak');
INSERT INTO `products` VALUES (11, 60, '200', '12', 'Chopped Steaks', 49.00, '../imageProcess/images/chopped_100.jpg', 'Chopped Steak');
INSERT INTO `products` VALUES (12, 60, '200', '6', 'Beef Strip Steaks', 59.00, '../imageProcess/images/strip_100.jpg', 'Beef Strip');
INSERT INTO `products` VALUES (13, 61, '100', '6-8', 'plain breast', 49.00, '../imageProcess/images/chicken_100.jpg', 'Chicken');
INSERT INTO `products` VALUES (14, 61, '200', '6-8', 'herb &#38; garlic', 49.00, '../imageProcess/images/herb_100.jpg', 'herb garlic chicken');
INSERT INTO `products` VALUES (15, 61, '200', '6-8', 'Plum Teriyaki', 49.00, '../imageProcess/images/plumteriyaki_100.JPG', 'plum Teriyaki');
INSERT INTO `products` VALUES (16, 61, '200', '6-8', 'Italian', 49.00, '../imageProcess/images/Chickenparm_100.jpg', 'Italian');
INSERT INTO `products` VALUES (17, 61, '200', '6-8', 'Southwestern', 49.00, '../imageProcess/images/southwestern_100.jpg', 'Southwestern');
INSERT INTO `products` VALUES (18, 61, '200', '16-22', 'chicken tenders', 54.00, '../imageProcess/images/chicstrip_100.jpg', 'Chicken Tenders');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_userID` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(60) NOT NULL,
  `users_password` varchar(60) NOT NULL,
  `users_userLevel` varchar(2) NOT NULL,
  `users_firstName` varchar(60) NOT NULL,
  `users_lastName` varchar(60) NOT NULL,
  `users_email` varchar(60) NOT NULL,
  `users_phone` varchar(12) NOT NULL,
  PRIMARY KEY (`users_userID`),
  UNIQUE KEY `users_username` (`users_username`),
  KEY `users_username_2` (`users_username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'btadmin', '1d1d13dc7908f8a13abe325f3e269261722a565c', 'a', 'Brad admin', '', '', '');
INSERT INTO `users` VALUES (2, 'btmem', 'e45026b7feb0793800d65b2b232bafc0b19fe553', 'm', 'Brad member', '', '', '');
INSERT INTO `users` VALUES (3, 'wtadmin', 'c630d316c8209829a6762e7882a2595e751a9935', 'a', 'Will Admin', '', '', '');
INSERT INTO `users` VALUES (4, 'wtmem', 'cbafd2979f771552cee574b69c17f572e615927e', 'm', 'will Member', '', '', '');
INSERT INTO `users` VALUES (12, 'Wt', '87da24e61de6d37312ad0dc1128d111400be5993', 'm', 'W', 'R', 'Will@will.com', '&#60;script&');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `comments`
-- 
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments` FOREIGN KEY (`com_userID`) REFERENCES `users` (`users_userID`);

-- 
-- Constraints for table `products`
-- 
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`prod_categoryID`) REFERENCES `categories` (`cat_categoryID`);
