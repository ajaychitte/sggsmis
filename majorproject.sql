-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 09:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `YearId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AcademicYear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`YearId`, `AcademicYear`) VALUES
('B.Tech', 'Final Year'),
('FA', 'Faculty Advisor'),
('FY', 'First Year'),
('PO', 'Passed-out'),
('SY', 'Second Year'),
('TY', 'Third Year');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(50) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `username`, `password`) VALUES
(1, 'srnsrn1608@gmail.com', 'Pass@1234');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BranchName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchID`, `BranchName`) VALUES
('CHEM', 'Chemical  Engineering'),
('CIVIL', 'Civil  Engineering'),
('COM', 'Commerce'),
('CSE', 'Computer Science  Engineering'),
('EE', 'Electical  Engineering'),
('EXTC', 'Electronics And Comunication Technology  Engineering'),
('INST', 'Instrumentation  Engineering'),
('IT', 'Information Technology  Engineering'),
('MECH', 'Mechanical Engineering'),
('PROD', 'Production  Engineering'),
('TEXT', 'Textile  Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `CollegeId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CollegeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`CollegeId`, `CollegeName`) VALUES
('23423', 'GPA'),
('DTE2008', 'GCE Aurangabad'),
('DTE2019', 'Government College of Engineering Amaravati'),
('DTE2020', 'SGGSIE&T Nanded ');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `DeptId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DeptName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`DeptId`, `DeptName`) VALUES
('BRK', 'Breaking Department'),
('CAE', 'Computer Aided Engineering Department'),
('DES', 'Design Department'),
('OPS', 'Operation'),
('SS', 'Steering And Suspension Department'),
('TRANS', 'Transformation Department');

-- --------------------------------------------------------

--
-- Table structure for table `membertype`
--

CREATE TABLE `membertype` (
  `StatusId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MemberStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membertype`
--

INSERT INTO `membertype` (`StatusId`, `MemberStatus`) VALUES
('AL', 'Alumni'),
('FA', 'Faculty Advisor '),
('SNW', 'Student Not Working'),
('SW', 'Student Working');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RoleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleId`, `RoleName`) VALUES
('CPT', 'Captain'),
('DR1', 'Driver 1'),
('DR2', 'Driver 2'),
('FA1', 'Faculty Adviser 1'),
('FA2', 'Faculty Adviser 2'),
('TM', 'Team Member'),
('TMG', 'Team Manager'),
('VC', 'Vice Captain');

-- --------------------------------------------------------

--
-- Table structure for table `sae_cc_members`
--

CREATE TABLE `sae_cc_members` (
  `RegId` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FiratName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MiddleName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactNumber` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DoB` date NOT NULL,
  `BranchId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YearId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CollegeId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StatusId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JoiningYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sae_cc_members`
--

INSERT INTO `sae_cc_members` (`RegId`, `FiratName`, `MiddleName`, `LastName`, `Gender`, `Email`, `ContactNumber`, `DoB`, `BranchId`, `YearId`, `CollegeId`, `StatusId`, `JoiningYear`) VALUES
('2018BME028', 'sita', 'aaaatrtr', 'eete', 'M', 'srnsrn1608@gmail.com', '9897969590', '2023-04-06', 'PROD', 'TY', 'DTE2020', 'SNW', 2024),
('2018BME034', 'Aryaa', 'Anandi', 'Joshirao', 'F', 'srnankade24@gmail.com', '9897969590', '2023-04-14', 'MECH', 'TY', 'DTE2020', 'SNW', 2027),
('2018BPR151', 'Prassanakumar', 'Dattatray', 'Biradar', 'M', '2018bpr151@sggs.ac.in', '9665159335', '2000-06-26', 'PROD', 'PO', 'DTE2020', 'Al', 2019),
('2019BCE011', 'Suyash', 'Suraj', 'Kadam', 'M', '2019bme021@sggs.ac.in', '777400000', '2023-04-13', 'PROD', 'SY', '23423', 'AL', 2026),
('2019BEC147', 'Kiran', 'Anand', 'Kadam', 'F', '2019bec147@sggs.ac.in', '00000', '2022-12-14', 'EXTC', 'TY', 'DTE2020', 'SNW', 2019),
('2019BME021', 'Aryan', 'Suraj', 'Kshirsagar', 'M', '2019bme021@sggs.ac.in', '9897969590', '2023-03-08', 'MECH', 'FY', 'DTE2020', 'SW', 2021),
('2019Bme022', 'Suaysh', 'Ramkrushna', 'Nakade', 'M', '2019bme022@sggs.ac.in', '8421165456', '2009-02-17', 'MECH', 'B.Tech', 'DTE2020', 'FA', 2012),
('2019BME023', 'Vaidik', 'Rajendra', 'Deshmukh', 'M', '2019bme023@sggs.ac.in', '9897969590', '2023-02-15', 'MECH', 'SY', 'DTE2020', 'SW', 2022),
('2019BME036', 'Anvay', 'Prakash', 'Barsagade', 'M', '2019bme036@sggs.ac.in', '7447557608', '2002-04-19', 'MECH', 'B.Tech', 'DTE2020', 'SW', 2019),
('2019BME041', 'firstName', '$middleName', '$lastName', '$gender', '$email', '0', '0000-00-00', 'MECH', 'FY', 'DTE2020', 'SW', 2019),
('2019BME052', 'Vaishrav', 'Madhav', 'Joshi', 'M', '2019bme052@sggs.ac.in', '9404030048', '2001-03-31', 'MECH', 'B.Tech', 'DTE2020', 'Al', 2019),
('2019BPR030', 'Tejas', 'Ravindra', 'Yelne', 'M', '2019bpr030@sggs.ac.in', '8308498845', '2001-03-15', 'PROD', 'B.Tech', 'DTE2020', 'SW', 2021),
('2019MET022', 'Ram', 'Sham', 'Patil', 'M', '2019met022@sggs.ac.in', '987654567', '2021-10-07', 'MECH', 'SY', 'DTE2019', 'SNW', 2019),
('2020BEC055', 'Saeel', 'Rupesh', 'Gote', 'M', '2020bec055@sggs.ac.in', '9420824434', '2003-01-30', 'EXTC', 'TY', 'DTE2020', 'SW', 2021),
('2020BME015', 'Rohit', 'Kakasaheb', 'Kshirsagar', 'M', '2020bme015@sggs.ac.in', '8830988970', '2002-12-26', 'MECH', 'TY', 'DTE2020', 'SW', 2021),
('2020BME016', 'Raman', 'Subhash', 'Khanorkar', 'M', '2020bme016@sggs.ac.in', '9307914307', '2002-06-17', 'MECH', 'TY', 'DTE2020', 'SW', 2022),
('2020BME028', 'Harvindar Singh', 'Devendra Singh', 'Ishar', 'M', '2020bme028@sggs.ac.in', '7378419157', '2002-12-12', 'MECH', 'TY', 'DTE2020', 'SW', 2022),
('2020BME062', 'Prasad', 'Ashokrao', 'Balkhande', 'M', '2020bme062@sggs.ac.in', '7385576127', '2002-01-05', 'MECH', 'TY', 'DTE2020', 'SW', 2021),
('2020BME069', 'Sahil', 'Chandrahas', 'Ladwe', 'M', '2020bme069@sggs.ac.in', '7030133617', '2000-09-15', 'MECH', 'TY', 'DTE2020', 'SW', 2021),
('2020BME151', 'Shlok', 'Vivek', 'Joshi', 'M', '2020bme151@sggs.ac.in', '8432310750', '2002-08-06', 'MECH', 'TY', 'DTE2020', 'SW', 2021),
('2021BME010', 'Atherul', 'Hasan', 'Syed', 'M', '2021bme010@sggs.ac.in', '9359383885', '2002-11-23', 'MECH', 'SY', 'DTE2020', 'SW', 2022),
('2021BME013', 'Vedant', 'Nandkishor', 'Raut', 'M', '2021bme013@sggs.ac.in', '8999655167', '2003-03-19', 'MECH', 'SY', 'DTE2020', 'SW', 2022),
('2021BME055', 'Nikita', 'Suryakant', 'Gangatire', 'F', '2021bme055@sggs.ac.in', '9922282923', '2003-03-25', 'MECH', 'SY', 'DTE2020', 'SW', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `team22_23`
--

CREATE TABLE `team22_23` (
  `RegId` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YearId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SAE_ID` int(11) NOT NULL,
  `DeptId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RoleId` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MemberId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team22_23`
--

INSERT INTO `team22_23` (`RegId`, `YearId`, `SAE_ID`, `DeptId`, `RoleId`, `MemberId`) VALUES
('2019BME021', 'Third', 90919293, 'CAE', 'VC', 4321),
('2019BME022', 'B.Tech', 123456, 'CAE', 'DR2', 4321),
('2019BME036', 'B.Tech', 484889596, 'SS', 'DR1', 1002),
('2019BME041', 'B.Tech', 484889597, 'DES', 'TM', 1003),
('2019BME052', 'SY', 90919293, 'SS', 'DR1', 43211),
('2019BPR030', 'B.Tech', 484889595, 'BRK', 'CPT', 1001),
('2020BEC055', 'TY', 484889598, 'TRANS', 'TM', 1004),
('2020BME015', 'TY', 484889604, 'TRANS', 'TM', 1010),
('2020BME016', 'TY', 484889602, 'BRK', 'TM', 1008),
('2020BME028', 'TY', 484889603, 'BRK', 'TM', 1009),
('2020BME062', 'TY', 484889601, 'SS', 'TM', 1007),
('2020BME069', 'TY', 484889599, 'SS', 'TM', 1005),
('2020BME151', 'TY', 484889600, 'TRANS', 'TM', 1006),
('2021BME010', 'SY', 484889606, 'CAE', 'TM', 1012),
('2021BME013', 'SY', 484889605, 'CAE', 'TM', 1011),
('2021BME055', 'SY', 484889607, 'DES', 'TM', 1013);

-- --------------------------------------------------------

--
-- Table structure for table `teamlist`
--

CREATE TABLE `teamlist` (
  `SrNo` int(11) NOT NULL,
  `teamName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teamlist`
--

INSERT INTO `teamlist` (`SrNo`, `teamName`) VALUES
(1, 'team22_23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`YearId`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`CollegeId`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`DeptId`);

--
-- Indexes for table `membertype`
--
ALTER TABLE `membertype`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleId`);

--
-- Indexes for table `sae_cc_members`
--
ALTER TABLE `sae_cc_members`
  ADD PRIMARY KEY (`RegId`),
  ADD KEY `fk_branch_sae_cc_member` (`BranchId`),
  ADD KEY `fk_college_sae_cc_member` (`CollegeId`),
  ADD KEY `fk_status_sae_cc_member` (`StatusId`),
  ADD KEY `fk_academic_year_sae_cc_member` (`YearId`);

--
-- Indexes for table `team22_23`
--
ALTER TABLE `team22_23`
  ADD PRIMARY KEY (`RegId`),
  ADD KEY `fk_role_team22_23` (`RoleId`),
  ADD KEY `fk_dept_team22_23` (`DeptId`);

--
-- Indexes for table `teamlist`
--
ALTER TABLE `teamlist`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teamlist`
--
ALTER TABLE `teamlist`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sae_cc_members`
--
ALTER TABLE `sae_cc_members`
  ADD CONSTRAINT `fk_academic_year_sae_cc_member` FOREIGN KEY (`YearId`) REFERENCES `academic_year` (`YearId`),
  ADD CONSTRAINT `fk_branch_sae_cc_member` FOREIGN KEY (`BranchId`) REFERENCES `branch` (`BranchID`),
  ADD CONSTRAINT `fk_college_sae_cc_member` FOREIGN KEY (`CollegeId`) REFERENCES `college` (`CollegeId`),
  ADD CONSTRAINT `fk_status_sae_cc_member` FOREIGN KEY (`StatusId`) REFERENCES `membertype` (`StatusId`);

--
-- Constraints for table `team22_23`
--
ALTER TABLE `team22_23`
  ADD CONSTRAINT `fk_dept_team22_23` FOREIGN KEY (`DeptId`) REFERENCES `dept` (`DeptId`),
  ADD CONSTRAINT `fk_role_team22_23` FOREIGN KEY (`RoleId`) REFERENCES `roles` (`RoleId`),
  ADD CONSTRAINT `fk_team22_23_sae_cc_member` FOREIGN KEY (`RegId`) REFERENCES `sae_cc_members` (`RegId`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
