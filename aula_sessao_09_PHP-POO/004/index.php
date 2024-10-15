<?php
// DESTRUCT

/*
Tal como acontece com o construct, existe um método especial que só vai ser executado quando um objeto é destruído ou o script termina a sua execução
*/
class Cliente{
    private $nome;
    
    function __construct($nome) {
        $this->nome = $nome;
        echo "Foi criado um novo objeto com o nome: {$this->nome}.<br>";
    }

    function __destruct() {
        echo "O objeto foi destruído.<br> Tinha o seguinte nome: " . $this->nome . '.<br>';
    }
}

// Criação de um objeto
$cliente = new Cliente('João');

// Vamos executar um bloco de código
echo "Vamos executar um bloco de código.<br>";
for ($i=0; $i <= 10; $i++) { 
    echo 'Valor do i: '. $i . '.<br>';
}

// Agora vamos destruir deliberadamente o objeto
unset($cliente);
echo 'Fim do script.';