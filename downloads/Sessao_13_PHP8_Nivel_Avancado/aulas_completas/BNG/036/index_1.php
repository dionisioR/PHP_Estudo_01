<?php

/* 
As expressões regulares são um mecanismo poderoso de validação e normalização
de dados. Não existem apenas no PHP. O PHP contém algumas funções destinadas a
este tipo de mecanismos, que vamos conhecer melhor neste e no próximo vídeo.

NOTA: Iremos apenas cobrir os principais aspetos das expressões regulares.
Futuramente regressaremos a elas sempre que se justificar.


Uma expressão regular é uma sequência de caracteres que formam um 
padrão de pesquisa. Esse padrão determina o que estamos à procura dentro
de um determinado texto, frase, valor, etc.

Podemos usar as expressões regulares para procurar o padrão ou para
substituir partes de um determinado valor. Vejamos na prática.
*/

/* 
Temos uma frase e queremos perceber se existe dentro dela uma determinada palavra.
*/

$frase = "Esta frase foi criada para efetuar testes com expressões regulares.";

/* 
Vamos usar a função preg_match()
*/

if(preg_match("/testes/", $frase)){
    echo 'existe';
} else {
    echo 'não existe';
}

/* 
A função recebeu dois parâmetros. 
O primeiro é o padrão da expressão.
O segundo é o valor que vai ser analisado.
Repara que o padrão começa e termina com uma barra.
*/
