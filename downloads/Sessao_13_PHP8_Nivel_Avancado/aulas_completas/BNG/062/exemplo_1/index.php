<?php

/* 
Vamos ver como podemos usar o PHP para definir os dados a apresentar.

Cenário:
Temos numa "base de dados" o total de homens e mulheres de uma determinada organização.
Queremos apresentar esses dados numa tabela e também num gráfico com o ChartJS.
Por questões de comodidade, vamos descarregar a biblioteca para o nosso projeto.
*/

$dados = [
    'homens' => 323,
    'mulheres' => 457
];

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChartJS</title>
    <link rel="stylesheet" href="assets/app.css">
    <script src="assets/chart.js"></script>
</head>

<body>

    <div class="chart-container">
        <canvas id="grafico"></canvas>
    </div>

    <script>
        new Chart(
            document.querySelector("#grafico"), {
                type: 'bar',
                data: {
                    labels: ['<?= array_keys($dados)[0] ?>', '<?= array_keys($dados)[1] ?>'],
                    datasets: [{
                        label: 'Homens e Mulheres',
                        data: [<?= $dados['homens'] ?>, <?= $dados['mulheres'] ?>],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    maintainAspectRatio: false
                }
            }
        )
    </script>

</body>

</html>