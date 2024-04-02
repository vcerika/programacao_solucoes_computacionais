<?php

include("clsCidade.php");
include_once("clsPessoa.php");

$c1 = new cidade();
$c2 = new cidade ("Porto Alegre");

$p1 = new pessoa( 1 , "João" );
$p2 = new pessoa( 2 ,"Maria" , 1.75);
$p3 = new pessoa( 3 , "José", 1.81 , $c1);
$p4 = new pessoa( 4 , "Júlia", 1.90 , $c2);
$p5 = new pessoa( 5 , "Suzy", 1.70 , new cidade());
$p6 = new pessoa( 6 , "Iracema", 1.68 , new cidade("Cacequi"));


print( "<br>".$p1->nome." - ".$p1->cidade->nome );
print( "<br>".$p2->nome." - ".$p2->cidade->nome );
print( "<br>".$p3->nome." - ".$p3->cidade->nome );
print( "<br>".$p4->nome." - ".$p4->cidade->nome );
print( "<br>".$p5->nome." - ".$p5->cidade->nome );
print( "<br>".$p6->nome." - ".$p6->cidade->nome );



echo "<br>";
include_once("clsCategoria.php");
include_once("clsProduto.php");

$cat1 = new categoria();
$cat2 = new categoria("bebidas");



