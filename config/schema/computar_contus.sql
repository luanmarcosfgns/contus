-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Fev-2021 às 17:59
-- Versão do servidor: 10.3.27-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `computar_contus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` text DEFAULT NULL,
  `valor` double NOT NULL,
  `tipo` char(1) NOT NULL,
  `vencimento` date NOT NULL,
  `pagarei` date DEFAULT NULL,
  `periodo_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id`, `nome`, `descricao`, `valor`, `tipo`, `vencimento`, `pagarei`, `periodo_id`, `created`, `modified`, `user_id`) VALUES
(1, 'Luz', 'Conta de Energia', 96.3, 'P', '2021-01-29', '2021-01-29', 1, '2021-01-28 18:23:52', '2021-01-29 13:34:57', 1),
(2, 'Luz', 'Conta de Energia', 96.3, 'P', '2021-01-29', '2021-01-29', 3, '2021-01-28 18:23:52', '2021-01-28 18:23:52', 2),
(3, 'Faculdade', 'Uniplan ', 189, 'P', '2021-02-10', '2021-02-03', 2, '2021-02-04 22:46:00', '2021-02-05 16:00:54', 1),
(4, 'Energia', 'Luz ', 97.37, 'P', '2021-02-03', '2021-02-04', 2, '2021-02-04 22:48:00', '2021-02-05 16:01:15', 1),
(5, 'Nubank', 'Nub', 156.73, 'P', '2021-02-02', '2021-02-03', 2, '2021-02-04 22:49:04', '2021-02-05 16:10:13', 1),
(6, 'Pós Graduação ', '', 139.82, 'P', '2021-02-28', '2021-02-10', 2, '2021-02-04 23:18:51', '2021-02-04 23:18:51', 1),
(7, 'TV', 'Havab', 308.94, 'P', '2021-02-10', '2021-02-04', 2, '2021-02-04 23:21:23', '2021-02-05 16:01:48', 1),
(8, 'Aluguel', 'Casa', 300, 'P', '2021-02-22', '2021-02-04', 2, '2021-02-04 23:22:56', '2021-02-04 23:22:56', 1),
(12, 'Internet ', 'Click net ', 105, 'P', '2021-02-10', '2021-02-09', 2, '2021-02-05 16:04:15', '2021-02-05 16:04:15', 1),
(13, 'Água ', 'Saae', 65.78, 'P', '2021-02-10', '2021-02-09', 2, '2021-02-05 16:06:53', '2021-02-05 16:06:53', 1),
(14, 'Compra', 'Compra Rodrigues ', 32.02, 'P', '2021-02-05', '2021-02-03', 2, '2021-02-05 16:08:45', '2021-02-05 16:08:45', 1),
(15, 'Padaria ', 'Lanche', 9, 'P', '2021-02-03', '2021-02-03', 2, '2021-02-05 16:11:02', '2021-02-05 16:11:02', 1),
(16, 'Mozona Salário ', 'Salário da Mozona', 1033.29, 'R', '2021-02-03', '2021-02-01', 2, '2021-02-05 16:12:22', '2021-02-05 16:12:22', 1),
(17, 'Mozão Salário ', 'MS', 1384.9, 'R', '2021-02-05', '2021-02-05', 2, '2021-02-05 16:14:37', '2021-02-05 16:14:37', 1),
(18, 'Concerto da moto', '', 250, 'P', '2021-02-05', '2021-02-06', 2, '2021-02-06 18:35:19', '2021-02-06 18:35:19', 1),
(19, 'Feira', '', 50, 'P', '2021-02-05', '2021-02-05', 2, '2021-02-06 18:36:08', '2021-02-06 18:36:08', 1),
(21, 'Gasolina', '', 20, 'P', '2021-02-06', '2021-02-06', 2, '2021-02-06 18:38:30', '2021-02-06 18:38:30', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `inicio` date NOT NULL,
  `fim` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `periodos`
--

INSERT INTO `periodos` (`id`, `nome`, `descricao`, `inicio`, `fim`, `user_id`) VALUES
(1, 'Janeiro Casa', 'Teste', '2021-02-01', '2021-01-31', 1),
(2, 'FEVEREIRO', 'SEM EMPREGO', '2021-02-01', '2020-02-28', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created`, `modified`) VALUES
(1, 'luanmarcosfgns@gmail.com', '$2y$10$ZTnSYVz5kMCqQe./2k5Mb.rBYHfzH0vpmpMkc1sNDackyKzVa9T0W', NULL, '2021-01-27 18:41:47', '2021-01-27 18:41:47');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
