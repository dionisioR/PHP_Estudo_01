-- Concat -> Concatenação
select concat("O meu nome é ",nome, ' e meu e-mail é ', email) as 'frase' from clientes;
select concat("O meu nome é ",nome, ' e meu e-mail é ', email) as 'frase' from clientes limit 10;
select concat("O meu nome é ",nome, ' e meu e-mail é ', email) as 'frase' from clientes order by nome desc limit 10;

-- CONCAT_WS
select concat_ws(' | ', nome, telefone, cidade) as "teste" from clientes;