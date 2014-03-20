-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 03:46 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `club`
--
CREATE DATABASE IF NOT EXISTS `club` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `club`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `urfid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `utime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `urfid`, `uname`, `utime`) VALUES
(1, 15507890, 'Timmy Van Ness', '2014-03-14 01:19:15'),
(2, 20309298, 'Jiarong Jason Li', '2014-03-14 01:21:39'),
(3, 20302018, 'Amir Babaei', '2014-03-14 01:21:55'),
(4, 20125058, 'Luis A. Yataco', '2014-03-14 01:22:28'),
(5, 20123026, 'John Adney', '2014-03-14 01:22:48'),
(6, 20518514, 'Ian Ma', '2014-03-14 01:23:46'),
(7, 20265346, 'Peter Nouv', '2014-03-14 01:24:02'),
(8, 15241618, 'Robert Campbell', '2014-03-14 01:24:18'),
(9, 20303090, 'Colin Murray', '2014-03-14 01:24:32'),
(10, 20201218, 'Zhe Li', '2014-03-14 01:24:55'),
(11, 20722722, 'Barry Young', '2014-03-14 01:25:33'),
(12, 20500338, 'Bruce Krueger', '2014-03-14 01:26:21'),
(13, 20127042, 'David Dalcino', '2014-03-14 01:26:35'),
(14, 15409874, 'Ignasius Andre Gunadi', '2014-03-14 01:27:06'),
(15, 20225042, 'Alvin Ma', '2014-03-14 01:27:18'),
(16, 20339586, 'Raina Saunders', '2014-03-14 01:27:48'),
(17, 15454610, 'Jonathan Lowe', '2014-03-14 01:27:59'),
(18, 20156770, 'Carter Duong', '2014-03-14 01:28:12'),
(19, 15404034, 'Michael David', '2014-03-14 01:28:32'),
(20, 15507522, 'Tedo Pranowo', '2014-03-14 01:28:49'),
(21, 15506834, 'Billy Ismanto', '2014-03-14 01:29:03'),
(22, 20157394, 'Joy Clayton', '2014-03-14 01:29:16'),
(23, 20336402, 'Victor Leung', '2014-03-14 01:29:29'),
(24, 20339938, 'Maksim Ushkalov', '2014-03-14 01:29:46'),
(25, 20742834, 'Mitchell Moreno', '2014-03-14 01:29:59'),
(26, 20718258, 'ibrahim altaweel', '2014-03-14 01:30:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
