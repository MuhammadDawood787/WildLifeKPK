-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 11:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstract`
--

CREATE TABLE `abstract` (
  `id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abstract`
--

INSERT INTO `abstract` (`id`, `description`, `thesis_id`) VALUES
(3, 'abs absa asasasdasd', 2),
(4, 'abs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `acknowledgement`
--

CREATE TABLE `acknowledgement` (
  `id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `proposal_id`, `name`, `date`) VALUES
(1, 20, 'abc', '2021-04-20'),
(2, 32, 'ac1 ', '2021-04-20'),
(3, 35, 'ac', '2021-04-28'),
(4, 37, 'abc', '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `auther_dec`
--

CREATE TABLE `auther_dec` (
  `id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `username`, `password`, `role_id`, `email`, `status`, `name`, `image`, `department_id`, `section`, `registration_number`) VALUES
(1, 'faisalkhan', '123', 4, 'fa@gmail.com', 1, 'Faisal Khan', '2021-04-19 15-41-28DSC_0301.JPG', '1', 'A', '123'),
(5, 'f', 'ff', 4, '', 1, 'ff', '', 'ff', 'f', 'f323'),
(7, 'ff', 'f', 4, 'f@gmail.com', 1, NULL, NULL, NULL, NULL, NULL),
(9, 'faisalkhan', '123', 4, 'fa@gmail.com', 0, NULL, NULL, NULL, NULL, NULL),
(10, 'dawood', '123', 4, 'md@gmail.com', 1, 'Muhammad Dawood', '2021-04-23 10-40-30school3.PNG', '1', 'A', 'su-16-01-002-045'),
(11, 'daud', '123', 4, 'ad@gmail.com', 0, NULL, NULL, NULL, NULL, NULL),
(12, 'RAFIQ', '1234', 4, 'md@gmail.com', 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cordinator`
--

CREATE TABLE `cordinator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'CS'),
(2, 'MLT');

-- --------------------------------------------------------

--
-- Table structure for table `list_of_acronyms`
--

CREATE TABLE `list_of_acronyms` (
  `id` int(11) NOT NULL,
  `acronyms` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_of_acronyms`
--

INSERT INTO `list_of_acronyms` (`id`, `acronyms`, `description`, `proposal_id`) VALUES
(7, 'abc', 'abc', 17),
(8, 'ac1', '1ac', 31),
(9, 'a', 'asd', 35),
(10, 'acro', 'desc acro', 37),
(11, 'abc', 'abc thi', 38);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_figures`
--

CREATE TABLE `list_of_figures` (
  `id` int(11) NOT NULL,
  `fig_no` int(11) NOT NULL,
  `fig_description` varchar(255) NOT NULL,
  `page_no` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_of_figures`
--

INSERT INTO `list_of_figures` (`id`, `fig_no`, `fig_description`, `page_no`, `proposal_id`) VALUES
(4, 12323, 'adada', 123123, 32),
(5, 12, 'abcd', 300, 35),
(7, 2222, 'sdfsdfsdf', 1111, 37);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_tables`
--

CREATE TABLE `list_of_tables` (
  `id` int(11) NOT NULL,
  `table_no` int(11) NOT NULL,
  `table_description` varchar(255) NOT NULL,
  `page_no` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_of_tables`
--

INSERT INTO `list_of_tables` (`id`, `table_no`, `table_description`, `page_no`, `proposal_id`) VALUES
(2, 4, 'abc', 5, 9),
(3, 4, 'abc', 5, 17),
(4, 45, 'fdsa', 45, 25),
(5, 3, 'abc', 3, 28),
(6, 12, '132', 123, 31),
(7, 1232, 'Abc', 11, 35),
(8, 1, 'this', 34, 0),
(9, 2121, 'abcde', 3434, 35),
(10, 90, 'ascs', 12, 0),
(11, 123, 'desc', 1234, 35),
(12, 1234, 'qwedec 23', 12322, 37),
(13, 123, 'abs', 1234, 38);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_tacronyms`
--

CREATE TABLE `list_of_tacronyms` (
  `id` int(11) NOT NULL,
  `acronyms` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_tacronyms`
--

INSERT INTO `list_of_tacronyms` (`id`, `acronyms`, `description`, `thesis_id`) VALUES
(2, 'abc', 'ava', 2),
(3, 'hkjh', 'mjkljkj', 4);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_tfigure`
--

CREATE TABLE `list_of_tfigure` (
  `id` int(11) NOT NULL,
  `fig_no` int(50) NOT NULL,
  `fig_description` varchar(500) NOT NULL,
  `page_no` int(12) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_tfigure`
--

INSERT INTO `list_of_tfigure` (`id`, `fig_no`, `fig_description`, `page_no`, `thesis_id`) VALUES
(2, 1, '1', 12, 2),
(3, 22, 'demo thesis 1 figures', 33, 4);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_ttables`
--

CREATE TABLE `list_of_ttables` (
  `id` int(11) NOT NULL,
  `table_no` int(11) NOT NULL,
  `table_description` varchar(250) NOT NULL,
  `page_no` int(11) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_ttables`
--

INSERT INTO `list_of_ttables` (`id`, `table_no`, `table_description`, `page_no`, `thesis_id`) VALUES
(2, 12, '1', 1, 2),
(3, 33, 'kkkk', 55, 4);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `session_id` int(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `candi_id` int(11) NOT NULL,
  `super_wiser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `logo`, `title`, `university`, `session_id`, `degree`, `department_id`, `candi_id`, `super_wiser_id`) VALUES
(9, '2021-04-22 15-04-16mpdrey.jpg', 'a', 'a', 2015, 'a', 0, 1, 2),
(28, '', 'aba1', 'abca1', 2018, 'aabca1', 0, 1, 1),
(30, '2021-04-22 15-20-21', 'ab', 'a', 2019, 'a', 0, 1, 1),
(35, '2021-04-28 11-55-13WhatsApp Image 2021-03-22 at 5.10.02 PM.jpeg', 'Skills Finder', 'Suit', 2016, 'BSSE', 0, 10, 2),
(36, '2021-06-24 14-29-13asa.PNG', 'SMS', 'Peshawar', 1, 'abc', 1, 10, 2),
(37, '2021-06-28 11-54-45WhatsApp Image 2020-10-22 at 10.14.59 AM.jpeg', 'asd', 'asd', 1, 'asd', 1, 10, 2),
(38, '2021-06-29 08-57-45download.jpg', 'demo abc', 'Suit', 2, 'BSSE', 2, 10, 3),
(39, '2021-06-29 12-29-55IMG-20210323-WA0000.jpg', 'abc demo proposal', 'Abaseen', 2, 'BSSE', 1, 10, 3),
(40, '2021-07-01 14-25-00photo-1527352774566-e4916e36c645.jpg', 'abcde', 'suit', 2, 'bscs', 1, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `proposal_middle`
--

CREATE TABLE `proposal_middle` (
  `id` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `literature_review` text NOT NULL,
  `problem_statement` text NOT NULL,
  `objectives_of_project` text NOT NULL,
  `methodology` text NOT NULL,
  `budget_description` text NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposal_middle`
--

INSERT INTO `proposal_middle` (`id`, `introduction`, `literature_review`, `problem_statement`, `objectives_of_project`, `methodology`, `budget_description`, `proposal_id`) VALUES
(2, '', 'abcc', 'abcc', 'abcc', 'abcc', 'abcc', 20),
(3, '', '    1. Introduction\r\nDescribe your introduction here\r\n\r\n    2. Literature Review\r\nDescribe the literature review, which you have done for the selection of the proposed project. This does not mean references.\r\n\r\n    3. Problem Statement\r\nDescribe the problem statement here.\r\n\r\n    4. Objectives of Project\r\nWrite down aims and objectives of your project.', '    1. Introduction\r\nDescribe your introduction here\r\n\r\n    2. Literature Review\r\nDescribe the literature review, which you have done for the selection of the proposed project. This does not mean references.\r\n\r\n    3. Problem Statement\r\nDescribe the problem statement here.\r\n\r\n    4. Objectives of Project\r\nWrite down aims and objectives of your project.', '    1. Introduction\r\nDescribe your introduction here\r\n\r\n    2. Literature Review\r\nDescribe the literature review, which you have done for the selection of the proposed project. This does not mean references.\r\n\r\n    3. Problem Statement\r\nDescribe the problem statement here.\r\n\r\n    4. Objectives of Project\r\nWrite down aims and objectives of your project.', '    1. Introduction\r\nDescribe your introduction here\r\n\r\n    2. Literature Review\r\nDescribe the literature review, which you have done for the selection of the proposed project. This does not mean references.\r\n\r\n    3. Problem Statement\r\nDescribe the problem statement here.\r\n\r\n    4. Objectives of Project\r\nWrite down aims and objectives of your project.', '    1. Introduction\r\nDescribe your introduction here\r\n\r\n    2. Literature Review\r\nDescribe the literature review, which you have done for the selection of the proposed project. This does not mean references.\r\n\r\n    3. Problem Statement\r\nDescribe the problem statement here.\r\n\r\n    4. Objectives of Project\r\nWrite down aims and objectives of your project.', 24),
(4, '', 'abc', 'abc', 'abc', 'abc', 'abc', 25),
(5, '', 'abc', 'abc', 'abc', 'abc', 'abc', 25),
(6, '', 'ab', 'ab', 'ab', 'ab', 'ab', 28),
(8, '', 'as', 'asd', 'asdas', 'asdasdas', 'asdasdasdas', 33),
(9, '', 'While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...', 'While using W3Schools, you agree to .', 'While using W3Schools, you agree to have read ', 'While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...', 'While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2021 by Refsnes Data. All Rights ...', 35),
(10, '<p>ac</p>', '<p>ac<br></p>', '<p>ac<br></p>', '<p>ac<br></p>', '<p>ac<br></p>', '<p>ac<br></p>', 37);

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `candi_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `name`, `serial_no`, `detail`, `date`, `url`, `candi_id`, `proposal_id`) VALUES
(4, 'a', 12, 'sadas', '2021-05-01', 'adaadsa', 5, 0),
(7, 'ab', 34, '34', '2021-04-19', 'sf', 1, 0),
(8, 'a', 3, 'a', '2021-04-21', '2', 1, 0),
(10, 'W3School', 1, 'This is copy from W3school', '2021-05-17', 'www.w3school.com', 10, 35),
(11, 'Wikipedia', 2, 'Wikipedia site data is copied', '2021-05-19', 'www.wikipedia.com', 10, 35),
(12, 'abc', 12, 'abc details', '2021-06-16', 'abc.v', 10, 37);

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(11) NOT NULL,
  `description` varchar(5200) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `description`, `thesis_id`) VALUES
(3, 'abcb', 2),
(4, 'requu', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(4, 'Candidate');

-- --------------------------------------------------------

--
-- Table structure for table `seesion_tb`
--

CREATE TABLE `seesion_tb` (
  `id` int(11) NOT NULL,
  `session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seesion_tb`
--

INSERT INTO `seesion_tb` (`id`, `session`) VALUES
(1, '2013 to 2017'),
(2, '2016 to 2020');

-- --------------------------------------------------------

--
-- Table structure for table `superwiser`
--

CREATE TABLE `superwiser` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superwiser`
--

INSERT INTO `superwiser` (`id`, `name`) VALUES
(1, 'Khan'),
(2, 'Ali'),
(3, 'Saad Khan');

-- --------------------------------------------------------

--
-- Table structure for table `superwiser_comments`
--

CREATE TABLE `superwiser_comments` (
  `id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `name`, `username`, `email`, `password`, `status`, `role_id`) VALUES
(1, '', 'admin', '', 'admin', 1, 1),
(52, '', 'khan', 'khan@gmail.com', '123', 1, 2),
(53, 'f', 'fa', 'fa@gmail.com', 'fa', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_of_content`
--

CREATE TABLE `table_of_content` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `page_no` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_of_content`
--

INSERT INTO `table_of_content` (`id`, `description`, `page_no`, `proposal_id`) VALUES
(2, 'this22', 23, 35),
(3, 'abcd', 123, 35),
(4, 'asfg', 1234, 36),
(5, 'desc1', 123, 37),
(6, 'abc123', 123, 38);

-- --------------------------------------------------------

--
-- Table structure for table `tabstract`
--

CREATE TABLE `tabstract` (
  `id` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `introduction` text NOT NULL,
  `title` varchar(150) NOT NULL,
  `university` varchar(100) NOT NULL,
  `session_id` int(250) NOT NULL,
  `degree` varchar(150) NOT NULL,
  `department_id` int(250) NOT NULL,
  `candi_id` int(11) NOT NULL,
  `super_wiser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `logo`, `introduction`, `title`, `university`, `session_id`, `degree`, `department_id`, `candi_id`, `super_wiser_id`) VALUES
(2, '2021-05-19 12-02-25logo.png', '<p>dsfsf</p>', 'Thesis of Project', 'Suit', 1, 'BSSE', 2, 10, 2),
(3, '2021-06-26 09-21-35IMG-20210323-WA0003.jpg', '', 'abc thesis', 'suit', 1, 'avc', 1, 10, 2),
(4, '2021-06-29 12-37-36abc.png', '<p>Demo Thesis1 Intro</p>', 'demo thesis 1', 'Iqra Uni', 2, 'BSSE', 2, 10, 3),
(5, '2021-07-01 14-26-21photo-1525845250100-0ff4997d4a44.jpg', '', 'ABCS thesis', 'SUIT', 2, 'BSCS', 1, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `treference`
--

CREATE TABLE `treference` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `serial_no` int(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `url` varchar(150) NOT NULL,
  `candi_id` int(11) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treference`
--

INSERT INTO `treference` (`id`, `name`, `serial_no`, `detail`, `date`, `url`, `candi_id`, `thesis_id`) VALUES
(1, 'abc ', 1, 'abc ', '2021-05-27', 'www.abc.dcom ', 10, 2),
(2, 'abc', 11, 'abc details', '2021-06-29', 'abc.com', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ttable_of_content`
--

CREATE TABLE `ttable_of_content` (
  `id` int(11) NOT NULL,
  `description` varchar(2500) NOT NULL,
  `page_no` int(11) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttable_of_content`
--

INSERT INTO `ttable_of_content` (`id`, `description`, `page_no`, `thesis_id`) VALUES
(2, 'theesssssss', 12, 2),
(3, 'dffdfds', 4545, 2),
(4, 'jhkj', 55, 4);

-- --------------------------------------------------------

--
-- Table structure for table `undertaking`
--

CREATE TABLE `undertaking` (
  `id` int(11) NOT NULL,
  `student_id1` varchar(110) NOT NULL,
  `student_id2` varchar(110) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `undertaking`
--

INSERT INTO `undertaking` (`id`, `student_id1`, `student_id2`, `proposal_id`) VALUES
(4, 'ab', 'aba', 20),
(5, 'abc', 'abc', 21),
(6, 'abcd', 'abcdef', 33),
(7, 'Saad', 'Wajid', 34),
(8, 'saad', '', 35),
(9, 'abc1', 'abc3', 37),
(10, '11', '22', 39);

-- --------------------------------------------------------

--
-- Table structure for table `undertakingt`
--

CREATE TABLE `undertakingt` (
  `id` int(11) NOT NULL,
  `student_id1` varchar(100) NOT NULL,
  `student_id2` varchar(100) NOT NULL,
  `thesis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undertakingt`
--

INSERT INTO `undertakingt` (`id`, `student_id1`, `student_id2`, `thesis_id`) VALUES
(1, 'dawood', 'saad1', 2),
(2, 'abc 1', 'abc2', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstract`
--
ALTER TABLE `abstract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auther_dec`
--
ALTER TABLE `auther_dec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_acronyms`
--
ALTER TABLE `list_of_acronyms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_figures`
--
ALTER TABLE `list_of_figures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_tables`
--
ALTER TABLE `list_of_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposal_id` (`proposal_id`);

--
-- Indexes for table `list_of_tacronyms`
--
ALTER TABLE `list_of_tacronyms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_tfigure`
--
ALTER TABLE `list_of_tfigure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_ttables`
--
ALTER TABLE `list_of_ttables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candi_id` (`candi_id`),
  ADD KEY `super_wiser_id` (`super_wiser_id`);

--
-- Indexes for table `proposal_middle`
--
ALTER TABLE `proposal_middle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seesion_tb`
--
ALTER TABLE `seesion_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superwiser`
--
ALTER TABLE `superwiser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superwiser_comments`
--
ALTER TABLE `superwiser_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `table_of_content`
--
ALTER TABLE `table_of_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabstract`
--
ALTER TABLE `tabstract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treference`
--
ALTER TABLE `treference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttable_of_content`
--
ALTER TABLE `ttable_of_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undertaking`
--
ALTER TABLE `undertaking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undertakingt`
--
ALTER TABLE `undertakingt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstract`
--
ALTER TABLE `abstract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auther_dec`
--
ALTER TABLE `auther_dec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_of_acronyms`
--
ALTER TABLE `list_of_acronyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `list_of_figures`
--
ALTER TABLE `list_of_figures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_of_tables`
--
ALTER TABLE `list_of_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `list_of_tacronyms`
--
ALTER TABLE `list_of_tacronyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_of_tfigure`
--
ALTER TABLE `list_of_tfigure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_of_ttables`
--
ALTER TABLE `list_of_ttables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `proposal_middle`
--
ALTER TABLE `proposal_middle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seesion_tb`
--
ALTER TABLE `seesion_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `superwiser`
--
ALTER TABLE `superwiser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `superwiser_comments`
--
ALTER TABLE `superwiser_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `table_of_content`
--
ALTER TABLE `table_of_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabstract`
--
ALTER TABLE `tabstract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `treference`
--
ALTER TABLE `treference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ttable_of_content`
--
ALTER TABLE `ttable_of_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `undertaking`
--
ALTER TABLE `undertaking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `undertakingt`
--
ALTER TABLE `undertakingt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
