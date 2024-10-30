<?php

use RD3W\Database;

require_once('header.php');

// incluir arquivos necessários

require_once('./config.php');
require_once("./libraries/Database.php");

$contacts = null;
$total_contacts = 0;
$search = null;
$database = new Database(MYSQL_CONFIG);


// Verifica se existe um pesquisa [POST]
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // pesquisa por resultados
    $search = $_POST['text_search'];
    $params = [
        ":search" => "%" . $search . "%"
    ];

    $sql = "SELECT * FROM contactos WHERE nome LIKE :search or telefone LIKE :search ORDER BY id DESC";
    $results = $database->execute_query($sql, $params);
} else {
    // pesquisa por todos os resultados
    $sql = "SELECT * FROM contactos ORDER BY id DESC";
    $results = $database->execute_query($sql);
}

// echo "<pre>";
// print_r($results);
// echo "</pre>";
// O primeiro $results é o array (variável) de resultados
// O segundo $results é o index do array de resultados. [results] => Array(***)
$contacts = $results->results;
$total_contacts = $results->affected_rows;
?>

<!-- search & add new -->
<div class="row align-items-center mb-3">
    <div class="col">

        <form action="index.php" method="post">
            <div class="row">
                <div class="col-auto"><input type="text" class="form-control" name="text_search" id="text_search" minlength="3" maxlength="20" required></div>
                <div class="col-auto"><input type="submit" class="btn btn-outline-dark" value="Procurar"></div>
                <div class="col-auto"><a href="index.php" class="btn btn-outline-dark">Ver tudo</a></div>
            </div>
        </form>

    </div>

    <div class="col text-end">
        <a href="adicionar_contacto.php" class="btn btn-outline-dark">Adicionar contacto</a>
    </div>
</div>

<!-- show contact's table -->
<div class="row">
    <div class="col">

        <!-- no results -->
        <?php if ($total_contacts == 0): ?>
            <p class="text-center opacity-75 mt-3">Não foram encontrados contactos registados.</p>
        <?php else: ?>


            <!-- widh results -->
            <table class="table table-sm table-striped table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th width="40%">Nome</th>
                        <th width="30%">Telefone</th>
                        <th width="15%" class="text-center">Editar</th>
                        <th width="15%" class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?= $contact->nome ?></td>
                            <td><?= $contact->telefone ?></td>
                            <td class="text-center"><a href="editar_contacto.php?id=<?= $contact->id ?>"><i class="bi bi-pencil-square text-primary"></i></a></td>
                            <td class="text-center"><a href="eliminar_contacto.php?id=<?= $contact->id ?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <!-- total results-->
            <div class="row">
                <div class="col">
                    <p>Total de registros encontrados: <strong><?= $total_contacts ?></strong></p>
                </div>
            </div>
        <?php endif; ?>



    </div>
</div>

<?php
require_once('footer.php');
?>