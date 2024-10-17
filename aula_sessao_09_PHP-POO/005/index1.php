<?php
class Animal_de_estimacao{
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
        echo "Foi criado um novo objeto com o nome: {$this->nome}.<br>";
    }
}

class Cao extends Animal_de_estimacao{
    function ladrar($vezes) {
        echo "O {$this->nome} ladrou {$vezes} vezes! <br>";
    }
}

class Gato extends Animal_de_estimacao{
    function miar($vezes) {
        echo "O {$this->nome} miou {$vezes} vezes! <br>";
    }
}

// Instanciação das classes em objetos
$cao = new Cao('Rex', 'Cão', 'Pastor Alemão');
$gato = new Gato('Miau', 'Gato', 'Siamês');
echo '<br>';

// Não só cada objeto tem as propriedades da classe base, como também tem as funcionalidades que cada classe implementa.
$cao->ladrar(3);
echo '<br>';
$gato->miar(5);
echo '<br>';

// Observe que na classe Animal_de_Estimação, as propriedades foram definidas com o modificador de acesso PROTECTED.
// Isso significa que as propriedades são acessíveis a partir das classes que herdam da classe base, mas não são acessíveis a partir de fora das classes.
// Se tentarmos acessar as propriedades diretamente, vamos obter um erro.
// echo $cao->nome; // Vai dar erro