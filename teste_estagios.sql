CREATE TABLE AREA (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(255) NOT NULL
);

CREATE TABLE CIDADE (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(255) NOT NULL
);


CREATE TABLE TERMO_COMPROMISSO (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	URL VARCHAR(255) NOT NULL
);

CREATE TABLE TCC (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	URL VARCHAR(255) NOT NULL
);

CREATE TABLE AUTOAVALIACAO (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	URL VARCHAR(255) NOT NULL
);

CREATE TABLE AVALIACAO_EMPRESA (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	URL VARCHAR(255) NOT NULL
);

CREATE TABLE PLANO_ATIVIDADES (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	URL VARCHAR(255) NOT NULL
);

CREATE TABLE PROFESSOR (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(255) NOT NULL,
	EMAIL VARCHAR(255) NOT NULL,
ID_AREA INT NOT NULL,
	FOREIGN KEY (ID_AREA) REFERENCES AREA(ID)
);

CREATE TABLE CURSO (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(255) NOT NULL,
	ID_COORDENADOR INT NOT NULL,
	FOREIGN KEY (ID_COORDENADOR) REFERENCES PROFESSOR(ID)
);

CREATE TABLE EMPRESA (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(255) NOT NULL,
ENDERECO VARCHAR(255) NOT NULL,	
	TELEFONE INT NOT NULL,
EMAIL VARCHAR(255) NOT NULL,
	CNPJ INT NOT NULL UNIQUE
);


CREATE TABLE SUPERVISOR (
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NOME VARCHAR(255) NOT NULL,
	TELEFONE INT NOT NULL,
EMAIL VARCHAR(255) NOT NULL,
	ID_EMPRESA INT NOT NULL,
CARGO VARCHAR(255) NOT NULL,
	FOREIGN KEY (ID_EMPRESA) REFERENCES EMPRESA(ID)
);

CREATE TABLE aluno(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	MATRICULA INT NOT NULL UNIQUE,
	NOME VARCHAR(255) NOT NULL,
	DATANASC DATE NOT NULL,
	EMAIL VARCHAR(255) NOT NULL,
	CPF INT NOT NULL UNIQUE,
	RG VARCHAR(255) NOT NULL,
	ENDERECO VARCHAR(255) NOT NULL,
	TELEFONE INT NOT NULL,
	ANO_TURMA CHAR(1) NOT NULL,
	ID_CIDADE INT NOT NULL,
	ID_CURSO INT NOT NULL,
	FOREIGN KEY (ID_CIDADE) REFERENCES CIDADE(ID),
FOREIGN KEY (ID_CURSO) REFERENCES CURSO(ID)
);

CREATE TABLE ESTAGIO_ALUNO(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	ID_ALUNO INT NOT NULL UNIQUE,
ID_EMPRESA  INT NOT NULL UNIQUE,
	CARGA_HORARIA INT NOT NULL,
	ID_COORDENADOR INT NOT NULL UNIQUE,
	TIPO_PROCESSO_ESTAGIO VARCHAR(255) NOT NULL,
	NUMERO_ENCAMINHAMENTOS INT NOT NULL UNIQUE,
	SITUACAO_ESTAGIO ENUM('Não Iniciado','Em andamento','Finalizado') NOT NULL,
	DATA_INICIO DATE NOT NULL,
	PREVISAO_FIM DATE NOT NULL,
	ID_ORIENTADOR INT NOT NULL UNIQUE,
ID_COORIENTADOR INT NOT NULL UNIQUE,
ID_SUPERVISOR INT NOT NULL UNIQUE,
	DATA_FIM DATE,
	ID_AREA INT NOT NULL,
	ID_AVALIACAO_EMPRESA INT,
	ID_TERMO_COMPROMISSO INT,
	ID_PLANO_ATIVIDADES INT,
	ID_AUTOAVALIACAO INT,
	ID_TCC INT,
	FOREIGN KEY (ID_ALUNO) REFERENCES ALUNO(ID),
	FOREIGN KEY (ID_EMPRESA) REFERENCES EMPRESA(ID),
	FOREIGN KEY (ID_COORDENADOR) REFERENCES PROFESSOR(ID),
	FOREIGN KEY (ID_ORIENTADOR) REFERENCES PROFESSOR(ID),
	FOREIGN KEY (ID_COORIENTADOR) REFERENCES PROFESSOR(ID),
	FOREIGN KEY (ID_SUPERVISOR) REFERENCES SUPERVISOR(ID),
	FOREIGN KEY (ID_AREA) REFERENCES AREA(ID),
	FOREIGN KEY (ID_AVALIACAO_EMPRESA) REFERENCES AVALIACAO_EMPRESA(ID),
	FOREIGN KEY (ID_TERMO_COMPROMISSO) REFERENCES TERMO_COMPROMISSO(ID),
	FOREIGN KEY (ID_PLANO_ATIVIDADES) REFERENCES PLANO_ATIVIDADES(ID),
	FOREIGN KEY (ID_AUTOAVALIACAO) REFERENCES AUTOAVALIACAO(ID),
    FOREIGN KEY (ID_TCC) REFERENCES TCC(ID)
);

CREATE TABLE USUARIO(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(255) NOT NULL,
    LOGIN VARCHAR(255) NOT NULL,
    SENHA VARCHAR(255) NOT NULL
);

INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES
('admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

INSERT INTO area (nome) VALUES
('Área 1'),
('Área 2'),
('Área 3');

INSERT INTO autoavaliacao (url) VALUES
('http://www.exemplo.com/pagina1'),
('http://www.exemplo.com/pagina2'),
('http://www.exemplo.com/pagina3');

INSERT INTO avaliacao_empresa (url) VALUES
('http://www.exemplo.com/empresa1'),
('http://www.exemplo.com/empresa2'),
('http://www.exemplo.com/empresa3');

INSERT INTO professor (nome, email, id_area) VALUES
('Professor 1', 'professor1@example.com', 1),
('Professor 2', 'professor2@example.com', 2),
('Professor 3', 'professor3@example.com', 3),
('Professor 4', 'professor4@example.com', 1),
('Professor 5', 'professor5@example.com', 2),
('Professor 6', 'professor6@example.com', 3);

INSERT INTO curso (nome, id_coordenador) VALUES
('Curso de Informática', 1),
('Curso de Engenharia', 2),
('Curso de Medicina', 3);

INSERT INTO cidade (nome) VALUES
('Cidade 1'),
('Cidade 2'),
('Cidade 3');

INSERT INTO empresa (nome, endereco, telefone, email, cnpj, id_cidade) VALUES
('Empresa 1', 'Endereço 1', 1234567890, 'empresa1@example.com', 2147483647, 1),
('Empresa 2', 'Endereço 2', 2147483647, 'empresa2@example.com', 2147483647, 2),
('Empresa 3', 'Endereço 3', 2147483647, 'empresa3@example.com', 2147483647, 3),
('Empresa 4', 'Endereço 4', 2147483647, 'empresa4@example.com', 2147483647, 1),
('Empresa 5', 'Endereço 5', 2147483647, 'empresa5@example.com', 2147483647, 2),
('Empresa 6', 'Endereço 6', 2147483647, 'empresa6@example.com', 2147483647, 3);


INSERT INTO plano_atividades (id, url) VALUES
(1, 'http://www.exemplo.com/plano1'),
(2, 'http://www.exemplo.com/plano2'),
(3, 'http://www.exemplo.com/plano3');

INSERT INTO supervisor (nome, telefone, email, empresa_numero_convenio, cargo) VALUES
('Supervisor 1', 1234567890, 'supervisor1@example.com', 1, 'Cargo 1'),
('Supervisor 2', 2147483647, 'supervisor2@example.com', 2, 'Cargo 2'),
('Supervisor 3', 2147483647, 'supervisor3@example.com', 3, 'Cargo 3'),
('Supervisor 4', 1234567890, 'supervisor4@example.com', 1, 'Cargo 4'),
('Supervisor 5', 2147483647, 'supervisor5@example.com', 2, 'Cargo 5'),
('Supervisor 6', 2147483647, 'supervisor6@example.com', 3, 'Cargo 6');

INSERT INTO tcc (url) VALUES
('http://www.exemplo.com/tcc1'),
('http://www.exemplo.com/tcc2'),
('http://www.exemplo.com/tcc3');

INSERT INTO termo_compromisso (url) VALUES
('http://www.exemplo.com/termo1'),
('http://www.exemplo.com/termo2'),
('http://www.exemplo.com/termo3');

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(12345, 'João Silva', '2000-01-15', 'joao@example.com', 2147483641, 'RG12345', 'Rua A, Cidade A', 1, 'A', 1, 1);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(54321, 'Maria Souza', '2001-05-20', 'maria@example.com', 2147643642, 'RG54321', 'Rua B, Cidade B', 2, 'B', 2, 2);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(98765, 'Carlos Santos', '1999-11-10', 'carlos@example.com', 2147653643, 'RG98765', 'Rua C, Cidade C', 1, 'A', 3, 1);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(13579, 'Ana Pereira', '2000-02-18', 'ana@example.com', 2147483646, 'RG13579', 'Rua D, Cidade D', 3, 'B', 2, 2);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(24680, 'Pedro Oliveira', '2002-04-25', 'pedro@example.com', 2147483645, 'RG24680', 'Rua E, Cidade E', 3, 'A', 3, 1);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(11111, 'Marta Mendes', '2001-11-11', 'marta@example.com', 2147483644, 'RG11111', 'Rua F, Cidade F', 2, 'A', 1, 3);


INSERT INTO estagio_aluno (id_aluno, empresa_numero_convenio, carga_horaria, id_coordenador, tipo_processo_estagio, encaminhamentos, situacao_estagio, data_inicio, previsao_fim, id_orientador, id_coorientador, id_supervisor, data_fim, id_area, id_avaliacao_empresa, id_termo_compromisso, id_plano_atividades, id_autoavaliacao, id_tcc) VALUES
(1, 1, 30, 1, 'Estágio Curricular', 301, 'Não Iniciado', '2023-10-01', '0000-00-00', 1, 1, 1, '2023-12-31', 1, 1, 1, 1, 1, 1),
(2, 2, 20, 2, 'Estágio Profissional', 302, 'Em andamento', '2023-09-15', '0000-00-00', 2, 2, 2, '2024-02-29', 2, 2, 2, 2, 2, 2),
(3, NULL, 40, 3, 'Estágio Voluntário', 303, 'Finalizado', '2023-11-05', '2023-12-15', 3, 3, 3, '2023-12-15', 3, 3, 3, 3, 3, 3),
(4, 4, 20, 4, 'Estágio Profissional', 302, 'Finalizado', '2023-09-10', '2023-12-09', 4, 4, 4, '2024-03-15', 4, NULL, 4, 4, NULL, NULL),
(5, 5, 35, 5, 'Estágio Curricular', 301, 'Finalizado', '2023-08-01', '2023-10-31', NULL, 5, 5, '2023-10-31', 5, 5, NULL, NULL, 5, 5),
(6, 6, 40, 6, 'Estágio Voluntário', 303, 'Não Iniciado', '2023-12-01', '2024-03-01', 6, 6, 6, '2024-03-01', 6, 6, NULL, NULL, 6, 6);
