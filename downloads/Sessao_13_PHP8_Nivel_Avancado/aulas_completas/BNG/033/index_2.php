<?php

/*
Vamos criar uma data e vamos ver como objter dados concretos a partir dela.
*/

$agora = new DateTime();

// a data no formato ano, mês, dia, hora e minuto
echo $agora->format('Y-m-a H:i') . '<br>';

// apresentar apenas o ano da data
echo $agora->format('Y') . '<br>';

// buscar a hora
echo $agora->format('H') . '<br>';

// só a data
echo $agora->format('d-m-Y') . '<br>';

// só a hora sem segundos
echo $agora->format('H:i') . '<br>';

// gardar em variáveis o dia, o mês e o ano
$dia = $agora->format('d');
$mes = $agora->format('m');
$ano = $agora->format('Y');

// apresentar o dia da semana, de Domingo(0) a Sábado(6)
echo $agora->format('w') . '<br>';

// o dia da semana por extenso em Inglês
echo $agora->format('l') . '<br>';

// o número do dia no ano
echo $agora->format('z') . '<br>';

// o número da semana no ano
echo $agora->format('W') . '<br>';

/* 
E existem muitos mais caracteres e combinações que
nos podem permitir chegar aos dados de uma data
https://www.php.net/manual/en/datetime.format.php
*/