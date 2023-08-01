-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 09:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile_tbl`
--

CREATE TABLE `admin_profile_tbl` (
  `admin_Id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobilenum` bigint(10) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL,
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_profile_tbl`
--

INSERT INTO `admin_profile_tbl` (`admin_Id`, `firstname`, `lastname`, `Address`, `City`, `State`, `Email`, `password`, `mobilenum`, `Dob`, `Gender`, `DOI`, `DOU`, `Isactive`) VALUES
(2, 'manan', 'Gandhi', 'xyz', 'Ahm', 'Guj', 'admin', 'admin', 9429895461, '2003-05-02', '1', '0000-00-00', '0000-00-00', 1),
(3, 'MVGANDHI', 'ljbjk', 'khvvvhjkjkv k', 'Ahm', 'Guj', 'Manan', 'mvgandhi', 9429895461, '2003-02-02', '1', '0000-00-00', '0000-00-00', 1),
(4, 'Priya', 'Panchal', 'C-71 ashoknagar soc.', 'ahmedabad', 'gujarat', 'priya@gmail.com', 'priya', 9428036956, '2003-04-16', '0', '0000-00-00', '2018-04-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Area_Id` int(11) NOT NULL,
  `Area_name` varchar(50) NOT NULL,
  `City_Id` int(11) NOT NULL,
  `State_Id` int(11) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Area_Id`, `Area_name`, `City_Id`, `State_Id`, `DOI`, `DOU`, `Isactive`) VALUES
(3, 'Satellite', 0, 0, '0000-00-00', '0000-00-00', 1),
(11, 'Ramol gam', 0, 0, '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_service`
--

CREATE TABLE `book_service` (
  `booking_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_category` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `time_slot` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `isactive` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_service`
--

INSERT INTO `book_service` (`booking_id`, `service_id`, `user_id`, `service_provider_id`, `state`, `city`, `area`, `service_name`, `service_category`, `location`, `booking_date`, `time_slot`, `note`, `DOI`, `isactive`) VALUES
(3, 8, 5, 17, 'Gujarat', 'Ahmedabad', 'Satellite', 'Computer Repair', 'Computer', 'C-14 Manglam App.', '2020-02-02', '01:00 PM', 'my computer is not responding', '2021-03-02', '1'),
(6, 8, 6, 17, 'Gujarat', 'Ahmedabad', 'Ramol gam', 'Computer Repair', 'Computer', 'B-503 Maruti Builts', '2021-03-05', '01:00 PM', 'COMPUTER IS SONG SO FAST', '2021-03-03', '1'),
(7, 10, 6, 27, 'Gujarat', 'Ahmedabad', 'Ramol gam', 'Wiring', 'Electrical', 'B-503 Maruti Builts', '2021-03-07', '01:00 PM', 'Complete wiring of kitchen', '2021-03-08', '1'),
(8, 8, 5, 17, 'Gujarat', 'Ahmedabad', 'Satellite', 'Computer Repair', '1', 'C-14 Manglam', '2021-03-25', '02:00 PM', 'My computer is not working', '2021-03-22', '1'),
(9, 8, 8, 17, 'Gujarat', 'Ahmedabad', 'Satellite', 'Computer Repair', '1', 'Bopal', '2003-04-16', '06:00 PM', 'none', '2021-04-18', '1'),
(10, 16, 8, 33, 'Gujarat', 'Ahmedabad', 'Satellite', 'Architect', '13', 'ahmedabad', '2021-05-16', '10:00 AM', 'Come on time ', '2021-04-19', '1'),
(11, 14, 8, 33, 'Gujarat', 'Ahmedabad', 'Ramol gam', 'interior', '7', 'ahmedabad', '2021-06-16', '12:00 PM', 'none', '2021-04-19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_Id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_Id`, `category_name`, `category_image`, `DOI`, `DOU`, `Isactive`) VALUES
(4, 'Plumbing', 'master-plumber.jpg', '2021-02-24', '2021-02-24', 1),
(5, 'Electrical', 'service-03.jpg', '2021-02-24', '2021-02-24', 1),
(6, 'Construction', 'service-08.jpg', '2021-02-24', '2021-02-24', 1),
(7, 'Interior', 'service-07.jpg', '2021-02-24', '2021-02-24', 1),
(8, 'Painting', 'service-09.jpg', '2021-02-24', '2021-02-24', 1),
(9, 'Appliance', 'service-01.jpg', '2021-02-24', '2021-02-24', 0),
(10, 'Carpentry', 'service-11.jpg', '2021-02-24', '2021-02-24', 1),
(12, 'Civil', 'civil.PNG', '2021-04-19', '2021-04-19', 1),
(13, 'Architect', 'archi.PNG', '2021-04-19', '2021-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_Id` int(11) NOT NULL,
  `City_name` varchar(50) NOT NULL,
  `State_Id` int(11) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_Id`, `City_name`, `State_Id`, `DOI`, `DOU`, `Isactive`) VALUES
(5, 'Ahmedabad', 0, '0000-00-00', '0000-00-00', 0),
(6, 'Gandhinagar', 0, '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_Id` int(11) NOT NULL,
  `Contact_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenum` bigint(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `DOI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_Id`, `Contact_name`, `email`, `mobilenum`, `message`, `DOI`) VALUES
(2, 'h ljbjk', 'navkgdwg@gmial.com', 9429895461, 'Hey send me pic of this', '0000-00-00'),
(3, 'h ljbjk', 'navkgdwg@gmial.com', 9429895461, 'Hey send me pic of this', '0000-00-00'),
(6, 'h ljbjk', 'navkgdwg@gmial.com', 9429895461, '120 kg bopp', '0000-00-00'),
(7, 'MAnan', 'navkgdwg@gmial.com', 9429895461, 'hello', '0000-00-00'),
(8, 'Manan', 'navkgdwg@gmial.com', 9429895461, 'lknln d', '0000-00-00'),
(9, 'Manan', 'navkgdwg@gmial.com', 9429895461, 'oifhifhdnidf', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feed_back_Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenum` bigint(10) NOT NULL,
  `Feedback_msg` varchar(200) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feed_back_Id`, `name`, `email`, `mobilenum`, `Feedback_msg`, `DOI`, `Isactive`) VALUES
(1, 'Manan', 'navkgdwg@gmial.com', 9429895461, 'hello', '2021-01-25', 0),
(2, 'Priya Panchal', 'priya@gmail.com', 9428036956, 'Nice job ', '2021-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inquiry_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenum` bigint(10) NOT NULL,
  `City_name` varchar(50) NOT NULL,
  `category_Id` int(11) NOT NULL,
  `Inquiry_detail` varchar(100) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL,
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inquiry_Id`, `user_Id`, `Address`, `email`, `mobilenum`, `City_name`, `category_Id`, `Inquiry_detail`, `DOI`, `DOU`, `Isactive`) VALUES
(1, 1, 'xyz', 'mvgandhi25@gmail.com', 9227211950, 'ahm', 1, 'akcbalsckndlkfhsilfowahflkfnwofjawfkhgflihf', '2020-12-16', '2020-12-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `Quotation_Id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `State_Id` varchar(100) NOT NULL,
  `City_Id` varchar(100) NOT NULL,
  `Area_Id` varchar(100) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `time_slot` varchar(100) NOT NULL,
  `work_details` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`Quotation_Id`, `service_id`, `user_Id`, `State_Id`, `City_Id`, `Area_Id`, `service_provider_id`, `service_name`, `category`, `location`, `booking_date`, `time_slot`, `work_details`, `price`, `DOI`, `DOU`, `Isactive`) VALUES
(3, 8, 5, 'Gujarat', 'Ahmedabad', 'Satellite', 17, 'Computer Repair', 'Computer', 'C-14 manglam app', '2021-12-31', '06:00 PM', 'my computer is not responding\r\n', '500 for each part', '2021-03-01', '2021-03-01', '1'),
(6, 10, 5, 'Gujarat', 'Gandhinagar', 'Ramol gam', 27, 'Wiring', 'Electrical', 'sactor 35', '2022-12-02', '02:00 PM', 'hello please come and complete the wiring of my house', '500 for each room', '2021-03-02', '2021-03-02', '1'),
(9, 9, 8, 'Gujarat', 'Ahmedabad', 'Satellite', 23, 'Car ', '1', 'paldi', '2001-04-20', '11:00 AM', 'Hello', '', '2021-04-18', '2021-04-18', '0'),
(10, 10, 8, 'Gujarat', 'Ahmedabad', 'Ramol gam', 27, 'Wiring', '1', 'ahmedabad', '2021-05-30', '12:00 PM', 'Hello Hii', '', '2021-04-18', '2021-04-18', '0'),
(11, 14, 8, 'Gujarat', 'Ahmedabad', 'Ramol gam', 33, 'interior', '7', 'ahmedabad', '2021-06-16', '10:00 AM', 'none', '2000', '2021-04-19', '2021-04-19', '1'),
(12, 15, 8, 'Gujarat', 'Ahmedabad', 'Ramol gam', 33, 'Electrical', '5', 'ahmedabad', '2021-06-20', '02:00 PM', 'Hello Please come on time', '', '2021-04-19', '2021-04-19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` decimal(5,0) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `service_id`, `service_provider_id`, `user_id`, `review`, `DOI`) VALUES
(64, 0, 0, 8, '0', '2021-04-18'),
(65, 0, 0, 8, '0', '2021-04-18'),
(66, 0, 0, 8, '0', '2021-04-19'),
(67, 0, 0, 8, '0', '2021-04-19'),
(68, 0, 0, 8, '0', '2021-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE `security_question` (
  `Security_Question_id` int(11) NOT NULL,
  `sec_que` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `DOI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`Security_Question_id`, `sec_que`, `user_id`, `DOI`) VALUES
(2, 'hey whats up', 0, '0000-00-00'),
(3, 'hey whats up gys', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider_profile_tbl`
--

CREATE TABLE `service_provider_profile_tbl` (
  `service_provider_Id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobilenum` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `about profession` varchar(200) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider_profile_tbl`
--

INSERT INTO `service_provider_profile_tbl` (`service_provider_Id`, `profile_pic`, `firstname`, `lastname`, `address`, `area`, `city`, `state`, `email`, `password`, `mobilenum`, `dob`, `Gender`, `profession`, `about profession`, `experience`, `DOI`, `DOU`, `Isactive`) VALUES
(17, 'provider-07.jpg', 'Manan', 'Gandhi', 'C-14 Manglam App. Near Medilink Hospital', 'Satellite', 'Ahmedabad', 'Gujarat', 'Manan@gmail.com', 'manan123', 9429895461, '2003-05-02', '1', 'Computer Engg.', 'Noting its a time pass', '1', '2021-01-22', '2021-01-22', 1),
(23, 'provider-03.jpg', 'Gayatri', 'Patil', 'B-503 Maruti Builts', 'Ramol', 'Ahmedabad', 'Gujarat', 'Gayatri@gmail.com', '12345', 7874717468, '2003-01-06', '0', '', '', '', '2021-02-20', '2021-02-20', 0),
(27, 'provider-01.jpg', 'Lakhesh', 'DESAI', 'KHODIYAR NAGAR', 'Satellite', 'Ahmedabad', 'GUJARAT', 'lakhesh@gmail.com', '123456', 748601234, '2003-08-23', '1', '', '', '', '2021-03-01', '2021-03-01', 0),
(29, 'provider-05.jpg', 'Harsh', 'DESAI', 'Near citizen', 'Satellite', 'Nkjfc', 'CH-08', 'harsh@gmail.com', '123', 9789789789, '2001-03-30', '', '', '', '', '2021-03-01', '2021-03-01', 0),
(30, '', '', '', '', '', '', '', 'Manan@gmail.com', 'manangayu', 0, '0000-00-00', '', '', '', '', '2021-04-13', '2021-04-13', 0),
(31, '', '', '', '', '', '', '', 'Manan@gmail.com', 'manangayu', 0, '0000-00-00', '', '', '', '', '2021-04-13', '2021-04-13', 0),
(32, '', '', '', '', '', '', '', 'Mana1n@gmail.com', 'manangayu', 0, '0000-00-00', '', '', '', '', '2021-04-13', '2021-04-13', 0),
(33, 'provider-08.jpg', 'priya', 'panchal', 'c-71 ashoknagar soc.', 'satellite', 'ahmedabad', 'gujarat', 'priya@gmail.com', 'priya', 9428036956, '2003-04-16', '0', '', '', '', '2021-04-18', '2021-04-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE `service_tbl` (
  `service_id` int(11) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_amount` int(50) NOT NULL,
  `service_location` varchar(200) NOT NULL,
  `category_id` varchar(150) NOT NULL,
  `service_offer` varchar(50) NOT NULL,
  `service_descriptions` varchar(200) NOT NULL,
  `service_photo` varchar(256) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`service_id`, `service_provider_id`, `service_name`, `service_amount`, `service_location`, `category_id`, `service_offer`, `service_descriptions`, `service_photo`, `DOI`, `Isactive`) VALUES
(8, 17, 'Civil', 120, 'Ahmedabad', '1', 'none', 'nothig\r\n', 'civil.png', '2021-02-24', '1'),
(9, 23, 'Interior', 180, 'Ahmedabad', '1', 'none', 'helooo jneojnd ohohoijd ohoioiuj odiuh ooih ohfj oih foih oh foh ohh foiuh', 'service-07.jpg', '2021-03-01', '1'),
(10, 27, 'Wiring', 250, 'Ahmedabad', '1', 'none', 'hello hoe are you', 'service-03.jpg', '2021-03-01', '1'),
(11, 29, 'Home Painting', 500, 'Surat', '1', '50% off on first order', 'lorem lorem lorem lorem lorem', 'service-11.jpg', '2021-03-01', '1'),
(13, 17, 'Wiring', 400, 'Ahmedabad', '1', 'nothing', '', 'er.png', '2021-03-16', '0'),
(14, 33, 'interior', 200, 'paldi', '7', 'Free demo class', 'none', 'service-07.jpg', '2021-04-18', '1'),
(15, 33, 'Electrical', 400, 'Bopal', '5', 'no', 'None', 'service-03.jpg', '2021-04-19', '0'),
(16, 33, 'Architect', 6000, 'Ahmedabad', '13', 'None', 'Come On TIme', 'archi.PNG', '2021-04-19', '0'),
(17, 33, 'plumbing', 700, 'Ahmedabad', '4', 'none', 'none', 'service-10.jpg', '2021-04-19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_Id` int(11) NOT NULL,
  `State_name` varchar(50) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_Id`, `State_name`, `DOI`, `DOU`, `Isactive`) VALUES
(3, 'Gujarat', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registreation_tbl`
--

CREATE TABLE `user_registreation_tbl` (
  `user_Id` int(11) NOT NULL,
  `profile_pic` varchar(256) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobilenum` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `DOU` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registreation_tbl`
--

INSERT INTO `user_registreation_tbl` (`user_Id`, `profile_pic`, `firstname`, `lastname`, `address`, `area`, `city`, `state`, `email`, `password`, `mobilenum`, `dob`, `Gender`, `DOI`, `DOU`, `Isactive`) VALUES
(5, 'user-09.jpg', 'Manan', 'Gandhi', 'C-14 Manglam App.', 'Satellite', 'Ahmedabad', 'Gujarat', 'Manan@gmail.com', 'manangayu', 9429895461, '2003-05-02', '1', '2021-01-22', '2021-01-22', 0),
(6, 'user-10.jpg', 'Gayatri', 'Patil', 'B-503 Maruti Builts', 'Ramol Gam', 'Ahmedabad', 'Gujarat', 'gayatri@gmail.com', '123456', 7874717468, '2003-01-06', '0', '2021-03-03', '2021-03-03', 0),
(7, 'user-07.jpg', 'Lakhesh', 'Rabari', 'XYZ', 'Satellite', 'Ahmedabad', 'Gujarat', 'lakhesh@gmail.com', '123456', 7894561230, '2003-06-08', '', '2021-03-08', '2021-03-08', 0),
(8, 'provider-08.jpg', 'priya', 'panchal', 'c-71 ashoknagar soc.', 'satellite', 'ahmedabad', 'gujarat', 'priya@gmail.com', 'priya', 9428036956, '2003-04-16', '0', '2021-04-18', '2021-04-18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile_tbl`
--
ALTER TABLE `admin_profile_tbl`
  ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Area_Id`);

--
-- Indexes for table `book_service`
--
ALTER TABLE `book_service`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_Id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feed_back_Id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inquiry_Id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`Quotation_Id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `security_question`
--
ALTER TABLE `security_question`
  ADD PRIMARY KEY (`Security_Question_id`);

--
-- Indexes for table `service_provider_profile_tbl`
--
ALTER TABLE `service_provider_profile_tbl`
  ADD PRIMARY KEY (`service_provider_Id`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_Id`);

--
-- Indexes for table `user_registreation_tbl`
--
ALTER TABLE `user_registreation_tbl`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile_tbl`
--
ALTER TABLE `admin_profile_tbl`
  MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `Area_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `book_service`
--
ALTER TABLE `book_service`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feed_back_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inquiry_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `Quotation_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `security_question`
--
ALTER TABLE `security_question`
  MODIFY `Security_Question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_provider_profile_tbl`
--
ALTER TABLE `service_provider_profile_tbl`
  MODIFY `service_provider_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_registreation_tbl`
--
ALTER TABLE `user_registreation_tbl`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
