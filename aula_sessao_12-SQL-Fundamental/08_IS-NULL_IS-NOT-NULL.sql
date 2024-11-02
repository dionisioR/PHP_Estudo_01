select * from colaboradores;

-- o NULL é tratado de maneira diferente
select * from colaboradores where ativo = null; -- não funciona
select * from colaboradores where ativo is null;
select * from colaboradores where ativo is not null;

