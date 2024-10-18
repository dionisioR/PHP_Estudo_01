<?php
/*
PROPRIEDADES ESTÁTICAS

Semelhante aos métodos, as classes também podem ter propriedades estáticas.
Essas propriedades podem ser chamadas diretamente sem que seja necessário criar uma instância da classes.
*/

class Matematica{
    public static $pi = 3.1415;
}

// Para chamar a propriedade usamos o ::
echo "<p>Resultado: ". Matematica::$pi . '</p>';