<?php

/* 
Até agora vimos como criar um objeto com a data atual.
Mas podemos criar um objeto com a data que quisermos.
*/

// vamos definir a data dentro do construtor
$data = new Datetime("2030-01-01 00:00:00");
echo $data->format('d-m-Y') . '<br>';

// ou ainda de outra forma:
$data = DateTime::createFromFormat('d/m/Y', '01/01/2030');
echo $data->format('d-m-Y') . '<br>';

// e de outra forma
$data = new DateTime();
$data->setDate(2030,1,1)->setTime(0,0,0);
echo $data->format('d-m-Y') . '<br>';

// todas as restantes operações estão disponíveis,
// independentemente da forma como criamos ou alteramos a data e hora

// Até aqui não parece ter um potencial assim tão interessante...
// Prepara-te...