-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2025 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anil`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `BookID` int(3) DEFAULT NULL,
  `BookName` varchar(30) DEFAULT NULL,
  `AutherName` varchar(35) DEFAULT NULL,
  `Price` int(5) DEFAULT NULL,
  `Quantity` int(3) DEFAULT NULL,
  `Net_Amount` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmaster`
--

INSERT INTO `bookmaster` (`BookID`, `BookName`, `AutherName`, `Price`, `Quantity`, `Net_Amount`) VALUES
(1, 'Book One', 'Author A', 100, 2, 200),
(2, 'Book Two', 'Author B', 150, 1, 150),
(3, 'Book Three', 'Author C', 120, 3, 360),
(4, 'Book Four', 'Author D', 200, 2, 400),
(5, 'Book Five', 'Author E', 180, 1, 180);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `employee_type` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `gender`, `employee_type`, `department`) VALUES
(3, 'kalpesh', 'Male', 'Regular', 'Admin'),
(4, 'Anil', 'Male', 'Regular', 'Human Resource'),
(6, 'Darshan', 'Male', 'Job Order', 'Desining');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` int(11) DEFAULT NULL,
  `Student_name` varchar(50) DEFAULT NULL,
  `Student_mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `Student_name`, `Student_mobile`) VALUES
(1, 'Anil Baraiya', '9876543210'),
(2, 'Ravi Patel', '9876512340'),
(3, 'Meena Sharma', '9876509876'),
(4, 'Kiran Joshi', '9876523456'),
(5, 'Suresh Kumar', '9876532109'),
(1, 'Anil Baraiya', '9876543210'),
(2, 'Ravi Patel', '9876512340'),
(3, 'Meena Sharma', '9876509876'),
(4, 'Kiran Joshi', '9876523456'),
(5, 'Suresh Kumar', '9876532109');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `STUD_ID` varchar(5) NOT NULL,
  `STUD_NAME` varchar(20) DEFAULT NULL,
  `STUD_ADD` varchar(50) DEFAULT NULL,
  `STUD_STD` int(11) DEFAULT NULL,
  `STUD_DOB` date DEFAULT NULL,
  `STUD_EMAIL` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`STUD_ID`, `STUD_NAME`, `STUD_ADD`, `STUD_STD`, `STUD_DOB`, `STUD_EMAIL`, `USERNAME`, `PASSWORD`) VALUES
('wsw', 'qww', 'qwDSD', 232, '2025-09-12', 'baraiyaanilbhai445@gmail.com', 'AG', 'Anil@123');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `sno` int(3) DEFAULT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `Saddress` varchar(50) DEFAULT NULL,
  `smobile` varchar(15) DEFAULT NULL,
  `sdob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`sno`, `sname`, `Saddress`, `smobile`, `sdob`) VALUES
(1, 'sqs', 'qsq', '2356985632', '2025-09-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`STUD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
