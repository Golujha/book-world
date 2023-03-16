-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 09:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rock@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `nop` int(11) NOT NULL,
  `description` text NOT NULL,
  `discount_price` double NOT NULL,
  `mrp` double NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `nop`, `description`, `discount_price`, `mrp`, `isbn`, `category`, `cover`, `status`) VALUES
(1, 'BCA Books & Notes 2023', 'De A. K., ', 1111111111, 'You will let to see three main subjects in BCA Course like English, Computer science, and Mathematics. Based on these core subjects of BCA the specialization courses will be decided which are mentioned below. After knowing the course subjects, the main thing you have to check about the Bachelor of Computer Applications Course is a Syllabus.', 1111, 44444, '1111111222', 2, 'bcabook.png', NULL),
(2, 'hjhd', 'bghw', 2147483647, 'hggyeggd', 122, 44444, '14777788888', 1, 'ajio3.png', 1),
(3, 'Bca bok', 'Gk jha', 1111111122, 'BCA Books & Study Materials PDF Download for 1st year, 2nd year & final year: BCA Course structure is pretty same as the traditional B.Sc Course program. Check the BCA Course details from this page and then download BCA 1st year, 2nd year, and 3rd-year Notes & Study Materials in PDF formats.\r\n\r\nAlso, know the ', 200, 1000, '22222222222222', 2, 'HAND-BOOK-BCA-III-SEM.-CCS-UNI.jpg', 1),
(4, 'Bca', 'sk jha', 2147483647, 'BCA Books & Study Materials PDF Download for 1st year, 2nd year & final year: BCA Course structure is pretty same as the traditional B.Sc Course program. Check the BCA Course details from this page and then download BCA 1st year, 2nd year, and 3rd-year Notes & Study Materials in PDF formats.\r\n\r\nAlso, know the ', 1000, 5000, '3333333333', 2, 'HAND-BOOK-BCA-III-SEM.-CCS-UNI.jpg', 1),
(5, 'Bca 2nd sem', 'sk jha', 444444, 'hhhhhhhhhuwwwwwwwwwwwgcxvvvvvvvvvvvetta', 222222, 55555, '3333333333', 1, 'HAND-BOOK-BCA-III-SEM.-CCS-UNI.jpg', 1),
(6, 'mca', 'shu jha', 666666, 'hhhhhhhhhhhhhhhhbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 1111, 3333333, '8888888888', 1, 'HAND-BOOK-BCA-II-SEM_1.jpg', 1),
(7, 'mca-1', 'sagar jha', 77777777, 'bbbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaak', 444444, 7777777777, '111111111111', 1, 'bcabook.png', 1),
(8, 'ba', 'sonu', 2147483647, 'bsssssssssssssmmmmmmmmmmmm', 10000000, 3000000, '3333333333333333', 1, 'bcabook.png', 1),
(9, 'bcom', 'raja', 2147483647, 'lllllllllllllllllllllllkkkkkkkkkkkkkkkkk', 200000, 40000000000, '555555555555555', 1, 'HAND-BOOK-BCA-III-SEM.-CCS-UNI.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Pen'),
(2, 'Book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
