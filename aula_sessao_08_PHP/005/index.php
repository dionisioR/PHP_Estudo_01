<?php
// constantes
// Ao contrário das variáveis, as constantes são imutáveis.
// Uma vez definidas, não podem ser alteradas ou redefinidas.
// As constantes são definidas usando a função define().
// As constantes são úteis para armazenar valores que não devem ser alterados durante a execução do script.
// É uma boa prática definir constantes em letras maiúsculas.

define('NOME', 'RD3W');
define('VERSAO', '1.0.0');
define('APRESENTAR_DADOS', false);

// Apresentar o valor de uma constante
// Para utilizarmos uma constante, basta escrever o seu nome, sem o símbolo do dólar ($).
echo NOME . '<br>';
echo VERSAO . '<br>';
echo APRESENTAR_DADOS . '<hr>';

// Não é possível alterar o valor de uma constante
// NOME = 'RD3W.com.br'; -> teremos um erro
// echo NOME . '<br>';

// -------------------------------------------------
// Também podemos definir as constantes com o uso da função const()
const URL = 'https://www.rd3w.com.br';
echo URL . '<hr>';

/*
Esta forma de definição de constantes é mais recente e mais rápida que a função define().
No entanto, a função define() é mais flexível, pois pode ser usada para definir constantes em tempo de execução.
Com a função const(), as constantes devem ser definidas fora de funções, loops, condicionais, etc.
*/

// -------------------------------------------------
// Constantes pré-definidas [Constantes Mágicas]
// São constantes internas do PHP que são criadas automaticamente.
// Elas são chamadas de constantes mágicas porque são constantes que mudam de valor dependendo do contexto.
// As constantes mágicas são sempre em letras maiúsculas.
// __LINE__ -> Retorna o número da linha atual do script.

echo 'Código executado na linha ' . __LINE__ . '<hr>';

// __FILE__ -> Retorna o caminho completo e o nome do arquivo do script.
echo 'Código executado no arquivo ' . __FILE__ . '<hr>';

// __DIR__ -> Retorna o diretório do arquivo do script.
echo 'Código executado no diretório ' . __DIR__ . '<hr>';

// PHP_VERSION -> Retorna a versão do PHP em execução.
echo 'Este script está rodando na versão do PHP ' . PHP_VERSION . '<hr>';



