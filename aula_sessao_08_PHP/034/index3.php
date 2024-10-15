<?php
// $_COOKIE
// É uma super global que é usada para armazenar informações sobre o usuário em um cookie.
// Um cookie é um pequeno arquivo de texto que é armazenado no computador do usuário.
// Os cookies são usados para armazenar informações sobre o usuário em várias páginas.
// Quando um navegador da web solicita uma página de um servidor, os cookies associados a essa página são enviados de volta ao servidor.
// Os cookies são armazenados no computador do usuário em um local específico.
// As informações dos cookies são armazenadas no computador do usuário, não no servidor.
// As informações dos cookies são armazenadas no computador do usuário por um período de tempo especificado.

// Exemplos:
//--------------------------------
echo '<pre>';
print_r($_COOKIE);

// Definir um cookie
$nome = "usuario";
$valor = "Dio";
$expira = time() + 3600; // 1 hora
setcookie($nome, $valor, $expira);

print_r($_COOKIE);

// echo '<br>';
// echo ($_COOKIE['PHPSSID']);