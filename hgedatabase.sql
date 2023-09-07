-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 08:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--
CREATE DATABASE IF NOT EXISTS `customer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `customer`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `SurName` varchar(30) NOT NULL,
  `EmailAddress` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductCode` int(11) NOT NULL,
  `ProductName` varchar(30) DEFAULT NULL,
  `ProductPrice` varchar(30) DEFAULT NULL,
  `Quantity` varchar(30) DEFAULT NULL,
  `ProductTypeID` int(11) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductCode`, `ProductName`, `ProductPrice`, `Quantity`, `ProductTypeID`, `Description`, `Image`) VALUES
(1, 'Logitech G933 Artemis Spectrum', '60', '10', 1, '', 'images/__Amazon_com Logitech G933 Artemis Spectrum – Wireless RGB 7.png'),
(2, 'SteelSeries Arctis 7', '60', '10', 1, 'Lossless Wireless Gaming Heads', 'images/__SteelSeries Arctis 7 - Lossless Wireless Gaming Headset with DTS Headphone X v2_0 Surround - For PC and PlayStation 4 - White.jpg'),
(5, 'Steelseries Arctis Pro', '60', '10', 1, 'Pro Noise reducer Gaming Headp', 'images/__Steelseries Arctis Pro Noise reducer Gaming Headphone with microphone - Black.jpg'),
(6, 'HyperX Cloud Core 7_1 ', '60', '10', 1, 'Surround Gaming Headphones wit', 'images/_HyperX Cloud Core 7_1 Surround Gaming Headphones with Noise Cancelling Microphone PC Gamer Gaming Headset Over Ear Wired Headset.jpg'),
(7, 'HyperX - Cloud Stinger Core Wi', '60', '10', 1, 'HyperX - Cloud Stinger Core Wi', 'images/_HyperX - Cloud Stinger Core Wireless 7_1 Surround Sound Gaming Headset for PC - Black.jpg'),
(8, 'Logitech G402 Hyperion Fury', '60', '10', 1, 'Logitech G402 Hyperion Fury', 'images/__Logitech G402 Hyperion Fury FPS Gaming Mouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `ProductTypeID` int(11) NOT NULL,
  `ProductTypeName` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ProductTypeID`, `ProductTypeName`, `Description`) VALUES
(1, 'Headphone', 'A'),
(2, 'Mouse', 'A'),
(3, 'Keyboard', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductCode`),
  ADD KEY `ProductTypeID` (`ProductTypeID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`ProductTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `ProductTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProductTypeID`) REFERENCES `producttype` (`ProductTypeID`);
--
-- Database: `hge`
--
CREATE DATABASE IF NOT EXISTS `hge` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hge`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `BookingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CustomerUsername` varchar(30) DEFAULT NULL,
  `CustomerEmailAddress` varchar(30) DEFAULT NULL,
  `Message` varchar(30) DEFAULT NULL,
  `Policy` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `BookingDate`, `CustomerUsername`, `CustomerEmailAddress`, `Message`, `Policy`) VALUES
(1, '2022-06-23 17:30:00', 'example1', 'example1@gmail.com', 'example message 1', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `CustomerUsername` varchar(30) DEFAULT NULL,
  `CustomerEmail` varchar(30) DEFAULT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Message` varchar(30) DEFAULT NULL,
  `Policy` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`CustomerUsername`, `CustomerEmail`, `Subject`, `Message`, `Policy`) VALUES
('example1', 'example1@gmail.com', 'subject1', 'message1', 'Yes'),
('example1', 'example1@gmail.com', 'examplesubject1', 'examplemessage1', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerUsername` varchar(30) DEFAULT NULL,
  `CustomerEmail` varchar(30) DEFAULT NULL,
  `CustomerAddress` varchar(50) DEFAULT NULL,
  `CustomerPassword` varchar(30) DEFAULT NULL,
  `CustomerPhone` varchar(30) DEFAULT NULL,
  `ViewCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerUsername`, `CustomerEmail`, `CustomerAddress`, `CustomerPassword`, `CustomerPhone`, `ViewCount`) VALUES
(1, 'example1', 'example1@gmail.com', 'London', '123', '+123123123', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(30) NOT NULL,
  `OrderDate` date DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `OrderTotalAmount` varchar(30) DEFAULT NULL,
  `Tax` varchar(30) DEFAULT NULL,
  `AllTotal` varchar(30) DEFAULT NULL,
  `OrderQuantity` int(11) DEFAULT NULL,
  `Remark` varchar(30) DEFAULT NULL,
  `PaymentType` varchar(30) DEFAULT NULL,
  `OrderLocation` varchar(30) DEFAULT NULL,
  `OrderPhone` varchar(30) DEFAULT NULL,
  `OrderStatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetail`
--

CREATE TABLE `ordersdetail` (
  `OrderID` varchar(30) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ProductPrice` int(11) DEFAULT NULL,
  `BuyQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(30) DEFAULT NULL,
  `ProductPrice` varchar(30) DEFAULT NULL,
  `EquipmentType` varchar(30) NOT NULL,
  `Quantity` varchar(30) DEFAULT NULL,
  `ProductTypeID` int(11) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Image1` text DEFAULT NULL,
  `Image2` text DEFAULT NULL,
  `Image3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `EquipmentType`, `Quantity`, `ProductTypeID`, `Description`, `Image1`, `Image2`, `Image3`) VALUES
(3, 'Samsung Galaxy Watch4', '219.99', 'Second', '20', 1, 'Samsung Galaxy Watch4 44mm Sma', 'entriedproductimages/_Samsung Galaxy Watch4 44mm Smartwatch Ghiera Touch Alluminio Memoria 1.jpg', 'entriedproductimages/_Smartwatch Samsung Galaxy Watch4 BT Prata 44mm - 16GB.jpg', 'entriedproductimages/_Smartwatch Samsung Galaxy Watch4, Bluetooth, 44mm….png'),
(4, 'Apple Watch S5 Cellular 44mm', '478.29', 'Second', '20', 1, 'Apple Watch S5 Cellular 44mm G', 'entriedproductimages/_Smartwatch ProNegro.jpg', 'entriedproductimages/_Apple Watch S5 Cellular 44mm Gold Alu _ Pink Band £459_00 @ Argos.jpg', 'entriedproductimages/_TELUS Apple Watch SE (GPS+Cell) 40mm Space Grey Aluminum Case w_ Midnight Sport Band -Monthly Financing.jpg'),
(5, 'Top Luxury Digital Watch', '125.99', 'Second', '20', 1, ' Top Luxury Digital Watch Elec', 'entriedproductimages/_Top Luxury Digital Watch Electronic Led Black.jpg', 'entriedproductimages/_Top Luxury Digital Watch Electronic Led White.jpg', 'entriedproductimages/_Top Luxury Digital Watch Electronic Led Yellow.jpg'),
(6, 'New Men Women Trainers', '125.99', 'Second', '20', 2, 'Professional Golf Shoes Red', 'entriedproductimages/_New Men Women Professional Golf Shoes Red.jpg', 'entriedproductimages/_New Men Women Professional Golf Shoes Red 3.jpg', 'entriedproductimages/_New Men Women Professional Golf Shoes Red 2.jpg'),
(7, 'Women Mesh Air Breathable ', '125.99', 'Second', '20', 2, 'Women Mesh Air Breathable Lace', 'entriedproductimages/_Women Mesh Air Breathable Lace-Up Sport Sneakers - green.jpg', 'entriedproductimages/_Women Mesh Air Breathable Lace-Up Sport Sneakers - green 3.jpg', 'entriedproductimages/_Women Mesh Air Breathable Lace-Up Sport Sneakers - green 2.jpg'),
(10, 'Trideer Double Gloves', '23.99', 'Second', '20', 3, 'Trideer Double Protection Weig', 'entriedproductimages/_Trideer Double Protection Weight Lifting Gloves Padded Gym Gloves Rowing Gloves Boating Gloves Breathable  Ultralight Workout Gloves For Men  Women Go.jpg', 'entriedproductimages/_Trideer Double Protection Weight Lifting Gloves Padded Gym Gloves Rowing Gloves Boating Gloves Breathable  Ultralight Workout Gloves For Men  Women Go.jpg', 'entriedproductimages/_Trideer Double Protection Weight Lifting Gloves Padded Gym Gloves Rowing Gloves Boating Gloves Breathable  Ultralight Workout Gloves For Men  Women Go.jpg'),
(11, 'Workout Gloves Men and Women S', '18.99', 'Second', '10', 3, 'Workout Gloves Men and Women W', 'entriedproductimages/_Workout Gloves Men and Women Weight Lifting Gloves with Wrist Support for Gym Training, Full Palm Protection - Black&Grey _ Large.png', 'entriedproductimages/_Workout Gloves Men and Women Weight Lifting Gloves with Wrist Support for Gym Training, Full Palm Protection - Black&Grey _ Large.png', 'entriedproductimages/_Workout Gloves Men and Women Weight Lifting Gloves with Wrist Support for Gym Training, Full Palm Protection - Black&Grey _ Large.png'),
(12, 'Kettlebell Weight Sets', '59.99', 'brandnew', '10', 4, 'Yes4All Combo Special_ Vinyl C', 'entriedproductimages/_Yes4All Combo Special_ Vinyl Coated Kettlebell Weight Sets – Black (20-25lbs).jpg', 'entriedproductimages/_Bowflex SelectTech 552 Dumbbells, Adjustable, Pair, Free 1-Year JRNY Membership - Walmart_com.webp', 'entriedproductimages/_40lb Cast Iron Kettlebell.jpg'),
(13, 'Dumbbell Black 15-Pound', '19.99', 'brandnew', '20', 4, 'Cap Barbell Fitness Urethane C', 'entriedproductimages/_Cap Barbell Fitness Urethane Covered Dumbbell Black,15-Pound _ Work Out Wear.jpg', 'entriedproductimages/_12_5KG Single Rubber Hex Dumbbell Hand Weights Home Gym.jpg', 'entriedproductimages/_10KG Commercial Rubber Hex Dumbbell Gym Weight.jpg'),
(14, '6 Pack AB Roller Wheel', '45.99', 'brandnew', '20', 4, 'Abdominal Giant Wheel Fitness ', 'entriedproductimages/_6 Pack AB Roller Wheel for Home Workout - Black _ 30 Day MoneyBack Guarantee.jpg', 'entriedproductimages/_Abdominal Giant Wheel Fitness Equipment For Abdominal - Abdominal Giant Wheel Fitness Equipment For Abdominal.png', 'entriedproductimages/_Double Wheel Abdominal Exercise _ Wheel Gym Ab Roller - Blue with Mat.jpg'),
(15, 'Ultra Wide Ab Roller', '55.99', 'brandnew', '20', 4, 'Ultra Wide Ab Roller Abdominal', 'entriedproductimages/_Ultra Wide Ab Roller Abdominal Muscle Wheel for Fitness Workout.jpg', 'entriedproductimages/_AB Roller.jpg', 'entriedproductimages/_83cac7bd-b720-4349-acb6-9a8918f0267a.jpg'),
(16, 'Abs  Abdominal Wheel Roller Tr', '23.99', 'brandnew', '20', 4, 'Abs  Abdominal Wheel Roller Tr', 'entriedproductimages/_Abs  Abdominal Wheel Roller Trainer - Black.jpg', 'entriedproductimages/_Roller Abdominal Exercise Wheel with Knee Mat Pad Training Fitness Wheels - Blue.jpg', 'entriedproductimages/_Abs  Abdominal Wheel Roller Trainer - Black.jpg'),
(17, '30_40_50 Feet Length Exercise ', '64.99', 'brandnew', '20', 4, 'GEARDO Battle Rope - 1_5 & 2 I', 'entriedproductimages/_GEARDO Battle Rope - 1_5 & 2 Inches Width Poly Dacron 30_40_50 Feet Length Exercise Undulation Ropes - Gym Muscle Toning Metabolic Workout Fitness (Anchor NOT Included).jpg', 'entriedproductimages/_GEARDO Battle Rope - 1_5 & 2 Inches Width Poly Dacron 30_40_50 Feet Length Exercise Undulation Ropes - Gym Muscle Toning Metabolic Workout Fitness (Anchor NOT Included).jpg', 'entriedproductimages/_GEARDO Battle Rope - 1_5 & 2 Inches Width Poly Dacron 30_40_50 Feet Length Exercise Undulation Ropes - Gym Muscle Toning Metabolic Workout Fitness (Anchor NOT Included).jpg'),
(18, 'FILA 2-pack Hand Grips ', '32.99', 'brandnew', '20', 4, 'FILA 2-pack Hand Grips  Origin', 'entriedproductimages/_FILA 2-pack Hand Grips _ Nebraska Furniture Mart.jpg', 'entriedproductimages/_FILA 2-pack Hand Grips _ Nebraska Furniture Mart.jpg', 'entriedproductimages/_FILA 2-pack Hand Grips _ Nebraska Furniture Mart.jpg'),
(19, 'adidas Original Shorts', '23.99', 'brandnew', '20', 5, 'adidas ORIGINALS Superstar Sho', 'entriedproductimages/_Amazon _ (アディダス オリジナルス) adidas ORIGINALS Superstar Short AA1396 HIYOKO160530 (085_XS (身長157～163cm)) [並行輸入品] _ ミディアムパンツ 通販.jpg', 'entriedproductimages/_ADIDAS ORIGINALS Σορτσάκι-μαγιό μαύρο _ λευκό.jpg', 'entriedproductimages/_Bermuda Malha Básica Juvenil Preto.jpg'),
(20, 'adidas Track Pants', '18.99', 'brandnew', '20', 5, 'adidas Black Velour Track Pant', 'entriedproductimages/_Calça Reta Alto Brilho Adicolor Classics - Preto adidas _ adidas Brasil.png', 'entriedproductimages/_adidas Womens Black Velour Track Pants size Medium.jpg', 'entriedproductimages/_7dae3739-cea5-4cab-a65a-66f126f5a210.jpg'),
(21, 'adidas Originals t-shirt', '25.99', 'brandnew', '20', 5, 'adidas Originals adicolor thre', 'entriedproductimages/_7d9d6626-de06-494b-9174-88b56bced94a.jpg', 'entriedproductimages/_05c1da99-c3ee-4ccd-810d-34c6939ced73.jpg', 'entriedproductimages/_adidas Originals adicolor three stripe cropped t-shirt in black _ ASOS.jpg'),
(22, 'Health Smartwatch', '23.99', 'brandnew', '20', 1, 'Fitbit - Sense Advanced', 'entriedproductimages/_Fitbit - Sense Advanced Health Smartwatch - Soft Gold.jpg', 'entriedproductimages/_Fitbit Sense Carbon_Graphite.jpg', 'entriedproductimages/_Fitbit Sense Silver Stainless Steel Sage Grey Strap Advanced Health Smartwatch  40mm.jpg'),
(23, 'Sports Bracelet Blue', '23.99', 'brandnew', '20', 1, 'Heart Rate And Blood Pressure ', 'entriedproductimages/_Heart Rate And Blood Pressure Monitoring Smart Step Count And Photo Sports Bracelet Blue.png', 'entriedproductimages/_Original Xiaomi Mi band 5 1_1 Inch AMOLED Wristband Customized Watch Face 11 Sport Modes Tracker Activity Monitor Smart Watch Global Version - Black.jpg', 'entriedproductimages/_Smart Watches Smart Band Blood Pressure Monitor - Blue _ United States.jpg'),
(24, '2022 Apple Watch Series 7', '799', 'latest', '98', 1, 'Apple Watch Series 7 Order Now', 'entriedproductimages/_Clients Edition _ Smart Watch Social media banner.jpg', 'entriedproductimages/_Apple Watch S5 Cellular 44mm Gold Alu _ Pink Band £459_00 @ Argos.jpg', 'entriedproductimages/_Smartwatch ProNegro.jpg'),
(25, 'Bose Sports Headphone', '499', 'latest', '98', 6, 'Bose Space Out Sports Headphon', 'entriedproductimages/_Bose_ Space Out • Ads of the World™ _ Part of The Clio Network.jpg', 'entriedproductimages/_Space Out.jpg', 'entriedproductimages/_Bose_ Space Out • Ads of the World™ _ Part of The Clio Network.jpg'),
(26, 'XtremepowerUS 29lbs Exercise', '799', 'latest', '98', 4, 'XtremepowerUS 29lbs Exercise B', 'entriedproductimages/_XtremepowerUS 29lbs Exercise Bike Pro w_ Articulating Frame Technology Blue _ See this excellent product_ (This is an affiliate link )_.jpg', 'entriedproductimages/_XtremepowerUS 29lbs Exercise Bike Pro w_ Articulating Frame Technology Blue _ See this excellent product_ (This is an affiliate link )_.jpg', 'entriedproductimages/_XtremepowerUS 29lbs Exercise Bike Pro w_ Articulating Frame Technology Blue _ See this excellent product_ (This is an affiliate link )_.jpg'),
(27, 'Spin Exercise Bike ', '1499', 'latest', '98', 4, 'Spin Exercise Bike Flywheel Fi', 'entriedproductimages/_Spin Exercise Bike Flywheel Fitness Commercial Home Workout Gym Phone Holder Black.jpg', 'entriedproductimages/_Spin Exercise Bike Flywheel Fitness Commercial Home Workout Gym Phone Holder Black.jpg', 'entriedproductimages/_Spin Exercise Bike Flywheel Fitness Commercial Home Workout Gym Phone Holder Black.jpg'),
(28, 'Advwin Home Runner', '1499', 'latest', '98', 4, 'Advwin Home Gym Folding Treadm', 'entriedproductimages/_Advwin Home Gym Folding Treadmill Running Machine.jpg', 'entriedproductimages/_Advwin Home Gym Folding Treadmill Running Machine.jpg', 'entriedproductimages/_Advwin Home Gym Folding Treadmill Running Machine.jpg'),
(29, '2022 Nike Gym Gloves', '23.99', 'latest', '98', 5, 'Nike Gym Glove Order Now', 'entriedproductimages/_Nike_ Cleat, Gloves, Shorts • Ads of the World™ _ Part of The Clio Network.png', 'entriedproductimages/_Nike_ Cleat, Gloves, Shorts • Ads of the World™ _ Part of The Clio Network.png', 'entriedproductimages/_Nike_ Cleat, Gloves, Shorts • Ads of the World™ _ Part of The Clio Network.png'),
(30, 'Muscle Stimulation Pads', '23.99', 'latest', '20', 4, 'Muscle Stimulation Pads - Tone', 'entriedproductimages/_Esercizio contro la pancetta_ Full plank con spinta e torsione - FitInHub.jpg', 'entriedproductimages/_fitness.jpg', 'entriedproductimages/_Muscle Stimulation Pads - Tone Muscles - Lose Weight! Abs, Arms and Legs!.jpg'),
(31, 'New Balance Gym Green', '120.99', 'latest', '20', 2, 'New Balance Gym Green Order No', 'entriedproductimages/_New Balance.png', 'entriedproductimages/_New Balance.png', 'entriedproductimages/_New Balance.png'),
(32, 'New Balance - Fresh Foam', '125.99', 'latest', '20', 2, 'New Balance - Fresh Foam Order', 'entriedproductimages/_New Balance - Fresh Foam.jpg', 'entriedproductimages/_New Balance - Fresh Foam.jpg', 'entriedproductimages/_New Balance - Fresh Foam.jpg'),
(33, 'Air Max 2022 Runner', '489', 'latest', '20', 2, 'Air Max  FOOTWEAR The Sole ', 'entriedproductimages/_Air Max — FOOTWEAR — The Sole Truth.jpg', 'entriedproductimages/_Air Max — FOOTWEAR — The Sole Truth.jpg', 'entriedproductimages/_Air Max — FOOTWEAR — The Sole Truth.jpg'),
(34, 'LTD Edition Kicks Runner', '589', 'latest', '98', 2, 'Dropping LTD Edition Kicks', 'entriedproductimages/_Dropping LTD Edition Kicks.jpg', 'entriedproductimages/_Dropping LTD Edition Kicks.jpg', 'entriedproductimages/_Dropping LTD Edition Kicks.jpg'),
(35, 'Nike Air Max Runners', '689', 'latest', '98', 2, 'Nike Air Max Special Edition', 'entriedproductimages/_Find your foot partner.jpg', 'entriedproductimages/_Find your foot partner.jpg', 'entriedproductimages/_Find your foot partner.jpg'),
(36, 'Nike self-lacing shoes', '485.99', 'brandnew', '4', 2, 'Nike has finally made the self', 'entriedproductimages/_Nike is finally making the self-lacing shoes from Back To The Future.png', 'entriedproductimages/_Nike is finally making the self-lacing shoes from Back To The Future.png', 'entriedproductimages/_Nike is finally making the self-lacing shoes from Back To The Future.png');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `ProductTypeID` int(11) NOT NULL,
  `ProductType` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ProductTypeID`, `ProductType`, `Description`) VALUES
(1, 'Smartwatch', 'Instock'),
(2, 'Trainers', 'Instock'),
(3, 'Gloves', 'Instock'),
(4, 'gymequipment', 'Instock'),
(5, 'Sportswear', 'Instock'),
(6, 'Headphones', 'Instock');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffName` varchar(30) DEFAULT NULL,
  `StaffJob` varchar(30) DEFAULT NULL,
  `StaffPhone` varchar(30) DEFAULT NULL,
  `StaffEmail` varchar(30) DEFAULT NULL,
  `StaffPassword` varchar(30) DEFAULT NULL,
  `StaffProfilePic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductTypeID` (`ProductTypeID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`ProductTypeID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `ProductTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
  ADD CONSTRAINT `ordersdetail_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `ordersdetail_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProductTypeID`) REFERENCES `producttype` (`ProductTypeID`);
--
-- Database: `home gym equipment`
--
CREATE DATABASE IF NOT EXISTS `home gym equipment` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `home gym equipment`;
--
-- Database: `l5dc_project`
--
CREATE DATABASE IF NOT EXISTS `l5dc_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `l5dc_project`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerUsername` varchar(30) DEFAULT NULL,
  `CustomerEmail` varchar(30) DEFAULT NULL,
  `CustomerAddress` varchar(30) DEFAULT NULL,
  `CustomerPassword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerUsername`, `CustomerEmail`, `CustomerAddress`, `CustomerPassword`) VALUES
(1, 'Minn Mon', 'zerox2op@gmail.com', 'Yangon', 'Minmonisop12'),
(2, 'John ', 'john12@gmail.com', 'Yangon', '12123'),
(3, 'Rose', 'rosey33@gmail.com', 'Magway', 'rose12'),
(4, 'Ei Pyae', 'eipyae.eppm2002@gmail.com', 'Lanmadaw', '1232eipyae'),
(5, 'Mary', 'Mary@gmail.com', 'Pyin Oo Lwin', 'Mary12');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(30) NOT NULL,
  `OrderDate` varchar(30) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `OrderTotalAmount` varchar(30) DEFAULT NULL,
  `Tax` varchar(30) DEFAULT NULL,
  `AllTotal` varchar(30) DEFAULT NULL,
  `OrderQuantity` int(11) DEFAULT NULL,
  `Remark` varchar(30) DEFAULT NULL,
  `PaymentType` varchar(30) DEFAULT NULL,
  `OrderLocation` varchar(30) DEFAULT NULL,
  `OrderPhone` varchar(30) DEFAULT NULL,
  `OrderStatus` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetail`
--

CREATE TABLE `ordersdetail` (
  `OrderID` varchar(30) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ProductPrice` int(11) DEFAULT NULL,
  `BuyQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(30) DEFAULT NULL,
  `ProductPrice` varchar(30) DEFAULT NULL,
  `Quantity` varchar(30) DEFAULT NULL,
  `ProductTypeID` int(11) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `Quantity`, `ProductTypeID`, `Description`, `Image`) VALUES
(22, 'Steelseries Arctis Pro', '60', '3', 1, '_Steelseries Arctis Pro Noise ', 'images/__Steelseries Arctis Pro Noise reducer Gaming Headphone with microphone - Black.jpg'),
(23, 'SteelSeries Arctis 7', '60', '-1', 1, '_SteelSeries Arctis 7 - Lossle', 'images/__SteelSeries Arctis 7 - Lossless Wireless Gaming Headset with DTS Headphone X v2_0 Surround - For PC and PlayStation 4 - White.jpg'),
(24, 'HyperX - Cloud Stinger Core Wi', '60', '10', 1, 'HyperX - Cloud Stinger Core Wi', 'images/_HyperX - Cloud Stinger Core Wireless 7_1 Surround Sound Gaming Headset for PC - Black.jpg'),
(25, 'HyperX Cloud Core 7_1 ', '60', '8', 1, 'HyperX - Cloud Stinger', 'images/_HyperX Cloud Core 7_1 Surround Gaming Headphones with Noise Cancelling Microphone PC Gamer Gaming Headset Over Ear Wired Headset.jpg'),
(26, 'Razer Kraken Kitty ', '60', '-7', 1, 'Razer Kraken Kitty RZ04-029802', 'images/_Razer Kraken Kitty RZ04-02980200 Noise cancelling Gaming Headphone with microphone - Pink.jpg'),
(27, 'Razer - Nari Ultimate', '60', '10', 1, 'Razer - Nari Ultimate Wireless', 'images/_Razer - Nari Ultimate Wireless THX Spatial Audio Gaming Headset (Certified Refurbished).jpg'),
(28, 'ASUS P704 ROG CHAKRAM ', '60', '10', 2, 'ASUS P704 ROG CHAKRAM Black Wi', 'images/_ASUS P704 ROG CHAKRAM Black Wired _ 2_4GHz _ Bluetooth Optical Gaming Mouse.jpg'),
(29, 'Logitech G402 Hyperion Fury', '60', '10', 2, '_Logitech G402 Hyperion Fury F', 'images/__Logitech G402 Hyperion Fury FPS Gaming Mouse.jpg'),
(30, 'Corsair Black M65 ', '60', '10', 2, 'Corsair Black M65 RGB ELITE Tu', 'images/_Corsair Black M65 RGB ELITE Tunable FPS Gaming Mouse - CH-9309011-NA.jpg'),
(31, 'SteelSeries Sensei 310 ', '60', '5', 2, '_Ratón Gaming SteelSeries Sens', 'images/__Ratón Gaming SteelSeries Sensei 310 12000 DPI Negro.jpg'),
(32, 'ROG Strix Impact II', '60', '10', 2, 'ASUS Optical Gaming Mouse - RO', 'images/_ASUS Optical Gaming Mouse - ROG Strix Impact II _ Wireless Gaming Mouse with 16,000 DPI _ 5 Programmable Buttons, RGB Lighting, 2_4 GHz, Long Battery Life, Lightweight, Ergonomic.jpg'),
(48, 'SteelSeries Rival 650', '60', '10', 2, 'SteelSeries Rival 650 Wireless', 'images/_SteelSeries Rival 650 Wireless Optical Gaming Mouse w_ RGB Lighting.jpg'),
(49, 'ASUS GeForce RTX 3060 Ti', '1499', '10', 4, 'ASUS GeForce RTX 3060 Ti 8GB K', 'images/_ASUS GeForce RTX 3060 Ti 8GB KO OC (KDM, Black Box).jpg'),
(50, 'ASUS ROG -STRIX-RTX3090', '1499', '10', 4, 'ASUS ROG -STRIX-RTX3090-O24G-G', 'images/_ASUS ROG -STRIX-RTX3090-O24G-GAMING NVIDIA GeForce RTX 3090 2 ___.jpg'),
(51, 'GIGABYTE AORUS GeForce RTX 307', '1499', '10', 4, 'GIGABYTE AORUS GeForce RTX 307', 'images/_GIGABYTE AORUS GeForce RTX 3070 Master 8G (REV2_0) Graphics Card, 3X WINDFORCE Fans, 8GB 256-bit.jpg'),
(52, 'GIGABYTE GeForce RTX 3080 Ti', '1499', '10', 4, 'GIGABYTE GeForce RTX 3080 Ti G', 'images/_GIGABYTE GeForce RTX 3080 Ti Gaming OC 12GB Grafikkarten.jpg'),
(53, 'MSI GeForce RTX 3070 ', '1499', '9', 4, 'MSI GeForce RTX 3070 Master 8G', 'images/_Nvidia Graphics Cards Compared_ Which One Is Right for You_.jpg'),
(54, 'iGAME RTX 3080 ', '1499', '10', 4, '컬러풀 iGAME 지포스 RTX 3080 그래픽카드 V', 'images/_컬러풀 iGAME 지포스 RTX 3080 그래픽카드 Vulcan X OC D6X 10GB.jpg'),
(55, 'Corsair K57 RGB Wireless Gamin', '80', '10', 3, 'Corsair K57 RGB Wireless Gamin', 'images/_Corsair K57 RGB Wireless Gaming Keyboard.jpg'),
(57, 'Razer Huntsman Tournament Edit', '80', '10', 3, 'Razer Huntsman Tournament Edit', 'images/_Razer Huntsman Tournament Edition TKL Mechanical Keyboard - Keybumps.png'),
(58, 'Razer Huntsman Tournament Edit', '80', '10', 3, 'Razer Huntsman Tournament Edit', 'images/_Razer Huntsman Mini Gaming Keyboard - QWERTY.jpg'),
(59, 'Razer Huntsman Mini Gaming Key', '80', '10', 3, 'Razer Huntsman Mini Gaming Key', 'images/_Razer Huntsman Mini Gaming Keyboard - QWERTY.jpg'),
(60, 'Razer Huntsman Tournament Edit', '80', '10', 3, 'Razer Huntsman Tournament Edit', 'images/_Razer Huntsman Tournament Edition TKL Mechanical Keyboard - Keybumps.png'),
(61, 'Razer Huntsman Tournament Edit', '80', '10', 3, 'Razer Huntsman Tournament Edit', 'images/_Razer Huntsman Tournament Edition TKL Mechanical Keyboard - Keybumps.png');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `ProductTypeID` int(11) NOT NULL,
  `ProductTypeName` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ProductTypeID`, `ProductTypeName`, `Description`) VALUES
(1, 'Headphone', 'A'),
(2, 'Mouse', 'A'),
(3, 'Keyboard', 'A'),
(4, 'GraphicsCard', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffName` varchar(30) DEFAULT NULL,
  `StaffJob` varchar(30) DEFAULT NULL,
  `StaffPhone` varchar(30) DEFAULT NULL,
  `StaffEmail` varchar(30) DEFAULT NULL,
  `StaffPassword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffJob`, `StaffPhone`, `StaffEmail`, `StaffPassword`) VALUES
(7, 'Minn Mon', 'Website Admin', '09770055943', 'minmon1@gmail.com', '12123'),
(10, 'John', 'Sales Staff', '09789796165', 'john1@gmail.com', '12john'),
(11, 'Maria', 'Digital Marketing Staff', '09778853491', 'maria22@gmail.com', '123maria'),
(12, 'Ei Pyae', 'Sales Staff', '09752355943', 'eipyae12@gmail.com', '12123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductTypeID` (`ProductTypeID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`ProductTypeID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `ProductTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
  ADD CONSTRAINT `ordersdetail_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `ordersdetail_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProductTypeID`) REFERENCES `producttype` (`ProductTypeID`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"hge\",\"table\":\"contactus\"},{\"db\":\"hge\",\"table\":\"booking\"},{\"db\":\"hge\",\"table\":\"customer\"},{\"db\":\"hge\",\"table\":\"product\"},{\"db\":\"hge\",\"table\":\"Product\"},{\"db\":\"hge\",\"table\":\"ordersdetail\"},{\"db\":\"hge\",\"table\":\"orders\"},{\"db\":\"l5dc_project\",\"table\":\"ordersdetail\"},{\"db\":\"l5dc_project\",\"table\":\"orders\"},{\"db\":\"hge\",\"table\":\"producttype\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'l5dc_project', 'product', '{\"sorted_col\":\"`product`.`Image`  DESC\"}', '2022-05-09 23:59:08'),
('root', 'l5dc_project', 'producttype', '[]', '2022-05-24 06:51:49'),
('root', 'l5dc_project', 'staff', '{\"sorted_col\":\"`staff`.`StaffJob`  DESC\"}', '2022-04-18 18:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-07-15 06:09:39', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
