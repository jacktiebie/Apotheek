-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 mrt 2022 om 20:07
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
-- Tabelstructuur voor tabel `medicines`
--

CREATE TABLE `medicines` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `medicines`
--

INSERT INTO `medicines` (`ID`, `name`, `quantity`, `price`, `description`) VALUES
(1, 'Paracetamol 250mg', 994, 10, ''),
(2, 'Aspirine', 245, 0, ''),
(3, 'Metformine', 90, 0, ''),
(4, 'Karbasalaat Ascal', 12, 0, ''),
(5, 'Diclofenac', 35, 0, ''),
(6, 'Paracetamol 500mg', 54, 50, 'hoi'),
(7, 'Ibuprofen 500mg', 12, 0, ''),
(8, 'Ibuprofen 600mg', 61, 0, ''),
(9, 'Amoxicilline', 88, 0, ''),
(10, 'Omeprazol', 77, 0, ''),
(11, 'Doxycycline', 37, 0, ''),
(12, 'Metoprolol', 9, 0, ''),
(13, 'Salbutamol', 12, 0, ''),
(14, 'Medicijn 1', 54, 0, ''),
(15, 'Medicijn 2', 23, 0, ''),
(16, 'Medicijn 3', 56, 0, ''),
(17, 'Medicijn 4', 8, 0, ''),
(18, 'Medicijn 5', 9, 0, ''),
(19, 'Medicijn 6', 5, 0, ''),
(20, 'Medicijn 7', 20, 0, ''),
(21, 'Medicijn 8', 12, 0, ''),
(22, 'Medicijn 9', 55, 0, ''),
(23, 'Medicijn 10', 43, 0, ''),
(24, 'Medicijn 11', 51, 0, ''),
(25, 'Medicijn 12', 7, 0, ''),
(26, 'Medicijn 13', 9, 0, ''),
(27, 'Medicijn 14', 12, 0, ''),
(28, 'Medicijn 15', 1, 0, ''),
(29, 'Medicijn 16', 12, 0, ''),
(30, 'Medicijn 17', 0, 0, ''),
(31, 'Medicijn 18', 9, 0, ''),
(32, 'Medicijn 19', 6, 0, ''),
(33, 'Medicijn 20', 3, 0, ''),
(34, 'Medicijn 21', 0, 0, ''),
(35, 'Medicijn 22', 1, 0, ''),
(36, 'Medicijn 23', 1, 0, ''),
(37, 'Medicijn 24', 2, 0, ''),
(38, 'Medicijn 25', 4, 0, ''),
(39, 'Medicijn 26', 5, 0, ''),
(40, 'Medicijn 27', 6, 0, ''),
(41, 'Medicijn 28', 7, 0, ''),
(42, 'Medicijn 29', 8, 0, ''),
(43, 'Medicijn 30', 13, 0, ''),
(44, 'Medicijn 31', 12, 0, ''),
(45, 'Medicijn 32', 66, 0, ''),
(46, 'Medicijn 33', 7, 0, ''),
(47, 'Medicijn 34', 5, 0, ''),
(48, 'Medicijn 35', 2, 0, ''),
(49, 'Medicijn 36', 0, 0, ''),
(50, 'Test', 44, 30, 'Hey');

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
(54, 'shayn', 'images/news/shajn', '1999-09-05', 'Hey', 'Welcome to my fortnite account');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_details`
--

CREATE TABLE `order_details` (
  `ID` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `shipped` tinytext NOT NULL DEFAULT '0' COMMENT '1 = Shipped\r\n0 = Not Shipped',
  `tracking_number` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `order_details`
--

INSERT INTO `order_details` (`ID`, `users_id`, `total`, `shipped`, `tracking_number`, `created_at`, `modified_at`) VALUES
(1, 14, '90', '0', '', '2022-03-29 12:16:32', '2022-03-29 12:16:32'),
(2, 14, '30', '0', '', '2022-03-29 12:41:42', '2022-03-29 12:41:42'),
(3, 14, '30', '0', '', '2022-03-29 13:14:03', '2022-03-29 13:14:03');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_items`
--

CREATE TABLE `order_items` (
  `ID` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `order_items`
--

INSERT INTO `order_items` (`ID`, `order_id`, `product_id`, `quantity`, `created_at`, `modified_at`) VALUES
(1, 1, 1, 1, '2022-03-29 12:16:32', '2022-03-29 12:16:32'),
(2, 1, 50, 1, '2022-03-29 12:16:32', '2022-03-29 12:16:32'),
(3, 1, 6, 1, '2022-03-29 12:16:32', '2022-03-29 12:16:32'),
(4, 1, 5, 1, '2022-03-29 12:16:32', '2022-03-29 12:16:32'),
(5, 2, 50, 1, '2022-03-29 12:41:42', '2022-03-29 12:41:42'),
(6, 3, 20, 1, '2022-03-29 13:14:03', '2022-03-29 13:14:03'),
(7, 3, 50, 1, '2022-03-29 13:14:03', '2022-03-29 13:14:03'),
(8, 3, 2, 1, '2022-03-29 13:14:03', '2022-03-29 13:14:03');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `payment_details`
--

CREATE TABLE `payment_details` (
  `ID` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `provider` int(11) NOT NULL,
  `status` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `usersName` text NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` text NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(7, 'meow', 'meow@gmail.com', 'meowmeoww', '$2y$10$EVJ6KWAbWUe7BiL8sWvej.MG0wpO2RK6RBAEhzbAlsEAsDhrmpPTG'),
(8, 'Jack Tiebie', '256251@cursist.rockopnh.nl', 'Jackaa', '$2y$10$2Clyvt6xgFp6wkSgEkAsiOYtOdYJmPGcN9hezUsroqesz7t8a0Uva'),
(9, 'Jason Zuk', 'jasonzuk@gmai.com', 'jason', '$2y$10$vTtLHAPvrLdmeyBa4rd8XOQam6/BPUhRYJZ1hZIJrvQeIwUkC.dZy'),
(14, 'Jack Tiebie', 'jacktiebie@gmail.com', 'uuu', '$2y$10$66oZ08uSAT8HBu1x.fjDn.wPoOmZ1a9rw/IpVMrSTaCvENtVZB5V6');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users_address`
--

CREATE TABLE `users_address` (
  `ID` int(11) NOT NULL,
  `users_ID` int(11) NOT NULL,
  `adress_line` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` varchar(6) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users_address`
--

INSERT INTO `users_address` (`ID`, `users_ID`, `adress_line`, `city`, `postal_code`, `country`) VALUES
(27, 14, 'Molenvaart, 34', 'Anna Paulowna', '1761AJ', 'Nederland');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aandoeningen`
--
ALTER TABLE `aandoeningen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `order_details_ibfk_1` (`users_id`);

--
-- Indexen voor tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_items_ibfk_1` (`order_id`);

--
-- Indexen voor tabel `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexen voor tabel `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users_address`
--
ALTER TABLE `users_address`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `users_address_ibfk_1` (`users_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aandoeningen`
--
ALTER TABLE `aandoeningen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT voor een tabel `medicines`
--
ALTER TABLE `medicines`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT voor een tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `users_address`
--
ALTER TABLE `users_address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `medicines` (`ID`);

--
-- Beperkingen voor tabel `users_address`
--
ALTER TABLE `users_address`
  ADD CONSTRAINT `users_address_ibfk_1` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
