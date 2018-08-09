-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 04:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_nanalandia`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `direction` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `marital_status` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cellphone` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `academic_level` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `position` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `wash` int(1) DEFAULT NULL,
  `child_care` int(1) DEFAULT NULL,
  `cook` int(1) DEFAULT NULL,
  `drive` int(1) DEFAULT NULL,
  `iron` int(1) DEFAULT NULL,
  `gardening` int(1) DEFAULT NULL,
  `elderly_care` int(1) DEFAULT NULL,
  `any_desease` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `employment_situation` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `employment_experience` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `how_often_do_you_drink_alcohole` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `how_often_do_you_smoke` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `comments` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `employment_experience_time` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `employment_experience_time2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `last_job` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `hour_to_job` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `night_or_day` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `how_much_do_you_want_earn` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `work_reference` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `personal_references` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiring`
--

CREATE TABLE `hiring` (
  `id` int(11) NOT NULL,
  `housing_type` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `floor_number` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `bedrooms_number` int(3) DEFAULT NULL,
  `square_meter` int(10) DEFAULT NULL,
  `people_in_house` int(3) DEFAULT NULL,
  `children` int(1) DEFAULT NULL,
  `children_number` int(2) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `dog` int(1) DEFAULT NULL,
  `bird` int(1) DEFAULT NULL,
  `cat` int(1) DEFAULT NULL,
  `no_pet` int(1) DEFAULT NULL,
  `other` int(1) DEFAULT NULL,
  `other_pet` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `housing_type2` int(2) DEFAULT NULL,
  `employee_type` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `job_type` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `range_age_employee` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `employee_nationality` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `academic_level` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `academic_level2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `christian` int(1) DEFAULT NULL,
  `catholic` int(1) DEFAULT NULL,
  `indifferent_religion` int(1) DEFAULT NULL,
  `other_religion` int(1) DEFAULT NULL,
  `other_religion_text` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `hour_modal` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `clean` int(1) DEFAULT NULL,
  `wash` int(1) DEFAULT NULL,
  `child_security` int(1) DEFAULT NULL,
  `cook` int(1) DEFAULT NULL,
  `iron` int(1) DEFAULT NULL,
  `other_job` int(1) DEFAULT NULL,
  `hour_modal2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `starting_hour` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `end_hour` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `payment` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `transport_help` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `facebook` int(1) DEFAULT NULL,
  `instagram` int(1) DEFAULT NULL,
  `tv` int(1) DEFAULT NULL,
  `newspaper` int(1) DEFAULT NULL,
  `recomendation` int(1) DEFAULT NULL,
  `other_listen_us` int(1) DEFAULT NULL,
  `other_listen_us_text` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `comments` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `agreement` int(1) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `hiring_id` int(11) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `receipt` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cellphone` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direction` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `sector` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `city` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `cellphone`, `direction`, `sector`, `city`, `email`, `password`, `date`, `status`, `type`) VALUES
(1, 'guru', 'brar', '1234564810', '1212121412', 'india', '1212', '121', 'test@gmail.com', '123456', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users-new`
--

CREATE TABLE `users-new` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cellphone` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direction` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `sector` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `city` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring`
--
ALTER TABLE `hiring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users-new`
--
ALTER TABLE `users-new`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hiring`
--
ALTER TABLE `hiring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users-new`
--
ALTER TABLE `users-new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
