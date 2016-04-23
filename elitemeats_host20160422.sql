-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg75.eigbox.net
-- Generation Time: Apr 22, 2016 at 11:38 PM
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

CREATE TABLE `categories` (
  `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_categoryName` varchar(60) NOT NULL,
  `cat_price` decimal(8,2) NOT NULL,
  `cat_discount` float NOT NULL,
  PRIMARY KEY (`cat_categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

-- 
-- Dumping data for table `categories`
-- 

INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES (30, 'Jr. Steak Pack', 389.00, 0);
INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES (31, 'Big Boy Pack', 429.00, 0);
INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES (51, 'Fish', 299.00, 0);
INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES (56, 'chicken', 100.00, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

CREATE TABLE `comments` (
  `com_commentID` int(11) NOT NULL AUTO_INCREMENT,
  `com_userID` int(11) NOT NULL,
  `com_commentText` text NOT NULL,
  PRIMARY KEY (`com_commentID`),
  KEY `fk_comments` (`com_userID`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

-- 
-- Dumping data for table `comments`
-- 

INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES (48, 2, 'this is brads comments');
INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES (56, 2, 'ccghncbvn');
INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES (57, 2, 'cbvncvbnfdj');
INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES (60, 2, 'THis is a test only a test');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `orders_orderID` int(11) NOT NULL,
  `orders_userID` int(11) NOT NULL,
  `orders_categoryID` int(11) NOT NULL,
  `orders_quantity` int(3) NOT NULL,
  PRIMARY KEY (`orders_orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES (0, 4, 25, 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (27, 30, '200', '4', 'T-Bone', 69.00, '../imageProcess/images/tbone_100.png', 'T-Bone');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (28, 30, '200', '6', 'Beef Strip Steaks', 59.50, '../imageProcess/images/steak_100.jpg', 'Strip Steak');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (29, 30, '200', '8', 'Fillet of Beef', 59.00, '../imageProcess/images/BaconWrappedFilet_100.jpg', 'Fillet of Beef');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (30, 30, '200', '4', 'New York Steaks', 64.00, '../imageProcess/images/NewYorkStrip_100.jpg', 'New York Steaks');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (31, 30, '200', '6', 'Breakfast Steaks', 89.00, '../imageProcess/images/breakfastSteak_100.jpg', 'Breakfast Steak');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (32, 30, '200', '12', 'Chopped Steaks', 49.00, '../imageProcess/images/baconCheeseBurger_100.jpg', 'Chopped Steak');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (33, 31, '200', '4', 'T-Bone', 79.00, '../imageProcess/images/tbone_100.png', 'T-Bone');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (34, 31, '200', '8', 'Choice Peppercorn', 69.00, '../imageProcess/images/pepperCorn_100.jpg', 'Peppercorn Steak');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (35, 31, '200', '4', 'Choice Ribeyes', 79.00, '../imageProcess/images/ribeye_100.jpg', 'Choice Ribeye Steaks');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (36, 31, '200', '6', 'Beef Strip Steaks', 61.00, '../imageProcess/images/NewYorkStrip_100.jpg', 'Strip Steak');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (37, 31, '200', '8', 'Fillet of Beef', 89.00, '../imageProcess/images/BaconWrappedFilet_100.jpg', 'Fillet of Beef');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (38, 31, '200', '8', 'Ground Beef Steaks', 52.00, '../imageProcess/images/baconCheeseBurger_100.jpg', 'Ground Beef Steaks');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (39, 31, '100', '8', 'Steak', 79.00, '../imageProcess/images/BakedPorkChops_100.jpg', 'Chops');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (45, 51, 'A2', '5', 'Seafood basket', 199.00, '../imageProcess/images/images_100.jpg', 'Seafood ');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (47, 56, '100', '5', 'chicken legs', 0.00, '../imageProcess/images/chicken_100.jpg', 'chicken legs');
INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES (48, 56, '100', '3', 'Chicken Barbeque', 29.99, '../imageProcess/images/barbecueChicken_100.jpg', 'buba chicken');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `users_userID` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(60) NOT NULL,
  `users_firstName` varchar(60) NOT NULL,
  `users_lastName` varchar(60) NOT NULL,
  `users_password` varchar(60) NOT NULL,
  `users_email` varchar(60) NOT NULL,
  `users_phone` varchar(12) NOT NULL,
  `users_userLevel` varchar(2) NOT NULL,
  PRIMARY KEY (`users_userID`),
  UNIQUE KEY `users_username` (`users_username`),
  KEY `users_username_2` (`users_username`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (1, 'btadmin', 'Brad Admin', 'Thibodeau', '1d1d13dc7908f8a13abe325f3e269261722a565c', 'brad@elitemeatsutah.com', '888.555.1212', 'a');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (2, 'btmem', 'Brad Member', 'Thibodeau', 'e45026b7feb0793800d65b2b232bafc0b19fe553', 'brad@elitemeatsutah.com', '888.555.1212', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (3, 'wtadmin', 'Will Admin', 'Thiodeau', 'c630d316c8209829a6762e7882a2595e751a9935', 'Will@will.com', '888.555.1212', 'a');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (4, 'wtmem', 'Will Member', 'Thibodeau', 'cbafd2979f771552cee574b69c17f572e615927e', 'Will@will.com', '888.555.1212', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (38, 'wtadmin789', 'will', 'thi', 'c9cd68975fdb1a8fe4752db4e39375594eadac21', 'asmith@mactec.com', '999-999-9999', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (39, 'wtadmin456', 'will', 'thi', '70dca9bd93c55e3e84ddef7ec483036517c16abe', 'asmith@mactec.com', '999-999-9999', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (40, 'wtmem234', 'will', 'thi', '0384b8b6faad20ee68a420b51d19d6a7264688c8', 'asmith@mactec.com', '999-999-9999', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (41, 'wtmem345', 'will', 'thi', 'f82aae684192aaca9940d91b813f88bcf70dec69', 'asmith@mactec.com', '8885551212', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (42, 'wtmem456', 'will', 'thi', '6beb8e0a61c6c5c7b3e9c8922f403b8baf2dddeb', 'will@will.com', '999-999-9999', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (43, 'wtmem567', 'will', 'thi', '331919d8b295cab793ad25d0bc120a567adf7362', 'will@will.com', '999-999-9999', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (44, 'wtmem123', 'will', 'thi', '76d8912220fad1c7daeb19591fe0cc602ddc8146', 'will2@will.com', '999-999-9999', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (45, 'wtadmin7895', 'will', 'thi', 'a95084ddb164aa1f12991a576208b5bdf80b013c', 'asmith@mactec.com', '8885551212', 'm');
INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES (46, 'wtadmin78912', 'will', 'btmem', '0ecc95e1ad0523a9ce86712dd4533beffdc8a82c', 'asmith@mactec.com', '999-999-9999', 'm');

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
