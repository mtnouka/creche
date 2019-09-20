-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2018 às 19:00
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creche`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadaluno`
--

CREATE TABLE `cadaluno` (
  `id` int(11) NOT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `matricula` varchar(10) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `idadeAnosMeses` varchar(20) DEFAULT NULL,
  `horarioDeSaida` time DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `RA` decimal(10,0) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `horarioDeEntrada` time DEFAULT NULL,
  `alergias` varchar(50) DEFAULT NULL,
  `medicamentos` varchar(50) DEFAULT NULL,
  `tipoSanguineo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadanotacoes`
--

CREATE TABLE `cadanotacoes` (
  `id` int(11) NOT NULL,
  `dataAnotacao` date DEFAULT NULL,
  `nomeEscritor` varchar(20) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `codAluno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadautorizacoes`
--

CREATE TABLE `cadautorizacoes` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `passeios` varchar(20) DEFAULT NULL,
  `codAluno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadautorizacoes`
--

INSERT INTO `cadautorizacoes` (`id`, `descricao`, `passeios`, `codAluno`) VALUES
(1, 'teste', 'teste', '123'),
(2, 'teste', 'testeasdsadasdasdsad', '123'),
(3, 'Piquinique Fim de Ano', 'Parque EcolÃ³gico do', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadresponsaveis`
--

CREATE TABLE `cadresponsaveis` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` char(15) DEFAULT NULL,
  `rg` decimal(12,0) DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `codAluno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadusuario`
--

CREATE TABLE `cadusuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `tipo_usuario` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadusuario`
--

INSERT INTO `cadusuario` (`id`, `nome`, `senha`, `email`, `cpf`, `tipo_usuario`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com.br', NULL, 'D'),
(2, 'teste', '123', 'teste@teste', '11111111111', 'P');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visualizarinfo`
--

CREATE TABLE `visualizarinfo` (
  `codVisu` int(11) NOT NULL,
  `decricao` varchar(50) DEFAULT NULL,
  `codAluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadaluno`
--
ALTER TABLE `cadaluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadanotacoes`
--
ALTER TABLE `cadanotacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadautorizacoes`
--
ALTER TABLE `cadautorizacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadresponsaveis`
--
ALTER TABLE `cadresponsaveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadusuario`
--
ALTER TABLE `cadusuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visualizarinfo`
--
ALTER TABLE `visualizarinfo`
  ADD PRIMARY KEY (`codVisu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadaluno`
--
ALTER TABLE `cadaluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadanotacoes`
--
ALTER TABLE `cadanotacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadautorizacoes`
--
ALTER TABLE `cadautorizacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cadresponsaveis`
--
ALTER TABLE `cadresponsaveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadusuario`
--
ALTER TABLE `cadusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visualizarinfo`
--
ALTER TABLE `visualizarinfo`
  MODIFY `codVisu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
