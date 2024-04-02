<?php

class carro{
    public $ano;
    public $marca;
    public $modelo;
    public $cor;
    public $cambio;

    public function __construct($ano, $marca, $modelo, $cor, $cambio){
        $this->ano = $ano;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->cambio = $cambio;

    }
  //métodos
  public function status(){

    echo "<h2>Dados do veiculo</h2>";
    echo "<p>ano: " . $this->ano . "</p>";
    echo "<p>marca: " . $this->marca . "</p>";
    echo "<p>modelo: " . $this->modelo . "</p>";
    echo "<p>cor: " . $this->cor . "</p>";
    echo "<p>cambio: " . $this->cambio . "</p>";

  }


  public function vender($valor){

     echo $this->marca . " " . $this->modelo . 
     " vendido por" . $valor; 

  }




}





