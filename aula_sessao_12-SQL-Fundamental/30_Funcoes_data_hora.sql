-- data e hora atual do servidor
select current_timestamp() as 'data e hora';
-- ou
select now();

-- apenas a data atual
select curdate();
-- ou
select current_date();

-- apenas hora
select curtime();
-- ou
select current_time();

-- quero saber o unix timestamp atual
-- quantidade de segundo desde 01/01/1970
select unix_timestamp();

-- quero ver apenas a data das encomendas (excluir as horas)
select date(data_hora) from encomendas;

-- só a hora
select time(data_hora) from encomendas;

-- data e hora da encomenda 2
select data_hora from encomendas where id=2;

-- vamos adicionar 5 dias
select data_hora, adddate(data_hora, interval 5 day) from encomendas;

-- adicionar 6 meses
select data_hora, adddate(data_hora, interval 6 month) from encomendas;

-- adicionar 30 segundos
select data_hora, adddate(data_hora, interval 30 second) from encomendas;

-- vamos olhar para data e hora da encomenda numero 50
select data_hora from encomendas where id = 50;

-- quero apenas o ano dessa encomenda
select data_hora, year(data_hora) as 'ano' from encomendas where id = 50;
-- somente o mes
select data_hora, Month(data_hora) as 'Mês' from encomendas where id = 50;
-- somente o dia
select data_hora, day(data_hora) as 'dia' from encomendas where id = 50;
-- somente hora
select data_hora, hour(data_hora) as 'hora' from encomendas where id=50;
-- somente minuto
select data_hora, minute(data_hora) as 'minute' from encomendas where id = 50;
-- somente segundo
select data_hora, second(data_hora) as 'segundo' from encomendas where id = 50;
-- dia do mes de uma data
select dayofmonth(now()); 
-- dia da semana
select dayofweek(now());
-- dia do ano
select dayofyear(now());
-- semana do ano
select weekofyear(now());

-- data num formato diferente dd-mm-yyyy
select data_hora, date_format(data_hora, "%d-%m-%Y") as 'data' from encomendas where id = 50;
-- data num formato diferente dd-mm-yy
select data_hora, date_format(data_hora, "%d-%m-%y") as 'data' from encomendas where id = 50;

-- dia da semana de uma determinada data
select data_hora, dayofweek(data_hora) as 'dia da semana' from encomendas where id = 50;

-- nome do dia da semana em inglês
select data_hora, dayname(data_hora) as 'dia da semana' from encomendas where id = 50;

-- O MySQL da a possibilidade de definir a língua através da alteração de uma das suas variáveis de configuração
SET@@lc_time_names = "pt_PT"; -- Portugal
select data_hora, dayname(data_hora) as 'dia da semana' from encomendas where id = 50;

SET@@lc_time_names = "pt_BR"; -- Brasil
select data_hora, dayname(data_hora) as 'dia da semana' from encomendas where id = 50;
