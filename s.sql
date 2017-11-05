-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2017 at 06:32 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `bookid` int(14) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Pages` int(11) DEFAULT NULL,
  `YearPubl` int(11) DEFAULT NULL,
  `PublCo` varchar(255) DEFAULT NULL,
  `EditionNr` int(11) DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Reserved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`bookid`, `Title`, `Pages`, `YearPubl`, `PublCo`, `EditionNr`, `Author`, `Reserved`) VALUES
(111, 'A Matter of Life', 346, 2016, NULL, NULL, 'Jeffrey Brown', 1),
(112, 'Cuz', 250, 2017, 'none', 1, 'Danielle Allan', 1),
(113, 'The World of Tomorrow', 245, 2017, 'none', 1, 'Brendan Mathews', 1),
(114, 'Valentino: Themes and Variations', 530, 2015, 'None', 1, 'Pamela Golbin', 0),
(117, 'Awesome book', NULL, NULL, NULL, NULL, 'Awesome Author', 1),
(118, 'Cool book', NULL, NULL, NULL, NULL, 'Cool Author', 0),
(119, 'Harry Potter - The Goblet of Fire', NULL, NULL, NULL, NULL, 'J. K. Rowling.', 0),
(120, 'Game of Thrones', NULL, NULL, NULL, NULL, 'George R. R. Martin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `username` text NOT NULL,
  `userpass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`username`, `userpass`) VALUES
('peter', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
('karen', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Book`
--
ALTER TABLE `Book`
  MODIFY `bookid` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
