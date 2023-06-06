-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2023 às 21:04
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `myfinder`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `historicoprodutos` (
  `nome` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  `id_produtos` int(10) DEFAULT NULL,
  `id_historico` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historicoprodutos`
--

INSERT INTO `historicoprodutos` (`nome`, `preco`, `data`, `id_produtos`, `id_historico`) VALUES
('gato', '1.350,00', '0000-00-00 00:00:00', 24, 17),
('ooo', 'ooo', '0000-00-00 00:00:00', 25, 18),
('sdasdasd', '1.900,00', '0000-00-00 00:00:00', 26, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `fk_cliente` int(100) DEFAULT NULL,
  `preco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome`, `descricao`, `link`, `imagem`, `fk_cliente`, `preco`) VALUES
(24, 'gato', 'ggsdfg', 'dfgdfgga', 'imagensProduto/20230606200411gato.jpg', 6, '1.350,00'),
(25, 'ooo', 'ooo', 'oo', 'imagensProduto/20230606204526gato.jpg', 6, 'ooo'),
(26, 'sdasdasd', 'asdasd', 'asdasd', 'imagensProduto/20230606205348gato.jpg', 6, '1.900,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `historicoprodutos`
--
ALTER TABLE `historicoprodutos`
  ADD PRIMARY KEY (`id_historico`),
  ADD KEY `fk_id_produtos` (`id_produtos`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`),
  ADD KEY `fk_id_cliente` (`fk_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `historicoprodutos`
--
ALTER TABLE `historicoprodutos`
  MODIFY `id_historico` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
