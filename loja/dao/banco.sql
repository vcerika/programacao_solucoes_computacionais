CREATE DATABASE market;

USE market;

CREATE TABLE cidade (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE cliente (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
    nome VARCHAR(100) NOT NULL, 
    nascimento DATE DEFAULT '1980-04-20',
    salario DOUBLE DEFAULT 1412.00 ,
    codCidade INT NOT NULL ,
    FOREIGN KEY (codCidade) REFERENCES cidade( id )
);