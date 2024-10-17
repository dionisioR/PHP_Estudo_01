<?php
// CLASSES ABSTRATAS

/*
- Classes abstratas são classes que não podem ser instanciadas, ou seja, não podem ser criadas objetos a partir delas.
- Classes abstratas são utilizadas para definir métodos que devem ser implementados nas classes filhas.
- Para definir uma classe abstrata, utilizamos a palavra reservada abstract.

Um outro conceito muito importante na programação orientada a objetos é o conceito de classes abstratas.

Uma classe abstrata, com métodos abstratos, implica que a classe tenha métodos que estão declarados, mas cuja funcionalidade
vai ter que ser implementada nas classes derivadas.
*/

abstract class Pessoa{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

// Como podemos ver os métodos estão declarados mas não tem implementação
// As classes derivadas vão er que definir essa implementação.

// A classe Homem contém todas as implementações que a classe 'Pessoa' obriga a implementar devido ao uso da expressão ABSTRACT
class Homem extends Pessoa{

    // Se não implementarmos os métodos teremos um Fatal error

    public function identificar(){
        echo "Homem";
    }
    public function falar(){
        echo "Olá";
    }
    public function saltar(){
        echo "Pulando";
    }
}