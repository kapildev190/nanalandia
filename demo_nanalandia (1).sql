-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 07:58 AM
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
-- Table structure for table `assignedemployees`
--

CREATE TABLE `assignedemployees` (
  `id` int(11) NOT NULL,
  `employeeId` int(11) DEFAULT NULL,
  `requestId` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignedemployees`
--

INSERT INTO `assignedemployees` (`id`, `employeeId`, `requestId`, `created_at`) VALUES
(1, 1, 1, '2018-08-17 21:54:16');

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
  `email` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) COLLATE latin1_spanish_ci NOT NULL DEFAULT '1',
  `requestId` int(11) DEFAULT NULL COMMENT 'this is the id of request for which candidate is hired'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `age`, `direction`, `marital_status`, `phone`, `cellphone`, `academic_level`, `position`, `wash`, `child_care`, `cook`, `drive`, `iron`, `gardening`, `elderly_care`, `any_desease`, `employment_situation`, `employment_experience`, `how_often_do_you_drink_alcohole`, `how_often_do_you_smoke`, `comments`, `employment_experience_time`, `employment_experience_time2`, `last_job`, `hour_to_job`, `night_or_day`, `how_much_do_you_want_earn`, `work_reference`, `personal_references`, `email`, `date`, `status`, `requestId`) VALUES
(1, 'Gurdeep Singh', 28, 'Mohali', '10', '1020524110', '2010203040', 'Básico', 'Niñera', 1, 1, NULL, NULL, NULL, NULL, NULL, 'cold', 'Empleado', 'No', '0', 'Frecuentemente', '', '0', '0', '', 'test', 'Con Dormida', '', '1 -\r\n2 -', '1 -\r\n2 -', '', '2018-08-15 15:41:54', '3', 1);

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `user_id` varchar(55) DEFAULT NULL,
  `housing_type` varchar(55) DEFAULT NULL,
  `floor_number` varchar(55) DEFAULT NULL,
  `bedrooms_number` varchar(55) DEFAULT NULL,
  `square_meter` varchar(255) DEFAULT NULL,
  `people_in_house` varchar(55) DEFAULT NULL,
  `children` varchar(55) DEFAULT NULL,
  `children_number` varchar(55) DEFAULT NULL,
  `age` varchar(55) DEFAULT NULL,
  `pets` varchar(55) DEFAULT NULL,
  `other_pet` varchar(255) DEFAULT NULL,
  `no_of_pets` varchar(55) DEFAULT NULL,
  `employee_type` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `range_age_employee` varchar(255) DEFAULT NULL,
  `employee_nationality` varchar(255) DEFAULT NULL,
  `academic_level` varchar(255) DEFAULT NULL,
  `work_experience` varchar(255) DEFAULT NULL,
  `religious_affiliation` varchar(255) DEFAULT NULL,
  `other_religion_text` varchar(255) DEFAULT NULL,
  `hour_modal` varchar(255) DEFAULT NULL,
  `work_to_be_done` varchar(255) DEFAULT NULL,
  `other_job` varchar(255) DEFAULT NULL,
  `day_modal` varchar(255) DEFAULT NULL,
  `starting_hour` varchar(255) DEFAULT NULL,
  `end_hour` varchar(55) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `transport_help` varchar(55) DEFAULT NULL,
  `hear_about` varchar(255) DEFAULT NULL,
  `other_listen_us_text` varchar(255) DEFAULT NULL,
  `comments` text,
  `terms` varchar(55) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `housing_type`, `floor_number`, `bedrooms_number`, `square_meter`, `people_in_house`, `children`, `children_number`, `age`, `pets`, `other_pet`, `no_of_pets`, `employee_type`, `job_type`, `range_age_employee`, `employee_nationality`, `academic_level`, `work_experience`, `religious_affiliation`, `other_religion_text`, `hour_modal`, `work_to_be_done`, `other_job`, `day_modal`, `starting_hour`, `end_hour`, `payment`, `transport_help`, `hear_about`, `other_listen_us_text`, `comments`, `terms`, `created_at`, `modified_at`, `status`, `path`) VALUES
(1, '5', '1', '123', '12', '123', '10', '2', '10', '15', 'dog', '', '2', '2', 'Jardinero', '18-25', 'Haitiana', 'Bachiller', 'Si', 'christian', '', 'Con Dormida', 'clean', '', 'Domingos-Viernes', '10', '15', '1000', 'Si', 'facebook', '', 'hi this is testing', 'on', '2018-08-17 16:21:06', '2018-08-17 16:21:06', 1, '1534522981_1');

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
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `token` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `cellphone`, `direction`, `sector`, `city`, `email`, `password`, `date`, `status`, `type`, `token`) VALUES
(1, 'admin', '', '1234564810', '1212121412', 'india', '1212', '121', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', 1, 1, NULL),
(5, 'test', 'test', '1232311231', '1231231231', 'test', 'rwar', 'rwar', 'gurdeepbrar207@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', 1, 0, ''),
(7, 'guru', 'rwr', '2131231212', '1231231231', '2132', 'qwd', 'asd', 'testtt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-15 17:46:48', 0, 0, 'aa50e886adeb1ca740215993f67e56be');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignedemployees`
--
ALTER TABLE `assignedemployees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignedemployees`
--
ALTER TABLE `assignedemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hiring`
--
ALTER TABLE `hiring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
