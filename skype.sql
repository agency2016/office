-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 07:46 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skype`
--
CREATE DATABASE IF NOT EXISTS `skype` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `skype`;

-- --------------------------------------------------------

--
-- Table structure for table `t_offices`
--

CREATE TABLE IF NOT EXISTS `t_offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `address` varchar(400) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ceo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t_offices`
--

INSERT INTO `t_offices` (`id`, `name`, `parent_id`, `location`, `address`, `email`, `phone`, `ceo`) VALUES
(1, 'PM office', 0, 'farmget', 'tejga,dhaka', 'email@yahoo.com', '123456', 'pm'),
(2, 'ict1', 1, 'ict1location', 'ict1address', 'ict1@yahoo.com', '123', 'ict1ceo'),
(3, 'ict2', 2, 'ict2location', 'ict2address', 'ict2@yahoo.com', '123456', 'ict2ceo'),
(4, 'ict3', 2, 'ict3location', 'ict3address', 'ict3@yahoo.com', '123456', 'ict3ceo'),
(5, 'ict4', 2, 'ict4location', 'ict4address', 'ict4@yahoo.com', '123456', 'ict4ceo'),
(6, 'ict5', 2, 'ict5location', 'ict5ddress', 'ict5@yahoo.com', '123456', 'ict5ceo'),
(7, 'ict7', 3, 'ict33location', 'ict7address', 'ict7@yahoo.com', '123456', 'ict7ceo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
