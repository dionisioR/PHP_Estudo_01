/*
Sintaxe:
UPDATE
	Tabela
Set
	Coluna1 = valor1,
	Coluna2 = valor2,
WHERE
	Condicao
*/

Select * from colaboradores where id = 5;

-- modificar o nome
update colaboradores
set 
nome = 'Mario Antunes',
sexo = 'm'
where id = 5;


/*
Observação:
Alguns softwares de gestão de base de dados podem apresentar uma mensagem de erro caso tentemos utilizar o 
UPDATE sem a cláusula WHERE uma vez que o sistema detecta que podemos ter um erro de query.
Caso seu software não tenha essa rede de segurança você pode prejudicar sua base de dados fazendo a atualização de 
varios (ou todos) os registros.
*/

-- vai atualizar todos os colaboradores que tinham o valor 1 na coluna ativo para o valor 100 na mesma coluna ativo. 

select * from colaboradores where ativo = 1;

update colaboradores
set ativo = 100
where ativo = 1;

select * from colaboradores where ativo = 100;

-- vamos tentar fazer um update sem a cláusula where
-- aqui deu ruim
update colaboradores 
set ativo = 1;

select * from colaboradores;