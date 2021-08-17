-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 05:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhaka isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `isp_admin`
--

CREATE TABLE `isp_admin` (
  `isp_id` int(50) NOT NULL,
  `isp_name` varchar(50) NOT NULL,
  `area_coverage` varchar(100) NOT NULL,
  `rating` int(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isp_admin`
--

INSERT INTO `isp_admin` (`isp_id`, `isp_name`, `area_coverage`, `rating`, `password`, `link`) VALUES
(44556, 'Go IT', 'jatrabari,Signboard', 4, '1234', '<a class=\"btn btn-success\" href=\"http://localhost/Project/list/goIT.php\" role=\"button\">Visit</a>'),
(55664, 'Icc IT', 'Uttora, Bongshal, Ajimpur, DU, Gulistan, Purandhaka', 5, '4569', '<a class=\"btn btn-success\" href=\"http://localhost/Project/list/icc.php\" role=\"button\">Visit</a>'),
(112233, 'Future IT', 'signboard,narayanganj', 4, '3579', 'xyz'),
(445567, 'Ks IT', 'Jatrabari, Godenaoil, Savar, Donia', 5, '123', '<a class=\"btn btn-success\" href=\"http://localhost/Project/list/ks.php\" role=\"button\">Visit</a>'),
(669996, 'Link IT', 'Signboard, Rayerbag, Purandhaka, Uttora, Motijheel, Gulistan, Pachatra, Malibagh', 5, '112323', '<a class=\"btn btn-success\" href=\"http://localhost/Project/list/link3.php\" role=\"button\">Visit</a>'),
(2255566, 'Triangle IT', 'Signboard, Rayerbag, Purandhaka, Uttora, Motijheel, Gulistan, Pachatra, Malibagh', 5, '112325', '<a class=\"btn btn-success\" href=\"http://localhost/Project/list/triangle.php\" role=\"button\">Visit</a>'),
(44881258, 'Amber It', 'dhaka , badda, motijheel', 5, 'amber', '<a class=\"btn btn-success\" href=\"http://localhost/Project/all.php\" role=\"button\">Visit</a>');

-- --------------------------------------------------------

--
-- Table structure for table `isp_info`
--

CREATE TABLE `isp_info` (
  `isp_id` int(50) NOT NULL,
  `packages` varchar(100) NOT NULL,
  `package_name` varchar(20) NOT NULL,
  `package_cost` int(50) NOT NULL,
  `offers` varchar(100) NOT NULL,
  `isp_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isp_info`
--

INSERT INTO `isp_info` (`isp_id`, `packages`, `package_name`, `package_cost`, `offers`, `isp_name`) VALUES
(2255566, '5', 'package1', 500, '450', 'Triangle IT'),
(2255566, '10', 'package2', 1000, '900', 'Triangle IT'),
(2255566, '15', 'package3', 1200, '0', 'Triangle IT'),
(2255566, '20', 'package4', 1600, '0', 'Triangle IT'),
(44556, '5', 'package1', 500, '450', 'Go IT'),
(44556, '10', 'package2', 1000, '0', 'Go IT'),
(44556, '12', 'package3', 1100, '0', 'Go IT'),
(44556, '20', 'package4', 1800, '0', 'Go IT'),
(112233, '5', 'package1', 550, '0', 'Future IT');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_list`
--

CREATE TABLE `subscriber_list` (
  `isp_id` int(20) NOT NULL,
  `isp_name` varchar(100) NOT NULL,
  `sub_fee` int(50) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_speed` int(50) NOT NULL,
  `subscriber_id` int(20) NOT NULL,
  `subscriber_name` varchar(50) NOT NULL,
  `Subscriber_address` varchar(100) NOT NULL,
  `subscriber_phone` varchar(50) NOT NULL,
  `complain` varchar(200) NOT NULL,
  `reply` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber_list`
--

INSERT INTO `subscriber_list` (`isp_id`, `isp_name`, `sub_fee`, `package_name`, `package_speed`, `subscriber_id`, `subscriber_name`, `Subscriber_address`, `subscriber_phone`, `complain`, `reply`) VALUES
(2255566, 'Trialgle IT', 500, 'package1', 5, 11223, 'Aman', 'Rampura', '01677784841', 'new complain', 'your problem solved!'),
(2255566, 'Trialgle IT', 800, 'package2', 10, 11223, 'Aman', 'Rampura', '01677784841', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`First_Name`, `Last_Name`, `Email`, `Address`, `Username`, `Password`, `user_id`, `mobile`) VALUES
('Aman', 'ahmed', 'a@gmail.com', 'Rampura', 'aman', 'khan123', 11223, '01677784841'),
('Sumayra', 'Islam', 'on@gmail.com', 'kallayanpur', 'go', '669874', 22364, '01648841841'),
('khan', 'radi', 'rea@gmail.com', 'Uttora', 'khanf', '559695', 25965, '015744585'),
('Naim', 'ula', 'ula@gmail.com', 'ruppurt', 'khan', '6681', 52364, '016951511'),
('rahim', 'asf', 'as@gmail.com', 'mugda', 'rahim', '123', 55698, '0154587115'),
('Kona', 'mia', 'kun@gmail.com', 'rampura', 'lkuih', '565984', 65641, '016484989'),
('Hamim', 'Ahmed', 'ydd@gmai.com', 'motijheel', 'hamu', '6584', 68575, '015659512'),
('Kunta', 'mia', 'kunta@gmail.com', 'uttora', 'kunta', '6984', 77567, '016848487'),
('modu', 'ara', 'jodu@gmail.com', 'Kadamtoli', 'no', '63014', 78026, '0166484568'),
('Kuddus', 'mia', 'm@gmail.com', 'dhanmodi', 'kuddus', '6547', 558741, '016984848'),
('Nodda', 'GIn', 'gin@gmail.com', 'khanpur', 'kun', '6944', 881432, '014528414'),
('Kudun', 'mia', 'mia@gmail.com', 'sahabag', 'sahabag', '12549', 1159874, '0165845587'),
('Sunny', 'Ulo', 'ulo@gmail.com', 'Donia', 'ulo', '66584', 3661254, '01695484584'),
('Jodu', 'ulla', 'jodu@gmail.com', 'Mohakhali', 'jodu', 'jodu123', 6658411, '015366996'),
('Anan', 'mahtur', 'am@gmail.com', 'Rampura,Dhaka', 'ak51', '223654', 8895584, '016845845');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `connected_ispid` int(11) NOT NULL,
  `isp_name` varchar(100) NOT NULL,
  `package_name` varchar(20) NOT NULL,
  `sub_fee` int(11) NOT NULL,
  `package_speed` int(20) NOT NULL,
  `issue_report` varchar(100) NOT NULL,
  `issue_reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `connected_ispid`, `isp_name`, `package_name`, `sub_fee`, `package_speed`, `issue_report`, `issue_reply`) VALUES
(11223, 2255566, 'Triangle IT', 'package1', 500, 5, '', ''),
(11223, 2255566, 'Triangle IT', 'package2', 800, 10, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isp_admin`
--
ALTER TABLE `isp_admin`
  ADD PRIMARY KEY (`isp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
