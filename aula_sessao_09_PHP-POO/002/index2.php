<?php

class Homem
{
    private $nome;

    function setNome($n) {
       $nomes_proibidos = [
              "Maria",
              "João",
              "José",
              "Antônio"
       ];

       // verifica se $n pertence aos nomes proibidos
         if (in_array($n, $nomes_proibidos)) {
              return;
         } 
              $this->nome = $n;
         
    }
    function getNome() {
        return $this->nome;
    }
}

// instanciando um objeto
$homem = new Homem();
// $homem->nome = 'João';  // ERRO

$homem->setNome('Maria');
echo $homem->getNome(); // não imprime nada
echo '<br>';

$homem->setNome('Dio');
echo $homem->getNome(); // imprime Dio
echo '<br>';

