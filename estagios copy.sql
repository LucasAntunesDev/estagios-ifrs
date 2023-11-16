-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2023 às 10:36
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
-- Banco de dados: estagios
--

-- --------------------------------------------------------

--
-- Estrutura da tabela aluno
--

CREATE TABLE aluno (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  matricula int(11) NOT NULL UNIQUE,
  nome varchar(255) NOT NULL,
  datanasc date NOT NULL,
  email varchar(255) NOT NULL,
  cpf int(11) NOT NULL,
  rg varchar(255) NOT NULL,
  endereco varchar(255) NOT NULL,
  telefone int(11) NOT NULL,
  ano_turma char(1) NOT NULL,
  id_cidade int(11) NOT NULL,
  id_curso int(11) NOT NULL
)

--
-- Extraindo dados da tabela aluno
--

INSERT INTO aluno (id, matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(1, 12345, 'João Silva', '2000-01-15', 'joao@example.com', 2147483647, 'RG12345', 'Rua A, Cidade A', 2147483647, 'A', 1, 1),
(2, 54321, 'Maria Souza', '2001-05-20', 'maria@example.com', 2147483647, 'RG54321', 'Rua B, Cidade B', 1234567890, 'B', 2, 2),
(3, 98765, 'Carlos Santos', '1999-11-10', 'carlos@example.com', 2147483647, 'RG98765', 'Rua C, Cidade C', 2147483647, 'A', 3, 1),
(4, 13579, 'Ana Pereira', '2000-02-18', 'ana@example.com', 2147483646, 'RG13579', 'Rua D, Cidade D', 987654321, 'B', 2, 2),
(5, 24680, 'Pedro Oliveira', '2002-04-25', 'pedro@example.com', 2147483645, 'RG24680', 'Rua E, Cidade E', 876543210, 'A', 3, 1),
(6, 11111, 'Marta Mendes', '2001-11-11', 'marta@example.com', 2147483644, 'RG11111', 'Rua F, Cidade F', 765432109, 'A', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela area
--

CREATE TABLE area (
  id_area int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela area
--

INSERT INTO area (nome) VALUES
('Área 1'),
('Área 2'),
('Área 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela autoavaliacao
--

CREATE TABLE autoavaliacao (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela autoavaliacao
--

INSERT INTO autoavaliacao (url) VALUES
('http://www.exemplo.com/pagina1'),
('http://www.exemplo.com/pagina2'),
('http://www.exemplo.com/pagina3');

-- --------------------------------------------------------

--
-- Estrutura da tabela avaliacao_empresa
--

CREATE TABLE avaliacao_empresa (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela avaliacao_empresa
--

INSERT INTO avaliacao_empresa (url) VALUES
('http://www.exemplo.com/empresa1'),
('http://www.exemplo.com/empresa2'),
('http://www.exemplo.com/empresa3');

-- --------------------------------------------------------

--
-- Estrutura da tabela cidade
--

CREATE TABLE cidade (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela cidade
--

INSERT INTO cidade (nome) VALUES
('Cidade 1'),
('Cidade 2'),
('Cidade 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela curso
--

CREATE TABLE curso (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  id_coordenador int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela curso
--

INSERT INTO curso (nome, id_coordenador) VALUES
('Curso de Informática', 1),
('Curso de Engenharia', 2),
('Curso de Medicina', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela empresa
--

CREATE TABLE empresa (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  endereco varchar(255) NOT NULL,
  telefone int(11) NOT NULL,
  email varchar(255) NOT NULL,
  cnpj int(14) NOT NULL,
  id_cidade int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela empresa
--

INSERT INTO empresa (nome, endereco, telefone, email, cnpj, id_cidade) VALUES
('Empresa 1', 'Endereço 1', 1234567890, 'empresa1@example.com', 2147483647, 1),
('Empresa 2', 'Endereço 2', 2147483647, 'empresa2@example.com', 2147483647, 2),
('Empresa 3', 'Endereço 3', 2147483647, 'empresa3@example.com', 2147483647, 3),
('Empresa 4', 'Endereço 4', 2147483647, 'empresa4@example.com', 2147483647, 1),
('Empresa 5', 'Endereço 5', 2147483647, 'empresa5@example.com', 2147483647, 2),
('Empresa 6', 'Endereço 6', 2147483647, 'empresa6@example.com', 2147483647, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela estagio_aluno
--

CREATE TABLE estagio_aluno (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_aluno int(11) NOT NULL,
  empresa_numero_convenio int(11) DEFAULT NULL,
  carga_horaria int(11) NOT NULL,
  id_coordenador int(11) NOT NULL,
  tipo_processo_estagio varchar(255) NOT NULL,
  encaminhamentos int(11) NOT NULL,
  situacao_estagio enum('Não Iniciado','Em andamento','Finalizado') NOT NULL,
  data_inicio date NOT NULL,
  previsao_fim date NOT NULL,
  id_orientador int(11) DEFAULT NULL,
  id_coorientador int(11) NOT NULL,
  id_supervisor int(11) NOT NULL,
  data_fim date NOT NULL,
  id_area int(11) NOT NULL,
  id_avaliacao_empresa int(11) DEFAULT NULL,
  id_termo_compromisso int(11) DEFAULT NULL,
  id_plano_atividades int(11) DEFAULT NULL,
  id_autoavaliacao int(11) DEFAULT NULL,
  id_tcc int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela estagio_aluno
--

INSERT INTO estagio_aluno (id_aluno, empresa_numero_convenio, carga_horaria, id_coordenador, tipo_processo_estagio, encaminhamentos, situacao_estagio, data_inicio, previsao_fim, id_orientador, id_coorientador, id_supervisor, data_fim, id_area, id_avaliacao_empresa, id_termo_compromisso, id_plano_atividades, id_autoavaliacao, id_tcc) VALUES
(1, 1, 30, 1, 'Estágio Curricular', 301, 'Não Iniciado', '2023-10-01', '0000-00-00', 1, 1, 1, '2023-12-31', 1, 1, 1, 1, 1, 1),
(2, 2, 20, 2, 'Estágio Profissional', 302, 'Em andamento', '2023-09-15', '0000-00-00', 2, 2, 2, '2024-02-29', 2, 2, 2, 2, 2, 2),
(3, NULL, 40, 3, 'Estágio Voluntário', 303, 'Finalizado', '2023-11-05', '2023-12-15', 3, 3, 3, '2023-12-15', 3, 3, 3, 3, 3, 3),
(4, 4, 20, 4, 'Estágio Profissional', 302, 'Finalizado', '2023-09-10', '2023-12-09', 4, 4, 4, '2024-03-15', 4, NULL, 4, 4, NULL, NULL),
(5, 5, 35, 5, 'Estágio Curricular', 301, 'Finalizado', '2023-08-01', '2023-10-31', NULL, 5, 5, '2023-10-31', 5, 5, NULL, NULL, 5, 5),
(6, 6, 40, 6, 'Estágio Voluntário', 303, 'Não Iniciado', '2023-12-01', '2024-03-01', 6, 6, 6, '2024-03-01', 6, 6, NULL, NULL, 6, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela plano_atividades
--

CREATE TABLE plano_atividades (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela plano_atividades
--

INSERT INTO plano_atividades (id, url) VALUES
(1, 'http://www.exemplo.com/plano1'),
(2, 'http://www.exemplo.com/plano2'),
(3, 'http://www.exemplo.com/plano3');

-- --------------------------------------------------------

--
-- Estrutura da tabela professor
--

CREATE TABLE professor (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  id_area int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela professor
--

INSERT INTO professor (id, nome, email, id_area) VALUES
('Professor 1', 'professor1@example.com', 1),
('Professor 2', 'professor2@example.com', 2),
('Professor 3', 'professor3@example.com', 3),
('Professor 4', 'professor4@example.com', 1),
('Professor 5', 'professor5@example.com', 2),
('Professor 6', 'professor6@example.com', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela supervisor
--

CREATE TABLE supervisor (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  telefone int(11) NOT NULL,
  email varchar(255) NOT NULL,
  empresa_numero_convenio int(11) NOT NULL,
  cargo varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela supervisor
--

INSERT INTO supervisor (id, nome, telefone, email, empresa_numero_convenio, cargo) VALUES
('Supervisor 1', 1234567890, 'supervisor1@example.com', 1, 'Cargo 1'),
('Supervisor 2', 2147483647, 'supervisor2@example.com', 2, 'Cargo 2'),
('Supervisor 3', 2147483647, 'supervisor3@example.com', 3, 'Cargo 3'),
('Supervisor 4', 1234567890, 'supervisor4@example.com', 1, 'Cargo 4'),
('Supervisor 5', 2147483647, 'supervisor5@example.com', 2, 'Cargo 5'),
('Supervisor 6', 2147483647, 'supervisor6@example.com', 3, 'Cargo 6');

-- --------------------------------------------------------

--
-- Estrutura da tabela tcc
--

CREATE TABLE tcc (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela tcc
--

INSERT INTO tcc (url) VALUES
('http://www.exemplo.com/tcc1'),
('http://www.exemplo.com/tcc2'),
('http://www.exemplo.com/tcc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela termo_compromisso
--

CREATE TABLE termo_compromisso (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  url varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela termo_compromisso
--

INSERT INTO termo_compromisso (url) VALUES
('http://www.exemplo.com/termo1'),
('http://www.exemplo.com/termo2'),
('http://www.exemplo.com/termo3');

-- --------------------------------------------------------

--
-- Estrutura da tabela usuario
--

CREATE TABLE usuario (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  login varchar(255) NOT NULL,
  senha varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela usuario
--

INSERT INTO usuario (nome, login, senha) VALUES
('admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela aluno
--
ALTER TABLE aluno
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY matricula (matricula),
  ADD KEY id_cidade (id_cidade),
  ADD KEY fk_aluno_curso1 (id_curso);

--
-- Índices para tabela area
--
ALTER TABLE area
  ADD PRIMARY KEY (id_area);

--
-- Índices para tabela autoavaliacao
--
ALTER TABLE autoavaliacao
  ADD PRIMARY KEY (id);

--
-- Índices para tabela avaliacao_empresa
--
ALTER TABLE avaliacao_empresa
  ADD PRIMARY KEY (id);

--
-- Índices para tabela cidade
--
ALTER TABLE cidade
  ADD PRIMARY KEY (id_cidade);

--
-- Índices para tabela curso
--
ALTER TABLE curso
  ADD PRIMARY KEY (id),
  ADD KEY id_coordenador (id_coordenador);

--
-- Índices para tabela empresa
--
ALTER TABLE empresa
  ADD PRIMARY KEY (numero_convenio),
  ADD KEY id_cidade (id_cidade);

--
-- Índices para tabela estagio_aluno
--
ALTER TABLE estagio_aluno
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY id_coordenador_UNIQUE (id_coordenador),
  ADD UNIQUE KEY id_aluno_UNIQUE (id_aluno),
  ADD UNIQUE KEY id_coorientador_UNIQUE (id_coorientador),
  ADD UNIQUE KEY supervisor_UNIQUE (id_supervisor),
  ADD UNIQUE KEY id_area_UNIQUE (id_area),
  ADD UNIQUE KEY empresa_numero_convenio_UNIQUE (empresa_numero_convenio),
  ADD UNIQUE KEY id_orientador_UNIQUE (id_orientador),
  ADD UNIQUE KEY id_avaliacao_empresa_UNIQUE (id_avaliacao_empresa),
  ADD UNIQUE KEY id_termo_compromisso_UNIQUE (id_termo_compromisso),
  ADD UNIQUE KEY id_plano_atividades_UNIQUE (id_plano_atividades),
  ADD UNIQUE KEY id_autoavaliacao_UNIQUE (id_autoavaliacao),
  ADD UNIQUE KEY id_tcc_UNIQUE (id_tcc),
  ADD KEY fk_estagio_aluno_aluno_idx (id_aluno),
  ADD KEY fk_estagio_aluno_empresa1_idx (empresa_numero_convenio),
  ADD KEY fk_estagio_aluno_professor2_idx (id_orientador),
  ADD KEY fk_estagio_aluno_professor1_idx (id_coorientador),
  ADD KEY fk_estagio_aluno_supervisor1_idx (id_supervisor),
  ADD KEY fk_estagio_aluno_area1_idx (id_area),
  ADD KEY fk_estagio_aluno_avaliacao_empresa1_idx (id_avaliacao_empresa),
  ADD KEY fk_estagio_aluno_termo_compromisso1_idx (id_termo_compromisso),
  ADD KEY fk_estagio_aluno_plano_atividades1_idx (id_plano_atividades),
  ADD KEY fk_estagio_aluno_auto_avaliacao1_idx (id_autoavaliacao),
  ADD KEY fk_estagio_aluno_tcc1_idx (id_tcc);

--
-- Índices para tabela plano_atividades
--
ALTER TABLE plano_atividades
  ADD PRIMARY KEY (id);

--
-- Índices para tabela professor
--
ALTER TABLE professor
  ADD PRIMARY KEY (id_professor),
  ADD KEY id_area (id_area);

--
-- Índices para tabela supervisor
--
ALTER TABLE supervisor
  ADD PRIMARY KEY (id_supervisor),
  ADD KEY empresa_numero_convenio (empresa_numero_convenio);

--
-- Índices para tabela tcc
--
ALTER TABLE tcc
  ADD PRIMARY KEY (id);

--
-- Índices para tabela termo_compromisso
--
ALTER TABLE termo_compromisso
  ADD PRIMARY KEY (id);

--
-- Índices para tabela usuario
--
ALTER TABLE usuario
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela aluno
--
ALTER TABLE aluno
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela autoavaliacao
--
ALTER TABLE autoavaliacao
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela avaliacao_empresa
--
ALTER TABLE avaliacao_empresa
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela cidade
--
ALTER TABLE cidade
  MODIFY id_cidade int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela curso
--
ALTER TABLE curso
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela empresa
--
ALTER TABLE empresa
  MODIFY numero_convenio int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela estagio_aluno
--
ALTER TABLE estagio_aluno
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela plano_atividades
--
ALTER TABLE plano_atividades
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela professor
--
ALTER TABLE professor
  MODIFY id_professor int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela supervisor
--
ALTER TABLE supervisor
  MODIFY id_supervisor int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela tcc
--
ALTER TABLE tcc
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela termo_compromisso
--
ALTER TABLE termo_compromisso
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela usuario
--
ALTER TABLE usuario
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela aluno
--
ALTER TABLE aluno
  ADD CONSTRAINT aluno_ibfk_1 FOREIGN KEY (id_cidade) REFERENCES cidade (id_cidade) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT fk_aluno_curso1 FOREIGN KEY (id_curso) REFERENCES curso (id) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela curso
--
ALTER TABLE curso
  ADD CONSTRAINT curso_ibfk_1 FOREIGN KEY (id_coordenador) REFERENCES professor (id_professor) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela empresa
--
ALTER TABLE empresa
  ADD CONSTRAINT empresa_ibfk_1 FOREIGN KEY (id_cidade) REFERENCES cidade (id_cidade) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela estagio_aluno
--
ALTER TABLE estagio_aluno
  ADD CONSTRAINT fk_supervisor FOREIGN KEY (id_supervisor) REFERENCES supervisor (id_supervisor);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
