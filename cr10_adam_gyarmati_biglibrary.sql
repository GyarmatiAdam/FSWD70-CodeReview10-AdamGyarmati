-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 04:12 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_adam_gyarmati_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `fk_publisher_id` int(11) NOT NULL,
  `author_firstName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_lastName` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `fk_publisher_id`, `author_firstName`, `author_lastName`, `media`) VALUES
(1, 1, 'Huge', 'Grant', 'Actor'),
(2, 2, 'Elvis', 'Pressure', 'Singer'),
(3, 3, 'Agatha', 'Cirsty', 'Writer'),
(4, 4, 'Denzel', 'Toronto', 'Actor'),
(5, 5, 'Eni', 'Men', 'Singer'),
(6, 6, 'Johnny', 'Deep', 'Actor'),
(7, 6, 'Lady', 'Mama', 'Singer'),
(8, 5, 'William', 'Skapseer', 'Writer'),
(9, 4, 'George', 'Elitt', 'Writer'),
(10, 3, 'Leonardo', 'Dicabrio', 'Actor'),
(11, 2, 'George', 'Orrfell', 'Writer'),
(12, 1, 'Mark', 'Train', 'Writer'),
(13, 1, 'Michael', 'Jacket', 'Singer'),
(14, 2, 'Stephen', 'Koenig', 'Writer'),
(15, 3, 'Beyonce', 'Knowledge', 'Singer'),
(16, 4, 'Ernst', 'Haminghighway', 'Writer'),
(17, 1, 'ghjfg', 'fgjfgh', NULL),
(18, 3, 'hdj', 'ghjfg', NULL),
(19, 3, 'hdj', 'ghjfg', NULL),
(20, 3, 'hdj', 'ghjfg', NULL),
(21, 3, 'hdj', 'ghjfg', NULL),
(22, 3, 'hdj', 'ghjfg', NULL),
(23, 3, 'hdj', 'ghjfg', NULL),
(24, 3, 'hdj', 'ghjfg', NULL),
(25, 3, 'hdj', 'ghjfg', NULL),
(26, 3, 'hdj', 'ghjfg', NULL),
(27, 3, 'hdj', 'ghjfg', NULL),
(28, 3, 'hdj', 'ghjfg', NULL),
(29, 3, 'hdj', 'ghjfg', NULL),
(30, 3, 'hdj', 'ghjfg', NULL),
(31, 3, 'hdj', 'ghjfg', NULL),
(32, 2, 'Hali', 'ho', NULL),
(33, 5, 'Adam', 'Gyarmati', NULL),
(34, 5, 'Adam', 'Gyarmati', NULL),
(35, 5, 'Adam', 'Gyarmati', NULL),
(36, 5, 'Adam', 'Gyarmati', NULL),
(37, 5, 'Adam', 'Gyarmati', NULL),
(38, 5, 'Adam', 'Gyarmati', NULL),
(39, 5, 'Adam', 'Gyarmati', NULL),
(40, 5, 'Adam', 'Gyarmati', NULL),
(41, 5, 'Adam', 'Gyarmati', NULL),
(42, 5, 'Adam', 'Gyarmati', NULL),
(43, 1, 'dsdga', 'dfgsfg', NULL),
(44, 1, 'dsdga', 'dfgsfg', NULL),
(45, 1, 'dsdga', 'dfgsfg', NULL),
(46, 1, 'dsdga', 'dfgsfg', NULL),
(47, 1, 'dsdga', 'dfgsfg', NULL),
(48, 1, 'dsdga', 'dfgsfg', NULL),
(49, 1, 'dsdga', 'dfgsfg', NULL),
(50, 1, 'dsdga', 'dfgsfg', NULL),
(51, 1, 'dsdga', 'dfgsfg', NULL),
(52, 1, 'dsdga', 'dfgsfg', NULL),
(53, 1, 'dsdga', 'dfgsfg', NULL),
(54, 1, 'dsdga', 'dfgsfg', NULL),
(55, 1, 'dsdga', 'dfgsfg', NULL),
(56, 1, 'dsdga', 'dfgsfg', NULL),
(57, 1, 'dsdga', 'dfgsfg', NULL),
(58, 1, 'dsdga', 'dfgsfg', NULL),
(59, 1, 'dsdga', 'dfgsfg', NULL),
(60, 1, 'dsdga', 'dfgsfg', NULL),
(61, 1, 'dsdga', 'dfgsfg', NULL),
(62, 1, 'dsdga', 'dfgsfg', NULL),
(63, 1, 'dsdga', 'dfgsfg', NULL),
(64, 1, 'dsdga', 'dfgsfg', NULL),
(65, 5, 'Adam', 'Gyarmati', NULL),
(66, 5, 'Adam', 'Gyarmati', NULL),
(67, 5, 'Adam', 'Gyarmati', NULL),
(68, 1, 'ghgf', 'fghjh', NULL),
(69, 1, 'ghgf', 'fghjh', NULL),
(70, 1, 'ghgf', 'fghjh', NULL),
(71, 1, 'ghgf', 'fghjh', NULL),
(72, 2, 'fg', 'g', NULL),
(73, 2, 'fg', 'g', NULL),
(74, 2, 'fg', 'g', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `fk_author_id` int(11) DEFAULT NULL,
  `fk_media_status_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lib_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isbn_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lib_description` text COLLATE utf8_unicode_ci,
  `publish_date` date DEFAULT NULL,
  `lib_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `fk_author_id`, `fk_media_status_id`, `title`, `lib_image`, `isbn_code`, `lib_description`, `publish_date`, `lib_type`) VALUES
(2, 2, 2, 'Nowhere ', NULL, '1974-03-15-1974-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1974-03-15', 'CD'),
(3, 3, 1, 'And Then There Were None ', NULL, '2002-03-15-2002-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-05-13', 'BOOK'),
(4, 4, 2, 'The Abyss ', NULL, '2014-03-14-2014-03-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2002-03-15', 'DVD'),
(5, 5, 2, 'After the Gold Rush ', NULL, '2002-03-15-2002-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2014-03-14', 'CD'),
(6, 6, 1, 'Adaptation.', NULL, '1999-07-14-1989-05-24', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2015-07-14', 'DVD'),
(7, 7, 1, 'Transmissions From the Satellite Heart ', NULL, '1974-03-15-2015-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-07-14', 'CD'),
(8, 8, 2, 'The Catcher in the Rye ', NULL, '1999-07-14-1989-05-24', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2001-05-11', 'BOOK'),
(9, 9, 1, 'Extremely Loud and Incredibly Close ', NULL, '1989-05-24-1989-05-24', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1989-05-24', 'BOOK'),
(10, 10, 1, 'The Adventures of Robin Hood ', NULL, '1989-05-24-1974-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2005-03-15', 'DVD'),
(11, 11, 2, 'A Thousand Splendid Suns ', NULL, '1999-07-14-1974-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1974-03-15', 'BOOK'),
(12, 12, 1, 'Another Bullshit Night in Suck City ', NULL, '1999-03-16-1999-03-16', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-03-16', 'BOOK'),
(13, 13, 1, 'Closing Time ', NULL, '1989-05-24-2015-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2013-03-14', 'CD'),
(14, 14, 2, 'How to Lose Friends and Alienate People ', NULL, '1982-03-13-7896-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-09-16', 'BOOK'),
(15, 15, 1, 'Murmur ', NULL, '1989-05-24-1982-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-08-19', 'CD'),
(16, 16, 2, 'One Hundred Years of Solitude ', NULL, '1989-05-24-4322-07-23', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-12', 'BOOK'),
(17, 1, 1, 'Interstellar', NULL, '1982-07-23-1982-07-23', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-07-23', 'DVD'),
(18, 2, 1, 'I Can Hear the Heart Beating as One ', NULL, '1999-03-16-1889-03-16', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-07-23', 'CD'),
(19, 3, 1, 'Cloudy With a Chance of Meatballs ', NULL, '2005-03-15-2005-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1952-03-10', 'BOOK'),
(20, 4, 1, 'Aguirre, the Wrath of God ', NULL, '1982-07-23-1952-03-10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1986-07-14', 'DVD'),
(21, 1, 1, 'The Man Without Qualities ', NULL, '1952-03-10-1952-03-10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-19', 'BOOK'),
(22, 6, 1, 'Airplane!', NULL, '1982-07-14-1982-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-18', 'DVD'),
(23, 9, 2, 'Midnight in the Garden of Good and Evil ', NULL, '1982-03-13-1982-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-13', 'BOOK'),
(24, 10, 1, 'Aliens', NULL, '1982-07-23-1982-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1974-03-15', 'DVD'),
(25, 11, 1, 'A Clockwork Orange ', NULL, '1982-07-14-1982-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-07-14', 'BOOK'),
(73, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 2, 2, 'älöälöl', NULL, '4654564', 'älöälä', '1222-02-02', 'kä#ö#äö'),
(98, 1, 1, 'älöälöl', NULL, '4654564', 'älöälä', '1222-02-02', 'kä#ö#äö'),
(100, 6, 1, 'älöälöl', NULL, '4654564', 'älöälä', '1222-02-02', 'kä#ö#äö'),
(101, 6, 1, 'djfghjgf', NULL, '45465', 'lÃ¶jklÃ¶j', '1222-02-02', 'Ã¶Ã¤lÃ¶Ã¤klÃ¶Ã¤kl'),
(102, 1, 1, '', NULL, 'opp', 'ppp', '0000-00-00', 'ppp'),
(103, 1, 1, '', NULL, '', 'dgsdfs', '0000-00-00', ''),
(104, 1, 1, '', NULL, '', 'dgsdfs', '0000-00-00', ''),
(105, 1, 1, '', NULL, '', 'ghjfg', '0000-00-00', 'fgjgh'),
(106, 1, 1, '', NULL, '', 'ghjfg', '0000-00-00', 'fgjgh'),
(107, 2, 2, '', NULL, '', 'jlÃ¶Ã¶k', '0000-00-00', ''),
(108, 1, 2, 'zio', NULL, '', 'ipipi', '0000-00-00', 'ipipoi');

-- --------------------------------------------------------

--
-- Table structure for table `media_status`
--

CREATE TABLE `media_status` (
  `media_status_id` int(11) NOT NULL,
  `media_status_desc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media_status`
--

INSERT INTO `media_status` (`media_status_id`, `media_status_desc`) VALUES
(1, 'Available'),
(2, 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisher_address` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_address`, `size`) VALUES
(1, 'Big Book Publisher', 'Big Street 128/B', 'Big'),
(2, 'Small Book Publisher', 'Small Street 23', 'Small'),
(3, 'Rich CD Publisher', 'Rich Street 78', 'Big'),
(4, 'Poor CD Publisher', 'Poor Street 17', 'Small'),
(5, 'Amazing DVD Publisher', 'Amazing Street 111', 'Big'),
(6, 'General DVD Publisher', 'General Street 36', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`),
  ADD KEY `fk_author_id` (`fk_author_id`),
  ADD KEY `fk_media_status_id` (`fk_media_status_id`);

--
-- Indexes for table `media_status`
--
ALTER TABLE `media_status`
  ADD PRIMARY KEY (`media_status_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `media_status`
--
ALTER TABLE `media_status`
  MODIFY `media_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`);

--
-- Constraints for table `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_ibfk_1` FOREIGN KEY (`fk_author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `library_ibfk_2` FOREIGN KEY (`fk_media_status_id`) REFERENCES `media_status` (`media_status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
