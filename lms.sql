-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 06:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department_id` varchar(11) NOT NULL,
  `role` int(11) NOT NULL,
  `companyame` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `email`, `mobile`, `password`, `department_id`, `role`, `companyame`) VALUES
('hjkhjk kjhjkj', 'rd@gmail.com', 2147483647, 'Pass@3333', 'dep', 1, 'tcs'),
('Rishabh Verma', 'rd@gm.com', 2147483647, 'Pass@2222', 'dep', 1, 'tcs');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `employee_mail` varchar(1000) NOT NULL,
  `start_date` varchar(1000) NOT NULL,
  `end_date` varchar(1000) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`employee_mail`, `start_date`, `end_date`, `reason`, `status`) VALUES
('rd@gmail.com', '2020-12-09', '2020-12-11', 'none', 'accepted'),
('rd@gmail.com', '2020-12-16', '2020-12-18', 'none', 'rejected'),
('rd@gmail.com', '2020-12-22', '2020-12-25', 'Family Issues', 'pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
