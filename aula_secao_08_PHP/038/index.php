<?php

// Tratamento de diferentes inputs

/*
    Vamos ver como são captados os diferentes tipos de elementos de HTML tradicionalmente usados nos formulário.
    Por agora vamos focar apenas os principais e vamos deixar os outros para outro momento.
    */


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
                        <div class="col-sm-6">
                            <!-- text -->
                            <label for="nome" class="form-label">Texto</label>
                            <input type="text" class="form-control" name="text_texto">
                        </div>
                        <div class="col-sm-6">
                            <!-- password -->
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password_senha">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <!-- select -->
                        <div class="col-sm-12">
                            <label for="select" class="form-label">Select</label>
                            <select class="form-select" name="select">
                                <option value="Portugal" selected>Portugal</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Angola">Angola</option>
                                <option value="Moçambique">Moçambique</option>
                                <option value="CAbo Verde">CAbo Verde</option>
                                <option value="Guiné-Bissau">Guiné-Bissau</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <!-- checkbox -->
                             <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="check_1" name="check_1" id="check_1">
                                <label for="check_1" class="form-check-label">Checkbox 1</label>
                             </div>
                             <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="check_2" name="check_2" id="check_2">
                                <label for="check_2" class="form-check-label">Checkbox 2</label>
                             </div>
                             <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="check_3" name="check_3" id="check_3">
                                <label for="check_3" class="form-check-label">Checkbox 3</label>
                             </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- radio -->
                             <div class="form-check">
                                <input type="radio" class="form-check-input" value="radio_1" name="radio" id="radio_1">
                                <label for="radio_1" class="form-check-label">radio 1</label>
                             </div>
                             <div class="form-check">
                                <input type="radio" class="form-check-input" value="radio_2" name="radio" id="radio_2">
                                <label for="radio_2" class="form-check-label">radio 2</label>
                             </div>
                             <div class="form-check">
                                <input type="radio" class="form-check-input" value="radio_3" name="radio" id="radio_3">
                                <label for="radio_2" class="form-check-label">radio 3</label>
                             </div>
                           
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <!-- textarea -->
                            <label for="textarea" class="form-label">Textarea</label>
                            <textarea class="form-control" name="text_area" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <!-- submit -->
                            <input type="submit" class="px-5 btn btn-primary" value="Enviar">
                            
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
        document.getElementById('preencher').addEventListener('click', function(){
          
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