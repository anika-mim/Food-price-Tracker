-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 04:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `password` varchar(25) NOT NULL,
  `c_password` varchar(25) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `password`, `c_password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '88', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(14) NOT NULL,
  `password` varchar(25) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `role` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `password`, `c_password`, `role`) VALUES
(4, 'anika', 'mim', 'K', 'anika@gmail.com', 1743453782, '@anika', '', '0'),
(5, 'Erdogan', 'Hamza', 'erdo', 'edro@gmail.com', 2147483647, 'eca1b47d6a915cb8b3b0b0c11', '', '0'),
(9, 'Rahat', 'Tanvir', 'rahat', 'rahat@gmail.com', 1743453790, 'e2403289493c80d74cd32d679', '', 'student'),
(11, 'Bushrah', 'meghla', 'meghla', 'megh@gmail.com', 2147483647, '1111', '1111', 'student'),
(12, 'safi', 'Ahmed', 'safi', 'safi@gmail.com', 2147483647, '206531', '206531', 'student'),
(13, 'Zahid', 'Hasan', 'zahid', 'zahid@gmail.com', 1743453952, 'e2403289493c80d74cd32d679', '206531', 'student'),
(14, 'Mahin', 'Khan', 'mahin', 'mahin@gmail.com', 176756788, '206531', '206531', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `othoba_bookstore`
--

CREATE TABLE `Mr_Burger`(
  `id` int(11) NOT NULL,
  `code_no` varchar(255) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `typ_name` varchar(250) NOT NULL,
  `food_desc` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `offer_price` float NOT NULL,
  `origin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `othoba_bookstore`
--

INSERT INTO `Mr_Burger` (`id`, `code_no`, `food_name`, `image_name`, `typ_name`, `food_desc`, `price`, `offer_price`, `origin`) VALUES
(13, '10', 'Beef Burger', '1.jpg', 'Italian', 'The classic burger is an all time BBQ favourite! This super easy homemade beef burger recipe gives you delicious patties, packed with onions and herbs for extra flavour, that are perfect for topping with cheese, lettuce and tomato, and sandwiching between floury buns', 340, 300, 'Mr_Burger'),
(15, '20', 'Salad', '512.jpg.', 'Italian', 'A cheeseburger is a hamburger topped with cheese. Traditionally, the slice of cheese is placed on top of the meat patty. The cheese is usually added to the cooking hamburger patty shortly before serving, which allows the cheese to melt. ', 450, 319, 'Mr_Burger'),
(16, '30', 'Pasta', '514.jpg', 'Italian', 'chicken sandwich is a sandwich that typically consists of boneless, skinless chicken breast served between slices of bread, on a bun, or on a roll. Variations on the "chicken sandwich" include the chicken burger or chicken on a bun, hot chicken, and chicken salad sandwich', 550, 550, 'Mr_Burger'),
(17, '40', 'Chicken Burger', '118.jpg', 'Italian', ' Veggie burgers have become a popular healthy alternative to meat based burgers. These days, grocery stores and restaurants are offering many options, that try to mimic a meat texture, to custom made black bean and veggie patties and more.', 200, 190, 'Mr_Burger');

-- --------------------------------------------------------

--
-- Table structure for table `priyo_bookstore`
--

CREATE TABLE `Takeout` (
  `id` int(11) NOT NULL,
  `code_no` varchar(255) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `typ_name` varchar(250) NOT NULL,
  `food_desc` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `offer_price` float NOT NULL,
  `origin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priyo_bookstore`
--

INSERT INTO `Takeout` (`id`, `code_no`, `food_name`, `image_name`, `typ_name`, `food_desc`, `price`, `offer_price`, `origin`) VALUES
(5, '44', 'Chiken Burger', '119.jpg', 'American', 'fresh oregano and chives to boost the flavor and impart a freshness. Breadcrumbs lemon juice and mayo are the secret ingredients to ensure these chicken burgers . Theres a clove of garlic in these burgers', 340, 300, 'Takeout'),
(9, '45', 'Beef Burger', '120.jpg', 'Korean', 'Guaranteed to impress guests, these BBQ beef burgers have been given a Korean kick thanks to a tangy dark soy sauce and ginger marinade.', 340, 290, 'Takeout'),
(10, '46', 'Spaghetti', '515.jpg', 'Greek', 'Packed with black olives tangy feta and fragrant oregano these Greek-inspired lamb burgers will make a welcome addition to any summer barbecue.', 340, 300, 'Takeout'),
(12, '47', 'Biriyani', '530.jpg', 'American', 'Packed with beans Cajun spice and feta cheese this flavour-filled vegetarian burger makes for a delightful dish', 670, 600, 'Takeout');

-- --------------------------------------------------------

--
-- Table structure for table `roko_bookstore`
--

CREATE TABLE `Chillox` (
  `id` int(11) NOT NULL,
  `code_no` varchar(255) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `typ_name` varchar(250) NOT NULL,
  `food_desc` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `offer_price` float NOT NULL,
  `origin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roko_bookstore`
--

INSERT INTO `Chillox` (`id`, `code_no`, `food_name`, `image_name`, `typ_name`, `food_desc`, `price`, `offer_price`, `origin`) VALUES
(17, '50', 'Pizza', '513.jpg', 'Asian', ' these veggie quinoa burgers next-level-good is sautéing the vegetables before adding them to the patty mixture.', 900, 401, 'chillox'),
(18, '51', 'Noodles', '520.jpg', 'Asian', 'Packed with beans, Cajun spice and feta cheese, this flavour-filled vegetarian burger makes for a delightful dish', 69, 50, 'chillox'),
(25, '52', 'Chicken Burger', '127.jpg', 'Asian', 'this spiced veggie burger recipe. Chickpeas, cauliflower and apricots are blitzed into chunky patties and layered up with smoky peppers and creamy houmous', 350, 300, 'chillox'),
(26, '53', 'Beef Burger', '126.jpg', 'Asian', 'Bring on barbecue season with these healthy burgers that have tons of meaty flavour despite using lean minced beef. The trick is to add mushrooms to the burger mix, as they have a deep ', 499, 499, 'chillox');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Mr_Burger`
--
ALTER TABLE `Mr_Burger`
  ADD PRIMARY KEY (`id`,`code_no`);

--
-- Indexes for table `Takeout`
--
ALTER TABLE `Takeout`
  ADD PRIMARY KEY (`id`,`code_no`);

--
-- Indexes for table `Chillox`
--
ALTER TABLE `Chillox`
  ADD PRIMARY KEY (`id`,`code_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Mr_Burger`
--
ALTER TABLE `Mr_Burger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Takeout`
--
ALTER TABLE `Takeout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Chillox`
--
ALTER TABLE `Chillox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
 --
 --
 --
 --
 
-- Table structure for table `review_table`
--

CREATE TABLE `review_table2` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table2`
--
--
 --INSERT INTO `review_table2` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table2`
--
ALTER TABLE `review_table2`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table2`
--
ALTER TABLE `review_table2`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
  
  --
  --
  --
  CREATE TABLE `review_table3` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table3`
--
--
 --INSERT INTO `review_table3` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table3`
--
ALTER TABLE `review_table3`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table3`
--
ALTER TABLE `review_table3`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

