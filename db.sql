-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 14 Avril 2017 à 12:20
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `etudiantsdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `prenom`, `nom`, `adresse`, `tel`, `email`, `login`, `passwd`) VALUES
(1, 'DANY MARC', 'DJIMGOU NKENNE', 'Ngoa 1', '698909876', '678567890', 'dany', 'dany'),
(2, 'Paul', 'Amadou', 'YaoundÃ©', 'dd', 'dd@yahoo.fr', 'dd', 'dd'),
(3, 'Henri', 'Kone', 'Rue Damase 345', '8789000000', 'us.oo@gmail.com', 'henri', 'henri'),
(5, 'Speciose', 'Akizimana', 'Rue St Louis', '678909876', 'us.oo@gmail.com', 'speciose', 'speciose'),
(8, 'Jesus Mon Pere', 'Christ Sauveur', '123', '6777', 'js@heaven.com', 'jesus', 'jesus'),
(9, 'Jules', 'HougouÃ©', 'jules Rue xvf', '7866555', 'marfacto@yahoo.fr', 'jules', 'jules'),
(10, 'Pierre', 'CÃ©zar', 'Rue Pierre C; 230', '9877557788', 'cs@ymail.com', 'admin', 'admin');