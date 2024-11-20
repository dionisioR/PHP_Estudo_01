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
Podemos ver os dados do ficheiro carregado. 
*/
echo '<pre>';
var_dump($_FILES);
