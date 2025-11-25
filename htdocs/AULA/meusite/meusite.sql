CREATE DATABASE meusite;

USE meusite;

CREATE TABLE usuario(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100)
)DEFAULT CHARSET utf8;

SHOW tables;

SELECT * FROM usuario;