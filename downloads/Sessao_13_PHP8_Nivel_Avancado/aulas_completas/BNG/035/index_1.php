<?php

/* 
Como sabes, as horas são diferentes a cada momento em diferentes partes
do Mundo. Existem, portanto, diferenças horárias entre diferentes regiões
do planeta, e se a tua aplicação vai ser usada em diferentes partes do Mundo
é importante conheceres os timezones.

Timezone é o termo que define uma determinada área geográfia do Mundo onde
a data e hora são iguais.

Por exemplo, nos Estados Unidos da América, existem 4 fusos horários diferentes.

Que importância tem essa realidade nas nossas aplicações?
Se vais implementar um sistema que guarda datas e horas precisas, vais querer
que o utilizador da tua aplicação possa definir que timezone corresponde à sua região.

Para datas e horas que servem apenas para mecanismos internos, o sistema irá sempre
definir como padrão a timezone do local onde o servidor está alojado.
Contudo, como PHP, podes forçar o timezone.
Vejamos.
*/

$agora = new DateTime();
echo "Data e hora atual na minha área geográfica: <strong>{$agora->format("d-m-Y H:i:s")}</strong><br>";

/* 
Para definir um timezone diferente, o PHP contém uma forma simples de o fazer.
https://www.php.net/manual/en/timezones.php
*/

date_default_timezone_set('Asia/Macau');
$agora = new DateTime();
echo "Data e hora atual na área geográfica Asia/Macau: <strong>{$agora->format("d-m-Y H:i:s")}</strong><br>";

// podemos também definir esse valor na construção da data e hora
$agora = new DateTime();
$agora->setTimezone(new DateTimeZone("Europe/Paris"));
echo "Data e hora atual na área geográfica Europe/Paris: <strong>{$agora->format("d-m-Y H:i:s")}</strong><br>";

/* 
Por exemplo, podemos criar uma apresentação de diferentes fusos horários da seguinte forma:
https://www.w3schools.com/php/php_ref_timezones.asp
*/

echo '<hr>';
echo '<h3>Diversos fusos horários</h3>';
$timezones = [
    "America/Argentina/Catamarca",
    "America/Bogota",
    "America/Halifax",
    "America/Jamaica",
    "America/Vancouver",
    "Africa/Lagos",
    "Africa/Tunis",
    "Africa/Luanda",
    "Africa/Bissau",
    "Asia/Gaza",
    "Asia/Saigon",
    "Asia/Singapore",
    "Asia/Qatar",
    "Europe/Berlin",
    "Europe/Helsinki",
    "Europe/Sarajevo",
    "Europe/Rome",
    "Europe/London",
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Fuso horário</th>
                <th>Hora atual</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timezones as $timezone) : ?>
                <?php
                $agora = new DateTime();
                $agora->setTimezone(new DateTimeZone($timezone));
                ?>
                <tr>
                    <td><?= $timezone ?></td>
                    <td><?= $agora->format("d-m-Y H:i:s") ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>