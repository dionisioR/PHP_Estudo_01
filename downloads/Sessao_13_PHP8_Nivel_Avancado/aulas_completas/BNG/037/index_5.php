<?php

/* 
Os telefones móveis portugueses têm 9 dígitos e começam por 9.
O country code português é o 351.
Vamos normalizar a lista de telefones. Quero todos com +3519xxxxxxxx
*/

$telefones = [
    '9475 83467',
    '351934626235',
    '+902387487',
    '904 577834',
    '956237623',
    '935536265',
    '351 979848598',
    '+00351926363726',
    '99968 8863',
    '351973726733',
];

$finais = [];
foreach($telefones as $telefone){
    $telefone = preg_replace("/\s+/", "", $telefone);   // remove espaços
    preg_match("/(9{1}\d{8}$)/", $telefone, $out);
    $finais[] = "+351" . $out[0];
}

foreach($finais as $final){
    echo "$final</br>";
}