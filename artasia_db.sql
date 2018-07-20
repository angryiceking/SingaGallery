-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 09:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artasia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_desc` varchar(999) NOT NULL,
  `blog_created_date` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `art_id` int(11) NOT NULL,
  `comment` varchar(999) NOT NULL,
  `time_log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `art_id`, `comment`, `time_log`) VALUES
(92, 1, 1, 'heyo', '2018-07-19 09:46:43'),
(93, 1, 1, 'heyo', '2018-07-19 09:46:44'),
(94, 1, 1, 'nice one dude', '2018-07-19 09:46:50'),
(95, 1, 1, 'good gallery art, recommended!', '2018-07-19 09:47:02'),
(96, 2, 2, 'oh nice', '2018-07-19 09:47:10'),
(97, 2, 2, 'what a nice art', '2018-07-19 09:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_desc` varchar(999) NOT NULL,
  `event_img` varchar(999) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_due_date` varchar(255) NOT NULL,
  `event_author` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `status` varchar(500) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `rank` varchar(25) NOT NULL,
  `reference_links` int(11) NOT NULL,
  `reference_id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `date_added`, `title`, `description`, `size`, `medium`, `price`, `artist`, `status`, `notes`, `rank`, `reference_links`, `reference_id`, `contact`, `email`) VALUES
(1, 'carl-picasso-lost-for-words.jpg', '', 'Lost for Words', 'The lost of words.. this potrait was finished by the famous Filipino painter Carl Picasso. It symbolizes the lost of words due to unexpected event that makes someone be lost at words', '62cm x 92cm (24 in x 36 in), without frame', 'Oil on Canvas', '$125', 'Carl Picasso', 'on shelf', 'ships from overseas', '1', 0, 0, '', ''),
(2, 'carl-picasso-unconditional-love.jpg', '', 'Unconditional Love', 'This painting describes that every mother gives unconditional love in any species. The mother dog potrayed are sample of how caring mothers can be', '89cm x 89cm (35 in x 35 in), with frame', 'Mixed media (oil and acrylic on canvas)', '$300', 'Carl Picasso', 'on shelf', 'on local suppliers', '2', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `art_id` int(255) NOT NULL,
  `like_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `art_id`, `like_desc`) VALUES
(26, 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(150) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `last_logout` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `contact_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nickname`, `email`, `last_login`, `last_logout`, `type`, `img`, `contact_num`) VALUES
(1, 'carljshra', 'password', 'King', 'c.almayda09@gmail.com', '', '', 'user', '', 0),
(2, 'administrator', 'administrator', 'Ultimate Administrator', 'admin.email@gmail.com', '', '', 'admin', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
