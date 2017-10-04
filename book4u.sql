-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 03:33 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `name`, `city`, `state`) VALUES
('a1000', 'aaa', 'bbb', 'ccc'),
('a1001', 'aaaa', 'bbbb', 'cccc'),
('a1002', 'amit', 'calicut', 'kerala'),
('a1003', 'mayank', 'kolkata', 'west bengal'),
('a1004', 'toppo', 'mumbai', 'maharashta');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author_id` varchar(50) NOT NULL,
  `publisher_id` varchar(50) NOT NULL,
  `pub_date` date NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `bookname`, `author_id`, `publisher_id`, `pub_date`, `category`, `price`) VALUES
('b1000', 'java', 'a1002', 'p1002', '2012-05-05', 'programming', '889.00'),
('b1001', 'logic design', 'a1001', 'p1001', '2012-05-05', 'computer', '312.00'),
('b1002', 'c++', 'a1001', 'p1001', '2016-09-07', 'maths', '400.00'),
('b1003', 'logic design', 'a1000', 'p1000', '2016-09-07', 'computer', '2000.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin`, `password`) VALUES
('rahul', 'nitc'),
('raj', 'nitc');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pub_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_id`, `name`, `city`, `state`) VALUES
('p1000', 'xxx', 'xxx', 'xxx'),
('p1001', 'mghill', 'patna', 'bihar'),
('p1002', 'ravi chandaran', 'hydrabad', 'andra'),
('p1003', 'denish ritchie', 'california', 'california'),
('p1004', 'references in programming', 'peris', 'peris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `state` (`state`),
  ADD KEY `state_2` (`state`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_id` (`author_id`,`publisher_id`),
  ADD KEY `book_ibfk_2` (`publisher_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`pub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
