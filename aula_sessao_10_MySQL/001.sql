create database contactos;
use contactos;

create table amigos(
id integer primary key auto_increment,
nome varchar(50),
created_at datetime,
updated_at datetime,
deleted_at datetime
)engine=innodb;

create table telefones(
id integer primary key auto_increment,
id_amigo integer not null,
numero varchar(20),
created_at datetime,
updated_at datetime,
deleted_at datetime,
foreign key (id_amigo) references amigos (id)
)engine=InnoDB;

insert into amigos (nome, created_at, updated_at, deleted_at) values ("Juca", "2024-10-19", "2024-10-19", null);
insert into amigos (nome, created_at, updated_at, deleted_at) values ("SOFIA", now(), now(), null);
insert into amigos (nome, created_at, updated_at, deleted_at) values ("Érika", now(), now(), null);
insert into amigos (nome, created_at, updated_at, deleted_at) values ("Anna", now(), now(), null);
select * from amigos;

insert into telefones (id_amigo, numero,created_at, updated_at, deleted_at) values(1, '1111-1111', now(), now(), null);
insert into telefones (id_amigo, numero,created_at, updated_at, deleted_at) values(1, '2222-1111', now(), now(), null);
insert into telefones (id_amigo, numero,created_at, updated_at, deleted_at) values(2, '3333-3333', now(), now(), null);
insert into telefones (id_amigo, numero,created_at, updated_at, deleted_at) values(2, '4444-3333', now(), now(), null);

select * from telefones;
-- --------------------------------------------------------------------------------------------------

select * from amigos;
select * from amigos order by nome asc;
select * from amigos order by nome desc;
select nome from amigos;
select nome from amigos order by nome asc;
select * from amigos where id = 2;

select * from telefones where id_amigo = 2;

select amigos.nome, telefones.numero from amigos, telefones where amigos.id = telefones.id_amigo;
select amigos.nome, telefones.numero from amigos, telefones where amigos.id = telefones.id_amigo and telefones.id_amigo = 2;
select amigos.nome, telefones.numero from amigos, telefones where amigos.id = telefones.id_amigo and amigos.nome = 'sofia';
select amigos.nome as 'Proprietário', telefones.numero as 'Número' from amigos, telefones where amigos.id = telefones.id_amigo and amigos.nome = 'sofia';






