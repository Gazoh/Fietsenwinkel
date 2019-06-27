-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 jun 2019 om 12:47
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

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
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `selling_price` float NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `bikes`
--

INSERT INTO `bikes` (`id`, `image_path`, `brand`, `color`, `framenumber`, `damaged`, `bikename`, `biketype`, `gears`, `description`, `selling_price`, `date_added`) VALUES
(1, 'assets/img/bike.png', 'Gazelle', 'Zwart', 'GZ0316026', 1, 'Orange C7+', 1, 7, 'Miauw nigga', 555.5, '2019-05-02'),
(2, 'assets/img/bike.png', 'Batavus', 'White', 'GZ465846', 1, 'Batavus', 1, 7, '', 745.5, '2019-05-12'),
(3, 'assets/img/bike.png', 'Slayer', 'black', 'nce8nce', 0, 'Aap', 2, 7, '', 666, '2019-06-02'),
(4, 'assets/img/bike.png', 'kenker', 'black', 'dubget', 0, 'Arnold', 3, 7, '', 200, '2019-06-22'),
(5, 'assets/img/bike_men.png', 'Cortina', 'Zwart', '6924849', 0, 'Dikke fiets', 2, 3, '', 145, '2019-06-27'),
(6, 'assets/img/bike_men.png', 'TEST', 'Zwart', 'EALDKALD', 1, 'Cem', 0, 7, '', 599, '0000-00-00'),
(7, '', '', '', '', 0, '', 0, 0, '', 0, '0000-00-00'),
(8, '', '', '', '', 0, '', 0, 0, 'kasadkjakdas', 0, '0000-00-00'),
(9, 'assets/img/bike_men.png', 'Kaasdkad', 'Zwart', 'kadjkajskdja', 1, 'Cem', 0, 7, 'asdkasdsdfkds;lk;f;kf;lsdk;flk;fldsfklsdfjadklajdlkj', 599, '0000-00-00'),
(10, '', '', '', '', 0, 'Batu', 0, 0, 'jasdaksdkajsjkasjdakdjakd', 0, '0000-00-00');

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
(1, '', 'Cem', 'Serin', 'kaas 12', '', 'Cemstad', '6904ep', 'kaas@kaas.nl', 0, '', '$2y$10$oAg8N/bizep.OszQ3wgGnuulgXGot9F41D07oetMr/T5bbO5N9rQC', '2019-06-27 12:43:50', '806836d4f45df046b9ee609ae90a8d29', '2019-06-27 12:45:13'),
(2, '', 'Cem', 'Serin', 'kaas 12', '8', 'Cemstad', '6904ep', 'kaas@kaas.nl', 0, '', '$2y$10$0eFjy7VjQkS99L/D3ZUaHu47G/tEIiWvI6TKqQ8G9p7EvggE.ABVe', '2019-06-27 12:44:03', '806836d4f45df046b9ee609ae90a8d29', '2019-06-27 12:45:13');

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
  `phone` int(11) NOT NULL,
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
(1, 'batubeyogullari', 'Batuhan', 'Beyogullari', '', '', '', 'batubeyogullari@gmail.com', 0, 640149721, '$2y$10$ZQmFwgmWmxnF2Qwa5JOmRuBHuP4lSPHV1qhI6fiLz2WXNhS6a4g0C', '', '2019-06-13 14:56:35', 'd3564f32823d8885704b35818529d5bd', '2019-06-13 14:58:06');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletter_receivers`
--

CREATE TABLE `newsletter_receivers` (
  `receiver_id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `newsletter_receivers`
--

INSERT INTO `newsletter_receivers` (`receiver_id`, `email`) VALUES
(1, 'slayer@eh.nl');

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
  `title` varchar(50) NOT NULL,
  `stars` int(5) NOT NULL,
  `content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`review_id`, `title`, `stars`, `content`) VALUES
(1, 'Een fiets van chocolade!', 4, 'Ik had 3 fietsen bestelt, maar ik kreeg er maar 2 binnen op de lever datum! Nadat ik contact had opgenomen met de service kreeg ik de volgende dag de fiets binnen, met een sorry pakket! Dit is netjes behandeld en de fiets chocolaatjes waren zeer lekker!'),
(2, 'Beste service!', 5, 'Ik had een fiets bestelt die over 2 weken zou binnenkomen. Ik werd de dag er na gebeld dat die al binnen was en dat ze hem graag vandaag nog zouden leveren! De fiets werd zoals afgesproken om 14:30 geleverd! Wat een top service!'),
(3, 'Service probleem is net opgelost', 3, 'De fiets kwam 2 dagen te laat met een briefje er op geplakt en een kras! De fiets werkt goed en ze zijn speciaal langsgekomen om de kras weg te halen ook al was die ontstaan tijdens tijdens de bezorging! De service kan nog beter maar ik zou hier zo meer fieten bestellen!');

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
-- Indexen voor tabel `newsletter_receivers`
--
ALTER TABLE `newsletter_receivers`
  ADD PRIMARY KEY (`receiver_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT voor een tabel `newsletter_receivers`
--
ALTER TABLE `newsletter_receivers`
  MODIFY `receiver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
