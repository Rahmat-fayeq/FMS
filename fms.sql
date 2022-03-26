-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 04:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `info_id` int(11) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`info_id`, `info`, `img`) VALUES
(19, ' Hello Guys :) we welcome you here in this amazing website . By using this platform you can easily book ground , ticket and register yourself for training . Our aim is to increasing the capacity usage of sports facilities through technology enabled platform. We believe promoting sports and health goes hand in hand, so process of playing sports should be simple and enjoyable.', 0x61737365745f61646d696e2f75706c6f6164732f6176617461722e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `email`, `password`, `token`) VALUES
(1, 'admin@gmail.com', '123456', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(25) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'CG Road', 4),
(2, 'Paldi', 2),
(3, 'Lal darwaja', 4),
(4, 'Shervanjani', 4),
(5, 'Rajkot_area', 2),
(6, 'Rajkot_area2', 2),
(7, 'Mahastra', 1),
(8, 'Film city', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookground`
--

CREATE TABLE `bookground` (
  `gid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `manage_id` int(11) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookground`
--

INSERT INTO `bookground` (`gid`, `name`, `email`, `mno`, `date`, `time1`, `time2`, `manage_id`, `oid`) VALUES
(1, 'alex', 'alex@a.com', '7654230011', '2018-03-23', '17:00:00', '18:00:00', 4, 14),
(2, 'Rahol', 'rahol@yahoo.com', '7654230011', '2018-04-11', '10:00:00', '13:00:00', 5, 14),
(3, 'Richard', 'hulk22@yahoo.com', '78654322210', '2018-03-19', '05:00:00', '09:00:00', 3, 15),
(4, 'alex', 'alex@gmail.com', '756999999', '2018-03-15', '16:30:00', '21:00:00', 6, 15),
(5, 'User', 'user@gmail.com', '2147483647', '2018-03-23', '12:00:00', '03:00:00', 4, 14),
(6, 'user', 'hjh@yahoo.com', '87654', '2018-05-09', '07:00:00', '14:00:00', 6, 15),
(9, 'Jan Agha', 'jan@yahoo.com', '770001134', '2018-02-20', '19:00:00', '21:00:00', 8, 17),
(10, 'gulbay', 'gulbay@yaho.com', '2147483647', '2018-03-20', '13:00:00', '14:00:00', 8, 17),
(11, 'Jan Agha', 'jan@yahoo.com', '770001134', '2018-03-23', '09:00:00', '10:00:00', 11, 18),
(12, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', '2018-04-28', '17:00:00', '19:00:00', 13, 20),
(14, 'Jan Agha', 'jan@yahoo.com', '770001134', '2018-09-12', '07:30:00', '09:30:00', 13, 20),
(15, 'alexander Ewanvich', 'alex@gmail.com', '7705490382', '2018-06-01', '13:00:00', '16:00:00', 14, 20),
(16, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', '2019-03-10', '15:00:00', '20:00:00', 8, 17),
(17, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', '2022-03-06', '19:45:00', '20:45:00', 10, 19);

-- --------------------------------------------------------

--
-- Table structure for table `bookticket`
--

CREATE TABLE `bookticket` (
  `tid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `mid` int(11) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookticket`
--

INSERT INTO `bookticket` (`tid`, `name`, `email`, `mno`, `mid`, `oid`) VALUES
(13, 'alex', 'alex@a.com', '2147483647', 6, 8),
(14, 'Habib', 'Habib@yahoo.com', '7654230011', 7, 8),
(15, 'abc', 'acb@gmail.com', '7654230011', 9, 15),
(16, 'Rahmatullah', 'rahmat@gmail.com', '7434044859', 14, 11),
(17, 'mk', 'mk@gmail.com', '8765094321', 8, 15),
(18, 'sara', 'sara@gmail.com', '76789987', 15, 15),
(20, 'Jan Agha', 'jan@yahoo.com', '770001134', 16, 17),
(22, 'gulbay', 'gulbay@yaho.com', '2147483647', 16, 17),
(23, 'Jan Agha', 'jan@yahoo.com', '770001134', 17, 18),
(24, 'Jan Agha', 'jan@yahoo.com', '770001134', 17, 18),
(25, 'Jan Agha', 'jan@yahoo.com', '770001134', 21, 20),
(26, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 21, 20),
(28, 'alexander Ewanvich', 'alex@gmail.com', '7705490382', 21, 20),
(29, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 16, 17);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Mumbai'),
(2, 'Rajkot'),
(4, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `manage_ground`
--

CREATE TABLE `manage_ground` (
  `manage_id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_ground`
--

INSERT INTO `manage_ground` (`manage_id`, `time`, `price`, `oid`) VALUES
(1, '2 hour', 'RS.500', 15),
(3, '4 hour', 'RS.1500', 15),
(4, '1 hour', '$.5', 14),
(5, '5 hour', '$.140', 14),
(6, '7 hour', 'RS.2000', 15),
(7, '2 hour', 'RS.2000', 16),
(8, '2 hour', '$ 200', 17),
(9, '4 hour', '$300', 17),
(10, '1 hour', '$100', 19),
(11, '2 hour', 'RS 500', 18),
(12, '4 hour', 'RS 900', 18),
(13, '2 hours', 'RS.1500', 20),
(14, '4 hours', 'RS.2800', 20);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `mid` int(11) NOT NULL,
  `team1` varchar(30) NOT NULL,
  `team2` varchar(30) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(8) NOT NULL,
  `price` varchar(20) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`mid`, `team1`, `team2`, `place`, `date`, `time`, `price`, `oid`) VALUES
(4, 'PSG', 'Valencia', 'PSG ground', '2018-02-24', '08:00:PM', 'RS900', 14),
(6, 'PSG', 'Valencia', 'PSG ground', '2018-02-24', '08:00:PM', 'RS900', 8),
(7, 'PSG', 'Valencia', 'PSG ground', '2018-02-24', '08:00:PM', 'RS900', 8),
(8, 'Real Mardrid', 'Barcelona', 'Campnew', '2018-02-21', '12:00:PM', '$100', 15),
(9, 'Chelse', 'Manchester united', 'london', '2018-03-14', '03:00:PM', '$50', 15),
(11, 'PSG', 'Valencia', 'PSG ground', '2018-02-24', '08:00:PM', 'RS900', 11),
(12, 'PSG', 'Valencia', 'PSG ground', '2018-02-24', '08:00:PM', 'RS900', 11),
(13, 'PSG', 'Valencia', 'PSG ground', '2018-02-24', '08:00:PM', 'RS900', 11),
(14, 'abc', 'def', 'mno', '2018-02-24', '08:00:PM', 'RS900', 11),
(15, 'A', 'B', 'C', '2018-03-16', '9:00:am', '$30', 15),
(16, 'Manchester United', 'Chesle', 'Fardi ground', '2018-05-22', '20:00', 'RS 2500', 17),
(17, 'shaheen', 'simorgh', 'shirjan ground', '2018-03-17', '20:00', 'RS.80', 18),
(19, 'kalawsh', 'chapli', 'ghor', '2018-03-06', '13:00', '$100', 19),
(21, 'Barcelona', 'RealMadrid', 'Santiabarnagu', '2018-04-19', '21:00', '$200', 20);

-- --------------------------------------------------------

--
-- Table structure for table `owner_feedback`
--

CREATE TABLE `owner_feedback` (
  `of_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_feedback`
--

INSERT INTO `owner_feedback` (`of_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'owner', 'owner@gmail.com', 'hello', 'alhvoanvlanvlajofjeifnkanvlanvlanvlnalvnalvnlanlnl');

-- --------------------------------------------------------

--
-- Table structure for table `owner_login`
--

CREATE TABLE `owner_login` (
  `oid` int(11) NOT NULL,
  `onm` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `adr` varchar(100) NOT NULL,
  `gnm` varchar(50) NOT NULL,
  `img1` blob NOT NULL,
  `img2` blob NOT NULL,
  `img3` blob NOT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock',
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_login`
--

INSERT INTO `owner_login` (`oid`, `onm`, `email`, `mno`, `pass`, `cpass`, `city_id`, `area_id`, `adr`, `gnm`, `img1`, `img2`, `img3`, `status`, `token`) VALUES
(13, 'alex', 'alex@a.com', '876543', '2345678', '2345678', 4, 4, 'yyyyy9om', 'shouabvakv', 0x75706c6f61642f707231392e504e47, 0x75706c6f61642f707232322e504e47, 0x75706c6f61642f707231352e504e47, 'Unblock', ''),
(14, 'ali', 'ali@gmail.com', '2147483647', '1234567', '1234567', 4, 4, 'aajvkljla', 'oayihbkbjhk', 0x75706c6f61642f4b6f616c612e6a7067, 0x75706c6f61642f4c69676874686f7573652e6a7067, 0x75706c6f61642f54756c6970732e6a7067, 'Unblock', ''),
(15, 'Rahmatullah', 'rahmat@gmail.com', '7434044859', 'rahmat123', 'rahmat123', 2, 2, 'Rahamts Ground', 'Rahamts Ground/paldi/ahmedabad/india', 0x75706c6f61642f4a656c6c79666973682e6a7067, 0x75706c6f61642f48796472616e676561732e6a7067, 0x75706c6f61642f4c69676874686f7573652e6a7067, 'Unblock', 'jn5oegq2sb'),
(17, 'Peter Fardi', 'peter@yahoo.com', '78902309860', 'peter123', 'peter123', 1, 8, 'film city/mumbai/india', 'Fardi ground', 0x75706c6f61642f557365725f4446445f6c6576656c2831292e6a7067, 0x75706c6f61642f4f776e65725f4446445f6c6576656c2831292e6a7067, 0x75706c6f61642f4446445f6c6576656c2830292e6a7067, 'Unblock', ''),
(18, 'shir jan', 'shirjan@gmail.com', '8758819271', 'shirjan123', 'shirjan123', 4, 3, 'shapoor', 'shirjan ground', 0x75706c6f61642f312e6a7067, 0x75706c6f61642f322e6a7067, 0x75706c6f61642f332e6a7067, 'Unblock', ''),
(19, 'gulbay', 'gulbay@yaho.com', '8758819271', 'gulbay1234', 'gulbay1234', 1, 8, 'jamalpur', 'gulbayground', 0x75706c6f61642f312e6a7067, 0x75706c6f61642f322e6a7067, 0x75706c6f61642f332e6a7067, 'Unblock', ''),
(20, 'mohammad khawari', 'mohammad@yahoo.com', '9499555122', 'mohammad123', 'mohammad123', 4, 1, 'Ahmedabad/Lal darwaja/CG road/Santiabarnagu', 'Santiabarnagu', 0x75706c6f61642f312e6a7067, 0x75706c6f61642f322e6a7067, 0x75706c6f61642f332e6a7067, 'Unblock', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `terms_id` int(11) NOT NULL,
  `terms` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`terms_id`, `terms`) VALUES
(3, ' There are some terms & conditions which should be followed by each and every users and they are as follow:\r\n\r\n  1.All users need to register and login to access the system.\r\n  \r\n 2. if user did not login then only the visitor page can be accessible for user.\r\n\r\n 3. if user did any wrong thing then user might by blocked by admin.\r\n\r\n  4. Ground owners need to provide the details of their own ground which asked by the system.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `training_reg`
--

CREATE TABLE `training_reg` (
  `tr_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `training_id` int(11) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_reg`
--

INSERT INTO `training_reg` (`tr_id`, `name`, `email`, `mno`, `gender`, `training_id`, `oid`) VALUES
(1, 'alex', 'alex@a.com', '7654230011', 'Male', 2, 8),
(3, 'reza', 'reza@yahoo.com', '7434044859', 'Female', 4, 15),
(4, 'alex', 'alex@gmail.com', '76789987', 'Male', 1, 15),
(8, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 'Male', 2, 15),
(9, 'User', 'user@gmail.com', '2147483647', 'Male', 1, 15),
(11, 'Jan Agha', 'jan@yahoo.com', '770001134', 'Male', 7, 17),
(12, 'gulbay', 'gulbay@yaho.com', '2147483647', 'Male', 7, 17),
(13, 'Jan Agha', 'jan@yahoo.com', '770001134', 'Male', 9, 18),
(14, 'Jan Agha', 'jan@yahoo.com', '770001134', 'Female', 9, 18),
(15, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 'Male', 10, 20),
(17, 'Jan Agha', 'jan@yahoo.com', '770001134', 'Male', 10, 20),
(18, 'alexander Ewanvich', 'alex@gmail.com', '7705490382', 'Female', 11, 20),
(19, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 'Male', 5, 17),
(20, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 'Male', 8, 19);

-- --------------------------------------------------------

--
-- Table structure for table `training_time`
--

CREATE TABLE `training_time` (
  `training_id` int(11) NOT NULL,
  `fm` varchar(10) NOT NULL,
  `tm` varchar(10) NOT NULL,
  `ff` varchar(10) NOT NULL,
  `tf` varchar(10) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_time`
--

INSERT INTO `training_time` (`training_id`, `fm`, `tm`, `ff`, `tf`, `oid`) VALUES
(1, '09:00:00', '12:00', '15:00', '18:00', 8),
(2, '07:00:00', '09:00:AM', '10:00:AM', '12:00:PM', 8),
(3, '07:00:AM', '09:00:AM', '03:00:PM', '06:00:PM', 15),
(4, '09:00:AM', '01:00:PM', '02:00:PM', '04:00:PM', 15),
(5, '07:00', '09:00', '18:00', '20:00', 17),
(7, '20:00', '22:00', '05:00', '07:00', 17),
(8, '13:00', '14:00', '14:00', '15:00', 19),
(9, '07:00', '09:00', '18:00', '21:00', 18),
(10, '05:00', '07:00', '18:00', '20:00', 20),
(11, '08:00', '10:00', '15:00', '17:00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `uf_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`uf_id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'Jan Agha', 'jan@yahoo.com', 'Hmm. Weâ€™re having trouble fi', 'Try again later.\r\nCheck your network connection.\r\nIf you are connected but behind a firewall, check that Firefox has permission to access the Web.'),
(4, 'Alexander', 'alex@gmail.com', 'Appreciation', 'First of all I should say that very very thanks for making this website and it is awesome . i really like it.');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `uid` int(11) NOT NULL,
  `unm` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock',
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`uid`, `unm`, `email`, `mno`, `pass`, `cpass`, `status`, `token`) VALUES
(14, 'user', 'hjh@yahoo.com', '87654', '1234567', '1234567', 'Unblock', ' '),
(15, 'User', 'user@gmail.com', '2147483647', 'user123', 'user123', 'Unblock', ''),
(26, 'Rahmatullah', 'rahmat@gmail.com', '2147483647', 'rahmat123', 'rahmat123', 'Unblock', 'yoxfh6uzka'),
(28, 'Jan Agha', 'jan@yahoo.com', '770001134', 'janagha123', 'janagha123', 'Unblock', ''),
(29, 'gulbay', 'gulbay@yaho.com', '2147483647', 'gulbay1234', 'gulbay1234', 'Unblock', ''),
(31, 'Natash', 'natash@yahoo.com', '001123456609', 'natasha123', 'natasha123', 'Unblock', ' '),
(32, 'alexander Ewanvich', 'alex@gmail.com', '7705490382', 'alex54321', 'alex54321', 'Unblock', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_feedback`
--

CREATE TABLE `visitor_feedback` (
  `vf_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_feedback`
--

INSERT INTO `visitor_feedback` (`vf_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'visitor', 'visitor@yahoo.com', 'myQuery', 'sir/madam,\r\ni have a query about your website.'),
(11, 'mohammad', 'mohammad@yahoo.com', 'Hmm. Weâ€™re having trouble fi', 'We canâ€™t connect to the server at www.google.com.\r\nIf that address is correct, here are three other things you can try:\r\n\r\n    Try again later.\r\n    Check your network connection.\r\n    If you are co'),
(12, 'ibrahim', 'rahmat@gmail.com', 'hi it is nice that i test your', 'Hi how are you all'),
(13, 'ibrahim', 'rahmat@gmail.com', 'hi it is nice that i test your', 'Hi how are you all'),
(14, 'ibrahim', 'rahmat@gmail.com', 'hi it is nice that i test your', 'Hi how are you all');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `bookground`
--
ALTER TABLE `bookground`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `bookticket`
--
ALTER TABLE `bookticket`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `manage_ground`
--
ALTER TABLE `manage_ground`
  ADD PRIMARY KEY (`manage_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `owner_feedback`
--
ALTER TABLE `owner_feedback`
  ADD PRIMARY KEY (`of_id`);

--
-- Indexes for table `owner_login`
--
ALTER TABLE `owner_login`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `training_reg`
--
ALTER TABLE `training_reg`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `training_time`
--
ALTER TABLE `training_time`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`uf_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `visitor_feedback`
--
ALTER TABLE `visitor_feedback`
  ADD PRIMARY KEY (`vf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bookground`
--
ALTER TABLE `bookground`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `bookticket`
--
ALTER TABLE `bookticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manage_ground`
--
ALTER TABLE `manage_ground`
  MODIFY `manage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `owner_feedback`
--
ALTER TABLE `owner_feedback`
  MODIFY `of_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `owner_login`
--
ALTER TABLE `owner_login`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `terms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `training_reg`
--
ALTER TABLE `training_reg`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `training_time`
--
ALTER TABLE `training_time`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `uf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `visitor_feedback`
--
ALTER TABLE `visitor_feedback`
  MODIFY `vf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
