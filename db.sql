-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2018 at 11:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'PHP', 'Post about PHP', '2018-07-15 14:57:49', '2018-07-15 14:57:49'),
(2, 'Java', 'Post about Java', '2018-07-15 14:58:06', '2018-07-15 14:58:06'),
(3, 'HTML', 'Post about HTML', '2018-07-15 14:59:27', '2018-07-15 14:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `body`, `created_date`, `modified_date`) VALUES
(1, 2, 1, 'Good !!!', '2018-07-18 09:30:07', '2018-07-18 09:30:07'),
(2, 2, 2, 'Great !', '2018-07-18 09:30:21', '2018-07-18 09:30:21'),
(3, 3, 1, 'Awesome !', '2018-07-18 09:31:27', '2018-07-18 09:31:27'),
(4, 3, 2, 'Wow !', '2018-07-18 09:31:51', '2018-07-18 09:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `category_id`, `user_id`, `content`, `created_date`, `modified_date`) VALUES
(1, 'First PHP', 1, 1, '			    				\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!			    		', '2018-07-18 09:20:13', '2018-07-18 09:20:13'),
(2, 'First Java', 2, 1, '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!', '2018-07-18 09:21:29', '2018-07-18 09:21:29'),
(3, 'First HTML', 3, 2, '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!', '2018-07-18 09:29:31', '2018-07-18 09:29:31'),
(4, 'Second Java', 2, 2, '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!', '2018-07-18 09:29:45', '2018-07-18 09:29:45'),
(5, 'Second PHP', 1, 3, '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!', '2018-07-18 09:30:50', '2018-07-18 09:30:50'),
(6, 'Second HTML', 3, 3, '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eius, minima animi, unde officia culpa dolorem. Consequatur facilis voluptates excepturi necessitatibus enim, dignissimos, iure quod minus tempora exercitationem, doloribus!', '2018-07-18 09:31:09', '2018-07-18 09:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `created_date`, `modified_date`) VALUES
(1, 'Aung Aung ', 'aungaung@email.com', '123123', 'admin', '2018-07-18 06:52:41', '2018-07-18 06:52:41'),
(2, 'Baung Baung', 'baungbaung@email.com', '123123', 'admin', '2018-07-18 06:53:34', '2018-07-18 06:53:34'),
(3, 'Chaung Chaung', 'chaungchaung@email.com', '123123', 'admin', '2018-07-18 06:55:11', '2018-07-18 06:55:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `post_id_2` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_2` (`category_id`),
  ADD KEY `category_id_3` (`category_id`),
  ADD KEY `author_id` (`user_id`),
  ADD KEY `category_id_4` (`category_id`),
  ADD KEY `author_id_2` (`user_id`),
  ADD KEY `category_id_5` (`category_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id_6` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
