-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 06:19 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitemeats_dev1`
--
CREATE DATABASE IF NOT EXISTS `elitemeats_dev1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elitemeats_dev1`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_categoryID` int(11) NOT NULL,
  `cat_categoryName` varchar(60) NOT NULL,
  `cat_price` varchar(8) NOT NULL,
  `cat_discount` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `categories`:
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES
(60, 'Jr. Steak Pack', '389.00', 10),
(61, 'Chicken', '299.00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_commentID` int(11) NOT NULL,
  `com_userID` int(11) NOT NULL,
  `com_commentText` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `comments`:
--   `com_userID`
--       `users` -> `users_userID`
--

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES
(30, 4, 'The chicken package was a real good deal! Fresh, delicious and tender....'),
(34, 1, 'The Jr. Beef Package is full of tasty beef steaks that last a long time. Get this great deal while it lasts.'),
(35, 2, 'these are the reviews'),
(36, 2, 'These are my reviews');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orders_orderID` int(11) NOT NULL,
  `orders_userID` int(11) NOT NULL,
  `orders_categoryID` int(11) NOT NULL,
  `orders_quantity` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `orders`:
--

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES
(43, 3, 52, 1),
(44, 3, 53, 1),
(45, 2, 52, 1),
(46, 2, 53, 1),
(47, 2, 54, 2),
(48, 4, 52, 1),
(49, 5, 52, 1),
(50, 5, 52, 2),
(51, 5, 53, 2),
(52, 4, 52, 1),
(53, 4, 52, 1),
(54, 4, 52, 1),
(55, 4, 52, 1),
(56, 4, 52, 2),
(57, 4, 53, 2),
(58, 4, 55, 1),
(59, 4, 54, 2),
(60, 6, 52, 1),
(61, 4, 54, 2),
(64, 1, 52, 1),
(65, 1, 55, 2),
(66, 4, 54, 2),
(67, 4, 56, 2),
(68, 1, 53, 2),
(69, 1, 57, 1),
(70, 4, 57, 1),
(71, 4, 59, 6),
(72, 4, 60, 1),
(76, 2, 60, 1),
(77, 2, 61, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_productID` int(11) NOT NULL,
  `prod_categoryID` int(11) NOT NULL,
  `prod_prodCode` varchar(60) NOT NULL,
  `prod_productQuantity` varchar(60) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `imagepath` text NOT NULL,
  `imagealt` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `products`:
--   `prod_categoryID`
--       `categories` -> `cat_categoryID`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES
(5, 60, '200', '4', 'T-Bone', '69.00', '../imageProcess/images/tbone_100.jpg', 'T-Bone Steak'),
(7, 60, '200', '8', 'Fillet of Beef', '59.00', '../imageProcess/images/fillet_100.jpg', 'Fillet of Beef'),
(8, 60, '200', '4', 'New York Steaks', '64.00', '../imageProcess/images/nystrip_100.jpg', 'New York Steaks'),
(9, 60, '200', '6', 'Breakfast Steaks', '89.00', '../imageProcess/images/breakfast_100.jpg', 'Breakfast Steak'),
(11, 60, '200', '12', 'Chopped Steaks', '49.00', '../imageProcess/images/chopped_100.jpg', 'Chopped Steak'),
(12, 60, '200', '6', 'Beef Strip Steaks', '59.00', '../imageProcess/images/strip_100.jpg', 'Beef Strip'),
(13, 61, '100', '6-8', 'plain breast', '49.00', '../imageProcess/images/chicken_100.jpg', 'Chicken'),
(14, 61, '200', '6-8', 'herb &#38; garlic', '49.00', '../imageProcess/images/herb_100.jpg', 'herb garlic chicken'),
(15, 61, '200', '6-8', 'Plum Teriyaki', '49.00', '../imageProcess/images/plumteriyaki_100.JPG', 'plum Teriyaki'),
(16, 61, '200', '6-8', 'Italian', '49.00', '../imageProcess/images/Chickenparm_100.jpg', 'Italian'),
(17, 61, '200', '6-8', 'Southwestern', '49.00', '../imageProcess/images/southwestern_100.jpg', 'Southwestern'),
(18, 61, '200', '16-22', 'chicken tenders', '54.00', '../imageProcess/images/chicstrip_100.jpg', 'Chicken Tenders');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_userID` int(11) NOT NULL,
  `users_username` varchar(60) NOT NULL,
  `users_password` varchar(60) NOT NULL,
  `users_userLevel` varchar(2) NOT NULL,
  `users_firstName` varchar(60) NOT NULL,
  `users_lastName` varchar(60) NOT NULL,
  `users_email` varchar(60) NOT NULL,
  `users_phone` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES
(1, 'btadmin', '1d1d13dc7908f8a13abe325f3e269261722a565c', 'a', 'Brad admin', '', '', ''),
(2, 'btmem', 'e45026b7feb0793800d65b2b232bafc0b19fe553', 'm', 'Brad member', '', '', ''),
(3, 'wtadmin', 'c630d316c8209829a6762e7882a2595e751a9935', 'a', 'Will Admin', '', '', ''),
(4, 'wtmem', 'cbafd2979f771552cee574b69c17f572e615927e', 'm', 'will Member', '', '', ''),
(12, 'Wt', '87da24e61de6d37312ad0dc1128d111400be5993', 'm', 'W', 'R', 'Will@will.com', '&#60;script&');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_categoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_commentID`),
  ADD KEY `fk_comments` (`com_userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_productID`),
  ADD UNIQUE KEY `prod_description` (`prod_description`(255)),
  ADD KEY `prod_categoryID` (`prod_categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_orderID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
