-- quero saber a quantidade de caracteres de um nome do cliente
select nome, length(nome) as 'tamanho' from clientes;
-- ou
select nome, char_length(nome) as 'tamanho' from clientes;

-- pretendo saber em que posição de uma coleção de letras aparece a letra 'A'
select field('a', 'z', 'd', 'a', 'f') as 'posicao';

-- outra alternativa
select find_in_set('a', 'z,d,a,f') as 'posicao';

-- formatar um número para que tenha determinada quantidade de casas decimais
select format(10,2) as 'valor';
select format(0,2) as 'valor';
select format(12.43,1) as 'valor';
select format(12.53,1) as 'valor';
select format(12.53,2) as 'valor';
select format(12.53,3) as 'valor';

-- quero procurar a posição de uma determinada string dentro de outra
select instr('frase original para análise', 'para') as 'posição';
select nome, instr(nome, 'Silva') as 'posicao' from clientes order by posicao desc;
select nome, locate('Silva', nome) as 'posicao' from clientes order by posicao desc;
select nome, position('silva' in nome) as 'posicao' from clientes order by posicao desc;

-- todos os nomes em maiúsculo
select ucase(nome) as 'nome' from clientes;

-- todos os nomes em minúsculo
select lcase(nome) as 'nome' from clientes;

-- quero apenas as tres primeiras letras de cada nome
select nome, left(nome, 3) from clientes;

-- quero apenas as tres ultimas letras de cada nome
select nome, right(nome, 3) from clientes;

-- quero que todos os nome dos colaboradores tenha o mesmo comprimento.
-- se não tiverem, os caracteres restantes vao ser preenchidos por hifens
select lpad(nome, 20, '-') as nome from colaboradores;
-- observe que temos todos os nomes com 20 caracteres
select length(lpad(nome, 20, '-')) as nome from colaboradores;

-- se quisermos reencher a direita
select rpad(nome, 20, '-') as 'nome' from colaboradores;

select rpad(produto, 20, '.'), lpad(format(preco_unidade, 2), 8,'.') from produtos;

-- vamos juntar tudo em uma frase. 
select concat(rpad(produto, 20, '.'), lpad(convert(format(preco_unidade,2) using utf8),8,'.'), ' €') as frase from produtos;

-- normalizar dados
-- por exemplo, quando existe um valor que tem espaços a mais do lados esquerdo ou direito
select ltrim('   Exemplo de um texto') as texto;
select rtrim('Exemplo de um texto    ') as texto;
select trim('   exemplo de um texto    ') as texto;

-- buscar uma parte de uma string
select nome, mid(nome, 5, 10) as 'parte do nome' from clientes;
select nome, substr(nome, 5, 10) as 'parte do nome' from clientes;
select nome, substring(nome, 5, 10) as 'parte do nome' from clientes;

-- repetir um valor três vezes
select repeat('texto ',3) as 'repetir';
select repeat(nome, 3) as 'nome' from clientes;

-- inverter um texto
select reverse('Exemplo de um texto') as 'inverte';
select nome, reverse(nome) as 'inverte' from clientes;

-- quero o nome do cliente e o email com 10 espaços entre eles no mesmo resultado
select concat(nome, space(10), email) as 'frase' from clientes;