-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2023 às 10:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estagios`
--

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
  `ano_turma` int(1) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `matricula`, `nome`, `datanasc`, `email`, `cpf`, `rg`, `endereco`, `telefone`, `ano_turma`, `id_cidade`, `id_curso`) VALUES
(1, 12345, 'João Silva', '2005-07-19', 'joao@example.com', 0, 'RG12345', '  Rua A, Cidade A', 1, '', 1, 1),
(2, 54321, 'Maria Souza', '2001-05-20', 'maria@example.com', 2147483647, 'RG54321', 'Rua B, Cidade B', 2, 'B', 2, 2),
(3, 90765, 'Carlos Santos', '1999-11-10', 'carlos@example.com', 653643, 'RG98765', 'Rua C, Cidade C', 1, 'A', 3, 1),
(4, 13579, 'Ana Pereira', '2000-02-18', 'ana@example.com', 247483046, 'RG13579', 'Rua D, Cidade D', 3, 'B', 2, 2),
(5, 24680, 'Pedro Oliveira', '2002-04-25', 'pedro@example.com', 2137483645, 'RG24680', 'Rua E, Cidade E', 3, 'A', 3, 1),
(9, 5757566, 'Lucas', '2006-04-06', 'lucasantuneslara06@gmail.com', 346576, '54356sgd', ' Santa Helena', 654556856, '', 1, 1);

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
(1, 'Área 1'),
(2, 'Área 2'),
(3, 'Área 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoavaliacao`
--

CREATE TABLE `autoavaliacao` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoavaliacao`
--

INSERT INTO `autoavaliacao` (`id`, `url`) VALUES
(1, 'http://www.exemplo.com/pagina1'),
(2, 'http://www.exemplo.com/pagina2'),
(3, 'http://www.exemplo.com/pagina3'),
(4, '6558885b4d4b9.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_empresa`
--

CREATE TABLE `avaliacao_empresa` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacao_empresa`
--

INSERT INTO `avaliacao_empresa` (`id`, `url`) VALUES
(1, 'http://www.exemplo.com/empresa1'),
(2, 'http://www.exemplo.com/empresa2'),
(3, 'http://www.exemplo.com/empresa3');

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
(2, 'Garibaldi'),
(3, 'Porto Alegre');

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
(1, 'Curso de Informática', 1),
(2, 'Curso de Engenharia', 2),
(3, 'Curso de Medicina', 3);

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
  `cnpj` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `endereco`, `telefone`, `email`, `cnpj`, `id_cidade`) VALUES
(1, 'Empresa 1', 'Endereço 1', 1234567890, 'empresa1@example.com', 123456, 1),
(2, 'Empresa 2', 'Endereço 2', 2147483647, 'empresa2@example.com', 32546, 2),
(3, 'Empresa 3', 'Endereço 3', 2147483647, 'empresa3@example.com', 57751, 3),
(4, 'Empresa 4', 'Endereço 4', 2147483647, 'empresa4@example.com', 333431, 1),
(5, 'Empresa 5', 'Endereço 5', 2147483647, 'empresa5@example.com', 14646, 2),
(6, 'Empresa 6', 'Endereço 6', 2147483647, 'empresa6@example.com', 445751, 3);

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
  `situacao_estagio` enum('não iniciado','em andamento','finalizado') NOT NULL,
  `data_inicio` date NOT NULL,
  `previsao_fim` date NOT NULL,
  `id_orientador` int(11) NOT NULL,
  `id_coorientador` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `data_fim` date DEFAULT NULL,
  `id_area` int(11) NOT NULL,
  `id_avaliacao_empresa` int(11) DEFAULT NULL,
  `id_termo_compromisso` int(11) DEFAULT NULL,
  `id_plano_atividades` int(11) DEFAULT NULL,
  `id_autoavaliacao` int(11) DEFAULT NULL,
  `id_tcc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estagio_aluno`
--

INSERT INTO `estagio_aluno` (`id`, `id_aluno`, `id_empresa`, `carga_horaria`, `id_coordenador`, `tipo_processo_estagio`, `numero_encaminhamentos`, `situacao_estagio`, `data_inicio`, `previsao_fim`, `id_orientador`, `id_coorientador`, `id_supervisor`, `data_fim`, `id_area`, `id_avaliacao_empresa`, `id_termo_compromisso`, `id_plano_atividades`, `id_autoavaliacao`, `id_tcc`) VALUES
(1, 1, 1, 200, 1, '', 2, 'em andamento', '2023-11-09', '2024-01-11', 3, 4, 1, '2024-02-21', 1, 1, 2, 2, 1, 3),
(2, 2, 2, 200, 2, '', 3, 'em andamento', '2023-11-09', '2024-01-11', 3, 4, 1, '2024-02-21', 2, 2, 3, 3, 2, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano_atividades`
--

CREATE TABLE `plano_atividades` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plano_atividades`
--

INSERT INTO `plano_atividades` (`id`, `url`) VALUES
(1, 'http://www.exemplo.com/plano1'),
(2, 'http://www.exemplo.com/plano2'),
(3, 'http://www.exemplo.com/plano3');

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
(1, 'Professor 1', 'professor1@example.com', 1),
(2, 'Professor 2', 'professor2@example.com', 2),
(3, 'Professor 3', 'professor3@example.com', 3),
(4, 'Professor 4', 'professor4@example.com', 1),
(5, 'Professor 5', 'professor5@example.com', 2),
(6, 'Professor 6', 'professor6@example.com', 3);

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
(1, 'Supervisor 1', 1234567890, 'supervisor1@example.com', 1, 'Cargo 1'),
(2, 'Supervisor 2', 2147483647, 'supervisor2@example.com', 2, 'Cargo 2'),
(3, 'Supervisor 3', 2147483647, 'supervisor3@example.com', 3, 'Cargo 3'),
(4, 'Supervisor 4', 1234567890, 'supervisor4@example.com', 1, 'Cargo 4'),
(5, 'Supervisor 5', 2147483647, 'supervisor5@example.com', 2, 'Cargo 5'),
(6, 'Supervisor 6', 2147483647, 'supervisor6@example.com', 3, 'Cargo 6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcc`
--

CREATE TABLE `tcc` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tcc`
--

INSERT INTO `tcc` (`id`, `url`) VALUES
(1, 'http://www.exemplo.com/tcc1'),
(2, 'http://www.exemplo.com/tcc2'),
(3, 'http://www.exemplo.com/tcc3'),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `termo_compromisso`
--

CREATE TABLE `termo_compromisso` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `termo_compromisso`
--

INSERT INTO `termo_compromisso` (`id`, `url`) VALUES
(1, 'http://www.exemplo.com/termo1'),
(2, 'http://www.exemplo.com/termo2'),
(3, 'http://www.exemplo.com/termo3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `id_curso`) VALUES
(1, '2º Informática', 1),
(3, '3º Informática', 1);

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
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `id_cidade` (`id_cidade`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autoavaliacao`
--
ALTER TABLE `autoavaliacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avaliacao_empresa`
--
ALTER TABLE `avaliacao_empresa`
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
  ADD KEY `id_coordenador` (`id_coordenador`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD KEY `id_cidade` (`id_cidade`);

--
-- Índices para tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_avaliacao_empresa` (`id_avaliacao_empresa`),
  ADD KEY `id_termo_compromisso` (`id_termo_compromisso`),
  ADD KEY `id_plano_atividades` (`id_plano_atividades`),
  ADD KEY `id_autoavaliacao` (`id_autoavaliacao`),
  ADD KEY `id_tcc` (`id_tcc`);

--
-- Índices para tabela `plano_atividades`
--
ALTER TABLE `plano_atividades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`);

--
-- Índices para tabela `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Índices para tabela `tcc`
--
ALTER TABLE `tcc`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `termo_compromisso`
--
ALTER TABLE `termo_compromisso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curso` (`id_curso`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `autoavaliacao`
--
ALTER TABLE `autoavaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `avaliacao_empresa`
--
ALTER TABLE `avaliacao_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `plano_atividades`
--
ALTER TABLE `plano_atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tcc`
--
ALTER TABLE `tcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `termo_compromisso`
--
ALTER TABLE `termo_compromisso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`),
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_coordenador`) REFERENCES `professor` (`id`);

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`);

--
-- Limitadores para a tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  ADD CONSTRAINT `estagio_aluno_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_10` FOREIGN KEY (`id_plano_atividades`) REFERENCES `plano_atividades` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_11` FOREIGN KEY (`id_autoavaliacao`) REFERENCES `autoavaliacao` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_12` FOREIGN KEY (`id_tcc`) REFERENCES `tcc` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_3` FOREIGN KEY (`id_coordenador`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_4` FOREIGN KEY (`id_orientador`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_5` FOREIGN KEY (`id_coorientador`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_6` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_7` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_8` FOREIGN KEY (`id_avaliacao_empresa`) REFERENCES `avaliacao_empresa` (`id`),
  ADD CONSTRAINT `estagio_aluno_ibfk_9` FOREIGN KEY (`id_termo_compromisso`) REFERENCES `termo_compromisso` (`id`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`);

--
-- Limitadores para a tabela `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
