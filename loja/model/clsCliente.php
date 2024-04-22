<?php

    include_once("clsCidade.php");

    class Cliente{

        public $id;
        public $nome;
        public $nascimento;
        public $salario;
        public $cidade;

        public function __construct($id = NULL , $nome = NULL , $nascimento = NULL , $salario = 1412.00 , 
        $cidade = new Cidade(0, "Outra")){

        }
    
    }