-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2015 at 10:33 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` double NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `building` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `birthdate` int(10) NOT NULL,
  `birthmonth` varchar(10) NOT NULL,
  `birthyear` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `year`, `division`, `rollno`, `building`, `locality`, `district`, `pincode`, `birthdate`, `birthmonth`, `birthyear`) VALUES
(1, 'sourabh', 'password', 'Sourabh', 'Jagtap', 'sourabh95@gmail.com', 8149531937, 'on', 'Third Year (T.E)', 'Division B', '22', 'a', 'a', 'a', 0, 8, 'August', 1995),
(2, '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(3, 'a', 'a', 'a', 'a', '', 0, '', '', '', '', 'a', 'a', 'a', 0, 0, 'MONTH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `subject_type` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_record`
--

CREATE TABLE IF NOT EXISTS `teacher_record` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` double NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `birthmonth` varchar(10) NOT NULL,
  `birthyear` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_record`
--

INSERT INTO `teacher_record` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `birthdate`, `birthmonth`, `birthyear`) VALUES
(1, 'jainsir', 'password', 'jain', 'sir', 'asd@gmail.com', 8149531937, 'on', '9', 'April', '1960'),
(3, 'amarmore', 'password', 'amar', 'more', 'asd@gmail.com', 8149531937, 'on', '8', 'April', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `uids`
--

CREATE TABLE IF NOT EXISTS `uids` (
  `name` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uids`
--

INSERT INTO `uids` (`name`, `uid`) VALUES
('amar', '1'),
('jain', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher_record`
--
ALTER TABLE `teacher_record`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_id_3` (`user_id`), ADD UNIQUE KEY `username` (`username`), ADD KEY `user_id` (`user_id`), ADD KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher_record`
--
ALTER TABLE `teacher_record`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `teacher_record` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
