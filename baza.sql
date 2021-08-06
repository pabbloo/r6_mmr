-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 06 Sie 2021, 17:48
-- Wersja serwera: 5.7.33-0ubuntu0.18.04.1
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `aktualizacja`
--

CREATE TABLE `aktualizacja` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `wersja` varchar(250) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kucyk12PL`
--

CREATE TABLE `kucyk12PL` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mmr` int(11) NOT NULL,
  `ch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kucyk12PL`
--

INSERT INTO `kucyk12PL` (`id`, `data`, `mmr`, `ch`) VALUES
(1, '2021-06-14 16:06:03', 2556, 0),
(2, '2021-06-19 00:29:15', 2556, 0),
(3, '2021-06-19 02:29:07', 2556, 0),
(4, '2021-06-20 02:18:01', 2816, 132),
(5, '2021-06-20 22:46:52', 2816, 132),
(6, '2021-06-22 18:30:57', 2827, -124),
(7, '2021-06-24 23:37:33', 2827, -124),
(8, '2021-06-27 00:49:17', 2827, -124),
(9, '2021-07-03 01:44:30', 2829, 125),
(10, '2021-07-17 23:22:37', 2706, -123),
(11, '2021-07-25 21:54:45', 2827, 121),
(12, '2021-07-28 16:37:57', 2827, 121),
(13, '2021-07-29 20:30:19', 2712, -115);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `maIcher8`
--

CREATE TABLE `maIcher8` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mmr` int(11) NOT NULL,
  `ch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `maIcher8`
--

INSERT INTO `maIcher8` (`id`, `data`, `mmr`, `ch`) VALUES
(1, '2021-06-14 16:06:03', 2759, 0),
(2, '2021-06-19 00:29:15', 2892, 133),
(3, '2021-06-19 02:29:07', 2769, -123),
(4, '2021-06-20 02:18:01', 2885, 120),
(5, '2021-06-20 22:46:52', 2885, 120),
(6, '2021-06-22 18:30:57', 2894, -114),
(7, '2021-06-24 23:37:33', 2894, -114),
(8, '2021-06-27 00:49:17', 2894, -114),
(9, '2021-07-03 01:44:30', 2897, 116),
(10, '2021-07-17 23:22:37', 2783, -114),
(11, '2021-07-25 21:54:45', 2895, 112),
(12, '2021-07-28 16:37:57', 2895, 112),
(13, '2021-07-29 20:30:19', 2789, -106);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pabbloo13`
--

CREATE TABLE `pabbloo13` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mmr` int(11) NOT NULL,
  `ch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pabbloo13`
--

INSERT INTO `pabbloo13` (`id`, `data`, `mmr`, `ch`) VALUES
(1, '2021-06-14 16:06:03', 2749, 0),
(2, '2021-06-19 00:29:15', 2882, 133),
(3, '2021-06-19 02:29:07', 2758, -124),
(4, '2021-06-20 02:18:01', 2875, 121),
(5, '2021-06-20 22:46:52', 2875, 121),
(6, '2021-06-22 18:30:57', 2884, -113),
(7, '2021-06-24 23:37:33', 2884, -113),
(8, '2021-06-27 00:49:17', 2884, -113),
(9, '2021-07-03 01:44:30', 2887, 116),
(10, '2021-07-17 23:22:37', 2773, -114),
(11, '2021-07-25 21:54:45', 2885, 112),
(12, '2021-07-28 16:37:57', 2885, 112),
(13, '2021-07-29 20:30:19', 2779, -106);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wasil48`
--

CREATE TABLE `wasil48` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mmr` int(11) NOT NULL,
  `ch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wasil48`
--

INSERT INTO `wasil48` (`id`, `data`, `mmr`, `ch`) VALUES
(1, '2021-06-14 16:06:03', 2790, 0),
(2, '2021-06-19 00:29:15', 2922, 132),
(3, '2021-06-19 02:29:07', 2799, -123),
(4, '2021-06-20 02:18:01', 2915, 120),
(5, '2021-06-20 22:46:52', 2915, 120),
(6, '2021-06-22 18:30:57', 2925, -112),
(7, '2021-06-24 23:37:33', 2925, -112),
(8, '2021-06-27 00:49:17', 2925, -112),
(9, '2021-07-03 01:44:30', 2927, 115),
(10, '2021-07-17 23:22:37', 2814, -113),
(11, '2021-07-25 21:54:45', 2814, -113),
(12, '2021-07-28 16:37:57', 2814, -113),
(13, '2021-07-29 20:30:19', 2814, -113);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `aktualizacja`
--
ALTER TABLE `aktualizacja`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kucyk12PL`
--
ALTER TABLE `kucyk12PL`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `maIcher8`
--
ALTER TABLE `maIcher8`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pabbloo13`
--
ALTER TABLE `pabbloo13`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wasil48`
--
ALTER TABLE `wasil48`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `aktualizacja`
--
ALTER TABLE `aktualizacja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=488;

--
-- AUTO_INCREMENT dla tabeli `kucyk12PL`
--
ALTER TABLE `kucyk12PL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `maIcher8`
--
ALTER TABLE `maIcher8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `pabbloo13`
--
ALTER TABLE `pabbloo13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `wasil48`
--
ALTER TABLE `wasil48`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
