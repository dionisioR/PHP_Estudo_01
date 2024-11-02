Select * from produtos order by produto;
select * from produtos order by produto asc;
select * from produtos order by produto desc;

select produto from produtos order by produto desc;

select nome, email, cidade from clientes order by nome asc;

select cidade, nome, email from clientes order by cidade, nome;

-- ordenar a consulta com as seguintes regras: cidade em ordem decrescente o nome em ordem crescente
select nome, cidade, email from clientes order by cidade desc, nome asc;

-- produtos do mais caro para o mais barato
select produto, preco_unidade from produtos order by preco_unidade desc;

-- encomendas mais recentes
select * from encomendas order by data_hora desc;






