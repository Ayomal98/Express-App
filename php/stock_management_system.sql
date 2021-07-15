-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2020 at 09:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL,
  `password` text NOT NULL,
  `account_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `ReceiptID` int(10) NOT NULL AUTO_INCREMENT,
  `Product` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `PaymentDate` date NOT NULL,
  PRIMARY KEY (`ReceiptID`)
) ENGINE=MyISAM AUTO_INCREMENT=457 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`ReceiptID`, `Product`, `price`, `PaymentDate`) VALUES
(123, 'coconut', 999, '2020-02-02'),
(234, 'Orange', 301, '2020-07-07'),
(456, 'Mango', 900, '2020-08-03'),
(111, 'chocolate', 600, '2020-09-04'),
(224, 'ice cream', 4000, '2020-02-03'),
(100, 'chocolate', 230, '2020-12-01'),
(444, 'Ora', 230, '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Product_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `Available_stock` int(10) NOT NULL,
  `Time_period` date NOT NULL,
  PRIMARY KEY (`Product_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=556 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_name`, `price`, `Available_stock`, `Time_period`) VALUES
(123, 'Orange', 230, 44, '2020-03-03'),
(333, 'Apple', 200, 200, '2020-01-21'),
(222, 'Mango', 100, 100, '2020-02-16'),
(444, 'coconut', 250, 10, '2020-02-27'),
(555, 'chocolate', 75, 11, '2020-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `ID` int(10) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `User_type` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `First_name`, `User_type`, `password`) VALUES
(111, 'Admin', 'admin', 'admin123'),
(2020, 'haruk123', 'user', '0'),
(2034, 'bawwa123', 'user', '0'),
(2023, 'apfdp123', 'user', '0'),
(2045, 'kajan123', 'user', '0'),
(427, 'Sherene', 'user', '4278'),
(789, 'Devshan', 'user', '2345'),
(456, 'Nuwan', 'user', '9090'),
(988, 'Harukshan', 'user', '789');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(40) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1235 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `First_name`, `Last_name`, `password`) VALUES
(1234, 'Ayomal', 'Praveen', '1234'),
(123, 'Hiruna', 'Keshara', '234');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier_name` varchar(40) NOT NULL,
  `Supplier_email` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Supplier_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1235 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Supplier_name`, `Supplier_email`, `Status`) VALUES
(3, 'Kamal', 'kamal@gmail.com', 1),
(2, 'Amal', 'amal@ymail.com', 1),
(1, 'Sunil', 'sunil@gmail.com', 1),
(4, 'Pandu', 'pandu@outlook.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
