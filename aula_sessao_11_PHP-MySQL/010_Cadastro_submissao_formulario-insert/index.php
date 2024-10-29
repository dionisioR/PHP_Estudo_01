<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark d-flex align-items-center justify-content-center" style="min-height: 90vh;">

    <div class="w-50 bg-white p-5">
        <h1 class="text-center">Registro de clientes</h1>
        <form action="tratar.php" method="post">
            <div class="my-3">
                <label for="text_nome">Nome:</label>
                <input type="text" name="text_nome" id="text_nome" class="form-control" require>
            </div>
            <div class="my-3">
                <label for="text_email">E-mail:</label>
                <input type="email" name="text_email" id="text_email" class="form-control" require>
            </div>
            <div class="text-center">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>