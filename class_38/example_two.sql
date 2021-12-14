-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 12:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `image` text NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `mobile`, `image`, `user_type`) VALUES
(2, ' Hira Khan', 'hira@gmail.com', '202cb962ac59075b964b07152d234b70', '0186324597', '../assets/img/3.jpg', 0),
(17, 'Reahana Gomes', 'reahana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '018693548785', ' ../assets/img/hello-kitty-wallpaper-37_605.jpg', 1),
(19, 'Ruby Saha', 'ruby@gmail.com', '202cb962ac59075b964b07152d234b70', '01236987525', ' ../assets/img/6.jpg', 0),
(20, 'Fahad Islam', 'fahad@hotmail.com', '202cb962ac59075b964b07152d234b70', '01369857472', ' ../assets/img/17.jpg', 0),
(21, 'Mimi Rahman', 'mimi@gmail.com', '202cb962ac59075b964b07152d234b70', '0196318669', ' ../assets/img/13.jpg', 0),
(22, 'Kartik Sen', 'ksen@yahoo.com', '202cb962ac59075b964b07152d234b70', '01963245800', ' ../assets/img/16.jpg', 0),
(23, 'Angel Cruze', 'angel@gmail.com', '202cb962ac59075b964b07152d234b70', '01832698745', ' ../assets/img/15.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `subject` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `student_id`, `subject`) VALUES
(1, 19, 'Bangla'),
(2, 19, 'English'),
(3, 19, 'Math'),
(4, 21, 'Chemistry'),
(5, 21, 'Biology'),
(6, 21, 'Physics'),
(7, 22, 'Bangla'),
(8, 22, 'Math'),
(9, 22, 'Physics'),
(10, 22, 'CSE'),
(11, 22, 'Psychology');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `mobile`, `image`) VALUES
(1, 'Amanda Gomes', 'amanda@gmail.com', '01235974523', ''),
(3, 'Tapan Chowdhury ', 'tapan@gmail.com', '01236987230', ''),
(5, 'Mina', 'mina@gmail.com', '01236977425', ''),
(6, 'Karim', 'karim@gmail.com', '01736207425', ''),
(7, 'Reahana', ' reahana@gmail.com', '012365489966', ''),
(9, 'Amanda r', ' sdf@dgf.dfg', '1232300', ''),
(11, 'Amanda Reahana', ' reahana1@gmail.com', '012345678900', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
