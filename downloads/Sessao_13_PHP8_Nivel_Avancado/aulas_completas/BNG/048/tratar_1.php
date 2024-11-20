<?php

// verifica se aconteceu um POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido.');
}


/*
verifica se foi submetido um ficheiro.
Em resultado do post, os dados do ficheiro ficam guardados na super global $_FILES.
*/
if (empty($_FILES['file'])) {
    die('Não foi definido o ficheiro a carregar.');
}


/*
Podemos então aceder a um conjunto de informação que nos permite
fazer várias operações, como por exemplo a validação do ficheiro
carregado pelo formulário.
*/

$file_name = $_FILES['file']['name'];
$file_size = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_type = $_FILES['file']['type'];
$file_ext = explode('.', $_FILES['file']['name']);
$file_ext = end($file_ext);

echo '<pre>';
print_r([
    'Nome' => $file_name,
    'Tamanho' => $file_size,
    'Ficheiro temporário' => $file_tmp,
    'Tipo de ficheiro' => $file_type,
    'Extensão do ficheiro' => $file_ext
]);
