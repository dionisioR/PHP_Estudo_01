<?php
/*

PROPRIEDADE READONLY

Já vimos que dentro de uma classe podemos ter as nossas propriedades protegidas.
Mas a partir do PHP 8.1 passou a ser possível a existência de propriedades só de leitura (readonly).

A principal característica das propriedades readonly é o fato de só poderem ser iniciadas dentro da class e depois de iniciadas não podem ter seu valor alterado.

Por exemplo, esta construção simples não é possível.
Definir a propriedade $usuario, apesar de ser pública, gera um erro.
*/

class Usuario
{
    public readonly string $usuario;
}

$usuario = new Usuario();
// $usuario->usuario = 'admin'; // Erro


//--------------------------------------
// Vejamos a forma correta
class User
{
    public readonly string $usuario;

    public function __construct(string $usuario)
    {
        $this->usuario = $usuario;
    }
}
$user = new USer('José');
echo $user->usuario; // José