<?php

/* 
Declaração STRICT TYPES

A linguagem PHP é muito conhecida por ser fracamente tipada.
Isso significa que não é necessário declarar o tipo de dado que uma variável irá armazenar.
Na realidade muitos programadores atualmente ainda usam o PHP com variáveis, métodos e parâmetros que não definem que tipo de valores aceitam ou retornam.

Com a evolução da linguagem e apesar de não ser obrigatório o seu uso,  a definição de tipo nas propriedades de uma classe, parâmetros e retorno de funções e métodos passou a ser possível
*/

function apresentar1($mensagem){
    echo "Mensagem:  $mensagem . <br>";
}
function apresentar2(String $mensagem){
    echo "Mensagem:  $mensagem . <br>";
}

// Neste caso os dois exemplos vão funcionar
apresentar1("Olá Mundo");
apresentar2(100);