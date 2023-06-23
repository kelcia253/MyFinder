-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 23-Jun-2023 às 19:39
-- Versão do servidor: 5.5.34
-- versão do PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `myfinder`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `senha`) VALUES
(1, 'Noemi', 'neomi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Matheus', 'matheus@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Nefi', 'Nefi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'kel', 'kel@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Admin', 'Admin@gmail.com', '80177534a0c99a7e3645b52f2027a48b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicoprodutos`
--

CREATE TABLE IF NOT EXISTS `historicoprodutos` (
  `nome` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  `id_produtos` int(10) DEFAULT NULL,
  `id_historico` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_historico`),
  KEY `fk_id_produtos` (`id_produtos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produtos` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `fk_cliente` int(100) DEFAULT NULL,
  `preco` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_produtos`),
  KEY `fk_id_cliente` (`fk_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `historicoprodutos`
--
ALTER TABLE `historicoprodutos`
  ADD CONSTRAINT `fk_id_produtos` FOREIGN KEY (`id_produtos`) REFERENCES `produtos` (`id_produtos`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
