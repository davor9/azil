-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 12:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azil`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) DEFAULT NULL,
  `sifra` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `sifra`) VALUES
(1, 'admin', 'admin'),
(3, 'test', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `veterinar`
--

CREATE TABLE `veterinar` (
  `id` int(11) NOT NULL,
  `imeP` varchar(50) DEFAULT NULL,
  `specijalnost` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veterinar`
--

INSERT INTO `veterinar` (`id`, `imeP`, `specijalnost`, `email`, `telefon`) VALUES
(5, 'Petar Petrovic', 'hirurg', 'test@gmail', '12412432');

-- --------------------------------------------------------

--
-- Table structure for table `zivotinja`
--

CREATE TABLE `zivotinja` (
  `id` int(11) NOT NULL,
  `vrsta` varchar(50) DEFAULT NULL,
  `ime` varchar(20) DEFAULT NULL,
  `godine` int(11) DEFAULT NULL,
  `vakcinisana` varchar(10) DEFAULT NULL,
  `pregledao` int(11) NOT NULL,
  `rasa` varchar(20) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veterinar`
--
ALTER TABLE `veterinar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zivotinja`
--
ALTER TABLE `zivotinja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pregledao` (`pregledao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `veterinar`
--
ALTER TABLE `veterinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zivotinja`
--
ALTER TABLE `zivotinja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zivotinja`
--
ALTER TABLE `zivotinja`
  ADD CONSTRAINT `zivotinja_ibfk_1` FOREIGN KEY (`pregledao`) REFERENCES `veterinar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
