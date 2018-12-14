-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 06:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talia_kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `S/N` int(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`S/N`, `email`, `password`) VALUES
(1, 'taliaskitchen@gmail.com', 'talia');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `S/N` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `mealname` text NOT NULL,
  `mealamount` text NOT NULL,
  `no_of_packs` int(10) NOT NULL,
  `total_amount` text NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Resolved` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`S/N`, `name`, `phoneno`, `email`, `location`, `mealname`, `mealamount`, `no_of_packs`, `total_amount`, `order_time`, `Resolved`) VALUES
(1, 'munirat', '8160471777', 'muniratsulaimon@gmail.com', '11,shodimu street, shomolu lagos', 'Chinese Rice', '2500', 3, '7500', '2018-12-09 05:56:30', 'checked'),
(6, 'bilikis', '8131933126', 'bilbolsul@gmail.com', '11,shodimu street, shomolu lagos', 'Spagethi Bolonis', '2500', 3, '7500', '2018-12-09 05:58:03', 'unchecked'),
(8, 'munnyraht sulaimon', '8160471777', 'muniratsulaimon@gmail.com', '11,shodimu street shomolu, lagos', 'White Pasta', '4200', 4, '16800', '2018-12-09 07:24:43', 'unchecked'),
(10, 'akinkunmi', '07035228982', 'kunmi@gmail.com', '12,akute road, ogun state', 'Chinese Rice with Curry Sauce', '2500', 4, '10000', '2018-12-09 07:27:03', 'checked'),
(11, 'akinkunmi', '07035228982', 'kunmi@gmail.com', '12,akute road, ogun state', 'Chinese Rice with Curry Sauce', '2500', 4, '10000', '2018-12-09 07:26:55', 'checked'),
(12, 'bilikis', '8131933126', 'bilbolsul@gmail.com', '11,shodimu street, shomolu lagos', 'Spagethi Bolonis', '2500', 3, '7500', '2018-12-09 07:25:48', 'unchecked'),
(19, 'jummai', '8160471777', 'muniratsulaimon@gmail.com', '11,shodimu street shomolu, lagos', 'Chinese chips with meat', '3500', 3, '10500', '2018-12-07 10:44:26', 'unchecked'),
(20, 'sulaimon wasiu', '07071220529', 'swasiukonyinsola@gmail.com', '11, ikorodu road', 'Fried Rice with Chickenwors', '5000', 2, '10000', '2018-12-08 09:15:05', ''),
(21, 'sulaimon bisola', '07033563351', 'muniratsulaimon@gmail.com', '11,shodimu street shomolu, lagos', 'Pink Cake', '6000', 5, '30000', '2018-12-08 09:18:42', ''),
(25, 'simi', '0813456788', 'simisola@gmail.com', '12,akute road, ogun state', 'Carlo Rossi', '4000', 0, '', '2018-12-09 08:10:15', ''),
(26, 'mariam', '09053626291', 'mariam@gmail.com', '11,shodimu street shomolu, lagos', ' Roasted Whole Chicken', '7000', 3, '21000', '2018-12-11 17:15:04', 'unchecked'),
(27, '', '09076467034', 'tunde@gmail.com', '11,shodimu street shomolu, lagos', 'Chinese Pasta', '3500', 2, '7000', '2018-12-13 12:58:44', 'unchecked'),
(28, '', '07063452677', 'tunde@gmail.com', '5,ajayi street , onike', 'Fried Rice', '4000', 1, '4000', '2018-12-13 13:16:42', 'unchecked'),
(29, 'tunde', '07063452677', 'tunde@gmail.com', '5,ajayi street , onike', 'Fried Rice', '4000', 1, '4000', '2018-12-13 13:19:33', 'unchecked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`S/N`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`S/N`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `S/N` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `S/N` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
