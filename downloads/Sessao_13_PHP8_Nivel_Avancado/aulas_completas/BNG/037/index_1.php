<?php

/* 
Os números de telefone móvel em Portugal começam todos pelo algarismo 9
e têm no total 9 algarismos. Temos uma coleção de números.
Quero saber quantos deles são números de telefone móvel válidos.
*/

$telefones = [
    923467346,
    9362847636,
    943454534,
    834773487,
    983498,
    973647634,
    999923899,
    783948349,
    9127128787,
];

$numeros_validos = 0;
foreach($telefones as $telefone){
    if(preg_match("/^9{1}\d{8}$/", $telefone)){
        $numeros_validos++;
    }
}

echo "Números válidos: <strong>$numeros_validos</strong>";