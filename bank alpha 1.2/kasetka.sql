-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Gru 2022, 03:44
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `uzytkownicy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kasetka`
--

CREATE TABLE `kasetka` (
  `id` int(11) NOT NULL,
  `ilosc_banknotow` int(11) NOT NULL,
  `banknot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kasetka`
--

INSERT INTO `kasetka` (`id`, `ilosc_banknotow`, `banknot`) VALUES
(1, 10, 10),
(2, 10, 20),
(3, 10, 50),
(4, 10, 100),
(5, 10, 200);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kasetka`
--
ALTER TABLE `kasetka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kasetka`
--
ALTER TABLE `kasetka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
