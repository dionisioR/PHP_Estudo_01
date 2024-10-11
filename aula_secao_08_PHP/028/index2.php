<?php
// Podemos criar e remover pastas
// mkdir() - cria uma pasta
// rmdir() - remove uma pasta
// is_dir() - verifica se é uma pasta
// is_file() - verifica se é um arquivo
// file_exists() - verifica se um arquivo ou pasta existe

mkdir(__DIR__ . '/pasta_teste');

// Se a psta existir, vai aparecer um vazio
// Devemos sempre assegurar se a pasta ou arquivo existe.
// Para isso podemos usar a função 'file_exists()'.
// Esta função server para arquivos e pastas.

if(!file_exists(__DIR__ . '/pasta_teste')){
    rmdir(__DIR__ . '/pasta_teste');
}else{
    echo 'A pasta já existe';
}