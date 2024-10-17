<?php
// CLASSES ABSTRATAS

/*
Ao herdar de uma classe abstrata, o método da classe filha deve ser definido com o mesmo nome, e um modificador de acesso com restrição igual ou menor.

Por exemplo, se o método abstrato for definido como protected, o método da classe filha deve ser definido como protected ou public. Não pode ser privado.

Além disso, o tipo e o número de argumentos exigidos devem ser os mesmo. No entanto, as classes filhas podem ter argumentos opcionais.

Assim, quando uma classe filha é herdada de uma classe abstracta temos as seguintes regras.

> O método da classe filha deve ser definido com o mesmo nome;
> O método da classe filha deve ser definido com um modificador de acesso com restrição igual ou menor;
> O tipo e o número de argumentos exigidos devem ser os mesmo;
No entanto, a classe filha pode ter argumentos opcionais adicionais.
*/

abstract class Pessoa{
    abstract public function falar($mensagem);
}

class Homem extends Pessoa{
    public function falar($mensagem, $autor = "RD3W"){
        echo "Homem diz: $mensagem - $autor";
    }
}

$homem = new Homem();
$homem->falar("Olá mundo");
echo "<br>";
$homem->falar("Olá mundo", "JUCA");

// IMPORTANTE:
// A assinatura do método em Cliente, tem que ser igual à assinatura do método na class abstrata.
// Contudo, ao adicionar um parâmetro opcional, podemos passar informação adicional para o interior da função.