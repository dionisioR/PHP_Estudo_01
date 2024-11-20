<?php

/* 
Podemos usar o chartjs nos nossos projetos simplesmente inserindo a biblioteca no
header do nosso HTML.

O nosso html apenas irá necessitar de um elemento canvas onde o gráfico vai ser desenhado.
Este exemplo contém o código que é apresentado na documentação da biblioteca.
*/

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChartJS</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <div>
        <!-- o gráfico vai ser desenhado aqui -->
        <canvas id="grafico"></canvas>
    </div>


    <script>
        const ctx = document.getElementById('grafico');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>