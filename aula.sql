CREATE DATABASE aluno;
USE aluno;
CREATE TABLE Aluno(
id INT( 6 ) AUTO_INCREMENT PRIMARY KEY ,
nome VARCHAR( 30 ) NOT NULL ,
nota INT( 10 ) NOT NULL
);
INSERT INTO `aula`.`aluno` (`idAluno`, `nome`, `nota`) 
VALUES 
(NULL, 'Adenilson', '10'), 
(NULL, 'Deila', '10'),
(NULL, 'Maria', '8'), 
(NULL, 'Edilson', '7'),
(NULL, 'Anadir', '10'),
(NULL, 'Chris', '8'),
(NULL, 'Eder', '6'),
(NULL, 'Carlos', '9'),
(NULL, 'Marcos', '10'),
(NULL, 'Mirian', '9'),
(NULL, 'Amarilso', '5'),
(NULL, 'Marcela', '7'),
(NULL, 'Margarida', '8'),
(NULL, 'Mirian', '5'),
(NULL, 'Eliza', '7'),
(NULL, 'Evandro', '4'),
(NULL, 'Erick', '8'),
(NULL, 'Elsa', '10'),
(NULL, 'Marcia', '9'),
(NULL, 'Adão', '10');
