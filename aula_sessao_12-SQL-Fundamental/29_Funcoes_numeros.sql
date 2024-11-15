-- valor absoluto de um número (valor positivo)
select abs(100) as valor;
select abs(-100) as valor;

-- arredondar para cima
select ceil(1.1) as valor;
select ceil(25.3) as valor;
-- ou 
select ceiling(25.3) as valor;

-- arredondar para baixo
select floor(1.1) as valor;
select floor(1.9) as valor;
select floor(91.999) as valor;
-- ou
select truncate(91.999,0) as valor;
select truncate(91.999,1) as valor;
select truncate(91.999,2) as valor;
select truncate(91.999,4) as valor;

-- divisão entre numeros inteiros
select 20 div 2 as resultados;
select 20 div 22 as resultados;

-- divisao entre reais
select 12.45 div 2.3 as 'resultados';
select 12.45 div 2.33 as 'resultados';

select 20/2 as 'resultado';
select 20/2.5 as 'resultado';
select 20.2/3 as 'resultado';
select 20.1/2.33 as 'resultado';

-- resto da divisao
select mod(11,3) as 'valor';
select 11%3 as 'valor';


-- quero saber qual é o maior valor
select greatest(3, 20, 43, 23, 34, 21) as 'valor';

-- o menor valor
select least(3, 20, 43, 23, 34, 21) as 'valor';

-- PI
select PI() as 'PI';

-- Potencia
select pow(4,2) as 'Pot';
select pow(2,2) as 'Pot';
select pow(2,3) as 'Pot';
select pow(2,4) as 'Pot';
select pow(2,5) as 'Pot';
-- ou 
select power(2,2) as 'Pot';
select power(2,3) as 'Pot';
select power(2,4) as 'Pot';

-- valor randômico
-- sempre será um valor entre 0 e 1
select rand() as 'valor';

-- se pretendes obter um valor inteiro entre 1 e 10
select floor(rand() * 10) + 1 as 'valor';
-- se pretendes obter um valor inteiro entre 1 e 100
select floor(rand() * 100) + 1 as 'valor';

-- para saber se o numero é positivo, negativo ou neutro
-- 1 positivo
-- 0 neutro
-- -1 negativo
select sign(100);
select sign(0);
select sign(-100);

-- raiz quadrada
select sqrt(16) as 'valor';
select sqrt(111) as 'valor';
select sqrt(2) as 'valor';
select sqrt(3) as 'valor';