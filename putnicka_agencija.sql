-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2024 at 07:14 PM
-- Server version: 8.0.37
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putnicka_agencija`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

DROP TABLE IF EXISTS `destinacije`;
CREATE TABLE IF NOT EXISTS `destinacije` (
  `id_destinacije` int NOT NULL AUTO_INCREMENT,
  `drzava` varchar(64) NOT NULL,
  `grad` varchar(64) NOT NULL,
  PRIMARY KEY (`id_destinacije`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`id_destinacije`, `drzava`, `grad`) VALUES
(1, 'Nemacka', 'Berlin'),
(2, 'Italija', 'Rim'),
(3, 'Španija', 'Sevilja'),
(4, 'Engleska', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

DROP TABLE IF EXISTS `putnici`;
CREATE TABLE IF NOT EXISTS `putnici` (
  `id_putnika` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(64) NOT NULL,
  `broj_telefona` varchar(45) NOT NULL,
  `mejl` varchar(35) NOT NULL,
  `lozinka` varchar(64) NOT NULL,
  PRIMARY KEY (`id_putnika`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`id_putnika`, `ime`, `prezime`, `broj_telefona`, `mejl`, `lozinka`) VALUES
(1, 'aleksija', 'stosic', '81dc9bdb52d04dc20036dbd8313ed055', 'aleksijastosic@gmail.com', '0642627234'),
(2, 'jovana', 'ivkovic', '067a9d48f2884037e1320ac03b18e86f', 'jovana2@gmail.com', '0642627234'),
(3, 'maja', 'stosic', '6262571', 'maja1@gmail.com', '0cc45c9b2fc35c72a5fae9a682d630e3'),
(4, 'marija', 'simic', '3383883', 'marija@gmail.com', 'cb74c183402afe708a490f0048af6e41'),
(5, 'sara', 'milosevic', '6666', 'sara4@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'tara', 'simic', '388', 'tara1@gmail.com', '2c842d72963554e4ca6286bb120777f6');

-- --------------------------------------------------------

--
-- Table structure for table `raspolozivi_letovi`
--

DROP TABLE IF EXISTS `raspolozivi_letovi`;
CREATE TABLE IF NOT EXISTS `raspolozivi_letovi` (
  `id_leta` int NOT NULL AUTO_INCREMENT,
  `polaziste` varchar(54) NOT NULL,
  `id_destinacije` int NOT NULL,
  `datum_polaska` date NOT NULL,
  `vreme_polaska` time NOT NULL,
  `cena_karte` int NOT NULL,
  PRIMARY KEY (`id_leta`),
  KEY `fk_destinacija` (`id_destinacije`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `raspolozivi_letovi`
--

INSERT INTO `raspolozivi_letovi` (`id_leta`, `polaziste`, `id_destinacije`, `datum_polaska`, `vreme_polaska`, `cena_karte`) VALUES
(1, 'Srbija', 1, '2024-05-08', '32:30:16', 300),
(2, 'Bec', 2, '2024-05-07', '19:08:49', 450),
(3, 'Srbija', 4, '2024-05-31', '20:09:43', 490),
(4, 'Srbija', 1, '2024-07-12', '19:10:33', 450),
(5, 'Srbija', 1, '2024-05-08', '32:30:16', 300),
(6, 'Bec', 2, '2024-05-07', '19:08:49', 450),
(7, 'Srbija', 4, '2024-05-31', '20:09:43', 490),
(8, 'Srbija', 1, '2024-07-12', '19:10:33', 450),
(9, 'Srbija', 1, '2024-05-08', '32:30:16', 300),
(10, 'Bec', 2, '2024-05-07', '19:08:49', 450),
(11, 'Srbija', 4, '2024-05-31', '20:09:43', 490),
(12, 'Srbija', 1, '2024-07-12', '19:10:33', 450),
(13, 'Srbija', 1, '2024-05-08', '32:30:16', 300),
(14, 'Bec', 2, '2024-05-07', '19:08:49', 450),
(15, 'Srbija', 4, '2024-05-31', '20:09:43', 490),
(16, 'Srbija', 1, '2024-07-12', '19:10:33', 450);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

DROP TABLE IF EXISTS `rezervacija`;
CREATE TABLE IF NOT EXISTS `rezervacija` (
  `id_rezervacije` int NOT NULL AUTO_INCREMENT,
  `id_putnika` int NOT NULL,
  `nacin_placanja` varchar(64) NOT NULL,
  `id_leta` int NOT NULL,
  `broj_sedista` int NOT NULL,
  `klasa` int NOT NULL,
  PRIMARY KEY (`id_rezervacije`),
  KEY `fk_putnik` (`id_putnika`),
  KEY `fk_let` (`id_leta`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id_rezervacije`, `id_putnika`, `nacin_placanja`, `id_leta`, `broj_sedista`, `klasa`) VALUES
(5, 4, 'kartica', 1, 3, 1),
(6, 4, 'kartica', 1, 2, 1),
(7, 4, 'kredit', 1, 3, 3),
(8, 4, 'kartica', 1, 4, 3),
(9, 4, 'racun', 1, 5, 2),
(13, 6, 'racun', 1, 0, 0),
(14, 6, 'racun', 1, 0, 1),
(15, 6, 'racun', 1, 0, 1),
(16, 6, 'racun', 1, 0, 1),
(17, 6, 'racun', 1, 0, 1),
(18, 6, 'racun', 1, 0, 1),
(19, 6, 'racun', 1, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `raspolozivi_letovi`
--
ALTER TABLE `raspolozivi_letovi`
  ADD CONSTRAINT `fk_destinacija` FOREIGN KEY (`id_destinacije`) REFERENCES `destinacije` (`id_destinacije`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `fk_let` FOREIGN KEY (`id_leta`) REFERENCES `raspolozivi_letovi` (`id_leta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_putnik` FOREIGN KEY (`id_putnika`) REFERENCES `putnici` (`id_putnika`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
