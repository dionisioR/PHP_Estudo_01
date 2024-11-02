<?php
use RD3W\Database;
require_once('header.php');
require_once('./config.php');
require_once('./libraries/Database.php');

// verifica se o DELETE_ALL esta presente na URL
if (!empty($_GET['DELETE_ALL'])) {
    // deleta todos os dados da tabela
    $database = new Database(MYSQL_CONFIG);
    $sql = "DELETE FROM contactos";
    $results = $database->execute_non_query($sql);
    header('Location: index.php');
}
?>

<div class="row">
    <div class="col text-center">
        <h3 class="text-danger mb-4">Deseja eliminar todos os contactos?</h3>
        <a href="index.php" class="btn btn-outline-dark yes-no-width">Não</a>
        <a href="eliminar_tudo.php?delete_all=yes" class="btn btn-outline-danger yes-no-width">Sim</a>
    </div>
</div>

<?php
require_once('footer.php');
?>