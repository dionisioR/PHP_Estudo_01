<?php

/* 
Declaração STRICT TYPES

Para que o PHP obrigue a passar argumentos que correspondam ao tipo de dado esperado, temos que ativar o strict_types = 1

*/
declare(strict_types=1);

function apresentar1($mensagem){
    echo "Mensagem:  $mensagem . <br>";
}
function apresentar2(String $mensagem){
    echo "Mensagem:  $mensagem . <br>";
}

// Neste caso os dois exemplos vão funcionar
apresentar1("Olá Mundo");
// apresentar2(100);  // ERRO