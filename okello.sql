-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okello`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`) VALUES
(8, 'kevin', './images/IGITERANE - Made with PosterMyWall.jpg'),
(9, 'sam', './images/IGITERANE - Made with PosterMyWall.jpg'),
(11, 'hellooooooooo', './images/Modern Web Development Services Square (11) - Made with PosterMyWall (1).jpg'),
(12, 'ldkjoehfhouhfjbcuhwfuohwecnivohv', './images/Business Ads - Made with PosterMyWall.jpg'),
(13, 'kjcccvwcvuycgvywc', './images/Modern Web Development Services Square (11) - Made with PosterMyWall (1).jpg'),
(14, 'hey', './images/okello_-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'gatare jean marie', 'okellostudio@gmail.com', 'nfjn', 'hello world\r\n'),
(2, 'ntwari', 'abc@gmail.con', 'report', 'uhfuifhofhillgobvbjbvjbvbveuwevo'),
(3, 'confy', 'confytradings@gmail', 'hiring', 'vamos'),
(4, 'tjeice', 'confytradings@gmail', 'hiring', 'qwertyuiopoijhgfxzZxcvn,nbvcfghjbvcxchxcfcccvcvcvcvcbvcbvdftytretetet'),
(5, 'mugisha kevin', 'abc@gmail.con', 'greetings', 'hello okello hownare you');

-- --------------------------------------------------------

--
-- Table structure for table `nitify`
--

CREATE TABLE `nitify` (
  `image` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `notification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nitify`
--

INSERT INTO `nitify` (`image`, `id`, `title`, `notification`) VALUES
('./images/Business Ads - Made with PosterMyWall.jpg', 11, ';kvlejnvjbvjkebvb ', 'n djbvhbvbvuievwuu'),
('./images/Modern Web Development Services Square (11) - Made with PosterMyWall (1).jpg', 12, 'xnjnsjkdcidvuiv jhjc', 'ndklcnlcnhqeifufwubdjcn cevnhwi');

-- --------------------------------------------------------

--
-- Table structure for table `okello`
--

CREATE TABLE `okello` (
  `id` int(1) NOT NULL,
  `name` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `birth` varchar(250) NOT NULL,
  `website` varchar(200) NOT NULL,
  `phone` int(12) NOT NULL,
  `city` varchar(200) NOT NULL,
  `age` int(10) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `freelance` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `okello`
--

INSERT INTO `okello` (`id`, `name`, `about`, `birth`, `website`, `phone`, `city`, `age`, `degree`, `email`, `freelance`, `password`) VALUES
(1, 'OKELLO Studios', 'A professional photographer is a skilled artist who captures moments and creates images using a camera. They possess a deep understanding of lighting, composition, and technical aspects of photography. With their expertise, they transform ordinary scenes into extraordinary visuals, telling stories and evoking emotions through their work.\r\n\r\nA professional videographer is a skilled artist who uses cameras and editing software to capture and create visually engaging videos. They possess a keen eye for composition and lighting, and understand how to tell a story through moving images. Videographers often work on a variety of projects, such as weddings, corporate events, music videos, and documentaries. They collaborate with clients to understand their vision and then use their technical expertise to bring that vision to life.', '18 / 02 / 2003', '    www.okellostudio.rw', 786026717, ' Kigali , RWANDA', 786026717, ' masters', 'ntwarijosue5@gmail.com', 'booked', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nitify`
--
ALTER TABLE `nitify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `okello`
--
ALTER TABLE `okello`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nitify`
--
ALTER TABLE `nitify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `okello`
--
ALTER TABLE `okello`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
