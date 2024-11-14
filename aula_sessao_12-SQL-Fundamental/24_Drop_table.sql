-- Drop Table
-- destroi a tabela e seus registros, esta operação é irreversível
-- DROP TABLE tabela
-- DROP TABLE IF EXISTS tabela

drop table tabela_x; -- vai dar erro pois a tabela não existe
drop table if exists tabela_x; -- Não vai dar erro, dará somente uma mensagem de atenção.


-- truncate
-- FAZ UMA AÇÃO IDÊNTICA AO DELETE SEM O WHERE MAS VAO RESTAURAR O AUTO INCREMENTO PARA O ÍNICIO
SELECT * FROM socio;
DELETE from socio;
INSERT INTO SOCIO (NOME) VALUES ('AAA'),('BBB'),('CCC');

TRUNCATE SOCIO;
SELECT * FROM SOCIO;
INSERT INTO SOCIO (NOME) VALUES ('AAA'),('BBB'),('CCC');