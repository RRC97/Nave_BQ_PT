-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Maio-2015 às 21:43
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
  `expA` text NOT NULL,
  `expB` text NOT NULL,
  `expC` text NOT NULL,
  `expD` text NOT NULL,
  `expE` text NOT NULL,
  `subject` int(11) NOT NULL,
  `template` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `quests`
--

INSERT INTO `quests` (`id`, `command`, `a`, `b`, `c`, `d`, `e`, `expA`, `expB`, `expC`, `expD`, `expE`, `subject`, `template`) VALUES
(9, 'Assinale a alternativa em que o pronome â€œEUâ€ estÃ¡ bem empregado:', 'Marieta disse que nÃ£o queria nada com eu.', 'Entre eu e Marieta nada hÃ¡.', 'Este trabalho Ã© para eu fazer sozinho?', 'O que Marieta tem contra eu.', 'Para eu, este trabalho Ã© fÃ¡cil.', 'Pela norma culta, o correto seria "comigo".', 'Pela norma culta, o correto seria "Entre mim".', 'Correto!', 'Pela norma culta, o correto seria "Contra mim".', 'Pela norma culta o correto seria utilizar "mim"', 2, 3),
(13, 'Um tijolo pesa 1 kg mais meio tijolo. Quanto pesa um tijolo?', '2 kg', '1,5 kg', '1 kg', '3kg', 'NÃ£o sei', 'A questÃ£o em equaÃ§Ã£o ficaria:x = 1 + x / 2 Se passarmos o x / 2 para o outro lado a equaÃ§Ã£o ficaria( 2x - x ) / 2 = 1Logo meio tijolo Ã© igual a um tijolo igual a 2 kg', 'A questÃ£o em equaÃ§Ã£o ficaria:x = 1 + x / 2 Se passarmos o x / 2 para o outro lado a equaÃ§Ã£o ficaria( 2x - x ) / 2 = 1Logo meio tijolo Ã© igual a um tijolo igual a 2 kg', 'A questÃ£o em equaÃ§Ã£o ficaria:x = 1 + x / 2 Se passarmos o x / 2 para o outro lado a equaÃ§Ã£o ficaria( 2x - x ) / 2 = 1Logo meio tijolo Ã© igual a um tijolo igual a 2 kg', 'A questÃ£o em equaÃ§Ã£o ficaria:x = 1 + x / 2 Se passarmos o x / 2 para o outro lado a equaÃ§Ã£o ficaria( 2x - x ) / 2 = 1Logo meio tijolo Ã© igual a um tijolo igual a 2 kg', 'A questÃ£o em equaÃ§Ã£o ficaria:x = 1 + x / 2 Se passarmos o x / 2 para o outro lado a equaÃ§Ã£o ficaria( 2x - x ) / 2 = 1Logo meio tijolo Ã© igual a um tijolo igual a 2 kg', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `isTeacher`, `coin`, `money`) VALUES
(13, 'Matheus Pereira', '380bba47299a47e2e2b2900b77eae64e6b428da752fc55c56706c4b5a6a60b545062dedc9a80513c7895e568673a90d3d8ed754c25b3315f26d6926ae61f5fbd', 'matheuspereira.nave@gmail.com', 1, 190, 15),
(16, 'Jean Tozzi', 'fae1be0c1fc080ebed4ddb60fd3be0ac57ae24eea39aac417624f0871cb16f967c53dcfc26568564bad7fd35af5fb37426b9db3b71a0c60104eea114a02f6473', 'jeantozzi.nave@gmail.com', 0, 110, 15),
(17, 'Marcos Domingos Germano', '6d4b27cf812877b87c7ba0c12b565b8358c84eec86b2746ed7980146e9b50c5afe12be771737c0c8f96faf9823b5493c77d089c54e954e81abdb8d4473a46e45', 'marcossilva.nave', 1, 110, 15),
(18, 'Marcos Germano', '5a4e5ea2ffa46981c9817e71aac4b9c16198d38788fd6cbd6cfad87aa8b9b99d2202a6d7a20ff9a21bd5b72c110b2de386dfcb71ed0614d6d5ad381157b97a23', 'marcos@marcos.marcos', 0, 160, 15),
(19, 'Carlos Bezerra', 'bc294736158efd9254c062f1fc28d1ab5ec9b9d4dbb360c36ff4fbebb3ce4b591efaf59bd27ce5a1331cb01783bb0005a6ae8af766fa8643b95211b894bc9685', 'carlosbezerra.nave@gmail.com', 1, 120, 15),
(20, 'JoÃ£o Gabriel', '2ded192c496aa33b1c9c4d8da7a97b36d1b5a1d1081c41cc693db95c51057ae554ffd315c0a1c18ee2f516f8274c6f68e928ac61da3207e2f6a2d03ea1d0988b', 'joaosilva.nave@gmail.com', 0, 100, 15);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
