-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2018 at 03:41 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aditya`
--

-- --------------------------------------------------------

--
-- Table structure for table `prob`
--

DROP TABLE IF EXISTS `prob`;
CREATE TABLE IF NOT EXISTS `prob` (
  `disease` varchar(25) NOT NULL,
  `hospital` varchar(125) NOT NULL,
  `doctors` varchar(250) NOT NULL,
  `contact` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prob`
--

INSERT INTO `prob` (`disease`, `hospital`, `doctors`, `contact`) VALUES
('Heart Surgery', 'Apollo Health city,jubliee hills', 'DR.AGK Gokhale , Dr Vijay', '040 60601066'),
('Heart Surgery', 'Maxcure Hospital,secretariat road', 'Dr.Sathya, Dr Krishna Prasad', '040 4940 4940'),
('Cancer Treatment ', 'American oncology Institue', 'Dr Ravindra , Dr Sairaj kumar', '040 6719 9999'),
('Cancer Treatment', 'Omega Hospital', 'Dr ch vamsy, Dr Satya', '09160900045'),
('Skin Treatment', 'Kavya Skin Clinic', 'Dr.Prasanth , Dr.Nikhil', '9652318231'),
('Skin Treatment', 'Kavya Skin Clinic', 'Dr.Prasanth , Dr.Nikhil', '9652318231'),
('Skin Treatment', 'Novo care', 'Dr. A.Sukunath Reddy', '9752148956');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('Avinassh', 'secret', 'avinasshbharadhwaj@gmail.com'),
('Aditya', 'secret', 'aditya@gmail.com'),
('Admin', 'Admin@18', 'Admin@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
