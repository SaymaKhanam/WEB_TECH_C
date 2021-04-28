-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 01:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boimela`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AUserName` varchar(100) NOT NULL,
  `AName` varchar(100) NOT NULL,
  `AGender` varchar(100) NOT NULL,
  `AEmail` varchar(100) NOT NULL,
  `APhone` varchar(100) NOT NULL,
  `ADOB` varchar(100) NOT NULL,
  `APassword` varchar(100) NOT NULL,
  `AAddress` varchar(200) NOT NULL,
  `APhoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AUserName`, `AName`, `AGender`, `AEmail`, `APhone`, `ADOB`, `APassword`, `AAddress`, `APhoto`) VALUES
('asdfgh', 'Sayma Khanam', 'Female', 'saymakhanam@gmail.com', '01728649297', '11-01-1999', '123456', 'Dhaka, Bangladesh', 'sayma.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookcart`
--

CREATE TABLE `bookcart` (
  `ID` int(11) NOT NULL,
  `BookName` varchar(25) NOT NULL,
  `BookPrice` float DEFAULT NULL,
  `BookImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookcart`
--

INSERT INTO `bookcart` (`ID`, `BookName`, `BookPrice`, `BookImage`) VALUES
(1, 'The Thursday Murder Club', 99, './upload/product1.jpg'),
(2, 'Hamnet: Exclusive Edition', 47, './upload/product2.jpg'),
(3, 'The Dark Remains (Hardbac', 59, './upload/product3.jpg'),
(4, 'The Guest List (Paperback', 78, './upload/product4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `BookName` varchar(100) NOT NULL,
  `AuthorName` varchar(100) NOT NULL,
  `BookDetails` varchar(200) NOT NULL,
  `BookPrice` varchar(100) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `ISBN`, `BookName`, `AuthorName`, `BookDetails`, `BookPrice`, `SID`) VALUES
(5, '978-1-891830-87-7', 'The Surrogates', 'Abid', 'THE SURROGATES is now a major motion picture from TOUCHSTONE PICTURES, starring BRUCE WILLIS, VING RHAMES, RADHA MITCHELL, and ROSAMUND PIKE. Now on DVD and Blu-Ray!', '$17.95', 22),
(6, '978-1-60309-320-0', 'The Roses of Berlin\r\n', 'Adams', 'Sixteen years ago, notorious science-brigand Jenni Nemo journeyed into the frozen reaches of Antarctica to resolve her father\'s weighty legacy in a storm of madness and loss, barely escaping with her ', '$14.95', 18);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `BID` int(11) NOT NULL,
  `BUserName` varchar(100) NOT NULL,
  `BName` varchar(100) NOT NULL,
  `BGender` varchar(100) NOT NULL,
  `BEmail` varchar(100) NOT NULL,
  `BPhone` varchar(50) NOT NULL,
  `BDOB` varchar(100) NOT NULL,
  `BAddress` varchar(200) NOT NULL,
  `BPhoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`BID`, `BUserName`, `BName`, `BGender`, `BEmail`, `BPhone`, `BDOB`, `BAddress`, `BPhoto`) VALUES
(2, 'rinakhan', 'Rina Khan', 'female', 'rina@gmail.com', '01912345671', '09-01-2001', 'Sylhet', 'saibasafa1619511267.png'),
(3, 'rasidchowdhury', 'Rashid Chowdhury', 'male', 'rashid@gmail.com', '01912345670', '09-01-2011', 'Dhaka', 'mustafa1619511428.jpg'),
(4, 'mimrahaman', 'Mim Rahaman', 'female', 'mim@gmail.com', '01912345678', '09-01-2000', 'Rangpur', 'saibasafa1619511267.png');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DID` int(11) NOT NULL,
  `DUserName` varchar(100) NOT NULL,
  `DName` varchar(100) NOT NULL,
  `DGender` varchar(100) NOT NULL,
  `DEmail` varchar(100) NOT NULL,
  `DPhone` varchar(50) NOT NULL,
  `DDOB` varchar(100) NOT NULL,
  `DAddress` varchar(200) NOT NULL,
  `DPhoto` varchar(200) NOT NULL,
  `DStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`DID`, `DUserName`, `DName`, `DGender`, `DEmail`, `DPhone`, `DDOB`, `DAddress`, `DPhoto`, `DStatus`) VALUES
(11, 'imamhossain', 'Imam Hossain', 'male', 'imam@gmail.com', '01772672855', '2021-04-01', 'Dhaka', 'imamhossain1619511350.jpg', 1),
(12, 'mustafa', 'Mustafa Kamal', 'male', 'kamal@gmail.com', '01672676855', '2021-04-15', 'Gulshan, Dhaka', 'mustafa1619511428.jpg', 1),
(13, 'omithasan', 'Omit Hasan', 'male', 'omit@gmail.com', '01772676655', '2021-04-03', 'Bashundhara, Dhaka', 'omithasan1619511734.jpg', 1),
(14, 'jaedkhan', 'Jaed Khan', 'male', 'khan@gmail.com', '01770976855', '2021-04-04', 'Bashundhara, Dhaka', 'jaedkhan1619511840.jpg', 1),
(15, 'mehedihasan', 'Mehedi Hasan', 'male', 'mehedi@gmail.com', '01511116384', '23-12-1999', 'Dhaka', 'mustafa1619511428.jpg', 0),
(16, 'adnanakib', 'Adnan Akib', 'male', 'adnan@gmail.com', '01684856567', '01-02-2002', 'Rampura', 'mustafa1619511428.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LID`, `Username`, `Password`, `UserCategory`) VALUES
(1, 'saymakhanam1', 'asdfgh', 'Seller'),
(2, 'Afnan18', 'qwerty', 'Seller'),
(3, 'adfsgf', '123456', 'Seller'),
(4, 'saymakhanam', 'asdfgh', 'Delivery'),
(5, 'imrulafnan', 'asdfgh', 'Seller'),
(6, 'imrulafnan', 'asdfgh', 'Seller'),
(7, 'saymakhanam', 'qwerty', 'Delivery'),
(8, 'Afnan18', 'asdfgh', 'Seller'),
(9, 'assdfgg', 'qwerty', 'Seller'),
(10, 'imrulafnan', 'afnan1821', 'Seller'),
(11, 'imrulafnan', 'afnan1821', 'Seller'),
(12, 'imrulaf', 'afnan1821', 'Seller'),
(13, 'imrulafn', 'afnan1821', 'Seller'),
(14, 'imrulafn', 'afnan1821', 'Seller'),
(15, 'imrulafn', 'afnan1821', 'Seller'),
(16, 'imrulafn', 'afnan1821', 'Seller'),
(17, 'imrulafn', 'afnan1821', 'Seller'),
(18, 'saibasafa', 'qwerty', 'Seller'),
(19, 'saibasafa', 'qwerty', 'Seller'),
(20, 'saymakhanam', 'asdfgh', 'Delivery'),
(21, 'Afnan18', 'zxcvbn', 'Seller'),
(22, 'saibasafa', 'qwerty', 'Seller'),
(23, 'saymakhanam2', 'zxcvbn', 'Seller'),
(24, 'saymakhanamaa', 'qqqqqq', 'Seller'),
(25, 'saymakhanamaaaaaaa', 'hhhhhh', 'Seller'),
(26, 'Afnan18', 'qwerty', 'Seller'),
(27, 'Afnan18', '123456', 'Seller'),
(28, 'saymakhanam1', 'qwerty', 'Delivery'),
(29, 'saymakhanam5', 'qwerty', 'Seller'),
(30, 'saymakhanam', 'qwerty', 'Seller'),
(31, 'iearul', 'zxcvbn', 'Delivery'),
(32, 'imrulafnan', 'asdfgh', 'Seller'),
(33, 'saibasafa', 'qwerty', 'Seller'),
(34, 'imamhossain', 'zxcvbn', 'Delivery'),
(35, 'mustafa', 'asdfgh', 'Delivery'),
(36, 'jakirhosen', '123456', 'Seller'),
(37, 'afsana', 'zxcvbn', 'Seller'),
(38, 'omithasan', 'asdfgh', 'Delivery'),
(39, 'jaedkhan', 'qwerty', 'Delivery'),
(40, 'saymak', '123456', 'Seller');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `SID` int(11) NOT NULL,
  `SUserName` varchar(100) NOT NULL,
  `SName` varchar(100) NOT NULL,
  `SGender` varchar(100) NOT NULL,
  `SEmail` varchar(100) NOT NULL,
  `SPhone` varchar(50) NOT NULL,
  `SDOB` varchar(100) NOT NULL,
  `SAddress` varchar(200) NOT NULL,
  `SPhoto` varchar(200) NOT NULL,
  `SStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`SID`, `SUserName`, `SName`, `SGender`, `SEmail`, `SPhone`, `SDOB`, `SAddress`, `SPhoto`, `SStatus`) VALUES
(33, 'saibasafa', 'Saiba Khanam', 'female', 'safa@gmail.com', '01772676857', '2021-04-13', 'Bogura, Bangladesh', 'saibasafa1619511267.png', 1),
(34, 'jakirhosen', 'Jakir Hosen', 'male', 'jakir@gmail.com', '01777776855', '2021-04-21', 'Bashundhara, Dhaka', 'jakirhosen1619511542.jpg', 1),
(35, 'afsana', 'Afsana Mimi', 'female', 'mimi@gmail.com', '01772676999', '2021-04-09', 'Bashundhara, Dhaka', 'afsana1619511652.png', 1),
(36, 'karimkhan', 'Karim Khan', 'male', 'karim@gmail.com', '01722222222', '03-12-2003', 'Lalmohon', 'mustafa1619511428.jpg', 1),
(37, 'nazrul', 'Nazrul Huda', 'male', 'nazrul@gmail.com', '01375595674', '03-12-2001', 'Kuril, Dhaka', 'mustafa1619511428.jpg', 1),
(38, 'kamran', 'Kamran Hasan', 'male', 'kamran@gmail.com', '01835474853', '03-12-2009', 'Gazipur', 'mustafa1619511428.jpg', 0),
(39, 'saymak', 'Sayma Khanam', 'female', 'sa@gmail.com', '01772676855', '2021-04-16', 'Bashundhara, Dhaka', 'saymak1619521503.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcart`
--
ALTER TABLE `bookcart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcart`
--
ALTER TABLE `bookcart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
