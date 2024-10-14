<?php

session_start();


//--------------------------------------------------
// REGRAS DE VALIDAÇÃO
//--------------------------------------------------
// Todos os campos são de preenchimento obrigatório
// O campo texto tem que ter entre 5 e 30 caracteres
// O campo senha tem que ter exatamente 12 caracteres

// Neste caso vamos querer guardar mais informações nas validações
// 1. o nome do campo analisado
// 2. o valor que ele tem
// 3. a mensagem de erro

// Os dois primeiros valores são fundamentais para apresentar os valores anteriormente submetidos.
// Neste caso vamos apenas usar o campo 'text_texto'

// Quando existir um erro o primeiro valor e o terceiro vão ser fundamentais para aprewsentar o erro no local correto
//------------------------------------------------

// No caso de alguém tentar entrar no script de forma direta vamos redirecionar diretamente para o formulário de login

// verifica se houve um request do tipo POST
if($_SERVER["REQUEST_METHOD"] != "POST"){
    header('Location:index.php');
    return;
}

//------------------------------------------------
// agora vamos analisar os erros e preparar o regresso ao formulário, se for o caso.
// Vamos precisar de dados.
$inputs=[];

// text_texto
$inputs['text_texto'] = ['value' => '', 'erro' => ''];
// texto
if(empty($_POST['text_texto'])){
   $inputs['text_texto']['erro'] = "O campo é de preenchimento obrigatório";
}else{
   $inputs['text_texto']['value'] = $_POST['text_texto'];
    if(strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30){
         $inputs['text_texto']['erro'] = 'O campo texto tem que ter entre 5 e 30 caracteres';
    }
}

//-----------------------------------
// senha
$inputs['password_senha'] = ['value' => '', 'erro' => ''];

if(empty($_POST['password_senha'])){
    $inputs['password_senha']['erro'] = 'O campo senha é obrigatório';
}else{
    $inputs['password_senha']['value'] = $_POST['password_senha'];
    if(strlen($_POST['password_senha']) != 12){
        $inputs['password_senha']['erro'] = 'O campo senha tem que ter exatamente 12 caracteres';
    }
}

//--------------------------------------
// Vamos verificar se existe erros
// em caso afirmativo vamos colocar a informação dos inputs na sessão
// e redirecionar para o formulário para apresentar os erros e valores
if(!empty($inputs['text_texto']['erro']) || !empty($inputs['password_senha']['erro'])){
    $_SESSION['inputs'] = $inputs;
    header('Location:index.php');
    return;
}

//-------------------------------------
// no caso de não existir erros, vamos apresentar os valores
echo '<p>Login: <strong>' . $_POST['text_texto'] . '</strong></p>';
echo '<p>Senha: <strong>' . $_POST['password_senha'] . '</strong></p>';




?>
<a href="index.php">Voltar</a>