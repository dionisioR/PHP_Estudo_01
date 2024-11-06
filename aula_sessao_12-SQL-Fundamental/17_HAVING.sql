/*
A cláusula HAVING é utilizada na declaração SELECT para especificar condições de filtragem para um grupo de linhas ou agregados. 
A cláusila HAVING é frequentemente utilizada com a cláusula GROUP BY para filtrar grupos com base numa condição espefificada. 
Se omitir a cláusula GROUP BY, a cláusula HAVIN comporta-se como a cláusula WHERE. 
*/

-- Quero saber quais as cidades cujo total de clientes é superior a 12
select cidade, count(*) as 'total'
from clientes
group by cidade
having total >= 12;

-- quantas encomendas tiveram 8 produtos envolvidos
select id_encomenda, count(*) as 'total_produtos'
from encomendas_produtos
group by id_encomenda
having total_produtos = 8;

-- quantas encomendas tiveram 8 produtos envolvidos
select count(*) as 'numero_de_encomendas_com_8_produtos' from (
	select id_encomenda, count(*) as 'total_produtos'
	from encomendas_produtos
	group by id_encomenda
	having total_produtos = 8
) a;