-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `dailyvirdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(30) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `id_video` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `post_time`, `id_user`, `comment`, `id_video`) VALUES
(6, '2022-06-25 18:40:21', 'DailyViR', 'We highly reccomend this!', '722602885'),
(46, '2022-06-26 12:33:46', 'admin', 'a', '722602885'),
(47, '2022-06-26 12:34:51', 'admin', 'a', '722602885'),
(56, '2022-06-27 11:48:12', 'DailyViR', 'I really like this new comment style!', '715841302');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id_user` text COLLATE utf8_unicode_ci NOT NULL,
  `id_video` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id_user`, `id_video`, `title`) VALUES
('razvan', '690017366', '690017366'),
('DailyViR', '722602885', 'The Tunnel'),
('Razvan', '715841302', 'The Rabbit Hole'),
('admin', '722602885', 'The Tunnel'),
('DailyViR', '715841302', 'The Rabbit Hole'),
('admin', '715841302', 'The Rabbit Hole');

-- --------------------------------------------------------

--
-- Table structure for table `statistcs`
--

CREATE TABLE `statistcs` (
  `id_video` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `male_views` int(11) NOT NULL,
  `female_views` int(11) NOT NULL,
  `binary_views` int(11) NOT NULL,
  `others_views` int(11) NOT NULL,
  `today_views` int(11) NOT NULL,
  `dateToday` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statistcs`
--

INSERT INTO `statistcs` (`id_video`, `views`, `male_views`, `female_views`, `binary_views`, `others_views`, `today_views`, `dateToday`) VALUES
('722602885', 73, 64, 0, 0, 7, 0, '2022-06-25'),
('715841302', 378, 319, 0, 0, 47, 0, '2022-06-25'),
('713742301', 4, 0, 0, 0, 4, 0, '2022-06-27'),
('716651419', 0, 0, 0, 0, 0, 0, '2022-06-27'),
('701954773', 2, 1, 0, 0, 1, 0, '2022-06-27'),
('250959576', 11, 1, 0, 0, 10, 0, '2022-06-27'),
('720569971', 0, 0, 0, 0, 0, 0, '2022-06-27'),
('719182720', 1, 0, 0, 0, 1, 0, '2022-06-27'),
('673215931', 2, 0, 0, 0, 2, 0, '2022-06-27'),
('665179690', 1, 0, 0, 0, 1, 0, '2022-06-27'),
('447067692', 5, 0, 0, 0, 5, 0, '2022-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fav_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `gender`, `email`, `password`, `country`, `fav_cat`) VALUES
('admin', 'Male', 'DailyVirAdmin@gmail.com', 'parolaadmin1', 'Romania', 1),
('Andreea', 'Female', 'andreea@gmail.com', 'parola', 'Austria', 0),
('andrei', 'Male', 'andrei@email.com', 'parola', 'America', 1),
('Catalina', 'Female', 'Catalina@email.com', 'parola1', 'Romania', 0),
('DailyViR', 'Other', 'DailyViR@gmail.com', 'parolanoua', 'Romania', 0),
('razvan', 'Male', 'razvan@email.com', 'aaaaa', 'Romania', 1),
('rss', 'Other', 'rss@rss.com', 'rss', 'Albania', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comment_count` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `comment_count`, `views`, `category`, `upload_date`, `tags`, `title`, `description`, `id_user`) VALUES
('250959576', 0, 11, 'Music', '2022-06-27 16:07:49', 'video', 'Ici, là et partout', 'Love for all humanity', 'DailyViR'),
('447067692', 0, 5, 'Animation', '2022-06-27 13:21:04', 'video', 'Brontosaurus', 'Official Selection: True/False Film Festival Nashville Film Festival Florida Film Festival Philadelphia Film Festival Cucalorus Film Festival NoBudge', 'DailyViR'),
('665179690', 0, 1, 'Music', '2022-06-27 13:00:45', 'video', 'KANYE WEST x GAP | Arnaud Bresson | DIVISION', 'Kanye West x Gap | Heaven & Hell • Directed by Arnaud Bresson • Produced by DIVISION • Post by Mikros MPC', 'DailyViR'),
('673215931', 0, 2, 'Music', '2022-06-27 11:58:29', 'video', 'HUGO BOSS | Marco Prestini | DIVISION', 'HUGO BOSS | The Scent • Directed by Marco Prestini • Produced by DIVISION • Post by Nightshift • CGI by Machine Molle Studio', 'DailyViR'),
('701954773', 0, 2, '', '2022-06-27 11:12:19', 'video', '', '', 'rss'),
('713742301', 0, 4, '713742301', '2022-06-26 21:27:41', 'video', '713742301', '713742301', 'rss'),
('715841302', 48, 375, 'Movie', '2022-06-27 16:07:52', 'video', 'The Rabbit Hole', 'Two sisters are faced with the grim reality of what it takes to make their dream come true. (*This is a film depicting the realities of trafficking. Viewer discretion is advised.) ', 'Razvan'),
('716651419', 0, 0, '', '2022-06-26 21:22:21', 'video', '', '', 'rss'),
('719182720', 0, 1, 'Music', '2022-06-27 15:04:45', 'video', 'PHARRELL WILLIAMS ft. 21 SAVAGE, TYLER, THE CREATOR | François Rousselet | DIVISION', 'PHARRELL WILLIAMS FT. 21 SAVAGE, TYLER, THE CREATOR | Cash In Cash Out • Directed by François Rousselet • Produced by DIVISION • VFX by ETC', 'DailyViR'),
('720569971', 0, 0, 'Music', '2022-06-27 11:30:38', 'video', 'Video Matters - June Issue', 'A monthly selection of brilliant videos from across the Vimeo community.', 'DailyViR'),
('722602885', 3, 131, 'Movie', '2022-06-27 15:18:39', 'video', 'The Tunnel', 'Three refugees run the race of their lives from Calais to Dover through the Euro Tunnel, trying to beat the trains and overcome their terror in a bid to reach freedom and start new lives in the UK. Based on true accounts.', 'DailyViR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `statistcs`
--
ALTER TABLE `statistcs`
  ADD KEY `id_video_statistics` (`id_video`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `statistcs`
--
ALTER TABLE `statistcs`
  ADD CONSTRAINT `id_video_statistics` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`);
COMMIT;
