select produto as fruto from produtos;
select produto as 'nome do fruto' from produtos;

select *, preco_unidade * 12 as 'preço por dúzia', preco_unidade * 24 as 'preço por duas dúzias' from produtos;

select preco_unidade * 15 as 'total' from produtos where 'total' > 10;
-- Esta query não vai funcionar porque na cláusula WHERE a coluna total não vai ser reconhecida porque não existe na estrutura da tabela produtos

select clientes.nome, clientes.id, encomendas.* from clientes, encomendas where clientes.id = encomendas.id_cliente limit 5;
-- podemos escrever a mesma query da seguinte maneira
select c.nome, c.id, e.* from clientes c, encomendas e where c.id = e.id_cliente limit 5;