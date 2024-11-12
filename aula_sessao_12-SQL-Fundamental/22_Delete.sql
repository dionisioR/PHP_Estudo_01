-- DELETE
-- esta operação é irreversível
-- Sintaxe:
-- Delete from tabela where condicao

select * from produtos;

delete from produtos where id = 10;

delete from produtos where id between 8 and 10;

-- -----------------------------------

select * from clientes;
select id, nome, cidade from clientes;
select id, nome, cidade from clientes where nome like 'Pedro%';

delete from clientes where nome like 'Pedro%';

-- modificar o nome
update colaboradores
set 
nome = 'Mario Antunes',
sexo = 'm'
where id = 5;

-- -----------------------------------

select * from clientes where cidade = 'lisboa';
select id, nome, email from clientes where cidade = 'lisboa';
select id, nome, email from clientes where cidade = 'lisboa' and id < 20;
delete from clientes where cidade = 'lisboa' and id < 20;