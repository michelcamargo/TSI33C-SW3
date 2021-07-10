-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2021 às 00:11
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario_sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
                           `id` int(11) NOT NULL,
                           `nome` varchar(255) NOT NULL,
                           `nascimento` date NOT NULL,
                           `endereco` varchar(255) NOT NULL,
                           `bairro` varchar(255) NOT NULL,
                           `sexo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `nascimento`, `endereco`, `bairro`, `sexo`) VALUES
(1, 'Maria', '2021-04-01', 'teste', 'teste', ''),
(2, 'Marcelo Alexandre da Cruz Ismael', '2021-07-07', 'General bla bla ', 'tocantins', ''),
(3, 'Marcelo Alexandre da Cruz Ismael', '2021-07-07', 'General bla bla ', 'tocantins', ''),
(4, 'Tereza Aparecida', '2021-07-23', 'Joana Maria Pelizer', 'centro', ''),
(5, 'Tereza Aparecida', '2021-07-23', 'Joana Maria Pelizer', 'centro', ''),
(6, 'Pedro', '2021-08-13', 'teste', 'teste1', ''),
(7, 'maria', '2021-07-07', 'ddd', 'tocantins', ''),
(8, 'Graciela', '2021-07-07', 'ddd', 'tocantins', ''),
(9, 'Ana Laura', '2011-02-06', 'General Canrobert ', 'Centro', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;