<?php
// Como utilizar namespaces e qual a sua utilidade

// importar o arquivo
require_once('./index.php');

// PAra podermos instanciar a classe do arquivo importado temos que ter atenção ao seu namespace

// neste exemplo teremos um erro
// $matematica = new Matematica();

// para resolver o problema temos que indicar o namespace
$matematica = new classe_principal\Matematica();
echo $matematica->adicionar(10, 5);