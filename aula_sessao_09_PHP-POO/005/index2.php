<?php
class Cliente{
    protected $nome;
    protected $email;

    function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        echo "Foi criado um novo objeto com o nome: {$this->nome}.<br>";
    }
    protected function apresentar(){
        echo "O cliente {$this->nome} tem o email {$this->email}.<br>";
    }
}

$clientes = [
    new Cliente('Anna', 'anna@g.com'),
    new Cliente('João', 'j@g.com'),
    new Cliente('Maria', 'm@g.com')
];

echo '<pre>';
print_r($clientes);
echo '</pre>';

// $clientes[0]->apresentar();  // Erro - o método está protegido e só pode ser acessado
// a partir das classes que herdam da classe base.