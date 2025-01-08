create database psicologia;
use psicologia;
create table pacientes (
id  varchar(50) PRIMARY KEY,
paciente varchar(50) not null,
telefone varchar(20) not null,
genero varchar(10) not null,
data varchar(10) not null,
horario varchar(5) not null,
psicologo varchar(50) not null,
FK_CRP varchar(50) not null
);

create table psicologo(
CRP varchar(50) PRIMARY KEY,
psicologo varchar(50) not null,
senha varchar(50) not null
    );

ALTER TABLE pacientes 
ADD CONSTRAINT FK_CRP
FOREIGN KEY (FK_CRP)
REFERENCES psicologo(CRP);




