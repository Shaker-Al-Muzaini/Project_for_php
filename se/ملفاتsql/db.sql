-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 07:47 AM
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `NEMA` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `NEMA`, `password`) VALUES
(1, 'shaker', '88ddadec554e6dd3adfdd7eb1ceaef6b');

-- --------------------------------------------------------

--
-- Table structure for table `authorname`
--

CREATE TABLE `authorname` (
  `Author_Name` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorname`
--

INSERT INTO `authorname` (`Author_Name`, `Name`) VALUES
(9, 'William A. Hachten'),
(10, 'Diomidis Spinellis'),
(11, 'Anne E. Preston'),
(12, 'Rebecca Fett');

-- --------------------------------------------------------

--
-- Table structure for table `book_rating`
--

CREATE TABLE `book_rating` (
  `book_rating` int(11) NOT NULL,
  `NEMA` text NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_rating`
--

INSERT INTO `book_rating` (`book_rating`, `NEMA`, `DESCRIPTION`) VALUES
(7, '1', 'yes'),
(8, '1', 'yes'),
(9, '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `id` int(11) NOT NULL,
  `Book_name` text NOT NULL,
  `Author_Name` text NOT NULL,
  `DarAl_nasher` text NOT NULL,
  `issue_number` text NOT NULL,
  `book_rating` text NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`id`, `Book_name`, `Author_Name`, `DarAl_nasher`, `issue_number`, `book_rating`, `IMAGE`) VALUES
(21, 'Designing Authenticity Into ', 'The Troubles of Journalism', 'poiugf', 'issue_number', 'book_rating', 'Product_image/1696672350.jpg'),
(22, 'Powered by Design', 'Best design and editing books', 'Penguin publishing house', 'issue_number', 'book_rating', 'Product_image/2064933592.jpg'),
(23, 'The Troubles of Journalism', 'William A. Hachten', ' The Troubles of Journalism', '2006', '2', 'Product_image/2123106710.jpg'),
(25, ' Cross-Media Service Delivery', 'Diomidis Spinellis', 'COPE', '2012', '2', 'Product_image/2620866418.jpg'),
(26, ' Leaving Science', 'Anne E. Preston', 'students pursuing', 'issue_number', 'book_rating', 'Product_image/1965704324.jpg'),
(27, ' It Starts with the Egg', 'Rebecca Fett', 'Franklin Fox Publishing LLC', '2019', '3', 'Product_image/1745954277.jpg'),
(28, ' Eight Years Four Months', 'William Joseph Bray', 'CreateSpace Independent Publishing', '2011', '3', 'Product_image/2137030432.jpg'),
(29, 'Designing Authenticity Into Language', 'Freda Mishan', 'Intellect Books', '2003', '4', 'Product_image/1828753106.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `name_c` text DEFAULT NULL,
  `email_c` text DEFAULT NULL,
  `tx` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name_c`, `email_c`, `tx`) VALUES
(9, 'شاكر المزيني', 'sdlfksjdfj@kfd', 'مرحبا  بك في  عام  جديد 2022\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorname`
--
ALTER TABLE `authorname`
  ADD PRIMARY KEY (`Author_Name`);

--
-- Indexes for table `book_rating`
--
ALTER TABLE `book_rating`
  ADD PRIMARY KEY (`book_rating`);

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authorname`
--
ALTER TABLE `authorname`
  MODIFY `Author_Name` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `book_rating`
--
ALTER TABLE `book_rating`
  MODIFY `book_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
