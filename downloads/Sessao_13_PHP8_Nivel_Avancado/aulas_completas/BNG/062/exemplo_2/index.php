<?php
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
                    labels: ['Elementos'],
                    datasets: [{
                            label: 'Homens',
                            data: [<?= $dados['homens'] ?>],
                            borderWidth: 1,
                            backgroundColor: "#3060FF"
                        },
                        {
                            label: 'Mulheres',
                            data: [<?= $dados['mulheres'] ?>],
                            borderWidth: 1,
                            backgroundColor: "#FFAACC"
                        }
                    ]
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