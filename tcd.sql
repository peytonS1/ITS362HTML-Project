-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 09:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `basketball`
--

CREATE TABLE `basketball` (
  `cardID` int(11) NOT NULL,
  `cardName` varchar(255) NOT NULL,
  `cardSet` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basketball`
--

INSERT INTO `basketball` (`cardID`, `cardName`, `cardSet`, `description`) VALUES
(1, '1986 Fleer Michael Jordan (#57)', '1986 FLEER', 'The most high value Michael Jordan basketball card is this rookie card from 1986.'),
(2, 'Fusion–Titanium Shaquille O’Neal (#19/40)', '1998-99 SkyBox Molten Metal', 'This beautifl card is worth a lot of money ($28,800) to collectors and is quite litterally one of a kind.'),
(3, 'Stephen Curry Golden State Warriors RC Rookie Card (#321)', '2009-10 Topps', 'Everyone knows Stephen Curry these days and this rookie card of Stephen Curry might one day be wroth more than Michael Jordan rookie cards.'),
(4, 'LeBron James (#129)', '2019 Panini Prizm', 'Lebron James is one of the most talented basketball players to ever exist. There will be plenty of his cards being made down the road for a very long time.'),
(5, 'Larry Bird (#26)', '2012-13 Panini Contenders Rookie Remembrance', 'This card is by far not one of the highly saught basketball cards out there but it is a beautiful card of the greatest white basketball player to ever live.'),
(6, 'Kobe Bryant Rookie (#30)', '1996-97 Skybox', 'Kobe Bryant was also one of the greatest basketball players to ever live and after is accidental death his signiture rose to the top in collectables. Mamba Out.'),
(7, 'Kevin Durant Rookie (#112)', '2007-08 Topps', 'Kevin Durant Rookie card is well worth its value. Even as a rookie he never smiled.'),
(8, 'Giannis Antetokounmpo (#290)', '2013 Panini Prizm', 'Giannis is one of the rising stars in our erra and one day these cards will be worth more than most.'),
(9, 'Scottie Pippen (#389)', '1992 Topps Gold', 'Scottie was always a guy in Michael Jordans shadow but realistically Scottie was also a super star player just like Michael.'),
(10, 'Charles Barkley (#294)', '1995 Skybox Premium', 'Charles Barkley was one of the great centers of his era. If not for Shaq joining the NBA and taking the spot light, Charles would have been the top dawg.');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `cardID` int(11) NOT NULL,
  `cardName` varchar(255) NOT NULL,
  `cardSet` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`cardID`, `cardName`, `cardSet`, `description`) VALUES
(1, 'Mewtwo GG44/GG70', 'Crown Zenith', 'This beautiful card was introduced in the spring of 2023 and is one of the most saught after cards in the set.'),
(2, 'Gardevoir EX 245/198', 'Scarlet & Violet', 'This colorful card is apart of the newest set introduced in April 2023.'),
(3, 'Gyarados EX 045/198', 'Scarlet & Violet', 'Like most sea cratures of the deep, this blue card beautiful and one of a kind.'),
(4, 'Charizard VSTAR (Secret 174/172)', 'Brilliant Stars', 'This card is beautiful for collectors. This secret rare rainbow charizard is a hot card on the market for anyone collecting Pokemon.'),
(5, 'Blastois (1st Edition 2/102)', 'Base Set', 'One of the most iconic pokemon to ever exist is Blastois. This is because of this card right here being apart of the first English Pokemon cards printed in 1999.'),
(6, 'Pikachu (1st Edition 58/102)', 'Base Set', 'Pikachu is the face of Pokemon most people could agree with. Pikachus journey started in the Base Set introduced in 1999.'),
(7, 'Regigigas EX (99/99)', 'Next Destinies', 'Is it a tower? Is it a skyscraper? Nope, its Regigigas!'),
(8, 'Charizard VMAX (SV107/SV122)', 'Shining Fates', 'Charizard VMAX is one of the most powerful Charizard cards of the Sword & Shield era.'),
(9, 'Houndoom EX (21/162)', 'Break Through', 'This card was apart of the Break Through series and was one of the most saught after cards of the time.'),
(10, 'Acreus V Alternate Art (166/172)', 'Briliant Stars', 'One of the most majestic cards ever created. This artwork makes this card worth money and is valuable to the colector.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `rpassword` int(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `rpassword`, `date`) VALUES
(4, '', 0, 0, '2023-04-26 11:28:50'),
(5, 'psyrovatka1@gmail.com', 0, 0, '2023-04-26 11:33:31'),
(6, 'psyrovatka@gmail.com', 0, 0, '2023-04-26 14:23:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basketball`
--
ALTER TABLE `basketball`
  ADD PRIMARY KEY (`cardID`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`cardID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
