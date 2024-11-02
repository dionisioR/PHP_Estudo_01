select nome, email from clientes LIMIT 10;
select id, nome, email from clientes ORDER BY id desc LIMIT 10;


-- offset 5 -> indica que os cinco primeiros registros serão ignorados
select id, nome, email from clientes;
select id, nome, email from clientes LIMIT 5;
select id, nome, email from clientes limit 5 offset 5;
select id, nome, email from clientes LIMIT 5 OFFSET 100;
select id, nome, email from clientes limit 3 offset 10;
-- outra forma mais curta de escrever o mesmo código
-- o primeiro valor é o offset e o segundo valor é o limit
select id, nome, email from clientes limit 10, 3;

-- buscar o produto mais caro
select * from produtos order by preco_unidade desc limit 1;

-- buscar o produtoo mais barato
select * from produtos order by preco_unidade asc limit 1;

-- buscar o terceiro produto mais caro
select * from produtos order by preco_unidade desc limit 2, 1;
select * from produtos order by preco_unidade desc limit 1 offset 2;