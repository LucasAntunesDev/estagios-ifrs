create table area (
	id int not null primary key auto_increment,
	nome varchar(255) not null
);

create table cidade (
	id int not null primary key auto_increment,
	nome varchar(255) not null
);


create table termo_compromisso (
	id int not null primary key auto_increment,
	url varchar(255) not null
);

create table tcc (
	id int not null primary key auto_increment,
	url varchar(255) not null
);

create table autoavaliacao (
	id int not null primary key auto_increment,
	url varchar(255) not null
);

create table avaliacao_empresa (
	id int not null primary key auto_increment,
	url varchar(255) not null
);

create table plano_atividades (
	id int not null primary key auto_increment,
	url varchar(255) not null
);

create table professor (
	id int not null primary key auto_increment,
	nome varchar(255) not null,
	email varchar(255) not null,
id_area int not null,
	foreign key (id_area) references area(id)
);

create table curso (
	id int not null primary key auto_increment,
	nome varchar(255) not null,
	id_coordenador int not null,
	foreign key (id_coordenador) references professor(id)
);

create table empresa (
	id int not null primary key auto_increment,
	nome varchar(255) not null,
endereco varchar(255) not null,	
	telefone int not null,
email varchar(255) not null,
	cnpj int not null unique,
	id_cidade int not null,
	foreign key (id_cidade) references cidade(id)
);


create table supervisor (
	id int not null primary key auto_increment,
	nome varchar(255) not null,
	telefone int not null,
email varchar(255) not null,
	id_empresa int not null,
cargo varchar(255) not null,
	foreign key (id_empresa) references empresa(id)
);

create table aluno(
	id int not null primary key auto_increment,
	matricula int not null unique,
	nome varchar(255) not null,
	datanasc date not null,
	email varchar(255) not null,
	cpf int not null unique,
	rg varchar(255) not null,
	endereco varchar(255) not null,
	telefone int not null,
	ano_turma char(1) not null,
	id_cidade int not null,
	id_curso int not null,
	foreign key (id_cidade) references cidade(id),
foreign key (id_curso) references curso(id)
);

create table estagio_aluno(
	id int not null primary key auto_increment,
	id_aluno int not null unique,
	id_empresa  int not null,
	carga_horaria int not null,
	id_coordenador int not,
	tipo_processo_estagio varchar(255) not null,
	numero_encaminhamentos int not null,
	situacao_estagio enum('não iniciado','em andamento','finalizado') not null,
	data_inicio date not null,
	previsao_fim date not null,
	id_orientador int not,
	id_coorientador int not,
	id_supervisor int not,
	data_fim date,
	id_area int not null,
	id_avaliacao_empresa int,
	id_termo_compromisso int,
	id_plano_atividades int,
	id_autoavaliacao int,
	id_tcc int,
	foreign key (id_aluno) references aluno(id),
	foreign key (id_empresa) references empresa(id),
	foreign key (id_coordenador) references professor(id),
	foreign key (id_orientador) references professor(id),
	foreign key (id_coorientador) references professor(id),
	foreign key (id_supervisor) references supervisor(id),
	foreign key (id_area) references area(id),
	foreign key (id_avaliacao_empresa) references avaliacao_empresa(id),
	foreign key (id_termo_compromisso) references termo_compromisso(id),
	foreign key (id_plano_atividades) references plano_atividades(id),
	foreign key (id_autoavaliacao) references autoavaliacao(id),
    foreign key (id_tcc) references tcc(id)
);

create table usuario(
	id int not null primary key auto_increment,
    nome varchar(255) not null,
    login varchar(255) not null,
    senha varchar(255) not null
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
('Empresa 1', 'Endereço 1', 1234567890, 'empresa1@example.com', 123456, 1),
('Empresa 2', 'Endereço 2', 2147483647, 'empresa2@example.com', 32546, 2),
('Empresa 3', 'Endereço 3', 2147483647, 'empresa3@example.com', 57751, 3),
('Empresa 4', 'Endereço 4', 2147483647, 'empresa4@example.com', 333431, 1),
('Empresa 5', 'Endereço 5', 2147483647, 'empresa5@example.com', 14646, 2),
('Empresa 6', 'Endereço 6', 2147483647, 'empresa6@example.com', 445751, 3);


INSERT INTO plano_atividades (id, url) VALUES
(1, 'http://www.exemplo.com/plano1'),
(2, 'http://www.exemplo.com/plano2'),
(3, 'http://www.exemplo.com/plano3');

INSERT INTO supervisor (nome, telefone, email, id_empresa, cargo) VALUES
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
(90765, 'Carlos Santos', '1999-11-10', 'carlos@example.com', 0000653643, 'RG98765', 'Rua C, Cidade C', 1, 'A', 3, 1);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES 
(13579, 'Ana Pereira', '2000-02-18', 'ana@example.com', 0247483046, 'RG13579', 'Rua D, Cidade D', 3, 'B', 2, 2);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(24680, 'Pedro Oliveira', '2002-04-25', 'pedro@example.com', 2137483645, 'RG24680', 'Rua E, Cidade E', 3, 'A', 3, 1);

INSERT INTO aluno (matricula, nome, datanasc, email, cpf, rg, endereco, telefone, ano_turma, id_cidade, id_curso) VALUES
(11111, 'Marta Mendes', '2001-11-11', 'marta@example.com', 3333333333, 'RG11111', 'Rua F, Cidade F', 2, 'A', 1, 3);


INSERT INTO estagio_aluno (id_aluno, id_empresa, carga_horaria, id_coordenador, tipo_processo_estagio, numero_encaminhamentos, situacao_estagio, data_inicio, previsao_fim, id_orientador, id_coorientador, id_supervisor, data_fim, id_area, id_avaliacao_empresa, id_termo_compromisso, id_plano_atividades, id_autoavaliacao, id_tcc) VALUES
(1, 1, 30, 1, 'Estágio Curricular', 301, 'Não Iniciado', '2023-10-01', '0000-00-00', 1, 1, 1, '2023-12-31', 1, 1, 1, 1, 1, 1),
(2, 2, 20, 2, 'Estágio Profissional', 302, 'Em andamento', '2023-09-15', '0000-00-00', 2, 2, 2, '2024-02-29', 2, 2, 2, 2, 2, 2),
(3, NULL, 40, 3, 'Estágio Voluntário', 303, 'Finalizado', '2023-11-05', '2023-12-15', 3, 3, 3, '2023-12-15', 3, 3, 3, 3, 3, 3),
(4, 4, 20, 4, 'Estágio Profissional', 302, 'Finalizado', '2023-09-10', '2023-12-09', 4, 4, 4, '2024-03-15', 4, NULL, 4, 4, NULL, NULL),
(5, 5, 35, 5, 'Estágio Curricular', 301, 'Finalizado', '2023-08-01', '2023-10-31', NULL, 5, 5, '2023-10-31', 5, 5, NULL, NULL, 5, 5),
(6, 6, 40, 6, 'Estágio Voluntário', 303, 'Não Iniciado', '2023-12-01', '2024-03-01', 6, 6, 6, '2024-03-01', 6, 6, NULL, NULL, 6, 6);
