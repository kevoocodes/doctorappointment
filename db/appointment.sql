-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 02:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `DOB` date NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `appointmentid` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `userid`, `firstname`, `middlename`, `lastname`, `address`, `gender`, `DOB`, `phonenumber`, `appointmentid`, `date`, `description`) VALUES
(1, 5, 'Fatuma', 'Athumani', 'Kondo', 'kigamboni', 'female', '0000-00-00', '0718827812', 3, '0000-00-00', ''),
(2, 1, 'kev', 'kelvin', 'kevoo', 'kigamboni', 'male', '1999-12-02', '0929883828', 2, '0000-00-00', ''),
(3, 3, 'Fred', 'Herbat', 'Ibambilo', 'Masaki', 'male', '1222-06-07', '77771717872211', 1, '9821-08-08', 'ijsjjkaj'),
(4, 3, 'meda', 'medic', 'ahmed', 'kimala', 'male', '2017-06-07', '099999999', 1, '2020-08-12', 'wertyuertyrty'),
(5, 3, 'Faraj', 'Paul', 'Mujuni', 'Buguruni', 'male', '1999-08-28', '288882198', 3, '2020-09-13', 'I am Ill'),
(6, 19, 'islam', 'salim', 'minjega', 'kimala', 'male', '2020-08-18', '8282828282', 2, '2020-08-06', 'najiskia homa tumbo linauma'),
(7, 19, 'sasa', 'baadae', 'sana', 'sasa', 'male', '2020-07-31', '22222', 3, '2020-08-14', 'najiskia homa kichwa');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttype`
--

CREATE TABLE `appointmenttype` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttype`
--

INSERT INTO `appointmenttype` (`id`, `name`, `description`) VALUES
(1, 'Dermatologists', 'Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? Dermatologists can help.'),
(2, 'Cardiologists', 'They’re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.'),
(3, 'Neurologists', 'These are specialists in the nervous system, which includes the brain, spinal cord, and nerves. They treat strokes, brain and spinal tumors, epilepsy, Parkinson\'s disease, and Alzheimer\'s disease.');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specialisttype` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specialisttype`, `firstname`, `middlename`, `lastname`, `email`, `password`, `address`, `phonenumber`) VALUES
(2, 1, 'Alen', 'Masanja', 'Mboke', 'alen@example.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Buza', '0657691831'),
(17, 2, 'kevoo', 'Aron', 'Ali', 'kelvin@example.com', '827ccb0eea8a706c4c34a16891f84e7b', 'kigamboni', '0657691830'),
(18, 3, 'kevoo', 'Aron', 'Ali', 'kevoo@example.com', '827ccb0eea8a706c4c34a16891f84e7b', 'kigamboni', '0657691830'),
(22, 3, 'ahmed', 'salim', 'minjega', 'ahmed@gmail.com', 'a01610228fe998f515a72dd730294d87', 'masaki', '0909090');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `appointmentid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `appointmenttime` time NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `appointmentid`, `doctorid`, `appointmenttime`, `feedback`) VALUES
(1, 1, 18, '00:00:00', 'Come Fast'),
(3, 4, 17, '15:44:00', 'kjkjjjjjjjkjkjkj'),
(4, 3, 2, '03:29:00', 'saksakalk'),
(5, 5, 18, '12:00:00', 'Make sure u good'),
(6, 6, 17, '19:06:00', 'dggdgdgddddg'),
(7, 7, 22, '14:33:00', 'kapime malalia');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(11) NOT NULL,
  `firtsname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `document` varchar(500) NOT NULL,
  `profileImage` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `firtsname`, `middlename`, `lastname`, `DOB`, `document`, `profileImage`, `address`, `phonenumber`, `email`, `password`) VALUES
(1, 'Grory', 'Emmanueli', 'Leole', '1995-07-08', '', '', 'Kawe', '0678563745', 'grory@example.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'kevoo', 'kevoo@example.com', '12345678'),
(2, 'masozi', 'masozi@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'amara', 'amara@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'alhaj', 'alhaji@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'fetty', 'fetty@example.comm', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'amara', 'kevooo@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'issa', 'issa@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'isabella', 'isabella@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'isaal', 'isabellaa@example.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'meda', 'minjegaahmed@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointmenttype`
--
ALTER TABLE `appointmenttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointmenttype`
--
ALTER TABLE `appointmenttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
