<?php
echo '<pre>';
// uma das formas mais diretas de criar e escrever informações em um arquivo é recorrendo a função 
// file_put_contents()

// se o arquivo não exisitir o arquivo será criado
// se o arquivo existir o conteúdo será substituído
file_put_contents('file.txt', 'Olá mundo!!! Olá mundo!!!');

// se pretendemos adicionar informação no mesmo arquivo, usamos o terceiro argurmento.
file_put_contents('file2.txt', time() . PHP_EOL,  FILE_APPEND);
echo 'Terminado';