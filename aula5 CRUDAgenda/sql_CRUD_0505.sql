CREATE DATABASE contatos;
use contatos;

drop database contatos;
CREATE DATABASE agenda;
use agenda;

CREATE TABLE `contato`(
id INT NOT NULL AUTO_increment,
nome varchar(100),
endereco varchar(150),
telefone varchar(20),
PRIMARY KEY (`id`));