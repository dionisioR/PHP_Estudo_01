-- MIN - Permite ver o valor mínimo em um conjunto de resultados
-- MAX - Permite ver o valor máximo em um conjunto de resultados

-- quero saber qual é o primeiro cliente de lisboa na tabela clientes
select id from clientes where cidade = 'Lisboa' limit 1;
select min(id) from clientes where cidade = "lisboa";
select nome from clientes where cidade = "lisboa" and id = (select min(id) from clientes where cidade = 'lisboa');

-- Qual é o preco por unidade mais baixo de todos os produtos
select min(preco_unidade) from produtos;

-- Observer que se terntar adicionar o nome do produto, neste caso a cluna produto, o sistema vai gerar um erro pois temos mais de um produto com o menor preço
select produto, min(preco_unidade) from produtos; -- não vai funcionar
select min(preco_unidade) from produtos;
select * from produtos where preco_unidade = (select min(preco_unidade) from produtos);
select * from produtos;
insert into produtos (produto, preco_unidade) values ('produto teste', 0.18);

-- quere saber qual é o id mais alto dos clientes que tem o email do g-mail
select max(id) from clientes where email like '%gmail.com';

-- quero saber qual o preço mais alto de todos os produtos
select max(preco_unidade) from produtos;