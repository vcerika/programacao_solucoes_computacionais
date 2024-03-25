<?php

function calcularfatorial( $valor){
    $fatorial = 1 ;
    for ($i = $valor; $i > 1; $i--){
        $fatorial *=$i;
    }
    return $fatorial;
}

if(isset($_GET["f"]))
 $f = $_GET["F"];
else
  $f = 0;

echo "fatorial de $f é:" . calcularfatorial($f);


   