CREATE DATABASE cadastro;
use cadastro;

create table cliente(
		id int not null auto_increment,
        nome varchar(100) not null,
        cpf char(11) not null,
        telefone char(11) not null,
        email varchar(150) not null,
        senha varchar(50) not null,
        primary key (id)
);


create table produtos(
	id int not null auto_increment primary key,
    nome varchar(255) not null,
    descricao text,
    preco decimal(10,2) not null,
    quantidade int not null
);