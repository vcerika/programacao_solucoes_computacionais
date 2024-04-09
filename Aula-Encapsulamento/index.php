<?php
include_once("clsBicicleta.php");
include_once("clsMountainBike.php");
include_once("clsBicicletaEletrica.php");

$bicicleta = new Bicicleta("Minhabike-001","Caloi","Preto");


echo $bicicleta->getId() . " da marca " .
$bicicleta->getMarca() . "  de cor " . $bicicleta->getCor();

$bicicleta->andar();


$mountainbike = new MountainBike("Mountains", "Sundown", "preta", 1);
 echo "<br>Eu e minha" . $mountainbike->getId() . " da marca " . $mountainbike->getMarca() . 
 " de cor " . $mountainbike->getCor() . " na marcha " . $mountainbike->getMarcha();

 $mountainbike->andar();
 $mountainbike->mudarMarcha(3);
 $mountainbike->frear();


 $bicicletaEletrica = new BicicletaEletrica("Eletrica","Honda","Vermelha", false, "20%");
 echo "<br>Usando a bicicleta " . $bicicletaEletrica->getId();
 $bicicletaEletrica->ligar();
 $bicicletaEletrica->andar();
 $bicicletaEletrica->frear();
 $bicicletaEletrica->carregar("50%");
 $bicicletaEletrica->andar();