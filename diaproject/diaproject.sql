-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 04:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `signupdata`
--

CREATE TABLE `signupdata` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdata`
--

INSERT INTO `signupdata` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'vv', 'vv@gmail.com', 'cfcd208495d565ef66e7dff9f98764da'),
(2, 'vm ', 'testing@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(3, 'vm', 'vm@gmail.com', 'cfcd208495d565ef66e7dff9f98764da'),
(34, 'test 2', 'test2@gmail.com', '202cb962ac59075b964b07152d234b70'),
(70, 't', 't@gmail.com', 'cfcd208495d565ef66e7dff9f98764da'),
(123, 'test test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(390, 'vlera', 'testing4@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9'),
(546, 'test 3', 'test3@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(777, 'test', 'test1@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(2223, 'Vlera ', 'vlera@gmail.com', '670b14728ad9902aecba32e22fa4f6bd'),
(2224, 'testing0', 'testing0@gmail.com', 'cfcd208495d565ef66e7dff9f98764da'),
(4545, 'Vlera', 'vlera22@gmail.com', 'f1b708bba17f1ce948dc979f4d7092bc');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `age`, `gender`, `course`) VALUES
(1, 'David Gates', 'david@gmail.com', '18', 'male', 'back-end-development'),
(2, 'Ellie Hamilton', 'ellie@gmail.com', '20', 'female', 'front-end-development'),
(3, 'Susan Williams', 'susan@gmail.com', '19', 'female', 'back-end-development'),
(4, 'Sarah Stone', 'sarah@gmail.com', '17', 'female', 'front-end-development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signupdata`
--
ALTER TABLE `signupdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
