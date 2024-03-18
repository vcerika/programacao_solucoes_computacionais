<?php
    echo "laço de repetição FORREACH <br>";

$frutas = array("Maçã", "Banana", "Morango", "Uva", "Abacaxi",
 "Pera", "Mamão", "Melão", "Melancia", "Jaca", "Fruta do Conde",
"Jaboticaba", "Caju", "Cupuaçu", "Açaí", "Bergamta", "Laranja");


forreach($frutas as $lista){
    echo $lista . "<br>"; //frutas
}

?>