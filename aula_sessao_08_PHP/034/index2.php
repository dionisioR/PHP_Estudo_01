<?php
// $_SESSION
// É uma super global que é usada para armazenar informações sobre o usuário em uma variável de sessão.
// Uma variável de sessão é criada no servidor e é usada para armazenar informações sobre o usuário em várias páginas.
// As informações da sessão são armazenadas no servidor, não no computador do usuário.
// As informações da sessão são excluídas quando o usuário fecha o navegador.
// Para começar a armazenar informações na sessão, você deve primeiro iniciar a sessão.
// session_start();

session_start();
$_SESSION['usuario'] = 'Dio';
$_SESSION['perfil'] = 'ADM';
$_SESSION['autorizado'] = true;

echo '<pre>';
print_r($_SESSION);