-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2013 at 03:06 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `affiliate`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliates_profile`
--

CREATE TABLE IF NOT EXISTS `affiliates_profile` (
  `aff_id` int(11) NOT NULL AUTO_INCREMENT,
  `aff_name` varchar(40) NOT NULL,
  `aff_add` varchar(40) NOT NULL,
  `aff_contact` int(11) NOT NULL,
  `aff_dob` datetime NOT NULL,
  `aff_email` varchar(100) NOT NULL,
  `aff_username` varchar(40) NOT NULL,
  `aff_password` varchar(40) NOT NULL,
  PRIMARY KEY (`aff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_promotions`
--

CREATE TABLE IF NOT EXISTS `affiliate_promotions` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `aff_id` int(11) NOT NULL,
  `aff_url` varchar(200) NOT NULL,
  `service_url` varchar(200) NOT NULL,
  PRIMARY KEY (`promotion_id`),
  UNIQUE KEY `aff_id` (`aff_id`,`aff_url`,`service_url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_promotion_status`
--

CREATE TABLE IF NOT EXISTS `affiliate_promotion_status` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `promote_date` datetime NOT NULL,
  `promote_time` time NOT NULL,
  `no_of_clicks` int(11) NOT NULL,
  `succesfull_sales` int(11) NOT NULL,
  `unuccessful_sales` int(11) NOT NULL,
  `commissions` int(11) NOT NULL,
  `real_ip_of_click` int(11) NOT NULL,
  `real_ip_of_sales` int(11) NOT NULL,
  `payment_system_of_sale` int(11) NOT NULL,
  PRIMARY KEY (`promotion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marchant_product`
--

CREATE TABLE IF NOT EXISTS `marchant_product` (
  `marchant_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_url` varchar(200) NOT NULL,
  `commision` float NOT NULL,
  `validity_starts` datetime NOT NULL,
  `validity_ends` datetime NOT NULL,
  `country_allowed` varchar(40) NOT NULL,
  `promotional_methods` varchar(40) NOT NULL,
  `is_active` int(11) NOT NULL,
  `banners` varchar(40) NOT NULL,
  PRIMARY KEY (`marchant_id`),
  UNIQUE KEY `service_url` (`service_url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marchant_profile`
--

CREATE TABLE IF NOT EXISTS `marchant_profile` (
  `marchant_id` int(11) NOT NULL AUTO_INCREMENT,
  `marchant_fname` varchar(40) NOT NULL,
  `marchant_add` varchar(100) NOT NULL,
  `marchant_contact` int(11) NOT NULL,
  `marchant_email` varchar(40) NOT NULL,
  `marchant_username` varchar(40) NOT NULL,
  `marchant_password` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(11) NOT NULL,
  `marchant_lname` varchar(100) NOT NULL,
  PRIMARY KEY (`marchant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `marchant_profile`
--

INSERT INTO `marchant_profile` (`marchant_id`, `marchant_fname`, `marchant_add`, `marchant_contact`, `marchant_email`, `marchant_username`, `marchant_password`, `company`, `website`, `address`, `country`, `city`, `state`, `zip`, `marchant_lname`) VALUES
(1, 'Rasel', '', 435345, 'rasel@localhost.com', 'rasel2k7', 12345, 'Beyond Technologies', 'http://www.beyondtechbd.com', 'sadfad', 'fs', 'fs', 'asdf', 23424, 'Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `super_admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `super_admin_email` varchar(40) NOT NULL,
  `super_admin_password` varchar(40) NOT NULL,
  PRIMARY KEY (`super_admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
