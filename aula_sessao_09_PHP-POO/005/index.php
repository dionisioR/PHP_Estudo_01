<?php
// Herança

class Veiculo
{
    public $tipo;

    public function ligar()
    {
        # code...
    }

    public function desigar()
    {
        # code...
    }
}

// A classe veículo agora vai ser usada para criar duas classes
// que vão herdar as suas propriedades e métodos

class Automovel extends Veiculo
{
    // Além das prorpriedades e métodos da classe veículo, vai ainda ter as propriedades específicas desta classe.
    public $porta;
    public $marca;
    public $ano;

}

class Aviao extends Veiculo
{
    // Além das prorpriedades e métodos da classe veículo, vai ainda ter as propriedades específicas desta classe.
    public $altitude_maxima;
    public $autonomia;
    public $construtora;
    public $ano_de_fabricacao;
}

// Então
$automovel = new Automovel();
$automovel->tipo = "Veículo Terrestre";
$automovel->porta = 2;
$automovel->marca = "Ferrari";
$automovel->ano = 2020;
$automovel->ligar();

$aviao = new Aviao();
$aviao->tipo = "Veículo Aéreo";
$aviao->altitude_maxima = 10000;
$aviao->autonomia = 1000;
$aviao->construtora = "Boeing";
$aviao->ano_de_fabricacao = 2020;
$aviao->ligar();
