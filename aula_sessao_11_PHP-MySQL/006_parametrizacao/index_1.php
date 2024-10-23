<?php

// MAIS SEGURANÇA COM CONSULTA PARAMETRIZADA


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
    
    <form action="index_2.php" method="post">
        <div>
            <label>Username:</label>
            <input type="text" name="text_username">
        </div>
        <div>
            <label>Password:</label>
            <input type="text" name="text_passwrd">
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>
    </form>

</body>
</html>