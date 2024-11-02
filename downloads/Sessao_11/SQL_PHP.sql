create database base_teste;
use base_teste;

create table clientes(
id integer primary key auto_increment,
nome varchar(50),
email varchar(50),
created_at datetime
)engine=InnoDB;

select * from clientes;

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- insert into contactos(nome, telefone, created_at, updated_at) values("Érika", "12-1234-4125", now(), now());