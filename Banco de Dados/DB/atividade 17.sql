create table aluno(
id_matricula int auto_increment primary key,
nome varchar(100) not null,
cpf varchar(14) not null unique,
data date not null,
endereco varchar(70) not null,
curso_idcurso int,
foreign key (curso_idcurso) references curso(id_curso)

);


create table professor(
id_professor int primary key auto_increment,
nome varchar(100) not null,
cpf varchar(14) not null unique,
curso_idcurso int,

foreign key (curso_idcurso) references curso(id_curso)
);

