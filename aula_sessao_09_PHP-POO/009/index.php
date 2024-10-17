<?php
// CRIAÇÃO DE CLASSES A PARTIR DE INTERFACES

/* 
Em programação orientada a objetos, o conceito de Interfaces é semelhante ao de uma classe abstrata.
Vamos ver as diferenças.

Interfaces são como contratos que definem quais métodos uma classe deve implementar.
Uma interface é definida com a palavra-chave interface.

Interfaces permitem espeficiar métodos que as classes vão ter que implementar nas suas estruturas.

Quando várias classes têm que implementar um conjunto de métodos semelhantes, estamos a entrar num conceito muito importante da programação orientada a objetos que é o Polimorfismo.

*/

interface Animal {
    public function vocalizar($vezes);
    public function identificar();
    public function executar_movimento($direcao);
}

class Cachorro implements Animal{
    public function vocalizar($vezes){
        for($i=0; $i<$vezes; $i++){
            echo "Au Au Au <br>";
        }
    }
    public function identificar(){
        echo "Sou um cachorro <br>";
    }
    public function executar_movimento($direcao){
        echo "Estou a correr para a $direcao <br>";
    }
}

$cao = new Cachorro();
$cao->vocalizar(3);
$cao->identificar();
$cao->executar_movimento("frente");