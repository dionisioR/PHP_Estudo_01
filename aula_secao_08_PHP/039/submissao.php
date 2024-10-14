<?php
// verifica se houve um request do tipo POST
if($_SERVER["REQUEST_METHOD"] != "POST"){
    die('Acesso inválido');
}

//--------------------------------------------------
// REGRAS DE VALIDAÇÃO
//--------------------------------------------------
// Todos os campos são preenchidos obrigatóriamente excepto o textarea.
// O primeiro campo de texto tem que ter entre 5 e 30 caracteres.
// O campo senha, tem que ter exatamente 12 caracteres.
// das 3 checkboxes, pelo menos uma tem que estar selecionada
// nos radiobuttons tem queexistir uma opção selecionada
// no caso do textarea, não é obreigatório, mas se tive texto tem que ter no mínimo 30 caracteres


$erros = [];

// texto
if(empty($_POST['text_texto'])){
    $erros[] = 'O campo texto é obrigatório';
}else{
    if(strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30){
        $erros[] = 'O campo texto tem que ter entre 5 e 30 caracteres';
    }
}


// senha
if(empty($_POST['password_senha'])){
    $erros[] = 'O campo senha é obrigatório';
}else{
    if(strlen($_POST['password_senha']) != 12){
        $erros[] = 'O campo senha tem que ter exatamente 12 caracteres';
    }
}

// select
if(empty($_POST['select'])){
    $erros[] = 'O campo select é obrigatório';
}

// checkbox
if(empty($_POST['check_1']) && empty($_POST['check_2']) && empty($_POST['check_3'])){
    $erros[] = 'Pelo menos uma opção de checkbox tem que estar selecionada';
}

// radio
if(empty($_POST['radio'])){
    $erros[] = 'Uma opção de radio tem que estar selecionada';
}

// textarea
if(!empty($_POST['text_textarea']) && strlen($_POST['text_textarea']) < 30){
    $erros[] = 'O campo textarea tem que ter no mínimo 30 caracteres ou deve permanecer vazio!';
}

//-------------------------------------
// apresentaremos os erros se existirem, caso contrário, apresentaremos os resulados
//-------------------------------------

if(!empty($erros)){
    echo '<h1>Erros</h1>';
    echo '<ul>';
    foreach($erros as $erro){
        echo "<li>$erro</li>";
    }
    echo '</ul>';
}else{
    echo '<h1>Sucesso</h1>';
    echo '<p>Os dados foram submetidos com sucesso</p>';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}


?>
<a href="index.php">Voltar</a>