-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 12-Maio-2015 às 21:57
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `navequest`
--
CREATE DATABASE IF NOT EXISTS `navequest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `navequest`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quests`
--

CREATE TABLE IF NOT EXISTS `quests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `command` varchar(256) NOT NULL,
  `a` varchar(256) NOT NULL,
  `b` varchar(256) NOT NULL,
  `c` varchar(256) NOT NULL,
  `d` varchar(256) NOT NULL,
  `e` varchar(256) NOT NULL,
  `template` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `quests`
--

INSERT INTO `quests` (`id`, `command`, `a`, `b`, `c`, `d`, `e`, `template`) VALUES
(3, 'Deus exisste', 'sim', 'talvez', 'depende', 'quem sabe?', 'nÃ£o', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `password` varchar(512) NOT NULL,
  `email` varchar(32) NOT NULL,
  `isTeacher` tinyint(1) DEFAULT '0',
  `coin` int(11) DEFAULT '100',
  `money` int(11) DEFAULT '15',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `isTeacher`, `coin`, `money`) VALUES
(8, 'Rex', 'fae1be0c1fc080ebed4ddb60fd3be0ac57ae24eea39aac417624f0871cb16f967c53dcfc26568564bad7fd35af5fb37426b9db3b71a0c60104eea114a02f6473', 'rex@navequest.com', 0, 100, 15),
(9, '1 2', 'eb7b74ce6589ac63459f942ceb5794a9ebf34d2281e9d63ca55d92e0851b932cecd458dfcb2a580753cf6a42db7b126b74d42550e976e862f3c22ff267aed2a4', '1', 1, 100, 15),
(10, '2 ', '6da7599e34503d9fdd64a1c1d21b88c55a293d223e71008d0e3e9873ee128bf3cddc791a267a6a550668146a73e79a21e083c18db2a52e197971dfa91e39c141', '2', 0, 100, 15),
(11, 'Marcos Domingos Germano Umbrela', 'ae7214ba3660fc9cabe90eceacbd2db2f902ce8a086e9edde25c2c17c57780aceec24e35a699209c0854146631e0d01ae0cbbe785ae367482b15980ce24eafa2', 'pinto@pinto.pinto', 0, 100, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
