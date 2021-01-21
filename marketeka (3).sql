-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 05:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `shop` int(11) NOT NULL,
  `serialNo` varchar(30) NOT NULL,
  `name` varchar(70) NOT NULL,
  `qty` int(11) NOT NULL,
  `supplierPrice` decimal(7,2) NOT NULL,
  `retailPrice` decimal(7,2) NOT NULL,
  `sellingPrice` decimal(7,2) NOT NULL,
  `description` text NOT NULL,
  `supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `shop`, `serialNo`, `name`, `qty`, `supplierPrice`, `retailPrice`, `sellingPrice`, `description`, `supplier`) VALUES
(7, 1, '7801', 'Steel Waterproof Sport Watch', 45, '790.00', '850.00', '1000.00', '\r\nBe simple yet unique with the minimalistic CRRJU luxury quartz watches!\r\n\r\n?Minimalistic: This wristwatch is worthy of being the best luxury quartz watch in the market with its sophisticated design. The dial is 40mm wide, but its thickness is just 7mm. It gives the watch a sleek look and makes it more elegant.\r\n\r\n?Waterproof: The watch comes with a 3-bar water resistance quality. This lets you wash your hand without worry and even swim while wearing it.\r\n\r\n?Quartz movement: The CRRJU luxury watch works on a quartz movement that provides it better accuracy than most other luxury quartz mechanical movement watches. It is also convenient as you do not have to change the battery very often.\r\n\r\n?Hardlex mirror material: This luxury quartz dress watch uses an upgraded scratch resistant Hardlex glass. It is far superior in durability than the standard polycarbonate watch crystals.\r\n\r\nFlaunt your style no matter where you are and what you wear with the CRRJU Luxury Quartz Watch for men. Its 7mm thin dial will provide you with the sophistication you had been looking for. Wear it with a suit or casual attire, and it will merge with your overall aesthetics and uplift your fashion statement by a few notches!\r\n\r\nMake it a statement piece in your pool parties as well. This luxury stainless steel quartz watch has 3-bar water resistance so that you can happily walk under the rain. You can wear this watch regularly or for a special business meeting or even as a décor!\r\n\r\nNow play your favorite sports without worrying, as its Hardlex glass will not let your wristwatch get ugly scratches. These luxury quartz watches for sale come with a 12-month guarantee for their quartz movement. So, hurry up and get these men’s fashion watches that suit your fashion perfectly.', 0),
(29, 3, '1352', 'Yeezy 500 Bone White', 2000, '2000.00', '2500.00', '3000.00', 'Condition-New with box- A brand-new, unused, and unworn item (including handmade items) in the original packaging.\nModel-adidas Yeezy 500\nCountry/Region of Manufacture-China	Department- Men\n', 4),
(28, 3, '5415', 'New Anthropologie Constance Velvet Midi Dress Blue', 3120, '1200.00', '1500.00', '2000.00', 'Condition:	\nNew with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging (such as ... Read more\nSize:	S\nVintage:	No	Dress Length:	Midi\nNeckline:	Mock Neck	Department:	Women\nClosure:	Pullover	Style:	Midi\nSleeve Length:	Long Sleeve	Fabric Type:	Velvet\nOccasion:	Casual, Party/Cocktail	Material:	Polyester, spandex\nBrand:	\nAnthropologie\nPattern:	Floral\nSize Type:	Regular	Color:	\nNavy Blue\nUPC:	\nDoes not apply', 2),
(32, 4, '1965', 'Elegant Wide Edge Women Headdress Velvet Hair Hoop Headwrap Accessorie', 2400, '80.00', '100.00', '120.00', 'Condition-	\nNew with tags- A brand-new, unused, and unworn item (including handmade items) in the original packaging (such as ... Read more\nMaterial-	Cloth\nDepartment-	Women	\nType-	Headband\nMPN-Does not apply\nBrand-Unbranded\nOccasion-	Activewear, Business, Casual, Christening, Formal, Party/Cocktail, Travel, Wedding, Workwear\n', 11),
(30, 5, '1830', 'SONY PS4 PRO Konsole 1TB + NEUER Controller - Spielkonsole - Playstati', 2000, '25000.00', '27000.00', '30000.00', 'Sneaker	Type-Athletic.\nUS Shoe Size (Mens)-	9 9.5 10 10.5 11 11.5 12 13 14	Color-White\nProduct Line-Boost\nBrand-Yeezy\nEuro Size-EUR 41/42/43/44/45/46\nCharacter-	Boost', 3),
(31, 7, '1300', 'Car Interior GPS Phone Holder Mount Stand Steering Wheel Clip Accessor', 3000, '800.00', '1000.00', '1200.00', 'Condition-	New	Superseded Part Number-	Does Not Apply\nColor-Red\nCountry/Region of Manufacture-China\nManufacturer Part Number-Does Not Apply\nSurface Finish-	As pictures\nBrand-Unbranded\nOther Part Number-Does not apply\nType-	Array	\nInterchange Part Number-Does not apply\nMaterial-	ABS + Silicone	\nWarranty-	No Warranty\nQuantity-	1Pc	Fitment \nType-	Direct Replacement\nUPC-Does Not Apply', 8),
(34, 7, '5426', 'Universal Bracket Clamp Accessory Fixed Clip Fittings Screw Light Came', 2000, '800.00', '900.00', '1000.00', 'Condition-New A brand-new, unused, unopened, undamaged item in its original packaging \nMPN-Does not apply\nBrand-Unbranded\nType-Bracket Clamp', 2),
(33, 9, '1360', 'Black + Decker 18V Lithium-ion Drill Driver with Accessories\n', 3000, '4500.00', '4800.00', '5300.00', 'ITEM IS IN USED BUT GOOD CONDITION COMPLETE WITH ITS ACCESSORIES. PLEASE SEE PICTURES\nBlack + Decker 18V Lithium-ion Drill Driver with Accessories\nThe 18V cordless drill driver is an essential tool in every DIY-ers toolbox for all drilling and screwdriving tasks around the home and garden. Ideal for building flat pack furniture, hanging pictures, shelves or curtain rails and many more drilling tasks into wood, metal or plastics. Lightweight and compact, yet powerful, it delivers variable speed of 0-600 rpm giving you control over the tool performance depending on requirements.\n\nIdeal for any DIY drilling and screwdriving jobs around the home, in timber, metals and plastics.\n\nDrill-\n\n18V battery power.\nVariable speed.\nReverse function.\n1 gear.\n10 torque settings.\nDrilling capacity for wood 25mm and steel 10mm.\nSoft grip,.\nFully charged in up to 3.75 hours.\nWeight 1600kg.\nScrewdriver-\n\nVariable speed.\nReverse function.\n10 torque settings', 3),
(10, 9, '425936', 'placeat', 2, '4.08', '69882.53', '4654.44', 'Molestiae n', 0),
(35, 9, '4586', 'Personalised Print Valentines Day Gift Gifts For Him Her Girlfriend Hu', 1000, '400.00', '500.00', '600.00', 'Condition-New A brand-new, unused, unopened, undamaged item in its original packaging (where packaging is ... Read more\nPersonalised-	Yes\nCategory-Home decor , Wall art ,	\nModified Item-	Yes\nMPN-Does not apply\nColour-Red\nOther Occasions-	Anniversary, Wedding	\nCountry/Region of Manufacture-	United Kingdom\nOccasion-	Valentines Day	\nTheme-	Hearts\nBrand-Violet Grace\nType-	Family Print\nRecipient-	Boyfriend	\nSuitable for-Women , Her , Wife , Girlfriend ,', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `trollyId` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(9,2) NOT NULL,
  `address` text NOT NULL,
  `contactNo` int(11) NOT NULL,
  `paymentStatus` enum('COMPLEATED','CANCELED','','') NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `trollyId`, `user`, `timeStamp`, `total`, `address`, `contactNo`, `paymentStatus`, `type`) VALUES
(1, 1, 3, '2021-01-13 13:23:10', '1500.00', '', 0, 'COMPLEATED', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `trollyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `qty` decimal(9,2) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('WISHLIST','COMPLEATED','PENDING','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `trollyId`, `userId`, `item`, `qty`, `price`, `timeStamp`, `status`) VALUES
(15, 1, 3, 2, '1.00', '1500.00', '2021-01-15 20:54:31', 'PENDING'),
(10, 1, 3, 3, '1.00', '1500.00', '2021-01-13 12:38:39', 'PENDING'),
(12, 1, 3, 28, '1.00', '1500.00', '2021-01-13 12:40:17', 'PENDING'),
(16, 1, 3, 31, '1.00', '1500.00', '2021-01-16 08:41:03', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `lang` decimal(11,9) NOT NULL,
  `lat` decimal(11,9) NOT NULL,
  `address` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `user`, `name`, `lang`, `lat`, `address`, `type`, `status`) VALUES
(1, 3, 'C Labs', '7.320004000', '80.318671000', 'Kegalle, Sri Lanka', 0, 1),
(2, 18, 'Kandy Tex', '7.112414500', '80.571634600', 'No.03, Gangawatakorale, Kandy', 0, 1),
(3, 19, 'Kalpa Hardware', '7.551213000', '80.288593100', 'Rathmalgoda, Dambulla', 0, 1),
(4, 20, 'SK Motors', '7.635411400', '80.208484000', 'Magallegama, Nikaweratiya', 0, 1),
(5, 21, 'C Labs', '8.108067300', '81.033023100', 'No.75, Main Street, Meerigama', 0, 1),
(7, 22, 'KD Stores', '7.271147300', '80.251731200', 'Henamulla, Kurunegala', 0, 1),
(8, 24, 'Sunil Fashion', '7.487168400', '80.592753300', 'Thotagamuwa, Matale', 0, 1),
(9, 25, 'Sarasavi Book Shop', '7.289948200', '80.632306200', '2nd Floor, KCC, Kandy', 0, 1),
(10, 26, 'Hotel Galdari', '7.900244500', '81.029275700', 'Polgasdamana South, Polonnaruwa', 0, 1),
(11, 27, 'Nanotec Solutions', '7.309488800', '81.634659000', 'No.10, Sampura, Ampara', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `trollyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `status`, `trollyId`) VALUES
(3, 'rushanthasindu10@gmail.com', 'Rusjan Jayasundara', 'rushan', 0, 1),
(18, 'channa@gmail.com', 'Channa Jayawickrama', 'Channa', 0, 2),
(19, 'Sewwandi@gmail.com', 'Sewwandi Samarasinghe', 'Sewwandi', 0, 3),
(20, 'Pankaja@gmail.com', 'Pankaja Wijesena', 'Pankaja', 0, 4),
(21, 'praveen@gmail.com', 'Praveen Palihena', 'Praveen', 0, 5),
(22, 'Nipun@gmail.com', 'Nipun Dabare', 'Dabare', 0, 10),
(23, 'oshada@gmail.com', 'Oshada Karunarathne', 'Oshada', 0, 15),
(24, 'sara@gmail.com', 'Sara Pinto', 'Sara', 0, 14),
(25, 'Binari@gmail.com', 'Binari Chandrasiri', 'Bina', 0, 8),
(26, 'Asuni@gmail.com', 'Asuni Jayawickrama', 'Asuni', 0, 9),
(27, 'Navoda@gmail.com', 'Navoda Kakuladara', 'Navo', 0, 7),
(28, 'sahan@gmail.com', 'Sahan Rathnayake', 'Sahan', 0, 18),
(29, 'vimukthi@gmail.com', 'Vimukthi Wijesinghe', 'Vimukthi', 0, 21),
(30, 'mithila@gmail.com', 'Mithila Dissanayake', 'Mithila', 0, 30),
(31, 'nadeesha@gmail.com', 'Nadeesha Dhanapala', 'Nadeesha', 0, 54),
(32, 'ashwini@gmail.com', 'Ashwini Ranathunge', 'Ashwini', 0, 35),
(33, 'radhika@gmail.com', 'Radhika Weerarathne', 'Radhika', 0, 44),
(34, 'nayomi@gmail.com', 'Nayomi Somarathne', 'Nayomi', 0, 45),
(35, 'dhana@gmail.com', 'Dhananjaya Harischandra', 'Dhana', 0, 28),
(36, 'kasun@gmail.com', 'Kasun Lenadora', 'Kasun', 0, 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`shop`,`serialNo`,`supplierPrice`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`trollyId`,`type`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`trollyId`,`userId`,`item`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `trollyId` (`trollyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
