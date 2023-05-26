-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2019 at 11:41 AM
-- Server version: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atoresDB`
--
CREATE DATABASE IF NOT EXISTS `atoresDB` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `atoresDB`;

-- --------------------------------------------------------

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `elenco`;
CREATE TABLE IF NOT EXISTS `elenco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `insta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wiki` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imdb` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `reg_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artigos`
--

INSERT INTO elenco (`id`, `nome`, `insta`, `img`, `wiki`, `imdb`) VALUES
(1, 'Al Pacino', 'https://www.instagram.com/the.alpacino/', 'https://i.pinimg.com/736x/8f/a0/51/8fa051251f5ac2d0b756027089fbffde--terry-o-neill-al-pacino.jpg', 'https://pt.wikipedia.org/wiki/Al_Pacino','https://www.imdb.com/name/nm0000199/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
