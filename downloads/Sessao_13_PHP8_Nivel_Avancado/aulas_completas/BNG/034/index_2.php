<?php

/* 
Para além do que já vimos, podemos também determinar
se uma data é maior ou menor que outra, simplesmente
usando os operadores de comparação
*/

$hoje = new DateTime();
$ontem = new DateTime();
$ontem->sub(new DateInterval("P1D"));

if($hoje > $ontem){
    echo 'SIM' . "<br>";
} else {
    echo 'NAO' . "<br>";
}


// podemos também captar a diferença entre duas datas.
$data1 = new DateTime("01-01-2030 00:00:00");
$data2 = new DateTime("15-05-2033 12:30:15");

$d = $data1->diff($data2);

/*
$d não é uma data. É o resultado da diferença entre duas datas.
Neste caso é um objeto do tipo DateInterval.
O objeto DateInterval é especialmente interessante pelas suas propriedades.
Ele vai guardar anos, meses, dias, horas, minutos, etc.

Portanto...
*/
echo "Data 1: {$data1->format('d-m-Y H:i:s')} | Data 2: {$data2->format('d-m-Y H:i:s')}<br>";
echo "Anos: " . $d->y . "<br>";
echo "Meses: " . $d->m . "<br>";
echo "Dias: " . $d->d . "<br>";
echo "Horas: " . $d->h . "<br>";
echo "Minutos: " . $d->i . "<br>";
echo "Segundos: " . $d->s . "<br>";
echo '<hr>';
echo "Total de dias: " . $d->days . "<br>";

/* 
Como podes observar nos resultados, $d->y dá-nos a diferença em anos, mas os outros
valores não correspondem exatamente ao retorno esperado.
Eu quero saber quantos segundos existem entre duas datas, e este sistema não
resolve essa questão.

Podemos então recorrer ao PHP procedural.
*/