<?php

// verifica se houve um post e se existe um ficheiro carregado
if($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_FILES['file'])){
    die('Acesso inválido');
}

// vamos garantir que temos uma pasta criada para os ficheiros de upload
// a pasta 'uploads'
$pasta_destino = __DIR__ . '/uploads/';

// vamos recolher os dados do ficheiro carregado
$ficheiro_temporario = $_FILES['file']['tmp_name'];
$nome_ficheiro = $_FILES['file']['name'];
$tamanho = $_FILES['file']['size'];
$extensao = explode('.',$_FILES['file']['name']);
$extensao = end($extensao);

// vamos verificar se o ficheiro está dentro das extensões válidas.
$extensoes_validas = ['txt'];
if(!in_array($extensao, $extensoes_validas)){
    die('O ficheiro não tem a estensão válida.');
}

// vamos validar se o ficheiro tem o tamanho inferior ao limite (bytes).
// 2 MB = 2000000 (decimal) | 2097152 (binario)
$tamanho_limite = 2000000;
if($tamanho > $tamanho_limite){
    die("O ficheiro tem tamanho superior ao limite: ($tamanho_limite) bytes.");
}

// agora vamos criar um nome único para o ficheiro
$novo_nome = "ficheiro_" . uniqid() . ".$extensao";

// vamos mover o ficheiro para a pasta de destino
if(move_uploaded_file($ficheiro_temporario, $pasta_destino . $novo_nome)){
    die("Ficheiro <strong>$novo_nome</strong> carregado com sucesso.");
} else {
    die("Aconteceu um erro no upload.");
}