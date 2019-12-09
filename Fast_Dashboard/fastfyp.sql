-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 04:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`d_id`, `d_name`) VALUES
(1, 'CS'),
(2, 'Electronices'),
(3, 'bio medical'),
(4, 'se'),
(5, 'civil');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `p_id` int(11) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `g_mem1_name` varchar(255) NOT NULL,
  `g_mem2_name` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `optional_teacher` varchar(255) DEFAULT NULL,
  `project_tittle` varchar(255) NOT NULL,
  `project_description` varchar(2000) NOT NULL,
  `l_rollno` varchar(255) NOT NULL,
  `g_mem1_rollno` varchar(255) NOT NULL,
  `g_mem2_rollno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mem1_email` varchar(255) NOT NULL,
  `mem2_email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_on` datetime NOT NULL DEFAULT current_timestamp(),
  `create_by` int(11) DEFAULT NULL,
  `rejected_on` datetime NOT NULL DEFAULT current_timestamp(),
  `rejected_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `t_id` int(11) DEFAULT NULL,
  `op_t_id` int(11) DEFAULT NULL,
  `is_check` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`p_id`, `leader_name`, `g_mem1_name`, `g_mem2_name`, `batch`, `dept`, `teacher`, `optional_teacher`, `project_tittle`, `project_description`, `l_rollno`, `g_mem1_rollno`, `g_mem2_rollno`, `email`, `mem1_email`, `mem2_email`, `img`, `status`, `create_on`, `create_by`, `rejected_on`, `rejected_by`, `is_active`, `t_id`, `op_t_id`, `is_check`) VALUES
(1, 'touqeer', 'shahid', 'ishaque', '2019', 'se', 'saad', 'haq', 'Online institution guideline', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'nu-59', '20', '25', 'touqeer@gmail.com', 'shahid@gmail.com', 'ishaque@gmail.com', 'fade.gif', 'request', '2019-12-04 14:52:03', 3, '2019-12-04 14:52:03', NULL, 0, 4, 3, 0),
(2, 'haq', 'jibran', 'ali', '2019', 'se', 'adil', 'saad', 'helo world', 'hello world', 'nu-75', 'nu-64', 'nu-98', 'a@a.com', 'b@b.com', 'c@c.com', '', 'request', '2019-12-04 18:32:08', 3, '2019-12-04 18:32:08', NULL, 0, 5, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(11) NOT NULL,
  `std_role_id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_rollno` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `std_role_id`, `std_name`, `std_rollno`, `pwd`, `dept`, `batch`, `created_on`, `created_by`) VALUES
(1, 3, 'rameez', 'nu-83', 'e10adc3949ba59abbe56e057f20f883e', 'CS', '2016', '2019-12-04 13:49:36', 1),
(2, 3, 'touqeer', 'nu-59', 'e10adc3949ba59abbe56e057f20f883e', 'se', '2017', '2019-12-04 14:17:58', 1),
(3, 3, 'abbas', 'nu-69', 'e10adc3949ba59abbe56e057f20f883e', 'civil', '2019', '2019-12-04 14:47:50', 1),
(4, 3, 'noman', 'nu-54', 'e10adc3949ba59abbe56e057f20f883e', 'civil', '2019', '2019-12-04 14:48:15', 1),
(5, 3, 'haq', 'nu-75', 'e10adc3949ba59abbe56e057f20f883e', 'se', '2019', '2019-12-04 18:30:08', 1),
(7, 3, 'shakoor', 'nu-88', 'e10adc3949ba59abbe56e057f20f883e', 'se', '2019', '2019-12-04 19:43:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_role_id`, `user_name`, `email`, `password`) VALUES
(1, 2, 'mahad', 'mhd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 1, 'haider', 'haider@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 2, 'rmz', 'rmz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 2, 'haq', 'haq@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 2, 'saad', 'saad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 3, 'touqeer', 'nu-59', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 2, 'adil', 'adil@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 3, 'abbas', 'nu-69', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 3, 'noman', 'nu-54', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 3, 'haq', 'nu-75', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 3, 'shakoor', 'nu-88', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'author'),
(4, 'contributor');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_dept` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `create_on` datetime NOT NULL DEFAULT current_timestamp(),
  `create_by` int(11) DEFAULT NULL,
  `d_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_name`, `t_dept`, `t_email`, `pwd`, `is_active`, `create_on`, `create_by`, `d_id`, `img`) VALUES
(1, 'mahad', 'CS', 'mhd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2019-12-04 14:13:40', 1, 1, 'mahad'),
(2, 'rmz', 'CS', 'rmz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2019-12-04 14:14:51', 1, 1, 'mahad'),
(3, 'haq', 'se', 'haq@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2019-12-04 14:16:46', 4, 4, 'mahad'),
(4, 'saad', 'se', 'saad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2019-12-04 14:17:16', 4, 4, 'mahad'),
(5, 'adil', 'se', 'adil@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2019-12-04 14:34:56', 4, 4, 'mahad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
