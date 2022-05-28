-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2021 at 10:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`) VALUES
(1, 'Berenger Benam', '900000', 'unnamed.jpg'),
(2, 'Photo ensemble', '400000', 'm.jpg'),
(3, 'Carte du senegal', '20000', 'se.jpg'),
(4, 'Femme travailleuse', '600000', 'un.jpeg'),
(5, 'Energie', '1000', 'download.jpg'),
(6, 'berenger', '800000', 'trois.jpg'),
(7, 'Nasry & Berenger', '300000', 'b.jpg'),
(8, 'Femmes Noir', '300000', 's.jpg'),
(9, 'Le soleil', '700000', 'sun.gif'),
(10, 'Voiture de luxe', '100000000', '5.jpg'),
(11, 'Moto', '3000000', '10.jpg'),
(12, 'Voiture', '50000000', '12.jpg'),
(13, 'Voiture vert', '30000000', '4.jpg'),
(14, 'Benam_Berenger', '70000000', 'be.jpg'),
(15, 'Ahamadi_Nasry', '60000000', 'na.jpg'),
(16, 'Nasry', '80000000', 'ns.jpg');
COMMIT;
