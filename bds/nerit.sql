-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2018 às 05:43
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nerit`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idcadastro` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idcadastro`, `nome`, `telefone`, `email`, `endereco`) VALUES
(39, 'Bulbassauro', 2222222, 'Bulbassauro@poke.com', 'Route 14'),
(40, 'Charmander', 4444444, 'char@poke.com', 'route 11'),
(41, 'Pikachu', 77777, 'pika@gmail.com', 'route 10'),
(42, 'charizard', 654747, 'char@poke.com', 'Mt silver');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_has_tag`
--

CREATE TABLE `cadastro_has_tag` (
  `cadastro_idcadastro` int(11) NOT NULL,
  `tag_idtag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_has_tag`
--

INSERT INTO `cadastro_has_tag` (`cadastro_idcadastro`, `tag_idtag`) VALUES
(39, 4),
(40, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE `tag` (
  `idtag` int(11) NOT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`idtag`, `tipo`) VALUES
(1, 'Fogo'),
(2, 'Agua'),
(3, 'Fantasma'),
(4, 'Planta'),
(5, 'Psíquico'),
(6, 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idcadastro`);

--
-- Indexes for table `cadastro_has_tag`
--
ALTER TABLE `cadastro_has_tag`
  ADD PRIMARY KEY (`cadastro_idcadastro`,`tag_idtag`),
  ADD KEY `fk_cadastro_has_tag_tag1_idx` (`tag_idtag`),
  ADD KEY `fk_cadastro_has_tag_cadastro_idx` (`cadastro_idcadastro`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idtag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idcadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `idtag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro_has_tag`
--
ALTER TABLE `cadastro_has_tag`
  ADD CONSTRAINT `fk_cadastro_has_tag_cadastro` FOREIGN KEY (`cadastro_idcadastro`) REFERENCES `cadastro` (`idcadastro`),
  ADD CONSTRAINT `fk_cadastro_has_tag_tag1` FOREIGN KEY (`tag_idtag`) REFERENCES `tag` (`idtag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
