-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: mariadb-133.wc2:3306
-- Generation Time: Jul 28, 2017 at 12:48 AM
-- Server version: 10.0.30-MariaDB-0+deb8u2
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `480602_Sharpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_email`, `last_login`) VALUES
(1, '2014pietcsshriyansh@poornima.org', '0000-00-00 00:00:00'),
(2, '2014pietcssneha@poornima.org', '2017-06-22 06:27:03'),
(3, 'webmaster@poornima.org', '2017-07-08 08:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `experiments`
--

CREATE TABLE IF NOT EXISTS `experiments` (
`Exp_id` int(11) NOT NULL,
  `Lab_id` int(11) NOT NULL,
  `Exp_Name` text NOT NULL,
  `Algorithm` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiments`
--

INSERT INTO `experiments` (`Exp_id`, `Lab_id`, `Exp_Name`, `Algorithm`) VALUES
(45, 36, '1st php', 'p\r\np\r\np\r\np\r\npp\r\np\r\n'),
(46, 35, '1st c++', 'c\r\nc\r\nc\r\n\r\nc\r\n\r\nc\r\nc\r\n\r\n'),
(48, 37, '1st', 'dcds\r\ncs\r\ncds\r\ncsd\r\ncsd\r\ndcscs\r\nc'),
(49, 30, '1st c Program', 'a\r\na\r\na\r\n\r\na\r\na\r\na\r\n\r\naa\r\n'),
(50, 38, '1st Java Program', 'a\r\ns\r\n\r\nc\r\nf\r\nfr\r\nfr\r\nfr\r\nr\r\n'),
(51, 30, '2nd c program', '2\r\nd\r\nf\r\nv\r\n\r\nv\r\nv\r\nv\r\nvv\r\n'),
(52, 36, '2nd ', 'g\r\ng\r\ng\r\ng\r\ng');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
`faculty_id` int(11) NOT NULL,
  `faculty_email` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `faculty_email`, `last_login`) VALUES
(1, '2014pietcssneha@poornima.org', '2017-07-04 08:29:08'),
(3, 'webmaster@poornima.org', '2017-07-08 08:01:16'),
(2147483647, '2014pietcsshriyansh@poornima.org', '2017-07-05 04:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE IF NOT EXISTS `labs` (
`Lab_id` int(11) NOT NULL,
  `Faculty_id` int(11) NOT NULL,
  `Lab_name` varchar(255) NOT NULL,
  `Semester` int(11) NOT NULL,
  `compiler_name` int(11) NOT NULL,
  `About` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`Lab_id`, `Faculty_id`, `Lab_name`, `Semester`, `compiler_name`, `About`) VALUES
(30, 2147483647, 'c Lab', 2, 11, 'Its About C Programming'),
(35, 2147483647, 'C++ Lab', 4, 41, 'Its About OOP''s Labs'),
(36, 2147483647, 'PHP Lab', 6, 29, 'Its About Php Lab'),
(37, 2147483647, 'Python Lab', 4, 116, 'Its About Python Lab'),
(38, 3, 'JAVA Lab', 7, 10, 'Its About JAVA Lab');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `last_login`) VALUES
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:36:49'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:38:01'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:40:52'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:44:44'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:45:47'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:55:58'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 08:56:26'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 09:15:37'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 09:18:03'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 09:18:37'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 09:20:05'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 09:23:50'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-17 09:33:30'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-19 06:51:40'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-19 07:48:41'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-19 09:13:41'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-19 09:23:36'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 04:23:56'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 04:30:04'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 04:45:34'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 04:46:10'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 04:53:46'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 05:00:13'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 05:07:15'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 05:13:59'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-20 05:21:46'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-06-20 05:41:40'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-21 02:56:07'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-21 03:16:35'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-06-22 05:24:19'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-22 05:58:51'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-22 07:45:44'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-06-23 04:15:10'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-23 04:32:27'),
(2147483647, '', 'shriyanshjpr11@gmail.com', '2017-06-24 05:47:05'),
(2147483647, '', 'shriyanshjpr11@gmail.com', '2017-06-24 05:50:06'),
(2147483647, '', '2014pietcssneha@poornima.org', '2017-06-30 09:20:10'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-05 04:58:24'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-05 04:59:53'),
(2147483647, '', 'sharp@poornima.org', '2017-07-06 10:34:46'),
(2147483647, '', 'priyankapiet541@poornima.org', '2017-07-07 11:15:59'),
(2147483647, '', 'priyankapiet541@poornima.org', '2017-07-07 11:17:53'),
(2147483647, '', 'priyankapiet541@poornima.org', '2017-07-07 11:18:54'),
(2147483647, '', 'priyankapiet541@poornima.org', '2017-07-07 11:20:09'),
(2147483647, '', 'deepakmoud@poornima.org', '2017-07-08 03:26:26'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-08 09:37:32'),
(2147483647, '', 'mahimapce508@poornima.org', '2017-07-08 12:56:44'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-09 06:40:41'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-09 07:06:45'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-10 02:58:08'),
(2147483647, '', '2014pietcsshriyansh@poornima.org', '2017-07-10 03:04:39'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-10 03:37:39'),
(2147483647, 'shriyansh', 'shriyanshjpr11@gmail.com', '2017-07-10 03:45:48'),
(2147483647, 'Web', 'webmaster@poornima.org', '2017-07-10 03:46:44'),
(2147483647, 'ERP', 'sharp@poornima.org', '2017-07-10 03:47:15'),
(2147483647, 'ERP', 'sharp@poornima.org', '2017-07-10 03:48:20'),
(2147483647, 'Web', 'webmaster@poornima.org', '2017-07-10 03:48:59'),
(2147483647, 'shriyansh', 'shriyanshjpr11@gmail.com', '2017-07-10 03:50:58'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-10 06:33:44'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-10 10:35:14'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 03:37:11'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 04:00:00'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 06:22:40'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 06:22:56'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 06:33:46'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 08:13:40'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 08:29:40'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 08:33:34'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 08:35:14'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 09:36:03'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-11 09:53:37'),
(2147483647, 'shriyansh', 'shriyanshjpr11@gmail.com', '2017-07-11 16:02:54'),
(2147483647, 'shriyansh', 'shriyanshjpr11@gmail.com', '2017-07-11 16:06:32'),
(2147483647, 'shriyansh', 'shriyanshjpr11@gmail.com', '2017-07-11 16:12:32'),
(2147483647, 'Web', 'webmaster@poornima.org', '2017-07-12 16:10:42'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-12 16:30:29'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-13 03:14:22'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-13 03:19:29'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-13 03:32:19'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-13 09:07:09'),
(2147483647, 'SNEHA', '2014pietcssneha@poornima.org', '2017-07-13 16:06:47'),
(2147483647, 'SNEHA', '2014pietcssneha@poornima.org', '2017-07-13 16:39:11'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-14 02:47:44'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-14 02:49:38'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-14 06:21:45'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-14 06:30:27'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-14 12:10:32'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-14 12:12:59'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-15 03:01:34'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-17 15:10:06'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-20 10:23:42'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-22 12:23:43'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-22 15:26:56'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-22 15:39:04'),
(2147483647, 'Priyanka', 'priyankapiet541@poornima.org', '2017-07-24 15:24:59'),
(2147483647, 'Shriyansh', '2014pietcsshriyansh@poornima.org', '2017-07-26 15:54:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`admin_id`), ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `experiments`
--
ALTER TABLE `experiments`
 ADD PRIMARY KEY (`Exp_id`), ADD KEY `Lab_id` (`Lab_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
 ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
 ADD PRIMARY KEY (`Lab_id`), ADD KEY `Faculty_id` (`Faculty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `experiments`
--
ALTER TABLE `experiments`
MODIFY `Exp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
MODIFY `Lab_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `experiments`
--
ALTER TABLE `experiments`
ADD CONSTRAINT `experiments_ibfk_1` FOREIGN KEY (`Lab_id`) REFERENCES `labs` (`Lab_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `labs`
--
ALTER TABLE `labs`
ADD CONSTRAINT `labs_ibfk_1` FOREIGN KEY (`Faculty_id`) REFERENCES `faculties` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
