<?php
/*

PROPRIEDADE READONLY

*/

class User
{
    public readonly string $usuario;

    public function __construct(string $usuario)
    {
        $this->usuario = $usuario;
    }

    public function alterar(){
        $this->usuario = 'admin'; // Erro
    }
}
$user = new USer('José');
echo $user->usuario; // José

// Agora vamos tentar alterar o valor depois da variável iniciada no contrutor.
// $user->alterar(); // Erro
// $user->usuario = "Juca"; // Erro
