-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2016 at 05:51 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sics`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_name` varchar(30) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `user_id`, `password`) VALUES
('Atul Kumar', 'atul59904@gmail.com', '1122334455');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(20) NOT NULL,
  `s_lastname` varchar(20) NOT NULL,
  `s_father` varchar(20) NOT NULL,
  `s_course` varchar(20) NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_number` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_lastname`, `s_father`, `s_course`, `s_gender`, `s_email`, `s_number`) VALUES
(1, 'Abhilash ', 'Pathak', 'Vishnu Pathak', 'bca', 'Male', 'promadsir54@gamil.com', '2147483647'),
(3, 'Arun', 'Pratap', 'Jagdish', 'bca', 'Male', 'arunpratap079@gmail.com', '8858226472'),
(5, 'Navneet ', 'Sahu', 'Rajendra Sahu', 'bca', 'Male', 'navneetnrs14@gmail.com', '8948418183'),
(6, 'Ritesh', 'Kesharwani', 'Om Prakash', 'bca', 'Male', 'riteshckt16@gmail.com', '7897899454'),
(7, 'Niraj ', 'Rajpoot', 'Mr. LalaRam', 'bca', 'Male', 'nirajrajpootbca@gmail.com', '8853063962'),
(12, 'somesh', 'kunder', 'umesh kunder', 'bca', 'Male', 'someshkunder17apr@gmail.com', '7897677880'),
(13, 'dheerendra kumar', 'dwivedi', 'mr.suresh kumar', 'bca', 'Male', 'dheeru.karwi@gmail.com', '+917897656'),
(14, 'gyananjay', 'panday', 'ramnewaj panday', 'bca', 'Male', 'gyananjay.panday@gmail.com', '8518896330'),
(15, 'gyananjay', 'panday', 'ramnewaj panday', 'bca', 'Male', 'gyananjay.panday@gmail.com', '8518896330'),
(16, 'kuldeep', 'kumar', 'PRABHOODAYAL SAHU', 'bca', 'Male', 'kuldeepshivrampur8423@gmail.co', '9721270628'),
(17, 'Kuldeep', 'Sahu', 'shiv', 'bca', 'Male', 'kuldee@gmail.com', '4564456456');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(30) NOT NULL,
  `s_lastname` varchar(30) NOT NULL,
  `s_father` varchar(30) NOT NULL,
  `s_course` varchar(10) NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_number` varchar(10) NOT NULL,
  `s_image` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`s_id`, `s_name`, `s_lastname`, `s_father`, `s_course`, `s_gender`, `s_email`, `s_number`, `s_image`) VALUES
(1, 'Atul', 'Kumar', 'Kailash Prasad', 'bca', 'Male', 'atul@gmail.com', '9919773436', 'ranchhod.jpg'),
(10, 'Uttam', 'Soni', 'Surash Soni', 'bca', 'Male', 'uttam.soni1510@gmail.com', '7024817042', 'ranchhod.jpg'),
(13, 'somesh', 'kunder', 'umesh kunder', 'Msc.(it)', 'Male', 'kundersomesh17apr@gmail.com', '7897677880', 'CHRYSA~0.JPG'),
(14, 'Ritesh', 'Kesharwani', 'Om Prakash', 'bca', 'Male', 'riteshckt16@gmail.com', '7897899454', 'Penguins.jpg'),
(15, 'ashish ', 'tiwari', 'ramesh tiwari', 'bca', 'Male', 'ashishtripathi9838@gmail.com', '9653213123', 'Jellyfish.jpg'),
(20, 'gyananjay', 'panday', 'ramnewaj panday', 'bca', 'Male', 'gyananjay.panday@gmail.com', '8518896330', 'Chrysanthemum.jpg'),
(21, 'Navneet ', 'kumar', 'Kailash Prasad', 'pgdca', 'Male', 'gyananjay.panday@gmail.com', '7897677880', 'Koala.jpg'),
(22, 'Navneet ', 'kumar', 'Kailash Prasad', 'pgdca', 'Male', 'gyananjay.panday@gmail.com', '7897677880', 'Koala.jpg'),
(23, 'Navneet ', 'kumar', 'Kailash Prasad', 'pgdca', 'Male', 'gyananjay.panday@gmail.com', '7897677880', 'Koala.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
