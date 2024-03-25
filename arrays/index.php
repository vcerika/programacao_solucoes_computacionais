<?php 
//trabalhando com arrays 
$numeros = array(1,2,3,4,5,6,7,8,9);
$num = [1,2,3,4,5,6,7,8,9];
$semana = array("domingo" ,"segunda" ,"terça" ,"querta" , "quinta", "sexta", "sabado"); 
echo $semana[4]; 

echo "<br>";

//funçoes embutidas 
echo count($numeros);
echo "<br>";
echo sizeof($semana);

// Data
date_default_timezone_set("america/Sao_paulo");
$hoje = date("d/m/y - H:i:s");
echo "<br>";
echo "hoje é $hoje";

