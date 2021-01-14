-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 04:51 AM
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
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(266) NOT NULL,
  `password` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` int(25) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `facebook` varchar(25) NOT NULL,
  `zone` varchar(25) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(25) NOT NULL,
  `municipality` varchar(20) NOT NULL,
  `wardno` varchar(20) NOT NULL,
  `zone1` varchar(20) NOT NULL,
  `province1` varchar(20) NOT NULL,
  `district1` varchar(20) NOT NULL,
  `municipality1` varchar(20) NOT NULL,
  `wardno1` int(11) NOT NULL,
  `pfirst` varchar(25) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mcontact` varchar(20) NOT NULL,
  `ocuupation1` varchar(20) NOT NULL,
  `gname` varchar(20) NOT NULL,
  `gcontact` varchar(20) NOT NULL,
  `goccupation` varchar(20) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `passed` int(11) NOT NULL,
  `GPA` float NOT NULL,
  `nepali` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `eph` int(11) NOT NULL,
  `elective` varchar(20) NOT NULL,
  `elective2` varchar(255) NOT NULL,
  `elective3` varchar(20) NOT NULL,
  `slcgrade` varchar(255) NOT NULL,
  `slccharacter` varchar(255) NOT NULL,
  `pp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `event` text NOT NULL,
  `date` date NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `faculty` varchar(25) DEFAULT NULL,
  `uniquecode` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'no',
  `class` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collegeresult`
--

CREATE TABLE `collegeresult` (
  `id` int(100) NOT NULL,
  `uniquecode` varchar(100) NOT NULL,
  `class` varchar(4000) NOT NULL,
  `faculty` varchar(4000) DEFAULT NULL,
  `roll` varchar(4000) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `marks` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college_resource`
--

CREATE TABLE `college_resource` (
  `id` int(15) NOT NULL,
  `pdf` varchar(400) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `management` varchar(100) NOT NULL,
  `posted_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college_teacher`
--

CREATE TABLE `college_teacher` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `id` int(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `uniquecode` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `faculty` varchar(12) DEFAULT NULL,
  `dob` date NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'no',
  `batch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engineeringadmission`
--

CREATE TABLE `engineeringadmission` (
  `id` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `municipality` varchar(20) NOT NULL,
  `wardno` int(11) NOT NULL,
  `zone1` varchar(20) NOT NULL,
  `province1` varchar(20) NOT NULL,
  `district1` varchar(20) NOT NULL,
  `municipality1` varchar(20) NOT NULL,
  `wardno1` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `moname` varchar(20) NOT NULL,
  `mcontact` varchar(20) NOT NULL,
  `moccupation` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `gname` varchar(20) NOT NULL,
  `gcontact` varchar(20) NOT NULL,
  `goccupation` varchar(20) NOT NULL,
  `school` varchar(20) NOT NULL,
  `passed` varchar(20) NOT NULL,
  `GPA` float NOT NULL,
  `English` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Math` int(11) NOT NULL,
  `schooltype` varchar(20) NOT NULL,
  `school1` varchar(20) NOT NULL,
  `passed1` varchar(20) NOT NULL,
  `GPA1` float NOT NULL,
  `english1` int(11) NOT NULL,
  `science1` int(11) NOT NULL,
  `math1` int(11) NOT NULL,
  `slcgrade` varchar(255) NOT NULL,
  `slccharacter` varchar(255) NOT NULL,
  `birthcert` varchar(255) NOT NULL,
  `entrance` varchar(255) NOT NULL,
  `resultcopy` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `recommendation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `engineering_resource`
--

CREATE TABLE `engineering_resource` (
  `id` int(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `pdf` varchar(50) DEFAULT NULL,
  `year` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `posted_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engineering_teacher`
--

CREATE TABLE `engineering_teacher` (
  `id` int(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enginneringresult`
--

CREATE TABLE `enginneringresult` (
  `id` int(100) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `semester` varchar(266) NOT NULL,
  `faculty` varchar(500) DEFAULT NULL,
  `roll` varchar(400) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` varchar(4000) NOT NULL,
  `marks` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_and_event`
--

CREATE TABLE `news_and_event` (
  `id` int(11) NOT NULL,
  `post` mediumtext NOT NULL,
  `description` varchar(1025) NOT NULL,
  `date` date NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` mediumtext NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `photo` varchar(4000) NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(100) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `uniquecode` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'no',
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_resource`
--

CREATE TABLE `school_resource` (
  `id` int(11) NOT NULL,
  `pdf` varchar(4000) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `class` int(11) NOT NULL,
  `caption` text NOT NULL,
  `posted_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school_result`
--

CREATE TABLE `school_result` (
  `id` int(100) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school_teacher`
--

CREATE TABLE `school_teacher` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(1025) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_school`
--
ALTER TABLE `admission_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collegeresult`
--
ALTER TABLE `collegeresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_resource`
--
ALTER TABLE `college_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_teacher`
--
ALTER TABLE `college_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering`
--
ALTER TABLE `engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineeringadmission`
--
ALTER TABLE `engineeringadmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering_resource`
--
ALTER TABLE `engineering_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering_teacher`
--
ALTER TABLE `engineering_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enginneringresult`
--
ALTER TABLE `enginneringresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_event`
--
ALTER TABLE `news_and_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_resource`
--
ALTER TABLE `school_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_result`
--
ALTER TABLE `school_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_teacher`
--
ALTER TABLE `school_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_school`
--
ALTER TABLE `admission_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collegeresult`
--
ALTER TABLE `collegeresult`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_resource`
--
ALTER TABLE `college_resource`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_teacher`
--
ALTER TABLE `college_teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engineering`
--
ALTER TABLE `engineering`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engineeringadmission`
--
ALTER TABLE `engineeringadmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engineering_resource`
--
ALTER TABLE `engineering_resource`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engineering_teacher`
--
ALTER TABLE `engineering_teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enginneringresult`
--
ALTER TABLE `enginneringresult`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_and_event`
--
ALTER TABLE `news_and_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_resource`
--
ALTER TABLE `school_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_result`
--
ALTER TABLE `school_result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_teacher`
--
ALTER TABLE `school_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
