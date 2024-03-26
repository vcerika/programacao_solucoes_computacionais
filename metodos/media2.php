<?php
  //calculo da media 

  $nota1 = $_GET["a1"];
  $nota2 = $_GET["a2"];
  $nota3 = $_GET["a3"];
  $nota4 = $_GET["a4"];

  //declaração de métado
  function media($a1, $a2, $a3, $a4){
    $media = ($a1 + $a2 + $a3 + $a4) / 4;
    echo "medida final: $media";
  }

  function media2($a1, $a2, $a3, $a4){
    $notas = array($a1,$a2,$a3,$a4);
    $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
    echo "media final: $media";
  }

  //chamada do método
  media2 ($a1, $a2, $a3, $a4);
  ?>
