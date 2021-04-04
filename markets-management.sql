-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 04, 2021 at 08:35 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `markets-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_shift` int(11) NOT NULL,
  `employee_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `employee_name`, `employee_shift`, `employee_position`) VALUES
(2, 'Mark Fowler', 1, 2),
(3, 'Lori Claude', 1, 9),
(4, 'Richard Lloyd', 1, 10),
(5, 'Paige Richter', 1, 2),
(6, 'Abby Hodge', 1, 3),
(7, 'Linda Johnson', 2, 11),
(8, 'Margaret Martin', 1, 3),
(9, 'Robert E. Hackett', 3, 6),
(10, 'Sharon Love', 2, 11),
(11, 'Charles Gorby', 1, 5),
(12, 'John Wilson', 1, 4),
(13, 'Scott Moriarty', 2, 9),
(14, 'Lillian Holman', 2, 10),
(15, 'Anthony Butler', 2, 5),
(16, 'Joseph Sawyer', 1, 7),
(17, 'Stanley Smith', 2, 7),
(18, 'Sherry Gonzales', 1, 8),
(19, 'Anthony Green', 2, 11),
(20, 'Richard Fowler', 3, 3),
(21, 'Dana Underwood', 3, 7),
(22, 'Kelly Sharpe', 2, 9),
(23, 'Antonia Shirley', 3, 2),
(24, 'Hazel Hazen', 2, 6),
(25, 'Kristen Miele', 2, 10),
(26, 'Jules White', 3, 7),
(27, 'Joel  Brown', 2, 3),
(28, 'Sally Jones', 2, 8),
(29, 'Maureen Mills', 3, 11),
(30, 'Andrew Perez', 1, 9),
(31, 'Guillermo Miller', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_location` int(11) NOT NULL,
  `product_vendor` int(11) NOT NULL,
  `product_quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `SKU`, `product_name`, `product_location`, `product_vendor`, `product_quant`) VALUES
(108, 'HF-Banana', 'Bananas', 2, 3, 86),
(109, 'HF-Strawberry', 'Strawberries', 2, 3, 54),
(110, 'HF-LG-Avacado', 'Avocado - Large', 2, 3, 30),
(111, 'HF-Gre-Grapes', 'Grapes - Green', 2, 3, 87),
(112, 'HF-Red-Grapes', 'Grapes - Red', 2, 3, 21),
(113, 'HF-Blueberries', 'Blueberries', 2, 3, 13),
(114, 'Honey-Wheat-Bread', 'Honey Wheat Bread', 3, 2, 66),
(115, 'Whole-Wheat-Bread', 'Whole Wheat Bread', 3, 2, 45),
(116, 'Clas-Hot-Dog-Bun', 'Classic Hot Dog Buns', 3, 2, 76),
(117, 'Clas-Ham-Bun', 'Classic Hamburger Bun', 3, 2, 65),
(118, 'Can-Corn', 'Canned Kernel Corn', 3, 4, 90),
(119, 'Can-Gre-Beans', 'Canned Green Beans', 3, 4, 88),
(120, 'Can-Bl-Bean', 'Canned Black Beans', 3, 4, 40),
(121, 'Can-Pin-Bean', 'Canned Pinto Beans', 3, 4, 60),
(122, 'Thin-Spaghetti-2', 'Thin Spaghetti (p.2)', 3, 2, 52),
(123, 'Spaghetti-8', 'Spaghetti (p.8)', 3, 2, 72),
(124, 'Trad-Pas-Suce', 'Traditional Pasta Sauce', 3, 2, 89),
(125, 'Org-Pas-Sauce', 'Organic Pasta Sauce', 3, 6, 33),
(126, 'Bro-Ched-Soup-16oz', 'Broccoli Cheddar Soup (16 oz)', 4, 2, 30),
(127, 'Bro-Ched-Soup-24oz', 'Broccoli Cheddar Soup (24 oz)', 4, 2, 45),
(128, 'Tomato-Soup-16oz', 'Tomato Soup (16oz)', 4, 2, 87),
(129, 'Tomato-Soup-24oz', 'Tomato Soup (16oz)', 4, 2, 20),
(130, '5lb-Jum-Shrimp', 'Jumbo Shrimp (5lb)', 5, 4, 89),
(131, 'Clas-Slice-Salmon', 'Classic Sliced Salmon', 5, 4, 65),
(132, 'Milk-2%-gal', '2% Reduced Fat Milk (1 gal)', 6, 5, 25),
(133, 'Milk-1%-gal', '1% Low Fat Milk (1 gal)', 6, 5, 55),
(134, 'Eggs-12', 'Eggs (12 ct)', 6, 4, 88),
(135, 'Eggs-18', 'Eggs (18 ct)', 6, 4, 35),
(136, 'Froz-Mix-Veg', 'Frozen Mixed Vegetables', 7, 7, 77),
(137, 'Ice-5lb', 'Ice - 5lb bag', 7, 4, 95),
(138, 'Cott-Swab-500', 'Cotton Swabs(500 ct)', 8, 2, 125),
(139, 'First-Aid-Kit', 'First Aid Kit ', 8, 2, 93),
(140, 'muli-vita-kids', 'Kids Multivitamin', 8, 2, 42);

-- --------------------------------------------------------

--
-- Table structure for table `store_locations`
--

CREATE TABLE `store_locations` (
  `ID` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_locations`
--

INSERT INTO `store_locations` (`ID`, `location_name`) VALUES
(2, 'Produce'),
(3, 'Grocery/Pantry'),
(4, 'Deli & Prepared'),
(5, 'Meat & Seafood'),
(6, 'Dairy'),
(7, 'Frozen Foods'),
(8, 'Health, Beauty, & Wellness'),
(9, 'Cashier'),
(10, 'Bagging'),
(11, 'Delivery Shopper');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`) VALUES
(1, 'patrick', 'password'),
(2, 'test', 'password'),
(4, 'FreshFoodAdmin', 'FreshFoodAdmin2021');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `ID` int(11) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `vendor_address` varchar(50) NOT NULL,
  `vendor_representative` varchar(50) NOT NULL,
  `vendor_representative_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`ID`, `vendor_name`, `vendor_address`, `vendor_representative`, `vendor_representative_phone`) VALUES
(2, 'Bysco', '2055 Cambridge Drive, Buckeye, AZ 85326', 'Steven F. Otey', '713-533-2762'),
(3, 'Happy Farms LLC.', '3618 Rodney Street, Saint Louis, MO 63146', 'Shannon C. Thompson', '636-534-4176'),
(4, 'UFFI', '1741 Gladwell Street, Munford, TN 38058', 'Silvia J. Gidley', '901-840-5919'),
(5, 'Yobert Foods Inc.', '3230 South Street, Midland, TX 79701', 'Rose D. Burgin', '432-889-8773'),
(6, 'United Organic Foods', '3063 Better Street, Overland Park, KS 66210', 'Patricia C. Chance', '913-315-2552'),
(7, 'Richelieu Foods', '1769 Ingram Road, Greensboro, NC 27403', 'Kenny M. Dalton', '336-632-8071');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `employee_position_idx` (`employee_position`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_location_idx` (`product_location`),
  ADD KEY `product_vendor_idx` (`product_vendor`);

--
-- Indexes for table `store_locations`
--
ALTER TABLE `store_locations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `store_locations`
--
ALTER TABLE `store_locations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employee_position` FOREIGN KEY (`employee_position`) REFERENCES `store_locations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_location` FOREIGN KEY (`product_location`) REFERENCES `store_locations` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_vendor` FOREIGN KEY (`product_vendor`) REFERENCES `vendors` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
