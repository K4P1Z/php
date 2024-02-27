-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 08:38 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklepikszkolny`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bazasklepik`
--

CREATE TABLE `bazasklepik` (
  `ID` int(2) DEFAULT NULL,
  `CENA` varchar(3) DEFAULT NULL,
  `NAZWA` varchar(10) DEFAULT NULL,
  `KATEGORIA` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bazasklepik`
--

INSERT INTO `bazasklepik` (`ID`, `CENA`, `NAZWA`, `KATEGORIA`) VALUES
(1, '10', 'Pomarańcze', 1),
(2, '80', 'Gruszki', 1),
(3, '20', 'Avokado', 1),
(4, '15', 'Chleb', 2),
(5, '25', 'Bułka', 2),
(6, '250', 'Weki', 2),
(7, '6,5', 'Krem', 3),
(8, '100', 'Koszula', 4),
(9, '150', 'Dres', 4),
(10, '56', 'Gwoździe', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
