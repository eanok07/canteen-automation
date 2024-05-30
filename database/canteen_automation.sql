-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2021 at 05:31 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canteen_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `rdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `feedback`, `rdate`) VALUES
(1, 'cherry', 'ddddddd', '09-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `vdate` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `holder_name`, `account_name`, `cvv`, `vdate`, `rdate`) VALUES
(1, 'cherry', 'ggggg', '565764671245', '345', '4554656', '09-03-21'),
(2, 'cherry', 'ggggg', '565764671245', '345', '4554656', '09-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `update_food_snacks`
--

CREATE TABLE `update_food_snacks` (
  `id` int(11) NOT NULL,
  `f_type` varchar(50) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_food_snacks`
--

INSERT INTO `update_food_snacks` (`id`, `f_type`, `food_name`, `quantity`, `amount`, `photo`, `status`, `rdate`) VALUES
(1, 'Snacks', 'briyani', '92', '250', 'chicken rice.jpg', '0', 'Mon-Mar-2021'),
(2, 'Snacks', 'baji', '96', '5', 'frenchfries.jpg', '0', 'Mon-Mar-2021'),
(3, 'Snacks', 'burger', '96', '5', 'burger.jpg', '0', 'Mon-Mar-2021');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `f_type` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`id`, `username`, `f_type`, `food`, `quantity`, `amount`, `image`, `status`, `report`, `rdate`) VALUES
(1, 'cherry', 'Snacks', 'briyani', '4', '1000', 'chicken rice.jpg', '1', '0', '09-03-21'),
(2, 'cherry', 'Snacks', 'burger', '4', '20', 'burger.jpg', '0', '0', '09-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `address`, `contact`, `email`, `uname`, `password`, `rdate`) VALUES
(1, 'cherry', 'trichy', '9876543210', 'cherry@gmail.com', 'cherry', '1234', '05-03-21');
