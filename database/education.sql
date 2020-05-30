-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 07:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `sch_id` int(10) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `profile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sch_id` int(10) NOT NULL,
  `sch_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `medium` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `locality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sch_id`, `sch_name`, `address`, `contact_no`, `medium`, `description`, `image`, `locality`) VALUES
(101, 'Gyan Jyot Vidhyalaya', 'Gyan Jyot Vidhayalaya, opp. Dmart, Parvatgam, Surat', '9825152622', 'Gujarati', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Parvatgam'),
(102, 'Saraswati Vidhyalaya', 'Sarsvati Vidhyalaya, near gajera circle, katargam, surat', '9536789523', 'Gujarati', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Katargam'),
(103, 'Suman HIgh School', 'Suman High School, Nanpura, Surat', '9825653215', 'Hindi', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Nanpura'),
(104, 'Seventh-day Adventist', 'SDA school, Athwagate, Surat', '9625896523', 'English', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Athwagate'),
(105, 'Vivekanand Jain', 'VK jain, Udhna', '9857541589', 'Marathi', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Udhana'),
(106, 'New Model High School', 'new model high school, sachin', '8958654525', 'Telgu', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Sachin'),
(107, 'Al -Arab Madarsa', 'Al-Arab, Nanpura, Surat', '8596471269', 'Urdu', '\r\nEducation is considered essential for all. Materiality and spirituality are essential for our all-round development. Education is a unique investment for both present and future.\r\n\r\nIt is a matter of great grief that people are adopting indifferent attitudes towards education. Everyone understands that this is the responsibility of another person. We have not only sat down with a pledge to change this attitude, but have shown it by showing interest.', '', 'Nanpura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `sch_id` (`sch_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
