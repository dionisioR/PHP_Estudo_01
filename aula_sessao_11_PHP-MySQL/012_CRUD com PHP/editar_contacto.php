<?php

use RD3W\Database;

require_once('header.php');

// verifica se tem um ID na url
if (empty($_GET['id'])) {
    header("Location: index.php");
}

// incluir os arquivos
require_once('./config.php');
require_once('./libraries/Database.php');

// pega o ID
$id = $_GET['id'];
$erro = null;
$database = new Database(MYSQL_CONFIG);
$params = [
    ":id" => $id
];

// pegas os dados do contacto
$results = $database->execute_query("SELECT * FROM contactos WHERE id = :id", $params);
$contact = $results->results[0];

// verifica se ocorreu a submissão do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // pega os dados do formulário
    $nome = $_POST['text_nome'];
    $telefone = $_POST['text_telefone'];

    // verifica se o telefone já existe
    $params = [
        ":id" => $id,
        ":telefone" => $telefone
    ];
    $sql = "SELECT id FROM contactos WHERE id <> :id AND telefone = :telefone";
    $results = $database->execute_query($sql, $params);

    if ($results->affected_rows != 0) {
        // Existe um outro contato com esse número de telefone
        $erro = "Já existe um contacto com este número de telefone.";
    } else {
        // atualiza os dados do contacto
        $params = [
            ":id" => $id,
            ":nome" => $nome,
            ":telefone" => $telefone
        ];
        $sql = "UPDATE contactos SET nome = :nome, telefone = :telefone, updated_at = now() WHERE id = :id";
        $results = $database->execute_non_query($sql, $params);

        header("Location: index.php");
    }
}

?>

<div class="row justify-content-center">
    <div class="col-sm-8 col-md-6 col-10">

        <div class="card p-4">

            <form action="editar_contacto.php?id=<?= $contact->id ?>" method="post">
                <p class="text-center"><strong>EDITAR CONTACTO</strong></p>
                <div class="mb-3">
                    <label for="text_nome" class="form-label">Nome</label>
                    <input type="text" name="text_nome" id="text_nome" class="form-control" minlength="3" maxlength="50" required value=" <?= $contact->nome ?> ">
                </div>
                <div class="mb-3">
                    <label for="text_telefone" class="form-label">Telefone</label>
                    <input type="text" name="text_telefone" id="text_telefone" class="form-control" minlength="3" maxlength="12" required value="<?= $contact->telefone ?>">
                </div>
                <div class="text-center">
                    <a href="index.php" class="btn btn-outline-dark">Cancelar</a>
                    <input type="submit" value="Atualizar" class="btn btn-outline-dark">
                </div>
            </form>

        </div>

        <!-- error message -->
        <?php if (!empty($erro)): ?>
            <div class="mt-3 alert alert-danger p-2 text-center">
                <?= $erro ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php
require_once('footer.php');
?>