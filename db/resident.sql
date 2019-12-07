-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 05:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resident`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'manage');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_person` varchar(100) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `email` varchar(25) NOT NULL,
`contact_id` int(11) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_person`, `contact_no`, `email`, `contact_id`, `msg`) VALUES
('pihu', 2147483647, 'abc@gmail.com', 3, 'hellooooooooooooo'),
('pihu', 2147483647, 'abc@123.com', 4, 'hello'),
('pijhu', 8999000, 'abc@123.com', 5, 'mzxnk,jx');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `contact` int(10) NOT NULL,
  `feedback` varchar(100) NOT NULL,
`id` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `contact`, `feedback`, `id`) VALUES
('xyz', 'abc@gmail.com', 89898989, 'hello', 1),
('abc', 'abc@gmail.com', 90900909, 'hiiiiiii', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
`bid` int(11) NOT NULL,
  `set_bid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`pid`, `uid`, `bid`, `set_bid`) VALUES
(2, 2, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
`pid` int(5) NOT NULL,
  `city` varchar(15) NOT NULL,
  `area` varchar(100) NOT NULL,
  `image` varchar(66) NOT NULL,
  `sqft` varchar(10) NOT NULL,
  `bhk` varchar(5) NOT NULL,
  `buy_rent` varchar(5) NOT NULL,
  `owner_contact` int(15) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rate` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `city`, `area`, `image`, `sqft`, `bhk`, `buy_rent`, `owner_contact`, `owner_name`, `type`, `rate`) VALUES
(1, 'jamnagar', 'Patel colony', 'apartment/1.jpg', '5000', '1', 'buy', 225566, 'bhavya', 'apartment', '50lakh'),
(2, 'jamnagar', 'Rameshwar nagar', 'tenament/2.jpg', '3000', '3 BHK', 'buy', 2147483647, 'priyanka', 'tenament', '55lakh'),
(3, 'Rajkot', 'JIvanvihar society', 'apartment/4.jpg', '2800', '2', 'buy', 774561782, 'Nensi', 'apartment', '25lakh'),
(4, 'Rajkot', 'Gandhigram shital park colony', 'apartment/5.jpg', '3500', '3', 'buy', 2147483647, 'mital', 'apartment', '45lakh'),
(5, 'Rajkot', 'Panchsheel society', 'tenament/6.jpg', '1500', '3', 'rent', 2147483647, 'Bhavik', 'tenament', '10000'),
(6, 'Surat', 'Adajan', 'apartment/7.jpg', '1500', '3', 'buy', 701922213, 'Khushali', 'Apartment', '20lakh'),
(7, 'Surat', 'Bhatar', 'apartment/13.jpg', '2600', '2', 'rent', 2147483647, 'Tushar', 'Apartment', '10,000'),
(8, 'Surat', 'Katargam', 'tenament/1.jpg', '4500', '3', 'buy', 2147483647, 'Sanjay', 'tenament', '20lakh'),
(9, 'Ahmedabad', 'Maninager', 'apartment/10.jpg', '1500', '3', 'buy', 77228895, 'Mayur', 'Apartment', '20lakh'),
(10, 'Ahemdabad', 'Navrangpura', 'tenament/4.jpg', '1600', '2', 'rent', 2556688, 'Preet', 'tenament', '8000'),
(11, 'Ahmedabad', 'Prhlad nager', 'apartment/12.jpg', '5600', '1', 'rent', 2147483647, 'Milan', 'apartment', '50,000'),
(12, 'Baroda', 'Rajratan society', 'apartment/13.jpg', '800', '2', 'buy', 2147483647, 'Krishna', 'Apartment', '16lakh'),
(13, 'Baroda', 'Mahavir colony', 'tenament/7.jpg', '1000', '3', 'rent', 94852172, 'Dhruv', 'tenament', '10,000'),
(14, 'Baroda', 'Vikaram colony', 'apartment/14.jpg', '3000', '1', 'buy', 2147483647, 'Yash', 'Apartment', '40lakh'),
(54, 'jamnagar', 'Patel colony', '', '2500', '2 BHK', 'Buy', 2147483647, 'uma', 'Tenament', '35 lakh');

-- --------------------------------------------------------

--
-- Table structure for table `set_alert`
--

CREATE TABLE IF NOT EXISTS `set_alert` (
  `max_prize` int(10) NOT NULL,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE IF NOT EXISTS `specification` (
`pid` int(11) NOT NULL,
  `facing` varchar(10) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `furnishing` varchar(50) NOT NULL,
  `water` varchar(30) NOT NULL,
  `img` varchar(25) NOT NULL,
  `dec` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`pid`, `facing`, `landmark`, `furnishing`, `water`, `img`, `dec`) VALUES
(1, 'West', 'It close A-one flower shop.', 'Unfurnished', '24 Hours Available', 'map/1.jpg', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(2, 'North', 'near the honda show room,vikas road', 'Furnished', '24 Hours Available', 'map/2.jpg', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(3, 'West', 'ownship close to Essar School and Air Force circle.', 'Furnished', '24 Hours Available', 'map/4.jpg', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(4, 'South', 'near the marwadi college.', 'Unfurnished', '24 Hours Available', 'map/5.jpg', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(5, 'West', 'Near the petrol pump.', 'Unfurnished', '24 Hours Available', '', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(6, 'North', 'Near the tapi river', 'Furnished', '24 Hours Available', 'map/7.jpg', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(7, 'South', 'Near', 'Furnishesd', '24 Hours Available', '', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(8, 'East', 'Near the tapi river', 'Unfurnished', '24 Hours Available', '', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(9, 'North', 'Near the natwralal marg', 'Unfurnished', '24 Hours Available', 'map/10.png', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(10, 'West', 'Near the hindu colony', 'Furnished', '24 Hours Available', 'map/11.png', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(11, 'West', 'Near the corpate rd', 'Unfurnished', '24 Hours Available', 'map/12.png', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(12, 'North', 'Rajendra shoppinf compelx', 'Furnished', '24 Hours Available', '', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(13, 'North', 'Near the sev mahakali restoranrt.', 'Furnished', '24 Hours Available', 'map/14.png', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(14, 'north', 'Near the railway officer colony', 'Unfurnished', '24 Hours Available', 'map/15.png', 'Newly built house for sale. Inside ravi park township with concrete roads inside the society. '),
(18, 'west', 'hiiiiiiiiiiiii', 'furnished', 'water available', '', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii'),
(54, 'east', 'abcd', 'furnished', 'water unavailable', '../user/img/.png', 'helllllllllllllllllllllllllllll');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(25) NOT NULL,
  `ucontact` int(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `add` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(8) NOT NULL,
`uid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `ucontact`, `gender`, `add`, `email`, `pswd`, `uid`) VALUES
('pihu', 2147483647, 'select', 'vmnvm', 'abc@123.com', '123', 1),
('pihu', 90801808, 'female', 'rameshwar', 'pihutrivedi@gmail.com', '6767', 2),
('xyz', 78687564, 'select', 'uyiuhjmnbm', 'abc@gmail.com', '456', 3),
('bhavya', 12345678, 'Female', 'indira society', 'bhavvu.jadav@gmail.com', 'bhavu123', 4),
('mital', 8, 'Female', 'patel park', 'mital@gmail.com', 'mital', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
 ADD PRIMARY KEY (`pid`,`owner_name`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
