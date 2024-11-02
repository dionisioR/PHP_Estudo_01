select nome, cidade from clientes where cidade = 'Lisboa';
select * from colaboradores where sexo <> 'f';
select * from clientes where cidade = "Lisboa" and sexo <> 'm';
select * from clientes where cidade <> "Lisboa" and sexo <> 'F';
select * from produtos where preco_unidade > 1;
select * from produtos where preco_unidade >= 1;
select * from produtos where preco_unidade <= 1.5;
select * from produtos where preco_unidade >= 1 and preco_unidade <=2;

-- Observação: Esse tipo de operadores não vai funcionar com colunas do tipo varchar (strings)
-- essa query não vai devolver resultado
select * from clientes where nome > 10;

-- mas podem ser utilizados em colunas do tipo DATETIME
-- vamos ver quantas encomendas são anteriores a uma determinada data
select * from encomendas where data_hora <= "2030-01-02 10:00:00";