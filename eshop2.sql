-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 12:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_text` varchar(255) NOT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `item_kind` varchar(50) DEFAULT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_text`, `item_type`, `gender`, `item_kind`, `item_register`) VALUES
(1, 'Adidas', 'adidas Climacool Ventania', 100.00, './images/products/shoes/2.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Running', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(2, 'Adidas', 'adidas Predator Edge.4 Fxg', 55.00, './images/products/shoes/1.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Football', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(3, 'New_Balance', 'New Balance FRESH FOAM', 139.00, './images/products/shoes/3.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Running', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(4, 'Adidas', 'adidas Supernova', 128.00, './images/products/shoes/4.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Running', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(5, 'Adidas', 'adidas Ultraboost 21', 126.00, './images/products/shoes/5.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Running', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(6, 'Adidas', 'adidas Ultraboost 22', 190.00, './images/products/shoes/6.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Running', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(7, 'Adidas', 'adidas Predator Edge.2 Fg', 140.00, './images/products/shoes/7.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Football', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(8, 'Adidas', 'adidas Stan Smith Unisex', 100.00, './images/products/shoes/8.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sneakers', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(9, 'Adidas', 'adidas Stan Smith Unisex', 100.00, './images/products/shoes/9.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sneakers', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(10, 'Nike', 'Nike Kyrie 8 Infinity', 129.00, './images/products/shoes/10.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Basketball', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(11, 'Nike', 'Nike KD14', 149.00, './images/products/shoes/11.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Basketball', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(12, 'Vans', 'Vans Sk8-low Unisex', 80.00, './images/products/shoes/12.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Skate', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(13, 'Asics', 'Asics Gel-Rocket 10', 75.00, './images/products/shoes/13.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Volley', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(14, 'Nike', 'Nike Court Vapor Lite', 69.99, './images/products/shoes/14.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Tennis', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(15, 'Nike', 'Nike Zoom Lj 4', 120.00, './images/products/shoes/15.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Track', 'Men', 'Shoes', '2022-05-17 01:21:19'),
(16, 'Champion', 'Champion Crewnect T-Shirt', 35.00, './images/products/clothes/1.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'T-Shirt', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(17, 'Champion', 'Champion polo', 29.90, './images/products/clothes/2.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'T-Shirt', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(18, 'Nike', 'Nike Dri-FIT DNA', 39.99, './images/products/clothes/3.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Shorts', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(19, 'Nike', 'Nike M Nk Df Dry Hbr', 29.99, './images/products/clothes/4.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Shorts', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(20, 'Under_Armour', 'Under Armour Outrun The Rain', 69.99, './images/products/clothes/5.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Jacket', 'Men', 'Clothes', '2022-05-18 01:21:19'),
(21, 'Columbia', 'Columbia Flash Challenger', 64.95, './images/products/clothes/6.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'jacket', 'Men', 'Clothes', '2022-05-17 01:21:20'),
(22, 'Nike', 'Nike Sportswear', 69.99, './images/products/clothes/7.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sweater', 'Men', 'Clothes', '2022-05-17 01:21:21'),
(23, 'Ellesse', 'Ellesse Rununu Track Top', 88.00, './images/products/clothes/8.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sweater', 'Men', 'Clothes', '2022-05-17 01:21:22'),
(24, 'Lee', 'Lee Logo Loose', 75.00, './images/products/clothes/9.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sweatshirt', 'Men', 'Clothes', '2022-05-17 01:21:23'),
(25, 'The_North_Face', 'The North Face Standard', 80.00, './images/products/clothes/10.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sweatshirt', 'Men', 'Clothes', '2022-05-17 01:21:24'),
(26, 'Wrangler', 'Wrangler Texas Spotlite', 79.95, './images/products/clothes/11.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Jeans', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(27, 'Under_Armour', 'Under Armour ColdGear', 54.99, './images/products/clothes/12.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Leggings', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(28, 'Hurley', 'Hurley fa22 Rincon', 72.00, './images/products/clothes/13.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Shirt', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(29, 'Vans', 'Vans Essential', 55.00, './images/products/clothes/14.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Shirt', 'Men', 'Clothes', '2022-05-17 01:21:19'),
(30, 'Under_Armour', 'Under Armour Project', 64.99, './images/products/clothes/15.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sleeveless', 'Men', 'Clothes', '2022-05-17 01:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
