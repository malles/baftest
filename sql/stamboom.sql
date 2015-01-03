-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 03 jan 2015 om 13:34
-- Serverversie: 5.5.24-log
-- PHP-versie: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `stamboom`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personenregister`
--

CREATE TABLE IF NOT EXISTS `personenregister` (
  `persoon_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_id` int(11) NOT NULL,
  `geslacht` text NOT NULL,
  `voornaam` text NOT NULL,
  `tweedenaam` text NOT NULL,
  `derdenaam` text NOT NULL,
  `tussenvoegsel` text NOT NULL,
  `achternaam` text NOT NULL,
  `meisjesnaam` text NOT NULL,
  `geboortedatum` date NOT NULL,
  `doopdatum` date NOT NULL,
  `geboorteplaats` text NOT NULL,
  `doopplaats` text NOT NULL,
  `sterfdatum` date NOT NULL,
  `sterfplaats` text NOT NULL,
  `beroep1` text NOT NULL,
  `beroep2` text NOT NULL,
  `beroep3` text NOT NULL,
  `opmerking1` int(11) NOT NULL,
  `opmerking2` int(11) NOT NULL,
  `documentatie1` int(11) NOT NULL,
  `documentatie2` int(11) NOT NULL,
  `foto1` int(11) NOT NULL,
  `partner1` text NOT NULL,
  `huwlijksdatum1` date NOT NULL,
  `partner2` text NOT NULL,
  `huwlijksdatum2` date NOT NULL,
  `partner3` text NOT NULL,
  `huwlijksdatum3` date NOT NULL,
  `vader` int(11) NOT NULL,
  `moeder` int(11) NOT NULL,
  `broerzus1` int(11) NOT NULL,
  `broerzus2` int(11) NOT NULL,
  `toevoegen` text NOT NULL,
  PRIMARY KEY (`persoon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `personenregister`
--

INSERT INTO `personenregister` (`persoon_id`, `partner_id`, `geslacht`, `voornaam`, `tweedenaam`, `derdenaam`, `tussenvoegsel`, `achternaam`, `meisjesnaam`, `geboortedatum`, `doopdatum`, `geboorteplaats`, `doopplaats`, `sterfdatum`, `sterfplaats`, `beroep1`, `beroep2`, `beroep3`, `opmerking1`, `opmerking2`, `documentatie1`, `documentatie2`, `foto1`, `partner1`, `huwlijksdatum1`, `partner2`, `huwlijksdatum2`, `partner3`, `huwlijksdatum3`, `vader`, `moeder`, `broerzus1`, `broerzus2`, `toevoegen`) VALUES
  (1, 8, '', 'Pappas', 'Pappa', '', 'van', 'Gelukkig', '', '0000-00-00', '0000-00-00', 'groningen', '', '0000-00-00', 'enschede', 'slager', '', '', 0, 0, 0, 0, 0, '8', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 0, 0, 0, 0, ''),
  (2, 7, '', 'Pappa', '', '', 'van', 'Gelukkig', '', '0000-00-00', '0000-00-00', 'enschede', '', '0000-00-00', '', 'soldaat', '', '', 0, 0, 0, 0, 0, '7', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 1, 8, 0, 0, ''),
  (3, 0, '', 'Kind', '1', '', 'van', 'Gelukkig', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 2, 7, 4, 5, ''),
  (4, 0, '', 'kind', '2', '', '', 'Gelukkig', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 2, 7, 3, 5, ''),
  (5, 6, '', 'Kind', '3', '', 'van', 'Gelukkig', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 0, '6', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 2, 7, 3, 4, ''),
  (6, 5, '', 'Kind3s', 'Partner', '', '', '', 'Getrouwd', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 0, '2', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 0, 0, 0, 0, ''),
  (7, 2, '', 'Mamma', '', '', '', '', 'Mammaschternaam', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 0, '2', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 0, 0, 0, 0, ''),
  (8, 1, '', 'Pappas', 'Mamma', '', '', '', 'Pappasmammasachternaam', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', 0, 0, 0, 0, 0, '1', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 0, 0, 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
