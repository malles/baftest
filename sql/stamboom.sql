-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 30 mei 2015 om 14:56
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
-- Tabelstructuur voor tabel `kinderen`
--

CREATE TABLE IF NOT EXISTS `kinderen` (
  `nummering` int(11) NOT NULL AUTO_INCREMENT,
  `kinderen_id` int(11) NOT NULL,
  `persoon_id` int(11) NOT NULL,
  PRIMARY KEY (`nummering`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `kinderen`
--

INSERT INTO `kinderen` (`nummering`, `kinderen_id`, `persoon_id`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 4),
(4, 4, 6),
(5, 5, 7),
(6, 6, 10);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `partnerschap`
--

CREATE TABLE IF NOT EXISTS `partnerschap` (
  `partnerschap_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner1_id` int(11) NOT NULL,
  `partner2_id` int(11) NOT NULL,
  PRIMARY KEY (`partnerschap_id`),
  UNIQUE KEY `partnerschap_id` (`partnerschap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `partnerschap`
--

INSERT INTO `partnerschap` (`partnerschap_id`, `partner1_id`, `partner2_id`) VALUES
(1, 1, 2),
(2, 4, 5),
(3, 6, 8),
(4, 7, 9),
(5, 10, 11),
(6, 12, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personenregister`
--

CREATE TABLE IF NOT EXISTS `personenregister` (
  `persoon_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_id` int(11) NOT NULL,
  `partnerschap_id` int(11) NOT NULL,
  `ouder_id` int(11) NOT NULL,
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
  `toevoegen` text NOT NULL,
  PRIMARY KEY (`persoon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Gegevens worden uitgevoerd voor tabel `personenregister`
--

INSERT INTO `personenregister` (`persoon_id`, `partner_id`, `partnerschap_id`, `ouder_id`, `geslacht`, `voornaam`, `tweedenaam`, `derdenaam`, `voorvoegsel_achternaam`, `achternaam`, `voorvoegsel_meisjesnaam`, `meisjesnaam`, `geboortedatum`, `doopdatum`, `geboorteplaats`, `doopplaats`, `sterfdatum`, `sterfplaats`, `beroep1`, `beroep2`, `beroep3`, `opmerking1`, `opmerking2`, `documentatie1`, `documentatie2`, `foto1`, `partner1`, `huwlijksdatum1`, `partner2`, `huwlijksdatum2`, `partner3`, `huwlijksdatum3`, `toevoegen`) VALUES
(1, 2, 1, 2, 'man', 'Bert', '', '', '', 'Veltens', '', '', '1950-10-17', '0000-00-00', 'Den Haag', '', '2007-12-15', 'Assen', 'Klu vliegtuigonderhoudsmonteur', 'Klu luchtafweeronderhoudsmonteur', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(2, 1, 1, 0, 'vrouw', 'Petronella', 'Alexandra', 'Maria', '', '', '', 'Veldhuis', '1945-03-22', '0000-00-00', 'Nijmegen', '', '1994-08-18', 'Enschede', 'huisvrouw', '', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(3, 0, 0, 1, 'man', 'Bas', 'Boudewijn', '', '', 'Veltens', '', '', '1976-01-03', '0000-00-00', 'Smallingerland', '', '0000-00-00', '', 'werktuigbouwer', 'bakker', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(4, 5, 2, 3, 'man', 'Lambertus', 'Albert', '', '', 'Veltens', '', '', '1914-01-07', '0000-00-00', 'Groningen', '', '0000-00-00', 'Enschede', 'belastinginspecteur bd', '', '', 'crematie te Usselo', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(5, 4, 2, 0, 'vrouw', 'Riekje', '', '', '', '', '', 'Postma', '0000-07-24', '0000-00-00', '', '', '1979-00-00', 'Enschede', 'huisvrouw', '', '', 'crematie te Usselo', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(6, 8, 3, 4, 'man', 'Albertus', '', '', '', 'Veltens', '', '', '1888-03-16', '0000-00-00', 'Veendam', '', '0000-10-19', 'Groningen (??)', 'slager', '', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(7, 9, 4, 5, 'man', 'Lammert', '', '', '', 'Veltens', '', '', '1853-03-15', '0000-00-00', 'Veendam', '', '1926-04-17', 'Veendam', 'boerenknecht', '(fabrieks) opzichter', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(8, 6, 3, 0, 'vrouw', 'Beelkina', '(Zwaantje)', '', '', '', '', 'Strobosch', '1884-00-00', '0000-00-00', 'Wedde', '', '1945-12-14', 'Zwolle', 'huisvrouw', '', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(9, 7, 4, 0, 'vrouw', 'Pietje', '', '', '', '', '', 'Enting', '1853-00-00', '0000-00-00', 'Wildervank', '', '1917-08-05', 'Dennenoord (Zuidlaren)', 'dienstmeid', 'werkvrouw', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(10, 11, 5, 6, 'man', 'Albert', '', '', '', 'Veltens', '', '', '1829-08-16', '0000-00-00', 'Assen', '', '1872-06-20', 'Veendam', 'timmerman', '', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 'onderwerp'),
(11, 10, 5, 0, 'vrouw', 'Jantje', 'Eikes', '', '', '', '', 'Engelsman', '1824-00-00', '0000-00-00', 'Veendam', '', '1866-08-26', 'Veendam', '', '', '', '', '', '', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(12, 0, 6, 0, 'man', 'Lammert', '', '', '', 'Veltens', '', '', '1805-12-21', '0000-00-00', 'Assen', '', '1839-05-31', 'Assen', 'schoenmaker', 'praamschipper', '', '', '', 'https://www.wiewaswie.nl/personen-zoeken/zoeken/document/a2apersonid/129847514/srcid/14742978/oid/37', '', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
