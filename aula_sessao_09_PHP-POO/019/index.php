<?php
// CONSTANTES DENTRO DE UMA CLASSE

// Por vezes podes ter a necessidade de definir uma constante que é para ser usada apenas dentro da classe.
// Bom, na realidade isot é possível mas as contantes são por natureza públicas.

class Matematica{
    const VALOR_FIXO = 10;

    // A partir do PHP 7.1 passou a ser possível usar public, private e protected como modificadores de acesso das contantes
    // por exemplo:
    private const VALOR_FIXO_2 = 20;

    public function calcular($numero){
        return $numero + self::VALOR_FIXO;
    }
}

$matematica = new Matematica();
echo $matematica->calcular(20); // 30
echo '<br>';
echo Matematica::VALOR_FIXO; // 10
echo '<br>';
// echo Matematica::VALOR_FIXO_2; // ERRO