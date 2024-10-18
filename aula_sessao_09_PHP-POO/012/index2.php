<?php
// Propriedades estáticas

// E tal como acontece com os métodos, as propriedades estaticas também podem ser acessadas a partir de classes derivadas usando a expressão PARENT

class Humano{
    public static $valor = "Classe principal";
}

class Homem extends Humano{
    public function mostrar_valor(){
        return parent::$valor;
    }
}

$home = new Homem();
echo $home->mostrar_valor();