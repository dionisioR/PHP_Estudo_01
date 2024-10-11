<?php
echo '<pre>';

/*
Vamos fazer um exercício prático onde vamos implementar várias matérias estudadas até
o momento.
Vamos guardar dentro de um arquivo de texto a tabuada do 3 até a multiplicação por 1000
*/

file_put_contents('tabuada.txt','');

for($i = 0; $i <= 1000; $i++){
    file_put_contents('tabuada.txt', "3 x $i = " . 3 * $i . PHP_EOL, FILE_APPEND);
}



echo '<br>';
echo 'Terminado';