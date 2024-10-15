<?php

// Validação de formulário parte 2

/*
  E se eu quiser apresentar os erros no formulário, manter os valores escritos e só apresentar os dados no caso de não existir nenhum erro?

  IMPORTANTE:
  Este exercício é mais simples de executar quando usamos um framework que já contém mecanismos programados para facilitar o desenvolvimento destas operações.

   */

session_start();
$inputs = [];

if(isset($_SESSION['inputs'])){
    // recolhe informação da sessão
    $inputs = $_SESSION['inputs'];
    // remove a informação para estar vazia em futuros requests
    unset($_SESSION['inputs']);
}

function show_error($campo){
    global $inputs;
    if(key_exists($campo, $inputs)){
        if(!empty($inputs[$campo]['erro'])){
            return '<span class="text-danger"><i>'.$inputs[$campo]['erro'].'</i></span>';
        }else{
            return '';
        }
    }else{
        return '';
    }
}

function show_value($campo){
    global $inputs;
    if(key_exists($campo, $inputs)){
        if(!empty($inputs[$campo]['value'])){
            return $inputs[$campo]['value'];
        }else{
            return '';
        }
    }else{
        return '';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

    </style>

</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-8 card p-4 bg-light">
                <h1>Tratamento de Formulário</h1>
                <hr>

                <form action="submissao.php" method="post" name="formulario">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <!-- text -->
                            <label for="nome" class="form-label">Texto</label>
                            <input type="text" class="form-control" name="text_texto" value="<?= show_value('text_texto') ?>">
                            <?= show_error('text_texto') ?>
                        </div>
                        <div class="col-sm-12">
                            <!-- password -->
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password_senha">
                            <?= show_error('password_senha') ?>
                        </div>
                    </div>
                


                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <!-- submit -->
                            <input type="submit" class="px-5 btn btn-primary" value="Entrar">

                        </div>
                    </div>

                </form>

                <div class="mt-3 text-center">
                    <span id="preencher" style="cursor: pointer;">Preencher</span>
                </div>

            </div>
        </div>
    </div>


    <?php

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('preencher').addEventListener('click', function() {

            document.querySelector('#preencher').addEventListener('click', () => {
                const formulario = document.forms.formulario
                formulario['text_texto'].value = 'RD3W Cursos'
                formulario['password_senha'].value = '123456'
                formulario['select'].value = "Portugal"
                formulario['check_1'].checked = true
                formulario['radio'][0].checked = true
                formulario['text_area'].textContent = 'Teste'
            })
        });
    </script>
</body>

</html>