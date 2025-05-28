-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 05:53 AM
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
-- Database: `ohwonder`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_table`
--

CREATE TABLE `about_table` (
  `ABOUT_ID` int(15) NOT NULL,
  `NAME` varchar(35) NOT NULL,
  `PHOTO` varchar(85) NOT NULL,
  `DESCRIPTION` varchar(80) NOT NULL,
  `FB` varchar(100) NOT NULL,
  `TWITTER` varchar(100) NOT NULL,
  `INSTAGRAM` varchar(100) NOT NULL,
  `YOUTUBE` varchar(100) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_table`
--

INSERT INTO `about_table` (`ABOUT_ID`, `NAME`, `PHOTO`, `DESCRIPTION`, `FB`, `TWITTER`, `INSTAGRAM`, `YOUTUBE`, `STATUS`) VALUES
(4, 'Anthony Vander West', '20220314000437.jpg', 'Oh Wonder released \"Hallelujah\", the first single from their upcoming album, fol', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 0),
(5, 'Josephine Vander Gucht', '20220314000605.jpg', 'British musician making up one-half of the alt-pop duo Oh Wonder', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 0),
(6, 'demo1', '20220314144843.jpg', 'demo description', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 1),
(7, 'demo5', '20220401085315.png', 'dadada', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `album_table`
--

CREATE TABLE `album_table` (
  `ALBUM_ID` int(15) NOT NULL,
  `ALBUM_NAME` varchar(30) NOT NULL,
  `ALBUM_IMAGE` varchar(100) NOT NULL,
  `ALBUM_YEAR` int(15) NOT NULL,
  `ALS_LINK` varchar(80) NOT NULL,
  `ALY_LINK` varchar(80) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album_table`
--

INSERT INTO `album_table` (`ALBUM_ID`, `ALBUM_NAME`, `ALBUM_IMAGE`, `ALBUM_YEAR`, `ALS_LINK`, `ALY_LINK`, `STATUS`) VALUES
(7, 'Magnificent', '20220313233053.jpg', 2022, 'https://open.spotify.com/album/2tt0LJqnklCQ5cAaclOeJi?si=138cbc3db93d466b', 'https://www.youtube.com/watch?v=J46lQHiTfAM&list=RDJ46lQHiTfAM&start_radio=1&ab_', 0),
(8, 'Oh Wonder', '20220313233257.png', 2020, 'https://open.spotify.com/album/4NxvbRRwdppLYtoSAD0Ysv?si=OeXYh2ynSuaZKHhaCouLvQ', 'https://www.youtube.com/watch?v=yiuZNVSSRwE', 0),
(10, 'No One Else Can Wear Your Crow', '20220313233830.jfif', 2020, 'https://open.spotify.com/album/0NcAD4K7i81MNMRWHCeJ5M?si=sjIOU6L-TPixQX6d8H-zwg', 'https://www.youtube.com/watch?v=U9-0irkOXqA', 0),
(11, 'demo2', '20220401085652.png', 2020, 'https://open.spotify.com/album/0NcAD4K7i81MNMRWHCeJ5M', 'https://www.youtube.com/watch?v=iTAj46KJZtM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(105, 'COSMOS JACKET', '2000', '20220313235054.jpg', 1, '2000', 'p1001');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_table`
--

CREATE TABLE `contactus_table` (
  `FEED_ID` int(15) NOT NULL,
  `NAME` varchar(80) NOT NULL,
  `EMAIL_ID` varchar(100) NOT NULL,
  `PHONE` bigint(15) NOT NULL,
  `MESSAGE` varchar(250) NOT NULL,
  `DATE/TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `STATUS` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus_table`
--

INSERT INTO `contactus_table` (`FEED_ID`, `NAME`, `EMAIL_ID`, `PHONE`, `MESSAGE`, `DATE/TIME`, `STATUS`) VALUES
(1, 'test1', 'test1@mail', 1234568900, 'test1 message here', '2022-03-15 17:13:02', 0),
(2, 'test1', 'test1@mail', 1234568900, 'test1 message here', '2022-03-15 21:17:31', 1),
(3, 'test2', 'test2@gmail', 1234567897, 'test2 message here', '2022-03-15 21:16:09', 0),
(4, 'test1', 'het@abab', 1234568999, 'test1 here', '2022-03-15 21:01:17', 0),
(5, 'test1', 'het@abab', 1234568999, 'test1 here', '2022-03-15 21:15:53', 0),
(6, 'test2', 'test2@gmail', 1234658900, 'test2 message here', '2022-03-16 05:53:01', 0),
(7, 'test 4 ', 'test4@mail', 1234568922, 'test 4 message here\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ', '2022-03-16 05:55:00', 0),
(8, 'Hello', 'hellobrother@gmail', 1234568955, 'hello buddy', '2022-04-01 03:15:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_table`
--

CREATE TABLE `events_table` (
  `EVENT_ID` int(15) NOT NULL,
  `EVENT_NAME` varchar(30) NOT NULL,
  `EVENT_IMG` varchar(100) NOT NULL,
  `VENUE_DETAILS` varchar(50) NOT NULL,
  `EVENT_DATE` date NOT NULL,
  `EVENT_TIME` time NOT NULL,
  `EVENT_LINK` varchar(100) NOT NULL,
  `EVENT_STATUS` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_table`
--

INSERT INTO `events_table` (`EVENT_ID`, `EVENT_NAME`, `EVENT_IMG`, `VENUE_DETAILS`, `EVENT_DATE`, `EVENT_TIME`, `EVENT_LINK`, `EVENT_STATUS`) VALUES
(15, 'THE WONDERS', '20220313231309.jpg', 'Wankhede Stadium', '2022-11-30', '22:00:00', 'https://in.bookmyshow.com/', 0),
(16, 'THE WONDERS 2.0', '20220313231544.jpg', 'Eden Gardens', '2022-11-30', '23:14:00', 'https://in.bookmyshow.com/', 0),
(17, 'THE WONDERS 3.0', '20220313231803.jpg', 'Eden Gardens', '2022-03-17', '23:17:00', 'https://in.bookmyshow.com/', 0),
(18, 'Demo2', '20220401085800.png', 'DEmo1 vEnue', '2022-04-08', '21:58:00', 'https://in.bookmyshow.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `FEED_ID` int(15) NOT NULL,
  `L_ID` int(15) NOT NULL,
  `EMAIL_ID` varchar(100) NOT NULL,
  `PHONE` bigint(15) NOT NULL,
  `COMMENT` varchar(50) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_table`
--

CREATE TABLE `home_table` (
  `home_id` int(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `year` date NOT NULL,
  `slink` varchar(150) NOT NULL,
  `ytlink` varchar(150) NOT NULL,
  `img` varchar(300) NOT NULL,
  `audio1title` varchar(100) NOT NULL,
  `audio` varchar(300) NOT NULL,
  `audio2title` varchar(100) NOT NULL,
  `audio2` varchar(300) NOT NULL,
  `audio3title` varchar(100) NOT NULL,
  `audio3` varchar(300) NOT NULL,
  `audio4title` varchar(100) NOT NULL,
  `audio4` varchar(300) NOT NULL,
  `date/time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_table`
--

INSERT INTO `home_table` (`home_id`, `name`, `year`, `slink`, `ytlink`, `img`, `audio1title`, `audio`, `audio2title`, `audio2`, `audio3title`, `audio3`, `audio4title`, `audio4`, `date/time`, `status`) VALUES
(1, 'test1', '2022-03-31', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220318141438.jpg', '', '20220318141438.mp3', '', '20220318141438.mp3', '', '20220318141438.mp3', '', '20220318141438.mp3', '2022-03-18 12:50:04', 1),
(2, 'test2', '2022-04-08', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220318142226.jpg', '', '20220318142226.mp3', '', '20220318142226.mp3', '', '20220318142226.mp3', '', '20220318142226.mp3', '2022-03-18 12:49:58', 1),
(3, 'test 3', '2022-03-31', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220318214837.jpg', '', '20220318214837.mp3', '', '20220318214837.mp3', '', '20220318214837.mp3', '', '20220318214837.mp3', '2022-03-18 12:49:49', 1),
(4, 'test4', '2022-05-04', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220318215533.jpg', '', 'y2mate.com - Dua Lipa  Love Again Official Music Video.mp3', '', 'y2mate.com - AnneMarie  Rockabye  Ciao Adios  Live At Capital Up Close  Capital.mp3', '', 'y2mate.com - Glass Animals  Heat Waves Official Video.mp3', '', 'y2mate.com - Dua Lipa  Love Again Official Music Video.mp3', '2022-03-18 12:49:40', 1),
(5, 'test5', '2022-04-07', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220318223204.png', 'v1', 'y2mate.com - Dua Lipa  Love Again Official Music Video.mp3', 'v2', 'y2mate.com - AnneMarie  Rockabye  Ciao Adios  Live At Capital Up Close  Capital.mp3', 'v3', 'y2mate.com - Glass Animals  Heat Waves Official Video.mp3', 'v4', 'y2mate.com - AnneMarie  Rockabye  Ciao Adios  Live At Capital Up Close  Capital.mp3', '2022-04-01 03:11:40', 1),
(6, 'test6', '2024-10-25', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220319150647.jpg', 'v1', 'y2mate.com - Dua Lipa  Love Again Official Music Video.mp3', 'v2', 'y2mate.com - AnneMarie  Rockabye  Ciao Adios  Live At Capital Up Close  Capital.mp3', 'v3', 'y2mate.com - Glass Animals  Heat Waves Official Video.mp3', 'v4', 'y2mate.com - Glass Animals  Heat Waves Official Video.mp3', '2022-04-01 03:11:43', 1),
(0, 'Oh Wonder', '2015-03-25', 'https://open.spotify.com/track/2r32XiAWtZbT3eLUvf4pag?si=3aa9c1596f8145a6', 'https://www.youtube.com/watch?v=mRD0-GxqHVo', '20220401084907.jpg', 'Better Now', 'Better Now.mp3', 'Happy', 'Happy.mp3', 'Drunk On You', 'Drunk On You.mp3', 'Dazzle', 'Dazzle.mp3', '0000-00-00 00:00:00', 0),
(0, 'No One Else Can Wear Your Crown', '2020-03-01', 'https://open.spotify.com/album/2PERPMWWY1pchfPKeNUJx8', 'https://www.youtube.com/watch?v=zrCJ81LZ0cg', '20220401085154.jpg', 'The Rain', 'The Rain.mp3', 'Dust', 'Dust.mp3', 'White Blood', 'White Blood.mp3', 'Without You', 'Without You.mp3', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `L_ID` int(15) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `EMAIL_ID` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `ROLE` int(10) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `STATUS` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`L_ID`, `NAME`, `EMAIL_ID`, `PASSWORD`, `ROLE`, `DATE`, `STATUS`) VALUES
(1, 'het', 'het@abab', 'het', 0, '2022-02-18 13:22:29', 0),
(2, 'demo', 'demo@yahho.com', 'demo123', 0, '2022-03-15 21:13:58', 1),
(3, 'masun', 'masumprajapati08@gmail.co', 'masum', 0, '2022-03-13 16:34:00', 1),
(4, 'masun', 'masumprajapati08@gmail.co', 'masum', 0, '2022-02-18 13:24:05', 0),
(6, 'dummy2', 'dummy@gmail.com', 'dummy123', 0, '2022-02-18 17:19:04', 0),
(8, 'het', 'het@ghgh', 'het', 0, '2022-03-13 10:32:30', 1),
(9, 'Meet', 'meet@meet.com', 'meet', 0, '2022-03-14 06:59:01', 1),
(10, 'het', 'het@qeqq', 'het', 0, '2022-03-13 10:32:34', 1),
(11, 'het', 'het@qeq', 'het', 1, '2022-03-13 10:28:29', 1),
(12, 'het', 'het@dum', 'dum', 1, '2022-04-01 03:15:39', 1),
(13, 'JEVIN', 'jevin@12', '123', 123, '2022-02-20 12:10:27', 0),
(14, 'jhe', 'het@1', 'het@1', 1, '2022-04-01 03:15:30', 1),
(15, 'jett', 'jett@1', '111', 111, '2022-02-20 12:35:47', 0),
(16, 'valo', 'valo@1', 'riot', 1, '2022-02-20 12:52:45', 0),
(17, 'vlao', 'valo@11', 'valo', 1, '2022-02-20 12:53:55', 0),
(19, 'admin', 'oh@admin', 'admin', 0, '2022-04-01 03:41:35', 0),
(20, 'demo', 'demo@1', 'demo1', 1, '2022-02-20 14:49:01', 0),
(21, 'meet', 'meet@meet', 'meet', 1, '2022-02-20 17:09:57', 0),
(22, 'Masum', 'masum@gmail.com', 'masum', 1, '2022-02-20 20:03:21', 0),
(23, '1212', '12@12', '12', 1, '2022-02-20 20:05:11', 0),
(24, 'het', 'het@ababa', 'het', 1, '2022-03-13 09:50:47', 0),
(25, 'Het', 'het@gmail', 'het', 1, '2022-03-14 06:33:41', 0),
(26, 'Manan', 'mananmodi10@gmail.com', 'meet', 1, '2022-03-14 06:52:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `merch_table`
--

CREATE TABLE `merch_table` (
  `MERCH_ID` int(15) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PHOTO` varchar(70) NOT NULL,
  `PRICE` int(50) NOT NULL,
  `DESCRIPTION` varchar(50) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `QUANTITY` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merch_table`
--

INSERT INTO `merch_table` (`MERCH_ID`, `NAME`, `PHOTO`, `PRICE`, `DESCRIPTION`, `DATE`, `QUANTITY`) VALUES
(14, 'WONDERS HOODIE', '20220313234816.jpg', 1650, 'Galaxy Hoodie b/w', '2022-03-13 18:18:16', 20),
(15, 'COSMOS JACKET', '20220313235054.jpg', 2500, 'PLAIN JACKET COSMOS', '2022-03-13 18:20:54', 15),
(16, 'GALAXY T-SHIRT', '20220313235240.jpg', 800, 'GALAXY TEE-SHIRT WONDERS', '2022-03-13 18:22:40', 25);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `STATUS`) VALUES
(12, 'vikramt', 'blizzard22011@gmail.com', '654231', '1234651avradf', 'cod', 'WONDERS HOODIE(3), COSMOS JACKET(2)', '8950', 1),
(13, 'het', 'het@bhadvo.com', '69696969', 'asdearvasdfvdf', 'cod', 'COSMOS JACKET(2)', '4000', 1),
(14, 'masum', 'masum@randikhana.com', '6969696969', 'asdrajkhcvr', 'cod', 'COSMOS JACKET(2), WONDERS HOODIE(2)', '7300', 1),
(15, 'martin', 'martinofficial06@gmail.com', '6969696969', 'randikhana', 'cod', 'WONDERS HOODIE(2)', '3300', 0),
(16, 'martin', 'martinofficial06@gmail.com', '6969696969', 'sdasdas', 'cod', 'GALAXY T-SHIRT(3)', '2400', 0),
(17, 'jet', 'masum@randikhana.com', '6969696969', 'sadasdas', 'netbanking', 'COSMOS JACKET(2)', '4000', 1),
(18, 'ski', 'daishi@japan.jp', '789789789', 'japan', 'cod', 'COSMOS JACKET(3), WONDERS HOODIE(1), GALAXY T-SHIRT(1)', '8450', 0),
(19, 'daisuki', 'daisukikiii@gmail.com', '567567567', 'sklajhfesdae', 'cod', 'COSMOS JACKET(1)', '2000', 0),
(20, 'martin', 'daishi@japan.jp', '654231', 'asdasdasdasdasdasdasdasd', 'cod', 'COSMOS JACKET(7)', '14000', 0),
(21, 'martin', 'whatever@hetbhadvo.xom', '69696666666', 'jkhjihjhuihjil', 'cod', 'GALAXY T-SHIRT(7), COSMOS JACKET(1)', '7600', 1),
(22, 'Doromos', 'doromos@gmail.com', '6354122225', 'Phone Kr dena Bata Duga', 'cod', 'WONDERS HOODIE(34)', '56100', 0),
(23, 'Vikram Bhadwo Che', 'vikochodyo@gmail.com', '2500000000', 'randikhana', 'cards', 'GALAXY T-SHIRT(44)', '35200', 0),
(24, 'Het Patel', 'hetpatel756@gmail.com', '0997 869 3988', 'Part-2 ,No.1 Ashapuri Soc.,Nr. Avkar Hall, Ghodasar', 'cod', 'demo2(3)', '3000', 2),
(25, 'Het Patel', 'hetpatel756@gmail.com', '0997 869 3988', 'Part-2 ,No.1 Ashapuri Soc.,Nr. Avkar Hall, Ghodasar', 'cod', 'COSMOS JACKET(2)', '4000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `product_date`, `STATUS`) VALUES
(1, 'WONDERS HOODIE', '1650', 1, '20220313234816.jpg', 'p1000', '2022-04-01 03:14:54', 0),
(2, 'COSMOS JACKET', '2000', 1, '20220313235054.jpg', 'p1001', '2022-04-01 03:14:54', 0),
(3, 'GALAXY T-SHIRT', '800', 1, '20220313235240.jpg', 'p1002', '2022-04-01 03:14:54', 0),
(10, 'demo2', '1000', 1, '20220401085418.png', '1003', '2022-04-01 03:30:50', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_table`
--
ALTER TABLE `about_table`
  ADD PRIMARY KEY (`ABOUT_ID`);

--
-- Indexes for table `album_table`
--
ALTER TABLE `album_table`
  ADD PRIMARY KEY (`ALBUM_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_table`
--
ALTER TABLE `contactus_table`
  ADD PRIMARY KEY (`FEED_ID`);

--
-- Indexes for table `events_table`
--
ALTER TABLE `events_table`
  ADD PRIMARY KEY (`EVENT_ID`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`FEED_ID`),
  ADD KEY `L_ID` (`L_ID`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`L_ID`);

--
-- Indexes for table `merch_table`
--
ALTER TABLE `merch_table`
  ADD PRIMARY KEY (`MERCH_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_table`
--
ALTER TABLE `about_table`
  MODIFY `ABOUT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `album_table`
--
ALTER TABLE `album_table`
  MODIFY `ALBUM_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `contactus_table`
--
ALTER TABLE `contactus_table`
  MODIFY `FEED_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events_table`
--
ALTER TABLE `events_table`
  MODIFY `EVENT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `FEED_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `L_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `merch_table`
--
ALTER TABLE `merch_table`
  MODIFY `MERCH_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD CONSTRAINT `feedback_table_ibfk_1` FOREIGN KEY (`L_ID`) REFERENCES `login_table` (`L_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
