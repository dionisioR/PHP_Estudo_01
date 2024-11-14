-- todos os produtos da base
select * from produtos;

-- todos os colaboradores ordenados por ordem crescente
select * from colaboradores order by nome;

-- os nomes e o sexo de todos os clientes do sexo feminino
select nome, sexo from clientes where sexo = 'f';

-- todos os clientes da cidade de Viseu
select nome, cidade from clientes where cidade = "Viseu";

-- quantos são os clientes da cidade de viseu?
select 'Viseu' as 'cidade', count(*) as total from clientes where cidade = 'Viseu';

-- quantos clientes são (acumulativamente) das cidades do Porto, Lisboa e Coimbra?
select count(*) as 'Total' from clientes where cidade in('Lisboa', 'Porto', 'Coimbra');

-- mostrar somente os nomes
select nome from clientes where cidade in('lisboa', 'porto', 'coimbra');

-- mostrar os nomes (somente do sexo masculino)
select nome from clientes where cidade in ('lisboa','porto','coimbra') and sexo = 'm';

-- mostrar o nome dos clientes cujo nome começa com 'Carlos'
select nome from clientes where nome like 'Carlos%';

-- Clientes que tem o nome 'Silva', independente de início, meio ou fim
select nome from clientes where nome like "%Silva%";

-- quantos são os clientes cujo nome tem como letra inical o "A"
select count(*) as 'total' from clientes where nome like 'A%';

-- nome e email dos clientes cujo nome tem como letra inical o "A"
select nome, email from clientes where nome like 'A%';

-- quero o total de clientes por cada cidade
select cidade, count(*) as 'total_clientes' from clientes group by cidade;

-- quero o mesmo totral de clientes por cidade, mas apenas do sexo feminino
select cidade, count(*) as 'total_clientes' from clientes where sexo = 'f' group by cidade;

-- quero o nome dos colaboradores e saber quem está ativo ou inativo
-- exatamente com essas designações: Ativo ou Inativo
select nome,
case (ativo)
	when 0 then 'Ativo'
    when 1 then 'Inativo'
end ativo
from colaboradores;