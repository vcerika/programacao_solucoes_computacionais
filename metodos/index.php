<?php
//métado que recebe parâmetro e tem retorno

function somar( $x , $y ){
    return $x + $y;
}

function imprimirmeunome(){
   echo "erika vicente correa";
}

//métado que NÃO recebe parâmetro e tem retorno
function getPI(){
    return 3.14;
}

//métado que recebe parâmetro e NÃO tem retorno

function imprimirareacircular( $raio ){
    $area = getPI() * ($raio * $raio);
    echo "<br> área do circulo com raio $raio é: ".$area;
}


imprimirmeunome();

$v1 = $_GET["x"];
$V2 = $_GET["y"];
$raio = $_GET["r"];
$result = somar( $V1 , $V2 );
//$result = somar( 5 , 10 );


echo "<br>resultudo: ".$result;
echo "<hr>valor do PI:" .getPI();
imprimirareacircular( $raio );
imprimirareacircular( 10 );


