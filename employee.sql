-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2015 at 05:23 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `employid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `companyname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `employid`, `email`, `phone`, `companyname`) VALUES
(18, 'Krishna', '1234krsh', 'krishna@gmail.com', 9876543210, 'Perform Manager'),
(19, 'Arun Dev', '4356dev', 'arun@dev.com', 2345678901, 'Perform App'),
(20, 'Shrikanth', '3456kanth', 'kanth@shri.com', 2341567890, 'Perform App'),
(21, 'Sudhanshu', '2315sudh', 'anshu@sudh.com', 7890123456, 'Perform App'),
(22, 'Abdulla Niyas', '9876niya', 'niyasm@gmail.com', 7890123456, 'Perform Web'),
(23, 'CJL Rogers', '52', 'rogers@yahoo.com', 9856412365, 'lbw'),
(24, 'DA Warner', '2', 'warner@rediff.com', 5874565213, 'lbw'),
(25, 'SPD Smith', '7', 'smith@fb.com', 8523652147, 'Facebook'),
(26, 'MJ Clarke', '10', 'clarke@google.com', 6541237892, 'Google'),
(27, 'AC Voges', '16', 'voges@cricinfo.com', 6541237893, 'Cricinfo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
