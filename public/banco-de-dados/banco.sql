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
    senha varchar(100),
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

SELECT a.displina, a.mestre, a.periodo, b.nome, b.cpf, b.email, b.dataNasc, b.telefone, b.senha FROM `aula` a
JOIN aluno b ON b.idAluno = a.idAluno
JOIN professor p ON p.idProfessor = a.idProfessor
WHERE b.idAluno = 1;

SELECT a.displina, p.nome AS 'mestres', a.periodo FROM `aula` a
JOIN aluno b ON b.idAluno = a.idAluno
JOIN professor p ON p.idProfessor = a.idProfessor
WHERE b.idAluno = 1;

INSERT INTO `aula`(`idAula`, `disciplina`, `mestre`, `dataInicio`, `dataTermino`, `periodo`, `idProfessor`, `idAluno`) VALUES (DEFAULT,'alemão','Beatriz Alves S.','2022-07-25','2022-08-25','1','2','1')