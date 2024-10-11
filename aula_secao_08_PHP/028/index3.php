<?php
// Para remover uma pasta...
// Se a pasta não existir, vai aparecer um erro.

// rmdir(__DIR__ . '/pasta_nao_existe');

// Mais uma vez, vai aparecer um aviso se a pasta não existe
if(file_exists(__DIR__. '/pasta_teste')){
    rmdir(__DIR__. '/pasta_teste');
    echo "Pasta removida";
}else{
    echo "A pasta não existe";
}

// IMPORTANTE: A pasta só pode ser removida se estiver vazia.