CREATE DATABASE escola;

USE escola;

CREATE TABLE cursos(
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    nome_reduzido VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE turmas(
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    curso_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (curso_id) REFERENCES cursos(id)
);

CREATE TABLE form(
    id INT NOT NULL AUTO_INCREMENT,
    ano INT NOT NULL,
    dt_inicio DATE NOT NULL,
    dt_fim DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE formresp(
    id INT NOT NULL AUTO_INCREMENT,
    formulario_id INT NOT NULL,
    nome_aluno VARCHAR(400) NOT NULL,
    turma_id INT NOT NULL,
    cpf INT NOT NULL,
    cidade VARCHAR(400) NOT NULL,
    transporte INT(1) NOT NULL,
    poder_publico_RESPONSAVEL VARCHAR(400) NOT NULL,
    diferenca_paga INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (formulario_id) REFERENCES form(id)
);