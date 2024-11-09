-- UNION - combina conjuntos de resultados de duas ou mais declarações SELECT num único conjunto de resultados. 

-- buscar nomes dos produtos e nomes dos colanoradores tudo em uma única query
/*
Observe que neste caso primeiro vem uma coluna com nome como título.
O produto da segunda coluna foi esquecido para a apresentação dos dados. 
Além disso, os registros vem em sequência: primeiro a lista completa dos colaboradores e só depois a lista de produtos.
*/
select nome from colaboradores
union 
select produto from produtos;

-- vamos melhorar a consulta
select 'colaboradores' as 'contexto', id, nome as 'valor' from colaboradores
union
select 'produtos' as 'contexto', id, produto as 'valor' from produtos;

-- quero obter os totais de clientes, colaboradores, produtos e encomendas registradas

select 'clientes' as 'contexto', count(*) as 'total' from clientes
union
select 'colaboradores' as 'contexto', count(*) as 'total' from colaboradores
union
select 'produtos' as 'contexto', count(*) as 'total' from encomendas;

-- UNION - remove os valores duplicados
select nome from colaboradores
union
select nome from colaboradores;

-- UNION ALL - não remove os valores duplicados
select nome from colaboradores
union all
select nome from colaboradores;