<?php

use RD3W\Database;

require_once('header.php');
require_once('./config.php');
require_once("./libraries/Database.php");

$erro = null;

// check if there was a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database(MYSQL_CONFIG);

    // get post data
    $nome = $_POST['text_nome'];
    $telefone = $_POST['text_telefone'];

    // check if the phone already exists
    $params = [
        ":telefone" => $telefone
    ];
    $sql = "SELECT id FROM contactos WHERE telefone = :telefone";
    $results = $database->execute_query($sql, $params);

    if ($results->affected_rows != 0) {
        // Já existe um registro com este telefone
        $erro = "Já existe um contacto com este número de telefone.";
    } else {
        // insert new contact 
        $params = [
            ":nome" => $nome,
            ":telefone" => $telefone
        ];

        // $sql = "INSERT INTO contactos (nome, telefone) VALUES (:nome, :telefone, now(), now())";
        $sql = "INSERT INTO contactos VALUES (0, :nome, :telefone, now(), now())";
        $results = $database->execute_non_query($sql, $params);

        header("Location: index.php");
    }
}

?>

<div class="row justify-content-center">
    <div class="col-sm-8 col-md-6 col-10">

        <div class="card p-4">

            <form action="adicionar_contacto.php" method="post">
                <p class="text-center"><strong>NOVO CONTACTO</strong></p>
                <div class="mb-3">
                    <label for="text_nome" class="form-label">Nome</label>
                    <input type="text" name="text_nome" id="text_nome" class="form-control" minlength="3" maxlength="50" required>
                </div>
                <div class="mb-3">
                    <label for="text_telefone" class="form-label">Telefone</label>
                    <input type="text" name="text_telefone" id="text_telefone" class="form-control" minlength="3" maxlength="12" required>
                </div>
                <div class="text-center">
                    <a href="index.php" class="btn btn-outline-dark">Cancelar</a>
                    <input type="submit" value="Guardar" class="btn btn-outline-dark">
                </div>
            </form>

        </div>

        <!-- error message -->
        <?php if (!empty($erro)): ?>
            <div class="mt-3 alert alert-danger p-2 text-center">
                <?php echo $erro; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
require_once('footer.php');
?>