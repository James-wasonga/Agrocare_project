-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 06:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrocare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uName` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uName`, `email`, `password`) VALUES
('James ', 'jameswasonga22@gmail.com', '123456'),
('Erick', 'erickochieng3860@gmail.com', 'Ericko22');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(0, 'Fertilizer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivered_to` varchar(150) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `emailaddress` varchar(200) NOT NULL,
  `county` varchar(40) NOT NULL,
  `subcounty` varchar(40) NOT NULL,
  `nearestagrovet` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`firstname`, `lastname`, `idnumber`, `phonenumber`, `emailaddress`, `county`, `subcounty`, `nearestagrovet`) VALUES
('James', 'Wasonga', 4058152, 793758686, 'jameswasonga222@gmail.com', 'Kenya', 'Uriri', 'Nyalenda'),
('John', 'Adera', 4058154, 793758686, 'johnadera@gmail.com', 'Kenya', 'Rongo', 'Kuoyo'),
('James', 'Wasonga', 4058155, 793758686, 'jameswasonga22@gmail.com', 'Kenya', 'Maseno', 'Nyalenda'),
('James', 'Wasonga', 40581116, 2147483647, 'jameswasonga22@gmail.com', 'Kenya', 'Maseno', 'Kuoyo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`, `category_id`, `uploaded_date`) VALUES
(0, 'Thabiti Fertilizer', 'It boosts all the farmers inputs', './uploads/Thabiti.png', 6000, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_variation`
--

CREATE TABLE `product_size_variation` (
  `variation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_upload`
--

CREATE TABLE `service_upload` (
  `id` int(50) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_upload`
--

INSERT INTO `service_upload` (`id`, `heading`, `description`, `image1`, `image2`) VALUES
(1, 'Crop Care', 'we do crop care', './images/farmcare.png', './images/backgroundimage.png'),
(3, 'Pest and disease control', 'This is pest and disease control', './images/pest control.png', './images/pest2.png'),
(9, 'Farm Equipments', 'We offer farm equipments to farmers all accross the country to aid in the boosting of farm production.The various farm Equipments within the Agrocare covers both the livestock and crop managements such as Tractors, irrigation machines, seed planter e.t.c ', './images/farmequip2.png', './images/farmeqip1.png'),
(26, 'Farm Equipments', 'We offer farm equipments to farmers all accross the country to aid in the boosting of farm production.The various farm Equipments within the Agrocare covers both the livestock and crop managements such as Tractors, irrigation machines, seed planter e.t.c ', './images/farmeqip1.png', './images/farmequip2.png'),
(27, 'Farm Equipments', 'We offer farm equipments to farmers all accross the country to aid in the boosting of farm production.The various farm Equipments within the Agrocare covers both the livestock and crop managements such as Tractors, irrigation machines, seed planter e.t.c ', './images/farmeqip1.png', './images/farmequip2.png'),
(28, 'Farm Equipments', 'We offer farm equipments to farmers all accross the country to aid in the boosting of farm production.The various farm Equipments within the Agrocare covers both the livestock and crop managements such as Tractors, irrigation machines, seed planter e.t.c ', './images/farmequip2.png', './images/farmeqip1.png');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `FulName` varchar(200) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Item_to_hire` varchar(255) NOT NULL,
  `Date_of_payment` date NOT NULL,
  `Payment_mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`FulName`, `Address`, `Location`, `Item_to_hire`, `Date_of_payment`, `Payment_mode`) VALUES
('James Wasonga', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-10', 'credit-card'),
('James Ouma', '40401 Maseno,Kisumu', 'Kisumu', 'livestock expert', '2024-04-11', 'debit-card'),
('James Ouma', '40401 Maseno,Kisumu', 'Kisumu', 'livestock expert', '2024-04-11', 'debit-card'),
('James Ouma', '40401 Maseno,Kisumu', 'Kisumu', 'livestock expert', '2024-04-11', 'debit-card'),
('James Ouma', '40401 Maseno,Kisumu', 'Kisumu', 'livestock expert', '2024-04-11', 'debit-card'),
('James Ouma', '40401 Maseno,Kisumu', 'Kisumu', 'livestock expert', '2024-04-11', 'debit-card'),
('James Donnie', '45 maseno', 'Kisumu', 'soil test', '2024-04-12', 'debit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-11', 'credit-card'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '32 sare Awendo', 'Nairobi', 'soil skills', '2024-04-18', 'paypal'),
('James Donnie', '40401 Maseno,Kisumu', 'Kisumu', 'soil skills', '2024-04-12', 'credit-card');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `heading` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fName` varchar(55) DEFAULT NULL,
  `uName` varchar(55) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `regDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fName`, `uName`, `email`, `passwd`, `phone`, `country`, `city`, `address`, `region`, `regDate`) VALUES
(4, 'James Wasonga', 'Donnie', 'jameswasonga222@gmail.com', '123456', '2547937586', 'Kenya', 'Nairobi', '32 Embaksasi North', 'Central', '2024-03-09 14:42:01'),
(6, 'James Wasonga', 'JAMWASO', 'jameswasonga22@gmail.com', 'Waso22!', '+254937586', 'Kenya', 'Kisumu', '32 sare Awendo', 'Central', '2024-03-10 16:30:48'),
(7, 'Erick Ondiwah', 'Ondiwaz', 'jameswasonga22@gmail.com', 'Erick', '+254793758', 'Kenya', 'Kisumu', '32 sare Awendo', 'Central', '2024-03-10 16:35:21'),
(8, 'George Wasonga', 'Calvo', 'jameswasonga22@gmail.com', 'Calvo01', '0793758686', 'Kenya', 'Kisumu', 'Kisumu-Busia Highway', 'Central', '2024-03-17 11:52:27'),
(13, '23434', 'Dona', 'jameswasonga22@gmail.com', '123', '2547937586', 'Kenya', 'Kisumu', '32 sare Awendo', 'Kisumu', '2024-03-22 11:35:36'),
(14, '123', 'Dona', 'jameswasonga22@gmail.com', '1234', '2547937586', 'Kenya', 'Kisumu', '32 sare Awendo', 'Central', '2024-03-22 11:41:35'),
(24, 'John ', 'JohnRa', 'johnra@gmail.com', '123456', '0793768482', 'Kenya', 'Kisumu', '32 sare Awendo', 'Kisumu', '2024-04-03 19:46:48'),
(25, 'Mark', 'Ray', 'ray@gmail.com', 'qwerty', '2547937586', 'Kenya', 'Kisumu', '32 sare Awendo', 'Kisumu', '2024-04-12 09:26:03'),
(26, 'James Wasonga', 'ddd', 'jameswasonga22@gmail.com', '1234567', '2547937586', 'Kenya', 'Kisumu', '32 sare Awendo', 'Kisumu', '2024-04-12 12:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`idnumber`);

--
-- Indexes for table `service_upload`
--
ALTER TABLE `service_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_upload`
--
ALTER TABLE `service_upload`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
