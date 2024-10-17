<?php
// IMPEDIR HERANÇA DE CLASSE OU MÉTODO
// Podemos usar a mesma metodologia para os métodos

class Pessoa{
    public function identificar(){
        //---
    }
    final public function falar(){
        //---
    }
}

class Cliente extends Pessoa{

    public function identificar(){
        // nova implementação é possível
    }

    // Se tentarmos criar um método com o mesmo nome, vai dar erro
    // Fatal error: Cannot override final method Pessoa::falar()

    // public function falar(){
    //    Fatal error: Canoot override final method
    // }
}