-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usedmotos`
--
CREATE DATABASE IF NOT EXISTS `usedmotos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `usedmotos`;

-- --------------------------------------------------------

--
-- Table structure for table `allads`
--

CREATE TABLE `allads` (
  `user_id` int(100) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `manufactured_year` int(20) NOT NULL,
  `number_of_ownership` int(20) NOT NULL,
  `kms_driven` int(100) NOT NULL,
  `expected_price` int(100) NOT NULL,
  `special_note` varchar(500) NOT NULL,
  `pictures` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allads`
--

INSERT INTO `allads` (`user_id`, `manufacturer_name`, `model`, `manufactured_year`, `number_of_ownership`, `kms_driven`, `expected_price`, `special_note`, `pictures`, `contact`) VALUES
(8, 'Audi', 'Audi r8 2008 ', 4, 1, 10000, 2000000, 'very nice', '166487799232419003-2-440-OVR-1.jpeg', '78542455452'),
(9, 'Tata', 'nexon', 2021, 1, 23300, 1300000, 'immaculate condition very well maintained all servicing done from authorised service center on time.', '1664891956nexon.jpg', '784255434'),
(12, 'Yamaha', 'r15 v3', 2018, 2, 14000, 90000, 'very good condition', '1664892988r15.jpg', '8108239371'),
(13, 'Rolls Royce', 'ghost', 2020, 1, 45000, 45000000, 'IT department coming to raid your house ', '1664893225ghost.jpg', '8657897246'),
(14, 'Ferrari', 'f40', 1989, 2, 100000, 20000000, 'old is gold', '1664893586Ferrari-F40-1.jpg', '8425805385'),
(15, 'Suzuki', 'burgman street 125', 2019, 1, 8000, 60000, 'maxi scooter', '1664893705burgman.jpg', '9967185164'),
(16, 'Suzuki', 'hayabusa gsx1300r', 2009, 1, 18000, 1200000, '300 kilometer per hour on 5thgear and there is one more gear left ', '1664893967hayabusa.jpg', '8108239371');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `unique_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`unique_id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'karhikeyan', 'dharmaraj', 'karthikdharmaraj08@gmail.com', '73b4bbda235d8e4e7da43055df7933ca'),
(2, 'aniket', 'vishwakarma', 'aniket@123gmail.com', '9dbbae8b0159030ac238af0985c3ad65');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allads`
--
ALTER TABLE `allads`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allads`
--
ALTER TABLE `allads`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
