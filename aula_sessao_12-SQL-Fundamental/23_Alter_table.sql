/*
A declaração ALTER TABLE permite realizar as seguintes operações numa tabela:
- Adicionar uma nova coluna utilizndo a cláusula ADD. 
- Modificar um atributo de uma coluna, tal como restrição, valor padrão, etc., utilizando a cláusula MODIFY
- Remover colunas utilizando a cláusula DROP 
*/ 

create table socio(
id integer primary key auto_increment,
nome varchar(40)
);

insert into socio (nome) values("Ana"),("Maria"),("João"),("Pedro");

select * from socio;

-- ----------------------------------------
-- adicionar uma nova coluna email
alter table socio add email varchar(50) null default null;

-- ----------------------------------------
-- Adicionar uma nova coluna 'cidade' depois da coluna 'nome'
alter table socio add cidade varchar(50) null default 'Guará' after nome;

-- ----------------------------------------
-- se quisermos adicionar duas ou mais colunas
alter table socio
add created_at datetime null default now(),
add updated_at datetime null default now(),
add deleted_at datetime null default null;

-- ----------------------------------------
-- Não existe a expressão BEFORE, mas existe a expressão FIRST
alter table socio add nova_coluna int null first;
select * from socio;

-- ----------------------------------------

-- Modificar o tamanho da coluna email para ter o máximo de 100 caracteres
alter table socio modify email varchar(100) null default null;

-- Podemos modificar várias colunas
alter table socio 
modify created_at int null default null,
modify updated_at int null default null,
modify deleted_at int null default null;

-- ----------------------------------------

-- remover a coluna email
select * from socio;
alter table socio drop email;

-- removendo várias colunas ao mesmo tempo
alter table socio
drop column cidade,
drop column created_at,
drop column updated_at,
drop column deleted_at;

select * from socio;

-- a expressão 'COLUMN' é facultativa

-- ----------------------------------------
 
