-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2023, 11:24
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pizzeria`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `action_log`
--

CREATE TABLE `action_log` (
  `id_log` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `ip` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `log` varchar(512) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `action_log`
--

INSERT INTO `action_log` (`id_log`, `datetime`, `ip`, `log`) VALUES
(1, '2023-01-13 19:39:48', '::1', 'Utworzenie nowego konta: Admin'),
(2, '2023-01-13 19:39:53', '::1', 'Logowanie na konto: Admin'),
(3, '2023-01-24 13:01:58', '::1', 'Logowanie na konto: Admin'),
(4, '2023-01-24 13:11:01', '::1', 'Logowanie na konto: Admin'),
(5, '2023-01-24 13:27:36', '::1', 'Utworzenie nowego konta: Test'),
(6, '2023-01-24 13:27:40', '::1', 'Logowanie na konto: Test'),
(7, '2023-01-24 13:28:00', '::1', 'Logowanie na konto: Admin'),
(8, '2023-01-24 13:59:06', '::1', 'Logowanie na konto: Admin'),
(9, '2023-01-24 14:47:30', '::1', 'Logowanie na konto: Admin'),
(10, '2023-01-24 15:20:04', '::1', 'Opinia (1) została usunięta przez Admin'),
(11, '2023-01-24 15:31:03', '::1', 'Logowanie na konto: Test'),
(12, '2023-01-24 15:32:25', '::1', 'Logowanie na konto: Admin'),
(13, '2023-01-24 15:33:49', '::1', 'Logowanie na konto: Test'),
(14, '2023-01-25 15:52:13', '::1', 'Logowanie na konto: Admin'),
(15, '2023-01-25 15:53:27', '::1', 'Logowanie na konto: '),
(16, '2023-01-26 17:14:53', '::1', 'Logowanie na konto: Admin'),
(17, '2023-01-26 17:22:22', '::1', 'Logowanie na konto: Test'),
(18, '2023-01-26 17:23:57', '::1', 'Logowanie na konto: Admin'),
(19, '2023-01-26 19:11:45', '::1', 'Logowanie na konto: Admin'),
(20, '2023-01-27 12:26:26', '::1', 'Logowanie na konto: Test'),
(21, '2023-01-27 13:53:16', '::1', 'Logowanie na konto: Admin'),
(22, '2023-01-27 14:39:02', '::1', 'Utworzenie nowego konta: User'),
(23, '2023-01-27 14:39:05', '::1', 'Logowanie na konto: User'),
(24, '2023-01-27 14:41:07', '::1', 'Logowanie na konto: '),
(25, '2023-01-27 14:41:25', '::1', 'Logowanie na konto: '),
(26, '2023-01-27 15:12:42', '::1', 'Logowanie na konto: Admin'),
(27, '2023-01-27 23:02:02', '::1', 'Logowanie na konto: Admin'),
(28, '2023-01-27 23:14:49', '::1', 'Logowanie na konto: Admin'),
(29, '2023-01-28 09:02:55', '::1', 'Logowanie na konto: Admin'),
(30, '2023-01-28 09:51:18', '::1', 'Logowanie na konto: Admin'),
(31, '2023-01-28 09:51:42', '::1', 'Utworzenie nowego konta: User2'),
(32, '2023-01-28 09:51:47', '::1', 'Logowanie na konto: User2'),
(33, '2023-01-28 09:54:55', '::1', 'Logowanie na konto: Admin'),
(34, '2023-01-28 09:55:16', '::1', 'Logowanie na konto: Test'),
(35, '2023-01-28 10:03:18', '::1', 'Utworzenie nowego konta: Test3'),
(36, '2023-01-28 10:05:33', '::1', 'Logowanie na konto: Test3'),
(37, '2023-01-28 10:07:20', '::1', 'Logowanie na konto: Test3'),
(38, '2023-01-28 10:08:08', '::1', 'Logowanie na konto: Admin'),
(39, '2023-01-28 10:13:52', '::1', 'Logowanie na konto: User2'),
(40, '2023-01-28 10:13:58', '::1', 'Logowanie na konto: '),
(41, '2023-01-28 10:14:09', '::1', 'Logowanie na konto: Admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinion`
--

CREATE TABLE `opinion` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `opinion`
--

INSERT INTO `opinion` (`id`, `name`, `description`, `added_time`, `author`) VALUES
(2, 'Test', 'Test', '2023-01-25 15:34:42', 0),
(4, 'Test3', 'Test3', '2023-01-25 15:34:42', 0),
(5, 'Test4', 'Test4', '2023-01-25 15:34:42', 0),
(9, 'Test', 'teststst', '2023-01-26 18:11:27', 0),
(10, 'testst', 'testsat', '2023-01-26 18:15:09', 1),
(12, 'tetwtetete', 'tetettte', '2023-01-27 11:26:04', 1),
(13, 'qweqweqwqw', 'qeqewqwe', '2023-01-27 11:26:35', 2),
(14, 'User2', 'Test', '2023-01-28 08:52:01', 6),
(15, 'Test3', 'OK', '2023-01-28 09:07:45', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pizza`
--

CREATE TABLE `pizza` (
  `id_pizza` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `ingredients` varchar(512) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'user'),
(4, 'zbanowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `id_role`) VALUES
(1, 'Admin', 'b4c3e57364b14fd81a2917c6a7755295', 'admin@admin.pl', 1),
(2, 'Test', '68eacb97d86f0c4621fa2b0e17cabd8c', 'test@test.com', 2),
(4, 'User', '5a30c9609b52fe348fb6925896e061de', 'test@gmail.com', 3),
(6, 'User2', '5a30c9609b52fe348fb6925896e061de', 'user2@user.pl', 2),
(7, 'Test3', '68eacb97d86f0c4621fa2b0e17cabd8c', 'test3@test.pl', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_details`
--

CREATE TABLE `user_details` (
  `id_details` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user_details`
--

INSERT INTO `user_details` (`id_details`, `last_login`, `register_date`) VALUES
(1, '2023-01-28 10:14:09', '2023-01-13 19:39:48'),
(2, '2023-01-28 09:55:16', '2023-01-24 13:27:36'),
(3, '0000-00-00 00:00:00', '2023-01-25 15:53:27'),
(4, '2023-01-27 14:39:05', '2023-01-27 14:39:02'),
(5, '0000-00-00 00:00:00', '2023-01-27 14:41:25'),
(6, '2023-01-28 10:13:52', '2023-01-28 09:51:42'),
(7, '2023-01-28 10:07:20', '2023-01-28 10:03:17');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `action_log`
--
ALTER TABLE `action_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeksy dla tabeli `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id_pizza`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rola` (`id_role`) USING BTREE;

--
-- Indeksy dla tabeli `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id_details`),
  ADD KEY `id_details` (`id_details`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `action_log`
--
ALTER TABLE `action_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT dla tabeli `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user_details` (`id_details`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
