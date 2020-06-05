-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 10:05 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`) VALUES
(1, 'CSE'),
(2, 'ENTX'),
(3, 'EE'),
(4, 'MECH');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `project_id`, `created`) VALUES
(1, 'hello Harish how r u?', 2, 5, '2016-03-28 13:13:33'),
(2, 'not good', 4, 5, '2016-03-28 13:38:58'),
(3, '', 2, 5, '2016-03-28 15:02:47'),
(4, 'Hi boss how r u', 2, 5, '2016-03-28 15:19:19'),
(5, 'hey boss', 2, 5, '2016-03-28 15:19:41'),
(6, 'df', 4, 5, '2016-03-28 16:10:22'),
(7, 'hi', 4, 5, '2016-03-28 19:35:50'),
(8, 'hi ', 4, 5, '2016-03-28 19:37:07'),
(9, 'hello how ru ?', 4, 5, '2016-03-28 19:37:53'),
(10, 'how the project is going?', 4, 5, '2016-03-28 19:38:37'),
(11, 'mee too', 2, 1, '2016-03-29 13:34:08'),
(12, '', 2, 1, '2016-03-29 13:34:48'),
(13, 'hello harish ', 2, 1, '2016-03-29 13:47:22'),
(14, 'hello harish', 2, 5, '2016-03-29 13:55:08'),
(15, 'Project is not good', 2, 5, '2016-03-29 13:55:24'),
(16, 'hi surbhi', 2, 1, '2016-03-30 19:32:18'),
(17, 'Hi harish!!!', 4, 6, '2016-03-30 19:46:39'),
(18, 'hi how r u', 2, 3, '2016-03-31 18:24:23'),
(19, 'hello', 6, 3, '2016-03-31 19:48:04'),
(20, 'i m fine thanku', 6, 3, '2016-03-31 23:32:23'),
(21, 'Yes it is correct', 5, 3, '2016-03-31 23:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `group_allot`
--

CREATE TABLE IF NOT EXISTS `group_allot` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `leader_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_allot`
--

INSERT INTO `group_allot` (`id`, `guide_id`, `leader_id`, `group_id`, `project_id`) VALUES
(15, 2, 6, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `is_read` int(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `receiver_id`, `sender_id`, `is_read`, `created`) VALUES
(4, 'You have assigned to the Group of Harish Kothekar', 2, 0, 0, '2016-03-30 11:03:26'),
(5, 'You have assigned to the Group of Abc adas', 19, 0, 0, '2016-03-30 11:44:06'),
(6, 'You have assigned to the Group of Abc adas', 2, 0, 0, '2016-03-31 15:50:44'),
(7, 'You have assigned to the Project of New Admin Project', 2, 0, 0, '2016-04-22 10:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_description` varchar(500) NOT NULL,
  `percentage` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_domain` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `guide_id`, `project_name`, `project_description`, `percentage`, `created`, `project_domain`, `start_date`, `end_date`) VALUES
(1, 2, 'Wireless Communication', 'Wireless communication is a networking protocol', '10', '2016-04-25 13:54:16', 'Wireless', '2016-03-02', '2016-03-04'),
(3, 2, 'Life of pie', 'asd', '23', '2016-04-25 14:22:00', 'asd', '2016-03-02', '2016-03-11'),
(5, 2, 'dot net framework', 'progress report', '10', '2016-04-25 13:54:16', 'godaddy', '2016-03-03', '2016-03-11'),
(7, 2, 'dot net framework', 'progress report', '10', '2016-04-25 13:54:16', 'godaddy', '2016-03-03', '2016-03-11'),
(9, 2, 'dot net framework', 'progress report', '10', '2016-04-25 13:54:16', 'godaddy', '2016-03-03', '2016-03-11'),
(10, 3, 'Admin Project', 'This is the Major project created By admin', '10', '2016-04-25 13:54:16', 'This project is created by admin', '2016-04-18', '2016-04-30'),
(12, 2, 'New Admin Project', 'This is the admin description for the Admin', '10', '2016-04-25 13:54:16', 'CSSS', '2016-04-18', '2016-04-21'),
(14, 0, 'Life of pie', 'xc', '10', '2016-04-25 13:54:16', 'asd', '2016-04-04', '2016-04-26'),
(16, 0, 'Wireless Communication', 'sfd', '10', '2016-04-25 13:54:16', 'Wireless', '2016-04-12', '2016-04-21'),
(18, 0, 'Admin Project', 'asda', '10', '2016-04-25 13:54:16', 'Wireless', '2016-04-18', '2016-04-19'),
(19, 0, 'Wireless Communication', 'This is the last project', '0', '2016-04-25 14:17:02', 'Mobile Domain', '2016-04-01', '2016-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `project_group`
--

CREATE TABLE IF NOT EXISTS `project_group` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_leader` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=632 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_group`
--

INSERT INTO `project_group` (`id`, `group_id`, `user_id`, `is_leader`) VALUES
(628, 2016111, 6, 1),
(629, 2016111, 5, 0),
(630, 2016111, 4, 0),
(631, 2016111, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_guides`
--

CREATE TABLE IF NOT EXISTS `project_guides` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_uploads`
--

CREATE TABLE IF NOT EXISTS `project_uploads` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `project_file_name` varchar(100) NOT NULL,
  `project_description` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_approved` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_uploads`
--

INSERT INTO `project_uploads` (`id`, `student_id`, `project_file_name`, `project_description`, `created`, `is_approved`) VALUES
(1, 9, '1698013.jpg', 'abc', '2016-03-30 14:03:04', 1),
(7, 6, 'New Microsoft Word Document.docx', 'Dataa about data', '2016-03-31 12:41:47', 1),
(8, 6, '', '', '2016-03-31 13:42:37', 1),
(9, 6, 'New Microsoft Word Document.docx', '', '2016-03-31 14:18:36', 1),
(10, 6, '', '', '2016-03-31 10:26:02', 0),
(11, 6, 'users.sql', 'df', '2016-03-31 12:56:12', 1),
(12, 6, '', '', '2016-03-31 10:29:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `profile_img` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `avgmarks` varchar(99) NOT NULL,
  `status` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loggedin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `profile_img`, `user_type`, `avgmarks`, `status`, `created`, `modified`, `loggedin`) VALUES
(2, 'Vishal ', 'Kothekar', 'vishalc7w@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 2, '0', 1, '2016-12-14 09:00:25', '2016-02-15 09:46:08', '2016-12-14 09:00:25'),
(3, 'Ram', 'Ghonmode', 'ramc7w@gmail.com', '202cb962ac59075b964b07152d234b70', '', 1, '0', 1, '2016-12-14 08:46:31', '2016-02-15 09:58:53', '2016-04-25 14:18:35'),
(4, 'swati', 'Deshmukh', 'swati@gmail.com', '202cb962ac59075b964b07152d234b70', '', 3, '25', 1, '2016-12-14 08:55:10', '2016-02-17 06:25:33', '2016-04-25 13:12:12'),
(5, 'Harish ', 'Chopkar', 'harry.harish333@gmail.com', '202cb962ac59075b964b07152d234b70', '', 3, '65', 1, '2016-09-30 12:30:49', '2016-02-20 15:23:28', '2016-09-30 12:30:49'),
(6, 'Abc', 'adas', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '', 3, '78', 1, '2016-09-30 12:16:14', '2016-03-13 17:38:39', '2016-09-30 12:16:14'),
(19, 'leena', 'paunikar', 'leena@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 3, '', 1, '2016-12-14 08:57:27', '2016-03-22 14:51:43', '2016-12-14 08:57:27'),
(20, 'Harish', 'Chopkar', 'xyz@gmail.com', '202cb962ac59075b964b07152d234b70', '1514924.png', 1, '', 1, '2016-03-31 13:52:17', '2016-03-31 07:22:36', '2016-03-31 13:52:17'),
(21, 'kaustubh', 'Somnathe', 'ks@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dmc-devil-may-cry-wallpaper-hd.jpg', 1, '', 1, '2016-12-14 08:54:43', '2016-12-14 08:44:48', '2016-12-14 08:54:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_allot`
--
ALTER TABLE `group_allot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_group`
--
ALTER TABLE `project_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_guides`
--
ALTER TABLE `project_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_uploads`
--
ALTER TABLE `project_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `group_allot`
--
ALTER TABLE `group_allot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `project_group`
--
ALTER TABLE `project_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=632;
--
-- AUTO_INCREMENT for table `project_guides`
--
ALTER TABLE `project_guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_uploads`
--
ALTER TABLE `project_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
