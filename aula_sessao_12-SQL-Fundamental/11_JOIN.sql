Select clientes.nome, encomendas.id, encomendas.data_hora 
from clientes, encomendas
where encomendas.id_cliente = clientes.id;

-- utilizando join
select clientes.nome, encomendas.id, encomendas.data_hora
from clientes join encomendas
on encomendas.id_cliente = clientes.id;

/*
A expressão JOIN (também pode ser INNER JOIN) vai juntar no mesmo resultado os dados da tabela clientes
com o dados da tabela encomendas.

INNER JOIN (ou simplesmente JOIN), vai buscar apenas os dados que existam nas duas tabelas.
Se uma das tabelas não tem dados relacionados com a outra, esses dados não são devolvidos.

*/ 

select clientes.nome, encomendas.id, encomendas.data_hora
from clientes left join encomendas
on encomendas.id_cliente = clientes.id
where clientes.id = 1;

select clientes.nome, encomendas.id, encomendas.data_hora
from clientes left join encomendas
on encomendas.id_cliente = clientes.id
where clientes.id = 2;

select colaboradores.*, encomendas.*
from colaboradores left join encomendas
on colaboradores.id = encomendas.id_colaborador;

select encomendas.*, colaboradores.*
from colaboradores left join encomendas
on colaboradores.id = encomendas.id_colaborador;

-- Podemos simplificar essa quantidade de código
select e.*, c.*
from colaboradores c left join encomendas e
on c.id = e.id_colaborador;

-- --------------------------------------------
select c.*, e.* 
from clientes c left join encomendas e
on c.id = e.id_cliente
where c.id = 20;

select e.id, e.data_hora, c.nome
from encomendas e left join clientes c
on e.id_cliente = c.id
limit 20;

select e.id, e.data_hora, c.nome
from encomendas e left join clientes c
on e.id_cliente = c.id
order by e.id desc
limit 20;

-- ----------------------------------------
select count(*) as 'total' from encomendas_produtos;
select * from encomendas_produtos limit 20;

select e.data_hora, p.produto, ep.quantidade
from encomendas_produtos ep left join encomendas e 
on e.id = ep.id_encomenda
left join produtos p 
on p.id = ep.id_produto
where e.id = 3;

select e.data_hora, p.produto, ep.quantidade, p.preco_unidade * ep.quantidade as 'TOTAL'
from encomendas_produtos ep 
left join encomendas e
on e.id = ep.id_encomenda
left join produtos p
on p.id = ep.id_produto
where e.id = 3;