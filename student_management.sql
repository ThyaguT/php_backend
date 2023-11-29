-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 09:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student management`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `initial_date` date NOT NULL,
  `final_date` date NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `s_id`, `feedback`, `initial_date`, `final_date`, `reply`) VALUES
(8, 4, 'woow', '2023-11-21', '2023-11-22', ''),
(10, 4, 'bad', '0000-00-00', '0000-00-00', ''),
(11, 4, 'not good', '2023-11-21', '0000-00-00', ''),
(12, 4, 'good', '2023-11-21', '0000-00-00', ''),
(13, 27, 'Good class', '2023-11-27', '0000-00-00', ''),
(14, 28, '', '2023-11-27', '0000-00-00', ''),
(15, 2, 'Good class', '2023-11-28', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`) VALUES
(1, 's@gmail.com', 9696);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `s_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` bigint(11) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`s_id`, `photo`, `name`, `course`, `email`, `password`, `phone`, `gender`, `dob`) VALUES
(1, '70dd7e13-34f7-49a8-8940-66b5fe393d643369361513134303492.jpg', 'Sreyu', '', 's@gmail.com', 9696, 9663852322, '', '0000-00-00 00:00:00'),
(2, 'e5727f38-e285-473c-bb13-cc55af492b093165447432543782252.jpg', 'Alwin', '', 'al@gmail.com', 5454, 8523698742, '', '0000-00-00 00:00:00'),
(3, '5bbf0e80-2c76-471b-9d71-f61ed34b966f347953034532179070.jpg', 'Martin', '', 'ma@gmail.com', 8888, 9023658547, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `photo`, `name`, `course`, `email`, `phone`) VALUES
(4, 'bimble-designs-2.jpg', 'Vandana', 'Flutter', 'vandana@gmail.com', 2147483647),
(5, 'bimble-designs-2.jpg', 'Akila', 'Flutter', 'adhi@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `users_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`users_id`, `photo`, `title`, `description`) VALUES
(0, '10b8c94f-4ca3-450f-b839-3e340940094c4314318393516876665.jpg', 'hii', 'dkjhfdsijghshgusiohvsid'),
(19, '7afe9d57-b355-4a4d-a23a-3ebb379dd3bf2170511772128748216.jpg', 'Flutter', 'FRONRTEND'),
(27, 'fdb80c75-dc34-4c76-b55a-c844e7d6c1fb1692556668744634136.jpg', 'Sreyas', 'kutti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `feedback_ibfk_1` (`s_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student_details` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
