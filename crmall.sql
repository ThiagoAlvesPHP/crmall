-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Abr-2021 às 14:15
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmall`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `_token` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `_token`, `nome`, `nascimento`, `sexo`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `estado`, `cidade`) VALUES
(1, 'dzFItmsPIWhJ8ZBWwzwvE9jz14Gik4yk4Rxe5uJZ', 'Thiago Alves', '1985-10-21', 'Masculino', '45450-000', 'Rua Pracinio Ricardo da Silva', '103', 'Casa', 'Teotonio Calheira', 'BA', 'Gandu'),
(2, 'KjAvDJrT71Cfw0edTB397G7ufoAhwJ11V8sCGhHI', 'Marcos Nunes', '2005-07-10', 'Masculino', '45450-000', 'Rua Alirio', '110', 'Casa', 'Teotonio Calheira', 'BA', 'Gandu'),
(4, 'KjAvDJrT71Cfw0edTB397G7ufoAhwJ11V8sCGhHI', 'Julila Bonfim', '1985-04-25', 'Feminino', '45450-000', 'Rua Gustavo Libânio Leite', '54', 'Casa', 'Centro', 'Bahia', 'Gandu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
