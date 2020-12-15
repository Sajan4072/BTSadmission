-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

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
  `slcgrade` varchar(100) NOT NULL,
  `slccharacter` varchar(100) NOT NULL,
  `pp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `firstname`, `middlename`, `lastname`, `DOB`, `gender`, `caste`, `nationality`, `religion`, `mobilenumber`, `email`, `facebook`, `zone`, `province`, `district`, `municipality`, `wardno`, `zone1`, `province1`, `district1`, `municipality1`, `wardno1`, `pfirst`, `contact`, `occupation`, `mname`, `mcontact`, `ocuupation1`, `gname`, `gcontact`, `goccupation`, `sname`, `passed`, `GPA`, `nepali`, `english`, `social`, `science`, `math`, `eph`, `elective`, `elective2`, `elective3`, `slcgrade`, `slccharacter`, `pp`) VALUES
(1, 'fdafdsa', 'fadsf', 0, '0000-00-00', 'male', 'dalit', 'fdasfd', 'fadfd', '21321', 'rai4072@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'off.PNG'),
(2, 'fdafdsa', 'fadsf', 0, '2020-12-03', 'male', 'janjati', 'fdasfd', 'fadfd', '21321', 'rai4072@gmail.com', 'dsDS', 'fdafd', 'fdafd', 'fadf', 'sDS', '1', 'fdaf', 'fdafd', 'fda', 'fdafda', 2, 'fadsf', '23132', 'fads', 'fdasf', '31', 'dfsa', 'fdass', '432', 'fda', 'fdafd', 3, 4, 1, 1, 2, 3, 4, 4, 'business', 'business1', 'businessmath', 'Rule for Time-bound_4107.pdf', 'Rule for Time-bound_4107.pdf', 'rule.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
