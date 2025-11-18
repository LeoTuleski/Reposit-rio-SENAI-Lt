CREATE DATABASE aula_php;

USE aula_php;

CREATE TABLE usuario(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100),
    senha VARCHAR(100)
)DEFAULT CHARSET utf8;

SHOW tables;

SELECT * FROM usuario;