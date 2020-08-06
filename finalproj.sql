-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 07:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart_data`
--

CREATE TABLE `chart_data` (
  `id` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `month` varchar(100) NOT NULL,
  `expense` varchar(100) NOT NULL,
  `got_payment` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_data`
--

INSERT INTO `chart_data` (`id`, `year`, `month`, `expense`, `got_payment`, `profit`) VALUES
(1, 2015, 'January', '200000', '300000', '100000'),
(2, 2015, 'February', '120000', '150000', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `futureproject`
--

CREATE TABLE `futureproject` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `assigned_emp` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `futureproject`
--

INSERT INTO `futureproject` (`id`, `name`, `description`, `deadline`, `assigned_emp`, `status`) VALUES
(1, 'website-1', 'This is a website for departmental store in Mohammadpur.', '2020-05-10', 'Prome', 'pending'),
(2, 'website-2', 'This is a demo for a kids school located in Dhanmondi.', '2020-05-28', 'Nadim', 'pending'),
(3, 'website-3', 'this is demo', '2020-05-28', 'sagor', '');

-- --------------------------------------------------------

--
-- Table structure for table `future_requirement`
--

CREATE TABLE `future_requirement` (
  `id` int(10) NOT NULL,
  `project_id` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `version` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `future_requirement`
--

INSERT INTO `future_requirement` (`id`, `project_id`, `description`, `version`) VALUES
(1, '1', 'Keep a page for price calculation.', '1.0'),
(2, '1', 'Admin can see total storage of the products.', '1.0'),
(3, '2', 'Student login and Registration. ', '1.0'),
(4, '2', 'Automated admit card generation.', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `matrixtable`
--

CREATE TABLE `matrixtable` (
  `id` int(10) NOT NULL,
  `p_id` int(20) NOT NULL,
  `r_id` int(20) NOT NULL,
  `r_description` varchar(300) NOT NULL,
  `version` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL,
  `assigned_emp` varchar(200) NOT NULL,
  `tcase_id` varchar(100) NOT NULL,
  `priority` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrixtable`
--

INSERT INTO `matrixtable` (`id`, `p_id`, `r_id`, `r_description`, `version`, `link`, `assigned_emp`, `tcase_id`, `priority`) VALUES
(1, 1, 1, 'Add admin panel and user registration system. ', '1.0', 'https://github.com/Sagor.Askar', 'Sagor', 'TC1', 'high'),
(2, 1, 2, 'Add responsive dashboard', '1.0', 'www.github.com/Sagor.Askar', 'sagor', 'TC2', 'high');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `assigned_emp` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `deadline`, `start_date`, `end_date`, `assigned_emp`, `status`) VALUES
(1, 'website-1', 'For a multi purpose store in Dhaka.', '2020-04-01', '2020-02-20', '2020-03-26', 'Prome', 'completed'),
(4, 'website-3', 'this is demo an library.', '2020-05-28', '2020-01-05', '2020-03-10', 'sagor', 'completed'),
(5, 'Departmental store', 'A website from where the user from a certain area can order online.', '20-06-2020', '10-02-2020', '01-03-2020', 'Nadim', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `email`, `phone`, `password`, `usertype`) VALUES
(1, 'Sagor Askar', 'sagor', 'sagor_askar@yahoo.com', '8584546556', 'sssa', 'cto'),
(2, 'Prome', 'prome', 'prome@gmail.com', '123456789', 'ppp', 'team leader'),
(4, 'Nadim', 'nadim', 'nadim@gmail.com', '9876543210', 'nadimnnn', 'Software Engineer'),
(5, 'Askar Ibne Saikh', 'askar', 'sagor.askar@gmail.com', '9876543211', 'askar1', 'Project Manager'),
(6, 'Mahin', 'jeffy', 'jeffymahin@gmail.com', '01932027399', 'jeffy123', 'cto'),
(7, 'mahin', 'mahin', 'mahin@gmail.com', '01932027399', 'mahin123', 'Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(10) NOT NULL,
  `project_id` int(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `version` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `project_id`, `description`, `version`) VALUES
(1, 1, 'User registration and login system.', '1.0'),
(2, 1, 'Online ordering system.', '1.0'),
(3, 4, 'User Login and Registration systems.', '1.0'),
(4, 4, 'Admin and User Panel separation. ', '1.0'),
(5, 1, 'Payment method - bKash , Rocket', '1.0'),
(6, 1, 'Cash on delivery.', '1.0'),
(7, 4, 'Book separation based on Language.', '1.1'),
(8, 2, 'Add dashboard for admin.', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE `version` (
  `id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `requirements` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`id`, `project_id`, `requirements`, `description`) VALUES
(1, 1, '1. manege smooth user interface.\r\n2. admin and user penal separation.', 'This is a project for a super shop in Dhaka (Mohammadpur).  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart_data`
--
ALTER TABLE `chart_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `futureproject`
--
ALTER TABLE `futureproject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `future_requirement`
--
ALTER TABLE `future_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrixtable`
--
ALTER TABLE `matrixtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart_data`
--
ALTER TABLE `chart_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `futureproject`
--
ALTER TABLE `futureproject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `future_requirement`
--
ALTER TABLE `future_requirement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matrixtable`
--
ALTER TABLE `matrixtable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `version`
--
ALTER TABLE `version`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
