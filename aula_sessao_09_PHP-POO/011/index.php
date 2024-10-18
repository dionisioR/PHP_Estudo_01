<?php
/*
MÉTODOS ESTÁTICOS

Métodos estáticos são métoso de uma classe que podem ser chamadas diretamente sem que seja necessário criar um objeto a partir 
dessa classe.
*/
class Matematica{
    public static function somar($x, $y){
        return $x + $y;
    }
}

/*
Podemos chamar o método escrevendo o nome da classe logo depois de :: e o nome do métodp com os respectivos parâmetros.
*/

echo Matematica::somar(10, 20); // 30