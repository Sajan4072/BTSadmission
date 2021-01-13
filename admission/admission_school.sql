-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 10:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_school`
--

CREATE TABLE `admission_school` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook_account` varchar(255) NOT NULL,
  `check_computer` varchar(20) NOT NULL,
  `check_connection` varchar(20) DEFAULT NULL,
  `check_mobile` varchar(20) NOT NULL,
  `check_connectivity` varchar(20) DEFAULT NULL,
  `check_tv` varchar(20) NOT NULL,
  `check_cable` varchar(20) DEFAULT NULL,
  `check_radio` varchar(20) NOT NULL,
  `per_zone` varchar(100) NOT NULL,
  `per_province` varchar(100) NOT NULL,
  `per_district` varchar(100) NOT NULL,
  `per_municipality` varchar(100) NOT NULL,
  `per_wardno` varchar(100) NOT NULL,
  `temp_zone` varchar(100) NOT NULL,
  `temp_province` varchar(100) NOT NULL,
  `temp_district` varchar(100) NOT NULL,
  `temp_municipality` varchar(100) NOT NULL,
  `temp_wardno` varchar(10) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `father_contact` varchar(100) NOT NULL,
  `father_occupation` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `mother_contact` varchar(100) NOT NULL,
  `mother_occupation` varchar(200) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `guardian_contact` varchar(200) NOT NULL,
  `guardian_occupation` varchar(200) NOT NULL,
  `bro_sis_name1` varchar(200) DEFAULT NULL,
  `bro_sis_class1` varchar(200) DEFAULT NULL,
  `bro_sis_name2` varchar(200) DEFAULT NULL,
  `bro_sis_class2` varchar(200) DEFAULT NULL,
  `bro_sis_name3` varchar(200) DEFAULT NULL,
  `bro_sis_class3` varchar(200) DEFAULT NULL,
  `prev_school_details` longtext NOT NULL,
  `health_issues` longtext DEFAULT NULL,
  `prev_class_gradesheet` varchar(255) NOT NULL,
  `birth_certificate` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_school`
--
ALTER TABLE `admission_school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_school`
--
ALTER TABLE `admission_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
