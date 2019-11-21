-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 04:35 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `id`, `quantity`) VALUES
('suyash', 1, 2),
('suyash', 5, 1),
('suyash', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `name` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `imgname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`name`, `id`, `type`, `price`, `imgname`) VALUES
('denim', 1, 'men', 499, 'denim.jpg'),
('shirt', 2, 'men', 399, 'shirt.jpg'),
('t-shirt', 3, 'men', 1599, 'tshirt.jpg'),
('shoes', 4, 'men', 2999, 'shoes.jpg'),
('Salwar Suit', 5, 'women', 3999, 'salwarsuit.jpg'),
('Lehnga', 6, 'women', 1999, 'lehnga.jpg'),
('Saree', 7, 'women', 1699, 'saree.jpg'),
('Sandals', 8, 'women', 2999, 'sandal.jpg'),
('Baby girl set', 9, 'kids', 3999, 'babygirlset.jpg'),
('Baby boy set', 10, 'kids', 3999, 'babyboyset.jpg'),
('Baby kit', 11, 'kids', 1599, 'babykit.jpg'),
('Baby shoes', 12, 'kids', 499, 'babyshoes.jpg'),
('Curtains', 13, 'decor', 5999, 'curtains.jpg'),
('Sofa covers', 14, 'decor', 4690, 'sofacovers.jpg'),
('Bed sheets', 15, 'decor', 5599, 'bedsheets.jpg'),
('Door mats', 16, 'decor', 1399, 'doormats.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('suyash', 'singh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
