-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 06:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_02_082928_create_tbl_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', 'e0d7311192ff83c7632e7b449d5f29f7a4a8ec6194e122f7e4a4623909f55dc3', '2016-09-24 08:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(10) NOT NULL,
  `emp_id` int(3) NOT NULL,
  `work_in` datetime NOT NULL,
  `work_out` datetime NOT NULL,
  `guest` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `emp_id`, `work_in`, `work_out`, `guest`, `purpose`, `contact`) VALUES
(1, 1, '2016-09-13 10:15:17', '2016-09-13 06:35:17', '', 'work2', '234343'),
(3, 1, '2016-09-21 10:10:00', '2016-09-21 20:24:00', '', 'work', '0'),
(4, 0, '2016-09-21 17:38:00', '2016-09-21 21:38:00', 'Raja', 'Demo', '29379374'),
(5, 1, '2016-09-23 11:53:00', '2016-09-23 11:59:00', '', 'work', '0'),
(7, 0, '2016-09-22 15:04:00', '2016-09-23 02:05:00', 'Surendhar', 'Consulting', '937497398'),
(9, 0, '2016-09-23 15:10:00', '2016-09-23 16:10:00', 'anu', 'ajlfjdl', '92374973'),
(10, 0, '2016-10-13 15:11:00', '2016-10-13 18:11:00', 'Hello Updates', 'testing', '293749734'),
(11, 15, '2016-09-24 10:15:00', '2016-09-24 18:12:00', '', 'work', '0'),
(12, 10, '2016-09-23 11:53:00', '2016-09-23 11:59:00', '', 'work', '0'),
(13, 11, '2016-09-23 11:53:00', '2016-09-23 02:05:00', '', 'work', '0'),
(14, 11, '2016-09-23 11:53:00', '2016-09-23 02:05:00', '', 'work', '0'),
(15, 12, '2016-09-23 11:53:00', '2016-09-23 11:59:00', '', 'work', '0'),
(16, 13, '2016-09-23 11:53:00', '2016-09-23 11:59:00', '', 'work', '0'),
(17, 14, '2016-09-23 11:53:00', '2016-09-23 11:59:00', '', 'work', '0'),
(28, 1, '2016-09-26 16:35:43', '2016-09-26 19:22:58', '', 'work', '0'),
(30, 1, '2019-09-27 12:47:28', '2019-09-27 18:47:37', '', 'work', '0'),
(31, 1, '2016-09-30 18:20:42', '2016-09-30 18:20:42', '', 'work', '0'),
(36, 1, '2019-11-21 12:23:45', '2019-11-21 12:24:35', '', 'work', '0'),
(37, 23, '2019-12-17 22:15:29', '2019-12-17 22:15:29', '', 'work', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `id` int(3) NOT NULL,
  `department` varchar(100) NOT NULL,
  `function` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dept`
--

INSERT INTO `tbl_dept` (`id`, `department`, `function`) VALUES
(1, 'Accounts Main', 'Accounting Functionality Issues'),
(2, 'Sales', 'Marketing & Sales'),
(3, 'Development', 'software coding'),
(4, 'Management', 'top level management administration');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
  `id` int(2) NOT NULL,
  `post_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `father` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `salary` double NOT NULL,
  `hourly` decimal(5,2) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `address` longtext NOT NULL,
  `notes` varchar(300) NOT NULL,
  `doj` date NOT NULL,
  `password` varchar(300) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `resume` varchar(300) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`id`, `post_id`, `name`, `sex`, `father`, `dob`, `mobile`, `email`, `salary`, `hourly`, `facebook`, `twitter`, `github`, `linkedin`, `address`, `notes`, `doj`, `password`, `photo`, `resume`, `status`) VALUES
(1, 2, 'Karthik swot', '', 'nagarajan', '1984-09-18', 927973, 'employee@admin.com', 15000, '25.00', 'nkmswot', 'nkmswot', '', 'nkmswot', 'hello welcome\r\n																																																																																									\r\n								\r\n								\r\n								\r\n								\r\n								\r\n								\r\n								\r\n								\r\n								\r\n								', '', '2016-09-10', '$2y$10$YvzGh5kyKWpEQKJPWXDe2evmfF6ztLPiaNBU6N553Z9lzPbbKAM4.', '1.jpg', '1.pdf', 1),
(10, 3, 'Kumar', '', 'Kumar', '1970-01-01', 3702740, 'kumar@ymail.com', 15000, '0.00', 'fbkuamr', 'twitkumar', 'gitkumar', 'linkkumar', 'aljdflkajsdf\r\nadlfkjaldf\r\nalkdflasdf\r\n', 'target oriented, monthly sales should be 5l', '2015-09-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '10.jpg', '', 1),
(11, 3, 'Kumar', '', 'Kumar', '1970-01-01', 3702740, 'kumar@ymail.com', 15000, '0.00', 'fbkuamr', 'twitkumar', 'gitkumar', 'linkkumar', '									aljdflkajsdf\r\nadlfkjaldf\r\nalkdflasdf\r\n\r\n								', 'target oriented, monthly sales should be 5l', '2015-09-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '11.jpg', '', 1),
(12, 1, 'kumar', '', 'adfadfd', '2016-03-30', 0, '', 0, '0.00', '', '', '', '', '								', '', '1970-01-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', 'default.jpg', '', 1),
(13, 1, 'Testing', '', '', '1970-01-01', 0, '', 0, '0.00', '', '', '', '', '								', '', '1970-01-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '13.jpg', '13.pdf', 1),
(14, 1, 'hello', '', '', '2016-03-02', 0, '', 0, '0.00', '', '', '', '', '								', '', '1970-01-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '14.jpg', '14.pdf', 1),
(15, 1, 'Angelina Jolie', '', 'klajdfljd', '1978-09-10', 937498734, 'nljadslf', 5000, '0.00', 'adfdsfd', '', '', '', 'akjdlkjdl                                ', '', '1970-01-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '15.jpg', '15.pdf', 1),
(16, 3, 'Sasikala', '', 'adfasdfd', '2016-09-24', 2147483647, 'djldj@gmail.com', 8000, '0.00', '', '', '', '', 'aljdlfkjad\r\naldjldfd                                ', 'Recommended by MD', '2016-09-26', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '16.jpg', '', 1),
(17, 3, 'Sasikala', '', 'adfasdfd', '2016-09-24', 2147483647, 'djldj@gmail.com', 8000, '0.00', '', '', '', '', 'aljdlfkjad\r\naldjldfd                                ', 'Recommended by MD', '2016-09-26', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '17.jpg', '', 1),
(18, 3, 'Sasikala', '', 'adfasdfd', '2016-09-24', 2147483647, 'djldj@gmail.com', 8000, '0.00', '', '', '', '', 'aljdlfkjad\r\naldjldfd                                ', 'Recommended by MD', '2016-09-26', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '18.jpg', '', 1),
(19, 3, 'Sasikala', '', 'adfasdfd', '2016-09-24', 2147483647, 'djldj@gmail.com', 8000, '0.00', '', '', '', '', 'aljdlfkjad\r\naldjldfd                                ', 'Recommended by MD', '2016-09-26', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '19.jpg', '', 1),
(20, 3, 'Sasikala', '', 'adfasdfd', '2016-09-24', 2147483647, 'djldj@gmail.com', 8000, '0.00', '', '', '', '', 'aljdlfkjad\r\naldjldfd                                ', 'Recommended by MD', '2016-09-26', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '20.jpg', '', 1),
(21, 3, 'Sasikala', '', 'adfasdfd', '2016-09-24', 2147483647, 'djldj@gmail.com', 8000, '0.00', '', '', '', '', 'aljdlfkjad\r\naldjldfd                                ', 'Recommended by MD', '2016-09-26', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '21.jpg', '', 1),
(22, 1, 'Pooja', 'male', 'sfsfsdf', '2019-12-09', 42424, 'fsldjflds@gmail.com', 2500, '0.00', '', '', '', '', '', '', '2019-12-09', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '22.jpg', '', 1),
(23, 4, 'test user', 'male', 'fasfsdf', '2019-12-17', 2147483647, 'newemp@gmail.com', 2500, '0.00', '', '', '', '', 'dfafsd\r\nadfsfljsdf\r\nadfljsaldfsd\r\n', '', '1970-01-01', '$2y$10$t0boLV6ZbWr/Yt7WurIIXOKz6nzUd8ChP.rO0NW4OAYEh/UHnWYh2', '23.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `id` int(10) NOT NULL,
  `emp_id` int(3) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(200) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0->pending, 1->appvoed, 2->declined'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`id`, `emp_id`, `start_date`, `end_date`, `reason`, `status`) VALUES
(5, 1, '2016-09-26', '2016-09-30', 'vacation', 1),
(6, 1, '2017-01-28', '2017-01-31', 'Family Tour', 0),
(7, 1, '2019-11-23', '2019-11-28', 'Vacation at Goa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL,
  `log_time` datetime NOT NULL,
  `log` varchar(40) NOT NULL,
  `info` varchar(100) NOT NULL,
  `cat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='log everything here';

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `log_time`, `log`, `info`, `cat`) VALUES
(1, '2016-09-24 14:45:22', 'New Appoint', '21', 'Employees'),
(2, '2016-09-24 14:47:39', 'Profile Updated', '1', 'Employees'),
(3, '2016-09-24 15:17:25', 'Settings Updated', 'Settings Values Updated', 'Settings'),
(4, '2016-09-24 15:17:48', 'Settings Updated', 'Settings Values Updated', 'Settings'),
(5, '2016-09-24 15:41:07', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(6, '2016-09-24 16:02:35', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(7, '2016-09-24 16:04:04', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(8, '2016-09-24 16:04:36', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(9, '2016-09-24 16:04:44', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(10, '2016-09-24 16:05:35', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(11, '2016-09-24 16:05:45', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(12, '2016-09-24 16:06:11', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(13, '2016-09-24 16:06:40', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(14, '2016-09-24 16:08:12', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(15, '2016-09-24 16:08:56', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(16, '2016-09-24 16:13:38', 'Payroll Generated', '2016-09-1 -2016-09-30 ', 'Payroll'),
(17, '2016-09-26 17:15:31', 'Profile Updated', '1', 'Employees'),
(18, '2016-09-26 20:12:16', 'Leave Deleted', '4', 'Leave'),
(19, '2016-09-26 20:12:58', 'Leave Deleted', '3', 'Leave'),
(20, '2016-09-26 20:13:20', 'Leave Updated', '1', 'Leave'),
(21, '2016-09-26 20:13:21', 'Leave Updated', '1', 'Leave'),
(22, '2016-09-26 20:13:26', 'Leave Deleted', '1', 'Leave'),
(23, '2016-09-26 20:13:45', 'Time Entry Deleted', '38', 'Timesheet'),
(24, '2016-09-26 20:13:52', 'Time Entry Deleted', '29', 'Timesheet'),
(25, '2016-09-26 20:13:59', 'Time Entry Deleted', '30', 'Timesheet'),
(26, '2016-09-26 20:20:59', 'Settings Updated', 'Settings Values Updated', 'Settings'),
(27, '2016-09-27 12:24:52', 'Settings Updated', 'Settings Values Updated', 'Settings'),
(28, '2016-09-27 14:09:01', 'Profile Updated', '1', 'Employees'),
(29, '2016-09-27 14:39:01', 'Profile Updated', '1', 'Employees'),
(30, '2016-09-27 14:44:50', 'Profile Updated', '1', 'Employees'),
(31, '2016-09-27 14:46:43', 'Profile Updated', '10', 'Employees'),
(32, '2016-09-27 14:47:04', 'Profile Updated', '11', 'Employees'),
(33, '2016-09-27 14:47:21', 'Profile Updated', '13', 'Employees'),
(34, '2016-09-27 14:47:41', 'Profile Updated', '14', 'Employees'),
(35, '2016-09-27 14:48:01', 'Profile Updated', '15', 'Employees'),
(36, '2016-09-27 14:48:01', 'Profile Updated', '15', 'Employees'),
(37, '2016-09-27 14:48:20', 'Profile Updated', '16', 'Employees'),
(38, '2016-09-27 14:48:41', 'Profile Updated', '17', 'Employees'),
(39, '2016-09-27 14:49:10', 'Profile Updated', '19', 'Employees'),
(40, '2016-09-27 14:49:29', 'Profile Updated', '20', 'Employees'),
(41, '2016-09-27 14:56:07', 'Profile Updated', '1', 'Employees'),
(42, '2016-09-27 14:56:25', 'Profile Updated', '13', 'Employees'),
(43, '2016-09-27 14:56:48', 'Profile Updated', '14', 'Employees'),
(44, '2016-09-27 14:57:12', 'Profile Updated', '15', 'Employees'),
(45, '2016-09-27 15:32:43', 'Profile Updated', '1', 'Employees'),
(46, '2016-09-27 15:34:01', 'Profile Updated', '1', 'Employees'),
(47, '2017-01-27 20:09:53', 'Settings Updated', 'Settings Values Updated', 'Settings'),
(48, '2019-12-09 14:47:38', 'New Appoint', '22', 'Employees'),
(49, '2019-12-17 07:46:14', 'Profile Updated', '22', 'Employees'),
(50, '2019-12-17 13:59:51', 'Settings Updated', 'Settings Values Updated', 'Settings'),
(51, '2019-12-17 14:00:16', 'Profile Updated', '1', 'Employees'),
(52, '2019-12-17 14:01:34', 'Project Created', '4', 'Project'),
(53, '2019-12-17 14:02:01', 'Project Updated', '2', 'Project'),
(54, '2019-12-17 14:19:25', 'New Appoint', '23', 'Employees'),
(55, '2019-12-17 14:25:45', 'Profile Updated', '23', 'Employees'),
(56, '2019-12-17 14:54:34', 'Payroll Generated', '2019-11-1 -2019-12-17 ', 'Payroll');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payroll`
--

CREATE TABLE `tbl_payroll` (
  `id` int(20) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `pay` int(10) NOT NULL,
  `incentive` int(6) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `ded` decimal(10,2) NOT NULL,
  `net` decimal(10,2) NOT NULL,
  `dop` date NOT NULL,
  `period_frm` date NOT NULL,
  `period_to` date NOT NULL,
  `method` varchar(60) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `trans_mode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='payroll table';

--
-- Dumping data for table `tbl_payroll`
--

INSERT INTO `tbl_payroll` (`id`, `emp_id`, `pay`, `incentive`, `tax`, `ded`, `net`, `dop`, `period_frm`, `period_to`, `method`, `trans_id`, `trans_mode`) VALUES
(66, 1, 2000, 100, '262.50', '105.00', '1732.50', '2016-09-24', '2016-09-01', '2016-09-30', '1', '', ''),
(67, 10, 500, 0, '62.50', '25.00', '412.50', '2016-09-24', '2016-09-01', '2016-09-30', '1', '', ''),
(68, 11, 1000, 0, '125.00', '50.00', '825.00', '2016-09-24', '2016-09-01', '2016-09-30', '1', '', ''),
(69, 15, 167, 0, '20.88', '8.35', '137.78', '2016-09-24', '2016-09-01', '2016-09-30', '1', '', ''),
(70, 1, 500, 0, '62.50', '25.00', '412.50', '2019-12-17', '2019-11-01', '2019-12-17', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(3) NOT NULL,
  `post` varchar(100) NOT NULL,
  `dept_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `post`, `dept_id`) VALUES
(1, 'Accounts Assistant', 1),
(2, 'Sales Manager', 2),
(3, 'Marketing Executive', 2),
(4, 'Programmer2', 3),
(5, 'Testing Enginer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `id` int(5) NOT NULL,
  `proj_title` varchar(100) NOT NULL,
  `proj_desc` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `deadline` date NOT NULL,
  `users` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0->current, 1->finished, 2->stopped'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `proj_title`, `proj_desc`, `start_date`, `deadline`, `users`, `status`) VALUES
(1, 'Alberchin', 'MLM Site Project2', '2016-09-11', '2016-09-30', '', 1),
(2, 'HR Envato Project', 'kjalfdadlfjkds', '2016-09-23', '2016-09-30', '', 2),
(3, 'Proj Management', 'Project Mgmt Software', '2016-09-23', '2016-10-01', '', 0),
(4, 'HRM Core update', 'HRM script core update and modules added', '2019-12-17', '2019-12-25', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(3) NOT NULL,
  `field` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `category` int(1) NOT NULL COMMENT '1->company, 2->ded'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `field`, `value`, `category`) VALUES
(1, 'tax', '12.5', 2),
(3, 'pf', '5', 2),
(4, 'add1', 'New Street1', 1),
(5, 'add2', 'Main Road', 1),
(6, 'city', 'Taxas', 1),
(7, 'country', 'United States', 1),
(8, 'Zip', '67810', 1),
(9, 'phone', '+1 2348374922', 1),
(10, 'email', 'smarthr@company.com', 1),
(11, 'web', 'www.company.com', 1),
(12, 'company', 'SMART HRM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timesheet`
--

CREATE TABLE `tbl_timesheet` (
  `id` int(10) NOT NULL,
  `emp_id` int(3) NOT NULL,
  `proj_id` int(5) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `task` varchar(150) NOT NULL,
  `notes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_timesheet`
--

INSERT INTO `tbl_timesheet` (`id`, `emp_id`, `proj_id`, `start_time`, `end_time`, `task`, `notes`) VALUES
(73, 1, 3, '2019-11-21 04:11:50', '2019-11-21 04:11:50', 'hello word ', 'dafdfds'),
(74, 1, 2, '2019-11-21 04:52:34', '2019-11-21 04:52:54', 'hello', 'sdfsdfsd'),
(75, 1, 2, '2019-11-21 04:55:40', '2019-11-21 04:55:45', '', ''),
(76, 1, 2, '2019-11-21 08:53:15', '2019-11-21 08:53:15', 'fasfdsf', 'safsdfsd'),
(77, 1, 2, '2019-11-21 08:55:36', '2019-11-21 08:55:36', 'fasdfsdf', 'adfsdfsd'),
(78, 1, 2, '2019-11-21 08:55:58', '2019-11-21 08:55:58', 'adfsdf', 'adfsdfsd'),
(79, 1, 2, '2019-11-21 11:11:56', '2019-11-21 11:12:04', 'afdsfds', 'adfsdfdsfsd'),
(80, 1, 2, '2019-11-21 11:17:00', '2019-11-21 11:17:12', 'hello', 'dfafds'),
(81, 1, 2, '2019-11-21 11:17:41', '2019-11-21 11:17:41', 'hello world', 'dfjadlsjfd'),
(82, 1, 2, '2019-11-21 11:18:07', '2019-11-21 11:18:07', 'adfdsfsd', 'sdfdsfdsfs'),
(83, 1, 2, '2019-11-21 11:19:06', '2019-11-21 11:19:06', 'adfsfsdf', 'adfsdfds'),
(84, 1, 2, '2019-11-21 11:23:16', '2019-11-21 11:23:55', 'asdfsdfd', 'ssdfdsf'),
(85, 1, 2, '2019-11-21 11:24:51', '2019-11-21 11:24:51', 'adfsafsd', 'adfdsfds'),
(86, 1, 2, '2019-11-21 11:26:58', '2019-11-21 11:26:58', '', ''),
(87, 1, 2, '2019-11-15 11:27:15', '2019-11-15 11:28:00', '', ''),
(88, 1, 2, '2019-11-17 11:28:04', '2019-11-17 11:35:42', 'adfdasf', 'adsfsdf'),
(89, 1, 2, '2019-11-18 11:40:53', '2019-11-18 11:41:21', 'afdsf', 'adfadfsd'),
(90, 1, 2, '2019-11-20 11:41:26', '2019-11-20 11:41:33', '', ''),
(91, 1, 2, '2019-11-19 11:42:54', '2019-11-19 11:44:37', 'fasfsdf', 'safsdfd'),
(92, 1, 2, '2019-11-21 13:05:30', '2019-11-21 13:06:10', 'adsfdsf', 'adfsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Karthik', 'admin@demo.com', '$2y$10$j3quwoQbbFeLXSoLe5rheO9MiqXwc3kxy0QteEwYgdU2V2qG9aYoO', 'N8O2m8eaIwkND8RznSKtotdMUdjSn84P6VtcQlNbs4Ra3RmxjIutz1KhxeAO', '2016-09-10 18:20:27', '2019-12-17 11:23:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payroll`
--
ALTER TABLE `tbl_payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_payroll`
--
ALTER TABLE `tbl_payroll`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
