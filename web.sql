-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 02:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Livingin` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `profession` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`fname`, `mname`, `lname`, `mobile`, `dateofbirth`, `gender`, `email`, `Nationality`, `Livingin`, `feedback`, `profession`) VALUES
('Anas', 'Abdulaziz', 'Salem', 0559979555, '1990-12-04', 'Male', 'yad55@gmail.com', 'Saudi', 'Riyadh', 'via a friend', 'Taxi'),
('Mansur', 'Ahmed', 'Khaled', 0564135789, '1995-12-05', 'Male', 'saudiboy@hotmail.com', 'Saudi', 'Riyadh', 'via a friend', 'Cop'),
('Saud', 'Mohamed', 'Raid', 0545187147, '1996-11-02', 'Male', 'saud1996@hotmail.com', 'Saudi', 'Riyadh', 'via a friend', 'Cop'),
('Monther', 'Abdulrahman', 'Yousef', 0556312456, '1990-11-13', 'Male', 'hotmnai@hotmail.com', 'Saudi', 'Riyadh', 'via a friend', 'Doctor'),
('Abdulaziz', 'Ossama', 'Afife', 0564597863, '1988-11-14', 'Male', 'test@hotmail.com', 'Saudi', 'Riyadh', 'via a friend', 'Cop'),
('Turki', 'Yazed', 'Othman', 0544987498, '2000-08-11', 'Male', 'T1ooo@outlook.com', 'englined', 'Abha', 'friend', 'None'),
('test', 'Turki', 'Saleh', 0545748918, '2002-09-13', 'Male', 'W-i@hotmail', 'ss', 'ssaf', 'twitter', 'Sheif'),
('Abdulmaled', 'Saud', 'Mjeed', 0548949841, '1991-01-15', 'Male', 'nothing44@hotmail', 's', 'ws', 'twitter', 'Teacher'),
('Yaser', 'Abdulmaled', 'Ibrahim', 0564984818, '1984-01-18', 'Male', 'yy505@outlook.com', 's', 'ws', 'twitter', 'Teacher');
('Nora', 'Othman', 'almroun', 0549818949, '1989-01-18', 'Female', 'Nora1989@outlook.com', 's', 'ws', 'twitter', 'Teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
