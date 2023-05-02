-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Maio-2023 às 03:22
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(12) NOT NULL,
  `adm` int(1) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `confirma` varchar(12) NOT NULL,
  `recuperar_senha` varchar(220) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admm` int(1) NOT NULL,
  `niveis_acesso_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `telefone`, `adm`, `senha`, `confirma`, `recuperar_senha`, `data`, `admm`, `niveis_acesso_id`) VALUES
(1, 'wa', 'wa@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-07 03:51:27', 1, 0),
(3, 'wa', 'wba@gmail.com', 0, 0, '698d51a19d8a', '2', NULL, '2023-04-13 18:48:13', 0, 0),
(4, 'wa', 'waba@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-07 03:44:46', 0, 0),
(5, 'wa', 'waa@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-07 03:46:43', 0, 0),
(10, 'wa', 'A@GMAIL.COM', 0, 0, '81dc9bdb52d0', '', NULL, '2023-04-13 18:11:43', 0, 1),
(13, 'wa', 'aa@gmail.com', 0, 0, '11', '', NULL, '2023-04-07 04:01:19', 1, 0),
(14, 'wa', 'aaa@gmail.com', 0, 0, '11', '', NULL, '2023-04-07 17:13:01', 0, 0),
(15, 'wa', 'ww@gmail.com', 0, 0, '111', '', NULL, '2023-04-09 15:54:40', 0, 0),
(28, 'wa', 'www@gmail.com', 0, 0, '111', '', NULL, '2023-04-09 16:26:08', 0, 0),
(30, 'bb', 'bb@gmail.com', 0, 0, '6512bd43d9ca', '', NULL, '2023-04-09 17:23:55', 0, 0),
(31, 'bbb', 'bbb@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-09 17:31:42', 0, 0),
(32, '', '', 0, 0, 'd41d8cd98f00', '', NULL, '2023-04-12 17:50:26', 0, 0),
(34, 'wa', 'Ab@GMAIL.COM', 0, 0, '698d51a19d8a', '', NULL, '2023-04-12 17:50:57', 0, 0),
(35, 'wa', 'wagner@gmail.com', 0, 0, '111', '', NULL, '2023-04-16 12:31:38', 1, 1),
(36, 'wa', 'dois@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-12 18:31:50', 0, 0),
(38, 'wa', 'vi@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-13 01:56:32', 0, 0),
(41, 'paulo', '111', 0, 0, 'bce6f821b66b', '', NULL, '2023-04-13 17:59:39', 0, 0),
(42, 'paulo', '1234', 0, 0, '28bc21614075', '2', NULL, '2023-04-13 18:48:42', 0, 0),
(45, 'paulo', 'ana@gmail.com', 0, 1, '111', '', NULL, '2023-05-01 12:46:24', 0, 0),
(46, 'wan', '12@gmail.com', 0, 0, '698d51a19d8a', '1', NULL, '2023-04-13 18:49:13', 0, 1),
(47, 'wagne', 'wagne@gmail.com', 0, 0, '698d51a19d8a', '', NULL, '2023-04-16 15:15:07', 0, 0),
(50, 'wan', '122@gmail.com', 0, 2, '111', '', NULL, '2023-05-01 13:36:50', 0, 0),
(52, 'wa', '22@gmail.com', 0, 0, '111', '', NULL, '2023-05-01 14:18:43', 0, 0),
(55, '1222@gmail.com', '1222@gmail.com', 111221, 1, '111', '111', NULL, '2023-05-01 14:15:52', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `crianca` varchar(50) NOT NULL,
  `telefone` int(12) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `data_nascimento` datetime NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `endereco` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`nome`, `email`, `crianca`, `telefone`, `genero`, `data_nascimento`, `cidade`, `estado`, `endereco`) VALUES
('hvjhg', 'maria@gmail.com', 'bb', 0, 'feminino', '2022-10-12 00:00:00', 'saumare', 'sao paulo', 'rua um');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `usuario_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id`, `nome`, `email`, `imagem`, `usuario_id`) VALUES
(1, 'ana', 'ana1@gmail.com', '', ''),
(2, '', '', 'conexao.php', '1'),
(3, '', '', 'index.php', '1'),
(4, '', '', 'login1.pgp.php', '1'),
(5, 'maria', 'ana@gmail.com', '', ''),
(6, '', '', 'klee do rock.png', '5'),
(7, '', '', 'log.png', '5'),
(8, '', '', 'logg.png', '5'),
(9, 'maria', 'ana@gmail.com', '', ''),
(10, '', '', 'logg.png', '9'),
(11, 'ana', 'wagner.vieira@fatec.sp.gov.br', '', ''),
(12, '', '', 'logg.png', '11'),
(13, 'ana', 'ana1@gmail.com', '', ''),
(14, '', '', 'klee do rock.png', '13'),
(15, 'ana', 'ana2@gmail.com', '', ''),
(16, '', '', 'a.mp4', '15'),
(17, 'ana', 'ana2@gmail.com', '', ''),
(18, '', '', 'logg.png', '17'),
(19, 'ana', 'ana2@gmail.com', '', ''),
(20, '', '', 'klee do rock.png', '19'),
(21, 'ana', 'ana@gmail.com', '', ''),
(22, '', '', 'log.png', '21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `id` int(11) NOT NULL,
  `turma` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `crianca` int(50) NOT NULL,
  `van` varchar(32) NOT NULL,
  `telefone` int(12) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `convernio` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `turma`, `nome`, `email`, `crianca`, `van`, `telefone`, `endereco`, `data_nascimento`, `convernio`) VALUES
(1, 211, '1221', '211212', 211221, '212121', 12122, '', '0000-00-00', ''),
(2, 12, 'mari', 'wa@dia.com', 0, 'van dia', 19914, '', '0000-00-00', ''),
(3, 11, '1231', '12313@gmail.com', 12313, '1321', 21231, '', '3123-02-21', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `crianca` varchar(32) NOT NULL,
  `telefone` int(12) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `data_nascimento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`nome`, `email`, `crianca`, `telefone`, `genero`, `data_nascimento`, `cidade`, `estado`, `endereco`) VALUES
('Ana clarA', 'wa@gmail.com', 'ana paula', 1998444, 'ferminino', '0000-00-00 00:00:00', 'sumare', 'sao paulo', 'rua um'),
('Ana clarA', 'wa@gmail.com', 'ana paula', 1998444, 'ferminino', '0000-00-00 00:00:00', 'sumare', 'sao paulo', 'rua um');

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2023-04-13 04:34:26', 0),
(2, 'Colaborador', '2023-04-13 04:35:20', 0),
(3, 'Cliente', '2023-04-13 04:35:54', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarionivel`
--

CREATE TABLE `usuarionivel` (
  `nivel` smallint(4) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarionivel`
--

INSERT INTO `usuarionivel` (`nivel`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Colaborador'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(11) NOT NULL,
  `adm` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `niveis_acesso_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `adm`, `email`, `senha`, `niveis_acesso_id`) VALUES
(0, 'ana maria', 1, 'wagner@gmai', '11', 0),
(0, 'Cesar Szpak', 0, 'cesar@celke', '111', 1),
(0, 'Cesar Szpak', 0, 'cesar@celke', '111', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarionivel`
--
ALTER TABLE `usuarionivel`
  ADD PRIMARY KEY (`nivel`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarionivel`
--
ALTER TABLE `usuarionivel`
  MODIFY `nivel` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
