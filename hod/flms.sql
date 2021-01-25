-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 10:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flms`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(10) NOT NULL,
  `name` char(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `branch` char(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `gender`, `branch`, `email`, `password`) VALUES
('DCR501', 'Meena', 'female', 'AUTO', 'meena@mes.ac.in', '$2y$10$yE4Y2ptdpNPICGtEnJ8K0.ZNL7lr6ZkldWsFKEHnzCSpR8vflS64S'),
('FD4000', 'Someone', 'male', 'COMPS', 'someone@mes.ac.in', '$2y$10$YKuX/fcbh4e.YqSjDaIIae2V2nGRlFPZY.1mOxl5zaHKoGuQ2N0Dq');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `faculty_id` varchar(10) NOT NULL,
  `name` char(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `branch` char(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`faculty_id`, `name`, `gender`, `branch`, `email`, `password`) VALUES
('CS0000', 'Vivek Vaishya', 'm', 'COMPS', 'vivek@mes.ac.in', 'thatsecretgirl');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` varchar(20) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `branch` char(10) NOT NULL,
  `category` char(15) NOT NULL,
  `days` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `startDate` char(10) NOT NULL,
  `substitute` varchar(25) NOT NULL,
  `status` char(15) NOT NULL,
  `date_update` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
