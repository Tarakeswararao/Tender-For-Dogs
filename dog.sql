-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 07:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog`
--

-- --------------------------------------------------------

--
-- Table structure for table `accr`
--

CREATE TABLE `accr` (
  `a_id` int(100) NOT NULL,
  `a_image` varchar(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_desc` varchar(100) NOT NULL,
  `a_phone` varchar(100) NOT NULL,
  `a_address` varchar(100) NOT NULL,
  `a_location` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyandsell`
--

CREATE TABLE `buyandsell` (
  `b_id` int(100) NOT NULL,
  `b_breed` varchar(100) NOT NULL,
  `b_price` int(100) NOT NULL,
  `b_color` varchar(100) NOT NULL,
  `b_gender` varchar(100) NOT NULL,
  `b_age` varchar(100) NOT NULL,
  `b_location` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `b_date` date NOT NULL,
  `sold` varchar(100) NOT NULL,
  `s_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyandsell`
--

INSERT INTO `buyandsell` (`b_id`, `b_breed`, `b_price`, `b_color`, `b_gender`, `b_age`, `b_location`, `image`, `p_id`, `b_date`, `sold`, `s_date`) VALUES
(17, 'dob', 12345, 'black', 'male', '2 years', 'vizag', '225035696046263222.jpg', 1, '2020-08-24', '', NULL),
(19, 'Golden retriver', 10000000, 'gold', 'female', '23', 'vizag', '517302006867851701.jpg', 1, '2020-08-24', 'Sold Out', '2020-08-24'),
(20, 'bb', 50000, 'black', 'male', '2 years', 'vizag', '34866574748121500.jpg', 1, '2020-08-24', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE `care` (
  `c_id` int(100) NOT NULL,
  `c_image` varchar(100) NOT NULL,
  `c_docName` varchar(100) NOT NULL,
  `c_clinicName` varchar(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `c_mail` varchar(100) NOT NULL,
  `c_location` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(100) NOT NULL,
  `e_image` varchar(100) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_desc` varchar(100) NOT NULL,
  `e_location` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meetup`
--

CREATE TABLE `meetup` (
  `m_id` int(100) NOT NULL,
  `m_breed` varchar(100) NOT NULL,
  `m_color` varchar(100) NOT NULL,
  `m_gender` varchar(100) NOT NULL,
  `m_age` varchar(100) NOT NULL,
  `m_location` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetup`
--

INSERT INTO `meetup` (`m_id`, `m_breed`, `m_color`, `m_gender`, `m_age`, `m_location`, `image`, `p_id`) VALUES
(1, 'Husky', 'white', 'female', '1 year', 'vizag', '880430646744144210.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(100) NOT NULL,
  `r_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `r_id`, `firstname`, `lastname`, `phone`, `email`, `address`, `state`, `city`, `image`) VALUES
(1, 1, 'Tarakes', 'ko', '9160110828', 'tarakes.koncha.tt@gmail.com', 'visakha', 'Andhra pradesh', 'vizag', '489681226410426028.png'),
(2, 2, 'Tarakeswara', 'K', '9160110828', 'tarakes.koncha.tt@gmail.com', 'B2043061,Shoba dream acres, panathur balagere road', 'Karnātaka', 'Bengaluru', '906396161146934476.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'tarak', 'tarakes.koncha.tt@gmail.com', '111'),
(2, 'tarakeswar', 'tarakes.koncha.tt@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `t_id` int(100) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_desc` varchar(100) NOT NULL,
  `t_exp` varchar(100) NOT NULL,
  `t_phone` varchar(100) NOT NULL,
  `t_location` varchar(100) NOT NULL,
  `t_image` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accr`
--
ALTER TABLE `accr`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `buyandsell`
--
ALTER TABLE `buyandsell`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `meetup`
--
ALTER TABLE `meetup`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accr`
--
ALTER TABLE `accr`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyandsell`
--
ALTER TABLE `buyandsell`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meetup`
--
ALTER TABLE `meetup`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
