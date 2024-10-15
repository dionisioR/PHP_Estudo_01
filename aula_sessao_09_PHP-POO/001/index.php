<?php
// Classe
class Fruto{
    // código aqui
    public $nome;
}

// Objeto
$laranja = new Fruto();

// definir o valor da propriedade
$laranja->nome = "Laranja";

// Cria um outro objeto do tipo fruto
$banana = new Fruto();
$banana->nome = "Banana";

// Exibe o valor da propriedade de cada objeto
echo $laranja->nome;
echo "<br>";
echo $banana->nome;
echo '<hr>';

// cada objeto criado a partir da mesma classe contém as suas propriedades de forma completamente independente.
?>

