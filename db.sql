-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Abr-2022 às 13:16
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_os`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `cpf`, `rg`, `telefone`, `cod_usuario`) VALUES
(1, 'Erivando', '2147483647', '2147483647', '2147483647', 1),
(2, 'Iago', '2147483647', '2147483647', '2147483647', 3),
(3, 'Igor', '2147483647', '2147483647', '2147483647', 4),
(4, 'José', '2147483647', '2147483647', '2147483647', 3),
(5, 'Carlos', '2147483647', '2147483647', '2147483647', 2),
(6, 'Ruan', '0867756778', '2008334556', '86986121478', 1),
(11, 'Catia', '08544652511', '20084567781', '85961290', 4),
(12, 'Lucas', '08544652511', '20084567781', '85961290', 5),
(13, 'Lucas', '08544652511', '20084567781', '85961290', 5),
(14, 'Daniel', '08544726358', '20084568965', '85986136985', 3),
(15, 'Reginaldo', '085.446.547', '20084481007', '85968191907', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id_equipamento` int(11) NOT NULL,
  `equipamento` varchar(150) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `cod_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`id_equipamento`, `equipamento`, `marca`, `modelo`, `cor`, `cod_cliente`) VALUES
(18, 'Notebook', 'Dell', 'A65', 'Cinza', 5),
(19, 'Tablet', 'Positivo', 'T800', 'Preto', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE `os` (
  `cod_OS` int(11) NOT NULL,
  `status` varchar(300) NOT NULL,
  `diagnostico` text NOT NULL,
  `observacoes` text NOT NULL,
  `orcamento` decimal(10,2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cod_equipamento` int(11) NOT NULL,
  `cod_tecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`cod_OS`, `status`, `diagnostico`, `observacoes`, `orcamento`, `data`, `cod_equipamento`, `cod_tecnico`) VALUES
(1, 'Em análise', 'Não liga', 'Nenhuma.', '95.00', '2022-04-01 00:34:16', 18, 1),
(2, 'Em análise', 'Tela quebrada', 'Nenhuma', '78.00', '2022-03-31 22:55:43', 19, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `cod_tecnico` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `especialidade` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`cod_tecnico`, `nome`, `especialidade`) VALUES
(1, 'Dalmo', 'Hardware'),
(2, 'Christiano', 'Software'),
(3, 'Eduardo', 'Celulares');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Enderson', 'enderson_contato@gmail.com', '123456'),
(2, 'Adryelson', 'adryelson_contato@gmail.com', '123456'),
(3, 'Ruan', 'ruan_contato@gmail.com', '123456'),
(4, 'Joseano', 'joseano_contato@gmail.com', '123456'),
(5, 'Wenderson', 'wenderson_contato@gmail.com', '123456'),
(6, 'Dalmo', 'dalmo_contato@teste.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id_equipamento`),
  ADD KEY `fk_cod_cliente` (`cod_cliente`);

--
-- Índices para tabela `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`cod_OS`),
  ADD KEY `fk_cod_tecnico` (`cod_tecnico`),
  ADD KEY `fk_cod_equipamento` (`cod_equipamento`);

--
-- Índices para tabela `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`cod_tecnico`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `os`
--
ALTER TABLE `os`
  MODIFY `cod_OS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `cod_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cod_usuario` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `fk_cod_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `os`
--
ALTER TABLE `os`
  ADD CONSTRAINT `fk_cod_equipamento` FOREIGN KEY (`cod_equipamento`) REFERENCES `equipamento` (`id_equipamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cod_tecnico` FOREIGN KEY (`cod_tecnico`) REFERENCES `tecnico` (`cod_tecnico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
