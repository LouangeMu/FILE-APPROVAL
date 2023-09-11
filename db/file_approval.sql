-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 12:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_approval`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_com`
--

CREATE TABLE `tbl_com` (
  `comm_id` int(10) NOT NULL,
  `sender` int(10) NOT NULL,
  `receiver` int(10) NOT NULL,
  `pro` int(10) NOT NULL,
  `msgbody` text NOT NULL,
  `sent_date` int(11) NOT NULL DEFAULT current_timestamp(),
  `stat` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `p_id` int(10) NOT NULL,
  `p_code` varchar(50) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_desc` text NOT NULL,
  `link` text NOT NULL,
  `p_owner` varchar(200) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(10) NOT NULL,
  `deadline` date DEFAULT NULL,
  `dateclosed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`p_id`, `p_code`, `p_name`, `p_desc`, `link`, `p_owner`, `received_date`, `status`, `deadline`, `dateclosed`) VALUES
(14, 'PR-023219', 'test', '', 'http://localhost/files-approval-system', '23', '2023-07-29 22:13:07', 4, NULL, ''),
(15, 'PR-026777', 'kkkk', '', 'kkkkk', '23', '2023-07-29 22:13:12', 4, '2023-10-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `sc_id` int(10) NOT NULL,
  `ui` int(10) NOT NULL,
  `feasiblility` int(10) NOT NULL,
  `entegrity` int(10) NOT NULL,
  `accuracy` int(10) NOT NULL,
  `project` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `scoretime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_score`
--

INSERT INTO `tbl_score` (`sc_id`, `ui`, `feasiblility`, `entegrity`, `accuracy`, `project`, `comment`, `status`, `scoretime`) VALUES
(15, 0, 0, 0, 0, 'PR-023219', '', 2, '2023-07-29 10:00:18'),
(17, 89, 89, 89, 89, 'PR-023219', 'jjjjjjjj', 2, '2023-07-29 10:01:13'),
(18, 8990, 9090, 909, 9009, 'PR-023219', 'jknkljnkj', 2, '2023-07-29 10:03:30'),
(19, 9, 9, 9, 9, 'PR-023219', 'jjjj', 2, '2023-07-29 10:15:34'),
(20, 7, 7, 7, 7, 'PR-023219', 'kjljh', 2, '2023-07-29 11:14:39'),
(21, 89, 89, 89, 89, 'PR-023219', 'jkhk', 2, '2023-07-29 11:14:54'),
(22, 898888, 8888, 8888, 88888, 'PR-023219', 'hhhhhhh', 2, '2023-07-29 11:51:16'),
(23, 9, 9, 9, 9, 'PR-023219', 'hello', 2, '2023-07-29 13:07:43'),
(24, 0, 0, 0, 0, 'PR-026777', '', 1, '2023-07-29 12:59:07'),
(25, 9, 9, 9, 9, 'PR-023219', 'hello', 2, '2023-07-29 13:09:33'),
(26, 9, 9, 9, 9, 'PR-023219', 'hello', 2, '2023-07-29 20:49:47'),
(27, 10, 9, 9, 9, 'PR-023219', 'qqqqqqq', 2, '2023-07-29 20:57:54'),
(28, 10, 9, 9, 9, 'PR-023219', 'sadasdasd', 2, '2023-07-29 20:58:52'),
(29, 10, 10, 10, 10, 'PR-023219', 'bertin', 2, '2023-07-29 21:01:17'),
(30, 2, 10, 10, 10, 'PR-023219', 'hello', 2, '2023-07-29 21:01:54'),
(31, 2, 2, 10, 10, 'PR-023219', 'q', 2, '2023-07-29 21:02:27'),
(32, 2, 2, 2, 10, 'PR-023219', 'e', 2, '2023-07-29 21:03:33'),
(33, 2, 2, 2, 3, 'PR-023219', 'q', 2, '2023-07-29 21:06:30'),
(34, 10, 10, 10, 10, 'PR-023219', 'qa', 2, '2023-07-29 21:11:01'),
(35, 1, 1, 1, 1, 'PR-023219', 'dede', 2, '2023-07-29 21:11:34'),
(36, 10, 1, 1, 1, 'PR-023219', 'salama bertin', 1, '2023-07-29 21:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `st_id` int(10) NOT NULL,
  `stat_name` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`st_id`, `stat_name`) VALUES
(1, 'active'),
(2, 'Not active'),
(3, 'pending_assign'),
(4, 'Ongoing'),
(5, 'pending feedback'),
(6, 'completed'),
(7, 'customer withdrew'),
(8, 'New'),
(9, 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_assign`
--

CREATE TABLE `tbl_task_assign` (
  `assign_id` int(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `ass_eng` int(10) NOT NULL,
  `ass_by` int(10) NOT NULL,
  `ass_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ass_stat` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task_assign`
--

INSERT INTO `tbl_task_assign` (`assign_id`, `p_id`, `ass_eng`, `ass_by`, `ass_date`, `ass_stat`) VALUES
(19, 'PR-023219', 20, 14, '2023-07-29 21:19:32', 1),
(20, 'PR-026777', 20, 14, '2023-07-29 21:19:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `stat` int(10) NOT NULL DEFAULT 1,
  `insdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fname`, `lname`, `username`, `phone`, `email`, `role`, `password`, `stat`, `insdate`) VALUES
(14, 'bertin', 'tuyishime', 'shiba', '07283742387', 'tutu@gmail.com', 1, '123', 1, '2023-07-24 00:18:55'),
(20, 'ayaa', 'nakamura', 'aya', '+250786232347', 'aya@gmail.com', 3, 'kkkkk@123!', 1, '2023-07-24 00:44:08'),
(23, 'Louange', 'TUYISHIME', 'kjk', '+250786232347', 'kkk@kk.com', 2, 'kjk@123!', 1, '2023-07-24 23:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(10) NOT NULL,
  `role` varchar(200) NOT NULL,
  `stat` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`, `stat`) VALUES
(1, 'admin', 1),
(2, 'customer', 1),
(3, 'Engineer', 1),
(4, 'new', 1),
(5, 'pending review', 1),
(6, 'closed', 1),
(7, 'suspended', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_com`
--
ALTER TABLE `tbl_com`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_task_assign`
--
ALTER TABLE `tbl_task_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_com`
--
ALTER TABLE `tbl_com`
  MODIFY `comm_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_score`
--
ALTER TABLE `tbl_score`
  MODIFY `sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_task_assign`
--
ALTER TABLE `tbl_task_assign`
  MODIFY `assign_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
