-- AVG - Calcula a média de um conjunto de resultados númericos
-- SUM - Permite ver o somatório de um conjunto de resultados

-- média dos preços dos produtos
select AVG(preco_unidade) as 'preço médio' from produtos;

-- podemos arredondar as casas decimais
select ROUND( AVG(preco_unidade), 2) as 'Preço Médio' from produtos;

select sum(preco_unidade) as 'Soma dos valores' from produtos;
select round( sum(preco_unidade) ) as 'Soma dos valores' from produtos;
-- --------------------------------------------------------------------------

select e.id, e.data_hora, p.produto, p.preco_unidade, ep.quantidade
from encomendas_produtos ep
left join encomendas e
on ep.id_encomenda = e.id
left join produtos p
on ep.id_produto = p.id
where e.id = 50;


-- --------------------------------------------------------------------------

select e.id, e.data_hora, p.produto, p.preco_unidade, ep.quantidade, ep.quantidade * p.preco_unidade as 'Total'
from encomendas_produtos ep
left join encomendas e
on ep.id_encomenda = e.id
left join produtos p
on ep.id_produto = p.id
where e.id = 50;

-- --------------------------------------------------------------------------

select e.id, e.data_hora, p.produto, p.preco_unidade, ep.quantidade,
cast(ep.quantidade * p.preco_unidade as decimal(10,2) ) as 'Total'
from encomendas_produtos ep
left join encomendas e
on ep.id_encomenda = e.id
left join produtos p
on ep.id_produto = p.id
where e.id = 50;

-- --------------------------------------------------------------------------

select
sum(cast(ep.quantidade * p.preco_unidade as decimal(10,2) ) ) as 'Total'
from encomendas_produtos ep
left join encomendas e
on ep.id_encomenda = e.id
left join produtos p
on ep.id_produto = p.id
where e.id = 50;

-- ----------------------
select * from encomendas where paga = 0;

select sum(cast(ep.quantidade * p.preco_unidade as decimal(20,2))) as 'volume total de negócio'
from encomendas_produtos ep left join encomendas e 
on ep.id_encomenda = e.id 
left join produtos p 
on ep.id_produto = p.id 
where e.paga = 1;

