-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 09:35 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignedproperty`
--

CREATE TABLE IF NOT EXISTS `assignedproperty` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` varchar(44) NOT NULL,
  `pid` varchar(44) NOT NULL,
  `brid` varchar(44) NOT NULL,
  `buid` varchar(44) NOT NULL DEFAULT '0',
  `status` varchar(44) NOT NULL DEFAULT 'Pending',
  `payment` varchar(44) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `assignedproperty`
--

INSERT INTO `assignedproperty` (`aid`, `oid`, `pid`, `brid`, `buid`, `status`, `payment`) VALUES
(1, '1', '1', '2', '2', 'Accepted', 'Payed'),
(2, '1', '3', '2', '0', 'Pending', 'Pending'),
(3, '2', '4', '3', '2', 'Accepted', 'Payed'),
(4, '2', '5', '3', '2', 'Pending', 'Payed'),
(5, '6', '6', '3', '2', 'Payed', 'Payed'),
(6, '7', '7', '6', '5', 'Payed', 'Payed'),
(7, '8', '8', '7', '6', 'Payed', 'Payed'),
(8, '9', '9', '2', '7', 'Payed', 'Payed');

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE IF NOT EXISTS `broker` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(44) NOT NULL,
  `lname` varchar(44) NOT NULL,
  `address` varchar(400) NOT NULL,
  `houno` varchar(44) NOT NULL,
  `city` varchar(44) NOT NULL,
  `dist` varchar(44) NOT NULL,
  `pin` varchar(44) NOT NULL,
  `phone` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`uid`, `fname`, `lname`, `address`, `houno`, `city`, `dist`, `pin`, `phone`, `email`) VALUES
(2, 'Ajay', 'Kumar', 'Ernakulam Kochi', '345', 'Kochi', 'Ernakulam', '657484', '9876546789', 'ajay@gmail.com'),
(3, 'saurav', 'anil', 'panayanchery(h)', '24', 'Kochi', 'Ernakulam', '683562', '6282173098', 'saurav@gmail.com'),
(5, 'br2', 'br2', 'address', '21/4172', 'Edappally', 'Ernakulam', '682021', '9454306819', 'br2@gmail.com'),
(6, 'broker1', 'last2', 'addressbroker', '24/2718', 'Edappally', 'Ernakulam', '682021', '9633070126', 'broker1@gmail.com'),
(7, 'broker2', 'last name2', 'address', '11/1111', 'Edappally', 'Ernakulam', '682024', '9961991555', 'broker2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(44) NOT NULL,
  `lname` varchar(44) NOT NULL,
  `address` varchar(400) NOT NULL,
  `houno` varchar(44) NOT NULL,
  `city` varchar(44) NOT NULL,
  `dist` varchar(44) NOT NULL,
  `pin` varchar(44) NOT NULL,
  `phone` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`uid`, `fname`, `lname`, `address`, `houno`, `city`, `dist`, `pin`, `phone`, `email`) VALUES
(2, 'Bibi', 'Krishna', 'Ernakulam Aluva', '5343', 'Aluva', 'Ernakulam', '675849', '8765457667', 'bibi@gmail.com'),
(4, 'bu1', 'bu1', 'adderssss', '11/1111', 'Edappally', 'Ernakulam', '682020', '9876343124', 'bu1@gmail.com'),
(5, 'buyer1', 'last3', 'addressbuyer', '34/1316B', 'c3', 'Kozhikode', '682024', '9697308175', 'buyer1@gmail.com'),
(6, 'buyer2', 'last name2', 'address', '21/4172', 'c3', 'Kozhikode', '682020', '9447468239', 'buyer2@gmail.com'),
(7, 'saurav', 'anil', 'house', '24/2718', 'Edappally', 'Ernakulam', '682024', '8281881781', 'saurav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category`) VALUES
(1, 'Villa'),
(2, 'Flat'),
(3, 'House'),
(4, 'Building'),
(5, 'Land'),
(6, 'Resort1111'),
(7, 'Test'),
(8, 'Test2');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE IF NOT EXISTS `creditcard` (
  `cardid` int(11) NOT NULL AUTO_INCREMENT,
  `cnumber` varchar(44) NOT NULL,
  `uid` varchar(44) NOT NULL,
  PRIMARY KEY (`cardid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`cardid`, `cnumber`, `uid`) VALUES
(2, '5435675645343565', '2'),
(3, '1234567987897897', '5'),
(4, '1234567987789734', '6'),
(5, '1789890872211111', '7');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(33) NOT NULL,
  `uname` varchar(33) NOT NULL,
  `psw` varchar(33) NOT NULL,
  `type` varchar(33) NOT NULL,
  `status` varchar(33) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uid`, `uname`, `psw`, `type`, `status`) VALUES
(1, '1', 'vishnu@gmail.com', 'vishnu123', 'owner', 'Approved'),
(2, '0', 'admin@gmail.com', 'admin123', 'admin', 'Approved'),
(3, '2', 'ajay@gmail.com', 'ajay123', 'broker', 'Approved'),
(4, '2', 'tom@gmail.com', 'tom123', 'owner', 'Approved'),
(6, '2', 'bibi@gmail.com', 'bibi123', 'buyer', 'Approved'),
(7, '3', 'saurav@gmail.com', '8281881781', 'broker', 'Approved'),
(8, '3', 'y@gmail.com', 'y', 'owner', 'Approved'),
(14, '5', 'jeril@gmail.com', 'jeril', 'owner', 'Approved'),
(16, '7', 'owner1@gmail.com', 'owner1', 'owner', 'Approved'),
(17, '6', 'broker1@gmail.com', 'broker1', 'broker', 'Approved'),
(18, '5', 'buyer1@gmail.com', 'buyer1', 'buyer', 'Approved'),
(19, '8', 'owner2@gmail.com', 'owner2', 'owner', 'Approved'),
(20, '6', 'buyer2@gmail.com', 'buyer2', 'buyer', 'Approved'),
(21, '7', 'broker2@gmail.com', 'broker2', 'broker', 'Approved'),
(22, '7', 'saurav@gmail.com', 'saurav123', 'buyer', 'Approved'),
(23, '9', 'sam@gmail.com', 'sam123', 'owner', 'Approved'),
(24, '10', 'aab1@gmail.com', 'aab1', 'owner', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(44) NOT NULL,
  `lname` varchar(44) NOT NULL,
  `address` varchar(400) NOT NULL,
  `houno` varchar(44) NOT NULL,
  `city` varchar(44) NOT NULL,
  `dist` varchar(44) NOT NULL,
  `phone` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`uid`, `fname`, `lname`, `address`, `houno`, `city`, `dist`, `phone`, `email`) VALUES
(1, 'Vishnu', 'B Kumar', 'Muthuvattoor, Guruvayur, Kerala 680101', '673', 'Guruvayur', 'Thrissur', '9876556774', 'vishnu@gmail.com'),
(2, 'Tom', 'Jose', 'Ernakulam Aluva', '4567', 'Aluva', 'Ernakulam', '8786543598', 'tom@gmail.com'),
(5, 'jeril', 'Yeldho', 'address', '11/1111', 'c3', 'Kozhikode', '9645306819', 'jeril@gmail.com'),
(7, 'owner1', 'Last1', 'addressowner', '24/2718', 'City1', 'dist1', '9495306819', 'owner1@gmail.com'),
(8, 'owner2', 'last name2', 'address', '24/2718', 'Edappally', 'Ernakulam', '9633070126', 'owner2@gmail.com'),
(9, 'sam', 'sunny', 'asd', '21/4172', 'kakkanad', 'Kozhikode', '8288117812', 'sam@gmail.com'),
(10, 'aab', 'aab', 'kjhjhkh', '23/123', 'aab', 'aab', '9446666', 'aab1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(44) DEFAULT NULL,
  `cat` varchar(44) NOT NULL,
  `pname` varchar(44) NOT NULL,
  `descripton` varchar(400) NOT NULL,
  `paddress` varchar(44) NOT NULL,
  `pdist` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `sqrft` varchar(44) NOT NULL,
  `bhk` varchar(44) NOT NULL,
  `img` longblob NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `uid`, `cat`, `pname`, `descripton`, `paddress`, `pdist`, `rate`, `sqrft`, `bhk`, `img`, `status`) VALUES
(1, '1', 'House', 'Build Own Golden Heights', 'A villa project located at aluva near rajagiri hospital. Its spread across 2.5 acres of land, 32 villas, and 25 amenities to offer you a lifestyle that is nothing short of quality and perfection!. We build all the amenities in advance. What makes us unique is our skills in customizing plans as per the clients require...', 'Sastha Ln, Kunnathery Thikavu, Aluva, Kerala', 'Ernakulam', '1.1 Cr', '2500', '4 BHK', 0x696d616765732f696e646976696475616c2d686f757365732d76696c6c61732e6a7067, 'Assigned'),
(2, '1', 'Flat', 'Uni Midtown', '3bhk fully furnished luxury flat..3 bedrooms air conditioned..All works including flooring,Plumbing and electrification done separately under expert guidance..Only led lights used..Wardrobes and kitchen accessories all good brands..Three bedrooms with beds with hydraulic lift facility..Full storage..Swimming pool and gym facility ', 'South Kalamassery, Kalamassery, Ernakulam, K', 'Ernakulam', '1.1 Cr', '1395', '3 BHK', 0x696d616765732f666c61742e6a7067, 'Pending'),
(4, '2', 'Villa', 'Orchid Villa', 'Interior details Bedrooms and bathrooms Bedrooms: 3 Bathrooms: 1 Flooring Flooring: Hardwood Heating Heating features: Forced air, Gas Cooling Cooling features: Other Appliances Appliances included: Range / Oven, Refrigerator Property details Parking Total spaces: 1 Parking features: Contact manager Lot Lot size: 7,971 sqft Construction details Type and style Home type: SingleFamily Material infor', 'addresss', 'Ernakulam', '1.2 crores', '18 cent', '4BHK', 0x696d616765732f696e646976696475616c2d686f757365732d76696c6c61732e6a7067, 'Assigned'),
(5, '2', 'Flat', 'Lotus House', 'Interior details Bedrooms and bathrooms Bedrooms: 3 Bathrooms: 1 Flooring Flooring: Hardwood Heating Heating features: Forced air, Gas Cooling Cooling features: Other Appliances Appliances included: Range / Oven, Refrigerator Property details Parking Total spaces: 1 Parking features: Contact manager Lot Lot size: 7,971 sqft Construction details Type and style Home type: SingleFamily Material infor', 'address', '', '1.2 crores', '14 cent', '3BHK', 0x696d616765732f666c61742e6a7067, 'Assigned'),
(6, '6', 'House', 'A House', 'Interior details Bedrooms and bathrooms Bedrooms: 3 Bathrooms: 1 Flooring Flooring: Hardwood Heating Heating features: Forced air, Gas Cooling Cooling features: Other Appliances Appliances included: Range / Oven, Refrigerator Property details Parking Total spaces: 1 Parking features: Contact manager Lot Lot size: 7,971 sqft Construction details Type and style Home type: SingleFamily Material infor', 'adressowner', 'Ernakulam', '1.2 crores', '14 cent', '3BHK', 0x696d616765732f696e646976696475616c2d686f757365732d76696c6c61732e6a7067, 'Assigned'),
(7, '7', 'Resort1111', 'B House', 'Interior details Bedrooms and bathrooms Bedrooms: 3 Bathrooms: 1 Flooring Flooring: Hardwood Heating Heating features: Forced air, Gas Cooling Cooling features: Other Appliances Appliances included: Range / Oven, Refrigerator Property details Parking Total spaces: 1 Parking features: Contact manager Lot Lot size: 7,971 sqft Construction details Type and style Home type: SingleFamily Material infor', 'resort address', 'Kozhikode', '1.5 crores', '18 cent', '4BHK', 0x696d616765732f666c61742e6a7067, 'Assigned'),
(8, '8', 'House', 'Small House', 'Interior details Bedrooms and bathrooms Bedrooms: 3 Bathrooms: 1 Flooring Flooring: Hardwood Heating Heating features: Forced air, Gas Cooling Cooling features: Other Appliances Appliances included: Range / Oven, Refrigerator Property details Parking Total spaces: 1 Parking features: Contact manager Lot Lot size: 7,971 sqft Construction details Type and style Home type: SingleFamily Material infor', 'address', 'Kozhikode', '1.5 crores', '14 cent', '3BHK', 0x696d616765732f696e646976696475616c2d686f757365732d76696c6c61732e6a7067, 'Assigned'),
(9, '9', 'Villa', 'aignTURE', 'Interior details Bedrooms and bathrooms Bedrooms: 3 Bathrooms: 1 Flooring Flooring: Hardwood Heating Heating features: Forced air, Gas Cooling Cooling features: Other Appliances Appliances included: Range / Oven, Refrigerator Property details Parking Total spaces: 1 Parking features: Contact manager Lot Lot size: 7,971 sqft Construction details Type and style Home type: SingleFamily Material infor', 'KOZHIKODE', 'Ernakulam', '1.2 crores', '14 cent', '4BHK', 0x696d616765732f696e646976696475616c2d686f757365732d76696c6c61732e6a7067, 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`uname`, `pwd`, `utype`, `status`) VALUES
('admin@gmail.com', 'admin', 'admin', '1'),
('ajay@gmail.com', 'ajay', 'user', '1'),
('vishnu@gmail.com', 'vishnu', 'user', '1'),
('admin@gmail.com', 'admin', 'admin', '1'),
('ajay@gmail.com', 'ajay', 'user', '1'),
('vishnu@gmail.com', 'vishnu', 'user', '1');
