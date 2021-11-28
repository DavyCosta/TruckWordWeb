-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2021 às 00:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `truckword`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `codigo` int(11) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`codigo`, `cnpj`, `nome`, `usuario`, `cep`, `celular`, `telefone`, `senha`) VALUES
(1, '21.354.654/01-4', 'Eniac Transportes', 'eniac@transportes.com', '32168-3218', '11 92134-5678', '11 5654-2551', '123'),
(2, '98.978.234/22-7', 'Correios', 'correios@entrega.com', '35754-5244', '11 91381-6184', '11 3545-1265', '321'),
(7, '34234', 'Nelson', 'dfssdfsdf', '34534543', '543534534', '345345', '5345345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fretes`
--

CREATE TABLE `fretes` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `valor` int(15) DEFAULT NULL,
  `peso` int(15) DEFAULT NULL,
  `distancia` int(15) DEFAULT NULL,
  `combustivelGasto` int(15) DEFAULT NULL,
  `localColeta` varchar(15) DEFAULT NULL,
  `dataColeta` varchar(15) DEFAULT NULL,
  `localEntrega` varchar(30) DEFAULT NULL,
  `dataEntrega` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fretes`
--

INSERT INTO `fretes` (`codigo`, `descricao`, `empresa`, `valor`, `peso`, `distancia`, `combustivelGasto`, `localColeta`, `dataColeta`, `localEntrega`, `dataEntrega`) VALUES
(1, 'Chocolates', 'Nestle', 5600, 18000, 600, 230, 'Guarulhos - SP', '2021-11-25', 'Belo Horizonte - MG', '2021-11-27'),
(2, 'Celulares', 'Motorola', 13000, 15000, 2500, 900, 'Arujá -SP', '2021-11-16', 'Salvador - BA', '2021-11-20'),
(3, 'Computadores', 'Eniac', 2000, 5000, 400, 100, 'São Paulo - SP', '2021-11-20', 'Rio de Janeiro - RJ', '2021-11-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fretesativo`
--

CREATE TABLE `fretesativo` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(15) DEFAULT NULL,
  `peso` int(15) DEFAULT NULL,
  `distancia` int(15) DEFAULT NULL,
  `combustivelGasto` int(15) DEFAULT NULL,
  `localColeta` varchar(15) DEFAULT NULL,
  `dataColeta` varchar(15) DEFAULT NULL,
  `localEntrega` varchar(15) DEFAULT NULL,
  `dataEntrega` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fretesativo`
--

INSERT INTO `fretesativo` (`codigo`, `descricao`, `empresa`, `nome`, `valor`, `peso`, `distancia`, `combustivelGasto`, `localColeta`, `dataColeta`, `localEntrega`, `dataEntrega`) VALUES
(29, 'Computadores', 'Eniac', 'Lucio', 2000, 5000, 400, 100, 'São Paulo - SP', '2021-11-20', 'Rio de Janeiro ', '2021-11-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `codigo` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(15) DEFAULT NULL,
  `peso` int(15) DEFAULT NULL,
  `distancia` int(15) DEFAULT NULL,
  `combustivelGasto` int(15) DEFAULT NULL,
  `localColeta` varchar(15) DEFAULT NULL,
  `dataColeta` varchar(15) DEFAULT NULL,
  `localEntrega` varchar(15) DEFAULT NULL,
  `dataEntrega` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`codigo`, `descricao`, `empresa`, `nome`, `valor`, `peso`, `distancia`, `combustivelGasto`, `localColeta`, `dataColeta`, `localEntrega`, `dataEntrega`) VALUES
(1, 'Bolachas', 'M Dias', 'Davy Costa', 2000, 5000, 300, 80, 'Guarulhos - SP', '2021-10-13', 'Aparecida - SP', '2021-10-16'),
(40, 'Computadores', 'Eniac', 'Lucio', 2000, 5000, 400, 100, 'São Paulo - SP', '2021-11-20', 'Rio de Janeiro ', '2021-11-22'),
(41, 'Celulares', 'Motorola', 'Lucio', 13000, 15000, 2500, 900, 'Arujá -SP', '2021-11-16', 'Salvador - BA', '2021-11-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cnh` varchar(10) DEFAULT NULL,
  `categoria` varchar(5) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `carroceria` varchar(30) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `media` int(5) DEFAULT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `cpf`, `nome`, `usuario`, `cep`, `celular`, `telefone`, `cnh`, `categoria`, `marca`, `modelo`, `carroceria`, `placa`, `media`, `senha`) VALUES
(1, '123.456.789-55', 'Lucio', 'lucio@prof.com', '13544-5464', '11 91234-6544', '11 5845-2215', '16546818', 'EB', 'Scania', 'P340', 'bau', 'SKN3245', 3, '123'),
(2, '354.244.654-62', 'Nelson', 'davy@gmail.com', '54354-3541', '11 93547-3548', '11 5983-2371', '34516546', 'D', 'Volvo', 'FH440', 'Tanque', 'KJS6546', 4, '321');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `fretes`
--
ALTER TABLE `fretes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `fretesativo`
--
ALTER TABLE `fretesativo`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fretes`
--
ALTER TABLE `fretes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `fretesativo`
--
ALTER TABLE `fretesativo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
