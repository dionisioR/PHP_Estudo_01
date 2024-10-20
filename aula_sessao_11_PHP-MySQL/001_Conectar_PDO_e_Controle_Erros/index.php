<?php
// CONECTAR VIA PDO E CONTROLE DE ERROS

// Vamos começar por aprender como conectar a nossa aplicação a base de dados

// 1. definir as propriedades de conexão
$database = 'loja_online';
$username = 'root';
$password = '';

// Etetuar a conexão
// Para isso precisamos criar uma instância da classe PDO.
// Necessitamos de 3 parâmetros: o DNS (Data Source Name), onde vamos especificar no mínimo o host e o nome da base de dados
//O segundo parâmetro é o nome do usuário do MySQL e o terceiro parâmetro é o PASSWORD desse usuário.
$conexao = new PDO("mysql:host=localhost;dbname=$database",$username,$password);

// Verifica se a conexão foi estabelecida corretamente
$estado = $conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;  // localhost via TCP/IP

/*
Como podemo ver conseguimos faze a conexão com a base de dados e estamos em condição de poder fazer as nossas queries.

É importante percener que existem três etapas numa comunicação com a base de dados:
1. conectar com a base de dados
2. comunicar com a base de dados
3. fechar a conexão com a base de dados

A conexão vai ficar aberta até a destruição do objeto PDO.
Para desligar a conexão, bastará destruir o objeto $conexao
*/

$conexao = null;

// Se não fechar a conexão de forma explícita, a conexão será interrompida quando o nosso script chegar ao fim da sua execução.