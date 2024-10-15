<?php
// este script vai tratar a submissão do formulário
// se não houver submissão do formulário, teremos acesso inválido
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die('Acesso inválido');
}

// usuarios
$user = [
    'Anna' => 'aaa',
    'Joao' => 'jjj',
    'Maria' => 'mmm',
    'Pedro' => 'ppp'
];



// vamos verificar se os campos foram preenchidos
// Vai buscar username e passord
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

// vamos verificar se os campos estão preenchidos
if (empty($username) || empty($password)) {
    die('Preencha todos os campos');
}

if (key_exists($username, $user)) {
    if (password_verify($password, $user[$username])) {
        echo '<h1>Login OK</h1>';
    } else {
        echo '<h1>Login inválido</h1>';
    }
} else {
    echo '<h1>Login inválido</h1>';
}
?>
<a href="index.php">Voltar</a>