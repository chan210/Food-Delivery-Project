-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2018 at 10:54 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `takeout1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL DEFAULT 'unknown',
  `middlename` varchar(30) NOT NULL DEFAULT 'unknown',
  `lastname` varchar(30) NOT NULL DEFAULT 'unknown',
  `contact` varchar(30) NOT NULL DEFAULT 'unknown',
  `email` varchar(30) NOT NULL DEFAULT 'unknown',
  `secret` varchar(30) NOT NULL DEFAULT '0000',
  `password` varchar(30) NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL DEFAULT 'unknown',
  `middlename` varchar(30) NOT NULL DEFAULT 'unknown',
  `lastname` varchar(30) NOT NULL DEFAULT 'unknown',
  `contact` varchar(30) NOT NULL DEFAULT 'unknown',
  `email` varchar(30) NOT NULL DEFAULT 'unknown',
  `secret` varchar(30) NOT NULL DEFAULT '0000',
  `password` varchar(30) NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL DEFAULT '999999',
  `date` date NOT NULL,
  `tracking` varchar(200) NOT NULL DEFAULT 'processing',
  `driver_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL DEFAULT 'unknown',
  `price` int(100) NOT NULL DEFAULT '999999'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT 'unknown',
  `price` int(11) NOT NULL DEFAULT '999999',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `invoice_id` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT 'unknown',
  `price` int(11) NOT NULL DEFAULT '999999',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `invoice_id` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL DEFAULT 'unknown',
  `middlename` varchar(30) NOT NULL DEFAULT 'unknown',
  `lastname` varchar(30) NOT NULL DEFAULT 'unknown',
  `contact` int(30) NOT NULL DEFAULT '0',
  `email` varchar(30) NOT NULL DEFAULT 'unknown',
  `secret` varchar(30) NOT NULL DEFAULT '0000',
  `password` varchar(30) NOT NULL DEFAULT '1234',
  `address` varchar(200) NOT NULL DEFAULT 'unknown',
  `zipcode` varchar(20) NOT NULL DEFAULT '0',
  `city` varchar(100) NOT NULL DEFAULT 'mississauga',
  `country` varchar(100) NOT NULL DEFAULT 'canada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `zipcode` (`zipcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`);
