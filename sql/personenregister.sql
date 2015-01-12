-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 11 jan 2015 om 22:28
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
  `persoon_auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `persoon_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `kind_id` int(11) NOT NULL,
  `geslacht` text NOT NULL,
  `voornaam` text NOT NULL,
  `tweedenaam` text NOT NULL,
  `derdenaam` text NOT NULL,
  `voorvoegsel_achternaam` text NOT NULL,
  `achternaam` text NOT NULL,
  `voorvoegsel_meisjesnaam` text NOT NULL,
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
  `opmerking1` text NOT NULL,
  `opmerking2` text NOT NULL,
  `documentatie1` text NOT NULL,
  `documentatie2` text NOT NULL,
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
  PRIMARY KEY (`persoon_auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `personenregister`
--

INSERT INTO `personenregister` (`persoon_auto_id`, `persoon_id`, `partner_id`, `kind_id`, `geslacht`, `voornaam`, `tweedenaam`, `derdenaam`, `voorvoegsel_achternaam`, `achternaam`, `voorvoegsel_meisjesnaam`, `meisjesnaam`, `geboortedatum`, `doopdatum`, `geboorteplaats`, `doopplaats`, `sterfdatum`, `sterfplaats`, `beroep1`, `beroep2`, `beroep3`, `opmerking1`, `opmerking2`, `documentatie1`, `documentatie2`, `foto1`, `partner1`, `huwlijksdatum1`, `partner2`, `huwlijksdatum2`, `partner3`, `huwlijksdatum3`, `vader`, `moeder`, `broerzus1`, `broerzus2`, `toevoegen`) VALUES
(1, 1, 2, 0, 'man', 'bas', 'boudewijn', 'derdenaam', 'vva', 'veltens', 'vvm', 'meisjesnaam', '1976-01-03', '1976-01-04', 'smallingerland', 'doopplaats', '2000-11-11', 'sterfplaats', 'beroep1', 'beroep2', 'beroep3', 'veltensstamboom', 'opm2', 'doc1', 'doc2', 0, 'partner1', '1976-01-04', 'part2', '1976-07-14', 'part3', '1976-01-04', 0, 0, 0, 0, ''),
(2, 2, 1, 0, 'vrouw', 'lotte', 'kutje', 'derdenaam', 'vva', 'achternaam', 'vvm', 'beffenstijn', '1976-01-03', '1976-01-04', 'gebplaats', 'doopplaats', '2000-11-11', 'enschede', 'soldaat', 'beroep2', 'beroep3', 'opm1', 'opm2', 'doc1', 'doc2', 0, 'partner1', '1976-01-04', 'part2', '1976-07-14', 'part3', '1976-01-04', 0, 0, 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
