<?php

class Veiculo{
    public $id;
    public $marca;
    public $modelo;
    public $velocidade;

    public function __construct($marca, $modelo){
        $this->id = NULL;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

public function ligar(){
    echo "<br>Veículo ligado!";
    echo "<br>Modelo:" .$this->modelo;
}

public function acelerar( $velocidade ) {
    if( $velocidade > 0 ){
        $this ->velocidade += $velocidade;
        //$this->velocidade = $this->velocidade + $velocidade;
    }

    return $this->velocidade;
}

public function frear ( $valor ) {
    if( $valor > 0){
        if( $valor <= $this ->velocidade){
            $this->velocidade -=$valor;
            //$this->velocidade = $this->velocidade - $valor;
        }else{ 
            $this->velocidade = 0;
        }
    }
    return $this->velocidade;
}











}