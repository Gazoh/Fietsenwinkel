-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 jun 2019 om 12:40
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccgdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bikes`
--

CREATE TABLE `bikes` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand` varchar(50) COLLATE utf8_bin NOT NULL,
  `color` varchar(50) COLLATE utf8_bin NOT NULL,
  `framenumber` varchar(50) COLLATE utf8_bin NOT NULL,
  `damaged` tinyint(4) NOT NULL,
  `bikename` text COLLATE utf8_bin NOT NULL,
  `biketype` int(11) NOT NULL,
  `gears` int(11) NOT NULL,
  `selling_price` float NOT NULL,
  `description` varchar(10000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `bikes`
--

INSERT INTO `bikes` (`id`, `image_path`, `brand`, `color`, `framenumber`, `damaged`, `bikename`, `biketype`, `gears`, `selling_price`, `description`) VALUES
(1, 'kanker', 'Gazelle', 'Zwart', 'GZ0316026', 1, 'Orange C7+', 1, 7, 555.5, ''),
(5, '', 'aa', 'Rood', '0', 0, 'a', 0, 2, 600, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `adress` varchar(60) COLLATE utf8_bin NOT NULL,
  `house_number` varchar(4) COLLATE utf8_bin NOT NULL,
  `city` varchar(45) COLLATE utf8_bin NOT NULL,
  `zip_code` varchar(6) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `email_verified` tinyint(1) NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_me` varchar(80) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `customers`
--

INSERT INTO `customers` (`id`, `username`, `first_name`, `last_name`, `adress`, `house_number`, `city`, `zip_code`, `email`, `email_verified`, `phone`, `password`, `register_date`, `remember_me`, `last_login`) VALUES
(1, '', 'Batuhan', 'Beyogullari', '', '', '', '', 'bthbygl@icloud.com', 0, '', '$2y$10$bxFgnpia2XRgmMr1bBBrW.GkLSpO8YsnnI7i0x79Unft2ydcz5epG', '2019-06-17 11:51:54', '9720cdae18b281aea303320548a47371', '2019-06-27 11:52:08'),
(2, '', 'Cem', 'Serin', '', '', '', '', 'cem@gazoh.net', 0, '', '$2y$10$bJ0nHIyd.Y8wP/nwavihC.8LPQHHvn.gq6SJjcPzhrCcr.bjHaWUa', '2019-06-17 11:52:30', '3f264076a6b7081503549f129dc8c11f', '2019-06-17 12:54:54');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `discount_codes`
--

CREATE TABLE `discount_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(40) COLLATE utf8_bin NOT NULL,
  `amount` double NOT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `discount_codes`
--

INSERT INTO `discount_codes` (`id`, `code`, `amount`, `is_valid`, `creation_date`, `expiry_date`) VALUES
(1, 'KORTING50', 50, 1, '2019-06-13 15:34:02', '2019-06-22 13:18:17');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `adress` varchar(60) COLLATE utf8_bin NOT NULL,
  `city` varchar(45) COLLATE utf8_bin NOT NULL,
  `zip_code` varchar(6) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `email_verified` tinyint(1) NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `invite_code` varchar(40) COLLATE utf8_bin NOT NULL,
  `register_date` datetime NOT NULL,
  `remember_me` varchar(80) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `employees`
--

INSERT INTO `employees` (`id`, `username`, `first_name`, `last_name`, `adress`, `city`, `zip_code`, `email`, `email_verified`, `phone`, `password`, `invite_code`, `register_date`, `remember_me`, `last_login`) VALUES
(1, 'batubeyogullari', 'Batuhan', 'Beyogullari', '', '', '', 'batubeyogullari@gmail.com', 0, '640149721', '$2y$10$ZQmFwgmWmxnF2Qwa5JOmRuBHuP4lSPHV1qhI6fiLz2WXNhS6a4g0C', '', '2019-06-13 14:56:35', '67a1c44b9ffbb6dac9700ba73d360508', '2019-06-24 13:22:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(60) COLLATE utf8_bin NOT NULL,
  `description` varchar(10000) COLLATE utf8_bin NOT NULL,
  `date_sent` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `description`, `date_sent`, `status`) VALUES
(1, 'Testbericht', 'eerste bericht test', '2019-06-24 12:43:28', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `totalamount` float NOT NULL,
  `payment_method` varchar(40) COLLATE utf8_bin NOT NULL,
  `order_paid` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_bikes`
--

CREATE TABLE `order_bikes` (
  `orderid` int(11) NOT NULL,
  `bikeid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `title` varchar(60) COLLATE utf8_bin NOT NULL,
  `description` varchar(800) COLLATE utf8_bin NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`review_id`, `title`, `description`, `rating`, `user_id`, `bike_id`, `post_date`) VALUES
(1, 'Zeer goede fiets', 'KANKER ENGE FIETS NIFFO', 5, 2, 1, '2019-06-25 18:44:50'),
(2, 'Slechte fiets', 'ayip wollah', 1, 1, 1, '2019-06-25 18:56:34');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `discount_codes`
--
ALTER TABLE `discount_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`,`customer_id`);

--
-- Indexen voor tabel `order_bikes`
--
ALTER TABLE `order_bikes`
  ADD PRIMARY KEY (`orderid`,`bikeid`),
  ADD KEY `bikeid` (`bikeid`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `discount_codes`
--
ALTER TABLE `discount_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `order_bikes`
--
ALTER TABLE `order_bikes`
  ADD CONSTRAINT `order_bikes_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_bikes_ibfk_2` FOREIGN KEY (`bikeid`) REFERENCES `bikes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
