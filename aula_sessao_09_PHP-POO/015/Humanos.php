<?php
class Humanos{
    private $masculino = [];
    private $feminino = [];
    private $desconhecido = [];

    public function definir($sexo, $nome){
        if(strtoupper($sexo) == 'M'){
            $this->masculino[] = $nome;
        }elseif(strtoupper($sexo) == 'F'){
            $this->feminino[] = $nome;
        }else{
            $this->desconhecido[] = $nome;
        }
    }

    public function get_masculino(){
        return $this->masculino;
    }

    public function get_feminino(){
        return $this->feminino;
    }

    public function get_desconhecido(){
        return $this->desconhecido;
    }
}