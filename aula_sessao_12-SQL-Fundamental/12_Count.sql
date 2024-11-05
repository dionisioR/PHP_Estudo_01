-- COUNT

-- total de clientes na base de dados
select count(*) from clientes; -- Conta todos os registros
select count(*) as 'total_clientes' from clientes;
select count(id) as 'total_clientes' from clientes;  -- conta todos os registros onde o id é diferente de null

-- quantidade de clientes do sexo feminino
select count(*) as 'sexo feminino' from clientes where sexo = 'f';

-- quantidade de clientes ativos
select count(*) 'cliente ativo' from clientes where cliente_ativo = 1;

-- quantidade de clientes com e-mail do hotmail
select count(*) as 'hotmail' from clientes where email like '%hotmail.com';

-- quantos produtos existem na tabela produto
select count(*) as 'produtos' from produtos where preco_unidade >= 1;

-- quantos clientes são de Lisboa e quantos clientes são de Porto
select 'Porto' as cidade, count(*) as 'cliente' from clientes where cidade = "Porto"
union
select 'Lisboa' as cidade, count(*) as 'cliente' from clientes where cidade = 'Lisboa';

/*
Uma vez que cada instrução SELECT retorna um valor, neste caso coloque a expressão UNION.
Esta é uma das formas possíveis de obter vários resultados numa mesma query
*/
