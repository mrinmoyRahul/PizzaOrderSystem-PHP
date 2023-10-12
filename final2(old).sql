-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 06:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminis`
--

CREATE TABLE `adminis` (
  `id` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminis`
--

INSERT INTO `adminis` (`id`, `username`, `password`) VALUES
(1, 'rohit', 'rohit3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` int(50) NOT NULL,
  `pquantity` int(10) NOT NULL,
  `ptotal` int(15) NOT NULL,
  `purl` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `pprice`, `pquantity`, `ptotal`, `purl`) VALUES
(5, 'Pepperoni Pizza', 450, 2, 900, '  img/Pizza3.jpg '),
(6, 'Mexixcana', 450, 2, 900, '  img/Pizza3.jpg '),
(7, 'barbequeue chicken', 200, 2, 400, '  img/pz2.jpg '),
(8, 'Margherita', 400, 1, 400, '  img/Pizza3.jpg '),
(10, 'Margherita', 400, 2, 800, '  img/Pizza3.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `pic` varchar(80) NOT NULL,
  `price` float NOT NULL,
  `fname` varchar(100) NOT NULL,
  `furl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `spec`, `pic`, `price`, `fname`, `furl`) VALUES
(14, 'Margherita', 'tomato, sliced mozarella and extra virgin olive oil', '', 400, 'Pizza3.jpg', 'img/Pizza3.jpg'),
(20, 'barbequeue chicken', 'chicken,pasta,cheese,mozarellan', '', 200, 'pz2.jpg', 'img/pz2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recorder`
--

CREATE TABLE `recorder` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `landmark` varchar(15) NOT NULL,
  `pincode` int(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_total` int(10) NOT NULL,
  `p_tp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Password`, `Mobile`) VALUES
(4, 'samir', 'samir@gmail.com', '1234679', '9876543211'),
(5, 'rohit', 'rohit@gmail.com', '22446789', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `usero`
--

CREATE TABLE `usero` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminis`
--
ALTER TABLE `adminis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recorder`
--
ALTER TABLE `recorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usero`
--
ALTER TABLE `usero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminis`
--
ALTER TABLE `adminis`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recorder`
--
ALTER TABLE `recorder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usero`
--
ALTER TABLE `usero`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
