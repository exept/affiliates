-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2013 at 02:57 AM
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
  `payment` varchar(11) NOT NULL,
  `website` varchar(11) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` int(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `zip` int(11) NOT NULL,
  `aff_lname` varchar(45) NOT NULL,
  `country` varchar(34) NOT NULL,
  PRIMARY KEY (`aff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `affiliates_profile`
--

INSERT INTO `affiliates_profile` (`aff_id`, `aff_name`, `aff_add`, `aff_contact`, `aff_dob`, `aff_email`, `aff_username`, `aff_password`, `payment`, `website`, `address`, `phone`, `city`, `state`, `zip`, `aff_lname`, `country`) VALUES
(1, 'Mr Affiliate', '', 123131, '0000-00-00 00:00:00', 'rasel@localhost.com', 'rasel2k7', '12345', 'paypal', 'http://www.', 'asdf', 0, 'fs', '', 2323423, 'Bari', 'fs');

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
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_url` varchar(200) NOT NULL,
  `commision` float NOT NULL,
  `validity_starts` datetime NOT NULL,
  `validity_ends` datetime NOT NULL,
  `country_allowed` varchar(40) NOT NULL,
  `promotional_methods` varchar(40) NOT NULL,
  `is_active` int(11) NOT NULL,
  `banners` varchar(40) NOT NULL,
  `product_description` text NOT NULL,
  `banner_name` varchar(100) NOT NULL,
  `banner_width` int(11) NOT NULL,
  `banner_height` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `service_url` (`service_url`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `marchant_product`
--

INSERT INTO `marchant_product` (`product_id`, `service_url`, `commision`, `validity_starts`, `validity_ends`, `country_allowed`, `promotional_methods`, `is_active`, `banners`, `product_description`, `banner_name`, `banner_width`, `banner_height`) VALUES
(1, 'http://silviomoreto.github.io/bootstrap-select/', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'USA', 'A', 1, 'banner.jpg', 'your affiliate program here. You should include things like a general description of your product, the commissions offered, the average sale amount, etc. Remember, you are trying to get affiliates to join your program', 'Test product 1', 0, 0),
(2, 'https://www.google.com.bd/', 32, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'USA', 'A', 0, 'bbbbbbbb', '        Describe your affiliate program here. You should include things like a general description of your product, the commissions offered, the average sale amount, etc. Remember, you are trying to get affiliates to join your program over the other quality programs on the ShareASale.com Network, so you should take some time to write this up - and make sure to include th', 'Test product 2', 0, 0),
(4, 'https://www.gsdfsdfoogle.com.bd/', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'USA', 'A', 1, '', '        adsf', 'Test product 3', 0, 0),
(5, 'https://www.gwerwrfwroogle.com.bd/', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'USA', 'A', 1, '', '        zxczxc', 'Test product 4', 0, 0),
(6, 'https://www.goowerwerwergle.com.bd/', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'USA', 'A', 1, '', '        xzxczczxczxc', 'Test product 6', 200, 300);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`super_admin_id`, `super_admin_email`, `super_admin_password`) VALUES
(1, 'rasel@admin.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
