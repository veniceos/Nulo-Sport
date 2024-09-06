-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2024 às 20:47
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nulo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `competitor`
--

CREATE TABLE `competitor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `CPF` varchar(255) NOT NULL,
  `RG` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `competitor`
--

INSERT INTO `competitor` (`id`, `name`, `age`, `height`, `gender`, `CPF`, `RG`, `team`) VALUES
(11, 'Maria', 'wsssss', 'gggggggggggggggg', 'hhh', 'sssssssss', 'ssssssss', 'jhdchdxhfxj'),
(12, 'Ana', 'wsssss', 'ggggggg', 'hhh', '0987654323456', 'ssssssss', 'sssssssssss');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locality`
--

CREATE TABLE `locality` (
  `id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `CEP` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `modality` varchar(255) NOT NULL,
  `olympic_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `CPF` varchar(255) NOT NULL,
  `RG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `competitor`
--
ALTER TABLE `competitor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `locality`
--
ALTER TABLE `locality`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `competitor`
--
ALTER TABLE `competitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `locality`
--
ALTER TABLE `locality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
