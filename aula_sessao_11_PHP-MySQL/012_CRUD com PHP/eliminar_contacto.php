<?php
use RD3W\Database;
require_once('header.php');

// verifica se tem um ID na url
if(empty($_GET['id'])){
    header("Location: index.php"); 
}

// incluir os arquivos
require_once('./config.php');
require_once('./libraries/Database.php');

// pega o ID
$id = $_GET['id'];
$database = new Database(MYSQL_CONFIG);
$params = [
    ":id" => $id
];

// verifique se a resposta de exclusão foi fornecida
if(empty($_GET['delete'])){
    $results = $database->execute_query("SELECT * FROM contactos WHERE id = :id", $params);
    $contacto = $results->results[0];
} else {
    $database->execute_non_query("DELETE FROM contactos WHERE id = :id", $params);
    header("Location: index.php");
}

?>

<div class="row">
    <div class="col text-center">
        <h3>Deseja eliminar o seguinte contacto?</h3>

        <div class="my-4">
            <div>
                <span class="me-5">Nome: <strong> <?= $contacto->nome ?> </strong></span>
                <span>Telefone: <strong> <?= $contacto->telefone ?> </strong></span>
            </div>
        </div>

        <a href="index.php" class="btn btn-outline-dark yes-no-width">Não</a>
        <a href="eliminar_contacto.php?id=<?= $id ?>&delete=yes" class="btn btn-outline-dark yes-no-width">Sim</a>
    </div>
</div>

<?php
require_once('footer.php');
?>