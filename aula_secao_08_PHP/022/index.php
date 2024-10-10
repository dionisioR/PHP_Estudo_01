<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RD3W</title>
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/jpg">

</head>
<body>
    <h1>Foreach dentro de foreach</h1>
    <?php
        $paises = [
            'Brasil' => ['Rio de Janeiro', 'São Paulo', 'Bahia', 'Minas Gerais'],
            'Argentina' => ['Buenos Aires', 'Córdoba', 'Rosário', 'Mendoza'],
            'Uruguai' => ['Montevidéu', 'Punta del Este', 'Colônia do Sacramento', 'Salto'],
            'Paraguai' => ['Assunção', 'Encarnación', 'Ciudad del Este', 'San Lorenzo'],
            'Chile' => ['Santiago', 'Valparaíso', 'Viña del Mar', 'Concepción'],
            'Peru' => ['Lima', 'Cusco', 'Arequipa', 'Trujillo'],
            'Colômbia' => ['Bogotá', 'Medellín', 'Cali', 'Cartagena'],
            'Venezuela' => ['Caracas', 'Maracaibo', 'Valência', 'Barquisimeto'],
            'Equador' => ['Quito', 'Guayaquil', 'Cuenca', 'Manta']
        ];

        // Foreach
        foreach ($paises as $pais => $cidades) {
            echo "<h2>$pais</h2>";
            echo "<ul>";
            foreach ($cidades as $cidade) {
                echo "<li>$cidade</li>";
            }
            echo "</ul>";
        }
    ?>
    
</body>
</html>