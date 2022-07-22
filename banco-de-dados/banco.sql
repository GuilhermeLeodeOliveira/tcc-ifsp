CREATE DATABASE ensinoidiomas;
USE ensinoidiomas;
CREATE TABLE aluno(
    idAluno serial NOT NULL PRIMARY KEY,
    nome varchar(225),
    cpf varchar(11),
    email varchar(225),
    senha varchar(100),
    dataNasc DATE,
    telefone varchar(11)
);

CREATE TABLE professor(
    idProfessor serial NOT NULL PRIMARY KEY,
    nome varchar(225),
    cpf varchar(11),
    email varchar(225),
    senha varchar(8),
    emailInst varchar(225),
    dataNasc DATE,
    telefone varchar(11)
);

CREATE TABLE aula(
	idAula serial NOT NULL PRIMARY KEY,
	disciplina varchar(100),
    mestre varchar(225),
    dataInicio DATE,
    dataTermino date,
    periodo varchar(10),
    idProfessor int NOT NULL REFERENCES professor(idProfessor),
    idAluno int NOT NULL REFERENCES aluno(idAluno)
);

SELECT b.idAula, b.displina, p.nome AS 'Professor', a.nome AS 'Aluno' FROM aula b
JOIN professor p ON p.idProfessor = b.idProfessor
JOIN aluno a ON b.idAluno = a.idAluno;