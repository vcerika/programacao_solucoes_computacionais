<?php

class Produto {
    public $id,
           $nome,
           $preco,
           $qtd,
           $cat;

public function __construct($id, $nome, $preco = 20, $qtd = 0, $cat= new categoria("Diversos")){
    $this->id = $id;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->qtd = $qtd;
    $this->cat = $cat; 

}
}