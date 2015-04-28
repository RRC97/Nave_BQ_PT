-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Abr-2015 às 22:05
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `navequest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quests`
--

CREATE TABLE IF NOT EXISTS `quests` (
`id` int(11) NOT NULL,
  `command` varchar(256) NOT NULL,
  `a` varchar(256) NOT NULL,
  `b` varchar(256) NOT NULL,
  `c` varchar(256) NOT NULL,
  `d` varchar(256) NOT NULL,
  `e` varchar(256) NOT NULL,
  `template` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(512) NOT NULL,
  `email` varchar(32) NOT NULL,
  `isTeacher` tinyint(1) DEFAULT '0',
  `coin` int(11) DEFAULT '100',
  `money` int(11) DEFAULT '15'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `isTeacher`, `coin`, `money`) VALUES
(8, 'Rex', 'fae1be0c1fc080ebed4ddb60fd3be0ac57ae24eea39aac417624f0871cb16f967c53dcfc26568564bad7fd35af5fb37426b9db3b71a0c60104eea114a02f6473', 'rex@navequest.com', 0, 100, 15),
(9, '1 2', 'eb7b74ce6589ac63459f942ceb5794a9ebf34d2281e9d63ca55d92e0851b932cecd458dfcb2a580753cf6a42db7b126b74d42550e976e862f3c22ff267aed2a4', '1', 1, 100, 15),
(10, '2 ', '6da7599e34503d9fdd64a1c1d21b88c55a293d223e71008d0e3e9873ee128bf3cddc791a267a6a550668146a73e79a21e083c18db2a52e197971dfa91e39c141', '2', 0, 100, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quests`
--
ALTER TABLE `quests`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quests`
--
ALTER TABLE `quests`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
