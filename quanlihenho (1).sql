-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 02:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlihenho`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Active now'),
(4, 'admin1', 'admin1', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `blocker_id` int(11) DEFAULT NULL,
  `blocked_id` int(11) DEFAULT NULL,
  `block_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'badminton'),
(2, 'tennis'),
(3, 'read books');

-- --------------------------------------------------------

--
-- Table structure for table `interaction`
--

CREATE TABLE `interaction` (
  `interaction_id` int(11) NOT NULL,
  `swiper_id` int(11) DEFAULT NULL,
  `swipee_id` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `interaction_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `latitude`, `longitude`) VALUES
(2, 'Vinh', 0.00000000, 0.00000000),
(6716, 'Đà Nẵng', 16.06800000, 108.21200000),
(8886, 'Đà Nẵng', 16.06800000, 108.21200000),
(10514, 'Cam Ranh', 0.00000000, 0.00000000),
(11104, 'Nha Trang', 0.00000000, 0.00000000),
(12010, 'Nha Trang', 12.24316930, 109.18986750),
(12825, 'Hà Nội', 0.00000000, 0.00000000),
(16518, 'Hà Nội', 21.03581350, 105.84035000),
(17591, 'Nha Trang', 0.00000000, 0.00000000),
(18541, 'Hà Nội', 0.00000000, 0.00000000),
(18639, 'Cam Ranh', 0.00000000, 0.00000000),
(22296, 'Đà Nẵng', 16.06800000, 108.21200000),
(25577, 'Đà Nẵng', 16.06800000, 108.21200000),
(31442, 'Hà Nội', 21.02833340, 105.85404100),
(32732, 'Hạ Long', 20.95283650, 107.08000030),
(40365, 'Quảng Ngãi', 14.99537390, 108.69172900),
(40761, 'Nha Trang', 12.24316930, 109.18986750),
(46276, 'Đà Nẵng', 16.06800000, 108.21200000),
(70811, 'Nha Trang', 12.24316930, 109.18986750),
(72839, 'Cà Mau', 9.01801770, 105.08697240),
(91476, 'Nha Trang', 12.24316930, 109.18986750),
(95635, 'Quảng Ngãi', 14.99537390, 108.69172900);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `user1_id` int(11) DEFAULT NULL,
  `user2_id` int(11) DEFAULT NULL,
  `match_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message_content` text DEFAULT NULL,
  `message_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender_id`, `receiver_id`, `message_content`, `message_date`) VALUES
(11, 18, 15, 'sadasd', '0000-00-00 00:00:00'),
(12, 18, 15, 'asdsad', '0000-00-00 00:00:00'),
(13, 18, 15, 'asdasd', '0000-00-00 00:00:00'),
(14, 18, 15, 'asdasdasd', '0000-00-00 00:00:00'),
(15, 18, 15, 'asdasdasd', '0000-00-00 00:00:00'),
(16, 18, 15, 'asdasdasd', '0000-00-00 00:00:00'),
(17, 18, 15, 'asdasd', '0000-00-00 00:00:00'),
(18, 18, 15, 'a;o', '2023-11-15 17:53:00'),
(19, 15, 18, 'asdasdasd', '0000-00-00 00:00:00'),
(20, 15, 18, 'sadasd', '1970-01-01 01:00:00'),
(21, 15, 18, 'asasuke098', '2023-11-15 17:56:00'),
(23, 18, 15, 'f', '2023-11-15 19:19:00'),
(24, 18, 14, 'f', '2023-11-15 19:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `notification_type` varchar(10) NOT NULL,
  `notification_content` text DEFAULT NULL,
  `notification_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `photo_url` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premiummembership`
--

CREATE TABLE `premiummembership` (
  `premium_id` tinyint(4) NOT NULL,
  `name_package` varchar(200) NOT NULL,
  `benifit` text NOT NULL,
  `cost` float DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `premiummembership`
--

INSERT INTO `premiummembership` (`premium_id`, `name_package`, `benifit`, `cost`, `start_date`, `end_date`) VALUES
(1, 'Free', 'Use Free', 0, '0000-00-00', '0000-00-00'),
(2, 'Golden', 'Can click go back', 99.999, '0000-00-00', '0000-00-00'),
(3, 'Premium', 'Can click go back', 399.999, '0000-00-00', '0000-00-00'),
(4, '12 Month', 'Can click go back', 999.999, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `usercategory`
--

CREATE TABLE `usercategory` (
  `user_category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_hash` varchar(200) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `bio` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `dob` timestamp NULL DEFAULT current_timestamp(),
  `gender` varchar(10) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_premium` tinyint(4) DEFAULT 1,
  `user_info_id` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password_hash`, `registration_date`, `bio`, `image`, `location_id`, `dob`, `gender`, `last_login`, `is_premium`, `user_info_id`, `likes`, `dislikes`, `status`) VALUES
(14, 'test', 'test', 'a@gmail.com', '113', '2023-11-12 17:00:00', NULL, 'Profile-test.jpg', 17591, '2007-09-30 17:00:00', ' 0', '2023-11-12 23:44:56', 1, 10003, 1, 0, 'Offline now'),
(15, 'vinh', 'duck', 'duck@gmail.com', '123', '2023-11-12 17:00:00', 'I\'m wibu', 'Profile-duck.jpg', 11104, '2002-07-31 17:00:00', ' 0', '2023-11-12 23:47:07', 1, 10002, 0, 1, 'Offline now'),
(18, 'Linh', 'linh1', 'linh@yahoo.com', '111', '2023-11-12 17:00:00', 'aaaaaaaaa', 'Profile-linh1.jpg', 16518, '2001-06-09 17:00:00', ' 1', '0000-00-00 00:00:00', 1, 10001, 14, 1, 'Offline now'),
(20, 'Trương Ảnh Trực', 'user1', 'truc@gmal.com', '$2y$12$FXrmNm2yqdOJLo.pGZ6EROZp72vtNrdl7KSOikcngQ6nPfRgZH36G', '2023-11-16 17:00:00', NULL, NULL, 25577, '0000-00-00 00:00:00', ' 0', '0000-00-00 00:00:00', 1, 91986, 1, 1, 'Offline now'),
(21, 'Gà', 'user2', 'ga@gmail.com', '$2y$12$Hx8Ick.wQBU0a40Hb4mvXes7PxBNL7CMWawP9z9lwcGWr2vxksVRa', '2023-11-16 17:00:00', NULL, NULL, 95635, '0000-00-00 00:00:00', ' 0', '0000-00-00 00:00:00', 1, 14581, 0, 0, 'Offline now'),
(22, 'user3', 'user3', 'ga@gmail.com', '$2y$12$hsBKYJFByZmy5mtdOV8yqe4WM1zl2FsbJsMqo/7qUEEB5V1yXWYwu', '0000-00-00 00:00:00', NULL, NULL, 40365, '0000-00-00 00:00:00', ' 0', '0000-00-00 00:00:00', 1, 54083, 0, 0, 'Offline now'),
(23, 'user4', 'user4', 'a@gmail.com', '$2y$12$CfcYIHhR0oImUqzSYaw0dOWP8HpKQ7p7VD9.hrUyEvzN3e51q3TPu', '0000-00-00 00:00:00', NULL, NULL, 12010, '0000-00-00 00:00:00', ' 0', '0000-00-00 00:00:00', 1, 93941, 0, 0, 'Offline now'),
(24, 'user5', 'user5', 'a@gmail.com', '$2y$12$pCmAvKl2z.b2aFsSldzHBewHQAb01Xe7pof0H6LLHQw/z9wGGeWku', '2023-11-16 17:00:00', NULL, NULL, 70811, '0000-00-00 00:00:00', ' 0', '0000-00-00 00:00:00', 1, 75143, 0, 0, 'Offline now'),
(25, 'user6', 'user6', 'a@gmail.com', '$2y$12$uI7VWzZrCob.LkU6Nm4cc.mvhcPI9ThbW7KMKhAVBiayCvoB.WWSi', '0000-00-00 00:00:00', NULL, NULL, 91476, '0000-00-00 00:00:00', ' 0', '0000-00-00 00:00:00', 1, 83596, 0, 0, 'Offline now'),
(26, 'Phạm Huỳnh Đức Vinh', 'user7', 'abbbbb@gmail.com', '$2y$12$Dy044UoCGi1gY75V.UgHR.cWba9TlBqffUiJCbJBt0Ijpn3Mu0F9q', '2023-11-16 17:00:00', '', 'Profile-user7.jpg', 40761, '0000-00-00 00:00:00', 'null', '0000-00-00 00:00:00', 1, 89283, 0, 0, 'Offline now'),
(27, 'Trúc', 'truc123', 'truc@gmail.com', '$2y$12$B6SL.zGoDEmmKhMkYIx.OuIwS8PRLsK9npOdaoJ1b7Jx3PwS7iZrO', '2023-11-17 17:00:00', NULL, NULL, 22296, '2009-12-22 17:00:00', ' 1', '2023-11-18 12:22:26', 1, 83481, 0, 0, 'Offline now'),
(28, 'bong', 'bong1', 'abc@gmail.com', '$2y$12$XNIry5IULr80YT9rS8MYheAvwlJGoHXeeZOfligCwZCLncAnrEsIC', '2023-11-17 17:00:00', NULL, NULL, 31442, '1999-02-20 17:00:00', ' 2', '2023-11-18 12:24:08', 1, 76480, 0, 0, 'Offline now'),
(29, 'Trức Thú', 'Thy', 'thu@gmail.com', '$2y$12$plRpL.5B1hqWz6oIbE4i6.743px9.8JbEXkexdDT19rUTsxIQQGB6', '2023-11-17 17:00:00', NULL, NULL, 72839, '2002-02-21 17:00:00', ' 1', '2023-11-18 12:26:47', 1, 49030, 0, 0, 'Offline now'),
(30, 'Long', 'long32', 'abc@gmail.com', '$2y$12$FNwThtVDYMcN6.nXhiINxuTjybVY7j/fI/b0SRZa2wR/Ob648dcCK', '2023-11-17 17:00:00', NULL, NULL, 32732, '2002-12-21 17:00:00', ' 0', '2023-11-18 12:35:15', 1, 86164, 0, 0, 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `usersettings`
--

CREATE TABLE `usersettings` (
  `user_id` int(11) NOT NULL,
  `notification_settings` tinyint(1) DEFAULT 1,
  `privacy_settings` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_info_id` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `body_type` varchar(200) NOT NULL,
  `ethnicity` varchar(200) NOT NULL,
  `hair_color` varchar(200) NOT NULL,
  `relationship` varchar(200) NOT NULL,
  `character_status` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `smoke` varchar(200) NOT NULL,
  `drink` varchar(200) NOT NULL,
  `working_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_info_id`, `height`, `body_type`, `ethnicity`, `hair_color`, `relationship`, `character_status`, `region`, `smoke`, `drink`, `working_status`) VALUES
(10001, 147, 'round', 'Tày', 'white', 'Single', 'accommodating', 'Đạo', 'never', 'never', 'Studying'),
(10002, 163, 'curvy', 'Kinh', 'black', 'Single', 'calm', 'other', 'never', 'never', 'Studying'),
(89283, 142, 'null', 'null', 'null', 'null', 'reserved', 'null', 'null', 'null', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`),
  ADD KEY `blocker_id` (`blocker_id`,`blocked_id`),
  ADD KEY `blocked_id` (`blocked_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `interaction`
--
ALTER TABLE `interaction`
  ADD PRIMARY KEY (`interaction_id`),
  ADD KEY `swiper_id` (`swiper_id`,`swipee_id`),
  ADD KEY `swipee_id` (`swipee_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `user1_id` (`user1_id`,`user2_id`),
  ADD KEY `user2_id` (`user2_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `conversation_id` (`sender_id`,`receiver_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `premiummembership`
--
ALTER TABLE `premiummembership`
  ADD PRIMARY KEY (`premium_id`);

--
-- Indexes for table `usercategory`
--
ALTER TABLE `usercategory`
  ADD PRIMARY KEY (`user_category_id`),
  ADD KEY `user_id` (`user_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `user_info_id` (`user_info_id`),
  ADD KEY `is_premium` (`is_premium`);

--
-- Indexes for table `usersettings`
--
ALTER TABLE `usersettings`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interaction`
--
ALTER TABLE `interaction`
  MODIFY `interaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95636;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercategory`
--
ALTER TABLE `usercategory`
  MODIFY `user_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usersettings`
--
ALTER TABLE `usersettings`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89284;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `block_ibfk_1` FOREIGN KEY (`blocker_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `block_ibfk_2` FOREIGN KEY (`blocked_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interaction`
--
ALTER TABLE `interaction`
  ADD CONSTRAINT `interaction_ibfk_1` FOREIGN KEY (`swiper_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interaction_ibfk_2` FOREIGN KEY (`swipee_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`user1_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`user2_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_ibfk_3` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usercategory`
--
ALTER TABLE `usercategory`
  ADD CONSTRAINT `usercategory_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usercategory_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`is_premium`) REFERENCES `premiummembership` (`premium_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usersettings`
--
ALTER TABLE `usersettings`
  ADD CONSTRAINT `usersettings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_info_id`) REFERENCES `users` (`user_info_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
