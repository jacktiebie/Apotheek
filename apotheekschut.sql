-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 mrt 2022 om 10:09
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotheekschut`
--
CREATE DATABASE IF NOT EXISTS `apotheekschut` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `apotheekschut`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aandoeningen`
--

CREATE TABLE `aandoeningen` (
  `ID` int(11) NOT NULL,
  `naam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `aandoeningen`
--

INSERT INTO `aandoeningen` (`ID`, `naam`) VALUES
(2, 'A'),
(3, 'Aambeien'),
(4, 'Aangeboren staar'),
(5, 'B'),
(6, 'Baarmoederhalskanker'),
(7, 'BacteriÃ«le gewrichtsontsteking'),
(8, 'C'),
(9, 'Cannabis'),
(10, 'Cardiomyopathie'),
(11, 'D'),
(12, 'Darmkanker'),
(13, 'Darmonderzoek'),
(14, 'E'),
(15, 'Ebola'),
(16, 'Echo'),
(17, 'F'),
(18, 'Facioscapulohumerale dystrofie'),
(19, 'Fenomeen van Raynaud'),
(20, 'G'),
(21, 'Galstenen'),
(22, 'Ganglion'),
(23, 'H'),
(24, 'Haarnestcyste'),
(25, 'Haartong'),
(26, 'I'),
(27, 'IJzerstapeling'),
(28, 'Insectenbeet'),
(29, 'J'),
(30, 'Jeuk'),
(31, 'Jeuk en zwanger'),
(32, 'K'),
(33, 'Kaalheid bij mannen'),
(34, 'Kaalheid bij vrouwen'),
(35, 'L'),
(36, 'Lachgas'),
(37, 'Lage bloeddruk'),
(38, 'M'),
(39, 'Maagkanker'),
(40, 'Maagklachten'),
(41, 'N'),
(42, 'Nagelriemontsteking'),
(43, 'Narcolepsie'),
(44, 'O'),
(45, 'O- en X-benen bij kinderen'),
(46, 'Omgaan met pijn tijdens de bevalling'),
(47, 'P'),
(48, 'Paniekaanvallen'),
(49, 'Patellofemoraal pijnsyndroom'),
(50, 'Q'),
(51, 'Q-koorts'),
(52, 'R'),
(53, 'Ruggenprik'),
(54, 'Rusteloze benen'),
(55, 'S'),
(56, 'SarcoÃ¯dose'),
(57, 'Schaamlipkanker'),
(58, 'T'),
(59, 'Taaislijmziekte'),
(60, 'Talgkliercyste'),
(61, 'U'),
(62, 'Uitdroging'),
(63, 'Uitpuilende ogen'),
(64, 'V'),
(65, 'Voedselinfectie'),
(66, 'Voetschimmel'),
(67, 'W'),
(68, 'Wormpjes'),
(69, 'Wratten'),
(70, 'Z'),
(71, 'Zenuwen klem in buikwand'),
(72, 'Zweten');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`ID`, `subject`, `img`, `date`, `title`, `subtitle`) VALUES
(1, 'Corona', 'images/news_image.png', '2022-02-01', 'Solskjaer dismisses Klopp comments on Man Utd penalty record', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus lobortis augue condimentum maecenas. Metus at in fames vitae posuere ut vel vulputate ...'),
(2, 'Brand', 'images/news_image.png', '2022-02-01', 'Mevrouw Andy heeft brand gehad in haar huis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus lobortis augue condimentum maecenas. Metus at in fames vitae posuere ut vel vulputate ...'),
(3, 'Corona', 'images/news_image.png', '2022-02-01', 'Solskjaer dismisses Klopp comments on Man Utd penalty record', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus lobortis augue condimentum maecenas. Metus at in fames vitae posuere ut vel vulputate ...'),
(27, '43', '', '0000-00-00', '', ''),
(28, '51', '', '0000-00-00', '', ''),
(29, '7', '', '0000-00-00', '', ''),
(30, '9', '', '0000-00-00', '', ''),
(31, '12', '', '0000-00-00', '', ''),
(32, '1', '', '0000-00-00', '', ''),
(33, '12', '', '0000-00-00', '', ''),
(34, '0', '', '0000-00-00', '', ''),
(35, '9', '', '0000-00-00', '', ''),
(36, '6', '', '0000-00-00', '', ''),
(37, '3', '', '0000-00-00', '', ''),
(38, '0', '', '0000-00-00', '', ''),
(39, '1', '', '0000-00-00', '', ''),
(40, '1', '', '0000-00-00', '', ''),
(41, '2', '', '0000-00-00', '', ''),
(42, '4', '', '0000-00-00', '', ''),
(43, '5', '', '0000-00-00', '', ''),
(44, '6', '', '0000-00-00', '', ''),
(45, '7', '', '0000-00-00', '', ''),
(46, '8', '', '0000-00-00', '', ''),
(47, '13', '', '0000-00-00', '', ''),
(48, '12', '', '0000-00-00', '', ''),
(49, '66', '', '0000-00-00', '', ''),
(50, '7', '', '0000-00-00', '', ''),
(51, '5', '', '0000-00-00', '', ''),
(52, '2', '', '0000-00-00', '', ''),
(53, '0', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `created`, `status`) VALUES
(1, '', 'Paracetamol 250mg', 'Dit is een paracetamol 250mg ', 100.00, '2022-03-17 15:08:04', 1),
(2, 'hoi', 'wewe', 'wewewe', 10.00, '2022-03-17 15:28:43', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersName` text NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` text NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(7, 'Jack', 'jacktiebie45@gmail.com', 'jackt', '$2y$10$EVJ6KWAbWUe7BiL8sWvej.MG0wpO2RK6RBAEhzbAlsEAsDhrmpPTG'),
(8, 'Jack Tiebie', '256251@cursist.rockopnh.nl', 'Jack', '$2y$10$2Clyvt6xgFp6wkSgEkAsiOYtOdYJmPGcN9hezUsroqesz7t8a0Uva');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aandoeningen`
--
ALTER TABLE `aandoeningen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aandoeningen`
--
ALTER TABLE `aandoeningen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT voor een tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
