-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(25) NOT NULL,
  `course` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'Information Technology'),
(2, 'Civil Engineering'),
(3, 'Compute Engineering'),
(4, 'Business Administration'),
(5, 'Computer Science'),
(6, 'Information Science'),
(7, 'Entertainment and Media Computing'),
(8, 'Data Science'),
(9, 'Nursing'),
(10, 'ESports'),
(11, 'Information and Communication Technology'),
(12, 'Information System'),
(13, 'Architecture'),
(14, 'Games Software Design and Production'),
(15, 'Accountancy'),
(16, 'Criminology');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `id` int(25) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `name`, `course`) VALUES
(1, 'Maureen Beau  Mabanta Pera', 'Information'),
(2, 'Arlyn Faye R. Padilla', 'Information Technology'),
(3, 'Louis Enrico Cabalo', 'Civil Engineering'),
(4, 'Edrian Acosta', 'Information Technology'),
(5, 'Michelle Sison', 'Information Technology'),
(6, 'Warren Sarmiento', 'Information System'),
(7, 'Lorelyn Haduca', 'Accountancy\r\n'),
(8, 'Jazper Vincet Baliola', 'Information Technology\r\n'),
(9, 'Rhyzen Ace Tan', 'Computer Science'),
(10, 'Raymark Vidal', 'Architecture'),
(11, 'Carl Lopez', 'Data'),
(12, 'Jillian Rose Abalos', 'Architecture'),
(13, 'Rose Marie Correa', 'Nursing'),
(14, 'Kyla Joy Acosta', 'Information technology\r\n'),
(15, 'Arlyn Faye R. Padilla', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `course_type` varchar(50) NOT NULL DEFAULT 'Bsc. IT',
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `password`, `date_of_birth`, `Gender`, `address`, `course_type`, `status`) VALUES
(1, 'Arlyn Faye Padilla', 'Arlynfaye@gmail.com', 'arlyn123', '2002-08-30', 'Female', 'Gregorio del Pilar, Ilocos Sur', 'Information Technology', 'Enrolled'),
(2, 'Louis Enrico Cabalo', 'louisenrico@gmail.com', 'rico123', '2000-06-26', 'Male', 'Bangar,', 'Civil Engineering', 'Enrolled'),
(3, 'Arlyn Faye Padilla', 'arlynfayepadilla@gmail.com', 'arlyn123', '2002-08-30', 'Female', 'Gregorio', 'Information Technology', 'Enrolled'),
(4, 'Rose Marie Correa', 'rosemarie12@gmail.com', 'rosemarie123', '1995-12-01', 'Female', 'Bangar,', 'Nursing', 'Enrolled'),
(5, 'Jillian Rose Abalos', 'jillianabalos@gmail.com', 'jillian123', '2000-12-18', 'Female', 'Candon City, Ilocos Sur', 'Architecture', 'Enrolled'),
(6, 'Carl Lopez', 'carlwilliam@gmail.com', 'carl123', '2001-08-29', 'male', 'Sinait,', 'Data', 'Enrolled'),
(7, 'Lorelyn Haduca', 'lorelyn567@gmail.com', 'lorelyn123', '2000-09-23', 'Female', 'Narvacan, Ilocos Sur', 'Accountancy', 'Enrolled'),
(8, 'Raymark Vidal', 'raymark09@gmail.com', 'raymark123', '1999-12-11', '', 'Sudipen, La Union', 'Architecture', 'Enrolled'),
(9, 'Edrian Acosta', 'edrianacosta@gmail.com', 'edrian123', '2000-07-07', 'Male', 'San Fernando City, La Union', 'Information Technology', 'Enrolled'),
(10, 'Maureen Beau M. Pera', 'maureenpera@gmail.com', 'maureen123', '2002-01-26', 'Female', 'Bangar,', 'Information', 'Enrolled'),
(11, 'Kyla Joy Acosta', 'kylajoyacosta@gmail.com', 'kyla123', '2002-12-07', 'Female', 'Bacnotan', 'Information technology', 'Enrolled'),
(12, 'Warren Sarmiento', 'warren0011@gmail.com', 'warren123', '2001-08-12', 'Male', 'Tagudin, Ilocos Sur', 'Information System', 'Enrolled'),
(13, 'Rhyzen Ace Tan', 'rhyzenace@gmail.com', 'rhyzen123', '1999-04-08', 'Male', 'Santiago, Ilocos Sur', 'Computer Science', 'Enrolled'),
(14, 'Michelle Sison', 'michellesison@gmail.com', 'michelle123', '2002-01-25', 'Female', 'Vigan', 'Information Technology', 'Enrolled'),
(15, 'Jazper Vincet Baliola', 'jaspervincet@gmail.com', 'jazper123', '2002-11-07', 'Male', 'Bangar', 'Information Technology', 'Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `salary` double NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `email`, `password`, `address`, `Date_of_birth`, `gender`, `salary`, `department`) VALUES
(1, 'Wilda Imama Sabilla', 'wildaimama@polinema.ac.id', 'wilda123', 'Indonesia', '1992-02-26', 'Female', 50000, 'CAS'),
(2, 'Juliet', 'julietpaulo@gmail.com', 'juliet123', 'Bangar,', '1990-08-26', 'Female', 45000, 'CAS'),
(3, 'Mary Jane R. Jaramilla', 'maryjane@gmail.com', 'maryjane123', 'Sta. Cruz, Ilocos Sur', '1990-12-07', 'Female', 45000, 'CAS'),
(4, 'Jim-mar Delos Reyes', 'jimmardelosreyes@gmail.com', 'jimmar123', 'Tagudin, Ilocos Sur', '1989-09-01', 'Male', 45000, 'CAS'),
(6, 'Mariane C. Tacderas', 'tacderasmariane@gmail.com', 'marian123', 'Sta. Cruz, Ilocos Sur', '1995-05-27', 'Female', 50000, 'Accounting'),
(7, 'Jay-ar L. Lazaga', 'jayar_lazaga@gmail.com', 'jayar123', 'Tagudin, Ilocos Sur', '1995-03-19', 'Male', 18000, 'CAS'),
(8, 'George', 'geovilla@gmail.com', 'geo123', 'Tagudin,', '1987-09-22', 'Male', 33000, 'CAS'),
(9, 'Mary Jane Hipol', 'hipolmaryjane@gmail.com', 'maryjane123', 'Suyo, Ilocos Sur', '1992-07-01', 'Female', 27000, 'CAS'),
(10, 'Michelle L. Sison', 'mchsison@gmail.com', 'michelle123', 'Tagudin, Ilococs Sur', '2002-01-25', 'Female', 38000, 'CAS'),
(11, 'Jeam Naly T. Limos', 'jeamnaly00@gmail.com', 'jeam123', 'Sugpon, Ilocos Sur', '1989-04-29', 'Female', 25000, 'CAS'),
(12, 'Carlben Dominique A. Bea', 'dominiquebea@gmail.com', 'dominique123', 'Tagudin, Ilocos Sur', '1994-11-08', 'Male', 32000, 'Engineering'),
(13, 'Pearl S. Lacondazo', 'pearl_lacondazo12@gmail.com', 'pearl123', 'Tagudin, Ilocos Sur', '1998-05-05', 'Female', 30000, 'CAS'),
(14, 'Joy G. Bea', 'joybea@gmail.com', 'joy123', 'Tagudin, Ilocos Sur', '1995-08-30', 'Female', 50000, 'CAS'),
(19, 'Dane Marius', 'danemarius@gmail.com', 'dane123', 'Tagudin', '1991-12-18', 'Male', 50000, 'CAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
