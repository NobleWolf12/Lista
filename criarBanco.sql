create database db_lista;
use db_lista;
CREATE TABLE tb_usuarios(id INT AUTO_INCREMENT PRIMARY KEY,usuario VARCHAR(100) not null,senha VARCHAR(100) not null, nome VARCHAR(30));
create table tb_produtos(cod INT PRIMARY KEY,nome VARCHAR(30),preco decimal(15,2),qnt INT(11));