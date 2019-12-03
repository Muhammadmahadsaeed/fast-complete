-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 04:13 PM
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
(1, 'cs'),
(2, 'civil'),
(3, 'Electronices'),
(4, 'Electronices'),
(5, 'bio medical'),
(6, 'comp'),
(7, 'comp'),
(8, 'comp');

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
(1, 'mahad', 'saad', 'rameez', '2016', 'SE', 'sir haider', NULL, 'LMS', 'this is description', '70', '73', '83', '', '', '', 'img', 'rejected', '2019-11-28 20:53:14', NULL, '2019-11-28 20:53:14', NULL, 0, NULL, NULL, NULL),
(2, 'hammad', 'sami', 'haq', '2017', 'CS', 'sir misbah', NULL, 'OLMS', 'this is OLMS', '59', '58', '69', '', '', '', 'image', 'approved', '2019-11-28 20:53:14', NULL, '2019-11-28 20:53:14', NULL, 0, NULL, NULL, NULL),
(3, '', '', '', '', 'cs', 'haris', NULL, '', '', '', '', '', '', '', '', '', 'request', '2019-11-29 19:39:18', 3, '2019-11-29 19:39:18', NULL, 0, 0, NULL, NULL),
(4, '', '', '', '', 'cs', 'haris', NULL, '', '', '', '', '', '', '', '', '', 'request', '2019-11-29 19:43:44', 3, '2019-11-29 19:43:44', NULL, 0, 0, NULL, NULL),
(5, 'mahad', 'saad', 'ha', '', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '60', '71', '72', '', '', '', 'backblue.gif', 'request', '2019-11-29 19:44:31', 3, '2019-11-29 19:44:31', NULL, 0, 0, NULL, NULL),
(6, 'mahad', 'saad', 'ha', '', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '70', '71', '72', '', '', '', 'backblue.gif', 'approved', '2019-11-29 19:44:57', 3, '2019-11-29 19:44:57', NULL, 0, 0, NULL, NULL),
(7, 'mahad', 'saad', 'ha', '', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '69', '71', '72', '', '', '', 'backblue.gif', 'reject', '2019-11-29 19:45:41', 3, '2019-11-29 19:45:41', NULL, 0, 0, NULL, NULL),
(8, 'mahad', 'saad', 'ha', '', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '70', '71', '72', '', '', '', 'backblue.gif', 'approved', '2019-11-29 19:46:59', 3, '2019-11-29 19:46:59', NULL, 0, 0, NULL, NULL),
(9, 'mahad', 'saad', 'ha', '', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '51', '71', '72', '', '', '', 'backblue.gif', 'request', '2019-11-29 19:54:54', 3, '2019-11-29 19:54:54', NULL, 0, 3, NULL, NULL),
(10, 'mahad', 'saad', 'ha', '19', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '70', '71', '72', '', '', '', 'backblue.gif', 'rejected', '2019-11-29 19:56:06', 3, '2019-11-29 19:56:06', NULL, 0, 3, NULL, NULL),
(11, 'mahad', 'saad', 'ha', '19191919', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '70', '71', '72', '', '', '', 'backblue.gif', 'approved', '2019-11-29 19:56:28', 3, '2019-11-29 19:56:28', NULL, 0, 3, NULL, NULL),
(12, 'mahad', 'saad', 'ha', '2019', 'cs', 'haris', NULL, 'LMSSSSS', 'this is des', '70', '71', '72', '', '', '', 'backblue.gif', 'rejected', '2019-11-29 19:57:07', 3, '2019-11-29 19:57:07', NULL, 0, 3, NULL, NULL),
(13, 'khan', 'hunain', 'adil', 'civil', 'haq', 'LMSSSSS', NULL, 'this is khan project description', '40', '89', '81', '', '2019', '', '', 'backblue.gif', 'approved', '2019-11-30 15:24:27', 3, '2019-11-30 15:24:27', NULL, 0, 5, NULL, NULL),
(14, 'rameez', 'touqeer', 'shoaib', '2019', 'cs', 'haris', NULL, 'LMSSSSS', 'this is project description', '85', '87', '65', '', '', '', 'fade.gif', 'request', '2019-11-30 15:29:04', 3, '2019-11-30 15:29:04', NULL, 0, 3, NULL, NULL),
(15, 'mahad', 'saad', 'adil', '2019', 'cs', 'saad', NULL, 'LMSSSSS', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aspernatur vitae placeat, iusto voluptates dolore, ipsam excepturi dicta autem sed deleniti obcaecati debitis fugit reiciendis molestiae earum, quam laboriosam hic!\r\n', '34', '36', '38', 'mahadkhan809@gmail.com', '', '', 'fade.gif', 'rejected', '2019-11-30 15:30:54', 3, '2019-11-30 15:30:54', NULL, 0, 1, NULL, 1),
(16, 'rameez', 'qureshi', 'jawad', '2019', 'cs', 'saad', 'haris', 'LMSSSSS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled ', '1', '2', '3', 'rmz@gmail.com', 'q@gmail.com', 'j@gmail.com', 'fade.gif', 'request', '2019-12-02 17:36:23', 3, '2019-12-02 17:36:23', NULL, 0, 1, 3, 0);

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
(1, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:48:05', 1),
(2, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:48:38', 1),
(3, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:48:40', 1),
(4, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:48:41', 1),
(5, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:48:41', 1),
(6, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:48:42', 1),
(7, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:51:41', 1),
(8, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:54:09', 1),
(9, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:54:11', 1),
(10, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:57:38', 1),
(11, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:58:45', 1),
(12, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048', 'cs', '2017', '2019-12-02 19:59:33', 1);

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
(1, 1, 'Abbas', 'haider@example.com', '0192023a7bbd73250516f069df18b500'),
(2, 2, 'zameer', 'ahsan@example.com', '3d68b18bd9042ad3dc79643bde1ff351'),
(3, 3, 'khan', 'sarah@example.com', 'ec26202651ed221cf8f993668c459d46'),
(5, 3, 'ab haq', '200', '5ec58a99d35c960efccea3d29639b048');

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
(1, 'saad', 'cs', 'haider@example.com', '1234567', NULL, '2019-11-28 19:59:50', 1, 1, 'mahad'),
(2, 'mahad', 'cs', 'haider@example.com', '1234567', NULL, '2019-11-28 19:59:55', 1, 1, 'mahad'),
(3, 'haris', 'cs', 'haider@example.com', '1234567', NULL, '2019-11-28 20:09:41', 1, 1, 'mahad'),
(4, 'mahad', 'cs', 'haider@example.com', '1234567', NULL, '2019-11-28 20:09:44', 1, 1, 'mahad'),
(5, 'haq', 'civil', 'sarah@example.com', '123456', NULL, '2019-11-28 20:18:29', 2, 2, 'mahad'),
(6, 'haq', 'civil', 'sarah@example.com', '123456', NULL, '2019-11-28 20:18:32', 2, 2, 'mahad'),
(7, 'haq', 'civil', 'sarah@example.com', '123456', NULL, '2019-11-28 20:18:36', 2, 2, 'mahad');

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
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `dept_id` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `dept_id` FOREIGN KEY (`d_id`) REFERENCES `departments` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
