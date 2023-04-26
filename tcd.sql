-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 11:06 PM
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
-- Table structure for table `baseball`
--

CREATE TABLE `baseball` (
  `cardID` int(11) NOT NULL,
  `cardName` varchar(255) NOT NULL,
  `cardSet` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baseball`
--

INSERT INTO `baseball` (`cardID`, `cardName`, `cardSet`, `description`) VALUES
(1, 'Babe Ruth Baltimore News', '1914', 'Almost a century old, the 1914 Babe Ruth Baltimore News is the most valuable baseball card to invest in. An SGC 3 graded copy sold for an astounding $6m in June 2021, making it the world’s most expensive sports card.'),
(2, 'Mickey Mantle', '1952 Topps', 'The former record holder in terms of value, Mickey Mantle’s 1952 Topps card is one of the most popular collectibles of all time. It’s more valuable than the Mantle Bowman RC from ‘51 and was designed by Woody Gelman and Sy Berger on the kitchen table of B'),
(3, 'Mike Trout Bowman Chrome Draft Prospects Superfractor Autograph', '1/1 2009', 'Think back to the intro and the prerequisites we laid out for any expensive modern card. The 2009 Mike Trout Bowman Chrome Draft Prospects Superfractor just happens to tick every box.'),
(4, 'Honus Wagner T206 The Jumbo Wagner', '1909-11', 'Many of the remaining T206 Honus Wagner cards have achieved low grades on the PSA scale. Only three versions have received a PSA rating of 5 or above, including the ‘Jumbo Wagner’ next on the list.'),
(5, 'Ty Cobb Tobacco T-206 Ty Cobb Back', '1909-11', 'Our list of value baseball cards leads us to Ty Cobb. Also found in the T206 set, this is the fifth card to feature the player known as the ‘Ty Cobb Back’. At first glance, it appears to be a slight variation of the Red Portrait Cobb, virtually identical '),
(6, 'Roberto Clemente', '1955 Topps RC #164', 'Roberto Clemente quickly makes the top ten thanks to an RC which sold for $1.1m. It was sold as part of Goldin Auctions’ Winter Auction 2021.'),
(7, 'Reggie Jackson', '1969 Topps RC #260', 'Another RC to make our list of baseball cards worth money is the 1969 Reggie Jackson Topps release. It recently sold for $1,005,600 at Heritage Auctions’ Winter Platinum Night Sports Auction in Dallas in February 2020.'),
(8, 'Jackie Robinson', '1952 Topps #312', 'Jackie Robinson’s 1952 Topps card might not be an RC, but it’s a key option that was double-printed along with Mickey Mantle and Bobby Thomson.'),
(9, 'Mike Trout Bowman Chrome Draft Red Refractor Autograph', '2009', 'Mike Trout is back again, this time with a card numbered to five. The $922,000 copy was sold as part of Goldin Auctions’ Spring 2020 Premium Auction.'),
(10, 'Eddie Plank', '1909-11 T206', 'Widely regarded as the second most popular in the T206 set, Eddie Plank’s card features a white border and a blue background, similar to the other in-demand portrait cards.');

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

-- --------------------------------------------------------

--
-- Table structure for table `yugioh`
--

CREATE TABLE `yugioh` (
  `cardID` int(11) NOT NULL,
  `cardName` varchar(255) NOT NULL,
  `cardSet` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yugioh`
--

INSERT INTO `yugioh` (`cardID`, `cardName`, `cardSet`, `description`) VALUES
(1, 'Blue-Eyes Ultimate Dragon', '(T3-01)', 'The mightiest monster in Seto Kaibas deck, it took years for the card to be printed in English. Japan, on the other hand, got a version of the card as early as 1999.'),
(2, 'The Vanquishing Warlord', '(WCPS-EN801)', 'Tyr, The Vanquishing Warlord is the rarest and most valuable Prize Card that could be obtained from a Yu-Gi-Oh! World Championship, with Tyr being the prize for the 2008 event.'),
(3, 'Crush Card Virus', '(SJCS-EN004)', 'Crush Card Virus is an infamous card, and for a while was one of the hardest cards to obtain. Used by Kaiba in the original anime, only the winners of the 2007 Shoen Jump Championships could use it in real life.'),
(4, 'Dark Magician', '(DTP1-EN002)', 'The utlimate wizard in terms of attack and defense, Dark Magician is one of the most iconic Yu-Gi-Oh! cards of all time. Despite being a Normal Monster, Dark Magician still sees play in modern Dark Magician decks to this day.'),
(5, 'Des Volstgalph', '(SJC-EN002)', 'A card used by Yugi once in the anime, Des Volstgalph was the prize card for the second-ever Shoen Jump Championships in 2005. Its one of the hardest cards in Yu-Gi-Oh! to find.'),
(6, 'Legendary Magician Of Dark', '(2012-EN002)', 'Is it any surprise that the rarest and most valuable Xyz Monster is a Dark Magician card? Legendary Magician Of Dark was a Prize Card during the tenth Yu-Gi-Oh! World Championships in 2010.'),
(7, 'Legendary Dragon Of White', '(2012-EN001)', 'For a while, the Dark Magician counterpart of this prize card was much more valuable. However, in late 2021 the prizes began evening out, with a giant jump in value when it re-appeared on the market for the first time since 2015 (where it was sold for a m'),
(8, 'Kaiser Eagle, The Heavens Mandate', '(2019-EN001)', 'Kaiser Eagle, The Heavens Mandate was the price card for the prize card for the last World Championship in 2019 before in-person events went on hiatus. While the WCS events are looking to make a return in 2022, the value of Kaiser Eagle, The Heavens Manda'),
(9, 'Stardust Divinity', '(2010-EN001)', 'Despite coming out in 2008, the first Synchro Monster Prize Card wouldnt come out until the 2010 Yu-Gi-Oh! World Championships. Over the years, Stardust Divinity has been sold a few times, with its first appearance on the internet auction scene in 2014.'),
(10, 'Cyber Dragon', '(MF-03-EN009)', 'Back during the GX Anime, a series of toy tie-ins came with it. These were exclusive to the department store Sears and would come with cards of the toy. However, during the release of the third series of these toys, the cards were pulled before the shippi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baseball`
--
ALTER TABLE `baseball`
  ADD PRIMARY KEY (`cardID`);

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
