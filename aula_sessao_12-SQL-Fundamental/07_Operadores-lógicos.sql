-- AND 
-- Permite juntar várias condições nas quais todas tem que ser verdadeiras para que o resultado seja devolvido.
select nome, email from clientes where cidade = "Coimbra" and sexo = 'f';
select nome, email from clientes where cidade = "Paris" and sexo = 'm';

-- OR
select nome, email from clientes where cidade = "Paris" or sexo = "m";
select * from produtos where preco_unidade < 1 or preco_unidade > 2;

-- NOT 
-- Permite devolver os registros cujas condições indicadas não sejam verdadeiras
-- vai devolver sexo que não seja masculino
select nome, sexo from clientes where not sexo = 'm';

select * from produtos where not preco_unidade <= 1.5;

-- exists
select * from clientes where exists(
select cidade from clientes where cidade = "Porto"
);

select * from clientes where exists(
select cidade from clientes where cidade = "Paris"
);

select nome from clientes where cidade = 'lisboa' and exists(
select id from clientes where cidade = 'lisboa' and sexo = 'm'
);

-- BETWEEN
-- Devolve os resultados que estão entre um intervalo
select * from produtos where preco_unidade between 1 and 2;
-- é o mesmo que escrever 
select * from produtos where preco_unidade > 1 and preco_unidade < 2;

-- todas as encomendas registradas entre duas datas
select * from encomendas where data_hora between '2030-01-01 00:00:00' and '2030-01-02 23:59:59';

-- IN
-- devolve todos os registros que estejam compreendidos dentro de uma coleção de valores
select * from clientes where cidade in ("Lisboa", "Viseu");
-- Poderiamos fazer de outra forma
select * from clientes where cidade = "Lisboa" Or cidade = "Viseu";
-- mas imagine que queremos 5 cidades, ficaria muito extensa utilizar o "OR"
select * from clientes where cidade in ('Lisboa', 'viseu', 'coimbra', 'porto', 'amadora');


-- Like
select nome from clientes where nome like 'João';
-- escrito desta maneira não vai devolver dados, por que não existe ninguem cujo nome seja exclusivamente JOÃO.
-- No entanto poemos usar wildcards.
-- São símbolos que permitem flexibiliar a pesquisa.

-- vai buscar todos os nomes que começam com 'joão'
select *  from clientes where nome like 'joão%';
-- vai buscar todos os nomes que começam com 'daniel'
select *  from clientes where nome like 'daniel%';
select *  from clientes where nome like 'rui%';
 
-- vai buscar todos os nomes que contenham 'silva'
select nome from clientes where nome like '%silva%';

-- vai buscar todos os emails que terminam com 'gmail.com'
select nome, email from clientes where email like '%gmail.com';
select nome, email from clientes where email not like '%gmail.com';

-- todos os nomes começados com a letra 'A' e terminado com a letra 'S'
select nome from clientes where nome like "A%S";

-- _ (undescore) representa um caracter apenas
select nome from clientes where nome like 'Francisc_%';

-- todos os nomes cujo primeiro nome contem dois caracters e um 'A' antes de qualquer coisa
select nome from clientes where nome like '__a%';