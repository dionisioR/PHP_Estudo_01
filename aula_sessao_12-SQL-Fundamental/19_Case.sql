/*
CASE: 
Permite avaliar uma lista de condições e retorna um dos resultados possíveis.
A espressão CASE tem dois formatos: CASE simples e CASE pesquisado.
Podemos utilizar a expressão CASE numa cláusula ou declaração que permita uma expressão válida.
Por exemplo, pode utilizar a expressão CASE em declarações como SELECT, DELETE e UPDATE ou em cláusulas como SELECT, ORDER BY e HAVING. 

No modo SIMPLE CASE, a condição a avaliar é colocada dentro de parênteses e avaliada depois em várias condições WHEN. 
*/

-- selecionar os primeiros 50 clientes e se forem do sexo f, vai identificar como feminino, se for m, vai identificar como masculino
SELECT 
nome,
case(sexo)
	when 'm' then 'masculino'
    when 'f' then 'feminino'
end sexo
from clientes
limit 50;

-- quero destacar deste 50 clientes quem tem nomes curtos, médios e longos
-- curtos = menos ou 30 caracteres
-- médios = entre 31 e 34 caracteres
-- longos = 35 ou mais caracteres

select nome,
length(nome) as 'caracteres',
case
	when length(nome) <= 30 then 'nome curto'
	when length(nome) > 30 and length(nome) < 35 then 'nome médio'
	when length(nome) >= 35 then 'nome longo'
end 'avaliacao'
from clientes
limit 50;
    
-- quero uma coluna com a identificação dos domínios GMAIL e HOTMAIL
-- os restantes domínios são desconhecidos e apresentados com ...
select
nome,
email,
case
	when email like "%@gmail.com" then "GMAIL"
    when email like "%@hotmail.com" then "HOTMAIL"
    else "..."
end  'dominio'
from clientes
limit 50;