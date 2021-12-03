-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2021 at 02:11 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rapi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apikey` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batas` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tokenapi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktifapi` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `email`, `no_hp`, `rapi`, `apikey`, `batas`, `token`, `aktif`, `tokenapi`, `aktifapi`) VALUES
('ckdhtyls0qo3gvumpz2e', 'reza', 'bb98b1d0b523d5e783f931550d7702b6', 'reza@gmail.com', '082982838', 'ckdhtyls0qo3gvumpz2e', 'ckdhtyls0qo3gvumpz2e', '44', 'k38jf4eyco0p6mqg7anzs25rl9hvid1bxwt', '1', 'z8cyx5jiuhpdfw16qlag4nkv3b2rste7m90', '0'),
('q52ztvj7we1bisyd6hgu', 'popopipi', 'bb98b1d0b523d5e783f931550d7702b6', 'reza2@gmal.com', 'rezaa', 'q52ztvj7we1bisyd6hgu', 'q52ztvj7we1bisyd6hgu', '1', 'dhlc0j547my2bz8rqtwsov1fa6ep9ixu3ng', '1', 'zcx8g1s2dat97l6y5qhmkif', '1'),
('r7uwc0lfe48yxbp5mn6z', 'rezzaa', 'da9e71ae4175e921ba77abf864612463', 'rezadatabase25e@gmail.com', '2344234', 'r7uwc0lfe48yxbp5mn6z', 'r7uwc0lfe48yxbp5mn6z', '100', '3yk4bi2uvwtnofh17g6zc5rj90exqsdlpa8', '1', 'pjn78quib1az2t30wk9x45f', '1'),
('rn6w97qmi45dua1xkv8z', 'rezza', 'bb98b1d0b523d5e783f931550d7702b6', 'rezaz@gmail.co', '3204923', 'rn6w97qmi45dua1xkv8z', 'rn6w97qmi45dua1xkv8z', '78', 'qenwyxvkhdfc16r8ztu2obga430i5p7jmsl', '1', '59hzkbyjud3t8ogwcsnvp7r', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
