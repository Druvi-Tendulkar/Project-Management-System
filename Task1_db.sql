-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_project`
--

DROP TABLE IF EXISTS `add_project`;
CREATE TABLE `add_project` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `proj_name` varchar(300) NOT NULL,
  `client` varchar(300) NOT NULL,
  `technology` varchar(300) NOT NULL,
  `proj_desc` varchar(500) NOT NULL,
  `type` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project`
--

INSERT INTO `add_project` (`id`, `username`, `proj_name`, `client`, `technology`, `proj_desc`, `type`, `status`, `start_date`, `end_date`) VALUES
(1, 'druvitendulkar', 'XYZ', 'ABCD', 'HTML, CSS, JavaScript', 'Attendance Management System', 'individual', 'In queue', '2021-11-30', '2021-12-25'),
(2, 'druvitendulkar', 'ABC', 'XYZ', 'html, css, java', 'Project Management System', 'group', 'In progress', '2021-12-01', '2022-01-01'),
(3, 'druvitendulkar', 'java', 'hdf', 'java', 'App ', 'individual', 'Completed', '2021-12-28', '2022-01-09'),
(4, 'johngomes', 'task management', 'peter fernandes', 'html, bootstrap, mysql, php', 'this project is a task management system', 'individual', 'Completed', '2021-12-01', '2021-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email_id`, `phoneno`, `gender`, `password`, `confirm_password`) VALUES
(1, 'druvitendulkar', 'druvitendulkar@gmail.com', '+919637813331', 'Female', 'druvi', 'druvi'),
(2, 'johngomes', 'john@gmail.com', '8902574973', 'Male', 'john', 'john');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_project`
--
ALTER TABLE `add_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_project`
--
ALTER TABLE `add_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
