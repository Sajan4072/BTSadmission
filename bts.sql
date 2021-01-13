-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 09:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'sajan', '123456');

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

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `firstname`, `middlename`, `lastname`, `DOB`, `gender`, `caste`, `nationality`, `religion`, `mobilenumber`, `email`, `facebook`, `zone`, `province`, `district`, `municipality`, `wardno`, `zone1`, `province1`, `district1`, `municipality1`, `wardno1`, `pfirst`, `contact`, `occupation`, `mname`, `mcontact`, `ocuupation1`, `gname`, `gcontact`, `goccupation`, `sname`, `passed`, `GPA`, `nepali`, `english`, `social`, `science`, `math`, `eph`, `elective`, `elective2`, `elective3`, `slcgrade`, `slccharacter`, `pp`) VALUES
(1, 'fdafdsa', 'fadsf', 0, '0000-00-00', 'male', 'dalit', 'fdasfd', 'fadfd', '21321', 'rai4072@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'off.PNG'),
(2, 'fdafdsa', 'fadsf', 0, '2020-12-03', 'male', 'janjati', 'fdasfd', 'fadfd', '21321', 'rai4072@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'rule.PNG'),
(3, 'fdafdsa', 'fadsf', 0, '2020-12-01', 'male', 'dalit', 'fdasfd', 'fadfd', '21321', 'rai4072@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', '', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'rule.PNG'),
(4, 'fdafdsa', 'fadsf', 0, '2020-12-01', 'male', 'dalit', 'fdasfd', 'fadfd', '21321', 'rai4072@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', '', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'rule.PNG'),
(5, 'fdafdsa', 'adf', 0, '2020-12-02', 'male', 'dalit', 'fdasfd', 'fda', '21321', 'd@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'hotel', 'hotel1', 'businessmath', 'Code of Conduct Hult .pdf', 'Code of Conduct Hult .pdf', 'Code of Conduct Hult .pdf'),
(6, 'fdafda', 'fadsf', 0, '2020-12-03', 'male', 'dalit', 'fdasfd', 'fadfd', '21321', 'ad@aryan.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf');

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
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `event`, `date`, `school`, `plus2`, `engineering`) VALUES
(1, 'tihar', '0000-00-00', 1, 0, 1),
(2, 'holi', '0000-00-00', 0, 0, 0),
(3, 'chat', '2020-11-02', 1, 0, 0),
(4, 'fadfdhafd adfafdafdaf dfaoifhdafh', '2020-11-12', 1, 0, 1),
(5, 'gdagafag', '2020-12-04', 1, 0, 0),
(6, 'tihar', '2020-11-06', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `image` varchar(225) NOT NULL,
  `faculty` varchar(25) NOT NULL,
  `uniquecode` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`firstname`, `lastname`, `address`, `fathername`, `phone`, `image`, `faculty`, `uniquecode`, `password`, `dob`) VALUES
('rabin', 'bsan', 'bdiae', 'Gyan', 2147483647, '2.png', 'management', 'CLS9-9632', 'RAbin14785', '2020-11-18'),
('rabin', 'bsasn', 'bode', 'gan', 2147483647, '2.png', 'management', 'CLS9-6325', 'RAbin14785', '2020-11-18'),
('s', 's', 's', 's', 2147483647, '2.png', 'computer', 'CLS9-6325', 'NJki14785', '2020-11-17'),
('s', 's', 'd', 'a', 2147483647, '2.png', 'civil', 'CLS9-96325', 'HGij47851', '2020-11-16');

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

--
-- Dumping data for table `collegeresult`
--

INSERT INTO `collegeresult` (`id`, `uniquecode`, `class`, `faculty`, `roll`, `term`, `subject`, `marks`) VALUES
(1, '', '', '', '', '', '', ''),
(2, 'CLS9-9632', '11', 'science', '2', '1', 'physics', '3'),
(3, 'CLS9-9632', '11', 'science', '2', '1', 'maths', '4'),
(4, 'CLS9-9632', '11', 'science', '2', '1', 'english', '12'),
(5, 'CLS9-9632', '11', 'science', '2', '1', 'computer', '3'),
(6, 'CLS9-9632', '11', 'science', '2', '1', 'biology', '3'),
(7, '', '', '', '', '', '', ''),
(8, 'CLS9-96325', '12', 'management', '6', '4', 'english', '2'),
(9, 'CLS9-96325', '12', 'management', '6', '4', 'accounting', '3'),
(10, 'CLS9-96325', '12', 'management', '6', '4', 'hm', '6'),
(11, 'CLS9-96325', '12', 'management', '6', '4', 'math', '4'),
(12, 'CLS9-96325', '12', 'management', '6', '4', 'business', '10'),
(13, '', '', '', '', '', '', ''),
(14, 'CLS9-96325', '12', 'management', '6', '4', 'english', '2'),
(15, 'CLS9-96325', '12', 'management', '6', '4', 'accounting', '3'),
(16, 'CLS9-96325', '12', 'management', '6', '4', 'hm', '6'),
(17, 'CLS9-96325', '12', 'management', '6', '4', 'math', '4'),
(18, 'CLS9-96325', '12', 'management', '6', '4', 'business', '10'),
(19, '', '', '', '', '', '', ''),
(20, 'CLS9-96325', '12', 'management', '6', '4', 'english', '2'),
(21, 'CLS9-96325', '12', 'management', '6', '4', 'accounting', '3'),
(22, 'CLS9-96325', '12', 'management', '6', '4', 'hm', '6'),
(23, 'CLS9-96325', '12', 'management', '6', '4', 'math', '4'),
(24, 'CLS9-96325', '12', 'management', '6', '4', 'business', '10'),
(25, '', '', '', '', '', '', ''),
(26, 'CLS9-96325', '12', 'management', '6', '4', 'english', '2'),
(27, 'CLS9-96325', '12', 'management', '6', '4', 'accounting', '3'),
(28, 'CLS9-96325', '12', 'management', '6', '4', 'hm', '6'),
(29, 'CLS9-96325', '12', 'management', '6', '4', 'math', '4'),
(30, 'CLS9-96325', '12', 'management', '6', '4', 'business', '10'),
(31, '', '', '', '', '', '', ''),
(32, 'CLS9-96325', '12', 'management', '6', '4', 'english', '2'),
(33, 'CLS9-96325', '12', 'management', '6', '4', 'accounting', '3'),
(34, 'CLS9-96325', '12', 'management', '6', '4', 'hm', '6'),
(35, 'CLS9-96325', '12', 'management', '6', '4', 'math', '4'),
(36, 'CLS9-96325', '12', 'management', '6', '4', 'business', '10'),
(37, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `college_resource`
--

CREATE TABLE `college_resource` (
  `id` int(15) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `law` varchar(15) NOT NULL,
  `management` varchar(10) NOT NULL,
  `humanities` varchar(10) NOT NULL,
  `education` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_resource`
--

INSERT INTO `college_resource` (`id`, `pdf`, `image`, `subject`, `class`, `caption`, `law`, `management`, `humanities`, `education`) VALUES
(1, 'Sample_Entry.pdf', 'lab.jpg', 'physic', '11', 'sicnec', '1', '0', '0', '0'),
(2, 'detail cloud computing bsc.pdf', 'engineering4.jpg', 'nepali', '11', 'asda', '1', '0', '0', '0'),
(3, 'detail cloud computing bsc.pdf', 'engineering4.jpg', 'chemistry', '11', 'asdad', '1', '0', '0', '0'),
(4, 'Sample_Entry.pdf', 'engineering1.jpg', 'biology', '11', 'asa', '1', '0', '0', '0'),
(5, 'Sample_Entry.pdf', 'engineering2.jpg', 'english', '11', 'rtg', '1', '0', '0', '0'),
(6, 'detail cloud computing bsc.pdf', 'lab.jpg', 'nepali', '11', 'asdas', '1', '0', '0', '0'),
(7, 'JS CH3035 Electrochemistry 2013-2014 New Course L5', 'engineering4.jpg', 'nepali', '11', 'asdasd', '1', '0', '0', '0'),
(8, 'rabinCV.pdf', 'engineering2.jpg', 'nepali', '11', 'ffd', '1', '0', '0', '0'),
(9, 'detail cloud computing bsc.pdf', 'group.jpg', 'management', '11', 'asd', '0', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `college_teacher`
--

CREATE TABLE `college_teacher` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_teacher`
--

INSERT INTO `college_teacher` (`firstname`, `lastname`, `address`, `phone`, `email`, `image`, `password`) VALUES
('ra', 'aa', 'aa', 2147483647, 'rabin11@gmail.com', '2.png', 'RABin14785');

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `uniquecode` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `faculty` varchar(12) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`firstname`, `lastname`, `address`, `fathername`, `phone`, `uniquecode`, `password`, `image`, `faculty`, `dob`) VALUES
('rabin', 'bassan', 'bode', 'gyan', 2147483647, 'CLS10-21463', 'RAbin1478', '92516506_2556377781301493_159646111940739072_o.jpg', 'computer', '2020-11-25');

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

--
-- Dumping data for table `engineeringadmission`
--

INSERT INTO `engineeringadmission` (`id`, `sname`, `mname`, `lname`, `DOB`, `gender`, `nationality`, `mobilenumber`, `email`, `zone`, `province`, `district`, `municipality`, `wardno`, `zone1`, `province1`, `district1`, `municipality1`, `wardno1`, `fname`, `contact`, `moname`, `mcontact`, `moccupation`, `occupation`, `gname`, `gcontact`, `goccupation`, `school`, `passed`, `GPA`, `English`, `Science`, `Math`, `schooltype`, `school1`, `passed1`, `GPA1`, `english1`, `science1`, `math1`, `slcgrade`, `slccharacter`, `birthcert`, `entrance`, `resultcopy`, `pp`, `recommendation`) VALUES
(1, 'fdafd', 'fdasf', ' lona', '2020-12-04', 'male', 'fdasfd', '21321', 'rai4072@gmail.com', 'fdafd', 'fdafd', 'fadf', 'sDS', 1, 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'messi ', '23132', 'fads', 'dfa', '31', 'fdaf', 'fdass', '432', 'fda', 'fad', '3', 4, 1, 3, 4, 'government', 'fdas', '2020', 5.5, 1, 2, 3, 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'tp1.PNG', 'Rule for Time-bound_'),
(2, 'fdafd', 'fdasf', ' lona', '2020-12-04', 'male', 'fdasfd', '21321', 'rai4072@gmail.com', 'fdafd', 'fdafd', 'fadf', 'sDS', 1, 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'messi ', '23132', 'fads', 'dfa', '31', 'fdaf', 'fdass', '432', 'fda', 'fad', '3', 4, 1, 3, 4, 'government', 'fdas', '2020', 5.5, 1, 2, 3, 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'tp1.PNG', 'Rule for Time-bound_'),
(3, 'fdafd', 'fdasf', ' lona', '2020-12-04', 'male', 'fdasfd', '21321', 'rai4072@gmail.com', 'fdafd', 'fdafd', 'fadf', 'sDS', 1, 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'messi ', '23132', 'fads', 'dfa', '31', 'fdaf', 'fdass', '432', 'fda', 'fad', '3', 4, 1, 3, 4, 'government', 'fdas', '2020', 5.5, 1, 2, 3, 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'Rule for Time-bound_', 'tp1.PNG', 'Rule for Time-bound_');

-- --------------------------------------------------------

--
-- Table structure for table `engineering_resource`
--

CREATE TABLE `engineering_resource` (
  `id` int(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering_resource`
--

INSERT INTO `engineering_resource` (`id`, `image`, `pdf`, `year`, `semister`, `subject`, `faculty`) VALUES
(1, 'engineering2.jpg', 'detail cloud computing bsc.pdf', 'first', 'second', 'Communication Nepali', '0'),
(2, 'computerlab.jpg', 'Sample_Entry.pdf', 'first', 'first', 'Communication Nepali', 'civil'),
(3, 'engineering3.jpg', 'detail cloud computing bsc.pdf', 'third', 'first', 'computer network', 'computer'),
(4, 'engineering4.jpg', 'detail cloud computing bsc.pdf', 'third', 'first', 'operating system', 'computer'),
(5, 'engineering1.jpg', 'Sample_Entry.pdf', 'second', 'first', 'mathematics III', 'computer'),
(6, 'engineering2.jpg', 'detail cloud computing bsc.pdf', 'first', 'first', 'Communication Nepali', 'computer'),
(7, 'engineering2.jpg', 'detail cloud computing bsc.pdf', 'first', 'second', 'mathematics II', 'computer'),
(8, 'lab.jpg', 'detail cloud computing bsc.pdf', 'second', 'second', 'mathematics III', 'civil');

-- --------------------------------------------------------

--
-- Table structure for table `engineering_teacher`
--

CREATE TABLE `engineering_teacher` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering_teacher`
--

INSERT INTO `engineering_teacher` (`firstname`, `lastname`, `address`, `contact`, `email`, `image`, `password`) VALUES
('aad', 'dd', 'asd', 2147483647, 'as@gmail.com', '', 'ASdf147852');

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

--
-- Dumping data for table `enginneringresult`
--

INSERT INTO `enginneringresult` (`id`, `uniquecode`, `semester`, `faculty`, `roll`, `term`, `subject`, `marks`) VALUES
(1, 'CLS10-21463', '1', 'civil', '2', '1', 'engineering math', '3'),
(2, 'CLS10-21463', '1', 'civil', '2', '1', 'soil', '4'),
(3, 'CLS10-21463', '1', 'civil', '2', '1', 'english', '12'),
(4, 'CLS10-21463', '1', 'civil', '2', '1', 'computer', '3'),
(5, 'CLS10-21463', '1', 'civil', '2', '1', 'hydro', '3'),
(6, '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', ''),
(8, 'CLS10-21463', '3', 'civil', '13', '3', 'soil', '3'),
(9, 'CLS10-21463', '3', 'civil', '13', '3', 'hydro', '9'),
(10, 'CLS10-21463', '3', 'civil', '13', '3', 'res', '4'),
(11, 'CLS10-21463', '3', 'civil', '13', '3', 'mecha', '3');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_event`
--

CREATE TABLE `news_and_event` (
  `id` int(11) NOT NULL,
  `post` text NOT NULL,
  `description` varchar(1025) NOT NULL,
  `date` date NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_and_event`
--

INSERT INTO `news_and_event` (`id`, `post`, `description`, `date`, `school`, `plus2`, `engineering`) VALUES
(1, ' farewell\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(2, ' exam\r\n\r\n             ', '', '0000-00-00', 1, 0, 0),
(3, ' mid term\r\n\r\n             ', '', '0000-00-00', 0, 1, 1),
(4, ' result\r\n\r\n             ', '', '0000-00-00', 1, 0, 0),
(5, ' sports week\r\n\r\n             ', '', '0000-00-00', 0, 1, 1),
(6, 'picnic', '', '0000-00-00', 1, 1, 1),
(7, ' tour\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(8, ' music event\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(9, ' rock climbing \r\n\r\n             ', '', '0000-00-00', 0, 0, 0),
(10, ' rock climbing\r\n             ', '', '0000-00-00', 1, 0, 0),
(11, ' college chuti\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(12, ' no holiday\r\n\r\n             ', '', '0000-00-00', 1, 1, 0),
(13, ' notice 1\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(14, ' \r\nnotice 2\r\n             ', '', '0000-00-00', 1, 1, 1),
(15, '', ' \r\n\r\n             holiday on the occasion of holi in 11/02/2077. school will remain closed', '0000-00-00', 1, 0, 0),
(16, '2020-11-11', ' \r\n\r\n             holiday on the occasions of student day ', '0000-00-00', 1, 0, 0),
(17, 'asdsa', ' \r\n\r\n             adasdadasd', '2020-11-04', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `school`, `plus2`, `engineering`) VALUES
(3, ' \r\nnotice 1\r\n             ', 1, 1, 1),
(4, ' yeah\r\n\r\n             ', 1, 0, 1),
(5, ' holi\r\n\r\n             ', 1, 0, 0),
(6, '', 1, 0, 1);

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

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `caption`, `photo`, `school`, `plus2`, `engineering`) VALUES
(1, 'hello', 'nar.jpg', 1, 0, 1),
(2, '', 'tm7.PNG', 1, 1, 0),
(3, '', 'lab.jpg', 0, 1, 0),
(4, '', 'engineering4.jpg', 0, 1, 1),
(5, '', 'group.jpg', 1, 0, 0),
(6, '', 'engineering3.jpg', 0, 0, 1),
(7, '', 'engineering2.jpg', 0, 0, 1),
(8, '', 'engineering1.jpg', 1, 1, 1),
(9, '', 'computerlab.jpg', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(15) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `image` varchar(225) NOT NULL,
  `uniquecode` varchar(15) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`firstname`, `lastname`, `address`, `fathername`, `contact`, `password`, `image`, `uniquecode`, `dob`) VALUES
('rabin', 'basan', 'bode,bkt', 'gyan', 2147483647, 'RABin14785', '92516506_2556377781301493_159646111940739072_o.jpg', 'CLS9-1478', '2020-11-11'),
('a', 'd', 'a', 'a', 2147483647, 'SFRgs4785', '106260846_168440161354929_3013438027343079164_n.jpg', 'CLS9-8745', '2020-11-10'),
('a', 'a', 'a', 'a', 2147483647, 'GHJki14785', '2.png', 'CLS1-521463', '2020-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `school_resource`
--

CREATE TABLE `school_resource` (
  `id` int(11) NOT NULL,
  `pdf` varchar(4000) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_resource`
--

INSERT INTO `school_resource` (`id`, `pdf`, `image`, `subject`, `class`, `caption`) VALUES
(1, 'Rule for Time-bound_4107.pdf', 'nar.jpg', 'math', 1, 'dgadga'),
(2, 'rabincitizen.pdf', '2.png', '', 3, ''),
(3, 'sabinacitizen.pdf', '2.png', 'science', 5, ''),
(4, 'WelcomeKit-1.pdf', 'engineering3.jpg', 'math', 6, 'the sca'),
(5, 'detail cloud computing bsc.pdf', 'tm7.PNG', 'math', 1, ''),
(6, 'Sample_Entry.pdf', 'engineering2.jpg', 'english', 2, ''),
(7, 'detail cloud computing bsc.pdf', 'received_707615146814616.jpeg', 'social', 10, 'asdasdas');

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

--
-- Dumping data for table `school_result`
--

INSERT INTO `school_result` (`id`, `uniquecode`, `class`, `roll`, `term`, `subject`, `marks`) VALUES
(1, 'CLS9-1478', '9', '1', '1', 'english', '10'),
(2, 'CLS9-1478', '9', '1', '1', 'math', '10'),
(3, 'CLS9-1478', '9', '1', '1', 'nepali', '20'),
(4, 'CLS9-1478', '9', '1', '1', 'social', '3'),
(5, 'CLS9-1478', '9', '1', '1', 'science', '28'),
(6, 'CLS9-1478', '9', '1', '1', 'computer', '28'),
(7, 'CLS9-1478', '9', '1', '1', 'eph', '28'),
(8, 'CLS9-1478', '9', '1', '1', 'opt math', '28'),
(9, 'CLS9-8745', '9', '2', '1', 'engligh', '12'),
(10, 'CLS9-8745', '9', '2', '1', 'math', '16'),
(11, 'CLS9-8745', '9', '2', '1', 'nepali', '13'),
(12, 'CLS9-8745', '9', '2', '1', 'social', '12'),
(13, 'CLS9-8745', '9', '2', '1', 'science', '50'),
(14, 'CLS9-8745', '9', '2', '1', 'computer', '12'),
(15, 'CLS9-8745', '9', '2', '1', 'eph', '19'),
(16, 'CLS9-8745', '9', '2', '1', 'opt math', '12'),
(17, '', '', '', '', '', ''),
(18, 'CLS9-8745', '10', '2', '1', 'engligh', '12'),
(19, 'CLS9-8745', '10', '2', '1', 'math', '16'),
(20, 'CLS9-8745', '10', '2', '1', 'nepali', '13'),
(21, 'CLS9-8745', '10', '2', '1', 'social', '12'),
(22, 'CLS9-8745', '10', '2', '1', 'science', '50'),
(23, 'CLS9-8745', '10', '2', '1', 'computer', '12'),
(24, 'CLS9-8745', '10', '2', '1', 'eph', '19'),
(25, 'CLS9-8745', '10', '2', '1', 'opt math', '12'),
(26, 'CLS9-1478', '9', '1', '1', 'english', '10'),
(27, 'CLS9-1478', '9', '1', '1', 'math', '10'),
(28, 'CLS9-1478', '9', '1', '1', 'nepali', '20'),
(29, 'CLS9-1478', '9', '1', '1', 'social', '3'),
(30, 'CLS9-1478', '9', '1', '1', 'science', '28'),
(31, 'CLS9-1478', '9', '1', '1', 'computer', '28'),
(32, 'CLS9-1478', '9', '1', '1', 'eph', '28'),
(33, 'CLS9-1478', '9', '1', '1', 'opt math', '28'),
(34, 'CLS9-8745', '9', '2', '1', 'engligh', '12'),
(35, 'CLS9-8745', '9', '2', '1', 'math', '16'),
(36, 'CLS9-8745', '9', '2', '1', 'nepali', '13'),
(37, 'CLS9-8745', '9', '2', '1', 'social', '12'),
(38, 'CLS9-8745', '9', '2', '1', 'science', '50'),
(39, 'CLS9-8745', '9', '2', '1', 'computer', '12'),
(40, 'CLS9-8745', '9', '2', '1', 'eph', '19'),
(41, 'CLS9-8745', '9', '2', '1', 'opt math', '12'),
(42, 'CLS9-1478', '7', '2', '2', 'english', '10'),
(43, 'CLS9-1478', '7', '2', '2', 'math', '10'),
(44, 'CLS9-1478', '7', '2', '2', 'nepali', '20'),
(45, 'CLS9-1478', '7', '2', '2', 'science', '27'),
(46, 'CLS9-1478', '7', '2', '2', 'computer', '28'),
(47, 'CLS9-1478', '7', '2', '2', 'eph', '28'),
(48, 'CLS9-1478', '7', '2', '2', 'opt math', '2');

-- --------------------------------------------------------

--
-- Table structure for table `school_teacher`
--

CREATE TABLE `school_teacher` (
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_teacher`
--

INSERT INTO `school_teacher` (`firstname`, `lastname`, `phone`, `address`, `email`, `image`, `password`) VALUES
('radad', 'adsasd', 2147483647, 'asdas', 'rabin11@gmail.com', '2.png', 'RABin14785');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(1025) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`name`, `phone`, `email`, `message`) VALUES
('rabin', 2147483647, 'rabinbasansth@gmail.com', 'dsasdadada'),
('rr', 2147483647, 'r@gmail.com', 'asdad'),
('rr', 2147483647, 'rabin@gmail.com', 'asdasd');

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
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_resource`
--
ALTER TABLE `college_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering_resource`
--
ALTER TABLE `engineering_resource`
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
-- Indexes for table `school_resource`
--
ALTER TABLE `school_resource`
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
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `college_resource`
--
ALTER TABLE `college_resource`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `engineering_resource`
--
ALTER TABLE `engineering_resource`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_and_event`
--
ALTER TABLE `news_and_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_resource`
--
ALTER TABLE `school_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
