-- imagine uma lista de encomendas efetuadas por todos os clientes cujo nome começa com João

select encomendas.*
from encomendas
left join clientes
on encomendas.id_cliente = clientes.id 
where clientes.nome like 'João%'
order by encomendas.id_cliente;

-- ou

select encomendas.*
from encomendas
where id_cliente in(
	select id from clientes where nome like 'João%'
)
order by encomendas.id_cliente;

/*
Vamos calcular o preço total de  cada produto encomendado em cada encomenda.
O que pretendo obter é, por cada produto de cada encomenda,
o id da encomenda, o id do cliente, a quantidade de produto e o nome, e o preco
total da compra desse produto, isto é, a multiplicação da quantiade pelo preço por unidade
*/

select 
ep.id_encomenda,
e.id_cliente,
ep.quantidade,
p.produto,
cast(ep.quantidade * p.preco_unidade as decimal(20,2)) as 'total'
from encomendas_produtos ep
left join produtos p on ep.id_produto = p.id 
left join encomendas e on e.id = ep.id_encomenda;

-- -----------------------------
select id_encomenda, id_cliente, sum(total) as 'total'
from
(
	select 
    ep.id_encomenda,
    e.id_cliente,
    ep.quantidade,
    p.produto,
    cast(ep.quantidade * p.preco_unidade as decimal(20,2)) as 'total'
    from encomendas_produtos ep 
    left join produtos p on ep.id_produto = p.id 
    left join encomendas e on e.id = ep.id_encomenda
) a
group by id_encomenda;
-- -----------------------------
select id_encomenda, id_cliente, sum(total) as 'total'
from
(
	select 
    ep.id_encomenda,
    e.id_cliente,
    ep.quantidade,
    p.produto,
    cast(ep.quantidade * p.preco_unidade as decimal(20,2)) as 'total'
    from encomendas_produtos ep 
    left join produtos p on ep.id_produto = p.id 
    left join encomendas e on e.id = ep.id_encomenda
    where e.id = 3
) a
group by id_encomenda;