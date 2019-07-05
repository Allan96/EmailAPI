-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 05-Jul-2019 às 21:24
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emailAPI`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`) VALUES
(3, 'Economatica'),
(4, 'BPP'),
(5, 'Confidence'),
(6, 'Landscape');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposdeemail`
--

CREATE TABLE `tiposdeemail` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tiposdeemail`
--

INSERT INTO `tiposdeemail` (`id`, `nome`, `link`, `cliente`) VALUES
(1, 'Estudo Insign', './templates/EstudoInsign/', 'Economatica'),
(2, 'Estudos Value\r\n', './templates/EstudoValue/', 'Economatica'),
(3, 'BPP', '', 'BPP'),
(4, 'Confidence', '', 'Confidence'),
(5, 'Landscape', '', 'Landscape'),
(6, 'Economatica - Mensal', '', 'Economatica'),
(7, 'Economatica - Info', './templates/InfoEconomatica/', 'Economatica'),
(8, 'Economatica RPPS', './templates/EconomaticaRPPS/', 'Economatica'),
(9, 'Economatica News', './templates/EconomaticaNews/', 'Economatica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(2, 'Allan', 'allan10'),
(3, 'ValVal', '123456'),
(4, 'Felipe', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiposdeemail`
--
ALTER TABLE `tiposdeemail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tiposdeemail`
--
ALTER TABLE `tiposdeemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
