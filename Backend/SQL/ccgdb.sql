-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mei 2019 om 13:06
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
  `selling_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `bikes`
--

INSERT INTO `bikes` (`id`, `image_path`, `brand`, `color`, `framenumber`, `damaged`, `bikename`, `biketype`, `gears`, `selling_price`) VALUES
(1, '', 'Gazelle', 'Zwart', 'GZ0316026', 1, 'Orange C7+', 1, 7, 555.5);

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
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `role` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `email` varchar(75) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `register_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_me` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `first_name`, `last_name`, `phone`, `email`, `password`, `email_verified`, `last_login`, `register_date`, `remember_me`) VALUES
(1, 'bthbygl', 1, 'Batu', 'Beyogullari', '0640149721', 'bthbygl@icloud.com', '', 1, '2019-05-13 11:17:53', '2019-05-13 11:03:26', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bikes`
--
ALTER TABLE `bikes`
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
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
