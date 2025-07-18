-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 08:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mno` int(10) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `how_many` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `username`, `package`, `price`, `total_amount`) VALUES
(1, 'Janvi_2104', 'kedarnath', 2000, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(5) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category`, `image`) VALUES
(1, 'Religious Destination', 'Religous Destination.jpg'),
(2, 'Peaceful Beach', 'peaceful Beach.jpg'),
(3, 'Western Historic site ', 'western historic site.jpg'),
(4, 'Waterfalls & Rainy spot', 'waterfall and rainy spot.jpg'),
(5, '4 Fun', '4 fun.jpg'),
(6, 'Nature & Hill station ', 'nature and hillstation.jpg'),
(7, 'North various Culture ', 'north culture.jpg'),
(8, 'City & Capital', 'city.jpg'),
(9, 'South Culture & History ', 'south cultures.jpg'),
(10, 'East Local Tradition', 'esat culture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Janvi_2104', 'Get Go Trip'),
(2, 'Vishruti_3004', 'Get Go Trip'),
(3, 'Radhika_2104', 'Get Go Trip');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(5) NOT NULL,
  `package` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pprice` int(50) NOT NULL,
  `days` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `package`, `image`, `pprice`, `days`, `category`, `category_id`) VALUES
(1, 'Somnath', 'Somanath_Temple.jpg', 7000, 2, ' Religious Destination', 1),
(2, 'Dwarka ', 'Dwarka.jpg', 10000, 4, ' Religious Destination', 1),
(3, 'Salangpur-Kashtabhanjan Dev', 'sarangpur.jpg', 3000, 2, 'Religious Destination', 1),
(4, 'Shirdi ', 'Shirdi.jpg', 15000, 5, ' Religious Destination', 1),
(5, 'Shidhivinayak Temple', 'shidhivinayak.jpg', 10000, 3, ' Religious Destination', 1),
(6, 'Shrinathji Temple', 'Shrinathji.jpg', 7000, 3, ' Religious Destination', 1),
(7, 'Jagannath Temple', 'Jagannath-Puri.jpg', 20000, 5, ' Religious Destination', 1),
(8, 'Badrinath Temple', 'badrinath.jpg', 25000, 5, ' Religious Destination', 1),
(9, 'Amarnath', 'Amarnath-Temple.jpg', 30000, 7, ' Religious Destination', 1),
(10, 'Kedarnath', 'kedarnath.jpg', 35000, 5, ' Religious Destination', 1),
(11, 'Haridwar', 'haridwar.jpg', 30000, 5, ' Religious Destination', 1),
(12, 'Rishikesh', 'Rishikesh.jpg', 40000, 5, ' Religious Destination', 1),
(13, 'Mathura ', 'mathura-vrindavan.jpg', 30000, 7, ' Religious Destination', 1),
(14, 'Ayodhya ', 'ayodhaya.jpg', 30000, 8, ' Religious Destination', 1),
(15, 'Trimbakeshwar Temple ', 'trimbakeshwar-mandir.jpg', 20000, 3, ' Religious Destination', 1),
(16, 'Sivrajpur Beach', 'shivrajpur Beach.jpg', 10000, 2, ' Peaceful Beach', 2),
(17, 'Madhavpur Beach', 'Madhapur Beach.jpg', 8000, 3, ' Peaceful Beach', 2),
(18, 'Somnath Beach ', 'Somnath Beach.jpg', 8000, 2, ' Peaceful Beach', 2),
(19, 'Magical Goa', 'Goa Beach.jpg', 20000, 5, ' Peaceful Beach', 2),
(20, 'Juhu Chaupati', 'Juhu Chaupati.jpg', 18000, 2, ' Peaceful Beach', 2),
(21, 'Kerala', 'Kovalam Beach.jpg', 20000, 4, 'Peaceful Beach', 2),
(22, 'Mahablipuram', 'Mahabalipuram Beach.jpg', 18000, 3, ' Peaceful Beach', 2),
(23, 'Rameshwaram ', 'Rameshwaram Beach.jpg', 20000, 4, ' Peaceful Beach', 2),
(24, 'Kanya Kumari', 'Kanyakumari Beach.jpg', 30000, 5, ' Peaceful Beach', 2),
(25, 'Oddisha', 'Odisha Beach.jpg', 18000, 4, ' Peaceful Beach', 2),
(26, 'Golden Beach', 'Golden Beach.jpg', 20000, 5, ' Peaceful Beach', 2),
(27, 'Silver Beach', 'Silver Beach.jpg', 16000, 4, ' Peaceful Beach', 2),
(28, 'Dia And Daman', 'Diu & Daman Beach.jpg', 10000, 3, ' Peaceful Beach', 2),
(29, 'Kudle Beach', 'kudle.jpg', 18000, 4, ' Peaceful Beach', 2),
(31, 'Hawa Mahel', 'Hawa-mahal.jpg', 6000, 2, ' Western Historic site', 3),
(32, 'Amer Fort', 'Amber.jpg', 7000, 2, ' Western Historic site', 3),
(33, 'City Palace', 'city-palace-udaipu.jpg', 10000, 3, ' Western Historic site', 3),
(34, 'Mehragadh', 'mahergadh.jpg', 12000, 4, ' Western Historic site', 3),
(35, 'Upperkot', 'Uparkot_4.jpg', 6000, 2, ' Western Historic site', 3),
(36, 'Dholavira', 'dholaveera.jpg', 8000, 2, ' Western Historic site', 3),
(37, 'Lakshmi Villas Palace', 'laxmi-vilas-palace.jpg', 12000, 2, ' Western Historic site', 3),
(38, 'Rani Ki Vav', 'rani ki vav.jpg', 9000, 2, ' Western Historic site', 3),
(39, 'Gandhiji Birth Place-Porbandar', 'kirti mandir.jpg', 10000, 3, 'Western Historic site', 3),
(40, 'Chittorgarh', 'choittorgadh.jpg', 9000, 2, ' Western Historic site', 3),
(41, 'Ajanta Ellora & Elephanta Caves', 'ajanta-ellora-caves.jpg', 20000, 5, ' Western Historic site', 3),
(42, 'Gateway Of India', 'gateway of india.jpg', 10000, 2, ' Western Historic site', 3),
(43, 'Khajurao Mandir', 'khajurao.jpg', 18000, 3, ' Western Historic site', 3),
(44, 'Sanchi Stupa', 'sachisupta.jpg', 15000, 2, ' Western Historic site', 3),
(45, 'Gwalior Fort', 'Gwalior_Fort_front.jpg', 18000, 3, ' Western Historic site', 3),
(46, 'Gira-Saputara', 'Gira-Waterfa.jpg', 8000, 3, ' Waterfalls & Rainy spot', 4),
(47, 'Dudhsagar', 'dhuandhar falls.jpg', 10000, 3, ' Waterfalls & Rainy spot', 4),
(48, 'Chitrakoot Falls', 'chitrakoot.jpg', 12000, 4, ' Waterfalls & Rainy spot', 4),
(49, 'Tirathgarh Falls', 'tirathgarh waterfall.jpg', 10000, 3, 'Waterfalls & Rainy spot', 4),
(50, 'Amrit Dhara', 'amrit dhara waterfall.jpg', 13000, 4, ' Waterfalls & Rainy spot', 4),
(51, 'Dhuandhar Falls', 'dhuandhar falls.jpg', 10000, 3, 'Waterfalls & Rainy spot', 4),
(52, 'Athirappilly', 'athirappilly water falls.jpg', 14000, 3, ' Waterfalls & Rainy spot', 4),
(53, 'Shivasamudam Falls', 'shivanasamudra falls.jpeg', 12000, 3, 'Waterfalls & Rainy spot', 4),
(54, 'Pykara Falls', 'pykara falls.jpg', 10000, 3, 'Waterfalls & Rainy spot', 4),
(55, 'Etipothpothala', 'ethipothala waterfalls.jpg', 12000, 3, ' Waterfalls & Rainy spot', 4),
(56, 'Courtallam Falls', 'courtallam waterfalls.jpg', 12000, 3, ' Waterfalls & Rainy spot', 4),
(57, 'Aatapi Wonderland', 'AAtapi Wonderland.jpg', 8000, 3, ' 4 Fun', 5),
(58, 'Imagicca-Mumbai', 'Imagica.jpg', 10000, 3, ' 4 Fun', 5),
(59, 'Gujarat Science', 'Science City gujarat.jpg', 6000, 3, ' 4 Fun', 5),
(60, 'Essel World-Mumbai', 'Essel World.jpg', 9000, 3, ' 4 Fun', 5),
(61, 'Water Kingdom', 'Water Kingdom.jpg', 12000, 3, ' 4 Fun', 5),
(62, 'Wonderala Amusement Park', 'Wonderala Amusement park.jpg', 15000, 4, ' 4 Fun', 5),
(63, 'Snow World', 'Snow World.jpg', 10000, 3, ' 4 Fun', 5),
(64, 'Ramojicity', 'ramoji city..jpg', 15000, 5, ' 4 Fun', 5),
(65, 'Kingdom Of Dream', 'kingdom of dreams.jpg', 10000, 2, ' 4 Fun', 5),
(66, 'Niccopark', 'Nicco Park.jpg', 13000, 3, ' 4 Fun', 5),
(67, 'Science city ', 'Science City Kolkata.jpg', 12000, 3, ' 4 Fun', 5),
(68, 'Thunder World Theme Park', 'Thunder World Theme Park.jpeg', 15000, 4, ' 4 Fun', 5),
(69, 'GRS Fantasy Mysura', 'GRS Fantasy Park.jpg', 10000, 4, ' 4 Fun', 5),
(70, 'Adventure Island', 'adventure Ialand.jpg', 10000, 3, ' 4 Fun', 5),
(71, 'Blue World Theme Park', 'Blue World Theme Park.jpg', 9000, 3, ' 4 Fun', 5),
(72, 'Wet n Joy Park', 'Wetn joy.jpeg', 10000, 3, '4 Fun', 5),
(73, 'Saputara', 'saputara.jpg', 5000, 3, ' Nature & Hill station', 6),
(74, 'Girnar', 'Girnar.jpg', 8000, 3, ' Nature & Hill station', 6),
(75, 'Mahabaleshwar', 'mahabaleswar.jpg', 10000, 5, ' Nature & Hill station', 6),
(76, 'Lonavala', 'lonavla.jpg', 12000, 5, ' Nature & Hill station', 6),
(77, 'Matheran', 'matheran.jpg', 15000, 5, ' Nature & Hill station', 6),
(78, 'Mount Abu', 'mountabu.jpg', 15000, 5, ' Nature & Hill station', 6),
(79, 'Shimla', 'shimla.jpg', 16000, 5, ' Nature & Hill station', 6),
(80, 'Manali', 'manali.jpg', 20000, 7, ' Nature & Hill station', 6),
(81, 'Mussorie', 'masoori.jpg', 20000, 7, ' Nature & Hill station', 6),
(82, 'Nainital', 'nainital.jpg', 15000, 5, ' Nature & Hill station', 6),
(83, 'Dehradun', 'dehradun.jpg', 18000, 5, ' Nature & Hill station', 6),
(84, 'Gulmarg', 'Gulmarg.jpg', 15000, 5, ' Nature & Hill station', 6),
(85, 'Gangtok', 'gangtok.jpg', 10000, 3, ' Nature & Hill station', 6),
(86, 'Ooty', 'ooty.jpg', 15000, 5, ' Nature & Hill station', 6),
(87, 'Coorg', 'coorg.jpg', 18000, 5, ' Nature & Hill station', 6),
(88, 'Taj Mahal', 'Taj mahal.jpeg', 12000, 2, ' North various Culture', 7),
(89, 'Red Fort', 'Red fort.jpg', 8000, 2, ' North various Culture', 7),
(90, 'Qutubminar', 'Qutub Minar.jpeg', 7000, 2, ' North various Culture', 7),
(92, 'India Gate', 'India Gate.jpg', 9000, 2, ' North various Culture', 7),
(93, 'Fatehpur Sikri', 'Fatehpur sikri.jpg', 10000, 2, ' North various Culture', 7),
(94, 'Humayuns Tomb', 'Humayus Tomb.jpg', 12000, 3, ' North various Culture', 7),
(95, 'Khajurao Temple', 'khajuraho-slider-imggg-3.jpg', 9000, 3, ' North various Culture', 7),
(96, 'Konark temple', 'Kornak Temple.jpg', 9000, 3, ' North various Culture', 7),
(97, 'Golden Temple', 'Golden Temple.jpg', 20000, 5, ' North various Culture', 7),
(98, 'Varanshi', 'Varansi.jpg', 25000, 7, ' North various Culture', 7),
(99, 'Agra Fort', 'Agra fort.jpg', 12000, 2, ' North various Culture', 7),
(100, 'Mumbai', 'Mumbai-City.jpeg', 25000, 7, ' City & Capital', 8),
(101, 'Udaipur', 'Udaypur.jpg', 25000, 8, ' City & Capital', 8),
(102, 'Kutch-Bhuj', 'kutch.jpg', 20000, 10, ' City & Capital', 8),
(103, 'Jaipur', 'Jaipur City.jpg', 30000, 12, ' City & Capital', 8),
(104, 'Pune', 'Pune City.jpg', 25000, 12, ' City & Capital', 8),
(105, 'Kolkata', 'Kolkata-City_1.jpeg', 25000, 5, ' City & Capital', 8),
(106, 'Jaselmer', 'Jaselmer City.jpg', 20000, 5, ' City & Capital', 8),
(107, 'Pushkar', 'Pushkar.jpg', 21000, 5, ' City & Capital', 8),
(108, 'Meghalaya', 'Meghalaya.jpeg', 20000, 5, ' City & Capital', 8),
(109, 'Lucknow', 'Lakhnow.jpg', 22000, 6, 'City & Capital', 8),
(110, 'New Delhi', 'New Delhi.jpg', 30000, 12, 'City & Capital', 8),
(111, 'Chennai', 'Chennai.jpg', 25000, 5, ' City & Capital', 8),
(112, 'Bengaluru', 'Bangalore.jpg', 30000, 7, ' City & Capital', 8),
(113, 'Hydrabad', 'Hydrabad.jpg', 28000, 5, 'City & Capital', 8),
(114, 'Kerala', 'Kerala.jpg', 30000, 10, 'City & Capital', 8),
(115, 'Amaravati', 'amravati.jpg', 15000, 5, 'South Culture & History', 9),
(116, 'Anantapur', 'anatapur.jpg', 20000, 5, ' South Culture & History', 9),
(117, 'Kurnool', 'kurnool.jpeg', 15000, 3, ' South Culture & History', 9),
(118, 'Charminar', 'charminara.jpg', 10000, 3, ' South Culture & History', 9),
(119, 'Vishapatnam', 'vishakhapatnam.jpg', 20000, 5, ' South Culture & History', 9),
(120, 'Hampi', 'hampi.jpg', 10000, 3, ' South Culture & History', 9),
(121, 'Mysore', 'mysore karnataka.jpg', 16000, 4, ' South Culture & History', 9),
(122, 'Bijapur', 'BIJAPUR.jpg', 12000, 3, ' South Culture & History', 9),
(123, 'Mahabalipuram', 'mahabalipurm.jpg', 20000, 4, ' South Culture & History', 9),
(124, 'Tiruvannamalai', 'tiruvannamalai.jpg', 25000, 5, ' South Culture & History', 9),
(125, 'Meenakshi Temple', 'meenakshi.jpg', 20000, 3, ' South Culture & History', 9),
(126, 'Tirupati', 'tirupati.jpg', 30000, 4, ' South Culture & History', 9),
(127, 'Nalanda', 'Nalanda.jpg', 10000, 3, 'East Local Tradition', 10),
(128, 'Patan', 'Patan.jpg', 20000, 5, 'East Local Tradition', 9),
(129, 'Bodh Gaya', 'Bodh Gaya.jpg', 20000, 5, ' East Local Tradition', 10),
(130, 'Tawang Monastery', 'Tawang.jpg', 18000, 5, ' East Local Tradition', 10),
(131, 'Vishail', 'Vaishali.jpg', 15000, 3, ' East Local Tradition', 10),
(132, 'Rajgir', 'Rajgir.jpg', 16000, 5, ' East Local Tradition', 10),
(133, 'Itanagar', 'Itanagar.jpg', 13000, 3, ' East Local Tradition', 10),
(134, 'Kalimpong', 'Kalimpong.jpg', 15000, 5, ' East Local Tradition', 10),
(135, 'Darjeeling', 'Darjeeling.jpg', 20000, 5, ' East Local Tradition', 10),
(136, 'Kohima', 'Kohima.jpg', 20000, 5, ' East Local Tradition', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mno` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `username`, `password`, `mno`, `address`, `city`) VALUES
(1, 'Janvi Naliyapara', '2104', 876543218, 'ramoji city,moti king near,23456,second floor,4.', 'uttrakhand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid_fk` (`category_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
