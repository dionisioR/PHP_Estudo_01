<?php

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

<body>

    <div class="container my-5">
        <h1>Tratamento de Erros</h1>
        <?php

            function adicionar($a, $b){
                if(!is_numeric($a) || !is_numeric($b)){
                    throw new Exception("Os valores devem ser numéricos");
                }
                return $a + $b;
            }
            // echo adicionar('AAA', 10);
            // echo adicionar('10', 10);
            echo adicionar(10, 10);
            echo '<hr>';

            //----------------------------------
            // Agora usando a estrutura try catch para impedir o fim da execução.
            try {
                echo adicionar('AAA', 10);
            } catch (Exception $e) {
                echo 'Erro: ' . $e->getMessage();
            }finally{
                echo '<br>Execução continua...';
            }
            echo '<br>Fim do script';



        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>