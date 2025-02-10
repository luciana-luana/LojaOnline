-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2024 às 15:20
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercearia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `idencomendas` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `datanasc` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telemovel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`idencomendas`, `nome`, `datanasc`, `endereco`, `telemovel`, `email`) VALUES
(1, 'Luciana Luana Monteiro da Cruz', '1995-02-21', 'Rua Ernesto Silva, 40', '987456321', 'lucianadacruz.unicv@gmail.com'),
(2, 'teste', '2006-08-23', 'teste', '987654123', 'a@a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL,
  `quantidade` varchar(30) NOT NULL,
  `preco` varchar(45) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `quantidade`, `preco`, `nome`) VALUES
(1, '10', '13€', 'ROZINO com vitamina C'),
(2, '6', '50€', 'Conjunto Beauty'),
(3, '4', '26€', 'Para peles gordurosas'),
(4, '8', '35€', 'Kit beleza natural'),
(5, '6', '15€', 'Sakura Skin Care'),
(6, '6', '15€', 'Máscara de Abacate'),
(7, '5', '25€', 'Creme Hidratação'),
(8, '3', '5€', 'Garnier, anti-manchas'),
(9, '2', '17€', 'Sérum facial 3 Pack'),
(10, '0', '9€', 'Creme Facial + Tónico'),
(11, '8', '16€', 'Skincare: Pele Oleosa'),
(12, '7', '12€', 'Kit Skin Care Antirrugas'),
(13, '16', '1€', 'Escova de limpeza'),
(14, '20', '2€', 'Rolos faciais'),
(15, '6', '3€', 'Massajador Facial'),
(16, '3', '1€', 'Esponja para limpeza'),
(17, '0', '2€', 'Rolo de gelo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `idutilizadores` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`idutilizadores`, `email`, `senha`) VALUES
(1, 'lucianadacruz.unicv@gmail.com', 'Luciana1997$$');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`idencomendas`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`idutilizadores`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `idencomendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `idutilizadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
