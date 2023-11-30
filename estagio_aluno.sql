-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2023 às 23:42
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
-- Índices para tabelas despejadas
--

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
  ADD KEY `fk_estagio_aluno_area1_idx` (`id_area`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estagio_aluno`
--
ALTER TABLE `estagio_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
