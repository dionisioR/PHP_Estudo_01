<?php

/*
A utilização de datas e horas numa aplicação é praticamente incontornável.
O PHP permite a utilização de datas e horas de forma procedural, mas neste
vídeo vamos falar da forma mais avançada: a classe DateTime.

Com esta classe, podemos efetuar praticamente todo o tipo de operações com
datas a horas.

Podemos criar datas, adicionar e remover períodos de tempo, apresentar
datas de diversas formas, etc.
*/

$agora = new DateTime(); 
/* 
Cria um objeto $agora igual à instância da classe.
Neste caso, $agora assumirá como data e hora o valor da data e hora do
exato momento em que o objeto é criado.

Para apresentar o valor do objeto $agora, vamos usar o método format.
*/

echo $agora->format('d-m-Y H:i:s');

/*
Vamos perceber o que aconteceu aqui...
*/