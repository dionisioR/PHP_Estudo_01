<?php
// PROPRIEDADE ESTATICA

// As classes podem ter propriedades estáticas e não estáticas tal como acontece com os métodos.
// As propriedades estáticas podem ser acessadas a partir de qualquer método da classe usando a expressão SELF.

class Humano{
    public static $nome;
    public function definir_nome($n){
        self::$nome = $n;
    }
    public function mostrar_nome(){
        return 'Meu nome é ' . self::$nome;
    }
}

$humano = new Humano();
$humano->definir_nome('João');
echo $humano->mostrar_nome();