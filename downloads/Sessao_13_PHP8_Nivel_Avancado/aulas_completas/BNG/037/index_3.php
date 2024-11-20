<?php

/* 
Pretendo saber quantos nomes estão em maiúsculas.
*/

$nomes = [
    'JOAO',
    'Carlos',
    'miguel',
    'ANA',
    'AnaBELA',
    'Catarina',
    'RUI',
    'MARTINS',
    'Sérgio',
    'Márcio',
];

$total = 0;
foreach($nomes as $nome){
    if(preg_match("/^[A-Z]+$/", $nome)){
        $total++;
    }
}

echo "Nomes em maiúsculas: <strong>$total</strong>";