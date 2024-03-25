<?php

//array associativo
$produtos  = array(
    "el1241" => "celular sansung m23",
    "coz0345" => "coocktop de indução - 110v",
    "mo5423" => "sofá quatro lugares cinza",
    "pan7845" => "jogo de panelas tramontina"
);
echo $produtos["el1241"];

echo"<br><br> DATA COMPLETA COM ARRAY ASSOCIATIVO";

$semana = array(
    "sun" => "domingo",
    "mon" => "segunda",
    "tue" => "terça",
    "wed" => "quarta",
    "tru" => "quinta",
    "fri" => "sexta",
    "sat" => "sabado"
);


$s = date("d");
$d = date("d");
$y = date("y");
$m = date("m");

echo "bom dia!";
echo " hoje é ";
echo $semana[$s];
echo " ". $d . " de ";
echo $mes[$m];
echo " de " . $y . ".";

