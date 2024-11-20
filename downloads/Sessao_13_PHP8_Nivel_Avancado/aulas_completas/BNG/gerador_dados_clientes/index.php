<?php

/* 
- 1 admin
- 8 agentes (agentex@bng.com | Aa123456)

- 200 persons a distribuir pelos agents
    colocar algumas como eliminadas
*/

// -----------------------------------------------------------------
$aes_key = 'Vduu47qL51hLn6bkYkY6NlO1nivsmdfD';
$total_agents = 8;
$total_persons = 200;

require_once('dados.php');

// -----------------------------------------------------------------
// AGENTES
// -----------------------------------------------------------------

$agents = [];

// admin
$agents[] =
    "INSERT INTO agents VALUES(" .
    "0, " .
    "AES_ENCRYPT('admin@bng.com', '$aes_key'), " .
    "'" . password_hash('Aa123456', PASSWORD_DEFAULT) . "', " .
    "'admin', " .
    "NULL, " .
    "NULL, " .
    "NULL, " .
    "NOW(), " .
    "NULL, " .
    "NULL);";

for ($i = 1; $i <= $total_agents; $i++) {
    $agents[] =
        "INSERT INTO agents VALUES(" .
        "0, " .
        "AES_ENCRYPT('agent$i@bng.com', '$aes_key'), " .
        "'" . password_hash('Aa123456', PASSWORD_DEFAULT) . "', " .
        "'agent', " .
        "NULL, " .
        "NULL, " .
        "NULL, " .
        "NOW(), " .
        "NULL, " .
        "NULL);";
}

// -----------------------------------------------------------------
// PERSONS
// -----------------------------------------------------------------
$persons = [];

$index = 0;
while ($index < $total_persons) {

    // genero
    $gender = rand(1, 2);

    // name
    if ($gender == 1) {
        $nome1 = $nomes_masculinos[rand(0, count($nomes_masculinos) - 1)];
        $nome2 = $nomes_masculinos[rand(0, count($nomes_masculinos) - 1)];
    } else {
        $nome1 = $nomes_femininos[rand(0, count($nomes_femininos) - 1)];
        $nome2 = $nomes_femininos[rand(0, count($nomes_femininos) - 1)];
    }

    $nome3 = $apelidos[rand(0, count($apelidos) - 1)];
    $nome4 = $apelidos[rand(0, count($apelidos) - 1)];

    if ($nome1 != $nome2 && $nome3 != $nome4) {

        $nome = "$nome1 $nome2 $nome3 $nome4";
        $gender = $gender == 1 ? 'm' : 'f';
        $birthdate = new DateTime();
        $birthdate->setDate(rand(1960, 2000), rand(1, 12), rand(1, 25));
        $email = substr(str_shuffle("aaabbbcccdddeeefffggghhhiiijjjkkkmmmnnnooopppqqqrrrssstttuuuvvvxxxzzz"), 0, 12) . $dominios[rand(0, count($dominios) - 1)];
        $phone = rand(900000000, 999999999);

        // interests
        $nint = 0;
        $interests = [];
        while ($nint < 3) {
            $t = $interesses[rand(0, count($interesses) - 1)];
            if (!in_array($t, $interests)) {
                $interests[] = $t;
                $nint++;
            }
        }
        $interests = implode(',', $interests);
        $id_agent = rand(2,$total_agents);

        // deleted or not
        $t = rand(0,1000);
        $deleted = false;
        if($t >= 950){
            $deleted = true;
        }

        $str =
            "INSERT INTO persons VALUES(" .
            "0, " .
            "AES_ENCRYPT('$nome', '$aes_key'), " .
            "'$gender', " .
            "'" . $birthdate->format('Y-m-d') . "', " .
            "AES_ENCRYPT('$email', '$aes_key'), " .
            "AES_ENCRYPT('$phone', '$aes_key'), " .
            "'$interests', " . 
            "$id_agent, " . 
            "NOW(), " . 
            "NOW()"; 
        $str .= $deleted ? ", NOW());" : ", NULL);";
        $persons[] = $str;
        $index++;
    }
}

$file = fopen('output.sql', 'w');
fputs($file, "TRUNCATE agents; TRUNCATE persons;" . PHP_EOL);
foreach($agents as $agent){
    fputs($file, $agent . PHP_EOL);
}
foreach($persons as $person){
    fputs($file, $person . PHP_EOL);
}
fclose($file);
echo 'FIM';