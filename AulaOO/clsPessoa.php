<?php

class Pessoa{

public $id, $nome;
public $altura;
public $cidade;

public function __construct($id, $nome, $altura = 1.0, $cidade = new cidade("Itati") ){
    $this->id = $id;
    $this->nome = $nome;
    $this->altura = $altura;
    $this->cidade = $cidade;

}
}

