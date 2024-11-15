-- quero saber os dados fundamentais da encomenda 1:
-- quem comprou, quem vendeu, quando e qual foi o total da encomenda

-- vamos primeriro calcular todos os totais de todos os produtos vendidos
-- em todas as encomendas.
-- Vamos aproveitar para trazer ja a identificação do cliente e do colaborador de cada encomenda.
select 
encomendas_produtos.id_encomenda,
encomendas.id_cliente,
encomendas.id_colaborador,
encomendas.data_hora,
encomendas_produtos.quantidade,
produtos.produto,
cast(encomendas_produtos.quantidade * produtos.preco_unidade as decimal(20,2)) as 'total'
from encomendas_produtos
left join produtos on encomendas_produtos.id_produto = produtos.id
left join encomendas on encomendas.id = encomendas_produtos.id_encomenda;

-- a partir desta query vamos devolver um resultado mais sintético agrupando informações por encomenda
select
id_encomenda, id_cliente, id_colaborador, data_hora, sum(total) as 'total'
from(
	select 
	encomendas_produtos.id_encomenda,
	encomendas.id_cliente,
	encomendas.id_colaborador,
	encomendas.data_hora,
	encomendas_produtos.quantidade,
	produtos.produto,
	cast(encomendas_produtos.quantidade * produtos.preco_unidade as decimal(20,2)) as 'total'
	from encomendas_produtos
	left join produtos on encomendas_produtos.id_produto = produtos.id
	left join encomendas on encomendas.id = encomendas_produtos.id_encomenda
) a
group by id_encomenda;


-- agora temos a informação toda que precisamos
-- vamos completar com o dados dos clientes e colaboradores
-- e fromatar a apresentação dos dados. 

select
clientes.nome as 'cliente',
colaboradores.nome as 'colaborador',
data_hora,
concat(format(total, 2), "  €") as 'total'
from(
	select
	id_encomenda, id_cliente, id_colaborador, data_hora, sum(total) as 'total'
	from(
		select 
		encomendas_produtos.id_encomenda,
		encomendas.id_cliente,
		encomendas.id_colaborador,
		encomendas.data_hora,
		encomendas_produtos.quantidade,
		produtos.produto,
		cast(encomendas_produtos.quantidade * produtos.preco_unidade as decimal(20,2)) as 'total'
		from encomendas_produtos
		left join produtos on encomendas_produtos.id_produto = produtos.id
		left join encomendas on encomendas.id = encomendas_produtos.id_encomenda
	) a
	group by id_encomenda
) final
left join clientes
on id_cliente = clientes.id
left join colaboradores
on id_colaborador = colaboradores.id
where final.id_encomenda = 1;