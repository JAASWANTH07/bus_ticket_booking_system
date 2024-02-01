-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 09:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(6, 'All Buses');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `start` varchar(255) NOT NULL,
  `stopage` varchar(255) NOT NULL,
  `category` int(3) NOT NULL,
  `cost` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`start`, `stopage`, `category`, `cost`) VALUES
('Kanpur', 'Unnao', 5, 100),
('Unnao', 'Lucknow', 5, 152);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `bus_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_age` int(3) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `cost` int(3) NOT NULL,
  `costa` int(16) NOT NULL,
  `Payment` varchar(16) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `bus_id`, `user_id`, `user_name`, `user_age`, `source`, `destination`, `date`, `cost`, `costa`, `Payment`) VALUES
(99, 34, 31, 'Suresh', 24, 'Bangalore', 'Goa', '2021-08-20', 0, 1500, NULL),
(100, 29, 31, 'Ramesh', 18, 'Mangalore ', 'Mumbai', '2021-08-20', 0, 750, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_source` varchar(255) NOT NULL,
  `post_destination` varchar(255) NOT NULL,
  `post_via` varchar(255) NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `post_query_count` int(3) NOT NULL,
  `max_seats` int(3) NOT NULL,
  `available_seats` int(3) NOT NULL,
  `seat_cost` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_source`, `post_destination`, `post_via`, `post_via_time`, `post_query_count`, `max_seats`, `available_seats`, `seat_cost`) VALUES
(27, 6, 'Chennai to Kolar', 'admin', '2021-08-25', 'bus1.jpg', 'Non-AC, Single Stop Express, Comfortable Seating, Drinking Water Available.', 'Chennai', 'Kolar', 'Chennai Bangalore Kolar', '2:00 4:00 7:00', 0, 20, 20, 450),
(28, 6, 'Hyderabad to Kolkata', 'admin', '2021-08-26', 'bus1.jpg', 'AC Deluxe, Super Express, Comfortable Seating with Sleeping Coach, and Toilet.', 'Hyderabad', 'Kolkata', 'Hyderabad Bangalore Visakhapatnam Bhubaneswar Kolkata', '26-6:00 26-19:00 26-23:30 27-7:00 27-22:00', 0, 20, 20, 1150),
(29, 6, 'Mangalore to Mumbai', 'admin', '2021-08-27', 'bus8.jpg', 'AC Deluxe, Super Fast, Covid Measures Taken.', 'Mangalore', 'Mumbai', 'Mangalore Bijapur Mumbai', '8:00 13:00 21:00', 0, 35, 36, 750),
(30, 6, 'Mysuru to Bangalore', 'admin', '2021-08-26', 'bus2.jpg', 'Daily Bus, Super Express', 'Mysuru', 'Bangalore', 'Mysuru Mandya Bangalore', '10:00 11:30 13:00', 0, 40, 40, 250),
(32, 6, 'Mysuru to Kodagu', 'admin', '2021-08-28', 'busbg16.jpg', 'Super-Fast Deluxe', 'Mysuru', 'Kodagu', 'Mysore Kodagu', '9:00 12:00', 0, 25, 25, 200),
(34, 6, 'Bangalore to Goa', 'admin', '2021-08-21', 'bus6.jpeg', 'Covid Measures: Negative Report Mandatory, Arrive 30 mins Early before Departure.\r\nBus Details: Drinking Water, Toilet, Two Drivers. ', 'Bangalore', 'Goa', 'Mysuru Bangalore Vijaypura Goa', '6:00 9:00 16:00 18:00', 0, 20, 21, 1500),
(35, 6, 'Bangalore to Goa', 'admin', '2021-08-27', 'bus6.jpeg', 'Covid Measures: Negative Report Mandatory, Arrive 30 mins Early before Departure.\r\nBus Details: Drinking Water, Toilet, Two Drivers. ', 'Bangalore', 'Goa', 'Mysuru Bangalore Vijaypura Goa', '6:00 9:00 16:00 18:00', 0, 20, 20, 1500),
(36, 6, 'Bangalore to Pune', 'admin', '2021-08-21', 'bus3.jpg', 'Long Route, Weekly Bus, Covid Measure took, AC Deluxe', 'Bangalore', 'Pune', 'Bangalore Mumbai Pune', '12:00 20:00 23:30', 0, 30, 30, 1200),
(37, 6, 'Bangalore to Pune', 'admin', '2021-08-28', 'bus3.jpg', 'Long Route, Weekly Bus, Covid Measure took, AC Deluxe', 'Bangalore', 'Pune', 'Bangalore Mumbai Pune', '12:00 20:00 23:30', 0, 30, 30, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(3) NOT NULL,
  `query_bus_id` int(3) NOT NULL,
  `query_user` varchar(255) NOT NULL,
  `query_email` varchar(255) NOT NULL,
  `query_date` date NOT NULL,
  `query_content` text NOT NULL,
  `query_replied` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `query_bus_id`, `query_user`, `query_email`, `query_date`, `query_content`, `query_replied`) VALUES
(16, 26, 'Admin', 'aa@fake.com', '2021-08-20', 'Super Experience\r\n', 'no'),
(17, 31, 'Admin', 'nn@fake.com', '2021-08-20', 'Cool Interior', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `bus_id` int(3) NOT NULL,
  `max_seats` int(3) NOT NULL,
  `available_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_phoneno`, `user_image`, `user_role`) VALUES
(2, 'prateek', 'saraswat', 'prateek', 'saraswat', 'saraswat.prateek100@gmail.com', '9457507662', 'user_default.jpg', 'admin'),
(5, 'admin', 'admin', 'Admin', 'Bus', 'lit2016011@iiila.ac.in', '9784512659', 'user3.jpg.jpg', 'admin'),
(31, 'sample', 'password', 'sam', 'sample', 'sam@gmail.com', '7232917384', 'user4.jpg.jpg', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
