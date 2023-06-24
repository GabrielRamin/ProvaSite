-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2023 às 16:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastrodeimoveis`
--
CREATE DATABASE IF NOT EXISTS `cadastrodeimoveis` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cadastrodeimoveis`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `casas`
--

CREATE TABLE `casas` (
  `ID` int(11) NOT NULL,
  `PRECO` int(11) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `QUARTOS` int(11) NOT NULL,
  `TIPO` text NOT NULL,
  `IDUNICO` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `casas`
--

INSERT INTO `casas` (`ID`, `PRECO`, `ENDERECO`, `QUARTOS`, `TIPO`, `IDUNICO`) VALUES
(1, 1000, 'Rua Carlinho', 3123, 'Apartamento', '75851717ddcba1614ba0d3d63ae343da'),
(2, 3232, 'Rua Carlinhoddsad', 555, 'Casa', '67bf43f3e8b46b7f63c8c1e5e23c43b2'),
(3, 4000, 'Rua Magrao', 2999, 'Apartamento', '6f8677741bf0374365a047fc9ce2d56b'),
(4, 2000, 'Rua Carlin2dad2ho', 20, 'Apartamento', 'dd3691401eab9e64573f1f54ec6ab9c2'),
(5, 2000, 'Rua Caaaaarlinho', 8, 'Apartamento', '9649c0623dd8cc3fb843892b439af24d'),
(6, 5000, 'Rua seila', 4, 'Casa', 'c84e036ffa1629b02491d0c5c4df96d9'),
(7, 5000, 'Rua Carlinhdasaso', 2000, 'Casa', '67390a63c57d036a403d3728159a0c62');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `casas`
--
ALTER TABLE `casas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
