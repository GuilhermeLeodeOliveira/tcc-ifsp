CREATE DATABASE ensinoidiomas;
USE ensinoidiomas;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE aluno;
CREATE TABLE aluno(
    idAluno int(11) NOT NULL,
    nome varchar(225),
    cpf varchar(14),
    email varchar(225),
    senha varchar(100),
    dataNasc DATE,
    telefone varchar(14),
    img varchar(255) NOT NULL,
    'status' varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE aluno
  ADD PRIMARY KEY (idAluno);

ALTER TABLE aluno
  MODIFY idAluno int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------------------------*/
DROP TABLE professor;
CREATE TABLE professor(
    idProfessor int(11) NOT NULL,
    nome varchar(225),
    cpf varchar(14),
    email varchar(225),
    senha varchar(100),
    dataNasc DATE,
    telefone varchar(14),
    img varchar(255) NOT NULL,
    'status' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE professor
  ADD PRIMARY KEY (idProfessor);

ALTER TABLE professor
  MODIFY idProfessor int(11) NOT NULL AUTO_INCREMENT;

/*------------------------------------------------------------------------*/

DROP TABLE aula;
CREATE TABLE aula(
	idAula int(11) NOT NULL,
	disciplina varchar(100),
  periodo varchar(10),
  idProfessor int NOT NULL REFERENCES professor(idProfessor),
  idAluno int REFERENCES aluno(idAluno)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE aula
  ADD PRIMARY KEY (idAula);

ALTER TABLE aula
  MODIFY idAula int(11) NOT NULL AUTO_INCREMENT;

/*---------------------------------------------------------------------*/

DROP TABLE atividade;
CREATE TABLE atividade(
  idAtividade int(11) NOT NULL,
  numero int NOT NULL,
  titulo VARCHAR(100) NOT NULL,
  media VARCHAR(255) NOT NULL,
  idAula int REFERENCES aula(idAula)
);

ALTER TABLE atividade
  ADD PRIMARY KEY (idAtividade);

ALTER TABLE atividade
  MODIFY idAtividade int(11) NOT NULL AUTO_INCREMENT;

/*------------------------------------------------------------------------*/

DROP TABLE messages;
CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

/*--------------------------------------------------------------------------------------*/

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

INSERT INTO `aula`(`idAula`, `disciplina`, `mestre`, `dataInicio`, `dataTermino`, `periodo`, `idProfessor`, `idAluno`) VALUES (DEFAULT,'alemão','Beatriz Alves S.','2022-07-25','2022-08-25','1','2','1');