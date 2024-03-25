<?php 

date_default_timezone_set("america/Sao_Paulo");
$semana = array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado");

$meses = array("","janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro",
"outubro", "novembro", "dezembro");



$dia_da_semana = date("w");
$dia = date("d");
$mes = date("n");
$ano = date("y");

echo "Bom dia! hoje é " . $semana[$dia_da_semana] . "," 
. $dia . " de " . $meses[$mes] . " de " . $ano . "."; 

echo "<br> DATA E INGLÊS: <br>";
echo "Good Morning!Today is ". date("d") . ","
. date ("d") . " of " . date ("m") . " of " . date("y") . ".";


