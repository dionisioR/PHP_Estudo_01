select distinct(cidade) from clientes; -- 17 registros
select count(distinct(cidade)) from clientes;  -- 17

-- Quero saber quantos clientes tenho por cada cidade, mesmo sem aber quantas cidades tenho e quantos clientes tenho no total
select cidade, count(*) as 'total_clientes' from clientes group by cidade; -- 17 registros

-- qual é a cidade com mais registros
select cidade, count(*) as 'total_clientes' from clientes
group by cidade
order by total_clientes desc;

/* 
A quantidade de cada produto vendida até o momento na nossa loja.
Temos que ur buscar a vada encomenda, a quantidade de cada produto
e apresentar o nome do produto, e a quantidade vendida.
*/

select produtos.id, produtos.produto, sum(encomendas_produtos.quantidade) 
from produtos left join encomendas_produtos
on produtos.id = encomendas_produtos.id_produto
group by produtos.id, produtos.produto
order by produtos.id;

-- mesma query anterior com alias 
select p.id, p.produto, sum(ep.quantidade) as 'quantidade'
from produtos p left join encomendas_produtos ep 
on p.id = ep.id_produto
group by p.id, p.produto
order by p.id;

-- quantos clientes temos de cada sexo?
select sexo, count(*) as 'total' from clientes group by sexo;

-- contar a quantidade de clientes que tem o no seu nome a palavra 'silva'
select sexo, count(*) as 'total' from clientes where nome like '%Silva%' group by sexo;
select sexo, nome from clientes where nome like "%silva%" order by sexo;

-- quantas encomendas foram registradas por cada dia do mês de janeiro de 2030?
select DATE(data_hora) as 'data', count(*) 'encomendas' from encomendas
where data_hora >= "2030-01-31 23:59:59"
group by DATE(data_hora);
