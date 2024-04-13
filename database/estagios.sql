-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2023 às 00:02
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--DROP DATABASE IF EXISTS estagios;
-- Banco de dados: `estagios`
--
CREATE DATABASE IF NOT EXISTS estagios;
-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `ano_turma` char(1) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `matricula`, `nome`, `datanasc`, `email`, `cpf`, `rg`, `endereco`, `telefone`, `ano_turma`, `id_cidade`, `id_curso`) VALUES
(1, 4567, 'Lucas', '2006-04-06', 'lucas@gmail.com', 4356, '4354656', '     Santa Helena, Bento Gonçalves', 99346437, '2', 1, 1),
(2, 745565, 'Bernardo', '2006-12-15', 'bernardo@gmail.com', 5474575, '656756756', '    457575', 1111111111, '2', 2, 1),
(3, 2147483647, 'Guilherme', '2006-07-06', 'guiguerra@gmail.com', 5686778, '6767867867', 'Endereço 1', 2147483647, '2', 1, 1),
(9, 2147483647, 'Eduardo', '2006-04-05', 'eduardo@gmail.com', 2147483647, '6444444444', '  Endereço', 2147483647, '2', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id`, `nome`) VALUES
(1, 'Programação Web'),
(2, 'Banco de Dados'),
(3, 'Área');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`) VALUES
(1, 'Bento Gonçalves'),
(2, 'Garibaldi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_coordenador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `id_coordenador`) VALUES
(1, 'Informática', 1),
(3, 'Enologia', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cnpj` int(14) NOT NULL,
  `id_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `endereco`, `telefone`, `email`, `cnpj`, `id_cidade`) VALUES
(1, 'Bling', '54565756', 2147483647, 'bling@gmail.com', 4657, 1),
(2, 'Inluder', '757575', 56756676, 'includer@gmail.com', 346567, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio_aluno`
--

CREATE TABLE `estagio_aluno` (
  `id` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `carga_horaria` int(11) NOT NULL,
  `id_coordenador` int(11) NOT NULL,
  `tipo_processo_estagio` varchar(255) NOT NULL,
  `numero_encaminhamentos` int(11) NOT NULL,
  `situacao_estagio` enum('Não Iniciado','Em andamento','Finalizado') NOT NULL,
  `data_inicio` date NOT NULL,
  `previsao_fim` date NOT NULL,
  `id_orientador` int(11) NOT NULL,
  `id_coorientador` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `data_fim` date NOT NULL,
  `id_area` int(11) NOT NULL,
  `url_termo_compromisso` varchar(255) DEFAULT NULL,
  `url_plano_atividades` varchar(255) DEFAULT NULL,
  `url_avaliacao_empresa` varchar(255) DEFAULT NULL,
  `url_tcc` varchar(255) DEFAULT NULL,
  `url_autoavaliacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estagio_aluno`
--

INSERT INTO `estagio_aluno` (`id`, `id_aluno`, `id_empresa`, `carga_horaria`, `id_coordenador`, `tipo_processo_estagio`, `numero_encaminhamentos`, `situacao_estagio`, `data_inicio`, `previsao_fim`, `id_orientador`, `id_coorientador`, `id_supervisor`, `data_fim`, `id_area`, `url_termo_compromisso`, `url_plano_atividades`, `url_avaliacao_empresa`, `url_tcc`, `url_autoavaliacao`) VALUES
(1, 1, 1, 200, 1, 'Digital', 0, 'Em andamento', '0000-00-00', '0000-00-00', 2, 3, 1, '0000-00-00', 1, '656fa59cc1811.pdf', NULL, NULL, NULL, NULL),
(7, 2, 1, 200, 1, 'Digital', 0, 'Finalizado', '2023-12-12', '2023-12-12', 1, 1, 1, '0000-00-00', 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `id_area`) VALUES
(1, 'Rafael Jaques', 'rafajaques@gmail.com', 1),
(2, 'Thyago Salvá', 'salva@gmail.com', 1),
(3, 'Ivan Prá', 'ivanpra@gmail.com', 1),
(4, 'Eduardo Schenato', 'eduardoschenato@gmail.com', 1),
(5, 'Fulano', 'fulano@bento.ifrs.edu.br', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `supervisor`
--

INSERT INTO `supervisor` (`id`, `nome`, `telefone`, `email`, `id_empresa`, `cargo`) VALUES
(1, 'Supervisor1', 2147483647, 'supervisor1@gmail.com', 1, 'Analista de Sistemas'),
(2, 'Supervisor 2', 23456789, 'supervisor2@includer.com', 2, 'UI / UX Designer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aluno_cidade1_idx` (`id_cidade`),
  ADD KEY `fk_aluno_curso1_idx` (`id_curso`);

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_coordenador_curso_professor1_idx` (`id_coordenador`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_empresa_cidade1_idx` (`id_cidade`);

--
-- Índices para tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_aluno_UNIQUE` (`id_aluno`),
  ADD KEY `fk_estagio_aluno_aluno_idx` (`id_aluno`),
  ADD KEY `fk_estagio_aluno_empresa1_idx` (`id_empresa`),
  ADD KEY `fk_estagio_aluno_professor2_idx` (`id_orientador`),
  ADD KEY `fk_estagio_aluno_professor1_idx` (`id_coorientador`),
  ADD KEY `fk_estagio_aluno_supervisor1_idx` (`id_supervisor`),
  ADD KEY `fk_estagio_aluno_area1_idx` (`id_area`),
  ADD KEY `fk_estagio_aluno_coordenador_curso1` (`id_coordenador`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_professor_area1_idx` (`id_area`);

--
-- Índices para tabela `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supervisor_empresa1_idx` (`id_empresa`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluno_curso1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_coordenador_curso_professor1` FOREIGN KEY (`id_coordenador`) REFERENCES `professor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_empresa_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  ADD CONSTRAINT `fk_estagio_aluno_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_aluno_area1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_aluno_coordenador_curso1` FOREIGN KEY (`id_coordenador`) REFERENCES `curso` (`id_coordenador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_aluno_empresa1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_aluno_professor1` FOREIGN KEY (`id_coorientador`) REFERENCES `professor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_aluno_professor2` FOREIGN KEY (`id_orientador`) REFERENCES `professor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_aluno_supervisor1` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `fk_professor_area1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `fk_supervisor_empresa1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
