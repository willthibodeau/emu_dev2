-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 05:47 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_categoryID` int(11) NOT NULL,
  `cat_categoryName` varchar(60) NOT NULL,
  `cat_price` decimal(8,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`) VALUES
(30, 'Jr. Steak Pack', '389.00'),
(31, 'Big Boy Pack', '429.00'),
(51, 'Fish', '299.00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_commentID` int(11) NOT NULL,
  `com_userID` int(11) NOT NULL,
  `com_commentText` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES
(48, 2, 'this is brads comments'),
(56, 2, 'ccghncbvn'),
(57, 2, 'cbvncvbnfdj'),
(60, 2, 'THis is a test only a test');

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
  `prod_date` datetime NOT NULL,
  `imagepath` text NOT NULL,
  `imagealt` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `prod_date`, `imagepath`, `imagealt`) VALUES
(27, 30, '200', '4', 'T-Bone', '69.00', '0000-00-00 00:00:00', '../imageProcess/images/tbone_100.png', 'T-Bone'),
(28, 30, '200', '6', 'Beef Strip Steaks', '59.50', '0000-00-00 00:00:00', '../imageProcess/images/steak_100.jpg', 'Strip Steak'),
(29, 30, '200', '8', 'Fillet of Beef', '59.00', '0000-00-00 00:00:00', '../imageProcess/images/BaconWrappedFilet_100.jpg', 'Fillet of Beef'),
(30, 30, '200', '4', 'New York Steaks', '64.00', '0000-00-00 00:00:00', '../imageProcess/images/NewYorkStrip_100.jpg', 'New York Steaks'),
(31, 30, '200', '6', 'Breakfast Steaks', '89.00', '0000-00-00 00:00:00', '../imageProcess/images/breakfastSteak_100.jpg', 'Breakfast Steak'),
(32, 30, '200', '12', 'Chopped Steaks', '49.00', '0000-00-00 00:00:00', '../imageProcess/images/baconCheeseBurger_100.jpg', 'Chopped Steak'),
(33, 31, '200', '4', 'T-Bone', '79.00', '0000-00-00 00:00:00', '../imageProcess/images/tbone_100.png', 'T-Bone'),
(34, 31, '200', '8', 'Choice Peppercorn', '69.00', '0000-00-00 00:00:00', '../imageProcess/images/pepperCorn_100.jpg', 'Peppercorn Steak'),
(35, 31, '200', '4', 'Choice Ribeyes', '79.00', '0000-00-00 00:00:00', '../imageProcess/images/ribeye_100.jpg', 'Choice Ribeye Steaks'),
(36, 31, '200', '6', 'Beef Strip Steaks', '61.00', '0000-00-00 00:00:00', '../imageProcess/images/NewYorkStrip_100.jpg', 'Strip Steak'),
(37, 31, '200', '8', 'Fillet of Beef', '89.00', '0000-00-00 00:00:00', '../imageProcess/images/BaconWrappedFilet_100.jpg', 'Fillet of Beef'),
(38, 31, '200', '8', 'Ground Beef Steaks', '52.00', '0000-00-00 00:00:00', '../imageProcess/images/baconCheeseBurger_100.jpg', 'Ground Beef Steaks'),
(39, 31, '100', '8', 'Steak', '79.00', '0000-00-00 00:00:00', '../imageProcess/images/BakedPorkChops_100.jpg', 'Chops'),
(45, 51, 'A2', '5', 'Seafood basket', '199.00', '0000-00-00 00:00:00', '../imageProcess/images/images_100.jpg', 'Seafood ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_userID` int(11) NOT NULL,
  `users_username` varchar(60) NOT NULL,
  `users_firstName` varchar(60) NOT NULL,
  `users_lastName` varchar(60) NOT NULL,
  `users_password` varchar(60) NOT NULL,
  `users_email` varchar(60) NOT NULL,
  `users_phone` varchar(12) NOT NULL,
  `users_userLevel` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES
(1, 'btadmin', 'Brad Admin', 'Thibodeau', '1d1d13dc7908f8a13abe325f3e269261722a565c', 'brad@elitemeatsutah.com', '888.555.1212', 'a'),
(2, 'btmem', 'Brad Member', 'Thibodeau', 'e45026b7feb0793800d65b2b232bafc0b19fe553', 'brad@elitemeatsutah.com', '888.555.1212', 'm'),
(3, 'wtadmin', 'Will Admin', 'Thiodeau', 'c630d316c8209829a6762e7882a2595e751a9935', 'Will@will.com', '888.555.1212', 'a'),
(4, 'wtmem', 'Will Member', 'Thibodeau', 'cbafd2979f771552cee574b69c17f572e615927e', 'Will@will.com', '888.555.1212', 'm'),
(38, 'wtadmin789', 'will', 'thi', 'c9cd68975fdb1a8fe4752db4e39375594eadac21', 'asmith@mactec.com', '999-999-9999', 'm'),
(39, 'wtadmin456', 'will', 'thi', '70dca9bd93c55e3e84ddef7ec483036517c16abe', 'asmith@mactec.com', '999-999-9999', 'm'),
(40, 'wtmem234', 'will', 'thi', '0384b8b6faad20ee68a420b51d19d6a7264688c8', 'asmith@mactec.com', '999-999-9999', 'm'),
(41, 'wtmem345', 'will', 'thi', 'f82aae684192aaca9940d91b813f88bcf70dec69', 'asmith@mactec.com', '8885551212', 'm'),
(42, 'wtmem456', 'will', 'thi', '6beb8e0a61c6c5c7b3e9c8922f403b8baf2dddeb', 'will@will.com', '999-999-9999', 'm'),
(43, 'wtmem567', 'will', 'thi', '331919d8b295cab793ad25d0bc120a567adf7362', 'will@will.com', '999-999-9999', 'm'),
(44, 'wtmem123', 'will', 'thi', '76d8912220fad1c7daeb19591fe0cc602ddc8146', 'will2@will.com', '999-999-9999', 'm'),
(45, 'wtadmin7895', 'will', 'thi', 'a95084ddb164aa1f12991a576208b5bdf80b013c', 'asmith@mactec.com', '8885551212', 'm'),
(46, 'wtadmin78912', 'will', 'btmem', '0ecc95e1ad0523a9ce86712dd4533beffdc8a82c', 'asmith@mactec.com', '999-999-9999', 'm');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_productID`),
  ADD KEY `prod_categoryID` (`prod_categoryID`),
  ADD KEY `prod_productName` (`prod_productQuantity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_userID`),
  ADD UNIQUE KEY `users_username` (`users_username`),
  ADD KEY `users_username_2` (`users_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
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
