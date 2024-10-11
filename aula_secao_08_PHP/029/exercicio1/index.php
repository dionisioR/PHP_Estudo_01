<?php
echo '<pre>';
// Uma forma muito simples de obter o tamanho de um ficheiro em bytes
$dados = filesize('registro.txt');
echo "Tamanho do arquivo: $dados bytes\n";
echo '<hr>';

// para obter várias informações sobre um determinado arquivo
$dados = pathinfo('registro.txt');
print_r($dados);