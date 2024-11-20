<?php

/*
Existe ainda um conceito muito importante na computação: unix timestamp.
O valor unix timestamp, é um valor numérico que corresponde ao número
total de segundos decorridos desda o início da era Unix: 01 de Janeiro de 1970. 
*/
$d = new DateTime();
$d->setTimestamp(1000);
echo $d->format('d-m-Y H:i:s') . '<br>';

/* 
Agora que ficamos a conhecer o unix timestamp, vamos imaginar que queres ver
o total de segundos entre duas datas. Vamos recorrer ao PHP procedural para
alcançar este resultado.
*/
$data_inicial = strtotime("15-06-2020");
$data_final = strtotime("01-01-2030");    
// estas implementações vão retornar timestamps (segundos)

$total_segundos = $data_final - $data_inicial;

// agora temos em total_segundos o número de segundos entre as duas datas
echo "Total segundos: $total_segundos <br>";

// se eu quiser calcular o número de dias...
$total_dias = $total_segundos / (24*60*60);
echo "Total dias: $total_dias <br>";