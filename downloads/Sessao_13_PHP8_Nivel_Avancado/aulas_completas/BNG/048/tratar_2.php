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
Vamos, contudo, proceder à operação mais importante: o upload.
1. O ficheiro é carregado para uma localização temporária.
2. Temos que movimentar o ficheiro para a localização de destino.
*/

$ficheiro_temporario = $_FILES['file']['tmp_name'];
$destino = __DIR__ . '/' . $_FILES['file']['name'];

if(move_uploaded_file($ficheiro_temporario, $destino)){
    die('Ficheiro carregado com sucesso.');
} else {
    die('Aconteceu um erro no upload.');
}

/*
No próximo vídeo vamos consolidar melhor o nosso sistema de upload,
que ainda está muito simples e sem grandes validações. 
*/