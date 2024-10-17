<?php
// IMPEDIR HERANÇA DE CLASSE OU MÉTODO

/*
Imagina que vais criar um bloco de código que vai ser usado por outro programador.
Vais querer que a estrutura da tua classe contenha mecanismos que impessam determinado tipo de ações.
Por exemplo, impedir que a tua classe seja herdada por outra classe.
Ou podes querer que uma determinada classe não possa ser herdada por outra.
Ou simplesmente, um determinado método dessa classe não poderá ser sobreposto (override) por outro dentro da classe 'filha'
*/

final class Classe_Unica{
    // Essa classe não vai poder ser herdada
}

// Se tentarmos criar uma nova classe que extende esta anterior...
class Classe_Filha extends Classe_Unica{
    // Vai dar erro
    // Fatal error: Class Nova may not inherir from class
}

// Para atingir o resultado, usamos a palavra reservada FINAL