/*
A instrução INSERT permite inserir um ou mais registros numa tabela.
Na realidade, o INSERT permite:
- inserir uma linha em uma tabela
- inserir multiplas linhas em uma tabela
- copiar linhas de uma tabela e inserir noutra tabela. 

Sintaxe:
INSERT INTO tabela(col1, col2, ...) VALUES (valor1, valor2, ...);

Observação:
- O número de valores tem que ser igual ao número de colunas.
- Antes de adicionar uma nova linha, o sistema vai verificar a integridade referencial (chaves primarias, estrangeuras, etc). Se uma dessas regras forem violadas, o sistema vai gerar um erro e interromper a inserção do registro.
*/

-- inserção simples
insert into colaboradores(nome, sexo, ativo) values('colaborador 1', 'm', 1);
-- Não é necessário especificar as colunas se a sequência de valores corresponder a sequência de colunas na tabela. 
insert into colaboradores values(0, 'colaborador 2', 'f', 0);
select * from colaboradores order by id desc;

-- Inserir vários registros de uma vez
insert into colaboradores(nome, sexo, ativo) 
values 
("comercial 1", "m", 1),
("comercial 2", "f", 0),
("comercial 3", "f", 1),
("comercial 4", "m", 1),
("comercial 5", "m", 0);


/*
Agora vamos para uma experiência diferente.
vamos criar duas tabelas - tabela A e tabela B, exatamente com a mesma estrutura.
Para isso vamos criar a tabela A com:
- Id auto incremento
- Nome varchar(50)
- email varchar(50)
*/

create table tabela_a(
id integer auto_increment primary key,
nome varchar(50),
email varchar(50)
)engine=InnoDB;

create table tabela_b(
id integer auto_increment primary key,
nome varchar(50),
email varchar(50)
)engine=InnoDB;

-- agora vamos inserir 3 registros na tabela_a
insert into tabela_a(nome,email)
values
('AAA','a@g.com'),
('BBB','b@g.com'),
('CCC','c@g.com');

select * from tabela_a;
select * from tabela_b;

-- Agora vamos utilizar o insert para inserir todos os dados da tabela A para a tabela B.
insert into tabela_b(nome,email)
select nome, email
from tabela_a;


select * from tabela_a;
select * from tabela_b;
