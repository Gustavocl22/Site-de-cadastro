-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2019 às 22:13
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id_cadastro` int(10) UNSIGNED NOT NULL,
  `nome_cadastral` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_cadastro` int(10) UNSIGNED NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `email_usuario` varchar(255) DEFAULT NULL,
  `fone_usuario` varchar(20) DEFAULT NULL,
  `data_nasc_usuario` date DEFAULT NULL,
  `genero_usuario` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_cadastro`, `nome_usuario`, `email_usuario`, `fone_usuario`, `data_nasc_usuario`, `genero_usuario`) VALUES
(8, 0, 'dqwd', 'dqwdq@gmail', 'dwqd', '5464-04-12', 'm'),
(9, 0, 'eqweq', 'wqeqwe23@gmail', '12315465', '4564-03-01', 'm'),
(10, 0, 'ewqeq', 'qweqwe@gijsd', '215213', '4512-05-21', 'm'),
(11, 0, 'ewqeq', 'qweqwe@gijsd', '215213', '4512-05-21', 'm'),
(12, 0, 'sqs', 'dqwdq@gqg', '1415213', '4561-12-12', 'm'),
(13, 0, 'gustavo', 'hdiwhjqdoi@gmail', '1524645', '0000-00-00', 'm'),
(14, 0, 'dwqdq', 'guwudq@fqfq', '1545646', '4545-12-12', 'm'),
(15, 0, 'ffff', 'ffff@ffff', '12454848', '1545-12-12', 'm'),
(16, 0, 'dwdqw', 'dqwdq@gmail.com', '1234156', '1996-12-12', 'm'),
(17, 0, 'gustavo', 'gustavocatucci@gmail.com', '1254564', '1244-12-12', 'm'),
(18, 0, 'gustavo', 'danigoi@gmailcom', '124154', '1211-12-12', 'm'),
(19, 0, 'gustavo', 'gudtasvo@gmail.com', '2154', '0212-12-11', 'm'),
(20, 0, 'dadad', 'dwdad@gmail.com', 'dwad', '1544-02-21', 'm'),
(21, 0, 'xwadw', 'dwdawd@d', 'dwadad', '5666-04-12', 'm'),
(22, 0, 'dfijahdihawd', 'dkahjdhujwd@gmail.com', '244545', '4571-05-04', 'm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_FKIndex1` (`id_cadastro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_cadastro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
