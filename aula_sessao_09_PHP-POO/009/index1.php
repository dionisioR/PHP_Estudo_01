<?php
// CRIAÇÃO DE CLASSES A PARTIR DE INTERFACES

/*
Pegando o exemplo anterior, a Interface Animal declara a função vocalizar.
Cada animal tem uma forma diferente de vocalizar.
Então podemos ter o seguinte:
*/

interface Animal
{
    public function vocalizar($vezes);
}

class Cachorro implements Animal
{
    public function vocalizar($vezes)
    {
        for ($i = 0; $i < $vezes; $i++) {
            echo "Au Au Au <br>";
        }
    }
}
class Gato implements Animal
{
    public function vocalizar($vezes)
    {
        for ($i = 0; $i < $vezes; $i++) {
            echo "Miau Miau Miau <br>";
        }
    }
}

class Lobo implements Animal
{
    public function vocalizar($vezes)
    {
        for ($i = 0; $i < $vezes; $i++) {
            echo "Uivar...<br>";
        }
    }
}

$cao = new Cachorro();
$cao->vocalizar(3);
echo '<br>';

$gato = new Gato();
$gato->vocalizar(3);
echo '<br>';

$lobo = new Lobo();
$lobo->vocalizar(3);
echo '<br>';

/*
Em forma de conclusão, enquanto as classes são modelos para a criação de objetos, as interfaces podem ser usadas como modelos para a criação de classes.
Funcionam como um contrato no qual o programador, para implementar uma determinada classe, compromete-se a desenvolver essa classe a partir de uma interface declarada, independentemente da implementação de código que esses métodos depois vão ter dentro da classe.

IMPORTANTE:
Interfaces não podem ter propriedades, apenas métodos.
Estes conceitos são centrais no âmbito da programação orientada a objetos, mas isso não quer dizer que tens que os aplicar em todos os teus projetos.
Aliás, na maior parte dos casos, estes conceitos são aplicados no desenvolvimento de frameworks que depois tu vais aproveitar para construir as tuas aplicações.
*/