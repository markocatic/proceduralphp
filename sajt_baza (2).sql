-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 11:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajt_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id_galerije` int(255) NOT NULL,
  `naziv_galerije` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id_galerije`, `naziv_galerije`) VALUES
(1, 'Galerija 1'),
(2, 'Galerija 2');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id_korisnik` int(50) NOT NULL,
  `imeKorisnika` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnik`, `imeKorisnika`, `adresa`, `user`, `password`, `email`, `uloga`) VALUES
(1, 'Marko Catic', 'Beograd 12', 'markic', 'ab56b4d92b40713acc5af89985d4b786', 'marko@gmail.com', 'korisnik'),
(2, 'Marko Catic', 'Beograd 12', 'markic', 'ab56b4d92b40713acc5af89985d4b786', 'marko@gmail.com', 'korisnik'),
(4, 'admin', 'admin', 'admin', '0192023a7bbd73250516f069df18b500', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE `meni` (
  `id_meni` int(50) NOT NULL,
  `ime_linka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id_meni`, `ime_linka`, `link`, `uloga`) VALUES
(1, 'home', 'index.php', 1),
(2, 'gallery', 'index.php?ime_linka=gallery', 1),
(3, 'buy', 'index.php?ime_linka=buy', 1),
(4, 'register', 'index.php?ime_linka=register', 0),
(5, 'contact', 'index.php?ime_linka=contact', 1),
(6, 'author', 'index.php?ime_linka=author', 1),
(7, 'login', 'index.php?ime_linka=login', 0),
(8, 'feedback', 'index.php?ime_linka=feedback', 1),
(9, 'user', 'index.php?ime_linka=user.php', 0),
(11, 'home', 'index.php', 2),
(12, 'gallery', 'index.php?ime_linka=gallery', 2),
(13, 'buy', 'index.php?ime_linka=buy', 2),
(14, 'contact', 'index.php?ime_linka=contact', 2),
(15, 'profile', 'index.php?ime_linka=user', 2),
(16, 'logout', 'index.php?ime_linka=logout', 2),
(17, 'home', 'index.php', 3),
(18, 'gallery', 'index.php?ime_linka=gallery', 3),
(19, 'buy', 'index.php?ime_linka=buy', 3),
(20, 'contact', 'index.php?ime_linka=contact', 3),
(21, 'admin', 'index.php?ime_linka=admin', 3),
(22, 'logout', 'index.php?ime_linka=logout', 3);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id_slike` int(255) NOT NULL,
  `id_galerije` int(255) NOT NULL,
  `naziv_slike` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `putanja_slike` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id_slike`, `id_galerije`, `naziv_slike`, `putanja_slike`) VALUES
(1, 1, '1', '1.jpg'),
(2, 1, '2', '2.jpg'),
(3, 1, '3', '3.jpg'),
(4, 1, '4', '4.jpg'),
(5, 1, '5', '5.jpg'),
(6, 1, '6', '6.jpg'),
(7, 1, '7', '7.jpg'),
(8, 1, '8', '8.jpg'),
(9, 1, '9', '9.jpg'),
(10, 1, '10', '10.jpg'),
(11, 1, '11', '11.jpg'),
(12, 1, '12', '12.jpg'),
(13, 1, '13', '13.jpg'),
(14, 1, '14', '14.jpg'),
(15, 1, '15', '15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id_galerije`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id_korisnik`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`id_meni`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id_slike`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id_galerije` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id_korisnik` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `id_meni` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id_slike` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
