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
