<?php
// este script vai tratar a submissão do formulário
// se não houver submissão do formulário, teremos acesso inválido
if($_SERVER["REQUEST_METHOD"] != "GET"){
    // header("Location: index.php");
    // exit();
    die('Acesso inválido');
}

// vamos verificar se os campos foram preenchidos
// Vai buscar username e passord
$username = isset($_GET['username']) ? trim($_GET['username']) : '';
$password = isset($_GET['password']) ? trim($_GET['password']) : '';

// vamos verificar se os campos estão preenchidos
if(empty($username) || empty($password)){
    die('Preencha todos os campos');
}

// vamos verificar se o usuário e senha estão corretos
$user = [
    'username' => 'admin',
    'password' => '123'
];

if($username == $user['username'] && $password == $user['password']){
    echo '<h1>Login OK</h1>';
}else{
    echo '<h1>Login Inválido</h1>';
}
?>
<a href="index.php">Voltar</a>