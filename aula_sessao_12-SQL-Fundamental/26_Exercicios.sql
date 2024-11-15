-- Quero obter os dados de uma encomenda:
-- Cliente, colaborador e quando foi efetuada a encomenda

Select 
clientes.nome as 'cliente',
colaboradores.nome as 'colaborador',
encomendas.data_hora
from encomendas
left join clientes
on encomendas.id_cliente = clientes.id
left join colaboradores
on encomendas.id_colaborador = colaboradores.id
where encomendas.id = 1;



-- quero obter os dados completos de uma encomenda
-- cliente, colanorador, quando foi a encomenda, os produtos e a quantidade
SELECT 
  clientes.nome AS 'cliente',
  colaboradores.nome AS 'colaborador',
  encomendas.data_hora,
  produtos.produto,
  encomendas_produtos.quantidade
FROM encomendas
LEFT JOIN clientes ON encomendas.id_cliente = clientes.id
LEFT JOIN colaboradores ON encomendas.id_colaborador = colaboradores.id
LEFT JOIN encomendas_produtos ON encomendas.id = encomendas_produtos.id_encomenda
LEFT JOIN produtos ON encomendas_produtos.id_produto = produtos.id
WHERE encomendas.id = 1;


-- Quero a mesma informação mas com o cálculo do total gasto por cada produto
-- com os dados do total por produto apresentado em euro com dias casas decimais e o símbolo
select 
clientes.nome as 'cliente',
colaboradores.nome as 'colaborador',
encomendas.data_hora,
produtos.produto,
encomendas_produtos.quantidade,
concat(format(encomendas_produtos.quantidade * produtos.preco_unidade,2)," €") as 'total_por_produto'
from encomendas
left join clientes
on encomendas.id_cliente = clientes.id
left join colaboradores
on encomendas.id_colaborador = colaboradores.id
left join encomendas_produtos
on encomendas.id = encomendas_produtos.id_encomenda
left join produtos
on produtos.id = encomendas_produtos.id_produto
where encomendas.id = 1;

-- quero a mesma informação mas a coluna dos produtos e quantidades
-- passa a ser uma frase do tipo * produto
select
clientes.nome as 'clientes',
colaboradores.nome as 'colaborador',
encomendas.data_hora,
concat(encomendas_produtos.quantidade, ' ', produtos.produto) as produto,
concat(format(encomendas_produtos.quantidade * produtos.preco_unidade, 2), ' €') as 'total_produtos'
from encomendas
left join clientes 
on encomendas.id_cliente = clientes.id
left join colaboradores
on encomendas.id_colaborador = colaboradores.id
left join encomendas_produtos
on encomendas.id = encomendas_produtos.id_encomenda
left join produtos
on produtos.id = encomendas_produtos.id_produto
where encomendas.id = 1;



