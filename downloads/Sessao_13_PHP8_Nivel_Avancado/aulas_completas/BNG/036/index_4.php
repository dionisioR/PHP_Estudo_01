<?php

/* 
Vimos a utilização do preg-match para encontrar um padrão.
Podemos também usar o preg_replace para substituir ocorrências do padrão.
Vejamos.
*/

$valor = "Esta fr1ase con23tém algari3smos que devem s23er remo8vidos.";
echo $valor . '<br>';
$valor = preg_replace("/\d+/", "", $valor);
echo $valor . '<br>';

// pretendo remover todos os espaços existentes dentro de $valor
$valor = "1 234 458 234";
$valor = preg_replace("/\s+/", "", $valor);
echo $valor . '<br>';

// pretendo substituir todos os espaços existentes dentro de $valor por um ponto
$valor = "1 234 458 234";
$valor = preg_replace("/\s+/", ".", $valor);
echo $valor . '<br>';

/* 
Ser capaz de escrever expressões regulares complexas é uma tarefa que exige
muito treino e conhecimento. Não por que existam muitos sinais distintos para
definição dos padrões, mas porque se trata de uma espécie de linguagem dentro
das linguagens de programação, tal como acontece com o uso de SQL dentro do PHP.

No próximo vídeo vamos ver alguns exemplos reais em ação.
*/
