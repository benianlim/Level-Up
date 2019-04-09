-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 12:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `username` varchar(25) NOT NULL,
  `IDtype` varchar(10) NOT NULL DEFAULT 'MyKad',
  `IDnumber` varchar(15) NOT NULL,
  `mobileNo` varchar(15) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`username`, `IDtype`, `IDnumber`, `mobileNo`, `dateOfBirth`) VALUES
('Abeer', 'MyKad', '1000', '0172514887', '1996-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `username` varchar(25) NOT NULL,
  `applicationID` int(7) NOT NULL,
  `applicationDate` date NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'New',
  `programmeID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`username`, `applicationID`, `applicationDate`, `status`, `programmeID`) VALUES
('Abeer', 2222, '2019-04-10', 'Successful', 150);

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`ID`, `username`, `password`) VALUES
(1, 'Abeer', 'abeer123');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programmeID` int(5) NOT NULL,
  `programmeName` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `closingDate` date NOT NULL,
  `universityID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`programmeID`, `programmeName`, `description`, `closingDate`, `universityID`) VALUES
(150, 'Electrical Engineering', 'Explore more about Electrical Engineering course in Malaysia', '2019-04-30', 100),
(151, 'Computer Science', ' theory of computation, fundamentals of computer science', '2019-04-30', 101);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualificationID` int(5) NOT NULL,
  `qualificationName` varchar(30) NOT NULL,
  `maximumScore` float NOT NULL,
  `minimumScore` float NOT NULL,
  `resultCalcDescription` varchar(100) NOT NULL,
  `gradeList` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualificationID`, `qualificationName`, `maximumScore`, `minimumScore`, `resultCalcDescription`, `gradeList`) VALUES
(1, 'a', -1, 6, '', ''),
(2, 'a', 1, 2, 'dfg', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `qualobtained`
--

CREATE TABLE `qualobtained` (
  `overallScore` float NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `subjectName` varchar(25) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`subjectName`, `grade`, `score`) VALUES
('Mathematics', 'A', 85),
('Mathematics', 'A', 85);

-- --------------------------------------------------------

--
-- Table structure for table `uniadmin`
--

CREATE TABLE `uniadmin` (
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uniadmin`
--

INSERT INTO `uniadmin` (`username`) VALUES
('Sam');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `universityID` int(5) NOT NULL,
  `universityName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`universityID`, `universityName`) VALUES
(100, 'Taylors university '),
(101, 'INTI university');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `userType`) VALUES
('abeer123', '123', 'Abeer Kashif', 'abeer.sheikh73@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`),
  ADD KEY `username` (`username`),
  ADD KEY `programmeID` (`programmeID`);

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programmeID`),
  ADD KEY `universityID` (`universityID`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualificationID`);

--
-- Indexes for table `qualobtained`
--
ALTER TABLE `qualobtained`
  ADD PRIMARY KEY (`overallScore`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `uniadmin`
--
ALTER TABLE `uniadmin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`universityID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `applicationID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2223;

--
-- AUTO_INCREMENT for table `login1`
--
ALTER TABLE `login1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programmeID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualificationID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `universityID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
