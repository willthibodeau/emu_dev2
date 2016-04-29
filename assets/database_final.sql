-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg75.eigbox.net
-- Generation Time: Apr 28, 2016 at 02:22 PM
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
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_categoryName` varchar(60) NOT NULL,
  `cat_price` decimal(10,2) NOT NULL,
  `cat_discount` float NOT NULL,
  PRIMARY KEY (`cat_categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

-- 
-- Dumping data for table `categories`
-- 

INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES (57, 'kabobs', 500.00, 0.25);

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `com_commentID` int(11) NOT NULL AUTO_INCREMENT,
  `com_userID` int(11) NOT NULL,
  `com_commentText` text NOT NULL,
  PRIMARY KEY (`com_commentID`),
  KEY `fk_comments` (`com_userID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orders_orderID` int(11) NOT NULL AUTO_INCREMENT,
  `orders_userID` int(11) NOT NULL,
  `orders_categoryID` int(11) NOT NULL,
  `orders_quantity` int(3) NOT NULL,
  PRIMARY KEY (`orders_orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (43, 3, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (44, 3, 53, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (45, 2, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (46, 2, 53, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (47, 2, 54, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (48, 4, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (49, 5, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (50, 5, 52, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (51, 5, 53, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (52, 4, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (53, 4, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (54, 4, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (55, 4, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (56, 4, 52, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (57, 4, 53, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (58, 4, 55, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (59, 4, 54, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (60, 6, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (61, 4, 54, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (64, 1, 52, 1);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (65, 1, 55, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (66, 4, 54, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (67, 4, 56, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (68, 1, 53, 2);
INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (69, 1, 57, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (1, 57, '100', '10', 'Pork and Seafood Kabobs', 100.00, '../imageProcess/images/kabobs_100.jpg', 'kabobs');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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

INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES (1, 'adminGuest', '1d1d13dc7908f8a13abe325f3e269261722a565c', 'a', 'Administrator Guest', '', '', '');
INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES (2, 'memberGuest', 'e45026b7feb0793800d65b2b232bafc0b19fe553', 'm', 'Member Guest', '', '', '');
INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES (3, 'wtadmin', 'c630d316c8209829a6762e7882a2595e751a9935', 'a', 'Will Admin', '', '', '');
INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES (4, 'wtmem', 'cbafd2979f771552cee574b69c17f572e615927e', 'm', 'will Member', '', '', '');
INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES (12, 'Wt', '87da24e61de6d37312ad0dc1128d111400be5993', 'm', 'W', 'R', 'Will@will.com', '&#60;script&');

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

  GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO adminGuest@localhost
IDENTIFIED BY '1d1d13dc7908f8a13abe325f3e269261722a565c';


GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO memberGuest@localhost
IDENTIFIED BY 'e45026b7feb0793800d65b2b232bafc0b19fe553';